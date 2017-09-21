<header class="header-1">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container">
    <a class="navbar-brand" href="#">
      <?php if(get_field('logo', 'options')): ?>
        <img src="<?php get_field('logo', 'options'); ?>" alt="<?php bloginfo('name'); ?>" />
      <?php else:
        echo bloginfo('name');
        endif; ?>  
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav pull-xs-right']);
        endif;
        ?>
    </div>
    </div>
  </nav>

</header>