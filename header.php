<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="رایان پردازش کاوش پیشرو در زمینه تولید نرم افزار با بیش از دو دهه سابقه">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css"
      rel="stylesheet"
    />
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <title>رایان پردازش کاوش</title>
    <?php wp_head(); ?>
  </head>
<body>
    <!-- -------------------------------hamburger menu----------------------------- -->
    <div id="hamMenu" class="ham-menu">
      <div>
		<a class="header-link" href="/">خانه< /a>
        <a class="header-link" href="#products">محصولات</a>
        <a class="header-link" href="#services">خدمات</a>
        <a class="header-link" href="#consulting">آموزش و مشاوره</a>
        <a class="header-link" href="#techs">تکنولوژی ها</a>
        <a class="header-link" href="#customers">معرفی مشتریان</a>
        <a class="header-link" href="#"> بلاگ </a>
        <a class="header-link" href="/about"> درباره ما </a>
        <a class="header-link" href="#contact"> تماس با ما </a>
      </div>
      <button>شروع همکاری با کاوش</button>
    </div>
    <!-- -------------------------------header----------------------------- -->
    <header id="header" class="header animate__animated animate__fadeInDown">
      <!-- header top  -->
      <div id="headerTop">
        <div>
          <a href="#">
            گزارش کامل رویدادها و اخبار رایان پرداز کاوش را ببینید
          </a>
          <img src="<?php echo get_template_directory_uri();?>/images/header_arrow.png" alt="arrow" />
        </div>
        <div>
			<a class="header-link" href="/">خانه</a>
          <a class="header-link" href="#"> بلاگ </a>
          <a class="header-link" href="/about"> درباره ما </a>
          <a class="header-link" href="#contact"> تماس با ما </a>
        </div>
      </div>
      <!-- header bottom  -->
      <div>
        <div>
          <img id="kavoshLogo" class="animate__animated animate__fadeInRight animate__delay-1s" src="<?php echo get_template_directory_uri();?>/images/realLogo.jpg" alt="logo" />
        </div>
        <div>
          <a class="header-link" href="#products">محصولات</a>
          <a class="header-link" href="#services">خدمات</a>
          <a class="header-link" href="#consulting">آموزش و مشاوره</a>
          <a class="header-link" href="#techs">تکنولوژی ها</a>
          <a class="header-link" href="#customers">معرفی مشتریان</a>
        </div>
        <div>
          <button>شروع همکاری با کاوش</button>
        </div>
        <div>
          <button id="hamButton"><img src="<?php echo get_template_directory_uri();?>/images/ham.svg" alt="mobile menu">			</button>
        </div>
      </div>
    </header>
