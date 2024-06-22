<?php
/*
Template Name: Page How Work
*/
?>
<?php  get_header($name); ?>
  <div class="scroll-container other-page page-how-work phwk">
    <header class="header">
      <div class="header__container container">
        <div class="header__logo logo img-wrp">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/header__logo-svg.svg" alt="svg" loading="lazy">
          </a>
        </div>

        <nav class="header__nav main-nav">
          <ul class="header__nav-list">
            <?php
            global $wp;
            $menu_items = wp_get_nav_menu_items('main');
            $current_url = home_url(add_query_arg(array(), $wp->request));
            
            if ($menu_items) {
              foreach ($menu_items as $menu_item) {
                $class = 'header__nav-link small-text';
                if (rtrim($menu_item->url, '/') === rtrim($current_url, '/')) {
                  $class .= ' active';
                }
                echo '<li class="header__nav-item"><a class="' . $class . '" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
              }
            }
            ?>
          </ul>
        </nav>

        <?php
					// Получаем ID главной страницы
					$front_page_id = get_option('page_on_front');
					// Получаем объект поста главной страницы
					$front_page = get_post($front_page_id);
					// Получаем значение поля 'my_field' на главной странице
					$front_page_text = get_post_meta($front_page->ID, 'tg_link', true);

					// Используем значение поля 'my_field'
					if (!empty($front_page_text)) {
							echo '<a class="header__btn main-btn small-text" target="_blank" href="' . $front_page_text . '">';
					}
				?>
        <!-- <a href="#" class="header__btn main-btn small-text"> -->
          <span class="main-btn__text small-text">Купить лицензию</span>
          <div class="main-btn__effect"></div>
        </a>
      </div>
    </header>

    <main>
      <section class="page-how-work-s1 phwks1">
        <div class="phwks1__container container">
          <div class="phwks1__title title-wrp">
            <div class="phwks1__pre-title title-wrp__pre-title pre-title">
              <div class="pre-title-lp img-wrp">
                <lottie-player
                  class=""
                  src="<?php bloginfo('template_url'); ?>/assets/lottie//web/left.json"
                  background="transparent"
                  speed="1"
                ></lottie-player>
              </div>
              <span
                class="phwks1__pre-title-text title-wrp__pre-title-text small-text"
                >Как работает</span
              >
              <div class="pre-title-lp img-wrp">
                <lottie-player
                  class=""
                  src="<?php bloginfo('template_url'); ?>/assets/lottie//web/right.json"
                  background="transparent"
                  speed="1"
                ></lottie-player>
              </div>
            </div>
            <div class="phwks1__title-text title-wrp__text big-title">
              <?php echo get_post_meta(get_the_ID(), 'how_work_title', true);?>
            </div>
            <div class="phwks1__title-desk title-wrp__desk def-text">
              <?php echo get_post_meta(get_the_ID(), 'how_work_desk', true);?>
            </div>
          </div>

          <div class="top-mobile-navigation">
            <div
              class="slider-section__swiper-button-prev swiper-button-prev img-wrp"
            >
              <div class="slider-section__swiper-arrow img-wrp">
                <img
                  src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-arrow-prev.svg"
                  alt="svg"
                  loading="lazy"
                />
              </div>
              <div class="slider-section__swiper-bg img-wrp">
                <img
                  src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-bg.svg"
                  alt="svg"
                  loading="lazy"
                />
              </div>
            </div>
            <div class="top-mobile-navigation-text">
              <em>Выкупы</em>
              <span>(урок <i>1</i> из 6)</span>
            </div>
            <div
              class="slider-section__swiper-button-next swiper-button-next img-wrp"
            >
              <div class="slider-section__swiper-arrow img-wrp">
                <img
                  src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-arrow-next.svg"
                  alt="svg"
                  loading="lazy"
                />
              </div>
              <div class="slider-section__swiper-bg img-wrp">
                <img
                  src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-bg.svg"
                  alt="svg"
                  loading="lazy"
                />
              </div>
            </div>
          </div>

          <div class="win-box__top win-box__top--global">
            <div class="win-box__top-icon img-wrp">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/win-box__top-icon.svg" alt="svg" loading="lazy"></a>
            </div>
            <ul class="win-box__top-menu">
              <li class="win-box__top-menu-item win-box__top-menu-item1 def-text active">
                <?php
                  $current_page = get_post();
                  $page_id = $current_page->ID;
                  $pod = pods('page', $page_id);
                  $field = $pod->field('how_work_menu');
                  echo $field[0];
                ?>
              </li>
              <li class="win-box__top-menu-item win-box__top-menu-item2 def-text">
                <?php
                  $current_page = get_post();
                  $page_id = $current_page->ID;
                  $pod = pods('page', $page_id);
                  $field = $pod->field('how_work_menu');
                  echo $field[1];
                ?>
              </li>
              <li class="win-box__top-menu-item win-box__top-menu-item3 def-text">
               <?php
                  $current_page = get_post();
                  $page_id = $current_page->ID;
                  $pod = pods('page', $page_id);
                  $field = $pod->field('how_work_menu');
                  echo $field[2];
                ?>
              </li>
              <li class="win-box__top-menu-item win-box__top-menu-item4 def-text">
                <?php
                  $current_page = get_post();
                  $page_id = $current_page->ID;
                  $pod = pods('page', $page_id);
                  $field = $pod->field('how_work_menu');
                  echo $field[3];
                ?>
              </li>
              <li class="win-box__top-menu-item win-box__top-menu-item5 def-text">
                <?php
                  $current_page = get_post();
                  $page_id = $current_page->ID;
                  $pod = pods('page', $page_id);
                  $field = $pod->field('how_work_menu');
                  echo $field[4];
                ?>
              </li>
              <li class="win-box__top-menu-item win-box__top-menu-item6 def-text">
                <?php
                  $current_page = get_post();
                  $page_id = $current_page->ID;
                  $pod = pods('page', $page_id);
                  $field = $pod->field('how_work_menu');
                  echo $field[5];
                ?>
              </li>
            </ul>

            <ul class="win-box__top-menu-mobile">
              <li>
                <span class="win-box__top-menu-mobile-text">1</span>
                <div class="win-box__top-menu-mobile-bg img-wrp">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g filter="url(#filter0_b_4310_689)">
                      <ellipse
                        cx="12"
                        cy="12"
                        rx="12"
                        ry="12"
                        transform="rotate(-180 12 12)"
                        fill="#131727"
                      />
                      <path
                        d="M0.249999 12C0.25 5.51065 5.51065 0.25 12 0.250001C18.4893 0.250001 23.75 5.51066 23.75 12C23.75 18.4893 18.4893 23.75 12 23.75C5.51065 23.75 0.249999 18.4893 0.249999 12Z"
                        stroke="url(#paint0_linear_4310_689)"
                        stroke-width="0.5"
                      />
                    </g>
                    <defs>
                      <filter
                        id="filter0_b_4310_689"
                        x="-110"
                        y="-110"
                        width="244"
                        height="244"
                        filterUnits="userSpaceOnUse"
                        color-interpolation-filters="sRGB"
                      >
                        <feFlood
                          flood-opacity="0"
                          result="BackgroundImageFix"
                        />
                        <feGaussianBlur
                          in="BackgroundImageFix"
                          stdDeviation="55"
                        />
                        <feComposite
                          in2="SourceAlpha"
                          operator="in"
                          result="effect1_backgroundBlur_4310_689"
                        />
                        <feBlend
                          mode="normal"
                          in="SourceGraphic"
                          in2="effect1_backgroundBlur_4310_689"
                          result="shape"
                        />
                      </filter>
                      <linearGradient
                        id="paint0_linear_4310_689"
                        x1="12"
                        y1="24"
                        x2="12"
                        y2="8.58275e-07"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#212941" />
                        <stop
                          offset="0.469183"
                          stop-color="#2C3A65"
                        />
                        <stop offset="1" stop-color="#272C3D" />
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
              </li>
              <li>
                <span class="win-box__top-menu-mobile-text">2</span>
                <div class="win-box__top-menu-mobile-bg img-wrp">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g filter="url(#filter0_b_4310_689)">
                      <ellipse
                        cx="12"
                        cy="12"
                        rx="12"
                        ry="12"
                        transform="rotate(-180 12 12)"
                        fill="#131727"
                      />
                      <path
                        d="M0.249999 12C0.25 5.51065 5.51065 0.25 12 0.250001C18.4893 0.250001 23.75 5.51066 23.75 12C23.75 18.4893 18.4893 23.75 12 23.75C5.51065 23.75 0.249999 18.4893 0.249999 12Z"
                        stroke="url(#paint0_linear_4310_689)"
                        stroke-width="0.5"
                      />
                    </g>
                    <defs>
                      <filter
                        id="filter0_b_4310_689"
                        x="-110"
                        y="-110"
                        width="244"
                        height="244"
                        filterUnits="userSpaceOnUse"
                        color-interpolation-filters="sRGB"
                      >
                        <feFlood
                          flood-opacity="0"
                          result="BackgroundImageFix"
                        />
                        <feGaussianBlur
                          in="BackgroundImageFix"
                          stdDeviation="55"
                        />
                        <feComposite
                          in2="SourceAlpha"
                          operator="in"
                          result="effect1_backgroundBlur_4310_689"
                        />
                        <feBlend
                          mode="normal"
                          in="SourceGraphic"
                          in2="effect1_backgroundBlur_4310_689"
                          result="shape"
                        />
                      </filter>
                      <linearGradient
                        id="paint0_linear_4310_689"
                        x1="12"
                        y1="24"
                        x2="12"
                        y2="8.58275e-07"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#212941" />
                        <stop
                          offset="0.469183"
                          stop-color="#2C3A65"
                        />
                        <stop offset="1" stop-color="#272C3D" />
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
              </li>
              <li>
                <span class="win-box__top-menu-mobile-text">3</span>
                <div class="win-box__top-menu-mobile-bg img-wrp">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g filter="url(#filter0_b_4310_689)">
                      <ellipse
                        cx="12"
                        cy="12"
                        rx="12"
                        ry="12"
                        transform="rotate(-180 12 12)"
                        fill="#131727"
                      />
                      <path
                        d="M0.249999 12C0.25 5.51065 5.51065 0.25 12 0.250001C18.4893 0.250001 23.75 5.51066 23.75 12C23.75 18.4893 18.4893 23.75 12 23.75C5.51065 23.75 0.249999 18.4893 0.249999 12Z"
                        stroke="url(#paint0_linear_4310_689)"
                        stroke-width="0.5"
                      />
                    </g>
                    <defs>
                      <filter
                        id="filter0_b_4310_689"
                        x="-110"
                        y="-110"
                        width="244"
                        height="244"
                        filterUnits="userSpaceOnUse"
                        color-interpolation-filters="sRGB"
                      >
                        <feFlood
                          flood-opacity="0"
                          result="BackgroundImageFix"
                        />
                        <feGaussianBlur
                          in="BackgroundImageFix"
                          stdDeviation="55"
                        />
                        <feComposite
                          in2="SourceAlpha"
                          operator="in"
                          result="effect1_backgroundBlur_4310_689"
                        />
                        <feBlend
                          mode="normal"
                          in="SourceGraphic"
                          in2="effect1_backgroundBlur_4310_689"
                          result="shape"
                        />
                      </filter>
                      <linearGradient
                        id="paint0_linear_4310_689"
                        x1="12"
                        y1="24"
                        x2="12"
                        y2="8.58275e-07"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#212941" />
                        <stop
                          offset="0.469183"
                          stop-color="#2C3A65"
                        />
                        <stop offset="1" stop-color="#272C3D" />
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
              </li>
              <li>
                <span class="win-box__top-menu-mobile-text">4</span>
                <div class="win-box__top-menu-mobile-bg img-wrp">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g filter="url(#filter0_b_4310_689)">
                      <ellipse
                        cx="12"
                        cy="12"
                        rx="12"
                        ry="12"
                        transform="rotate(-180 12 12)"
                        fill="#131727"
                      />
                      <path
                        d="M0.249999 12C0.25 5.51065 5.51065 0.25 12 0.250001C18.4893 0.250001 23.75 5.51066 23.75 12C23.75 18.4893 18.4893 23.75 12 23.75C5.51065 23.75 0.249999 18.4893 0.249999 12Z"
                        stroke="url(#paint0_linear_4310_689)"
                        stroke-width="0.5"
                      />
                    </g>
                    <defs>
                      <filter
                        id="filter0_b_4310_689"
                        x="-110"
                        y="-110"
                        width="244"
                        height="244"
                        filterUnits="userSpaceOnUse"
                        color-interpolation-filters="sRGB"
                      >
                        <feFlood
                          flood-opacity="0"
                          result="BackgroundImageFix"
                        />
                        <feGaussianBlur
                          in="BackgroundImageFix"
                          stdDeviation="55"
                        />
                        <feComposite
                          in2="SourceAlpha"
                          operator="in"
                          result="effect1_backgroundBlur_4310_689"
                        />
                        <feBlend
                          mode="normal"
                          in="SourceGraphic"
                          in2="effect1_backgroundBlur_4310_689"
                          result="shape"
                        />
                      </filter>
                      <linearGradient
                        id="paint0_linear_4310_689"
                        x1="12"
                        y1="24"
                        x2="12"
                        y2="8.58275e-07"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#212941" />
                        <stop
                          offset="0.469183"
                          stop-color="#2C3A65"
                        />
                        <stop offset="1" stop-color="#272C3D" />
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
              </li>
              <li>
                <span class="win-box__top-menu-mobile-text">5</span>
                <div class="win-box__top-menu-mobile-bg img-wrp">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g filter="url(#filter0_b_4310_689)">
                      <ellipse
                        cx="12"
                        cy="12"
                        rx="12"
                        ry="12"
                        transform="rotate(-180 12 12)"
                        fill="#131727"
                      />
                      <path
                        d="M0.249999 12C0.25 5.51065 5.51065 0.25 12 0.250001C18.4893 0.250001 23.75 5.51066 23.75 12C23.75 18.4893 18.4893 23.75 12 23.75C5.51065 23.75 0.249999 18.4893 0.249999 12Z"
                        stroke="url(#paint0_linear_4310_689)"
                        stroke-width="0.5"
                      />
                    </g>
                    <defs>
                      <filter
                        id="filter0_b_4310_689"
                        x="-110"
                        y="-110"
                        width="244"
                        height="244"
                        filterUnits="userSpaceOnUse"
                        color-interpolation-filters="sRGB"
                      >
                        <feFlood
                          flood-opacity="0"
                          result="BackgroundImageFix"
                        />
                        <feGaussianBlur
                          in="BackgroundImageFix"
                          stdDeviation="55"
                        />
                        <feComposite
                          in2="SourceAlpha"
                          operator="in"
                          result="effect1_backgroundBlur_4310_689"
                        />
                        <feBlend
                          mode="normal"
                          in="SourceGraphic"
                          in2="effect1_backgroundBlur_4310_689"
                          result="shape"
                        />
                      </filter>
                      <linearGradient
                        id="paint0_linear_4310_689"
                        x1="12"
                        y1="24"
                        x2="12"
                        y2="8.58275e-07"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#212941" />
                        <stop
                          offset="0.469183"
                          stop-color="#2C3A65"
                        />
                        <stop offset="1" stop-color="#272C3D" />
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
              </li>
            </ul>

            <div class="win-box__top-nav">
              <div class="win-box__top-nav-item"></div>
              <div class="win-box__top-nav-item"></div>
              <div class="win-box__top-nav-item"></div>
            </div>
          </div>

          <div class="page-how-work-swiper swiper">
            <div class="swiper-wrapper">

              <!-- web\tab -->
              <div class="swiper-slide-main">
                <div class="win-box card_card__VgpBR card_card-hero__pjFbO card_card-animated__5dDBc card_card-animated-loop__6iL1V">
                  <div class="win-box__top"></div>
                  <div class="win-box__center win-box__center1 active active-effect">
                    <div class="win-box__left">
                      <ul class="win-box__left-list">
                        <?php
                          $current_page = get_post();
                          $page_id = $current_page->ID;
                          $pod = pods('page', $page_id);
                          $field1 = $pod->field('how_work_text_list1');
                          $index = 0;
                          if (!empty($field1)) { 
                            foreach ($field1 as $item) {
                              $dynamic_class = 'win-box__left-list-item' . ($index + 1);
                              $active_class = ($index == 0) ? ' active' : '';
                              echo '<li class="win-box__left-list-item '. $dynamic_class .' small-text' . $active_class . '">';
                              echo $field1[$index];
                              echo '</li>';
                              $index++;
                            }
                          }
                        ?>
                      </ul>
                      <a href="#" class="win-box__btn main-btn small-text openBtn">
                        <span class="video_link" style="display: none;"><?php echo get_post_meta(get_the_ID(), 'how_work_video1', true);?></span>
                        <span class="main-btn__text small-text">Видео</span>
                        <div class="main-btn__effect"></div>
                        <div class="main-btn__icon img-wrp">
                          <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.5 7.13397C15.1667 7.51888 15.1667 8.48112 14.5 8.86603L5.5 14.0622C4.83333 14.4471 4 13.966 4 13.1962L4 2.80385C4 2.03405 4.83333 1.55292 5.5 1.93782L14.5 7.13397Z"
                              fill="url(#paint0_linear_2694_20224)"
                            />
                            <mask
                              id="mask0_2694_20224"
                              style="mask-type: alpha"
                              maskUnits="userSpaceOnUse"
                              x="4"
                              y="1"
                              width="11"
                              height="14"
                            >
                              <path
                                d="M14.5 7.13397C15.1667 7.51888 15.1667 8.48112 14.5 8.86603L5.5 14.0622C4.83333 14.4471 4 13.966 4 13.1962L4 2.80385C4 2.03405 4.83333 1.55292 5.5 1.93782L14.5 7.13397Z"
                                fill="url(#paint1_linear_2694_20224)"
                              />
                            </mask>
                            <g mask="url(#mask0_2694_20224)">
                              <g filter="url(#filter0_f_2694_20224)">
                                <circle
                                  cx="20"
                                  cy="12"
                                  r="5"
                                  fill="#40527B"
                                />
                              </g>
                              <g filter="url(#filter1_f_2694_20224)">
                                <ellipse
                                  cx="5.5"
                                  cy="-2"
                                  rx="5.5"
                                  ry="5"
                                  fill="#40527B"
                                />
                              </g>
                            </g>
                            <defs>
                              <filter
                                id="filter0_f_2694_20224"
                                x="8"
                                y="0"
                                width="24"
                                height="24"
                                filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB"
                              >
                                <feFlood
                                  flood-opacity="0"
                                  result="BackgroundImageFix"
                                />
                                <feBlend
                                  mode="normal"
                                  in="SourceGraphic"
                                  in2="BackgroundImageFix"
                                  result="shape"
                                />
                                <feGaussianBlur
                                  stdDeviation="3.5"
                                  result="effect1_foregroundBlur_2694_20224"
                                />
                              </filter>
                              <filter
                                id="filter1_f_2694_20224"
                                x="-7"
                                y="-14"
                                width="25"
                                height="24"
                                filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB"
                              >
                                <feFlood
                                  flood-opacity="0"
                                  result="BackgroundImageFix"
                                />
                                <feBlend
                                  mode="normal"
                                  in="SourceGraphic"
                                  in2="BackgroundImageFix"
                                  result="shape"
                                />
                                <feGaussianBlur
                                  stdDeviation="3.5"
                                  result="effect1_foregroundBlur_2694_20224"
                                />
                              </filter>
                              <linearGradient
                                id="paint0_linear_2694_20224"
                                x1="16"
                                y1="8"
                                x2="-3.49691e-07"
                                y2="8"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop stop-color="#303F61" />
                                <stop offset="1" stop-color="#1A1C21" />
                              </linearGradient>
                              <linearGradient
                                id="paint1_linear_2694_20224"
                                x1="17"
                                y1="8"
                                x2="5.08598e-08"
                                y2="8"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop stop-color="#303F61" />
                                <stop offset="1" stop-color="#1A1C21" />
                              </linearGradient>
                            </defs>
                          </svg>
                        </div>
                      </a>
                    </div>

                    <?php
                      $current_page = get_post();
                      $page_id = $current_page->ID;
                      $pod = pods('page', $page_id);
                      $field1 = $pod->field('how_work_text1');
                      $index = 0;
                      if (!empty($field1)) { 
                        foreach ($field1 as $item) {
                          $dynamic_class = 'win-box__text' . ($index + 1);
                          $active_class = ($index == 0) ? ' active' : '';
                          echo '<div class="win-box__text ' . $dynamic_class . ' def-text custom-scrollbar' . $active_class . '">';
                          echo $item;
                          echo '</div>';
                          $index++;
                        }
                      }
                    ?>
                  </div>

                  <div class="win-box__center win-box__center2">
                    <div class="win-box__left">
                      <ul class="win-box__left-list">
                        <?php
                          $current_page = get_post();
                          $page_id = $current_page->ID;
                          $pod = pods('page', $page_id);
                          $field1 = $pod->field('how_work_text_list2');
                          $index = 0;
                          if (!empty($field1)) { 
                            foreach ($field1 as $item) {
                              $dynamic_class = 'win-box__left-list-item' . ($index + 1);
                              $active_class = ($index == 0) ? ' active' : '';
                              echo '<li class="win-box__left-list-item '. $dynamic_class .' small-text' . $active_class . '">';
                              echo $field1[$index];
                              echo '</li>';
                              $index++;
                            }
                          }
                        ?>
                      </ul>
                      <a href="#" class="win-box__btn main-btn small-text openBtn">
                        <span class="video_link" style="display: none;"><?php echo get_post_meta(get_the_ID(), 'how_work_video2', true);?></span>
                        <span class="main-btn__text small-text">Видео</span>
                        <div class="main-btn__effect"></div>
                        <div class="main-btn__icon img-wrp">
                          <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.5 7.13397C15.1667 7.51888 15.1667 8.48112 14.5 8.86603L5.5 14.0622C4.83333 14.4471 4 13.966 4 13.1962L4 2.80385C4 2.03405 4.83333 1.55292 5.5 1.93782L14.5 7.13397Z"
                              fill="url(#paint0_linear_2694_20224)"
                            />
                            <mask
                              id="mask0_2694_20224"
                              style="mask-type: alpha"
                              maskUnits="userSpaceOnUse"
                              x="4"
                              y="1"
                              width="11"
                              height="14"
                            >
                              <path
                                d="M14.5 7.13397C15.1667 7.51888 15.1667 8.48112 14.5 8.86603L5.5 14.0622C4.83333 14.4471 4 13.966 4 13.1962L4 2.80385C4 2.03405 4.83333 1.55292 5.5 1.93782L14.5 7.13397Z"
                                fill="url(#paint1_linear_2694_20224)"
                              />
                            </mask>
                            <g mask="url(#mask0_2694_20224)">
                              <g filter="url(#filter0_f_2694_20224)">
                                <circle
                                  cx="20"
                                  cy="12"
                                  r="5"
                                  fill="#40527B"
                                />
                              </g>
                              <g filter="url(#filter1_f_2694_20224)">
                                <ellipse
                                  cx="5.5"
                                  cy="-2"
                                  rx="5.5"
                                  ry="5"
                                  fill="#40527B"
                                />
                              </g>
                            </g>
                            <defs>
                              <filter
                                id="filter0_f_2694_20224"
                                x="8"
                                y="0"
                                width="24"
                                height="24"
                                filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB"
                              >
                                <feFlood
                                  flood-opacity="0"
                                  result="BackgroundImageFix"
                                />
                                <feBlend
                                  mode="normal"
                                  in="SourceGraphic"
                                  in2="BackgroundImageFix"
                                  result="shape"
                                />
                                <feGaussianBlur
                                  stdDeviation="3.5"
                                  result="effect1_foregroundBlur_2694_20224"
                                />
                              </filter>
                              <filter
                                id="filter1_f_2694_20224"
                                x="-7"
                                y="-14"
                                width="25"
                                height="24"
                                filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB"
                              >
                                <feFlood
                                  flood-opacity="0"
                                  result="BackgroundImageFix"
                                />
                                <feBlend
                                  mode="normal"
                                  in="SourceGraphic"
                                  in2="BackgroundImageFix"
                                  result="shape"
                                />
                                <feGaussianBlur
                                  stdDeviation="3.5"
                                  result="effect1_foregroundBlur_2694_20224"
                                />
                              </filter>
                              <linearGradient
                                id="paint0_linear_2694_20224"
                                x1="16"
                                y1="8"
                                x2="-3.49691e-07"
                                y2="8"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop stop-color="#303F61" />
                                <stop offset="1" stop-color="#1A1C21" />
                              </linearGradient>
                              <linearGradient
                                id="paint1_linear_2694_20224"
                                x1="17"
                                y1="8"
                                x2="5.08598e-08"
                                y2="8"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop stop-color="#303F61" />
                                <stop offset="1" stop-color="#1A1C21" />
                              </linearGradient>
                            </defs>
                          </svg>
                        </div>
                      </a>
                    </div>

                    <?php
                      $current_page = get_post();
                      $page_id = $current_page->ID;
                      $pod = pods('page', $page_id);
                      $field1 = $pod->field('how_work_text2');
                      $index = 0;
                      if (!empty($field1)) { 
                        foreach ($field1 as $item) {
                          $dynamic_class = 'win-box__text' . ($index + 1);
                          $active_class = ($index == 0) ? ' active' : '';
                          echo '<div class="win-box__text ' . $dynamic_class . ' def-text custom-scrollbar' . $active_class . '">';
                          echo $item;
                          echo '</div>';
                          $index++;
                        }
                      }
                    ?>
                  </div>

                  <div class="win-box__center win-box__center3">
                    <div class="win-box__left">
                      <ul class="win-box__left-list">
                        <?php
                          $current_page = get_post();
                          $page_id = $current_page->ID;
                          $pod = pods('page', $page_id);
                          $field1 = $pod->field('how_work_text_list3');
                          $index = 0;
                          if (!empty($field1)) { 
                            foreach ($field1 as $item) {
                              $dynamic_class = 'win-box__left-list-item' . ($index + 1);
                              $active_class = ($index == 0) ? ' active' : '';
                              echo '<li class="win-box__left-list-item '. $dynamic_class .' small-text' . $active_class . '">';
                              echo $field1[$index];
                              echo '</li>';
                              $index++;
                            }
                          }
                        ?>
                      </ul>
                      <a href="#" class="win-box__btn main-btn small-text openBtn">
                        <span class="video_link" style="display: none;"><?php echo get_post_meta(get_the_ID(), 'how_work_video3', true);?></span>
                        <span class="main-btn__text small-text">Видео</span>
                        <div class="main-btn__effect"></div>
                        <div class="main-btn__icon img-wrp">
                          <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.5 7.13397C15.1667 7.51888 15.1667 8.48112 14.5 8.86603L5.5 14.0622C4.83333 14.4471 4 13.966 4 13.1962L4 2.80385C4 2.03405 4.83333 1.55292 5.5 1.93782L14.5 7.13397Z"
                              fill="url(#paint0_linear_2694_20224)"
                            />
                            <mask
                              id="mask0_2694_20224"
                              style="mask-type: alpha"
                              maskUnits="userSpaceOnUse"
                              x="4"
                              y="1"
                              width="11"
                              height="14"
                            >
                              <path
                                d="M14.5 7.13397C15.1667 7.51888 15.1667 8.48112 14.5 8.86603L5.5 14.0622C4.83333 14.4471 4 13.966 4 13.1962L4 2.80385C4 2.03405 4.83333 1.55292 5.5 1.93782L14.5 7.13397Z"
                                fill="url(#paint1_linear_2694_20224)"
                              />
                            </mask>
                            <g mask="url(#mask0_2694_20224)">
                              <g filter="url(#filter0_f_2694_20224)">
                                <circle
                                  cx="20"
                                  cy="12"
                                  r="5"
                                  fill="#40527B"
                                />
                              </g>
                              <g filter="url(#filter1_f_2694_20224)">
                                <ellipse
                                  cx="5.5"
                                  cy="-2"
                                  rx="5.5"
                                  ry="5"
                                  fill="#40527B"
                                />
                              </g>
                            </g>
                            <defs>
                              <filter
                                id="filter0_f_2694_20224"
                                x="8"
                                y="0"
                                width="24"
                                height="24"
                                filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB"
                              >
                                <feFlood
                                  flood-opacity="0"
                                  result="BackgroundImageFix"
                                />
                                <feBlend
                                  mode="normal"
                                  in="SourceGraphic"
                                  in2="BackgroundImageFix"
                                  result="shape"
                                />
                                <feGaussianBlur
                                  stdDeviation="3.5"
                                  result="effect1_foregroundBlur_2694_20224"
                                />
                              </filter>
                              <filter
                                id="filter1_f_2694_20224"
                                x="-7"
                                y="-14"
                                width="25"
                                height="24"
                                filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB"
                              >
                                <feFlood
                                  flood-opacity="0"
                                  result="BackgroundImageFix"
                                />
                                <feBlend
                                  mode="normal"
                                  in="SourceGraphic"
                                  in2="BackgroundImageFix"
                                  result="shape"
                                />
                                <feGaussianBlur
                                  stdDeviation="3.5"
                                  result="effect1_foregroundBlur_2694_20224"
                                />
                              </filter>
                              <linearGradient
                                id="paint0_linear_2694_20224"
                                x1="16"
                                y1="8"
                                x2="-3.49691e-07"
                                y2="8"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop stop-color="#303F61" />
                                <stop offset="1" stop-color="#1A1C21" />
                              </linearGradient>
                              <linearGradient
                                id="paint1_linear_2694_20224"
                                x1="17"
                                y1="8"
                                x2="5.08598e-08"
                                y2="8"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop stop-color="#303F61" />
                                <stop offset="1" stop-color="#1A1C21" />
                              </linearGradient>
                            </defs>
                          </svg>
                        </div>
                      </a>
                    </div>

                    <?php
                      $current_page = get_post();
                      $page_id = $current_page->ID;
                      $pod = pods('page', $page_id);
                      $field1 = $pod->field('how_work_text3');
                      $index = 0;
                      if (!empty($field1)) { 
                        foreach ($field1 as $item) {
                          $dynamic_class = 'win-box__text' . ($index + 1);
                          $active_class = ($index == 0) ? ' active' : '';
                          echo '<div class="win-box__text ' . $dynamic_class . ' def-text custom-scrollbar' . $active_class . '">';
                          echo $item;
                          echo '</div>';
                          $index++;
                        }
                      }
                    ?>
                  </div>

                  <div class="win-box__center win-box__center4">
                    <div class="win-box__left">
                      <ul class="win-box__left-list">
                        <?php
                          $current_page = get_post();
                          $page_id = $current_page->ID;
                          $pod = pods('page', $page_id);
                          $field1 = $pod->field('how_work_text_list4');
                          $index = 0;
                          if (!empty($field1)) { 
                            foreach ($field1 as $item) {
                              $dynamic_class = 'win-box__left-list-item' . ($index + 1);
                              $active_class = ($index == 0) ? ' active' : '';
                              echo '<li class="win-box__left-list-item '. $dynamic_class .' small-text' . $active_class . '">';
                              echo $field1[$index];
                              echo '</li>';
                              $index++;
                            }
                          }
                        ?>
                      </ul>
                      <a href="#" class="win-box__btn main-btn small-text openBtn">
                        <span class="video_link" style="display: none;"><?php echo get_post_meta(get_the_ID(), 'how_work_video4', true);?></span>
                        <span class="main-btn__text small-text">Видео</span>
                        <div class="main-btn__effect"></div>
                        <div class="main-btn__icon img-wrp">
                          <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.5 7.13397C15.1667 7.51888 15.1667 8.48112 14.5 8.86603L5.5 14.0622C4.83333 14.4471 4 13.966 4 13.1962L4 2.80385C4 2.03405 4.83333 1.55292 5.5 1.93782L14.5 7.13397Z"
                              fill="url(#paint0_linear_2694_20224)"
                            />
                            <mask
                              id="mask0_2694_20224"
                              style="mask-type: alpha"
                              maskUnits="userSpaceOnUse"
                              x="4"
                              y="1"
                              width="11"
                              height="14"
                            >
                              <path
                                d="M14.5 7.13397C15.1667 7.51888 15.1667 8.48112 14.5 8.86603L5.5 14.0622C4.83333 14.4471 4 13.966 4 13.1962L4 2.80385C4 2.03405 4.83333 1.55292 5.5 1.93782L14.5 7.13397Z"
                                fill="url(#paint1_linear_2694_20224)"
                              />
                            </mask>
                            <g mask="url(#mask0_2694_20224)">
                              <g filter="url(#filter0_f_2694_20224)">
                                <circle
                                  cx="20"
                                  cy="12"
                                  r="5"
                                  fill="#40527B"
                                />
                              </g>
                              <g filter="url(#filter1_f_2694_20224)">
                                <ellipse
                                  cx="5.5"
                                  cy="-2"
                                  rx="5.5"
                                  ry="5"
                                  fill="#40527B"
                                />
                              </g>
                            </g>
                            <defs>
                              <filter
                                id="filter0_f_2694_20224"
                                x="8"
                                y="0"
                                width="24"
                                height="24"
                                filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB"
                              >
                                <feFlood
                                  flood-opacity="0"
                                  result="BackgroundImageFix"
                                />
                                <feBlend
                                  mode="normal"
                                  in="SourceGraphic"
                                  in2="BackgroundImageFix"
                                  result="shape"
                                />
                                <feGaussianBlur
                                  stdDeviation="3.5"
                                  result="effect1_foregroundBlur_2694_20224"
                                />
                              </filter>
                              <filter
                                id="filter1_f_2694_20224"
                                x="-7"
                                y="-14"
                                width="25"
                                height="24"
                                filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB"
                              >
                                <feFlood
                                  flood-opacity="0"
                                  result="BackgroundImageFix"
                                />
                                <feBlend
                                  mode="normal"
                                  in="SourceGraphic"
                                  in2="BackgroundImageFix"
                                  result="shape"
                                />
                                <feGaussianBlur
                                  stdDeviation="3.5"
                                  result="effect1_foregroundBlur_2694_20224"
                                />
                              </filter>
                              <linearGradient
                                id="paint0_linear_2694_20224"
                                x1="16"
                                y1="8"
                                x2="-3.49691e-07"
                                y2="8"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop stop-color="#303F61" />
                                <stop offset="1" stop-color="#1A1C21" />
                              </linearGradient>
                              <linearGradient
                                id="paint1_linear_2694_20224"
                                x1="17"
                                y1="8"
                                x2="5.08598e-08"
                                y2="8"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop stop-color="#303F61" />
                                <stop offset="1" stop-color="#1A1C21" />
                              </linearGradient>
                            </defs>
                          </svg>
                        </div>
                      </a>
                    </div>

                    <?php
                      $current_page = get_post();
                      $page_id = $current_page->ID;
                      $pod = pods('page', $page_id);
                      $field1 = $pod->field('how_work_text4');
                      $index = 0;
                      if (!empty($field1)) { 
                        foreach ($field1 as $item) {
                          $dynamic_class = 'win-box__text' . ($index + 1);
                          $active_class = ($index == 0) ? ' active' : '';
                          echo '<div class="win-box__text ' . $dynamic_class . ' def-text custom-scrollbar' . $active_class . '">';
                          echo $item;
                          echo '</div>';
                          $index++;
                        }
                      }
                    ?>
                  </div>

                  <div class="win-box__center win-box__center5">
                    <div class="win-box__left">
                      <ul class="win-box__left-list">
                        <?php
                          $current_page = get_post();
                          $page_id = $current_page->ID;
                          $pod = pods('page', $page_id);
                          $field1 = $pod->field('how_work_text_list5');
                          $index = 0;
                          if (!empty($field1)) { 
                            foreach ($field1 as $item) {
                              $dynamic_class = 'win-box__left-list-item' . ($index + 1);
                              $active_class = ($index == 0) ? ' active' : '';
                              echo '<li class="win-box__left-list-item '. $dynamic_class .' small-text' . $active_class . '">';
                              echo $field1[$index];
                              echo '</li>';
                              $index++;
                            }
                          }
                        ?>
                      </ul>
                      <a href="#" class="win-box__btn main-btn small-text openBtn">
                        <span class="video_link" style="display: none;"><?php echo get_post_meta(get_the_ID(), 'how_work_video5', true);?></span>
                        <span class="main-btn__text small-text">Видео</span>
                        <div class="main-btn__effect"></div>
                        <div class="main-btn__icon img-wrp">
                          <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.5 7.13397C15.1667 7.51888 15.1667 8.48112 14.5 8.86603L5.5 14.0622C4.83333 14.4471 4 13.966 4 13.1962L4 2.80385C4 2.03405 4.83333 1.55292 5.5 1.93782L14.5 7.13397Z"
                              fill="url(#paint0_linear_2694_20224)"
                            />
                            <mask
                              id="mask0_2694_20224"
                              style="mask-type: alpha"
                              maskUnits="userSpaceOnUse"
                              x="4"
                              y="1"
                              width="11"
                              height="14"
                            >
                              <path
                                d="M14.5 7.13397C15.1667 7.51888 15.1667 8.48112 14.5 8.86603L5.5 14.0622C4.83333 14.4471 4 13.966 4 13.1962L4 2.80385C4 2.03405 4.83333 1.55292 5.5 1.93782L14.5 7.13397Z"
                                fill="url(#paint1_linear_2694_20224)"
                              />
                            </mask>
                            <g mask="url(#mask0_2694_20224)">
                              <g filter="url(#filter0_f_2694_20224)">
                                <circle
                                  cx="20"
                                  cy="12"
                                  r="5"
                                  fill="#40527B"
                                />
                              </g>
                              <g filter="url(#filter1_f_2694_20224)">
                                <ellipse
                                  cx="5.5"
                                  cy="-2"
                                  rx="5.5"
                                  ry="5"
                                  fill="#40527B"
                                />
                              </g>
                            </g>
                            <defs>
                              <filter
                                id="filter0_f_2694_20224"
                                x="8"
                                y="0"
                                width="24"
                                height="24"
                                filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB"
                              >
                                <feFlood
                                  flood-opacity="0"
                                  result="BackgroundImageFix"
                                />
                                <feBlend
                                  mode="normal"
                                  in="SourceGraphic"
                                  in2="BackgroundImageFix"
                                  result="shape"
                                />
                                <feGaussianBlur
                                  stdDeviation="3.5"
                                  result="effect1_foregroundBlur_2694_20224"
                                />
                              </filter>
                              <filter
                                id="filter1_f_2694_20224"
                                x="-7"
                                y="-14"
                                width="25"
                                height="24"
                                filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB"
                              >
                                <feFlood
                                  flood-opacity="0"
                                  result="BackgroundImageFix"
                                />
                                <feBlend
                                  mode="normal"
                                  in="SourceGraphic"
                                  in2="BackgroundImageFix"
                                  result="shape"
                                />
                                <feGaussianBlur
                                  stdDeviation="3.5"
                                  result="effect1_foregroundBlur_2694_20224"
                                />
                              </filter>
                              <linearGradient
                                id="paint0_linear_2694_20224"
                                x1="16"
                                y1="8"
                                x2="-3.49691e-07"
                                y2="8"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop stop-color="#303F61" />
                                <stop offset="1" stop-color="#1A1C21" />
                              </linearGradient>
                              <linearGradient
                                id="paint1_linear_2694_20224"
                                x1="17"
                                y1="8"
                                x2="5.08598e-08"
                                y2="8"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop stop-color="#303F61" />
                                <stop offset="1" stop-color="#1A1C21" />
                              </linearGradient>
                            </defs>
                          </svg>
                        </div>
                      </a>
                    </div>

                    <?php
                      $current_page = get_post();
                      $page_id = $current_page->ID;
                      $pod = pods('page', $page_id);
                      $field1 = $pod->field('how_work_text5');
                      $index = 0;
                      if (!empty($field1)) { 
                        foreach ($field1 as $item) {
                          $dynamic_class = 'win-box__text' . ($index + 1);
                          $active_class = ($index == 0) ? ' active' : '';
                          echo '<div class="win-box__text ' . $dynamic_class . ' def-text custom-scrollbar' . $active_class . '">';
                          echo $item;
                          echo '</div>';
                          $index++;
                        }
                      }
                    ?>
                  </div>

                  <div class="win-box__center win-box__center6">
                    <div class="win-box__left">
                      <ul class="win-box__left-list">
                        <?php
                          $current_page = get_post();
                          $page_id = $current_page->ID;
                          $pod = pods('page', $page_id);
                          $field1 = $pod->field('how_work_text_list6');
                          $index = 0;
                          if (!empty($field1)) { 
                            foreach ($field1 as $item) {
                              $dynamic_class = 'win-box__left-list-item' . ($index + 1);
                              $active_class = ($index == 0) ? ' active' : '';
                              echo '<li class="win-box__left-list-item '. $dynamic_class .' small-text' . $active_class . '">';
                              echo $field1[$index];
                              echo '</li>';
                              $index++;
                            }
                          }
                        ?>
                      </ul>
                      <a href="#" class="win-box__btn main-btn small-text openBtn">
                        <span class="video_link" style="display: none;"><?php echo get_post_meta(get_the_ID(), 'how_work_video6', true);?></span>
                        <span class="main-btn__text small-text">Видео</span>
                        <div class="main-btn__effect"></div>
                        <div class="main-btn__icon img-wrp">
                          <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M14.5 7.13397C15.1667 7.51888 15.1667 8.48112 14.5 8.86603L5.5 14.0622C4.83333 14.4471 4 13.966 4 13.1962L4 2.80385C4 2.03405 4.83333 1.55292 5.5 1.93782L14.5 7.13397Z"
                              fill="url(#paint0_linear_2694_20224)"
                            />
                            <mask
                              id="mask0_2694_20224"
                              style="mask-type: alpha"
                              maskUnits="userSpaceOnUse"
                              x="4"
                              y="1"
                              width="11"
                              height="14"
                            >
                              <path
                                d="M14.5 7.13397C15.1667 7.51888 15.1667 8.48112 14.5 8.86603L5.5 14.0622C4.83333 14.4471 4 13.966 4 13.1962L4 2.80385C4 2.03405 4.83333 1.55292 5.5 1.93782L14.5 7.13397Z"
                                fill="url(#paint1_linear_2694_20224)"
                              />
                            </mask>
                            <g mask="url(#mask0_2694_20224)">
                              <g filter="url(#filter0_f_2694_20224)">
                                <circle
                                  cx="20"
                                  cy="12"
                                  r="5"
                                  fill="#40527B"
                                />
                              </g>
                              <g filter="url(#filter1_f_2694_20224)">
                                <ellipse
                                  cx="5.5"
                                  cy="-2"
                                  rx="5.5"
                                  ry="5"
                                  fill="#40527B"
                                />
                              </g>
                            </g>
                            <defs>
                              <filter
                                id="filter0_f_2694_20224"
                                x="8"
                                y="0"
                                width="24"
                                height="24"
                                filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB"
                              >
                                <feFlood
                                  flood-opacity="0"
                                  result="BackgroundImageFix"
                                />
                                <feBlend
                                  mode="normal"
                                  in="SourceGraphic"
                                  in2="BackgroundImageFix"
                                  result="shape"
                                />
                                <feGaussianBlur
                                  stdDeviation="3.5"
                                  result="effect1_foregroundBlur_2694_20224"
                                />
                              </filter>
                              <filter
                                id="filter1_f_2694_20224"
                                x="-7"
                                y="-14"
                                width="25"
                                height="24"
                                filterUnits="userSpaceOnUse"
                                color-interpolation-filters="sRGB"
                              >
                                <feFlood
                                  flood-opacity="0"
                                  result="BackgroundImageFix"
                                />
                                <feBlend
                                  mode="normal"
                                  in="SourceGraphic"
                                  in2="BackgroundImageFix"
                                  result="shape"
                                />
                                <feGaussianBlur
                                  stdDeviation="3.5"
                                  result="effect1_foregroundBlur_2694_20224"
                                />
                              </filter>
                              <linearGradient
                                id="paint0_linear_2694_20224"
                                x1="16"
                                y1="8"
                                x2="-3.49691e-07"
                                y2="8"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop stop-color="#303F61" />
                                <stop offset="1" stop-color="#1A1C21" />
                              </linearGradient>
                              <linearGradient
                                id="paint1_linear_2694_20224"
                                x1="17"
                                y1="8"
                                x2="5.08598e-08"
                                y2="8"
                                gradientUnits="userSpaceOnUse"
                              >
                                <stop stop-color="#303F61" />
                                <stop offset="1" stop-color="#1A1C21" />
                              </linearGradient>
                            </defs>
                          </svg>
                        </div>
                      </a>
                    </div>

                    <?php
                      $current_page = get_post();
                      $page_id = $current_page->ID;
                      $pod = pods('page', $page_id);
                      $field1 = $pod->field('how_work_text6');
                      $index = 0;
                      if (!empty($field1)) { 
                        foreach ($field1 as $item) {
                          $dynamic_class = 'win-box__text' . ($index + 1);
                          $active_class = ($index == 0) ? ' active' : '';
                          echo '<div class="win-box__text ' . $dynamic_class . ' def-text custom-scrollbar' . $active_class . '">';
                          echo $item;
                          echo '</div>';
                          $index++;
                        }
                      }
                    ?>
                  </div>

                  <div class="win-box__mobile-btn-wrp">
                    <a
                      href="#"
                      class="win-box__mobile-btn main-btn small-text openBtn"
                    >
                      <div class="main-btn__icon img-wrp">
                        <img
                          src="<?php bloginfo('template_url'); ?>/assets/img/main-btn__icon.svg"
                          alt="svg"
                          loading="lazy"
                        />
                      </div>
                      <span class="main-btn__text small-text">Видео</span>
                      <div class="main-btn__effect"></div>
                    </a>
                  </div>

                  <div class="win-box__bg img-wrp">
                    <svg
                      width="800"
                      height="596"
                      viewBox="0 0 800 596"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g filter="url(#filter0_b_2713_7582)">
                        <rect
                          width="800"
                          height="596"
                          rx="24"
                          fill="#1F2638"
                          fill-opacity="0.1"
                        />
                      </g>
                      <g filter="url(#filter1_b_2713_7582)">
                        <rect
                          x="0.25"
                          y="0.25"
                          width="799.5"
                          height="595.5"
                          rx="23.75"
                          stroke="url(#paint0_linear_2713_7582)"
                          stroke-width="0.5"
                        />
                      </g>
                      <defs>
                        <filter
                          id="filter0_b_2713_7582"
                          x="-30"
                          y="-30"
                          width="860"
                          height="656"
                          filterUnits="userSpaceOnUse"
                          color-interpolation-filters="sRGB"
                        >
                          <feFlood
                            flood-opacity="0"
                            result="BackgroundImageFix"
                          />
                          <feGaussianBlur
                            in="BackgroundImageFix"
                            stdDeviation="15"
                          />
                          <feComposite
                            in2="SourceAlpha"
                            operator="in"
                            result="effect1_backgroundBlur_2713_7582"
                          />
                          <feBlend
                            mode="normal"
                            in="SourceGraphic"
                            in2="effect1_backgroundBlur_2713_7582"
                            result="shape"
                          />
                        </filter>
                        <filter
                          id="filter1_b_2713_7582"
                          x="-110"
                          y="-110"
                          width="1020"
                          height="816"
                          filterUnits="userSpaceOnUse"
                          color-interpolation-filters="sRGB"
                        >
                          <feFlood
                            flood-opacity="0"
                            result="BackgroundImageFix"
                          />
                          <feGaussianBlur
                            in="BackgroundImageFix"
                            stdDeviation="55"
                          />
                          <feComposite
                            in2="SourceAlpha"
                            operator="in"
                            result="effect1_backgroundBlur_2713_7582"
                          />
                          <feBlend
                            mode="normal"
                            in="SourceGraphic"
                            in2="effect1_backgroundBlur_2713_7582"
                            result="shape"
                          />
                        </filter>
                        <linearGradient
                          id="paint0_linear_2713_7582"
                          x1="400"
                          y1="0"
                          x2="400"
                          y2="596"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#212941" />
                          <stop offset="0.469183" stop-color="#2C3A65" />
                          <stop offset="1" stop-color="#272C3D" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>

                  <div class="card_effect__3CjsY"></div>
                </div>
              </div>

              <!-- mobile -->
              <div class="swiper-slide">
                <div class="win-box card_card__VgpBR card_card-hero__pjFbO card_card-animated__5dDBc card_card-animated-loop__6iL1V">
                  <?php
                    $current_page = get_post();
                    $page_id = $current_page->ID;
                    $pod = pods('page', $page_id);
                    $field1 = $pod->field('how_work_text1');
                    $field2 = $pod->field('how_work_text_list1');
                    $index = 0;
                    if (!empty($field1)) { 
                      foreach ($field1 as $item) {
                        $dynamic_class1 = 'win-box__center' . ($index + 1);
                        $dynamic_class2 = 'win-box__text' . ($index + 1);
                        $active_class1 = ($index == 0) ? ' active' : '';
                        $active_class2 = ($index == 0) ? ' active' : '';
                        echo '<div class="win-box__center '. $dynamic_class1 . $active_class1 .'">';
                        echo '<div class="win-box__text active def-text custom-scrollbar">';
                        echo '<span class="win-box__text-mob-title">'. $field2[$index] .'</span>';
                        echo $item;
                        echo '</div></div>';
                        $index++;
                      }
                    }
                  ?>

                  <div class="win-box__mobile-btn-wrp">
                    <a href="#" class="win-box__mobile-btn main-btn small-text openBtn">
                      <div class="mobile-video-hidden" style="display: none;"><?php echo get_post_meta(get_the_ID(), 'how_work_video1', true);?></div>
                      <div class="main-btn__icon img-wrp">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/main-btn__icon.svg" alt="svg" loading="lazy" />
                      </div>
                      <span class="main-btn__text small-text">Видео</span>
                      <div class="main-btn__effect"></div>
                    </a>
                  </div>

                  <div class="win-box__bg img-wrp">
                    <svg
                      width="800"
                      height="596"
                      viewBox="0 0 800 596"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g filter="url(#filter0_b_2713_7582)">
                        <rect
                          width="800"
                          height="596"
                          rx="24"
                          fill="#1F2638"
                          fill-opacity="0.1"
                        />
                      </g>
                      <g filter="url(#filter1_b_2713_7582)">
                        <rect
                          x="0.25"
                          y="0.25"
                          width="799.5"
                          height="595.5"
                          rx="23.75"
                          stroke="url(#paint0_linear_2713_7582)"
                          stroke-width="0.5"
                        />
                      </g>
                      <defs>
                        <filter
                          id="filter0_b_2713_7582"
                          x="-30"
                          y="-30"
                          width="860"
                          height="656"
                          filterUnits="userSpaceOnUse"
                          color-interpolation-filters="sRGB"
                        >
                          <feFlood
                            flood-opacity="0"
                            result="BackgroundImageFix"
                          />
                          <feGaussianBlur
                            in="BackgroundImageFix"
                            stdDeviation="15"
                          />
                          <feComposite
                            in2="SourceAlpha"
                            operator="in"
                            result="effect1_backgroundBlur_2713_7582"
                          />
                          <feBlend
                            mode="normal"
                            in="SourceGraphic"
                            in2="effect1_backgroundBlur_2713_7582"
                            result="shape"
                          />
                        </filter>
                        <filter
                          id="filter1_b_2713_7582"
                          x="-110"
                          y="-110"
                          width="1020"
                          height="816"
                          filterUnits="userSpaceOnUse"
                          color-interpolation-filters="sRGB"
                        >
                          <feFlood
                            flood-opacity="0"
                            result="BackgroundImageFix"
                          />
                          <feGaussianBlur
                            in="BackgroundImageFix"
                            stdDeviation="55"
                          />
                          <feComposite
                            in2="SourceAlpha"
                            operator="in"
                            result="effect1_backgroundBlur_2713_7582"
                          />
                          <feBlend
                            mode="normal"
                            in="SourceGraphic"
                            in2="effect1_backgroundBlur_2713_7582"
                            result="shape"
                          />
                        </filter>
                        <linearGradient
                          id="paint0_linear_2713_7582"
                          x1="400"
                          y1="0"
                          x2="400"
                          y2="596"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#212941" />
                          <stop offset="0.469183" stop-color="#2C3A65" />
                          <stop offset="1" stop-color="#272C3D" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="card_effect__3CjsY"></div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="win-box card_card__VgpBR card_card-hero__pjFbO card_card-animated__5dDBc card_card-animated-loop__6iL1V">
                  <?php
                    $current_page = get_post();
                    $page_id = $current_page->ID;
                    $pod = pods('page', $page_id);
                    $field1 = $pod->field('how_work_text2');
                    $field2 = $pod->field('how_work_text_list2');
                    $index = 0;
                    if (!empty($field1)) { 
                      foreach ($field1 as $item) {
                        $dynamic_class1 = 'win-box__center' . ($index + 1);
                        $dynamic_class2 = 'win-box__text' . ($index + 1);
                        $active_class1 = ($index == 0) ? ' active' : '';
                        $active_class2 = ($index == 0) ? ' active' : '';
                        echo '<div class="win-box__center '. $dynamic_class1 . $active_class1 .'">';
                        echo '<div class="win-box__text active def-text custom-scrollbar">';
                        echo '<span class="win-box__text-mob-title">'. $field2[$index] .'</span>';
                        echo $item;
                        echo '</div></div>';
                        $index++;
                      }
                    }
                  ?>

                  <div class="win-box__mobile-btn-wrp">
                    <a href="#" class="win-box__mobile-btn main-btn small-text openBtn">
                      <div class="mobile-video-hidden" style="display: none;"><?php echo get_post_meta(get_the_ID(), 'how_work_video2', true);?></div>
                      <div class="main-btn__icon img-wrp">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/main-btn__icon.svg" alt="svg" loading="lazy" />
                      </div>
                      <span class="main-btn__text small-text">Видео</span>
                      <div class="main-btn__effect"></div>
                    </a>
                  </div>

                  <div class="win-box__bg img-wrp">
                    <svg
                      width="800"
                      height="596"
                      viewBox="0 0 800 596"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g filter="url(#filter0_b_2713_7582)">
                        <rect
                          width="800"
                          height="596"
                          rx="24"
                          fill="#1F2638"
                          fill-opacity="0.1"
                        />
                      </g>
                      <g filter="url(#filter1_b_2713_7582)">
                        <rect
                          x="0.25"
                          y="0.25"
                          width="799.5"
                          height="595.5"
                          rx="23.75"
                          stroke="url(#paint0_linear_2713_7582)"
                          stroke-width="0.5"
                        />
                      </g>
                      <defs>
                        <filter
                          id="filter0_b_2713_7582"
                          x="-30"
                          y="-30"
                          width="860"
                          height="656"
                          filterUnits="userSpaceOnUse"
                          color-interpolation-filters="sRGB"
                        >
                          <feFlood
                            flood-opacity="0"
                            result="BackgroundImageFix"
                          />
                          <feGaussianBlur
                            in="BackgroundImageFix"
                            stdDeviation="15"
                          />
                          <feComposite
                            in2="SourceAlpha"
                            operator="in"
                            result="effect1_backgroundBlur_2713_7582"
                          />
                          <feBlend
                            mode="normal"
                            in="SourceGraphic"
                            in2="effect1_backgroundBlur_2713_7582"
                            result="shape"
                          />
                        </filter>
                        <filter
                          id="filter1_b_2713_7582"
                          x="-110"
                          y="-110"
                          width="1020"
                          height="816"
                          filterUnits="userSpaceOnUse"
                          color-interpolation-filters="sRGB"
                        >
                          <feFlood
                            flood-opacity="0"
                            result="BackgroundImageFix"
                          />
                          <feGaussianBlur
                            in="BackgroundImageFix"
                            stdDeviation="55"
                          />
                          <feComposite
                            in2="SourceAlpha"
                            operator="in"
                            result="effect1_backgroundBlur_2713_7582"
                          />
                          <feBlend
                            mode="normal"
                            in="SourceGraphic"
                            in2="effect1_backgroundBlur_2713_7582"
                            result="shape"
                          />
                        </filter>
                        <linearGradient
                          id="paint0_linear_2713_7582"
                          x1="400"
                          y1="0"
                          x2="400"
                          y2="596"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#212941" />
                          <stop offset="0.469183" stop-color="#2C3A65" />
                          <stop offset="1" stop-color="#272C3D" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="card_effect__3CjsY"></div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="win-box card_card__VgpBR card_card-hero__pjFbO card_card-animated__5dDBc card_card-animated-loop__6iL1V">
                  <?php
                    $current_page = get_post();
                    $page_id = $current_page->ID;
                    $pod = pods('page', $page_id);
                    $field1 = $pod->field('how_work_text3');
                    $field2 = $pod->field('how_work_text_list3');
                    $index = 0;
                    if (!empty($field1)) { 
                      foreach ($field1 as $item) {
                        $dynamic_class1 = 'win-box__center' . ($index + 1);
                        $dynamic_class2 = 'win-box__text' . ($index + 1);
                        $active_class1 = ($index == 0) ? ' active' : '';
                        $active_class2 = ($index == 0) ? ' active' : '';
                        echo '<div class="win-box__center '. $dynamic_class1 . $active_class1 .'">';
                        echo '<div class="win-box__text active def-text custom-scrollbar">';
                        echo '<span class="win-box__text-mob-title">'. $field2[$index] .'</span>';
                        echo $item;
                        echo '</div></div>';
                        $index++;
                      }
                    }
                  ?>

                  <div class="win-box__mobile-btn-wrp">
                    <a href="#" class="win-box__mobile-btn main-btn small-text openBtn">
                      <div class="mobile-video-hidden" style="display: none;"><?php echo get_post_meta(get_the_ID(), 'how_work_video3', true);?></div>
                      <div class="main-btn__icon img-wrp">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/main-btn__icon.svg" alt="svg" loading="lazy" />
                      </div>
                      <span class="main-btn__text small-text">Видео</span>
                      <div class="main-btn__effect"></div>
                    </a>
                  </div>

                  <div class="win-box__bg img-wrp">
                    <svg
                      width="800"
                      height="596"
                      viewBox="0 0 800 596"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g filter="url(#filter0_b_2713_7582)">
                        <rect
                          width="800"
                          height="596"
                          rx="24"
                          fill="#1F2638"
                          fill-opacity="0.1"
                        />
                      </g>
                      <g filter="url(#filter1_b_2713_7582)">
                        <rect
                          x="0.25"
                          y="0.25"
                          width="799.5"
                          height="595.5"
                          rx="23.75"
                          stroke="url(#paint0_linear_2713_7582)"
                          stroke-width="0.5"
                        />
                      </g>
                      <defs>
                        <filter
                          id="filter0_b_2713_7582"
                          x="-30"
                          y="-30"
                          width="860"
                          height="656"
                          filterUnits="userSpaceOnUse"
                          color-interpolation-filters="sRGB"
                        >
                          <feFlood
                            flood-opacity="0"
                            result="BackgroundImageFix"
                          />
                          <feGaussianBlur
                            in="BackgroundImageFix"
                            stdDeviation="15"
                          />
                          <feComposite
                            in2="SourceAlpha"
                            operator="in"
                            result="effect1_backgroundBlur_2713_7582"
                          />
                          <feBlend
                            mode="normal"
                            in="SourceGraphic"
                            in2="effect1_backgroundBlur_2713_7582"
                            result="shape"
                          />
                        </filter>
                        <filter
                          id="filter1_b_2713_7582"
                          x="-110"
                          y="-110"
                          width="1020"
                          height="816"
                          filterUnits="userSpaceOnUse"
                          color-interpolation-filters="sRGB"
                        >
                          <feFlood
                            flood-opacity="0"
                            result="BackgroundImageFix"
                          />
                          <feGaussianBlur
                            in="BackgroundImageFix"
                            stdDeviation="55"
                          />
                          <feComposite
                            in2="SourceAlpha"
                            operator="in"
                            result="effect1_backgroundBlur_2713_7582"
                          />
                          <feBlend
                            mode="normal"
                            in="SourceGraphic"
                            in2="effect1_backgroundBlur_2713_7582"
                            result="shape"
                          />
                        </filter>
                        <linearGradient
                          id="paint0_linear_2713_7582"
                          x1="400"
                          y1="0"
                          x2="400"
                          y2="596"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#212941" />
                          <stop offset="0.469183" stop-color="#2C3A65" />
                          <stop offset="1" stop-color="#272C3D" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="card_effect__3CjsY"></div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="win-box card_card__VgpBR card_card-hero__pjFbO card_card-animated__5dDBc card_card-animated-loop__6iL1V">
                  <?php
                    $current_page = get_post();
                    $page_id = $current_page->ID;
                    $pod = pods('page', $page_id);
                    $field1 = $pod->field('how_work_text4');
                    $field2 = $pod->field('how_work_text_list4');
                    $index = 0;
                    if (!empty($field1)) { 
                      foreach ($field1 as $item) {
                        $dynamic_class1 = 'win-box__center' . ($index + 1);
                        $dynamic_class2 = 'win-box__text' . ($index + 1);
                        $active_class1 = ($index == 0) ? ' active' : '';
                        $active_class2 = ($index == 0) ? ' active' : '';
                        echo '<div class="win-box__center '. $dynamic_class1 . $active_class1 .'">';
                        echo '<div class="win-box__text active def-text custom-scrollbar">';
                        echo '<span class="win-box__text-mob-title">'. $field2[$index] .'</span>';
                        echo $item;
                        echo '</div></div>';
                        $index++;
                      }
                    }
                  ?>

                  <div class="win-box__mobile-btn-wrp">
                    <a href="#" class="win-box__mobile-btn main-btn small-text openBtn">
                      <div class="mobile-video-hidden" style="display: none;"><?php echo get_post_meta(get_the_ID(), 'how_work_video4', true);?></div>
                      <div class="main-btn__icon img-wrp">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/main-btn__icon.svg" alt="svg" loading="lazy" />
                      </div>
                      <span class="main-btn__text small-text">Видео</span>
                      <div class="main-btn__effect"></div>
                    </a>
                  </div>

                  <div class="win-box__bg img-wrp">
                    <svg
                      width="800"
                      height="596"
                      viewBox="0 0 800 596"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g filter="url(#filter0_b_2713_7582)">
                        <rect
                          width="800"
                          height="596"
                          rx="24"
                          fill="#1F2638"
                          fill-opacity="0.1"
                        />
                      </g>
                      <g filter="url(#filter1_b_2713_7582)">
                        <rect
                          x="0.25"
                          y="0.25"
                          width="799.5"
                          height="595.5"
                          rx="23.75"
                          stroke="url(#paint0_linear_2713_7582)"
                          stroke-width="0.5"
                        />
                      </g>
                      <defs>
                        <filter
                          id="filter0_b_2713_7582"
                          x="-30"
                          y="-30"
                          width="860"
                          height="656"
                          filterUnits="userSpaceOnUse"
                          color-interpolation-filters="sRGB"
                        >
                          <feFlood
                            flood-opacity="0"
                            result="BackgroundImageFix"
                          />
                          <feGaussianBlur
                            in="BackgroundImageFix"
                            stdDeviation="15"
                          />
                          <feComposite
                            in2="SourceAlpha"
                            operator="in"
                            result="effect1_backgroundBlur_2713_7582"
                          />
                          <feBlend
                            mode="normal"
                            in="SourceGraphic"
                            in2="effect1_backgroundBlur_2713_7582"
                            result="shape"
                          />
                        </filter>
                        <filter
                          id="filter1_b_2713_7582"
                          x="-110"
                          y="-110"
                          width="1020"
                          height="816"
                          filterUnits="userSpaceOnUse"
                          color-interpolation-filters="sRGB"
                        >
                          <feFlood
                            flood-opacity="0"
                            result="BackgroundImageFix"
                          />
                          <feGaussianBlur
                            in="BackgroundImageFix"
                            stdDeviation="55"
                          />
                          <feComposite
                            in2="SourceAlpha"
                            operator="in"
                            result="effect1_backgroundBlur_2713_7582"
                          />
                          <feBlend
                            mode="normal"
                            in="SourceGraphic"
                            in2="effect1_backgroundBlur_2713_7582"
                            result="shape"
                          />
                        </filter>
                        <linearGradient
                          id="paint0_linear_2713_7582"
                          x1="400"
                          y1="0"
                          x2="400"
                          y2="596"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#212941" />
                          <stop offset="0.469183" stop-color="#2C3A65" />
                          <stop offset="1" stop-color="#272C3D" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="card_effect__3CjsY"></div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="win-box card_card__VgpBR card_card-hero__pjFbO card_card-animated__5dDBc card_card-animated-loop__6iL1V">
                  <?php
                    $current_page = get_post();
                    $page_id = $current_page->ID;
                    $pod = pods('page', $page_id);
                    $field1 = $pod->field('how_work_text5');
                    $field2 = $pod->field('how_work_text_list5');
                    $index = 0;
                    if (!empty($field1)) { 
                      foreach ($field1 as $item) {
                        $dynamic_class1 = 'win-box__center' . ($index + 1);
                        $dynamic_class2 = 'win-box__text' . ($index + 1);
                        $active_class1 = ($index == 0) ? ' active' : '';
                        $active_class2 = ($index == 0) ? ' active' : '';
                        echo '<div class="win-box__center '. $dynamic_class1 . $active_class1 .'">';
                        echo '<div class="win-box__text active def-text custom-scrollbar">';
                        echo '<span class="win-box__text-mob-title">'. $field2[$index] .'</span>';
                        echo $item;
                        echo '</div></div>';
                        $index++;
                      }
                    }
                  ?>

                  <div class="win-box__mobile-btn-wrp">
                    <a href="#" class="win-box__mobile-btn main-btn small-text openBtn">
                      <div class="mobile-video-hidden" style="display: none;"><?php echo get_post_meta(get_the_ID(), 'how_work_video5', true);?></div>
                      <div class="main-btn__icon img-wrp">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/main-btn__icon.svg" alt="svg" loading="lazy" />
                      </div>
                      <span class="main-btn__text small-text">Видео</span>
                      <div class="main-btn__effect"></div>
                    </a>
                  </div>

                  <div class="win-box__bg img-wrp">
                    <svg
                      width="800"
                      height="596"
                      viewBox="0 0 800 596"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g filter="url(#filter0_b_2713_7582)">
                        <rect
                          width="800"
                          height="596"
                          rx="24"
                          fill="#1F2638"
                          fill-opacity="0.1"
                        />
                      </g>
                      <g filter="url(#filter1_b_2713_7582)">
                        <rect
                          x="0.25"
                          y="0.25"
                          width="799.5"
                          height="595.5"
                          rx="23.75"
                          stroke="url(#paint0_linear_2713_7582)"
                          stroke-width="0.5"
                        />
                      </g>
                      <defs>
                        <filter
                          id="filter0_b_2713_7582"
                          x="-30"
                          y="-30"
                          width="860"
                          height="656"
                          filterUnits="userSpaceOnUse"
                          color-interpolation-filters="sRGB"
                        >
                          <feFlood
                            flood-opacity="0"
                            result="BackgroundImageFix"
                          />
                          <feGaussianBlur
                            in="BackgroundImageFix"
                            stdDeviation="15"
                          />
                          <feComposite
                            in2="SourceAlpha"
                            operator="in"
                            result="effect1_backgroundBlur_2713_7582"
                          />
                          <feBlend
                            mode="normal"
                            in="SourceGraphic"
                            in2="effect1_backgroundBlur_2713_7582"
                            result="shape"
                          />
                        </filter>
                        <filter
                          id="filter1_b_2713_7582"
                          x="-110"
                          y="-110"
                          width="1020"
                          height="816"
                          filterUnits="userSpaceOnUse"
                          color-interpolation-filters="sRGB"
                        >
                          <feFlood
                            flood-opacity="0"
                            result="BackgroundImageFix"
                          />
                          <feGaussianBlur
                            in="BackgroundImageFix"
                            stdDeviation="55"
                          />
                          <feComposite
                            in2="SourceAlpha"
                            operator="in"
                            result="effect1_backgroundBlur_2713_7582"
                          />
                          <feBlend
                            mode="normal"
                            in="SourceGraphic"
                            in2="effect1_backgroundBlur_2713_7582"
                            result="shape"
                          />
                        </filter>
                        <linearGradient
                          id="paint0_linear_2713_7582"
                          x1="400"
                          y1="0"
                          x2="400"
                          y2="596"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#212941" />
                          <stop offset="0.469183" stop-color="#2C3A65" />
                          <stop offset="1" stop-color="#272C3D" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="card_effect__3CjsY"></div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="win-box card_card__VgpBR card_card-hero__pjFbO card_card-animated__5dDBc card_card-animated-loop__6iL1V">
                  <?php
                    $current_page = get_post();
                    $page_id = $current_page->ID;
                    $pod = pods('page', $page_id);
                    $field1 = $pod->field('how_work_text6');
                    $field2 = $pod->field('how_work_text_list6');
                    $index = 0;
                    if (!empty($field1)) { 
                      foreach ($field1 as $item) {
                        $dynamic_class1 = 'win-box__center' . ($index + 1);
                        $dynamic_class2 = 'win-box__text' . ($index + 1);
                        $active_class1 = ($index == 0) ? ' active' : '';
                        $active_class2 = ($index == 0) ? ' active' : '';
                        echo '<div class="win-box__center '. $dynamic_class1 . $active_class1 .'">';
                        echo '<div class="win-box__text active def-text custom-scrollbar">';
                        echo '<span class="win-box__text-mob-title">'. $field2[$index] .'</span>';
                        echo $item;
                        echo '</div></div>';
                        $index++;
                      }
                    }
                  ?>

                  <div class="win-box__mobile-btn-wrp">
                    <a href="#" class="win-box__mobile-btn main-btn small-text openBtn">
                      <div class="mobile-video-hidden" style="display: none;"><?php echo get_post_meta(get_the_ID(), 'how_work_video6', true);?></div>
                      <div class="main-btn__icon img-wrp">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/main-btn__icon.svg" alt="svg" loading="lazy" />
                      </div>
                      <span class="main-btn__text small-text">Видео</span>
                      <div class="main-btn__effect"></div>
                    </a>
                  </div>

                  <div class="win-box__bg img-wrp">
                    <svg
                      width="800"
                      height="596"
                      viewBox="0 0 800 596"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g filter="url(#filter0_b_2713_7582)">
                        <rect
                          width="800"
                          height="596"
                          rx="24"
                          fill="#1F2638"
                          fill-opacity="0.1"
                        />
                      </g>
                      <g filter="url(#filter1_b_2713_7582)">
                        <rect
                          x="0.25"
                          y="0.25"
                          width="799.5"
                          height="595.5"
                          rx="23.75"
                          stroke="url(#paint0_linear_2713_7582)"
                          stroke-width="0.5"
                        />
                      </g>
                      <defs>
                        <filter
                          id="filter0_b_2713_7582"
                          x="-30"
                          y="-30"
                          width="860"
                          height="656"
                          filterUnits="userSpaceOnUse"
                          color-interpolation-filters="sRGB"
                        >
                          <feFlood
                            flood-opacity="0"
                            result="BackgroundImageFix"
                          />
                          <feGaussianBlur
                            in="BackgroundImageFix"
                            stdDeviation="15"
                          />
                          <feComposite
                            in2="SourceAlpha"
                            operator="in"
                            result="effect1_backgroundBlur_2713_7582"
                          />
                          <feBlend
                            mode="normal"
                            in="SourceGraphic"
                            in2="effect1_backgroundBlur_2713_7582"
                            result="shape"
                          />
                        </filter>
                        <filter
                          id="filter1_b_2713_7582"
                          x="-110"
                          y="-110"
                          width="1020"
                          height="816"
                          filterUnits="userSpaceOnUse"
                          color-interpolation-filters="sRGB"
                        >
                          <feFlood
                            flood-opacity="0"
                            result="BackgroundImageFix"
                          />
                          <feGaussianBlur
                            in="BackgroundImageFix"
                            stdDeviation="55"
                          />
                          <feComposite
                            in2="SourceAlpha"
                            operator="in"
                            result="effect1_backgroundBlur_2713_7582"
                          />
                          <feBlend
                            mode="normal"
                            in="SourceGraphic"
                            in2="effect1_backgroundBlur_2713_7582"
                            result="shape"
                          />
                        </filter>
                        <linearGradient
                          id="paint0_linear_2713_7582"
                          x1="400"
                          y1="0"
                          x2="400"
                          y2="596"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop stop-color="#212941" />
                          <stop offset="0.469183" stop-color="#2C3A65" />
                          <stop offset="1" stop-color="#272C3D" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="card_effect__3CjsY"></div>
                </div>
              </div>

            </div>
          </div>

          <div class="phwks1__bg phws1__bg img-wrp">
            <svg
              width="968"
              height="601"
              viewBox="0 0 968 601"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g opacity="0.15" filter="url(#filter0_f_2722_2299)">
                <path
                  d="M485 59L884 517H84L485 59Z"
                  fill="url(#paint0_linear_2722_2299)"
                />
              </g>
              <g opacity="0.05" filter="url(#filter1_f_2722_2299)">
                <path
                  d="M485.5 278L685 517H285L485.5 278Z"
                  fill="url(#paint1_linear_2722_2299)"
                />
              </g>
              <g opacity="0.05" filter="url(#filter2_f_2722_2299)">
                <path
                  d="M484.25 278L584 517H384L484.25 278Z"
                  fill="url(#paint2_linear_2722_2299)"
                />
              </g>
              <defs>
                <filter
                  id="filter0_f_2722_2299"
                  x="0"
                  y="-25"
                  width="968"
                  height="626"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB"
                >
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="BackgroundImageFix"
                    result="shape"
                  />
                  <feGaussianBlur
                    stdDeviation="42"
                    result="effect1_foregroundBlur_2722_2299"
                  />
                </filter>
                <filter
                  id="filter1_f_2722_2299"
                  x="201"
                  y="194"
                  width="568"
                  height="407"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB"
                >
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="BackgroundImageFix"
                    result="shape"
                  />
                  <feGaussianBlur
                    stdDeviation="42"
                    result="effect1_foregroundBlur_2722_2299"
                  />
                </filter>
                <filter
                  id="filter2_f_2722_2299"
                  x="300"
                  y="194"
                  width="368"
                  height="407"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB"
                >
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="BackgroundImageFix"
                    result="shape"
                  />
                  <feGaussianBlur
                    stdDeviation="42"
                    result="effect1_foregroundBlur_2722_2299"
                  />
                </filter>
                <linearGradient
                  id="paint0_linear_2722_2299"
                  x1="507.5"
                  y1="175.016"
                  x2="507.5"
                  y2="507"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#6E8DF0" />
                  <stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
                </linearGradient>
                <linearGradient
                  id="paint1_linear_2722_2299"
                  x1="496.75"
                  y1="338.541"
                  x2="496.75"
                  y2="511.782"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#6E8DF0" />
                  <stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
                </linearGradient>
                <linearGradient
                  id="paint2_linear_2722_2299"
                  x1="489.875"
                  y1="338.541"
                  x2="489.875"
                  y2="511.782"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#6E8DF0" />
                  <stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg>
          </div>
        </div>
      </section>
    </main>

  </div>

  <div id="popup" class="popup">
    <div class="popup__content popup-content">
      <iframe id="youtube-video" width="100%" height="100%" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <button id="closeBtn" class="closeBtn">
        <div class="closeBtn-icon-wrp img-wrp">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="18" cy="18" r="18" fill="#323F5F"/>
            <path d="M24 12L12 24" stroke="#BAD0EC" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 12L24 24" stroke="#BAD0EC" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>						
        </div>
      </button>
    </div>
  </div>

