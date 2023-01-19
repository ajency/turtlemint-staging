<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Turtlemint
 */

?>
	

	<footer id="colophon" class="site-footer" style="display: none;">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'turtlemint' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'turtlemint' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'turtlemint' ), 'turtlemint', '<a rel="nofollow" href="http://www.supramind.com">Supramind</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<!-- ======= footer ======= -->

<!-- ======= Mobile footer ======= -->
<div class="row-2 padd-fb-45 footer footer-mobile">
		<div class="container">
			<div class="row-2 padd-fb">
				<div class="footer-col-2">
					<div class="footer-col">
						<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/logo.png" alt class="footer-logo"></a>
					</div>
				</div>
				<div class="footer-col-2">
					<h4>Get Insured</h4>
					<div class="footer-col-50">
						<ul class="footer-links">
							<li>
								<a href="https://tm.stagingtech.in/car-insurance">Car Insurance</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/two-wheeler-insurance">Bike Insurance</a>
							</li>
						</ul>
					</div>
					<div class="footer-col-50">
						<ul class="footer-links">
							<li>
								<a href="https://tm.stagingtech.in/health-insurance">Health Insurance</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/life-insurance">Life Insurance</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<h4>Quick Links</h4>
					<div class="footer-col-50">
						<ul class="footer-links">
							<li>
								<a href="https://www.turtlemint.com">Home</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/about-us" target="_blank">About us</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/blog/" target="_blank">Blog</a>
							</li>
						</ul>
					</div>
					<div class="footer-col-50">
						<ul class="footer-links">
							<!-- <li>
								<a href="https://tm.stagingtech.in/general-insurance-companies-in-india" target="_blank">Non-life insurance partners</a>
								</li> -->
							<li>
								<a href="https://tm.stagingtech.in/raise-claim" target="_blank">Claim</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col-50">
						<ul class="footer-links">
							<li>
								<a href="" data-toggle="modal" data-target="#refund">Policy Cancellation &amp; Refund</a>
							</li>
							<li>
								<a href="https://careers.turtlemint.com/jobs" target="_blank">Careers</a>
							</li>
						</ul>
					</div>
					<div class="footer-col-50">
						<ul class="footer-links">
							<a href="https://tm.stagingtech.in/posp-agreement/" target="_blank">PoSP Agreement</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/annualfiling_FY (2019-20)" target="_blank">Annual Returns</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<h4>Contact</h4>
					<p>Registered & Corporate Office :<br> The ORB - Sahar, 4B, 1st Floor, A Wing, Marol Village, Andheri (East), Mumbai - 400099, Maharashtra, India<br>                  
						<a href="https://twitter.com/helloturtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/twitter-active.png" class="social-icons"></a>								
						<a href="https://www.instagram.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/instagram-active.png" class="social-icons"></a>
						<a href="https://www.facebook.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/facebook-active.png" class="social-icons"></a>
						<a href="https://in.linkedin.com/company/turtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/linkedin-active.png" class="social-icons"></a>
						<a href="https://www.youtube.com/c/InsuranceGyan"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/you-tube-active.png" class="social-icons"></a>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="footer-copy-right">
						<p>© 2022 Turtlemint, All Rights Reserved.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="footer-copy-links">
						<a href="https://tm.stagingtech.in/privacy/">Policy Statements</a>
						<a href="https://tm.stagingtech.in/terms/">Terms & Conditions</a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ======= TAB footer ======= -->
