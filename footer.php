<footer  class="site-footer">

 		<div class="container ">
			 <div class="row">

			<div class="col-lg-3 col-md-4 col-sm-6 col-12 widget-wrap">
				<a class="home-link mb-1" href="<?php echo home_url(); ?>">
					<img alt="Wrap Center Institute" src="<?php echo get_stylesheet_directory_uri() . "/_/img/logo.svg" ?>">
				</a>
				<?php
					if( is_active_sidebar( 'footer-1' ) ){
						dynamic_sidebar( 'footer-1' );
					}
				?>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-12 widget-wrap">
				<?php
					if( is_active_sidebar( 'footer-2' ) ){
						dynamic_sidebar( 'footer-2' );
					}
				?>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-12 widget-wrap">
				<?php
					if( is_active_sidebar( 'footer-3' ) ){
						dynamic_sidebar( 'footer-3' );
					}
				?>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 col-12 widget-wrap">
				<?php
					if( is_active_sidebar( 'footer-4' ) ){
						dynamic_sidebar( 'footer-4' );
					}
				?>
			</div>

			</div>
		</div>

</footer>
</div>


<?php wp_footer(); ?>

</body>
</html>
