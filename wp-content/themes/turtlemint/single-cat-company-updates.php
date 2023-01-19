<?php
  /**
   * The template for displaying all single posts
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
   *
   * @package Turtlemint
   */
  
  $videoId = '';
  if (!empty($sidebar_video_link)) {
    $videoId = $sidebar_video_link;
  }
  else{
    $videoId = 'PxEPvi8BiOo';
  }
  wp_enqueue_script('google-recaptcha', 'https://www.google.com/recaptcha/api.js');
  get_header('tmphase2');
  ?>
<?php  $categories = get_the_category();
 if ( ! empty( $categories ) ) {
     //echo esc_html( $categories[0]->name );
    switch($categories[0]->name){
      case "Car Insurance":
        ////if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 13985); }//NoInputBoxes
        ////if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 13988); }//NoInputBoxes
		//if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 15765); }//InputBoxes
        //if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 15766); }//InputBoxes
        break;
      case "two wheeler insurance":
        ////if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 14205); }//NoInputBoxes
        ////if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 14206); }//NoInputBoxes
		//if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 15767); }//InputBoxes
        //if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 15768); }//InputBoxes
        break;
      case "2 Wheeler insurance":
        ////if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 14205); }//NoInputBoxes
        ////if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 14206); }//NoInputBoxes
		//if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 15767); }//InputBoxes
        //if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 15768); }//InputBoxes
        break;
      case "Health Insurance":
		  //if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 19830); }
        ////if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 14207); }
        ////if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 14208); }
        break;
      case "Life Insurance":
        ////if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 14209); }
        ////if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 14210); }
        break;
      default:
        ////if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 13985); }
        ////if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 13988); }
    }
 }
 $postIDvalue = get_the_ID();
 if($postIDvalue == '14552'){//OldBike
    if (function_exists('tve_leads_form_display')) { /*tve_leads_form_display(0, 15767);*/ }
    if (function_exists('tve_leads_form_display')) { /*tve_leads_form_display(0, 15768);*/ }
 }
 if($postIDvalue == '18257'){//NewHealth
  //if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 19830); }
 }
 ?>
 <span class="SGtest-company" style="display:none;"> <?php echo esc_html( $categories[0]->name ); ?> ID:  <?php echo esc_html(get_the_ID() ); ?> </span>

<!-- BlogPost Body Start -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><a href="/blog"><img class="brdcrm-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/homebc.png">Blog</a></li>
        <?php if(!empty($html_list_of_breadcrumbs)) : ?>
        <?php echo $html_list_of_breadcrumbs; ?>  
        <?php else : ?>
        <?php echo get_hansel_and_gretel_breadcrumbs(); ?>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-12 d-none d-lg-none d-block margintop">
      <?php get_search_form(); ?>
      <!-- <div class="search-btn-left">
        <input class="search-input-box" oninput="this.value = this.value.toUpperCase();" type="text" value="" name="regno" maxlength="14" placeholder="What are you looking for">	
      </div>
      <div class="search-btn-right">
        <button class="search-btn-box" id="with-regno"><img class="search-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/search.png"></button>
      </div> -->
    </div>
  </div>
