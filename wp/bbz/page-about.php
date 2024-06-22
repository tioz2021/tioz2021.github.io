<?php
/*
Template Name: Page About
*/
?>
<?php  get_header($name); ?>
	<div class="scroll-container other-page page-about">
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
			<section class="page-about pas1">
				<div class="pas1__container container">
					<div class="pas1__title title-wrp">
						<div class="pas1__pre-title title-wrp__pre-title pre-title">
							<div class="pre-title-lp img-wrp">
								<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie//web/left.json" background="transparent" speed="1"></lottie-player>
							</div>
							<span class="pas1__pre-title-text title-wrp__pre-title-text small-text">О BBZ</span>
							<div class="pre-title-lp img-wrp">
								<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie//web/right.json" background="transparent" speed="1"></lottie-player>
							</div>
						</div>
						<div class="pas1__title-text title-wrp__text big-title">
							<?php echo get_post_meta(get_the_ID(), 'about_title', true);?>
						</div>
						<div class="pas1__title-desk title-wrp__desk def-text">
							<?php echo get_post_meta(get_the_ID(), 'about_desk_text', true);?>
						</div>
					</div>

					<div class="scroll-section__list-wrp">
						<ul class="scroll-section__list">
							<li class="scroll-section__item">
								<div class="scroll-section__icon img-wrp">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__icon.svg" alt="svg">
									<lottie-player class="s2__lottie-icon1" src="<?php bloginfo('template_url'); ?>/assets/lottie//s2/1.json" background="transparent" speed="1" autoplay loop></lottie-player>
								</div>
								<div class="scroll-section__text ul-small-text main-btn">
									<div class="main-btn__text ul-small-text textMt10">Самовыкуп</div>
									<div class="main-btn__effect"></div>
								</div>
							</il>
							<li class="scroll-section__item">
								<div class="scroll-section__icon img-wrp dashboard-work-active">
									<div class="dashboard-work-lights">
										<div></div>
										<div></div>
									</div>
									<img src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__icon2.svg" alt="svg">
								</div>
								<div class="scroll-section__text ul-small-text main-btn">
									<div class="main-btn__text ul-small-text textMt10">BBZ</div>
									<div class="main-btn__effect"></div>
								</div>
							</li>
							<li class="scroll-section__item">
								<div class="scroll-section__icon img-wrp">
									<lottie-player class="s2__lottie-icon3" src="<?php bloginfo('template_url'); ?>/assets/lottie//s2/3.json" background="transparent" speed="1" autoplay loop></lottie-player>
									<img src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__icon3.svg" alt="svg">
								</div>
								<div class="scroll-section__text ul-small-text main-btn">
									<div class="main-btn__text ul-small-text textMt05 text-web text-tab">Накрутка рейтинга</div>
									<div class="main-btn__text ul-small-text textMt05 text-mob">Накрутка</div>
									<div class="main-btn__effect"></div>
								</div>
							</li>
							<li class="scroll-section__item">
								<div class="scroll-section__icon img-wrp">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__icon4.svg" alt="svg">
								</div>
								<div class="scroll-section__text ul-small-text main-btn">
									<div class="main-btn__text ul-small-text textMt15">WB аккаунт</div>
									<div class="main-btn__effect"></div>
								</div>
							</li>
							<li class="scroll-section__item">
								<div class="scroll-section__icon img-wrp">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__icon5.svg" alt="svg">
									<lottie-player class="s2__lottie-icon2" src="<?php bloginfo('template_url'); ?>/assets/lottie//s2/2.json" background="transparent" speed="1" autoplay loop></lottie-player>
								</div>
								<div class="scroll-section__text ul-small-text main-btn">
									<div class="main-btn__text ul-small-text textMt15">Статистика</div>
									<div class="main-btn__effect"></div>
								</div>
							</li>
							<li class="scroll-section__item">
								<div class="scroll-section__item-icon-wrp">
									<span class="scroll-section__item-icon-text scroll-section__item-icon-text--float animatedNumberFloat">4.9</span>
									<div class="scroll-section__icon img-wrp">
										<img src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__icon6.svg" alt="svg">
									</div>
								</div>
								<div class="scroll-section__text ul-small-text main-btn">
									<div class="main-btn__text ul-small-text textMt15">Репутация</div>
									<div class="main-btn__effect"></div>
								</div>
							</li>
						</ul>

						<div class="scroll-section__list-bg img-wrp">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/scroll-section/scroll-section__list-bg.svg" alt="svg">
						</div>

						<div class="scroll-section__list-bg-line img-wrp">
							<svg width="802" height="260" viewBox="0 0 802 260" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M774.1 238.204L800.597 201.034C800.859 200.688 801 200.265 801 199.831V133.033C801 132.53 800.81 132.045 800.469 131.675L774.031 103.075C773.69 102.705 773.5 102.22 773.5 101.717V21.5858C773.5 21.051 773.286 20.5385 772.905 20.1627L754.084 1.57692C753.71 1.20728 753.205 1 752.679 1L724.075 1C723.547 1 723.04 1.209 722.665 1.58139L703.71 20.4186C703.335 20.791 702.828 21 702.3 21L529.776 21C529.277 21 528.796 20.8131 528.427 20.4761L512.073 5.52395C511.704 5.18691 511.223 5.00001 510.724 5.00001H291.276C290.777 5.00001 290.296 5.18691 289.927 5.52395L273.573 20.4761C273.204 20.8131 272.723 21 272.224 21H29.4183C28.8354 21 28.2814 21.2544 27.9015 21.6965L1.48316 52.4378C1.17142 52.8005 1 53.263 1 53.7413V142.967C1 143.47 1.18973 143.955 1.53134 144.325L27.9687 172.925C28.3103 173.295 28.5 173.78 28.5 174.283V238.414C28.5 238.949 28.7142 239.462 29.0947 239.837L47.9158 258.423C48.2901 258.793 48.795 259 49.3211 259H77.9252C78.4535 259 78.9603 258.791 79.335 258.419L98.29 239.581C98.6647 239.209 99.1715 239 99.6998 239H648H772.503C773.131 239 773.722 238.705 774.1 238.204Z" stroke="#323F5F" stroke-width="0.5"/>
								<path d="M715.597 188.32L732.503 169.066C732.823 168.701 733 168.232 733 167.747V83.5758C733 83.0777 732.814 82.5975 732.479 82.2293L724.67 73.6535C724.291 73.2372 723.754 73 723.192 73H529.776C529.277 73 528.796 73.1869 528.427 73.5239L512.073 88.4761C511.704 88.8131 511.223 89 510.724 89H291.276C290.777 89 290.296 88.8131 289.927 88.4761L273.573 73.5239C273.204 73.1869 272.723 73 272.224 73H89.3579C88.8101 73 88.2863 73.2247 87.9087 73.6216L71.5509 92.9209C71.1972 93.2927 71 93.7862 71 94.2993V179.362C71 179.897 71.2145 180.41 71.5956 180.786L79.3406 188.424C79.7148 188.793 80.2193 189 80.745 189H714.095C714.67 189 715.218 188.752 715.597 188.32Z" stroke="#323F5F" stroke-width="0.5"/>
								<path d="M661 28.9998L704.685 28.9998C705.207 28.9998 705.709 28.7954 706.083 28.4302L726.917 8.06963C727.291 7.70445 727.793 7.5 728.315 7.5L749.691 7.5C750.21 7.5 750.708 7.70152 751.081 8.06203L764.89 21.4104C765.28 21.7872 765.5 22.3062 765.5 22.8484V104.717C765.5 105.22 765.69 105.705 766.031 106.075L792.469 134.675C792.81 135.045 793 135.529 793 136.033V196.841C793 197.269 792.863 197.686 792.609 198.03L765.5 230.073C765.123 230.583 764.526 230.885 763.891 230.885L148 230L96.9426 229.5C96.4186 229.5 95.9155 229.706 95.5415 230.073L76.3335 250.427C75.9595 250.794 75.4564 251 74.9324 251H52.3186C51.794 251 51.2904 250.794 50.9163 250.426L37.0977 236.838C36.7154 236.462 36.5 235.948 36.5 235.412V170.788C36.5 170.281 36.3081 169.794 35.9629 169.424L9.53707 141.076C9.19192 140.706 9 140.219 9 139.712V57.2381C9 56.7617 9.17005 56.301 9.47954 55.9388L31.9012 29.7007C32.2812 29.256 32.8368 29 33.4217 29H274.224C274.723 29 275.204 28.8131 275.573 28.476L291.927 13.5239C292.296 13.1869 292.777 13 293.276 13H508.724C509.223 13 509.704 13.1869 510.073 13.5239L526.427 28.476C526.796 28.8131 527.277 29 527.776 29H661.5" stroke="#323F5F" stroke-width="0.5"/>
								<path d="M719.151 197L740.516 172.174C740.828 171.811 741 171.348 741 170.869V76.5853C741 76.0815 740.81 75.5963 740.468 75.2266L730.075 64L527.776 64C527.277 64 526.796 64.1869 526.427 64.524L510.073 79.4761C509.704 79.8131 509.223 80 508.724 80L293.276 80C292.777 80 292.296 79.8131 291.927 79.4761L275.573 64.5239C275.204 64.1869 274.723 64 274.224 64H84.8493L63.4841 88.8259C63.1718 89.1888 63 89.6517 63 90.1305V184.29C63 184.867 63.2492 185.416 63.6837 185.796L76.5 197L141 197H719.151Z" stroke="#323F5F" stroke-width="0.5"/>
								<path d="M661 37L679.672 37C680.202 37 680.711 37.2107 681.086 37.5858L686.914 43.4142C687.289 43.7893 687.798 44 688.328 44L743.07 44C743.659 44 744.219 44.2605 744.599 44.7117L751.53 52.9417C751.834 53.3023 752 53.7585 752 54.2299V114.74C752 115.229 752.18 115.702 752.505 116.068L773.495 139.682C773.82 140.048 774 140.521 774 141.01V182.259C774 182.737 773.829 183.199 773.517 183.562L747.099 214.304C746.719 214.746 746.165 215 745.582 215L641 215L124.391 215C123.824 215 123.283 214.759 122.904 214.338L115.096 205.662C114.717 205.241 114.176 205 113.609 205H62.778C62.2776 205 61.7954 204.812 61.4265 204.474L50.6486 194.594C50.2353 194.216 50 193.681 50 193.12V161.26C50 160.771 49.8202 160.298 49.4948 159.932L28.5052 136.318C28.1798 135.952 28 135.479 28 134.99V74.8441C28 74.3044 28.2181 73.7876 28.6048 73.4111L65.4176 37.5671C65.791 37.2035 66.2917 37 66.8129 37L276.224 37C276.723 37 277.204 36.8131 277.573 36.4761L293.927 21.5239C294.296 21.1869 294.777 21 295.276 21H506.724C507.223 21 507.704 21.1869 508.073 21.5239L524.427 36.4761C524.796 36.8131 525.277 37 525.776 37H661.5" stroke="#323F5F" stroke-width="0.5"/>
							</svg>
							<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie//chang-slider-animation.json" background="transparent" speed="0.5" autoplay loop></lottie-player>
						</div>

						<div class="scroll-section__bg-light"></div>
					</div>

					<div class="pps1__text pas1__text-bg-block str-text">
						<?php echo get_post_meta(get_the_ID(), 'about_first_text', true);?>
						<div class="pps1__top-menu-ppl-info">
							<div class="pps1__ppl-icon img-wrp">
								<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('page', $page_id);
									$image_field = $pod->field('about_user_img');
									if (!empty($image_field)) {
										$image_url = wp_get_attachment_url($image_field['ID']);
										echo '<img src="' . $image_url . '" alt="icon">';
									}
								?>
							</div>
							<div class="pps1__top-menu-text-wrp">
								<div class="pps1__ppl-name def-text"><?php echo get_post_meta(get_the_ID(), 'about_user_name', true);?></div>
								<div class="pps1__ppl-text small-text"><?php echo get_post_meta(get_the_ID(), 'about_user_status', true);?></div>
							</div>
						</div>

						<div class="pps1__text-bg img-wrp">
							<svg class="svg-web" width="800" height="250" viewBox="0 0 800 250" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g filter="url(#filter0_b_2728_779)">
								<rect width="800" height="250" rx="24" fill="url(#paint0_linear_2728_779)"/>
								<rect x="0.25" y="0.25" width="799.5" height="249.5" rx="23.75" stroke="url(#paint1_linear_2728_779)" stroke-width="0.5"/>
								</g>
								<defs>
								<filter id="filter0_b_2728_779" x="-110" y="-110" width="1020" height="470" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"/>
								<feGaussianBlur in="BackgroundImageFix" stdDeviation="55"/>
								<feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_2728_779"/>
								<feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_2728_779" result="shape"/>
								</filter>
								<linearGradient id="paint0_linear_2728_779" x1="400" y1="0" x2="400" y2="250" gradientUnits="userSpaceOnUse">
								<stop stop-color="#131829"/>
								<stop offset="1" stop-color="#0C0E1A"/>
								</linearGradient>
								<linearGradient id="paint1_linear_2728_779" x1="400" y1="0" x2="400" y2="250" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"/>
								<stop offset="0.469183" stop-color="#2C3A65"/>
								<stop offset="1" stop-color="#272C3D"/>
								</linearGradient>
								</defs>
							</svg>						
							<svg class="svg-tab" width="680" height="276" viewBox="0 0 680 276" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g filter="url(#filter0_b_2747_55148)">
								<rect width="680" height="276" rx="24" fill="url(#paint0_linear_2747_55148)"/>
								<rect x="0.25" y="0.25" width="679.5" height="275.5" rx="23.75" stroke="url(#paint1_linear_2747_55148)" stroke-width="0.5"/>
								</g>
								<defs>
								<filter id="filter0_b_2747_55148" x="-110" y="-110" width="900" height="496" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"/>
								<feGaussianBlur in="BackgroundImageFix" stdDeviation="55"/>
								<feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_2747_55148"/>
								<feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_2747_55148" result="shape"/>
								</filter>
								<linearGradient id="paint0_linear_2747_55148" x1="340" y1="0" x2="340" y2="276" gradientUnits="userSpaceOnUse">
								<stop stop-color="#131829"/>
								<stop offset="1" stop-color="#0C0E1A"/>
								</linearGradient>
								<linearGradient id="paint1_linear_2747_55148" x1="340" y1="0" x2="340" y2="276" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"/>
								<stop offset="0.469183" stop-color="#2C3A65"/>
								<stop offset="1" stop-color="#272C3D"/>
								</linearGradient>
								</defs>
						  </svg>										
							<svg class="svg-mob" width="328" height="202" viewBox="0 0 328 202" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g filter="url(#filter0_b_2785_14490)">
								<rect width="328" height="202" rx="12" fill="url(#paint0_linear_2785_14490)"/>
								<rect x="0.25" y="0.25" width="327.5" height="201.5" rx="11.75" stroke="url(#paint1_linear_2785_14490)" stroke-width="0.5"/>
								</g>
								<defs>
								<filter id="filter0_b_2785_14490" x="-110" y="-110" width="548" height="422" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"/>
								<feGaussianBlur in="BackgroundImageFix" stdDeviation="55"/>
								<feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_2785_14490"/>
								<feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_2785_14490" result="shape"/>
								</filter>
								<linearGradient id="paint0_linear_2785_14490" x1="164" y1="0" x2="164" y2="202" gradientUnits="userSpaceOnUse">
								<stop stop-color="#131829"/>
								<stop offset="1" stop-color="#0C0E1A"/>
								</linearGradient>
								<linearGradient id="paint1_linear_2785_14490" x1="164" y1="0" x2="164" y2="202" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212941"/>
								<stop offset="0.469183" stop-color="#2C3A65"/>
								<stop offset="1" stop-color="#272C3D"/>
								</linearGradient>
								</defs>
						  </svg>								
						</div>
					</div>

					<div class="pas1__bold-text pas1__bold-text1 str-text">
						<?php echo get_post_meta(get_the_ID(), 'about_text_strong1', true);?>
					</div>
					<div class="pas1__text pas1__text1 def-text">
						<?php echo get_post_meta(get_the_ID(), 'about_text_def1', true);?>
					</div>
					<div class="pas1__text pas1__text2 def-text">
						<?php echo get_post_meta(get_the_ID(), 'about_text_def2', true);?>
					</div>

					<div class="pas1__bold-text pas1__bold-text2 str-text">
						<?php echo get_post_meta(get_the_ID(), 'about_text_strong2', true);?>
					</div>
					<div class="pas1__text pas1__text3 def-text">
						<?php echo get_post_meta(get_the_ID(), 'about_text_def3', true);?>
					</div>
					<div class="pas1__text pas1__text4 def-text">
						<?php echo get_post_meta(get_the_ID(), 'about_text_def4', true);?>
					</div>

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
</body>
</html>
