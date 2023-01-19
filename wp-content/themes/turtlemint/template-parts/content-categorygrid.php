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
<div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 col-md-6'); ?>><!-- SG content-categorygrid.php -->
	<div class="custom-blog-crd">  
    <?php turtlemint_post_thumbnail(); ?>
    <a href="<?php echo esc_url( get_permalink() ) ?>">
    <div style="height: 10px;">
        <!-- <h6 class="author-name">Blog Author Name</h6><h6 class="published-date">Mar 12, 2022</h6> -->
    </div>
    <?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			//the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			if(strlen(get_the_title())>60){
				echo '<h5>'.substr(get_the_title(), 0, 60).'...</h5>';
			}
			else{
				the_title( '<h5>', '</h5>' );
			}
            if(strlen(get_the_excerpt())>80){
				echo '<p class="' . strlen(get_the_excerpt()) . '">' .substr(get_the_excerpt(), 0, 80).'...</p>';
			}
			else{
				the_excerpt();
			}
		endif;
        

	?>
<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  -->
	<div class="post-image hidden">
		<?php turtlemint_post_thumbnail(); ?>
	</div>
	<header class="entry-header hidden">
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
			if(strlen(get_the_title())>60){
				echo '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">'.substr(get_the_title(), 0, 60).'...</a></h2>';
			}
			else{
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		endif;

		 ?>
	</header><!-- .entry-header -->

	
	<div class="post-excerpt hidden">
		<?php //the_excerpt(); ?>
	</div>

	<div class="entry-content hidden">
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

	<footer class="entry-footer hidden">
		
		<?php //turtlemint_entry_footer(); ?>
		
	</footer><!-- .entry-footer -->
        <!-- </article> -->
    </a></div></div><!-- #post-<?php the_ID(); ?> -->
<!-- SG End of content-bloggrid.php -->
