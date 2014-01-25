<header class="banner container" role="banner">
  <div class="row">
    <div class="col-sm-3">
      <a class="brand icon-fieldarm" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>
    <div class="col-sm-9">
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