<div class="row-2 padd-fb-45 footer footer-tab">
	<div class="container">
		<div class="row-four">
			<div class="footer-col-12">
				<div class="footer-col row-2">
				<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/logo.png" alt class="tab-logo"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row-2 padd-fb">
			<div class="row-four">
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Get Insured</h4>
						<ul class="footer-links">
							<li>
								<a href="https://tm.stagingtech.in/car-insurance">Car Insurance</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/two-wheeler-insurance">Bike Insurance</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/health-insurance">Health Insurance</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/life-insurance">Life Insurance</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Quick Links</h4>
						<ul class="footer-links">
							<li>
								<a href="https://www.turtlemint.com">Home</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/about-us" target="_blank">About us</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/blog/" target="_blank">Blog</a>
							</li>
							<!-- <li>
								<a href="/general-insurance-companies-in-india" target="_blank">Non-life insurance partners</a>
								</li> -->
							<li>
								<a href="https://tm.stagingtech.in/raise-claim" target="_blank">Claim</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4></h4>
						<ul class="footer-links">
							<li>
								&nbsp;
							</li>
							<li>
								<a href="" data-toggle="modal" data-target="#refund">Policy Cancellation &amp; Refund</a>
							</li>
							<li>
								<a href="https://careers.turtlemint.com/jobs" target="_blank">Careers</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/posp-agreement/" target="_blank">PoSP Agreement</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/annualfiling_FY (2019-20)" target="_blank">Annual Returns</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Contact</h4>
						<p>Registered & Corporate Office :<br> The ORB - Sahar, 4B, 1st Floor, A Wing, Marol Village, Andheri (East), Mumbai - 400099, Maharashtra, India<br>                  
							<a href="https://twitter.com/helloturtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/twitter-active.png" class="social-icons"></a>								
							<a href="https://www.instagram.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/instagram-active.png" class="social-icons"></a>
							<a href="https://www.facebook.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/facebook-active.png" class="social-icons"></a>
							<a href="https://in.linkedin.com/company/turtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/linkedin-active.png" class="social-icons"></a>
							<a href="https://www.youtube.com/c/InsuranceGyan"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/you-tube-active.png" class="social-icons"></a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row-2 padd-ct">
			<div class="row">
				<div class="col-md-6">
					<div class="footer-copy-right">
						<p>© 2022 Turtlemint, All Rights Reserved.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="footer-copy-links">
						<ul>
							<li>
								<a href="https://tm.stagingtech.in/privacy/">Policy Statements</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/terms/">Terms & Conditions</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ======= Desktop footer ======= -->	
<div class="row-2 padd-fb-45 footer footer-desktop">
	<div class="container">
		<div class="row-2 padd-fb">
			<div class="row-four">
				<div class="footer-col-2">
					<div class="footer-col row-2">
					<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/logo.png" alt class="logo"></a>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Get Insured</h4>
						<ul class="footer-links">
							<li>
								<a href="https://tm.stagingtech.in/car-insurance">Car Insurance</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/two-wheeler-insurance">Bike Insurance</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/health-insurance">Health Insurance</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/life-insurance">Life Insurance</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Quick Links</h4>
						<ul class="footer-links">
							<li>
								<a href="https://www.turtlemint.com">Home</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/about-us" target="_blank">About us</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/blog/" target="_blank">Blog</a>
							</li>
							<!-- <li>
								<a href="/general-insurance-companies-in-india" target="_blank">Non-life insurance partners</a>
								</li> -->
							<li>
								<a href="https://tm.stagingtech.in/raise-claim" target="_blank">Claim</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4></h4>
						<ul class="footer-links">
							<li>
								&nbsp;
							</li>
							<li>
								<a href="" data-toggle="modal" data-target="#refund">Policy Cancellation &amp; Refund</a>
							</li>
							<li>
								<a href="https://careers.turtlemint.com/jobs" target="_blank">Careers</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/posp-agreement/" target="_blank">PoSP Agreement</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/annualfiling_FY (2019-20)" target="_blank">Annual Returns</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Contact</h4>
						<p>Registered & Corporate Office :<br> The ORB - Sahar, 4B, 1st Floor, A Wing, Marol Village, Andheri (East), Mumbai - 400099, Maharashtra, India<br>      
							<a href="https://twitter.com/helloturtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/twitter-active.png" class="social-icons"></a>								
							<a href="https://www.instagram.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/instagram-active.png" class="social-icons"></a>
							<a href="https://www.facebook.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/facebook-active.png" class="social-icons"></a>
							<a href="https://in.linkedin.com/company/turtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/linkedin-active.png" class="social-icons"></a>
							<a href="https://www.youtube.com/c/InsuranceGyan"><img src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/img/you-tube-active.png" class="social-icons"></a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row-2 padd-ct">
			<div class="row">
				<div class="col-md-6">
					<div class="footer-copy-right">
						<p>© 2022 Turtlemint, All Rights Reserved.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="footer-copy-links">
						<ul>
							<li>
								<a href="https://tm.stagingtech.in/privacy/">Policy Statements</a>
							</li>
							<li>
								<a href="https://tm.stagingtech.in/terms/">Terms & Conditions</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
	
