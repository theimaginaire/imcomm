<?php
// WP_Query arguments
$args = array(
	'post_type' => 'testimonial'
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ):
?>
<section class="testimonials">
<div class="container-fluid">
<div class="row">
	<div class="col-md-12">
		<?php the_sub_field('intro_text'); ?>
	</div>
</div>
<div class="owl-carousel testimonial-carousel">
	<?
	while ( $query->have_posts() ):
		$query->the_post();
	?>
	<div class="item">
		<div class="item-content">
			
			<p><?php the_content(); ?></p>
			<p><?php the_title(); ?></p>
		</div>
	</div>
	<?
	endwhile;
?>
</div>
</div>
</section>
<? 
endif;
// Restore original Post Data
wp_reset_postdata();