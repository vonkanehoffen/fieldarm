<?php
/**
 * FieldArm Specific Shortcodes
 */

function splash_text_shortcode() {
	return '<div class="splash-text"><img src="' . get_template_directory_uri() . '/assets/img/splash-text.png" alt="Independent Contract 
Field Trials in the UK" class="fg"></div>';
}
add_shortcode( 'splash-text', 'splash_text_shortcode' );

?>