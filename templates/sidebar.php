<?php 
if(strpos(get_post_type(), 'cuar') !== false) {
	echo '<div class="page-icon" style="margin-top:20px;"><span class="glyphicon glyphicon-cloud-download"></span></div>';
	dynamic_sidebar('customer-private-pages-sidebar');
} else {
	dynamic_sidebar('sidebar-primary'); 
}