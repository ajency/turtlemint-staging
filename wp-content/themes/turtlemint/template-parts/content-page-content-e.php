<?php
/**
 * Template part for displaying page content in page-content-e-2tier.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Turtlemint
 */

?>

<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->
	
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'turtlemint' ),
			'after'  => '</div>',
		) );
		?>

<!-- </article> --><!-- #post-<?php the_ID(); ?> -->
