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
		if ( is_page( array( 'life-insurance' ) )){echo "life"; } 
        elseif(is_page( array( 'health-insurance' ))){echo "health";} else { echo "main"; }
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
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/css/stylemedia.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/css/responsive.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/css/footer.css" />	
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/tmassets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  menu bar disturb so commented -->
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
		
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
        <script>
            function addGTM(url)
            {
                var utm_source = getUrlVars()["utm_source"]; var utm_medium = getUrlVars()["utm_medium"]; var utm_campaign = getUrlVars()["utm_campaign"]; var referrer = getUrlVars()["referrer"]; var gclid = getUrlVars()["gclid"]; 
                /*var regNumber = $('input[name="regno"]').val().toUpperCase();*/
                var newhref=url+'?utm_source='+utm_source+'&utm_medium='+utm_medium+'&utm_campaign='+utm_campaign+'&referrer='+referrer+'&gclid='+gclid;
                /*alert(newhref);*/
                window.location.href = newhref;        
            }
            function addUTM(obj){
                /*Check if question mark*/
                var oldhref = obj.getAttribute("href");
                    oldhref = oldhref.replace("%3F", "?");
                    oldhref = oldhref.replace("%3D", "&");
                var utmparams = location.search;
                if(oldhref.indexOf("?") > -1) { /*Yes, so replace*/ utmparams = utmparams.replace("?", "&");  }    
                /*var newhref=obj.getAttribute("href")+location.search;*/
                newhref = oldhref+utmparams;
                    newhref = newhref.replace("%3F", "?");
                    newhref = newhref.replace("%3D", "&");
                window.location.href = newhref;
            }
            function addUTM2URL(myurl){
                /*Check if question mark*/
                var oldhref = myurl;
                oldhref = oldhref.replace("%3F", "?");
                oldhref = oldhref.replace("%3D", "&");
                var utmparams = location.search;
                if(oldhref.indexOf("?") > -1) { /*Yes, so replace*/ utmparams = utmparams.replace("?", "&");  }    
                /*var newhref=obj.getAttribute("href")+location.search;*/
                newhref = oldhref+utmparams;
                newhref = newhref.replace("%3F", "?");
                newhref = newhref.replace("%3D", "&");
                window.location.href = newhref;
            }
        </script>
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
                                <li><a class="subre" href="https://tm.stagingtech.in/car-insurance" onclick="addUTM(this); return false;"><img class="mn-images" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/car.png">Know More Car Insurance</a></li>
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
                                            <a class="" href="https://tm.stagingtech.in/car-insurance/articles/all-you-need-to-know-about-used-car-insurance/">Used Car Insurance </a>
                                        </div>
                                    </div>
                                    <div class="acc__card" herf="">
                                        <div class="acc__title">Insurance Knowledge</div>
                                        <div class="acc__panel">
                                            <a class="" href="https://tm.stagingtech.in/car-insurance/car-insurance-companies/">Car Insurance Companies</a>
                                            <a class="" href="https://tm.stagingtech.in/car-insurance/car-insurance-calculator/">Car Insurance Premium Calculator</a>
                                            <a class="" href="https://tm.stagingtech.in/car-insurance/car-insurance-claims/">Car Insurance Claim Process</a>
                                            <a class="" href="https://tm.stagingtech.in/car-insurance" onclick="addUTM(this); return false;">Buy, Compare or Renew Car Insurance </a>
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
                                <li><a class="subre" href="https://tm.stagingtech.in/two-wheeler-insurance"  onclick="addUTM(this); return false;"><img class="mn-images" src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/mn/bike.png">About Bike Insurance</a></li>
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
                                            <a class="" href="https://tm.stagingtech.in/two-wheeler-insurance/bike-insurance-renewal/">Buy, Compare &amp; Renew Bike Insurance</a>
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
                                    <a href="https://tm.stagingtech.in/car-insurance" onclick="addUTM(this); return false;">
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
                                        <a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance/articles/all-you-need-to-know-about-used-car-insurance/">Used Car Insurance </a>
                                    </div>
                                </div>
                                <div class="dropdown-list-menu">
                                    <div class="dropdown-header">Insurance Knowledge</div>
                                    <div class="dropdown-list-links">
                                        <a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance/car-insurance-companies/">Car Insurance Companies</a>
                                        <a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance/car-insurance-calculator/">Car Insurance Premium Calculator</a>
                                        <a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance/car-insurance-claims/">Car Insurance Claim Process</a>
                                        <a class="dropdown-item" href="https://tm.stagingtech.in/car-insurance" onclick="addUTM(this); return false;">Buy, Compare or Renew Car Insurance </a>
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
                                    <a href="https://tm.stagingtech.in/two-wheeler-insurance" onclick="addUTM(this); return false;">
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
                                        <a class="dropdown-item" href="https://tm.stagingtech.in/two-wheeler-insurance/bike-insurance-renewal/">Buy, Compare & Renew Bike Insurance</a>
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
                    <!-- 	
                        </ul>
                        </div> -->
                    <!-- <ul class="menu-btns custom-nav-links d-flex mb-0 order-2 order-md-3"> -->
                    <li class="nav-item custom-nav-btn">
                        <a class="nav-link mnhover" href="https://www.mintpro.in/">Become a PoSP with us</a>
                    </li>
                    <li class="nav-item custom-nav-btn2">
                        <a class="nav-link mnhover" href="https://tm.stagingtech.in/raise-claim/">Raise a Claim</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- <div class="container visible-xs">	 
            <div class="row">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/main-banner-mobile.png" alt=""/>
            </div>
            </div>-->
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