
/******************************************************************************/
/******************************************************************************/

function TLTheme()
{
	$this=this;
};
	
/******************************************************************************/

TLTheme.prototype.createTwitterCarousel=function(selector)
{
	var hashExp=/(^|\s)#(\w+)/g;
	var userExp=/(^|\s)@(\w+)/g;
	
	var list=jQuery(selector+' li');
	
	list.linkify();

	list.each(function() 
	{
		var paragraph=jQuery(this).children('p');
		
		paragraph.html(paragraph.html().replace(userExp,' <a href="http://www.twitter.com/$2" title="@$2">$2</a>'));
		paragraph.html(paragraph.html().replace(hashExp,' <a href="http://www.twitter.com/search?q=#$2&src=hash">#$2</a>'));
	});

	jQuery(selector+'>ul').carouFredSel(
	{
		circular		:	true,
		direction		:	'up',
		items: 
		{
			height		:	'variable',
			visible		:	3,
			minimum		:	3
		},
		scroll: 
		{
			items		:	1,
			duration	:	750
		}
	},{debug:false});	

	list.find('a').attr('target','_blank');
};

/******************************************************************************/
	
TLTheme.prototype.getRandom=function(min,max)
{
	return((Math.floor(Math.random()*(max-min)))+min);
};
	
/******************************************************************************/
	
TLTheme.prototype.createImageFancybox=function(selector,option,text)
{
	var helpers={title:{type:'inside'}};

	if(option.helper_button_enable)
	{
		helpers.buttons={skipSingle:true,tpl:'<div id="fancybox-buttons"><ul><li><a class="btnPrev" title="'+text.previous+'" href="javascript:;"></a></li><li><a class="btnPlay" title="'+text.start_slideshow+'" href="javascript:;"></a></li><li><a class="btnNext" title="'+text.next+'" href="javascript:;"></a></li><li><a class="btnToggle" title="'+text.toggle+'" href="javascript:;"></a></li><li><a class="btnClose" title="'+text.close+'" href="javascript:jQuery.fancybox.close();"></a></li></ul></div>'};
	}
	
	jQuery(selector).fancybox(
	{
		type					:	'image',
		margin					:	parseInt(option.margin),
		padding					:	parseInt(option.padding),
		minWidth				:	parseInt(option.min_width),
		minHeight				:	parseInt(option.min_height),
		maxWidth				:	parseInt(option.max_width),
		maxHeight				:	parseInt(option.max_height),
		autoResize				:	parseInt(option.autoresize)==1 ? true : false,
		autoCenter				:	parseInt(option.autocenter)==1 ? true : false,
		fitToView				:	parseInt(option.fittoview)==1 ? true : false,
		arrows					:	parseInt(option.arrow)==1 ? true : false,
		closeBtn				:	parseInt(option.close_button)==1 ? true : false,
		closeClick				:	parseInt(option.close_click)==1 ? true : false,
		nextClick				:	parseInt(option.next_click)==1 ? true : false,
		mouseWheel				:	parseInt(option.mouse_wheel)==1 ? true : false,
		autoPlay				:	parseInt(option.autoplay)==1 ? true : false,
		playSpeed				:	parseInt(option.playspeed),
		loop					:	parseInt(option.loop)==1 ? true : false,
		openEffect				:	option.animation_effect_open,
		closeEffect				:	option.animation_effect_close,
		nextEffect				:	option.animation_effect_nex,
		prevEffect				:	option.animation_effect_previous,
		openSpeed				:	option.speed_open,
		closeSpeed				:	option.speed_close,
		nextSpeed				:	option.speed_next,
		prevSpeed				:	option.speed_previous,		
		openEasing				:	option.easing_open,
		closeEasing				:	option.easing_close,
		nextEasing				:	option.easing_next,
		prevEasing				:	option.easing_previous,		
		beforeShow				:	function()
		{
			this.title=jQuery(this.element).parent().next('.theme-image-description').text();
		},
		helpers					:	helpers,
		tpl						:
		{
			error				:	'<p class="fancybox-error">'+text.error+'</p>',
			closeBtn			:	'<a title="'+text.close+'" class="fancybox-item fancybox-close" href="javascript:;"></a>',
			next				:	'<a title="'+text.next+'" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
			prev				:	'<a title="'+text.previous+'" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
		}
	});
};
	
/******************************************************************************/
	
TLTheme.prototype.createVideoFancybox=function(selector,option,text)
{	
	var helpers={title:{type:'inside'}};
	
	helpers.media={};
	
	jQuery(selector).fancybox(
	{
		margin					:	parseInt(option.margin),
		padding					:	parseInt(option.padding),
		minWidth				:	parseInt(option.min_width),
		minHeight				:	parseInt(option.min_height),
		maxWidth				:	parseInt(option.max_width),
		maxHeight				:	parseInt(option.max_height),
		autoResize				:	parseInt(option.autoresize)==1 ? true : false,
		autoCenter				:	parseInt(option.autocenter)==1 ? true : false,
		fitToView				:	parseInt(option.fittoview)==1 ? true : false,
		closeBtn				:	parseInt(option.close_button)==1 ? true : false,
		openEffect				:	'none',
		closeEffect				:	'none',
		beforeShow				:	function()
		{
			this.title=jQuery(this.element).parent().next('.theme-image-description').text();
		},
		helpers					:	helpers,
		tpl						:
		{
			error				:	'<p class="fancybox-error">'+text.error+'</p>',
			closeBtn			:	'<a title="'+text.close+'" class="fancybox-item fancybox-close" href="javascript:;"></a>'
		}
	});
};
	
