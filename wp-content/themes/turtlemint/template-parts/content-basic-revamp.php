<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Turtlemint
 */

?>

<div class="row-2 blog-party-banner basic-banner">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="blog-title blogfsize">
          <h1><?php the_title(); ?></h1>
          <br>
          <!-- <p>Know everything about car insurance before buying<p> -->
          <!-- <a class="find-plans-btn" href="https://www.turtlemint.com/car-insurance/">Find Plans</a> -->
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row-2">		
        <div class="col-md-12">
            <ul class="breadcrumb">					
            <!-- <li><a href="#"><img class="brdcrm-img" src="">Car Insurance</a></li>
            <li><a href="#">Page title</li> -->
            </ul>
        </div>
    </div>
</div>
<div class="container blogpad">
    <div class="container">
        <div class="row">					
            <div class="col-lg-12 col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>