</div>
<div class="container blogpad">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-12" style="margin: 0 auto; float: unset;">
        <?php
          if ( is_singular() ) :
            the_title( '<h1 class="entry-title detail-blog-title">', '</h1>' );
          else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
          endif;
          ?>
          <?php turtlemint_post_thumbnail(); ?>
        <!-- <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/Car-Insurance-1.jpg" width="100%" height="auto" frameborder="0" /></a> -->
        <div style="height: 10px;">
          </br>
          <h6 class="author-name"><?php turtlemint_posted_by(); ?> &nbsp;<?php turtlemint_posted_on(); ?></h6>
        </div>
        <br><br>
        <!-- entry-content start-->
        <?php
          the_content( sprintf(
            wp_kses(
              /* translators: %s: Name of current post. Only visible to screen readers */
              __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'turtlemint' ),
              array(
                'span' => array(
                  'class' => array(),
                ),
              )
            ),
            get_the_title()
          ) );	

          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'turtlemint' ),
            'after'  => '</div>',
          ) );
        ?>
        <!-- entry-content end-->
        <?php
        /* Restore original Post Data */
				wp_reset_postdata();?>
        
      </div>
      <div class="col-lg-3 d-none">
        <div class="row sticky-widget">
          <div class="col-md-12 d-none d-lg-block blogrightbarmargine">
            <?php get_search_form(); ?>
            <!-- <div class="search-btn-left">
              <input class="search-input-box" oninput="this.value = this.value.toUpperCase();" type="text" value="" name="regno" maxlength="14" placeholder="What are you looking for">	
            </div>
            <div class="search-btn-right">
              <button class="search-btn-box" id="with-regno"><img class="search-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/search.png"></button>
            </div> -->
          </div>
          <div class="col-md-12 d-none d-lg-block">
            <div class="row blogrightbar">
              <h4 class="detail-blog-rbar-title">Get Best Insurance Quotes For</h4>
              <a class="btn-watch-more-detailblog" href="https://www.turtlemint.com/health-insurance/">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarhealth.png" ><span class="category-types">Health Insurance</span>
              <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
              <a class="btn-watch-more-detailblog" href="https://www.turtlemint.com/life-insurance/">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarlife.png" ><span class="category-types">Life Insurance</span>
              <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>	
              <a class="btn-watch-more-detailblog" href="https://www.turtlemint.com/car-insurance/">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarcar.png" ><span class="category-types">Car Insurance </span>
              <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
              <a class="btn-watch-more-detailblog" href="https://www.turtlemint.com/two-wheeler-insurance/">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarbike.png" ><span class="category-types">Bike Insurance </span>
              <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-12" style="padding:0px;">
  <div class="row-2 padd-tb-30 third-banner blogpad">
    <div class="container">
      <div class="section-heading">
        <h2>Related Blogs</h2>
      </div>
      <div class="row">
        <!-- Related blog slider visible  -->
        <div class="col-md-12 padd-90 ">
          <div class="slider slider-reltblog">
          <?php 
            $orig_post = $post;
            global $post;
            $tags = wp_get_post_tags($post->ID);
            if ($tags) {
              $tag_ids = array();
              foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
              $args=array(
                'tag_in' => $tag_ids,
                'post_not_in' => array($post->ID),
                'posts_per_page'=>7, // Number of related posts that will be shown.
                'ignore_sticky_posts'=>1
              );
              $my_query = new wp_query( $args );
              if( $my_query->have_posts() ) {
            
                while( $my_query->have_posts() ) {
                  $my_query->the_post(); ?>
                  <div class="col-md-12 tagbased">
                    <div class="custom-blog-crd">
                      <a href="<?php the_permalink()?>">
                        <!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/post-1.png" width="100%" height="auto" frameborder="0" /> -->
                        <?php the_post_thumbnail(); ?>
                        <div style="height: 10px;"></div>
                        <?php 
                          if(strlen(get_the_title())>70){
                            echo '<h5>'.substr(get_the_title(), 0, 62).'...</h5>';
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
                        ?>                        
                      </a>
            
                  <!-- <li class="tagbased">
                    <div class="relatedthumb">
                      <a href="<?php /* the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail(); ?>
                      </a>
                    </div>
                    <div class="relatedcontent">
                      <h3>
                        <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
                        </a>
                      </h3>
                      <?php the_time('M j, Y') */ ?>
                    </div>
                  </li> -->
                  </div>
                  </div>
            <?php }          
              }
              wp_reset_query();
            }
            else{
              $my_query = new WP_Query(array(
                  'post_type' => 'post',
                  'category__in' => wp_get_post_categories(get_the_ID()),
                  'post__not_in' => array(get_the_ID()),
                  'posts_per_page' => 7,
                  'orderby' => 'date',
              ));
              if( $my_query->have_posts() ) {
            
                while( $my_query->have_posts() ) {
                  $my_query->the_post(); ?>
                  <div class="col-md-12 categorybased">
                    <div class="custom-blog-crd">
                      <a href="<?php the_permalink()?>">
                        <!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/post-1.png" width="100%" height="auto" frameborder="0" /> -->
                        <?php the_post_thumbnail(); ?>
                        <div style="height: 10px;"></div>
                        <?php 
                          if(strlen(get_the_title())>70){
                            echo '<h5>'.substr(get_the_title(), 0, 62).'...</h5>';
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
                        ?>                        
                      </a>
                      <!-- <li class="categorybased">
                        <div class="relatedthumb">
                          <a href="<?php /* the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail(); ?>
                          </a>
                        </div>
                        <div class="relatedcontent">
                          <h3>
                            <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
                            </a>
                          </h3>
                          <?php the_time('M j, Y') */ ?>
                        </div>
                      </li> -->
                    </div>
                  </div>
            <?php }
              }
            }
            $post = $orig_post;
            wp_reset_query();
        ?>
            <?php /*while( have_rows('popular_articles') ): the_row(); ?>
              <div class="col-md-12">
                <div class="custom-blog-crd">
                  <a href="<?php the_sub_field('popular_link'); ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/post-1.png" width="100%" height="auto" frameborder="0" />
                    <div style="height: 10px;">                      
                    </div>
                    <h5><?php the_sub_field('popular_text'); ?></h5>
                    <p>I'm baby try-hard farm-to-table tofu, taiyaki tacos food trcuk meditation</p>
                  </a>
                </div>
              </div>
            <?php endwhile; */?>
          </div>
        </div>
        <!--  -->			
      </div>
      <div class="horline "></div>
    </div>
  </div>
</div>
<!-- BlogPost Body End -->

<!-- Additional HTML stuff -->
<!--MOBILE POPUP CODE-->
</br></br></br>
<div class="container">
  <div style="height:1px;" class="col-md-12 d-block d-lg-none">
    <!-- other blog button disallow close on clicking outside-->
    <!-- <button type="button" id="MybtnPreventHTML" class="btn btn-info btn-lg"
      data-target="#MymodalPreventHTML" data-toggle="modal" data-backdrop="static" data-keyboard="false">
      Other Blogs<img class="img-menu-arrow img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbararrow.png" ></button> -->
    <!-- <div class="modal"  id="MymodalPreventHTML"> -->
    <!-- .modal -->
    <div class="modal fade" id="sidebar-modal" role="dialog">
      <div class="modal-dialog">
        <div class="row blogrightbar modal-content">
          <div>
            <button type="button" class="close" data-dismiss="modal"><img src="https://www.stagingtech.in/turtlemint/assets/img/cross.png"></button><!-- .close button -->
          </div>
          <!-- popupform-->
          <h4 class="detail-blog-rbar-title">Get Best Insurance </br>Quotes For</h4>
          <a class="btn-watch-more-detailblog" href="https://www.turtlemint.com/health-insurance/">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarhealth.png"><span class="category-types">Health Insurance</span>
          <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
          <a class="btn-watch-more-detailblog" href="https://www.turtlemint.com/life-insurance/">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarlife.png"><span class="category-types">Life Insurance</span>
          <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
          <!-- <a class="btn-watch-more-detailblog" href="https://www.turtlemint.com/category/general-insurance/">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarcar.png">&nbsp;&nbsp;General Insurance 
            			<img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a> -->
          <a class="btn-watch-more-detailblog" href="https://www.turtlemint.com/car-insurance/">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarcar.png"><span class="category-types">Car Insurance </span>
          <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
          <a class="btn-watch-more-detailblog" href="https://www.turtlemint.com/two-wheeler-insurance/">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarbike.png"><span class="category-types">Bike Insurance</span> 
          <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
          <!-- <a class="btn-watch-more-detailblog" href="https://www.turtlemint.com/category/company-updates/">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarbike.png">&nbsp;&nbsp;Company updates
            			<img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a> -->
        </div>
      </div>
    </div>
    <!-- other blog button to open model-->
    <div class="row">	
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sidebar-modal">Get Best Insurance Quotes For
      <img class="img-menu-arrow-blogbutton" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbararrow.png" ></button> 
    </div>
  </div>
</div>
<!-- End -->

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61246735bfef4e45"></script>
<!-- #primary -->
<?php
//get_sidebar();
get_footer('tmphase2');?>
<script>
	  $('.slider-reltblog').slick({
  dots: true,
  infinite: true,
  autoplay: true,
  speed: 1500,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
    </script>
	<!-- End of Slider for life section-->
	
		<!-- Desktop-->
		<style>
.slick-prev:before {
			/*content: url(<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/prev-icon.png);   */
			content:'';
			background-image: url('<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/prev-icon.png');
			background-size: 100% 100%;
			width: inherit;
			height: inherit;
			display: inline-block;
			opacity: 1;
			}
			.slick-next:before {
			/*content: url(<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/next-icon.png); */
			content:'';
			background-image: url('<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/next-icon.png');
			background-size: 100% 100%;
			width: inherit;
			height: inherit;
			display: inline-block;  
			opacity: 1;
			}
			.dropdown-header.img-text-btn p {
			display: inline-block;
			font-family: 'Montserrat', sans-serif;
			font-weight: 500;
			font-size: 13px;}
			.dropdown-header.img-text-btn .img-menu-arrow {
             padding: 5px;}
			 
			 .footer .row-2.padd-fb {border-bottom: 1px solid #ccc;}
			 .footer-copy-links ul li{ padding: 0 11px;}
		</style>
    <style>
  /*For Internal page FAQ (adding here, just in case)*/
  .plus-faq-icon {
    display:none
}

.collapsed-link.collapsed::after{content: "\f067";position: absolute;
    right: 5%;color: #000}

.collapsed-link::after{content: "\f068";position: absolute;
    right: 5%;color: #000;font: normal normal normal 15px/2 FontAwesome;}
  div.container.blogpad .panel-title-faq a {
    color: #26907c;
    border-color: transparent;
  }
</style>
