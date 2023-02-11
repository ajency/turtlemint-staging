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
					<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/logo.png" alt class="footer-logo"></a>
					<div style="width:200px; margin:0 auto;margin-bottom: 25px">
						<a target="_blank" href="https://twitter.com/helloturtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/twitter-active.png" class="social-icons"></a>								
						<a target="_blank" href="https://www.instagram.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/instagram-active.png" class="social-icons"></a>
						<a target="_blank" href="https://www.facebook.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/facebook-active.png" class="social-icons"></a>
						<a target="_blank" href="https://in.linkedin.com/company/turtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/linkedin-active.png" class="social-icons"></a>
						<a target="_blank" href="https://www.youtube.com/c/InsuranceGyan"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/you-tube-active.png" class="social-icons"></a>
					</div>
				</div>
			</div>
			<div class="footer-col-2">
				<h4>Get Insured</h4>
				<div class="footer-col-50">
					<ul class="footer-links">
						<li>
							<a href="/car-insurance" onclick="addUTM(this); return false;">Car Insurance</a>
						</li>
						<li>
							<a href="/two-wheeler-insurance" onclick="addUTM(this); return false;">Bike Insurance</a>
						</li>
					</ul>
				</div>
				<div class="footer-col-50">
					<ul class="footer-links">
						<li>
							<a href="/health-insurance" onclick="addUTM(this); return false;">Health Insurance</a>
						</li>
						<li>
							<a href="/life-insurance" onclick="addUTM(this); return false;">Life Insurance</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer-col-2">
				<h4>Quick Links</h4>
				<div class="footer-col-50">
					<ul class="footer-links">
						<li>
							<a href="/">Home</a>
						</li>
						<li>
							<a href="/about-us">About us</a>
						</li>
					</ul>
				</div>
				<div class="footer-col-50">
					<ul class="footer-links">
						<!-- <li>
							<a href="/general-insurance-companies-in-india">Non-life insurance partners</a>
							</li> -->
						<li>
							<a href="/raise-claim">Claim</a>
						</li>
						<li>
							<a href="/blog/">Blog</a>
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
							<a href="https://careers.turtlemint.com/jobs">Careers</a>
						</li>
					</ul>
				</div>
				<div class="footer-col-50">
					<ul class="footer-links">
						<a href="/posp-agreement/" target="_blank">PoSP Agreement</a>
						</li>
						<li>
							<a href="/wp-content/uploads/2022/12/TIB-MGT-7-PDF.pdf" target="_blank">Annual Returns</a>
						</li>
						<li>
							<a href="/wp-content/uploads/2023/01/Grievance-Redressal-Policy.pdf" target="_blank">Grievance Policy</a>
						</li>
						<!-- <li>
							<a href="https://www.flurish.in/" target="_blank">Flurish</a>
						</li> -->
					</ul>
				</div>
			</div>
			<div class="footer-col-2">
				<h4>Contact</h4>
				<p><span style="font-weight: 600;">Registered & Corporate Office :</span><br> The ORB - Sahar, 4B, 1st Floor, A Wing, Marol Village, Andheri (East), Mumbai - 400099, Maharashtra, India<br>								
				</p>
				<a href="https://www.irdai.gov.in" target="_blank"><img style="max-width: 130px; margin-top: 10px;" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/irda-logo.webp"></a>
			</div>
			<div class="footer-col-2">
				<h4></h4>
				<p><span style="font-weight: 600;">Turtlemint Insurance Broking Services Pvt Ltd (f/k  Invictus Insurance Broking Services Pvt Ltd)</span></p>
				<p><a href="/irda-license/"><span style="text-decoration: underline;">IRDAI License No. 487,</span></a></br>
					Composite Broker,</br>
					Valid upto : 02/04/2023 (Renewable) 
				</p>
				<p><span style="font-weight: 600;">Principal Officer: Vilas Gandre,</span></br><a href="tel:18002660101"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>1800 266 0101</u></a></br> <a href="tel:+919833248023"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>+91-9833248023</u></a> </p>
				<p><span style="font-weight: 600;">Secured by:</span></p>
				<a href="https://www.globalsign.com/" target="_blank" title="GlobalSign Site Seal" rel="nofollow"><img alt="SSL" border="0" id="ss_img" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_110-45_en.gif"></a>
			</div>
			<div class="footer-col-100">
				<p>Insurance is the subject matter of the solicitation. For more details on policy terms, conditions, exclusions, limitations, please refer/read policy brochure carefully before concluding sale.</p>
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
					<a href="/privacy/">Policy Statements</a>
					<a href="/terms/">Terms & Conditions</a>
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
					<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/logo.png" alt class="tab-logo"></a>
					<div style="width:200px; margin:0 auto;margin-bottom: 25px">
						<a target="_blank" href="https://twitter.com/helloturtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/twitter-active.png" class="social-icons"></a>								
						<a target="_blank" href="https://www.instagram.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/instagram-active.png" class="social-icons"></a>
						<a target="_blank" href="https://www.facebook.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/facebook-active.png" class="social-icons"></a>
						<a target="_blank" href="https://in.linkedin.com/company/turtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/linkedin-active.png" class="social-icons"></a>
						<a target="_blank" href="https://www.youtube.com/c/InsuranceGyan"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/you-tube-active.png" class="social-icons"></a>
					</div>
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
								<a href="/car-insurance" onclick="addUTM(this); return false;">Car Insurance</a>
							</li>
							<li>
								<a href="/two-wheeler-insurance" onclick="addUTM(this); return false;">Bike Insurance</a>
							</li>
							<li>
								<a href="/health-insurance" onclick="addUTM(this); return false;">Health Insurance</a>
							</li>
							<li>
								<a href="/life-insurance" onclick="addUTM(this); return false;">Life Insurance</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Quick Links</h4>
						<ul class="footer-links">
							<li>
								<a href="/">Home</a>
							</li>
							<li>
								<a href="/about-us">About us</a>
							</li>
							<li>
								<a href="/blog/">Blog</a>
							</li>
							<li>
								<a href="/raise-claim">Claim</a>
							</li>
							<li>
								<a href="" data-toggle="modal" data-target="#refund">Policy Cancellation &amp; Refund</a>
							</li>
							<li>
								<a href="https://careers.turtlemint.com/jobs">Careers</a>
							</li>
							<li>
								<a href="/posp-agreement/" target="_blank">PoSP Agreement</a>
							</li>
							<li>
								<a href="/wp-content/uploads/2022/12/TIB-MGT-7-PDF.pdf" target="_blank">Annual Returns</a>
							</li>
							<li>
								<a href="/wp-content/uploads/2023/01/Grievance-Redressal-Policy.pdf" target="_blank">Grievance Policy</a>
							</li>
							<!-- <li>
								<a href="https://www.flurish.in/" target="_blank">Flurish</a>
							</li> -->
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Contact</h4>
						<p><span style="font-weight: 600;">Registered & Corporate Office :</span><br> The ORB - Sahar, 4B, 1st Floor, A Wing, Marol Village, Andheri (East), Mumbai - 400099, Maharashtra, India<br> 
						</p>
						<p> <a href="tel:18002660101"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>1800 266 0101</u></a></br><a href="mailto:support@turtlemint.com"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i><u>support@turtlemint.com</u></a></p>
						<p>     
							<a href="https://www.irdai.gov.in" target="_blank"><img style="max-width: 100px; margin-top: 20px;" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/irda-logo.webp"></a>
						</p>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<p><span style="font-weight: 600;">Turtlemint Insurance Broking Services Pvt Ltd (f/k  Invictus Insurance Broking Services Pvt Ltd)</span></p>
						<p><a href="/irda-license/"><span style="text-decoration: underline;">IRDAI License No. 487,</span></a></br>
							Composite Broker,</br>
							Valid upto : 02/04/2023 (Renewable) 
						</p>
						<p><span style="font-weight: 600;">Principal Officer: Vilas Gandre,</span></br><a href="tel:18002660101"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>1800 266 0101</u></a></br> <a href="tel:+919833248023"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>+91-9833248023</u></a> </p>
						<p><span style="font-weight: 600;">Secured by:</span></p>
						<a href="https://www.globalsign.com/" target="_blank" title="GlobalSign Site Seal" rel="nofollow"><img alt="SSL" border="0" id="ss_img" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_110-45_en.gif"></a>
					</div>
				</div>
				<div class="footer-col-100">
					<p>Insurance is the subject matter of the solicitation. For more details on policy terms, conditions, exclusions, limitations, please refer/read policy brochure carefully before concluding sale.</p>
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
								<a href="/privacy/">Policy Statements</a>
							</li>
							<li>
								<a href="/terms/">Terms & Conditions</a>
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
						<a href="/"> <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/logo.png" alt class="fo-logo"></a>
						<a target="_blank" href="https://twitter.com/helloturtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/twitter-active.png" class="social-icons"></a>								
						<a target="_blank" href="https://www.instagram.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/instagram-active.png" class="social-icons"></a>
						<a target="_blank" href="https://www.facebook.com/turtlemint.insurance/"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/facebook-active.png" class="social-icons"></a>
						<a target="_blank" href="https://in.linkedin.com/company/turtlemint"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/linkedin-active.png" class="social-icons"></a>
						<a target="_blank" href="https://www.youtube.com/c/InsuranceGyan"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/you-tube-active.png" class="social-icons"></a>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Get Insured</h4>
						<ul class="footer-links">
							<li>
								<a href="/car-insurance" onclick="addUTM(this); return false;">Car Insurance</a>
							</li>
							<li>
								<a href="/two-wheeler-insurance" onclick="addUTM(this); return false;">Bike Insurance</a>
							</li>
							<li>
								<a href="/health-insurance" onclick="addUTM(this); return false;">Health Insurance</a>
							</li>
							<li>
								<a href="/life-insurance" onclick="addUTM(this); return false;">Life Insurance</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Quick Links</h4>
						<ul class="footer-links">
							<li>
								<a href="/">Home</a>
							</li>
							<li>
								<a href="/about-us">About us</a>
							</li>
							<li>
								<a href="/blog/">Blog</a>
							</li>
							<li>
								<a href="/raise-claim">Claim</a>
							</li>
							<li>
								<a href="" data-toggle="modal" data-target="#refund">Policy Cancellation &amp; Refund</a>
							</li>
							<li>
								<a href="https://careers.turtlemint.com/jobs">Careers</a>
							</li>
							<li>
								<a href="/posp-agreement/" target="_blank">PoSP Agreement</a>
							</li>
							<li>
								<a href="/wp-content/uploads/2022/12/TIB-MGT-7-PDF.pdf" target="_blank">Annual Returns</a>
							</li>
							<li>
								<a href="/wp-content/uploads/2023/01/Grievance-Redressal-Policy.pdf" target="_blank">Grievance Policy</a>
							</li>
							<!-- <li>
								<a href="https://www.flurish.in/" target="_blank">Flurish</a>
							</li> -->
						</ul>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<h4>Contact</h4>
						<p><span style="font-weight: 600;">Registered & Corporate Office :</span><br> The ORB - Sahar, 4B, 1st Floor, A Wing, Marol Village, Andheri (East), Mumbai - 400099, Maharashtra, India<br> 
						</p>
						<p> <a href="tel:18002660101"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>1800 266 0101</u></a></br><a href="mailto:support@turtlemint.com"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i><u>support@turtlemint.com</u></a></p>
						<p>     
							<a href="https://www.irdai.gov.in" target="_blank"><img style="max-width: 100px; margin-top: 20px;" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/irda-logo.webp"></a>
						</p>
					</div>
				</div>
				<div class="footer-col-2">
					<div class="footer-col row-2">
						<p><span style="font-weight: 600;">Turtlemint Insurance Broking Services Pvt Ltd (f/k  Invictus Insurance Broking Services Pvt Ltd)</span></p>
						<p><a href="/irda-license/"><span style="text-decoration: underline;">IRDAI License No. 487,</span></a></br>
							Composite Broker,</br>
							Valid upto : 02/04/2023 (Renewable) 
						</p>
						<p><span style="font-weight: 600;">Principal Officer: Vilas Gandre,</span></br><a href="tel:18002660101"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>1800 266 0101</u></a></br> <a href="tel:+919833248023"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><u>+91-9833248023</u></a> </p>
						<p><span style="font-weight: 600;">Secured by:</span></p>
						<a href="https://www.globalsign.com/" target="_blank" title="GlobalSign Site Seal" rel="nofollow"><img alt="SSL" border="0" id="ss_img" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_110-45_en.gif"></a>
					</div>
				</div>
				<div class="footer-col-100">
					<p>Insurance is the subject matter of the solicitation. For more details on policy terms, conditions, exclusions, limitations, please refer/read policy brochure carefully before concluding sale.</p>
				</div>
			</div>
		</div>
		<div class="row-2"></div>
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
								<a href="/privacy/">Policy Statements</a>
							</li>
							<li>
								<a href="/terms/">Terms & Conditions</a>
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
	<!-- Modal -->
	<div class="modal fade" id="refund" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body footer-modal">
					<button type="button" class="close footer-modal-close" data-dismiss="modal" aria-label="Close">
						<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="svg-inline--fa fa-times" data-icon="times" data-prefix="far" style="width:.75em" viewBox="0 0 384 512">
							<path d="M231.6 256l130.1-130.1c4.7-4.7 4.7-12.3 0-17l-22.6-22.6c-4.7-4.7-12.3-4.7-17 0L192 216.4 61.9 86.3c-4.7-4.7-12.3-4.7-17 0l-22.6 22.6c-4.7 4.7-4.7 12.3 0 17L152.4 256 22.3 386.1c-4.7 4.7-4.7 12.3 0 17l22.6 22.6c4.7 4.7 12.3 4.7 17 0L192 295.6l130.1 130.1c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17L231.6 256z"/>
						</svg>
					</button>
					<h4 class="modal-title footer-modal-title" id="myModalLabel">Policy Cancellation & Refund</h4>
					<p class="footer-paragraph">Policy cancellation and refund of the premium shall be as per the terms and conditions of the policy. The refunds are processed by the Insurance Company directly. You are requested to contact the toll free number of your Insurance Company or refer the respective section of your Policy terms and conditions. You can also call us at our toll free number <a href="tel:18002660101"><u>1800-266-0101</u></a> or write a mail to us at <a href="mailto:support@turtlemint.com"><u>support@turtlemint.com</u></a>. We shall be available to guide/assist you.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="complaints" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body footer-modal">
					<button type="button" class="close footer-modal-close" data-dismiss="modal" aria-label="Close">
						<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="svg-inline--fa fa-times" data-icon="times" data-prefix="far" style="width:.75em" viewBox="0 0 384 512">
							<path d="M231.6 256l130.1-130.1c4.7-4.7 4.7-12.3 0-17l-22.6-22.6c-4.7-4.7-12.3-4.7-17 0L192 216.4 61.9 86.3c-4.7-4.7-12.3-4.7-17 0l-22.6 22.6c-4.7 4.7-4.7 12.3 0 17L152.4 256 22.3 386.1c-4.7 4.7-4.7 12.3 0 17l22.6 22.6c4.7 4.7 12.3 4.7 17 0L192 295.6l130.1 130.1c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17L231.6 256z"/>
						</svg>
					</button>
					<h4 class="modal-title footer-modal-title" id="myModalLabel">Complaints & Grievance</h4>
					<p class="footer-paragraph">For any complaints, services related issues or policy, claim related queries/ customer can reach us on - our toll free number <a href="tel:18002660101"><u>1800-266-0101</u></a> Or address mail to <a>support@turtlemint.com</a></p>
					<p class="footer-paragraph">For escalations customer can write to us at <a>po@invictusinsure.com</a> or call us at <br><a href="tel:18002660101"><u>+91-9833248023</u></a></p>
					<p class="footer-paragraph">For more details on complaints and grievances, customers are requested to visit <a>http://www.policyholder.gov.in/</a></p>
				</div>
			</div>
		</div>
	</div>
	<style>
		@media (min-width: 992px) {
			#quiz-src{height: 500px !important;}
			#quiz-video-modal .modal-dialog{max-width: 70%;}
		}
		@media (min-width: 768px){
			.modal-dialog {
				width: 600px;
				margin: 30px auto;
			}
		}
		.modal .footer-modal {
			padding: 15px;
			font-family: 'Montserrat-Regular';
			line-height: .1em;
		}
		.modal .footer-modal-title {
			font-size: 1.4rem;
			color: #354052;
			padding: 15px;
			font-family: 'Montserrat-Medium';
		}
		.modal .footer-paragraph {
			padding: 15px;
			font-size: .75rem;
			line-height: 1.1rem;
			margin: 0;
		}
	</style>

    

    <!--Javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/tm-assets/js/index.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/tm-assets/js/verticalLanding.js"></script>
