<footer  class="site-footer">
			<div class="row">
				<div class="widget-wrap inner-footer col-md-5">
					<div class="footer-content-left">
						<h3>Links</h3>
						<?php
							if( is_active_sidebar( 'footer-1' ) ){
								dynamic_sidebar( 'footer-1' );
							}
						?>
						<div class="icon-nav-wrapper">
							<a href="" class="instagram nav-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/_/img/white-instagram.svg" alt="instagram">
							</a>
							<a href="" class="facebook nav-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/_/img/white-facebook.svg" alt="facebook">
							</a>
							<a href="" class="youtube nav-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/_/img/white-youtube.svg" alt="youtube">
							</a>
							<a href="" class="twitter nav-icon">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/_/img/white-twitter.svg" alt="twitter">
							</a>
						</div>			
					</div>
					</div>
					<div class="col-md-7 footer-content-right">
						<div class="image-right" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/_/img/footer-image.png')" alt="footer-img"></div>
					</div>
				</div>
			</div>
		</div>

</footer>
<div class="lower-footer">
	<p class="lower-footer-info">© COPYRIGHT 2020, RAFAEL SALZMANN</p>
</div>

</div>


<?php wp_footer(); ?>

</body>
</html>
