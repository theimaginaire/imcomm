<div class="container-fluid">
<section class="hero-area">

    <div class="panel-row">
        <div class="panel-col">
            <!-- Hero/Carousel -->
            <?php

            // check if the repeater field has rows of data
            if( have_rows('carousel') ):
            ?>
            <section class="owl-carousel owl-theme">
            <?php 
                // loop through the rows of data
                while ( have_rows('carousel') ) : the_row();

                // Individual carousel slide
            ?>
            <div class="item" style="background-image:url(<?php the_sub_field('background_image'); ?>);">
            <div class="item-content">
                <?php the_sub_field('slide_content'); ?>
            </div>
            </div>
            <?php
                
                endwhile;
            ?>
            </section>
            <?php
            elseif(get_field('hero_content')) :

            ?>
            <section class="hero" <?php if(get_field('hero_image')): ?> style="background-image:url(<?php the_field('hero_image'); ?>);" <?php endif; ?>>
                <div class="container-fluid">
                    <div class="hero-content">
                    <?php the_field('hero_content'); ?>
                    </div>
                </div>
            </section>
            <?php 
            else: 
                get_template_part('templates/page', 'header');
            endif;

            ?>
            <!-- End hero/carousel -->
        </div>
        <!-- Panel 2 -->
        <?php 
            $bg_type = get_field('background_type');
            if($bg_type=='image'):
                $style = 'background-image:url('.get_field('panel2_img').');';
            elseif($bg_type=='colour'):
                $style = 'background-color:'.get_field('panel2_bg').';';
            else:
                $class = 'primary-bg';
            endif;
        ?>
        <div class="panel-col <?php if($class) echo $class; ?>" <?php if($style): ?>style="<?php echo $style; ?>" <?php endif; ?>>
            
            <?php the_field('panel2_content'); ?>            

        </div>
        <!-- #Panel 2 -->
        
        <!-- Panel 3 -->
        <?php 
            $bg_type = get_field('background_type');
            if($bg_type=='image'):
                $style = 'background-image:url('.get_field('panel3_img').');';
            elseif($bg_type=='colour'):
                $style = 'background-color:'.get_field('panel3_bg').';';
            else:
                $class = 'primary-bg';
            endif;
        ?>
        <div class="panel-col <?php if($class) echo $class; ?>" <?php if($style): ?>style="<?php echo $style; ?>" <?php endif; ?>>
            
            <?php the_field('panel3_content'); ?>            

        </div>
        <!-- #Panel 3 -->
    </div>
  
</section>
</div>  