<script>
	jQuery('.slider-nav').slick({
	    slidesToShow: 6,
	    slidesToScroll: 1,
	    autoplay: true,
	    autoplaySpeed: 3000,
	    dots: true,
	    prevArrow: false,
	    nextArrow: false,
	    responsive: [{
	        breakpoint: 1024,
	        settings: {
	            slidesToShow: 1,
	            slidesToScroll: 1,
	            infinite: true,
	            dots: true
	        }
	    },
	    {
	        breakpoint: 600,
	        settings: {
	            slidesToShow: 1,
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
	    ],
	});
</script>
<script>
	jQuery('.slider-client').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    autoplay: false,
	    autoplaySpeed: 2000,
	   
	});
</script>
<script>
	jQuery('.slider-partnar').slick({
	    slidesToShow: 5,
	    slidesToScroll: 5,
	    autoplay: true,
	    autoplaySpeed: 3000,
	    dots: true,
	    prevArrow: false,
	    nextArrow: false,
	    responsive: [{
	        breakpoint: 1024,
	        settings: {
	            slidesToShow: 5,
	            slidesToScroll: 5,
	            infinite: true,
	            dots: true
	        }
	    },
	    {
	        breakpoint: 600,
	        settings: {
	            slidesToShow: 2,
	            slidesToScroll: 2
	        }
	    },
	    {
	        breakpoint: 480,
	        settings: {
	            slidesToShow: 2,
	            slidesToScroll: 2
	        }
	    }
	    ],
	});
	/*Slick Dot reduce to 5 */
	/*jQuery(document).ready(function(){
		jQuery("ul.slick-dots>li").hide();
		jQuery("ul.slick-dots li").slice(0,7).show();
	});*/