/******************************************************************************/
	
TLTheme.prototype.disableRightClick=function()
{
	document.oncontextmenu=function() {return false;};
	jQuery(document).mousedown(function(e)
	{ 
		if(e.button==2) return false; 
		return true; 
	});
};

/******************************************************************************/

TLTheme.prototype.disableSelection=function()
{
	return(jQuery('body').attr('unselectable','on').css('user-select','none').on('selectstart',false));
};
	
/******************************************************************************/
	
TLTheme.prototype.createGoogleMap=function(id,option)
{		
	try
	{
		var object=jQuery('#'+id);
		object.css({width:option.width+'%',height:option.height+'px'});			

		var coordinate=new google.maps.LatLng(option.coordinate_lat,option.coordinate_lng);

		var mapOptions= 
		{
			zoom						:	parseInt(option.zoom_level),
			center						:	coordinate,
			mapTypeId					:	google.maps.MapTypeId[option.map_type_id],
			mapTypeControl				:	parseInt(option.map_type_control_enable),
			mapTypeControlOptions		: 
			{
				style					:	google.maps.MapTypeControlStyle[option.map_type_control_style],
				position				:	google.maps.ControlPosition[option.map_type_control_position]
			},
			panControl					:	parseInt(option.pan_control_enable),
			panControlOptions			: 
			{
				position				:	google.maps.ControlPosition[option.pan_control_position]
			},
			zoomControl					:	parseInt(option.zoom_control_enable),
			zoomControlOptions			: 
			{
				style					:	google.maps.ZoomControlStyle[option.zoom_style],
				position				:	google.maps.ControlPosition[option.zoom_position]
			},
			scaleControl				:	parseInt(option.scale_control_enable),
			scaleControlOptions			: 
			{
				position				:	google.maps.ControlPosition[option.scale_control_position]
			},
			streetViewControl			:	parseInt(option.street_view_enable),
			streetViewControlOptions	: 
			{
				position				:	google.maps.ControlPosition[option.street_view_position]
			}				
		}

		var googleMap=new google.maps.Map(document.getElementById(id),mapOptions);

		if((option.coordinate_marker_lat.length!=0) && (option.coordinate_marker_lng.length!=0))
		{
			coordinate=new google.maps.LatLng(option.coordinate_marker_lat,option.coordinate_marker_lng);

			var markerOptions=
			{
				map			:	googleMap,
				position	:	coordinate,
				icon		:	option.theme_url+'media/image/public/icon_map_pointer.png'
			}

			new google.maps.Marker(markerOptions);

			jQuery(window).resize(function() 
			{
				var currCenter=googleMap.getCenter();

				google.maps.event.trigger(googleMap,'resize');
				googleMap.setCenter(currCenter);
			});
		}
	}
	catch(e) {}		
};
	
/******************************************************************************/

TLTheme.prototype.createAccordion=function(selector,option)
{
	jQuery(selector).children('div').each(function() 
	{
		jQuery(this).css('height',jQuery(this).height());
	});
	
	jQuery(selector).accordion(
	{
		icons			:	'',
		active			:	(option.active=='false' ? false : parseInt(option.active)),
		animate			:	'easeOutExpo',
		heightStyle		:	'content',
		collapsible		:	true,
		activate		:	function(event,ui)
		{
			try
			{
				var panel=jQuery(ui.newHeader).parent('li');
				jQuery.scrollTo(panel,500,{offset:$this.getScrollOffset(),easing:'easeOutQuint'});
				
				jQuery(window).trigger('resize');
			}
			catch(e) {}
		}
	});
};

/******************************************************************************/

TLTheme.prototype.createTab=function(selector,option)
{
	jQuery(selector).tabs(
	{
		active			:	parseInt(option.active),
		activate		:	function(event,ui)
		{
			try
			{
				jQuery(window).trigger('resize');
			}
			catch(e) {}
		}
	});
};

/******************************************************************************/

TLTheme.prototype.getScrollOffset=function()
{
	var menu=jQuery('.menu-wrapper-sf');
	
	if(menu.children('ul.sf-menu').css('display')=='none')
		menu=jQuery('.menu-wrapper-dp');

	return({top:-2*menu.actual('height')});
};

/******************************************************************************/

