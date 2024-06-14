<?php 

function bbz_assets() {
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/style/style.css');
    wp_enqueue_style( 'otherStyle1', get_template_directory_uri() . '/assets/style/1.css');
    wp_enqueue_style( 'swipercss', get_template_directory_uri() . '/assets/lib/swiperjs/swiper.css');

    wp_enqueue_script( 'swiperjs', get_template_directory_uri() . '/assets/lib/swiperjs/swiper.min.js', array(), '20151215', true );
    wp_enqueue_script( 'lottie', get_template_directory_uri() . '/assets/lib/lottie/lottie-player.js', array(), '20151215', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/script/main.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'bbz_assets' );

show_admin_bar(false);