<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Turtlemint
 */

?>
<!-- content.php -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- SG Content-Bloggrid.php -->
	<div class="post-image">
		<?php turtlemint_post_thumbnail(); ?>
	</div>
	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php turtlemint_posted_by(); ?>
				<span>/</span>
				<?php turtlemint_posted_on(); ?>
				
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			//the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			if(strlen(get_the_title())>70){
				echo '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">'.substr(get_the_title(), 0, 70).'...</a></h2>';
			}
			else{
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		endif;

		 ?>
	</header><!-- .entry-header -->

	
	<div class="post-excerpt">
		<?php //the_excerpt(); ?>
	</div>

	<div class="entry-content">
		<?php
		// the_content( sprintf(
		// 	wp_kses(
		// 		/* translators: %s: Name of current post. Only visible to screen readers */
		// 		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'turtlemint' ),
		// 		array(
		// 			'span' => array(
		// 				'class' => array(),
		// 			),
		// 		)
		// 	),
		// 	get_the_title()
		// ) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'turtlemint' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
		<?php //turtlemint_entry_footer(); ?>
		<?php /*

		<footer class="entry-footer">
			<span class="cat-links">Posted in <a href="http://localhost/category/life-insurance/" rel="category tag">Life Insurance</a></span>
			<span class="tags-links">Tagged <a href="http://localhost/tag/life-insurance/" rel="tag">life insurance</a></span>
			<span class="comments-link"><a href="http://localhost/life-insurance/articles/know-about-lic-jeevan-saral-plan/#respond">Leave a Comment<span class="screen-reader-text"> on Know about LIC Jeevan Saral Plan</span></a></span>
			<span class="edit-link"><a class="post-edit-link" href="http://localhost/wp-admin/post.php?post=5893&amp;action=edit">Edit <span class="screen-reader-text">Know about LIC Jeevan Saral Plan</span></a></span>
		</footer>

		*/ ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
<!-- SG End of content-bloggrid.php -->
