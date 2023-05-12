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

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f)
	;
	})(window,document,'script','dataLayer','GTM-PCZGBP');
</script>
<!-- End Google Tag Manager -->

<?php
	/* Customize Variables */
	$ga_tracking_id = get_option('tm_ga_tracking_id', '');
	$ga4_tracking_id = get_option('tm_ga4_tracking_id', '');
?>

<?php if ($ga_tracking_id || $ga4_tracking_id) : ?>
	<!-- Google tag (gtag.js) -->

	<?php if ($ga_tracking_id) : ?>
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga_tracking_id; ?>"></script>
	<?php elseif ($ga4_tracking_id) : ?>
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga4_tracking_id; ?>"></script>
	<?php endif; ?>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		<?php if ($ga_tracking_id) : ?>
			gtag('config', '<?php echo $ga_tracking_id; ?>');
		<?php endif; ?>

		<?php if ($ga4_tracking_id) : ?>
			gtag('config', '<?php echo $ga4_tracking_id; ?>');
		<?php endif; ?>
	</script>

<?php endif; ?>

</body>
</html>
