<footer class="footer">
		<div class="footer__container container">
			<div class="footer__start">
				<div class="footer__title def-title">Всегда на связи</div>
				<div class="footer__list">
					<div class="footer__item cta-box">
						<div class="footer__item-logo img-wrp">
							<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/footer__item-logo-wb.svg" alt="svg" loading="lazy">
							<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/footer__item-logo-tab.svg" alt="svg" loading="lazy">
							<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/footer__item-logo-mob.svg" alt="svg" loading="lazy">
						</div>
						<div class="footer__item-title str-text">Обзор програмы</div>
						<div class="footer__item-text def-text">Краткий обзор программы</div>
						<div class="footer__item-bg img-wrp">
							<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/footer__item-bg-web.svg" alt="svg" loading="lazy">
							<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/footer__item-bg-tab.svg" alt="svg" loading="lazy">
							<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/footer__item-bg-mob.svg" alt="svg" loading="lazy">
						</div>
					</div>

					<div class="footer__item cta-box">
						<div class="footer__item-logo img-wrp">
							<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/footer__item-logo-web2.svg" alt="svg" loading="lazy">
							<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/footer__item-logo-tab2.svg" alt="svg" loading="lazy">
							<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/footer__item-logo-mob2.svg" alt="svg" loading="lazy">						
						</div>
						<div class="footer__item-title str-text">Написать в телеграм</div>
						<div class="footer__item-text def-text">Быстро ответим на все вопросы</div>
						<div class="footer__item-bg img-wrp">
							<img class="svg-web" src="<?php bloginfo('template_url'); ?>/assets/img/footer__item-bg-web2.svg" alt="svg" loading="lazy">
							<img class="svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/footer__item-bg-tab2.svg" alt="svg" loading="lazy">
							<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/footer__item-bg-mob2.svg" alt="svg" loading="lazy">
						</div>
					</div>
				</div>
			</div>

			<div class="footer__end">
				<div class="footer__end-title img-wrp">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/footer__end-title.svg" alt="svg" loading="lazy">
					</a>
				</div>

				<ul class="footer__end-link-list">
					<?php
					global $wp;
					$menu_items = wp_get_nav_menu_items('main');
					$current_url = home_url(add_query_arg(array(), $wp->request));
					
					if ($menu_items) {
						foreach ($menu_items as $menu_item) {
							$class = 'footer__end-link small-text';
							if (rtrim($menu_item->url, '/') === rtrim($current_url, '/')) {
								$class .= ' active';
							}
							echo '<li class="footer__end-link-list-item"><a class="' . $class . '" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
						}
					}
					?>
				</ul>

				<a href="#" class="footer__btn main-btn">
					<span class="main-btn__text small-text">Приоборести лицензию</span>
					<div class="main-btn__effect"></div>
				</a>

				<div class="footer__end-polici-wrp">
					<a href="#" class="footer__end-polici-link small-text"> Политика конфиденциальности</a>
					<div class="footer__end-polici-text small-text">BBZ 2024 © Все права защищены</div>
				</div>
			</div>

			<div class="footer__line-bg img-wrp">
				<img class="svg-web svg-tab" src="<?php bloginfo('template_url'); ?>/assets/img/footer__line-bg.svg" alt="svg" loading="lazy">
				<img class="svg-mob" src="<?php bloginfo('template_url'); ?>/assets/img/footer__line-bg-mob.svg" alt="svg" loading="lazy">
			</div>

			<div class="footer__block-bg img-wrp">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/footer__block-bg.svg" alt="svg" loading="lazy">
			</div>
		</div>
	</footer>

	<div id="popup" class="popup">
		<div class="popup__content popup-content">
			<iframe id="youtube-video"
				width="100%"
				height="100%"
				src="https://www.youtube.com/embed/4xDzrJKXOOY?si=kJ4QlngfEmRnx4j4&controls=0"
				title="YouTube video player"
				frameborder="0"
				allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
				referrerpolicy="strict-origin-when-cross-origin"
				allowfullscreen
				>
			</iframe>

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

<?php wp_footer(); ?>