<?php
/*
Template Name: Home
*/
?>

<?php  get_header($name); ?>

	<header class="header">
		<div class="header__container container">
			<div class="header__logo logo img-wrp">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/header__logo-svg.svg" alt="svg" loading="lazy">
				</a>
			</div>

			<nav class="header__nav main-nav">
				<ul class="header__nav-list">
					<li class="header__nav-item">
						<a href="page-about.html" class="header__nav-link small-text">О BBZ</a>
					</li>
					<li class="header__nav-item">
						<a href="page-how-work.html" class="header__nav-link small-text">Как работает</a>
					</li>
					<li class="header__nav-item">
						<a href="page-question-answer.html" class="header__nav-link small-text">FAQ</a>
					</li>
					<li class="header__nav-item">
						<a href="page-how-works.html" class="header__nav-link small-text">Применение</a>
					</li>
					<li class="header__nav-item">
						<a href="page-blog.html" class="header__nav-link small-text">Блог</a>
					</li>
				</ul>
			</nav>

			<a href="#" class="header__btn main-btn small-text">
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
						Безлимитные выкупы <br>
						и отзывы за 8000р в месяц
					</div>

					<div class="s1__text def-text">
						Узнайте почему 90% юзеров решают купить подписку после бесплатного теста?
					</div>

					<a href="#" class="s1__btn main-btn">
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
						Управляйте позициями <br>
						и рейтингом
					</div>
					<div class="scroll-section__title-desk title-wrp__desk def-text">
						Самовыкупы - мощный инструмент повышения продаж на Wildberries!
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
						<div class="swiper-slide scroll-section__slider">
							<div class="scroll-section__slider-title def-title">
								Быстрое продвижение <br>
								в ТОП выдачи Wildberrie1
							</div>
							<div class="scroll-section__slider-text def-text">
								Позиции товара начнут расти после первых заказов. Нужное место достигается за 10-14 дн.
								BBZ использует самые эффективные для продвижения поведеньческие факторы.
							</div>
						</div>
						<div class="swiper-slide scroll-section__slider">
							<div class="scroll-section__slider-title def-title">
								Главный инструмент <br>
								50-70% влияния
							</div>
							<div class="scroll-section__slider-text def-text">
								Позиции артикула в поиске по запросу в первую очередь зависят от того. Как много человек покупает этот товар, найдя его по этому запросу. Люди голосуют за этот товар в выдаче деньгами.
							</div>
						</div>
						<div class="swiper-slide scroll-section__slider">
							<div class="scroll-section__slider-title def-title">
								Функция <br>
								факторов
							</div>
							<div class="scroll-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
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
						Сколько это стоит
					</div>
					<div class="s3__title-desk title-wrp__desk def-text">
						Приобретите лицензию и получите <br>
						все преимущества бота
					</div>
				</div>

				<div class="swiper s3_tab-swiper">
					<ul class="s3__list swiper-wrapper">
						<li class="s3__list-item svg-blur-hover-wrp swiper-slide">
							<div class="s3__list-item-icon img-wrp svg-blur">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/s3__list-item-icon.svg" alt="svg" loading="lazy">
								<div class="blur"></div>
							</div>
							<div class="s3__list-item-title str-text">Тест Драйв</div>
							<div class="s3__list-item-price def-text">1000 <span>₽<span></div>
							<div class="s3__list-item-bullets">
								<span class="s3__list-item-bullet-text small-text">7 дней</span>
							</div>

							<ul class="s3__list-inside">
								<li class="s3__list-inside-item">
									<div class="s3__list-inside-item-icon img-wrp">
										<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ok.svg" alt="img">
									</div>
									<div class="s3__list-inside-item-text def-text">Полный функционал на 7 дней</div>
								</li>
							</ul>

							<a href="#" class="s3__btn main-btn small-text">
								<span class="main-btn__text small-text">Взять тест-драйв</span>
								<div class="main-btn__effect"></div>
							</a>
						</li>

						<li class="s3__list-item svg-blur-hover-wrp swiper-slide">
							<div class="s3__list-item-icon img-wrp svg-blur">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/s3__list-item-icon2.svg" alt="svg" loading="lazy">
								<div class="blur"></div>
							</div>
							<div class="s3__list-item-title str-text">Подписка</div>
							<div class="s3__list-item-price def-text">9 500 <span>₽<span></div>
							<div class="s3__list-item-bullets">
								<span class="s3__list-item-bullet-text small-text">30 дней</span>
								<span class="s3__list-item-bullet-text small-text active">60 дней</span>
								<span class="s3__list-item-bullet-text small-text">90 дней</span>
							</div>

							<ul class="s3__list-inside">
								<li class="s3__list-inside-item">
									<div class="s3__list-inside-item-icon img-wrp">
										<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ok.svg" alt="img">
									</div>
									<div class="s3__list-inside-item-text def-text">Автооплата</div>
								</li>
								<li class="s3__list-inside-item">
									<div class="s3__list-inside-item-icon img-wrp">
										<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ok.svg" alt="img">
									</div>
									<div class="s3__list-inside-item-text def-text">До 200 выкупов в день</div>
								</li>
								<li class="s3__list-inside-item">
									<div class="s3__list-inside-item-icon img-wrp">
										<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ok.svg" alt="img">
									</div>
									<div class="s3__list-inside-item-text def-text">Лайки и Дизлайки на отзывы</div>
								</li>
								<li class="s3__list-inside-item">
									<div class="s3__list-inside-item-icon img-wrp">
										<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ok.svg" alt="img">
									</div>
									<div class="s3__list-inside-item-text def-text">Авто перекрытие негатива</div>
								</li>
								<li class="s3__list-inside-item">
									<div class="s3__list-inside-item-icon img-wrp">
										<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ok.svg" alt="img">
									</div>
									<div class="s3__list-inside-item-text def-text">Автоответчик на отзывы</div>
								</li>
								<li class="s3__list-inside-item">
									<div class="s3__list-inside-item-icon img-wrp">
										<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ok.svg" alt="img">
									</div>
									<div class="s3__list-inside-item-text def-text">Мониторинг позиций по 5 гео</div>
								</li>
							</ul>

							<a href="#" class="s3__btn main-btn small-text">
								<span class="main-btn__text small-text">Приоборести лицензию</span>
								<div class="main-btn__effect"></div>
							</a>
						</li>

						<li class="s3__list-item svg-blur-hover-wrp swiper-slide">
							<div class="s3__list-item-icon img-wrp svg-blur">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/s3__list-item-icon3.svg" alt="svg" loading="lazy">
								<div class="blur"></div>
							</div>
							<div class="s3__list-item-title str-text">Для агентств</div>
							<div class="s3__list-item-price def-text">1000 <span>₽<span></div>
							<div class="s3__list-item-bullets">
								<span class="s3__list-item-bullet-text small-text">1 мес</span>
							</div>

							<ul class="s3__list-inside">
								<li class="s3__list-inside-item">
									<div class="s3__list-inside-item-icon img-wrp">
										<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ok.svg" alt="img">
									</div>
									<div class="s3__list-inside-item-text def-text">До 1000 выкупов за один день</div>
								</li>
								<li class="s3__list-inside-item">
									<div class="s3__list-inside-item-icon img-wrp">
										<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ok.svg" alt="img">
									</div>
									<div class="s3__list-inside-item-text def-text">Менеджмент ваших клиентов</div>
								</li>
								<li class="s3__list-inside-item">
									<div class="s3__list-inside-item-icon img-wrp">
										<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ok.svg" alt="img">
									</div>
									<div class="s3__list-inside-item-text def-text">Тг отчётность для клиентов </div>
								</li>
								<li class="s3__list-inside-item">
									<div class="s3__list-inside-item-icon img-wrp">
										<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/ok.svg" alt="img">
									</div>
									<div class="s3__list-inside-item-text def-text">Приоритетная поддержка</div>
								</li>
							</ul>

							<a href="#" class="s3__btn main-btn small-text">
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
						Самовыкупы под ключ
					</div>
					<div class="s4__title-desk title-wrp__desk def-text">
						Мы позаботимся о вашем продвижении <br>
						на Wildberries
					</div>
				</div>

				<div class="list-progress">
					<div class="list-progress__item">
						<div class="list-progress__item-wrp">
							<div class="list-progress__item-icon img-wrp">
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/line-progress/list-progress__item-icon.svg" alt="svg">
								<div class="blur"></div>
							</div>
						</div>
						<div class="list-progress__text def-text">
							<div class="wrp-text-web-tab">
								Разработаем личною <br>
								стратегию продвижения
							</div>
							<div class="wrp-text-mob">
								Личноя стратегия продвижения
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
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/line-progress/list-progress__item-icon2.svg" alt="svg">
								<div class="blur"></div>
							</div>
						</div>
						<div class="list-progress__text def-text">
							<div class="wrp-text-web-tab">
								Выкупим ваш товар <br>
								на Wildberries
							</div>
							<div class="wrp-text-mob">
								Выкупим ваш товар <br> на WB
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
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/line-progress/list-progress__item-icon3.svg" alt="svg">
								<div class="blur"></div>
							</div>
						</div>
						<div class="list-progress__text def-text">
							<div class="wrp-text-web-tab">
								Заберём товар <br>
								с пунка выдачи заказов
							</div>
							<div class="wrp-text-mob">
								Заберём товар <br>
								с пунка выдачи
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
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/line-progress/list-progress__item-icon4.svg" alt="svg">
								<div class="blur"></div>
							</div>
						</div>
						<div class="list-progress__text def-text">
							<div class="wrp-text-web-tab">
								Перепакуем, отправим <br>
								обратно на Wildberries
							</div>
							<div class="wrp-text-mob">
								Перепакуем,<br> отправим на WB
							</div>
						</div>
					</div>

				</div>

				<div class="s4__last-title def-title">
					Сделаем нужное количество самовыкупов
				</div>
				<div class="s4__last-desk def-text">
					Отзывы на каждый выкуп. Прохождение 99%. <br>
					Отчёты в телеграм по выкупам и отзывам
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
							100 выкупов — <span>12 000 <small>₽</small></span>
						</div>
						<div class="s4__list-text def-text">
							200 выкупов — <span>20 000 <small>₽</small></span>
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
							100 выкупов — <span>12 000 <small>₽</small></span>
						</div>
						<div class="s4__list-text def-text">
							200 выкупов — <span>20 000 <small>₽</small></span>
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
							100 выкупов — <span>12 000 <small>₽</small></span>
						</div>
						<div class="s4__list-text def-text">
							200 выкупов — <span>20 000 <small>₽</small></span>
						</div>
					</li>
				</ul>

				<a href="#" class="s4__btn main-btn small-text">
					<span class="main-btn__text small-text">Приоборести лицензию</span>
					<div class="main-btn__effect"></div>
				</a>

				<div class="s4__last-text-wrp small-text">
					<span class="s4__last-text">Цены услуг фулфилмента — по запросу</span>
					<span class="s4__last-text">Цена за забор одного адреса — 100₽</span>
					<span class="s4__last-text">Возможность оплаты за товары по безналу - +6%.</span>
					<span class="s4__last-text">При переводе на карту — дополнительных % нет.</span>
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
						Лучший способ <br>
						продвижения товаров
					</div>
					<div class="scroll-section__title-desk title-wrp__desk def-text">
						Самовыкупы остаются самым эффективным
						и выгодным способом повышения продаж
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
						<div class="swiper-slide scroll-section__slider">
							<div class="scroll-section__slider-title def-title">
								Главный инструмент <br>
								50-70% влияния
							</div>
							<div class="scroll-section__slider-text def-text">
								Позиции артикула в поиске по запросу в первую очередь зависят от того. Как много человек покупает этот товар, найдя его по этому запросу. Люди голосуют за этот товар в выдаче деньгами.
							</div>
						</div>
						<div class="swiper-slide scroll-section__slider">
							<div class="scroll-section__slider-title def-title">
								Главный инструмент <br>
								50-70% влияния2
							</div>
							<div class="scroll-section__slider-text def-text">
								Позиции артикула в поиске по запросу в первую очередь зависят от того. Как много человек покупает этот товар, найдя его по этому запросу. Люди голосуют за этот товар в выдаче деньгами.
							</div>
						</div>
						<div class="swiper-slide scroll-section__slider">
							<div class="scroll-section__slider-title def-title">
								Функция <br>
								факторов
							</div>
							<div class="scroll-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
					</div>

					<div class="scroll-section__slider-navigation slider-navigation swiper-pagination"></div>
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
						Почему вам нужен <br>
						именно BuyBotZen
					</div>
					<div class="s6__title-desk title-wrp__desk def-text">
						Мы  любим BuyBotZen потому что, <br>
						"он наш сыночек."
					</div>
				</div>

				<ul class="s6__list svg-blur-hover-wrp">
					<li class="s6__list-item">
						<div class="s6__list-item-icon img-wrp svg-blur">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s6__list-item-icon.svg" alt="svg" loading="lazy">
							<div class="blur"></div>
						</div>
						<div class="s6__list-item-title str-text">Тест Драйв</div>
						<div class="s6__list-item-text def-text">
							BBZ изначально спроектирован так, чтобы
							нужно было взаимодействовать с ним как можно меньше.
							Весь процесс работы автоматизирован и удобно организован.
							Настройте программу, всё остальное она сделает сама.
						</div>
					</li>
					<li class="s6__list-item">
						<div class="s6__list-item-icon img-wrp svg-blur">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s6__list-item-icon2.svg" alt="svg" loading="lazy">
							<div class="blur"></div>
						</div>
						<div class="s6__list-item-title str-text">В вашем Телеграм</div>
						<div class="s6__list-item-text def-text">
							Бот пришлёт план на день. Расскажет, как
							проходит выполнение. Отчитается в конце дня.
							Вся информация о выкупах, отзывах, авто-перекрытии приходит в удобном виде в телеграм.
						</div>
					</li>
					<li class="s6__list-item">
						<div class="s6__list-item-icon img-wrp svg-blur">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s6__list-item-icon3.svg" alt="svg" loading="lazy">
							<div class="blur"></div>
						</div>
						<div class="s6__list-item-title str-text">Безлимитность</div>
						<div class="s6__list-item-text def-text">
							Никто не любит ограниения.
							В BuyBotZen нет пакетов выкупов.
							В течении подписки вы можете делать столько выкупов, сколько нужно.
							К каждому выкупу можно оставлять отзывы.
						</div>
					</li>
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
						8 функциональных <br>
						модулей - один софт
					</div>
					<div class="slider-section__title-desk title-wrp__desk def-text">
						Всё что нужно для автоматизации продвижения товаров - в одном софте
					</div>
				</div>

				<div class="swiper slider-section__swiper slider-section__swiper1">
					<div class="swiper-wrapper">
						<div class="swiper-slide slider-section__slider">
							<div class="slider-section__slide-icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__slide-icon.svg" alt="svg" loading="lazy">
							</div>
							<div class="slider-section__slider-title str-text">
								Авто-выкупы
							</div>
							<div class="slider-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
						<div class="swiper-slide slider-section__slider">
							<div class="slider-section__slide-icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__slide-icon2.svg" alt="svg" loading="lazy">
							</div>
							<div class="slider-section__slider-title str-text">
								Функция нагуливания поведеньческих факторов
							</div>
							<div class="slider-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
						<div class="swiper-slide slider-section__slider">
							<div class="slider-section__slide-icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__slide-icon.svg" alt="svg" loading="lazy">
							</div>
							<div class="slider-section__slider-title str-text">
								Авто-выкупы
							</div>
							<div class="slider-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
						<div class="swiper-slide slider-section__slider">
							<div class="slider-section__slide-icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__slide-icon2.svg" alt="svg" loading="lazy">
							</div>
							<div class="slider-section__slider-title str-text">
								Функция нагуливания поведеньческих факторов
							</div>
							<div class="slider-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
						<div class="swiper-slide slider-section__slider">
							<div class="slider-section__slide-icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__slide-icon.svg" alt="svg" loading="lazy">
							</div>
							<div class="slider-section__slider-title str-text">
								Авто-выкупы
							</div>
							<div class="slider-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
						<div class="swiper-slide slider-section__slider">
							<div class="slider-section__slide-icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__slide-icon3.svg" alt="svg" loading="lazy">
							</div>
							<div class="slider-section__slider-title str-text">
								Функция нагуливания поведеньческих факторов
							</div>
							<div class="slider-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
						<div class="swiper-slide slider-section__slider">
							<div class="slider-section__slide-icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__slide-icon.svg" alt="svg" loading="lazy">
							</div>
							<div class="slider-section__slider-title str-text">
								Авто-выкупы
							</div>
							<div class="slider-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
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
						Полная имитация живого <br>
						человека
					</div>
					<div class="s9__title-desk title-wrp__desk def-text">
						Делать самовыкупы безопасно и правильно <br>
						- с удовольствием
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
					Эмуляция 90% самых <br>
					популярных устройств
				</div>
				<div class="s9__end-desk def-text">
					Мобильные. 35% IOS и 55% Android <br>
					10% — десктоп
				</div>
				<div class="s9__end-last-text small-text">
					Данные взяты из статистики внутренней рекламы. <br>
					Значит именно такое соотношение пользователей на WB.
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
						Ломаем рамки привычных <br>
						шаблонов
					</div>
					<div class="s6__title-desk title-wrp__desk def-text">
						BBZ программа, которая проверена <br>
						и протестирована практиками
					</div>
				</div>

				<ul class="s6__list s10__list--mod svg-blur-hover-wrp">
					<li class="s6__list-item">
						<div class="s6__list-item-icon img-wrp svg-blur">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s10__list-item-icon1.svg" alt="svg" loading="lazy">
							<div class="blur"></div>
						</div>
						<div class="s6__list-item-title s10__list-item-title--mod str-text">Актуальность</div>
						<div class="s6__list-item-text def-text">
							Мы сами торгуем на Вайлдберриз. Постоянно тестируем различные подходы.
							Тесно общаемся с клиентами и вместе находим более эффективные решения,
							которые действительно работают именно в данный момент.
						</div>
					</li>
					<li class="s6__list-item">
						<div class="s6__list-item-icon img-wrp svg-blur">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s10__list-item-icon2.svg" alt="svg" loading="lazy">
							<div class="blur"></div>
						</div>
						<div class="s6__list-item-title s10__list-item-title--mod str-text">Уникальные опции</div>
						<div class="s6__list-item-text def-text">
							Многие селлеры выбирают BBZ, потому что
							только здесь есть возможности, необходимые для их бизнеса.
							Многие опции были добавлены по запросу наших клиентов.
						</div>
					</li>
					<li class="s6__list-item">
						<div class="s6__list-item-icon s6__list-item-icon-mod img-wrp svg-blur">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s10__list-item-icon3.svg" alt="svg" loading="lazy">
							<div class="blur"></div>
						</div>
						<div class="s6__list-item-title s10__list-item-title--mod str-text">Тайные техники</div>
						<div class="s6__list-item-text def-text">
							Объясним, как работает алгоритм ранжирования на Вб.
							Посоветуем стратегию продвижения под ваши условия.
							Покажем, как делать меньше выкупов и получать
							больший рост позиций.
						</div>
					</li>
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
					Получите полный автоматический <br>
					функционал
				</div>
				<div class="s9__end-desk def-text">
					Самовыкупы с BBZ - это просто, <br>
					как раз, два, три!
				</div>

				<div class="list-progress">
					<div class="list-progress__item">
						<div class="list-progress__item-wrp">
							<div class="list-progress__item-icon img-wrp">
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/line-progress/s10/list-progress__item-icon1.svg" alt="svg">
								<div class="blur"></div>
							</div>
						</div>
						<div class="list-progress__text def-text">
							Составьте план выкупов и <br>
							напишите тексты отзывов
						</div>
					</div>
					<div class="list-progress__item-decoration">
						<div class="list-progress__item-decoration-line"></div>
						<div class="list-progress__item-decoration-object"></div>
					</div>

					<div class="list-progress__item">
						<div class="list-progress__item-wrp">
							<div class="list-progress__item-icon img-wrp">
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/line-progress/s10/list-progress__item-icon2.svg" alt="svg">
								<div class="blur"></div>
							</div>
						</div>
						<div class="list-progress__text def-text">
							Коды придут автоматически <br>
							- заберите товары
						</div>
					</div>
					<div class="list-progress__item-decoration">
						<div class="list-progress__item-decoration-line"></div>
						<div class="list-progress__item-decoration-object"></div>
					</div>

					<div class="list-progress__item">
						<div class="list-progress__item-wrp">
							<div class="list-progress__item-icon img-wrp">
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/line-progress/s10/list-progress__item-icon3.svg" alt="svg">
								<div class="blur"></div>
							</div>
						</div>
						<div class="list-progress__text def-text">
							Бот оставит отзывы по плану <br>
							и перекроет негатив
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
						Максимальная <br>
						безопасность
					</div>
					<div class="slider-section__title-desk title-wrp__desk def-text">
						Безопасный алгоритм работы! <br>
						Наши клиенты не получают штрафы.
					</div>
				</div>

				<div class="swiper slider-section__swiper slider-section__swiper2">
					<div class="swiper-wrapper">
						<div class="swiper-slide slider-section__slider">
							<div class="slider-section__slide-icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__slide-icon.svg" alt="svg" loading="lazy">
							</div>
							<div class="slider-section__slider-title str-text">
								Функция нагуливания поведеньческих факторов
							</div>
							<div class="slider-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
						<div class="swiper-slide slider-section__slider">
							<div class="slider-section__slide-icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__slide-icon2.svg" alt="svg" loading="lazy">
							</div>
							<div class="slider-section__slider-title str-text">
								Авто-выкупы
							</div>
							<div class="slider-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
						<div class="swiper-slide slider-section__slider">
							<div class="slider-section__slide-icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__slide-icon.svg" alt="svg" loading="lazy">
							</div>
							<div class="slider-section__slider-title str-text">
								Функция нагуливания поведеньческих факторов
							</div>
							<div class="slider-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
						<div class="swiper-slide slider-section__slider">
							<div class="slider-section__slide-icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__slide-icon2.svg" alt="svg" loading="lazy">
							</div>
							<div class="slider-section__slider-title str-text">
								Функция нагуливания поведеньческих факторов
							</div>
							<div class="slider-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
						<div class="swiper-slide slider-section__slider">
							<div class="slider-section__slide-icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__slide-icon.svg" alt="svg" loading="lazy">
							</div>
							<div class="slider-section__slider-title str-text">
								Авто-выкупы
							</div>
							<div class="slider-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
						<div class="swiper-slide slider-section__slider">
							<div class="slider-section__slide-icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__slide-icon2.svg" alt="svg" loading="lazy">
							</div>
							<div class="slider-section__slider-title str-text">
								Функция нагуливания поведеньческих факторов
							</div>
							<div class="slider-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
						<div class="swiper-slide slider-section__slider">
							<div class="slider-section__slide-icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/slider-section__slide-icon.svg" alt="svg" loading="lazy">
							</div>
							<div class="slider-section__slider-title str-text">
								Авто-выкупы
							</div>
							<div class="slider-section__slider-text def-text">
								Анонимность, максимальная имитация человека, гибкие способы оплаты, автооплата по сбп и картам, быстрое продвижение в поисковой выдаче.
							</div>
						</div>
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
						Что говорят о нас <br>
						наши клиенты
					</div>
				</div>

				<ul class="s12__list">
					<li class="s12__item">
						<div class="s12__item-title img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s12__item-title.svg" alt="svg" loading="lazy">
						</div>
						<div class="s12__item-text def-text">
							Мы сами торгуем на Вайлдберриз.
							Постоянно тестируем различные подходы.
							Тесно общаемся с клиентами и вместе находим более эффективные решения,
							которые действительно работают именно в данный момент.
						</div>
						<div class="user-box">
							<div class="user-box__img img-wrp">
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/user.png" alt="img">
							</div>
							<div class="user-box__title small-text">Олег Петров</div>
							<div class="user-box__text small-text">Владелец магазина</div>
						</div>
					</li>
					<li class="s12__item">
						<div class="s12__item-title img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/s12__item-title2.svg" alt="svg" loading="lazy">
						</div>
						<div class="s12__item-text def-text">
							Мы сами торгуем на Вайлдберриз.
							Постоянно тестируем различные подходы.
							Тесно общаемся с клиентами и вместе находим более эффективные решения,
							которые действительно работают именно в данный момент.
						</div>
						<div class="user-box">
							<div class="user-box__img img-wrp">
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/user.png" alt="img">
							</div>
							<div class="user-box__title small-text">Олег Петров</div>
							<div class="user-box__text small-text">Владелец магазина</div>
						</div>
					</li>
				</ul>

				<a href="#" class="s12__btn main-btn">
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
					<div class="accordion__item">
						<div class="accordion__header">
							<div class="accordion-left-decor img-wrp">
								<svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
									<line x1="1.17678" y1="0.823223" x2="25.1768" y2="24.8232" stroke="#323F5F" stroke-width="0.5"/>
									<line x1="0.823223" y1="24.8232" x2="24.8232" y2="0.823222" stroke="#323F5F" stroke-width="0.5"/>
								</svg>
							</div>
							<div class="accordion__title str-text">Если нет компьютера</div>
							<div class="accordion__icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/accordion__icon.svg" alt="svg" loading="lazy">
							</div>
						</div>
						<div class="accordion__content def-text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl tincidunt eget nullam non. Quis hendrerit dolor magna eget est lorem ipsum dolor sit. Volutpat odio facilisis mauris sit amet massa. Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Mi eget mauris pharetra et. Non tellus orci ac auctor augue. Elit at imperdiet dui accumsan sit. Ornare arcu dui vivamus arcu felis. Egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst quisque sagittis purus. Pulvinar elementum integer enim neque volutpat ac.
						</div>
						<div class="accordion-line-decor img-wrp">
							<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/accordion-line-decor.svg" alt="svg" loading="lazy">
							<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/accordion-line-decor-mob.svg" alt="svg" loading="lazy">
						</div>
					</div>
					<div class="accordion__item">
						<div class="accordion__header">
							<div class="accordion-left-decor img-wrp">
								<svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
									<line x1="1.17678" y1="0.823223" x2="25.1768" y2="24.8232" stroke="#323F5F" stroke-width="0.5"/>
									<line x1="0.823223" y1="24.8232" x2="24.8232" y2="0.823222" stroke="#323F5F" stroke-width="0.5"/>
								</svg>
							</div>
							<div class="accordion__title str-text">Сколько можно сделать выкупов и отзывов</div>
							<div class="accordion__icon img-wrp">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/accordion__icon2.svg" alt="svg" loading="lazy">
							</div>
						</div>
						<div class="accordion__content def-text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl tincidunt eget nullam non. Quis hendrerit dolor magna eget est lorem ipsum dolor sit. Volutpat odio facilisis mauris sit amet massa. Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Mi eget mauris pharetra et. Non tellus orci ac auctor augue. Elit at imperdiet dui accumsan sit. Ornare arcu dui vivamus arcu felis. Egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst quisque sagittis purus. Pulvinar elementum integer enim neque volutpat ac.
						</div>
						<div class="accordion-line-decor img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/accordion-line-decor2.svg" alt="svg" loading="lazy">
							<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/accordion-line-decor-mob.svg" alt="svg" loading="lazy">
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php  get_footer($name); ?>
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
</body>
</html>