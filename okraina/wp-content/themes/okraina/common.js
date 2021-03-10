(function ($) {
	$(document).ready(function () {
		$('.slider-for').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			adaptiveHeight: true,
			asNavFor: '.slider-nav'
		  });
		  $('.slider-nav').slick({
			slidesToShow: 2,
			slidesToScroll: 1,
			focusOnSelect: true,
			adaptiveHeight: true,
			asNavFor: '.slider-for',
			prevArrow: $('.arrow_prev'),
			nextArrow: $('.arrow_next')
		  });
		AOS.init({
			disable: 'mobile'
		});
		var scene_1 = document.getElementById('scene_1');
		var parallaxInstance_1 = new Parallax(scene_1);
		var scene_2 = document.getElementById('scene_2');
		var parallaxInstance_2 = new Parallax(scene_2);
		var scene_3 = document.getElementById('scene_3');
		var parallaxInstance_3 = new Parallax(scene_3);
		$('input[type="tel"]').inputmask({
			mask: "+7 ([9][9][9]) [9][9][9]-[9][9]-[9][9]",
			greedy: false
		});
		$("#main-menu").on("click","a", function (event) {
			event.preventDefault();
			var id  = $(this).attr('href'),
				top = $(id).offset().top;
			$('body,html').animate({scrollTop: top}, 1500);
		});
		$("#scroll").on("click","a", function (event) {
			event.preventDefault();
			var id  = $(this).attr('href'),
				top = $(id).offset().top;
			$('body,html').animate({scrollTop: top}, 1500);
		});
		$("#scroll_2").on("click","a", function (event) {
			event.preventDefault();
			var id  = $(this).attr('href'),
				top = $(id).offset().top;
			$('body,html').animate({scrollTop: top}, 1500);
		});
		$("#scroll_3").on("click","a", function (event) {
			event.preventDefault();
			var id  = $(this).attr('href'),
				top = $(id).offset().top;
			$('body,html').animate({scrollTop: top}, 1500);
		});
		jQuery(document).ready(function($) {
			$('.news_block_btn').magnificPopup({
				type: 'inline'
			});
			$('#pop').magnificPopup({
				type: 'inline'
			});
			$('#pop_1').magnificPopup({
				type: 'inline'
			});
		});

		var wpcf7Elm = document.querySelector( '.wpcf7' );
		// Мониторим событие wpcf7submit у выбранного блока
		wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
			var articleDiv = document.querySelector("div.pop_great");
			// удаляем класс
			articleDiv.classList.remove("pop_great");
			// добавляем класс
			articleDiv.classList.add("pop_great_visible");
			setTimeout(function() {
			    $('.pop_great_visible').fadeOut('fast');
			}, 3500);
		}, false );
		var wpcf7Elm = document.querySelector( '#wpcf7-f137-o4' );
		// Мониторим событие wpcf7submit у выбранного блока
		wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
			var articleDiv = document.querySelector("div.pop_great");
			// удаляем класс
			articleDiv.classList.remove("pop_great");
			// добавляем класс
			articleDiv.classList.add("pop_great_visible_1");
			setTimeout(function() {
			    $('.pop_great_visible').fadeOut('fast');
			}, 3500);
		}, false );


		var wpcf7Elm = document.querySelector( '#wpcf7-f139-o3' );
		// Мониторим событие wpcf7submit у выбранного блока
		wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
			var articleDiv = document.querySelector("div.pop_great");
			// удаляем класс
			articleDiv.classList.remove("pop_great");
			// добавляем класс
			articleDiv.classList.add("pop_great_visible");
			var elems = document.getElementsByClassName("mfp-close");
			elems[0].click();
			setTimeout(function() {
			    $('.pop_great_visible').fadeOut('fast');
			}, 9999999);

		}, false );

		
	});
})(jQuery);


