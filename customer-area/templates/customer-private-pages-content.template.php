<?php /** Template version: 1.0.0 */ ?>

<h3><?php echo $page_subtitle; ?></h3>
<table class="cuar-private-page-list cuar-item-list table">
	<tbody>
<?php 	
		while ( $content_query->have_posts() ) {
			$content_query->the_post(); 
			global $post;
			
			include( $item_template ); 
		}
?>
	</tbody>
</table>
