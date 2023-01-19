<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Turtlemint
 */

get_header('tmphase2');
$wp_this_category_object = $wp_query->get_queried_object();?>
<!-- <?php echo var_dump($wp_this_category_object); ?> -->
<?php
$row_post_limit = 8;
$post_count = 0;
$category_rows = array();
$current_category_row = array();

$category_rows['Health'] = array(
    "slug" => "health-insurance", 
    "content" => array(
        "title" => "Health", 
        "subtitle" => "We have decoded health insurance just for you"
	),
	"img" => array(
		"desktop" => "blog-health-banner.png",
		"mobile" => "Health-Category-Mob.png",
		"tablet" => "Health-Category-Tab.png"
	)
);
$category_rows['Life'] = array(
    "slug" => "life-insurance", 
    "content" => array(
        "title" => "Life", 
        "subtitle" => "Know all about the right life insurance cover"
    ),
	"img" => array(
		"desktop" => "blog-life-banner.png",
		"mobile" => "Life-Category-Mob.png",
		"tablet" => "Life-Category-Tab.png"
	)
);
$category_rows['General'] = array(
    "slug" => "general-insurance", 
    "content" => array(
        "title" => "General Insurance", 
        "subtitle" => "Get to know about various types of general insurance"
    ),
	"img" => array(
		"desktop" => "blog-general-banner.png",
		"mobile" => "General-Category-Mob.png",
		"tablet" => "General-Category-Tab.png"
	)
);
$category_rows['Car'] = array(
    "slug" => "car-insurance", 
    "content" => array(
        "title" => "Car", 
        "subtitle" => "Know everything about car insurance before buying"
    ),
	"img" => array(
		"desktop" => "blog-car-banner.png",
		"mobile" => "Car-Category-Mob.png",
		"tablet" => "Car-Category-Tab.png"
	)
);
$category_rows['Bike'] = array(
    "slug" => "two-wheeler-insurance", 
    "content" => array(
        "title" => "Bike", 
        "subtitle" => "Know how to protect your most prized possession"
    ),
	"img" => array(
		"desktop" => "blog-bike-banner.png",
		"mobile" => "Bike-Category-Mob.png",
		"tablet" => "Bike-Category-Tab.png"
	)
);
$category_rows['Company updates'] = array(
    "slug" => "company-updates", 
    "content" => array(
        "title" => "Company updates", 
        "subtitle" => "We are growing! Be a part of our growth journey!"
    ),
	"img" => array(
		"desktop" => "blog-company-banner.png",
		"mobile" => "Company-Category-Mob.png",
		"tablet" => "Company-Category-Tab.png"
	)
);
foreach ($category_rows as $categoryname => $category_row_array) {
	if($wp_this_category_object->slug==$category_row_array["slug"]){
		$current_category_row = $category_row_array;
	}
}

?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 bgcolor" style="min-height: 0px">
			<img
				src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/<?php echo $current_category_row['img']['mobile']; ?>" class="blog-car-banner-mobile"
				alt=""
				/>
		</div>
		<div class="col-md-12 bgcolor" style="min-height: 0px">
			<img
				src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/<?php echo $current_category_row['img']['tablet']; ?>" class="blog-car-banner-tab"
				alt=""
				/>
		</div>
	</div>
</div>
<div class="row-2 blog-car-banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-md-5 col-lg-6 col-xl-12">
				<div class="blog-title d-none d-lg-block">
					<h1><?php echo empty($current_category_row['content']['title'])? single_cat_title( '', false ) : $current_category_row['content']['title']; ?></h1>
					<h3><?php echo $current_category_row["content"]["subtitle"] ?></h3>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li>
					<a href="/blog/"
						><img class="brdcrm-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/homebc.png" />Blog</a
						>
				</li>
				<li>
					<a href="<?php echo get_site_url()."/category/".$current_category_row['slug']; ?>"
						><?php echo empty($current_category_row['content']['title'])? single_cat_title( '', false ) : $current_category_row['content']['title']; ?></a
						>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-12 d-none d-lg-none d-block margintop">
			<?php get_search_form(); ?>
			<!-- <div class="search-btn-left">
				<input
					class="search-input-box"
					oninput="this.value = this.value.toUpperCase();"
					type="text"
					value=""
					name="regno"
					maxlength="14"
					placeholder="What are you looking for"
					/>
			</div>
			<div class="search-btn-right">
				<button class="search-btn-box" id="with-regno">
				<img class="search-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/search.png" />
				</button>
			</div> -->
		</div>
	</div>
