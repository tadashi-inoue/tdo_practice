$(function(){
  $('.contact_select').on("change load",function() {
    var val = $(this).val();
    if( val != "" ){
      $(this).addClass("active");
    }else{
      $(this).removeClass("active");
    }
  });
});


$(function () {
  // スクロールを開始したら
  $(window).on("scroll", function () {
    // ファーストビューの高さを取得
    mvHeight = $(".fv").height();
    if ($(window).scrollTop() > mvHeight) {
      // スクロールの位置がファーストビューより下の場合にclassを付与
      $(".shere_menu_wrap.top_shere").addClass("fixed");
    } else {
      // スクロールの位置がファーストビューより上の場合にclassを外す
      $(".shere_menu_wrap.top_shere").removeClass("fixed");
    }
  });
});

$(function () {
  // スクロールを開始したら
  $(window).on("scroll", function () {
    // ファーストビューの高さを取得
    mvHeight = $(".fv").height();
    if ($(window).scrollTop() > mvHeight) {
      // スクロールの位置がファーストビューより下の場合にclassを付与
      $(".top_banner").addClass("fixed");
    } else {
      // スクロールの位置がファーストビューより上の場合にclassを外す
      $(".common_sova_banner_wrap.top_banner").removeClass("fixed");
    }
  });
});

$(function() {
  $(".common_sova_banner_close_btn").click(function() {
    $(".common_sova_banner_wrap").addClass("close_none");
  });
});

const header = $("#js-fixed-header");

$(window).on("scroll", function () {
  if ($(window).width() <= 840) {
    return;
  }
  // ヘッダーの高さ
  let headerHeight = header.outerHeight();
  // スクロール量
  let scroll = $(window).scrollTop();
  // ヘッダーを表示する高さ = ヘッダーの高さ + 任意の値
  let showHeight = headerHeight + 100;

  if (showHeight < scroll) {
    header.addClass("is-show");
  } else {
    header.removeClass("is-show");
  }
});


$(function(){
    $('a[href^="#"]').click(function(){
        var headerHeight = $(".header_wrap").height();
        var speed = 1000;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        var position = target.offset().top - headerHeight; //ターゲットの座標からヘッダの高さ分引く
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
});

$(".sp_header_menu_btn").click(function () {
    $(this).toggleClass('active');
    $( '.sp_header_menu').toggleClass('active');
});

jQuery(function($){
  $(".sp_header_menu_item_btn").on("click",function(){
	  $(this).toggleClass("active").next().stop().slideToggle();
  });
});