TLTheme.prototype.resizeMenuBox=function(menuBox,visible)
{
	var menuBoxParent=menuBox.parent('.menu-box-wrapper');
	var menuBoxParentWidth=menuBoxParent.actual('width');
	
	var menuBoxList=menuBox.find('ul');
	var menuBoxListElement=menuBoxList.children('li');
	
	var menuBoxListElementWidth=menuBoxListElement.actual('outerWidth',{includeMargin:true});
	var menuBoxListElementHeight=menuBoxListElement.actual('outerHeight',{includeMargin:true});
	
	var count=Math.floor(menuBoxParentWidth/menuBoxListElementWidth);
	if(count==0) count=1;
	
	count=count>visible ? visible : count;
	
	menuBox.width(menuBoxListElementWidth*count);
	menuBox.height(menuBoxListElementHeight);
	
	if(count<menuBoxListElement.length)
		menuBoxList.trigger('configuration',['items.minimum',count]);
	else menuBoxList.trigger('configuration',['items.minimum',count+1]);
	
	return(count);
};

/******************************************************************************/

TLTheme.prototype.createMenuBox=function(id,option)
{	
	var list=jQuery('#'+id+'>div.menu-box>ul');
	var listElement=list.children('li');
	
	var style=
	{
		icon		:	{'top':parseInt(option.item_icon_position)+'%'},
		header		:	{'top':parseInt(option.item_header_position)+'%'},
		navigation	:	{'top':parseInt(option.item_navigation_arrow_position)+'%'},
		padding		:	{'margin-left':parseInt(option.item_dimension_padding),'margin-right':parseInt(option.item_dimension_padding)},
		dimension	:	{'width':parseInt(option.item_dimension_width),'height':parseInt(option.item_dimension_height)}
	};
	
	list.find('li').css(style.dimension);
	list.find('li a').css(style.dimension);
	list.find('li a span.menu-box-overlay').css(style.dimension);
	list.find('li a span.menu-box-overlay').css('top','60px');
	list.find('li a span.menu-box-overlay span').css(style.dimension);

	list.find('li').css(style.padding);
	
	list.find('li a').css('margin-top',(-1*list.find('li').actual('height')));
	
	list.find('li a span.menu-box-icon').css(style.icon);
	list.find('li a span.menu-box-headers').css(style.header);
	
	jQuery('#'+id).find('a.navigation-prev,a.navigation-next').css(style.navigation);
	
	var count=$this.resizeMenuBox(list.parents('.menu-box'),option.item_visible);

	jQuery(window).resize(function() 
	{
		$this.resizeMenuBox(list.parents('.menu-box'),option.item_visible);
	});

	var j=0;
	var linkCount=listElement.children('a').length;
	
	if(themeOption.is_rtl)
	{
		var margin=-1*(linkCount-count)*(parseInt(option.item_dimension_width)+parseInt(option.item_dimension_padding)+parseInt(option.item_dimension_padding));	
		list.css({'margin-left':margin});
	}
	
	listElement.children('a').each(function() 
	{
		var i=0;
		var imageCount=jQuery(this).find('img').length;

		jQuery(this).find('img').each(function() 
		{
			jQuery(this).attr('src',jQuery(this).attr('src') + '?i='+$this.getRandom(1,100000));
			jQuery(this).bind('load',function() 
			{ 
				if((++i)==imageCount)
				{
					jQuery(this).parents('a:first').animate({'margin-top':0},$this.getRandom(100,1000),function() 
					{
						if((++j)==linkCount)
						{
							if(themeOption.is_rtl)
								list.css({'margin-left':0});
							
							list.carouFredSel(
							{
								auto			:	parseInt(option.autoplay)==1 ? true : false,
								circular		:	parseInt(option.circular)==1 ? true : false,
								infinite		:	parseInt(option.infinite)==1 ? true : false,
								direction		:	option.direction,
								mousewheel		:	true,
								items: 
								{
									start		:	themeOption.is_rtl ? (linkCount-parseInt(option.item_visible)-parseInt(option.item_start)) : parseInt(option.item_start),
									visible		:	parseInt(option.item_visible)
								},
								scroll: 
								{
									items		:	parseInt(option.scroll_item),
									fx			:	option.scroll_effect,
									easing		:	option.scroll_easing,
									duration	:	parseInt(option.scroll_duration)
								},
								next			:
								{
									button		:	jQuery(this).parents('div.menu-box-wrapper').find('a.navigation-next')
								},
								prev			:
								{
									button		:	jQuery(this).parents('div.menu-box-wrapper').find('a.navigation-prev')
								},
								onCreate		:	function() 
								{ 
									$this.resizeMenuBox(list.parents('.menu-box'),option.item_visible);
								}
							},{debug:false});	

							list.children('li').hover
							(
								function() 
								{
									jQuery(this).find('.menu-box-overlay').stop().animate({top:'90px'},250);
									jQuery(this).find('.menu-box-overlay span').stop().animate({opacity:1},250);

									jQuery(this).find('img.menu-box-icon').stop().animate({opacity:0}); 
									jQuery(this).find('img.menu-box-icon-hover').stop().animate({opacity:1}); 
									jQuery(this).find('.menu-box-image').stop().animate({top:'0px'},500); 
								},
								function()
								{
									jQuery(this).find('.menu-box-overlay').stop().animate({top:'60px'},250);
									jQuery(this).find('.menu-box-overlay span').stop().animate({opacity:0},250);

									jQuery(this).find('img.menu-box-icon').stop().animate({opacity:1}); 
									jQuery(this).find('img.menu-box-icon-hover').stop().animate({opacity:0}); 
									jQuery(this).find('.menu-box-image').stop().animate({top:'-30px'},500); 
								}
							);		
						}
					});
				}
			});
		})
	});
};

