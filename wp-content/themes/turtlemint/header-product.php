<?php
	/**
	 * The header for our theme
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package Turtlemint
	 */
	/*touch('wp-content/themes/turtlemint/page-content-tax4.php');*/
	/*touch('wp-content/themes/turtlemint/single-cat-company-updates.php');*/
	function getPageTerm(){
		if ( is_page( array( 'life-insurance' ) )){echo "life"; } elseif(is_page( array( 'health-insurance' ))){echo "health";} elseif(is_page( array( 'car-insurance' ))){echo "car";} else { echo "main"; }
	}
	?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<!-- SG test -->
		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/tm-favicon.png" type="image/x-icon">
		<!-- inject:head -->
		<!--Required tags-->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/slick/slick.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/slick/slick-theme.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/css/style-id.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/css/responsive-id-responsive.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/css/footer.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
		<!-- Desktop-->
		<style>
			/*Style.css*/
			.navbar-light .navbar-nav .nav-link {
			font-family: Montserrat-Regular;
			font-size: 0.85rem;
			}
			.banner-crd {
			padding-top: 2%;
			}
			.main-banner-txt h5 a {
			font-family: 'Montserrat-Medium';
			color: #007D65;
			}
			.main-banner-txt h4 {
			font-size: 1.6rem;
			}
			.custom-nav-dropdown a#navbarDropdownMenuLink{
			color: black;
			}
			.secondary-banner{border-radius: 0 100px;}
			/*End of Style.css*/
			/*Common*/
			.section-heading h3{font-family: 'Montserrat', sans-serif;font-weight: 700;}
			.section-heading h2 {
			font-size: 1.8rem;/*35px;*/
			text-align: center;
			font-family: Montserrat-Bold;
			color: #000;
			margin-bottom: 30px;
			} 
			.video-row h2, .our-partners h2, .bottom-seo-text h2, .custom-become-part{
			font-size: 1.8rem;
			color: #000;
			margin-bottom: 1.8rem;
			font-weight: 600;
			font-family: 'Montserrat-Medium', sans-serif;
			}
			/*Navigation*/
			.dropdown:hover>.dropdown-menu {/*OnHover Show Dropdown*/
			display: block;
			}
			/*Banner*/
			.main-banner-txt {
			padding-bottom: 7%;
			}
			.main-banner-txt h1 {
			font-family: 'Montserrat-Medium', sans-serif;
			font-size: 2rem;
			color: #000;
			font-weight: 600;
			}
			.bike-banner{
			background: url(<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/<?php getPageTerm(); ?>-banner.png), #F8F4F3;
			background-repeat: no-repeat;
			background-position-x: right;
			background-size: contain;
			height: 500px;
			align-items: center;
			display: flex;
			}
			.life .adv-content{ width: unset; text-align: center;}
			/*20211115*/
			/*Nav*/
			#navbarCollapse > ul > li > a:hover,
			#navbarCollapse > ul > li.nav-item.dropdown.custom-nav-dropdown.active>a,
			#navbarDropdownMenuLink:hover,
			#navbarCollapse > ul > li.nav-item.custom-nav-btn > a:hover,
			#navbarCollapse > ul > li.nav-item.custom-nav-btn2 > a:hover{color:#009F69;}
			a.dropdown-item.see-more {    text-decoration: underline;}
			/*MegaMenu*/
			.dropdown-toggle::after{font-size: 0.6em;}
			.navbar-expand-md .navbar-nav .dropdown-menu-right {
			/*right: -135px;*/
			left: -63vh;
			width: 80vw;
			padding-bottom: 15px;
			}
			.d-md-flex.align-items-start.justify-content-start {
			padding-left: 20px;
			padding-top: 15px;
			}
			.dropdown-header {
			font-family: 'Montserrat', sans-serif;
			font-size: 15px;
			font-weight: 500;
			color: black;
			}
			a.dropdown-item {
			font-family: 'Montserrat', sans-serif;
			font-size: 13px;
			line-height: normal;
			}
			.dropdown-header.img-text-btn {
			border: 1px solid lightgray;
			padding: 20px 20px 10px 20px;
			margin: 10px;
			}
			.dropdown-header.img-text-btn .img-menu-1{
			width: 24%;
			padding: 5px;
			margin-bottom: 18px;
			}
			.dropdown-header.img-text-btn p{
			display: inline-block;
			font-family: 'Montserrat', sans-serif;
			font-weight: 500;
			font-size: 13px;
			padding: 0px 10px;
			}
			.dropdown-header.img-text-btn .img-menu-arrow{
			width: 16%;
			padding: 5px;
			}
			.dropdown-header.img-text-btn p{display: inline-block;}
			/*Banner*/
			.main-banner-txt h2 {
			font-family: 'Montserrat', sans-serif;
			font-size: 35px;
			color: #000;
			font-weight: 700;
			}
			.banner-img {
			background: #ffffff;
			padding: 10px;            
			}
			.banner-img:hover{border: 2px solid #00D679;}
			.banner-img img {    
			width: 100%;
			padding: 0px;
			}
			/*Search In Banner*/
			.banner-crd {padding-bottom: 0px;}
			.continue-nonumber-wrapper{padding-bottom: 30px;
			padding-left: 16px;
			padding-top: 7px;}
			.search-plans{padding-right: 0px;}
			.search-input {
			width: 100%;
			padding: 2.3% 0 3% 4%;
			font-family: 'Montserrat-Regular';
			font-size: .95em;
			border: none;
			-webkit-box-shadow: -1px 2px 4px 1px #9e9e9e54;
			box-shadow: -1px 2px 4px 1px #9e9e9e54;
			}
			.search-btn-wrapper{padding-left: 0px;}
			.search-btn {
			background: #009F69;
			border: none;
			box-shadow: -1px 2px 4px 1px #9e9e9e54;
			color: white;
			padding: 3.65% 7%;
			font-family: 'Montserrat-Medium';
			font-size: .85em;
			}
			.search-icon{background: url(<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/search.png) no-repeat;
			float: left;
			width: 50px;
			height: 30px;
			}
			img.search-img {
			padding-right: 5px;
			width: 20px;
			}				
			/*quiz*/
			.quiz-row{background-color: white;}
			.custom-advisor{padding: 0; margin-top:-80px;
			background-color: #00D679;
			box-shadow: 2px 2px 10px #ccc;}
			.adv-content {
			width: 80%;
			padding-left: 22%;
			padding-top: 30px;
			}
			.adv-content h5{padding-bottom: 10px; margin-left: 18%;}
			div.adv-content > a{
			border-color: darkgrey;
			background: white;
			border-radius: 4px;
			border: 1px solid;
			padding: 5px 60px;
			margin-left: 32%;
			color: black;
			text-decoration: none;
			font-size: .9rem;
			font-family: 'Montserrat-Medium';
			}
			/*Video Row*/
			.video-row{
			background-color: white; 
			padding-top: 5%;
			padding-bottom: 2%;
			}
			.custom-many-optns {
			text-align: center;
			}
			<?php if ( is_page( array( 'car-insurance') )) {?>
				.custom-many-optns h3{font-family: 'Montserrat-Medium'; font-size: 20px;}
			.custom-video-crd{background-color: white; box-shadow: rgb(149 157 165 / 20%) 0px 8px 24px;}
				 <?php } else { ?> 
				.custom-many-optns h3{font-family: 'Montserrat', sans-serif;}
				.custom-video-crd{background-color: white;} 
			<?php } ?>
			
			.custom-video-crd:hover{border: 2px solid #00D679; padding: 8px;}
			.custom-video-crd h5 {
			font-family: 'Montserrat', sans-serif;
			font-size: 16px;
			padding-top: 8px;
			}
			.custom-video-crd p {
			font-size: 0.87rem;
			}
			/*Know More*/
			.knowmore-row{background-color: white; padding-bottom: 7%;}
			.knowmore-title{text-align: center;}
			.knowmore-title h4{font-size: 1.3rem; font-family: 'Montserrat-Medium', sans-serif; margin-bottom: 1.5%;}
			.knowmore-btn-row .btn-watch-more{display: inline-block; font-size: 1rem; background: #009F69;}
			.knowmore-btn-row  a.btn-watch-more:nth-child(1){margin-right: 1%;}
			.knowmore-btn-row  a.btn-watch-more:nth-child(2){margin-left: 1%;}
			/**/
			.our-plans h5 {
			font-size: 1rem;
			font-family: 'Montserrat-Medium';
			margin-top: 4%;
			}
			<?php if ( is_page( array( 'car-insurance') )) {?>
				.bike-offer .item-box {
			text-align: center;
			background: white;
			padding: 40px 19px;
			margin: 10px;
			}
			.bike-offer .item-box:hover{border: 2px solid #00D679; padding:38px 17px;}
				 <?php } else { ?> 
					.bike-offer .col-md-4 {
			text-align: center;
			background: white;
			padding: 40px 19px;
			margin: 10px;
			max-width: 30%;
			}
			.bike-offer .col-md-4:hover{border: 2px solid #00D679; padding:38px 17px;}
			<?php } ?>
			
			.bike-offer p {
			font-family: 'Montserrat-Regular', sans-serif;
			font-size: 0.9rem;
			}
			.bike-offer img{max-height: 83px;}
			/*Blog*/
			.blog-cta-section {
			padding: 50px 0px;
			}
			.blog-cta-section p {
			font-size: 17px;
			color: #000;
			font-weight: 400;
			font-family: 'Montserrat', sans-serif;
			margin-bottom: 0;
			}
			/**/
			.custom-become-content h3{font-size: 1.6rem;}
			.custom-become-content p{font-family: 'Montserrat-Regular', sans-serif; font-size: 1rem;}
			.custom-become-content img {    height: 40px;    width: auto;}
			/**/
			.secondary-banner.padd-tb-50{margin-top: 80px;}
			/*Testimonial*/
			.customer-about .c-caption-span-2 img {
			width: 30px;
			padding-top: 14px;
			}
			.customer-about .c-caption p {
			padding-top: 12px;
			font-size: 20px;
			line-height: 32px;
			font-family: 'Montserrat';
			font-weight: 400;
			}
			button.slick-next.slick-arrow,button.slick-prev.slick-arrow {
			width: 40px;
			height: 40px;
			background: unset;
			z-index: 9;
			}
			.slick-prev:before {
			/*content: url(<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/prev-icon.png);   */
			content:'';
			background-image: url('<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/prev-icon.png');
			background-size: 100% 100%;
			width: inherit;
			height: inherit;
			display: inline-block;
			opacity: 1;
			}
			.slick-next:before {
			/*content: url(<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/next-icon.png); */
			content:'';
			background-image: url('<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/next-icon.png');
			background-size: 100% 100%;
			width: inherit;
			height: inherit;
			display: inline-block;  
			opacity: 1;
			}
			/*SEO section*/
			.bottom-seo-text{
			padding: 100px 0px;
			}
			h2.SEO-content-heading{padding-top: 8%;}
			.bottom-seo-text .custom-many-optns {
			text-align: left;
			padding-top: 50px;
			}
			<?php if ( is_page( array( 'car-insurance') )) {?>
				.custom-many-optns h3 {
			font-family: 'Montserrat-Medium'; font-size: 20px;
			/* font-weight: 700; */
			}
				 <?php } else { ?> 
					.custom-many-optns h3 {
			font-family: 'Montserrat', sans-serif;
			font-weight: 700;
			}
			<?php } ?>
			
			.custom-many-optns h4 {
			font-family: 'Montserrat', sans-serif;
			color: #000;
			font-weight: 300;
			font-size: 20px;
			}
			/*SEO Content*/
			/* h2.SEO-content-heading {
			font-family: 'Montserrat-Medium';
			font-size: 1.5rem;
			} */
			h3.SEO-content-title {
			font-size: 1.2rem;
			font-family: 'Montserrat-Medium';
			text-align: left;
			padding: 2% 0 1% 0;
			margin: 0;
			}
			table{margin: 0 auto;}
			th>p,td>p {
			margin-bottom: unset;
			}
			/*FAQ*/
			.faq-section {padding: 0 0 8% 0;}
			.faq-box {
			margin-top: 0px;
			/*padding-top: 0px;*/
			}
			.faq-top-title {
			margin-top: 9%;
			}
			/* .faq-top-title:before {
			content: url(<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/icon-question.png);
			float: left;
			padding: 3px 9px 0 0;
			margin-left: -30px;
			} */
			.faq-top-title h4 {
			/* font-weight: 500; */
			text-align: center;
			background-color: #efecec;
			padding: 8px;
			font-size: 1.1rem;
			}
			.faq-top-title span, .faq-top-title h4,.faq-box h4.panel-title a{
			font-family: 'Montserrat-Medium';
			}
			.faq-top-title:nth-child(1){margin-top: 10px;}
			.faq-box h4.panel-title a{ font-size: 1.1rem; font-weight: unset;}
			.faq-box .panel-body,.faq-box .panel-body p, .SEO-content-text, .bottom-seo-text li, .bottom-seo-text td, .bottom-seo-text th{
			font-family: 'Montserrat-Regular', sans-serif;
			font-size: 0.9rem;
			}
			.faq-box .panel-body{font-size: 1rem;}
			.bottom-seo-text ul, .bottom-seo-text li, .faq-section ul, .faq-section li{list-style-type: disc;}
			.bottom-seo-text li,.faq-section li {
			margin-left: 15px;
			}
			/*Footer*/
			.footer .row-2.padd-fb {border-bottom: 1px solid #ccc;}
			.footer-col h4 {
			font-family: 'Montserrat-Regular';
			font-weight: bold;
			}
			.footer-col p,.footer-col ul li a{
			font-family: 'Montserrat-Regular', sans-serif; 
			}
			.footer-copy-links ul li{
			padding: 0 11px;
			}
			.footer-copy-links ul li a {
			font-size: 13px;
			}
			.footer .social-icons {padding: 0px 4px;}
			.footer .social-icons:nth-child(5){padding: 0;}
			@media (min-width: 1024px){
			.slick-prev {
			top: 207px;
			}
			.slick-next {
			right: 32px;
			top: 207px;
			}
			}
			/*Less than Desktop*/
			@media (max-width: 768px) {
			.adv-content {
			width: 100%;
			padding-left: 20px;
			padding-bottom: 20px;
			}
			.adv-content h5{
			margin-left: 0;
			}
			div.adv-content > a{
			margin-left: 0%;
			}
			.knowmore-title h4{
			padding: 10px 0;
			}
			<?php if ( is_page( array( 'car-insurance') )) {?>
				
				 <?php } else { ?> 
					.bike-offer{
						margin-left: 1px;
					}
			<?php } ?>
			
			.bike-offer .col-md-4{
			max-width: 100%;
			}
			.customer-row{
			width: Auto;
			}
			.slick-next{
			right: 0;
			}
			.slick-prev{
			left: 265px;
			}
			.customer-about{
			padding-bottom: 50px;
			}
			}
			.banner-cta {
			background-color: white;
			padding: 0;
			margin-top: 4%;
			border-radius: 5px;
			-webkit-box-shadow: -1px 2px 4px 1px #9e9e9e54;
			box-shadow: -1px 2px 4px 1px #9e9e9e54;
			}
			.banner-crd{padding-top: 4%;}
			.banner-cta{
			background-color: white; padding: 0; margin-top: 4%;border-radius: 5px;
			-webkit-box-shadow: -1px 2px 4px 1px #9e9e9e54;
			box-shadow: -1px 2px 4px 1px #9e9e9e54;
			}
			.banner-cta-img{float: left;    padding:3% 4%;}
			.banner-cta-img img {
			max-height: 45px;
			/* padding: 7px; */
			margin: 0 auto;
			/* margin: 5px; */
			text-align: center;
			vertical-align: middle;
			}
			.banner-cta-text {
			padding: 4% 5%;
			margin-left: 60px;
			border-left: .01em solid #707070
			}
			.banner-cta-text h5{padding-left: 4%;}
			.banner-cta-text h5 a{font-family: 'Montserrat-Medium',sans-serif; font-size: .9rem; color: black; text-decoration: none;}
			.banner-cta-text h5>img{
			height: 14px;
			margin-left: 28px;
			}
			.new-below-banner-cta{    
			width: 100%;
			float: left;
			box-shadow: 2px 2px 10px #ccc;
			border-radius: 0px 48px 5px 48px;
			padding: 22px 0;
			margin-top: -38px;background-color: #00D679;
			padding: 0;
			margin-top: -67px;
			}
			.new-below-banner-cta-img{
			float: left;
			}
			.new-below-banner-cta-img>img{
			margin: 77%;
			height: 50px;
			}
			.new-below-banner-cta-text{
			width: 100%;
			text-align: center;
			padding-top: 30px;
			padding-bottom: 30px;
			}
			.new-below-banner-cta-text h5{
			padding-bottom: 10px;
			font-family: 'Montserrat-Medium';
			padding-top: 10px;
			}
			.new-below-banner-cta-text a{
			/*border-color: darkgrey;*/
			background: white;
			border-radius: 4px;
			/*border: 1px solid;*/
			border:none;
			padding: 10px 35px;
			color: black;
			text-decoration: none;
			font-size: .9rem;
			font-family: 'Montserrat-Medium';
			}
			/*Partners Logo*/
			.our-partners .slick-slide img {
			padding: 15%;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/css/myresponsive.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/styles/normalize-min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/styles/jquery-mobile-mega-menu-min.css">
		<script src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/scripts/vendor/modernizr-min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/css/mobilemenu.css"/>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f)
			;
			})(window,document,'script','dataLayer','GTM-PCZGBP');
		</script>
		<!-- End Google Tag Manager -->
		<!-- endinject:head -->
		<?php wp_head(); ?>	
	</head>
	<body <?php if ( is_page( array( 'life-insurance') )) { body_class( 'life' ); }elseif(is_page( array( 'health-insurance') )){ body_class( array( 'life','health') );} else { body_class(); } ?>>
		<div class="mobile-nav"></div>
		<!--mobile menu-->
		<div class="canvas-container mobile-nav">
			<div class="content-container">
				<div class="inner-container">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/logo.png" alt="" style="width: 160px;margin: 0 auto;padding: 15px 14px" class="">
					<a href="#" class="button mmm main-menu-toggle ">
						<div class="hamburger"></div>
					</a>
					<!--<a href="#" class="button mmm quick-links-toggle">Quick Links</a>-->
					<div class="submenu-a"><a class="" href="https://www.mintpro.in/">Become a PoSP with us</a><a class="" href="https://tm.stagingtech.in/raise-claim/">Raise a Claim</a></div>
					<div style="clear:both"></div>
				</div>
			</div>
			<!-- End content-container -->
			<div style="z-index: 99; min-height: 1000px !important"  class="main-menu mobile-mega-menu">
				<div class="content-container">
					<div class="inner-container">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/logo.png" alt="" style="width: 160px;margin: 0 auto;padding: 15px 14px" class="">
						<a href="#" class="button mmm main-menu-toggle ">
							<div class="hamburger"></div>
						</a>
						<!--<a href="#" class="button mmm quick-links-toggle">Quick Links</a>-->
						<div class="submenu-b"><a class="" href="https://www.mintpro.in/">Become a PoSP with us</a><a class="" href="https://tm.stagingtech.in/raise-claim/">Raise a Claim</a></div>
						<div style="clear:both"></div>
					</div>
				</div>
				<nav>
					<ul>
						<!--level one-->
						<li>
							<a class="next-button2" href="#">Car</a>
							<ul>
								<li><a class="subre" href="https://tm.stagingtech.in/car-insurance"><img class="mn-images" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/car.png">Know More Car Insurance</a></li>
								<li><a class="subre" href="https://app.turtlemint.com/car-insurance/car-profile/car-registration-info"><img class="mn-images" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/compare.png">Compare Car Insurance</a></li>
								<li><a class="subre" href="https://tm.stagingtech.in/blog/"><img class="mn-images" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/blog.png">Read Our Blogs</a></li>
								<li>
									<div class="acc__card" herf="">
										<div class="acc__title">Know About Car Insurance</div>
										<div class="acc__panel">
											<a class="" href="https://tm.stagingtech.in/car-insurance/third-party-car-insurance/">Third Party Car Insurance</a>
											<a class="" href="https://tm.stagingtech.in/car-insurance/comprehensive-car-insurance/">Comprehensive Car Insurance</a>
											<a class="" href="https://tm.stagingtech.in/car-insurance/articles/standalone-own-damage-insurance/">Standalone Own Damage  Car Insurance</a>
											<a class="" href="https://tm.stagingtech.in/car-insurance/zero-depreciation-car-insurance/">Zero Depreciation Car Insurance</a>
											<a class="" href="https://tm.stagingtech.in/car-insurance/articles/taxi-insurance-explained-in-details/">Taxi Car Insurance</a>
											<a class="" href="https://tm.stagingtech.in/car-insurance/articles/all-you-need-to-know-about-used-car-insurance/">Used Car Insurance</a>
										</div>
									</div>
									<div class="acc__card" herf="">
										<div class="acc__title">Insurance Knowledge</div>
										<div class="acc__panel">
											<a class="" href="https://tm.stagingtech.in/car-insurance/car-insurance-companies/">Car Insurance Companies</a>
											<a class="" href="https://tm.stagingtech.in/car-insurance/car-insurance-calculator/">Car Insurance Premium Calculator</a>
											<a class="" href="https://tm.stagingtech.in/car-insurance/car-insurance-claims/">Car Insurance Claim Process</a>
											<a class="" href="https://tm.stagingtech.in/car-insurance">Buy, Compare or Renew Car Insurance </a>
											<!-- <a class="" href="#">See More</a> -->
										</div>
									</div>
								</li>
							</ul>
						</li>
						<!--level one end-->
						<li>
							<a href="#">Bike</a>
							<ul>
								<li><a class="subre" href="https://tm.stagingtech.in/two-wheeler-insurance"><img class="mn-images" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/bike.png">About Bike Insurance</a></li>
								<li><a class="subre" href="https://app.turtlemint.com/two-wheeler-insurance/two-wheeler-profile/tw-registration-info"><img class="mn-images" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/compare.png">Compare Bike Insurance</a></li>
								<li><a class="subre" href="https://tm.stagingtech.in/blog/"><img class="mn-images" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/blog.png">Read Our Blogs</a></li>
								<li>
									<div class="acc__card" herf="">
										<div class="acc__title">Know about Bike Insurance</div>
										<div class="acc__panel">
											<a class="" href="https://tm.stagingtech.in/two-wheeler-insurance/third-party-bike-insurance">Third Party Bike Insurance</a>
											<a class="" href="https://tm.stagingtech.in/two-wheeler-insurance/comprehensive-bike-insurance/">Comprehensive Bike Insurance</a>
											<a class="" href="https://tm.stagingtech.in/two-wheeler-insurance/articles/zero-depreciation-insurance-cover-bike-two-wheeler-india/">Zero Depreciation Bike Insurance</a>
											<a class="" href="https://tm.stagingtech.in/two-wheeler-insurance/articles/know-two-wheeler-insurance-plans-add-ons/">Add On Cover</a>
										</div>
									</div>
									<div class="acc__card" herf="">
										<div class="acc__title">Insurance Knowledge</div>
										<div class="acc__panel">
											<a class="" href="https://tm.stagingtech.in/two-wheeler-insurance/two-wheeler-insurance-companies/">Bike Insurance Companies</a>
											<a class="" href="https://tm.stagingtech.in/two-wheeler-insurance/bike-insurance-claims/">Bike Insurance Claim Process</a>
											<a class="" href="https://tm.stagingtech.in/two-wheeler-insurance/bike-insurance-calculator/">Bike Insurance Premium Calculator</a>
											<a class="" href="https://tm.stagingtech.in/two-wheeler-insurance/bike-insurance-renewal/">Buy, Compare &amp; Renew Bike Insurance </a>
											<!-- <a class="" href="#">See More</a> -->
										</div>
									</div>
								</li>
							</ul>
						</li>
						<!--level one end-->
						<li>
							<a href="#">Health</a>
							<ul>
								<li><a class="subre" href="https://tm.stagingtech.in/health-insurance"><img class="mn-images" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/health.png">More About Health Insurance</a></li>
								<li><a class="subre" href="https://app.turtlemint.com/health-insurance/health-profile/profile-gender"><img class="mn-images" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/compare.png">Compare Health Insurance</a></li>
								<li><a class="subre" href="https://tm.stagingtech.in/blog/"><img class="mn-images" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/blog.png">Read Our Blogs</a></li>
								<li>
									<div class="acc__card" herf="">
										<div class="acc__title">Know about Health Insurance</div>
										<div class="acc__panel">
											<a class="" href="https://tm.stagingtech.in/health-insurance">Health Insurance Plans</a>
											<a class="" href="https://tm.stagingtech.in/health-insurance/family-health-insurance-plans/">Family Health Insurance Plans</a>
											<a class="" href="https://tm.stagingtech.in/health-insurance/senior-citizen-health-insurance/">Senior Citizen Health Insurance</a>
											<a class="" href="https://tm.stagingtech.in/health-insurance/critical-illness-insurance/">Critical Illness Insurance</a>
											<a class="" href="https://tm.stagingtech.in/health-insurance/mediclaim-insurance/">Mediclaim Policy</a>
											<a class="" href="https://tm.stagingtech.in/health-insurance/articles/is-your-health-insurance-enough-to-cover-the-omicron-covid-19-variant/">Coronavirus Health Insurance</a>
											<a class="" href="https://tm.stagingtech.in/health-insurance/articles/did-you-know-these-tax-facts-about-your-insurance/">Health Insurance Tax Benefit</a>
										</div>
									</div>
									<div class="acc__card" herf="">
										<div class="acc__title">Insurance Knowledge</div>
										<div class="acc__panel">
											<a class="" href="https://tm.stagingtech.in/health-insurance/health-insurance-companies/">Health Insurance Companies</a>
											<a class="" href="https://tm.stagingtech.in/health-insurance/health-insurance-claims/">Health Insurance Claim Process</a>
											<a class="" href="https://tm.stagingtech.in/health-insurance/compare-health-insurance/">Buy, Compare or Renew Health Insurance </a>
											<!-- <a class="dropdown-item see-more" href="#">See More</a> -->
										</div>
									</div>
								</li>
							</ul>
						</li>
						<!--level one end-->
						<li>
							<a href="#">Life</a>
							<ul>
								<li><a class="subre" href="https://tm.stagingtech.in/life-insurance"><img class="mn-images" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/life.png">More About Life Insurance</a></li>
								<li><a class="subre" href="https://app.turtlemint.com/life-insurance/profile/term/about-insured"><img class="mn-images" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/compare.png">Compare Term Life Insurance</a></li>
								<li><a class="subre" href="https://tm.stagingtech.in/blog/"><img class="mn-images" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/blog.png">Read Our Blogs</a></li>
								<li>
									<div class="acc__card" herf="">
										<div class="acc__title">Know about Life Insurance</div>
										<div class="acc__panel">
											<a class="" href="https://tm.stagingtech.in/life-insurance/term-insurance-plans/">Term Insurance Policy</a>
											<a class="" href="https://tm.stagingtech.in/life-insurance/money-back-policy/">Money Back Policy</a>
											<a class="" href="https://tm.stagingtech.in/life-insurance/money-back-policy/">Endowment Policy</a>
											<a class="" href="https://tm.stagingtech.in/life-insurance/articles/should-i-buy-term-insurance-riders/">Term Insurance Policy</a>
										</div>
									</div>
									<div class="acc__card" herf="">
										<div class="acc__title">Insurance Knowledge</div>
										<div class="acc__panel">
											<a class="dropdown-item" href="https://tm.stagingtech.in/life-insurance-companies/">Life Insurance Companies</a>
											<a class="dropdown-item" href="https://tm.stagingtech.in/life-insurance/articles/life-insurance-premium-calculator/">Life Insurance Premium Calculator</a>
											<a class="dropdown-item" href="https://tm.stagingtech.in/life-insurance">Compare &amp; Buy Life Insurance plan</a>
											<!-- <a class="dropdown-item see-more" href="#">See More</a> -->
										</div>
									</div>
								</li>
							</ul>
						</li>
						<!--level one end-->
						<!--<li>
							<a class="acc__card" herf=""><div class="acc__title">Accordion Title #2</div>
							<div class="acc__panel">
							3333333333333
							You can't see me while "active" is not present.
							 </div></a>
							</li>
							
							<li>
							<a class="acc__card" herf=""><div class="acc__title">Accordion Title #2</div>
							<div class="acc__panel">
							3333333333333
							You can't see me while "active" is not present.
							 </div></a>
							</li>
							
							<li>
							<a class="acc__card" herf=""><div class="acc__title">Accordion Title #2</div>
							<div class="acc__panel">
							3333333333333
							You can't see me while "active" is not present.
							 </div></a>
							</li>-->
					</ul>
				</nav>
			</div>
			<!-- End mobile-mega-menu --><!-- Quick Links -->
		</div>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/scripts/vendor/jquery-min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/scripts/jquery-mobile-mega-menu-min.js"></script>
		<script>$( '.main-menu' ).mobileMegaMenu({
			changeToggleText: true,
			enableWidgetRegion: true,
			prependCloseButton: true,
			stayOnActive: true,
			toogleTextOnClose: '<div class="cross"></div>',
			menuToggle: 'main-menu-toggle'
			});
			
			$( '.quick-links' ).mobileMegaMenu({
			changeToggleText: true,
			enableWidgetRegion: true,
			prependCloseButton: true,
			stayOnActive: true,
			//toogleTextOnClose: 'Close Quick Links',
			menuToggle: 'quick-links-toggle'
			});
			
			
		</script>
		<script>
			/* jQuery
			================================================== */
			$(function() {
			 $('.acc__title').click(function(j) {
			
			var dropDown = $(this).closest('.acc__card').find('.acc__panel');
			$(this).closest('.acc').find('.acc__panel').not(dropDown).slideUp();
			
			if ($(this).hasClass('active')) {
			  $(this).removeClass('active');
			} else {
			  $(this).closest('.acc').find('.acc__title.active').removeClass('active');
			  $(this).addClass('active');
			}
			
			dropDown.stop(false, true).slideToggle();
			j.preventDefault();
			 });
			});
		</script>
		<!--Mobile nav End-->
		<nav class="navbar navbar-expand-md navbar-light turtlemint-header ab">
			<div class="container">
			<a class="navbar-brand" href="/">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/logo.png" alt class="logo">
			</a>
			<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse"
				data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
				aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse order-3 order-md-2" id="navbarCollapse">
				<ul class="navbar-nav ml-auto custom-nav-links">
					<li class="nav-item dropdown custom-nav-dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="CarDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Car
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-content-car" aria-labelledby="CarDropdownMenu">
							<!-- <a class="dropdown-item" href="#">What we do</a>
								<a class="dropdown-item" href="#">How we fit your needs</a>
								<div class="dropdown-divider"></div> -->
							<div class="d-md-flex align-items-start justify-content-start">
								<div>
									<a href="https://tm.stagingtech.in/car-insurance">
										<div class="dropdown-header img-text-btn">
											<img class="img-menu-1" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-car-1.png">
											<p>Know About<br> Car Insurance</p>
											<img class="img-menu-arrow" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-arrow-next.png">
										</div>
									</a>
									<a href="https://app.turtlemint.com/car-insurance/car-profile/car-registration-info">
										<div class="dropdown-header img-text-btn">
											<img class="img-menu-1" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-car-2.png">
											<p>Compare Car<br> Insurance</p>
											<img class="img-menu-arrow" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-arrow-next.png">
										</div>
									</a>
									<!-- <a class="dropdown-item" href="#">Bespoke software</a>
										<a class="dropdown-item" href="#">Mobile apps</a>
										<a class="dropdown-item" href="#">Websites</a> -->
								</div>
								<div class="dropdown-list-menu">
									<div class="dropdown-header">Know about Car Insurance</div>
									<div class="dropdown-list-links">
										<a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance/third-party-car-insurance/">Third Party Car Insurance</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance/comprehensive-car-insurance/">Comprehensive Car Insurance</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance/articles/standalone-own-damage-insurance/">Standalone Own Damage  Car Insurance</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance/zero-depreciation-car-insurance/">Zero Depreciation Car Insurance</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance/articles/taxi-insurance-explained-in-details/">Taxi Car Insurance</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance/articles/all-you-need-to-know-about-used-car-insurance/">Used Car Insurance</a>
									</div>
								</div>
								<div class="dropdown-list-menu">
									<div class="dropdown-header">Insurance Knowledge</div>
									<div class="dropdown-list-links">
										<a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance/car-insurance-companies/">Car Insurance Companies</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance/car-insurance-calculator/">Car Insurance Premium Calculator</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance/car-insurance-claims/">Car Insurance Claim Process</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance">Buy, Compare or Renew Car Insurance </a>
										<!-- <a class="dropdown-item see-more" href="#">See More</a> -->
									</div>
								</div>
								<div>
									<a href="https://tm.stagingtech.in/blog/">
										<div class="dropdown-header img-text-btn">
											<img class="img-menu-1" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-blog.png">
											<p>Read our Blogs</p>
											<img class="img-menu-arrow" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-arrow-next.png">
										</div>
									</a>
								</div>
							</div>
						</div>
						<!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							Car
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							</div> -->
					</li>
					<li class="nav-item dropdown custom-nav-dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="BikeDropdownMenu" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Bike
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-content-bike" aria-labelledby="BikeDropdownMenu">
							<div class="d-md-flex align-items-start justify-content-start">
								<div>
									<a href="https://tm.stagingtech.in/two-wheeler-insurance">
										<div class="dropdown-header img-text-btn">
											<img class="img-menu-1" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-bike-1.png">
											<p>Know About<br> Bike Insurance</p>
											<img class="img-menu-arrow" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-arrow-next.png">
										</div>
									</a>
									<a href="https://app.turtlemint.com/two-wheeler-insurance/two-wheeler-profile/tw-registration-info">
										<div class="dropdown-header img-text-btn">
											<img class="img-menu-1" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-car-2.png">
											<p>Compare Bike<br> Insurance</p>
											<img class="img-menu-arrow" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-arrow-next.png">
										</div>
									</a>
									<!-- <a class="dropdown-item" href="#">Bespoke software</a>
										<a class="dropdown-item" href="#">Mobile apps</a>
										<a class="dropdown-item" href="#">Websites</a> -->
								</div>
								<div class="dropdown-list-menu">
									<div class="dropdown-header">Know about Bike Insurance</div>
									<div class="dropdown-list-links">                                       
										<a class="dropdown-item" href="https://tm.stagingtech.in/two-wheeler-insurance/third-party-bike-insurance">Third Party Bike Insurance</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/two-wheeler-insurance/comprehensive-bike-insurance/">Comprehensive Bike Insurance</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/two-wheeler-insurance/articles/zero-depreciation-insurance-cover-bike-two-wheeler-india/">Zero Depreciation Bike Insurance</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/two-wheeler-insurance/articles/know-two-wheeler-insurance-plans-add-ons/">Add On Cover</a>
									</div>
								</div>
								<div class="dropdown-list-menu">
									<div class="dropdown-header">Insurance Knowledge</div>
									<div class="dropdown-list-links">
										<a class="dropdown-item" href="https://tm.stagingtech.in/two-wheeler-insurance/two-wheeler-insurance-companies/">Bike Insurance Companies</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/two-wheeler-insurance/bike-insurance-claims/">Bike Insurance Claim Process</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/two-wheeler-insurance/bike-insurance-calculator/">Bike Insurance Premium Calculator</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/two-wheeler-insurance/bike-insurance-renewal/">Buy, Compare & Renew Bike Insurance </a>
										<!-- <a class="dropdown-item see-more" href="#">See More</a> -->
									</div>
								</div>
								<div>
									<a href="https://tm.stagingtech.in/blog/">
										<div class="dropdown-header img-text-btn">
											<img class="img-menu-1" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-blog.png">
											<p>Read our Blogs</p>
											<img class="img-menu-arrow" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-arrow-next.png">
										</div>
									</a>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown custom-nav-dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="HealthDropdownMenu" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
						Health
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-content-health" aria-labelledby="HealthDropdownMenu">
							<div class="d-md-flex align-items-start justify-content-start">
								<div>
									<a href="https://tm.stagingtech.in/health-insurance">
										<div class="dropdown-header img-text-btn">
											<img class="img-menu-1" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-health-1.png">
											<p>Know About<br> Health Insurance</p>
											<img class="img-menu-arrow" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-arrow-next.png">
										</div>
									</a>
									<a href="https://app.turtlemint.com/health-insurance/health-profile/profile-gender">
										<div class="dropdown-header img-text-btn">
											<img class="img-menu-1" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-car-2.png">
											<p>Compare Health<br> Insurance</p>
											<img class="img-menu-arrow" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-arrow-next.png">
										</div>
									</a>
									<!-- <a class="dropdown-item" href="#">Bespoke software</a>
										<a class="dropdown-item" href="#">Mobile apps</a>
										<a class="dropdown-item" href="#">Websites</a> -->
								</div>
								<div class="dropdown-list-menu">
									<div class="dropdown-header">Know about Health Insurance</div>
									<div class="dropdown-list-links">
										<a class="dropdown-item" href="https://tm.stagingtech.in/health-insurance">Health Insurance Plans</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/health-insurance/family-health-insurance-plans/">Family Health Insurance Plans</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/health-insurance/senior-citizen-health-insurance/">Senior Citizen Health Insurance</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/health-insurance/critical-illness-insurance/">Critical Illness Insurance</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/health-insurance/mediclaim-insurance/">Mediclaim Policy</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/health-insurance/articles/is-your-health-insurance-enough-to-cover-the-omicron-covid-19-variant/">Coronavirus Health Insurance</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/health-insurance/articles/did-you-know-these-tax-facts-about-your-insurance/">Health Insurance Tax Benefit</a>
									</div>
								</div>
								<div class="dropdown-list-menu">
									<div class="dropdown-header">Insurance Knowledge</div>
									<div class="dropdown-list-links">
										<a class="dropdown-item" href="https://tm.stagingtech.in/health-insurance/health-insurance-companies/">Health Insurance Companies</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/health-insurance/health-insurance-claims/">Health Insurance Claim Process</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/health-insurance/compare-health-insurance/">Buy, Compare or Renew Health Insurance </a>
										<!-- <a class="dropdown-item see-more" href="#">See More</a> -->
									</div>
								</div>
								<div>
									<a href="https://tm.stagingtech.in/blog/">
										<div class="dropdown-header img-text-btn">
											<img class="img-menu-1" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-blog.png">
											<p>Read our Blogs</p>
											<img class="img-menu-arrow" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-arrow-next.png">
										</div>
									</a>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown custom-nav-dropdown ">
						<a class="nav-link dropdown-toggle" href="#" id="LifeDropdownMenu" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
						Life
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-content-life" aria-labelledby="LifeDropdownMenu">
							<div class="d-md-flex align-items-start justify-content-start">
								<div>
									<a href="https://tm.stagingtech.in/life-insurance">
										<div class="dropdown-header img-text-btn">
											<img class="img-menu-1" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-life-1.png">
											<p>Know About<br>Life Insurance</p>
											<img class="img-menu-arrow" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-arrow-next.png">
										</div>
									</a>
									<a href="https://app.turtlemint.com/life-insurance/profile/term/about-insured">
										<div class="dropdown-header img-text-btn">
											<img class="img-menu-1" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-car-2.png">
											<p>Compare Life<br>Term Insurance</p>
											<img class="img-menu-arrow" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-arrow-next.png">
										</div>
									</a>
									<!-- <a class="dropdown-item" href="#">Bespoke software</a>
										<a class="dropdown-item" href="#">Mobile apps</a>
										<a class="dropdown-item" href="#">Websites</a> -->
								</div>
								<div class="dropdown-list-menu">
									<div class="dropdown-header">Know about Life Insurance</div>
									<div class="dropdown-list-links">
										<a class="dropdown-item" href="https://tm.stagingtech.in/life-insurance/term-insurance-plans/">Term Insurance Policy</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/life-insurance/money-back-policy/">Money Back Policy</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/life-insurance/money-back-policy/">Endowment Policy</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/life-insurance/articles/should-i-buy-term-insurance-riders/">Term Insurance Policy</a>
									</div>
								</div>
								<div class="dropdown-list-menu">
									<div class="dropdown-header">Insurance Knowledge</div>
									<div class="dropdown-list-links">
										<a class="dropdown-item" href="https://tm.stagingtech.in/life-insurance-companies/">Life Insurance Companies</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/life-insurance/articles/life-insurance-premium-calculator/">Life Insurance Premium Calculator</a>
										<a class="dropdown-item" href="https://tm.stagingtech.in/life-insurance">Compare & Buy Life Insurance plan</a>
										<!-- <a class="dropdown-item see-more" href="#">See More</a> -->
									</div>
								</div>
								<div>
									<a href="https://tm.stagingtech.in/blog/">
										<div class="dropdown-header img-text-btn">
											<img class="img-menu-1" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-blog.png">
											<p>Read our Blogs</p>
											<img class="img-menu-arrow" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/menu-arrow-next.png">
										</div>
									</a>
								</div>
							</div>
						</div>
					</li>
					<!-- 	</ul>
						</div>
						<ul class="menu-btns custom-nav-links d-flex mb-0 order-2 order-md-3"> -->
					<li class="nav-item custom-nav-btn">
						<a class="nav-link mnhover" href="https://www.mintpro.in/">Become a PoSP with us</a>
					</li>
					<li class="nav-item custom-nav-btn2">
						<a class="nav-link mnhover" href="https://tm.stagingtech.in/raise-claim/">Raise a Claim</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- <div class="d-md-none d-sm-block ">
			<ul class="custom-nav-links abc">
				<li class="nav-item custom-nav-btn ">
								<a class="nav-link" href="#">Become a PoSP with us</a>
							</li>
							<li class="nav-item custom-nav-btn2 ">
								<a class="nav-link" href="#">Raise A Claim</a>
							</li>
			</ul>				
			</div> -->
		<div class="container">
			<div class="row ">
				<div class="col-md-12 d-xl-none d-md-none d-sm-block gray-background bgcolor" style="min-height: 0px;"> 
					<img style="margin: 0 auto; display: block;" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/<?php getPageTerm(); ?>-banner-mobile.png" class="banner-mobile" alt=""/>
				</div>
			</div>
		</div>
		<div class="container1">
			<div class="row">
				<div class="col-md-12 d-xl-none d-lg-none d-sm-none d-md-block gray-background bgcolor"> 
					<img style="margin: 0 auto; display: block;" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/<?php getPageTerm(); ?>-banner-tab.png" class="banner-tab" alt=""/>
				</div>
			</div>
		</div>
		<!-- ======= Navbar End ======= -->
		<header id="masthead" class="site-header hidden" style="display:none;">
			<div class="site-branding">
				<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
					else :
						?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
					endif;
					$turtlemint_description = get_bloginfo( 'description', 'display' );
					if ( $turtlemint_description || is_customize_preview() ) :
						?>
				<p class="site-description"><?php echo $turtlemint_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div>
			<!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'turtlemint' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
			</nav>
			<!-- #site-navigation -->
		</header>
		<!-- #masthead -->
		<!-- <div id="content" class="site-content"> -->