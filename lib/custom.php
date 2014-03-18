<?php
/**
 * Custom functions
 */

// Branded login screen

function fieldarm_login_stylesheet() { ?>
    <link rel="stylesheet" id="custom_wp_admin_css"  href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/assets/css/login.min.css'; ?>" type="text/css" media="all" />
<?php }
add_action( 'login_enqueue_scripts', 'fieldarm_login_stylesheet' );
