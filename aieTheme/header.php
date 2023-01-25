<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AIE</title>

  <?php wp_head(); ?>

</head>
<body>
  <!-- nav -->
  <nav class="navbar">
    <div class="container">
      <div class="navbar__inner">
        <a href="#" class="logo-link"><img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="logo"></a>
        <ul class="menu"> 
          <li class="menu__item">
            <button class="menu__item-btn">
              Nous découvrir
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="menu__wrapper">
              <div class="menu__inner menu__inner-first">
                <a class="menu__inner-item menu__item-line menu__item-first" href="">Ressourceries</a>
                <a class="menu__inner-item menu__item-line" href="">Borne de collecte</a>
                <a class="menu__inner-item menu__item-line" href="">Valorisation textile</a>
                <a class="menu__inner-item menu__item-line" href="">Nos boutiks</a>
                <a class="menu__inner-item menu__item-last" href="">Nos formations</a>
              </div>
            </div>
          </li>

          <li class="menu__item">
            <button class="menu__item-btn">
              Nos activités
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="menu__wrapper">
              <div class="menu__inner">
                <a class="menu__inner-item menu__item-line menu__item-first" href="">Ressourceries</a>
                <a class="menu__inner-item menu__item-line" href="">Borne de collecte</a>
                <a class="menu__inner-item menu__item-line" href="">Valorisation textile</a>
                <a class="menu__inner-item menu__item-line" href="">Nos boutiks</a>
                <a class="menu__inner-item menu__item-last" href="">Nos formations</a>
              </div>
            </div>  
          </li>

          <li class="menu__item">
            <button class="menu__item-btn">
              Nos actualités
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="menu__wrapper">
              <div class="menu__inner">
                <a class="menu__inner-item menu__item-line menu__item-first" href="">Ressourceries</a>
                <a class="menu__inner-item menu__item-line" href="">Borne de collecte</a>
                <a class="menu__inner-item menu__item-line" href="">Valorisation textile</a>
                <a class="menu__inner-item menu__item-line" href="">Nos boutiks</a>
                <a class="menu__inner-item menu__item-last" href="">Nos formations</a>
              </div>
            </div>
          </li>

          <li class="menu__item">
            <button class="menu__item-btn">
              Nos adresses
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="menu__wrapper">
              <div class="menu__inner">
                <a class="menu__inner-item menu__item-line menu__item-first" href="">Ressourceries</a>
                <a class="menu__inner-item menu__item-line" href="">Borne de collecte</a>
                <a class="menu__inner-item menu__item-line" href="">Valorisation textile</a>
                <a class="menu__inner-item menu__item-line" href="">Nos boutiks</a>
                <a class="menu__inner-item menu__item-last" href="">Nos formations</a>
              </div>
            </div>  
          </li>

          <li class="menu__item">
            <button class="menu__item-btn">
              Postuler
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="menu__wrapper">
              <div class="menu__inner menu__inner-last"> 
                <a class="menu__inner-item menu__item-line menu__item-first" href="">Ressourceries</a>
                <a class="menu__inner-item menu__item-line" href="">Borne de collecte</a>
                <a class="menu__inner-item menu__item-line" href="">Valorisation textile</a>
                <a class="menu__inner-item menu__item-line" href="">Nos boutiks</a>
                <a class="menu__inner-item menu__item-last" href="">Nos formations</a>
              </div>
            </div>
          </li>
          <li class="menu__item">
            <button class="menu__item-phone" onclick="window.location.href='tel:0596763818'">
              <svg class="phone-img" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_610)">
                  <path class="phone__icon"
                    d="M12.8766 9.1894C12.0195 9.1894 11.1779 9.05534 10.3804 8.79178C9.98958 8.65849 9.50917 8.78077 9.27066 9.02573L7.6965 10.2141C5.87092 9.23956 4.7464 8.11541 3.78521 6.30354L4.93857 4.77039C5.23822 4.47114 5.3457 4.03401 5.21693 3.62385C4.95224 2.82213 4.81779 1.98093 4.81779 1.12343C4.81782 0.503964 4.31386 0 3.69443 0H1.12339C0.503964 0 0 0.503964 0 1.12339C0 8.22365 5.77638 14 12.8766 14C13.4961 14 14 13.496 14 12.8766V10.3127C14 9.69336 13.496 9.1894 12.8766 9.1894Z"
                    fill="white" />
                </g>
                <defs>
                  <clipPath>
                    <rect class="phone__icon" width="14" height="14" fill="white" />
                  </clipPath>
                </defs>
              </svg>
                  0596 76 38 18
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav -->
  <!-- nav adaptive -->
  <nav class="header-adaptive">
    <div class="header-ad__top">
      <div class="header-ad__inner">
        <div class="header-ad-btn menu-btn" id="menu-btn">
          <div class="header-ad__line header-ad__line-first"></div>
          <div class="header-ad__line header-ad__line-center"></div>
          <div class="header-ad__line header-ad__line-last"></div>
        </div>
      </div>
      <a class="header-ad__top-logo-link" href="#"><img class="logo-adaptive" src="<?php bloginfo('template_url'); ?>/assets/images/logo-aie.svg" alt="logo"></a>
      <button class="header-ad__item-phone" onclick="window.location.href='tel:0596763818'">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/phone.svg" alt="phone">
        0596 76 38 18
      </button>
    </div>
    <div class="header-ad__content" id="transform" >  
      <div class="header-ad__content-wrapper">
        <ul class="header-ad__content-ul">
          <li class="header-ad__content-item" id="link-button"><a class="header-ad__item-link" href="#">Nous découvrir</a>
            <ul class="header-ad__content-inner" id="list-link">
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Ressourceries</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Borne de collecte</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Valorisation textile</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Nos BOUTIKS</a></li>
            </ul>
          </li>
          <li class="header-ad__content-item" id="link-button2"><a class="header-ad__item-link" href="#">Nos activités</a>
            <ul class="header-ad__content-inner" id="list-link2">
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Ressourceries</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Borne de collecte</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Valorisation textile</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Nos BOUTIKS</a></li>
            </ul>
          </li>
          <li class="header-ad__content-item" id="link-button3"><a class="header-ad__item-link" href="#">Nos actualités</a>
            <ul class="header-ad__content-inner" id="list-link3">
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Ressourceries</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Borne de collecte</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Valorisation textile</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Nos BOUTIKS</a></li>
            </ul>
          </li>
          <li class="header-ad__content-item" id="link-button4"><a class="header-ad__item-link" href="#">Nos adresses</a>
            <ul class="header-ad__content-inner" id="list-link4">
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Ressourceries</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Borne de collecte</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Valorisation textile</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Nos BOUTIKS</a></li>
            </ul>
          </li>
          <li class="header-ad__content-item" id="link-button5"><a class="header-ad__item-link" href="#">Postuler</a>
            <ul class="header-ad__content-inner" id="list-link5">
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Ressourceries</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Borne de collecte</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Valorisation textile</a></li>
              <li class="header-ad__inner-item"><a class="header-ad__inner-link" href="#">Nos BOUTIKS</a></li>
            </ul>
          </li>
          <li class="header-ad__content-item">
            <button class="header-ad__content-btn"> 
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_610)">
                  <path class="phone__icon"
                    d="M12.8766 9.1894C12.0195 9.1894 11.1779 9.05534 10.3804 8.79178C9.98958 8.65849 9.50917 8.78077 9.27066 9.02573L7.6965 10.2141C5.87092 9.23956 4.7464 8.11541 3.78521 6.30354L4.93857 4.77039C5.23822 4.47114 5.3457 4.03401 5.21693 3.62385C4.95224 2.82213 4.81779 1.98093 4.81779 1.12343C4.81782 0.503964 4.31386 0 3.69443 0H1.12339C0.503964 0 0 0.503964 0 1.12339C0 8.22365 5.77638 14 12.8766 14C13.4961 14 14 13.496 14 12.8766V10.3127C14 9.69336 13.496 9.1894 12.8766 9.1894Z"
                    fill="white" />
                </g>
                <defs>
                  <clipPath>
                    <rect class="phone__icon" width="14" height="14" fill="white" />
                  </clipPath>
                </defs>
              </svg>
              <span class="btn-num">0596 76 38 18</span>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- end nav adaptive -->