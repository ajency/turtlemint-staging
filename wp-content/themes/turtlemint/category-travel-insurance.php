<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Turtlemint
 */

get_header();
?>
<!-- Iam category-travel-insurance.php -->
<div class="container category-container"><!-- SG search.php -->
    <div class="row">    	
    	<?php
		if ( have_posts() ) :

			if ( is_category() && !is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php the_archive_title(); ?></h1>
					<?php the_archive_title( '<h1 class="page-title site-title">', '</h1>' ); ?>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */?>
				<div class="col-xs-12 col-md-4 article-block">
					<?php get_template_part( 'template-parts/content', 'bloggrid' ); ?>
				</div>
				<?php

			endwhile;

			the_posts_navigation();
			the_posts_pagination( array(
				'mid_size' => 2,
				'prev_text' => __( 'Previous Page', 'textdomain' ),
				'next_text' => __( 'Next Page', 'textdomain' ),
				) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
    </div>
</div>

	

<?php
get_footer();
