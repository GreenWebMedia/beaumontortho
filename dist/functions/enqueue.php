<?php

function load_scripts() {
	wp_enqueue_script( 'main-manifest', get_template_directory_uri() . '/static/js/manifest.js', array(), '1.0.0', true );
	wp_enqueue_script( 'main-vendor', get_template_directory_uri() . '/static/js/vendor.js', array(), '1.0.0', true );
	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/static/js/app.js', array(), '1.0.0', true );
	wp_enqueue_style('main-styles', get_template_directory_uri() . '/static/css/app.css', array(), '1.0.0', 'all');

	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
add_action('wp_enqueue_scripts', 'load_scripts');

function get_menu() {
    return wp_get_nav_menu_items('menu');
}

add_action( 'rest_api_init', function () {
        register_rest_route( 'api', '/menu', array(
        'methods' => 'GET',
        'callback' => 'get_menu',
    ) );
} );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(/wp-content/uploads/login-logo.svg);
			height:150px;
			width:320px;
			background-size: 320px 150px;
			background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return 'https://roostergrin.com';
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Build By Rooster Grin Media';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