</script>
<script>
	jQuery('.slider-home-banner').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		dots: true,
		prevArrow: false,
		nextArrow: false,
		responsive: [{
			breakpoint: 1024,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: true
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		}
		],
	});
</script>
<style>
	/*Navigation*/
	.dropdown:hover>.dropdown-menu {/*OnHover Show Dropdown*/
	display: block;
	}
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
	/* .dropdown-header.img-text-btn {
	border: 1px solid lightgray;
	padding: 20px 20px 10px 20px;
	margin: 10px;
	}
	.dropdown-header.img-text-btn .img-menu-1{
	width: 24%;
	padding: 5px;
	margin-bottom: 18px;
	} */
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
	/*Testimonial*/
	button.slick-next.slick-arrow,button.slick-prev.slick-arrow {
	width: 40px;
	height: 40px;
	background: unset;
	z-index: 9;
	}
	.slick-prev {
	left: 688px;
	top: 207px;
	}
	.slick-next {
	right: 32px;
	top: 207px;
	}
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
	/*Footer*/
	.footer .row-2.padd-fb {border-bottom: 1px solid #ccc;}
	.footer .social-icons {}
	.footer-copy-links ul li {
	padding: 0 11px;
	}
    
/*20220202 Start*/
.main-banner-txt-s {padding-bottom: 7%;}
	.secondary-banner {
	border-radius: 0 100px;
	}
.banner-cta {
    background-color: #fff;
    padding: 0;
}
.banner-cta {
    background-color: white;
    padding: 0;
    margin-top: 2%;
    border-radius: 5px;
    -webkit-box-shadow: -1px 2px 4px 1px #9e9e9e54;
    box-shadow: -1px 2px 4px 1px #9e9e9e54;
}
.banner-cta-img {
    float: left;
    padding: 3% 4%;
}
.banner-cta-text {
    padding: 4% 5%;
    margin-left: 60px;
    border-left: 0.01em solid #707070;
}

.banner-cta-text h5 a {
    font-family: montserrat-medium,sans-serif;
    font-size: .9rem;
    color: #000;
    text-decoration: none;
}

.banner-cta-text h5>img {
    height: 14px;
    margin-left: 28px;
}

@media (max-width: 991px) {
.banner-cta {
    margin: 0 auto;
}}
/*20220205 Start */
@media screen and (max-width: 429px){
	.homy {
		text-align: left !important; font-size:14px;
	}
	.video-row
	{
		padding-top: 15% !important;
	}
}/*20220205 End */

@media screen and (max-width: 769px){
	.homy {
		text-align: center;
	}/*20220202 End *//*20220204 Start */
	.video-row{
	padding-top: 9% !important;
	}
}

@media screen and (max-width: 835px){
	.homy {
		text-align: center;
	}
	.video-row{
	   padding-top: 9% !important;
	}
}
.video-row{
	padding-top: 5%;
	padding-bottom: 5%;
}
.banner-img {
    border-radius: 12px;
	/*box-shadow: -1px 2px 4px 1px #9e9e9e54;*/
}
/*20220204 End */

	/*SG20220109 */
	/* div.banner-crd > div:nth-child(2) > a > div.banner-img:hover > img{width:48px;} Banner on hover 2nd tile fix */
	/* .custom-video-crd>img,.thrive-home-form,.thrive-home-form-2{cursor: pointer;} */
	/*12Jan22SidFeedback */
	/* #navbarCollapse > ul > li > div > div > div:nth-child(1) > a,
#navbarCollapse > ul > li > div > div > div:nth-child(4) > a{text-decoration: none;} */
	@media (min-width: 1024px){
		/*body.home .custom-video-crd h5 {
			min-height: unset;
		}
		body.home .custom-video-crd p{min-height: 54px;}
		.custom-video-crd p{
		margin-bottom: 0px;
		}*/
	}
	/*SEO FAQ Para text font family */
	body.home .faq-section p.paragraph-text {
		font-family: 'Montserrat-Regular';
		font-size: 1rem;
	}
	/*Vertical Form Validation */
	div#errMsg {
		color: red;
		font-family: 'Montserrat-Regular';
		font-size: .9rem;
		padding-left: 20px;
	}
	/*Slick Dot reduce to 5 */
	ul.slick-dots>li{display: none;}
	ul.slick-dots>li:nth-child(1),ul.slick-dots>li:nth-child(2),ul.slick-dots>li:nth-child(3),ul.slick-dots>li:nth-child(4),ul.slick-dots>li:nth-child(5),ul.slick-dots>li:nth-child(6) { display: inline-block;}
	/*Slider fix 20230128*/
	@media (max-width: 786px){
		.customer-row{width: 100% !important;}

	}
	@media only screen and (max-device-width: 767px) and (min-device-width: 200px)
	{
		button.slick-next.slick-arrow, button.slick-prev.slick-arrow{
			width: 40px !important; height: 40px !important;
		}
		.slick-prev {
			left: 40% !important;
    		top: 110% !important;
		}
		.slick-next {
			right: 36% !important;
    		top: 110% !important;
		}
		.c-media{width: unset; float: none;}
		.c-media img {
			height: 135px;
			width: 135px;
		}
		.slick-slide img{
			margin: 0 auto;
		}
		.customer-about .c-caption-span-2 img{
			margin: 0;
		}
	}
