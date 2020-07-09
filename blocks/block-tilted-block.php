<?php

//Declare Variables
$image = get_field('image');
$headline = get_field('headline');
$text = get_field('text');
$background_color = get_field('background_color');

?>



<?php if ( get_field( 'enable_image_right' ) ): ?>

    <div class="tilted_block_wrapper tilted_odd" style="background: <?php echo $background_color ?>;">
        <div class="content-left">
            <h6 class="headline"><?php echo $headline ?></h6>
            <p class="text"><?php echo $text ?></p>
        </div>
        <div class="image_right" style="background: url('<?php echo $image ?>')"></div>
    </div>

<?php else: // field_name returned false ?>

    <div class="tilted_block_wrapper" style="background: <?php echo $background_color ?>;">
        <div class="image_left" style="background: url('<?php echo $image ?>')"></div>
        <div class="content-right">
            <h6 class="headline"><?php echo $headline ?></h6>
            <p class="text"><?php echo $text ?></p>
        </div>
    </div>

<?php endif; // end of if field_name logic ?>


