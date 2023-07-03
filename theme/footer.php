<footer class="footer">
   <div class="container">
      <div class="footer__top">
         <div class="footer__first">
            <a class="logo footer__logo" href="">
               <svg class="logo__icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#logo"></use>
               </svg>
            </a>
            <div class="social footer__social">
               <a class="social__item" href="">
                  <svg class="social__icon">
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#social-icon-od"></use>
                  </svg>
               </a>
               <a class="social__item" href="">
                  <svg class="social__icon">
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#social-icon-vk"></use>
                  </svg>
               </a>
               <a class="social__item" href="">
                  <svg class="social__icon">
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#social-icon-youtube"></use>
                  </svg>
               </a>
            </div>
         </div>
         <div class="footer__second">
            <p class="footer__title footer__title--padding">Адреса клиник</p>
            <ul class="footer__adress">
               <li class="footer__adress-item footer__adress-item--padding">
                  <span class="footer__adress-title">Центральный район:</span>
                  <span class="footer__adress-street">ул. Комсомольская, 6 </span>
               </li>
               <li class="footer__adress-item">
                  <span class="footer__adress-title">Дзержинский район:</span>
                  <span class="footer__adress-street">ул. 8 Воздушной Армии, 11Б</span>
               </li>
               <li class="footer__adress-item">
                  <span class="footer__adress-title">Красноармейский район:</span>
                  <span class="footer__adress-street">бульв. Энгельса, 27Б </span>
               </li>
               <li class="footer__adress-line">
                  <svg class="footer__adress-icon">
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-footer-line"></use>
                  </svg>
               </li>
            </ul>
            <p class="footer__time"><strong>8:00-20:00 без выходных</strong></p>
         </div>
         <div class="footer__third">
            <p class="footer__title footer__third-title">Контакты</p>
            <div class="footer__contact">
               <p class="footer__badge">Единый колл-центр:</p>
               <a class="footer__contact-item" href="">
                  <svg class="footer__contact-icon">
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-phone"></use>
                  </svg>
                  9 (999) 99 99 99
               </a>
               <a class="footer__contact-item" href="">
                  <svg class="footer__contact-icon">
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-phone"></use>
                  </svg>
                  0 (000) 00 00 00
               </a>
               <a class="footer__contact-item" href="">
                  <svg class="footer__contact-icon">
                     <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-mail"></use>
                  </svg>
                  info@olgavlg.com
               </a>
            </div>
            <button class="btn btn-primary footer__btn"><span>Заказать звонок</span></button>
         </div>
      </div>
      <div class="footer__center">
         <img class="footer__map" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer__map.png" loading="lazy" alt="Тестовая карта для фона" width="200" height="200" />
      </div>
      <div class="footer__bottom">
         <p class="footer__info">Сайт не является публичной офертой. 2023г. / <a class="footer__policy" href="">Политика конфиденциальности</a></p>
         <a class="develop" href="https://github.com/suchkovcode/">Создание сайта</a>
      </div>
   </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
