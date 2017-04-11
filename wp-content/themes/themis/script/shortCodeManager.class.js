/******************************************************************************/
/******************************************************************************/

function TLThemeShortCodeManager(themeContext,shortcode)
{	
	this.mode='enter';
	this.shortcode=shortcode;
	this.themeContext=themeContext;
};	
	
/******************************************************************************/
	
TLThemeShortCodeManager.prototype.register=function()
{	
	tinymce.PluginManager.add('shortcode_manager',function(editor,url) 
	{
		editor.addButton('shortcode_manager_button', 
		{
			title		:	'Shortcode manager',
			image		:	url+'/../media/image/admin/shortcodes.png',
			onclick		:	function() 
			{
				var shortcode=jQuery.base64.encode(encodeURIComponent(parent.tinymce.activeEditor.selection.getContent({format:'text'})));
				tb_show('',url+'/../template/admin/shortcode_manager.php?shortcode='+shortcode+'&TB_iframe=true&width=100&height=200');
				jQuery('#TB_window').addClass('shortcode-manager-window');
				return(false); 
			}
		});
	});
};

/******************************************************************************/

TLThemeShortCodeManager.prototype.create=function()
{		
	var self=this;
	
	jQuery('input,select').keypress(function(e) 
	{
		if(e.which==13) 
		{
			self.createShortCode();
		}		
	});
	
	jQuery('#shortcode-manager-create-shortcode').bind('click',function() 
	{
		self.createShortCode();	
	});
	
	jQuery('#shortcode-manager-select-shortcode').bind('change',function()
	{
		jQuery('.shortcode-panel').removeClass('shortcode-panel-open');
		jQuery('#shortcode-panel-'+jQuery(this).val()).addClass('shortcode-panel-open');
	});	

	jQuery(window).bind('ready',function() 
	{
		self.calculateDimension();
	});
	
	jQuery(window).bind('resize',function() 
	{
		self.calculateDimension();
	});	
	
	this.calculateDimensionTime(this);
	
	this.setShortCode(this.shortcode);
	
	jQuery('.to').themeOptionElement({init:true});
};

/******************************************************************************/

TLThemeShortCodeManager.prototype.setShortCode=function(data)
{
	if(typeof(data.shortcode)=='undefined') return;
	
	if(jQuery('#shortcode-manager-select-shortcode').children('option[value="'+data.shortcode+'"]').length==1)
	{
		this.mode='replace';
		
		jQuery('#shortcode-manager-select-shortcode').val(data.shortcode);
		
		jQuery('#shortcode-manager-select-shortcode').prop('disabled','disabled');
		
		jQuery('#shortcode-panel-'+data.shortcode).find('input[name="'+data.shortcode+'-content"]').parents('li').css('display','none');
		
		if(typeof(data.argument)=='undefined') return;
		
		for(var i in data.argument)
		{
			var field=jQuery(':input[name="'+data.shortcode+'-'+i+'"]');
			if(field.length==0) continue;

			switch(field.prop('tagName').toLowerCase())
			{
				case 'select':
					
					field.children('option[value="'+data.argument[i]+'"]').attr('selected','selected');
				
				break
				case 'input':
					
					switch(field.attr('type'))
					{
						case 'text':
							
							field.val(data.argument[i]);
						
						break;
						
						case 'radio':
						
							field.each(function() 
							{
								if(jQuery(this).val()==data.argument[i])
								{
									jQuery(this).attr('checked','checked');
									return;
								}
							});
							
						break;
						
						case 'checkbox':
							
							var argumentArray=data.argument[i].split(',');
							
							field.each(function() 
							{
								for(var i in argumentArray)
								{
									if(argumentArray[i]==jQuery(this).val())
										jQuery(this).attr('checked','checked');
								}
							});
							
						break;
						
					}
					
				break;
				
				case 'textarea':
							
					field.val(data.argument[i]);
					
				break;
			}
		}
		
		jQuery('#shortcode-manager-select-shortcode').trigger('change');
	}
}

/******************************************************************************/

TLThemeShortCodeManager.prototype.calculateDimension=function()
{
	var height=window.parent.jQuery('#TB_iframeContent').height();
	
	var headerHeight=71;
	var footerHeight=77;
	
	jQuery('.shortcode-manager-content').css('margin-top',headerHeight);
	jQuery('.shortcode-manager-content').height(height-headerHeight-footerHeight);
};

/******************************************************************************/

TLThemeShortCodeManager.prototype.calculateDimensionTime=function(self)
{
	window.setTimeout(function() { self.calculateDimension(); self.calculateDimensionTime(self); },1000);
};

/******************************************************************************/

TLThemeShortCodeManager.prototype.createShortCode=function()
{
	var shortCode=jQuery('#shortcode-manager-select-shortcode').val();
	if(shortCode=='shortcode') return;

	var section=jQuery('#shortcode-panel-'+shortCode);
	
	var generateContent=this.mode=='replace' ? false : true;

	section.find('select,input[type="radio"],input[type="checkbox"]').each(function() 
	{
		if(jQuery(this).val()==-1)
			jQuery(this).addClass('no-process');
	});
	
	var serialize=section.find(':input').not('.no-process').serializeArray();

	var text='';
	var param='';
	var content='';
	
	var data=[];
	
	for(var index in serialize)
	{
		var value=jQuery.trim(serialize[index].value);
		var name=serialize[index].name.substring(shortCode.length+1);		
		
		if(value.length && name.length)
		{
			if(!data.hasOwnProperty(name)) data[name]=value;
			else data[name]+=','+value;	
		}
	}
	
	for(index in data)
	{
		if(index=='content')
		{
			if(generateContent) content=data[index];
			else content='';
			
			continue;
		}
		
		param+=' '+index+'="'+data[index]+'"';
	}

	text='['+this.themeContext+'_'+shortCode+param+']';

	if(content.length) text+=content+'[/'+this.themeContext+'_'+shortCode+']';
	
	parent.tinyMCE.activeEditor.selection.setContent(text);
	parent.tb_remove();
};

/******************************************************************************/