/******************************************************************************/

TLTheme.prototype.createMenuBoxWidget=function(option)
{
	var menuBoxWidget=jQuery('.menu-box-widget');
	
	menuBoxWidget.children('li').hover
	(
		function() 
		{
			jQuery(this).find('img.menu-box-widget-icon').stop().animate({opacity:0}); 
			jQuery(this).find('img.menu-box-widget-icon-hover').stop().animate({opacity:1}); 
		},
		function()
		{
			jQuery(this).find('img.menu-box-widget-icon').stop().animate({opacity:1}); 
			jQuery(this).find('img.menu-box-widget-icon-hover').stop().animate({opacity:0}); 
		}
	);	

	menuBoxWidget.carouFredSel(
	{
		swipe			:	true,
		auto			:	false,
		circular		:	false,
		infinite		:	false,
		direction		:	'up',
		items: 
		{
			start		:	0,
			visible		:	5,
			minimum		:	5
		},
		scroll: 
		{
			items		:	1
		},
		next			:
		{
			button		:	function() { return(jQuery(this).parents('div.menu-box-widget-wrapper').find('a.navigation-up')); }
		},
		prev			:
		{
			button		:	function() { return(jQuery(this).parents('div.menu-box-widget-wrapper').find('a.navigation-down')); }
		},
		onCreate		:	function() 
		{ 
	
		}
	},{debug:false});	
};

/******************************************************************************/

TLTheme.prototype.createTestimonialCarousel=function(id)
{
	jQuery('#testimonial-carousel-'+id).carouFredSel(
	{
		auto			:	false,
		circular		:	true,
		infinite		:	false,
		direction		:	'up',
		items: 
		{
			start		:	0,
			visible		:	1,
			minimum		:	1,
			height		:	'variable'
		},
		scroll: 
		{
			items		:	1,
			onBefore	:	function()
			{
			
			}
		},
		pagination		:
		{
			onAfter		:	function()
			{
				jQuery.scrollTo(jQuery('#testimonial-carousel-'+id),200,{offset:$this.getScrollOffset(),easing:'easeOutQuint'});
			}
		},
		onCreate		:	function() 
		{ 			
			jQuery(this).trigger('configuration',['pagination.container',jQuery(this).parents('div.testimonial-carousel-wrapper').find('div.testimonial-carousel-pagination')]);
		}
	},{debug:false});	
};

/******************************************************************************/

TLTheme.prototype.createTestimonialWidgetCarousel=function(id)
{
	jQuery('#testimonial-carousel-widget-'+id).carouFredSel(
	{
		auto				:	true,
		circular			:	true,
		infinite			:	false,
		direction			:	'up',
		items: 
		{
			start			:	0,
			visible			:	1,
			minimum			:	1,
			height			:	'variable'
		},
		scroll: 
		{
			items			:	1,
			duration		:	1000,
			pauseOnHover	:	true
		}
	},{debug:false});		
};

/******************************************************************************/

TLTheme.prototype.createImage=function(optionImage)
{
	jQuery('.preloader img').each(function() 
	{
		jQuery(this).css('width', '100%');
		jQuery(this).attr('src',jQuery(this).attr('src')+'?i='+$this.getRandom(1,100000));
		jQuery(this).bind('load',function() 
		{ 
			var height=parseInt(jQuery(this).actual('height'));

			jQuery(this).parent('.preloader').animate({height:height},500,function() 
			{
				jQuery(this).css({'height':'auto','display':'block','background-image':'none'});

				var pag_div = jQuery('div .page-header h1').html();
				if(pag_div === 'Equipo'){
					jQuery('.gallery-bottom-box h3').each(function(){
						jQuery(this).css('font-size', '17px');
					});
					jQuery('.gallery-bottom-box > h5').each(function(){
						// var titulo_eq = jQuery(this).html();
						// if((titulo_eq === 'Abogada')||(titulo_eq === 'Abogado')){
						// 	jQuery(this).parent("div").parent("div").parent("li").css({
						// 		'background-color' : '#5D514B',
						// 		'color' : '#CBBAAF'
						// 	});
						// }
						jQuery(this).parent("div").parent("div").parent("li").css({
							'background-color' : '#5D514B',
							'color' : '#CBBAAF'
						});						
					});
				}

				jQuery(this).children('img').animate({opacity:1},1000,function() 
				{					
					jQuery(this).parent().removeClass('preloader');
					jQuery(this).unbind('load');

					jQuery(this).css({'display':'block'});

					if(optionImage.hover_effect==1) return;

					var speed=300;
					if(pag_div !== 'Equipo'){jQuery(this).parent().append('<span></span>');}
				}); 
			});
		});
	});
};

