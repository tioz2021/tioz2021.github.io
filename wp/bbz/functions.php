<?php 

function bbz_assets() {
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/style/style.css');
    wp_enqueue_style( 'otherStyle1', get_template_directory_uri() . '/assets/style/1.css');
    wp_enqueue_style( 'otherStyle2', get_template_directory_uri() . '/assets/style/2.css');
    wp_enqueue_style( 'swipercss', get_template_directory_uri() . '/assets/lib/swiperjs/swiper.css');

    wp_enqueue_script( 'swiperjs', get_template_directory_uri() . '/assets/lib/swiperjs/swiper.min.js', array(), '', true );
    wp_enqueue_script( 'lottie', get_template_directory_uri() . '/assets/lib/lottie/lottie-player.js', array(), '', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/script/main.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'bbz_assets' );

// добавляем каринки в записях
add_theme_support( 'post-thumbnails' );

show_admin_bar(false);