
/******************************************************************************/
/******************************************************************************/

jQuery(document).ready(function($) 
{	
	var theme=new TLTheme();
	
	/**************************************************************************/
	/*	Box menu															  */
	/**************************************************************************/
	
	theme.createMenuBoxWidget(themeOption.menuBox);
	
	/**************************************************************************/
	/*	Image preloader														  */
	/**************************************************************************/

	theme.createImage(themeOption.image);
	
	/**************************************************************************/
	/*	Fancybox															  */
	/**************************************************************************/
	
	theme.createVideoFancybox('a.theme-fancybox-video',themeOption.fancyboxVideo,themeOption.fancyboxText);	
	theme.createImageFancybox('a.theme-fancybox-image',themeOption.fancyboxImage,themeOption.fancyboxText);

	/**************************************************************************/
	/*	Links																  */
	/**************************************************************************/
	
	$('a.target-blank').attr('target','_blank');
	
	/**************************************************************************/
	/*	Right click															  */
	/**************************************************************************/
	
	if(themeOption.rightClick.enable==0) theme.disableRightClick();
	if(themeOption.selection.enable==0) theme.disableSelection();
	
	/**************************************************************************/
	/*	Menu																  */
	/**************************************************************************/
	
	theme.createWidgetMenu();
	theme.createSuperfishMenu(themeOption.menuTop);
	
	/**************************************************************************/
	/*	Feature list														  */
	/**************************************************************************/
	
	jQuery(window).resize(function() 
	{
		$('.feature-list-2').each(function() 
		{
			theme.setEqualHeight($(this).children('li'));
		});		
	});
	
	/**************************************************************************/
	/*	Go to top															  */
	/**************************************************************************/
	
	$('.button-go-to-top').bind('click',function(e) 
	{
		e.preventDefault();
		jQuery('html,body').animate({scrollTop:0},500);
	});
	
	/**************************************************************************/
	/*	Notice box countdown												  */
	/**************************************************************************/
	
	theme.setNoticeBoxCountdown();
	
	/**************************************************************************/
	
	var layoutExclude=':not(.responsive-element-0):not(.list):not(.feature-list):not(.testimonial-list):not(.team-list):not(.gallery-item-list)';
	
	theme.responsiveElement('.layout-p-50x50'+layoutExclude,'*',450,'responsive-column-1',true);
	theme.responsiveElement('.layout-p-33x33x33'+layoutExclude,'*',650,'responsive-column-1',true);
	theme.responsiveElement('.layout-p-25x25x25x25'+layoutExclude,'*',650,'responsive-column-1',true);
	theme.responsiveElement('.layout-p-20x20x20x20x20'+layoutExclude,'*',650,'responsive-column-1',true);
	theme.responsiveElement('.layout-p-66x33'+layoutExclude,'*',450,'responsive-column-1',true);
	theme.responsiveElement('.layout-p-33x66'+layoutExclude,'*',450,'responsive-column-1',true);
	
	theme.responsiveElement('ul.feature-list.layout-p-50x50','li',450,'responsive-column-1',true);
	theme.responsiveElement('ul.feature-list.layout-p-33x33x33','li',650,'responsive-column-1',true);
	theme.responsiveElement('ul.feature-list.layout-p-25x25x25x25','li',650,'responsive-column-1',true);
	theme.responsiveElement('ul.feature-list.layout-p-20x20x20x20x20','li',650,'responsive-column-1',true);
	theme.responsiveElement('ul.feature-list.layout-p-66x33','li',450,'responsive-column-1',true);
	theme.responsiveElement('ul.feature-list.layout-p-33x66','li',450,'responsive-column-1',true);
	
	theme.responsiveElement('ul.testimonial-list.layout-p-50x50','li',450,'responsive-column',true);
	theme.responsiveElement('ul.testimonial-list.layout-p-33x33x33','li',650,'responsive-column',true);
	theme.responsiveElement('ul.testimonial-list.layout-p-25x25x25x25','li',650,'responsive-column',true);
	theme.responsiveElement('ul.testimonial-list.layout-p-20x20x20x20x20','li',650,'responsive-column',true);
	theme.responsiveElement('ul.testimonial-list.layout-p-66x33','li',450,'responsive-column',true);
	theme.responsiveElement('ul.testimonial-list.layout-p-33x66','li',450,'responsive-column',true);
	
	theme.responsiveElement('ul.list.layout-p-50x50','li',450,'responsive-column',true);
	theme.responsiveElement('ul.list.layout-p-33x33x33','li',650,'responsive-column',true);
	theme.responsiveElement('ul.list.layout-p-25x25x25x25','li',650,'responsive-column',true);
	theme.responsiveElement('ul.list.layout-p-20x20x20x20x20','li',650,'responsive-column',true);
	theme.responsiveElement('ul.list.layout-p-66x33','li',450,'responsive-column',true);
	theme.responsiveElement('ul.list.layout-p-33x66','li',450,'responsive-column',true);
	
	theme.responsiveElement('div.infopanel',null,750,'responsive',true);
	
	jQuery(window).resize(function()
	{	
		theme.updateCarouselSize();
	});
	
	jQuery(window).load(function()
	{
		theme.updateCarouselSize();
	});
	
	jQuery(window).trigger('resize');
});

/******************************************************************************/
/******************************************************************************/