/******************************************************************************/

TLTheme.prototype.preloaderWait=function(object,callbackFunction)
{
	var preloaderClock=window.setTimeout(function() 
	{
		if(object.find('.preloader').length)
			$this.preloaderWait(object,callbackFunction);
		else
		{
			window.clearTimeout(preloaderClock);
			callbackFunction();
		}
	},10);
};

/******************************************************************************/

TLTheme.prototype.createNivoSlider=function(id,option)
{
	jQuery('#'+id).nivoSlider(
	{
		effect				: option.effect.join(','),
        slices				: parseInt(option.slice_number),
        boxCols				: parseInt(option.col_number),
        boxRows				: parseInt(option.row_number),
        animSpeed			: parseInt(option.transition_speed),
        pauseTime			: parseInt(option.pause_time), 
        startSlide			: parseInt(option.start_slide),
        directionNav		: parseInt(option.direction_navigation_enable)==1 ? true : false,
        controlNav			: false,
        controlNavThumbs	: false,
        pauseOnHover		: parseInt(option.pause_hover)==1 ? true : false,
        manualAdvance		: parseInt(option.manual_advance)==1 ? true : false,
        prevText			: '',
        nextText			: '',
        randomStart			: parseInt(option.random_start) ? true : false
	});
};

/******************************************************************************/
	
TLTheme.prototype.createGallery=function(id,option)
{ 
	var galleryList=jQuery('#gallery-'+id);
	if(!galleryList.length) return;
	
	$this.preloaderWait(galleryList,function() 
	{
		var parent=galleryList.parent('div.gallery');
		parent.removeClass('preloader');
		
		$this.setGalleryResponsive(galleryList);
		jQuery(window).resize(function() 
		{
			$this.setGalleryResponsive(galleryList);
		});
		
		parent.find('ul.gallery-filter-menu li a').bind('click',function(e)
		{
			e.preventDefault();
			$this.filter(jQuery(this));
		});
		
		if(option.selected>0)
			parent.find('ul.gallery-filter-menu li a.filter-'+option.selected).trigger('click');
	});
};

/******************************************************************************/

TLTheme.prototype.setGalleryResponsive=function(galleryList)
{
	var parent=galleryList.parent('div.gallery');
	var parentWidth=parent.actual('width');
	
	var marginRight=30;
	var marginBottom=30;
	
	if(parentWidth>450)
	{
		if(galleryList.hasClass('layout-p-100'))
		{
			marginRight=0;
		}
		if(galleryList.hasClass('layout-p-20x20x20x20'))
		{
			marginRight=10;
			marginBottom=10;			
		}
	}	
	else
	{
		marginRight=0;
	}
		
	if(parentWidth>450)
	{
		galleryList.find('li').removeClass('responsive-column-2');
	}
	else galleryList.find('li').addClass('responsive-column-2');
	
	var galleryListWidth=parentWidth+marginRight;
	
	galleryList.find('li>div').css({'margin-right':marginRight,'margin-bottom':marginBottom});
	galleryList.css('width',galleryListWidth);	
	
	galleryList.isotope({resizable:false,animationEngine:'jquery',layoutMode:'fitRows',transformsEnabled:(themeOption.is_rtl ? false : true)});
};

/******************************************************************************/
	
TLTheme.prototype.filter=function(object)
{
	var filter='';

	object.parent('li').parent('ul').find('a').removeClass('selected');
	object.addClass('selected');

	if(!object.hasClass('filter-0'))
	{
		var aClass=object.attr('class').split(' ');
		for(var i=0;i<aClass.length;i++) 
		{
			if(aClass[i].indexOf('filter-')!=-1) filter+=' .'+aClass[i];			
		}			
	}

	object.parent('li').parent('ul').parent('div').find('ul:last').isotope({filter:filter,resizable:false,animationEngine:'jquery',transformsEnabled:(themeOption.is_rtl ? false : true)});	
};

/******************************************************************************/

TLTheme.prototype.createSuperfishMenu=function(option)
{
	$this.equalSuperfishMenu();
	
	jQuery(window).bind('resize',function() 
	{
		$this.equalSuperfishMenu();
	});
	
	jQuery('select.dp-menu').bind('change',function() 
	{
		if(jQuery(this).val()!='-1')
			window.location.href=jQuery(this).val();
	});
	
	var menu=jQuery('.menu-fixed-enable');
	if(menu.length)
	{
		jQuery('.menu-fixed-enable').each(function() 
		{
			var menuPosition=menu.offset().top;
			jQuery(window).scroll(function() 
			{
				if (jQuery(this).scrollTop()>menuPosition) menu.addClass('menu-fixed');
				else menu.removeClass('menu-fixed');
			});
		});
		
		jQuery(window).trigger('scroll');
	}
	
	jQuery('ul.sf-menu').superfish(
	{ 
		delay		:	parseInt(option.delay), 
		animation	:	{opacity:'show',height:'show'}, 
		speed		:	parseInt(option.speed),                         
		autoArrows	:	true,                           
		dropShadows	:	false                         
	}); 
	
	jQuery('ul.sf-menu').find('.sf-sub-indicator').html('');
	
	if(option.fixed_scroll_hide==1)
	{
		jQuery(window).scroll(function() 
		{
			var menu=jQuery('.menu-fixed-enable');

			if(menu.hasClass('menu-fixed'))
			{
				menu.stop().animate({'margin-top':-1*menu.actual('height'),'opacity':0},{duration:250});

				clearTimeout(jQuery.data(this,'scrollTimer'));
				jQuery.data(this,'scrollTimer',setTimeout(function() 
				{
					menu.stop().animate({'margin-top':0,'opacity':1},{duration:100,complete:function() {}});
				},500));
			}
			else
			{
				menu.stop().animate({'margin-top':0,'opacity':1},{duration:0,complete:function() {}});
			}
		});
	}
};

