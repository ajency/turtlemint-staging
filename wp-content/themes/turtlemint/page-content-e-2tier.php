<?php
  /**
    Template Name: Content E tier pages
   **/
  
  get_header('tmphase2');

  $myDepth = get_current_page_depth();
  global $wp_query;
  if( empty($wp_query->post->post_parent) ) {
    $parent = $wp_query->post->ID;
  } else {
    $parent = $wp_query->post->post_parent;
  }
  $myID = get_the_ID(); //$wp_query->post->ID;
  $group_1_banner_breadcrumbs = get_field('group_1_banner_breadcrumbs');
  $banner_image = $group_1_banner_breadcrumbs['banner_image'];
  //$banner_image = get_field('banner_image');
  //$html_list_of_breadcrumbs = get_field('html_list_of_breadcrumbs');
  $related_section_1_title = get_field('related_section_1_title');
  $related_section_1_list = get_field('related_section_1_list');
  $related_section_2_title = get_field('related_section_2_title');
  $related_section_2_list = get_field('related_section_2_list');
  $sidebar_video_link = get_field('sidebar_video_link');
  $videoId = '';
  if (!empty($sidebar_video_link)) {
    $videoId = $sidebar_video_link;
  }
  else{
    $videoId = 'PxEPvi8BiOo';
  }
  $faq_enable = get_field('faq_enable');
  ?>
<!-- banner section for term life starts here -->
<?php if (!empty($banner_image)) : ?>
<style type="text/css">
  .banner-bg{
  background: url(<?php echo $banner_image['url']; ?>);
  }
</style>
<?php endif; ?>
<?php 
/*START - Banner CTA Link Logic & Other Stuff */
          // vars

          $banner_cta_text = $group_1_banner_breadcrumbs['banner_cta_text'];
          $banner_cta_link = $group_1_banner_breadcrumbs['banner_cta_link'];
          $html_list_of_breadcrumbs = $group_1_banner_breadcrumbs['html_list_of_breadcrumbs'];
          $showCTA = $group_1_banner_breadcrumbs['cta_enable'];

          /*20220214 Hardcoding FindPlans link for each category */
          //Get Parent Slug
          $parent_post_data = get_post($post->post_parent);
          $parent_slug = $parent_post_data->post_name;

          //Switch over Category
          if ( ! empty( $parent_slug ) && empty($banner_cta_link) ) {
            switch($parent_slug){
              case "car-insurance":
                $banner_cta_link = '/car-insurance/';
                break;
              case "two-wheeler-insurance":
                $banner_cta_link = '/two-wheeler-insurance/';
                break;
              case "health-insurance":
                $banner_cta_link = '/health-insurance/';
                break;
              case "life-insurance":
                $banner_cta_link = '/life-insurance/';
                break;
              
              default:
            }
          }
