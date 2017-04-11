/******************************************************************************/
/******************************************************************************/

;(function($,doc,win) 
{
	"use strict";
	
	var themeOptionElement=function(object,option)
	{
		/**********************************************************************/
		
		var $this=$(object);
		
		var $optionDefault=
		{
			init		:	false
		};
		
		var $option=$.extend($optionDefault,option);

		/**********************************************************************/
		
		this.create=function()
		{
			if(!$option.init) return;
			
			this.createDropkick();
			this.createButtonSet();
			this.createColorPicker();
			this.createInfieldLabel();

			$this.css({'display':'block'})
		};

		/**********************************************************************/
		
		this.createColorPicker=function()
		{
			$this.find('.to-color-picker').each(function() 
			{
				var object=$(this);
				object.ColorPicker(
				{
					onChange:function(hsb,hex,rgb) 
					{
						object.val(hex.toUpperCase());
						object.parent().children('.to-color-picker-sample').css('background-color','#'+hex);	
					},
					onSubmit:function(hsb,hex,rgb,el)
					{
						$(el).val(hex);
						$(el).ColorPickerHide();
					},
					onBeforeShow:function()
					{
						$(this).ColorPickerSetColor(this.value);
					}
				});

				var colorSample=$(document.createElement('span'));

				colorSample.attr('class','to-color-picker-sample');
				colorSample.css({'background-color':'#'+object.val()});

				object.parent().append(colorSample);

				object.change(function() 
				{
					var value=$(this).val();
					var object=$(this).parent().children('.to-color-picker-sample');
					
					if(/^[0-9A-Fa-f]{6}$/i.test(value)) object.css('background-color','#'+value);	
					else object.css('background-color','#FFFFFF');	
				});
			})
		};
		
		/**********************************************************************/
		
		this.createInfieldLabel=function()
		{
			$this.find('.to-infield').inFieldLabels();
		};
		
		/**********************************************************************/
		
		this.createDropkick=function()
		{
			$this.find('select:not(.to-dropkick-disable)').dropkick();
		};
		
		/**********************************************************************/
		
		this.createButtonSet=function()
		{
			var buttonset=$this.find('.to-radio-button,.to-checkbox-button');
			if(buttonset.length) buttonset.buttonset();			
		};
		
		/**********************************************************************/
		
		this.createSlider=function(selector,min,max,value,step)
		{
			$this.find(selector).slider(
			{
				min		:	min,
				max		:	max,
				range	:	'min',
				value	:	value,
				step	:	(typeof(step)=='undefined' ? 1 : step),
				slide	:	function(event,ui) 
				{
					$(this).nextAll('input').val(ui.value);
				},
				create	:	function()
				{
					$(this).nextAll('input').val($(this).slider('value'));
				}
			});		
		};
		
		/**********************************************************************/
		
		this.bindBrowseMedia=function(selector)
		{
			$this.find(selector).bind('click',function()
			{
				var self=$(this);
				window.send_to_editor=function(html) 
				{
					var url=$(html).attr('href');
					self.prev().val(url);
					tb_remove();
				}

				tb_show('','media-upload.php?amp;type=image&amp;TB_iframe=true');
				return false;
			});
		};

		/**********************************************************************/

		this.createGoogleFontAutocomplete=function(selector)
		{
			$this.find(selector).autocomplete(
			{
				appendTo	:	$('.to:first'),
				source		:	function(request,response) 
				{
					$.ajax(
					{
						url			:	ajaxurl,
						dataType	:	'json',
						data		: 
						{
							query	:	request.term,
							action	:	'theme_admin_google_font_dictionary'
						},
						success		:	function(data) 
						{
							response($.map(data,function(item) 
							{
								return(item);
							}));
						}
					});
				},
				minLength	:	2
			});
		};
		
		/**********************************************************************/
	};
	
	/**************************************************************************/
	
	$.fn.themeOptionElement=function(option) 
	{
		var element=new themeOptionElement(this,option);
		element.create();
		
		return(element);
	};
	
	/**************************************************************************/

})(jQuery,document,window);

/******************************************************************************/
/******************************************************************************/