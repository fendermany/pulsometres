$(document).ready(function(){
	$('.carousel__inner').slick({
		infinite: true,
		speed: 1200,
		slidesToShow: 1,
		// adaptiveHeight: true,
		prevArrow: '<button type="button" class="slick-prev"><img src="../icons/prevarrow.png"></button>',
		nextArrow: '<button type="button" class="slick-next"><img src="../icons/nextarrow.png"></button>',
		responsive: [
			{
				breakpoint: 992,
				settings: {
					arrows: false,
					dots: true
				}
			}
		]
	});
});