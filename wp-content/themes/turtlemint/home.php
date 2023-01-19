<?php
/**
  Template Name: Blog Grid
 */

get_header('tmphase2');
?>
<!-- Iam home.php -->
<?php $row_post_limit = 8;
$category_rows = array();
  
$category_rows['Health'] = array(
    "slug" => "health-insurance", 
    "content" => array(
        "title" => "Health", 
        "subtitle" => "We have decoded health insurance just for you"
    )
);
$category_rows['Life'] = array(
    "slug" => "life-insurance", 
    "content" => array(
        "title" => "Life", 
        "subtitle" => "Know all about the right life insurance cover"
    )
);
$category_rows['General'] = array(
    "slug" => "general-insurance", 
    "content" => array(
        "title" => "General Insurance", 
        "subtitle" => "Get to know about various types of general insurance"
    )
);
$category_rows['Car'] = array(
    "slug" => "car-insurance", 
    "content" => array(
        "title" => "Car", 
        "subtitle" => "Know everything about car insurance before buying"
    )
);
$category_rows['Bike'] = array(
    "slug" => "two-wheeler-insurance", 
    "content" => array(
        "title" => "Bike", 
        "subtitle" => "Know how to protect your most prized possession"
    )
);
$category_rows['Company updates'] = array(
    "slug" => "company-updates", 
    "content" => array(
        "title" => "Company updates", 
        "subtitle" => "We are growing! Be a part of our growth journey!"
    )
);

?>
<div class="container-fluid">
	<div class="row ">
		<div class="col-md-12 bgcolor" style="min-height: 0px;"> 
			<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/Blog-Banner-Mob.png" class="blog-car-banner-mobile" alt=""/>
		</div>
		<div class="col-md-12 bgcolor" style="min-height: 0px;"> 
			<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/Blog-Banner-Tab.png" class="blog-car-banner-tab" alt=""/>
		</div>
	</div>
</div>
<div class="row-2 blog-car-banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-md-5 col-lg-6 col-xl-12">
				<div class="blog-title blog-header-title blogpad d-none d-lg-block ">
					<h1>Making Insurance Simple</h1>
					<h3 style="max-width: 80%;">Explore the Turtlemint Blog to get answers to many questions related to Health, Life, Motor Insurance and much more!</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
$category_row_counter = 0;
 foreach ($category_rows as $categoryname => $category_row_array) {
 $category_row_counter++;?>

<div class="row-2 blogpad <?php if($category_row_counter % 2 == 0){ echo "blogbackground"; /*even*/ } ?> "> <!--<?php echo $category_row_array['slug']; ?> -->
	<div class="container  ">
		<div class="row-2 ">
			<div class="blog-title">
				<h2><?php echo $category_row_array['content']['title']; ?></h2>
				<p><?php echo $category_row_array['content']['subtitle']; ?><p>
			</div>
		</div>
		<div class="row-2">
			<div class="slider <?php if(!($category_row_counter % 2 == 0)){ echo "slider-nav-health"; /*Odd*/ } else {echo "slider-nav-bike"; /*Even*/} ?>">
				<?php			// The Query
				$the_query = new WP_Query( array( 'category_name' => $category_row_array['slug'] ) );
				
				// The Loop
				if ( $the_query->have_posts() ) {
					$row_post_count = 0;
					while ( $the_query->have_posts() && $row_post_count<$row_post_limit ) {
						$the_query->the_post();
						/*echo '<div class="col-md-3">' . get_the_title() . '</div>';*/
						get_template_part( 'template-parts/content', 'bloghome-categoryrow' );
						$row_post_count++;
					}
				} else {
					// no posts found
				}
				/* Restore original Post Data */
				wp_reset_postdata();?>
				
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<a class="btn-watch-more" href="<?php echo get_site_url()."\/category\/".$category_row_array['slug']; ?>">Read More</a>
				<?php if(count($category_rows)==$category_row_counter){ /*Last row*/?>
					<div class="horline"></div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<!-- #primary -->



<?php
//get_sidebar();
get_footer('tmphase2');
?>
<!-- SG End of home.php -->
