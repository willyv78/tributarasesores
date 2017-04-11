/******************************************************************************/
/******************************************************************************/

function TLThemeContactForm(id,recaptchaEnable)
{
	this.id=id;
	this.recaptchaEnable=recaptchaEnable;
	
	this.contactForm=jQuery('#contact_form_'+this.id);
}
	
/******************************************************************************/
	
TLThemeContactForm.prototype.init=function()
{
	var self=this;
	this.contactForm.submit(function()
	{
		if(self.recaptchaEnable==1)
		{
			if(jQuery(this).find('.recaptcha-destination').children('#recaptcha-source').length!=1)
			{
				Recaptcha.reload();
				jQuery(this).find('.recaptcha-destination').append(jQuery('#recaptcha-source'));
				jQuery('#recaptcha-source').css('display','block');
				return(false);
			}
		}
		
		self.submit();
		return(false);
	});
	
	this.contactForm.find('textarea').elastic();
	
	jQuery(window).resize(function() 
	{
		self.resizeContactForm();
	});
	
	self.resizeContactForm();
}

/******************************************************************************/
	
TLThemeContactForm.prototype.resizeContactForm=function()
{	
	var width=this.contactForm.actual('width');
	
	if(parseInt(width)<650) this.contactForm.addClass('responsive');
	else this.contactForm.removeClass('responsive');
}
	
/******************************************************************************/
	
TLThemeContactForm.prototype.submit=function()
{
	this.blockForm('block');
	var data=this.contactForm.serialize()+'&id='+this.id;
	jQuery.ajax(themeOption.config.ajaxurl,{data:data,type:'POST',success:this.submitResponse,dataType:'json',contextObject:this});
}

/******************************************************************************/

TLThemeContactForm.prototype.submitResponse=function(response)
{
	this.contextObject.blockForm('unblock');
	this.contextObject.contactForm.find('.block').qtip('destroy');
	
	var tPosition=
	{
		'contact_form_name'		: {'my':'bottom center','at':'top center'},
		'contact_form_mail'		: {'my':'bottom center','at':'top center'},
		'contact_form_submit'	: {'my':'bottom right','at':'top right'},
		'contact_form_subject'	: {'my':'bottom center','at':'top center'},
		'contact_form_message'	: {'my':'bottom center','at':'top center'}
	};
	
	try
	{
		if(response.error==0)
		{
			var recaptchaSource=this.contextObject.contactForm.find('.recaptcha-destination').children('#recaptcha-source');
			if(recaptchaSource.length==1)
			{
				jQuery('body').append(recaptchaSource);			
				recaptchaSource.css('display','none');
			}
		}
		else Recaptcha.reload();
	}
	catch(e) {}

	if(typeof(response.info)!='undefined')
	{	
		if(response.info.length)
		{	
			for(var key in response.info)
			{
				var id=response.info[key].fieldId;
				var nId=id.replace('_'+this.contextObject.id,'');

				jQuery('#'+response.info[key].fieldId).parents('.block:first').qtip(
				{
						style:      { classes:(response.error==1 ? 'qtip-error' : 'qtip-success')},
						content: 	{ text:response.info[key].message },
						position: 	{ my:tPosition[nId]['my'],at:tPosition[nId]['at'] }
				}).qtip('show');				
			}
		}
	}
	
	if(response.error==0) 
	{
		if(response.reset==1)
		{
			var cId=this.contextObject.id;

			jQuery('#contact_form_'+this.contextObject.id).find('input[type="text"],textarea').val('').blur();
			window.setTimeout(function() { jQuery('#contact_form_submit_'+cId).parents('.block:first').qtip('destroy'); },2000);
		}
	}
}

/******************************************************************************/

TLThemeContactForm.prototype.blockForm=function(action)
{
	if(action=='block') this.contactForm.find('.block').block({message:false,overlayCSS:{opacity:'0.3'}});
	else this.contactForm.find('.block').unblock();	
}

/******************************************************************************/
/******************************************************************************/