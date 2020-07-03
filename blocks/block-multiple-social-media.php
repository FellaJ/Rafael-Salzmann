
<div class="social_media_wrapper">
<?php 
// check if the repeater field has rows of data
if( have_rows('multiple_social_media_icons') ):

 	// loop through the rows of data
    while ( have_rows('multiple_social_media_icons') ) : the_row(); ?>

        <!-- // display a sub field value -->
        <img src="<?php the_sub_field('social_media_icon'); ?>" class="social_media_icon" alt="Social_media_icon">

  <?php endwhile;

else : ?>

    // no rows found

<?php endif;

?>
</div>