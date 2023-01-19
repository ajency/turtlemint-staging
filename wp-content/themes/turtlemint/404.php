<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Turtlemint
 */

get_header();
?>

<div class="container">
  <div class="row mb50">
    <div class="col-xs-12 col-sm-12">
      <div class="section-style error-404 not-found">
        <h1 class="h1-text text-center">Totally Turned Turtle...</h1>
        <h4 class="greyTxt padd20 text-center">But could not find the page you were looking for.<br><br><span class="bold greenTxt">Click on the turtle </span> below to get him back on his feet, and return to home! <br>Thank you :)  </h4>
			<h4>
			<p class="turtlearea text-center"> <a href="/"> <img src="https://d5ng0zjhhq362.cloudfront.net/images/flipturtle.png" ng-hide="showturtle"> <img src="https://d5ng0zjhhq362.cloudfront.net/images/standturtle.png" ng-show="showturtle" class="hidden"> </a> </p>
		</h4>
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
