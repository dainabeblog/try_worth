$(function(){
  // load 時アクション
  window.onload = function(){
    topHeightSet();
    TOP_VIDEO.controls = false; 
    TOP_VIDEO.style.display = "block"; 
    // $("#top_vi").css("display","block");
    const spinner = document.getElementById('loading');
    spinner.classList.add('loaded');
  }
  // スムーススクロール
  $(document).ready(function(){
    //URLのハッシュ値を取得
    var headerAjust  = -110;
    var urlHash = location.hash;
    //ハッシュ値があればページ内スクロール
    if(urlHash) {
      //スクロールを0に戻す
      $('body,html').stop().scrollTop(0);
      setTimeout(function () {
        //ロード時の処理を待ち、時間差でスクロール実行
        scrollToAnker(urlHash) ;
      }, 100);
    }

    //通常のクリック時
    $('a[href^="#"]').click(function() {
      location.reload();
      //ページ内リンク先を取得
      var href= $(this).attr("href");
      //リンク先が#か空だったらhtmlに
      var hash = href == "#" || href == "" ? 'html' : href;
      //スクロール実行
      scrollToAnker(hash);
      //リンク無効化
      return false;
    });

    // 関数：スムーススクロール
    // 指定したアンカー(#ID)へアニメーションでスクロール
    function scrollToAnker(hash) {
      var target = $(hash);
      var position = target.offset().top + headerAjust;
      $('body,html').stop().animate({scrollTop:position}, 500);
    }
  })

  //ハンバーガーメニュー
  $("#hamburger").on("click", function(){
      $(".header_menu").slideToggle();
      $(".toggleMenu").toggleClass("active");
  })
  $(".g_nav li").on("click", function(){
      $(this).toggleClass("hover");
  });

  // video
  const TOP_VIDEO = document.getElementById("top_vi");
  let window_width = window.innerWidth;
  let window_height = window.innerHeight;

  window.addEventListener('resize', function(){
    window_width = window.innerWidth;
    window_height = window.innerHeight;
    topHeightSet();
  });
  function topHeightSet() {  
    if(window_width < window_height || 1000 < window_height ){
      TOP_VIDEO.style.height = "100%";
    }else{
      TOP_VIDEO.style.height = "auto";
    }
  }

  // スクロールiOS（safari?）真ん中に寄せる
  const iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
  if(iOS){
    $("#scroll_boder").css("left","0px");
  }
  
});
    