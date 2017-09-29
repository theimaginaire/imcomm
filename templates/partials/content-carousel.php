<?php 

if( have_rows('slides') ):
?>

<div class="owl-carousel">
<?php
 	// loop through the rows of data
    while ( have_rows('slides') ) : the_row();
?>
<div class="item lazy" style="background-image:url(<?php echo get_sub_field('image'); ?>);">
	<div class="item-content">
		<? the_sub_field('content'); ?>
	</div>
</div> 
<?

	endwhile;
?>
</div>
<?
endif;
?>