/******************************************************************************/

TLTheme.prototype.equalSuperfishMenu=function()
{
	jQuery('ul.sf-menu>li>a').css('height','auto');
	
	var height=0;
	jQuery('ul.sf-menu>li>a').each(function() 
	{
		if(jQuery(this).actual('height')>height)
			height=jQuery(this).actual('height');
	});

	jQuery('ul.sf-menu>li>a').height(height);	
};

/******************************************************************************/

TLTheme.prototype.createWidgetMenu=function()
{
	jQuery('div.widget-menu ul a').bind('click',function(e) 
	{
		if(jQuery(this).attr('href')=='#')
		{
			e.preventDefault();
			
			var menu=jQuery(this).parents('div.widget-menu');
					
			menu.find('li').removeClass('current-menu-item current-menu-ancestor widget-menu-element-selected');
			menu.find('ul>li>ul').css('display','none');
			
			jQuery(this).parents('ul.sub-menu').css('display','block');
			jQuery(this).parents('li').addClass('widget-menu-element-selected');
			
			jQuery(this).next('ul.sub-menu').css('display','block');
		}
	});
};

/******************************************************************************/

TLTheme.prototype.setEqualHeight=function(column)
{
	var maxHeight=-1;
	
    column=jQuery(column);
	column.css('height','auto');
	
    column.each(function() 
	{       
		var height=jQuery(this).actual('height');
        if(height>maxHeight) maxHeight=height;
    });

	if(maxHeight!=-1) column.height(maxHeight);
};


// Funcion que se ejecuta cuando se coloca el puntero del mouse sobre el elemento li de un team
function hoverLi(datos) {
	// alert(jQuery(this).css('margin-right'));
	var ancho_li = jQuery(this).css('width');
	var margin_li = jQuery(this).css('margin-right');
	//margin_li = margin_li.substring(0, (margin_li.length - 2));
	//jQuery(this).css('margin-right', 0);
}

/******************************************************************************/

