<?php


    $headline = get_field('headline');
    $with_lines = get_field('lines_on');


?>

<?php if ( $with_lines ):  ?>
    
    <div class="headline_line_wrapper">
        <span class="line_before"></span>
        <h3 class="headline_with_lines"><?php echo $headline ?></h3>
        <h5 class="background_headline"><?php echo $headline ?></h5>
        <span class="line_after"></span>
    </div>

<?php else:  ?>

    <h3 class="headline_without_lines"><?php echo $headline ?></h3>

<?php endif; ?>

