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
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- SG test -->

	<link rel="shortcut icon" href="/wp-content/uploads/2021/08/tm-favicon.png" type="image/x-icon">    
    <!-- inject:head -->
    <!--Required tags-->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/newassets/slick/slick.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/newassets/slick/slick-theme.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/newassets/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/newassets/css/responsive.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/newassets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f)
    ;
    })(window,document,'script','dataLayer','GTM-PCZGBP');</script>
    <!-- End Google Tag Manager -->
    <!-- endinject:head -->

	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>
	<nav class="navbar navbar-expand-md navbar-light turtlemint-header">
		<div class="container">
			<a class="navbar-brand" href="index.html">
			<img src="<?php bloginfo('template_directory'); ?>/newassets/img/logo.png" alt class="logo">
			</a>
			<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse"
				data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
				aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
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
									<div class="dropdown-header img-text-btn">
										<img class="img-menu-1" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-car-1.png">
										<p>Know More About<br> Car Insurance</p>
										<img class="img-menu-arrow" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-arrow-next.png">
									</div>
									<div class="dropdown-header img-text-btn">
										<img class="img-menu-1" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-car-2.png">
										<p>Compare Car<br> Insurance</p>
										<img class="img-menu-arrow" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-arrow-next.png">
									</div>
									<!-- <a class="dropdown-item" href="#">Bespoke software</a>
										<a class="dropdown-item" href="#">Mobile apps</a>
										<a class="dropdown-item" href="#">Websites</a> -->
								</div>
								<div>
									<div class="dropdown-header">Know about Car Insurance</div>
									<a class="dropdown-item" href="/car-insurance/third-party-car-insurance/">Third Party Car Insurance</a>
									<a class="dropdown-item" href="/car-insurance/comprehensive-car-insurance/">Comprehensive Car Insurance</a>
									<a class="dropdown-item" href="/car-insurance/articles/standalone-own-damage-insurance/">Standalone Own Damage  Car Insurance</a>
									<a class="dropdown-item" href="/car-insurance/zero-depreciation-car-insurance/">Zero Depreciation Car Insurance</a>
									<a class="dropdown-item" href="/car-insurance/articles/taxi-insurance-explained-in-details/">Taxi Car Insurance</a>
									<a class="dropdown-item" href="/car-insurance/articles/all-you-need-to-know-about-used-car-insurance/">Used Car </a>
								</div>
								<div>
									<div class="dropdown-header">Insurance Knowledge</div>
									<a class="dropdown-item" href="/car-insurance/car-insurance-companies/">Car Insurance Companies</a>
									<a class="dropdown-item" href="/car-insurance/car-insurance-calculator/">Car Insurance Premium Calculator</a>
									<a class="dropdown-item" href="/car-insurance/car-insurance-claims/">Car Insurance Claim Process</a>
									<a class="dropdown-item" href="/car-insurance/">Buy, Compare or Renew Car Insurance </a>
									<a class="dropdown-item see-more" href="#">See More</a>
								</div>
								<div>
									<div class="dropdown-header img-text-btn">
										<img class="img-menu-1" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-blog.png">
										<p>Read our Blogs</p>
										<img class="img-menu-arrow" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-arrow-next.png">
									</div>
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
					<li class="nav-item dropdown custom-nav-dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="BikeDropdownMenu" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Bike
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-content-bike" aria-labelledby="BikeDropdownMenu">
							<div class="d-md-flex align-items-start justify-content-start">
								<div>
									<div class="dropdown-header img-text-btn">
										<img class="img-menu-1" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-bike-1.png">
										<p>Know More About<br> Bike Insurance</p>
										<img class="img-menu-arrow" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-arrow-next.png">
									</div>
									<div class="dropdown-header img-text-btn">
										<img class="img-menu-1" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-car-2.png">
										<p>Compare Bike<br> Insurance</p>
										<img class="img-menu-arrow" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-arrow-next.png">
									</div>
									<!-- <a class="dropdown-item" href="#">Bespoke software</a>
										<a class="dropdown-item" href="#">Mobile apps</a>
										<a class="dropdown-item" href="#">Websites</a> -->
								</div>
								<div>
									<div class="dropdown-header">Know about Bike Insurance</div>                                        
									<a class="dropdown-item" href="/two-wheeler-insurance/third-party-bike-insurance">Third Party Bike Insurance</a>
									<a class="dropdown-item" href="/two-wheeler-insurance/comprehensive-bike-insurance/">Comprehensive Bike Insurance</a>
									<a class="dropdown-item" href="/two-wheeler-insurance/articles/zero-depreciation-insurance-cover-bike-two-wheeler-india/">Zero Depreciation Bike Insurance</a>
									<a class="dropdown-item" href="/two-wheeler-insurance/articles/know-two-wheeler-insurance-plans-add-ons/">Add On Cover</a>
								</div>
								<div>
									<div class="dropdown-header">Insurance Knowledge</div>
									<a class="dropdown-item" href="/two-wheeler-insurance/two-wheeler-insurance-companies/">Bike Insurance Companies</a>
									<a class="dropdown-item" href="/two-wheeler-insurance/bike-insurance-claims/">Bike Insurance Claim Process</a>
									<a class="dropdown-item" href="/two-wheeler-insurance/bike-insurance-calculator/">Bike Insurance Premium Calculator</a>
									<a class="dropdown-item" href="/two-wheeler-insurance/bike-insurance-renewal/">Buy, Compare & Renew </a>
									<a class="dropdown-item see-more" href="#">See More</a>
								</div>
								<div>
									<div class="dropdown-header img-text-btn">
										<img class="img-menu-1" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-blog.png">
										<p>Read our Blogs</p>
										<img class="img-menu-arrow" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-arrow-next.png">
									</div>
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
									<div class="dropdown-header img-text-btn">
										<img class="img-menu-1" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-health-1.png">
										<p>Know More About<br> Car Insurance</p>
										<img class="img-menu-arrow" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-arrow-next.png">
									</div>
									<div class="dropdown-header img-text-btn">
										<img class="img-menu-1" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-car-2.png">
										<p>Compare Car<br> Insurance</p>
										<img class="img-menu-arrow" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-arrow-next.png">
									</div>
									<!-- <a class="dropdown-item" href="#">Bespoke software</a>
										<a class="dropdown-item" href="#">Mobile apps</a>
										<a class="dropdown-item" href="#">Websites</a> -->
								</div>
								<div>
									<div class="dropdown-header">Know about Health Insurance</div>
									<a class="dropdown-item" href="/health-insurance/">Health Insurance Plans</a>
									<a class="dropdown-item" href="/health-insurance/family-health-insurance-plans/">Family Health Insurance Plans</a>
									<a class="dropdown-item" href="/health-insurance/senior-citizen-health-insurance/">Senior Citizen Health Insurance</a>
									<a class="dropdown-item" href="/health-insurance/critical-illness-insurance/">Critical Illness Insurance</a>
									<a class="dropdown-item" href="/health-insurance/mediclaim-insurance/">Mediclaim Policy</a>
									<a class="dropdown-item" href="/health-insurance/articles/is-your-health-insurance-enough-to-cover-the-omicron-covid-19-variant/">Coronavirus Health Insurance</a>
									<a class="dropdown-item" href="/health-insurance/articles/did-you-know-these-tax-facts-about-your-insurance/">Health Insurance Tax Benefit</a>
								</div>
								<div>
									<div class="dropdown-header">Insurance Knowledge</div>
									<a class="dropdown-item" href="/health-insurance/health-insurance-companies/">Health Insurance Companies</a>
									<a class="dropdown-item" href="/health-insurance/health-insurance-claims/">Health Insurance Claim Process</a>
									<a class="dropdown-item" href="/health-insurance/compare-health-insurance/">Buy, Compare or Renew Health Insurance </a>
									<a class="dropdown-item see-more" href="#">See More</a>
								</div>
								<div>
									<div class="dropdown-header img-text-btn">
										<img class="img-menu-1" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-blog.png">
										<p>Read our Blogs</p>
										<img class="img-menu-arrow" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-arrow-next.png">
									</div>
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
									<div class="dropdown-header img-text-btn">
										<img class="img-menu-1" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-life-1.png">
										<p>Know More About<br> Car Insurance</p>
										<img class="img-menu-arrow" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-arrow-next.png">
									</div>
									<div class="dropdown-header img-text-btn">
										<img class="img-menu-1" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-car-2.png">
										<p>Compare Car<br> Insurance</p>
										<img class="img-menu-arrow" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-arrow-next.png">
									</div>
									<!-- <a class="dropdown-item" href="#">Bespoke software</a>
										<a class="dropdown-item" href="#">Mobile apps</a>
										<a class="dropdown-item" href="#">Websites</a> -->
								</div>
								<div>
									<div class="dropdown-header">Know about Life Insurance</div>
									<a class="dropdown-item" href="/life-insurance/term-insurance-plans/">Term Insurance Policy</a>
									<a class="dropdown-item" href="/life-insurance/money-back-policy/">Money Back Policy</a>
									<a class="dropdown-item" href="/life-insurance/money-back-policy/">Endowment Policy</a>
									<a class="dropdown-item" href="/life-insurance/articles/should-i-buy-term-insurance-riders/">Term Insurance Policy</a>
								</div>
								<div>
									<div class="dropdown-header">Insurance Knowledge</div>
									<a class="dropdown-item" href="/life-insurance-companies/">Life Insurance Companies</a>
									<a class="dropdown-item" href="/life-insurance/articles/life-insurance-premium-calculator/">Life Insurance Premium Calculator</a>
									<a class="dropdown-item" href="/life-insurance/">Compare & Buy Life Insurance plan</a>
									<a class="dropdown-item see-more" href="#">See More</a>
								</div>
								<div>
									<div class="dropdown-header img-text-btn">
										<img class="img-menu-1" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-blog.png">
										<p>Read our Blogs</p>
										<img class="img-menu-arrow" src="<?php bloginfo('template_directory'); ?>/newassets/img/menu-arrow-next.png">
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item custom-nav-btn">
						<a class="nav-link" href="https://www.mintpro.in">Become A Posp With Us</a>
					</li>
					<li class="nav-item custom-nav-btn2">
						<a class="nav-link" href="/raise-claim">Raise A Claim</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


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
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'turtlemint' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<!-- <div id="content" class="site-content"> -->