<!-- inject:foot -->
   
    <!-- inject:foot -->
    <!-- modal -->
    <div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
        style="height: 100%; width: 100%">
        <div class="modal-dialog modal-margin">
            <div class="modal-content">
                <div class="modal-body" id="yt-player">
                    <iframe id="yt-src" class="tmvideo" width="100%" height="320" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="Homevid1-video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
        style="height: 100%; width: 100%">
        <div class="modal-dialog modal-margin">
            <div class="modal-content">
                <div class="modal-body" id="Homevid1-player">
                    <iframe id="Homevid1-src" class="tmvideo" width="100%" height="320" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="Homevid2-video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
        style="height: 100%; width: 100%">
        <div class="modal-dialog modal-margin">
            <div class="modal-content">
                <div class="modal-body" id="Homevid2-player">
                    <iframe id="Homevid2-src" class="tmvideo" width="100%" height="320" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="Homevid3-video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
        style="height: 100%; width: 100%">
        <div class="modal-dialog modal-margin">
            <div class="modal-content">
                <div class="modal-body" id="Homevid3-player">
                    <iframe id="Homevid3-src" class="tmvideo" width="100%" height="320" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
	<div class="modal fade" id="quiz-video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="height: 100%; width: 100%">
        <div class="modal-dialog modal-margin">
            <div class="modal-content">
                <div class="modal-body" id="quiz-player">
                    <iframe id="quiz-src" class="tmvideo" width="100%" height="320" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
	<style>
		@media (min-width: 992px) {
			#quiz-src{height: 500px !important;}
			#quiz-video-modal .modal-dialog{max-width: 70%;}
		}
	</style>

    

    <!--Javascript-->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/tmassets/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/tmassets/js/index.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/tmassets/js/verticalLanding.js"></script>
<script>
	jQuery('.slider-nav').slick({
	    slidesToShow: 5,
	    slidesToScroll: 1,
	    autoplay: true,
	    autoplaySpeed: 20000,
	    dots: true,
	    prevArrow: false,
	    nextArrow: false,
	    responsive: [{
	        breakpoint: 1024,
	        settings: {
	            slidesToShow: 5,
	            slidesToScroll: 1,
	            infinite: true,
	            dots: true
	        }
	    },
	    {
	        breakpoint: 600,
	        settings: {
	            slidesToShow: 3,
	            slidesToScroll: 1
	        }
	    },
	    {
	        breakpoint: 480,
	        settings: {
	            slidesToShow: 2,
	            slidesToScroll: 1
	        }
	    }
	    ],
	});
</script>
<script>
	jQuery('.slider-client').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    autoplay: true,
	    autoplaySpeed: 2000,
	   
	});
	/*Life */
	jQuery('.types-caro').slick({
	    slidesToShow: 3,
	    slidesToScroll: 1,
	    autoplay: true,
	    dots: true,
	    prevArrow: false,
	    nextArrow: false,
	    infinite: false,
	    autoplaySpeed: 3000,
		   responsive: [{
		  
		        breakpoint: 600,
		        settings: {
		            slidesToShow: 1,
		            slidesToScroll: 1
		        }
		    }
		    ],
	});
	/*Bike */
	jQuery('.mobile-slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			dots: true,
			prevArrow: false,
			nextArrow: false,
		});
</script>
<style>
	#navbarCollapse > ul > li > div > div > div:nth-child(1) > a,
#navbarCollapse > ul > li > div > div > div:nth-child(4) > a{text-decoration: none;}
.thrive-car-form,.thrive-bike-form,.thrive-health-form,.thrive-life-form{cursor: pointer;}
</style>
<script>
	document.getElementById("CarDropdownMenu").onclick = function () {
	        location.href = "https://tm.stagingtech.in/car-insurance";
	    };
	document.getElementById("BikeDropdownMenu").onclick = function () {
	        location.href = "https://tm.stagingtech.in/two-wheeler-insurance";
	    };
	document.getElementById("HealthDropdownMenu").onclick = function () {
	        location.href = "https://tm.stagingtech.in/health-insurance";
	    };
	document.getElementById("LifeDropdownMenu").onclick = function () {
	        location.href = "https://tm.stagingtech.in/life-insurance";
	    };
</script>

		
	
    <!-- endinject:foot -->
    </body>
</html>