</div>
<div class="container blogpad">
	<!-- <div class="row-2">		
		<div class="blog-title">
		<h1>Car</h1>
		<p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Etiam<p>
		</div>
		</div> -->
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-12">
				<div class="row">
					<?php /* Start the Loop */
					if ( have_posts() ) :
						while ( have_posts() && ($post_count<9)) :
							the_post();
							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/?>
							<?php 
								get_template_part( 'template-parts/content', 'categorygrid' );
								$post_count++;
							 ?>
							
							<?php

						endwhile;

						/*the_posts_pagination( array(
							'type' => 'list',
							'mid_size' => 2,
							'prev_text' => __( '«', 'textdomain' ),
							'next_text' => __( ' »', 'textdomain' ),
							) );*/
						$pagination_defaultformat = paginate_links( array(
							'type' => 'list',
							'mid_size' => 2,
							'prev_text' => __( '«', 'textdomain' ),
							'next_text' => __( ' »', 'textdomain' ),
							) );
						$pagination_formatted = str_replace("next page-numbers","next page-link",str_replace("prev page-numbers","prev page-link",str_replace("page-numbers current","page-link current",str_replace("page-numbers dots","page-link dots",str_replace( 'a class="page-numbers"','a class="page-link"',str_replace( "<li>","<li class='page-item'>", str_replace( "<ul class='page-numbers'>", '<ul class="pagination justify-content-center">', $pagination_defaultformat )))))));

					else :

						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>			
				</div>
			</div>
			<div class="col-lg-3">
				<div class="row sticky-widgetcat">
					<div class="col-md-12 d-none d-lg-block blogcat-rightbar">
						<?php get_search_form(); ?>
						<!-- <div class="search-btn-left">
							<input
								class="search-input-box"
								oninput="this.value = this.value.toUpperCase();"
								type="text"
								value=""
								name="regno"
								maxlength="14"
								placeholder="What are you looking for"
								/>
						</div>
						<div class="search-btn-right">
							<button class="search-btn-box" id="with-regno">
							<img class="search-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/search.png" />
							</button>
						</div> -->
					</div>
					<div class="col-md-12"></div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12 d-none d-lg-block">
								<div class="row blogrightbar">
									<h4 class="category-blog-rbar-title">
										Get Best Insurance Quotes For
									</h4>
									<a
										class="btn-watch-more-category"
										href="/health-insurance/"
										>
									<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarhealth.png" /><span
										class="category-types"
										>Health Insurance</span
										>
									<img
										class="img-menu-arrow-rightbar"
										src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png"
										/></a>
									<a
										class="btn-watch-more-category"
										href="/life-insurance/"
										>
									<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarlife.png" /><span
										class="category-types"
										>Life Insurance</span
										>
									<img
										class="img-menu-arrow-rightbar"
										src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png"
										/></a>
									<!-- <a class="btn-watch-more-category" href="/category/general-insurance/">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarcar.png">&nbsp;&nbsp;General Insurance 
										            <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a> -->
									<a
										class="btn-watch-more-category"
										href="/car-insurance/"
										>
									<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarcar.png" /><span
										class="category-types"
										>Car Insurance
									</span>
									<img
										class="img-menu-arrow-rightbar"
										src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png"
										/></a>
									<a
										class="btn-watch-more-category"
										href="/two-wheeler-insurance/"
										>
									<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarbike.png" /><span
										class="category-types"
										>Bike Insurance
									</span>
									<img
										class="img-menu-arrow-rightbar"
										src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png"
										/></a>
									<!-- <a class="btn-watch-more-category" href="/category/company-updates/">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarbike.png">&nbsp;&nbsp;Company updates
										            <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<?php echo $pagination_formatted; ?>
	<style>.page-link.current { background-color: #009f69 !important;    color: #fff !important;} .page-link.current:hover,.page-link.dots:hover {  cursor: unset;}.page-link.dots:hover {background-color: #fff !important;   color: #009f69 !important;}</style>
	<!-- <ul class="pagination justify-content-center">
		<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#">4</a></li>
		<li class="page-item"><a class="page-link" href="#">5</a></li>
		<li class="page-item"><a class="page-link" href="#">6</a></li>
		<li class="page-item"><a class="page-link" href="#"> &raquo;</a></li>
	</ul> -->
</div>
<div class="container mobile-popup">
  <div style="height:1px;" class="col-md-12 d-block d-lg-none">
    <!-- other blog button disallow close on clicking outside-->
    <!-- <button type="button" id="MybtnPreventHTML" class="btn btn-info btn-lg"
      data-target="#MymodalPreventHTML" data-toggle="modal" data-backdrop="static" data-keyboard="false">
      Other Blogs<img class="img-menu-arrow img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbararrow.png" ></button> -->
    <!-- <div class="modal"  id="MymodalPreventHTML"> -->
    <!-- .modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="row blogrightbar modal-content">
          <div>
            <button type="button" class="close " data-dismiss="modal"><img src="https://www.stagingtech.in/turtlemint/assets/img/cross.png"></button><!-- .close button -->
          </div>
          <!-- popupform-->
          <h4 class="category-blog-rbar-title">Get Best Insurance </br>Quotes For</h4>
          <a class="btn-watch-more-category" href="/health-insurance/">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarhealth.png"><span class="category-types">Health Insurance</span>
          <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
          <a class="btn-watch-more-category" href="/life-insurance/">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarlife.png"><span class="category-types">Life Insurance</span>
          <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
          <!-- <a class="btn-watch-more-category" href="/category/general-insurance/">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarcar.png">&nbsp;&nbsp;General Insurance 
            			<img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a> -->
          <a class="btn-watch-more-category" href="/car-insurance/">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarcar.png"><span class="category-types">Car Insurance</span> 
          <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
          <a class="btn-watch-more-category" href="/two-wheeler-insurance/">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarbike.png"><span class="category-types">Bike Insurance </span>
          <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
          <!-- <a class="btn-watch-more-category" href="/category/company-updates/">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarbike.png">&nbsp;&nbsp;Company updates
            			<img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a> -->
        </div>
      </div>
    </div>
    <!-- other blog button to open model-->
    <div class="row">	
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Get Best Insurance Quotes For
      <img class="img-menu-arrow-blogbutton" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbararrow.png" ></button> 
    </div>
  </div>
</div>
<!-- Iam category.php -->
<div class="container category-container hidden"><!-- SG search.php -->
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

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
    </div>
</div>

<!-- Desktop-->
<style>
	/*Uncommon*/
	.blog-car-banner{
		background: url("<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/<?php echo $current_category_row['img']['desktop']; ?>"), #F8F4F3;	
		background-repeat: no-repeat;
		background-position-x: right;
		background-size: contain;
	}
</style>

<?php
get_footer('tmphase2');
