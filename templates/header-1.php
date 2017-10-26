<nav class="navbar navbar-expand-sm navbar-light bg-faded">
  <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
    <?php 
    // Check if a logo has been defined, if not show sitename
    if(get_field('logo', 'options')): ?>
      <img src="<?php the_field('logo', 'options'); ?>" alt="<?php bloginfo('name'); ?>" class="logo" />
    <?php
    else:
      bloginfo('name');
    endif; 
    ?>
  </a>
  <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Brand -->
  

  <!-- Links -->
     <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary_navigation',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse justify-content-end',
                'container_id'      => 'nav-content',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>

</nav>