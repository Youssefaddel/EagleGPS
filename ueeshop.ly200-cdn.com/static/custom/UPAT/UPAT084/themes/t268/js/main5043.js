$(function () {
    //导航隐藏
    nav('.ly_header_nav ul', '.ly_header_nav ul li');
    //首页产品滑动
    if($('#ly_pro').length>=1){
        var myProSwiper = new Swiper('#ly_pro', {
            slidesPerView : 4,
            slidesPerGroup : 1,
            spaceBetween: 40,
            autoHeight: true, 
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next',
            breakpoints:{
                1000 : {
                    slidesPerView : 2,
                    slidesPerGroup : 1,
                    spaceBetween: 15,
                },
                1200 : {
                    spaceBetween: 25,
                },
                1500 : {
                    spaceBetween: 30,
                }
            },
        });
    }
    //首页图文模块滑动
    if($('#ly_variou').length>=1){
        new Swiper('#ly_variou', {
            slidesPerView : 1,
            spaceBetween : 30,
            autoHeight: true, 
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next',
            pagination: '.swiper-pagination',
            paginationType : 'fraction',
            paginationFractionRender: function (swiper, currentClassName, totalClassName) {
                return '<span class="' + currentClassName + '"></span>' +
                       ' of ' +
                       '<span class="' + totalClassName + '"></span>';
            }
        });
    }
    //底部 手机版上下拉动
    $('.ly_foot_menu .ly_menu_list dl dt').click(function(){
        if($(window).width()>=1000){
           return false;
        }
        if($(this).hasClass('on')){
            $(this).removeClass('on');
            $(this).nextAll('dd').stop().hide(300);
        }else{
            $(this).addClass('on');
            $(this).nextAll('dd').stop().show(300);
        }
    });
  //底部 手机版上下拉动
    $('.ly_foot_contact_title').click(function(){
        if($(window).width()>=1000){
           return false;
        }
        if($(this).hasClass('on')){
            $(this).removeClass('on');
            $(this).next('.ly_foot_contact_text').stop().hide(300);
        }else{
            $(this).addClass('on');
            $(this).next('.ly_foot_contact_text').stop().show(300);
        }
    });




    $('.products .pro_cate .first_cate').on('click', function () {
		$(this).parents('.list').find('.son_cate').toggleClass('on');
		$(this).parents('.list').toggleClass('on');
	})


    //内页（产品列表页）HOT PRODUCTS 滑动
	if (typeof ($('.slider').bxSlider) == 'function') {
		$('.slider').bxSlider({
			slideWidth: 288,
			minSlides: 2,
			maxSlides: 4,
			slideMargin: 16,
			controls: false
		});
	};
});