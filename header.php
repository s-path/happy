<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if(!is_front_page()) {wp_title('|', true, 'right');}bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"/>
	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- /* ヘッダー要素*/ -->
    <header>
      <div id="header-pc_wrapper">
        <div class="header-pc_wrapper">
          <div>
            <img class="header-pc_wrapper_img_left" src="<?php bloginfo('template_directory'); ?>/images/67siteheader.png" alt="">
            <p class="header-pc_wrapper_left_text">群馬県渋川市渋川1771-8 (川島内科クリニック様 隣)</p>
          </div>
          <div>
            <img class="header-pc_wrapper_img_right" src="https://shibukawa-massage-happy.com/wp-content/uploads/2021/07/yoyaku02.png" alt="">
          </div>  
        </div>
      </div>

      <!-- PCナビゲーション -->
      <div class="nav-wrapper_hover"></div>
            <ul class="nav-wrapper-pc">
                <li class="nav-wrapper_list"><a class="nav-wrapper_link" href="/" >ホーム</a></li>
                <li class="nav-wrapper_list"><a class="nav-wrapper_link" href="/greeting/" >初めての方へ</a></li>
                <li class="nav-wrapper_list"><a class="nav-wrapper_link" href="/features/" >整体院Happyが選ばれる<br>５つの理由</a></li>
                <li class="nav-wrapper_list"><a class="nav-wrapper_link" href="/bodycare/" >整体</a></li>
                <li class="nav-wrapper_list"><a class="nav-wrapper_link" href="/maps/" >アクセス・駐車場</a></li>
                <!-- <li class="nav-wrapper_list"><a class="nav-wrapper_link" href="/reservation1/" >ネット予約</a></li> -->
            </ul>
        <!-- PCナビゲーション終了-->








      <!-- スクロールした後に出るメニュー PC-->
      <section class="scroll-header" id="js-header">
        <div class="scroll-header_section">
          <div class="scroll-header_wrapper_left">
            <img class="scroll-header_img" src="<?php bloginfo('template_directory'); ?>/images/67siteheader.png" alt="">
            <p class="scroll-header_text">渋川市の整体院 TEL 0279-30-1184</p><p class="scroll-header_text">群馬県渋川市渋川1771-8(川島内科クリニック様 隣)</p>
          </div>
          <div class="scroll-header_wrapper_right">
            <img class="scroll-header_wrapper_right_img" src="https://shibukawa-massage-happy.com/wp-content/uploads/2021/07/yoyaku01.png" alt="">
            <ul class="scroll-header_list_wrapper scroll-header_list_wrapper01" id="js-header_wrapper">
              <li><a class="scroll-header_list" href="/">ホーム</a></li>
              <li><a class="scroll-header_list" href="/greeting/">初めての方へ</a></li>
              <li><a class="scroll-header_list" href="/bodycare/">整体</a></li>
              <li><a class="scroll-header_list" href="/maps/">アクセス・駐車場</a></li>
            </ul>
            <ul class="scroll-header_list_wrapper scroll-header_list_wrapper02" id="js-header_wrapper01">
              <li><a class="scroll-header_list" href="/features/">整体院Happyが選ばれる<br>５つの理由</a></li>
              <li class="scroll-header_list--reserve">
                <a class="scroll-header_list scroll-header_list__hover" href="#">ネット予約</a>
                <span class="scroll-header_reserve-note">整備中の為、お電話でのご予約をお願い致します</span>
              </li>
            </ul>
          </div>
        </div>
      </section>



    <!-- スマートフォンメニュー -->
      <img src="<?php bloginfo('template_directory'); ?>/images/67siteheader.png" alt="" id="sp-img">
      <!-- ハンバーガーメニュー -->
      <input type="checkbox" class="check" id="checked">
          <label class="menu-btn" for="checked">
            <div class="ll">
              <span class="bar top"></span>
              <span class="bar middle"></span>
              <span class="bar bottom"></span>
              <span class="menu-btn__text">MENU</span>
            </div>
          </label>
      <label class="close-menu" for="checked"></label>
      <nav class="drawer-menu">
      <section class="navMenu">
        <ul>
          <li><a href="/">&nbsp;&nbsp;ホーム ><br><span class="span">Home</span></a></li>
          <li><a href="/greeting/">&nbsp;初めての方へ ><br><span class="span">For First-time Visitors</span></a></li>
          <li><a href="/features/">&nbsp;整体院Happyが選ばれる<br>５つの理由 ><br><span class="span">5 Reasons</span></a></li>
          <li><a href="/bodycare/">&nbsp;整体 ><br><span class="span">Body care</span></a></li>
          <li><a href="/maps/">&nbsp;アクセス・駐車場 ><br><span class="span">access</span></a></li>
          <li><a class="drawer-menu__reserve" href="#">&nbsp;ネット予約 ><br><span class="span drawer-menu__reserve-note">整備中の為、お電話でのご予約をお願い致します</span></a></li>
        </ul>
        <div class="drawer-menu-sns">
          <a href="https://instagram.com/maeno.seitai.happy?utm_medium=copy_link">
            <img src="https://shibukawa-massage-happy.com/wp-content/uploads/2021/07/insta.png" alt="">
          </a>
        </div>
      </section>
	</nav>
  <!-- スマートフォンメニュー終了 -->

    </header>
    <!-- /* ヘッダー要素*/ -->
