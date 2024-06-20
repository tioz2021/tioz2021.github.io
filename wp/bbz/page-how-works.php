<?php
/*
Template Name: How Works
*/
?>

<?php  get_header($name); ?>

<div class="scroll-container other-page page-how-works phw">
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

				<a href="#" class="header__btn main-btn small-text">
					<span class="main-btn__text small-text">Купить лицензию</span>
					<div class="main-btn__effect"></div>
				</a>
			</div>
		</header>

		<main>
			<section class="page-how-works-s1 phws1">
				<div class="phws1__container container">
					<div class="phws1__title title-wrp">
						<div class="phws1__pre-title title-wrp__pre-title pre-title">
							<div class="pre-title-lp img-wrp">
								<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie//web/left.json" background="transparent" speed="1"></lottie-player>
							</div>
							<span class="phws1__pre-title-text title-wrp__pre-title-text small-text">Применение</span>
							<div class="pre-title-lp img-wrp">
								<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie//web/right.json" background="transparent" speed="1"></lottie-player>
							</div>
						</div>
						<div class="phws1__title-text title-wrp__text big-title">
							<?php echo get_post_meta(get_the_ID(), 'how_works_title', true);?>
						</div>
						<div class="phws1__title-desk title-wrp__desk def-text">
							<?php echo get_post_meta(get_the_ID(), 'how_works_desk', true);?>
						</div>
					</div>
	
					<div class="phws1__list-wrp"></div>
					<div class="phws1__list">
						<div class="phws1__item phws1__item1 def-text active">
							<?php
								$current_page = get_post();
								$page_id = $current_page->ID;
								$pod = pods('page', $page_id);
								$field = $pod->field('how_works_menu_name');
								echo $field[0];
							?>
						</div>
						<div class="phws1__item phws1__item2 def-text">
						<?php
								$current_page = get_post();
								$page_id = $current_page->ID;
								$pod = pods('page', $page_id);
								$field = $pod->field('how_works_menu_name');
								echo $field[1];
							?>
						</div>
						<div class="phws1__item phws1__item3 def-text">
						<?php
								$current_page = get_post();
								$page_id = $current_page->ID;
								$pod = pods('page', $page_id);
								$field = $pod->field('how_works_menu_name');
								echo $field[2];
							?>
						</div>
						<div class="phws1__line-bg img-wrp">
							<svg class="svg-web svg-tab" width="800" height="1" viewBox="0 0 800 1" fill="none" xmlns="http://www.w3.org/2000/svg">
								<line x1="2.18557e-08" y1="0.75" x2="800" y2="0.75007" stroke="url(#paint0_linear_2722_3980)" stroke-width="0.5"/>
								<defs>
								<linearGradient id="paint0_linear_2722_3980" x1="0" y1="1" x2="800" y2="1" gradientUnits="userSpaceOnUse">
								<stop stop-color="#323F5F" stop-opacity="0"/>
								<stop offset="0.197142" stop-color="#323F5F" stop-opacity="0.6"/>
								<stop offset="0.495" stop-color="#323F5F"/>
								<stop offset="0.847142" stop-color="#323F5F" stop-opacity="0.6"/>
								<stop offset="1" stop-color="#323F5F" stop-opacity="0"/>
								</linearGradient>
								</defs>
							</svg>								
							<svg class="svg-mob" width="328" height="1" viewBox="0 0 328 1" fill="none" xmlns="http://www.w3.org/2000/svg">
								<line x1="-2.27184e-08" y1="0.75" x2="328" y2="0.749972" stroke="url(#paint0_linear_4304_158)" stroke-width="0.5"/>
								<defs>
								<linearGradient id="paint0_linear_4304_158" x1="328" y1="0.999916" x2="0" y2="0.99996" gradientUnits="userSpaceOnUse">
								<stop stop-color="#212A41" stop-opacity="0.1"/>
								<stop offset="0.172142" stop-color="#212A41" stop-opacity="0.6"/>
								<stop offset="0.337142" stop-color="#212A41" stop-opacity="0.8"/>
								<stop offset="0.499974" stop-color="#212A41"/>
								<stop offset="0.667142" stop-color="#212A41" stop-opacity="0.8"/>
								<stop offset="0.832142" stop-color="#212A41" stop-opacity="0.6"/>
								<stop offset="1" stop-color="#212A41" stop-opacity="0.2"/>
								</linearGradient>
								</defs>
							</svg>								
						</div>
					</div>
	
					<div class="phws1__body phws1__body1 active active-effect">
						<div class="phws1__body-icon img-wrp">
							<?php
								$current_page = get_post();
								$page_id = $current_page->ID;
								$pod = pods('page', $page_id);
								$image_field = $pod->field('how_works_menu_one_icon');
								if (!empty($image_field)) {
									$image_url = wp_get_attachment_url($image_field[0]['ID']);
									echo '<img src="' . $image_url . '" alt="icon" loading="lazy">';
								}
							?>
						</div>
						<div class="phws1__body-text small-text">
							<?php
								$current_page = get_post();
								$page_id = $current_page->ID;
								$pod = pods('page', $page_id);
								$field = $pod->field('how_works_menu_one_text');
								echo $field[0];
							?>
						</div>
					</div>
					<div class="phws1__body phws1__body2">
						<div class="phws1__body-icon img-wrp">
							<?php
								$current_page = get_post();
								$page_id = $current_page->ID;
								$pod = pods('page', $page_id);
								$image_field = $pod->field('how_works_menu_one_icon');
								if (!empty($image_field)) {
									$image_url = wp_get_attachment_url($image_field[1]['ID']);
									echo '<img src="' . $image_url . '" alt="icon" loading="lazy">';
								}
							?>
						</div>
						<div class="phws1__body-text small-text">
							<?php
								$current_page = get_post();
								$page_id = $current_page->ID;
								$pod = pods('page', $page_id);
								$field = $pod->field('how_works_menu_one_text');
								echo $field[1];
							?>
						</div>
					</div>
					<div class="phws1__body phws1__body3">
						<div class="phws1__body-icon img-wrp">
							<?php
								$current_page = get_post();
								$page_id = $current_page->ID;
								$pod = pods('page', $page_id);
								$image_field = $pod->field('how_works_menu_one_icon');
								if (!empty($image_field)) {
									$image_url = wp_get_attachment_url($image_field[2]['ID']);
									echo '<img src="' . $image_url . '" alt="icon" loading="lazy">';
								}
							?>
						</div>
						<div class="phws1__body-text small-text">
							<?php
								$current_page = get_post();
								$page_id = $current_page->ID;
								$pod = pods('page', $page_id);
								$field = $pod->field('how_works_menu_one_text');
								echo $field[2];
							?>
						</div>
					</div>


					<div class="phws1__bg img-wrp">
						<svg width="968" height="601" viewBox="0 0 968 601" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.15" filter="url(#filter0_f_2722_2299)">
								<path d="M485 59L884 517H84L485 59Z" fill="url(#paint0_linear_2722_2299)" />
							</g>
							<g opacity="0.05" filter="url(#filter1_f_2722_2299)">
								<path d="M485.5 278L685 517H285L485.5 278Z" fill="url(#paint1_linear_2722_2299)" />
							</g>
							<g opacity="0.05" filter="url(#filter2_f_2722_2299)">
								<path d="M484.25 278L584 517H384L484.25 278Z" fill="url(#paint2_linear_2722_2299)" />
							</g>
							<defs>
								<filter id="filter0_f_2722_2299" x="0" y="-25" width="968" height="626" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2722_2299" />
								</filter>
								<filter id="filter1_f_2722_2299" x="201" y="194" width="568" height="407" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2722_2299" />
								</filter>
								<filter id="filter2_f_2722_2299" x="300" y="194" width="368" height="407" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2722_2299" />
								</filter>
								<linearGradient id="paint0_linear_2722_2299" x1="507.5" y1="175.016" x2="507.5" y2="507" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint1_linear_2722_2299" x1="496.75" y1="338.541" x2="496.75" y2="511.782" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint2_linear_2722_2299" x1="489.875" y1="338.541" x2="489.875" y2="511.782" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>
					</div>
				</div>

			</section>

			<section class="s14 s14-modifi s14_1 active active-effect">
				<div class="s14__container container">
					<div class="accordion">
						<?php
							$current_page = get_post();
							$page_id = $current_page->ID;
							$pod = pods('page', $page_id);
							$field1 = $pod->field('how_works_menu_one_question_title');
							$field2 = $pod->field('how_works_menu_one_question_text');
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
			<section class="s14 s14-modifi s14_2">
				<div class="s14__container container">
				<div class="s14__container container">
					<div class="accordion">
						<?php
							$current_page = get_post();
							$page_id = $current_page->ID;
							$pod = pods('page', $page_id);
							$field1 = $pod->field('how_works_menu_two_question_title');
							$field2 = $pod->field('how_works_menu_two_question_text');
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
				</div>
			</section>
			<section class="s14 s14-modifi s14_3">
				<div class="s14__container container">
				<div class="accordion">
						<?php
							$current_page = get_post();
							$page_id = $current_page->ID;
							$pod = pods('page', $page_id);
							$field1 = $pod->field('how_works_menu_three_question_title');
							$field2 = $pod->field('how_works_menu_three_question_text');
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