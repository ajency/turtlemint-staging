<?php
/**
  Template Name: Basic(Revamp) Page
 */

get_header('tmphase2');
?>

	<!-- <div id="primary" class="content-area"> -->
		<!-- <main id="main" class="site-main"> -->

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-basic-revamp', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		<!-- </main> --><!-- #main -->
	<!-- </div> --><!-- #primary -->
<style>
	.blog-party-banner.basic-banner {
		height: 250px;
		padding-top: 100px;
	}
	.page-template-page-basic-revamp h2{font-family: 'Montserrat-Bold', sans-serif; font-size: 32px;}
	.page-template-page-basic-revamp .blogpad li::marker{color: #348741;}
	@media screen and (min-device-width: 200px) and (max-device-width: 428px){
		.page-template-page-basic-revamp h2 {
			font-size: 28px;
		}
	}
</style>
<!-- <?php echo esc_html( get_page_template_slug( $post->ID ) ); ?> -->
<?php
//get_sidebar();
get_footer('tmphase2');
