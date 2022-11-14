/** ハンバーガーメニュー **/
$(function () {
  $(".openbtn").click(function () {
    $(this).toggleClass('active');
  });
  $(".openbtn").click(function () {
    $(".sp-nav").toggleClass('active');
  });
  $(".sp-nav a").click(function () {
    $(".sp-nav").removeClass('active');
    $(".openbtn").removeClass('active');
  });
});
//=====================================================
// アコーディオン
//=====================================================
$(function () {
  $('.ac-label').click(function () {
    $(this).next('div').slideToggle();
    $(this).find(".icon").toggleClass('open');
    $('.ac-label').toggleClass('open');
  });
});

// ヘッダー色変更
jQuery(window).on('scroll', function () {
  if (jQuery('.header').height() < jQuery(this).scrollTop()) {
    jQuery('.header').addClass('change-color');
  }
  else {
    jQuery('.header').removeClass('change-color');
  }
});

// スライダー
$(function () {
  setTimeout(function () {
    $('.slider').slick({
      fade: true,//切り替えをフェードで行う。初期値はfalse。
      autoplay: true,//自動的に動き出すか。初期値はfalse。
      autoplaySpeed: 3200,//次のスライドに切り替わる待ち時間
      speed: 3200,//スライドの動きのスピード。初期値は300。
      infinite: true,//スライドをループさせるかどうか。初期値はtrue。
      slidesToShow: 1,//スライドを画面に3枚見せる
      slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
      arrows: false,//左右の矢印あり
      prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
      nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
      dots: false,//下部ドットナビゲーションの表示
      pauseOnFocus: false,//フォーカスで一時停止を無効
      pauseOnHover: false,//マウスホバーで一時停止を無効
      pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
    });
  }, 2000);
})

$(function () {
  $('.news-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    prevArrow: $('.slick-prev'),
    nextArrow: $('.slick-next'),
    responsive: [{
      breakpoint: 599,  //ブレイクポイントを指定
      settings: {
        slidesToShow: 2,
      }
    }]
  });
});


$(function () {
  $('.tab-item').click(function () {

    //現在activeが付いているクラスからactiveを外す
    $('.active').removeClass('active');

    //クリックされたタブメニューにactiveクラスを付与。
    $(this).addClass('active');

    //一旦showクラスを外す
    $('.show').removeClass('show');

    //クリックしたタブのインデックス番号取得
    const index = $(this).index();

    //タブのインデックス番号と同じコンテンツにshowクラスをつけて表示する
    $('.tab-content').eq(index).addClass('show');
  });
});

$(function () {
  $('.header-nav-list li a').each(function () {
    var target = $(this).attr('href');
    if (location.href.match(target)) {
      $(this).parent().addClass('current');
    } else {
      $(this).parent().removeClass('current');
    }
  });

});

$(function () {
  AOS.init({
    //オプションを記述
  })
})

$(function () {
  function resize() {
    getHeight = $('body').height();//変数を関数外でも使うのでvarは付けません。
    windowHeight = window.innerHeight;
    scrollHeight = getHeight - windowHeight;//最大スクロール値の計算
  }
  resize();//読み込み時の処理
  window.onresize = resize;//リサイズのイベントハンドラ
  $(window).scroll(function () {
    ScrollTop = $(document).scrollTop();
    bgPosition = 80 / scrollHeight * ScrollTop + 10;
    $('body').css(
      { backgroundPositionY: bgPosition + "%" }
    );
  });

});



//=====================================================
// pagetop.js
//=====================================================

$(function () {

  // 「ページトップへ」をクリックした場合
  $('#pagetop').click(function () {
    // ページトップにスクロール
    $('html,body').animate({
      scrollTop: 0
    }, 300);
    return false;
  });
});



$(function ($) {

  'use strict';

  let scrollPosi = 0;

  $(window).scroll(function () {
    scrollPosi = $(document).scrollTop();

    $('.fv').stop(true, true).animate({
      'background-position-y': -scrollPosi / 3 + 'px'
    }, 100);
  });

})



//=====================================================
// スムーススクロール
//=====================================================
$(function () {
  $('a[href^="#"]').click(function () {
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    //ヘッダーの高さを取得
    var header = $('header').height();
    //ヘッダーの高さを引く
    var position = target.offset().top - header;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});

//=====================================================
// ページ遷移fade
//=====================================================
$(function () {
  $('body').fadeIn(1000); //1秒かけてフェードイン！
});

//=====================================================
// pagetop途中から
//=====================================================

jQuery(window).on('scroll', function () {
  if (jQuery('body').height() / 10 * 3 < jQuery(this).scrollTop()) {
    jQuery('.page-top').addClass('appear');
  }
  else {
    jQuery('.page-top').removeClass('appear');
  }
});



//=====================================================
// tel.js
//=====================================================

$(function () {
  if (!isPhone()) {
    return;
  }

  $('span[data-action=call]').each(function () {
    var $ele = $(this);
    var telorg = $(this).text();
    if (telorg == "") {
      var telorg = $(this).children('img').attr('alt');
    }
    var telfix = telorg.replace(/[^0-9]/g, '');
    $ele.wrap('<a class="ddd" href="tel:' + telfix + '"></a>');
  });
});

function isPhone() {

  // Edgeを弾く
  if (navigator.userAgent.indexOf('Edge') >= 0) {
    return false;
  }

  // Android且つMobileだった場合、電話機とみなす
  if (navigator.userAgent.indexOf('Android') >= 0 && navigator.userAgent.indexOf('Mobile') >= 0) {
    return true;
  }

  // 最後はiPhoneかどうかを判定し、結果を返す
  return (navigator.userAgent.indexOf('iPhone') >= 0);
};


//=====================================================
// アコーディオン
//=====================================================
$(function () {
  $('.qanda-ac-label').click(function () {
    $(this).next('div').slideToggle();
    $(this).find(".icon").toggleClass('open');
  });
});


//=====================================================
// cvr
//=====================================================
$(function ($) {

if($('.fv').length > 0) {
  $(window).on('scroll', function () {
  if ($('.fv').height() < $(this).scrollTop()) { 
    $('.cvr').addClass('open'); }
    else {
    $('.cvr').removeClass('open'); } 
    
  
    if($('.body').height() - $('.footer').height() - 1000 < $(this).scrollTop()){
      $('.cvr').removeClass('open');}
  });
} else {
  $(window).on('scroll', function () {
    if ($('.sub-heading').height() < $(this).scrollTop()) { 
      $('.cvr').addClass('open'); }
      else {
      $('.cvr').removeClass('open'); } 
      
    
      if($('.body').height() - $('.footer').height() - 800 < $(this).scrollTop()){
        $('.cvr').removeClass('open');}
  });
}
});
