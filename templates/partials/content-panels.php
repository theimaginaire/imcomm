<?php 

if( have_rows('panels') ):
?>

<div class="panels">
<?php
 	// loop through the rows of data
    while ( have_rows('panels') ) : the_row();
?>
<div class="col-md-3">

		<? the_sub_field('content'); ?>

</div> 
<?

	endwhile;
?>
</div>
<?
endif;
?>