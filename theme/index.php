<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <?php wp_head(); ?>
   </head>

   <body>
      <?php get_header(); ?>
      <main class="main">
         <section class="hero">
            <div class="container">
               <div class="hero__content">
                  <h1 class="hero__title">В имплантации<br>цена не главное</h1>
                  <p class="hero__subtitle">Главное гарантия 25 лет,<br>мы уверены в своей работе</p>
                  <p class="hero__info"><b>Оставьте заявку, мы перезвоним в течении 5 минут</b> и поможем выбрать удобное время для записи</p>
                  <button class="hero__btn">Записаться на консультацию</button>
               </div>
               <img class="hero__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero__img.png" alt="Главная картинки" width="280" height="190" >
               <div class="hero__bullet">
                  <div class="hero__bullet-item">
                     <svg class="hero__bullet-icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-check"></use>
                     </svg>
                     <h2 class="hero__bullet-title"><b>Качество лечения</b><br>на уровне мировых стандартов</h2>
                  </div>
                  <div class="hero__bullet-item">
                     <svg class="hero__bullet-icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-check"></use>
                     </svg>
                     <h2 class="hero__bullet-title"><b>Международная пожизненная гарантия</b><br>на имплантаты</h2>
                  </div>
                  <div class="hero__bullet-item">
                     <svg class="hero__bullet-icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-check"></use>
                     </svg>
                     <h2 class="hero__bullet-title"><b>Имплантация</b><br>без боли</h2>
                  </div>
                  <div class="hero__bullet-item">
                     <svg class="hero__bullet-icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-check"></use>
                     </svg>
                     <h2 class="hero__bullet-title"><b>Большой опыт работы</b><br>со сложными случаями</h2>
                  </div>
               </div>
            </div>
         </section>
         <section class="smile">
            <div class="container">
               <h2 class="smile__title"><b>Делаем улыбки здоровыми и красивыми</b> уже более 30 лет </h2>
               <div class="smile__grid">
                  <img class="smile__grid-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/smile__hero-1.png" alt="Картинка улыбки" width="130" height="260" data-index="0" > <img class="smile__grid-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/smile__hero-2.png" alt="Картинка улыбки" width="130" height="190" data-index="1" > <img class="smile__grid-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/smile__hero-3.png" alt="Картинка улыбки" width="130" height="220" data-index="2" >
                  <img class="smile__grid-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/smile__hero-4.png" alt="Картинка улыбки" width="130" height="260" data-index="3" >
               </div>
               <div class="smile__reating">
                  <h2 class="smile__reating-title">Наша стоматология входит<br><b>в ТОП-10</b> стоматологий области</h2>
                  <p class="smile__reating-subtitle">Рейтинг<br>на независимых сайтах:</p>
                  <div class="smile__company">
                     <a class="smile__company-item" href="#"
                        ><img class="smile__company-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/rating__hero-1.png" alt="Лого компании" width="55" height="55">
                        <span class="smile__company-info"
                           ><span class="smile__company-count"
                              ><svg class="smile__company-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-star"></use>
                              </svg>
                              <span>4,7</span> </span
                           ><span class="smile__company-text">средняя оценка из 5</span> </span
                        ><span class="smile__company-link"
                           ><svg class="smile__company-icon--link">
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-link"></use>
                           </svg> </span></a
                     ><a class="smile__company-item" href="#"
                        ><img class="smile__company-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/rating__hero-2.png" alt="Лого компании" width="55" height="55">
                        <span class="smile__company-info"
                           ><span class="smile__company-count"
                              ><svg class="smile__company-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-star"></use>
                              </svg>
                              <span>4,8</span> </span
                           ><span class="smile__company-text">средняя оценка из 5</span> </span
                        ><span class="smile__company-link"
                           ><svg class="smile__company-icon--link">
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-link"></use>
                           </svg> </span></a
                     ><a class="smile__company-item" href="#"
                        ><img class="smile__company-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/rating__hero-3.png" alt="Лого компании" width="55" height="55">
                        <span class="smile__company-info"
                           ><span class="smile__company-count"
                              ><svg class="smile__company-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-star"></use>
                              </svg>
                              <span>4,7</span> </span
                           ><span class="smile__company-text">средняя оценка из 5</span> </span
                        ><span class="smile__company-link"
                           ><svg class="smile__company-icon--link">
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-link"></use>
                           </svg> </span></a
                     ><a class="smile__company-item" href="#"
                        ><img class="smile__company-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/rating__hero-4.png" alt="Лого компании" width="55" height="55">
                        <span class="smile__company-info"
                           ><span class="smile__company-count"
                              ><svg class="smile__company-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-star"></use>
                              </svg>
                              <span>8,75</span> </span
                           ><span class="smile__company-text">средняя оценка из 5</span> </span
                        ><span class="smile__company-link"
                           ><svg class="smile__company-icon--link">
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-link"></use></svg></span
                     ></a>
                  </div>
               </div>
            </div>
         </section>
         <section class="kinds">
            <div class="container">
               <h2 class="kinds__title"><b>Виды имплантации зубов</b><br>в сети стоматологий «Ольга»</h2>
               <div class="kinds__stages">
                  <div class="kinds__stages-item" data-index="0">
                     <img class="kinds__stages-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/kinds__hero-1.png" alt="Картинка зубов" width="280" height="130" >
                     <div class="kinds__card">
                        <h3 class="kinds__card-title">Одномоментная</h3>
                        <div class="kinds__card-info">
                           <p class="kinds__card-subtitle">Производится:</p>
                           <ul class="kinds__card-list">
                              <li class="kinds__card-item">сразу после удаления зуба</li>
                           </ul>
                        </div>
                        <ul class="kinds__card-bullets">
                           <li class="kinds__card-bullet">
                              <svg class="kinds__card-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-plus"></use>
                              </svg>
                              Удаление зуба и установка имплантата за 1 прием
                           </li>
                           <li class="kinds__card-bullet">
                              <svg class="kinds__card-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-plus"></use>
                              </svg>
                              Возможность изготовления временной коронки в день операции
                           </li>
                           <li class="kinds__card-bullet">
                              <svg class="kinds__card-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-plus"></use>
                              </svg>
                              Возможность изготовления временной коронки в день операции, а значит, вы не останетесь без зуба на период «приживления» имплантата
                           </li>
                           <li class="kinds__card-bullet">
                              <svg class="kinds__card-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-plus"></use>
                              </svg>
                              Сохраняются контуры десны, благодаря этому новая коронка не будет отличаться от собственных зубов
                           </li>
                           <li class="kinds__card-bullet">
                              <svg class="kinds__card-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-plus"></use>
                              </svg>
                              Значительное сокращение сроков протезирования
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="kinds__stages-item" data-index="1">
                     <img class="kinds__stages-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/kinds__hero-2.png" alt="Картинка зубов" width="280" height="130" >
                     <div class="kinds__card">
                        <h3 class="kinds__card-title">Двухэтапная</h3>
                        <div class="kinds__card-info">
                           <p class="kinds__card-subtitle">Производится:</p>
                           <ul class="kinds__card-list">
                              <li class="kinds__card-item">зуб удален давно</li>
                              <li class="kinds__card-item">есть недостаток костной ткани</li>
                           </ul>
                        </div>
                        <ul class="kinds__card-bullets">
                           <li class="kinds__card-bullet">
                              <svg class="kinds__card-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-plus"></use>
                              </svg>
                              Консервативный и более изученный вид имплантации
                           </li>
                           <li class="kinds__card-bullet">
                              <svg class="kinds__card-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-plus"></use>
                              </svg>
                              Минимальный риск осложнений
                           </li>
                           <li class="kinds__card-bullet">
                              <svg class="kinds__card-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-plus"></use>
                              </svg>
                              Более прогнозируемый вид вмешательства
                           </li>
                           <li class="kinds__card-bullet">
                              <svg class="kinds__card-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-plus"></use>
                              </svg>
                              Возможность установки коронки сразу после имплантации
                           </li>
                           <li class="kinds__card-bullet">
                              <svg class="kinds__card-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-minus"></use>
                              </svg>
                              Может потребоваться наращивание костной ткани
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="kinds__stages-item" data-index="2">
                     <img class="kinds__stages-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/kinds__hero-3.png" alt="Картинка зубов" width="280" height="130" >
                     <div class="kinds__card">
                        <h3 class="kinds__card-title">«Все на 4/все на 6»</h3>
                        <div class="kinds__card-info">
                           <p class="kinds__card-subtitle">Производится:</p>
                           <ul class="kinds__card-list">
                              <li class="kinds__card-item">отсутствует большинство зубов или все зубы</li>
                              <li class="kinds__card-item">пародонтит тяжелой степени, недостаток костной ткани</li>
                              <li class="kinds__card-item">сильная атрофия челюстей</li>
                           </ul>
                        </div>
                        <ul class="kinds__card-bullets">
                           <li class="kinds__card-bullet">
                              <svg class="kinds__card-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-plus"></use>
                              </svg>
                              Минимальная травматичность
                           </li>
                           <li class="kinds__card-bullet">
                              <svg class="kinds__card-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-plus"></use>
                              </svg>
                              Нет необходимости в костной пластике
                           </li>
                           <li class="kinds__card-bullet">
                              <svg class="kinds__card-icon">
                                 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-plus"></use>
                              </svg>
                              Фиксация временного протеза в день операции и возможность полноценной жизни уже на следующий день
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <?php get_footer(); ?>
   </body>
</html>