</style>
<script>
	var checked = false;
	var img_pressed = '';
	/*
	function changeImage(img){
		var img_selector = img+'-img';
		jQuery('.health-img').attr('src', '<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-health.svg');
		jQuery('.life-img').attr('src', '<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-life.svg');
		jQuery('.bike-img').attr('src', '<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-bike.svg');
		jQuery('.car-img').attr('src', '<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-car.svg');
		
		jQuery('.'+img_selector).attr('src', '<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/home-banner-icon-'+img+'-checked.svg');

		checked = true;
		img_pressed = img;	
	}
	*/
	function changeImage(img) {
		var img_selector = img+'-img';
		$('.health-img').removeClass('health-checked');
		$('.life-img').removeClass('life-checked');
		$('.bike-img').removeClass('bike-checked');
		$('.car-img').removeClass('car-checked');
		
		$('.'+img_selector).addClass(img+'-checked');
		
		checked = true;
		img_pressed = img;
		
	}
	function changeBtn(value){
		// if(jQuery("input[type='radio'].radio-grp").is(':checked')) {
		// 	var radio_type = jQuery("input[type='radio'].radio-grp:checked").val();
		// }
		window.dataLayer = window.dataLayer || [];
		if(checked == false){
			jQuery('.error-msg-mb').css('margin-top','30px');
			jQuery('.error-msg').css('visibility','visible');
			if(value == 'popup'){
				window.dataLayer.push({ 'event': 'button_click' ,'click_text': 'findadvisor', 'button_location': 'banner', });
			}
			if(value == 'redirect'){
				window.dataLayer.push({ 'event': 'button_click' ,'click_text': 'getquotes', 'button_location': 'banner', });
			}
			gtag('event','HP-Message-Not_selected',{event_category:'HP-Error',event_label:'Please select type of insurance to proceed to the next step'});
		}
		else{
			jQuery('.error-msg').css('visibility','hidden');
			if(value == 'popup'){
				//Green Button: Find Advisor: Redirect links
				if(img_pressed != ''){				
					if(img_pressed == 'bike'){
						var redirect_url = location.protocol+"//"+location.hostname+"/insurance-advisor-near-me/?vertical=TW";
						window.dataLayer.push({ 'event': 'button_click' ,'click_text': 'findadvisorbike', 'button_location': 'banner', });
					}
					else if(img_pressed == 'car'){
						var redirect_url = location.protocol+"//"+location.hostname+"/insurance-advisor-near-me/?vertical=FW";
						window.dataLayer.push({ 'event': 'button_click' ,'click_text': 'findadvisorcar', 'button_location': 'banner', });
					}
					else if(img_pressed == 'life'){
						var redirect_url = location.protocol+"//"+location.hostname+"/insurance-advisor-near-me/?vertical=Life";
						window.dataLayer.push({ 'event': 'button_click' ,'click_text': 'findadvisorlife', 'button_location': 'banner', });
					}
					else if(img_pressed == 'health'){
						var redirect_url = location.protocol+"//"+location.hostname+"/insurance-advisor-near-me/?vertical=Health";
						window.dataLayer.push({ 'event': 'button_click' ,'click_text': 'findadvisorhealth', 'button_location': 'banner', });
					}

					//GA EVENT START
					gtag('event','Btn_click-'+img_pressed+'-Find Advisor',{event_category:'HP-Buttons',event_label:'Find Advisor'});
					//GA EVENT END

					window.location.href = redirect_url;		
				}
				
			}
			if(value == 'redirect'){
			
				//Yellow Button: Get Quote: Redirect links				
				if(img_pressed != ''){
					
					if(img_pressed == 'bike'){
						var redirect_url = "https://app.turtlemint.com/two-wheeler-insurance/two-wheeler-profile/tw-registration-info";
						window.dataLayer.push({ 'event': 'button_click' ,'click_text': 'getquotesbike', 'button_location': 'banner', });
					}
					else if(img_pressed == 'car'){
						var redirect_url = "https://app.turtlemint.com/car-insurance/car-profile/car-registration-info";
						window.dataLayer.push({ 'event': 'button_click' ,'click_text': 'getquotescar', 'button_location': 'banner', });
					}
					else if(img_pressed == 'life'){
						var redirect_url = location.protocol+"//"+location.hostname+"/life-insurance/";
						window.dataLayer.push({ 'event': 'button_click' ,'click_text': 'getquoteslife', 'button_location': 'banner', });
					}
					else if(img_pressed == 'health'){
						var redirect_url = "https://app.turtlemint.com/health-insurance/health-profile/profile-gender";
						window.dataLayer.push({ 'event': 'button_click' ,'click_text': 'getquoteshealth', 'button_location': 'banner', });
					}

					//GA EVENT START
					gtag('event','Btn_click-'+img_pressed+'-Get a Quote',{event_category:'HP-Buttons',event_label:'Get a Quote'});
					//GA EVENT END

					window.location.href = redirect_url;				
				}
			}
		}
	}
	jQuery('.banner-img').click(function(){
		jQuery(".banner-img").each(function(){
			jQuery(this).removeClass('shadow');
		});
		jQuery(this).addClass('shadow');
	});	
</script>
<script>
	if(screen.width > 1025){/*So that it doesnt run on Tab*/
		document.getElementById("CarDropdownMenuDesk").onclick = function () {
				/*location.href = "https://tm.stagingtech.in/car-insurance";*/
				addUTM2URL(location.protocol+"//"+location.hostname+"/car-insurance");
			};
		document.getElementById("BikeDropdownMenuDesk").onclick = function () {
				/*location.href = "https://tm.stagingtech.in/two-wheeler-insurance";*/
				addUTM2URL(location.protocol+"//"+location.hostname+"/two-wheeler-insurance");
			};
		document.getElementById("HealthDropdownMenuDesk").onclick = function () {
				/*location.href = "https://tm.stagingtech.in/health-insurance";*/
				addUTM2URL(location.protocol+"//"+location.hostname+"/health-insurance");
			};
		document.getElementById("LifeDropdownMenuDesk").onclick = function () {
				/*location.href = "https://tm.stagingtech.in/life-insurance";*/
				addUTM2URL(location.protocol+"//"+location.hostname+"/life-insurance");
			};
	}
</script>

		
	
    <!-- endinject:foot -->
    </body>
</html>