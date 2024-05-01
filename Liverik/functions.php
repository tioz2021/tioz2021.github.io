<?php 

function liverik_assets() {
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/style/style.css' );
    wp_enqueue_style( 'wpFix', get_template_directory_uri() . '/assets/style/wp-fix.css' );
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/lib/aos/aos.css' );

    wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/lib/aos/aos.js', array(), '20151215', true );
    wp_enqueue_script( 'lottie', get_template_directory_uri() . '/assets/lib/lottie/lottie-player.js', array(), '20151215', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/script/main.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'liverik_assets' );

show_admin_bar(false);

// form
add_action('wp_ajax_callback_mail', 'callback_mail');
add_action('wp_ajax_nopriv_callback_mail', 'callback_mail');

function callback_mail() {
    $type = $POST['type'];
    $to ="info@liverik.ru";
    $subject = "Test";

    // if(isset($_POST["index_form_name"]) && isset($_POST["index_form_phone"])){
    //     $ppp_name = htmlentities($_POST["ppp_name"]);
    //     // $ppp_phone = htmlentities($_POST["ppp_phone"]);
    //     // $message = "Имя: " . $ppp_name . "<br>" . "Телефон:" . $ppp_phone;
    // } else {
    // }

    $name = htmlentities($_POST["index_form_name"]);
    $phone = htmlentities($_POST["index_form_phone"]);
    $mail = htmlentities($_POST["index_form_mail"]);
    $them = htmlentities($_POST["index_form_them"]);
    $message = htmlentities($_POST["index_form_message"]);
        
    $message = "Имя: " . $name . "<br>" . "Телефон:" . $phone . "<br><br>" .
    "Почта:  " . $mail . "<br>" . "Тема: " . $them . "<br><br>" .
    "Сообщение: " . $message;
    
    remove_all_filters( 'wp_mail_from' );
    remove_all_filters( 'wp_mail_from_name' );
     
    $headers = array(
        'From: Me Myself <me@example.net>',
        'content-type: text/html',
        'Cc: John Q Codex <jqc@wordpress.org>',
        'Cc: iluvwp@wordpress.org', // тут можно использовать только простой email адрес
    );

    wp_mail( $to, $subject, $message, $headers );
    wp_die();
}

?>