


(function ($) {
jQuery(document).ready(function($){
	setTimeout(function(){$(".preloader").hide()},600);
	
	
	$('.mdl-card__actions a').addClass('mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect light-blue darken-1');

	$('#secondary .card .card-content .widget-list a').addClass('waves-effect waves-cyan pulse');
	$('#main .card .card-content img').addClass('responsive-img');
	$('#main .card .card-content a.download').addClass('waves-effect waves-light btn cyan');
	$('#main .card .card-image a').addClass('animsition-link');
	$('#main .card .card-action a').addClass('animsition-link');
	$('header .nav-menu a').addClass('animsition-link');
	$('header a#logo').addClass('animsition-link');
	$('footer a').addClass('animsition-link');
	$('#secondary a').addClass('animsition-link');
	
	$("#totop").click(function() {
            //以1秒的间隔返回顶部
		$('html,body').animate({scrollTop:0},1000);
    });
	
	$(".btn1").click(function(){
    alert($(".demo-card-wide").offset().top+" px");
	});

	$(".button-collapse").sideNav();
	$('.parallax').parallax();
});
//$("nav .nav-wrapper form").focusin(function() {
//  $(this).find("i").css('display','none');
//});
//$("nav .nav-wrapper form").focusout(function() {
//  $(this).find("i").css('display','block');
//});
$("nav .nav-wrapper form a").click(function() {
  $("nav .nav-wrapper form .input-field").css('width','100%');
  $('nav .nav-wrapper form input').focus();
});
$("nav .nav-wrapper form").focusout(function() {
  $("nav .nav-wrapper form .input-field").css('width','0px');
});
$('ul.post-near li').find('> a').parent().css('display', 'block');

$(window).scroll(function() {
	if ( $(this).scrollTop() > 436 ) {
		$("#totop").fadeIn(1000);//以1秒的间隔渐显id=gotop的元素
		$('#page-header').removeClass('fixed-header');
		$('.mdl-layout__header .mdl-layout__drawer-button').addClass('header-text-fixed');
   } else {
		$("#totop").fadeOut(1000);//以1秒的间隔渐隐id=gotop的元素
		$('#page-header').addClass('fixed-header');
		$('.mdl-layout__header .mdl-layout__drawer-button').removeClass('header-text-fixed');
	}
});


}(jQuery));


	
	
