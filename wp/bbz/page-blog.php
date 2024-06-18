<?php
/*
Template Name: Page Blog
*/
?>
<?php  get_header($name); ?>
	<div class="scroll-container other-page page-blog">
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
			<section class="page-blog-s1 pb1">
				<div class="pb1__container container">
					<div class="pb1__title title-wrp">
						<div class="pb1__pre-title title-wrp__pre-title pre-title">
							<div class="pre-title-lp img-wrp">
								<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/left.json" background="transparent" speed="1"></lottie-player>
							</div>
							<span class="pb1__pre-title-text title-wrp__pre-title-text small-text">Блог</span>
							<div class="pre-title-lp img-wrp">
								<lottie-player class="" src="<?php bloginfo('template_url'); ?>/assets/lottie/web/right.json" background="transparent" speed="1"></lottie-player>
							</div>
						</div>
						<div class="pb1__title-text title-wrp__text big-title">
							Публикуем интересные статьи
						</div>
						<div class="pb1__title-desk title-wrp__desk def-text">
							Лайфхаки, повышения продаж и еще много чего <br>
							интересного
						</div>
					</div>

					<ul class="pb1__list">
						<?php
							$my_posts = get_posts( [
								'numberposts' => -1,
								'category'    => 0,
								'orderby'     => 'date',
								'order'       => 'DESC',
								'include'     => array(),
								'exclude'     => array(),
								'meta_key'    => '',
								'meta_value'  =>'',
								'post_type'   => 'post',
								'suppress_filters' => true, 
							] );
							
							foreach( $my_posts as $post ){
							setup_postdata( $post );
								?>
									<li class="pb1__item">
										<a href="<?php the_permalink(); ?>">
											<div class="pb1__item-icon img-wrp">
												<?php if (has_post_thumbnail()) : ?>
													<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" loading="lazy">
												<?php else : ?>
													<img src="<?php bloginfo('template_url'); ?>/assets/img/pb1__item-icon.svg" alt="default thumbnail" loading="lazy">
												<?php endif; ?>
											</div>
											<div class="pb1__item-info">
												<div class="pb1__item-title str-text"><?php the_title(); ?></div>
												<div class="pb1__item-text def-text">
													<?php echo get_post_meta(get_the_ID(), 'blog_text_main', true);?>
												</div>
												<div class="pb1__item-end">
													<div class="pb1__item-end-time small-text"><?php echo date('d.m.Y'); ?></div>
													<div class="pb1__item-end-wiever-wrp">
														<div class="pb1__item-end-wiever-icon img-wrp">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M12 6C8.17879 6 4.71351 8.10432 2.15649 11.5223C1.94784 11.8023 1.94784 12.1935 2.15649 12.4736C4.71351 15.8957 8.17879 18 12 18C15.8212 18 19.2865 15.8957 21.8435 12.4777C22.0522 12.1977 22.0522 11.8065 21.8435 11.5264C19.2865 8.10432 15.8212 6 12 6ZM12.2741 16.2251C9.73755 16.3857 7.64284 14.2814 7.80239 11.7241C7.93331 9.61565 9.63118 7.90666 11.7259 7.77488C14.2625 7.61428 16.3572 9.7186 16.1976 12.2759C16.0626 14.3802 14.3647 16.0892 12.2741 16.2251ZM12.1473 14.2732C10.7808 14.3596 9.65163 13.2272 9.74164 11.8518C9.81119 10.7152 10.7276 9.79684 11.8568 9.72272C13.2233 9.63624 14.3525 10.7687 14.2625 12.1441C14.1888 13.2848 13.2724 14.2032 12.1473 14.2732Z" fill="url(#paint0_linear_2726_20106)"/>
																<path d="M12.2899 16.4746L12.2903 16.4746C14.5076 16.3305 16.3041 14.5204 16.4471 12.2919L16.4471 12.2915C16.6159 9.58569 14.3986 7.35516 11.7101 7.52538C9.48837 7.6652 7.69152 9.47567 7.55287 11.7086C7.3841 14.4144 9.60146 16.6448 12.2899 16.4746ZM12.1318 14.0236L12.1315 14.0237C10.9163 14.1006 9.91089 13.0938 9.99111 11.8681L9.99117 11.867C10.053 10.856 10.8696 10.0382 11.8729 9.9722C13.0879 9.89549 14.0932 10.9021 14.013 12.1278L14.013 12.128C13.9473 13.1448 13.1296 13.9616 12.1318 14.0236ZM2.35687 11.6718C4.8799 8.29939 8.27742 6.25 12 6.25C15.7225 6.25 19.12 8.29935 21.643 11.6758C21.7857 11.8672 21.7857 12.1369 21.643 12.3283C19.12 15.7007 15.7225 17.75 12 17.75C8.2774 17.75 4.87986 15.7006 2.35684 12.324C2.21438 12.1327 2.21439 11.8631 2.35687 11.6718Z" stroke="url(#paint1_linear_2726_20106)" stroke-width="0.5"/>
																<defs>
																<linearGradient id="paint0_linear_2726_20106" x1="12" y1="6" x2="12" y2="18" gradientUnits="userSpaceOnUse">
																<stop stop-color="#354261"/>
																<stop offset="1" stop-color="#343C50"/>
																</linearGradient>
																<linearGradient id="paint1_linear_2726_20106" x1="12" y1="6" x2="10.1167" y2="17.5099" gradientUnits="userSpaceOnUse">
																<stop stop-color="#AEC4FA"/>
																<stop offset="1" stop-color="#7E90BA"/>
																</linearGradient>
																</defs>
															</svg>												
														</div>
														<div class="pb1__item-end-wiever-number small-text">
															<?php if (function_exists('pvc_get_post_views')) : ?>
																<?php echo pvc_get_post_views(get_the_ID()); ?>
															<?php endif; ?>
														</div>
													</div>
												</div>
											</div>
										</a>
									</li>
								<?php
							}
							
							wp_reset_postdata(); // reset $post
						?>

						<!--
						<li class="pb1__item">
							<a href="page-post.html">
								<div class="pb1__item-icon img-wrp">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/pb1__item-icon.svg" alt="svg" loading="lazy">
								</div>
								<div class="pb1__item-info">
									<div class="pb1__item-title str-text">Названия  статьи </div>
									<div class="pb1__item-text def-text">
										Все этапы пройдены. Оля отыскала
										перспективную нишу.Нашла интересный
										товар и поставщика. Сделала дизайн 
									</div>
									<div class="pb1__item-end">
										<div class="pb1__item-end-time small-text">1 день назад</div>
										<div class="pb1__item-end-wiever-wrp">
											<div class="pb1__item-end-wiever-icon img-wrp">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 6C8.17879 6 4.71351 8.10432 2.15649 11.5223C1.94784 11.8023 1.94784 12.1935 2.15649 12.4736C4.71351 15.8957 8.17879 18 12 18C15.8212 18 19.2865 15.8957 21.8435 12.4777C22.0522 12.1977 22.0522 11.8065 21.8435 11.5264C19.2865 8.10432 15.8212 6 12 6ZM12.2741 16.2251C9.73755 16.3857 7.64284 14.2814 7.80239 11.7241C7.93331 9.61565 9.63118 7.90666 11.7259 7.77488C14.2625 7.61428 16.3572 9.7186 16.1976 12.2759C16.0626 14.3802 14.3647 16.0892 12.2741 16.2251ZM12.1473 14.2732C10.7808 14.3596 9.65163 13.2272 9.74164 11.8518C9.81119 10.7152 10.7276 9.79684 11.8568 9.72272C13.2233 9.63624 14.3525 10.7687 14.2625 12.1441C14.1888 13.2848 13.2724 14.2032 12.1473 14.2732Z" fill="url(#paint0_linear_2726_20106)"/>
													<path d="M12.2899 16.4746L12.2903 16.4746C14.5076 16.3305 16.3041 14.5204 16.4471 12.2919L16.4471 12.2915C16.6159 9.58569 14.3986 7.35516 11.7101 7.52538C9.48837 7.6652 7.69152 9.47567 7.55287 11.7086C7.3841 14.4144 9.60146 16.6448 12.2899 16.4746ZM12.1318 14.0236L12.1315 14.0237C10.9163 14.1006 9.91089 13.0938 9.99111 11.8681L9.99117 11.867C10.053 10.856 10.8696 10.0382 11.8729 9.9722C13.0879 9.89549 14.0932 10.9021 14.013 12.1278L14.013 12.128C13.9473 13.1448 13.1296 13.9616 12.1318 14.0236ZM2.35687 11.6718C4.8799 8.29939 8.27742 6.25 12 6.25C15.7225 6.25 19.12 8.29935 21.643 11.6758C21.7857 11.8672 21.7857 12.1369 21.643 12.3283C19.12 15.7007 15.7225 17.75 12 17.75C8.2774 17.75 4.87986 15.7006 2.35684 12.324C2.21438 12.1327 2.21439 11.8631 2.35687 11.6718Z" stroke="url(#paint1_linear_2726_20106)" stroke-width="0.5"/>
													<defs>
													<linearGradient id="paint0_linear_2726_20106" x1="12" y1="6" x2="12" y2="18" gradientUnits="userSpaceOnUse">
													<stop stop-color="#354261"/>
													<stop offset="1" stop-color="#343C50"/>
													</linearGradient>
													<linearGradient id="paint1_linear_2726_20106" x1="12" y1="6" x2="10.1167" y2="17.5099" gradientUnits="userSpaceOnUse">
													<stop stop-color="#AEC4FA"/>
													<stop offset="1" stop-color="#7E90BA"/>
													</linearGradient>
													</defs>
												</svg>												
											</div>
											<div class="pb1__item-end-wiever-number small-text">14545</div>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="pb1__item">
							<a href="page-post.html">
								<div class="pb1__item-icon img-wrp">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/pb1__item-icon.svg" alt="svg" loading="lazy">
								</div>
								<div class="pb1__item-info">
									<div class="pb1__item-title str-text">Названия  статьи </div>
									<div class="pb1__item-text def-text">
										Все этапы пройдены. Оля отыскала
										перспективную нишу.Нашла интересный
										товар и поставщика. Сделала дизайн 
									</div>
									<div class="pb1__item-end">
										<div class="pb1__item-end-time small-text">1 день назад</div>
										<div class="pb1__item-end-wiever-wrp">
											<div class="pb1__item-end-wiever-icon img-wrp">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 6C8.17879 6 4.71351 8.10432 2.15649 11.5223C1.94784 11.8023 1.94784 12.1935 2.15649 12.4736C4.71351 15.8957 8.17879 18 12 18C15.8212 18 19.2865 15.8957 21.8435 12.4777C22.0522 12.1977 22.0522 11.8065 21.8435 11.5264C19.2865 8.10432 15.8212 6 12 6ZM12.2741 16.2251C9.73755 16.3857 7.64284 14.2814 7.80239 11.7241C7.93331 9.61565 9.63118 7.90666 11.7259 7.77488C14.2625 7.61428 16.3572 9.7186 16.1976 12.2759C16.0626 14.3802 14.3647 16.0892 12.2741 16.2251ZM12.1473 14.2732C10.7808 14.3596 9.65163 13.2272 9.74164 11.8518C9.81119 10.7152 10.7276 9.79684 11.8568 9.72272C13.2233 9.63624 14.3525 10.7687 14.2625 12.1441C14.1888 13.2848 13.2724 14.2032 12.1473 14.2732Z" fill="url(#paint0_linear_2726_20106)"/>
													<path d="M12.2899 16.4746L12.2903 16.4746C14.5076 16.3305 16.3041 14.5204 16.4471 12.2919L16.4471 12.2915C16.6159 9.58569 14.3986 7.35516 11.7101 7.52538C9.48837 7.6652 7.69152 9.47567 7.55287 11.7086C7.3841 14.4144 9.60146 16.6448 12.2899 16.4746ZM12.1318 14.0236L12.1315 14.0237C10.9163 14.1006 9.91089 13.0938 9.99111 11.8681L9.99117 11.867C10.053 10.856 10.8696 10.0382 11.8729 9.9722C13.0879 9.89549 14.0932 10.9021 14.013 12.1278L14.013 12.128C13.9473 13.1448 13.1296 13.9616 12.1318 14.0236ZM2.35687 11.6718C4.8799 8.29939 8.27742 6.25 12 6.25C15.7225 6.25 19.12 8.29935 21.643 11.6758C21.7857 11.8672 21.7857 12.1369 21.643 12.3283C19.12 15.7007 15.7225 17.75 12 17.75C8.2774 17.75 4.87986 15.7006 2.35684 12.324C2.21438 12.1327 2.21439 11.8631 2.35687 11.6718Z" stroke="url(#paint1_linear_2726_20106)" stroke-width="0.5"/>
													<defs>
													<linearGradient id="paint0_linear_2726_20106" x1="12" y1="6" x2="12" y2="18" gradientUnits="userSpaceOnUse">
													<stop stop-color="#354261"/>
													<stop offset="1" stop-color="#343C50"/>
													</linearGradient>
													<linearGradient id="paint1_linear_2726_20106" x1="12" y1="6" x2="10.1167" y2="17.5099" gradientUnits="userSpaceOnUse">
													<stop stop-color="#AEC4FA"/>
													<stop offset="1" stop-color="#7E90BA"/>
													</linearGradient>
													</defs>
												</svg>												
											</div>
											<div class="pb1__item-end-wiever-number small-text">14545</div>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="pb1__item">
							<a href="page-post.html">
								<div class="pb1__item-icon img-wrp">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/pb1__item-icon.svg" alt="svg" loading="lazy">
								</div>
								<div class="pb1__item-info">
									<div class="pb1__item-title str-text">Названия  статьи </div>
									<div class="pb1__item-text def-text">
										Все этапы пройдены. Оля отыскала
										перспективную нишу.Нашла интересный
										товар и поставщика. Сделала дизайн 
									</div>
									<div class="pb1__item-end">
										<div class="pb1__item-end-time small-text">1 день назад</div>
										<div class="pb1__item-end-wiever-wrp">
											<div class="pb1__item-end-wiever-icon img-wrp">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 6C8.17879 6 4.71351 8.10432 2.15649 11.5223C1.94784 11.8023 1.94784 12.1935 2.15649 12.4736C4.71351 15.8957 8.17879 18 12 18C15.8212 18 19.2865 15.8957 21.8435 12.4777C22.0522 12.1977 22.0522 11.8065 21.8435 11.5264C19.2865 8.10432 15.8212 6 12 6ZM12.2741 16.2251C9.73755 16.3857 7.64284 14.2814 7.80239 11.7241C7.93331 9.61565 9.63118 7.90666 11.7259 7.77488C14.2625 7.61428 16.3572 9.7186 16.1976 12.2759C16.0626 14.3802 14.3647 16.0892 12.2741 16.2251ZM12.1473 14.2732C10.7808 14.3596 9.65163 13.2272 9.74164 11.8518C9.81119 10.7152 10.7276 9.79684 11.8568 9.72272C13.2233 9.63624 14.3525 10.7687 14.2625 12.1441C14.1888 13.2848 13.2724 14.2032 12.1473 14.2732Z" fill="url(#paint0_linear_2726_20106)"/>
													<path d="M12.2899 16.4746L12.2903 16.4746C14.5076 16.3305 16.3041 14.5204 16.4471 12.2919L16.4471 12.2915C16.6159 9.58569 14.3986 7.35516 11.7101 7.52538C9.48837 7.6652 7.69152 9.47567 7.55287 11.7086C7.3841 14.4144 9.60146 16.6448 12.2899 16.4746ZM12.1318 14.0236L12.1315 14.0237C10.9163 14.1006 9.91089 13.0938 9.99111 11.8681L9.99117 11.867C10.053 10.856 10.8696 10.0382 11.8729 9.9722C13.0879 9.89549 14.0932 10.9021 14.013 12.1278L14.013 12.128C13.9473 13.1448 13.1296 13.9616 12.1318 14.0236ZM2.35687 11.6718C4.8799 8.29939 8.27742 6.25 12 6.25C15.7225 6.25 19.12 8.29935 21.643 11.6758C21.7857 11.8672 21.7857 12.1369 21.643 12.3283C19.12 15.7007 15.7225 17.75 12 17.75C8.2774 17.75 4.87986 15.7006 2.35684 12.324C2.21438 12.1327 2.21439 11.8631 2.35687 11.6718Z" stroke="url(#paint1_linear_2726_20106)" stroke-width="0.5"/>
													<defs>
													<linearGradient id="paint0_linear_2726_20106" x1="12" y1="6" x2="12" y2="18" gradientUnits="userSpaceOnUse">
													<stop stop-color="#354261"/>
													<stop offset="1" stop-color="#343C50"/>
													</linearGradient>
													<linearGradient id="paint1_linear_2726_20106" x1="12" y1="6" x2="10.1167" y2="17.5099" gradientUnits="userSpaceOnUse">
													<stop stop-color="#AEC4FA"/>
													<stop offset="1" stop-color="#7E90BA"/>
													</linearGradient>
													</defs>
												</svg>												
											</div>
											<div class="pb1__item-end-wiever-number small-text">14545</div>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="pb1__item">
							<a href="page-post.html">
								<div class="pb1__item-icon img-wrp">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/pb1__item-icon.svg" alt="svg" loading="lazy">
								</div>
								<div class="pb1__item-info">
									<div class="pb1__item-title str-text">Названия  статьи </div>
									<div class="pb1__item-text def-text">
										Все этапы пройдены. Оля отыскала
										перспективную нишу.Нашла интересный
										товар и поставщика. Сделала дизайн 
									</div>
									<div class="pb1__item-end">
										<div class="pb1__item-end-time small-text">1 день назад</div>
										<div class="pb1__item-end-wiever-wrp">
											<div class="pb1__item-end-wiever-icon img-wrp">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 6C8.17879 6 4.71351 8.10432 2.15649 11.5223C1.94784 11.8023 1.94784 12.1935 2.15649 12.4736C4.71351 15.8957 8.17879 18 12 18C15.8212 18 19.2865 15.8957 21.8435 12.4777C22.0522 12.1977 22.0522 11.8065 21.8435 11.5264C19.2865 8.10432 15.8212 6 12 6ZM12.2741 16.2251C9.73755 16.3857 7.64284 14.2814 7.80239 11.7241C7.93331 9.61565 9.63118 7.90666 11.7259 7.77488C14.2625 7.61428 16.3572 9.7186 16.1976 12.2759C16.0626 14.3802 14.3647 16.0892 12.2741 16.2251ZM12.1473 14.2732C10.7808 14.3596 9.65163 13.2272 9.74164 11.8518C9.81119 10.7152 10.7276 9.79684 11.8568 9.72272C13.2233 9.63624 14.3525 10.7687 14.2625 12.1441C14.1888 13.2848 13.2724 14.2032 12.1473 14.2732Z" fill="url(#paint0_linear_2726_20106)"/>
													<path d="M12.2899 16.4746L12.2903 16.4746C14.5076 16.3305 16.3041 14.5204 16.4471 12.2919L16.4471 12.2915C16.6159 9.58569 14.3986 7.35516 11.7101 7.52538C9.48837 7.6652 7.69152 9.47567 7.55287 11.7086C7.3841 14.4144 9.60146 16.6448 12.2899 16.4746ZM12.1318 14.0236L12.1315 14.0237C10.9163 14.1006 9.91089 13.0938 9.99111 11.8681L9.99117 11.867C10.053 10.856 10.8696 10.0382 11.8729 9.9722C13.0879 9.89549 14.0932 10.9021 14.013 12.1278L14.013 12.128C13.9473 13.1448 13.1296 13.9616 12.1318 14.0236ZM2.35687 11.6718C4.8799 8.29939 8.27742 6.25 12 6.25C15.7225 6.25 19.12 8.29935 21.643 11.6758C21.7857 11.8672 21.7857 12.1369 21.643 12.3283C19.12 15.7007 15.7225 17.75 12 17.75C8.2774 17.75 4.87986 15.7006 2.35684 12.324C2.21438 12.1327 2.21439 11.8631 2.35687 11.6718Z" stroke="url(#paint1_linear_2726_20106)" stroke-width="0.5"/>
													<defs>
													<linearGradient id="paint0_linear_2726_20106" x1="12" y1="6" x2="12" y2="18" gradientUnits="userSpaceOnUse">
													<stop stop-color="#354261"/>
													<stop offset="1" stop-color="#343C50"/>
													</linearGradient>
													<linearGradient id="paint1_linear_2726_20106" x1="12" y1="6" x2="10.1167" y2="17.5099" gradientUnits="userSpaceOnUse">
													<stop stop-color="#AEC4FA"/>
													<stop offset="1" stop-color="#7E90BA"/>
													</linearGradient>
													</defs>
												</svg>												
											</div>
											<div class="pb1__item-end-wiever-number small-text">14545</div>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="pb1__item">
							<a href="page-post.html">
								<div class="pb1__item-icon img-wrp">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/pb1__item-icon.svg" alt="svg" loading="lazy">
								</div>
								<div class="pb1__item-info">
									<div class="pb1__item-title str-text">Названия  статьи </div>
									<div class="pb1__item-text def-text">
										Все этапы пройдены. Оля отыскала
										перспективную нишу.Нашла интересный
										товар и поставщика. Сделала дизайн 
									</div>
									<div class="pb1__item-end">
										<div class="pb1__item-end-time small-text">1 день назад</div>
										<div class="pb1__item-end-wiever-wrp">
											<div class="pb1__item-end-wiever-icon img-wrp">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 6C8.17879 6 4.71351 8.10432 2.15649 11.5223C1.94784 11.8023 1.94784 12.1935 2.15649 12.4736C4.71351 15.8957 8.17879 18 12 18C15.8212 18 19.2865 15.8957 21.8435 12.4777C22.0522 12.1977 22.0522 11.8065 21.8435 11.5264C19.2865 8.10432 15.8212 6 12 6ZM12.2741 16.2251C9.73755 16.3857 7.64284 14.2814 7.80239 11.7241C7.93331 9.61565 9.63118 7.90666 11.7259 7.77488C14.2625 7.61428 16.3572 9.7186 16.1976 12.2759C16.0626 14.3802 14.3647 16.0892 12.2741 16.2251ZM12.1473 14.2732C10.7808 14.3596 9.65163 13.2272 9.74164 11.8518C9.81119 10.7152 10.7276 9.79684 11.8568 9.72272C13.2233 9.63624 14.3525 10.7687 14.2625 12.1441C14.1888 13.2848 13.2724 14.2032 12.1473 14.2732Z" fill="url(#paint0_linear_2726_20106)"/>
													<path d="M12.2899 16.4746L12.2903 16.4746C14.5076 16.3305 16.3041 14.5204 16.4471 12.2919L16.4471 12.2915C16.6159 9.58569 14.3986 7.35516 11.7101 7.52538C9.48837 7.6652 7.69152 9.47567 7.55287 11.7086C7.3841 14.4144 9.60146 16.6448 12.2899 16.4746ZM12.1318 14.0236L12.1315 14.0237C10.9163 14.1006 9.91089 13.0938 9.99111 11.8681L9.99117 11.867C10.053 10.856 10.8696 10.0382 11.8729 9.9722C13.0879 9.89549 14.0932 10.9021 14.013 12.1278L14.013 12.128C13.9473 13.1448 13.1296 13.9616 12.1318 14.0236ZM2.35687 11.6718C4.8799 8.29939 8.27742 6.25 12 6.25C15.7225 6.25 19.12 8.29935 21.643 11.6758C21.7857 11.8672 21.7857 12.1369 21.643 12.3283C19.12 15.7007 15.7225 17.75 12 17.75C8.2774 17.75 4.87986 15.7006 2.35684 12.324C2.21438 12.1327 2.21439 11.8631 2.35687 11.6718Z" stroke="url(#paint1_linear_2726_20106)" stroke-width="0.5"/>
													<defs>
													<linearGradient id="paint0_linear_2726_20106" x1="12" y1="6" x2="12" y2="18" gradientUnits="userSpaceOnUse">
													<stop stop-color="#354261"/>
													<stop offset="1" stop-color="#343C50"/>
													</linearGradient>
													<linearGradient id="paint1_linear_2726_20106" x1="12" y1="6" x2="10.1167" y2="17.5099" gradientUnits="userSpaceOnUse">
													<stop stop-color="#AEC4FA"/>
													<stop offset="1" stop-color="#7E90BA"/>
													</linearGradient>
													</defs>
												</svg>												
											</div>
											<div class="pb1__item-end-wiever-number small-text">14545</div>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="pb1__item">
							<a href="page-post.html">
								<div class="pb1__item-icon img-wrp">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/pb1__item-icon.svg" alt="svg" loading="lazy">
								</div>
								<div class="pb1__item-info">
									<div class="pb1__item-title str-text">Названия  статьи </div>
									<div class="pb1__item-text def-text">
										Все этапы пройдены. Оля отыскала
										перспективную нишу.Нашла интересный
										товар и поставщика. Сделала дизайн 
									</div>
									<div class="pb1__item-end">
										<div class="pb1__item-end-time small-text">1 день назад</div>
										<div class="pb1__item-end-wiever-wrp">
											<div class="pb1__item-end-wiever-icon img-wrp">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 6C8.17879 6 4.71351 8.10432 2.15649 11.5223C1.94784 11.8023 1.94784 12.1935 2.15649 12.4736C4.71351 15.8957 8.17879 18 12 18C15.8212 18 19.2865 15.8957 21.8435 12.4777C22.0522 12.1977 22.0522 11.8065 21.8435 11.5264C19.2865 8.10432 15.8212 6 12 6ZM12.2741 16.2251C9.73755 16.3857 7.64284 14.2814 7.80239 11.7241C7.93331 9.61565 9.63118 7.90666 11.7259 7.77488C14.2625 7.61428 16.3572 9.7186 16.1976 12.2759C16.0626 14.3802 14.3647 16.0892 12.2741 16.2251ZM12.1473 14.2732C10.7808 14.3596 9.65163 13.2272 9.74164 11.8518C9.81119 10.7152 10.7276 9.79684 11.8568 9.72272C13.2233 9.63624 14.3525 10.7687 14.2625 12.1441C14.1888 13.2848 13.2724 14.2032 12.1473 14.2732Z" fill="url(#paint0_linear_2726_20106)"/>
													<path d="M12.2899 16.4746L12.2903 16.4746C14.5076 16.3305 16.3041 14.5204 16.4471 12.2919L16.4471 12.2915C16.6159 9.58569 14.3986 7.35516 11.7101 7.52538C9.48837 7.6652 7.69152 9.47567 7.55287 11.7086C7.3841 14.4144 9.60146 16.6448 12.2899 16.4746ZM12.1318 14.0236L12.1315 14.0237C10.9163 14.1006 9.91089 13.0938 9.99111 11.8681L9.99117 11.867C10.053 10.856 10.8696 10.0382 11.8729 9.9722C13.0879 9.89549 14.0932 10.9021 14.013 12.1278L14.013 12.128C13.9473 13.1448 13.1296 13.9616 12.1318 14.0236ZM2.35687 11.6718C4.8799 8.29939 8.27742 6.25 12 6.25C15.7225 6.25 19.12 8.29935 21.643 11.6758C21.7857 11.8672 21.7857 12.1369 21.643 12.3283C19.12 15.7007 15.7225 17.75 12 17.75C8.2774 17.75 4.87986 15.7006 2.35684 12.324C2.21438 12.1327 2.21439 11.8631 2.35687 11.6718Z" stroke="url(#paint1_linear_2726_20106)" stroke-width="0.5"/>
													<defs>
													<linearGradient id="paint0_linear_2726_20106" x1="12" y1="6" x2="12" y2="18" gradientUnits="userSpaceOnUse">
													<stop stop-color="#354261"/>
													<stop offset="1" stop-color="#343C50"/>
													</linearGradient>
													<linearGradient id="paint1_linear_2726_20106" x1="12" y1="6" x2="10.1167" y2="17.5099" gradientUnits="userSpaceOnUse">
													<stop stop-color="#AEC4FA"/>
													<stop offset="1" stop-color="#7E90BA"/>
													</linearGradient>
													</defs>
												</svg>												
											</div>
											<div class="pb1__item-end-wiever-number small-text">14545</div>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="pb1__item">
							<a href="page-post.html">
								<div class="pb1__item-icon img-wrp">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/pb1__item-icon.svg" alt="svg" loading="lazy">
								</div>
								<div class="pb1__item-info">
									<div class="pb1__item-title str-text">Названия  статьи </div>
									<div class="pb1__item-text def-text">
										Все этапы пройдены. Оля отыскала
										перспективную нишу.Нашла интересный
										товар и поставщика. Сделала дизайн 
									</div>
									<div class="pb1__item-end">
										<div class="pb1__item-end-time small-text">1 день назад</div>
										<div class="pb1__item-end-wiever-wrp">
											<div class="pb1__item-end-wiever-icon img-wrp">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 6C8.17879 6 4.71351 8.10432 2.15649 11.5223C1.94784 11.8023 1.94784 12.1935 2.15649 12.4736C4.71351 15.8957 8.17879 18 12 18C15.8212 18 19.2865 15.8957 21.8435 12.4777C22.0522 12.1977 22.0522 11.8065 21.8435 11.5264C19.2865 8.10432 15.8212 6 12 6ZM12.2741 16.2251C9.73755 16.3857 7.64284 14.2814 7.80239 11.7241C7.93331 9.61565 9.63118 7.90666 11.7259 7.77488C14.2625 7.61428 16.3572 9.7186 16.1976 12.2759C16.0626 14.3802 14.3647 16.0892 12.2741 16.2251ZM12.1473 14.2732C10.7808 14.3596 9.65163 13.2272 9.74164 11.8518C9.81119 10.7152 10.7276 9.79684 11.8568 9.72272C13.2233 9.63624 14.3525 10.7687 14.2625 12.1441C14.1888 13.2848 13.2724 14.2032 12.1473 14.2732Z" fill="url(#paint0_linear_2726_20106)"/>
													<path d="M12.2899 16.4746L12.2903 16.4746C14.5076 16.3305 16.3041 14.5204 16.4471 12.2919L16.4471 12.2915C16.6159 9.58569 14.3986 7.35516 11.7101 7.52538C9.48837 7.6652 7.69152 9.47567 7.55287 11.7086C7.3841 14.4144 9.60146 16.6448 12.2899 16.4746ZM12.1318 14.0236L12.1315 14.0237C10.9163 14.1006 9.91089 13.0938 9.99111 11.8681L9.99117 11.867C10.053 10.856 10.8696 10.0382 11.8729 9.9722C13.0879 9.89549 14.0932 10.9021 14.013 12.1278L14.013 12.128C13.9473 13.1448 13.1296 13.9616 12.1318 14.0236ZM2.35687 11.6718C4.8799 8.29939 8.27742 6.25 12 6.25C15.7225 6.25 19.12 8.29935 21.643 11.6758C21.7857 11.8672 21.7857 12.1369 21.643 12.3283C19.12 15.7007 15.7225 17.75 12 17.75C8.2774 17.75 4.87986 15.7006 2.35684 12.324C2.21438 12.1327 2.21439 11.8631 2.35687 11.6718Z" stroke="url(#paint1_linear_2726_20106)" stroke-width="0.5"/>
													<defs>
													<linearGradient id="paint0_linear_2726_20106" x1="12" y1="6" x2="12" y2="18" gradientUnits="userSpaceOnUse">
													<stop stop-color="#354261"/>
													<stop offset="1" stop-color="#343C50"/>
													</linearGradient>
													<linearGradient id="paint1_linear_2726_20106" x1="12" y1="6" x2="10.1167" y2="17.5099" gradientUnits="userSpaceOnUse">
													<stop stop-color="#AEC4FA"/>
													<stop offset="1" stop-color="#7E90BA"/>
													</linearGradient>
													</defs>
												</svg>												
											</div>
											<div class="pb1__item-end-wiever-number small-text">14545</div>
										</div>
									</div>
								</div>
							</a>
						</li>
						-->
					</ul>

					<div class="pb1__bg-light img-wrp">
						<svg class="svg-web" width="968" height="602" viewBox="0 0 968 602" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.15" filter="url(#filter0_f_2725_2211)">
								<path d="M485 60L884 518H84L485 60Z" fill="url(#paint0_linear_2725_2211)" />
							</g>
							<g opacity="0.05" filter="url(#filter1_f_2725_2211)">
								<path d="M485.5 279L685 518H285L485.5 279Z" fill="url(#paint1_linear_2725_2211)" />
							</g>
							<g opacity="0.05" filter="url(#filter2_f_2725_2211)">
								<path d="M484.25 279L584 518H384L484.25 279Z" fill="url(#paint2_linear_2725_2211)" />
							</g>
							<defs>
								<filter id="filter0_f_2725_2211" x="0" y="-24" width="968" height="626" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2725_2211" />
								</filter>
								<filter id="filter1_f_2725_2211" x="201" y="195" width="568" height="407" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2725_2211" />
								</filter>
								<filter id="filter2_f_2725_2211" x="300" y="195" width="368" height="407" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2725_2211" />
								</filter>
								<linearGradient id="paint0_linear_2725_2211" x1="507.5" y1="176.016" x2="507.5" y2="508" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint1_linear_2725_2211" x1="496.75" y1="339.541" x2="496.75" y2="512.782" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint2_linear_2725_2211" x1="489.875" y1="339.541" x2="489.875" y2="512.782" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>
						<svg class="svg-tab" width="968" height="602" viewBox="0 0 968 602" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.15" filter="url(#filter0_f_2725_2211)">
								<path d="M485 60L884 518H84L485 60Z" fill="url(#paint0_linear_2725_2211)" />
							</g>
							<g opacity="0.05" filter="url(#filter1_f_2725_2211)">
								<path d="M485.5 279L685 518H285L485.5 279Z" fill="url(#paint1_linear_2725_2211)" />
							</g>
							<g opacity="0.05" filter="url(#filter2_f_2725_2211)">
								<path d="M484.25 279L584 518H384L484.25 279Z" fill="url(#paint2_linear_2725_2211)" />
							</g>
							<defs>
								<filter id="filter0_f_2725_2211" x="0" y="-24" width="968" height="626" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2725_2211" />
								</filter>
								<filter id="filter1_f_2725_2211" x="201" y="195" width="568" height="407" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2725_2211" />
								</filter>
								<filter id="filter2_f_2725_2211" x="300" y="195" width="368" height="407" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="42" result="effect1_foregroundBlur_2725_2211" />
								</filter>
								<linearGradient id="paint0_linear_2725_2211" x1="507.5" y1="176.016" x2="507.5" y2="508" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint1_linear_2725_2211" x1="496.75" y1="339.541" x2="496.75" y2="512.782" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint2_linear_2725_2211" x1="489.875" y1="339.541" x2="489.875" y2="512.782" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>
						<svg class="svg-mob" width="360" height="448" viewBox="0 0 360 448" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.6">
								<g opacity="0.2" filter="url(#filter0_f_2788_296)">
									<path d="M180.45 64L360 384H0L180.45 64Z" fill="url(#paint0_linear_2788_296)" />
								</g>
								<g opacity="0.1" filter="url(#filter1_f_2788_296)">
									<path d="M180.25 264L280 384H80L180.25 264Z" fill="url(#paint1_linear_2788_296)" />
								</g>
								<g opacity="0.1" filter="url(#filter2_f_2788_296)">
									<path d="M180.1 324L220 384H140L180.1 324Z" fill="url(#paint2_linear_2788_296)" />
								</g>
							</g>
							<defs>
								<filter id="filter0_f_2788_296" x="-64" y="0" width="488" height="448" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="32" result="effect1_foregroundBlur_2788_296" />
								</filter>
								<filter id="filter1_f_2788_296" x="16" y="200" width="328" height="248" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="32" result="effect1_foregroundBlur_2788_296" />
								</filter>
								<filter id="filter2_f_2788_296" x="76" y="260" width="208" height="188" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="32" result="effect1_foregroundBlur_2788_296" />
								</filter>
								<linearGradient id="paint0_linear_2788_296" x1="190.575" y1="145.059" x2="190.575" y2="377.013" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint1_linear_2788_296" x1="185.875" y1="294.397" x2="185.875" y2="381.38" gradientUnits="userSpaceOnUse">
									<stop stop-color="#6E8DF0" />
									<stop offset="1" stop-color="#C5DCFC" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint2_linear_2788_296" x1="182.35" y1="339.199" x2="182.35" y2="382.69" gradientUnits="userSpaceOnUse">
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
</body>
</html>
