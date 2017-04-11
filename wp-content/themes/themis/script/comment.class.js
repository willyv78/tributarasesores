/******************************************************************************/
/******************************************************************************/

function TLThemeComment(recaptchaEnable)
{
	this.respond=jQuery('#respond');
	this.comment=jQuery('#comments');
	this.commentForm=jQuery('#comment-form');
	
	this.commentFormCancelReply=jQuery('#cancel-comment-reply-link');
	
	this.recaptchaEnable=recaptchaEnable;
}
	
/******************************************************************************/
	
TLThemeComment.prototype.init=function(cpage)
{
	var self=this;
	
	this.commentForm.submit(function()
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
		
		self.addComment();
		return(false);
	});
	
	var cPageInput=jQuery(document.createElement('input')).attr('type','hidden').attr('name','cpage').attr('id','cpage').val(cpage);
	
	var formSubmit=this.commentForm.find('p.form-submit');
	
	formSubmit.append(cPageInput).addClass('clear-fix');
	
	formSubmit.html('<span class="block field-box field-box-button float-right">'+formSubmit.html()+'</span>');
	
	this.commentFormCpage=jQuery('#cpage');

	this.commentFormPostId=jQuery('#comment_post_ID');
	this.commentFormParentCommentId=jQuery('#comment_parent');

	this.bindEvent();

	jQuery(window).bind('hashchange',function()
	{
		if(location.hash.substr(1,6)=='cpage-')
		{
			var data={};
			
			data.cpage=parseInt(location.hash.substr(7));
			data.comment_form_post_id=parseInt(self.commentFormPostId.val());
			
			if(data.cpage==self.commentFormCpage.val()) return;
			
			data.action='theme_public_comment_get';
			
			jQuery.ajax(
			{
				url				:	themeOption.config.ajaxurl,
				data			:	data,
				type			:	'GET',
				success			:	self.getCommentResponse,
				dataType		:	'json',
				contextObject	:	self
			});
		}
	});
	
	this.commentForm.find('textarea').elastic();
	
	jQuery(window).trigger('hashchange');
}

/******************************************************************************/

TLThemeComment.prototype.getCommentResponse=function(response)
{
	this.contextObject.comment.html(response.html);
	this.contextObject.bindEvent();
	
	this.contextObject.commentFormCpage.val(response.cpage);
	
	jQuery.scrollTo(this.contextObject.comment,400,{easing:'easeOutQuint'});
}

/******************************************************************************/

TLThemeComment.prototype.bindEvent=function()
{
	var self=this;
	
	jQuery('.comment-reply').bind('click',function(e)
	{
		e.preventDefault();

		jQuery.scrollTo(self.respond,400,{easing:'easeOutQuint'});

		self.commentFormCancelReply.css('display','block');
		self.commentFormParentCommentId.val(jQuery(this).attr('href').substr(9));
	});
	
	jQuery('.comment-in-reply').bind('click',function(e) 
	{
		e.preventDefault();
		jQuery.scrollTo(jQuery(jQuery(this).attr('href')),400,{easing:'easeOutQuint'});
	});
	
	self.commentFormCancelReply.click(function(e) 
	{
		e.preventDefault();

		self.commentFormParentCommentId.val(0);
		
		jQuery(this).css('display','none');
		jQuery.scrollTo(self.comment,400,{easing:'easeOutQuint'});
	});	
}

/******************************************************************************/
	
TLThemeComment.prototype.addComment=function()
{
	this.blockForm('block');
	var data=this.commentForm.serialize();
	
	jQuery.ajax(
	{
		url				:	themeOption.config.ajaxurl,
		data			:	data,
		type			:	'POST',
		success			:	this.addCommentResponse,
		dataType		:	'json',
		contextObject	:	this
	});
}

/******************************************************************************/

TLThemeComment.prototype.addCommentResponse=function(response)
{
	this.contextObject.blockForm('unblock');
	this.contextObject.commentForm.find('.block').qtip('destroy');
	
	var tPosition=
	{
		'url'		: {'my':'bottom right','at':'top right'},
		'email'		: {'my':'bottom right','at':'top right'},
		'author'	: {'my':'bottom right','at':'top right'},
		'submit'	: {'my':'bottom right','at':'top right'},
		'comment'	: {'my':'bottom right','at':'top right'}
	};
	
	if(response.error==0) 
	{
		this.contextObject.comment.html(response.html);
	}
	
	try
	{
		if(response.error==0)
		{
			var recaptchaSource=this.contextObject.commentForm.find('.recaptcha-destination').children('#recaptcha-source');
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

				jQuery('#'+response.info[key].fieldId).parents('.block:first').qtip(
				{
						style:      {classes:(response.error==1 ? 'qtip-error' : 'qtip-success')},
						content: 	{text:response.info[key].message},
						position: 	{my:tPosition[id]['my'],at:tPosition[id]['at']}
				}).qtip('show');				
			}
		}
	}
	
	if(response.error==0) 
	{
		this.contextObject.commentFormParentCommentId.val(0);
		this.contextObject.commentFormCancelReply.css('display','none');
		
		jQuery.scrollTo('#comment-'+response.commentId,400,{easing:'easeOutQuint'});
		jQuery('#author,#email,#url,#comment').val('').blur();
		
		window.setTimeout(function() { jQuery('#submit').parents('.block:first').qtip('destroy'); },2000);
		
		this.contextObject.bindEvent();

		if(response.changeURL.length!=0) location.href=response.changeURL;
	}	
}

/******************************************************************************/

TLThemeComment.prototype.blockForm=function(action)
{
	if(action=='block') this.commentForm.find('.block').block({message:false,overlayCSS:{opacity:'0.3'}});
	else this.commentForm.find('.block').unblock();	
}

/******************************************************************************/
/******************************************************************************/