

// トップへ戻る
$(function() {
	var topBtn = $('#page-top');    
	topBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 200) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	//スクロールしてトップ
	topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
});


//ページ内スクロール
$(document).ready(function() {
  $('a[href^="#"]').click(function(event) {
    var id = $(this).attr("href");
    var offset = 0;
    var target = $(id).offset().top - offset;
    $('html, body').animate({scrollTop:target}, 500);
    event.preventDefault();
    return false;
  });
});


/*---------------------------------------------
    スライダー
  ---------------------------------------------*/
$(document).ready(function() {
    $.ajaxSetup({
        cache: false
    });
    $('#side').simpleSidebar({
        settings: {
            opener: '#sideOpenBtn',
            wrapper: '#container',
            animation: {
              duration: 300,
              easing: 'easeInOutQuint'
            }
        },
        sidebar: {
          align: 'right',
          width: 250,
        }
    });
});

