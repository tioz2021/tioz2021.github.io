<?php
/*
Template Name: Home
*/
?>

<?php  get_header($name); ?>

<!-- logo video -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var video = document.querySelector('.logo-video1');
    var video2 = document.querySelector('.logo-video2');
    if (video) {
      video.muted = true;
      video.play().then(function() {
      // Видео успешно запущено, ничего не делаем.
      }).catch(function(error) {
        console.log('Автоматическое воспроизведение видео заблокировано:', error);
        // Если видео не запускается, скрываем его.
        video.style.display = 'none';
      });
    }

    if (video2) {
      video2.muted = true;
      video2.play().then(function() {
      // Видео успешно запущено, ничего не делаем.
      }).catch(function(error) {
        console.log('Автоматическое воспроизведение видео заблокировано:', error);
        // Если видео не запускается, скрываем его.
        video2.style.display = 'none';
      });
    }
  });
</script>

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
				<span class="main-btn__text small-text">Купить лицензию</span>
				<div class="main-btn__effect"></div>
			</a>
		</div>
	</header>

	<main>
		<section class="s1">
			<div class="s1__container container">
				<div class="s1__text-wrp">
					<div class="s1__pre-title pre-title">
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
						</div>
						<span class="s1__pre-title-text small-text">Продвижение WB</span>
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
						</div>
					</div>
					<div class="s1__title">
						<div class="s1__title-icon img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s1__title-icon.svg" alt="svg" loading="lazy">
							<img class="s1__title-icon-video-mask" src="<?php bloginfo('template_url'); ?>/assets/video/video-mask.svg" alt="svg">
							<video class="logo-video logo-video1" autoplay muted playsinline>
								<source src="<?php bloginfo('template_url'); ?>/assets/video/logo_video2.mp4" type="video/mp4">
							</video>
							<video class="logo-video logo-video2" autoplay muted playsinline loop>
								<source src="<?php bloginfo('template_url'); ?>/assets/video/logo_video.mp4" type="video/mp4">
							</video>
						</div>
						<div class="s1__title-light img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s1__title-light.svg" alt="svg" loading="lazy">
						</div>
					</div>

					<div class="s1__title-desk title-desk str-text">
						<?php echo get_post_meta(get_the_ID(), 'index_title', true);?>
					</div>

					<div class="s1__text def-text">
						<?php echo get_post_meta(get_the_ID(), 'index_desk', true);?>
					</div>

					<?php
						// Получаем ID главной страницы
						$front_page_id = get_option('page_on_front');
						// Получаем объект поста главной страницы
						$front_page = get_post($front_page_id);
						// Получаем значение поля 'my_field' на главной странице
						$front_page_text = get_post_meta($front_page->ID, 'tg_link', true);

						// Используем значение поля 'my_field'
						if (!empty($front_page_text)) {
								echo '<a class="s1__btn main-btn" target="_blank" href="' . $front_page_text . '">';
						}
					?>
					<!-- <a href="#" class="s1__btn main-btn"> -->
						<span class="main-btn__text small-text">Тестировать бесплатно</span>
						<div class="main-btn__effect"></div>
					</a>
				</div>

				<div class="s1__card-box card-box block disabled">
					<div class="s1__card-box-icon-star-wrp card-box__icon-star-wrp">
						<div class="card-box__icon-star img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/card-box__icon-star.svg" alt="svg" loading="lazy">
						</div>
						<div class="card-box__icon-star-light"></div>
					</div>

					<div class="card-box__item-wrp disabled">
						<div class="card-box__item card_card__VgpBR card_card-hero__pjFbO hero__card">
							<div class="card-box__item-bg img-wrp">
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/s1/test-bg1.png" alt="img">
							</div>
							<div class="card_effect__3CjsY"></div>

							<div class="card-box__item-body">
								<div class="card-box__item-icon img-wrp">
									<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/s1/test-icon1.png" alt="img">
								</div>
								<div class="card-box__item-text def-text">Мобильный телефон</div>
							</div>

						</div>
					</div>

					<div class="card-box__item-wrp disabled">
						<div class="card-box__item card_card__VgpBR card_card-hero__pjFbO hero__card">
							<div class="card-box__item-bg img-wrp">
								<img loading="lazy" class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s1/test-bg2.png" alt="img">
								<img loading="lazy" class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/mob/s1-cart1-bg.png" alt="img">
							</div>
							<div class="card_effect__3CjsY"></div>

							<div class="card-box__item-body">
								<div class="card-box__item-icon img-wrp">
									<img loading="lazy" class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s1/test-icon2.png" alt="img">
									<img loading="lazy" class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/mob/test-icon2.svg" alt="svg">
								</div>
								<div class="card-box__item-text def-text">Електровелосипед</div>
							</div>
						</div>
					</div>

					<div class="card-box__item-wrp center-block disabled">
						<div
							class="card-box__item card_card__VgpBR card_card-hero__pjFbO card_card-animated__5dDBc card_card-animated-loop__6iL1V">
							<div class="card-box__item-bg img-wrp">
								<img loading="lazy" class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s1/test-bg3.png" alt="img">
								<img loading="lazy" class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/mob/s1-cart2-bg.png" alt="img">
							</div>
							<div class="card_effect__3CjsY"></div>

							<div class="card-box__item-body">
								<div class="card-box__item-icon img-wrp">
									<!-- <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/s1/card-box__item-icon.svg" alt="svg"> -->
									<img loading="lazy" class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s1/test-icon3.png" alt="img">
									<img loading="lazy" class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/mob/test-icon3.svg" alt="svg">
								</div>
								<div class="card-box__item-decor-pannel">
									<div class="card-box__item-decor-pannel-text small-text">164448655</div>
									<div class="card-box__item-decor-pannel-btn-list">
										<div class="card-box__item-decor-pannel-btn card-box__item-decor-pannel-btn--one img-wrp">
											<img src="<?php bloginfo('template_url'); ?>/assets/img/card-box__item-decor-pannel-btn--one.svg" alt="svg" loading="lazy">
										</div>
										<div class="card-box__item-decor-pannel-btn card-box__item-decor-pannel-btn--two img-wrp">
											<img src="<?php bloginfo('template_url'); ?>/assets/img/card-box__item-decor-pannel-btn--two.svg" alt="svg" loading="lazy">
										</div>
										<div class="card-box__item-decor-pannel-btn card-box__item-decor-pannel-btn--three img-wrp">
											<img src="<?php bloginfo('template_url'); ?>/assets/img/card-box__item-decor-pannel-btn--three.svg" alt="svg" loading="lazy">
										</div>
									</div>
								</div>
								<div class="card-box__item-teg-wrp">
									<div class="card-box__item-teg-bg img-wrp">
										<img src="<?php bloginfo('template_url'); ?>/assets/img/card-box__item-teg-bg.svg" alt="svg" loading="lazy">
									</div>
									<div class="card-box__item-teg-text">Top 1 </div>
								</div>
								<div class="card-box__item-text def-text">Ваши товары</div>
							</div>
						</div>
					</div>

					<div class="card-box__item-wrp disabled">
						<div class="card-box__item card_card__VgpBR card_card-hero__pjFbO hero__card">
							<div class="card-box__item-bg img-wrp">
								<img loading="lazy" class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s1/test-bg4.png" alt="img">
								<img loading="lazy" class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/mob/s1-cart3-bg.png" alt="img">
							</div>
							<div class="card_effect__3CjsY"></div>

							<div class="card-box__item-body">
								<div class="card-box__item-icon img-wrp">
									<img loading="lazy" class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s1/test-icon4.png" alt="img">
									<img loading="lazy" class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/mob/test-icon4.svg" alt="img">
								</div>
								<div class="card-box__item-text def-text">Спортивный лифчик</div>
							</div>
						</div>
					</div>

					<div class="card-box__item-wrp disabled">
						<div class="card-box__item card_card__VgpBR card_card-hero__pjFbO hero__card">
							<div class="card-box__item-bg img-wrp">
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/s1/test-bg5.png" alt="img">
							</div>
							<div class="card_effect__3CjsY"></div>

							<div class="card-box__item-body">
								<div class="card-box__item-icon img-wrp">
									<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/s1/test-icon5.png" alt="img">
								</div>
								<div class="card-box__item-text def-text">Вакуумные наушники</div>
							</div>
						</div>
					</div>
				</div>

				<div class="s1__decorations">
					<div class="s1__decoration s1__decoration--one star-bg img-wrp">
						<picture>
							<source media="(min-width: 1200px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/star-bg.svg">
							<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/star-bg-static.svg" alt="star-svg-bg">
						</picture>
					</div>
					<div class="s1__decoration s1__decoration--two img-wrp">
						<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s1__decoration--two-web-tab.svg" alt="svg" loading="lazy">
						<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s1__decoration--two-mob.svg" alt="svg" loading="lazy">	
					</div>
					<div class="s1__decoration s1__decoration--three img-wrp"></div>
					<div class="s1__decoration s1__decoration--four img-wrp">
						<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s1__decoration--four-web-tab.svg" alt="svg" loading="lazy">
						<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s1__decoration--four-mob.svg" alt="svg" loading="lazy">
					</div>
				</div>
			</div>
		</section>

		<section class="s2 scroll-section scrolling-block">
			<div class="scroll-section__container container">
				<div class="scroll-section__title title-wrp">
					<div class="scroll-section__pre-title title-wrp__pre-title pre-title s2__pre-title">
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
						</div>
						<span class="scroll-section__pre-title-text title-wrp__pre-title-text small-text">Эффективность</span>
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
						</div>
					</div>
					<div class="scroll-section__title-text title-wrp__text big-title">
						<?php echo get_post_meta(get_the_ID(), 'index_s2_title', true);?>
					</div>
					<div class="scroll-section__title-desk title-wrp__desk def-text">
						<?php echo get_post_meta(get_the_ID(), 'index_s2_desk', true);?>
					</div>
				</div>

				<div class="scroll-section__list-wrp">
					<ul class="scroll-section__list">
						<li class="scroll-section__item">
							<div class="scroll-section__icon img-wrp">
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__icon.svg" alt="svg">
								<lottie-player class="s2__lottie-icon1" src="<?php bloginfo('template_url'); ?>/assets/lottie/s2/1.json" background="transparent" speed="1" autoplay loop></lottie-player>
							</div>
							<div class="scroll-section__text ul-small-text main-btn">
								<div class="main-btn__text ul-small-text textMt05">Самовыкуп</div>
								<div class="main-btn__effect"></div>
							</div>
						</il>
						<li class="scroll-section__item">
							<div class="scroll-section__icon img-wrp dashboard-work-active">
								<div class="dashboard-work-lights">
									<div></div>
									<div></div>
								</div>
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__icon2.svg" alt="svg">
							</div>
							<div class="scroll-section__text ul-small-text main-btn">
								<div class="main-btn__text ul-small-text textMt15">BBZ</div>
								<div class="main-btn__effect"></div>
							</div>
						</li>
						<li class="scroll-section__item">
							<div class="scroll-section__icon img-wrp">
								<lottie-player class="s2__lottie-icon3" src="<?php bloginfo('template_url'); ?>/assets/lottie/s2/3.json" background="transparent" speed="1" autoplay loop></lottie-player>
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__icon3.svg" alt="svg">
							</div>
							<div class="scroll-section__text ul-small-text main-btn">
								<div class="main-btn__text ul-small-text textMt05 text-web text-tab">Накрутка рейтинга</div>
								<div class="main-btn__text ul-small-text textMt05 text-mob">Накрутка</div>
								<div class="main-btn__effect"></div>
							</div>
						</li>
						<li class="scroll-section__item">
							<div class="scroll-section__icon img-wrp">
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__icon4.svg" alt="svg">
							</div>
							<div class="scroll-section__text ul-small-text main-btn">
								<div class="main-btn__text ul-small-text textMt10">WB аккаунт</div>
								<div class="main-btn__effect"></div>
							</div>
						</li>
						<li class="scroll-section__item">
							<div class="scroll-section__icon img-wrp">
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__icon5.svg" alt="svg">
								<lottie-player class="s2__lottie-icon2" src="<?php bloginfo('template_url'); ?>/assets/lottie/s2/2.json" background="transparent" speed="1" autoplay loop></lottie-player>
							</div>
							<div class="scroll-section__text ul-small-text main-btn">
								<div class="main-btn__text ul-small-text textMt10">Статистика</div>
								<div class="main-btn__effect"></div>
							</div>
						</li>
						<li class="scroll-section__item">
							<div class="scroll-section__item-icon-wrp">
								<span class="scroll-section__item-icon-text scroll-section__item-icon-text--float animatedNumberFloat">4.9</span>
								<div class="scroll-section__icon img-wrp">
									<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__icon6.svg" alt="svg">
								</div>
							</div>
							<div class="scroll-section__text ul-small-text main-btn">
								<div class="main-btn__text ul-small-text textMt10">Репутация</div>
								<div class="main-btn__effect"></div>
							</div>
						</li>
					</ul>

					<div class="scroll-section__list-bg img-wrp">
						<img loading="lazy" class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__list-bg.svg" alt="svg">
						<img loading="lazy" class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/tab/s2-bg-decor.svg" alt="svg">
					</div>

					<div class="scroll-section__list-bg-line img-wrp">
						<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section__list-bg-line-web-tab.svg" alt="svg" loading="lazy">
						<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section__list-bg-line-mob.svg" alt="svg" loading="lazy">
						<lottie-player src="<?php bloginfo('template_url'); ?>/assets/lottie/chang-slider-animation.json" background="transparent" speed="0.5" autoplay loop></lottie-player>
					</div>

					<div class="scroll-section__bg-light"></div>
				</div>

				<div class="swiper scroll-section__swiper scroll-section__swiper1">
					<div class="swiper-wrapper">
						<?php
							$current_page = get_post();
							$page_id = $current_page->ID;
							$pod = pods('page', $page_id);
							$field1 = $pod->field('index_s2_slider_title');
							$field2 = $pod->field('index_s2_slider_text');
							$index = 0;
							if (!empty($field1)) { 
								foreach ($field1 as $item) {
									echo '<div class="swiper-slide scroll-section__slider">';
									echo '<div class="scroll-section__slider-title def-title">';
									echo $field1[$index];
									echo '</div>';
									echo '<div class="scroll-section__slider-text def-text">';
									echo $field2[$index];
									echo '</div>';
									echo '</div>';
									$index++;
								}
							}
						?>
					</div>
					<div class="slider-section__swiper-button-next swiper-button-next img-wrp">
						<div class="slider-section__swiper-arrow img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-arrow-next.svg" alt="svg" loading="lazy">
						</div>
						<div class="slider-section__swiper-bg img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-bg.svg" alt="svg" loading="lazy">
						</div>
					</div>
					<div class="slider-section__swiper-button-prev swiper-button-prev img-wrp">
						<div class="slider-section__swiper-arrow img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-arrow-prev.svg" alt="svg" loading="lazy">
						</div>
						<div class="slider-section__swiper-bg img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-bg.svg" alt="svg" loading="lazy">
						</div>
					</div>

					<a href="#" class="scroll-section__btn main-btn small-text" id="openBtn">
						<span class="main-btn__text small-text">Смотреть обзор</span>
						<div class="main-btn__effect"></div>
						<div class="main-btn__icon img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/main-btn__icon.svg" alt="svg" loading="lazy">
						</div>
					</a>

					<div class="scroll-section__slider-navigation slider-navigation swiper-pagination"></div>
				</div>

			</div>
			<div class="scroll-section__bg img-wrp">
				<img loading="lazy" class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__bg.svg" alt="svg">
				<img loading="lazy" class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/tab/s2-table-bg.svg" alt="svg">
			</div>
		</section>

		<section class="s3">
			<div class="s3__container container">
				<div class="s3__title title-wrp">
					<div class="s3__pre-title title-wrp__pre-title pre-title">
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
						</div>
						<span class="s3__pre-title-text title-wrp__pre-title-text small-text">Пакеты</span>
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
						</div>
					</div>
					<div class="s3__title-text title-wrp__text big-title">
						<?php echo get_post_meta(get_the_ID(), 'index_s3_title', true);?>
					</div>
					<div class="s3__title-desk title-wrp__desk def-text">
						<?php echo get_post_meta(get_the_ID(), 'index_s3_desk', true);?>
					</div>
				</div>

				<div class="swiper s3_tab-swiper">
					<ul class="s3__list swiper-wrapper">
						<li class="s3__list-item svg-blur-hover-wrp swiper-slide">
							<div class="s3__list-item-icon img-wrp svg-blur">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$image_field = $pod->field('index_s3_list_icon1');
									if (!empty($image_field)) {
										$image_url = wp_get_attachment_url($image_field['ID']);
										echo '<img src="' . $image_url . '" alt="svg" loading="lazy">';
									}
								?>
								<div class="blur"></div>
							</div>
							<div class="s3__list-item-title str-text"><?php echo get_post_meta(get_the_ID(), 'index_s3_list_title1', true);?></div>
							<div class="s3__list-item-price def-text"><?php echo get_post_meta(get_the_ID(), 'index_s3_list_price1', true);?> <span>₽<span></div>
							<div class="s3__list-item-bullets">
								<span class="s3__list-item-bullet-text small-text">7 дней</span>
							</div>

							<ul class="s3__list-inside">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$field1 = $pod->field('index_s3_list_list1');
									$index = 0;
									if (!empty($field1)) { 
										foreach ($field1 as $item) {
											echo '<li class="s3__list-inside-item">';
											echo '<div class="s3__list-inside-item-icon img-wrp">';
											echo '<img loading="lazy" src="' . get_template_directory_uri() . '/assets/img/ok.svg" alt="img">';
											echo '</div>';
											echo '<div class="s3__list-inside-item-text def-text">' . $field1[$index] . '</div>';
											echo '</li>';
											$index++;
										}
									}
								?>
							</ul>

							<?php
								// Получаем ID главной страницы
								$front_page_id = get_option('page_on_front');
								// Получаем объект поста главной страницы
								$front_page = get_post($front_page_id);
								// Получаем значение поля 'my_field' на главной странице
								$front_page_text = get_post_meta($front_page->ID, 'tg_link', true);

								// Используем значение поля 'my_field'
								if (!empty($front_page_text)) {
										echo '<a class="s3__btn main-btn small-text" target="_blank" href="' . $front_page_text . '">';
								}
							?>
							<!-- <a href="#" class="s3__btn main-btn small-text"> -->
								<span class="main-btn__text small-text">Взять тест-драйв</span>
								<div class="main-btn__effect"></div>
							</a>
						</li>

						<li class="s3__list-item svg-blur-hover-wrp swiper-slide">
							<div class="s3__list-item-icon img-wrp svg-blur">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$image_field = $pod->field('index_s3_list_icon2');
									if (!empty($image_field)) {
										$image_url = wp_get_attachment_url($image_field['ID']);
										echo '<img src="' . $image_url . '" alt="svg" loading="lazy">';
									}
								?>
								<div class="blur"></div>
							</div>
							<div class="s3__list-item-title str-text"><?php echo get_post_meta(get_the_ID(), 'index_s3_list_title2', true);?></div>
							<div class="s3__list-item-price s3__list-item-price-changed def-text active"><?php echo get_post_meta(get_the_ID(), 'index_s3_list_price2', true);?> <span>₽<span></div>
							<div class="s3__list-item-price s3__list-item-price-changed def-text"><?php echo get_post_meta(get_the_ID(), 'index_s3_list_price90', true);?> <span>₽<span></div>
							<div class="s3__list-item-bullets s3__list-item-bullets-cnahged">
								<span class="s3__list-item-bullet-text s3__list-item-bullet-text30 small-text active">30 дней</span>
								<span class="s3__list-item-bullet-text s3__list-item-bullet-text90 small-text">90 дней</span>
							</div>

							<ul class="s3__list-inside">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$field1 = $pod->field('index_s3_list_list2');
									$index = 0;
									if (!empty($field1)) { 
										foreach ($field1 as $item) {
											echo '<li class="s3__list-inside-item">';
											echo '<div class="s3__list-inside-item-icon img-wrp">';
											echo '<img loading="lazy" src="' . get_template_directory_uri() . '/assets/img/ok.svg" alt="img">';
											echo '</div>';
											echo '<div class="s3__list-inside-item-text def-text">' . $field1[$index] . '</div>';
											echo '</li>';
											$index++;
										}
									}
								?>
							</ul>

							<?php
								// Получаем ID главной страницы
								$front_page_id = get_option('page_on_front');
								// Получаем объект поста главной страницы
								$front_page = get_post($front_page_id);
								// Получаем значение поля 'my_field' на главной странице
								$front_page_text = get_post_meta($front_page->ID, 'tg_link', true);

								// Используем значение поля 'my_field'
								if (!empty($front_page_text)) {
										echo '<a class="s3__btn main-btn small-text" target="_blank" style="opacity: 0;" href="' . $front_page_text . '">';
								}
							?>
							<!-- <a href="#" class="s3__btn main-btn small-text"> -->
								<span class="main-btn__text small-text">Приоборести лицензию</span>
								<div class="main-btn__effect"></div>
							</a>
						</li>

						<li class="s3__list-item svg-blur-hover-wrp swiper-slide">
							<div class="s3__list-item-icon img-wrp svg-blur">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$image_field = $pod->field('index_s3_list_icon3');
									if (!empty($image_field)) {
										$image_url = wp_get_attachment_url($image_field['ID']);
										echo '<img src="' . $image_url . '" alt="svg" loading="lazy">';
									}
								?>
								<div class="blur"></div>
							</div>
							<div class="s3__list-item-title str-text"><?php echo get_post_meta(get_the_ID(), 'index_s3_list_title3', true);?></div>
							<div class="s3__list-item-price def-text"><?php echo get_post_meta(get_the_ID(), 'index_s3_list_price3', true);?> <span>₽<span></div>
							<div class="s3__list-item-bullets">
								<span class="s3__list-item-bullet-text small-text">1 мес</span>
							</div>

							<ul class="s3__list-inside">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$field1 = $pod->field('index_s3_list_list3');
									$index = 0;
									if (!empty($field1)) { 
										foreach ($field1 as $item) {
											echo '<li class="s3__list-inside-item">';
											echo '<div class="s3__list-inside-item-icon img-wrp">';
											echo '<img loading="lazy" src="' . get_template_directory_uri() . '/assets/img/ok.svg" alt="img">';
											echo '</div>';
											echo '<div class="s3__list-inside-item-text def-text">' . $field1[$index] . '</div>';
											echo '</li>';
											$index++;
										}
									}
								?>
							</ul>

							<?php
								// Получаем ID главной страницы
								$front_page_id = get_option('page_on_front');
								// Получаем объект поста главной страницы
								$front_page = get_post($front_page_id);
								// Получаем значение поля 'my_field' на главной странице
								$front_page_text = get_post_meta($front_page->ID, 'tg_link', true);

								// Используем значение поля 'my_field'
								if (!empty($front_page_text)) {
										echo '<a class="s3__btn main-btn small-text" target="_blank" href="' . $front_page_text . '">';
								}
							?>
							<!-- <a href="#" class="s3__btn main-btn small-text"> -->
								<span class="main-btn__text small-text">Приоборести лицензию</span>
								<div class="main-btn__effect"></div>
							</a>
						</li>
					</ul>	
					<div class="scroll-section__slider-navigation slider-navigation swiper-pagination"></div>
				</div>


				<div class="slider-section__swiper-button-next swiper-button-next img-wrp">
					<div class="slider-section__swiper-arrow img-wrp">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-arrow-next.svg" alt="svg" loading="lazy">
					</div>
					<div class="slider-section__swiper-bg img-wrp">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-bg.svg" alt="svg" loading="lazy">
					</div>
				</div>
				<div class="slider-section__swiper-button-prev swiper-button-prev img-wrp">
					<div class="slider-section__swiper-arrow img-wrp">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-arrow-prev.svg" alt="svg" loading="lazy">
					</div>
					<div class="slider-section__swiper-bg img-wrp">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-bg.svg" alt="svg" loading="lazy">
					</div>
				</div>

				<div class="s3__light-decor s3__light-decor1 img-wrp">
					<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s3__light-decor1.svg" alt="svg" loading="lazy">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/s3__light-decor1-mob.svg" alt="svg" loading="lazy">
				</div>
				<div class="s3__light-decor s3__light-decor2 img-wrp">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/s3__light-decor2.svg" alt="svg" loading="lazy">
				</div>
				<div class="s3__list-bg list-bg img-wrp">
					<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/s3__list-bg-tab.svg" alt="svg" loading="lazy">
					<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s3__list-bg-tab2.svg" alt="svg" loading="lazy">
					<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s3__list-bg-tab3.svg" alt="svg" loading="lazy">					
				</div>
				<div class="s3__star-bg star-bg img-wrp">
					<picture>
						<source media="(min-width: 1200px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/star-bg.svg">
						<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/star-bg-static.svg" alt="star-svg-bg">
					</picture>
				</div>

			</div>
		</section>

		<section class="s4">
			<div class="s4__container container">
				<div class="s4__title title-wrp">
					<div class="s4__pre-title title-wrp__pre-title pre-title">
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
						</div>
						<span class="s4__pre-title-text title-wrp__pre-title-text small-text">Целевые решения</span>
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
						</div>
					</div>
					<div class="s4__title-text title-wrp__text big-title">
						<?php echo get_post_meta(get_the_ID(), 'index_s4_title', true);?>
					</div>
					<div class="s4__title-desk title-wrp__desk def-text">
						<?php echo get_post_meta(get_the_ID(), 'index_s4_desk', true);?>
					</div>
				</div>

				<div class="list-progress">
					<div class="list-progress__item">
						<div class="list-progress__item-wrp">
							<div class="list-progress__item-icon img-wrp">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$image_field = $pod->field('index_s4_icons');
									if (!empty($image_field)) {
										$image_url = wp_get_attachment_url($image_field[0]['ID']);
										echo '<img src="' . $image_url . '" alt="icon" loading="lazy">';
									}
								?>
								<div class="blur"></div>
							</div>
						</div>
						<div class="list-progress__text def-text">
							<div class="wrp-text-web-tab">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$field = $pod->field('index_s4_titles');
									echo $field[0];
								?>
							</div>
							<div class="wrp-text-mob">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$field = $pod->field('index_s4_titles_mob');
									echo $field[0];
								?>
							</div>
						</div>
					</div>
					<div class="list-progress__item-decoration">
						<div class="list-progress__item-decoration-line"></div>
						<div class="list-progress__item-decoration-object"></div>
					</div>

					<div class="list-progress__item">
						<div class="list-progress__item-wrp">
							<div class="list-progress__item-icon img-wrp">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$image_field = $pod->field('index_s4_icons');
									if (!empty($image_field)) {
										$image_url = wp_get_attachment_url($image_field[1]['ID']);
										echo '<img src="' . $image_url . '" alt="icon" loading="lazy">';
									}
								?>
								<div class="blur"></div>
							</div>
						</div>
						<div class="list-progress__text def-text">
							<div class="wrp-text-web-tab">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$field = $pod->field('index_s4_titles');
									echo $field[1];
								?>
							</div>
							<div class="wrp-text-mob">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$field = $pod->field('index_s4_titles_mob');
									echo $field[1];
								?>
							</div>
						</div>
					</div>
					<div class="list-progress__item-decoration">
						<div class="list-progress__item-decoration-line"></div>
						<div class="list-progress__item-decoration-object"></div>
					</div>
					
					<div class="list-progress__item">
						<div class="list-progress__item-wrp">
							<div class="list-progress__item-icon img-wrp">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$image_field = $pod->field('index_s4_icons');
									if (!empty($image_field)) {
										$image_url = wp_get_attachment_url($image_field[2]['ID']);
										echo '<img src="' . $image_url . '" alt="icon" loading="lazy">';
									}
								?>
								<div class="blur"></div>
							</div>
						</div>
						<div class="list-progress__text def-text">
							<div class="wrp-text-web-tab">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$field = $pod->field('index_s4_titles');
									echo $field[2];
								?>
							</div>
							<div class="wrp-text-mob">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$field = $pod->field('index_s4_titles_mob');
									echo $field[2];
								?>
							</div>
						</div>
					</div>
					<div class="list-progress__item-decoration">
						<div class="list-progress__item-decoration-line"></div>
						<div class="list-progress__item-decoration-object"></div>
					</div>

					<div class="list-progress__item">
						<div class="list-progress__item-wrp">
							<div class="list-progress__item-icon img-wrp">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$image_field = $pod->field('index_s4_icons');
									if (!empty($image_field)) {
										$image_url = wp_get_attachment_url($image_field[3]['ID']);
										echo '<img src="' . $image_url . '" alt="icon" loading="lazy">';
									}
								?>
								<div class="blur"></div>
							</div>
						</div>
						<div class="list-progress__text def-text">
							<div class="wrp-text-web-tab">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$field = $pod->field('index_s4_titles');
									echo $field[3];
								?>
							</div>
							<div class="wrp-text-mob">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$field = $pod->field('index_s4_titles_mob');
									echo $field[3];
								?>
							</div>
						</div>
					</div>
				</div>

				<div class="s4__last-title def-title">
					<?php echo get_post_meta(get_the_ID(), 'index_s4_title_desk', true);?>
				</div>
				<div class="s4__last-desk def-text">
					<?php echo get_post_meta(get_the_ID(), 'index_s4_desk_text', true);?>
				</div>

				<ul class="s4__list">
					<li class="s4__list-item">
						<div class="s4__list-item-icon-wrp">
							<div class="s4__list-item-text">
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
							</div>
							<div class="s4__list-item-icon img-wrp">
								<img loading="lazy" class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s4/s4__list-item-icon.svg" alt="svg">
								<img loading="lazy" class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/mob/s4__list-item-icon1.svg" alt="svg">
							</div>
						</div>
						<div class="s4__list-item-bg img-wrp">
							<img loading="lazy" class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s4-item-bg.png" alt="img">
							<img loading="lazy" class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/mob/s4-list-bg.png" alt="img">
						</div>
						<div class="s4__list-text def-text">
							<?php echo get_post_meta(get_the_ID(), 'index_s4_count_ran1', true);?>
							<em>&nbsp;—&nbsp;</em> 
							<span><?php echo get_post_meta(get_the_ID(), 'index_s4_count_price1', true);?><small>₽</small></span>
						</div>
						<div class="s4__list-text def-text">
							<?php echo get_post_meta(get_the_ID(), 'index_s4_count_ran2', true);?>
							<em>&nbsp;—&nbsp;</em> 
							<span><?php echo get_post_meta(get_the_ID(), 'index_s4_count_price2', true);?><small>₽</small></span>
						</div>
					</li>

					<li class="s4__list-item">
						<div class="s4__list-item-icon-wrp">
							<div class="s4__list-item-text">
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
							</div>
							<div class="s4__list-item-icon img-wrp">
								<img loading="lazy" class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s4/s4__list-item-icon2.svg" alt="svg">
								<img loading="lazy" class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/mob/s4__list-item-icon2.svg" alt="svg">
							</div>
						</div>
						<div class="s4__list-item-bg img-wrp">
							<img loading="lazy" class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s4-item-bg.png" alt="img">
							<img loading="lazy" class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/mob/s4-list-bg.png" alt="img">
						</div>
						<div class="s4__list-text def-text">
							<?php echo get_post_meta(get_the_ID(), 'index_s4_count_ran3', true);?>
							<em>&nbsp;—&nbsp;</em> 
							<span><?php echo get_post_meta(get_the_ID(), 'index_s4_count_price3', true);?><small>₽</small></span>
						</div>
						<div class="s4__list-text def-text">
							<?php echo get_post_meta(get_the_ID(), 'index_s4_count_ran4', true);?>
							<em>&nbsp;—&nbsp;</em> 
							<span><?php echo get_post_meta(get_the_ID(), 'index_s4_count_price4', true);?><small>₽</small></span>
						</div>
					</li>

					<li class="s4__list-item">
						<div class="s4__list-item-icon-wrp">
							<div class="s4__list-item-text">
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
								<span class="animatedNumber">0</span>
							</div>
							<div class="s4__list-item-icon img-wrp">
								<img loading="lazy" class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s4/s4__list-item-icon3.svg" alt="svg">
								<img loading="lazy" class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/mob/s4__list-item-icon3.svg" alt="svg">
							</div>
						</div>
						<div class="s4__list-item-bg img-wrp">
							<img loading="lazy" class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s4-item-bg.png" alt="img">
							<img loading="lazy" class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/mob/s4-list-bg.png" alt="img">
						</div>
						<div class="s4__list-text def-text">
							<?php echo get_post_meta(get_the_ID(), 'index_s4_count_ran5', true);?>
							<em>&nbsp;—&nbsp;</em> 
							<span><?php echo get_post_meta(get_the_ID(), 'index_s4_count_price5', true);?><small>₽</small></span>
						</div>
						<div class="s4__list-text def-text">
							<?php echo get_post_meta(get_the_ID(), 'index_s4_count_ran6', true);?>
							<em>&nbsp;—&nbsp;</em> 
							<span><?php echo get_post_meta(get_the_ID(), 'index_s4_count_price6', true);?><small>₽</small></span>
						</div>
					</li>
				</ul>

				<?php
					// Получаем ID главной страницы
					$front_page_id = get_option('page_on_front');
					// Получаем объект поста главной страницы
					$front_page = get_post($front_page_id);
					// Получаем значение поля 'my_field' на главной странице
					$front_page_text = get_post_meta($front_page->ID, 'tg_link', true);

					// Используем значение поля 'my_field'
					if (!empty($front_page_text)) {
							echo '<a class="s4__btn main-btn small-text" target="_blank" href="' . $front_page_text . '">';
					}
				?>
				<!-- <a href="#" class="s4__btn main-btn small-text"> -->
					<span class="main-btn__text small-text">Приоборести лицензию</span>
					<div class="main-btn__effect"></div>
				</a>

				<div class="s4__last-text-wrp small-text">
					<?php
						$current_page = get_post();
						$page_id = $current_page->ID;
						$pod = pods('page', $page_id);
						$field1 = $pod->field('index_s4_text_list');
						$index = 0;
						if (!empty($field1)) { 
							foreach ($field1 as $item) {
								echo '<span class="s4__last-text">' . $field1[$index] . '</span>';
								$index++;
							}
						}
						?>
				</div>

				<div class="s4__decoration-light s4__decoration-light1 img-wrp">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/s4__decoration-light1.svg" alt="svg" loading="lazy">
				</div>
				<div class="s4__decoration-light s4__decoration-light2 img-wrp">
					<img class="off" src="<?php bloginfo('template_url'); ?>/assets/img/s4__decoration-light2.svg" alt="svg" loading="lazy">
					<img class="s4__decoration-light-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s4__decoration-light-mob.svg" alt="svg" loading="lazy">
				</div>
			</div>
		</section>

		<section class="s5 scroll-section scrolling-block">
			<div class="scroll-section__container container">
				<div class="scroll-section__title title-wrp">
					<div class="scroll-section__pre-title title-wrp__pre-title pre-title s5__pre-title">
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
						</div>
						<span class="scroll-section__pre-title-text title-wrp__pre-title-text small-text">Какая выгода</span>
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
						</div>
					</div>
					<div class="scroll-section__title-text title-wrp__text big-title">
						<?php echo get_post_meta(get_the_ID(), 'index_s5_title', true);?>
					</div>
					<div class="scroll-section__title-desk title-wrp__desk def-text">
						<?php echo get_post_meta(get_the_ID(), 'index_s5_desk', true);?>
					</div>
				</div>

				<div class="scroll-section__list-wrp">
					<ul class="scroll-section__list">
						<li class="scroll-section__item">
							<div class="scroll-section__icon img-wrp">
								<lottie-player class="s5__lottie-icon1" src="<?php bloginfo('template_url'); ?>/assets/lottie/s5/1.json" background="transparent" speed="1" autoplay loop></lottie-player>
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/s5/scroll-section__icon.svg" alt="svg">
							</div>
							<div class="scroll-section__text ul-small-text main-btn">
								<div class="main-btn__text ul-small-text textMt10">Продвижения</div>
								<div class="main-btn__effect"></div>
							</div>
						</il>
						<li class="scroll-section__item">
							<div class="scroll-section__icon img-wrp">
								<lottie-player class="s5__lottie-icon2" src="<?php bloginfo('template_url'); ?>/assets/lottie/s5/2.json" background="transparent" speed="1" autoplay loop></lottie-player>
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/s5/scroll-section__icon2.svg" alt="svg">
							</div>
							<div class="scroll-section__text ul-small-text main-btn">
								<div class="main-btn__text ul-small-text textMt10">Алгоритм BBZ</div>
								<div class="main-btn__effect"></div>
							</div>
						</li>
						<li class="scroll-section__item">
							<div class="scroll-section__icon img-wrp">
								<lottie-player class="s5__lottie-icon3" src="<?php bloginfo('template_url'); ?>/assets/lottie/s5/3.json" background="transparent" speed="1" autoplay loop></lottie-player>
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/s5/scroll-section__icon3.svg" alt="svg">
							</div>
							<div class="scroll-section__text ul-small-text main-btn">
								<div class="main-btn__text ul-small-text textMt05">Оптимизация</div>
								<div class="main-btn__effect"></div>
							</div>
						</li>
						<li class="scroll-section__item">
							<div class="scroll-section__icon img-wrp">
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/s5/scroll-section__icon4.svg" alt="svg">
							</div>
							<div class="scroll-section__text ul-small-text main-btn">
								<div class="main-btn__text ul-small-text textMt05">Вывод в топ</div>
								<div class="main-btn__effect"></div>
							</div>
						</li>
						<li class="scroll-section__item">
							<div class="scroll-section__item-icon-wrp">
								<div class="scroll-section__item-icon-text">
									<span class="animatedNumberTwo">0</span>x
								</div>
								<div class="scroll-section__icon img-wrp">
									<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/s5/scroll-section__icon5.svg" alt="svg">
								</div>
							</div>
							<div class="scroll-section__text ul-small-text main-btn">
								<div class="main-btn__text ul-small-text textMt05">Выгода</div>
								<div class="main-btn__effect"></div>
							</div>
						</li>
						<li class="scroll-section__item">
							<div class="scroll-section__icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section__icon.svg" alt="svg" loading="lazy">
							</div>
							<div class="scroll-section__text ul-small-text main-btn">
								<div class="main-btn__text ul-small-text textMt05 wrp-text-web-tab">Органический трафик</div>
								<div class="main-btn__text ul-small-text textMt05 wrp-text-mob">Трафик</div>
								<div class="main-btn__effect"></div>
							</div>
						</li>
					</ul>

					<div class="scroll-section__list-bg img-wrp">
						<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/s5/scroll-section__list-bg.svg" alt="svg">
					</div>

					<div class="scroll-section__list-bg-line img-wrp">
						<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/s5-line.json" background="transparent" speed="0.5" autoplay loop></lottie-player>
					</div>

					<div class="scroll-section__bg-light"></div>
				</div>

				<div class="swiper scroll-section__swiper scroll-section__swiper2">
					<div class="swiper-wrapper">
						<?php
							$current_page = get_post();
							$page_id = $current_page->ID;
							$pod = pods('page', $page_id);
							$field1 = $pod->field('index_s5_slider_title');
							$field2 = $pod->field('index_s5_slider_text');
							$index = 0;
							if (!empty($field1)) { 
								foreach ($field1 as $item) {
									echo '<div class="swiper-slide scroll-section__slider">';
									echo '<div class="scroll-section__slider-title def-title">';
									echo $field1[$index];
									echo '</div>';
									echo '<div class="scroll-section__slider-text def-text">';
									echo $field2[$index];
									echo '</div>';
									echo '</div>';
									$index++;
								}
							}
						?>
					</div>
					<div class="scroll-section__slider-navigation slider-navigation swiper-pagination"></div>

					<div class="slider-section__swiper-button-next swiper-button-next img-wrp">
						<div class="slider-section__swiper-arrow img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-arrow-next.svg" alt="svg" loading="lazy">
						</div>
						<div class="slider-section__swiper-bg img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-bg.svg" alt="svg" loading="lazy">
						</div>
					</div>
					<div class="slider-section__swiper-button-prev swiper-button-prev img-wrp">
						<div class="slider-section__swiper-arrow img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-arrow-prev.svg" alt="svg" loading="lazy">
						</div>
						<div class="slider-section__swiper-bg img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-bg.svg" alt="svg" loading="lazy">
						</div>
				</div>

			</div>
			<div class="scroll-section__bg img-wrp">
				<img loading="lazy" class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/s5/scroll-section__bg.svg" alt="svg">
				<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section__bg-tab.svg" alt="svg" loading="lazy">
			</div>
		</section>

		<section class="s6">
			<div class="s6__container container">
				<div class="s6__title title-wrp">
					<div class="s6__pre-title title-wrp__pre-title pre-title s6__pre-title--one">
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
						</div>
						<span class="s6__pre-title-text title-wrp__pre-title-text small-text">Приимущества</span>
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
						</div>
					</div>
					<div class="s6__title-text title-wrp__text big-title">
						<?php echo get_post_meta(get_the_ID(), 'index_s6_title', true);?>
					</div>
					<div class="s6__title-desk title-wrp__desk def-text">
						<?php echo get_post_meta(get_the_ID(), 'index_s6_desk', true);?>
					</div>
				</div>

				<ul class="s6__list svg-blur-hover-wrp">
					<?php
						$current_page = get_post();
						$page_id = $current_page->ID;
						$pod = pods('page', $page_id);
						$field1 = $pod->field('index_s6_icons');
						$field2 = $pod->field('index_s6_titles');
						$field3 = $pod->field('index_s6_texts');
						$index = 0;
						if (!empty($field1)) { 
							foreach ($field1 as $item) {
								echo '<li class="s6__list-item">';
								echo '<div class="s6__list-item-icon img-wrp svg-blur">';
								echo '<img src="'. wp_get_attachment_url($field1[$index]['ID']) .'" alt="svg" loading="lazy">';
								echo '<div class="blur"></div>';
								echo '</div>';
								echo '<div class="s6__list-item-title str-text">'. $field2[$index] .'</div>';
								echo '<div class="s6__list-item-text def-text">' . $field3[$index] . '</div>';
								echo '</li>';
								$index++;
							}
						}
					?>
				</ul>

				<div class="s6__decor s6__decor-bg img-wrp">
					<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/s6__decor-bg-web.svg" alt="svg" loading="lazy">
					<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s6__decor-bg-tab.svg" alt="svg" loading="lazy">
					<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s6__decor-bg-mob.svg" alt="svg" loading="lazy">
				</div>
				<div class="s6__decor s6__decor-list img-wrp">
					<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/s6__decor-list-web.svg" alt="svg" loading="lazy">
					<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s6__decor-list-tab.svg" alt="svg" loading="lazy">
					<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s6__decor-list-mob.svg" alt="svg" loading="lazy">
				</div>
			</div>
		</section>

		<section class="s7">
			<div class="s7__container container">
				<div class="window">
					<div class="window-bg img-wrp">
						<img loading="lazy" class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/window-box/window-bg.svg" alt="svg">
						<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/window-bg-tab.svg" alt="svg" loading="lazy">
						<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/window-bg-mob.svg" alt="svg" loading="lazy">
					</div>
					<div class="s7__title title-wrp">
						<div class="s7__title-icon-logo img-wrp">
							<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/window-box/s7__title-icon-logo.svg" alt="svg">
						</div>
						<div class="s7__pre-title title-wrp__pre-title pre-title s7__pre-title--one">
							<div class="pre-title-lp img-wrp">
								<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
							</div>
								<span class="s7__pre-title-text title-wrp__pre-title-text small-text">Протестируйте BBZ</span>
							<div class="pre-title-lp img-wrp">
								<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
							</div>
						</div>
						<div class="s7__title-cicle-list">
							<div class="s7__title-cicle"></div>
							<div class="s7__title-cicle"></div>
							<div class="s7__title-cicle"></div>
						</div>
					</div>
					<div class="s7__item-main">
						<div class="s7__item-main-icon img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-main-icon.svg" alt="svg" loading="lazy">
						</div>
						<div class="s7__item-main-title def-title">
							Повысьте продажи
						</div>
						<div class="s7__item-main-text def-text">за 7 дней</div>

						<a href="#" class="s7__btn main-btn main-btn--white">
							<span class="main-btn__text small-text">Тестировать бесплатно</span>
							<div class="main-btn__effect"></div>
						</a>

						<div class="s7__item-main-bg-mask img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-main-bg-mask.svg" alt="svg" loading="lazy">
						</div>
						<div class="s7__item-main-line img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-main-line.svg" alt="svg" loading="lazy">
						</div>
					</div>
					<div class="s7__item s7__item1 s7__item--big">
						<div class="s7__item-icon img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-icon.svg" alt="svg" loading="lazy">
						</div>
						<div class="s7__item-title def-text">
							<div class="wrp-text-web-tab">
								Продвигайте товары <br>
								<span>на walberis </span>
							</div>
							<div class="wrp-text-mob">
								Продвигайте <br>товарына WB
							</div>
						</div>
						<div class="s7__item-bg img-wrp">
							<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/window-box/s7__item-bg.svg" alt="svg">
						</div>
					</div>
					<div class="s7__item s7__item2 s7__item--small">
						<div class="s7__item-icon img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-icon2.svg" alt="svg" loading="lazy">
						</div>
						<div class="s7__item-title def-text">
							<div class="wrp-text-web-tab">
								Любое количество отзывов
							</div>
							<div class="wrp-text-mob">
								Любое кол <br>отзывов
							</div>
						</div>
						<div class="s7__item-line img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-line3.svg" alt="svg" loading="lazy">
						</div>
					</div>
					<div class="s7__item s7__item3 s7__item--small">
						<div class="s7__item-icon img-wrp">
							<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-icon3.svg" alt="svg" loading="lazy">
							<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-icon3-mob.svg" alt="svg" loading="lazy">			
						</div>
						<div class="s7__item-title def-text">
							<div class="wrp-text-web-tab">
								Любое количество выкупов
							</div>
							<div class="wrp-text-mob">
								Любое кол <br> выкупов
							</div>
						</div>
						<div class="s7__item-line img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-line4.svg" alt="svg" loading="lazy">
						</div>
					</div>
					<div class="s7__item s7__item4 s7__item--big">
						<div class="s7__item-icon img-wrp">
							<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/procent.svg" alt="svg" />
						</div>
						<div class="s7__item-title def-text">
							<div class="s7__item-title def-text">
								<div class="text-web">
									Экономьте на авторекламе <br>
									<span>Экономия до 10x</span>
								</div>
								<div class="text-tab">
									Экономьте<br>
									<span>на авторекламе</span>
								</div>
								<div class="wrp-text-mob">
									Экономьте на <br> авторекламе
								</div>
							</div>
						</div>
						<div class="s7__item-bg img-wrp">
							<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/window-box/s7__item-bg.svg" alt="svg">
						</div>
					</div>

					<div class="s7__decoration-window img-wrp">
						<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/s7__decoration-window-web.svg" alt="svg" loading="lazy">
						<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s7__decoration-window-tab.svg" alt="svg" loading="lazy">
						<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s7__decoration-window-mob.svg" alt="svg" loading="lazy">
					</div>
				</div>

				<div class="s7__decoration-shadow img-wrp">
					<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/s7__decoration-shadow-web.svg" alt="svg" loading="lazy">
					<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s7__decoration-shadow-tab.svg" alt="svg" loading="lazy">
				</div>
				<div class="s7__decoration-lines img-wrp">
					<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s7__decoration-lines-web-tab.svg" alt="svg" loading="lazy">
					<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s7__decoration-lines-mob.svg" alt="svg" loading="lazy">
				</div>
				<div class="s7__decoration-star s1__decoration s1__decoration--one star-bg img-wrp">
					<picture>
						<source media="(min-width: 1200px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/star-bg.svg">
						<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/star-bg-static.svg" alt="star-svg-bg">
					</picture>						
				</div>
			</div>
		</section>

		<section class="s8 slider-section slider-section1">
			<div class="slider-section__container container">
				<div class="slider-section__title title-wrp">
					<div class="slider-section__pre-title title-wrp__pre-title pre-title s8__pre-title">
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
						</div>
						<span class="slider-section__pre-title-text title-wrp__pre-title-text small-text">Возможности</span>
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
						</div>
					</div>
					<div class="slider-section__title-text title-wrp__text big-title">
						<?php echo get_post_meta(get_the_ID(), 'index_s8_title', true);?>
					</div>
					<div class="slider-section__title-desk title-wrp__desk def-text">
						<?php echo get_post_meta(get_the_ID(), 'index_s8_desk', true);?>
					</div>
				</div>

				<div class="swiper slider-section__swiper slider-section__swiper1">
					<div class="swiper-wrapper">
						<?php
							$current_page = get_post();
							$page_id = $current_page->ID;
							$pod = pods('page', $page_id);
							$field1 = $pod->field('index_s8_list_icon');
							$field2 = $pod->field('index_s8_list_titles');
							$field3 = $pod->field('index_s8_list_texts');
							$index = 0;
							if (!empty($field1)) { 
								foreach ($field1 as $item) {
									echo '<div class="swiper-slide slider-section__slider">';
									echo '<div class="slider-section__slide-icon img-wrp">';
									echo '<img src="'. wp_get_attachment_url($field1[$index]['ID']) .'" alt="svg" loading="lazy">';
									echo '</div>';
									echo '<div class="slider-section__slider-title str-text">'. $field2[$index] .'</div>';
									echo '<div class="slider-section__slider-text def-text">' . $field3[$index] . '</div>';
									echo '</div>';
									$index++;
								}
							}
						?>
					</div>
					<div class="slider-section__slider-navigation slider-navigation swiper-pagination"></div>

					<div class="slider-section__swiper-button-next swiper-button-next img-wrp">
						<div class="slider-section__swiper-arrow img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-arrow-next.svg" alt="svg" loading="lazy">
						</div>
						<div class="slider-section__swiper-bg img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-bg.svg" alt="svg" loading="lazy">
						</div>
					</div>
					<div class="slider-section__swiper-button-prev swiper-button-prev img-wrp">
						<div class="slider-section__swiper-arrow img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-arrow-prev.svg" alt="svg" loading="lazy">
						</div>
						<div class="slider-section__swiper-bg img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-bg.svg" alt="svg" loading="lazy">
						</div>
					</div>

				</div>
			</div>

			<div class="slider-section__bg-main img-wrp">
				<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__bg-main.svg" alt="svg" loading="lazy">
				<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__bg-main-mob.svg" alt="svg" loading="lazy">
			</div>

			<div class="slider-section__bg-light img-wrp">
				<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__bg-light.svg" alt="svg" loading="lazy">
				<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__bg-light-mob.svg" alt="svg" loading="lazy">
			</div>

			<div class="slider-section__bg-light-dop img-wrp">
				<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__bg-light-dop.svg" alt="svg" loading="lazy">
				<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__bg-light-dop-mob.svg" alt="svg" loading="lazy">
			</div>
		</section>

		<section class="s9">
			<div class="s9__container container">
				<div class="s9__title title-wrp">
					<div class="s9__pre-title title-wrp__pre-title pre-title">
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
						</div>
						<span class="s9__pre-title-text title-wrp__pre-title-text small-text">Оттображения бота</span>
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
						</div>
					</div>
					<div class="s9__title-text title-wrp__text big-title">
						<?php echo get_post_meta(get_the_ID(), 'index_s9_title', true);?>
					</div>
					<div class="s9__title-desk title-wrp__desk def-text">
						<?php echo get_post_meta(get_the_ID(), 'index_s9_desk', true);?>
					</div>
				</div>

				<div class="s9__tag s9__tag1 main-btn">
					<span class="main-btn__text ul-small-text">Моблилки/планшеты</span>
					<div class="main-btn__effect"></div>
				</div>
				<div class="s9__tag s9__tag2 main-btn">
					<span class="main-btn__text ul-small-text">Ноутбуки/ПК</span>
					<div class="main-btn__effect"></div>
				</div>
				<div class="s9__tag s9__tag3 main-btn">
					<span class="main-btn__text ul-small-text">Android</span>
					<div class="main-btn__effect"></div>
				</div>
				<div class="s9__tag s9__tag4 main-btn">
					<span class="main-btn__text ul-small-text">iOS/MAC</span>
					<div class="main-btn__effect"></div>
				</div>
				<div class="s9__tag s9__tag5 main-btn">
					<span class="main-btn__text ul-small-text">Windows</span>
					<div class="main-btn__effect"></div>
				</div>


				<div class="s9__svg-item s9__svg-item1 img-wrp">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/s9__svg-item1.svg" alt="svg" loading="lazy">
				</div>

				<div class="s9__svg-item s9__svg-item2 img-wrp">
					<lottie-player class="s9__svg-item-lottie-4" src="<?php bloginfo('template_url'); ?>/assets/lottie/s9/4.json" background="transparent" speed="1" autoplay loop></lottie-player>
					<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/s9/s9__svg-item2.svg" alt="svg">
				</div>

				<div class="s9__svg-item s9__svg-item3 img-wrp">
					<lottie-player class="s9__svg-item-lottie-1" src="<?php bloginfo('template_url'); ?>/assets/lottie/s9/1.json" background="transparent" speed="1" autoplay loop></lottie-player>
					<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/s9/s9__svg-item3.svg" alt="svg">
				</div>

				<div class="s9__svg-item s9__svg-item4 img-wrp dashboard-work-active">
					<div class="dashboard-work-lights dashboard-work-lights--smooth">
						<div></div>
						<div></div>
					</div>
					<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/s9/s9__svg-item4.svg" alt="svg">
				</div>
				<div class="s9__svg-item s9__svg-item5 img-wrp">
					<lottie-player class="s9__svg-item-lottie-2" src="<?php bloginfo('template_url'); ?>/assets/lottie/s9/2.json" background="transparent" speed="1" autoplay loop></lottie-player>
					<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/s9/s9__svg-item5.svg" alt="svg">
				</div>

				<div class="s9__tag-bg img-wrp">
					<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/s9/s9__tag-bg.svg" alt="svg">
				</div>
				<div class="s9__tag-center-box-bg img-wrp">
					<lottie-player class="s9__svg-item-lottie-3" src="<?php bloginfo('template_url'); ?>/assets/lottie/s9/3.json" background="transparent" speed="1" autoplay loop></lottie-player>
					<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/s9/s9__tag-center-box-bg.svg" alt="svg">
				</div>
				<div class="s9__tag-line img-wrp">
					<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/s9-line.json" background="transparent" speed="0.5" autoplay loop></lottie-player>
				</div>
				<div class="s9__tag-blur-bg"></div>

				<div class="s9__end-title def-title">
					<?php echo get_post_meta(get_the_ID(), 'index_s9_title_desk', true);?>
				</div>
				<div class="s9__end-desk def-text">
					<?php echo get_post_meta(get_the_ID(), 'index_s9_title_text', true);?>
				</div>
				<div class="s9__end-last-text small-text">
					<?php echo get_post_meta(get_the_ID(), 'index_s9_text', true);?>
				</div>

				<div class="s9__main-box-bg img-wrp">
					<img loading="lazy" class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/s9/s9__main-box-bg.svg" alt="svg">
					<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s9__main-box-bg-tab.svg" alt="svg" loading="lazy">
				</div>
			</div>
		</section>

		<section class="s10">
			<div class="s6__container container">
				<div class="s6__title title-wrp">
					<div class="s6__pre-title title-wrp__pre-title pre-title s6__pre-title--two">
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
						</div>
						<span class="s6__pre-title-text title-wrp__pre-title-text small-text">Задаём тренды</span>
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
						</div>
					</div>
					<div class="s6__title-text title-wrp__text big-title">
						<?php echo get_post_meta(get_the_ID(), 'index_s10_title', true);?>
					</div>
					<div class="s6__title-desk title-wrp__desk def-text">
						<?php echo get_post_meta(get_the_ID(), 'index_s10_desk', true);?>
					</div>
				</div>

				<ul class="s6__list s10__list--mod svg-blur-hover-wrp">
					<?php
						$current_page = get_post();
						$page_id = $current_page->ID;
						$pod = pods('page', $page_id);
						$field1 = $pod->field('index_s10_icons');
						$field2 = $pod->field('index_s10_titles');
						$field3 = $pod->field('index_s10_list_texts');
						$index = 0;
						if (!empty($field1)) { 
							foreach ($field1 as $item) {
								echo '<li class="s6__list-item">';
								echo '<div class="s6__list-item-icon img-wrp svg-blur">';
								echo '<img src="'. wp_get_attachment_url($field1[$index]['ID']) .'" alt="svg" loading="lazy">';
								echo '<div class="blur"></div>';
								echo '</div>';
								echo '<div class="s6__list-item-title str-text">'. $field2[$index] .'</div>';
								echo '<div class="s6__list-item-text def-text">' . $field3[$index] . '</div>';
								echo '</li>';
								$index++;
							}
						}
					?>
				</ul>

				<div class="s6__decor s6__decor-bg img-wrp">
					<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/s6__decor-bg-web.svg" alt="svg" loading="lazy">
					<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s6__decor-bg-tab.svg" alt="svg" loading="lazy">
					<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s6__decor-bg-mob.svg" alt="svg" loading="lazy">
				</div>
				<div class="s6__decor s6__decor-list img-wrp">
					<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/s6__decor-list-web.svg" alt="svg" loading="lazy">
					<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s6__decor-list-tab.svg" alt="svg" loading="lazy">
					<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s6__decor-list-mob.svg" alt="svg" loading="lazy">
				</div>

				<div class="s9__end-title def-title">
					<?php echo get_post_meta(get_the_ID(), 'index_s10_title_desk', true);?>
				</div>
				<div class="s9__end-desk def-text">
					<?php echo get_post_meta(get_the_ID(), 'index_s10_desk_text', true);?>
				</div>

				

				<div class="list-progress">
					<div class="list-progress__item">
						<div class="list-progress__item-wrp">
							<div class="list-progress__item-icon img-wrp">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$image_field = $pod->field('index_s10_list_icons');
									if (!empty($image_field)) {
										$image_url = wp_get_attachment_url($image_field[0]['ID']);
										echo '<img src="' . $image_url . '" alt="icon" loading="lazy">';
									}
								?>
								<div class="blur"></div>
							</div>
						</div>
						<div class="list-progress__text def-text">
							<?php
								$current_page = get_post();
								$page_id = $current_page->ID;
								$pod = pods('page', $page_id);
								$field = $pod->field('index_s10_list_text');
								echo $field[0];
							?>
						</div>
					</div>
					<div class="list-progress__item-decoration">
						<div class="list-progress__item-decoration-line"></div>
						<div class="list-progress__item-decoration-object"></div>
					</div>

					<div class="list-progress__item">
						<div class="list-progress__item-wrp">
							<div class="list-progress__item-icon img-wrp">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$image_field = $pod->field('index_s10_list_icons');
									if (!empty($image_field)) {
										$image_url = wp_get_attachment_url($image_field[1]['ID']);
										echo '<img src="' . $image_url . '" alt="icon" loading="lazy">';
									}
								?>
								<div class="blur"></div>
							</div>
						</div>
						<div class="list-progress__text def-text">
							<?php
								$current_page = get_post();
								$page_id = $current_page->ID;
								$pod = pods('page', $page_id);
								$field = $pod->field('index_s10_list_text');
								echo $field[1];
							?>
						</div>
					</div>
					<div class="list-progress__item-decoration">
						<div class="list-progress__item-decoration-line"></div>
						<div class="list-progress__item-decoration-object"></div>
					</div>

					<div class="list-progress__item">
						<div class="list-progress__item-wrp">
							<div class="list-progress__item-icon img-wrp">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$image_field = $pod->field('index_s10_list_icons');
									if (!empty($image_field)) {
										$image_url = wp_get_attachment_url($image_field[2]['ID']);
										echo '<img src="' . $image_url . '" alt="icon" loading="lazy">';
									}
								?>
								<div class="blur"></div>
							</div>
						</div>
						<div class="list-progress__text def-text">
							<?php
								$current_page = get_post();
								$page_id = $current_page->ID;
								$pod = pods('page', $page_id);
								$field = $pod->field('index_s10_list_text');
								echo $field[2];
							?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="s11 slider-section slider-section2">
			<div class="slider-section__container container">
				<div class="slider-section__title title-wrp">
					<div class="slider-section__pre-title title-wrp__pre-title pre-title s11__pre-title">
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
						</div>
						<span class="slider-section__pre-title-text title-wrp__pre-title-text small-text">Безопасность</span>
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
						</div>
					</div>
					<div class="slider-section__title-text title-wrp__text big-title">
						<?php echo get_post_meta(get_the_ID(), 'index_s11_title', true);?>
					</div>
					<div class="slider-section__title-desk title-wrp__desk def-text">
						<?php echo get_post_meta(get_the_ID(), 'index_s11_desk', true);?>
					</div>
				</div>

				<div class="swiper slider-section__swiper slider-section__swiper2">
					<div class="swiper-wrapper">
						<?php
							$current_page = get_post();
							$page_id = $current_page->ID;
							$pod = pods('page', $page_id);
							$field1 = $pod->field('index_s11_list_icons');
							$field2 = $pod->field('index_s11_list_title');
							$field3 = $pod->field('index_s11_list_text');
							$index = 0;
							if (!empty($field1)) { 
								foreach ($field1 as $item) {
									echo '<div class="swiper-slide slider-section__slider">';
									echo '<div class="slider-section__slide-icon img-wrp">';
									echo '<img src="'. wp_get_attachment_url($field1[$index]['ID']) .'" alt="svg" loading="lazy">';
									echo '</div>';
									echo '<div class="slider-section__slider-title str-text">'. $field2[$index] .'</div>';
									echo '<div class="slider-section__slider-text def-text">' . $field3[$index] . '</div>';
									echo '</div>';
									$index++;
								}
							}
						?>
					</div>
					<div class="slider-section__slider-navigation slider-navigation swiper-pagination"></div>

					<div class="slider-section__swiper-button-next swiper-button-next img-wrp">
						<div class="slider-section__swiper-arrow img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-arrow-next.svg" alt="svg" loading="lazy">
						</div>
						<div class="slider-section__swiper-bg img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-bg.svg" alt="svg" loading="lazy">
						</div>
					</div>
					<div class="slider-section__swiper-button-prev swiper-button-prev img-wrp">
						<div class="slider-section__swiper-arrow img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-arrow-prev.svg" alt="svg" loading="lazy">
						</div>
						<div class="slider-section__swiper-bg img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-bg.svg" alt="svg" loading="lazy">
						</div>
					</div>

				</div>
			</div>

			<div class="slider-section__bg-main img-wrp">
				<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__bg-mains11.svg" alt="svg" loading="lazy">				
				<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__bg-main-mob11.svg" alt="svg" loading="lazy">
				
			</div>

			<div class="slider-section__bg-light img-wrp">
				<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__bg-light.svg" alt="svg" loading="lazy">
				<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__bg-light-mob.svg" alt="svg" loading="lazy">
			</div>

			<div class="slider-section__bg-light-dop img-wrp">
				<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__bg-light-dop.svg" alt="svg" loading="lazy">
				<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__bg-light-dop-mob.svg" alt="svg" loading="lazy">
			</div>
		</section>

		<section class="s12">
			<div class="s12__container container">
				<div class="s12__title title-wrp">
					<div class="s12__pre-title title-wrp__pre-title pre-title">
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
						</div>
						<span class="s12__pre-title-text title-wrp__pre-title-text small-text">Отзывы</span>
						<div class="pre-title-lp img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
						</div>
					</div>
					<div class="s12__title-text title-wrp__text big-title">
						<?php echo get_post_meta(get_the_ID(), 'index_s12_title', true);?>
					</div>
				</div>

				<div class="swiper last-swiper">
					<div class="swiper-wrapper">
					<?php
						$current_page = get_post();
						$page_id = $current_page->ID;
						$pod = pods('page', $page_id);
						$field2 = $pod->field('index_s12_list_text');
						$field3 = $pod->field('index_s12_list_user_icon');
						$field4 = $pod->field('index_s12_list_user_name');
						$field5 = $pod->field('index_s12_list_user_status');

						if (!empty($field2)) {
							$count = count($field2); // Определяем количество элементов
							$chunks = array_chunk($field2, 2); // Разбиваем массив $field2 на группы по 2 элемента

							for ($i = 0; $i < $count; $i += 2) {
								echo '
								<div class="swiper-slide">
									<ul class="s12__list">';
									// Для каждой группы по 2 элемента
									for ($j = $i; $j < $i + 2 && $j < $count; $j++) {
										// Выводим элементы $field1 в списке <ul>
										echo '<li class="s12__item">';
										echo '<div class="s12__item-text def-text">'. $field2[$j] .'</div>';
										echo '<div class="user-box">';
										echo '<div class="user-box__img img-wrp">';
										echo '<img src="' . wp_get_attachment_url($field3[$j]['ID']) . '" alt="icon">';
										echo '</div>';
										echo '<div class="user-box__title small-text">'. $field4[$j] .'</div>';
										echo '<div class="user-box__text small-text">'. $field5[$j] .'</div>';
										echo '</div>';
										echo '</li>';
									}

									echo '  </ul>
												</div>';
							}
						}
						?>
					</div>

					<div class="slider-section__slider-navigation slider-navigation swiper-pagination"></div>
					<div class="slider-section__swiper-button-next swiper-button-next img-wrp">
						<div class="slider-section__swiper-arrow img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-arrow-next.svg" alt="svg" loading="lazy">
						</div>
						<div class="slider-section__swiper-bg img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-bg.svg" alt="svg" loading="lazy">
						</div>
					</div>
					<div class="slider-section__swiper-button-prev swiper-button-prev img-wrp">
						<div class="slider-section__swiper-arrow img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-arrow-prev.svg" alt="svg" loading="lazy">
						</div>
						<div class="slider-section__swiper-bg img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__swiper-bg.svg" alt="svg" loading="lazy">
						</div>
					</div>
				</div>

				<?php
					// Получаем ID главной страницы
					$front_page_id = get_option('page_on_front');
					// Получаем объект поста главной страницы
					$front_page = get_post($front_page_id);
					// Получаем значение поля 'my_field' на главной странице
					$front_page_text = get_post_meta($front_page->ID, 'tg_link', true);

					// Используем значение поля 'my_field'
					if (!empty($front_page_text)) {
							echo '<a class="s12__btn main-btn" target="_blank" href="' . $front_page_text . '">';
					}
				?>
					<span class="main-btn__text small-text">Все отзывы в телеграм</span>
					<div class="main-btn__effect"></div>
				</a>

				<div class="s12__decor-bg img-wrp">
					<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/s12__decor-bg-web.svg" alt="svg" loading="lazy">
					<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s12__decor-bg-tab.svg" alt="svg" loading="lazy">
					<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s12__decor-bg-mob.svg" alt="svg" loading="lazy">
				</div>
			</div>
		</section>

		<section class="s13 s7">
			<div class="s7__container container">
				<div class="window">
					<div class="window-bg img-wrp">
						<img loading="lazy" class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/window-box/window-bg.svg" alt="svg">
						<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/window-bg-tab.svg" alt="svg" loading="lazy">
						<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/window-bg-mob.svg" alt="svg" loading="lazy">
					</div>
					<div class="s7__title title-wrp">
						<div class="s7__title-icon-logo img-wrp">
							<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/window-box/s7__title-icon-logo.svg" alt="svg">
						</div>
						<div class="s7__pre-title title-wrp__pre-title pre-title s7__pre-title--two">
							<div class="pre-title-lp img-wrp">
								<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
							</div>
								<span class="s7__pre-title-text title-wrp__pre-title-text small-text">Протестируйте BBZ</span>
							<div class="pre-title-lp img-wrp">
								<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
							</div>
						</div>
						<div class="s7__title-cicle-list">
							<div class="s7__title-cicle"></div>
							<div class="s7__title-cicle"></div>
							<div class="s7__title-cicle"></div>
						</div>
					</div>
					<div class="s7__item-main">
						<div class="s7__item-main-icon img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-main-icon.svg" alt="svg" loading="lazy">
						</div>
						<div class="s7__item-main-title def-title">
							Повысьте продажи
						</div>
						<div class="s7__item-main-text def-text">за 7 дней</div>

						<a href="#" class="s7__btn main-btn main-btn--white">
							<span class="main-btn__text small-text">Тестировать бесплатно</span>
							<div class="main-btn__effect"></div>
						</a>

						<div class="s7__item-main-bg-mask img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-main-bg-mask.svg" alt="svg" loading="lazy">
						</div>
						<div class="s7__item-main-line img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-main-line.svg" alt="svg" loading="lazy">
						</div>
					</div>
					<div class="s7__item s7__item1 s7__item--big">
						<div class="s7__item-icon img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-icon.svg" alt="svg" loading="lazy">
						</div>
						<div class="s7__item-title def-text">
							<div class="wrp-text-web-tab">
								Продвигайте товары <br>
								<span>на walberis </span>
							</div>
							<div class="wrp-text-mob">
								Продвигайте <br>товарына WB
							</div>
						</div>
						<div class="s7__item-bg img-wrp">
							<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/window-box/s7__item-bg.svg" alt="svg">
						</div>
					</div>
					<div class="s7__item s7__item2 s7__item--small">
						<div class="s7__item-icon img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-icon2.svg" alt="svg" loading="lazy">
						</div>
						<div class="s7__item-title def-text">
							<div class="wrp-text-web-tab">
								Любое количество отзывов
							</div>
							<div class="wrp-text-mob">
								Любое кол <br>отзывов
							</div>
						</div>
						<div class="s7__item-line img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-line3.svg" alt="svg" loading="lazy">
						</div>
					</div>
					<div class="s7__item s7__item3 s7__item--small">
						<div class="s7__item-icon img-wrp">
							<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-icon3.svg" alt="svg" loading="lazy">
							<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-icon3-mob.svg" alt="svg" loading="lazy">			
						</div>
						<div class="s7__item-title def-text">
							<div class="wrp-text-web-tab">
								Любое количество выкупов
							</div>
							<div class="wrp-text-mob">
								Любое кол <br> выкупов
							</div>
						</div>
						<div class="s7__item-line img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s7__item-line4.svg" alt="svg" loading="lazy">
						</div>
					</div>
					<div class="s7__item s7__item4 s7__item--big">
						<div class="s7__item-icon img-wrp">
							<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/procent.svg" alt="svg" />
						</div>
						<div class="s7__item-title def-text">
							<div class="s7__item-title def-text">
								<div class="text-web">
									Экономьте на авторекламе <br>
									<span>Экономия до 10x</span>
								</div>
								<div class="text-tab">
									Экономьте<br>
									<span>на авторекламе</span>
								</div>
								<div class="wrp-text-mob">
									Экономьте на <br> авторекламе
								</div>
							</div>
						</div>
						<div class="s7__item-bg img-wrp">
							<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/window-box/s7__item-bg.svg" alt="svg">
						</div>
					</div>

					<div class="s7__decoration-window img-wrp">
						<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/s7__decoration-window-web.svg" alt="svg" loading="lazy">
						<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s7__decoration-window-tab.svg" alt="svg" loading="lazy">
						<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s7__decoration-window-mob.svg" alt="svg" loading="lazy">
					</div>
				</div>

				<div class="s7__decoration-shadow img-wrp">
					<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/s7__decoration-shadow-web.svg" alt="svg" loading="lazy">
					<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s7__decoration-shadow-tab.svg" alt="svg" loading="lazy">
				</div>
				<div class="s7__decoration-lines img-wrp">
					<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/s7__decoration-lines-web-tab.svg" alt="svg" loading="lazy">
					<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/s7__decoration-lines-mob.svg" alt="svg" loading="lazy">
				</div>
				<div class="s7__decoration-star s1__decoration s1__decoration--one star-bg img-wrp">
					<picture>
						<source media="(min-width: 1200px)" srcset="<?php bloginfo('template_url'); ?>/assets/img/star-bg.svg">
						<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/star-bg-static.svg" alt="star-svg-bg">
					</picture>						
				</div>
			</div>
		</section>

		<section class="s14">
			<div class="s14__container container">
				<div class="s14__title def-title">База знаний</div>
				<div class="accordion">
					<?php
						$current_page = get_post();
						$page_id = $current_page->ID;
						$pod = pods('page', $page_id);
						$field1 = $pod->field('index_s14_list_title');
						$field2 = $pod->field('index_s14_list_text');
						$index = 0;
						if (!empty($field1)) { 
							foreach ($field1 as $item) {
								echo '<div class="accordion__item">';
								echo '<div class="accordion__header">';
								echo '<div class="accordion-left-decor img-wrp">';
								echo '<svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="1.17678" y1="0.823223" x2="25.1768" y2="24.8232" stroke="#323F5F" stroke-width="0.5"/><line x1="0.823223" y1="24.8232" x2="24.8232" y2="0.823222" stroke="#323F5F" stroke-width="0.5"/></svg></div>';
								echo '<div class="accordion__title str-text">'. $field1[$index] .'</div>';
								echo '<div class="accordion__icon img-wrp">';
								echo '<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_b_2694_6402)"><path d="M0.249998 18C0.249999 8.19695 8.19695 0.250001 18 0.250002C27.8031 0.250003 35.75 8.19695 35.75 18C35.75 27.8031 27.8031 35.75 18 35.75C8.19694 35.75 0.249997 27.8031 0.249998 18Z" stroke="url(#paint0_linear_2694_6402)" stroke-width="0.5"/></g><path d="M12 15L18 21L24 15" stroke="url(#paint1_linear_2694_6402)" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/><defs><filter id="filter0_b_2694_6402" x="-110" y="-110" width="256" height="256" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feGaussianBlur in="BackgroundImageFix" stdDeviation="55"/><feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_2694_6402"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_2694_6402" result="shape"/></filter><linearGradient id="paint0_linear_2694_6402" x1="18" y1="36" x2="18" y2="2.24109e-06" gradientUnits="userSpaceOnUse"><stop stop-color="#212941"/><stop offset="0.469183" stop-color="#2C3A65"/><stop offset="1" stop-color="#272C3D"/></linearGradient><linearGradient id="paint1_linear_2694_6402" x1="18" y1="17.2143" x2="18" y2="19.3929" gradientUnits="userSpaceOnUse"><stop stop-color="#EEEEEE"/><stop offset="0.51" stop-color="#C8DCF5"/><stop offset="1" stop-color="#CBD5E2"/></linearGradient></defs></svg></div></div>';
								echo '<div class="accordion__content def-text">' . $field2[$index] . '</div>';
								echo '<div class="accordion-line-decor img-wrp">';
								echo '<img class="svg-web svg-tab" src="' . get_template_directory_uri() . '/assets/img/accordion-line-decor.svg" alt="svg" loading="lazy">';
								echo '<img class="svg-mob" src="' . get_template_directory_uri() . '/assets/img/accordion-line-decor-mob.svg" alt="svg" loading="lazy">';
								echo '</div></div>';
								$index++;
							}
						}
					?>
				</div>
			</div>
		</section>
	</main>

<?php  get_footer($name); ?>
</body>
</html>