$(document).ready(function(){
    $('.author-avatar img').attr({
        class: 'avatar img-circle',
        width: '40',
        height: '40'
    });
    $('article p img').attr({
        'class': 'img-responsive img-rounded img',
        'max-height': '100%',
    });
	$('.label.label-danger').click(function(e){
       e.preventDefault();
		$(this).parent().prev().prev().css({
			'transform':'scale(1)',
			'left':'-17px',
			'top':'-20px'
		});
	});
	$('.panel-close').click(function(){
		$(this).parents('.panel').toggle(300);
	});
    $('#if-fixed').click(function(){
        $(this).parents('nav').toggleClass('navbar-fixed-top');
        $(this).toggleClass('fixed-color');
        $('body').toggleClass('nav-fixed');
    });
    var toggleBtn = $('.panel-toggle');
    toggleBtn.data('toggle', true);
    toggleBtn.click(function(){
        var btn = $(this);
        if (btn.data('toggle')) {
            btn.removeClass('fa-chevron-circle-up').addClass('fa-chevron-circle-down');
            btn.parents('div.panel').addClass('toggled');
            btn.data('toggle', false);
        } else {
            btn.removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-up');
            btn.parents('div.panel').removeClass('toggled');
            btn.data('toggle', true);
        }
    });
    $(window).scroll(function() {
        if ($(window).scrollTop() > 200) {
            $("#topcontrol").fadeIn(500); //一秒渐入动画
        } else {
            $("#topcontrol").fadeOut(500); //一秒渐隐动画
        }
    });
    $("#topcontrol").click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
    var form = $('.comment-form');
    var val = $('#author').val();
    var info = $('.guest-info');
    if (val ==undefined || val =="" || val ==null) {
        return false;
    }else{
        form.addClass('hidden');
        info.html('欢迎光临：<a href="#guest">'+val+'&nbsp;<i class="fa fa-angle-double-right"></i></a>');
    }
    info.click(function(){
        if (val !== '') {
            form.toggleClass('hidden'); 
        }
    });
    $(window).scroll(function(){
        var scrollHeight = $(window).scrollTop(),
			lnSider = $('#latest-article'),
       		contentHeight = $(".col-md-4").height() - lnSider.height(),
       		parHeight = $(".col-md-4").height();
       // console.log(scrollHeight+"--"+contentHeight);
        if(scrollHeight > contentHeight){
            lnSider.css({
                position:"fixed",
                width:"358px",
            });
            lnSider.stop().animate({
                top: "70px"
            });
        }
        if(scrollHeight <= parHeight){
    		lnSider.removeAttr("style");
        }
    });
});