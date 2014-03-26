<?php /** Template version: 1.0.1 

-= 1.1.0 =-
- Added file size
 
-= 1.0.0 =-
- Initial version

*/
?>

<div class="cuar-private-file-meta panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title"><?php echo apply_filters( 'cuar_private_files_after_content_title', __( 'Download this file', 'cuar' ) ); ?></h4>
	</div>
	<table class="cuar-private-file-list table">
	  <tbody>
			<tr class="cuar-private-file">
				<td class="title">
					<?php cuar_the_file_name( get_the_ID() ); ?> <span class="text-muted">(<?php cuar_the_file_size( get_the_ID() ); ?>)</span>
				</td>
				<td class="links download-link">
					<a class="btn btn-primary" href="<?php cuar_the_file_link( get_the_ID(), 'download' ); ?>" title="<?php esc_attr_e( 'Download', 'cuar' ); ?>">
						<span class="glyphicon glyphicon-download"></span> <?php _e( 'Download', 'cuar' ); ?></a>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="panel-footer">
		<p class="private-content-information"><small><?php 	
			$date = sprintf("<em>%s</em>", get_the_date() );
			$author = sprintf("<em>%s</em>", get_the_author_meta( 'display_name' ) );
			$recipients = sprintf("<em>%s</em>", cuar_get_the_owner() );
		
			printf( __( 'File created on %1$s by %2$s for %3$s', 'cuar' ), $date, $author, $recipients  ); ?>
		</small></p>
	</div>

</div>