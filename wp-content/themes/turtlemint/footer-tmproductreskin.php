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
	</div>
	<!-- .site-info -->
</footer>
<!-- #colophon -->
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
							<a href="/general-insurance-companies-in-india" target="_blank">Non-life insurance partners</a>
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
						<a href="/posp-agreement/">PoSP Agreement</a>
						</li>
						<li>
							<a href="/wp-content/uploads/2022/12/TIB-MGT-7-PDF.pdf" target="_blank">Annual Returns</a>
						</li>
						<li>
							<a target="_blank" href="/wp-content/uploads/2023/01/Grievance-Redressal-Policy.pdf" target="_blank">Grievance Policy</a>
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
								<a href="/posp-agreement/">PoSP Agreement</a>
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
								<a href="/posp-agreement/">PoSP Agreement</a>
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
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
	            slidesToShow: 3,
	            slidesToScroll: 3
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
</script>
<script>
	jQuery('.slider-client').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    autoplay: true,
	    autoplaySpeed: 2000,
	   
	});
	<?php if ( is_page( array( 'life-insurance') )) {?>
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
			<?php } elseif ( is_page( array( 'health-insurance') )) { ?> 			
            <?php } else { ?> 
				jQuery('.mobile-slider').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    autoplay: true,
	    dots: true,
	    prevArrow: false,
	    nextArrow: false,
	});
           <?php } ?>
	/*Slick Dot reduce to 5 */
	/*jQuery(document).ready(function(){
		jQuery("ul.slick-dots>li").hide();
		jQuery("ul.slick-dots li").slice(0,7).show();
	});*/
</script>
<script>
	if(screen.width > 1025){/*So that it doesnt run on Tab*/
		document.getElementById("CarDropdownMenuDesk").onclick = function () {
				/*location.href = location.protocol+"//"+location.hostname+"/car-insurance";*/
				addUTM2URL(location.protocol+"//"+location.hostname+"/car-insurance");
			};
		document.getElementById("BikeDropdownMenuDesk").onclick = function () {
				/*location.href = location.protocol+"//"+location.hostname+"/two-wheeler-insurance";*/
				addUTM2URL(location.protocol+"//"+location.hostname+"/two-wheeler-insurance");
			};
		document.getElementById("HealthDropdownMenuDesk").onclick = function () {
				/*location.href = location.protocol+"//"+location.hostname+"/health-insurance";*/
				addUTM2URL(location.protocol+"//"+location.hostname+"/health-insurance");
			};
		document.getElementById("LifeDropdownMenuDesk").onclick = function () {
				/*location.href = location.protocol+"//"+location.hostname+"/life-insurance";*/
				addUTM2URL(location.protocol+"//"+location.hostname+"/life-insurance");
			};
	}
</script>
<style>
	@media (min-width: 1024px){
		body.home .custom-video-crd h5 {
			min-height: unset;
		}
		body.home .custom-video-crd p{
			min-height: 54px;
		}
		.custom-video-crd p{
		margin-bottom: 0px;
		}
	}
	/*Vertical Form Validation */
	div#errMsg {
		color: red;
		font-family: 'Montserrat-Regular';
		font-size: .9rem;
		padding-left: 5px;
    	padding-top: 0.5rem;
	}
	.contact-input-quote.error{border: 1px solid rgba(255, 59, 48, 0.4);}
	/*Slider fix 20230128*/
	@media (max-width: 786px){
		.customer-row{width: 100% !important;}

	}	
	@media (min-width: 1023px) and (max-width: 1025px){/*Pawan testing iPad Faq overlap */
		body.page-template-page-content-b-revamp .faq-box .panel-title, body.page-template-page-content-a-2-revamp .faq-box .panel-title, body.page-template-page-content-a-revamp .faq-box .panel-title {
			max-width: 95%;/*Health 97, Bike 95 */
		}
	}
	/*Navigation active green */
	.dropbtn.tmactive{color:#007c52;}
	h1{margin-bottom: 0.5rem; margin-top: 0px;}
	button,input{line-height: inherit;}
	/*Slick Dot reduce to 5 */
	ul.slick-dots>li{display: none;}
	ul.slick-dots>li:nth-child(1),ul.slick-dots>li:nth-child(2),ul.slick-dots>li:nth-child(3),ul.slick-dots>li:nth-child(4),ul.slick-dots>li:nth-child(5),ul.slick-dots>li:nth-child(6) { display: inline-block;}
	/*As per HTML to Wordpress track for Product pages */
	.bottom-seo-text ul,.bottom-seo-text li, .faq-section ul, .bottom-seo-text ol ul li, .faq-section li{list-style-type: disc; font-size:14px;}
	.bottom-seo-text ol li{list-style-type: auto;} 
</style>
<!-- endinject:foot -->
</body>
</html>