<?php
	function slivkin_com_assets() {
		wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/style/style.css');
		wp_enqueue_style('animatecss', get_template_directory_uri() . '/assets/libs/animatecss/animate.css');
		wp_enqueue_style('swipercss', get_template_directory_uri() . '/assets/libs/swiperjs/swiper.css');
		wp_enqueue_script('swiperjs', get_template_directory_uri() . '/assets/libs/swiperjs/swiper.min.js', array(), '', true);
		wp_enqueue_script('wowjs', get_template_directory_uri() . '/assets/libs/wowjs/wow.min.js', array(), '', true);
		wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/scripts/main.js', array(), '', true);
	
	}
add_action('wp_enqueue_scripts', 'slivkin_com_assets');
show_admin_bar(false);

add_theme_support("post-thumbnails");
add_theme_support("title-tag");
add_theme_support("custom-logo");

add_action('wp_ajax_callback_mail', 'callback_mail');
add_action('wp_ajax_nopriv_callback_mail', 'callback_mail');

function callback_mail() {
    $type = $_POST['type'];
    $to = "zakaz@slivkin-fulfillment.ru";
    $subject = "Обратный звонок";
    $name1 = htmlentities($_POST["name1"]);
    $phone1 = htmlentities($_POST["phone1"]);
    $name2 = htmlentities($_POST["name2"]);
    $phone2 = htmlentities($_POST["phone2"]);

    // Получение IP-адреса отправителя
    $ip = $_SERVER['REMOTE_ADDR'];

    // Максимальное количество разрешенных попыток за определенный период времени
    $maxAttempts = 5; // Например, 5 попыток

    // Временной интервал в секундах, в течение которого будет считаться частота отправки
    $interval = 3600; // Например, 1 час (3600 секунд)

    // Создание уникального ключа для данного IP-адреса и текущего времени
    $key = $ip . '_' . date('YmdH');

    // Проверка, сколько раз IP-адрес попытался отправить форму в текущем временном интервале
    $attempts = get_transient($key);

    if ($attempts === false) {
        // Если нет предыдущих попыток отправки, создаем запись
        set_transient($key, 1, $interval);
    } else {
        if ($attempts < $maxAttempts) {
            // Если не превышен лимит попыток, увеличиваем счетчик
            set_transient($key, $attempts + 1, $interval);
        } else {
            // Если превышен лимит попыток, можно принимать необходимые меры, например, выводить сообщение об ошибке
            wp_die('Превышен лимит попыток отправки формы. Пожалуйста, попробуйте позже.');
        }
    }

    // Проверка ловушки для ботов
    if (!empty($_POST['honey'])) {
        // Если поле "honey" заполнено, считайте отправку формы спамом
        wp_die('Отправка формы заблокирована как потенциальный спам.');
    }

    if (isset($_POST["name1"]) && isset($_POST["phone1"])) {
        $message = "Имя: " . $name1 . "<br>" . "Телефон: " . $phone1;
    } else {
        $message = "Имя: " . $name2 . "<br>" . "Телефон: " . $phone2;
    }

    remove_all_filters('wp_mail_from');
    remove_all_filters('wp_mail_from_name');

    $headers = array(
        'From: Me Myself <me@example.net>',
        'content-type: text/html',
        'Cc: John Q Codex <jqc@wordpress.org>',
        'Cc: iluvwp@wordpress.org', // тут можно использовать только простой email адрес
    );

    wp_mail($to, $subject, $message, $headers);
    wp_die();
}

