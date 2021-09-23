$(".accordion__title.active").next().slideDown();
$(".accordion__title").on("click", function () {
  if( $(this).hasClass('active') ) {
		$(this).removeClass("active").next().slideUp();
	} else {
		$(".accordion__title.active").removeClass("active").next(".accordion__body").slideUp();
    $(this).addClass('active').next('.accordion__body').slideDown();
	}
});
$(".accordion__title.active").next().slideDown();
$(".accordion__title").on("click", function () {
  if( $(this).hasClass('active') ) {
		$(this).removeClass("active").next().slideUp();
	} else {
		$(".accordion__title.active").removeClass("active").next(".accordion__body").slideUp();
    $(this).addClass('active').next('.accordion__body').slideDown();
	}
});
