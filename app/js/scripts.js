/*!
 * Base scripts russia-otdih.ru
 * https://hard-it.ru/
 *
 * Copyright HARD-IT
 * Released under the MIT license
 *
 * Date: 2021-07-31
 */
$(document).ready(function () {
	/* Скрипт ползунка цен */
	$('#slider-range').slider({
		range: true,
		min: 450,
		max: 45000,
		values: ['450', '45000'],
		slide: function (event, ui) {
			$('#min').text(ui.values[0])
			$('#max').text(ui.values[1])
		}
	})
	/* Конец скрипта ползунка цен*/
	
	/* Подключаем карусель */
	$('.content-best__carousel').owlCarousel({
		loop:true,
		margin:30,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:2,
				nav:true
			},
			1000:{
				items:4,
				nav:true,
				loop:true
			}
		}
	});
	$('.content-slider__carousel').owlCarousel({
		loop:true,
		dots:true,
		margin:30,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				dots:true
			},
			600:{
				items:2,
				dots:true
			},
			1000:{
				items:3,
				dots:true,
				loop:true
			}
		}
	});
	/* FAQ - табы */
	$('.faq-tabs__title').on('click', function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$(this).parents('.faq-tabs__item').find('.faq-tabs__desc').slideUp(300);
		}else{
			$('.faq-tabs__desc').hide();
			$('.faq-tabs__title').removeClass('active');
			$(this).addClass('active');
			$(this).parents('.faq-tabs__item').find('.faq-tabs__desc').slideDown(300);
		}
	})
	
	/* Health - табы */
	$('.direction-health__title-tab').on('click', function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$(this).parents('.direction-health__item').find('.direction-health__desc').slideUp(300);
		}else{
			$('.direction-health__desc').hide();
			$('.direction-health__title-tab').removeClass('active');
			$(this).addClass('active');
			$(this).parents('.direction-health__item').find('.direction-health__desc').slideDown(300);
		}
	})
	
	$('.header-mobile__btn').on('click', function(){
		$('.header-mobile__submenu').toggleClass('active');
	});
	
	$('.menu-close').on('click', function(){
		$('.header-mobile__btn').trigger('click');
	})
})