(function($){"use strict";function clientCarosule(){if($('#partner-list').length){$("#partner-list").owlCarousel({autoPlay:3000,items:5,itemsDesktop:[1170,4],itemsDesktopSmall:[979,2]});}}function galleryMasonaryLayout(){if($('.masonary-gallery').length){$('.masonary-gallery').isotope({layoutMode:'masonry'});}}function prettyPhoto(){if($("a[data-gal^='prettyPhoto'").length){$("a[data-gal^='prettyPhoto'").prettyPhoto({hook:'data-gal'});}}function Search_close(){if($('.search-button').length){$(".search-button").click(function(){$(".header-search-content").show("fast",function(){});$(".close").click(function(){$(".header-search-content").hide("fast",function(){});})});}}function gMap(){if($('#map').length){var mapMarkers={"markers":[{"latitude":"20.53928","longitude":"-100.8330","icon":"img/pin.png","baloon_text":'Aquí esta <strong>AITECSA</strong>'}]};$("#map").mapmarker({zoom:16,center:"20.53977400594997, -100.83325294999997",dragging:1,mousewheel:0,markers:mapMarkers,featureType:"all",visibility:"on",elementType:"geometry"});}}function galleryHover(){if($('.masonary-gallery').length){$('.masonary-gallery .content-wrap').each(function(){$(this).addClass('hvr-shutter-in-vertical');});};if($('.normal-gallery').length){$('.normal-gallery .content-wrap').each(function(){$(this).parent().parent().addClass('mix');});};}function customTabServiceTab(){if($('#service-we-provide .service-tab-title').length){var tabWrap=$('#service-we-provide .col-lg-9 .service-tab-content');var tabClicker=$('#service-we-provide .service-tab-title ul li');tabWrap.children('div').hide();tabWrap.children('div').eq(0).show();tabClicker.on('click',function(){var tabName=$(this).data('tab-name');tabClicker.removeClass('active');$(this).addClass('active');var id='#'+tabName;tabWrap.children('div').not(id).hide();tabWrap.children('div'+id).fadeIn('500');return false;});}}function GalleryFilter(){if($('#image-gallery-mix').length){$('.gallery-filter').find('li').each(function(){$(this).addClass('filter');});$('#image-gallery-mix').mixItUp();};if($('.gallery-filter.masonary').length){$('.gallery-filter.masonary span').on('click',function(){var selector=$(this).parent().attr('data-filter');$('.gallery-filter.masonary span').parent().removeClass('active');$(this).parent().addClass('active');$('#image-gallery-isotope').isotope({filter:selector});return false;});}}function dropdownMenu(){}function mobileNavToggler(){if($('.mainmenu').length){$('button.navigation-toggler').on('click',function(){$(this).parent().children('ul.navigation').slideToggle();return false;});}}function mainmenuHover(){if($('.mainmenu').length){$('.mainmenu ul.navigation').children('li').find('a').each(function(){$(this).addClass('hvr-overline-from-left');});$('.mainmenu ul ul li a').each(function(){$(this).removeClass('hvr-overline-from-left');$(this).addClass('hvr-bounce-to-right');});$('.mainmenu ul li').has('li').children('a').append(function(){return'<i class="fa fa-plus"></i>';});$('.mainmenu ul li a').find('.fa').on('click',function(){var dropMenu=$(this).parent().parent().find('ul');dropMenu.slideToggle();return false;});}}function wowActivator(){new WOW().init();}function contactFormValidation(){if($('#form').length){$('#form').validate({rules:{name:{required:true},email:{required:true,email:true},subject:{required:true}},submitHandler:function(form){$.post($(form).attr('action'),$(form).serialize(),function(response){$(form).parent('div').append(response);$(form).find('input[type="text"]').val('');$(form).find('input[type="email"]').val('');$(form).find('textarea').val('');});return false;}});}}function handlePreloader(){if($('.preloader').length){$('.preloader').delay(500).fadeOut(500);}}function revolutionSliderActiver(){if($('#banner').length){$('.banner').revolution({delay:9000,startwidth:1170,startheight:700,startWithSlide:0,fullScreenAlignForce:"off",autoHeight:"off",minHeight:"off",shuffle:"off",onHoverStop:"on",thumbWidth:100,thumbHeight:50,thumbAmount:2,hideThumbsOnMobile:"off",hideNavDelayOnMobile:1500,hideBulletsOnMobile:"off",hideArrowsOnMobile:"off",hideThumbsUnderResoluition:0,hideThumbs:0,hideTimerBar:"on",keyboardNavigation:"on",navigationType:"bullet",navigationArrows:"nexttobullets",navigationStyle:"preview4",navigationHAlign:"center",navigationVAlign:"bottom",navigationHOffset:30,navigationVOffset:30,soloArrowLeftHalign:"left",soloArrowLeftValign:"center",soloArrowLeftHOffset:20,soloArrowLeftVOffset:0,soloArrowRightHalign:"right",soloArrowRightValign:"center",soloArrowRightHOffset:20,soloArrowRightVOffset:0,touchenabled:"on",swipe_velocity:"0.7",swipe_max_touches:"1",swipe_min_touches:"1",drag_block_vertical:"false",parallax:"mouse",parallaxBgFreeze:"on",parallaxLevels:[10,7,4,3,2,5,4,3,2,1],parallaxDisableOnMobile:"off",stopAtSlide:-1,stopAfterLoops:-1,hideCaptionAtLimit:0,hideAllCaptionAtLilmit:0,hideSliderAtLimit:0,dottedOverlay:"none",spinned:"spinner4",fullWidth:"on",forceFullWidth:"on",fullScreen:"off",fullScreenOffsetContainer:"#banner",fullScreenOffset:"0px",panZoomDisableOnMobile:"off",simplifyAll:"off",shadow:0});}}function prettyPhoto(){if($("a[data-gal^='prettyPhoto'").length){$("a[data-gal^='prettyPhoto'").prettyPhoto({hook:'data-gal'});}}$(document).on('ready',function(){clientCarosule();galleryMasonaryLayout();gMap();galleryHover();GalleryFilter();mobileNavToggler();mainmenuHover();customTabServiceTab();wowActivator();contactFormValidation();handlePreloader();Search_close();dropdownMenu();revolutionSliderActiver();prettyPhoto();});$(window).on('load',function(){});})(jQuery);