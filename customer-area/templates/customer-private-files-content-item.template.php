<?php /** Template version: 1.0.0 */ ?>

<?php 
	global $post;	
	$extra_class = ' ' . get_post_type();
	$extra_class = apply_filters( get_post_type() . '_item_extraclass', $extra_class, $post );
?>
<tr class="cuar-private-file cuar-item<?php echo $extra_class; ?>">
	<td class="meta">
		<span class="date"><span class="glyphicon glyphicon-time"></span> <?php the_time(get_option('date_format')); ?></span>
		<br/>
		<span class="sender"><span class="glyphicon glyphicon-user"></span> <?php echo CUAR_WordPressHelper::ellipsis( sprintf( __('From: %s', 'cuar' ), get_the_author_meta( 'display_name' ) ), 27 ); ?></span>
	</td>
	<td class="content">
		<span class="title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Added on %s', 'cuar' ), get_the_date() ) ); ?>">
			<?php the_title(); ?></a></span>
		<br/>
		<span class="recipient"><?php echo CUAR_WordPressHelper::ellipsis( sprintf( __('To: %s', 'cuar' ), cuar_get_the_owner() ), 53 ); ?></span>
	</td>
	<td class="links download-link">
		<a href="<?php cuar_the_file_link( get_the_ID(), 'download' ); ?>" title="<?php esc_attr_e( 'Download', 'cuar' ); ?>" class="btn btn-primary">
			<span class="glyphicon glyphicon-download"></span> <?php _e( 'Download', 'cuar' ); ?></a>
		<?php do_action( get_post_type() . '_item_additional_links', $post ); ?>	
	</td> 
</tr>