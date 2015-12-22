<?php

define( 'BBC_THEME_URL', get_template_directory_uri() . '/' );
define( 'BBC_THEME_DIR', get_template_directory() . '/' );
define( 'TEXTDOMAIN', 'bourbon');


if ( ! function_exists( 'bourbon_setup' ) ) :
    function bourbon_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on twentyfifteen, use a find and replace
         * to change 'twentyfifteen' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'TEXTDOMAIN', get_template_directory() . '/languages' );


        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );

        set_post_thumbnail_size( 200, 200, true );

        add_image_size( 'small-crop', 200, 150, true );
        add_image_size( 'full-image', 1100, 1100 );
        add_image_size( 'big-image', 750, 750 );
        add_image_size( 'medium-image', 500, 500 );
        add_image_size( 'small-image', 320, 320 );

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
//            'header' => __( 'Header Menu',      'TEXTDOMAIN' ),
            'cat'  => __( 'Category menu', 'TEXTDOMAIN' ),
            'langs'  => __( 'Language menu', 'TEXTDOMAIN' ),
        ) );

    }
endif;
add_action( 'after_setup_theme', 'bourbon_setup' );




function bourbon_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'bourbon_javascript_detection', 0 );




function bourbon_scripts() {

    // load common stylesheet.
//        wp_enqueue_style( 'owlcarousel', BBC_THEME_URL . 'assets/owl.carousel/assets/owl.carousel.css' );
        wp_enqueue_style( 'owlcarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css' );


    // load desktop stylesheet.
    wp_register_style( 'bbc-desk-style', BBC_THEME_URL . 'assets/css/style.desk.css' );

    //load mobile stylesheet
    wp_register_style( 'bbc-mob-style', BBC_THEME_URL . 'assets/css/style.mob.min.css' );


    if(bbc_mobile_detect()){
        wp_enqueue_style('bbc-mob-style');
    } else{
        wp_enqueue_style('bbc-desk-style');
    }



//    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
//<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

    // clear head
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
    add_filter('the_generator', '__return_false');
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('set_comment_cookies', 'wp_set_comment_cookies');

    // load scripts
    wp_deregister_script('jquery');

    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), false, true );
//    wp_register_script ('slimscroll', BBC_THEME_URL . 'assets/js/fullPage/vendors/jquery.slimscroll.min.js', array('jquery'), false, true);
//    wp_register_script ('fullPage', BBC_THEME_URL . 'assets/js/fullPage/jquery.fullPage.js', array('jquery', 'slimscroll'), false, true);
    wp_register_script ('owlcarousel-js', BBC_THEME_URL . 'assets/owl.carousel/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_register_script ('main', BBC_THEME_URL . '/assets/js/main.js', array('jquery', 'classie', 'modernizr'), '1.0', true);
    wp_register_script ('animation', BBC_THEME_URL . '/assets/js/animation.js', array(), '1.0', true);
    wp_register_script ('mob', BBC_THEME_URL . '/assets/js/mob.js', array('jquery'), '1.0', true);
    wp_register_script ('single', BBC_THEME_URL . '/assets/js/single.js', array('jquery'), '1.0', true);

//    wp_register_script ('owlcarousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.js', array('jquery'), '1.0', true);
    wp_register_script ('slimscroll', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.6/vendors/jquery.slimscroll.min.js', array('jquery'), false, true);
    wp_register_script ('fullPage', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.6/jquery.fullPage.min.js', array('jquery', 'slimscroll'), false, true);

    wp_register_script ('modernizr', BBC_THEME_URL . 'assets/js/FullscreenOverlayStyles/js/modernizr.custom.js', array(), false, true);
    wp_register_script ('classie', BBC_THEME_URL . 'assets/js/FullscreenOverlayStyles/js/classie.js', array(), false, true);

	wp_register_script ('tweenMax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js', array(), false, true);
	wp_register_script ('scrollMagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', array(), false, true);
	wp_register_script ('animationGSAP', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array(), false, true);

    if( is_home() || is_front_page() && !bbc_mobile_detect()){
        wp_enqueue_script ('jquery');
        wp_enqueue_script ('slimscroll');
        wp_enqueue_script ('fullPage');
        wp_enqueue_script ('owlcarousel-js');
	    wp_enqueue_script ('tweenMax');
	    wp_enqueue_script ('scrollMagic');
	    wp_enqueue_script ('animationGSAP');

	    wp_enqueue_script ('animation');
    }

    if( is_single()){
        wp_enqueue_script ('single');
    }

    if(bbc_mobile_detect()){
        wp_enqueue_script('mob');
    } else{
        wp_enqueue_script ('main');
    }

    wp_localize_script( 'main', 'BBCmain', array(
        'bbc_nonce' => wp_create_nonce('bbc_nonce'),
        'ajax_url' => admin_url( 'admin-ajax.php' )
    ));









}
add_action( 'wp_enqueue_scripts', 'bourbon_scripts' );


/**
 * Руссифицирует месяца и недели в дате.
 * Функция для фильтра date_i18n.
 * @param строка $date        Дата в принятом формате
 * @param строка $req_format  Формат передаваемой даты
 * @return Дату в русском формате
 */
function kama_drussify_months( $date, $req_format ){
    // в формате есть "строковые" неделя или месяц
    if( ! preg_match('~[FMlS]~', $req_format ) ) return $date;

    $replace = array (
        "январь" => "Января", "Февраль" => "Февраля", "Март" => "Марта", "Апрель" => "Апреля", "Май" => "Мая", "Июнь" => "Июня", "Июль" => "Июля", "Август" => "Августа", "Сентябрь" => "Сентября", "Октябрь" => "Октября", "Ноябрь" => "Ноября", "Декабрь" => "Декабря",

        "January" => "Января", "February" => "Февраля", "March" => "Марта", "April" => "Апреля", "May" => "Мая", "June" => "Июня", "July" => "Июля", "August" => "Августа", "September" => "Сентября", "October" => "Октября", "November" => "Ноября", "December" => "Декабря",

        "Jan" => "янв.", "Feb" => "фев.", "Mar" => "март.", "Apr" => "апр.", "May" => "мая", "Jun" => "июня", "Jul" => "июля", "Aug" => "авг.", "Sep" => "сен.", "Oct" => "окт.", "Nov" => "нояб.", "Dec" => "дек.",

        "Sunday" => "воскресенье", "Monday" => "понедельник", "Tuesday" => "вторник", "Wednesday" => "среда", "Thursday" => "четверг", "Friday" => "пятница", "Saturday" => "суббота",

        "Sun" => "вос.", "Mon" => "пон.", "Tue" => "вт.", "Wed" => "ср.", "Thu" => "чет.", "Fri" => "пят.", "Sat" => "суб.", "th" => "", "st" => "", "nd" => "", "rd" => "",
    );

    return strtr( $date, $replace );
}
add_filter('date_i18n', 'kama_drussify_months', 11, 2);


function bbc_mobile_detect () {
    include_once ( BBC_THEME_DIR . 'Mobile_Detect.php');
    $detect = new Mobile_Detect;
    if( $detect->isMobile() || $detect->isTablet() ) {
        return true;
    } else {
        return false;
    }
}

include 'includes/send_email.php';