/*END */
?>
<!-- START REVAMP BODY -->
<div class="row-2 blog-party-banner">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="blog-title blogfsize">
          <h1><?php echo the_title();// $banner_title; ?></h1>
          <br>
          <?php           
        
            if($showCTA == 1): ?>
            <div class="tab-cta"><!--<?php echo (!empty($parent_slug))? $parent_slug : '/life'; ?>-->
              <?php 
              /*Logic moved to top */
                
                ?>
              <a class="find-plans-btn" role="button" href="<?php echo (!empty($banner_cta_link))? $banner_cta_link : '/life-insurance'; ?>" onclick="dataLayer.push({'event':'Banner-CTA','eventName':'Quote-cta-click_Term-<?php echo (!empty($parent_slug))? $parent_slug : 'life'; ?>-landing', gaCategory: '<?php echo (!empty($parent_slug))? $parent_slug : 'life'; ?>-landing', gaAction: 'Quote-cta-click_<?php echo (!empty($parent_slug))? $parent_slug : 'life'; ?>-landing'});"><?php echo (!empty($banner_cta_text))? $banner_cta_text : "Find Plans"; ?></a>
            </div>
            
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row-2">
    <div class="col-md-12">
      <ul class="breadcrumb">
      <li><a href="/"><img class="brdcrm-img" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/homebc.png"></a></li>
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
    <div class="col-lg-6 col-md-12 d-none  margintop">
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
      <div class="col-lg-9 col-md-12">
        <?php
          while ( have_posts() ) :
            the_post();
          
            get_template_part( 'template-parts/content', 'page-content-e' );
          endwhile; // End of the loop.
          ?>
        <?php if( have_rows('group_1_body') ): 
          while( have_rows('group_1_body') ): the_row();?>
        <!-- zoozoo
          <?php echo get_sub_field('faq_content_enable'); ?>
          <?php echo get_sub_field('enable_faq'); ?>
          -->
        <?php 
          $showFAQ = get_sub_field('faq_content_enable');
          
          if( have_rows('faq_content') && ($showFAQ == 1)): ?>
        <div class="section-style">
          <hr class="divider-faq">
          <h2 class="faq-style h2-text">FAQ’s</h2>
          <div class="panel-group panel-group-faq" id="panels1">
            <?php $faq_counter = 0; ?>
            <?php while( have_rows('faq_content') ): the_row(); 
              // vars
              $faq_title = get_sub_field('faq_content_title');
              $faq_details = get_sub_field('faq_content_details');
              $faq_counter++;   
              ?>
            <?php if ($faq_counter > 1) : ?>
            <hr class="divider-faq">
            <?php endif; ?>
            <div class="panel panel-default panel-group-faq">
              <div class="panel-heading">
                <h4 class="panel-title panel-title-faq h4-text">
                  <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels1" href="#collapse<?php echo $faq_counter; ?>">
                  <span class="plus-faq-icon">
                  <i class="far fa-check">plus</i>
                  <i class="far fa-check">minus</i>
                  </span><?php echo $faq_title; ?>
                  </a>
                </h4>
              </div>
              <div id="collapse<?php echo $faq_counter; ?>" class="panel-collapse collapse">
                <div class="panel-body">
                  <!-- <p class="paragraph-text paragraph-style"> --><?php echo $faq_details ?><!-- </p> -->
                </div>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php
        /* Restore original Post Data */
				wp_reset_postdata();?>
      </div>
      <div class="col-lg-3 ">
        <div class="row sticky-widget-party">
          <div class="col-md-12 d-none d-lg-block">
            <div class="row blogrightbar">
              <h4 class="detail-blog-rbar-title">Get Best Insurance Quotes For</h4>
              <a class="btn-watch-more-detailblog" href="/health-insurance/">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarhealth.png" ><span class="category-types">Health Insurance</span>
              <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
              <a class="btn-watch-more-detailblog" href="/life-insurance/">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarlife.png" ><span class="category-types">Life Insurance</span>
              <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>	
              <a class="btn-watch-more-detailblog" href="/car-insurance/">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarcar.png" ><span class="category-types">Car Insurance </span>
              <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
              <a class="btn-watch-more-detailblog" href="/two-wheeler-insurance/">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarbike.png" ><span class="category-types">Bike Insurance </span>
              <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- END REVAMP BODY -->
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
            <button type="button" class="close" data-dismiss="modal"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/cross.png"></button><!-- .close button -->
          </div>
          <!-- popupform-->
          <h4 class="detail-blog-rbar-title">Get Best Insurance </br>Quotes For</h4>
          <a class="btn-watch-more-detailblog" href="/health-insurance/">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarhealth.png"><span class="category-types">Health Insurance</span>
          <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
          <a class="btn-watch-more-detailblog" href="/life-insurance/">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarlife.png"><span class="category-types">Life Insurance</span>
          <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
          <!-- <a class="btn-watch-more-detailblog" href="/category/general-insurance/">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarcar.png">&nbsp;&nbsp;General Insurance 
            			<img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a> -->
          <a class="btn-watch-more-detailblog" href="/car-insurance/">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarcar.png"><span class="category-types">Car Insurance </span>
          <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
          <a class="btn-watch-more-detailblog" href="/two-wheeler-insurance/">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/rightbarbike.png"><span class="category-types">Bike Insurance</span> 
          <img class="img-menu-arrow-rightbar" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/menu-arrow-next.png" ></a>
          <!-- <a class="btn-watch-more-detailblog" href="/category/company-updates/">
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
<style>
  /*For Internal page FAQ*/
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
<script>
  const ctas = document.getElementsByClassName("quote-cta");
  for (let i = 0; i < ctas.length; i++) {
    ctas[i].addEventListener("click", function() {
      gtag("event", "CTA-InContent-Action", {
        event_category: "SEO",
        event_label: "CTA-InContent-Label",
      });
    });
  }
</script>
<?php
get_footer('tmphase2');
