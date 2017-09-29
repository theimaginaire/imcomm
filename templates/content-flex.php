<?php

// check if the flexible content field has rows of data
if( have_rows('flexible_content') ):

     // loop through the rows of data
    while ( have_rows('flexible_content') ) : the_row();

        if( get_row_layout() == 'fw_image' ):
        	$image = get_sub_field('image');
        ?>
        	<img class="fw-image" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />
        <?php 

        elseif( get_row_layout() == 'carousel' ): 

        	get_template_part('templates/partials/content', 'carousel');

        elseif( get_row_layout() == 'panels' ): 

            get_template_part('templates/partials/content', 'panels');

        elseif( get_row_layout() == 'cta' ): 

            get_template_part('templates/partials/content', 'cta');

        elseif( get_row_layout() == 'latest_posts' ): 

            get_template_part('templates/partials/content', 'latest');

        elseif( get_row_layout() == 'latest_cases' ): 

            get_template_part('templates/partials/content', 'cases');

        elseif( get_row_layout() == 'extra_block' ): 

            get_template_part('templates/partials/content', 'block');

        elseif( get_row_layout() == 'testimonials' ): 

            get_template_part('templates/partials/content', 'testimonials');

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>