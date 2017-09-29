<?php
// Extra Sections Template Part
if( have_rows('extra_block') ):
?>
<section class="extra">
	<?php
	 	// loop through the rows of data
	    while ( have_rows('extra_block') ) : the_row();

	        // display a sub field value
	        $width = get_sub_field('panel_style');

	        $bgstyle = get_sub_field('bg_type');

	        if($bgstyle=='colour'):
	        	$style = "background-color:".get_sub_field('bg_colour').";";
	        elseif($bgstyle=='image'):
	        	$style = "background-image:url(".bloginfo('template_directory')."/dist/images/grey.png);";
	        endif;
	        if(get_sub_field('text_colour')) $style .= "color:".get_sub_field('text_colour').";";
	?>
		<div class="child <?php if($width): echo $width; endif; ?> lazy" <?php if(get_sub_field('bg_image')): ?> data-original="<?php the_sub_field('bg_image'); ?>" <?php endif; ?> style="<?php echo $style; ?>">
            <div class="child-content">
                <?php the_sub_field('content'); ?>
            </div>
		</div>
	<?php 
	    endwhile;
?>
</section>
<?php 

endif;
?>