<?php  get_footer($name); ?>

<script>
  // mobile lists
  const mobile_menu_itesm_cnahger = e => {
    if (window.innerWidth < 1200) {
      const items = document.querySelectorAll(".win-box__top-menu-mobile li");
      const win_box_center = document.querySelectorAll(".swiper-slide-active .win-box__center");
      items.forEach(e => e.classList.remove("active"));

      for (let i = 0; i < win_box_center.length; i++) {
        if (items[i]) {
          items[i].classList.add("active");
        }
      }
    }
  }

  function initializeSwiper() {
    if (window.innerWidth < 1200) {
      const pageHowWorkSwiperElm = document.querySelector(
        ".page-how-work-swiper"
      );
      var pageHowWorkSwiper = new Swiper(pageHowWorkSwiperElm, {
        allowTouchMove: false, // Отключение свайпа

        pagination: {
          el: ".page-how-work .scroll-section__slider-navigation",
          clickable: true,
        },
        navigation: {
          nextEl: ".page-how-work .slider-section__swiper-button-next",
          prevEl: ".page-how-work .slider-section__swiper-button-prev",
        },

        slidesPerView: 1,
        spaceBetween: 10,
      });
    }
  }
  // Инициализация при загрузке страницы
  initializeSwiper();

  // Инициализация при изменении размера окна
  window.addEventListener("resize", function () {
    initializeSwiper();
  });

  if (window.innerWidth >= 1200) {
    var link2 = document.createElement("link");
    link2.rel = "stylesheet";
    link2.href = "style/2.css";
    document.head.appendChild(link2);
  }

  // slider number changer
  const btnPrev = document.querySelector(
    ".slider-section__swiper-button-prev"
  );
  const btnNext = document.querySelector(
    ".slider-section__swiper-button-next"
  );
  const slide = document.querySelectorAll(".swiper-wrapper .swiper-slide");
  const container_num = document.querySelector(
    ".top-mobile-navigation-text i"
  );
  const container_text_wrp = document.querySelector(".top-mobile-navigation-text em");
  const container_texts = document.querySelectorAll(".win-box__top-menu-item");

  // swiper-slide-active
  function change() {
    i = 1;
    slide.forEach((e) => {
      if (e.classList.contains("swiper-slide-active")) {
        container_num.textContent = i;
        if(container_texts[i-1].classList.contains(`win-box__top-menu-item${i}`)){
          container_text_wrp.textContent = container_texts[i-1].textContent;  
        }
      }
      i++;
    });

    mobile_menu_itesm_cnahger();
  }

  btnPrev.addEventListener("click", change);
  btnNext.addEventListener("click", change);

  // video
  document.addEventListener("DOMContentLoaded", function () {
  // 
  mobile_menu_itesm_cnahger();

  const openBtns = document.querySelectorAll(".openBtn");
  if (!openBtns) {
    return false;
  }
  const popup = document.getElementById("popup");
  const popupContent = document.querySelector(".popup-content");
  const closeBtn = document.getElementById("closeBtn");

  openBtns.forEach(function (openBtn) {
    openBtn.addEventListener("click", function (event) {
      event.preventDefault();
      if (window.innerWidth < 720) {
        var iframe = document.getElementById("youtube-video");
        var iframeSrc = iframe.src;            
        // mobile-video-hidden
        iframeSrc = this.querySelector(".mobile-video-hidden").textContent;
        iframe.src = iframeSrc;
      }
      popup.classList.add("open");
      popupContent.classList.add("open");
    });
  });

  closeBtn.addEventListener("click", function () {
    popup.classList.remove("open");
    popupContent.classList.remove("open");

    var iframe = document.getElementById("youtube-video");
    var iframeSrc = iframe.src;
    iframe.src = "";
    setTimeout(() => {
      iframe.src = iframeSrc;
    }, 100);
  });

  document.addEventListener("click", function (event) {
    // Закрываем popup, если клик произошел вне его области
    if (
      !popupContent.contains(event.target) &&
      // web
      !openBtns[0].contains(event.target) &&
      !openBtns[1].contains(event.target) &&
      !openBtns[2].contains(event.target) &&
      !openBtns[3].contains(event.target) &&
      !openBtns[4].contains(event.target) &&
      !openBtns[5].contains(event.target) &&

      // mob
      !openBtns[6].contains(event.target) &&
      !openBtns[7].contains(event.target) &&
      !openBtns[8].contains(event.target) &&
      !openBtns[9].contains(event.target) &&
      !openBtns[10].contains(event.target) &&
      !openBtns[11].contains(event.target) &&
      !openBtns[12].contains(event.target)
    ) {
      popup.classList.remove("open");
      popupContent.classList.remove("open");

      var iframe = document.getElementById("youtube-video");
      var iframeSrc = iframe.src;
      iframe.src = "";
      setTimeout(() => {
        iframe.src = iframeSrc;
      }, 100);
    }
  });
});
</script>

</body>
</html>