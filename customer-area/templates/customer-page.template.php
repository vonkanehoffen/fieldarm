<?php /** Template version: 1.0.0 */ ?>

<?php
	$page_classes = array( 'cuar-page-' . $this->page_description['slug'] ); 
	if ( $this->has_page_sidebar() ) $page_classes[] = "cuar-page-with-sidebar";
	else $page_classes[] = "cuar-page-without-sidebar";
?>
<div class="cuar-page <?php echo implode( ' ', $page_classes ); ?>">

	<div class="cuar-page-header"><?php 
		$this->print_page_header( $args, $shortcode_content );
	?></div>
	
	<div class="row">
		<div class="cuar-page-content col-sm-9 col-sm-push-3"><?php 
			$this->print_page_content( $args, $shortcode_content ); 
		?></div>
		
		<?php if ( $this->has_page_sidebar() ) : ?>	
		<div class="cuar-page-sidebar col-sm-3 col-sm-pull-9"><?php 
			$this->print_page_sidebar( $args, $shortcode_content ); 
		?></div>	
		<?php else : ?>
		<div class="col-sm-3 col-sm-pull-9">
			<?php dynamic_sidebar( $this->get_sidebar_id() ); ?>
		</div>
		<?php endif; ?>
	</div>
	<div class="cuar-page-footer"><?php 
		$this->print_page_footer( $args, $shortcode_content ); 
	?></div>
</div>