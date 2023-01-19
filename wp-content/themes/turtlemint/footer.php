<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Turtlemint
 */

?>
	

	<footer id="colophon" class="site-footer" style="display: none;">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'turtlemint' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'turtlemint' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'turtlemint' ), 'turtlemint', '<a rel="nofollow" href="http://www.supramind.com">Supramind</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<!-- <div id="footerSection"></div>
	$('#footerSection').load('/wp-content/themes/turtlemint/assets/landing_widgets/footer-section.html'); -->
	<?php include(get_theme_root() . '/' . get_template() . "/assets/landing_widgets/footer-section.html"); ?>
</div><!-- #page -->

<?php wp_footer(); ?>
	
<!-- inject:foot -->
   
    <!-- inject:foot -->
    <!-- modal -->
    <div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
        style="height: 100%; width: 100%">
        <div class="modal-dialog modal-margin">
            <div class="modal-content">
                <div class="modal-body" id="yt-player">
                    <iframe id="yt-src" class="tmvideo" width="100%" height="320" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/assets/js/jquery.min.js"></script>
    
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/index.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/verticalLanding.js"></script>
    <script src="//fonts.turtlemint.com/Font-Awesome-Pro-master/js/packs/regular.js"></script>
    <script src="//fonts.turtlemint.com/Font-Awesome-Pro-master/js/packs/solid.js"></script>
    <script src="//fonts.turtlemint.com/Font-Awesome-Pro-master/js/fontawesome.js"></script>
    <!-- endinject:foot -->
</body>
</html>
