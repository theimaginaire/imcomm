<?php use Roots\Sage\Titles; ?>

<div class="page-header">
	<div class="container">
  		<h1><?= Titles\title(); ?></h1>
        <?php if(is_product_category()) do_action( 'woocommerce_archive_description' ); ?>
  	</div>
</div>
