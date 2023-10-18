<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
   <?php wp_head(); ?>
</head>

<body>
   <header class="header">
      <div class="header__left">
         <a class="logo" href="">
            <svg class="logo__icon">
               <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#logo"></use>
            </svg>
         </a>
         <ul class="header__adress">
            <li class="header__adress-item">
               <span class="header__adress-title">Центральный район:</span>
               <span class="header__adress-street">ул. Комсомольская, 6 </span>
            </li>
            <li class="header__adress-item">
               <span class="header__adress-title">Дзержинский район:</span>
               <span class="header__adress-street">ул. 8 Воздушной Армии, 11Б</span>
            </li>
            <li class="header__adress-item">
               <span class="header__adress-title">Красноармейский район:</span>
               <span class="header__adress-street">бульв. Энгельса, 27Б </span>
            </li>
         </ul>
      </div>
      <div class="header__right">
         <div class="social header__social">
            <a class="social__item" href="">
               <svg class="social__icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#social-icon-inst"></use>
               </svg>
            </a>
            <a class="social__item" href="">
               <svg class="social__icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#social-icon-fb"></use>
               </svg>
            </a>
            <a class="social__item" href="">
               <svg class="social__icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#social-icon-youtube"></use>
               </svg>
            </a>
         </div>
         <div class="header__contact">
            <p class="header__contact-badge">
               <span class="header__contact-mark"></span>
               <span class="header__contact-text"> Сейчас работаем</span>
            </p>
            <a class="header__contact-number" href="">
               <svg class="header__contact-icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-phone"></use>
               </svg>
               <span> 9 (999) 99 99 99</span>
            </a>
         </div>
         <button class="btn btn-primary"><span>Заказать звонок</span></button>
      </div>
   </header>
