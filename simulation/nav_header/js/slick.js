$(document).on('ready', function() {
  $(".regular").slick({
    autoplay: true, // 自動再生を設定
    autoplaySpeed: 3500, // 自動再生のスピード（ミリ秒単位）
    dots: true, // ドットインジケーターの表示
      // slidesToShow:3,
      pauseOnFocus: false,
      pauseOnHover: false,
      pauseOnDotsHover: false
  });
});