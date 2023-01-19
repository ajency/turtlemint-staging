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

<div class="container search-container"><!-- SG search.php -->
    <div class="row">    	
    	<?php
		if ( have_posts() ) :

			if ( is_search() && !is_home() && ! is_front_page() ) :
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

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
    </div>
</div>
	<style type="text/css">
		.post-image{
			text-align: center;
		}
		img.attachment-post-thumbnail.size-post-thumbnail.wp-post-image {
		    width: 100%;
		    height: auto;
		}
		.article-block{
			height: 400px;
		}
	</style>
	<section id="primary" class="content-area" style="display: none;">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'turtlemint' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();
