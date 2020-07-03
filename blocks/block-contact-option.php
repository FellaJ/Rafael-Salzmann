
<div class="contact-options-wrapper">
<?php 
// check if the repeater field has rows of data
if( have_rows('contact_options') ):

 	// loop through the rows of data
    while ( have_rows('contact_options') ) : the_row(); ?>

        <!-- // display a sub field value -->
        <div class="contact-options-inner">
        <img src="<?php the_sub_field('social_media_icon'); ?>" class="social_media_icon" alt="Social_media_icon">
            <a href="<?php the_sub_field('kontaktlink'); ?>"><?php the_sub_field('linktext'); ?></a>
        </div>
        
  <?php endwhile;

else : ?>

    <!-- // no rows found -->

<?php endif;

?>
</div>