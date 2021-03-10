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

		var blockone = document.querySelector( '#wpcf7-f6-o1' );
		var blocktwo = document.querySelector( '#wpcf7-f137-o4' );
		var blocktree = document.querySelector( '#wpcf7-f139-o3' );
		var blockfour = document.querySelector( '#wpcf7-f139-o2' );


		blockone.addEventListener( 'wpcf7mailsent', function( event ) {
			var articleDiv = document.querySelector("div.pop_great");
			// удаляем класс
			articleDiv.classList.remove("pop_great");
			// добавляем класс
			articleDiv.classList.add("pop_great_visible");
			setTimeout(function() {
			   // удаляем класс
				articleDiv.classList.remove("pop_great_visible");
				// добавляем класс
				articleDiv.classList.add("pop_great");
			}, 3500);
		}, false );

		blocktwo.addEventListener( 'wpcf7mailsent', function( event ) {
			var articleDiv1 = document.querySelector("div.pop_great_1");
			// удаляем класс
			articleDiv1.classList.remove("pop_great_1");
			// добавляем класс
			articleDiv1.classList.add("pop_great_visible_1");
			setTimeout(function() {
			    // удаляем класс
				articleDiv1.classList.remove("pop_great_visible_1");
				// добавляем класс
				articleDiv1.classList.add("pop_great_1");
			}, 3500);
		}, false );

		blocktree.addEventListener( 'wpcf7mailsent', function( event ) {
			var articleDiv2 = document.querySelector("div.pop_great_2");
			// удаляем класс
			articleDiv2.classList.remove("pop_great_2");
			// добавляем класс
			articleDiv2.classList.add("pop_great_visible_2");

			setTimeout(function() {
			    // удаляем класс
				articleDiv2.classList.remove("pop_great_visible_2");
				// добавляем класс
				articleDiv2.classList.add("pop_great_2");
			}, 3500);
		}, false );

		blockfour.addEventListener( 'wpcf7mailsent', function( event ) {
			var articleDiv4 = document.querySelector("div.pop_great_3");
			// удаляем класс
			articleDiv4.classList.remove("pop_great_3");
			// добавляем класс
			articleDiv4.classList.add("pop_great_visible_3");

			setTimeout(function() {
			    // удаляем класс
				articleDiv4.classList.remove("pop_great_visible_3");
				// добавляем класс
				articleDiv4.classList.add("pop_great_3");
			}, 3500);
		}, false );

	});
})(jQuery);