TLTheme.prototype.createTeam=function(id,carouselOption)
{
	var carouselWrapper=jQuery('#'+id);
	
	var carouselList=carouselWrapper.children('ul.team-list').first();
	var carouselListElement=carouselList.children('li');
	
	var columnCount=carouselOption.column_count;
	var elementWidth=carouselOption.image_width;
	
	jQuery(window).bind('resize',function() 
	{
		var option=$this.calculateTeam(id,elementWidth,columnCount);
			
		carouselList.css('width',option.carouselWidth);
		carouselListElement.css('width',option.elementWidth);
		
		carouselList.trigger('configuration',['width',option.carouselWidth]);
		carouselList.trigger('configuration',['items.visible',option.visible]);
		carouselList.trigger('configuration',['items.width',parseInt(option.elementWidth+option.elementMargin)]);	
	});
	
	var option=$this.calculateTeam(id,elementWidth,columnCount);

	option.carouselList=carouselList;
	option.carouselWrapper=carouselWrapper;
	
	carouselList.css('width',option.carouselWidth);
	carouselListElement.css({'width':option.elementWidth,'margin-right':option.elementMargin});

	$this.createTeamCarousel(option,carouselOption);

	// carouselListElement.on('hover', hoverLi);
	// funcion que realiza el cambio de imagen y color de background y letra al pasar el mouse sobre la imagen en equipo.
	var pag_div = jQuery('div .page-header h1').html();
	carouselListElement.hover(function() 
	{
		jQuery(this).children('div').children('.gallery-bottom-box').find('.hover').animate({opacity:1},1000);
		jQuery(this).children('div').children('.gallery-bottom-box').addClass('gallery-bottom-box-hover');
		if(pag_div === 'Equipo'){
			jQuery(this).css({
				'background-color' : '#F66E00',
				'color' : '#FFFFFF'
			}).fadeIn('500');
			var class_a = jQuery(this).children('div').children('div').children('a').attr('class');
			if(class_a !== 'overlay-url'){
				var href_a = jQuery(this).children('div').children('div').children('a').attr('href');
				jQuery(this).children('div').children('div').children('a').css('cursor', 'default');
				var href_dividido = href_a.split('.jpg');
				var length_a_dividido = href_dividido[0].length;
				var desde_a_dividido = length_a_dividido - 1;
				var res_a_desde = href_dividido[0].substr(desde_a_dividido, 1);
				var res_a_hasta = href_dividido[0].substr(0, desde_a_dividido);
				if(res_a_desde === '2'){var new_href = res_a_hasta + '.jpg' + href_dividido[1];}
				else{var new_href = href_a;}
				jQuery(this).children('div').children('div').children('a').removeClass('theme-fancybox-image');
				jQuery(this).children('div').children('div').children('a').click(function(event){event.preventDefault();});
				jQuery(this).children('div').children('div').children('a').attr('href', new_href);
				var src_img = jQuery(this).children('div').children('div').children('a').children('img').attr('src');
				var src_dividido = src_img.split('.jpg');
				var length_src_dividido = src_dividido[0].length;
				var dos = src_dividido[0].substr((length_src_dividido - 1), length_src_dividido);
				if(dos !== '2'){
					var new_img = src_dividido[0] + '2' + '.jpg' + src_dividido[1];
				}
				else{
					var new_img = src_dividido[0].substr(0, (length_src_dividido - 1)) + '.jpg' + src_dividido[1];
				}
				jQuery(this).children('div').children('div').children('a').children('img').attr('src', new_img);
			}
		}
	},
	// funcion que restablece la imagen original en blanco y negro y los colores de letra y background al quitar el mouse de la foto en equipo
	function()
	{
		jQuery(this).children('div').children('.gallery-bottom-box').find('.hover').animate({opacity:0},500);
		jQuery(this).children('div').children('.gallery-bottom-box').removeClass('gallery-bottom-box-hover');

		if(pag_div === 'Equipo'){

			jQuery('.gallery-bottom-box h5').each(function(){
				// var titulo_eq = jQuery(this).html();
				// if((titulo_eq === 'Abogada')||(titulo_eq === 'Abogado')){
				// 	jQuery(this).parent().parent().parent().css({
				// 		'background-color' : '#5D514B',
				// 		'color' : '#CBBAAF'
				// 	});
				// }
				// else{
				// 	jQuery(this).parent().parent().parent().css({
				// 		'background-color' : '',
				// 		'color' : '#CBBAAF'
				// 	});									
				// }
				jQuery(this).parent().parent().parent().css({
					'background-color' : '#5D514B',
					'color' : '#CBBAAF'
				});
			});
			var class_a = jQuery(this).children('div').children('div').children('a').attr('class');
			if(class_a !== 'overlay-url'){
				jQuery(this).css('cursor', 'default');
				var src_img2 = jQuery(this).children('div').children('div').children('a').children('img').attr('src');
				var src_dividido2 = src_img2.split('.jpg');
				var length_src_dividido2 = src_dividido2[0].length;
				var dos = src_dividido2[0].substr((length_src_dividido2 - 1), length_src_dividido2);
				if(dos !== '2'){
					var new_img2 = src_dividido2[0] + '2' + '.jpg' + src_dividido2[1];
				}
				else{
					var new_img2 = src_dividido[0].substr(0, (length_src_dividido - 1)) + '.jpg' + src_dividido2[1];
				}
				jQuery(this).children('div').children('div').children('a').children('img').attr('src', new_img2);
			}
		}
	});

};

/******************************************************************************/

TLTheme.prototype.calculateTeam=function(id,elementWidth,columnCount)
{
	var option={};
	
	var carouselWrapper=jQuery('#'+id);
	var carouselWrapperWidth=carouselWrapper.parent().actual('width');
	
	option.columnCount=columnCount;
	option.elementMargin=columnCount==5 ? 10 : 15;
	option.carouselWidth=carouselWrapperWidth+option.elementMargin;
	
	if((elementWidth>=carouselWrapperWidth) || (carouselWrapperWidth<=300))
	{
		option.visible=1;
		option.elementWidth=carouselWrapperWidth;		
		return(option);
	}
	
	var i=1;
	var stop=false;
	
	while(1)
	{
		option.visible=i;
		option.elementWidth=(carouselWrapperWidth-((i-1)*option.elementMargin))/i;	
		
		if(stop) break;
		
		if(option.elementWidth<elementWidth)
		{
			i--;
			stop=true;
			continue;
		}
		else if(option.elementWidth==elementWidth) break;
		
		i++;
	}
	
	return(option);
};

/******************************************************************************/

