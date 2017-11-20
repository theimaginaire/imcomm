<div class="top-bar">
  <div class="container-fluid">
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

<header class="header-2">
<div class="container-fluid">
  <div class="row">
    
    <div class="left">
        <a class="navbar-brand" href="#">
      <?php if(get_field('logo', 'options')): ?>
        <img src="<?php the_field('logo', 'options'); ?>" alt="<?php bloginfo('name'); ?>" class="logo" />
      <?php else:
        echo bloginfo('name');
        endif; ?>  
      </a>
    </div>
    <div class="center-panel">
        <?php get_product_search_form(); ?>
    </div>
    <div class="phone">
      <i class="im-icon im-phone"></i> <?php echo do_shortcode('[phone]'); ?>
    </div>
    
    
    
    <div class="right">
       <ul class="header-cta">
          <li>
            <a href="<?php global $woocommerce; echo $woocommerce->cart->get_cart_url(); ?>"><i class="im-icon im-basket-simple"></i></a>
          </li>
          <li class="d-none d-sm-inline-block">
              <a href="<?php echo do_shortcode('[my_acc]'); ?>"><i class="im-icon im-my-account"></i></a>
          </li>
          <li class="d-none d-sm-inline-block">
            <i class="im-icon im-star"></i>
          </li>
          <li class="d-inline-block d-sm-none">
            <a href="#" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation"><i class="im-icon im-menu"></i></a>
          </li>
        </ul>
    </div>

</div>

</header>
<div class="nav-row">
<nav class="navbar navbar-expand-sm navbar-light light-bg">
  <div class="container">

  
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
</div>