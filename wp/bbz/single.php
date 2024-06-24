<?php
/*
Template Name: Page Post
*/
?>
<?php  get_header($name); ?>
	<div class="scroll-container other-page page-post">
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
			<section class="page-post-s1 pps1">
				<div class="pps1__container container">
					<div class="pps1__title title-wrp">
						<div class="pps1__pre-title title-wrp__pre-title pre-title pps1__pre-title--one">
							<div class="pre-title-lp img-wrp">
								<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
							</div>
							<a href="<?php echo home_url('/page-blog'); ?>" class="pps1__pre-title-text title-wrp__pre-title-text small-text">Назад в блог</a>
							<div class="pre-title-lp img-wrp">
								<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
							</div>
						</div>
						<div class="pps1__title-text title-wrp__text big-title">
							<?php the_title(); ?>
						</div>
					</div>

					<div class="pps1__icon img-wrp">
						<?php if (has_post_thumbnail()) : ?>
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" loading="lazy">
						<?php else : ?>
							<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/pps1__icon.svg" alt="svg" loading="lazy">
							<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/pps1__icon-tab.svg" alt="svg" loading="lazy">
							<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/pps1__icon-mob.svg" alt="svg" loading="lazy">
						<?php endif; ?>
					</div>

					<div class="pps1__top-menu">
						<div class="pps1__top-menu-ppl-info">
							<div class="pps1__ppl-icon img-wrp">
							<?php
									$current_page = get_post();
									$page_id = $current_page->ID;
									$pod = pods('post', $page_id);
									$image_field = $pod->field('blog_avatar');
									if (!empty($image_field)) {
										$image_url = wp_get_attachment_url($image_field['ID']);
										echo '<img src="' . $image_url . '" alt="icon">';
									}
								?>
							</div>
							<div class="pps1__top-menu-text-wrp">
								<div class="pps1__ppl-name def-text"><?php echo get_post_meta(get_the_ID(), 'blog_user_name', true);?></div>
								<div class="pps1__ppl-text small-text"><?php echo get_post_meta(get_the_ID(), 'blog_user_status', true);?></div>
							</div>
						</div>
						<ul class="pps1__top-menu-soc-list">
							<?php
								$blog_user_link_tw = get_post_meta(get_the_ID(), 'blog_user_link_tw', true);
								if (!empty($blog_user_link_tw)) {
										echo '<li class="pps1__top-menu-soc-item">
														<a href="' . esc_url($blog_user_link_tw) . '" target="_blank" class="pps1__top-menu-soc-link img-wrp">
																<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<g filter="url(#filter0_b_2728_6343)">
																				<circle cx="18" cy="18" r="18" fill="url(#paint0_linear_2728_6343)"/>
																				<circle cx="18" cy="18" r="17.75" stroke="url(#paint1_linear_2728_6343)" stroke-width="0.5"/>
																		</g>
																		<g clip-path="url(#clip0_2728_6343)">
																				<path d="M19.1209 17.0812L23.4921 12H22.4563L18.6607 16.4119L15.6293 12H12.1328L16.717 18.6716L12.1328 24H13.1687L17.1769 19.3409L20.3783 24H23.8748L19.1206 17.0812H19.1209ZM17.7021 18.7304L17.2376 18.066L13.542 12.7798H15.133L18.1155 17.046L18.5799 17.7103L22.4567 23.2557H20.8657L17.7021 18.7306V18.7304Z" fill="#BAD0EC"/>
																		</g>
																		<defs>
																				<filter id="filter0_b_2728_6343" x="-110" y="-110" width="256" height="256" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																						<feFlood flood-opacity="0" result="BackgroundImageFix"/>
																						<feGaussianBlur in="BackgroundImageFix" stdDeviation="55"/>
																						<feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_2728_6343"/>
																						<feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_2728_6343" result="shape"/>
																				</filter>
																				<linearGradient id="paint0_linear_2728_6343" x1="18" y1="0" x2="18" y2="36" gradientUnits="userSpaceOnUse">
																						<stop stop-color="#131829"/>
																						<stop offset="1" stop-color="#0C0E1A"/>
																				</linearGradient>
																				<linearGradient id="paint1_linear_2728_6343" x1="18" y1="0" x2="18" y2="36" gradientUnits="userSpaceOnUse">
																						<stop stop-color="#212941"/>
																						<stop offset="0.469183" stop-color="#2C3A65"/>
																						<stop offset="1" stop-color="#272C3D"/>
																				</linearGradient>
																				<clipPath id="clip0_2728_6343">
																						<rect width="12" height="12" fill="white" transform="translate(12 12)"/>
																				</clipPath>
																		</defs>
																</svg>									
														</a>
													</li>';
								}
							?>

							<?php
								$blog_user_link_vk = get_post_meta(get_the_ID(), 'blog_user_link_vk', true);
								if (!empty($blog_user_link_vk)) {
										echo '<li class="pps1__top-menu-soc-item">
														<a href="' . esc_url($blog_user_link_vk) . '" target="_blank" class="pps1__top-menu-soc-link img-wrp">
															<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
																<g filter="url(#filter0_b_2728_6340)">
																<circle cx="18" cy="18" r="18" fill="url(#paint0_linear_2728_6340)"/>
																<circle cx="18" cy="18" r="17.75" stroke="url(#paint1_linear_2728_6340)" stroke-width="0.5"/>
																</g>
																<path d="M25.8607 21.0753C25.8607 21.0137 25.801 21.0137 25.801 20.9521C25.5623 20.4589 25.0251 19.8425 24.309 19.1644C23.9509 18.8562 23.7718 18.6096 23.6525 18.4863C23.4734 18.2397 23.4734 18.0548 23.5331 17.8082C23.5928 17.6233 23.8315 17.3151 24.2493 16.7603C24.488 16.4521 24.6074 16.2671 24.7864 16.0822C25.6816 14.8493 26.0994 14.0479 25.98 13.6781L25.9204 13.6164C25.8607 13.5548 25.801 13.4932 25.6816 13.4932C25.5623 13.4315 25.3832 13.4315 25.2042 13.4932H22.9363C22.8766 13.4932 22.8766 13.4932 22.7572 13.4932C22.6976 13.4932 22.6379 13.4932 22.6379 13.4932H22.5782H22.5185L22.4588 13.5548C22.3991 13.6164 22.3991 13.6164 22.3991 13.6781C22.1604 14.3562 21.862 14.911 21.5636 15.5274C21.3846 15.8356 21.2055 16.1438 21.0265 16.3904C20.8474 16.637 20.7281 16.8219 20.6087 16.9452C20.4893 17.0685 20.37 17.1301 20.3103 17.2534C20.2506 17.3151 20.1313 17.3767 20.1313 17.3151C20.0716 17.3151 20.0119 17.3151 20.0119 17.2534C19.9522 17.1918 19.8925 17.1301 19.8328 17.0685C19.7732 17.0068 19.7732 16.8836 19.7135 16.7603C19.7135 16.637 19.7135 16.5137 19.7135 16.4521C19.7135 16.3904 19.7135 16.2055 19.7135 16.0822C19.7135 15.8973 19.7135 15.774 19.7135 15.7123C19.7135 15.5274 19.7135 15.2808 19.7135 15.0342C19.7135 14.7877 19.7135 14.6027 19.7135 14.4794C19.7135 14.3562 19.7135 14.1712 19.7135 14.0479C19.7135 13.863 19.7135 13.7397 19.7135 13.6781C19.7135 13.6164 19.6538 13.4931 19.6538 13.4315C19.5941 13.3699 19.5344 13.3082 19.4748 13.2466C19.4151 13.1849 19.2957 13.1849 19.236 13.1233C18.9376 13.0616 18.5795 13 18.1618 13C17.2069 13 16.5504 13.0616 16.3116 13.1849C16.1923 13.2466 16.0729 13.3082 16.0132 13.4315C15.8939 13.5548 15.8939 13.6164 15.9536 13.6164C16.252 13.6781 16.4907 13.8014 16.6101 13.9863L16.6697 14.1096C16.7294 14.1712 16.7294 14.2945 16.7891 14.4794C16.8488 14.6644 16.8488 14.8493 16.8488 15.0959C16.8488 15.4658 16.8488 15.8356 16.8488 16.0822C16.8488 16.3904 16.7891 16.5753 16.7891 16.7603C16.7891 16.9452 16.7294 17.0685 16.6697 17.1301C16.6101 17.2534 16.6101 17.3151 16.5504 17.3151C16.5504 17.3151 16.5504 17.3767 16.4907 17.3767C16.431 17.3767 16.3713 17.4384 16.252 17.4384C16.1923 17.4384 16.0729 17.3767 16.0132 17.3151C15.8939 17.2534 15.7745 17.1301 15.7148 17.0069C15.5955 16.8836 15.4761 16.6986 15.3567 16.4521C15.2374 16.2055 15.0583 15.9589 14.939 15.589L14.8196 15.3425C14.7599 15.2192 14.6406 14.9726 14.5212 14.6644C14.4018 14.3562 14.2825 14.1096 14.1631 13.8014C14.1034 13.6781 14.0438 13.6164 13.9841 13.5548H13.9244C13.9244 13.5548 13.8647 13.4932 13.805 13.4932C13.7453 13.4932 13.6857 13.4315 13.626 13.4315H11.4775C11.2387 13.4315 11.1194 13.4931 11.0597 13.5548L11 13.6164C11 13.6164 11 13.6781 11 13.7397C11 13.8014 11 13.863 11.0597 13.9863C11.3581 14.726 11.7162 15.4658 12.0743 16.2055C12.4324 16.8836 12.7904 17.5 13.0292 17.9315C13.3276 18.363 13.5663 18.7945 13.8647 19.1644C14.1631 19.5343 14.3422 19.7808 14.4018 19.9041C14.5212 20.0274 14.5809 20.089 14.6406 20.1507L14.8196 20.3356C14.939 20.4589 15.118 20.6438 15.3567 20.8288C15.5955 21.0137 15.8939 21.1986 16.1923 21.3836C16.4907 21.5685 16.8488 21.6918 17.2069 21.8151C17.6246 21.9384 17.9827 22 18.3408 21.9384H19.236C19.4151 21.9384 19.5344 21.8767 19.6538 21.7534L19.7135 21.6918C19.7135 21.6301 19.7732 21.6301 19.7732 21.5685C19.7732 21.5069 19.7732 21.4452 19.7732 21.3219C19.7732 21.0753 19.7732 20.8904 19.8328 20.7055C19.8925 20.5206 19.8925 20.3973 19.9522 20.274C20.0119 20.1507 20.0716 20.089 20.1313 20.0274C20.1909 19.9658 20.2506 19.9041 20.2506 19.9041H20.3103C20.4297 19.8425 20.6087 19.9041 20.7281 20.0274C20.9071 20.1507 21.0862 20.3356 21.2055 20.5206C21.3249 20.7055 21.5039 20.8904 21.7427 21.137C21.9814 21.3836 22.1604 21.5685 22.2798 21.6301L22.4588 21.7534C22.5782 21.8151 22.6976 21.8767 22.8766 21.9384C23.0556 22 23.175 22 23.2944 22L25.3235 21.9384C25.5026 21.9384 25.6816 21.8767 25.801 21.8151C25.9204 21.7534 25.98 21.6918 25.98 21.5685C25.98 21.5069 25.98 21.3836 25.98 21.3219C25.8607 21.1986 25.8607 21.137 25.8607 21.0753Z" fill="#BAD0EC"/>
																<defs>
																<filter id="filter0_b_2728_6340" x="-110" y="-110" width="256" height="256" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																<feFlood flood-opacity="0" result="BackgroundImageFix"/>
																<feGaussianBlur in="BackgroundImageFix" stdDeviation="55"/>
																<feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_2728_6340"/>
																<feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_2728_6340" result="shape"/>
																</filter>
																<linearGradient id="paint0_linear_2728_6340" x1="18" y1="0" x2="18" y2="36" gradientUnits="userSpaceOnUse">
																<stop stop-color="#131829"/>
																<stop offset="1" stop-color="#0C0E1A"/>
																</linearGradient>
																<linearGradient id="paint1_linear_2728_6340" x1="18" y1="0" x2="18" y2="36" gradientUnits="userSpaceOnUse">
																<stop stop-color="#212941"/>
																<stop offset="0.469183" stop-color="#2C3A65"/>
																<stop offset="1" stop-color="#272C3D"/>
																</linearGradient>
																</defs>
															</svg>								
														</a>
													</li>';
								}
							?>

							<?php
								$blog_user_link_tg = get_post_meta(get_the_ID(), 'blog_user_link_tg', true);
								if (!empty($blog_user_link_tg)) {
										echo '<li class="pps1__top-menu-soc-item">
														<a href="' . esc_url($blog_user_link_tg) . '" target="_blank" class="pps1__top-menu-soc-link img-wrp">
															<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
																<g filter="url(#filter0_b_2728_6337)">
																<circle cx="18" cy="18" r="18" fill="url(#paint0_linear_2728_6337)"/>
																<circle cx="18" cy="18" r="17.75" stroke="url(#paint1_linear_2728_6337)" stroke-width="0.5"/>
																</g>
																<path d="M11.2455 16.7599L14.4642 17.9392L15.7189 21.906C15.7734 22.174 16.1008 22.2276 16.319 22.0668L18.1192 20.6194C18.2829 20.4586 18.5557 20.4586 18.7739 20.6194L21.9925 22.9244C22.2108 23.0853 22.5381 22.978 22.5926 22.71L24.993 11.453C25.0475 11.185 24.7748 10.917 24.502 11.0242L11.2455 16.063C10.9182 16.1703 10.9182 16.6527 11.2455 16.7599ZM15.5552 17.3496L21.8834 13.5436C21.9925 13.49 22.1016 13.6508 21.9925 13.7044L16.81 18.4753C16.6463 18.6361 16.4826 18.8505 16.4826 19.1185L16.319 20.405C16.319 20.5658 16.0462 20.6194 15.9917 20.405L15.337 18.0464C15.1733 17.7784 15.2825 17.4568 15.5552 17.3496Z" fill="#BAD0EC"/>
																<defs>
																<filter id="filter0_b_2728_6337" x="-110" y="-110" width="256" height="256" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
																<feFlood flood-opacity="0" result="BackgroundImageFix"/>
																<feGaussianBlur in="BackgroundImageFix" stdDeviation="55"/>
																<feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_2728_6337"/>
																<feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_2728_6337" result="shape"/>
																</filter>
																<linearGradient id="paint0_linear_2728_6337" x1="18" y1="0" x2="18" y2="36" gradientUnits="userSpaceOnUse">
																<stop stop-color="#131829"/>
																<stop offset="1" stop-color="#0C0E1A"/>
																</linearGradient>
																<linearGradient id="paint1_linear_2728_6337" x1="18" y1="0" x2="18" y2="36" gradientUnits="userSpaceOnUse">
																<stop stop-color="#212941"/>
																<stop offset="0.469183" stop-color="#2C3A65"/>
																<stop offset="1" stop-color="#272C3D"/>
																</linearGradient>
																</defs>
															</svg>						
														</a>
													</li>';
								}
							?>
						</ul>

						<div class="pps1__top-menu-line img-wrp">
							<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/accordion-line-decor2.svg" alt="svg" loading="lazy">
							<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/accordion-line-decor-mob.svg" alt="svg" loading="lazy">
						</div>
					</div>

					<div class="pps1__nav">
						<div class="pps1__nav-title def-text">Содержание</div>
					</div>
					
					<div class="post-content">
						<?php
							// Получаем контент записи
							$content = get_the_content(null, false, $post_id);
							
							// Выводим контент
							echo apply_filters('the_content', $content);
						?>
					</div>


					 <div class="pps1__last-block">
						<div class="pps1__last-block-date small-text"><?php echo date('d.m.Y'); ?></div>
						<div class="pps1__title title-wrp">
							<div class="pps1__pre-title title-wrp__pre-title pre-title pps1__pre-title--last">
								<div class="pre-title-lp img-wrp">
									<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
								</div>
								<a href="<?php echo home_url('/page-blog'); ?>" class="pps1__pre-title-text title-wrp__pre-title-text small-text">Назад в блог</a>
								<div class="pre-title-lp img-wrp">
									<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
								</div>
							</div>
						</div>

						<div class="pps1__last-block-wiever-counter-wrp">
							<div class="pps1__last-block-wiever-icon img-wrp">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 6C8.17879 6 4.71351 8.10432 2.15649 11.5223C1.94784 11.8023 1.94784 12.1935 2.15649 12.4736C4.71351 15.8957 8.17879 18 12 18C15.8212 18 19.2865 15.8957 21.8435 12.4777C22.0522 12.1977 22.0522 11.8065 21.8435 11.5264C19.2865 8.10432 15.8212 6 12 6ZM12.2741 16.2251C9.73755 16.3857 7.64284 14.2814 7.80239 11.7241C7.93331 9.61565 9.63118 7.90666 11.7259 7.77488C14.2625 7.61428 16.3572 9.7186 16.1976 12.2759C16.0626 14.3802 14.3647 16.0892 12.2741 16.2251ZM12.1473 14.2732C10.7808 14.3596 9.65163 13.2272 9.74164 11.8518C9.81119 10.7152 10.7276 9.79684 11.8568 9.72272C13.2233 9.63624 14.3525 10.7687 14.2625 12.1441C14.1888 13.2848 13.2724 14.2032 12.1473 14.2732Z" fill="url(#paint0_linear_2728_6353)"/>
									<path d="M12.2899 16.4746L12.2903 16.4746C14.5076 16.3305 16.3041 14.5204 16.4471 12.2919L16.4471 12.2915C16.6159 9.58569 14.3986 7.35516 11.7101 7.52538C9.48837 7.6652 7.69152 9.47567 7.55287 11.7086C7.3841 14.4144 9.60146 16.6448 12.2899 16.4746ZM12.1318 14.0236L12.1315 14.0237C10.9163 14.1006 9.91089 13.0938 9.99111 11.8681L9.99117 11.867C10.053 10.856 10.8696 10.0382 11.8729 9.9722C13.0879 9.89549 14.0932 10.9021 14.013 12.1278L14.013 12.128C13.9473 13.1448 13.1296 13.9616 12.1318 14.0236ZM2.35687 11.6718C4.8799 8.29939 8.27742 6.25 12 6.25C15.7225 6.25 19.12 8.29935 21.643 11.6758C21.7857 11.8672 21.7857 12.1369 21.643 12.3283C19.12 15.7007 15.7225 17.75 12 17.75C8.2774 17.75 4.87986 15.7006 2.35684 12.324C2.21438 12.1327 2.21439 11.8631 2.35687 11.6718Z" stroke="url(#paint1_linear_2728_6353)" stroke-width="0.5"/>
									<defs>
									<linearGradient id="paint0_linear_2728_6353" x1="12" y1="6" x2="12" y2="18" gradientUnits="userSpaceOnUse">
									<stop stop-color="#354261"/>
									<stop offset="1" stop-color="#343C50"/>
									</linearGradient>
									<linearGradient id="paint1_linear_2728_6353" x1="12" y1="6" x2="10.1167" y2="17.5099" gradientUnits="userSpaceOnUse">
									<stop stop-color="#AEC4FA"/>
									<stop offset="1" stop-color="#7E90BA"/>
									</linearGradient>
									</defs>
								</svg>									
							</div>
							<span class="pps1__last-block-wiever-counter small-text">
								<?php if (function_exists('pvc_get_post_views')) : ?>
									<?php echo pvc_get_post_views(get_the_ID()); ?>
								<?php endif; ?>
							</span>
						</div>

						<div class="pps1__last-line img-wrp">
							<svg width="800" height="1" viewBox="0 0 800 1" fill="none" xmlns="http://www.w3.org/2000/svg">
								<line x1="2.18557e-08" y1="0.75" x2="800" y2="0.75007" stroke="url(#paint0_linear_2728_6348)" stroke-width="0.5"/>
								<defs>
								<linearGradient id="paint0_linear_2728_6348" x1="0" y1="1" x2="800" y2="1" gradientUnits="userSpaceOnUse">
								<stop stop-color="#323F5F" stop-opacity="0"/>
								<stop offset="0.197142" stop-color="#323F5F" stop-opacity="0.6"/>
								<stop offset="0.495" stop-color="#323F5F"/>
								<stop offset="0.847142" stop-color="#323F5F" stop-opacity="0.6"/>
								<stop offset="1" stop-color="#323F5F" stop-opacity="0"/>
								</linearGradient>
								</defs>
							</svg>							
						</div>						
					</div>

					<div class="pps1__ligting img-wrp">
						<svg class="svg-web" width="968" height="602" viewBox="0 0 968 602" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.15" filter="url(#filter0_f_2726_23474)">
								<path d="M485 60L884 518H84L485 60Z" fill="url(#paint0_linear_2726_23474)" />
							</g>
							<g opacity="0.05" filter="url(#filter1_f_2726_23474)">
								<path d="M485.5 279L685 518H285L485.5 279Z" fill="url(#paint1_linear_2726_23474)" />
							</g>
							<g opacity="0.05" filter="url(#filter2_f_2726_23474)">
								<path d="M484.25 279L584 518H384L484.25 279Z" fill="url(#paint2_linear_2726_23474)" />
							</g>
							<defs>
								<filter id="filter0_f_2726_23474" x="0" y="-24" width="968" height="626" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2726_23474" />
								</filter>
								<filter id="filter1_f_2726_23474" x="201" y="195" width="568" height="407" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2726_23474" />
								</filter>
								<filter id="filter2_f_2726_23474" x="300" y="195" width="368" height="407" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2726_23474" />
								</filter>
								<linearGradient id="paint0_linear_2726_23474" x1="507.5" y1="176.016" x2="507.5" y2="508" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint1_linear_2726_23474" x1="496.75" y1="339.541" x2="496.75" y2="512.782" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint2_linear_2726_23474" x1="489.875" y1="339.541" x2="489.875" y2="512.782" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>
						<svg class="svg-tab" width="768" height="622" viewBox="0 0 768 622" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.15" filter="url(#filter0_f_2748_89962)">
								<path d="M384.96 80L768 538H0L384.96 80Z" fill="url(#paint0_linear_2748_89962)" />
							</g>
							<g opacity="0.05" filter="url(#filter1_f_2748_89962)">
								<path d="M381.5 299L581 538H181L381.5 299Z" fill="url(#paint1_linear_2748_89962)" />
							</g>
							<g opacity="0.05" filter="url(#filter2_f_2748_89962)">
								<path d="M381.25 299L481 538H281L381.25 299Z" fill="url(#paint2_linear_2748_89962)" />
							</g>
							<defs>
								<filter id="filter0_f_2748_89962" x="-84" y="-4" width="936" height="626" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2748_89962" />
								</filter>
								<filter id="filter1_f_2748_89962" x="97" y="215" width="568" height="407" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2748_89962" />
								</filter>
								<filter id="filter2_f_2748_89962" x="197" y="215" width="368" height="407" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2748_89962" />
								</filter>
								<linearGradient id="paint0_linear_2748_89962" x1="406.56" y1="196.016" x2="406.56" y2="528" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint1_linear_2748_89962" x1="392.75" y1="359.541" x2="392.75" y2="532.782" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint2_linear_2748_89962" x1="386.875" y1="359.541" x2="386.875" y2="532.782" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>
						<svg class="svg-mob" width="360" height="448" viewBox="0 0 360 448" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.6">
								<g opacity="0.2" filter="url(#filter0_f_2788_13307)">
									<path d="M180.45 64L360 384H0L180.45 64Z" fill="url(#paint0_linear_2788_13307)" />
								</g>
								<g opacity="0.1" filter="url(#filter1_f_2788_13307)">
									<path d="M180.25 264L280 384H80L180.25 264Z" fill="url(#paint1_linear_2788_13307)" />
								</g>
								<g opacity="0.1" filter="url(#filter2_f_2788_13307)">
									<path d="M180.1 324L220 384H140L180.1 324Z" fill="url(#paint2_linear_2788_13307)" />
								</g>
							</g>
							<defs>
								<filter id="filter0_f_2788_13307" x="-64" y="0" width="488" height="448" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="32" result="effect1_foregroundBlur_2788_13307" />
								</filter>
								<filter id="filter1_f_2788_13307" x="16" y="200" width="328" height="248" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="32" result="effect1_foregroundBlur_2788_13307" />
								</filter>
								<filter id="filter2_f_2788_13307" x="76" y="260" width="208" height="188" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="32" result="effect1_foregroundBlur_2788_13307" />
								</filter>
								<linearGradient id="paint0_linear_2788_13307" x1="190.575" y1="145.059" x2="190.575" y2="377.013" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint1_linear_2788_13307" x1="185.875" y1="294.397" x2="185.875" y2="381.38" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint2_linear_2788_13307" x1="182.35" y1="339.199" x2="182.35" y2="382.69" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>
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

<!-- blog menu links -->
<script>
	// Получаем коллекцию элементов menuItems
	const menuItems = document.querySelectorAll('h2.wp-block-heading');
	menuItems.forEach((element, index) => {
	});

	// Получаем элемент bodyForItems, в который будем добавлять новые элементы
	const bodyForItems = document.querySelector('.pps1__nav');
	
	// Перебираем menuItems и создаем новые элементы <a> для каждого из них
	menuItems.forEach((element, index) => {
		// Создаем новый элемент <a>
		const newLink = document.createElement('a');
		
		// Устанавливаем атрибут href с id текущего элемента menuItems
		newLink.href = `#${element.id}`;
		// добавляем нужные классы 
		newLink.classList.add("pps1__nav-link");
		newLink.classList.add("def-text");
		// добавляем уникальный id нашим ссылкам
		element.id = `id-${index}`;
		
		// Устанавливаем текстовое содержимое с текстом текущего элемента menuItems
		newLink.textContent = element.textContent;
		// добавляем href новым линкам
		newLink.href = `#${element.id}`;
		
		// Добавляем новый элемент <a> в bodyForItems
		bodyForItems.appendChild(newLink);
	});
</script>

<?php  get_footer($name); ?>
</body>
</html>