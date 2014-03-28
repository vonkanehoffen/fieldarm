<?php
/**
 * Custom functions
 */

// Branded login screen

function fieldarm_login_stylesheet() { ?>
    <link rel="stylesheet" id="custom_wp_admin_css"  href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/assets/css/login.min.css'; ?>" type="text/css" media="all" />
<?php }
add_action( 'login_enqueue_scripts', 'fieldarm_login_stylesheet' );

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'FieldArm';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


// Fix compatibitlity issues with Customer Area plugin. 
// BS plugins were being loaded twice.

function unload_customer_area_js() {
	wp_deregister_script('bootstrap.transition');
	wp_deregister_script('bootstrap.dropdown');
	wp_deregister_script('bootstrap.collapse');
}
add_action( 'wp_enqueue_scripts', 'unload_customer_area_js' );
