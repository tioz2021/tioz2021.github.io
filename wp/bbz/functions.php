<?php 

function bbz_assets() {
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/style/style.css');
    wp_enqueue_style( 'swipercss', get_template_directory_uri() . '/assets/lib/swiperjs/swiper.css');

		wp_enqueue_style( 'otherStyle1', get_template_directory_uri() . '/assets/style/1.css');
		
    // Проверка, является ли устройство мобильным
    if (!wp_is_mobile()) {
			wp_enqueue_style( 'otherStyle2', get_template_directory_uri() . '/assets/style/2.css');
		}

		wp_enqueue_script( 'swiperjs', get_template_directory_uri() . '/assets/lib/swiperjs/swiper.min.js', array(), '', true );
		wp_enqueue_script( 'lottie', get_template_directory_uri() . '/assets/lib/lottie/lottie-player.js', array(), '', true );
		wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/script/main.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'bbz_assets' );

// добавляем каринки в записях
add_theme_support( 'post-thumbnails' );

// svg 
add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	if( $dosvg ){
		if( current_user_can('manage_options') ){
			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}
	}
	return $data;
}

show_admin_bar(false);