<?php
/*
Template Name: Question-answer
*/
?>

<?php  get_header($name); ?>

	<div class="scroll-container other-page page-question-answer">
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
			<section class="question-answer-s1 qas1">
				<div class="qas1__container container">
					<div class="qas1__title title-wrp">
						<div class="qas1__pre-title title-wrp__pre-title pre-title">
							<div class="pre-title-lp img-wrp">
								<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie//web/left.json" background="transparent" speed="1"></lottie-player>
							</div>
							<span class="qas1__pre-title-text title-wrp__pre-title-text small-text">FAQ</span>
							<div class="pre-title-lp img-wrp">
								<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie//web/right.json" background="transparent" speed="1"></lottie-player>
							</div>
						</div>
						<div class="qas1__title-text title-wrp__text big-title">
							<?php echo get_post_meta(get_the_ID(), 'faq_title', true);?>
						</div>
						<div class="qas1__title-desk title-wrp__desk def-text">
							<?php echo get_post_meta(get_the_ID(), 'faq_desk', true);?>
						</div>
					</div>

					<div class="scroll-section__list-wrp">
						<ul class="scroll-section__list">
							<li class="scroll-section__item">
								<div class="scroll-section__icon img-wrp">
									<lottie-player class="question-lottie1" src="<?php bloginfo('template_url'); ?>/assets/lottie//question/1.json" background="transparent" speed="1" autoplay loop></lottie-player>
									<svg width="97" height="80" viewBox="0 0 97 80" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="0.25" y="0.25" width="96.5" height="79.5" rx="7.75" stroke="#323F5F" stroke-width="0.5"/>
										<rect x="6.5" y="6.5" width="83" height="67" rx="6.5" stroke="url(#paint0_linear_2709_24299)"/>
										<rect x="7" y="7" width="82" height="66" rx="6" fill="#1F2338"/>
										<rect x="19.25" y="22.25" width="57.5" height="35.5" rx="17.75" fill="url(#paint1_linear_2709_24299)" stroke="url(#paint2_linear_2709_24299)" stroke-width="0.5"/>
										<rect x="34.25" y="13.25" width="27.5" height="2.5" rx="1.25" fill="url(#paint3_linear_2709_24299)" stroke="url(#paint4_linear_2709_24299)" stroke-width="0.5"/>
										<circle cx="76.5" cy="14.5" r="1.75" fill="url(#paint5_linear_2709_24299)" stroke="url(#paint6_linear_2709_24299)" stroke-width="0.5"/>
										<circle cx="19.5" cy="14.5" r="1.75" fill="url(#paint7_linear_2709_24299)" stroke="url(#paint8_linear_2709_24299)" stroke-width="0.5"/>
										<!-- <g clip-path="url(#clip0_2709_24299)">
										<path d="M51.3991 52L47.6821 31.6552L43.103 40.7111H32.5494C32.246 40.7111 32 40.4651 32 40.1617C32 39.8583 32.246 39.6123 32.5494 39.6123H42.3486L48.2186 28L51.6506 46.7875L54.3664 37.2221H64.4506C64.754 37.2221 65 37.468 65 37.7715C65 38.0749 64.754 38.3208 64.4506 38.3208H55.2837L51.3991 52Z" fill="url(#paint9_linear_2709_24299)"/>
										</g> -->
										<rect x="34.25" y="64.25" width="27.5" height="2.5" rx="1.25" fill="url(#paint10_linear_2709_24299)" stroke="url(#paint11_linear_2709_24299)" stroke-width="0.5"/>
										<circle cx="76.5" cy="65.5" r="1.75" fill="url(#paint12_linear_2709_24299)" stroke="url(#paint13_linear_2709_24299)" stroke-width="0.5"/>
										<circle cx="19.5" cy="65.5" r="1.75" fill="url(#paint14_linear_2709_24299)" stroke="url(#paint15_linear_2709_24299)" stroke-width="0.5"/>
										<defs>
										<linearGradient id="paint0_linear_2709_24299" x1="48" y1="31.0952" x2="48" y2="55.7857" gradientUnits="userSpaceOnUse">
										<stop stop-color="#9CBCED"/>
										<stop offset="0.51" stop-color="#9CC3F2"/>
										<stop offset="1" stop-color="#82B4F0"/>
										</linearGradient>
										<linearGradient id="paint1_linear_2709_24299" x1="48" y1="-16.7692" x2="48" y2="96.7692" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#181B29"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint2_linear_2709_24299" x1="48" y1="22" x2="48" y2="58" gradientUnits="userSpaceOnUse">
										<stop stop-color="#202639"/>
										<stop offset="1" stop-color="#242D46"/>
										</linearGradient>
										<linearGradient id="paint3_linear_2709_24299" x1="48" y1="9.76923" x2="48" y2="19.2308" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#181B29"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint4_linear_2709_24299" x1="48" y1="13" x2="48" y2="15.5" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1D202F" stop-opacity="0"/>
										<stop offset="1" stop-color="#242C45"/>
										</linearGradient>
										<linearGradient id="paint5_linear_2709_24299" x1="76.5" y1="9.76923" x2="76.5" y2="19.2308" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#181B29"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint6_linear_2709_24299" x1="76.5" y1="13" x2="76.5" y2="15.5" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1D202F" stop-opacity="0"/>
										<stop offset="1" stop-color="#242C45"/>
										</linearGradient>
										<linearGradient id="paint7_linear_2709_24299" x1="19.5" y1="9.76923" x2="19.5" y2="19.2308" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#181B29"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint8_linear_2709_24299" x1="19.5" y1="13" x2="19.5" y2="15.5" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1D202F" stop-opacity="0"/>
										<stop offset="1" stop-color="#242C45"/>
										</linearGradient>
										<linearGradient id="paint9_linear_2709_24299" x1="48.5" y1="36.8571" x2="48.5" y2="45.5714" gradientUnits="userSpaceOnUse">
										<stop stop-color="#FEF0F0"/>
										<stop offset="0.51" stop-color="#C8DCF5"/>
										<stop offset="1" stop-color="#CBD5E2"/>
										</linearGradient>
										<linearGradient id="paint10_linear_2709_24299" x1="48" y1="60.7692" x2="48" y2="70.2308" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#181B29"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint11_linear_2709_24299" x1="48" y1="64" x2="48" y2="66.5" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1D202F" stop-opacity="0"/>
										<stop offset="1" stop-color="#242C45"/>
										</linearGradient>
										<linearGradient id="paint12_linear_2709_24299" x1="76.5" y1="60.7692" x2="76.5" y2="70.2308" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#181B29"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint13_linear_2709_24299" x1="76.5" y1="64" x2="76.5" y2="66.5" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1D202F" stop-opacity="0"/>
										<stop offset="1" stop-color="#242C45"/>
										</linearGradient>
										<linearGradient id="paint14_linear_2709_24299" x1="19.5" y1="60.7692" x2="19.5" y2="70.2308" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#181B29"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint15_linear_2709_24299" x1="19.5" y1="64" x2="19.5" y2="66.5" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1D202F" stop-opacity="0"/>
										<stop offset="1" stop-color="#242C45"/>
										</linearGradient>
										<clipPath id="clip0_2709_24299">
										<rect width="33" height="24" fill="white" transform="translate(32 28)"/>
										</clipPath>
										</defs>
									</svg>										
								</div>
								<div class="scroll-section__text ul-small-text main-btn">
									<div class="main-btn__text ul-small-text textMt10 text-web">Анализ бизнеса</div>
									<div class="main-btn__text ul-small-text textMt10 text-mob">Анализ</div>
									<div class="main-btn__effect"></div>
								</div>
							</li>
							<li class="scroll-section__item">
								<div class="scroll-section__icon img-wrp dashboard-work-active">
									<lottie-player class="s5__lottie-icon2" src="<?php bloginfo('template_url'); ?>/assets/lottie//s5/2.json" background="transparent" speed="1" autoplay loop></lottie-player>
									<img src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/s5/scroll-section__icon2.svg" alt="svg">
									<div class="dashboard-work-lights dashboard-work-lights--smooth">
										<div></div>
										<div></div>
									</div>
								</div>
								<div class="scroll-section__text ul-small-text main-btn">
									<div class="main-btn__text ul-small-text textMt10">Алгоритм BBZ</div>
									<div class="main-btn__effect"></div>
								</div>
							</li>
							<li class="scroll-section__item">
								<div class="scroll-section__icon img-wrp">
									<svg width="97" height="80" viewBox="0 0 97 80" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="0.25" y="0.25" width="96.5" height="79.5" rx="7.75" stroke="#212941" stroke-width="0.5" />
										<rect x="6.5" y="6.5" width="83" height="67" rx="6.5" stroke="url(#paint0_linear_2709_24539)" />
										<rect x="7" y="7" width="82" height="66" rx="6" fill="#1F2338" />
										<g class="shake-animation">
											<circle cx="48" cy="40" r="14.75" fill="#2F3558" stroke="url(#paint1_linear_2709_24539)" stroke-width="0.5" />
											<path d="M42.8041 47.7404C42.7529 47.9851 42.7531 47.9852 42.7534 47.9852L42.7539 47.9854L42.7551 47.9856L42.7576 47.9861L42.7635 47.9872L42.7795 47.9897C42.7919 47.9915 42.8079 47.9933 42.8276 47.9949C42.8671 47.998 42.9216 47.9998 42.9924 47.997C43.1339 47.9914 43.3407 47.9673 43.6242 47.8978C44.1776 47.7623 45.0272 47.4531 46.2602 46.7658C46.8205 46.9017 47.4064 46.9737 48.0091 46.9737C52.0018 46.9737 55.2486 43.8109 55.2486 39.897C55.2486 35.9831 52.0018 32.8203 48.0091 32.8203C44.0164 32.8203 40.7695 35.9831 40.7695 39.897C40.7695 41.9125 41.6318 43.7305 43.0128 45.0183C43.0291 45.0335 43.0558 45.0718 43.0754 45.1578C43.0947 45.2422 43.1026 45.3533 43.0977 45.4887C43.0879 45.7595 43.0284 46.0884 42.9494 46.4143C42.871 46.7379 42.7761 47.0479 42.7004 47.2778C42.6626 47.3925 42.6299 47.4867 42.6066 47.552C42.595 47.5846 42.5858 47.61 42.5795 47.6271L42.5724 47.6463L42.5706 47.651L42.5702 47.652L42.5702 47.6522L42.5702 47.6523L42.5702 47.6523L42.4672 47.9253L42.7529 47.9851L42.8041 47.7404Z" fill="url(#paint2_radial_2709_24539)" stroke="url(#paint3_linear_2709_24539)" stroke-width="0.5" />
											<circle cx="44.5162" cy="39.8248" r="1.16461" fill="#8B9FCE" />
											<circle cx="48.0123" cy="39.8248" r="1.16461" fill="#8B9FCE" />
											<circle cx="51.5045" cy="39.8248" r="1.16461" fill="#8B9FCE" />
										</g>
										<mask id="mask0_2709_24539" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="40" y="32" width="16" height="17">
											<path d="M42.8041 47.7404C42.7529 47.9851 42.7531 47.9852 42.7534 47.9852L42.7539 47.9854L42.7551 47.9856L42.7576 47.9861L42.7635 47.9872L42.7795 47.9897C42.7919 47.9915 42.8079 47.9933 42.8276 47.9949C42.8671 47.998 42.9216 47.9998 42.9924 47.997C43.1339 47.9914 43.3407 47.9673 43.6242 47.8978C44.1776 47.7623 45.0272 47.4531 46.2602 46.7658C46.8205 46.9017 47.4064 46.9737 48.0091 46.9737C52.0018 46.9737 55.2486 43.8109 55.2486 39.897C55.2486 35.9831 52.0018 32.8203 48.0091 32.8203C44.0164 32.8203 40.7695 35.9831 40.7695 39.897C40.7695 41.9125 41.6318 43.7305 43.0128 45.0183C43.0291 45.0335 43.0558 45.0718 43.0754 45.1578C43.0947 45.2422 43.1026 45.3533 43.0977 45.4887C43.0879 45.7595 43.0284 46.0884 42.9494 46.4143C42.871 46.7379 42.7761 47.0479 42.7004 47.2778C42.6626 47.3925 42.6299 47.4867 42.6066 47.552C42.595 47.5846 42.5858 47.61 42.5795 47.6271L42.5724 47.6463L42.5706 47.651L42.5702 47.652L42.5702 47.6522L42.5702 47.6523L42.5702 47.6523L42.4672 47.9253L42.7529 47.9851L42.8041 47.7404Z" fill="white" stroke="url(#paint4_linear_2709_24539)" stroke-width="0.5" />
										</mask>
										<g mask="url(#mask0_2709_24539)">
											<g filter="url(#filter0_f_2709_24539)">
												<ellipse cx="43.0587" cy="31.0913" rx="8.44546" ry="7.57179" fill="white" />
												<path d="M43.0587 38.9131C47.8347 38.9131 51.7542 35.4362 51.7542 31.0913C51.7542 26.7465 47.8347 23.2695 43.0587 23.2695C38.2827 23.2695 34.3633 26.7465 34.3633 31.0913C34.3633 35.4362 38.2827 38.9131 43.0587 38.9131Z" stroke="url(#paint5_linear_2709_24539)" stroke-width="0.5" />
											</g>
										</g>
										<!-- <circle cx="44.5162" cy="39.8248" r="1.16461" fill="#8B9FCE" />
										<circle cx="48.0123" cy="39.8248" r="1.16461" fill="#8B9FCE" />
										<circle cx="51.5045" cy="39.8248" r="1.16461" fill="#8B9FCE" /> -->
										<rect x="34.25" y="13.25" width="27.5" height="2.5" rx="1.25" fill="url(#paint6_linear_2709_24539)" stroke="url(#paint7_linear_2709_24539)" stroke-width="0.5" />
										<circle cx="76.5" cy="14.5" r="1.75" fill="url(#paint8_linear_2709_24539)" stroke="url(#paint9_linear_2709_24539)" stroke-width="0.5" />
										<circle cx="19.5" cy="14.5" r="1.75" fill="url(#paint10_linear_2709_24539)" stroke="url(#paint11_linear_2709_24539)" stroke-width="0.5" />
										<rect x="34.25" y="64.25" width="27.5" height="2.5" rx="1.25" fill="url(#paint12_linear_2709_24539)" stroke="url(#paint13_linear_2709_24539)" stroke-width="0.5" />
										<circle cx="76.5" cy="65.5" r="1.75" fill="url(#paint14_linear_2709_24539)" stroke="url(#paint15_linear_2709_24539)" stroke-width="0.5" />
										<circle cx="19.5" cy="65.5" r="1.75" fill="url(#paint16_linear_2709_24539)" stroke="url(#paint17_linear_2709_24539)" stroke-width="0.5" />
										<defs>
											<filter id="filter0_f_2709_24539" x="7.11328" y="-3.98047" width="71.8906" height="70.1445" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
												<feFlood flood-opacity="0" result="BackgroundImageFix" />
												<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
												<feGaussianBlur stdDeviation="13.5" result="effect1_foregroundBlur_2709_24539" />
											</filter>
											<linearGradient id="paint0_linear_2709_24539" x1="48" y1="31.0952" x2="48" y2="55.7857" gradientUnits="userSpaceOnUse">
												<stop stop-color="#9CBCED" />
												<stop offset="0.51" stop-color="#9CC3F2" />
												<stop offset="1" stop-color="#82B4F0" />
											</linearGradient>
											<linearGradient id="paint1_linear_2709_24539" x1="48" y1="25" x2="48" y2="55" gradientUnits="userSpaceOnUse">
												<stop stop-color="#212941" />
												<stop offset="1" stop-color="#3B435C" />
											</linearGradient>
											<radialGradient id="paint2_radial_2709_24539" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(48.0091 39.0063) rotate(-103.672) scale(46.0959 71.7343)">
												<stop stop-color="white" />
												<stop offset="0.51" stop-color="#318BF8" />
												<stop offset="1" stop-color="white" />
												<stop offset="1" stop-color="#318EFE" />
											</radialGradient>
											<linearGradient id="paint3_linear_2709_24539" x1="48.6258" y1="33.0703" x2="48.8525" y2="47.9639" gradientUnits="userSpaceOnUse">
												<stop stop-color="#EEEEEE" />
												<stop offset="0.470342" stop-color="#81B6F6" />
												<stop offset="1" stop-color="#CBD5E2" />
											</linearGradient>
											<linearGradient id="paint4_linear_2709_24539" x1="48.6258" y1="33.0703" x2="48.8525" y2="47.9639" gradientUnits="userSpaceOnUse">
												<stop stop-color="#EEEEEE" />
												<stop offset="0.470342" stop-color="#81B6F6" />
												<stop offset="1" stop-color="#CBD5E2" />
											</linearGradient>
											<linearGradient id="paint5_linear_2709_24539" x1="43.8039" y1="23.5195" x2="44.0036" y2="38.8864" gradientUnits="userSpaceOnUse">
												<stop stop-color="#EEEEEE" />
												<stop offset="0.470342" stop-color="#81B6F6" />
												<stop offset="1" stop-color="#CBD5E2" />
											</linearGradient>
											<linearGradient id="paint6_linear_2709_24539" x1="48" y1="9.76923" x2="48" y2="19.2308" gradientUnits="userSpaceOnUse">
												<stop stop-color="#191D2E" />
												<stop offset="0.494234" stop-color="#181B29" />
												<stop offset="1" stop-color="#191D2E" />
											</linearGradient>
											<linearGradient id="paint7_linear_2709_24539" x1="48" y1="13" x2="48" y2="15.5" gradientUnits="userSpaceOnUse">
												<stop stop-color="#1D202F" stop-opacity="0" />
												<stop offset="1" stop-color="#242C45" />
											</linearGradient>
											<linearGradient id="paint8_linear_2709_24539" x1="76.5" y1="9.76923" x2="76.5" y2="19.2308" gradientUnits="userSpaceOnUse">
												<stop stop-color="#191D2E" />
												<stop offset="0.494234" stop-color="#181B29" />
												<stop offset="1" stop-color="#191D2E" />
											</linearGradient>
											<linearGradient id="paint9_linear_2709_24539" x1="76.5" y1="13" x2="76.5" y2="15.5" gradientUnits="userSpaceOnUse">
												<stop stop-color="#1D202F" stop-opacity="0" />
												<stop offset="1" stop-color="#242C45" />
											</linearGradient>
											<linearGradient id="paint10_linear_2709_24539" x1="19.5" y1="9.76923" x2="19.5" y2="19.2308" gradientUnits="userSpaceOnUse">
												<stop stop-color="#191D2E" />
												<stop offset="0.494234" stop-color="#181B29" />
												<stop offset="1" stop-color="#191D2E" />
											</linearGradient>
											<linearGradient id="paint11_linear_2709_24539" x1="19.5" y1="13" x2="19.5" y2="15.5" gradientUnits="userSpaceOnUse">
												<stop stop-color="#1D202F" stop-opacity="0" />
												<stop offset="1" stop-color="#242C45" />
											</linearGradient>
											<linearGradient id="paint12_linear_2709_24539" x1="48" y1="60.7692" x2="48" y2="70.2308" gradientUnits="userSpaceOnUse">
												<stop stop-color="#191D2E" />
												<stop offset="0.494234" stop-color="#181B29" />
												<stop offset="1" stop-color="#191D2E" />
											</linearGradient>
											<linearGradient id="paint13_linear_2709_24539" x1="48" y1="64" x2="48" y2="66.5" gradientUnits="userSpaceOnUse">
												<stop stop-color="#1D202F" stop-opacity="0" />
												<stop offset="1" stop-color="#242C45" />
											</linearGradient>
											<linearGradient id="paint14_linear_2709_24539" x1="76.5" y1="60.7692" x2="76.5" y2="70.2308" gradientUnits="userSpaceOnUse">
												<stop stop-color="#191D2E" />
												<stop offset="0.494234" stop-color="#181B29" />
												<stop offset="1" stop-color="#191D2E" />
											</linearGradient>
											<linearGradient id="paint15_linear_2709_24539" x1="76.5" y1="64" x2="76.5" y2="66.5" gradientUnits="userSpaceOnUse">
												<stop stop-color="#1D202F" stop-opacity="0" />
												<stop offset="1" stop-color="#242C45" />
											</linearGradient>
											<linearGradient id="paint16_linear_2709_24539" x1="19.5" y1="60.7692" x2="19.5" y2="70.2308" gradientUnits="userSpaceOnUse">
												<stop stop-color="#191D2E" />
												<stop offset="0.494234" stop-color="#181B29" />
												<stop offset="1" stop-color="#191D2E" />
											</linearGradient>
											<linearGradient id="paint17_linear_2709_24539" x1="19.5" y1="64" x2="19.5" y2="66.5" gradientUnits="userSpaceOnUse">
												<stop stop-color="#1D202F" stop-opacity="0" />
												<stop offset="1" stop-color="#242C45" />
											</linearGradient>
										</defs>
									</svg>
								</div>
								<div class="scroll-section__text ul-small-text main-btn">
									<div class="main-btn__text ul-small-text textMt05">Помощь</div>
									<div class="main-btn__effect"></div>
								</div>
							</li>
							<li class="scroll-section__item">
								<div class="scroll-section__icon img-wrp">
									<svg width="136" height="114" viewBox="0 0 136 114" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="8" y="8" width="120" height="98" rx="5" fill="#1D2135"/>
										<circle cx="68" cy="39" r="14.75" fill="#2F3558" stroke="url(#paint0_linear_2709_24314)" stroke-width="0.5"/>
										<g filter="url(#filter0_f_2709_24314)">
										<path d="M59 37.2419L67.3976 32L76 37.2419L75.7952 45H59V37.2419Z" fill="url(#paint1_linear_2709_24314)"/>
										</g>
										<g filter="url(#filter1_f_2709_24314)">
										<path d="M68 35L74 41H72.8309L68 38.8182L63.1699 41H62L68 35Z" fill="#070917"/>
										</g>
										<g opacity="0.3" filter="url(#filter2_f_2709_24314)">
										<path d="M68 38L76 45H72.3H67.8H63.7H60L68 38Z" fill="url(#paint2_linear_2709_24314)"/>
										</g>
										<path d="M67.8232 36.5303C67.9209 36.4327 68.0791 36.4327 68.1768 36.5303L75.9697 44.3232C76.1272 44.4807 76.0156 44.75 75.7929 44.75H72.7189C72.6491 44.75 72.5825 44.7208 72.5352 44.6696L68.5511 40.3534C68.2541 40.0317 67.7459 40.0317 67.4489 40.3534L63.4648 44.6696C63.4175 44.7208 63.3509 44.75 63.2811 44.75H60.2071C59.9844 44.75 59.8728 44.4807 60.0303 44.3232L67.8232 36.5303Z" fill="url(#paint3_linear_2709_24314)" stroke="url(#paint4_linear_2709_24314)" stroke-width="0.5"/>
										<path d="M67.8232 29.5303C67.9209 29.4327 68.0791 29.4327 68.1768 29.5303L75.9697 37.3232C76.1272 37.4807 76.0156 37.75 75.7929 37.75H72.7189C72.6491 37.75 72.5825 37.7208 72.5352 37.6696L68.5511 33.3534C68.2541 33.0317 67.7459 33.0317 67.4489 33.3534L63.4648 37.6696C63.4175 37.7208 63.3509 37.75 63.2811 37.75H60.2071C59.9844 37.75 59.8728 37.4807 60.0303 37.3232L67.8232 29.5303Z" fill="url(#paint5_linear_2709_24314)" stroke="url(#paint6_linear_2709_24314)" stroke-width="0.5"/>
										<rect x="16.25" y="78.25" width="103.5" height="15.5" rx="1.75" fill="url(#paint7_linear_2709_24314)" stroke="url(#paint8_linear_2709_24314)" stroke-width="0.5"/>
										<path d="M28 83L22.5 88.5L20 86" stroke="#BAD0EC" stroke-linecap="round" stroke-linejoin="round"/>
										<rect x="16.25" y="58.25" width="103.5" height="15.5" rx="1.75" fill="url(#paint9_linear_2709_24314)" stroke="url(#paint10_linear_2709_24314)" stroke-width="0.5"/>
										<path d="M28 63L22.5 68.5L20 66" stroke="#BAD0EC" stroke-linecap="round" stroke-linejoin="round"/>
										<rect x="6.5" y="6.5" width="123" height="101" rx="6.5" stroke="url(#paint11_linear_2709_24314)"/>
										<path d="M0.25 8C0.25 3.71979 3.71979 0.25 8 0.25H128C132.28 0.25 135.75 3.71979 135.75 8V106C135.75 110.28 132.28 113.75 128 113.75H8C3.71979 113.75 0.25 110.28 0.25 106V8Z" stroke="#323F5F" stroke-width="0.5"/>
										<defs>
										<filter id="filter0_f_2709_24314" x="57" y="30" width="21" height="17" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
										<feFlood flood-opacity="0" result="BackgroundImageFix"/>
										<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
										<feGaussianBlur stdDeviation="1" result="effect1_foregroundBlur_2709_24314"/>
										</filter>
										<filter id="filter1_f_2709_24314" x="57" y="30" width="22" height="16" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
										<feFlood flood-opacity="0" result="BackgroundImageFix"/>
										<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
										<feGaussianBlur stdDeviation="2.5" result="effect1_foregroundBlur_2709_24314"/>
										</filter>
										<filter id="filter2_f_2709_24314" x="58" y="36" width="20" height="11" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
										<feFlood flood-opacity="0" result="BackgroundImageFix"/>
										<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
										<feGaussianBlur stdDeviation="1" result="effect1_foregroundBlur_2709_24314"/>
										</filter>
										<linearGradient id="paint0_linear_2709_24314" x1="68" y1="24" x2="68" y2="54" gradientUnits="userSpaceOnUse">
										<stop stop-color="#212941"/>
										<stop offset="1" stop-color="#3B435C"/>
										</linearGradient>
										<linearGradient id="paint1_linear_2709_24314" x1="67.3976" y1="36.7976" x2="67.3976" y2="41.5179" gradientUnits="userSpaceOnUse">
										<stop stop-color="#A8C8EF"/>
										<stop offset="1" stop-color="#C8DCF5" stop-opacity="0"/>
										</linearGradient>
										<linearGradient id="paint2_linear_2709_24314" x1="67.8" y1="40.5202" x2="67.8" y2="45.2955" gradientUnits="userSpaceOnUse">
										<stop stop-color="#A8C8EF"/>
										<stop offset="1" stop-color="#C8DCF5" stop-opacity="0"/>
										</linearGradient>
										<linearGradient id="paint3_linear_2709_24314" x1="68" y1="39.3214" x2="68" y2="42.5893" gradientUnits="userSpaceOnUse">
										<stop stop-color="#FEF0F0"/>
										<stop offset="0.51" stop-color="#C8DCF5"/>
										<stop offset="1" stop-color="#CBD5E2"/>
										</linearGradient>
										<linearGradient id="paint4_linear_2709_24314" x1="68" y1="39.3214" x2="68" y2="42.5893" gradientUnits="userSpaceOnUse">
										<stop stop-color="#ACC8E2"/>
										<stop offset="0.51" stop-color="#C8DCF5"/>
										<stop offset="1" stop-color="white"/>
										</linearGradient>
										<linearGradient id="paint5_linear_2709_24314" x1="68" y1="32.3214" x2="68" y2="35.5893" gradientUnits="userSpaceOnUse">
										<stop stop-color="#FEF0F0"/>
										<stop offset="0.51" stop-color="#C8DCF5"/>
										<stop offset="1" stop-color="#CBD5E2"/>
										</linearGradient>
										<linearGradient id="paint6_linear_2709_24314" x1="68" y1="32.3214" x2="68" y2="35.5893" gradientUnits="userSpaceOnUse">
										<stop stop-color="#ACC8E2"/>
										<stop offset="0.51" stop-color="#C8DCF5"/>
										<stop offset="1" stop-color="white"/>
										</linearGradient>
										<linearGradient id="paint7_linear_2709_24314" x1="68" y1="60.7692" x2="68" y2="111.231" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#191B2A"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint8_linear_2709_24314" x1="68" y1="78" x2="68" y2="94" gradientUnits="userSpaceOnUse">
										<stop stop-color="#202639"/>
										<stop offset="1" stop-color="#242D46"/>
										</linearGradient>
										<linearGradient id="paint9_linear_2709_24314" x1="68" y1="40.7692" x2="68" y2="91.2308" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#191B2A"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint10_linear_2709_24314" x1="68" y1="58" x2="68" y2="74" gradientUnits="userSpaceOnUse">
										<stop stop-color="#202639"/>
										<stop offset="1" stop-color="#242D46"/>
										</linearGradient>
										<linearGradient id="paint11_linear_2709_24314" x1="68" y1="43.6429" x2="68" y2="80.6786" gradientUnits="userSpaceOnUse">
										<stop stop-color="#9CBCED"/>
										<stop offset="0.51" stop-color="#9CC3F2"/>
										<stop offset="1" stop-color="#82B4F0"/>
										</linearGradient>
										</defs>
									</svg>
								</div>
								<div class="scroll-section__text ul-small-text main-btn">
									<div class="main-btn__text ul-small-text textMt10">Личный план</div>
									<div class="main-btn__effect"></div>
								</div>
							</li>
							<li class="scroll-section__item">
								<div class="scroll-section__icon img-wrp">
									<div class="scroll-section__item-icon-text typingEffect">
										<span>P</span>
										<span>R</span>
										<span>O</span>
										<span>F</span>
										<span>I</span>
										<span>T</span>
									</div>
									<svg width="112" height="112" viewBox="0 0 112 112" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="0.25" y="0.25" width="111.5" height="111.5" rx="7.75" stroke="#323F5F" stroke-width="0.5"/>
										<mask id="path-2-inside-1_2709_24335" fill="white">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M56 10C57.6569 10 59 8.65685 59 7C59 6.64936 58.9398 6.31278 58.8293 6H102C104.209 6 106 7.79086 106 10V14C104.343 14 103 15.3431 103 17C103 18.6569 104.343 20 106 20V24C104.343 24 103 25.3431 103 27C103 28.6569 104.343 30 106 30V82C104.343 82 103 83.3431 103 85C103 86.6569 104.343 88 106 88V92C104.343 92 103 93.3431 103 95C103 96.6569 104.343 98 106 98V102C106 104.209 104.209 106 102 106H59C59 104.343 57.6569 103 56 103C54.3431 103 53 104.343 53 106H10C7.79086 106 6 104.209 6 102V98C7.65685 98 9 96.6569 9 95C9 93.3431 7.65685 92 6 92V88C7.65685 88 9 86.6569 9 85C9 83.3431 7.65685 82 6 82V30C7.65685 30 9 28.6569 9 27C9 25.3431 7.65685 24 6 24V20C7.65685 20 9 18.6569 9 17C9 15.3431 7.65685 14 6 14V10C6 7.79086 7.79086 6 10 6H53.1707C53.0602 6.31278 53 6.64936 53 7C53 8.65685 54.3431 10 56 10Z"/>
										</mask>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M56 10C57.6569 10 59 8.65685 59 7C59 6.64936 58.9398 6.31278 58.8293 6H102C104.209 6 106 7.79086 106 10V14C104.343 14 103 15.3431 103 17C103 18.6569 104.343 20 106 20V24C104.343 24 103 25.3431 103 27C103 28.6569 104.343 30 106 30V82C104.343 82 103 83.3431 103 85C103 86.6569 104.343 88 106 88V92C104.343 92 103 93.3431 103 95C103 96.6569 104.343 98 106 98V102C106 104.209 104.209 106 102 106H59C59 104.343 57.6569 103 56 103C54.3431 103 53 104.343 53 106H10C7.79086 106 6 104.209 6 102V98C7.65685 98 9 96.6569 9 95C9 93.3431 7.65685 92 6 92V88C7.65685 88 9 86.6569 9 85C9 83.3431 7.65685 82 6 82V30C7.65685 30 9 28.6569 9 27C9 25.3431 7.65685 24 6 24V20C7.65685 20 9 18.6569 9 17C9 15.3431 7.65685 14 6 14V10C6 7.79086 7.79086 6 10 6H53.1707C53.0602 6.31278 53 6.64936 53 7C53 8.65685 54.3431 10 56 10Z" fill="url(#paint0_linear_2709_24335)"/>
										<path d="M58.8293 6V5.5H58.1223L58.3579 6.16662L58.8293 6ZM106 14V14.5H106.5V14H106ZM106 20H106.5V19.5H106V20ZM106 24V24.5H106.5V24H106ZM106 30H106.5V29.5H106V30ZM106 82V82.5H106.5V82H106ZM106 88H106.5V87.5H106V88ZM106 92V92.5H106.5V92H106ZM106 98H106.5V97.5H106V98ZM59 106H58.5V106.5H59V106ZM53 106V106.5H53.5V106H53ZM6 98V97.5H5.5V98H6ZM6 92H5.5V92.5H6V92ZM6 88V87.5H5.5V88H6ZM6 82H5.5V82.5H6V82ZM6 30V29.5H5.5V30H6ZM6 24H5.5V24.5H6V24ZM6 20V19.5H5.5V20H6ZM6 14H5.5V14.5H6V14ZM53.1707 6L53.6421 6.16662L53.8777 5.5H53.1707V6ZM58.5 7C58.5 8.38071 57.3807 9.5 56 9.5V10.5C57.933 10.5 59.5 8.933 59.5 7H58.5ZM58.3579 6.16662C58.4498 6.42663 58.5 6.70691 58.5 7H59.5C59.5 6.59182 59.4299 6.19892 59.3007 5.83338L58.3579 6.16662ZM102 5.5H58.8293V6.5H102V5.5ZM106.5 10C106.5 7.51472 104.485 5.5 102 5.5V6.5C103.933 6.5 105.5 8.067 105.5 10H106.5ZM106.5 14V10H105.5V14H106.5ZM103.5 17C103.5 15.6193 104.619 14.5 106 14.5V13.5C104.067 13.5 102.5 15.067 102.5 17H103.5ZM106 19.5C104.619 19.5 103.5 18.3807 103.5 17H102.5C102.5 18.933 104.067 20.5 106 20.5V19.5ZM106.5 24V20H105.5V24H106.5ZM103.5 27C103.5 25.6193 104.619 24.5 106 24.5V23.5C104.067 23.5 102.5 25.067 102.5 27H103.5ZM106 29.5C104.619 29.5 103.5 28.3807 103.5 27H102.5C102.5 28.933 104.067 30.5 106 30.5V29.5ZM106.5 82V30H105.5V82H106.5ZM103.5 85C103.5 83.6193 104.619 82.5 106 82.5V81.5C104.067 81.5 102.5 83.067 102.5 85H103.5ZM106 87.5C104.619 87.5 103.5 86.3807 103.5 85H102.5C102.5 86.933 104.067 88.5 106 88.5V87.5ZM106.5 92V88H105.5V92H106.5ZM103.5 95C103.5 93.6193 104.619 92.5 106 92.5V91.5C104.067 91.5 102.5 93.067 102.5 95H103.5ZM106 97.5C104.619 97.5 103.5 96.3807 103.5 95H102.5C102.5 96.933 104.067 98.5 106 98.5V97.5ZM106.5 102V98H105.5V102H106.5ZM102 106.5C104.485 106.5 106.5 104.485 106.5 102H105.5C105.5 103.933 103.933 105.5 102 105.5V106.5ZM59 106.5H102V105.5H59V106.5ZM56 103.5C57.3807 103.5 58.5 104.619 58.5 106H59.5C59.5 104.067 57.933 102.5 56 102.5V103.5ZM53.5 106C53.5 104.619 54.6193 103.5 56 103.5V102.5C54.067 102.5 52.5 104.067 52.5 106H53.5ZM10 106.5H53V105.5H10V106.5ZM5.5 102C5.5 104.485 7.51472 106.5 10 106.5V105.5C8.06701 105.5 6.5 103.933 6.5 102H5.5ZM5.5 98V102H6.5V98H5.5ZM8.5 95C8.5 96.3807 7.38071 97.5 6 97.5V98.5C7.933 98.5 9.5 96.933 9.5 95H8.5ZM6 92.5C7.38071 92.5 8.5 93.6193 8.5 95H9.5C9.5 93.067 7.933 91.5 6 91.5V92.5ZM5.5 88V92H6.5V88H5.5ZM8.5 85C8.5 86.3807 7.38071 87.5 6 87.5V88.5C7.933 88.5 9.5 86.933 9.5 85H8.5ZM6 82.5C7.38071 82.5 8.5 83.6193 8.5 85H9.5C9.5 83.067 7.933 81.5 6 81.5V82.5ZM5.5 30V82H6.5V30H5.5ZM8.5 27C8.5 28.3807 7.38071 29.5 6 29.5V30.5C7.933 30.5 9.5 28.933 9.5 27H8.5ZM6 24.5C7.38071 24.5 8.5 25.6193 8.5 27H9.5C9.5 25.067 7.933 23.5 6 23.5V24.5ZM5.5 20V24H6.5V20H5.5ZM8.5 17C8.5 18.3807 7.38071 19.5 6 19.5V20.5C7.933 20.5 9.5 18.933 9.5 17H8.5ZM6 14.5C7.38071 14.5 8.5 15.6193 8.5 17H9.5C9.5 15.067 7.933 13.5 6 13.5V14.5ZM5.5 10V14H6.5V10H5.5ZM10 5.5C7.51472 5.5 5.5 7.51472 5.5 10H6.5C6.5 8.06701 8.067 6.5 10 6.5V5.5ZM53.1707 5.5H10V6.5H53.1707V5.5ZM53.5 7C53.5 6.70691 53.5502 6.42663 53.6421 6.16662L52.6993 5.83338C52.5701 6.19892 52.5 6.59182 52.5 7H53.5ZM56 9.5C54.6193 9.5 53.5 8.38071 53.5 7H52.5C52.5 8.933 54.067 10.5 56 10.5V9.5Z" fill="#323F5F" mask="url(#path-2-inside-1_2709_24335)"/>
										<rect x="18.5" y="18.5" width="75" height="75" rx="8.5" stroke="url(#paint1_linear_2709_24335)"/>
										<rect x="19" y="19" width="74" height="74" rx="8" fill="#070917"/>
										<rect x="19" y="19" width="74" height="74" rx="8" fill="#070917"/>
										<rect x="21" y="21" width="70" height="70" rx="6" fill="#1F2338"/>
										<rect x="50.75" y="74.75" width="2.5" height="2.5" fill="url(#paint2_linear_2709_24335)" stroke="url(#paint3_linear_2709_24335)" stroke-width="0.5"/>
										<rect x="55.75" y="74.75" width="2.5" height="2.5" fill="url(#paint4_linear_2709_24335)" stroke="url(#paint5_linear_2709_24335)" stroke-width="0.5"/>
										<rect x="60.75" y="74.75" width="2.5" height="2.5" fill="url(#paint6_linear_2709_24335)" stroke="url(#paint7_linear_2709_24335)" stroke-width="0.5"/>
										<path d="M32.25 55C32.25 49.0629 37.0629 44.25 43 44.25H70C75.9371 44.25 80.75 49.0629 80.75 55C80.75 60.9371 75.9371 65.75 70 65.75H43C37.0629 65.75 32.25 60.9371 32.25 55Z" fill="url(#paint8_linear_2709_24335)" stroke="url(#paint9_linear_2709_24335)" stroke-width="0.5"/>
										<path d="M43 42.5C36.0964 42.5 30.5 48.0964 30.5 55C30.5 61.9036 36.0964 67.5 43 67.5H70C76.9036 67.5 82.5 61.9036 82.5 55C82.5 48.0964 76.9036 42.5 70 42.5H43Z" stroke="url(#paint10_linear_2709_24335)" stroke-width="3"/>
										<!-- <path d="M39.9434 50.1484C39.7324 49.9883 39.709 49.8398 39.873 49.7031C39.9746 49.7383 40.0605 49.8086 40.1309 49.9141C40.2402 49.7695 40.373 49.7227 40.5293 49.7734C40.5449 49.9062 40.4902 50.0234 40.3652 50.125C40.627 50.5 40.5879 50.6094 40.248 50.4531L40.1309 50.3594C40.0723 50.4531 39.9863 50.5078 39.873 50.5234C39.7207 50.4062 39.7441 50.2812 39.9434 50.1484ZM40.8809 50.1484C40.6699 49.9883 40.6465 49.8398 40.8105 49.7031C40.9121 49.7383 40.998 49.8086 41.0684 49.9141C41.1777 49.7695 41.3105 49.7227 41.4668 49.7734C41.4824 49.9062 41.4277 50.0234 41.3027 50.125C41.5645 50.5 41.5254 50.6094 41.1855 50.4531L41.0684 50.3594C41.0098 50.4531 40.9238 50.5078 40.8105 50.5234C40.6582 50.4062 40.6816 50.2812 40.8809 50.1484ZM41.7715 50.1719C41.5996 50.043 41.5684 49.9023 41.6777 49.75C41.7988 49.7695 41.9004 49.832 41.9824 49.9375C42.0723 49.8086 42.1895 49.7617 42.334 49.7969C42.3926 49.8867 42.377 49.9727 42.2871 50.0547L42.2168 50.1953C42.4395 50.3789 42.4238 50.5039 42.1699 50.5703C42.123 50.5039 42.0527 50.4492 41.959 50.4062C41.873 50.5508 41.7559 50.582 41.6074 50.5C41.6113 50.3867 41.666 50.2773 41.7715 50.1719ZM43.6465 50.2188C43.4863 50.1016 43.4473 49.9609 43.5293 49.7969C43.6582 49.8164 43.7754 49.8789 43.8809 49.9844C43.9512 49.8633 44.0605 49.8086 44.209 49.8203C44.2598 49.9648 44.2129 50.0898 44.0684 50.1953C44.2207 50.3047 44.2598 50.4375 44.1855 50.5938C44.0605 50.5938 43.9434 50.5469 43.834 50.4531C43.7754 50.543 43.6816 50.5977 43.5527 50.6172C43.4512 50.4727 43.4824 50.3398 43.6465 50.2188ZM42.6855 50.1953C42.5215 50.0977 42.4902 49.9727 42.5918 49.8203C42.7129 49.8281 42.8145 49.8906 42.8965 50.0078C43.0059 49.8633 43.1387 49.8164 43.2949 49.8672C43.3066 50 43.252 50.1172 43.1309 50.2188C43.1699 50.2852 43.2246 50.3477 43.2949 50.4062C43.2832 50.6211 43.1895 50.668 43.0137 50.5469L42.8965 50.4531C42.7168 50.6914 42.5918 50.6836 42.5215 50.4297C42.5957 50.3711 42.6504 50.293 42.6855 50.1953ZM44.584 50.6172C44.3965 50.457 44.373 50.3086 44.5137 50.1719C44.6074 50.1953 44.6934 50.2578 44.7715 50.3594C44.8965 50.2188 45.0371 50.1875 45.1934 50.2656C45.1738 50.3945 45.1113 50.5039 45.0059 50.5938C45.248 50.8242 45.2324 50.957 44.959 50.9922L44.9121 50.9219L44.7715 50.8281C44.7285 50.9141 44.6504 50.9688 44.5371 50.9922C44.3652 50.8867 44.3809 50.7617 44.584 50.6172ZM40.8574 51.0859C40.7012 50.9688 40.6621 50.8281 40.7402 50.6641C40.8691 50.6719 40.9785 50.7344 41.0684 50.8516C41.3027 50.6055 41.4355 50.6211 41.4668 50.8984L41.373 50.9688L41.3027 51.1094C41.4004 51.168 41.4473 51.2617 41.4434 51.3906C41.3223 51.4961 41.1973 51.4648 41.0684 51.2969C40.9785 51.4492 40.8535 51.4883 40.6934 51.4141C40.6973 51.2969 40.752 51.1875 40.8574 51.0859ZM44.5605 51.5781C44.4004 51.457 44.3613 51.3164 44.4434 51.1562C44.5762 51.168 44.6934 51.2305 44.7949 51.3438C44.8496 51.2344 44.9512 51.1719 45.0996 51.1562C45.1855 51.3047 45.1465 51.4375 44.9824 51.5547C45.1543 51.6719 45.1855 51.8047 45.0762 51.9531C44.959 51.9531 44.8652 51.8984 44.7949 51.7891C44.7129 51.8984 44.5957 51.9531 44.4434 51.9531C44.3691 51.8125 44.4082 51.6875 44.5605 51.5781ZM40.8574 52.0469C40.7012 51.9102 40.6699 51.7695 40.7637 51.625C40.8848 51.6328 40.9863 51.6953 41.0684 51.8125C41.1582 51.6836 41.2754 51.6367 41.4199 51.6719C41.498 51.7734 41.4824 51.8672 41.373 51.9531L41.3027 52.0703C41.5293 52.2539 41.5137 52.3789 41.2559 52.4453C41.2129 52.3789 41.1504 52.3242 41.0684 52.2812C40.9863 52.4102 40.8691 52.4492 40.7168 52.3984C40.6973 52.2734 40.7441 52.1562 40.8574 52.0469ZM44.584 52.5156C44.4004 52.3477 44.377 52.1992 44.5137 52.0703C44.6074 52.0938 44.6934 52.1562 44.7715 52.2578C44.877 52.1562 45.0098 52.1094 45.1699 52.1172C45.2012 52.25 45.1543 52.3828 45.0293 52.5156C45.2129 52.6406 45.2285 52.7656 45.0762 52.8906C44.9707 52.8672 44.8848 52.8125 44.8184 52.7266C44.7285 52.8516 44.6035 52.8984 44.4434 52.8672C44.4199 52.7305 44.4668 52.6133 44.584 52.5156ZM40.834 52.9609C40.6621 52.832 40.6309 52.6914 40.7402 52.5391C40.8613 52.5469 40.9629 52.6094 41.0449 52.7266C41.4043 52.4492 41.5137 52.4883 41.373 52.8438L41.2793 52.9844C41.377 53.043 41.4238 53.1367 41.4199 53.2656C41.2988 53.375 41.1738 53.3438 41.0449 53.1719C40.959 53.3281 40.834 53.3672 40.6699 53.2891C40.6816 53.1758 40.7363 53.0664 40.834 52.9609ZM44.584 53.4062C44.4082 53.3047 44.377 53.1719 44.4902 53.0078C44.6113 53.0273 44.7129 53.0898 44.7949 53.1953C44.9043 53.043 45.0371 53.0039 45.1934 53.0781C45.1895 53.1953 45.1348 53.3047 45.0293 53.4062C45.0566 53.4766 45.1113 53.5469 45.1934 53.6172C45.1582 53.8164 45.0566 53.8555 44.8887 53.7344L44.7715 53.6641C44.5762 53.8906 44.459 53.8672 44.4199 53.5938C44.4863 53.5508 44.541 53.4883 44.584 53.4062ZM40.8574 53.875C40.6895 53.7383 40.666 53.5977 40.7871 53.4531C40.8965 53.4766 40.9902 53.5391 41.0684 53.6406C41.1973 53.4961 41.3223 53.457 41.4434 53.5234C41.4902 53.6172 41.4668 53.7031 41.373 53.7812L41.3027 53.8984C41.5371 54.0898 41.5215 54.2148 41.2559 54.2734C41.2129 54.207 41.1504 54.1523 41.0684 54.1094C40.9824 54.2422 40.8652 54.2812 40.7168 54.2266C40.7051 54.0977 40.752 53.9805 40.8574 53.875ZM43.6699 54.3203C43.4863 54.1523 43.4629 54.0039 43.5996 53.875C43.7012 53.9023 43.7871 53.9648 43.8574 54.0625L43.9746 53.9688L44.1152 53.875C44.3066 53.957 44.3223 54.0742 44.1621 54.2266L44.1152 54.3203C44.2129 54.3828 44.2598 54.4844 44.2559 54.625C44.127 54.707 44.002 54.6758 43.8809 54.5312C43.7949 54.6602 43.6777 54.707 43.5293 54.6719C43.5059 54.5352 43.5527 54.418 43.6699 54.3203ZM41.8418 54.3438C41.6465 54.1875 41.623 54.0391 41.7715 53.8984C41.8613 53.9258 41.9473 53.9883 42.0293 54.0859C42.1543 53.9453 42.2949 53.9141 42.4512 53.9922C42.4355 54.1172 42.373 54.2266 42.2637 54.3203C42.3848 54.4102 42.4316 54.5273 42.4043 54.6719C42.3066 54.7305 42.2207 54.7148 42.1465 54.625L42.0293 54.5547C41.9785 54.6445 41.9004 54.6992 41.7949 54.7188C41.623 54.6133 41.6387 54.4883 41.8418 54.3438ZM42.7559 54.3438C42.5879 54.1914 42.5566 54.043 42.6621 53.8984C42.7793 53.9141 42.873 53.9766 42.9434 54.0859C43.0488 53.9883 43.1738 53.9336 43.3184 53.9219C43.3887 54.0625 43.3496 54.1875 43.2012 54.2969C43.3457 54.4297 43.377 54.5625 43.2949 54.6953C43.1816 54.7109 43.0723 54.6641 42.9668 54.5547C42.9004 54.6445 42.7988 54.6992 42.6621 54.7188C42.584 54.582 42.6152 54.457 42.7559 54.3438ZM40.834 54.8359C40.6465 54.6758 40.623 54.5273 40.7637 54.3906C40.8574 54.4258 40.9512 54.4883 41.0449 54.5781C41.1426 54.457 41.2676 54.4102 41.4199 54.4375C41.4473 54.5859 41.3926 54.7109 41.2559 54.8125C41.4941 55.0312 41.4785 55.1641 41.209 55.2109L41.1621 55.1406L41.0215 55.0469C40.9785 55.1328 40.9004 55.1875 40.7871 55.2109C40.6152 55.1055 40.6309 54.9805 40.834 54.8359ZM40.8574 55.7266C40.6973 55.6016 40.666 55.4609 40.7637 55.3047C40.8848 55.3125 40.9863 55.375 41.0684 55.4922C41.4473 55.2109 41.5566 55.25 41.3965 55.6094L41.3027 55.75C41.4004 55.8086 41.4473 55.9023 41.4434 56.0312C41.334 56.1328 41.209 56.1094 41.0684 55.9609C40.9785 56.1055 40.8535 56.1367 40.6934 56.0547C40.7051 55.9414 40.7598 55.832 40.8574 55.7266ZM40.8574 56.6406C40.6699 56.5312 40.6387 56.3984 40.7637 56.2422C40.877 56.2617 40.9707 56.3242 41.0449 56.4297C41.1582 56.3047 41.291 56.2578 41.4434 56.2891C41.4668 56.4297 41.4121 56.5469 41.2793 56.6406C41.541 56.9922 41.5098 57.1094 41.1855 56.9922L41.0449 56.8984C40.9785 57 40.8848 57.0469 40.7637 57.0391C40.6543 56.9297 40.6855 56.7969 40.8574 56.6406ZM39.9434 57.5781C39.7715 57.4492 39.748 57.3086 39.873 57.1562C39.9824 57.1797 40.0762 57.2422 40.1543 57.3438C40.2832 57.2031 40.416 57.1641 40.5527 57.2266C40.5684 57.3594 40.5137 57.4688 40.3887 57.5547C40.623 57.9062 40.584 58.0234 40.2715 57.9062L40.1543 57.8125C40.0879 57.9336 39.9863 57.9805 39.8496 57.9531C39.7676 57.8359 39.7988 57.7109 39.9434 57.5781ZM40.8809 57.5781C40.6934 57.4375 40.6699 57.2969 40.8105 57.1562C40.9043 57.1797 40.9902 57.2422 41.0684 57.3438C41.1895 57.2227 41.3223 57.1758 41.4668 57.2031C41.502 57.3398 41.4551 57.457 41.3262 57.5547C41.5449 57.8555 41.5137 57.9805 41.2324 57.9297L41.1152 57.8125C40.6582 58.1133 40.5801 58.0352 40.8809 57.5781ZM41.7949 57.6016C41.6074 57.4414 41.584 57.293 41.7246 57.1562C41.8184 57.1914 41.9121 57.2539 42.0059 57.3438C42.1035 57.2227 42.2285 57.1758 42.3809 57.2031C42.4082 57.3516 42.3535 57.4766 42.2168 57.5781C42.4551 57.7969 42.4395 57.9297 42.1699 57.9766L42.123 57.9062L41.9824 57.8125C41.9395 57.8984 41.8613 57.9531 41.748 57.9766C41.5762 57.8711 41.5918 57.7461 41.7949 57.6016ZM47.7012 50.1719C47.498 50.0195 47.4746 49.8711 47.6309 49.7266C47.7324 49.7578 47.8184 49.8281 47.8887 49.9375C47.9941 49.7969 48.127 49.75 48.2871 49.7969C48.3066 49.9336 48.252 50.0508 48.123 50.1484C48.3848 50.5273 48.3457 50.6367 48.0059 50.4766L47.8887 50.3828C47.834 50.4844 47.7402 50.5391 47.6074 50.5469C47.4863 50.4141 47.5176 50.2891 47.7012 50.1719ZM48.873 49.9141C48.9199 49.8438 48.9902 49.7812 49.084 49.7266C49.1074 49.7383 49.1387 49.7461 49.1777 49.75C49.2559 49.8906 49.2168 50.0156 49.0605 50.125C49.1777 50.2266 49.2324 50.3594 49.2246 50.5234C49.0879 50.5586 48.9551 50.5117 48.8262 50.3828C48.7402 50.5117 48.623 50.5586 48.4746 50.5234C48.459 50.3828 48.5059 50.25 48.6152 50.125C48.502 50.0312 48.4629 49.9141 48.498 49.7734C48.623 49.7578 48.748 49.8047 48.873 49.9141ZM45.8262 50.1719C45.6543 50.043 45.623 49.9023 45.7324 49.75C45.8418 49.7695 45.9434 49.832 46.0371 49.9375C46.1465 49.7852 46.2793 49.7461 46.4355 49.8203C46.4316 49.9531 46.377 50.0625 46.2715 50.1484C46.2988 50.2227 46.3535 50.293 46.4355 50.3594C46.4004 50.5625 46.2988 50.6016 46.1309 50.4766L46.0137 50.4062C45.9512 50.5117 45.8574 50.5586 45.7324 50.5469C45.6309 50.4336 45.6621 50.3086 45.8262 50.1719ZM46.7637 50.1719C46.5918 50.043 46.5605 49.9023 46.6699 49.75C46.7793 49.7695 46.873 49.832 46.9512 49.9375C47.0566 49.8398 47.1816 49.7852 47.3262 49.7734C47.3887 49.9062 47.3496 50.0469 47.209 50.1953C47.373 50.3008 47.3965 50.418 47.2793 50.5469C47.1699 50.5469 47.0684 50.5 46.9746 50.4062C46.8887 50.5195 46.7715 50.5664 46.623 50.5469C46.5879 50.4102 46.6348 50.2852 46.7637 50.1719ZM49.5527 50.6406C49.3496 50.4727 49.3262 50.3242 49.4824 50.1953C49.5723 50.2227 49.6582 50.2852 49.7402 50.3828C49.8184 50.3398 49.9043 50.2773 49.998 50.1953L50.1621 50.2891C50.1465 50.418 50.084 50.5273 49.9746 50.6172C50.0957 50.707 50.1426 50.8242 50.1152 50.9688C50.0215 51.0234 49.9355 51.0078 49.8574 50.9219L49.7402 50.8516C49.6855 50.9375 49.6074 50.9922 49.5059 51.0156C49.334 50.9102 49.3496 50.7852 49.5527 50.6406ZM46.7637 51.1328C46.5957 50.9297 46.5879 50.7812 46.7402 50.6875C46.8262 50.7266 46.9043 50.7891 46.9746 50.875C47.0645 50.7461 47.1816 50.6992 47.3262 50.7344C47.3926 50.8438 47.3691 50.9453 47.2559 51.0391L47.209 51.1094C47.3223 51.1836 47.377 51.293 47.373 51.4375C47.2363 51.5273 47.1035 51.4883 46.9746 51.3203C46.9043 51.4531 46.7871 51.5078 46.623 51.4844C46.5879 51.3438 46.6348 51.2266 46.7637 51.1328ZM50.0215 51.5547C49.8496 51.4258 49.8184 51.2852 49.9277 51.1328C50.0488 51.1523 50.1504 51.2148 50.2324 51.3203C50.3145 51.2227 50.4238 51.1602 50.5605 51.1328C50.6582 51.2734 50.627 51.4062 50.4668 51.5312C50.6152 51.6719 50.6387 51.8125 50.5371 51.9531C50.4277 51.9336 50.3262 51.8711 50.2324 51.7656C50.1699 51.8672 50.0684 51.9297 49.9277 51.9531C49.8301 51.8203 49.8613 51.6875 50.0215 51.5547ZM46.7637 52.0469C46.5762 51.8867 46.5527 51.7383 46.6934 51.6016C46.7871 51.625 46.873 51.6875 46.9512 51.7891C47.0566 51.6875 47.1895 51.6406 47.3496 51.6484C47.373 51.7852 47.3262 51.9023 47.209 52C47.4277 52.375 47.3887 52.4922 47.0918 52.3516L46.9512 52.2578C46.9082 52.3438 46.8301 52.3984 46.7168 52.4219C46.5449 52.3164 46.5605 52.1914 46.7637 52.0469ZM50.0215 52.5156C49.8066 52.3438 49.791 52.1953 49.9746 52.0703C50.0605 52.1094 50.1387 52.1719 50.209 52.2578C50.334 52.1172 50.4746 52.0859 50.6309 52.1641C50.6113 52.293 50.5488 52.4023 50.4434 52.4922C50.7168 52.8672 50.6777 52.9766 50.3262 52.8203L50.209 52.7266C50.1582 52.8203 50.0723 52.875 49.9512 52.8906C49.7988 52.7734 49.8223 52.6484 50.0215 52.5156ZM46.7637 52.9375C46.6035 52.8438 46.5645 52.7109 46.6465 52.5391C46.7754 52.5391 46.877 52.6016 46.9512 52.7266C47.0527 52.5938 47.1855 52.5469 47.3496 52.5859C47.373 52.7227 47.3184 52.8398 47.1855 52.9375C47.4512 53.2891 47.4199 53.4062 47.0918 53.2891L46.9512 53.1953C46.8926 53.293 46.7988 53.3398 46.6699 53.3359C46.5566 53.2109 46.5879 53.0781 46.7637 52.9375ZM49.5293 53.4062C49.3535 53.2344 49.3457 53.0938 49.5059 52.9844C49.584 53.0273 49.6699 53.0898 49.7637 53.1719C49.8379 53.0586 49.9473 53.0039 50.0918 53.0078C50.1543 53.1445 50.1152 53.2773 49.9746 53.4062C50.1816 53.5586 50.1973 53.6992 50.0215 53.8281C49.9316 53.7852 49.8457 53.7148 49.7637 53.6172C49.6777 53.7422 49.5527 53.7969 49.3887 53.7812C49.3535 53.6445 49.4004 53.5195 49.5293 53.4062ZM46.7637 53.8281C46.6035 53.7344 46.5645 53.6016 46.6465 53.4297C46.7754 53.4492 46.8848 53.5117 46.9746 53.6172C47.084 53.457 47.2168 53.418 47.373 53.5C47.3652 53.6289 47.3027 53.7383 47.1855 53.8281C47.3145 53.918 47.3613 54.0352 47.3262 54.1797C47.2402 54.25 47.1543 54.2422 47.0684 54.1562L46.9512 54.0859C46.8926 54.1836 46.7988 54.2305 46.6699 54.2266C46.5645 54.0977 46.5957 53.9648 46.7637 53.8281ZM47.7012 53.875C47.5098 53.7305 47.4941 53.5898 47.6543 53.4531C47.7402 53.4922 47.8184 53.5547 47.8887 53.6406C47.9473 53.6055 48.002 53.5508 48.0527 53.4766C48.3066 53.4766 48.3535 53.5781 48.1934 53.7812L48.123 53.875C48.2363 53.9453 48.291 54.0547 48.2871 54.2031C48.1816 54.3008 48.0488 54.2695 47.8887 54.1094C47.7988 54.2539 47.6738 54.2852 47.5137 54.2031C47.5332 54.0742 47.5957 53.9648 47.7012 53.875ZM48.6152 53.8281C48.459 53.7266 48.4355 53.6016 48.5449 53.4531C48.6543 53.4609 48.748 53.5156 48.8262 53.6172C48.8965 53.5898 48.959 53.5352 49.0137 53.4531C49.2285 53.4883 49.2676 53.5898 49.1309 53.7578L49.0605 53.875C49.166 53.9375 49.2207 54.0391 49.2246 54.1797C49.0996 54.293 48.9668 54.2617 48.8262 54.0859C48.7402 54.2344 48.6152 54.2734 48.4512 54.2031C48.459 54.0742 48.5137 53.9492 48.6152 53.8281ZM46.7637 54.7891C46.5996 54.668 46.5684 54.5273 46.6699 54.3672C46.791 54.3867 46.8926 54.4492 46.9746 54.5547C47.0645 54.4258 47.1816 54.3789 47.3262 54.4141C47.3965 54.5 47.3887 54.5859 47.3027 54.6719L47.209 54.8125C47.3145 54.8789 47.3613 54.9805 47.3496 55.1172C47.2285 55.1914 47.1035 55.1602 46.9746 55.0234C46.8848 55.168 46.7598 55.1992 46.5996 55.1172C46.6113 55.0039 46.666 54.8945 46.7637 54.7891ZM49.7402 54.5547L49.9746 54.3672C49.998 54.3789 50.0293 54.3867 50.0684 54.3906C50.1387 54.5156 50.1074 54.6562 49.9746 54.8125C50.0801 54.8828 50.1348 54.9922 50.1387 55.1406C49.998 55.2188 49.873 55.1797 49.7637 55.0234C49.6191 55.1758 49.4785 55.207 49.3418 55.1172C49.3613 54.9961 49.4238 54.8945 49.5293 54.8125C49.3926 54.6875 49.3613 54.5469 49.4355 54.3906C49.5566 54.3945 49.6582 54.4492 49.7402 54.5547ZM46.7637 55.7266C46.6035 55.6094 46.5645 55.4688 46.6465 55.3047C46.7715 55.3086 46.873 55.3711 46.9512 55.4922C47.0488 55.3828 47.1738 55.3281 47.3262 55.3281C47.3848 55.4766 47.3379 55.6016 47.1855 55.7031C47.334 55.8125 47.373 55.9453 47.3027 56.1016C47.1816 56.1172 47.0801 56.0703 46.998 55.9609C46.9004 56.0664 46.7754 56.1133 46.623 56.1016C46.584 55.9609 46.6309 55.8359 46.7637 55.7266ZM49.998 55.7031C49.8457 55.5938 49.8223 55.4609 49.9277 55.3047C50.0332 55.3242 50.1348 55.3789 50.2324 55.4688C50.3184 55.3555 50.4355 55.3086 50.584 55.3281C50.6074 55.4648 50.5605 55.582 50.4434 55.6797C50.7012 56.0469 50.6699 56.1719 50.3496 56.0547L50.2559 55.9375C50.1855 55.9648 50.123 56.0195 50.0684 56.1016C49.7832 56.0859 49.7598 55.9531 49.998 55.7031ZM46.7402 56.6641C46.5449 56.5117 46.5215 56.3633 46.6699 56.2188C46.7598 56.2461 46.8457 56.3086 46.9277 56.4062C47.0527 56.2656 47.1934 56.2344 47.3496 56.3125C47.334 56.4414 47.2715 56.5508 47.1621 56.6406C47.2832 56.7305 47.3301 56.8477 47.3027 56.9922C47.2051 57.0508 47.1191 57.0352 47.0449 56.9453L46.9277 56.875C46.877 56.9648 46.7988 57.0195 46.6934 57.0391C46.5215 56.9336 46.5371 56.8086 46.7402 56.6641ZM50.4668 56.6406C50.291 56.5078 50.2676 56.3672 50.3965 56.2188C50.502 56.2422 50.5957 56.3047 50.6777 56.4062C50.8027 56.2695 50.9355 56.2305 51.0762 56.2891C51.0918 56.4219 51.0371 56.5312 50.9121 56.6172C51.1465 56.9688 51.1074 57.0859 50.7949 56.9688L50.6777 56.875C50.6113 56.9961 50.5098 57.043 50.373 57.0156C50.291 56.8945 50.3223 56.7695 50.4668 56.6406ZM46.7402 57.5781C46.5488 57.4219 46.5254 57.2734 46.6699 57.1328C46.7637 57.168 46.8574 57.2305 46.9512 57.3203C47.0488 57.1992 47.1738 57.1523 47.3262 57.1797C47.3535 57.3281 47.2988 57.4531 47.1621 57.5547C47.4004 57.7734 47.3848 57.9062 47.1152 57.9531L47.0684 57.8828L46.9277 57.7891C46.8809 57.875 46.8027 57.9297 46.6934 57.9531C46.5215 57.8477 46.5371 57.7227 46.7402 57.5781ZM45.8027 57.6016C45.6309 57.4414 45.6074 57.293 45.7324 57.1562C45.8418 57.1797 45.9355 57.2422 46.0137 57.3438L46.2949 57.1562L46.4355 57.25C46.416 57.3633 46.3535 57.4727 46.248 57.5781C46.3652 57.6641 46.4121 57.7734 46.3887 57.9062C46.2637 57.9961 46.1621 57.9727 46.084 57.8359L46.0137 57.8125C45.9473 57.9375 45.8457 57.9844 45.709 57.9531C45.627 57.832 45.6582 57.7148 45.8027 57.6016ZM47.7012 57.5547C47.541 57.4414 47.5098 57.3086 47.6074 57.1562C47.7168 57.1719 47.8184 57.2266 47.9121 57.3203C47.9863 57.2266 48.0957 57.1719 48.2402 57.1562C48.3066 57.2891 48.2754 57.4219 48.1465 57.5547C48.3379 57.7344 48.3457 57.875 48.1699 57.9766C48.0918 57.9375 48.0059 57.875 47.9121 57.7891C47.8379 57.8906 47.7285 57.9453 47.584 57.9531C47.5059 57.8086 47.5449 57.6758 47.7012 57.5547ZM50.4668 57.5781C50.2949 57.4492 50.2715 57.3086 50.3965 57.1562C50.502 57.1875 50.6035 57.25 50.7012 57.3438C50.8066 57.2031 50.9395 57.1719 51.0996 57.25C51.084 57.3633 51.0215 57.4727 50.9121 57.5781C51.1699 57.9141 51.1309 58.0234 50.7949 57.9062L50.6777 57.8125C50.4863 58.0469 50.3613 58.0312 50.3027 57.7656C50.3691 57.7266 50.4238 57.6641 50.4668 57.5781ZM51.3809 57.5547C51.2246 57.4531 51.1855 57.3203 51.2637 57.1562C51.3926 57.1641 51.502 57.2266 51.5918 57.3438C51.6777 57.2227 51.8027 57.168 51.9668 57.1797C52.002 57.3203 51.9551 57.4375 51.8262 57.5312C52.041 57.8906 52.0098 58.0156 51.7324 57.9062L51.6152 57.7891C51.5254 57.918 51.4082 57.9648 51.2637 57.9297C51.2012 57.8086 51.2402 57.6836 51.3809 57.5547ZM54.9902 50.1484C54.7988 49.9727 54.7832 49.8242 54.9434 49.7031C55.041 49.7539 55.1348 49.8242 55.2246 49.9141C55.3105 49.7656 55.4355 49.7188 55.5996 49.7734C55.6035 49.9102 55.5488 50.0273 55.4355 50.125C55.7012 50.5039 55.6621 50.6133 55.3184 50.4531L55.2012 50.3594C55.1426 50.4531 55.0566 50.5078 54.9434 50.5234C54.791 50.4219 54.8066 50.2969 54.9902 50.1484ZM54.123 50.1719C53.916 50.0078 53.9004 49.8594 54.0762 49.7266L54.3574 49.9141C54.4238 49.8242 54.5254 49.7695 54.6621 49.75C54.748 49.8984 54.709 50.0312 54.5449 50.1484C54.752 50.3164 54.7598 50.457 54.5684 50.5703C54.502 50.5352 54.4316 50.4727 54.3574 50.3828C54.2754 50.4922 54.1582 50.5469 54.0059 50.5469C53.9316 50.4062 53.9707 50.2812 54.123 50.1719ZM55.9512 50.1719C55.752 49.9961 55.7363 49.8477 55.9043 49.7266L56.0215 49.7734C56.0605 49.8281 56.1152 49.8828 56.1855 49.9375C56.2559 49.8008 56.373 49.7461 56.5371 49.7734C56.5605 49.9102 56.5137 50.0273 56.3965 50.125C56.6113 50.4688 56.5801 50.5938 56.3027 50.5L56.1855 50.3828C56.0957 50.5117 55.9785 50.5586 55.834 50.5234C55.7637 50.3867 55.8027 50.2695 55.9512 50.1719ZM56.8887 50.1484C56.7285 50.0547 56.6895 49.9219 56.7715 49.75C56.8965 49.7539 56.998 49.8164 57.0762 49.9375C57.1934 49.8047 57.3262 49.7578 57.4746 49.7969C57.498 49.9375 57.4434 50.0547 57.3105 50.1484C57.5762 50.5039 57.5449 50.6211 57.2168 50.5L57.0762 50.4062C57.0098 50.5078 56.916 50.5547 56.7949 50.5469C56.6934 50.418 56.7246 50.2852 56.8887 50.1484ZM57.3574 51.1094C57.1738 50.9414 57.1504 50.793 57.2871 50.6641C57.3848 50.6914 57.4707 50.7539 57.5449 50.8516C57.7051 50.707 57.8457 50.668 57.9668 50.7344C57.9707 50.8672 57.916 50.9766 57.8027 51.0625C58.0449 51.4453 58.0059 51.5625 57.6855 51.4141L57.5684 51.3203C57.5098 51.4102 57.4238 51.4648 57.3105 51.4844C57.1504 51.375 57.166 51.25 57.3574 51.1094ZM53.6074 51.0859C53.4473 50.9922 53.4082 50.8594 53.4902 50.6875C53.6191 50.707 53.7363 50.7695 53.8418 50.875C53.9277 50.7148 54.0527 50.6758 54.2168 50.7578C54.1973 50.8867 54.1348 50.9961 54.0293 51.0859C54.3105 51.4844 54.2715 51.5938 53.9121 51.4141L53.7949 51.3438C53.7363 51.4414 53.6426 51.4883 53.5137 51.4844C53.4082 51.3555 53.4395 51.2227 53.6074 51.0859ZM53.1387 52C52.9902 51.9102 52.9512 51.7852 53.0215 51.625C53.1504 51.6328 53.2676 51.6953 53.373 51.8125C53.459 51.6641 53.584 51.6172 53.748 51.6719C53.7598 51.8047 53.7051 51.9219 53.584 52.0234C53.8457 52.4023 53.8066 52.5117 53.4668 52.3516L53.3496 52.2578C53.1621 52.5 53.0371 52.4922 52.9746 52.2344C53.0488 52.1758 53.1035 52.0977 53.1387 52ZM52.6699 52.9141C52.4863 52.8086 52.4473 52.6758 52.5527 52.5156C52.6777 52.5195 52.7793 52.582 52.8574 52.7031C52.9629 52.5625 53.0957 52.5156 53.2559 52.5625C53.2754 52.6992 53.2207 52.8164 53.0918 52.9141C53.3535 53.293 53.3145 53.4023 52.9746 53.2422L52.8574 53.1484C52.8027 53.25 52.709 53.3047 52.5762 53.3125C52.4629 53.1875 52.4941 53.0547 52.6699 52.9141ZM52.6465 53.8516C52.4863 53.7578 52.4473 53.625 52.5293 53.4531C52.6504 53.4609 52.752 53.5234 52.834 53.6406C52.9512 53.5078 53.084 53.4609 53.2324 53.5C53.2559 53.6367 53.2012 53.7539 53.0684 53.8516C53.3301 54.2031 53.2988 54.3203 52.9746 54.2031L52.834 54.1094C52.7676 54.2109 52.6738 54.2578 52.5527 54.25C52.4395 54.1289 52.4707 53.9961 52.6465 53.8516ZM52.623 54.8125C52.4707 54.6484 52.4395 54.5 52.5293 54.3672C52.6504 54.3867 52.752 54.4492 52.834 54.5547C52.8848 54.5312 52.9316 54.4844 52.9746 54.4141C53.2559 54.375 53.3105 54.4688 53.1387 54.6953L53.0684 54.8125C53.3027 55.0039 53.2871 55.1289 53.0215 55.1875C52.9785 55.1211 52.916 55.0664 52.834 55.0234C52.748 55.1562 52.6309 55.1953 52.4824 55.1406C52.459 55.0117 52.5059 54.9023 52.623 54.8125ZM53.1152 55.75C52.959 55.5898 52.9277 55.4414 53.0215 55.3047C53.1426 55.3125 53.2441 55.375 53.3262 55.4922C53.416 55.3633 53.5332 55.3164 53.6777 55.3516C53.7441 55.4531 53.7285 55.5469 53.6309 55.6328L53.5605 55.75C53.7871 55.9336 53.7715 56.0586 53.5137 56.125C53.4707 56.0586 53.4082 56.0039 53.3262 55.9609C53.2402 56.0977 53.1152 56.1289 52.9512 56.0547C52.9551 55.9336 53.0098 55.832 53.1152 55.75ZM57.334 56.6641C57.1543 56.4531 57.1387 56.2969 57.2871 56.1953C57.3887 56.2305 57.4746 56.3008 57.5449 56.4062C57.6504 56.2656 57.7832 56.2188 57.9434 56.2656C57.9551 56.3984 57.9004 56.5156 57.7793 56.6172C58.0293 56.9531 57.9902 57.0625 57.6621 56.9453L57.5449 56.8516C57.4863 56.9453 57.4004 57 57.2871 57.0156C57.1426 56.9062 57.1582 56.7891 57.334 56.6641ZM53.584 56.6406C53.4199 56.5195 53.3887 56.3789 53.4902 56.2188C53.6113 56.2383 53.7129 56.3008 53.7949 56.4062C53.8848 56.2773 54.002 56.2305 54.1465 56.2656C54.2168 56.3516 54.209 56.4375 54.123 56.5234L54.0293 56.6641C54.1348 56.7305 54.1816 56.832 54.1699 56.9688C54.0488 57.043 53.9238 57.0117 53.7949 56.875C53.7051 57.0195 53.5801 57.0508 53.4199 56.9688C53.4316 56.8555 53.4863 56.7461 53.584 56.6406ZM54.0996 57.5312C53.9121 57.4219 53.8887 57.2891 54.0293 57.1328C54.1309 57.1562 54.2168 57.2188 54.2871 57.3203C54.4629 57.1719 54.5957 57.1328 54.6855 57.2031C54.7324 57.2969 54.709 57.3828 54.6152 57.4609L54.5449 57.5781C54.6504 57.6445 54.6973 57.7461 54.6855 57.8828C54.5645 57.9648 54.4395 57.9336 54.3105 57.7891C54.2324 57.9219 54.1152 57.9688 53.959 57.9297C53.9434 57.7891 53.9902 57.6562 54.0996 57.5312ZM56.8418 57.5781C56.6543 57.4141 56.6309 57.2656 56.7715 57.1328C56.8652 57.1562 56.9512 57.2188 57.0293 57.3203C57.1348 57.2188 57.2676 57.1719 57.4277 57.1797C57.4512 57.3164 57.4043 57.4336 57.2871 57.5312C57.5098 57.9062 57.4707 58.0234 57.1699 57.8828L57.0527 57.7891C56.9941 57.8789 56.9082 57.9336 56.7949 57.9531C56.623 57.8477 56.6387 57.7227 56.8418 57.5781ZM55.0137 57.6016C54.8301 57.4336 54.8066 57.2852 54.9434 57.1562C55.0527 57.1875 55.1465 57.2578 55.2246 57.3672C55.3105 57.2422 55.4355 57.1875 55.5996 57.2031C55.6387 57.3438 55.5918 57.4609 55.459 57.5547C55.6191 57.7031 55.6426 57.8438 55.5293 57.9766C55.4199 57.9688 55.3262 57.9141 55.248 57.8125C55.1582 57.9375 55.0332 57.9844 54.873 57.9531C54.8496 57.8164 54.8965 57.6992 55.0137 57.6016ZM55.9043 57.6016C55.748 57.4336 55.7168 57.2852 55.8105 57.1562C55.9316 57.1641 56.0332 57.2266 56.1152 57.3438C56.2051 57.2148 56.3223 57.168 56.4668 57.2031C56.5449 57.3008 56.5293 57.3945 56.4199 57.4844L56.3496 57.6016C56.4512 57.668 56.498 57.7617 56.4902 57.8828C56.3809 57.9922 56.2559 57.9609 56.1152 57.7891C56.0371 57.9414 55.9121 57.9805 55.7402 57.9062C55.7441 57.7852 55.7988 57.6836 55.9043 57.6016ZM58.248 52C58.3965 51.9102 58.4355 51.7852 58.3652 51.625C58.2363 51.6328 58.1191 51.6953 58.0137 51.8125C57.9277 51.6641 57.8027 51.6172 57.6387 51.6719C57.627 51.8047 57.6816 51.9219 57.8027 52.0234C57.541 52.4023 57.5801 52.5117 57.9199 52.3516L58.0371 52.2578C58.2246 52.5 58.3496 52.4922 58.4121 52.2344C58.3379 52.1758 58.2832 52.0977 58.248 52ZM58.6289 52.9316C58.8125 52.8262 58.8516 52.6934 58.7461 52.5332C58.6211 52.5371 58.5195 52.5996 58.4414 52.7207C58.3359 52.5801 58.2031 52.5332 58.043 52.5801C58.0234 52.7168 58.0781 52.834 58.207 52.9316C57.9453 53.3105 57.9844 53.4199 58.3242 53.2598L58.4414 53.166C58.4961 53.2676 58.5898 53.3223 58.7227 53.3301C58.8359 53.2051 58.8047 53.0723 58.6289 52.9316ZM58.6523 53.8691C58.8125 53.7754 58.8516 53.6426 58.7695 53.4707C58.6484 53.4785 58.5469 53.541 58.4648 53.6582C58.3477 53.5254 58.2148 53.4785 58.0664 53.5176C58.043 53.6543 58.0977 53.7715 58.2305 53.8691C57.9688 54.2207 58 54.3379 58.3242 54.2207L58.4648 54.127C58.5312 54.2285 58.625 54.2754 58.7461 54.2676C58.8594 54.1465 58.8281 54.0137 58.6523 53.8691ZM58.6758 54.8301C58.8281 54.666 58.8594 54.5176 58.7695 54.3848C58.6484 54.4043 58.5469 54.4668 58.4648 54.5723C58.4141 54.5488 58.3672 54.502 58.3242 54.4316C58.043 54.3926 57.9883 54.4863 58.1602 54.7129L58.2305 54.8301C57.9961 55.0215 58.0117 55.1465 58.2773 55.2051C58.3203 55.1387 58.3828 55.084 58.4648 55.041C58.5508 55.1738 58.668 55.2129 58.8164 55.1582C58.8398 55.0293 58.793 54.9199 58.6758 54.8301ZM58.2715 55.75C58.4277 55.5898 58.459 55.4414 58.3652 55.3047C58.2441 55.3125 58.1426 55.375 58.0605 55.4922C57.9707 55.3633 57.8535 55.3164 57.709 55.3516C57.6426 55.4531 57.6582 55.5469 57.7559 55.6328L57.8262 55.75C57.5996 55.9336 57.6152 56.0586 57.873 56.125C57.916 56.0586 57.9785 56.0039 58.0605 55.9609C58.1465 56.0977 58.2715 56.1289 58.4355 56.0547C58.4316 55.9336 58.377 55.832 58.2715 55.75ZM59.2793 50.1484C59.1074 50.0195 59.084 49.8789 59.209 49.7266C59.3184 49.75 59.4121 49.8125 59.4902 49.9141C59.6191 49.7734 59.752 49.7344 59.8887 49.7969C59.9043 49.9297 59.8496 50.0391 59.7246 50.125C59.959 50.4766 59.9199 50.5938 59.6074 50.4766L59.4902 50.3828C59.4238 50.5039 59.3223 50.5508 59.1855 50.5234C59.1035 50.4062 59.1348 50.2812 59.2793 50.1484ZM61.2246 50.1719C61.0488 50.0117 61.0254 49.8633 61.1543 49.7266C61.2637 49.75 61.3574 49.8125 61.4355 49.9141C61.6426 49.6953 61.7832 49.7031 61.8574 49.9375L61.7402 50.0547L61.6699 50.1719C61.7754 50.2383 61.8223 50.3398 61.8105 50.4766C61.6895 50.5586 61.5645 50.5273 61.4355 50.3828C61.3457 50.5312 61.2207 50.5625 61.0605 50.4766C61.0645 50.3555 61.1191 50.2539 61.2246 50.1719ZM63.0762 50.1484C62.9043 50.0273 62.873 49.8867 62.9824 49.7266C63.0918 49.75 63.1855 49.8125 63.2637 49.9141C63.377 49.793 63.5098 49.7461 63.6621 49.7734C63.6855 49.918 63.6309 50.043 63.498 50.1484C63.6191 50.2305 63.666 50.3398 63.6387 50.4766C63.5645 50.5508 63.4863 50.5508 63.4043 50.4766L63.2637 50.3828C63.1973 50.4961 63.0957 50.543 62.959 50.5234C62.8848 50.3945 62.9238 50.2695 63.0762 50.1484ZM63.9668 50.125C63.8066 50.0312 63.7676 49.8984 63.8496 49.7266C63.9785 49.7344 64.0801 49.7969 64.1543 49.9141C64.2559 49.7812 64.3887 49.7344 64.5527 49.7734C64.5762 49.9102 64.5215 50.0273 64.3887 50.125C64.6465 50.4766 64.6152 50.5938 64.2949 50.4766L64.1543 50.3828C64.0957 50.4805 64.002 50.5273 63.873 50.5234C63.7598 50.4023 63.791 50.2695 63.9668 50.125ZM60.2402 50.1719C60.0566 50.043 60.0254 49.9023 60.1465 49.75C60.2559 49.7734 60.3496 49.8359 60.4277 49.9375C60.5449 49.8125 60.6777 49.7656 60.8262 49.7969C60.8496 49.9453 60.7949 50.0703 60.6621 50.1719C60.7832 50.2539 60.8301 50.3633 60.8027 50.5C60.7285 50.5742 60.6504 50.5742 60.5684 50.5L60.4277 50.4062C60.3613 50.5195 60.2598 50.5664 60.123 50.5469C60.0488 50.418 60.0879 50.293 60.2402 50.1719ZM62.1621 50.1484C62.002 50.0508 61.9629 49.918 62.0449 49.75C62.1738 49.7578 62.2832 49.8203 62.373 49.9375C62.4824 49.7812 62.6152 49.7422 62.7715 49.8203C62.7676 49.9453 62.7129 50.0469 62.6074 50.125C62.6348 50.2031 62.6895 50.2812 62.7715 50.3594C62.7402 50.5508 62.6465 50.5898 62.4902 50.4766L62.373 50.3828C62.3145 50.4883 62.2207 50.543 62.0918 50.5469C61.9629 50.4336 61.9863 50.3008 62.1621 50.1484ZM60.3105 51.0625C60.127 50.957 60.0879 50.8242 60.1934 50.6641C60.3184 50.668 60.4199 50.7305 60.498 50.8516C60.6074 50.707 60.7402 50.6602 60.8965 50.7109C60.916 50.8516 60.8613 50.9688 60.7324 51.0625C60.9941 51.4414 60.9551 51.5508 60.6152 51.3906L60.498 51.2969C60.4395 51.4141 60.3457 51.4688 60.2168 51.4609C60.1035 51.3359 60.1348 51.2031 60.3105 51.0625ZM63.9902 51.0859C63.8145 50.9688 63.7832 50.8281 63.8965 50.6641C64.0059 50.6875 64.0996 50.75 64.1777 50.8516C64.2949 50.7305 64.4277 50.6836 64.5762 50.7109C64.5996 50.8594 64.5449 50.9844 64.4121 51.0859C64.6504 51.3086 64.6348 51.4414 64.3652 51.4844L64.3184 51.4141L64.1777 51.3203C64.1309 51.4141 64.0527 51.4688 63.9434 51.4844C63.7715 51.3867 63.7871 51.2539 63.9902 51.0859ZM60.3105 52.0469C60.1035 51.8828 60.0801 51.7344 60.2402 51.6016C60.3301 51.6289 60.416 51.6914 60.498 51.7891C60.623 51.6484 60.7637 51.6172 60.9199 51.6953C60.9043 51.8203 60.8418 51.9297 60.7324 52.0234C60.9941 52.3945 60.9551 52.5039 60.6152 52.3516L60.498 52.2578C60.4434 52.3555 60.3574 52.4102 60.2402 52.4219C60.0879 52.3047 60.1113 52.1797 60.3105 52.0469ZM60.2637 52.9609C60.0723 52.7852 60.0566 52.6367 60.2168 52.5156C60.2988 52.5508 60.377 52.6133 60.4512 52.7031L60.498 52.7266C60.5684 52.5938 60.6855 52.5391 60.8496 52.5625C60.8848 52.7031 60.8379 52.8203 60.709 52.9141C60.9316 53.2578 60.9004 53.3828 60.6152 53.2891L60.498 53.1719C60.4082 53.3008 60.291 53.3477 60.1465 53.3125C60.0918 53.1758 60.1309 53.0586 60.2637 52.9609ZM63.0762 52.9141C62.916 52.8203 62.877 52.6875 62.959 52.5156C63.0762 52.5195 63.1777 52.582 63.2637 52.7031C63.3809 52.5703 63.5137 52.5234 63.6621 52.5625C63.6855 52.7031 63.6309 52.8203 63.498 52.9141C63.7637 53.2695 63.7324 53.3867 63.4043 53.2656L63.2637 53.1719C63.1973 53.2734 63.1035 53.3203 62.9824 53.3125C62.8809 53.1992 62.9121 53.0664 63.0762 52.9141ZM61.248 53.4062C61.0762 53.2773 61.0449 53.1367 61.1543 52.9844C61.2754 52.9922 61.377 53.0547 61.459 53.1719C61.8379 52.8789 61.9473 52.918 61.7871 53.2891L61.6934 53.4297C61.791 53.4883 61.8379 53.582 61.834 53.7109C61.7129 53.8203 61.5879 53.7891 61.459 53.6172C61.373 53.7734 61.248 53.8125 61.084 53.7344C61.0879 53.6211 61.1426 53.5117 61.248 53.4062ZM62.1621 53.4062C61.9902 53.2773 61.959 53.1367 62.0684 52.9844C62.1895 53.0039 62.291 53.0664 62.373 53.1719C62.752 52.8906 62.8613 52.9297 62.7012 53.2891L62.6074 53.4297C62.8301 53.6133 62.8145 53.7383 62.5605 53.8047C62.5137 53.7422 62.4434 53.6875 62.3496 53.6406C62.2715 53.7852 62.1543 53.8164 61.998 53.7344C62.0098 53.6211 62.0645 53.5117 62.1621 53.4062ZM60.2402 53.9219C60.0801 53.7734 60.0488 53.625 60.1465 53.4766C60.2676 53.4844 60.3691 53.5469 60.4512 53.6641C60.5371 53.5703 60.6465 53.5078 60.7793 53.4766C60.877 53.6133 60.8457 53.7617 60.6855 53.9219C60.8262 54.0078 60.8574 54.125 60.7793 54.2734C60.666 54.2812 60.5566 54.2344 60.4512 54.1328C60.3848 54.2227 60.2832 54.2773 60.1465 54.2969C60.0684 54.1602 60.0996 54.0352 60.2402 53.9219ZM63.0762 53.9453C62.8926 53.7812 62.8691 53.6328 63.0059 53.5C63.0996 53.5234 63.1855 53.5859 63.2637 53.6875C63.3691 53.5859 63.502 53.5391 63.6621 53.5469C63.6855 53.6836 63.6387 53.8008 63.5215 53.8984C63.7402 54.2773 63.7012 54.3945 63.4043 54.25L63.2871 54.1562C63.2285 54.2461 63.1426 54.3008 63.0293 54.3203C62.8574 54.2148 62.873 54.0898 63.0762 53.9453ZM60.2402 54.8125C60.0723 54.6875 60.041 54.5469 60.1465 54.3906C60.2676 54.4102 60.3691 54.4727 60.4512 54.5781C60.8301 54.293 60.9395 54.332 60.7793 54.6953L60.6855 54.8359C60.7832 54.8945 60.8301 54.9883 60.8262 55.1172C60.7129 55.2266 60.5879 55.2031 60.4512 55.0469C60.3613 55.1914 60.2363 55.2227 60.0762 55.1406C60.0879 55.0273 60.1426 54.918 60.2402 54.8125ZM60.2637 55.7734C60.1113 55.6016 60.0801 55.4531 60.1699 55.3281C60.2832 55.3516 60.4004 55.4141 60.5215 55.5156C60.584 55.4062 60.6855 55.3516 60.8262 55.3516C60.9043 55.4922 60.8652 55.6172 60.709 55.7266C60.8535 55.8555 60.8848 55.9883 60.8027 56.125C60.6973 56.1328 60.5879 56.0859 60.4746 55.9844C60.4121 56.082 60.3105 56.1367 60.1699 56.1484C60.0918 56.0117 60.123 55.8867 60.2637 55.7734ZM60.3105 56.6406C60.1348 56.5391 60.1035 56.4062 60.2168 56.2422C60.3262 56.2617 60.4277 56.3242 60.5215 56.4297C60.6152 56.3047 60.7402 56.2578 60.8965 56.2891C60.9199 56.4258 60.873 56.543 60.7559 56.6406C60.9746 56.9414 60.9434 57.0664 60.6621 57.0156L60.5449 56.8984C60.2949 57.125 60.1621 57.1016 60.1465 56.8281C60.2129 56.7852 60.2676 56.7227 60.3105 56.6406ZM59.3965 57.6016C59.1895 57.4336 59.1738 57.2852 59.3496 57.1562L59.4668 57.2031C59.5059 57.2578 59.5605 57.3125 59.6309 57.3672C59.6855 57.2578 59.7871 57.1953 59.9355 57.1797C60.0176 57.3281 59.9785 57.4688 59.8184 57.6016C60.0176 57.7305 60.0332 57.8633 59.8652 58C59.7793 57.9609 59.6934 57.8984 59.6074 57.8125C59.5332 57.9258 59.4238 57.9805 59.2793 57.9766C59.209 57.8359 59.248 57.7109 59.3965 57.6016ZM60.334 57.5781C60.1113 57.4297 60.0957 57.2891 60.2871 57.1562C60.377 57.1992 60.4551 57.2695 60.5215 57.3672C60.6074 57.2578 60.7246 57.1953 60.873 57.1797C60.9512 57.3281 60.9121 57.4609 60.7559 57.5781C60.9668 57.7812 60.9668 57.9141 60.7559 57.9766C60.6816 57.9492 60.6113 57.8945 60.5449 57.8125C60.4629 57.9336 60.3535 57.9805 60.2168 57.9531C60.1309 57.832 60.1699 57.707 60.334 57.5781ZM61.0371 57.2969L61.1309 57.1797C61.2637 57.1875 61.3652 57.25 61.4355 57.3672C61.5215 57.2461 61.6465 57.1914 61.8105 57.2031C61.8457 57.3477 61.7988 57.4805 61.6699 57.6016C61.8379 57.7109 61.8613 57.8359 61.7402 57.9766C61.6309 57.9727 61.5371 57.918 61.459 57.8125C61.373 57.9336 61.2559 57.9883 61.1074 57.9766C61.0684 57.8477 61.1074 57.707 61.2246 57.5547C61.1465 57.4961 61.084 57.4102 61.0371 57.2969ZM65.0801 50.1953C64.8848 50.043 64.8613 49.8945 65.0098 49.75C65.0996 49.7773 65.1855 49.8398 65.2676 49.9375C65.3574 49.8516 65.4746 49.7969 65.6191 49.7734C65.6973 49.9219 65.6582 50.0547 65.502 50.1719C65.6973 50.3281 65.7129 50.4609 65.5488 50.5703C65.4629 50.5391 65.3691 50.4844 65.2676 50.4062C65.2051 50.5195 65.1035 50.5742 64.9629 50.5703C64.8848 50.4297 64.9238 50.3047 65.0801 50.1953ZM66.8848 50.1953C66.7012 50.0273 66.6777 49.8789 66.8145 49.75C66.916 49.7773 67.002 49.8398 67.0723 49.9375C67.2012 49.8008 67.3418 49.7617 67.4941 49.8203C67.498 49.9531 67.4434 50.0625 67.3301 50.1484C67.5645 50.5312 67.5254 50.6484 67.2129 50.5L67.0957 50.4062C67.0371 50.4961 66.9512 50.5508 66.8379 50.5703C66.6777 50.4609 66.6934 50.3359 66.8848 50.1953ZM65.9707 50.1953C65.8027 50.0586 65.7715 49.918 65.877 49.7734C65.998 49.7812 66.0996 49.8438 66.1816 49.9609C66.2676 49.8672 66.377 49.8047 66.5098 49.7734C66.6113 49.9141 66.5801 50.0547 66.416 50.1953C66.5762 50.3125 66.5996 50.4375 66.4863 50.5703C66.377 50.5664 66.2754 50.5117 66.1816 50.4062C66.1113 50.5352 66.002 50.5898 65.8535 50.5703C65.8066 50.4375 65.8457 50.3125 65.9707 50.1953ZM65.9707 51.1094C65.7754 50.9609 65.752 50.8125 65.9004 50.6641C65.9902 50.6914 66.0762 50.7539 66.1582 50.8516C66.2832 50.7109 66.4238 50.6797 66.5801 50.7578C66.5645 50.8828 66.502 50.9922 66.3926 51.0859C66.6543 51.4258 66.6152 51.5352 66.2754 51.4141C66.2441 51.3789 66.2051 51.3477 66.1582 51.3203C66.1074 51.4141 66.0215 51.4688 65.9004 51.4844C65.748 51.3672 65.7715 51.2422 65.9707 51.1094ZM65.9707 52.0469C65.7988 51.918 65.7676 51.7773 65.877 51.625C65.998 51.6445 66.0996 51.707 66.1816 51.8125C66.541 51.5391 66.6504 51.5781 66.5098 51.9297L66.416 52.0703C66.6387 52.2539 66.623 52.3789 66.3691 52.4453C66.3105 52.3789 66.2402 52.3242 66.1582 52.2812C66.0762 52.4219 65.959 52.4531 65.8066 52.375C65.8184 52.2617 65.873 52.1523 65.9707 52.0469ZM65.9941 52.9844C65.7988 52.8359 65.7754 52.6875 65.9238 52.5391C66.0137 52.5664 66.0996 52.6289 66.1816 52.7266C66.3066 52.5859 66.4473 52.5547 66.6035 52.6328C66.5879 52.7578 66.5254 52.8672 66.416 52.9609C66.6777 53.3008 66.6387 53.4102 66.2988 53.2891C66.2676 53.2539 66.2285 53.2227 66.1816 53.1953C66.1309 53.2891 66.0449 53.3438 65.9238 53.3594C65.7715 53.2422 65.7949 53.1172 65.9941 52.9844ZM65.9941 53.875C65.834 53.7812 65.7949 53.6484 65.877 53.4766C66.0059 53.4961 66.1152 53.5586 66.2051 53.6641C66.3145 53.5078 66.4473 53.4688 66.6035 53.5469C66.5957 53.6758 66.5332 53.7852 66.416 53.875C66.6973 54.2539 66.6582 54.3633 66.2988 54.2031L66.2051 54.1094C66.1426 54.2148 66.041 54.2695 65.9004 54.2734C65.7988 54.1445 65.8301 54.0117 65.9941 53.875ZM65.9707 54.8125C65.791 54.6797 65.7598 54.5391 65.877 54.3906C65.9863 54.4141 66.0801 54.4766 66.1582 54.5781C66.2754 54.4531 66.4082 54.4062 66.5566 54.4375C66.584 54.5703 66.5371 54.6797 66.416 54.7656C66.4355 54.8594 66.4902 54.9453 66.5801 55.0234C66.541 55.1992 66.4473 55.2383 66.2988 55.1406L66.1582 55.0469C66.0918 55.1484 65.998 55.1953 65.877 55.1875C65.7676 55.0781 65.7988 54.9531 65.9707 54.8125ZM65.9473 55.7734C65.7754 55.6445 65.7441 55.5039 65.8535 55.3516C65.9707 55.3672 66.0645 55.4297 66.1348 55.5391C66.2129 55.5 66.291 55.4375 66.3691 55.3516C66.5684 55.4062 66.5996 55.5156 66.4629 55.6797L66.3926 55.7969C66.6113 55.9805 66.5957 56.1055 66.3457 56.1719C66.2871 56.1055 66.2168 56.0508 66.1348 56.0078C66.0645 56.125 65.9551 56.1719 65.8066 56.1484C65.7715 56.0156 65.8184 55.8906 65.9473 55.7734ZM65.9473 56.6641C65.7832 56.5078 65.752 56.3594 65.8535 56.2188C65.9746 56.2266 66.0762 56.2891 66.1582 56.4062C66.2441 56.3125 66.3535 56.25 66.4863 56.2188C66.584 56.3594 66.5527 56.5 66.3926 56.6406C66.5488 56.7617 66.5723 56.8867 66.4629 57.0156C66.3574 57.0234 66.2559 56.9688 66.1582 56.8516C66.0996 56.957 65.998 57.0195 65.8535 57.0391C65.7754 56.9023 65.8066 56.7773 65.9473 56.6641ZM65.9707 57.5312C65.8105 57.4375 65.7715 57.3047 65.8535 57.1328C65.9785 57.1367 66.0801 57.1992 66.1582 57.3203C66.2754 57.1875 66.4082 57.1406 66.5566 57.1797C66.5801 57.3203 66.5254 57.4375 66.3926 57.5312C66.6621 57.8828 66.6309 58 66.2988 57.8828L66.1582 57.7891C66.0918 57.8906 65.998 57.9375 65.877 57.9297C65.7754 57.8086 65.8066 57.6758 65.9707 57.5312ZM66.8379 57.6016C66.6738 57.4023 66.6504 57.2461 66.7676 57.1328C66.877 57.1562 66.9707 57.2188 67.0488 57.3203L67.3301 57.1328L67.4707 57.2266C67.4512 57.3398 67.3887 57.4492 67.2832 57.5547C67.3184 57.6133 67.373 57.668 67.4473 57.7188C67.4238 57.9727 67.3223 58.0117 67.1426 57.8359C67.041 57.8086 66.9395 57.8555 66.8379 57.9766C66.6426 57.8789 66.6426 57.7539 66.8379 57.6016ZM65.0801 57.5547C64.9199 57.4609 64.8809 57.3281 64.9629 57.1562C65.0918 57.1758 65.209 57.2383 65.3145 57.3438C65.4004 57.1836 65.5254 57.1445 65.6895 57.2266C65.6699 57.3555 65.6074 57.4648 65.502 57.5547C65.6348 57.6523 65.6816 57.7695 65.6426 57.9062C65.5566 57.9766 65.4707 57.9688 65.3848 57.8828L65.2676 57.8125C65.209 57.9102 65.1152 57.957 64.9863 57.9531C64.8809 57.8242 64.9121 57.6914 65.0801 57.5547ZM69.9902 50.1484C69.7754 49.9766 69.7598 49.8281 69.9434 49.7031C70.0293 49.7422 70.1074 49.8047 70.1777 49.8906C70.3027 49.7539 70.4434 49.7227 70.5996 49.7969C70.5801 49.9258 70.5176 50.0352 70.4121 50.125C70.6855 50.5 70.6465 50.6094 70.2949 50.4531C70.2637 50.418 70.2246 50.3867 70.1777 50.3594C70.127 50.4531 70.041 50.5078 69.9199 50.5234C69.7832 50.3945 69.8066 50.2695 69.9902 50.1484ZM69.0293 50.1484C68.8418 50.0312 68.8105 49.8906 68.9355 49.7266C69.0449 49.75 69.1387 49.8125 69.2168 49.9141L69.498 49.7266L69.6387 49.8203C69.623 49.9336 69.5605 50.043 69.4512 50.1484C69.5723 50.2383 69.6191 50.3555 69.5918 50.5C69.498 50.5547 69.4121 50.5391 69.334 50.4531L69.2168 50.3828C69.1504 50.5039 69.0488 50.5508 68.9121 50.5234C68.8379 50.3945 68.877 50.2695 69.0293 50.1484ZM70.8574 50.1484C70.6934 50.0039 70.6699 49.8633 70.7871 49.7266C70.8965 49.75 70.9902 49.8125 71.0684 49.9141C71.1973 49.7695 71.3223 49.7305 71.4434 49.7969C71.4941 49.8906 71.4707 49.9766 71.373 50.0547L71.3027 50.1719C71.4238 50.2383 71.4707 50.3398 71.4434 50.4766C71.3262 50.5547 71.2012 50.5234 71.0684 50.3828C70.9824 50.5156 70.8652 50.5547 70.7168 50.5C70.709 50.375 70.7559 50.2578 70.8574 50.1484ZM72.6855 50.1719C72.4785 50.0078 72.4629 49.8594 72.6387 49.7266C72.7246 49.7656 72.8027 49.8281 72.873 49.9141C72.998 49.7773 73.1387 49.7461 73.2949 49.8203C73.2754 49.9492 73.2129 50.0586 73.1074 50.1484C73.3926 50.5273 73.3535 50.6367 72.9902 50.4766L72.8965 50.3828C72.8379 50.4883 72.7441 50.543 72.6152 50.5469C72.4707 50.4258 72.4941 50.3008 72.6855 50.1719ZM68.0918 50.1719C67.9199 50.043 67.8965 49.9023 68.0215 49.75C68.1309 49.7734 68.2246 49.8359 68.3027 49.9375C68.4277 49.8008 68.5605 49.7617 68.7012 49.8203C68.7168 49.9531 68.6621 50.0625 68.5371 50.1484C68.7715 50.5 68.7324 50.6172 68.4199 50.5L68.3027 50.4062C68.2363 50.5273 68.1348 50.5742 67.998 50.5469C67.9199 50.4297 67.9512 50.3047 68.0918 50.1719ZM71.7949 50.1719C71.623 50.043 71.5918 49.9023 71.7012 49.75C71.8105 49.7695 71.9199 49.832 72.0293 49.9375C72.0996 49.8164 72.209 49.7617 72.3574 49.7734C72.4121 49.9141 72.373 50.0391 72.2402 50.1484C72.3887 50.2891 72.4121 50.4297 72.3105 50.5703C72.2051 50.5508 72.0957 50.4961 71.9824 50.4062C71.9316 50.5 71.8379 50.5547 71.7012 50.5703C71.6035 50.4336 71.6348 50.3008 71.7949 50.1719ZM73.4355 49.8906L73.5293 49.7734C73.6582 49.7812 73.7598 49.8438 73.834 49.9609C73.9238 49.8438 74.0488 49.7891 74.209 49.7969C74.2559 49.9414 74.209 50.0664 74.0684 50.1719C74.2246 50.2969 74.248 50.4375 74.1387 50.5938C74.0293 50.5703 73.9355 50.5078 73.8574 50.4062C73.7832 50.5273 73.666 50.582 73.5059 50.5703C73.459 50.4297 73.5059 50.2969 73.6465 50.1719C73.5488 50.1016 73.4785 50.0078 73.4355 49.8906ZM70.8809 51.1094C70.6934 50.9531 70.6699 50.8047 70.8105 50.6641C70.9004 50.6914 70.9863 50.7539 71.0684 50.8516C71.1934 50.7148 71.334 50.6836 71.4902 50.7578C71.4707 50.8867 71.4082 50.9961 71.3027 51.0859C71.5449 51.3164 71.5293 51.4492 71.2559 51.4844L71.1855 51.3906L71.0918 51.3203C71.0332 51.418 70.9395 51.4727 70.8105 51.4844C70.6738 51.3633 70.6973 51.2383 70.8809 51.1094ZM67.9277 50.8281L68.0215 50.7109C68.1426 50.7188 68.2441 50.7812 68.3262 50.8984C68.416 50.7812 68.541 50.7266 68.7012 50.7344C68.748 50.8789 68.7012 51.0039 68.5605 51.1094C68.7168 51.2344 68.7402 51.375 68.6309 51.5312C68.5215 51.5078 68.4277 51.4453 68.3496 51.3438C68.2715 51.4648 68.1543 51.5195 67.998 51.5078C67.9512 51.3672 67.998 51.2344 68.1387 51.1094C68.041 51.0391 67.9707 50.9453 67.9277 50.8281ZM73.6465 51.1328C73.502 51.0078 73.4629 50.8672 73.5293 50.7109C73.6582 50.7188 73.7676 50.7812 73.8574 50.8984C73.9551 50.7578 74.0723 50.7109 74.209 50.7578C74.2715 50.8477 74.2559 50.9336 74.1621 51.0156L74.0918 51.1562C74.1895 51.2148 74.2363 51.3086 74.2324 51.4375C74.1152 51.5391 73.9902 51.5078 73.8574 51.3438C73.7715 51.4922 73.6465 51.5312 73.4824 51.4609C73.4824 51.3438 73.5371 51.2344 73.6465 51.1328ZM70.8809 52.0469C70.7168 51.9219 70.6855 51.7812 70.7871 51.625C70.9082 51.6328 71.0098 51.6953 71.0918 51.8125C71.4707 51.5273 71.5801 51.5664 71.4199 51.9297L71.3262 52.0703C71.5488 52.2539 71.5332 52.3789 71.2793 52.4453C71.2324 52.375 71.1621 52.3203 71.0684 52.2812C70.9902 52.4258 70.873 52.457 70.7168 52.375C70.7285 52.2617 70.7832 52.1523 70.8809 52.0469ZM70.8809 52.9609C70.7207 52.8242 70.6895 52.6836 70.7871 52.5391C70.9082 52.5469 71.0098 52.6094 71.0918 52.7266C71.1816 52.5977 71.2988 52.5508 71.4434 52.5859C71.5215 52.6836 71.5059 52.7773 71.3965 52.8672L71.3262 52.9844C71.4277 53.0508 71.4746 53.1445 71.4668 53.2656C71.3613 53.3672 71.2363 53.3438 71.0918 53.1953C71.0098 53.3242 70.8926 53.3633 70.7402 53.3125C70.7207 53.1875 70.7676 53.0703 70.8809 52.9609ZM70.6934 53.6406C70.709 53.5781 70.748 53.5156 70.8105 53.4531C70.9199 53.4766 71.0137 53.5391 71.0918 53.6406C71.1465 53.6172 71.1934 53.5703 71.2324 53.5C71.5137 53.4609 71.5684 53.5547 71.3965 53.7812L71.3262 53.8984C71.4316 53.9648 71.4785 54.0664 71.4668 54.2031C71.3457 54.2852 71.2207 54.2539 71.0918 54.1094C71.002 54.2578 70.877 54.2891 70.7168 54.2031V54.0625C70.8926 53.9375 70.8848 53.7969 70.6934 53.6406ZM70.8809 54.7891C70.6855 54.6719 70.6621 54.5391 70.8105 54.3906C70.9043 54.4141 70.9902 54.4766 71.0684 54.5781C71.1738 54.4766 71.3066 54.4297 71.4668 54.4375C71.502 54.5781 71.4551 54.6953 71.3262 54.7891C71.5488 55.0977 71.5176 55.2227 71.2324 55.1641L71.1152 55.0469C71.0566 55.082 71.002 55.1367 70.9512 55.2109C70.6855 55.1953 70.6621 55.0547 70.8809 54.7891ZM70.9043 55.7266C70.7207 55.5898 70.6895 55.4492 70.8105 55.3047C70.9199 55.3242 71.0137 55.3867 71.0918 55.4922C71.1895 55.3828 71.3145 55.3281 71.4668 55.3281C71.5254 55.4766 71.4785 55.6016 71.3262 55.7031C71.4941 55.8242 71.5254 55.957 71.4199 56.1016C71.3105 56.1016 71.209 56.0547 71.1152 55.9609C71.0332 56.0664 70.916 56.1133 70.7637 56.1016C70.7246 55.9609 70.7715 55.8359 70.9043 55.7266ZM70.8809 56.6641C70.7168 56.5391 70.6855 56.3984 70.7871 56.2422C70.9082 56.2617 71.0098 56.3242 71.0918 56.4297C71.1816 56.3008 71.2988 56.2539 71.4434 56.2891C71.5098 56.3789 71.502 56.4648 71.4199 56.5469L71.3262 56.6875C71.4277 56.7539 71.4746 56.8555 71.4668 56.9922C71.3457 57.0664 71.2207 57.0352 71.0918 56.8984C71.002 57.043 70.877 57.0742 70.7168 56.9922C70.7285 56.8789 70.7832 56.7695 70.8809 56.6641ZM69.9668 57.5781C69.7754 57.4609 69.7441 57.3203 69.873 57.1562C69.9824 57.1797 70.0762 57.2422 70.1543 57.3438L70.4355 57.1562L70.5762 57.25C70.5566 57.3633 70.4941 57.4727 70.3887 57.5781C70.5098 57.6641 70.5566 57.7812 70.5293 57.9297C70.4355 57.9844 70.3496 57.9688 70.2715 57.8828L70.1543 57.8125C70.0879 57.9336 69.9863 57.9805 69.8496 57.9531C69.7754 57.8242 69.8145 57.6992 69.9668 57.5781ZM70.8809 57.5781C70.6934 57.4375 70.6699 57.2969 70.8105 57.1562C70.9082 57.1836 70.9941 57.2461 71.0684 57.3438H71.1387C71.2168 57.1992 71.334 57.1602 71.4902 57.2266C71.4941 57.3594 71.4395 57.4688 71.3262 57.5547C71.5645 57.9375 71.5254 58.0547 71.209 57.9062L71.0918 57.8125C71.0254 57.9336 70.9238 57.9805 70.7871 57.9531C70.7051 57.832 70.7363 57.707 70.8809 57.5781ZM71.8184 57.6016C71.623 57.4453 71.5996 57.2969 71.748 57.1562C71.8301 57.1914 71.9316 57.2539 72.0527 57.3438C72.1152 57.2461 72.2168 57.1914 72.3574 57.1797C72.4355 57.3281 72.3965 57.4609 72.2402 57.5781C72.4355 57.7344 72.4512 57.8672 72.2871 57.9766C72.2012 57.9453 72.1074 57.8906 72.0059 57.8125C71.9434 57.9258 71.8418 57.9805 71.7012 57.9766C71.623 57.8359 71.6621 57.7109 71.8184 57.6016Z" fill="url(#paint11_linear_2709_24335)"/> -->
										<rect x="42.25" y="27.25" width="27.5" height="2.5" rx="1.25" fill="url(#paint12_linear_2709_24335)" stroke="url(#paint13_linear_2709_24335)" stroke-width="0.5"/>
										<circle cx="84.5" cy="28.5" r="1.75" fill="url(#paint14_linear_2709_24335)" stroke="url(#paint15_linear_2709_24335)" stroke-width="0.5"/>
										<circle cx="27.5" cy="28.5" r="1.75" fill="url(#paint16_linear_2709_24335)" stroke="url(#paint17_linear_2709_24335)" stroke-width="0.5"/>
										<rect x="42.25" y="82.25" width="27.5" height="2.5" rx="1.25" fill="url(#paint18_linear_2709_24335)" stroke="url(#paint19_linear_2709_24335)" stroke-width="0.5"/>
										<circle cx="84.5" cy="83.5" r="1.75" fill="url(#paint20_linear_2709_24335)" stroke="url(#paint21_linear_2709_24335)" stroke-width="0.5"/>
										<circle cx="27.5" cy="83.5" r="1.75" fill="url(#paint22_linear_2709_24335)" stroke="url(#paint23_linear_2709_24335)" stroke-width="0.5"/>
										<defs>
										<linearGradient id="paint0_linear_2709_24335" x1="56" y1="6" x2="56" y2="106" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1C2138"/>
										<stop offset="1" stop-color="#15182A"/>
										</linearGradient>
										<linearGradient id="paint1_linear_2709_24335" x1="56" y1="46.0476" x2="56" y2="73.6429" gradientUnits="userSpaceOnUse">
										<stop stop-color="#9CBCED"/>
										<stop offset="0.51" stop-color="#9CC3F2"/>
										<stop offset="1" stop-color="#82B4F0"/>
										</linearGradient>
										<linearGradient id="paint2_linear_2709_24335" x1="52.6667" y1="73.3333" x2="51.3333" y2="77.6667" gradientUnits="userSpaceOnUse">
										<stop stop-color="#222A4A"/>
										<stop offset="1" stop-color="#262E4B"/>
										</linearGradient>
										<linearGradient id="paint3_linear_2709_24335" x1="51.3333" y1="73.6667" x2="51" y2="78.3333" gradientUnits="userSpaceOnUse">
										<stop stop-color="#3A4162"/>
										<stop offset="1" stop-color="#252E54"/>
										</linearGradient>
										<linearGradient id="paint4_linear_2709_24335" x1="57.6667" y1="73.3333" x2="56.3333" y2="77.6667" gradientUnits="userSpaceOnUse">
										<stop stop-color="#222A4A"/>
										<stop offset="1" stop-color="#262E4B"/>
										</linearGradient>
										<linearGradient id="paint5_linear_2709_24335" x1="56.3333" y1="73.6667" x2="56" y2="78.3333" gradientUnits="userSpaceOnUse">
										<stop stop-color="#3A4162"/>
										<stop offset="1" stop-color="#252E54"/>
										</linearGradient>
										<linearGradient id="paint6_linear_2709_24335" x1="62.6667" y1="73.3333" x2="61.3333" y2="77.6667" gradientUnits="userSpaceOnUse">
										<stop stop-color="#222A4A"/>
										<stop offset="1" stop-color="#262E4B"/>
										</linearGradient>
										<linearGradient id="paint7_linear_2709_24335" x1="61.3333" y1="73.6667" x2="61" y2="78.3333" gradientUnits="userSpaceOnUse">
										<stop stop-color="#3A4162"/>
										<stop offset="1" stop-color="#252E54"/>
										</linearGradient>
										<linearGradient id="paint8_linear_2709_24335" x1="56.5" y1="20.3077" x2="56.5" y2="89.6923" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#181B29"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint9_linear_2709_24335" x1="56.5" y1="44" x2="56.5" y2="66" gradientUnits="userSpaceOnUse">
										<stop stop-color="#202639"/>
										<stop offset="1" stop-color="#242D46"/>
										</linearGradient>
										<linearGradient id="paint10_linear_2709_24335" x1="62.5" y1="38.2609" x2="56.9912" y2="66.0972" gradientUnits="userSpaceOnUse">
										<stop stop-color="#323D5E"/>
										<stop offset="1" stop-color="#212435"/>
										</linearGradient>
										<linearGradient id="paint11_linear_2709_24335" x1="57" y1="52.6429" x2="57" y2="59.1786" gradientUnits="userSpaceOnUse">
										<stop stop-color="#EEEEEE"/>
										<stop offset="0.51" stop-color="#C8DCF5"/>
										<stop offset="1" stop-color="#CBD5E2"/>
										</linearGradient>
										<linearGradient id="paint12_linear_2709_24335" x1="56" y1="23.7692" x2="56" y2="33.2308" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#181B29"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint13_linear_2709_24335" x1="56" y1="27" x2="56" y2="29.5" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1D202F" stop-opacity="0"/>
										<stop offset="1" stop-color="#242C45"/>
										</linearGradient>
										<linearGradient id="paint14_linear_2709_24335" x1="84.5" y1="23.7692" x2="84.5" y2="33.2308" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#181B29"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint15_linear_2709_24335" x1="84.5" y1="27" x2="84.5" y2="29.5" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1D202F" stop-opacity="0"/>
										<stop offset="1" stop-color="#242C45"/>
										</linearGradient>
										<linearGradient id="paint16_linear_2709_24335" x1="27.5" y1="23.7692" x2="27.5" y2="33.2308" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#181B29"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint17_linear_2709_24335" x1="27.5" y1="27" x2="27.5" y2="29.5" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1D202F" stop-opacity="0"/>
										<stop offset="1" stop-color="#242C45"/>
										</linearGradient>
										<linearGradient id="paint18_linear_2709_24335" x1="56" y1="78.7692" x2="56" y2="88.2308" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#181B29"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint19_linear_2709_24335" x1="56" y1="82" x2="56" y2="84.5" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1D202F" stop-opacity="0"/>
										<stop offset="1" stop-color="#242C45"/>
										</linearGradient>
										<linearGradient id="paint20_linear_2709_24335" x1="84.5" y1="78.7692" x2="84.5" y2="88.2308" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#181B29"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint21_linear_2709_24335" x1="84.5" y1="82" x2="84.5" y2="84.5" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1D202F" stop-opacity="0"/>
										<stop offset="1" stop-color="#242C45"/>
										</linearGradient>
										<linearGradient id="paint22_linear_2709_24335" x1="27.5" y1="78.7692" x2="27.5" y2="88.2308" gradientUnits="userSpaceOnUse">
										<stop stop-color="#191D2E"/>
										<stop offset="0.494234" stop-color="#181B29"/>
										<stop offset="1" stop-color="#191D2E"/>
										</linearGradient>
										<linearGradient id="paint23_linear_2709_24335" x1="27.5" y1="82" x2="27.5" y2="84.5" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1D202F" stop-opacity="0"/>
										<stop offset="1" stop-color="#242C45"/>
										</linearGradient>
										</defs>
									</svg>										
								</div>
								<div class="scroll-section__text ul-small-text main-btn">
									<div class="main-btn__text ul-small-text textMt10">Выгода</div>
									<div class="main-btn__effect"></div>
								</div>
							</li>

							<li class="scroll-section__item">
								<div class="scroll-section__icon img-wrp">
									<svg width="112" height="112" viewBox="0 0 112 112" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="0.25" y="0.25" width="111.5" height="111.5" rx="55.75" stroke="#323F5F" stroke-width="0.5"/>
										<mask id="path-2-inside-1_2805_3129" fill="white">
										<path d="M6 56C6 28.3858 28.3858 6 56 6C83.6142 6 106 28.3858 106 56C106 83.6142 83.6142 106 56 106C28.3858 106 6 83.6142 6 56Z"/>
										</mask>
										<path d="M6 56C6 28.3858 28.3858 6 56 6C83.6142 6 106 28.3858 106 56C106 83.6142 83.6142 106 56 106C28.3858 106 6 83.6142 6 56Z" fill="url(#paint0_linear_2805_3129)"/>
										<path d="M56 105.5C28.6619 105.5 6.5 83.3381 6.5 56H5.5C5.5 83.8904 28.1096 106.5 56 106.5V105.5ZM105.5 56C105.5 83.3381 83.3381 105.5 56 105.5V106.5C83.8904 106.5 106.5 83.8904 106.5 56H105.5ZM56 6.5C83.3381 6.5 105.5 28.6619 105.5 56H106.5C106.5 28.1096 83.8904 5.5 56 5.5V6.5ZM56 5.5C28.1096 5.5 5.5 28.1096 5.5 56H6.5C6.5 28.6619 28.6619 6.5 56 6.5V5.5Z" fill="#323F5F" mask="url(#path-2-inside-1_2805_3129)"/>
										<rect x="18.5" y="18.5" width="75" height="75" rx="37.5" stroke="url(#paint1_linear_2805_3129)"/>
										<rect x="19" y="19" width="74" height="74" rx="37" fill="#070917"/>
										<rect x="19" y="19" width="74" height="74" rx="37" fill="#070917"/>
										<rect x="21" y="21" width="70" height="70" rx="35" fill="#1F2338"/>
										<mask id="mask0_2805_3129" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="21" y="21" width="70" height="70">
										<rect x="21" y="21" width="70" height="70" rx="35" fill="#1F2338"/>
										</mask>
										<g mask="url(#mask0_2805_3129)">
										<circle opacity="0.3" cx="60.25" cy="35.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="59.25" cy="32.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.9" cx="85.25" cy="44.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="71.25" cy="32.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="81.25" cy="46.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="82.25" cy="36.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="65.25" cy="29.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="76.25" cy="40.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="40.25" cy="37.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="40.25" cy="43.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.9" cx="47.25" cy="39.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="43.25" cy="31.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="54.25" cy="26.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="56.25" cy="23.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="57.25" cy="26.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="65.25" cy="25.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="61.25" cy="24.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="51.25" cy="24.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="46.25" cy="24.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="64.25" cy="27.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="70.25" cy="26.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.9" cx="32.25" cy="45.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.9" cx="25.25" cy="48.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="33.25" cy="39.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="54.25" cy="33.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="51.25" cy="34.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.9" cx="45.25" cy="35.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="50.25" cy="31.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="53.25" cy="28.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="44.25" cy="28.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="41.25" cy="28.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.9" cx="38.25" cy="31.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.9" cx="41.25" cy="34.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="63.25" cy="32.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="61.25" cy="29.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.9" cx="68.25" cy="32.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.9" cx="71.25" cy="29.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="74.25" cy="35.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="34.25" cy="29.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="29.25" cy="34.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="28.25" cy="40.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="69.25" cy="35.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="77.25" cy="29.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="37.25" cy="39.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.9" cx="39.25" cy="48.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.9" cx="24.25" cy="52.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.9" cx="56.25" cy="30.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.9" cx="49.25" cy="26.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="32.25" cy="52.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="29.25" cy="49.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="28.25" cy="53.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="30.25" cy="57.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="32.25" cy="60.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="30.25" cy="61.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="32.25" cy="64.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="28.25" cy="66.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="30.25" cy="68.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="32.25" cy="67.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="28.25" cy="71.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="32.25" cy="71.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="30.25" cy="70.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="32.25" cy="55.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="31.25" cy="50.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="37.25" cy="54.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="78.25" cy="52.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="81.25" cy="51.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="78.25" cy="45.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="79.25" cy="43.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="82.25" cy="40.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="80.25" cy="33.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="36.25" cy="73.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="38.25" cy="75.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="38.25" cy="72.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="37.25" cy="70.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="36.25" cy="66.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="36.25" cy="64.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="36.25" cy="60.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="40.25" cy="50.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="36.25" cy="46.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="25.25" cy="57.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="35.25" cy="49.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.9" cx="32.25" cy="35.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="73.25" cy="51.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="85.25" cy="41.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="86.25" cy="49.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="82.25" cy="55.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="86.25" cy="53.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="88.25" cy="56.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="87.25" cy="61.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="85.25" cy="60.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="85.25" cy="54.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="70.25" cy="50.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="74.25" cy="47.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="71.25" cy="47.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="74.25" cy="44.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="77.25" cy="48.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="79.25" cy="72.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="78.25" cy="78.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="78.25" cy="82.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="80.25" cy="77.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="82.25" cy="72.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="80.25" cy="66.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="82.25" cy="63.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="83.25" cy="68.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="85.25" cy="67.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="79.25" cy="62.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="81.25" cy="60.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="83.25" cy="57.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="81.25" cy="57.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="71.25" cy="80.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="70.25" cy="76.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="70.25" cy="84.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="64.25" cy="82.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="59.25" cy="83.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="66.25" cy="75.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="65.25" cy="80.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="66.25" cy="77.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="62.25" cy="78.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="56.25" cy="82.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="57.25" cy="80.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="60.25" cy="77.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="50.25" cy="79.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="48.25" cy="76.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="48.25" cy="81.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="45.25" cy="83.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="43.25" cy="78.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="46.25" cy="78.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="45.25" cy="75.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="45.25" cy="73.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="53.25" cy="86.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="59.25" cy="85.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="52.25" cy="82.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="53.25" cy="78.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="51.25" cy="75.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="50.25" cy="73.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="74.25" cy="73.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="74.25" cy="79.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="75.25" cy="72.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="74.25" cy="65.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="76.25" cy="62.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="78.25" cy="57.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="37.25" cy="80.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="39.25" cy="83.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="41.25" cy="81.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="32.25" cy="78.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="29.25" cy="76.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="32.25" cy="74.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="70.25" cy="40.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="65.25" cy="37.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="63.25" cy="37.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="68.25" cy="39.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.1" cx="66.25" cy="40.25" r="0.25" fill="#8B9FCE"/>
										<circle opacity="0.3" cx="76.25" cy="32.25" r="0.25" fill="#8B9FCE"/>
										<g class="opacity-svg" opacity="0.2" filter="url(#filter0_f_2805_3129)">
										<circle cx="56" cy="56" r="15" fill="url(#paint2_radial_2805_3129)"/>
										</g>
										</g>
										<g filter="url(#filter1_f_2805_3129)">
										<ellipse cx="58" cy="55.1179" rx="5" ry="4.94211" fill="url(#paint3_linear_2805_3129)"/>
										</g>
										<path d="M75.75 56.0866C75.75 56.6246 75.3023 57.2102 74.3022 57.7945C73.3197 58.3685 71.8814 58.894 70.0822 59.3385C66.4876 60.2268 61.5087 60.7788 56 60.7788C50.4913 60.7788 45.5124 60.2268 41.9178 59.3385C40.1186 58.894 38.6803 58.3685 37.6978 57.7945C36.6977 57.2102 36.25 56.6246 36.25 56.0866C36.25 55.5487 36.6977 54.9631 37.6978 54.3788C38.6803 53.8048 40.1186 53.2793 41.9178 52.8347C45.5124 51.9465 50.4913 51.3945 56 51.3945C61.5087 51.3945 66.4876 51.9465 70.0822 52.8347C71.8814 53.2793 73.3197 53.8048 74.3022 54.3788C75.3023 54.9631 75.75 55.5487 75.75 56.0866Z" stroke="url(#paint4_linear_2805_3129)" stroke-width="0.5"/>
										<path d="M55.4897 72.9532C55.4413 73.3512 55.3916 73.6714 55.3418 73.9104C55.292 73.6714 55.2423 73.3512 55.1939 72.9532C55.0732 71.9615 54.9639 70.5208 54.8719 68.734C54.6881 65.1621 54.5742 60.2245 54.5742 54.7685C54.5742 49.3124 54.6881 44.3748 54.8719 40.8029C54.9639 39.0161 55.0732 37.5754 55.1939 36.5837C55.2423 36.1857 55.292 35.8655 55.3418 35.6265C55.3916 35.8655 55.4413 36.1857 55.4897 36.5837C55.6104 37.5754 55.7197 39.0161 55.8117 40.8029C55.9955 44.3748 56.1094 49.3124 56.1094 54.7685C56.1094 60.2245 55.9955 65.1621 55.8117 68.734C55.7197 70.5208 55.6104 71.9615 55.4897 72.9532Z" stroke="url(#paint5_linear_2805_3129)" stroke-width="0.5"/>
										<path d="M69.1831 71.077C68.7545 71.5006 67.9798 71.6286 66.8413 71.3826C65.7163 71.1395 64.3101 70.5453 62.7134 69.6404C59.5231 67.8325 55.6228 64.814 51.7752 61.0109C47.9275 57.2077 44.8736 53.3527 43.0445 50.1993C42.1291 48.621 41.5279 47.2311 41.282 46.1191C41.0331 44.9939 41.1625 44.2281 41.5912 43.8045C42.0198 43.3808 42.7945 43.2529 43.9329 43.4989C45.0579 43.742 46.4641 44.3362 48.0609 45.241C51.2512 47.0489 55.1514 50.0674 58.9991 53.8706C62.8468 57.6737 65.9007 61.5288 67.7297 64.6821C68.6452 66.2604 69.2463 67.6503 69.4923 68.7623C69.7412 69.8876 69.6117 70.6533 69.1831 71.077Z" stroke="url(#paint6_linear_2805_3129)" stroke-width="0.5"/>
										<path d="M42.9419 71.2034C43.3504 71.6072 44.1049 71.7229 45.2313 71.4617C46.3421 71.2042 47.7355 70.5967 49.3214 69.6805C52.49 67.8501 56.3768 64.8173 60.2248 61.0138C64.0729 57.2102 67.1412 53.3684 68.9931 50.2366C69.92 48.669 70.5347 47.2918 70.7952 46.1938C71.0594 45.0804 70.9423 44.3347 70.5338 43.9309C70.1254 43.5271 69.3709 43.4115 68.2444 43.6726C67.1336 43.9301 65.7403 44.5376 64.1543 45.4538C60.9858 47.2842 57.099 50.317 53.2509 54.1206C49.4028 57.9241 46.3345 61.7659 44.4826 64.8977C43.5557 66.4653 42.9411 67.8425 42.6805 68.9405C42.4164 70.0539 42.5334 70.7997 42.9419 71.2034Z" stroke="url(#paint7_linear_2805_3129)" stroke-width="0.5"/>
										<defs>
										<filter id="filter0_f_2805_3129" x="37" y="37" width="38" height="38" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
										<feFlood flood-opacity="0" result="BackgroundImageFix"/>
										<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
										<feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_2805_3129"/>
										</filter>
										<filter id="filter1_f_2805_3129" x="41" y="38.1758" width="34" height="33.8828" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
										<feFlood flood-opacity="0" result="BackgroundImageFix"/>
										<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
										<feGaussianBlur stdDeviation="6" result="effect1_foregroundBlur_2805_3129"/>
										</filter>
										<linearGradient id="paint0_linear_2805_3129" x1="56" y1="6" x2="56" y2="106" gradientUnits="userSpaceOnUse">
										<stop stop-color="#1C2138"/>
										<stop offset="1" stop-color="#15182A"/>
										</linearGradient>
										<linearGradient id="paint1_linear_2805_3129" x1="56" y1="46.0476" x2="56" y2="73.6429" gradientUnits="userSpaceOnUse">
										<stop stop-color="#9CBCED"/>
										<stop offset="0.51" stop-color="#9CC3F2"/>
										<stop offset="1" stop-color="#82B4F0"/>
										</linearGradient>
										<radialGradient id="paint2_radial_2805_3129" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(56 57.5179) rotate(-90) scale(18.9372 21.7125)">
										<stop stop-color="#92B8E7" stop-opacity="0"/>
										<stop offset="1" stop-color="#9DC1EB"/>
										</radialGradient>
										<linearGradient id="paint3_linear_2805_3129" x1="58" y1="53.8235" x2="58.4886" y2="60.5551" gradientUnits="userSpaceOnUse">
										<stop stop-color="#8FABF3"/>
										<stop offset="0.51" stop-color="#88B7EF"/>
										<stop offset="1" stop-color="#83B3ED"/>
										</linearGradient>
										<linearGradient id="paint4_linear_2805_3129" x1="56" y1="51.1445" x2="56" y2="61.0288" gradientUnits="userSpaceOnUse">
										<stop stop-color="white"/>
										<stop offset="0.245" stop-color="#8EA3EC" stop-opacity="0.755"/>
										<stop offset="1" stop-color="#1F2338" stop-opacity="0"/>
										</linearGradient>
										<linearGradient id="paint5_linear_2805_3129" x1="56.3594" y1="54.7685" x2="54.3242" y2="54.7685" gradientUnits="userSpaceOnUse">
										<stop stop-color="white"/>
										<stop offset="0.245" stop-color="#8EA3EC" stop-opacity="0.755"/>
										<stop offset="1" stop-color="#1F2338" stop-opacity="0"/>
										</linearGradient>
										<linearGradient id="paint6_linear_2805_3129" x1="59.1769" y1="53.6948" x2="51.6856" y2="61.2739" gradientUnits="userSpaceOnUse">
										<stop stop-color="white"/>
										<stop offset="0.245" stop-color="#8EA3EC" stop-opacity="0.755"/>
										<stop offset="1" stop-color="#1F2338" stop-opacity="0"/>
										</linearGradient>
										<linearGradient id="paint7_linear_2805_3129" x1="53.0731" y1="53.9448" x2="60.3173" y2="61.2739" gradientUnits="userSpaceOnUse">
										<stop stop-color="white"/>
										<stop offset="0.245" stop-color="#8EA3EC" stop-opacity="0.755"/>
										<stop offset="1" stop-color="#1F2338" stop-opacity="0"/>
										</linearGradient>
										</defs>
									</svg>														
								</div>
								<div class="scroll-section__text ul-small-text main-btn">
									<div class="main-btn__text ul-small-text textMt10">Поддержка</div>
									<div class="main-btn__effect"></div>
								</div>
							</li>
						</ul>

						<div class="scroll-section__list-bg img-wrp">
							<svg width="781" height="388" viewBox="0 0 781 388" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g opacity="0.15" filter="url(#filter0_f_2805_1880)">
								<path d="M394.306 220L317 60L472 60L394.306 220Z" fill="#8298E9"></path>
								</g>
								<g opacity="0.15" filter="url(#filter1_f_2805_1880)">
								<path d="M394.694 60L472 220L317 220L394.694 60Z" fill="#8298E9"></path>
								</g>
								<rect x="632.25" y="251.25" width="99.5" height="41.5" rx="3.75" fill="#1F2338" stroke="#323F5F" stroke-width="0.5"></rect>
								<rect x="638.75" y="259.25" width="7.5" height="2.5" rx="1.25" transform="rotate(90 638.75 259.25)" fill="url(#paint0_linear_2805_1880)" stroke="url(#paint1_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="638.75" y="276.25" width="7.5" height="2.5" rx="1.25" transform="rotate(90 638.75 276.25)" fill="url(#paint2_linear_2805_1880)" stroke="url(#paint3_linear_2805_1880)" stroke-width="0.5"></rect>
								<circle cx="637.5" cy="271.5" r="1.75" fill="url(#paint4_linear_2805_1880)" stroke="url(#paint5_linear_2805_1880)" stroke-width="0.5"></circle>
								<rect x="727.75" y="259.25" width="7.5" height="2.5" rx="1.25" transform="rotate(90 727.75 259.25)" fill="url(#paint6_linear_2805_1880)" stroke="url(#paint7_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="727.75" y="276.25" width="7.5" height="2.5" rx="1.25" transform="rotate(90 727.75 276.25)" fill="url(#paint8_linear_2805_1880)" stroke="url(#paint9_linear_2805_1880)" stroke-width="0.5"></rect>
								<circle cx="726.5" cy="271.5" r="1.75" fill="url(#paint10_linear_2805_1880)" stroke="url(#paint11_linear_2805_1880)" stroke-width="0.5"></circle>
								<rect x="683.25" y="277.25" width="3.5" height="3.5" transform="rotate(-180 683.25 277.25)" fill="url(#paint12_linear_2805_1880)" stroke="url(#paint13_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="683.25" y="285.25" width="3.5" height="3.5" transform="rotate(-180 683.25 285.25)" fill="url(#paint14_linear_2805_1880)" stroke="url(#paint15_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="683.25" y="269.25" width="3.5" height="3.5" transform="rotate(-180 683.25 269.25)" fill="url(#paint16_linear_2805_1880)" stroke="url(#paint17_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="679.25" y="265.25" width="3.5" height="3.5" transform="rotate(-180 679.25 265.25)" fill="url(#paint18_linear_2805_1880)" stroke="url(#paint19_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="687.25" y="265.25" width="3.5" height="3.5" transform="rotate(-180 687.25 265.25)" fill="url(#paint20_linear_2805_1880)" stroke="url(#paint21_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="683.25" y="261.25" width="3.5" height="3.5" transform="rotate(-180 683.25 261.25)" fill="url(#paint22_linear_2805_1880)" stroke="url(#paint23_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect opacity="0.3" x="687.25" y="281.25" width="3.5" height="3.5" transform="rotate(-180 687.25 281.25)" fill="url(#paint24_linear_2805_1880)" stroke="url(#paint25_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="687.25" y="273.25" width="3.5" height="3.5" transform="rotate(-180 687.25 273.25)" fill="url(#paint26_linear_2805_1880)" stroke="url(#paint27_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect opacity="0.3" x="695.25" y="273.25" width="3.5" height="3.5" transform="rotate(-180 695.25 273.25)" fill="url(#paint28_linear_2805_1880)" stroke="url(#paint29_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect opacity="0.3" x="679.25" y="281.25" width="3.5" height="3.5" transform="rotate(-180 679.25 281.25)" fill="url(#paint30_linear_2805_1880)" stroke="url(#paint31_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="679.25" y="273.25" width="3.5" height="3.5" transform="rotate(-180 679.25 273.25)" fill="url(#paint32_linear_2805_1880)" stroke="url(#paint33_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect opacity="0.3" x="671.25" y="273.25" width="3.5" height="3.5" transform="rotate(-180 671.25 273.25)" fill="url(#paint34_linear_2805_1880)" stroke="url(#paint35_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect opacity="0.6" x="663.25" y="269.25" width="3.5" height="3.5" transform="rotate(-180 663.25 269.25)" fill="url(#paint36_linear_2805_1880)" stroke="url(#paint37_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect opacity="0.6" x="-0.25" y="0.25" width="3.5" height="3.5" transform="matrix(1 8.74228e-08 8.74228e-08 -1 701 269.5)" fill="url(#paint38_linear_2805_1880)" stroke="url(#paint39_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="675.25" y="269.25" width="3.5" height="3.5" transform="rotate(-180 675.25 269.25)" fill="url(#paint40_linear_2805_1880)" stroke="url(#paint41_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="667.25" y="265.25" width="3.5" height="3.5" transform="rotate(-180 667.25 265.25)" fill="url(#paint42_linear_2805_1880)" stroke="url(#paint43_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="-0.25" y="0.25" width="3.5" height="3.5" transform="matrix(1 8.74228e-08 8.74228e-08 -1 697 265.5)" fill="url(#paint44_linear_2805_1880)" stroke="url(#paint45_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect opacity="0.3" x="671.25" y="261.25" width="3.5" height="3.5" transform="rotate(-180 671.25 261.25)" fill="url(#paint46_linear_2805_1880)" stroke="url(#paint47_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect opacity="0.3" x="-0.25" y="0.25" width="3.5" height="3.5" transform="matrix(1 8.74228e-08 8.74228e-08 -1 693 261.5)" fill="url(#paint48_linear_2805_1880)" stroke="url(#paint49_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="691.25" y="269.25" width="3.5" height="3.5" transform="rotate(-180 691.25 269.25)" fill="url(#paint50_linear_2805_1880)" stroke="url(#paint51_linear_2805_1880)" stroke-width="0.5"></rect>
								<line x1="53.75" y1="233" x2="53.75" y2="153" stroke="url(#paint52_linear_2805_1880)" stroke-width="0.5"></line>
								<line x1="57.75" y1="233" x2="57.75" y2="153" stroke="url(#paint53_linear_2805_1880)" stroke-width="0.5"></line>
								<line x1="61.75" y1="233" x2="61.75" y2="153" stroke="url(#paint54_linear_2805_1880)" stroke-width="0.5"></line>
								<rect x="60.5" y="233" width="2.5" height="2.5" transform="rotate(-90 60.5 233)" fill="url(#paint55_linear_2805_1880)"></rect>
								<g opacity="0.6">
								<rect x="64.5" y="193" width="2.5" height="2.5" transform="rotate(-90 64.5 193)" fill="url(#paint56_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="68.5" y="203" width="2.5" height="2.5" transform="rotate(-90 68.5 203)" fill="url(#paint57_linear_2805_1880)"></rect>
								</g>
								<line x1="65.75" y1="233" x2="65.75" y2="153" stroke="url(#paint58_linear_2805_1880)" stroke-width="0.5"></line>
								<line x1="69.75" y1="233" x2="69.75" y2="153" stroke="url(#paint59_linear_2805_1880)" stroke-width="0.5"></line>
								<line x1="73.75" y1="233" x2="73.75" y2="153" stroke="url(#paint60_linear_2805_1880)" stroke-width="0.5"></line>
								<line x1="689.75" y1="233" x2="689.75" y2="153" stroke="url(#paint61_linear_2805_1880)" stroke-width="0.5"></line>
								<line x1="693.75" y1="233" x2="693.75" y2="153" stroke="url(#paint62_linear_2805_1880)" stroke-width="0.5"></line>
								<line x1="697.75" y1="233" x2="697.75" y2="153" stroke="url(#paint63_linear_2805_1880)" stroke-width="0.5"></line>
								<rect x="696.5" y="233" width="2.5" height="2.5" transform="rotate(-90 696.5 233)" fill="url(#paint64_linear_2805_1880)"></rect>
								<g opacity="0.6">
								<rect x="700.5" y="193" width="2.5" height="2.5" transform="rotate(-90 700.5 193)" fill="url(#paint65_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="704.5" y="203" width="2.5" height="2.5" transform="rotate(-90 704.5 203)" fill="url(#paint66_linear_2805_1880)"></rect>
								</g>
								<line x1="701.75" y1="233" x2="701.75" y2="153" stroke="url(#paint67_linear_2805_1880)" stroke-width="0.5"></line>
								<line x1="705.75" y1="233" x2="705.75" y2="153" stroke="url(#paint68_linear_2805_1880)" stroke-width="0.5"></line>
								<line x1="709.75" y1="233" x2="709.75" y2="153" stroke="url(#paint69_linear_2805_1880)" stroke-width="0.5"></line>
								<rect x="114" y="278.75" width="30.5" height="22.5" transform="rotate(-90 114 278.75)" stroke="#212941" stroke-width="0.5"></rect>
								<rect x="115.75" y="277" width="27" height="19" transform="rotate(-90 115.75 277)" fill="#191E36"></rect>
								<rect x="110" y="276.75" width="2.5" height="2.5" transform="rotate(-90 110 276.75)" fill="url(#paint70_linear_2805_1880)"></rect>
								<rect x="137.75" y="276.75" width="2.5" height="2.5" transform="rotate(-90 137.75 276.75)" fill="url(#paint71_linear_2805_1880)"></rect>
								<rect x="110" y="252.75" width="2.5" height="2.5" transform="rotate(-90 110 252.75)" fill="url(#paint72_linear_2805_1880)"></rect>
								<rect x="137.75" y="252.75" width="2.5" height="2.5" transform="rotate(-90 137.75 252.75)" fill="url(#paint73_linear_2805_1880)"></rect>
								<g opacity="0.6">
								<rect x="775" y="80" width="2" height="2" fill="url(#paint74_linear_2805_1880)"></rect>
								<rect x="779" y="80" width="2" height="2" fill="url(#paint75_linear_2805_1880)"></rect>
								<rect x="775" y="76" width="2" height="2" fill="url(#paint76_linear_2805_1880)"></rect>
								<rect x="779" y="76" width="2" height="2" fill="url(#paint77_linear_2805_1880)"></rect>
								<rect x="775" y="72" width="2" height="2" fill="url(#paint78_linear_2805_1880)"></rect>
								<rect x="779" y="72" width="2" height="2" fill="url(#paint79_linear_2805_1880)"></rect>
								<rect x="775" y="68" width="2" height="2" fill="url(#paint80_linear_2805_1880)"></rect>
								<rect x="779" y="68" width="2" height="2" fill="url(#paint81_linear_2805_1880)"></rect>
								<rect x="775" y="64" width="2" height="2" fill="url(#paint82_linear_2805_1880)"></rect>
								<rect x="779" y="64" width="2" height="2" fill="url(#paint83_linear_2805_1880)"></rect>
								<rect x="775" y="84" width="2" height="2" fill="url(#paint84_linear_2805_1880)"></rect>
								<rect x="779" y="84" width="2" height="2" fill="url(#paint85_linear_2805_1880)"></rect>
								<rect x="775" y="88" width="2" height="2" fill="url(#paint86_linear_2805_1880)"></rect>
								<rect x="779" y="88" width="2" height="2" fill="url(#paint87_linear_2805_1880)"></rect>
								<rect x="775" y="92" width="2" height="2" fill="url(#paint88_linear_2805_1880)"></rect>
								<rect x="779" y="92" width="2" height="2" fill="url(#paint89_linear_2805_1880)"></rect>
								<rect x="775" y="96" width="2" height="2" fill="url(#paint90_linear_2805_1880)"></rect>
								<rect x="779" y="96" width="2" height="2" fill="url(#paint91_linear_2805_1880)"></rect>
								<rect x="775" y="100" width="2" height="2" fill="url(#paint92_linear_2805_1880)"></rect>
								<rect x="779" y="100" width="2" height="2" fill="url(#paint93_linear_2805_1880)"></rect>
								<rect x="775" y="104" width="2" height="2" fill="url(#paint94_linear_2805_1880)"></rect>
								<rect x="779" y="104" width="2" height="2" fill="url(#paint95_linear_2805_1880)"></rect>
								<rect x="775" y="108" width="2" height="2" fill="url(#paint96_linear_2805_1880)"></rect>
								<rect x="779" y="108" width="2" height="2" fill="url(#paint97_linear_2805_1880)"></rect>
								<rect x="775" y="112" width="2" height="2" fill="url(#paint98_linear_2805_1880)"></rect>
								<rect x="779" y="112" width="2" height="2" fill="url(#paint99_linear_2805_1880)"></rect>
								<rect x="775" y="116" width="2" height="2" fill="url(#paint100_linear_2805_1880)"></rect>
								<rect x="779" y="116" width="2" height="2" fill="url(#paint101_linear_2805_1880)"></rect>
								<rect x="775" y="120" width="2" height="2" fill="url(#paint102_linear_2805_1880)"></rect>
								<rect x="779" y="120" width="2" height="2" fill="url(#paint103_linear_2805_1880)"></rect>
								<rect x="775" y="124" width="2" height="2" fill="url(#paint104_linear_2805_1880)"></rect>
								<rect x="779" y="124" width="2" height="2" fill="url(#paint105_linear_2805_1880)"></rect>
								<rect x="775" y="128" width="2" height="2" fill="url(#paint106_linear_2805_1880)"></rect>
								<rect x="779" y="128" width="2" height="2" fill="url(#paint107_linear_2805_1880)"></rect>
								<rect x="775" y="132" width="2" height="2" fill="url(#paint108_linear_2805_1880)"></rect>
								<rect x="779" y="132" width="2" height="2" fill="url(#paint109_linear_2805_1880)"></rect>
								<rect x="775" y="136" width="2" height="2" fill="url(#paint110_linear_2805_1880)"></rect>
								<rect x="779" y="136" width="2" height="2" fill="url(#paint111_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="714" y="134" width="2" height="2" fill="url(#paint112_linear_2805_1880)"></rect>
								<rect x="718" y="134" width="2" height="2" fill="url(#paint113_linear_2805_1880)"></rect>
								<rect x="714" y="138" width="2" height="2" fill="url(#paint114_linear_2805_1880)"></rect>
								<rect x="718" y="138" width="2" height="2" fill="url(#paint115_linear_2805_1880)"></rect>
								<rect x="714" y="142" width="2" height="2" fill="url(#paint116_linear_2805_1880)"></rect>
								<rect x="718" y="142" width="2" height="2" fill="url(#paint117_linear_2805_1880)"></rect>
								<rect x="714" y="146" width="2" height="2" fill="url(#paint118_linear_2805_1880)"></rect>
								<rect x="718" y="146" width="2" height="2" fill="url(#paint119_linear_2805_1880)"></rect>
								<rect x="714" y="150" width="2" height="2" fill="url(#paint120_linear_2805_1880)"></rect>
								<rect x="718" y="150" width="2" height="2" fill="url(#paint121_linear_2805_1880)"></rect>
								<rect x="714" y="154" width="2" height="2" fill="url(#paint122_linear_2805_1880)"></rect>
								<rect x="718" y="154" width="2" height="2" fill="url(#paint123_linear_2805_1880)"></rect>
								<rect x="714" y="158" width="2" height="2" fill="url(#paint124_linear_2805_1880)"></rect>
								<rect x="718" y="158" width="2" height="2" fill="url(#paint125_linear_2805_1880)"></rect>
								<rect x="722" y="134" width="2" height="2" fill="url(#paint126_linear_2805_1880)"></rect>
								<rect x="726" y="134" width="2" height="2" fill="url(#paint127_linear_2805_1880)"></rect>
								<rect x="722" y="138" width="2" height="2" fill="url(#paint128_linear_2805_1880)"></rect>
								<rect x="726" y="138" width="2" height="2" fill="url(#paint129_linear_2805_1880)"></rect>
								<rect x="722" y="142" width="2" height="2" fill="url(#paint130_linear_2805_1880)"></rect>
								<rect x="726" y="142" width="2" height="2" fill="url(#paint131_linear_2805_1880)"></rect>
								<rect x="722" y="146" width="2" height="2" fill="url(#paint132_linear_2805_1880)"></rect>
								<rect x="726" y="146" width="2" height="2" fill="url(#paint133_linear_2805_1880)"></rect>
								<rect x="722" y="150" width="2" height="2" fill="url(#paint134_linear_2805_1880)"></rect>
								<rect x="726" y="150" width="2" height="2" fill="url(#paint135_linear_2805_1880)"></rect>
								</g>
								<rect x="731" y="51" width="2" height="2" fill="url(#paint136_linear_2805_1880)"></rect>
								<rect x="746" y="51" width="2" height="2" fill="url(#paint137_linear_2805_1880)"></rect>
								<rect x="734" y="51" width="2" height="2" fill="url(#paint138_linear_2805_1880)"></rect>
								<rect x="749" y="51" width="2" height="2" fill="url(#paint139_linear_2805_1880)"></rect>
								<rect x="737" y="51" width="2" height="2" fill="url(#paint140_linear_2805_1880)"></rect>
								<rect x="752" y="51" width="2" height="2" fill="url(#paint141_linear_2805_1880)"></rect>
								<rect x="740" y="51" width="2" height="2" fill="url(#paint142_linear_2805_1880)"></rect>
								<rect x="755" y="51" width="2" height="2" fill="url(#paint143_linear_2805_1880)"></rect>
								<rect x="743" y="51" width="2" height="2" fill="url(#paint144_linear_2805_1880)"></rect>
								<rect x="758" y="51" width="2" height="2" fill="url(#paint145_linear_2805_1880)"></rect>
								<rect x="731" y="54" width="2" height="2" fill="url(#paint146_linear_2805_1880)"></rect>
								<rect x="746" y="54" width="2" height="2" fill="url(#paint147_linear_2805_1880)"></rect>
								<rect x="734" y="54" width="2" height="2" fill="url(#paint148_linear_2805_1880)"></rect>
								<rect x="749" y="54" width="2" height="2" fill="url(#paint149_linear_2805_1880)"></rect>
								<rect x="737" y="54" width="2" height="2" fill="url(#paint150_linear_2805_1880)"></rect>
								<rect x="752" y="54" width="2" height="2" fill="url(#paint151_linear_2805_1880)"></rect>
								<rect x="740" y="54" width="2" height="2" fill="url(#paint152_linear_2805_1880)"></rect>
								<rect x="755" y="54" width="2" height="2" fill="url(#paint153_linear_2805_1880)"></rect>
								<rect x="743" y="54" width="2" height="2" fill="url(#paint154_linear_2805_1880)"></rect>
								<rect x="758" y="54" width="2" height="2" fill="url(#paint155_linear_2805_1880)"></rect>
								<rect x="731" y="57" width="2" height="2" fill="url(#paint156_linear_2805_1880)"></rect>
								<rect x="746" y="57" width="2" height="2" fill="url(#paint157_linear_2805_1880)"></rect>
								<rect x="734" y="57" width="2" height="2" fill="url(#paint158_linear_2805_1880)"></rect>
								<rect x="749" y="57" width="2" height="2" fill="url(#paint159_linear_2805_1880)"></rect>
								<rect x="737" y="57" width="2" height="2" fill="url(#paint160_linear_2805_1880)"></rect>
								<rect x="752" y="57" width="2" height="2" fill="url(#paint161_linear_2805_1880)"></rect>
								<rect x="740" y="57" width="2" height="2" fill="url(#paint162_linear_2805_1880)"></rect>
								<rect x="755" y="57" width="2" height="2" fill="url(#paint163_linear_2805_1880)"></rect>
								<rect x="743" y="57" width="2" height="2" fill="url(#paint164_linear_2805_1880)"></rect>
								<rect x="758" y="57" width="2" height="2" fill="url(#paint165_linear_2805_1880)"></rect>
								<rect x="8" y="49" width="2" height="2" transform="rotate(90 8 49)" fill="url(#paint166_linear_2805_1880)"></rect>
								<rect x="8" y="64" width="2" height="2" transform="rotate(90 8 64)" fill="url(#paint167_linear_2805_1880)"></rect>
								<rect x="8" y="52" width="2" height="2" transform="rotate(90 8 52)" fill="url(#paint168_linear_2805_1880)"></rect>
								<rect x="8" y="67" width="2" height="2" transform="rotate(90 8 67)" fill="url(#paint169_linear_2805_1880)"></rect>
								<rect x="8" y="55" width="2" height="2" transform="rotate(90 8 55)" fill="url(#paint170_linear_2805_1880)"></rect>
								<rect x="8" y="70" width="2" height="2" transform="rotate(90 8 70)" fill="url(#paint171_linear_2805_1880)"></rect>
								<rect x="8" y="58" width="2" height="2" transform="rotate(90 8 58)" fill="url(#paint172_linear_2805_1880)"></rect>
								<rect x="8" y="73" width="2" height="2" transform="rotate(90 8 73)" fill="url(#paint173_linear_2805_1880)"></rect>
								<rect x="8" y="61" width="2" height="2" transform="rotate(90 8 61)" fill="url(#paint174_linear_2805_1880)"></rect>
								<rect x="8" y="76" width="2" height="2" transform="rotate(90 8 76)" fill="url(#paint175_linear_2805_1880)"></rect>
								<rect x="5" y="49" width="2" height="2" transform="rotate(90 5 49)" fill="url(#paint176_linear_2805_1880)"></rect>
								<rect x="5" y="64" width="2" height="2" transform="rotate(90 5 64)" fill="url(#paint177_linear_2805_1880)"></rect>
								<rect x="5" y="52" width="2" height="2" transform="rotate(90 5 52)" fill="url(#paint178_linear_2805_1880)"></rect>
								<rect x="5" y="67" width="2" height="2" transform="rotate(90 5 67)" fill="url(#paint179_linear_2805_1880)"></rect>
								<rect x="5" y="55" width="2" height="2" transform="rotate(90 5 55)" fill="url(#paint180_linear_2805_1880)"></rect>
								<rect x="5" y="70" width="2" height="2" transform="rotate(90 5 70)" fill="url(#paint181_linear_2805_1880)"></rect>
								<rect x="5" y="58" width="2" height="2" transform="rotate(90 5 58)" fill="url(#paint182_linear_2805_1880)"></rect>
								<rect x="5" y="73" width="2" height="2" transform="rotate(90 5 73)" fill="url(#paint183_linear_2805_1880)"></rect>
								<rect x="5" y="61" width="2" height="2" transform="rotate(90 5 61)" fill="url(#paint184_linear_2805_1880)"></rect>
								<rect x="5" y="76" width="2" height="2" transform="rotate(90 5 76)" fill="url(#paint185_linear_2805_1880)"></rect>
								<rect x="2" y="49" width="2" height="2" transform="rotate(90 2 49)" fill="url(#paint186_linear_2805_1880)"></rect>
								<rect x="2" y="64" width="2" height="2" transform="rotate(90 2 64)" fill="url(#paint187_linear_2805_1880)"></rect>
								<rect x="2" y="52" width="2" height="2" transform="rotate(90 2 52)" fill="url(#paint188_linear_2805_1880)"></rect>
								<rect x="2" y="67" width="2" height="2" transform="rotate(90 2 67)" fill="url(#paint189_linear_2805_1880)"></rect>
								<rect x="2" y="55" width="2" height="2" transform="rotate(90 2 55)" fill="url(#paint190_linear_2805_1880)"></rect>
								<rect x="2" y="70" width="2" height="2" transform="rotate(90 2 70)" fill="url(#paint191_linear_2805_1880)"></rect>
								<rect x="2" y="58" width="2" height="2" transform="rotate(90 2 58)" fill="url(#paint192_linear_2805_1880)"></rect>
								<rect x="2" y="73" width="2" height="2" transform="rotate(90 2 73)" fill="url(#paint193_linear_2805_1880)"></rect>
								<rect x="2" y="61" width="2" height="2" transform="rotate(90 2 61)" fill="url(#paint194_linear_2805_1880)"></rect>
								<rect x="2" y="76" width="2" height="2" transform="rotate(90 2 76)" fill="url(#paint195_linear_2805_1880)"></rect>
								<g opacity="0.6">
								<rect x="542" y="99" width="8" height="8" fill="url(#paint196_linear_2805_1880)"></rect>
								<rect x="550" y="109" width="2.5" height="8" transform="rotate(90 550 109)" fill="url(#paint197_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="552" y="99" width="8" height="8" fill="url(#paint198_linear_2805_1880)"></rect>
								<rect x="560" y="109" width="2.5" height="8" transform="rotate(90 560 109)" fill="url(#paint199_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="36" y="322" width="8" height="8" transform="rotate(-90 36 322)" fill="url(#paint200_linear_2805_1880)"></rect>
								<rect x="46" y="314" width="2.5" height="8" fill="url(#paint201_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="36" y="312" width="8" height="8" transform="rotate(-90 36 312)" fill="url(#paint202_linear_2805_1880)"></rect>
								<rect x="46" y="304" width="2.5" height="8" fill="url(#paint203_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="15" y="76" width="8" height="8" transform="rotate(-90 15 76)" fill="url(#paint204_linear_2805_1880)"></rect>
								<rect x="25" y="68" width="2.5" height="8" fill="url(#paint205_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="15" y="66" width="8" height="8" transform="rotate(-90 15 66)" fill="url(#paint206_linear_2805_1880)"></rect>
								<rect x="25" y="58" width="2.5" height="8" fill="url(#paint207_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="55" y="288" width="1" height="4" transform="rotate(-180 55 288)" fill="url(#paint208_linear_2805_1880)"></rect>
								<rect x="57" y="288" width="1" height="4" transform="rotate(-180 57 288)" fill="url(#paint209_linear_2805_1880)"></rect>
								<rect x="59" y="288" width="1" height="4" transform="rotate(-180 59 288)" fill="url(#paint210_linear_2805_1880)"></rect>
								<rect x="61" y="288" width="1" height="4" transform="rotate(-180 61 288)" fill="url(#paint211_linear_2805_1880)"></rect>
								<rect x="63" y="288" width="1" height="4" transform="rotate(-180 63 288)" fill="url(#paint212_linear_2805_1880)"></rect>
								<rect x="65" y="288" width="1" height="4" transform="rotate(-180 65 288)" fill="url(#paint213_linear_2805_1880)"></rect>
								<rect x="67" y="288" width="1" height="4" transform="rotate(-180 67 288)" fill="url(#paint214_linear_2805_1880)"></rect>
								<rect x="69" y="288" width="1" height="4" transform="rotate(-180 69 288)" fill="url(#paint215_linear_2805_1880)"></rect>
								<rect x="71" y="288" width="1" height="4" transform="rotate(-180 71 288)" fill="url(#paint216_linear_2805_1880)"></rect>
								<rect x="73" y="288" width="1" height="4" transform="rotate(-180 73 288)" fill="url(#paint217_linear_2805_1880)"></rect>
								<rect x="75" y="288" width="1" height="4" transform="rotate(-180 75 288)" fill="url(#paint218_linear_2805_1880)"></rect>
								<rect x="77" y="288" width="1" height="4" transform="rotate(-180 77 288)" fill="url(#paint219_linear_2805_1880)"></rect>
								<rect x="79" y="288" width="1" height="4" transform="rotate(-180 79 288)" fill="url(#paint220_linear_2805_1880)"></rect>
								<rect x="81" y="288" width="1" height="4" transform="rotate(-180 81 288)" fill="url(#paint221_linear_2805_1880)"></rect>
								<rect x="83" y="288" width="1" height="4" transform="rotate(-180 83 288)" fill="url(#paint222_linear_2805_1880)"></rect>
								<rect x="85" y="288" width="1" height="4" transform="rotate(-180 85 288)" fill="url(#paint223_linear_2805_1880)"></rect>
								<rect x="87" y="288" width="1" height="4" transform="rotate(-180 87 288)" fill="url(#paint224_linear_2805_1880)"></rect>
								<rect x="89" y="288" width="1" height="4" transform="rotate(-180 89 288)" fill="url(#paint225_linear_2805_1880)"></rect>
								<rect x="91" y="288" width="1" height="4" transform="rotate(-180 91 288)" fill="url(#paint226_linear_2805_1880)"></rect>
								<rect x="93" y="288" width="1" height="4" transform="rotate(-180 93 288)" fill="url(#paint227_linear_2805_1880)"></rect>
								<rect x="95" y="288" width="1" height="4" transform="rotate(-180 95 288)" fill="url(#paint228_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="55" y="294" width="1" height="4" transform="rotate(-180 55 294)" fill="url(#paint229_linear_2805_1880)"></rect>
								<rect x="57" y="294" width="1" height="4" transform="rotate(-180 57 294)" fill="url(#paint230_linear_2805_1880)"></rect>
								<rect x="59" y="294" width="1" height="4" transform="rotate(-180 59 294)" fill="url(#paint231_linear_2805_1880)"></rect>
								<rect x="61" y="294" width="1" height="4" transform="rotate(-180 61 294)" fill="url(#paint232_linear_2805_1880)"></rect>
								<rect x="63" y="294" width="1" height="4" transform="rotate(-180 63 294)" fill="url(#paint233_linear_2805_1880)"></rect>
								<rect x="65" y="294" width="1" height="4" transform="rotate(-180 65 294)" fill="url(#paint234_linear_2805_1880)"></rect>
								<rect x="67" y="294" width="1" height="4" transform="rotate(-180 67 294)" fill="url(#paint235_linear_2805_1880)"></rect>
								<rect x="69" y="294" width="1" height="4" transform="rotate(-180 69 294)" fill="url(#paint236_linear_2805_1880)"></rect>
								<rect x="71" y="294" width="1" height="4" transform="rotate(-180 71 294)" fill="url(#paint237_linear_2805_1880)"></rect>
								<rect x="73" y="294" width="1" height="4" transform="rotate(-180 73 294)" fill="url(#paint238_linear_2805_1880)"></rect>
								<rect x="75" y="294" width="1" height="4" transform="rotate(-180 75 294)" fill="url(#paint239_linear_2805_1880)"></rect>
								<rect x="77" y="294" width="1" height="4" transform="rotate(-180 77 294)" fill="url(#paint240_linear_2805_1880)"></rect>
								<rect x="79" y="294" width="1" height="4" transform="rotate(-180 79 294)" fill="url(#paint241_linear_2805_1880)"></rect>
								<rect x="81" y="294" width="1" height="4" transform="rotate(-180 81 294)" fill="url(#paint242_linear_2805_1880)"></rect>
								<rect x="83" y="294" width="1" height="4" transform="rotate(-180 83 294)" fill="url(#paint243_linear_2805_1880)"></rect>
								<rect x="85" y="294" width="1" height="4" transform="rotate(-180 85 294)" fill="url(#paint244_linear_2805_1880)"></rect>
								<rect x="87" y="294" width="1" height="4" transform="rotate(-180 87 294)" fill="url(#paint245_linear_2805_1880)"></rect>
								<rect x="89" y="294" width="1" height="4" transform="rotate(-180 89 294)" fill="url(#paint246_linear_2805_1880)"></rect>
								<rect x="91" y="294" width="1" height="4" transform="rotate(-180 91 294)" fill="url(#paint247_linear_2805_1880)"></rect>
								<rect x="93" y="294" width="1" height="4" transform="rotate(-180 93 294)" fill="url(#paint248_linear_2805_1880)"></rect>
								<rect x="95" y="294" width="1" height="4" transform="rotate(-180 95 294)" fill="url(#paint249_linear_2805_1880)"></rect>
								</g>
								<rect width="2" height="8" transform="matrix(4.37114e-08 1 1 -4.37114e-08 119 365)" fill="url(#paint250_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(-1 0 0 1 127 368)" fill="url(#paint251_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(-1 0 0 1 121 368)" fill="url(#paint252_linear_2805_1880)"></rect>
								<path d="M123 370L123 378.5C123 379.605 122.105 380.5 121 380.5L97.5 380.5L92 374.5L73 374.5" stroke="#212941" stroke-width="0.5"></path>
								<rect width="2" height="8" transform="matrix(1 8.74228e-08 8.74228e-08 -1 67 379)" fill="url(#paint253_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(-1.31134e-07 1 1 1.31134e-07 70 371)" fill="url(#paint254_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(-1.31134e-07 1 1 1.31134e-07 70 377)" fill="url(#paint255_linear_2805_1880)"></rect>
								<rect width="2" height="8" transform="matrix(4.37114e-08 1 1 -4.37114e-08 125 365)" fill="url(#paint256_linear_2805_1880)"></rect>
								<rect width="2" height="14" transform="matrix(4.37114e-08 1 1 -4.37114e-08 119 367)" fill="url(#paint257_linear_2805_1880)"></rect>
								<rect width="2" height="14" transform="matrix(1 -8.74228e-08 -8.74228e-08 -1 69 385)" fill="url(#paint258_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(-1 0 0 1 133 368)" fill="url(#paint259_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(-1 0 0 1 127 368)" fill="url(#paint260_linear_2805_1880)"></rect>
								<path d="M129 370L129 385C129 386.105 128.105 387 127 387L94.5 387L89 381L73 381" stroke="#212941" stroke-width="0.5"></path>
								<rect width="2" height="8" transform="matrix(1 8.74228e-08 8.74228e-08 -1 67 385)" fill="url(#paint261_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(-1.31134e-07 1 1 1.31134e-07 70 377)" fill="url(#paint262_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(-1.31134e-07 1 1 1.31134e-07 70 383)" fill="url(#paint263_linear_2805_1880)"></rect>
								<rect x="135" y="324" width="2" height="2" transform="rotate(90 135 324)" fill="url(#paint264_linear_2805_1880)"></rect>
								<rect x="132" y="324" width="2" height="2" transform="rotate(90 132 324)" fill="url(#paint265_linear_2805_1880)"></rect>
								<rect x="138" y="324" width="2" height="2" transform="rotate(90 138 324)" fill="url(#paint266_linear_2805_1880)"></rect>
								<rect x="129" y="324" width="2" height="2" transform="rotate(90 129 324)" fill="url(#paint267_linear_2805_1880)"></rect>
								<rect x="27" y="261" width="3" height="2" transform="rotate(-180 27 261)" fill="url(#paint268_linear_2805_1880)"></rect>
								<rect x="27" y="258" width="3" height="2" transform="rotate(-180 27 258)" fill="url(#paint269_linear_2805_1880)"></rect>
								<rect x="27" y="264" width="3" height="2" transform="rotate(-180 27 264)" fill="url(#paint270_linear_2805_1880)"></rect>
								<rect x="27" y="255" width="3" height="2" transform="rotate(-180 27 255)" fill="url(#paint271_linear_2805_1880)"></rect>
								<rect x="255" y="201" width="2" height="2" fill="#222A4A"></rect>
								<rect x="255" y="161" width="2" height="2" fill="#222A4A"></rect>
								<rect x="237.992" y="75" width="2" height="2" fill="#222A4A"></rect>
								<rect width="2" height="2" transform="matrix(-1 0 0 1 551 75)" fill="#222A4A"></rect>
								<rect x="236.992" y="67" width="2" height="2" fill="#222A4A"></rect>
								<rect width="2" height="2" transform="matrix(-1 0 0 1 552 67)" fill="#222A4A"></rect>
								<rect x="235.992" y="59" width="2" height="2" fill="#222A4A"></rect>
								<rect width="2" height="2" transform="matrix(-1 0 0 1 553 59)" fill="#222A4A"></rect>
								<rect x="153" y="167.5" width="2" height="2" fill="#222A4A"></rect>
								<rect x="156" y="167.5" width="2" height="2" fill="#222A4A"></rect>
								<rect x="159" y="167.5" width="2" height="2" fill="#222A4A"></rect>
								<g opacity="0.6">
								<rect x="259.5" y="171" width="8" height="8" transform="rotate(90 259.5 171)" fill="url(#paint272_linear_2805_1880)"></rect>
								<rect x="249.5" y="179" width="2.5" height="8" transform="rotate(-180 249.5 179)" fill="url(#paint273_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="259.5" y="181" width="8" height="8" transform="rotate(90 259.5 181)" fill="url(#paint274_linear_2805_1880)"></rect>
								<rect x="249.5" y="189" width="2.5" height="8" transform="rotate(-180 249.5 189)" fill="url(#paint275_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="616" y="93" width="1" height="4" transform="rotate(-180 616 93)" fill="url(#paint276_linear_2805_1880)"></rect>
								<rect x="621" y="98" width="1" height="4" transform="rotate(-180 621 98)" fill="url(#paint277_linear_2805_1880)"></rect>
								<rect x="618" y="93" width="1" height="4" transform="rotate(-180 618 93)" fill="url(#paint278_linear_2805_1880)"></rect>
								<rect x="623" y="98" width="1" height="4" transform="rotate(-180 623 98)" fill="url(#paint279_linear_2805_1880)"></rect>
								<rect x="620" y="93" width="1" height="4" transform="rotate(-180 620 93)" fill="url(#paint280_linear_2805_1880)"></rect>
								<rect x="625" y="98" width="1" height="4" transform="rotate(-180 625 98)" fill="url(#paint281_linear_2805_1880)"></rect>
								<rect x="627" y="98" width="1" height="4" transform="rotate(-180 627 98)" fill="url(#paint282_linear_2805_1880)"></rect>
								<rect x="629" y="98" width="1" height="4" transform="rotate(-180 629 98)" fill="url(#paint283_linear_2805_1880)"></rect>
								<rect x="631" y="98" width="1" height="4" transform="rotate(-180 631 98)" fill="url(#paint284_linear_2805_1880)"></rect>
								<rect x="633" y="98" width="1" height="4" transform="rotate(-180 633 98)" fill="url(#paint285_linear_2805_1880)"></rect>
								<rect x="635" y="98" width="1" height="4" transform="rotate(-180 635 98)" fill="url(#paint286_linear_2805_1880)"></rect>
								<rect x="637" y="98" width="1" height="4" transform="rotate(-180 637 98)" fill="url(#paint287_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="296" y="337" width="2" height="2" fill="url(#paint288_linear_2805_1880)"></rect>
								<rect x="300" y="337" width="2" height="2" fill="url(#paint289_linear_2805_1880)"></rect>
								<rect x="296" y="341" width="2" height="2" fill="url(#paint290_linear_2805_1880)"></rect>
								<rect x="300" y="341" width="2" height="2" fill="url(#paint291_linear_2805_1880)"></rect>
								<rect x="296" y="345" width="2" height="2" fill="url(#paint292_linear_2805_1880)"></rect>
								<rect x="300" y="345" width="2" height="2" fill="url(#paint293_linear_2805_1880)"></rect>
								<rect x="296" y="349" width="2" height="2" fill="url(#paint294_linear_2805_1880)"></rect>
								<rect x="300" y="349" width="2" height="2" fill="url(#paint295_linear_2805_1880)"></rect>
								<rect x="296" y="353" width="2" height="2" fill="url(#paint296_linear_2805_1880)"></rect>
								<rect x="300" y="353" width="2" height="2" fill="url(#paint297_linear_2805_1880)"></rect>
								<rect x="296" y="357" width="2" height="2" fill="url(#paint298_linear_2805_1880)"></rect>
								<rect x="300" y="357" width="2" height="2" fill="url(#paint299_linear_2805_1880)"></rect>
								<rect x="296" y="361" width="2" height="2" fill="url(#paint300_linear_2805_1880)"></rect>
								<rect x="300" y="361" width="2" height="2" fill="url(#paint301_linear_2805_1880)"></rect>
								<rect x="304" y="337" width="2" height="2" fill="url(#paint302_linear_2805_1880)"></rect>
								<rect x="308" y="337" width="2" height="2" fill="url(#paint303_linear_2805_1880)"></rect>
								<rect x="304" y="341" width="2" height="2" fill="url(#paint304_linear_2805_1880)"></rect>
								<rect x="308" y="341" width="2" height="2" fill="url(#paint305_linear_2805_1880)"></rect>
								<rect x="304" y="345" width="2" height="2" fill="url(#paint306_linear_2805_1880)"></rect>
								<rect x="308" y="345" width="2" height="2" fill="url(#paint307_linear_2805_1880)"></rect>
								<rect x="304" y="349" width="2" height="2" fill="url(#paint308_linear_2805_1880)"></rect>
								<rect x="308" y="349" width="2" height="2" fill="url(#paint309_linear_2805_1880)"></rect>
								<rect x="304" y="353" width="2" height="2" fill="url(#paint310_linear_2805_1880)"></rect>
								<rect x="308" y="353" width="2" height="2" fill="url(#paint311_linear_2805_1880)"></rect>
								<rect x="312" y="337" width="2" height="2" fill="url(#paint312_linear_2805_1880)"></rect>
								<rect x="316" y="337" width="2" height="2" fill="url(#paint313_linear_2805_1880)"></rect>
								<rect x="312" y="341" width="2" height="2" fill="url(#paint314_linear_2805_1880)"></rect>
								<rect x="316" y="341" width="2" height="2" fill="url(#paint315_linear_2805_1880)"></rect>
								<rect x="312" y="345" width="2" height="2" fill="url(#paint316_linear_2805_1880)"></rect>
								<rect x="316" y="345" width="2" height="2" fill="url(#paint317_linear_2805_1880)"></rect>
								</g>
								<rect x="186.75" y="217.25" width="30.5" height="22.5" transform="rotate(180 186.75 217.25)" stroke="#212941" stroke-width="0.5"></rect>
								<rect x="185" y="215.5" width="27" height="19" transform="rotate(180 185 215.5)" fill="#191E36"></rect>
								<rect x="184.75" y="221.25" width="2.5" height="2.5" transform="rotate(180 184.75 221.25)" fill="url(#paint318_linear_2805_1880)"></rect>
								<rect x="184.75" y="193.5" width="2.5" height="2.5" transform="rotate(180 184.75 193.5)" fill="url(#paint319_linear_2805_1880)"></rect>
								<rect x="160.75" y="221.25" width="2.5" height="2.5" transform="rotate(180 160.75 221.25)" fill="url(#paint320_linear_2805_1880)"></rect>
								<rect x="160.75" y="193.5" width="2.5" height="2.5" transform="rotate(180 160.75 193.5)" fill="url(#paint321_linear_2805_1880)"></rect>
								<line x1="633" y1="352.75" x2="745" y2="352.75" stroke="url(#paint322_linear_2805_1880)" stroke-width="0.5"></line>
								<line x1="633" y1="356.75" x2="745" y2="356.75" stroke="url(#paint323_linear_2805_1880)" stroke-width="0.5"></line>
								<line x1="633" y1="360.75" x2="745" y2="360.75" stroke="url(#paint324_linear_2805_1880)" stroke-width="0.5"></line>
								<rect x="633" y="355.5" width="2.5" height="2.5" fill="url(#paint325_linear_2805_1880)"></rect>
								<rect x="649" y="355.5" width="2.5" height="2.5" fill="url(#paint326_linear_2805_1880)"></rect>
								<rect x="665" y="359.5" width="2.5" height="2.5" fill="url(#paint327_linear_2805_1880)"></rect>
								<g opacity="0.6">
								<rect x="705" y="363.5" width="2.5" height="2.5" fill="url(#paint328_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="695" y="367.5" width="2.5" height="2.5" fill="url(#paint329_linear_2805_1880)"></rect>
								</g>
								<line x1="633" y1="364.75" x2="745" y2="364.75" stroke="url(#paint330_linear_2805_1880)" stroke-width="0.5"></line>
								<line x1="633" y1="368.75" x2="745" y2="368.75" stroke="url(#paint331_linear_2805_1880)" stroke-width="0.5"></line>
								<line x1="633" y1="372.75" x2="745" y2="372.75" stroke="url(#paint332_linear_2805_1880)" stroke-width="0.5"></line>
								<g opacity="0.6">
								<rect x="541" y="264" width="1" height="4" transform="rotate(90 541 264)" fill="url(#paint333_linear_2805_1880)"></rect>
								<rect x="541" y="262" width="1" height="4" transform="rotate(90 541 262)" fill="url(#paint334_linear_2805_1880)"></rect>
								<rect x="541" y="260" width="1" height="4" transform="rotate(90 541 260)" fill="url(#paint335_linear_2805_1880)"></rect>
								<rect x="541" y="258" width="1" height="4" transform="rotate(90 541 258)" fill="url(#paint336_linear_2805_1880)"></rect>
								<rect x="541" y="256" width="1" height="4" transform="rotate(90 541 256)" fill="url(#paint337_linear_2805_1880)"></rect>
								<rect x="541" y="254" width="1" height="4" transform="rotate(90 541 254)" fill="url(#paint338_linear_2805_1880)"></rect>
								<rect x="541" y="252" width="1" height="4" transform="rotate(90 541 252)" fill="url(#paint339_linear_2805_1880)"></rect>
								<rect x="541" y="250" width="1" height="4" transform="rotate(90 541 250)" fill="url(#paint340_linear_2805_1880)"></rect>
								<rect x="541" y="248" width="1" height="4" transform="rotate(90 541 248)" fill="url(#paint341_linear_2805_1880)"></rect>
								<rect x="541" y="246" width="1" height="4" transform="rotate(90 541 246)" fill="url(#paint342_linear_2805_1880)"></rect>
								<rect x="541" y="244" width="1" height="4" transform="rotate(90 541 244)" fill="url(#paint343_linear_2805_1880)"></rect>
								<rect x="541" y="242" width="1" height="4" transform="rotate(90 541 242)" fill="url(#paint344_linear_2805_1880)"></rect>
								<rect x="541" y="240" width="1" height="4" transform="rotate(90 541 240)" fill="url(#paint345_linear_2805_1880)"></rect>
								<rect x="541" y="238" width="1" height="4" transform="rotate(90 541 238)" fill="url(#paint346_linear_2805_1880)"></rect>
								<rect x="541" y="236" width="1" height="4" transform="rotate(90 541 236)" fill="url(#paint347_linear_2805_1880)"></rect>
								<rect x="541" y="234" width="1" height="4" transform="rotate(90 541 234)" fill="url(#paint348_linear_2805_1880)"></rect>
								<rect x="541" y="232" width="1" height="4" transform="rotate(90 541 232)" fill="url(#paint349_linear_2805_1880)"></rect>
								<rect x="541" y="230" width="1" height="4" transform="rotate(90 541 230)" fill="url(#paint350_linear_2805_1880)"></rect>
								<rect x="541" y="228" width="1" height="4" transform="rotate(90 541 228)" fill="url(#paint351_linear_2805_1880)"></rect>
								<rect x="541" y="226" width="1" height="4" transform="rotate(90 541 226)" fill="url(#paint352_linear_2805_1880)"></rect>
								<rect x="541" y="224" width="1" height="4" transform="rotate(90 541 224)" fill="url(#paint353_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="246.5" y="256" width="2.5" height="2.5" transform="rotate(90 246.5 256)" fill="url(#paint354_linear_2805_1880)"></rect>
								<rect x="242.5" y="261" width="2.5" height="8" transform="rotate(-180 242.5 261)" fill="url(#paint355_linear_2805_1880)"></rect>
								<rect x="238.5" y="261" width="2.5" height="8" transform="rotate(-180 238.5 261)" fill="url(#paint356_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="750" y="235" width="1" height="4" transform="rotate(90 750 235)" fill="url(#paint357_linear_2805_1880)"></rect>
								<rect x="755" y="230" width="1" height="4" transform="rotate(90 755 230)" fill="url(#paint358_linear_2805_1880)"></rect>
								<rect x="750" y="233" width="1" height="4" transform="rotate(90 750 233)" fill="url(#paint359_linear_2805_1880)"></rect>
								<rect x="755" y="228" width="1" height="4" transform="rotate(90 755 228)" fill="url(#paint360_linear_2805_1880)"></rect>
								<rect x="750" y="231" width="1" height="4" transform="rotate(90 750 231)" fill="url(#paint361_linear_2805_1880)"></rect>
								<rect x="755" y="226" width="1" height="4" transform="rotate(90 755 226)" fill="url(#paint362_linear_2805_1880)"></rect>
								<rect x="755" y="224" width="1" height="4" transform="rotate(90 755 224)" fill="url(#paint363_linear_2805_1880)"></rect>
								<rect x="755" y="222" width="1" height="4" transform="rotate(90 755 222)" fill="url(#paint364_linear_2805_1880)"></rect>
								<rect x="755" y="220" width="1" height="4" transform="rotate(90 755 220)" fill="url(#paint365_linear_2805_1880)"></rect>
								<rect x="755" y="218" width="1" height="4" transform="rotate(90 755 218)" fill="url(#paint366_linear_2805_1880)"></rect>
								<rect x="760" y="218" width="1" height="4" transform="rotate(90 760 218)" fill="url(#paint367_linear_2805_1880)"></rect>
								<rect x="755" y="216" width="1" height="4" transform="rotate(90 755 216)" fill="url(#paint368_linear_2805_1880)"></rect>
								<rect x="760" y="216" width="1" height="4" transform="rotate(90 760 216)" fill="url(#paint369_linear_2805_1880)"></rect>
								<rect x="755" y="214" width="1" height="4" transform="rotate(90 755 214)" fill="url(#paint370_linear_2805_1880)"></rect>
								</g>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M322 240H323L323 236H322V240ZM327 240H326V236H327L327 240ZM330 240H331V236H330V240ZM335 240H334V236H335V240ZM338 240H339V236H338V240ZM342 240H343V236H342V240Z" fill="url(#paint371_linear_2805_1880)"></path>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M466 237L465 237L465 241L466 241L466 237ZM461 237L462 237L462 241L461 241L461 237ZM458 237L457 237L457 241L458 241L458 237ZM453 237L454 237L454 241L453 241L453 237ZM450 237L449 237L449 241L450 241L450 237ZM446 237L445 237L445 241L446 241L446 237Z" fill="url(#paint372_linear_2805_1880)"></path>
								<g opacity="0.6">
								<rect x="307.992" y="68" width="2" height="2" fill="url(#paint373_linear_2805_1880)"></rect>
								<rect x="311.992" y="68" width="2" height="2" fill="url(#paint374_linear_2805_1880)"></rect>
								<rect x="307.992" y="72" width="2" height="2" fill="url(#paint375_linear_2805_1880)"></rect>
								<rect x="311.992" y="72" width="2" height="2" fill="url(#paint376_linear_2805_1880)"></rect>
								<rect x="315.992" y="72" width="2" height="2" fill="url(#paint377_linear_2805_1880)"></rect>
								<rect x="319.992" y="72" width="2" height="2" fill="url(#paint378_linear_2805_1880)"></rect>
								<rect x="315.992" y="68" width="2" height="2" fill="url(#paint379_linear_2805_1880)"></rect>
								<rect x="319.992" y="68" width="2" height="2" fill="url(#paint380_linear_2805_1880)"></rect>
								</g>
								<g opacity="0.6">
								<rect x="90" y="105" width="2" height="2" transform="rotate(90 90 105)" fill="url(#paint381_linear_2805_1880)"></rect>
								<rect x="90" y="109" width="2" height="2" transform="rotate(90 90 109)" fill="url(#paint382_linear_2805_1880)"></rect>
								<rect x="86" y="105" width="2" height="2" transform="rotate(90 86 105)" fill="url(#paint383_linear_2805_1880)"></rect>
								<rect x="86" y="109" width="2" height="2" transform="rotate(90 86 109)" fill="url(#paint384_linear_2805_1880)"></rect>
								<rect x="86" y="113" width="2" height="2" transform="rotate(90 86 113)" fill="url(#paint385_linear_2805_1880)"></rect>
								<rect x="86" y="117" width="2" height="2" transform="rotate(90 86 117)" fill="url(#paint386_linear_2805_1880)"></rect>
								<rect x="90" y="113" width="2" height="2" transform="rotate(90 90 113)" fill="url(#paint387_linear_2805_1880)"></rect>
								<rect x="90" y="117" width="2" height="2" transform="rotate(90 90 117)" fill="url(#paint388_linear_2805_1880)"></rect>
								</g>
								<circle cx="746" cy="158" r="7.75" fill="url(#paint389_linear_2805_1880)" stroke="url(#paint390_linear_2805_1880)" stroke-width="0.5"></circle>
								<circle cx="746" cy="158" r="1" fill="url(#paint391_linear_2805_1880)"></circle>
								<circle cx="547" cy="207" r="7.75" fill="url(#paint392_linear_2805_1880)" stroke="url(#paint393_linear_2805_1880)" stroke-width="0.5"></circle>
								<circle cx="547" cy="207" r="1" fill="url(#paint394_linear_2805_1880)"></circle>
								<circle cx="767" cy="278" r="7.75" fill="url(#paint395_linear_2805_1880)" stroke="url(#paint396_linear_2805_1880)" stroke-width="0.5"></circle>
								<circle cx="767" cy="278" r="1" fill="url(#paint397_linear_2805_1880)"></circle>
								<circle cx="114" cy="209" r="7.75" fill="url(#paint398_linear_2805_1880)" stroke="url(#paint399_linear_2805_1880)" stroke-width="0.5"></circle>
								<circle cx="114" cy="209" r="1" fill="url(#paint400_linear_2805_1880)"></circle>
								<rect width="2" height="8" transform="matrix(1 0 0 -1 614 189)" fill="url(#paint401_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(-4.37114e-08 1 1 4.37114e-08 617 181)" fill="url(#paint402_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(-4.37114e-08 1 1 4.37114e-08 617 187)" fill="url(#paint403_linear_2805_1880)"></rect>
								<path d="M619 185L627.5 185C628.605 185 629.5 185.895 629.5 187L629.5 210.5L623.5 216L623.5 235" stroke="#212941" stroke-width="0.5"></path>
								<rect width="2" height="8" transform="matrix(1.31134e-07 -1 -1 -1.31134e-07 628 241)" fill="url(#paint404_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(1 1.74846e-07 1.74846e-07 -1 620 238)" fill="url(#paint405_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(1 1.74846e-07 1.74846e-07 -1 626 238)" fill="url(#paint406_linear_2805_1880)"></rect>
								<rect width="2" height="8" transform="matrix(1 0 0 -1 614 183)" fill="url(#paint407_linear_2805_1880)"></rect>
								<rect width="2" height="14" transform="matrix(1 0 0 -1 616 189)" fill="url(#paint408_linear_2805_1880)"></rect>
								<rect width="2" height="14" transform="matrix(-4.37114e-08 -1 -1 4.37114e-08 634 239)" fill="url(#paint409_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(-4.37114e-08 1 1 4.37114e-08 617 175)" fill="url(#paint410_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(-4.37114e-08 1 1 4.37114e-08 617 181)" fill="url(#paint411_linear_2805_1880)"></rect>
								<path d="M619 179L634 179C635.105 179 636 179.895 636 181L636 213.5L630 219L630 235" stroke="#212941" stroke-width="0.5"></path>
								<rect width="2" height="8" transform="matrix(1.31134e-07 -1 -1 -1.31134e-07 634 241)" fill="url(#paint412_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(1 1.74846e-07 1.74846e-07 -1 626 238)" fill="url(#paint413_linear_2805_1880)"></rect>
								<rect width="2" height="2" transform="matrix(1 1.74846e-07 1.74846e-07 -1 632 238)" fill="url(#paint414_linear_2805_1880)"></rect>
								<rect x="533.75" y="132.75" width="2.5" height="2.5" fill="url(#paint415_linear_2805_1880)" stroke="url(#paint416_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="545.75" y="132.75" width="2.5" height="2.5" fill="url(#paint417_linear_2805_1880)" stroke="url(#paint418_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="537.75" y="132.75" width="2.5" height="2.5" fill="url(#paint419_linear_2805_1880)" stroke="url(#paint420_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="549.75" y="132.75" width="2.5" height="2.5" fill="url(#paint421_linear_2805_1880)" stroke="url(#paint422_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="541.75" y="132.75" width="2.5" height="2.5" fill="url(#paint423_linear_2805_1880)" stroke="url(#paint424_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="553.75" y="132.75" width="2.5" height="2.5" fill="url(#paint425_linear_2805_1880)" stroke="url(#paint426_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="533.75" y="140.75" width="2.5" height="2.5" fill="url(#paint427_linear_2805_1880)" stroke="url(#paint428_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="545.75" y="140.75" width="2.5" height="2.5" fill="url(#paint429_linear_2805_1880)" stroke="url(#paint430_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="537.75" y="140.75" width="2.5" height="2.5" fill="url(#paint431_linear_2805_1880)" stroke="url(#paint432_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect opacity="0.3" x="549.75" y="140.75" width="2.5" height="2.5" fill="url(#paint433_linear_2805_1880)" stroke="url(#paint434_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect x="541.75" y="140.75" width="2.5" height="2.5" fill="url(#paint435_linear_2805_1880)" stroke="url(#paint436_linear_2805_1880)" stroke-width="0.5"></rect>
								<rect opacity="0.3" x="553.75" y="140.75" width="2.5" height="2.5" fill="url(#paint437_linear_2805_1880)" stroke="url(#paint438_linear_2805_1880)" stroke-width="0.5"></rect>
								<defs>
								<filter id="filter0_f_2805_1880" x="257" y="0" width="275" height="280" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
								<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
								<feGaussianBlur stdDeviation="30" result="effect1_foregroundBlur_2805_1880"></feGaussianBlur>
								</filter>
								<filter id="filter1_f_2805_1880" x="257" y="0" width="275" height="280" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
								<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
								<feGaussianBlur stdDeviation="30" result="effect1_foregroundBlur_2805_1880"></feGaussianBlur>
								</filter>
								<linearGradient id="paint0_linear_2805_1880" x1="643" y1="255.769" x2="643" y2="265.231" gradientUnits="userSpaceOnUse">
								<stop stop-color="#191D2E"></stop>
								<stop offset="0.494234" stop-color="#181B29"></stop>
								<stop offset="1" stop-color="#191D2E"></stop>
								</linearGradient>
								<linearGradient id="paint1_linear_2805_1880" x1="643" y1="259" x2="643" y2="262" gradientUnits="userSpaceOnUse">
								<stop stop-color="#202639"></stop>
								<stop offset="1" stop-color="#242D46"></stop>
								</linearGradient>
								<linearGradient id="paint2_linear_2805_1880" x1="643" y1="272.769" x2="643" y2="282.231" gradientUnits="userSpaceOnUse">
								<stop stop-color="#191D2E"></stop>
								<stop offset="0.494234" stop-color="#181B29"></stop>
								<stop offset="1" stop-color="#191D2E"></stop>
								</linearGradient>
								<linearGradient id="paint3_linear_2805_1880" x1="643" y1="276" x2="643" y2="279" gradientUnits="userSpaceOnUse">
								<stop stop-color="#202639"></stop>
								<stop offset="1" stop-color="#242D46"></stop>
								</linearGradient>
								<linearGradient id="paint4_linear_2805_1880" x1="637.5" y1="266.769" x2="637.5" y2="276.231" gradientUnits="userSpaceOnUse">
								<stop stop-color="#191D2E"></stop>
								<stop offset="0.494234" stop-color="#181B29"></stop>
								<stop offset="1" stop-color="#191D2E"></stop>
								</linearGradient>
								<linearGradient id="paint5_linear_2805_1880" x1="637.5" y1="270" x2="637.5" y2="273" gradientUnits="userSpaceOnUse">
								<stop stop-color="#202639"></stop>
								<stop offset="1" stop-color="#242D46"></stop>
								</linearGradient>
								<linearGradient id="paint6_linear_2805_1880" x1="732" y1="255.769" x2="732" y2="265.231" gradientUnits="userSpaceOnUse">
								<stop stop-color="#191D2E"></stop>
								<stop offset="0.494234" stop-color="#181B29"></stop>
								<stop offset="1" stop-color="#191D2E"></stop>
								</linearGradient>
								<linearGradient id="paint7_linear_2805_1880" x1="732" y1="259" x2="732" y2="262" gradientUnits="userSpaceOnUse">
								<stop stop-color="#202639"></stop>
								<stop offset="1" stop-color="#242D46"></stop>
								</linearGradient>
								<linearGradient id="paint8_linear_2805_1880" x1="732" y1="272.769" x2="732" y2="282.231" gradientUnits="userSpaceOnUse">
								<stop stop-color="#191D2E"></stop>
								<stop offset="0.494234" stop-color="#181B29"></stop>
								<stop offset="1" stop-color="#191D2E"></stop>
								</linearGradient>
								<linearGradient id="paint9_linear_2805_1880" x1="732" y1="276" x2="732" y2="279" gradientUnits="userSpaceOnUse">
								<stop stop-color="#202639"></stop>
								<stop offset="1" stop-color="#242D46"></stop>
								</linearGradient>
								<linearGradient id="paint10_linear_2805_1880" x1="726.5" y1="266.769" x2="726.5" y2="276.231" gradientUnits="userSpaceOnUse">
								<stop stop-color="#191D2E"></stop>
								<stop offset="0.494234" stop-color="#181B29"></stop>
								<stop offset="1" stop-color="#191D2E"></stop>
								</linearGradient>
								<linearGradient id="paint11_linear_2805_1880" x1="726.5" y1="270" x2="726.5" y2="273" gradientUnits="userSpaceOnUse">
								<stop stop-color="#202639"></stop>
								<stop offset="1" stop-color="#242D46"></stop>
								</linearGradient>
								<linearGradient id="paint12_linear_2805_1880" x1="685.5" y1="274.5" x2="683.5" y2="281" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint13_linear_2805_1880" x1="683.5" y1="275" x2="683" y2="282" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint14_linear_2805_1880" x1="685.5" y1="282.5" x2="683.5" y2="289" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint15_linear_2805_1880" x1="683.5" y1="283" x2="683" y2="290" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint16_linear_2805_1880" x1="685.5" y1="266.5" x2="683.5" y2="273" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint17_linear_2805_1880" x1="683.5" y1="267" x2="683" y2="274" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint18_linear_2805_1880" x1="681.5" y1="262.5" x2="679.5" y2="269" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint19_linear_2805_1880" x1="679.5" y1="263" x2="679" y2="270" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint20_linear_2805_1880" x1="689.5" y1="262.5" x2="687.5" y2="269" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint21_linear_2805_1880" x1="687.5" y1="263" x2="687" y2="270" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint22_linear_2805_1880" x1="685.5" y1="258.5" x2="683.5" y2="265" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint23_linear_2805_1880" x1="683.5" y1="259" x2="683" y2="266" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint24_linear_2805_1880" x1="689.5" y1="278.5" x2="687.5" y2="285" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint25_linear_2805_1880" x1="687.5" y1="279" x2="687" y2="286" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint26_linear_2805_1880" x1="689.5" y1="270.5" x2="687.5" y2="277" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint27_linear_2805_1880" x1="687.5" y1="271" x2="687" y2="278" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint28_linear_2805_1880" x1="697.5" y1="270.5" x2="695.5" y2="277" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint29_linear_2805_1880" x1="695.5" y1="271" x2="695" y2="278" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint30_linear_2805_1880" x1="681.5" y1="278.5" x2="679.5" y2="285" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint31_linear_2805_1880" x1="679.5" y1="279" x2="679" y2="286" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint32_linear_2805_1880" x1="681.5" y1="270.5" x2="679.5" y2="277" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint33_linear_2805_1880" x1="679.5" y1="271" x2="679" y2="278" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint34_linear_2805_1880" x1="673.5" y1="270.5" x2="671.5" y2="277" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint35_linear_2805_1880" x1="671.5" y1="271" x2="671" y2="278" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint36_linear_2805_1880" x1="665.5" y1="266.5" x2="663.5" y2="273" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint37_linear_2805_1880" x1="663.5" y1="267" x2="663" y2="274" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint38_linear_2805_1880" x1="2.5" y1="-2.5" x2="0.5" y2="4" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint39_linear_2805_1880" x1="0.5" y1="-2" x2="-2.27243e-07" y2="5" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint40_linear_2805_1880" x1="677.5" y1="266.5" x2="675.5" y2="273" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint41_linear_2805_1880" x1="675.5" y1="267" x2="675" y2="274" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint42_linear_2805_1880" x1="669.5" y1="262.5" x2="667.5" y2="269" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint43_linear_2805_1880" x1="667.5" y1="263" x2="667" y2="270" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint44_linear_2805_1880" x1="2.5" y1="-2.5" x2="0.5" y2="4" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint45_linear_2805_1880" x1="0.5" y1="-2" x2="-2.27243e-07" y2="5" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint46_linear_2805_1880" x1="673.5" y1="258.5" x2="671.5" y2="265" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint47_linear_2805_1880" x1="671.5" y1="259" x2="671" y2="266" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint48_linear_2805_1880" x1="2.5" y1="-2.5" x2="0.5" y2="4" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint49_linear_2805_1880" x1="0.5" y1="-2" x2="-2.27243e-07" y2="5" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint50_linear_2805_1880" x1="693.5" y1="266.5" x2="691.5" y2="273" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint51_linear_2805_1880" x1="691.5" y1="267" x2="691" y2="274" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint52_linear_2805_1880" x1="54" y1="233" x2="54" y2="153.845" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint53_linear_2805_1880" x1="58" y1="233" x2="58" y2="153.845" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint54_linear_2805_1880" x1="62" y1="233" x2="62" y2="153.845" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint55_linear_2805_1880" x1="62.5833" y1="230.917" x2="60.9167" y2="236.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint56_linear_2805_1880" x1="66.5833" y1="190.917" x2="64.9167" y2="196.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint57_linear_2805_1880" x1="70.5833" y1="200.917" x2="68.9167" y2="206.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint58_linear_2805_1880" x1="66" y1="233" x2="66" y2="153.845" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint59_linear_2805_1880" x1="70" y1="233" x2="70" y2="153.845" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint60_linear_2805_1880" x1="74" y1="233" x2="74" y2="153.845" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint61_linear_2805_1880" x1="690" y1="233" x2="690" y2="153.845" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint62_linear_2805_1880" x1="694" y1="233" x2="694" y2="153.845" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint63_linear_2805_1880" x1="698" y1="233" x2="698" y2="153.845" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint64_linear_2805_1880" x1="698.583" y1="230.917" x2="696.917" y2="236.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint65_linear_2805_1880" x1="702.583" y1="190.917" x2="700.917" y2="196.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint66_linear_2805_1880" x1="706.583" y1="200.917" x2="704.917" y2="206.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint67_linear_2805_1880" x1="702" y1="233" x2="702" y2="153.845" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint68_linear_2805_1880" x1="706" y1="233" x2="706" y2="153.845" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint69_linear_2805_1880" x1="710" y1="233" x2="710" y2="153.845" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint70_linear_2805_1880" x1="112.083" y1="274.667" x2="110.417" y2="280.083" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint71_linear_2805_1880" x1="139.833" y1="274.667" x2="138.167" y2="280.083" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint72_linear_2805_1880" x1="112.083" y1="250.667" x2="110.417" y2="256.083" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint73_linear_2805_1880" x1="139.833" y1="250.667" x2="138.167" y2="256.083" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint74_linear_2805_1880" x1="776.667" y1="78.3333" x2="775.333" y2="82.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint75_linear_2805_1880" x1="780.667" y1="78.3333" x2="779.333" y2="82.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint76_linear_2805_1880" x1="776.667" y1="74.3333" x2="775.333" y2="78.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint77_linear_2805_1880" x1="780.667" y1="74.3333" x2="779.333" y2="78.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint78_linear_2805_1880" x1="776.667" y1="70.3333" x2="775.333" y2="74.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint79_linear_2805_1880" x1="780.667" y1="70.3333" x2="779.333" y2="74.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint80_linear_2805_1880" x1="776.667" y1="66.3333" x2="775.333" y2="70.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint81_linear_2805_1880" x1="780.667" y1="66.3333" x2="779.333" y2="70.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint82_linear_2805_1880" x1="776.667" y1="62.3333" x2="775.333" y2="66.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint83_linear_2805_1880" x1="780.667" y1="62.3333" x2="779.333" y2="66.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint84_linear_2805_1880" x1="776.667" y1="82.3333" x2="775.333" y2="86.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint85_linear_2805_1880" x1="780.667" y1="82.3333" x2="779.333" y2="86.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint86_linear_2805_1880" x1="776.667" y1="86.3333" x2="775.333" y2="90.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint87_linear_2805_1880" x1="780.667" y1="86.3333" x2="779.333" y2="90.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint88_linear_2805_1880" x1="776.667" y1="90.3333" x2="775.333" y2="94.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint89_linear_2805_1880" x1="780.667" y1="90.3333" x2="779.333" y2="94.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint90_linear_2805_1880" x1="776.667" y1="94.3333" x2="775.333" y2="98.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint91_linear_2805_1880" x1="780.667" y1="94.3333" x2="779.333" y2="98.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint92_linear_2805_1880" x1="776.667" y1="98.3333" x2="775.333" y2="102.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint93_linear_2805_1880" x1="780.667" y1="98.3333" x2="779.333" y2="102.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint94_linear_2805_1880" x1="776.667" y1="102.333" x2="775.333" y2="106.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint95_linear_2805_1880" x1="780.667" y1="102.333" x2="779.333" y2="106.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint96_linear_2805_1880" x1="776.667" y1="106.333" x2="775.333" y2="110.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint97_linear_2805_1880" x1="780.667" y1="106.333" x2="779.333" y2="110.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint98_linear_2805_1880" x1="776.667" y1="110.333" x2="775.333" y2="114.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint99_linear_2805_1880" x1="780.667" y1="110.333" x2="779.333" y2="114.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint100_linear_2805_1880" x1="776.667" y1="114.333" x2="775.333" y2="118.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint101_linear_2805_1880" x1="780.667" y1="114.333" x2="779.333" y2="118.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint102_linear_2805_1880" x1="776.667" y1="118.333" x2="775.333" y2="122.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint103_linear_2805_1880" x1="780.667" y1="118.333" x2="779.333" y2="122.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint104_linear_2805_1880" x1="776.667" y1="122.333" x2="775.333" y2="126.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint105_linear_2805_1880" x1="780.667" y1="122.333" x2="779.333" y2="126.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint106_linear_2805_1880" x1="776.667" y1="126.333" x2="775.333" y2="130.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint107_linear_2805_1880" x1="780.667" y1="126.333" x2="779.333" y2="130.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint108_linear_2805_1880" x1="776.667" y1="130.333" x2="775.333" y2="134.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint109_linear_2805_1880" x1="780.667" y1="130.333" x2="779.333" y2="134.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint110_linear_2805_1880" x1="776.667" y1="134.333" x2="775.333" y2="138.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint111_linear_2805_1880" x1="780.667" y1="134.333" x2="779.333" y2="138.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint112_linear_2805_1880" x1="715.667" y1="132.333" x2="714.333" y2="136.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint113_linear_2805_1880" x1="719.667" y1="132.333" x2="718.333" y2="136.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint114_linear_2805_1880" x1="715.667" y1="136.333" x2="714.333" y2="140.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint115_linear_2805_1880" x1="719.667" y1="136.333" x2="718.333" y2="140.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint116_linear_2805_1880" x1="715.667" y1="140.333" x2="714.333" y2="144.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint117_linear_2805_1880" x1="719.667" y1="140.333" x2="718.333" y2="144.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint118_linear_2805_1880" x1="715.667" y1="144.333" x2="714.333" y2="148.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint119_linear_2805_1880" x1="719.667" y1="144.333" x2="718.333" y2="148.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint120_linear_2805_1880" x1="715.667" y1="148.333" x2="714.333" y2="152.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint121_linear_2805_1880" x1="719.667" y1="148.333" x2="718.333" y2="152.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint122_linear_2805_1880" x1="715.667" y1="152.333" x2="714.333" y2="156.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint123_linear_2805_1880" x1="719.667" y1="152.333" x2="718.333" y2="156.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint124_linear_2805_1880" x1="715.667" y1="156.333" x2="714.333" y2="160.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint125_linear_2805_1880" x1="719.667" y1="156.333" x2="718.333" y2="160.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint126_linear_2805_1880" x1="723.667" y1="132.333" x2="722.333" y2="136.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint127_linear_2805_1880" x1="727.667" y1="132.333" x2="726.333" y2="136.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint128_linear_2805_1880" x1="723.667" y1="136.333" x2="722.333" y2="140.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint129_linear_2805_1880" x1="727.667" y1="136.333" x2="726.333" y2="140.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint130_linear_2805_1880" x1="723.667" y1="140.333" x2="722.333" y2="144.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint131_linear_2805_1880" x1="727.667" y1="140.333" x2="726.333" y2="144.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint132_linear_2805_1880" x1="723.667" y1="144.333" x2="722.333" y2="148.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint133_linear_2805_1880" x1="727.667" y1="144.333" x2="726.333" y2="148.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint134_linear_2805_1880" x1="723.667" y1="148.333" x2="722.333" y2="152.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint135_linear_2805_1880" x1="727.667" y1="148.333" x2="726.333" y2="152.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint136_linear_2805_1880" x1="732.667" y1="49.3333" x2="731.333" y2="53.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint137_linear_2805_1880" x1="747.667" y1="49.3333" x2="746.333" y2="53.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint138_linear_2805_1880" x1="735.667" y1="49.3333" x2="734.333" y2="53.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint139_linear_2805_1880" x1="750.667" y1="49.3333" x2="749.333" y2="53.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint140_linear_2805_1880" x1="738.667" y1="49.3333" x2="737.333" y2="53.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint141_linear_2805_1880" x1="753.667" y1="49.3333" x2="752.333" y2="53.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint142_linear_2805_1880" x1="741.667" y1="49.3333" x2="740.333" y2="53.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint143_linear_2805_1880" x1="756.667" y1="49.3333" x2="755.333" y2="53.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint144_linear_2805_1880" x1="744.667" y1="49.3333" x2="743.333" y2="53.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint145_linear_2805_1880" x1="759.667" y1="49.3333" x2="758.333" y2="53.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint146_linear_2805_1880" x1="732.667" y1="52.3333" x2="731.333" y2="56.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint147_linear_2805_1880" x1="747.667" y1="52.3333" x2="746.333" y2="56.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint148_linear_2805_1880" x1="735.667" y1="52.3333" x2="734.333" y2="56.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint149_linear_2805_1880" x1="750.667" y1="52.3333" x2="749.333" y2="56.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint150_linear_2805_1880" x1="738.667" y1="52.3333" x2="737.333" y2="56.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint151_linear_2805_1880" x1="753.667" y1="52.3333" x2="752.333" y2="56.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint152_linear_2805_1880" x1="741.667" y1="52.3333" x2="740.333" y2="56.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint153_linear_2805_1880" x1="756.667" y1="52.3333" x2="755.333" y2="56.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint154_linear_2805_1880" x1="744.667" y1="52.3333" x2="743.333" y2="56.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint155_linear_2805_1880" x1="759.667" y1="52.3333" x2="758.333" y2="56.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint156_linear_2805_1880" x1="732.667" y1="55.3333" x2="731.333" y2="59.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint157_linear_2805_1880" x1="747.667" y1="55.3333" x2="746.333" y2="59.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint158_linear_2805_1880" x1="735.667" y1="55.3333" x2="734.333" y2="59.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint159_linear_2805_1880" x1="750.667" y1="55.3333" x2="749.333" y2="59.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint160_linear_2805_1880" x1="738.667" y1="55.3333" x2="737.333" y2="59.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint161_linear_2805_1880" x1="753.667" y1="55.3333" x2="752.333" y2="59.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint162_linear_2805_1880" x1="741.667" y1="55.3333" x2="740.333" y2="59.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint163_linear_2805_1880" x1="756.667" y1="55.3333" x2="755.333" y2="59.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint164_linear_2805_1880" x1="744.667" y1="55.3333" x2="743.333" y2="59.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint165_linear_2805_1880" x1="759.667" y1="55.3333" x2="758.333" y2="59.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint166_linear_2805_1880" x1="9.66667" y1="47.3333" x2="8.33333" y2="51.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint167_linear_2805_1880" x1="9.66667" y1="62.3333" x2="8.33333" y2="66.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint168_linear_2805_1880" x1="9.66667" y1="50.3333" x2="8.33333" y2="54.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint169_linear_2805_1880" x1="9.66667" y1="65.3333" x2="8.33333" y2="69.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint170_linear_2805_1880" x1="9.66667" y1="53.3333" x2="8.33333" y2="57.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint171_linear_2805_1880" x1="9.66667" y1="68.3333" x2="8.33333" y2="72.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint172_linear_2805_1880" x1="9.66667" y1="56.3333" x2="8.33333" y2="60.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint173_linear_2805_1880" x1="9.66667" y1="71.3333" x2="8.33333" y2="75.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint174_linear_2805_1880" x1="9.66667" y1="59.3333" x2="8.33333" y2="63.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint175_linear_2805_1880" x1="9.66667" y1="74.3333" x2="8.33333" y2="78.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint176_linear_2805_1880" x1="6.66667" y1="47.3333" x2="5.33333" y2="51.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint177_linear_2805_1880" x1="6.66667" y1="62.3333" x2="5.33333" y2="66.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint178_linear_2805_1880" x1="6.66667" y1="50.3333" x2="5.33333" y2="54.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint179_linear_2805_1880" x1="6.66667" y1="65.3333" x2="5.33333" y2="69.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint180_linear_2805_1880" x1="6.66667" y1="53.3333" x2="5.33333" y2="57.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint181_linear_2805_1880" x1="6.66667" y1="68.3333" x2="5.33333" y2="72.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint182_linear_2805_1880" x1="6.66667" y1="56.3333" x2="5.33333" y2="60.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint183_linear_2805_1880" x1="6.66667" y1="71.3333" x2="5.33333" y2="75.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint184_linear_2805_1880" x1="6.66667" y1="59.3333" x2="5.33333" y2="63.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint185_linear_2805_1880" x1="6.66667" y1="74.3333" x2="5.33333" y2="78.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint186_linear_2805_1880" x1="3.66667" y1="47.3333" x2="2.33333" y2="51.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint187_linear_2805_1880" x1="3.66667" y1="62.3333" x2="2.33333" y2="66.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint188_linear_2805_1880" x1="3.66667" y1="50.3333" x2="2.33333" y2="54.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint189_linear_2805_1880" x1="3.66667" y1="65.3333" x2="2.33333" y2="69.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint190_linear_2805_1880" x1="3.66667" y1="53.3333" x2="2.33333" y2="57.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint191_linear_2805_1880" x1="3.66667" y1="68.3333" x2="2.33333" y2="72.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint192_linear_2805_1880" x1="3.66667" y1="56.3333" x2="2.33333" y2="60.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint193_linear_2805_1880" x1="3.66667" y1="71.3333" x2="2.33333" y2="75.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint194_linear_2805_1880" x1="3.66667" y1="59.3333" x2="2.33333" y2="63.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint195_linear_2805_1880" x1="3.66667" y1="74.3333" x2="2.33333" y2="78.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint196_linear_2805_1880" x1="548.667" y1="92.3333" x2="543.333" y2="109.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint197_linear_2805_1880" x1="552.083" y1="102.333" x2="542.597" y2="111.968" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint198_linear_2805_1880" x1="558.667" y1="92.3333" x2="553.333" y2="109.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint199_linear_2805_1880" x1="562.083" y1="102.333" x2="552.597" y2="111.968" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint200_linear_2805_1880" x1="42.6667" y1="315.333" x2="37.3333" y2="332.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint201_linear_2805_1880" x1="48.0833" y1="307.333" x2="38.5973" y2="316.968" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint202_linear_2805_1880" x1="42.6667" y1="305.333" x2="37.3333" y2="322.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint203_linear_2805_1880" x1="48.0833" y1="297.333" x2="38.5973" y2="306.968" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint204_linear_2805_1880" x1="21.6667" y1="69.3333" x2="16.3333" y2="86.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint205_linear_2805_1880" x1="27.0833" y1="61.3333" x2="17.5973" y2="70.9676" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint206_linear_2805_1880" x1="21.6667" y1="59.3333" x2="16.3333" y2="76.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint207_linear_2805_1880" x1="27.0833" y1="51.3333" x2="17.5973" y2="60.9676" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint208_linear_2805_1880" x1="55.8333" y1="284.667" x2="51.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint209_linear_2805_1880" x1="57.8333" y1="284.667" x2="53.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint210_linear_2805_1880" x1="59.8333" y1="284.667" x2="55.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint211_linear_2805_1880" x1="61.8333" y1="284.667" x2="57.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint212_linear_2805_1880" x1="63.8333" y1="284.667" x2="59.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint213_linear_2805_1880" x1="65.8333" y1="284.667" x2="61.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint214_linear_2805_1880" x1="67.8333" y1="284.667" x2="63.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint215_linear_2805_1880" x1="69.8333" y1="284.667" x2="65.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint216_linear_2805_1880" x1="71.8333" y1="284.667" x2="67.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint217_linear_2805_1880" x1="73.8333" y1="284.667" x2="69.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint218_linear_2805_1880" x1="75.8333" y1="284.667" x2="71.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint219_linear_2805_1880" x1="77.8333" y1="284.667" x2="73.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint220_linear_2805_1880" x1="79.8333" y1="284.667" x2="75.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint221_linear_2805_1880" x1="81.8333" y1="284.667" x2="77.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint222_linear_2805_1880" x1="83.8333" y1="284.667" x2="79.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint223_linear_2805_1880" x1="85.8333" y1="284.667" x2="81.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint224_linear_2805_1880" x1="87.8333" y1="284.667" x2="83.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint225_linear_2805_1880" x1="89.8333" y1="284.667" x2="85.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint226_linear_2805_1880" x1="91.8333" y1="284.667" x2="87.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint227_linear_2805_1880" x1="93.8333" y1="284.667" x2="89.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint228_linear_2805_1880" x1="95.8333" y1="284.667" x2="91.1902" y2="288.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint229_linear_2805_1880" x1="55.8333" y1="290.667" x2="51.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint230_linear_2805_1880" x1="57.8333" y1="290.667" x2="53.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint231_linear_2805_1880" x1="59.8333" y1="290.667" x2="55.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint232_linear_2805_1880" x1="61.8333" y1="290.667" x2="57.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint233_linear_2805_1880" x1="63.8333" y1="290.667" x2="59.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint234_linear_2805_1880" x1="65.8333" y1="290.667" x2="61.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint235_linear_2805_1880" x1="67.8333" y1="290.667" x2="63.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint236_linear_2805_1880" x1="69.8333" y1="290.667" x2="65.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint237_linear_2805_1880" x1="71.8333" y1="290.667" x2="67.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint238_linear_2805_1880" x1="73.8333" y1="290.667" x2="69.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint239_linear_2805_1880" x1="75.8333" y1="290.667" x2="71.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint240_linear_2805_1880" x1="77.8333" y1="290.667" x2="73.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint241_linear_2805_1880" x1="79.8333" y1="290.667" x2="75.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint242_linear_2805_1880" x1="81.8333" y1="290.667" x2="77.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint243_linear_2805_1880" x1="83.8333" y1="290.667" x2="79.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint244_linear_2805_1880" x1="85.8333" y1="290.667" x2="81.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint245_linear_2805_1880" x1="87.8333" y1="290.667" x2="83.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint246_linear_2805_1880" x1="89.8333" y1="290.667" x2="85.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint247_linear_2805_1880" x1="91.8333" y1="290.667" x2="87.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint248_linear_2805_1880" x1="93.8333" y1="290.667" x2="89.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint249_linear_2805_1880" x1="95.8333" y1="290.667" x2="91.1902" y2="294.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint250_linear_2805_1880" x1="1.66667" y1="-6.66667" x2="-7.61961" y2="0.878433" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint251_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint252_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint253_linear_2805_1880" x1="1.66667" y1="-6.66667" x2="-7.61961" y2="0.878433" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint254_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint255_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint256_linear_2805_1880" x1="1.66667" y1="-6.66667" x2="-7.61961" y2="0.878433" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint257_linear_2805_1880" x1="-2.5" y1="11.375" x2="1.25401" y2="11.863" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint258_linear_2805_1880" x1="-2.5" y1="11.375" x2="1.25401" y2="11.863" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint259_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint260_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint261_linear_2805_1880" x1="1.66667" y1="-6.66667" x2="-7.61961" y2="0.878433" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint262_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint263_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint264_linear_2805_1880" x1="136.667" y1="322.333" x2="135.333" y2="326.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint265_linear_2805_1880" x1="133.667" y1="322.333" x2="132.333" y2="326.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint266_linear_2805_1880" x1="139.667" y1="322.333" x2="138.333" y2="326.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint267_linear_2805_1880" x1="130.667" y1="322.333" x2="129.333" y2="326.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint268_linear_2805_1880" x1="29.5" y1="259.333" x2="28.5662" y2="263.885" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint269_linear_2805_1880" x1="29.5" y1="256.333" x2="28.5662" y2="260.885" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint270_linear_2805_1880" x1="29.5" y1="262.333" x2="28.5662" y2="266.885" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint271_linear_2805_1880" x1="29.5" y1="253.333" x2="28.5662" y2="257.885" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint272_linear_2805_1880" x1="266.167" y1="164.333" x2="260.833" y2="181.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint273_linear_2805_1880" x1="251.583" y1="172.333" x2="242.097" y2="181.968" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint274_linear_2805_1880" x1="266.167" y1="174.333" x2="260.833" y2="191.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint275_linear_2805_1880" x1="251.583" y1="182.333" x2="242.097" y2="191.968" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint276_linear_2805_1880" x1="616.833" y1="89.6667" x2="612.19" y2="93.4392" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint277_linear_2805_1880" x1="621.833" y1="94.6667" x2="617.19" y2="98.4392" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint278_linear_2805_1880" x1="618.833" y1="89.6667" x2="614.19" y2="93.4392" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint279_linear_2805_1880" x1="623.833" y1="94.6667" x2="619.19" y2="98.4392" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint280_linear_2805_1880" x1="620.833" y1="89.6667" x2="616.19" y2="93.4392" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint281_linear_2805_1880" x1="625.833" y1="94.6667" x2="621.19" y2="98.4392" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint282_linear_2805_1880" x1="627.833" y1="94.6667" x2="623.19" y2="98.4392" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint283_linear_2805_1880" x1="629.833" y1="94.6667" x2="625.19" y2="98.4392" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint284_linear_2805_1880" x1="631.833" y1="94.6667" x2="627.19" y2="98.4392" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint285_linear_2805_1880" x1="633.833" y1="94.6667" x2="629.19" y2="98.4392" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint286_linear_2805_1880" x1="635.833" y1="94.6667" x2="631.19" y2="98.4392" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint287_linear_2805_1880" x1="637.833" y1="94.6667" x2="633.19" y2="98.4392" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint288_linear_2805_1880" x1="297.667" y1="335.333" x2="296.333" y2="339.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint289_linear_2805_1880" x1="301.667" y1="335.333" x2="300.333" y2="339.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint290_linear_2805_1880" x1="297.667" y1="339.333" x2="296.333" y2="343.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint291_linear_2805_1880" x1="301.667" y1="339.333" x2="300.333" y2="343.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint292_linear_2805_1880" x1="297.667" y1="343.333" x2="296.333" y2="347.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint293_linear_2805_1880" x1="301.667" y1="343.333" x2="300.333" y2="347.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint294_linear_2805_1880" x1="297.667" y1="347.333" x2="296.333" y2="351.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint295_linear_2805_1880" x1="301.667" y1="347.333" x2="300.333" y2="351.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint296_linear_2805_1880" x1="297.667" y1="351.333" x2="296.333" y2="355.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint297_linear_2805_1880" x1="301.667" y1="351.333" x2="300.333" y2="355.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint298_linear_2805_1880" x1="297.667" y1="355.333" x2="296.333" y2="359.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint299_linear_2805_1880" x1="301.667" y1="355.333" x2="300.333" y2="359.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint300_linear_2805_1880" x1="297.667" y1="359.333" x2="296.333" y2="363.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint301_linear_2805_1880" x1="301.667" y1="359.333" x2="300.333" y2="363.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint302_linear_2805_1880" x1="305.667" y1="335.333" x2="304.333" y2="339.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint303_linear_2805_1880" x1="309.667" y1="335.333" x2="308.333" y2="339.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint304_linear_2805_1880" x1="305.667" y1="339.333" x2="304.333" y2="343.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint305_linear_2805_1880" x1="309.667" y1="339.333" x2="308.333" y2="343.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint306_linear_2805_1880" x1="305.667" y1="343.333" x2="304.333" y2="347.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint307_linear_2805_1880" x1="309.667" y1="343.333" x2="308.333" y2="347.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint308_linear_2805_1880" x1="305.667" y1="347.333" x2="304.333" y2="351.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint309_linear_2805_1880" x1="309.667" y1="347.333" x2="308.333" y2="351.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint310_linear_2805_1880" x1="305.667" y1="351.333" x2="304.333" y2="355.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint311_linear_2805_1880" x1="309.667" y1="351.333" x2="308.333" y2="355.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint312_linear_2805_1880" x1="313.667" y1="335.333" x2="312.333" y2="339.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint313_linear_2805_1880" x1="317.667" y1="335.333" x2="316.333" y2="339.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint314_linear_2805_1880" x1="313.667" y1="339.333" x2="312.333" y2="343.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint315_linear_2805_1880" x1="317.667" y1="339.333" x2="316.333" y2="343.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint316_linear_2805_1880" x1="313.667" y1="343.333" x2="312.333" y2="347.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint317_linear_2805_1880" x1="317.667" y1="343.333" x2="316.333" y2="347.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint318_linear_2805_1880" x1="186.833" y1="219.167" x2="185.167" y2="224.583" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint319_linear_2805_1880" x1="186.833" y1="191.417" x2="185.167" y2="196.833" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint320_linear_2805_1880" x1="162.833" y1="219.167" x2="161.167" y2="224.583" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint321_linear_2805_1880" x1="162.833" y1="191.417" x2="161.167" y2="196.833" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint322_linear_2805_1880" x1="633" y1="353" x2="743.817" y2="353" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint323_linear_2805_1880" x1="633" y1="357" x2="743.817" y2="357" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint324_linear_2805_1880" x1="633" y1="361" x2="743.817" y2="361" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint325_linear_2805_1880" x1="635.083" y1="353.417" x2="633.417" y2="358.833" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint326_linear_2805_1880" x1="651.083" y1="353.417" x2="649.417" y2="358.833" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint327_linear_2805_1880" x1="667.083" y1="357.417" x2="665.417" y2="362.833" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint328_linear_2805_1880" x1="707.083" y1="361.417" x2="705.417" y2="366.833" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint329_linear_2805_1880" x1="697.083" y1="365.417" x2="695.417" y2="370.833" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint330_linear_2805_1880" x1="633" y1="365" x2="743.817" y2="365" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint331_linear_2805_1880" x1="633" y1="369" x2="743.817" y2="369" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint332_linear_2805_1880" x1="633" y1="373" x2="743.817" y2="373" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"></stop>
								<stop offset="1" stop-color="#212941" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint333_linear_2805_1880" x1="541.833" y1="260.667" x2="537.19" y2="264.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint334_linear_2805_1880" x1="541.833" y1="258.667" x2="537.19" y2="262.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint335_linear_2805_1880" x1="541.833" y1="256.667" x2="537.19" y2="260.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint336_linear_2805_1880" x1="541.833" y1="254.667" x2="537.19" y2="258.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint337_linear_2805_1880" x1="541.833" y1="252.667" x2="537.19" y2="256.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint338_linear_2805_1880" x1="541.833" y1="250.667" x2="537.19" y2="254.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint339_linear_2805_1880" x1="541.833" y1="248.667" x2="537.19" y2="252.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint340_linear_2805_1880" x1="541.833" y1="246.667" x2="537.19" y2="250.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint341_linear_2805_1880" x1="541.833" y1="244.667" x2="537.19" y2="248.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint342_linear_2805_1880" x1="541.833" y1="242.667" x2="537.19" y2="246.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint343_linear_2805_1880" x1="541.833" y1="240.667" x2="537.19" y2="244.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint344_linear_2805_1880" x1="541.833" y1="238.667" x2="537.19" y2="242.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint345_linear_2805_1880" x1="541.833" y1="236.667" x2="537.19" y2="240.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint346_linear_2805_1880" x1="541.833" y1="234.667" x2="537.19" y2="238.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint347_linear_2805_1880" x1="541.833" y1="232.667" x2="537.19" y2="236.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint348_linear_2805_1880" x1="541.833" y1="230.667" x2="537.19" y2="234.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint349_linear_2805_1880" x1="541.833" y1="228.667" x2="537.19" y2="232.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint350_linear_2805_1880" x1="541.833" y1="226.667" x2="537.19" y2="230.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint351_linear_2805_1880" x1="541.833" y1="224.667" x2="537.19" y2="228.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint352_linear_2805_1880" x1="541.833" y1="222.667" x2="537.19" y2="226.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint353_linear_2805_1880" x1="541.833" y1="220.667" x2="537.19" y2="224.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint354_linear_2805_1880" x1="248.583" y1="253.917" x2="246.917" y2="259.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint355_linear_2805_1880" x1="244.583" y1="254.333" x2="235.097" y2="263.968" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint356_linear_2805_1880" x1="240.583" y1="254.333" x2="231.097" y2="263.968" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint357_linear_2805_1880" x1="750.833" y1="231.667" x2="746.19" y2="235.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint358_linear_2805_1880" x1="755.833" y1="226.667" x2="751.19" y2="230.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint359_linear_2805_1880" x1="750.833" y1="229.667" x2="746.19" y2="233.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint360_linear_2805_1880" x1="755.833" y1="224.667" x2="751.19" y2="228.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint361_linear_2805_1880" x1="750.833" y1="227.667" x2="746.19" y2="231.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint362_linear_2805_1880" x1="755.833" y1="222.667" x2="751.19" y2="226.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint363_linear_2805_1880" x1="755.833" y1="220.667" x2="751.19" y2="224.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint364_linear_2805_1880" x1="755.833" y1="218.667" x2="751.19" y2="222.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint365_linear_2805_1880" x1="755.833" y1="216.667" x2="751.19" y2="220.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint366_linear_2805_1880" x1="755.833" y1="214.667" x2="751.19" y2="218.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint367_linear_2805_1880" x1="760.833" y1="214.667" x2="756.19" y2="218.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint368_linear_2805_1880" x1="755.833" y1="212.667" x2="751.19" y2="216.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint369_linear_2805_1880" x1="760.833" y1="212.667" x2="756.19" y2="216.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint370_linear_2805_1880" x1="755.833" y1="210.667" x2="751.19" y2="214.439" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint371_linear_2805_1880" x1="343" y1="238" x2="332.948" y2="224.199" gradientUnits="userSpaceOnUse">
								<stop stop-color="#070917"></stop>
								<stop offset="1" stop-color="#576085"></stop>
								</linearGradient>
								<linearGradient id="paint372_linear_2805_1880" x1="445" y1="239" x2="455.052" y2="252.801" gradientUnits="userSpaceOnUse">
								<stop stop-color="#070917"></stop>
								<stop offset="1" stop-color="#576085"></stop>
								</linearGradient>
								<linearGradient id="paint373_linear_2805_1880" x1="309.659" y1="66.3333" x2="308.326" y2="70.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint374_linear_2805_1880" x1="313.659" y1="66.3333" x2="312.326" y2="70.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint375_linear_2805_1880" x1="309.659" y1="70.3333" x2="308.326" y2="74.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint376_linear_2805_1880" x1="313.659" y1="70.3333" x2="312.326" y2="74.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint377_linear_2805_1880" x1="317.659" y1="70.3333" x2="316.326" y2="74.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint378_linear_2805_1880" x1="321.659" y1="70.3333" x2="320.326" y2="74.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint379_linear_2805_1880" x1="317.659" y1="66.3333" x2="316.326" y2="70.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint380_linear_2805_1880" x1="321.659" y1="66.3333" x2="320.326" y2="70.6667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint381_linear_2805_1880" x1="91.6667" y1="103.333" x2="90.3333" y2="107.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint382_linear_2805_1880" x1="91.6667" y1="107.333" x2="90.3333" y2="111.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint383_linear_2805_1880" x1="87.6667" y1="103.333" x2="86.3333" y2="107.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint384_linear_2805_1880" x1="87.6667" y1="107.333" x2="86.3333" y2="111.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint385_linear_2805_1880" x1="87.6667" y1="111.333" x2="86.3333" y2="115.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint386_linear_2805_1880" x1="87.6667" y1="115.333" x2="86.3333" y2="119.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint387_linear_2805_1880" x1="91.6667" y1="111.333" x2="90.3333" y2="115.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint388_linear_2805_1880" x1="91.6667" y1="115.333" x2="90.3333" y2="119.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint389_linear_2805_1880" x1="746" y1="132.769" x2="746" y2="183.231" gradientUnits="userSpaceOnUse">
								<stop stop-color="#191D2E"></stop>
								<stop offset="0.494234" stop-color="#181B29"></stop>
								<stop offset="1" stop-color="#191D2E"></stop>
								</linearGradient>
								<linearGradient id="paint390_linear_2805_1880" x1="746" y1="150" x2="746" y2="166" gradientUnits="userSpaceOnUse">
								<stop stop-color="#202639"></stop>
								<stop offset="1" stop-color="#242D46"></stop>
								</linearGradient>
								<linearGradient id="paint391_linear_2805_1880" x1="745.667" y1="156" x2="744" y2="163.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#92B8E7"></stop>
								<stop offset="0.51" stop-color="#C8DCF5"></stop>
								<stop offset="1" stop-color="#CBD5E2"></stop>
								</linearGradient>
								<linearGradient id="paint392_linear_2805_1880" x1="547" y1="181.769" x2="547" y2="232.231" gradientUnits="userSpaceOnUse">
								<stop stop-color="#191D2E"></stop>
								<stop offset="0.494234" stop-color="#181B29"></stop>
								<stop offset="1" stop-color="#191D2E"></stop>
								</linearGradient>
								<linearGradient id="paint393_linear_2805_1880" x1="547" y1="199" x2="547" y2="215" gradientUnits="userSpaceOnUse">
								<stop stop-color="#202639"></stop>
								<stop offset="1" stop-color="#242D46"></stop>
								</linearGradient>
								<linearGradient id="paint394_linear_2805_1880" x1="546.667" y1="205" x2="545" y2="212.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#92B8E7"></stop>
								<stop offset="0.51" stop-color="#C8DCF5"></stop>
								<stop offset="1" stop-color="#CBD5E2"></stop>
								</linearGradient>
								<linearGradient id="paint395_linear_2805_1880" x1="767" y1="252.769" x2="767" y2="303.231" gradientUnits="userSpaceOnUse">
								<stop stop-color="#191D2E"></stop>
								<stop offset="0.494234" stop-color="#181B29"></stop>
								<stop offset="1" stop-color="#191D2E"></stop>
								</linearGradient>
								<linearGradient id="paint396_linear_2805_1880" x1="767" y1="270" x2="767" y2="286" gradientUnits="userSpaceOnUse">
								<stop stop-color="#202639"></stop>
								<stop offset="1" stop-color="#242D46"></stop>
								</linearGradient>
								<linearGradient id="paint397_linear_2805_1880" x1="766.667" y1="276" x2="765" y2="283.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#92B8E7"></stop>
								<stop offset="0.51" stop-color="#C8DCF5"></stop>
								<stop offset="1" stop-color="#CBD5E2"></stop>
								</linearGradient>
								<linearGradient id="paint398_linear_2805_1880" x1="114" y1="183.769" x2="114" y2="234.231" gradientUnits="userSpaceOnUse">
								<stop stop-color="#191D2E"></stop>
								<stop offset="0.494234" stop-color="#181B29"></stop>
								<stop offset="1" stop-color="#191D2E"></stop>
								</linearGradient>
								<linearGradient id="paint399_linear_2805_1880" x1="114" y1="201" x2="114" y2="217" gradientUnits="userSpaceOnUse">
								<stop stop-color="#202639"></stop>
								<stop offset="1" stop-color="#242D46"></stop>
								</linearGradient>
								<linearGradient id="paint400_linear_2805_1880" x1="113.667" y1="207" x2="112" y2="214.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#92B8E7"></stop>
								<stop offset="0.51" stop-color="#C8DCF5"></stop>
								<stop offset="1" stop-color="#CBD5E2"></stop>
								</linearGradient>
								<linearGradient id="paint401_linear_2805_1880" x1="1.66667" y1="-6.66667" x2="-7.61961" y2="0.878433" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint402_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint403_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint404_linear_2805_1880" x1="1.66667" y1="-6.66667" x2="-7.61961" y2="0.878433" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint405_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint406_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint407_linear_2805_1880" x1="1.66667" y1="-6.66667" x2="-7.61961" y2="0.878433" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint408_linear_2805_1880" x1="-2.5" y1="11.375" x2="1.25401" y2="11.863" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint409_linear_2805_1880" x1="-2.5" y1="11.375" x2="1.25401" y2="11.863" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B" stop-opacity="0"></stop>
								</linearGradient>
								<linearGradient id="paint410_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint411_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint412_linear_2805_1880" x1="1.66667" y1="-6.66667" x2="-7.61961" y2="0.878433" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint413_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint414_linear_2805_1880" x1="1.66667" y1="-1.66667" x2="0.333333" y2="2.66667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint415_linear_2805_1880" x1="535.667" y1="131.333" x2="534.333" y2="135.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint416_linear_2805_1880" x1="534.333" y1="131.667" x2="534" y2="136.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint417_linear_2805_1880" x1="547.667" y1="131.333" x2="546.333" y2="135.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint418_linear_2805_1880" x1="546.333" y1="131.667" x2="546" y2="136.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint419_linear_2805_1880" x1="539.667" y1="131.333" x2="538.333" y2="135.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint420_linear_2805_1880" x1="538.333" y1="131.667" x2="538" y2="136.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint421_linear_2805_1880" x1="551.667" y1="131.333" x2="550.333" y2="135.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint422_linear_2805_1880" x1="550.333" y1="131.667" x2="550" y2="136.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint423_linear_2805_1880" x1="543.667" y1="131.333" x2="542.333" y2="135.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint424_linear_2805_1880" x1="542.333" y1="131.667" x2="542" y2="136.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint425_linear_2805_1880" x1="555.667" y1="131.333" x2="554.333" y2="135.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint426_linear_2805_1880" x1="554.333" y1="131.667" x2="554" y2="136.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint427_linear_2805_1880" x1="535.667" y1="139.333" x2="534.333" y2="143.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint428_linear_2805_1880" x1="534.333" y1="139.667" x2="534" y2="144.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint429_linear_2805_1880" x1="547.667" y1="139.333" x2="546.333" y2="143.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint430_linear_2805_1880" x1="546.333" y1="139.667" x2="546" y2="144.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint431_linear_2805_1880" x1="539.667" y1="139.333" x2="538.333" y2="143.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint432_linear_2805_1880" x1="538.333" y1="139.667" x2="538" y2="144.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint433_linear_2805_1880" x1="551.667" y1="139.333" x2="550.333" y2="143.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint434_linear_2805_1880" x1="550.333" y1="139.667" x2="550" y2="144.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint435_linear_2805_1880" x1="543.667" y1="139.333" x2="542.333" y2="143.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint436_linear_2805_1880" x1="542.333" y1="139.667" x2="542" y2="144.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								<linearGradient id="paint437_linear_2805_1880" x1="555.667" y1="139.333" x2="554.333" y2="143.667" gradientUnits="userSpaceOnUse">
								<stop stop-color="#222A4A"></stop>
								<stop offset="1" stop-color="#262E4B"></stop>
								</linearGradient>
								<linearGradient id="paint438_linear_2805_1880" x1="554.333" y1="139.667" x2="554" y2="144.333" gradientUnits="userSpaceOnUse">
								<stop stop-color="#3A4162"></stop>
								<stop offset="1" stop-color="#252E54"></stop>
								</linearGradient>
								</defs>
							</svg>
						</div>

						<div class="scroll-section__list-bg-line img-wrp">
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie//s5-line.json" background="transparent" speed="0.5" autoplay="" loop=""></lottie-player>
						</div>

						<div class="scroll-section__list-light-bg"></div>
					</div>

					<div class="qas1__light-bg img-wrp">
						<svg width="968" height="602" viewBox="0 0 968 602" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.15" filter="url(#filter0_f_2708_9520)">
							<path d="M485 60L884 518H84L485 60Z" fill="url(#paint0_linear_2708_9520)"/>
							</g>
							<g opacity="0.05" filter="url(#filter1_f_2708_9520)">
							<path d="M485.5 279L685 518H285L485.5 279Z" fill="url(#paint1_linear_2708_9520)"/>
							</g>
							<g opacity="0.05" filter="url(#filter2_f_2708_9520)">
							<path d="M484.25 279L584 518H384L484.25 279Z" fill="url(#paint2_linear_2708_9520)"/>
							</g>
							<defs>
							<filter id="filter0_f_2708_9520" x="0" y="-24" width="968" height="626" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2708_9520"/>
							</filter>
							<filter id="filter1_f_2708_9520" x="201" y="195" width="568" height="407" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2708_9520"/>
							</filter>
							<filter id="filter2_f_2708_9520" x="300" y="195" width="368" height="407" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
							<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2708_9520"/>
							</filter>
							<linearGradient id="paint0_linear_2708_9520" x1="507.5" y1="176.016" x2="507.5" y2="508" gradientUnits="userSpaceOnUse">
							<stop stop-color="#6E8DF0"/>
							<stop offset="1" stop-color="#C5DCFC" stop-opacity="0"/>
							</linearGradient>
							<linearGradient id="paint1_linear_2708_9520" x1="496.75" y1="339.541" x2="496.75" y2="512.782" gradientUnits="userSpaceOnUse">
							<stop stop-color="#6E8DF0"/>
							<stop offset="1" stop-color="#C5DCFC" stop-opacity="0"/>
							</linearGradient>
							<linearGradient id="paint2_linear_2708_9520" x1="489.875" y1="339.541" x2="489.875" y2="512.782" gradientUnits="userSpaceOnUse">
							<stop stop-color="#6E8DF0"/>
							<stop offset="1" stop-color="#C5DCFC" stop-opacity="0"/>
							</linearGradient>
							</defs>
						</svg>								
					</div>
				</div>
			</section>

			<section class="qas2 s14">
				<div class="s14__container container">
					<div class="accordion">
						<?php
							$current_page = get_post();
							$page_id = $current_page->ID;
							$pod = pods('page', $page_id);
							$field1 = $pod->field('faq_quest');
							$field2 = $pod->field('faq_answ');
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

					<?php
						// Получаем ID главной страницы
						$front_page_id = get_option('page_on_front');
						// Получаем объект поста главной страницы
						$front_page = get_post($front_page_id);
						// Получаем значение поля 'my_field' на главной странице
						$front_page_text = get_post_meta($front_page->ID, 'tg_link', true);

						// Используем значение поля 'my_field'
						if (!empty($front_page_text)) {
								echo '<a class="qas2__btn main-btn" target="_blank" href="' . $front_page_text . '">';
						}
					?>
					<!-- <a href="#" class="qas2__btn main-btn"> -->
						<span class="main-btn__text small-text">Написать в телеграм</span>
						<div class="main-btn__effect"></div>
					</a>
				</div>
			</section>

			<section class="s13 s7">
				<div class="s7__container container">
					<div class="window">
						<div class="window-bg img-wrp">
							<svg class="svg-web" width="800" height="553" viewBox="0 0 800 553" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g filter="url(#filter0_b_2871_22455)">
								<rect width="800" height="553" rx="24" fill="#1F2638" fill-opacity="0.1"/>
								</g>
								<g filter="url(#filter1_b_2871_22455)">
								<rect x="0.25" y="0.25" width="799.5" height="552.5" rx="23.75" stroke="url(#paint0_linear_2871_22455)" stroke-width="0.5"/>
								</g>
								<g filter="url(#filter2_b_2871_22455)">
								<path d="M0 24C0 10.7452 10.7452 0 24 0H776C789.255 0 800 10.7452 800 24V60H0V24Z" fill="#323F5F" fill-opacity="0.2"/>
								<path d="M0.25 24C0.25 10.8832 10.8832 0.25 24 0.25H776C789.117 0.25 799.75 10.8832 799.75 24V59.75H0.25V24Z" stroke="url(#paint1_linear_2871_22455)" stroke-width="0.5"/>
								</g>
								<defs>
								<filter id="filter0_b_2871_22455" x="-30" y="-30" width="860" height="613" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"/>
								<feGaussianBlur in="BackgroundImageFix" stdDeviation="15"/>
								<feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_2871_22455"/>
								<feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_2871_22455" result="shape"/>
								</filter>
								<filter id="filter1_b_2871_22455" x="-110" y="-110" width="1020" height="773" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"/>
								<feGaussianBlur in="BackgroundImageFix" stdDeviation="55"/>
								<feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_2871_22455"/>
								<feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_2871_22455" result="shape"/>
								</filter>
								<filter id="filter2_b_2871_22455" x="-160" y="-160" width="1120" height="380" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"/>
								<feGaussianBlur in="BackgroundImageFix" stdDeviation="80"/>
								<feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_2871_22455"/>
								<feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_2871_22455" result="shape"/>
								</filter>
								<linearGradient id="paint0_linear_2871_22455" x1="400" y1="0" x2="400" y2="553" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"/>
								<stop offset="0.469183" stop-color="#2C3A65"/>
								<stop offset="1" stop-color="#272C3D"/>
								</linearGradient>
								<linearGradient id="paint1_linear_2871_22455" x1="400" y1="0" x2="400" y2="60" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"/>
								<stop offset="0.469183" stop-color="#2C3A65"/>
								<stop offset="1" stop-color="#272C3D" stop-opacity="0.6"/>
								</linearGradient>
								</defs>
							</svg>
							<!-- <img loading="lazy" class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/window-box/window-bg.svg" alt="svg"> -->
							<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/window-bg-tab.svg" alt="svg" loading="lazy">
							<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/window-bg-mob.svg" alt="svg" loading="lazy">
						</div>
						<div class="s7__title title-wrp">
							<div class="s7__title-icon-logo img-wrp">
								<img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/window-box/s7__title-icon-logo.svg" alt="svg">
							</div>
							<div class="s7__pre-title title-wrp__pre-title pre-title s7__pre-title--two">
								<div class="pre-title-lp img-wrp">
									<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie//web/left.json" background="transparent" speed="1"></lottie-player>
								</div>
									<span class="s7__pre-title-text title-wrp__pre-title-text small-text">Протестируйте BBZ</span>
								<div class="pre-title-lp img-wrp">
									<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie//web/right.json" background="transparent" speed="1"></lottie-player>
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
	
							<?php
								// Получаем ID главной страницы
								$front_page_id = get_option('page_on_front');
								// Получаем объект поста главной страницы
								$front_page = get_post($front_page_id);
								// Получаем значение поля 'my_field' на главной странице
								$front_page_text = get_post_meta($front_page->ID, 'tg_link', true);

								// Используем значение поля 'my_field'
								if (!empty($front_page_text)) {
										echo '<a class="s7__btn main-btn main-btn--white" target="_blank" href="' . $front_page_text . '">';
								}
							?>
							<!-- <a href="#" class="s7__btn main-btn main-btn--white"> -->
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
		</main>
	</div>

<?php  get_footer($name); ?>
<script>
  function initializeSwiper() {
    if (window.innerWidth < 1200) {
      const pageHowWorkSwiperElm = document.querySelector(".page-how-work-swiper");
      var pageHowWorkSwiper = new Swiper(pageHowWorkSwiperElm, {
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
</script>
</body>
</html>
