<?php 

if( have_rows('panels') ):
?>

<div class="panels">
<?php
 	// loop through the rows of data
    while ( have_rows('panels') ) : the_row();
?>
<div class="col-md-3">
    <?php 
            $bg_type = get_sub_field('bg_type');

            if($bg_type=='image'):
                $style = 'background-image:url('.get_sub_field('panel_img').');';
            elseif($bg_type=='colour'):
                $style = 'background-color:'.get_sub_field('panel_bg').';';
            else:
                $class = 'primary-bg';
            endif;
        ?>
        <div class="panel-col <?php if($class) echo $class; ?>" <?php if($style): ?>style="<?php echo $style; ?>" <?php endif; ?>>

		      <? the_sub_field('content'); ?>
              <?= $bg_type; ?>
        </div>

</div> 
<?

	endwhile;
?>
</div>
<?
endif;
?>