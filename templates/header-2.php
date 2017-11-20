<header class="header-2">
<div class="container">
    <div class="left">
        <a class="navbar-brand" href="#">
      <?php if(get_field('logo', 'options')): ?>
        <img src="<?php get_field('logo', 'options'); ?>" alt="<?php bloginfo('name'); ?>" />
      <?php else:
        echo bloginfo('name');
        endif; ?>  
      </a>
    </div>
    <div class="right">
       <ul class="header-cta">
          <li><?php echo do_shortcode('[phone]'); ?></li>
          <li><a href="<?php get_field('header_cta_link', 'options'); ?>" class="btn btn-primary"><?php the_field('header_cta_text', 'options'); ?></a>
        </ul>
    </div>

</div>
<nav class="navbar navbar-expand-sm navbar-light bg-faded">
  <div class="container">
  <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  
  <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary_navigation',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse justify-content-center',
                'container_id'      => 'nav-content',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
    ?>
  </div>
</nav>
</header>