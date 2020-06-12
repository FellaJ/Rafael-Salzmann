
<?php


$repeater_field = the_field('tilted_block_wrapper'); // The name of the repeater Field

// SUB FIELDS of REPEATER
$image_left = the_sub_field('block_with_image_left');
$image_right = the_sub_field('block_with_image_right');

// check if the repeater field has rows of data
if( have_rows($repeater_field) ):

 	// loop through the rows of data
    while ( have_rows($repeater_field) ) : the_row();

        // display a sub field value
        if( have_rows($image_left) ):
            while( have_rows($image_left) ): the_row(); 
        
                // Get sub field values of Group Field.
                $image = get_sub_field('image');
                $headline = get_sub_field('headline');
                $text = get_sub_field('text');
                $background_color = get_sub_field('background_color');
        
                ?>
                <div class="tilted_block_wrapper">
                    <div class="image_left" style="background: url(<?php echo $image ?>)"></div>
                    <div class="content-right" style="background: <?php echo $background_color ?>;">
                        <h6 class="headline"><?php echo $headline ?></h6>
                        <p class="text"><?php echo $background_color ?></p>
                    </div>
                </div>
            <?php endwhile; 
        endif; 

                // display a sub field value
        if( have_rows($image_right) ):
            while( have_rows($image_right) ): the_row(); 
        
                // Get sub field values of Group Field.
                $image = get_sub_field('image');
                $headline = get_sub_field('headline');
                $text = get_sub_field('text');
                $background_color = get_sub_field('background_color');
        
                ?>
                <div class="tilted_block_wrapper">
                    <div class="content-right" style="background: <?php echo $background_color ?>;">
                        <h6 class="headline"><?php echo $headline ?></h6>
                        <p class="text"><?php echo $background_color ?></p>
                    </div>
                    <div class="image_left" style="background: url(<?php echo $image ?>)"></div>
                </div>
            <?php endwhile; 
        endif;

    endwhile;

else :

    // no rows found

endif;

?>