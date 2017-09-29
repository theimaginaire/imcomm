<?php
// WP_Query arguments
$args = array(
	'posts_per_page'         => get_sub_field('num_posts'),
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ):
?>
<section class="latest-posts">
<div class="container-fluid">
<div class="row">
	<div class="col-md-12">
		<?php the_sub_field('intro_text'); ?>
	</div>
</div>
<div class="row">
	<?
	while ( $query->have_posts() ):
		$query->the_post();
	?>
	<div class="col-md-4">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p><?php get_template_part('templates/entry-meta'); ?></p>

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