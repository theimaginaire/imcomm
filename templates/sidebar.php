<?php 
if(is_shop() || is_product_category() || is_product_tag()):
    dynamic_sidebar('sidebar-shop');
else:
    dynamic_sidebar('sidebar-primary');
endif;
 ?>