TLTheme.prototype.createTeamCarousel=function(option,carouselOption)
{
	$this.preloaderWait(option.carouselList,function() 
	{
		option.carouselList.parent().removeClass('preloader');
		
		option.carouselList.carouFredSel(
		{
			auto				:	parseInt(carouselOption.autoplay)==1 ? true : false,
			circular			:	parseInt(carouselOption.circular)==1 ? true : false,
			infinite			:	parseInt(carouselOption.infinite)==1 ? true : false,
			width				:	parseInt(option.carouselWidth),
			items: 
			{
				start			:	themeOption.is_rtl ? (option.carouselList.children('li').length-option.visible-parseInt(carouselOption.item_start)) : parseInt(carouselOption.item_start),
				visible			:	option.visible,
				minimum			:	1,
				width			:	option.elementWidth+option.elementMargin,
				height			:	'variable'
			},
			scroll: 
			{
				items			:	parseInt(carouselOption.scroll_item),
				fx				:	carouselOption.scroll_effect,
				easing			:	carouselOption.scroll_easing,
				duration		:	parseInt(carouselOption.scroll_duration)
			},
			onCreate			:	function() 
			{ 
				var prev=jQuery(this).parents('div.team').find('a.navigation-prev');
				var next=jQuery(this).parents('div.team').find('a.navigation-next');

				jQuery(this).trigger('configuration',['prev',prev]);
				jQuery(this).trigger('configuration',['next',next]);
			}
		},{debug:false});
	});
};

/******************************************************************************/

TLTheme.prototype.setNoticeBoxCountdown=function()
{
	jQuery('.notice-box').each(function() 
	{
		var notice=jQuery(this);
		
		var span=notice.find('span.notice-box-close');
		
		if(typeof(span)!='undefined')
		{
			if(span.attr('class'))
			{
				var c=span.attr('class').split(' ');
				for(var i in c)
				{
					if(c[i].indexOf('time-')!=-1)
					{
						var time=parseInt(c[i].substring(5));

						span.countdown(
						{
							until		:	time,
							format		:	'S',
							layout		:	' {sn} ',
							onExpiry	:	function()
							{
								jQuery(this).parents('.notice-box').first().hide('slow',function() { jQuery(this).remove(); });
							}
						}); 
					}
				}
			}
		}
		
		span.parent('a').bind('click',function(e) 
		{
			e.preventDefault();
			jQuery(this).parents('.notice-box').first().hide('slow',function() { jQuery(this).remove(); });
		});
	});
};

/******************************************************************************/

TLTheme.prototype.createCarousel=function(id,option)
{
	var carousel=jQuery('#'+id).children('ul');
	
	if(parseInt(option.width)>0)
		carousel.parent().width(option.width);

	if(parseInt(option.height)>0)
	{
		carousel.parent().height(option.height);
		carousel.children('li').height(option.height);
	}
	
	var width=carousel.parent().width();
	carousel.children('li').width(width);
	
	carousel.carouFredSel(
	{
		swipe			:	parseInt(option.swipe)==1 ? true : false,
		auto			:	parseInt(option.auto)==1 ? true : false,
		circular		:	parseInt(option.circular)==1 ? true : false,
		infinite		:	parseInt(option.infinite)==1 ? true : false,
		direction		:	option.direction,
		width			:	parseInt(option.width)>0 ? parseInt(option.width) : width,
		height			:	parseInt(option.height)>0 ? parseInt(option.height) : null,
		items: 
		{
			start		:	0,
			visible		:	1,
			minimum		:	1,
			width		:	parseInt(option.width)>0 ? parseInt(option.width) : width,
			height		:	parseInt(option.height)>0 ? parseInt(option.height) : null,
			fx			:	option.fx,
			easing		:	option.easing,
			duration	:	option.duration
		},
		scroll: 
		{
			items		:	1
		},
		onCreate		:	function() 
		{ 
			if(parseInt(option.pagination)==1)
			{
				jQuery(this).trigger('configuration',['pagination',jQuery(this).parents('.carousel-wrapper').find('.carousel-pagination')]);
			}
		}
	},{debug:false});	
};

/******************************************************************************/

TLTheme.prototype.responsiveElement=function(parent,children,width,className,bind)
{
	jQuery(parent).each(function() 
	{
		var actualWidth=jQuery(this).actual('outerWidth',{includeMargin:true});

		if(children==null)
		{
			if(actualWidth<=width) jQuery(this).addClass(className);
			else jQuery(this).removeClass(className);				
		}
		else
		{
			if(actualWidth<=width) jQuery(this).children(children).addClass(className);
			else jQuery(this).children(children).removeClass(className);	
		}
	});
	
	if(bind)
	{
		jQuery(window).bind('resize',function() 
		{
			$this.responsiveElement(parent,children,width,className,false);
		});
	}
};

/******************************************************************************/

TLTheme.prototype.updateCarouselSize=function()
{
	jQuery('.caroufredsel_wrapper').each(function() 
	{
		jQuery(this).children().first().trigger('updateSizes');
	});
};

/******************************************************************************/

TLTheme.prototype.createButtonHover=function(id,bgColor,textColor,bgColorHover,textColorHover)
{
	jQuery('#'+id).hover(
	
		function() 
		{
			if(textColorHover!==null) 
			{
				jQuery(this).css({'color':textColorHover});
			}
			if(bgColorHover!==null) jQuery(this).css({'background-color':bgColorHover});
		},
		function()
		{
			if(bgColor!==null) jQuery(this).css({'background-color':bgColor});
			if(textColor!==null) jQuery(this).css({'color':textColor});
		}
		
	);
};

/******************************************************************************/
/******************************************************************************/