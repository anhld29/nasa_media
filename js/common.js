
/* readyEvent
------------------------------------------------------------------------*/

$(function(){



	// smoothScroll ---------------------------//
	var	speed = 1000,
		easing = 'swing',
		pcPosition = -0,
		tabPosition = -0,
		spPosition = -0;

	$('a').not('.noscroll').click(function(){
		var href = $(this).attr('href'),
			case1 = href.charAt(0) == '#',
			case2 = location.href.split('#')[0] == href.split('#')[0];

		if(case1 || case2) {
			if(case2)
				href = '#'+href.split('#')[1];

			$target = $(href);

			if($target.length){
				$html.add($body).not(':animated').animate({scrollTop : String($target.offset().top + (abi.pc ? pcPosition : abi.tab ? tabPosition : spPosition))},speed,easing);

				return false;
			}
		}
	});

	// outerPageAnchorLink ---------------------------//
	if(window.location.href.split('#')[1] == undefined || window.location.href.split('#')[1].indexOf('=') == -1) {
		var $target = $('#'+window.location.href.split('#')[1]),
			adjust = (abi.pc) ? pcPosition : (abi.tab) ? tabPosition : spPosition;

		if($target.length) {
			$w.load(function(){
				var targetPosition = $target.offset().top;
				$html.add($body).animate({scrollTop: String(targetPosition + adjust)}, 10);
			});
		}
	}

	// Menu ---------------------------//
	$('.menuopen').on('click', function() {
		if($('body').hasClass('fix_active')) {
			$('body').removeClass('fix_active open_menu');
			$('.fixmenu').fadeOut();
			$('.overlay').fadeOut();
			$('#contents').css('padding-top','');
			 $('.fixmenu').css('top',$('#header').height());
		} else {
			$('.fixmenu').fadeIn();
			$('.overlay').fadeIn();
			$('body').addClass('fix_active open_menu');
			$('#contents').css('padding-top',$('#header').height());
			$('.fixmenu').css('top',$('#header').height());
		}
	});
	// Menu search ---------------------------//
	$('.menuSearch').on('click', function() {
		if($('body').hasClass('fix_activeSearch')) {
			$('body').removeClass('fix_activeSearch');
			$('.box-search-input-sp').fadeOut();
			$('#contents').css('padding-top','');
			 $('.box-search-input-sp').css('top',$('#header').height());
		} else {
			$('.box-search-input-sp').fadeIn();
			$('body').addClass('fix_activeSearch open_menu');
			$('#contents').css('padding-top',$('#header').height());
			$('.box-search-input-sp').css('top',$('#header').height());
		}
	});	
	$(".fix_active .overlay").click(function() {
		$('.menuopen').trigger("click");
	});
	$(".btn_close span").click(function() {
		$('.menuSearch').trigger("click");
	});

	$('.accordion').click(function(){
	    if(!$(this).is('.sp_only') || $(this).is('.sp_only') && abi.sp) {
	        var $next = $(this).next();
	        if(!$next.is(':animated')) $next.slideToggle(300).prev().toggleClass('active');
	    }
	});
	var _width = $(window).width();
	if(_width > 767){
		//scrollTop
		$(".box_sidebar").stick_in_parent();
	}
	

});
    
