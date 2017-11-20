<div class="top-bar">
  <div class="container">
          <?php
            wp_nav_menu( array(
                'menu'              => 'top-menu',
                'theme_location'    => 'top_navigation',

                'container'         => 'div',
                'menu_class'        => 'top-menu justify-content-end')
            );
          ?>
  </div>
</div>

<nav class="navbar navbar-expand-sm navbar-light bg-faded">
  <div class="container">
  <!-- Brand -->

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

  <!-- Toggle -->

  <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

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
  </div>
</nav>