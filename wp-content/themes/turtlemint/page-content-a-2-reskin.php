<?php
	/**
	  Template Name: Content A 2 ReSkin
	 */
	
	get_header('tmproductreskin');
	?>
<!-- ======= Navbar End ======= -->
<div class="row-2 first-fold-banner">
   <div class="container ">
      <div class="row lg-device">
         <div class="col-lg-6 col-md-6 first-column" style="z-index: 1;">
            <div class="main-banner-txt-new-23">
               <h2 class="main-banner-txt-new-header1" >Affordable Premiums starting at <span  style="color:#009F69">₹887 *</span></h2>
               <!-- just for aligning -->
               <!-- just for aligning -->
               <div class="content justify-content-center">
                  <!--  input  -->
                  <div class="primary-input">
                     <div class="mb-2 ps-4 ps-xl-6">
                        <label for="" class="contact-input-quote">
                        <input  name="regno" maxlength="14" oninput="this.value = this.value.toUpperCase();" id="name-input" type="text" placeholder="Enter Bike Number">
                        <button id="with-regno" type="button" class="btn">
                        <span>Get a Quote</span>
                        </button>
                        </label>
						<div class="errtext pt1" id="errMsg"></div>
                     </div>
                     <p class="text-300 mb-2 ps-4 ps-xl-6 contact-question"><a href="#" id="without-reg-link">Get Quotes Without Bike Number ></a></p>
                  </div>
                  <div class="or">
                     <p>OR</p>
                  </div>
                  <div class="primary-input">
					 <p class="text-300 mb-1 ps-4 ps-xl-6 contact-advisor">Find a Turtlemint Advisor Near You</p>
                     <div class="mb-3 ps-4 ps-xl-6">
					 	<form name="popupadvisorbikeform" id="popupadvisorbikeform" method=get action="/insurance-advisor-near-me/" >
							<label for="pincodeadvisorbike" class="contact-input-adviser vertical-input-label">
								<input type="number" id="pincodeadvisorbike" name="pincode" value="" oninput="this.value = this.value.toUpperCase(); this.setCustomValidity('');" id="name-input" type="text" placeholder="Enter Pin Code" oninvalid="this.setCustomValidity('Please Enter valid Pincode')" max="999999" min="100000" maxlength="6" required required="" onkeypress="if(this.value.length==6) return false;">
								<input type="hidden" id="verticalBike" name="vertical" value="TW">
								<button id="popupadvisorbikeformsubmit" type="submit" class="btn">
									<span>Find Advisor</span>
								</button>
							</label>
							<div class="errtext pt1" id="errMsgPincode"></div>
						</form>
                     </div>
                     <p class="text-300 mb-1 ps-4 ps-xl-6 tm-advisor-usp"><span>2.8 Lakh+</span> Turtlemint advisors</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 slider-column">
            <!-- Home slider -->
            <div class="home-slider-main">
               <div class="slider-home-banner">
                  <div class="">
                     <div class="car-banner">
                        <img alt="Bike Insurance" title="Bike Insurance" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/tm-img/car-bike-insurance.png" class="desktop" width="" height="auto" frameborder="0" />
                        <img alt="Bike Insurance" title="Bike Insurance" src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/tm-img/car-bike-insurance-mob.png" class="mobile" width="" height="auto" frameborder="0" />
                     </div>
                  </div>
               </div>
            </div>
            <!-- Home slider -->	
         </div>
      </div>
   </div>
</div>
<!-- ======= Main Banner End ======= -->

<!-- ======= Become A Turtlemint Advisor End ======= -->
<div class="row-2 video-row">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-6">
				<div class="custom-many-optns">
					<h2>Before you make a decision<br class=".d-none .d-lg-block .d-xl-none">Get a detailed understanding of Bike Insurance</h2>
					<!-- <h4>Get a thorough understanding of the subject by watching these videos</h4> -->
				</div>
			</div>
			<div class="col-md-6 d-lg-none d-sm-block">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="custom-video-crd video-bike-1">
								<a href="#!"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/bike-video-1.webp" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
								<h5>10 Questions to Ask While Buying Motor Insurance</h5>
								<p>Choose the right motor insurance policy by asking these quick questions.</p>
							</div>
						</div>
						<div class="carousel-item">
							<div class="custom-video-crd video-bike-2">
								<a href="#!"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/bike-video-2.png" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
								<h5>Way to Avoid Motor Insurance</br>Claim Rejection</h5>
								<p>Check out the quick tips to avoid motor insurance claim rejection.</p>
							</div>
						</div>
						<div class="carousel-item">
							<div class="custom-video-crd video-bike-3">
								<a href="#!"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/bike-video-3.png" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
								<h5>How to Get Insurance While Buying Second Hand Vehicle</h5>
								<p>Understand the process of availing insurance for a second hand vehicle.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-10 custom-video-crd-desktop offset-md-1 row ">
				<div class="col-md-4">
					<div class="custom-video-crd video-bike-1">
						<a href="#!"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/bike-video-1.webp" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
						<h5>10 Questions to Ask While Buying Motor Insurance</h5>
						<p>Choose the right motor insurance policy by asking these quick questions.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="custom-video-crd video-bike-2">
						<a href="#!"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/bike-video-2.png" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
						<h5>Way to Avoid Motor Insurance<br>Claim Rejection</h5>
						<p>Check out the quick tips to avoid motor insurance claim rejection.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="custom-video-crd video-bike-3">
						<a href="#!"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/bike-video-3.png" class="custom-video-crd-img" width="100%" height="auto" frameborder="0" /></a>
						<h5>How to Get Insurance While Buying Second Hand Vehicle</h5>
						<p>Understand the process of availing insurance for a second hand vehicle.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row-2 knowmore-row">
	<div class="container">
		<div class="row">
			<div class="col-md-12 knowmore-title d-none">
				<h4>To Know More </h4>
			</div>
		</div>
		<div class="row knowmore-btn-row">
			<div class="col-md-3 d-sm-none d-md-block col-lg-1"></div>
			<div class="col-lg-10 text-center">
				<a class="btn-watch-more d-none" target="_blank" href="https://www.youtube.com/c/InsuranceGyan">Watch Videos</a>
				<a class="btn-watch-more d-none" href="/blog/">Read Blog</a>
			</div>
		</div>
	</div>
</div>
<!-- ======= Too Many Options Can Make End ======= -->
<div class="row-2 bg-cream pt-100 pb-100 our-plans">
	<div class="container">
		<div class="section-heading">
			<h2>Bike Insurance plans that suit your needs</h2>
			<div class="">
				<div class="bike-offer justify-content-center row desktop">
					<div class="col-lg-3 col-md-4 item-box">
						<a class="hovere" href="/two-wheeler-insurance/third-party-bike-insurance/">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-offer-icon-1.png">
							<h5>Third-Party Liability</h5>
							<p>Covers damages and losses caused to a third-party</p>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 item-box">
						<a class="hovere" href="/two-wheeler-insurance/comprehensive-bike-insurance/">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-offer-icon-2.png">
							<h5>Comprehensive Bike Cover</h5>
							<p>Covers damages and losses to your Bike as well as to a third party</p>
						</a>
					</div>
				</div>
				<div class="bike-offer mobile-slider d-md-none d-sm-block">
					<div class="item-box">
						<a class="hovere" href="/two-wheeler-insurance/third-party-bike-insurance/">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-offer-icon-1.png">
							<h5>Third-Party Liability</h5>
							<p>Covers damages and losses caused to a third-party</p>
						</a>
					</div>
					<div class="item-box">
						<a class="hovere" href="/two-wheeler-insurance/comprehensive-bike-insurance/">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-offer-icon-1.png">
							<h5>Comprehensive Bike Cover</h5>
							<p>Covers damages and losses to your car as well as to a third party</p>
						</a>
					</div>
				</div>
				<!-- <div class="bike-offer col-md-10 offset-md-1 d-md-none d-sm-block">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					        <ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					
					</ol>
					         <div class="carousel-inner">
					           <div class="carousel-item active">
					            <div class="col-md-4">
					         <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-offer-icon-1.png">
					         <h5>Third-Party Liability</h5>
					         <p>Covers damages and losses caused to a third-party</p>
					       </div>
					           </div>
					           <div class="carousel-item">
					            <div class="col-md-4">
					         <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/car-offer-icon-2.png">
					         <h5>Comprehensive Car Cover</h5>
					         <p>Covers damages and losses to your car as well as to a third party</p>
					       </div>
					           </div>
					          
					         </div>
					       </div>
					</div> -->
			</div>
		</div>
	</div>
</div>
<div class="row-2 blog-cta-section">
	<div class="container">
		<!---->
		<h3 class="custom-become-part">No one knows Bike Insurance like we do.</h3>
		<div class="row partner-row">
			<div class="col-xl-3  col-lg-2 d-lg-block d-none"></div>
			<div class="col-xl-2 col-lg-3 col-md-4">
				<div class="custom-become-content">
					<!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/p1.png" /> -->
					<h3>3.5 Cr +</h3>
					<p>Quote Compared</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-3 col-md-4">
				<div class="custom-become-content">
					<!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/p2.png" /> -->
					<h3>70 Lakh +</h3>
					<p>Policies Bought</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-3 col-md-4">
				<div class="custom-become-content">
					<!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/p3.png" class="img-insurance"/> -->
					<h3>₹ 30 Crore +</h3>
					<p>Claims Processed</p>
				</div>
			</div>
			<div class="col-xl-3 d-lg-block d-none"></div>
		</div>
		<!---->
		<!-- <div class="row">
			<div class="col-sm-8">
			  <p>To stay updated with the latest events and the happeningsin the insurance business visit our
			    blogs
			  </p>
			</div>
			<div class="col-sm-4">
			  <a href="#" class="btn-visit-blog">Visit Our Blog</a>
			</div>
			</div> -->
	</div>
</div>
<div class="row-2">
	<div class="container secondary-banner padd-tb-50">
		<h3 class="custom-become-part">Why Choose Turtlemint?</h3>
		<div class="row partner-row padd-tb-30">
			<div class="col-md-4">
				<div class="custom-become-content">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/whychoose-icon-1.png" />
					<h3>Maximum Insurers</h3>
					<p>Find plans from India's best insurers</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="custom-become-content">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/whychoose-icon-2.png" />
					<h3>Active Claim Support</h3>
					<p>Filing claims has never been this easy!</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="custom-become-content">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/whychoose-icon-3.png"/>
					<h3>Best Recommendations</h3>
					<p>Simple and unbiased advise to help you achieve your goals</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ======= Become Part Of The Everygrowing End ======= -->
<div class="clearfix"></div>
<div class="row-2 customer-about">
	<div class="container">
		<div class="section-heading">
			<h2>Our Customers Love Us</h2>
		</div>
		<div class="customer-row">
			<div class="slider slider-client">
				<div class="customer-content">
					<div class="c-media">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/ashok.png">
					</div>
					<div class="c-caption">
						<span class="c-caption-span-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/quote-icon.png"></span>
						<p>Turtlemint offers some of the best bike insurance plans. I visited Turtlemint and found all the leading insurers’ policies for my bike</p>
						<span>Ashok</span>
					</div>
				</div>
				<div class="customer-content">
					<div class="c-media">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/bitupan.png">
					</div>
					<div class="c-caption">
						<span class="c-caption-span-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/quote-icon.png"></span>
						<p>I was confused about my bike insurance policy but Turtlemint’s experts gave me personalised guidance to find the best policy. Thank you Turtlemint</p>
						<span>Bitupan</span>
					</div>
				</div>
				<div class="customer-content">
					<div class="c-media">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/datta.png">
					</div>
					<div class="c-caption">
						<span class="c-caption-span-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/quote-icon.png"></span>
						<p>Turtlemint gave me multiple payment options for my bike insurance policy. I bought the policy online with minimum hassles. Good job Turtlemint!</p>
						<span>Datta</span>
					</div>
				</div>
				<div class="customer-content">
					<div class="c-media">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/divya.png">
					</div>
					<div class="c-caption">
						<span class="c-caption-span-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/quote-icon.png"></span>
						<p>Turtlemint’s claim assistance was amazing. Turtlemint helped me get the settlement without hassles. Big thanks to the Turtlemint team. </p>
						<span>Divya</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ======= Customers Says ======= -->
<div class="row-2 our-partners">
	<div class="container">
		<div class="section-heading">
			<h2>Our Partners</h2>
			<div class="partner-main">
				<div class="slider slider-nav">
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerAdityaBirla.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerAegonLife.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerBajajallianz.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerDigit.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerEdelweissTokio.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerFutureGenerali.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerHDFCErgo.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerHDFCLIFE.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerHSBCCanara.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerICICILombard.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerICICIPrudentialLife.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerIDBIFederal.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partneriffcotokio.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerLibertyGeneral.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerManipalCigna.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerMaxBupaLife.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerNivaBupa.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerPNB.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerPramerica.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerRelianceGeneral.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerSBIGeneral.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerShriramGeneral.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerStarhealth.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerTATAAIG.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerUnitedIndiaInsurance.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerUniversalSompo.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerEdelweiss.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerTATAAIGLife.png"></div>
					<div><img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerUnitedIndia.png"></div>
				</div>
				<!-- <div class="slider slider-nav d-md-none d-sm-block">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					        <ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">1</li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1">2</li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2">3</li>
					</ol>
					         <div class="carousel-inner">
					           <div class="carousel-item active">
					            <div>
					       <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerPNB.png"/>
					       <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerEdelweiss.png"/>
					       </div>
					           </div>
					           <div class="carousel-item">
					            <div>
					        <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerStarhealth.png"/>
					         
					         <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerPNB.png"/>
					       </div>
					           </div>
					           <div class="carousel-item">
					           <div>
					         <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerEdelweiss.png"/>
					        <img src="<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/partnerStarhealth.png"/>
					         
					       </div>
					           </div>
					         </div>
					       </div>
					</div> -->
			</div>
		</div>
	</div>
</div>
<!-- ======= Partners Logo ======= -->
<div class="row-2 bottom-seo-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="section-heading">
          <h2 class="SEO-content-heading">A Complete guide to two-wheeler insurance plans</h2>
          <div class="SEO-content-text">In India, the Motor Vehicles Act, 1988 governs the traffic rules which every
            vehicle has to follow if it is to run on Indian roads. One such rule specified in the Motor Vehicles Act
            is the requirement of a valid third party insurance cover on every vehicle, whether private or commercial,
            which runs on Indian roads. As such, if you are a vehicle owner, you need to buy a vehicle insurance
            policy on your vehicle to comply with the insurance rules contained in the Motor Vehicles Act, 1988.
          </div>
          <h2 class="SEO-content-heading">What is two-wheeler insurance?</h2>
          <div class="SEO-content-text">A two-wheeler insurance policy is a policy which provides insurance coverage 
            to the bike, as per the provisions of the Motor Vehicles Act, 1988. The policy provides coverage against 
            the accidents caused by the bike or suffered by the bike as per the type of policy selected
          </div>
          <h2 class="SEO-content-heading ">Types of two wheeler insurance plans we offer</h2>
          <div class="SEO-content-text ">
            <ol type="1">
              <li><b>Third-party liability insurance policy</b><br>
                <a class="linkaction" href="https://www.turtlemint.com/two-wheeler-insurance/third-party-bike-insurance/" target="_blank">Third-party liability insurance </a>policy is the mandatory cover which is specified under the Motor 
                Vehicles Act, 1988. This is compulsory to be taken for every bike which is used in India. 
                The policy provides coverage for any damages or injuries caused to other individuals due to the bike.
              </li>
              <li><b>Comprehensive package policy</b><br>
                This policy provides a wider scope of coverage to the bike. It covers the mandatory third-party liability 
                coverage as well as the damages suffered by the bike itself. Comprehensive plans, therefore, have more
                inclusive coverage benefits and are priced higher than third party plans.
              </li>
            </ol>
          </div>
          <h2 class="SEO-content-heading">Why should you compare bike insurance? </h2>
          <div class="SEO-content-text">Buying a vehicle of your own is both a moment of pride and responsibility.
            You would then want to protect your vehicle at all times and in all possible ways. One of the best ways 
            of doing so is buying good insurance for your bike or car. <br><br>
            Bike insurance is an agreement between you and your insurer that protects you, the third party, and your
            bike against any damages caused on the road. As per the Motor Vehicle Act of India, 1988 it is mandatory 
            to have a valid motor insurance policy. <br><br>
            When we are up to buying insurance for our bike we often get confused about which insurer to choose. 
            This is where you should consider comparing <a class="linkaction" href="https://www.turtlemint.com/two-wheeler-insurance/" target="_blank">bike insurance</a> policies to know which one will stand fit 
            for your bike. By comparing different motor insurance policies available in the market you get to know 
            about their claim processes, features and benefits. Moreover, you can compare the premiums and go for 
            he most affordable plan. Once selected you can go for the plan that is the most compatible with your 
            insurance needs.
          </div>
          <h2 class="SEO-content-heading">How to choose a bike insurance policy?</h2>
          <div class="SEO-content-text ">
            After you have understood the importance of a bike insurance policy the 
            next step is to know about the type of motor insurance policy. There are two types of bike insurance 
            policies available in the market. A third party bike insurance is a basic insurance policy that covers 
            the damages caused to a third person due to your bike. While on the other hand, a comprehensive bike 
            insurance plan covers both you and the third party. <br><br>
            However, like any other purchase, you should buy a bike insurance policy only after researching well 
            and comparing your requirements with affordability. Here are some tips that can help you choose the 
            best bike insurance plan:<br>
            <ol type="1">
              <li><b>Understanding Insurance Declared Value (IDV)</b><br>
                Before you select a bike insurance plan for yourself do understand<a class="linkaction" href="https://www.turtlemint.com/two-wheeler-insurance/articles/what-factors-affect-your-bike-insurance-idv/" target="_blank"> your bike's IDV. </a>
                Insurance Declared Value is the current market value of the vehicle and this factor regulates the premium
                of your insurance. 
              </li>
              <li><b>Analysing your requirements</b><br>
                To choose the best policy you should first analyse certain things about your bike and driving. Factors 
                such as if you are a new driver, how often you use your vehicle, your budget and your city of residence 
                should be chalked out carefully.
              </li>
              <li><b>Consider reading online reviews and compare plans online</b><br>
                Go through trusted websites to read online reviews to know more about the best bike insurance policies.
                Moreover, try comparing your insurance plans on the basis of more than one factor. 
              </li>
            </ol>
          </div>
          <h2 class="SEO-content-heading">Key highlights of two-wheeler insurance policy </h2>
          <div class="SEO-content-text">Here are the highlighting features that are offered under a two-wheeler insurance policy:</div>
          <br> 
          <div class="table-responsive">
            <table>
              <thead>
                <tr>
                  <th>Key Features</th>
                  <th>What is covered </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Third-party insurance</td>
                  <td>Covers you in case your vehicle damages another person’s property or hurts him.</td>
                </tr>
                <tr>
                  <td>Personal Accident Cover</td>
                  <td>Offers monetary help in case of death or disability caused due to an accident.</td>
                </tr>
                <tr>
                  <td>Emergency roadside assistance </td>
                  <td>Under this feature, you get 24*7 emergency roadside assistance in case your vehicle breaks down.</td>
                </tr>
                <tr>
                  <td>Own damage cover </td>
                  <td>Offers coverage against damages caused to your bike due to accidents, theft, riots, or disasters.</td>
                </tr>
                <tr>
                  <td>Add-on covers </td>
                  <td>Offers an opportunity to get extended coverage and discounts.it includes No Claim Bonus cover, 
                    engine protection cover, zero depreciation cover, etc.
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <h2 class="SEO-content-heading">Comparison between the third party and comprehensive bike insurance plans</h2>
          <div class="SEO-content-text">Here is how the third party and comprehensive bike insurance policies differ from one another –</div>
          <br>
          <div class="table-responsive">
            <table class="SEO-content-table width591">
              <thead>
                <tr>
                  <th class="width193">
                    <p><strong>Basis of difference</strong></p>
                  </th>
                  <th class="width197">
                    <p><strong>Third-party liability policy</strong></p>
                  </th>
                  <th class="width201">
                    <p><strong>Comprehensive policy</strong></p>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="width193">
                    <p>Coverage</p>
                  </td>
                  <td class="width197">
                    <p>Covers only third party legal liabilities</p>
                  </td>
                  <td class="width201">
                    <p>Covers both third party legal liability and damages suffered by the bike</p>
                  </td>
                </tr>
                <tr>
                  <td class="width193">
                    <p>Need</p>
                  </td>
                  <td class="width197">
                    <p>Mandatory as per law</p>
                  </td>
                  <td class="width201">
                    <p>Not mandatory. You can buy the cover for a wider scope of protection on your bike</p>
                  </td>
                </tr>
                <tr>
                  <td class="width193">
                    <p>Premium rates</p>
                  </td>
                  <td class="width197">
                    <p>Premiums are low and are fixed by the Insurance Regulatory and Development Authority. The premiums are also the same across all insurance companies</p>
                  </td>
                  <td class="width201">
                    <p>The premiums are higher and they are fixed by the insurance company itself. The premium varies across all insurance companies</p>
                  </td>
                </tr>
                <tr>
                  <td class="width193">
                    <p>Coverage limit</p>
                  </td>
                  <td class="width197">
                    <p>Accidental deaths and physical injuries have no coverage limits. They are covered for an infinite amount. Property damage coverage, however, is available for up to INR 7.5 lakhs</p>
                  </td>
                  <td class="width201">
                    <p>The coverage is limited to the Insured Declared Value (IDV) of the bike insurance policy. IDV is the value of the bike after considering depreciation based on the bike’s age</p>
                  </td>
                </tr>
                <tr>
                  <td class="width193">
                    <p>Add-ons</p>
                  </td>
                  <td class="width197">
                    <p>Add-ons are not available</p>
                  </td>
                  <td class="width201">
                    <p>A range of add-ons are available which can be selected at additional premiums</p>
                  </td>
                </tr>
                <tr>
                  <td class="width193">
                    <p>Premium calculation</p>
                  </td>
                  <td class="width197">
                    <p>Premium depends on the engine capacity of the bike</p>
                  </td>
                  <td class="width201">
                    <p>Premium depends on a lot of factors, engine capacity being one of them</p>
                  </td>
                </tr>
                <tr>
                  <td class="width193">
                    <p>No claim bonus</p>
                  </td>
                  <td class="width197">
                    <p>Not applicable</p>
                  </td>
                  <td class="width201">
                    <p>Available if no claims are made in a policy year</p>
                  </td>
                </tr>
                <tr>
                  <td class="width193">
                    <p>Premium discounts</p>
                  </td>
                  <td class="width197">
                    <p>Not applicable</p>
                  </td>
                  <td class="width201">
                    <p>A range of premium discounts are available under the plan</p>
                  </td>
                </tr>
                <tr>
                  <td class="width193">
                    <p>Coverage duration</p>
                  </td>
                  <td class="width197">
                    <p>Can be taken for one year or for a longer duration of 2 or 3 years. For new bikes bought on or after 1<sup>st</sup> September 2018, the coverage duration should be 5 years</p>
                  </td>
                  <td class="width201">
                    <p>Can be taken for one year or for a longer tenure of 2 or 3 years. Even for new bikes bought on or after 1<sup>st</sup> September 2018, long term coverage is not necessary</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- Sub-Section End-->
          <!-- Sub-Section Start-->
          <h2 class="SEO-content-heading">Coverage under bike insurance plans</h2>
          <div class="SEO-content-text">The coverage offered by bike insurance plans depends on the type of policy that you buy. Here are the two types of bike insurance plans and their respective coverage benefits –</div>
          <ol>
            <li>
              <b>Third-party liability plans</b><br>Under third party liability plans, coverage is offered only for third party liabilities which you face when another individual is harmed due to the bike. The policy covers the following types of financial liabilities –
              <ol type="1" style="margin-left:32px;">
                <li>Liability faced when an individual is physically hurt due to the bike</li>
                <li>Liability faced when an individual is killed due to the bike</li>
                <li>Liability faced when an individual’s property is damaged due to the bike</li>
              </ol>
            </li>
            <li>
              <b>Comprehensive plans</b><br>As stated earlier, comprehensive plans allow a wider scope of coverage. They cover third party liabilities and damages suffered by the bike. Here is the scope of cover of comprehensive bike insurance plans –
              <ol type="1" style="margin-left:32px;">
                <li>Liability faced when an individual is physically hurt due to the bike</li>
                <li>Liability faced when an individual is killed due to the bike</li>
                <li>Liability faced when an individual's property is damaged due to the bike</li>
                <li>Financial loss suffered when the bike is damaged due to natural causes like floods, earthquakes, lightning, landslides, cyclones, etc.</li>
                <li>Financial loss suffered when the bike is damaged due to man-made causes like fire, explosion, malicious acts, riots, strikes, etc.</li>
                <li>Financial loss suffered when the bike is stolen</li>
                <li>Financial loss suffered when the bike is damaged when being moved from one place to another through road, rail or air</li>
              </ol>
            </li>
          </ol>
          <div class="SEO-content-text">Besides this coverage available under the respective types of policies, 
            there is also a mandatory personal accident cover which should be taken in either of the bike insurance
            plans. This <a class="linkaction" href="https://www.turtlemint.com/life-insurance/articles/personal-accident-insurance/" target="_blank">personal accident cover</a> has coverage of INR 15 lakhs and it covers accidental deaths and 
            disablements. In the case of disablements, both total and partial permanent disablements are covered. 
            If the owner/driver of the bike suffers accidental death or permanent total disablement, 100% of the 
            coverage value, i.e. INR 15 lakhs is paid as claim. In the `case of permanent partial disablement, however,
            25% to 75% of the coverage value is paid depending on the severity of the disability suffered. 
          </div>
          <!-- Sub-Section End-->
          <!-- Sub-Section Start-->
          <h2 class="SEO-content-heading">Add-ons under bike insurance plans</h2>
          <div class="SEO-content-text">
            Under comprehensive bike insurance plans, there are <a class="linkaction" href="https://www.turtlemint.com/two-wheeler-insurance/articles/know-two-wheeler-insurance-plans-add-ons/" target="_blank">different types of add-ons</a> which are available. 
            These add-ons are additional coverage benefits which can be selected voluntarily by the policyholder 
            by paying an additional premium. Some of the most popular and common add-ons found in bike insurance 
            plans are as follows –
            <ol type="1">
              <li><b>Zero depreciation add-on</b><br>Bikes undergo depreciation as they are used and they age. This depreciation is not covered under bike insurance plans. When a claim occurs, the insurance company deducts the relevant depreciation on different parts of the bike before paying the claim. However, in repairs, you incur the actual cost of the parts being repaired. When the depreciation is deducted, you get a lower claim amount and face out-of-pocket expenses. A zero depreciation add-on, therefore, proves useful. Under this add-on, the depreciation on the parts of the bike is not considered at the time of claim. The insurance company pays the actual costs of repairs irrespective of the depreciation suffered. Thus, your out-of-pocket expenses are reduced.</li>
              <li><b>Roadside assistance add-on</b><br>If your bike faces a breakdown in the middle of the road and it cannot be taken to the nearest garage, a roadside assistance add-on proves useful. This add-on provides you 24*7 support in case of breakdowns. You just have to inform the insurance company and the company sends assistance wherever you are. Assistance is provided for flat tyres, loss of fuel, electrical breakdowns, jump-starting the bike, etc.</li>
              <li><b>NCB protect add-on</b><br>In a bike insurance policy, if you do not make any claim in a policy year, you earn a no claim bonus. This bonus allows you a discount on the renewal premium. Moreover, the bonus increases after every subsequent claim-free year. However, when a claim occurs, the entire no claim bonus is lost. This add-on protects this loss of no claim bonus. It keeps the NCB intact even after you make a claim on your bike insurance policy.</li>
              <li><b>Lost key replacement</b><br>If you lose the keys of your bike, this add-on would cover the cost of replacing the lost key with a new one.</li>
              <li><b>Medical expenses add-on</b><br>Under this add-on, the medical expenses which you face if you are hospitalised following a bike accident are covered.</li>
              <li><b>Personal accident cover for the pillion rider</b><br>A bike insurance policy mandates a personal accident cover only for the owner/driver of the bike. The cover is not available for the pillion rider. However, with this add-on, a personal accident cover can also be taken for the pillion rider.</li>
              <li><b>Consumables cover</b><br>In case of repairs of the bike, the costs incurred on consumables are not covered under the bike insurance policy. These consumables include engine oil, nuts, bolts, screws, lubricants, etc. which are used by the garage in repairing the bike. However, the consumables cover add-ons ensures that the cost of consumables is also covered by the bike insurance policy.</li>
              <li><b>Return to invoice</b><br>When the bike is damaged beyond repairs or if it is stolen, the bike insurance policy pays the Insured Declared Value of the bike which is the market value of the bike after depreciation. However, if this add-on is selected, the claim paid would be equal to the invoice value of the bike.</li>
            </ol>
          </div>
          <!-- Sub-Section End-->
          <!-- Sub-Section Start-->
          <h2 class="SEO-content-heading">Exclusions under bike insurance plans</h2>
          <div class="SEO-content-text">Now that you know the exact coverage options under bike insurance policies, both inbuilt and optional, it is time to know what is not covered by the plan. There are instances which are not covered under bike insurance policies and they are called policy exclusions. These exclusions include the following –</div>
          <ol type="1" style="margin-left:32px;">
            <li>Accidents suffered when the bike is being used without a valid driving license</li>
            <li>Accidents suffered when the bike is being used outside the boundaries of India</li>
            <li>Accidents suffered when the bike is being used under the influence of drugs and/or alcohol</li>
            <li>Accidents suffered when the bike is being used against the limitations of its use</li>
            <li>Accidents suffered when the bike is being used for criminal activities</li>
            <li>Accidents suffered when the bike insurance policy has lapsed</li>
            <li>Depreciation of the bike</li>
            <li>Normal wear and tear of the parts of the bike</li>
            <li>Electrical or mechanical breakdowns</li>
            <li>Damages suffered due to war, mutiny, rebellion, nuclear threats, etc.</li>
            <li>Consequential losses</li>
          </ol>
          <!-- Sub-Section End-->
          <!-- Sub-Section Start-->
          <h2 class="SEO-content-heading">Discounts available under bike insurance plans</h2>
          <div class="SEO-content-text">Under comprehensive bike insurance policies, different types of premium discounts are allowed. These discounts include the following –</div>
          <ol>
            <li><b>No claim bonus discount</b><br>As mentioned earlier, if no claims are made in a policy year, a discount is allowed in the renewal premium and the discount also increases after every subsequent claim-free years. The rate of no claim discount is as follows –</li>
          </ol>
          <div class="table-responsive">
            <table class="SEO-content-table width535">
              <thead>
                <tr>
                  <th class="width257">
                    <p><strong>Claim –free years</strong></p>
                  </th>
                  <th class="width278">
                    <p><strong>No claim bonus rate</strong></p>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="width257">
                    <p>One claim-free year</p>
                  </td>
                  <td class="width278">
                    <p style="text-align:center;">20%</p>
                  </td>
                </tr>
                <tr>
                  <td class="width257">
                    <p>Two successive claim-free years</p>
                  </td>
                  <td class="width278">
                    <p style="text-align:center;">25%</p>
                  </td>
                </tr>
                <tr>
                  <td class="width257">
                    <p>Three successive claim-free years</p>
                  </td>
                  <td class="width278">
                    <p style="text-align:center;">35%</p>
                  </td>
                </tr>
                <tr>
                  <td class="width257">
                    <p>Four successive claim-free years</p>
                  </td>
                  <td class="width278">
                    <p style="text-align:center;">45%</p>
                  </td>
                </tr>
                <tr>
                  <td class="width257">
                    <p>Five successive claim-free years</p>
                  </td>
                  <td class="width278">
                    <p style="text-align:center;">50%</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <br>
          <ol type="1" style="margin-left:32px;">
            <li>There is a discount of 5% or 10% if you buy long term comprehensive policies</li>
            <li>A discount is allowed if you are a member of a reputed automobiles association</li>
            <li>You also get a discount for buying the policy online</li>
            <li>A discount is allowed if the bike is modified for the use of a disabled rider</li>
            <li>If you opt for a voluntary deductible, you can earn a premium discount</li>
          </ol>
          <!-- Sub-Section End-->
          <!-- Sub-Section Start-->
          <h2 class="SEO-content-heading">Important terms related to bike insurance</h2>
          <div class="SEO-content-text">
            A bike insurance policy is a technical cover which includes various jargons which you might not understand. So, here are some important terms related to bike insurance plans which you should know –<br>
            <ol type="1">
              <li><b>Own damage cover and/or premium</b><br>Own damage refers to the damages suffered by the bike. This cover is included under comprehensive policies. Moreover, a separate premium is charged for own damage cover which is called own damage premium.</li>
              <li><b>Compulsory deductible</b><br>Under all bike insurance policies, there is a component of the compulsory deductible. This is the amount of claim which is not paid by the insurance company. You have to pay the compulsory deductible from your pockets and the insurance company would settle any excess claims.</li>
              <li><b>Voluntary deductible</b><br>The concept of voluntary deductible is similar to a compulsory deductible. In case of a claim, the amount of the deductible is to be paid by the policyholder and the insurance company pays the remaining. The only difference is that voluntary deductible is voluntary in nature. You might choose to opt for it and if you do, you get a premium discount. A voluntary deductible would be over and above the compulsory deductible that you have selected.</li>
              <li><b>IDV</b><br>IDV stands for Insured Declared Value. It represents the maximum coverage offered by a comprehensive policy. The value is arrived at by deducting the market value of the bike with depreciation based on the age of the bike. The depreciation rates which are used to calculate IDV are as follows –</li>
            </ol>
            <div class="table-responsive">
              <table class="SEO-content-table width515">
                <thead>
                  <tr>
                    <th class="width338">
                      <p><strong>Age of the bike</strong></p>
                    </th>
                    <th class="width177">
                      <p><strong>Depreciation rate</strong></p>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="width338">
                      <p>Up to 6 months</p>
                    </td>
                    <td class="width177">
                      <p style="text-align:center;">5%</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="width338">
                      <p>More than 6 months but less than 1 year</p>
                    </td>
                    <td class="width177">
                      <p style="text-align:center;">15%</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="width338">
                      <p>More than a year but less than 2 years</p>
                    </td>
                    <td class="width177">
                      <p style="text-align:center;">20%</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="width338">
                      <p>More than 2 years but less than 3 years</p>
                    </td>
                    <td class="width177">
                      <p style="text-align:center;">30%</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="width338">
                      <p>More than 3 years but less than 4 years</p>
                    </td>
                    <td class="width177">
                      <p style="text-align:center;">40%</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="width338">
                      <p>More than 4 years but less than 5 years</p>
                    </td>
                    <td class="width177">
                      <p style="text-align:center;">50%</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- Sub-Section End-->
          <!-- Sub-Section Start-->
          <h2 class="SEO-content-heading">Key benefits of bike insurance plans</h2>
          <div class="SEO-content-text">
            A bike insurance policy offers the following benefits –<br>
            <ol type="1" style="margin-left:32px;" >
              <li>It covers the legal necessity which is prescribed under the Motor Vehicles Act, 1988. Thus, the policy helps you avoid legal complications and fines</li>
              <li>Since the policy covers third party liabilities, you are freed from the financial burden that you face if you cause any type of harm to any individual</li>
              <li>Comprehensive policies also cover the damages suffered by the bike freeing you from the financial expenses of repairs</li>
              <li>If your bike is stolen, a comprehensive policy compensates you for the loss that you suffer so that you can buy another bike</li>
              <li>The add-ons available under comprehensive bike insurance plans help you avail an inclusive scope of coverage and come to your rescue in emergencies</li>
            </ol>
          </div>
          <!-- Sub-Section End-->
          <!-- Sub-Section Start-->
          <h2 class="SEO-content-heading">Top bike insurance policies in India</h2>
          <div class="SEO-content-text">
            Here is a table showing some of the best bike insurance policies in India –<br>
            <div class="table-responsive">
              <table class="SEO-content-table width591">
                <thead>
                  <tr>
                    <th class="width137">
                      <p><strong>Name of the plan</strong></p>
                    </th>
                    <th class="width218">
                      <p><strong>Salient features</strong></p>
                    </th>
                    <th class="width124">
                      <p><strong>Cashless garage network</strong></p>
                    </th>
                    <th class="width112">
                      <p><strong>Motor Incurred Claims Ratio for FY 2020-21</strong></p>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="width137">
                      <p>Magma HDI Two-wheeler Insurance Package Policy</p>
                    </td>
                    <td class="width218">
                      <p>· There is a personal accident add-on which allows personal accident cover for pillion rider</p>
                      <p>· Attractive premium discounts make the premiums affordable</p>
                    </td>
                    <td class="width124">
                      <p>Major garages across India</p>
                    </td>
                    <td class="width112">
                      <p style="text-align:center;">78.91%</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="width137">
                      <p>ICICI Lombard Two-wheeler Insurance Policy</p>
                    </td>
                    <td class="width218">
                      <p>· A range of add-ons make the plan customisable</p>
                      <p>· You can take the plan for various tenures</p>
                    </td>
                    <td class="width124">
                      <p>5600+</p>
                    </td>
                    <td class="width112">
                      <p style="text-align:center;">68.77%</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="width137">
                      <p>New India Two Wheeler Insurance</p>
                    </td>
                    <td class="width218">
                      <p>· There are different types of plans which suit the coverage requirements of all</p>
                      <p>· The policies are competitively priced</p>
                    </td>
                    <td class="width124">
                      <p>Major garages across India</p>
                    </td>
                    <td class="width112">
                      <p style="text-align:center;">78.20%</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="width137">
                      <p>Bajaj Allianz Two Wheeler Insurance</p>
                    </td>
                    <td class="width218">
                      <p>· The company promises to settle its claims at the earliest</p>
                      <p>· There are different types of policies available with the company</p>
                    </td>
                    <td class="width124">
                      <p>4000+</p>
                    </td>
                    <td class="width112">
                      <p style="text-align:center;">68.06%</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="width137">
                      <p>Go Digit Two Wheeler Insurance</p>
                    </td>
                    <td class="width218">
                      <p>· You can get up to 50R% discount by not making claims under the plan</p>
                      <p>· There are five optional covers for a wider scope of coverage</p>
                    </td>
                    <td class="width124">
                      <p>2900+</p>
                    </td>
                    <td class="width112">
                      <p style="text-align:center;">74.91%</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <br>
            <p class="notetext"><I>*Claim Settlement Ratio is CSR is the total claims paid by the insurance company as against the total 
              number of claims received in any given year.</I>
            </p>
            <p class="notetext"><I>**Incurred Claim Ratio or ICR is the total claims paid by the insurance company as against the total 
              premium collected across all policies in any given year.</I>
            </p>
            <p class="notetext"><I>***Motor Incurred Claim Ratio is the total motor claims paid by the insurance company as against the 
              total premium collected across all motor policies in any given year.</I>
            </p>
          </div>
          <!-- Sub-Section End-->
          <!-- Sub-Section Start-->
          <h2 class="SEO-content-heading">How are bike insurance premiums calculated?</h2>
          <div class="SEO-content-text">Calculation of bike insurance premiums is done based on a lot of factors which are as follows –</div>
          <ul style="margin-left:32px;">
            <li><strong>Age of the bike</strong> – the older the bike is, the lower would be the premium</li>
            <li><strong>Make, model and variant</strong> – this determines the value of the bike and the higher the value the higher would be the premium</li>
            <li><strong>Registration location</strong> – premiums are higher for bikes registered in metro cities than non-metro ones</li>
            <li><strong>Add-ons selected</strong> – if add-ons are selected, the premium would increase as each add-on comes with an additional premium</li>
            <li><strong>Type of policy</strong> – third party plans would have lower premiums compared to comprehensive policies</li>
            <li><strong>Discounts available</strong> – if there are discounts applied to the bike, such discounts would be considered to reduce the premium</li>
            <li><strong>Term of the policy</strong> – long term bike insurance plans have higher premiums than annual policies</li>
            <li><strong>IDV selected </strong>– the higher the IDV, the higher would be the premium</li>
          </ul>
          <!-- Sub-Section End-->
          <!-- Sub-Section Start-->
          <h2 class="SEO-content-heading">How to make a claim in bike insurance plans?</h2>
          <div class="SEO-content-text">
            A <a class="linkaction" href="https://www.turtlemint.com/two-wheeler-insurance/bike-insurance-claims/" target="_blank">claim in a bike insurance</a> policy occurs in case of third party liabilities, if your bike is damaged or if the bike is stolen. In case of any of these claims, the following steps should be followed –<br>
            <ol type="1" style="margin-left:32px;">
              <li>Inform the insurance company immediately of your claim</li>
              <li>The insurance company would then advise you to take your bike to the nearest preferred garage for cashless repairs. If you get your bike repaired at a non-networked garage, claims would be settled on a reimbursement basis</li>
              <li>At the garage, the insurance company’s surveyor would come and check the extent of damages suffered by the bike</li>
              <li>The surveyor would prepare a claim report and submit it to the insurance company</li>
              <li>The company would assess the report and approve cashless repairs</li>
              <li>Once the approval is received, the garage starts repairing the bike</li>
              <li>When the repairs are completed, the insurance company settles the claims directly with the garage and you can take delivery of your bike</li>
              <li>In the case of third party claims, a police FIR should be filed. The claim would then be taken to the motor accidents tribunal where the liability would be judged. Based on the judgement of the tribunal, the insurance company would pay the claim to the third party</li>
              <li>If the bike is stolen, a police FIR should be filed. If the police are unable to locate your bike, they would issue a certificate stating the same. The certificate should be submitted to the insurance company based on which the company would pay the claim</li>
            </ol>
          </div>
          <div class="SEO-content-text">If you have bought your bike insurance policy from Turtlemint, you can simply 
            inform Turtlemint for the settlement of your claim. Turtlemint would take the above-mentioned steps to ensure 
            that your bike insurance claims are settled at the earliest. You can inform Turtlemint by calling at 1800 266
            0101 or by sending an email at claims@turtlemint.com.
          </div>
          <!-- Sub-Section End-->
          <h2 class="SEO-content-heading">How to calculate bike insurance premium? </h2>
          <div class="SEO-content-text">
            Once you read about all the features of a bike insurance plan you get closer 
            to choosing the best-suited plan for yourself. However, it is very important that the insurance plan you 
            choose fits in your budget, and for this, you must understand the premiums you are going to be charged.<br><br>
            Your bike insurance premium is calculated on a number of factors. Some of them include your residence 
            city, add-on coverages, your bike’s brand, your bike’s model, cubic capacity of the bike, IDV, owner’s 
            age, no claim bonus, and other factors. Apart from this your driving history also plays an important 
            role in deciding your bike insurance premium. <br><br>
            Many websites have bike insurance premium calculators that are very easy to use and come free of cost. 
            This is how you can use an online bike insurance premium calculator to estimate your premiums:
            <ol type="1" style="margin-left:32px;">
              <li>Fill in the details of your two-wheeler such as model, variant, etc</li>
              <li>Enter the city of registration, registration details, and purchase year of the bike</li>
              <li>Submit these details and on the next page, you will find your bike’s Insurance Declared 
                Value and premium quotes displayed.
              </li>
            </ol>
          </div>
          <!-- Sub-Section Start-->
          <h2 class="SEO-content-heading">Documents required for bike insurance claims</h2>
          <div class="SEO-content-text">
            Here are the documents which should be submitted to get the settlement of your bike insurance claim –<br>
            <ul style="margin-left:32px;">
              <li>Claim form</li>
              <li>Policy bond</li>
              <li>Driving license</li>
              <li>RC Book of the bike</li>
              <li>Identity proof of the claimant</li>
              <li>PUC certificate of the bike</li>
              <li>Police FIR for theft and third party claims</li>
            </ul>
          </div>
          <!-- Sub-Section End-->
          <!-- Sub-Section Start-->
          <h2 class="SEO-content-heading">How to buy bike insurance plans?</h2>
          <div class="SEO-content-text">You can buy the best bike insurance plan from Turtlemint. Turtlemint is an online platform which is tied up with some of the leading bike insurance providers in India. When you choose Turtlemint you can compare the different bike insurance policies available in the market in terms of their coverage and premiums. You can, then, select the best bike insurance policy, pay the premium and the policy would be issued instantly. Turtlemint also offers you personalised assistance in buying the best bike insurance policy for your bike.</div>
          <!-- Sub-Section End-->
          <!-- Sub-Section Start-->
          <h2 class="SEO-content-heading">Why should you renew an expired two-wheeler insurance policy now? </h2>
          <div class="SEO-content-text">
            We know how important it is to have a valid bike insurance policy to stay 
            away from legal allegations. However, it's not just the matter of staying true to the law. Valid bike 
            insurance will keep you protected at all times provided you meet with an accident or any other dangerous 
            incident. Moreover, driving a two-wheeler is riskier than other vehicles and therefore chances of accidents
            are high. In such cases an active two-wheeler insurance policy will provide financial support and 
            therefore renewing your policy from time to time is important to keep your vehicle away from risk.<br><br>
            Tips to keep in mind while renewing your bike insurance policy:<br>
            <ol type="1" style="margin-left:32px;">
              <li>Avoid renewing your bike insurance at the end time as it may cost you a higher amount than 
                usual. Renewing your policy at the right time will help you avail of discounts and offers.
              </li>
              <li>If you were good with your prevailing policy and have made fewer claims then you may have
                accumulated No claim bonus points. You can use these bonus points to get an extra discount over your 
                renewal premium. Moreover, if you are switching your insurer then you can get your NCB transferred to 
                the new company.
              </li>
              <li>Do not forget to compare bike insurance policies on Turtlemint to find the best plan as per 
                your requirements and budget.
              </li>
              <li>You can go for a policy with higher coverage at the time of renewal.</li>
            </ol>
          </div>
          <!-- Sub-Section End-->
          <!-- Sub-Section Start-->
          <h2 class="SEO-content-heading">How to renew bike insurance plans?</h2>
          <div class="SEO-content-text">Since a bike insurance policy is mandatory by law, you have to renew the policy regularly to ensure uninterrupted coverage. Renewals of bike insurance policies can also be done online. You just have to visit the website of the insurance company from which you bought the policy, provide the policy number of your existing policy, pay the renewal premium and the policy would be renewed instantly. 
            <br>
            If, on the other hand, you have bought the policy from Turtlemint, you can log into your online Turtlemint account and renew the policy directly by paying the renewal premium. Moreover, if you have a bike insurance policy of another company and you want to switch, you can compare the available policies on Turtlemint’s website, compare and then buy a new policy at the time of renewals
          </div>
          <!-- Sub-Section Start-->
          <h2 class="SEO-content-heading">Benefits of two-wheeler insurance renewal online </h2>
          <div class="SEO-content-text">
            There are a lot of reasons why you could miss out on the timely renewal of
            your bike insurance policy. However, some people intentionally miss out on the timely renewal of their 
            insurance to avoid hectic procedures, payment of premiums, or any other reason. But while they easily 
            miss out on their renewal dates, they do not think of the consequences that may occur afterwards. <br><br>
            Today online renewal of bike insurance can be done in minutes and this is a boon for people who 
            are super busy with their lives. Here are the following benefits of online renewal of insurance:<br>
            <ol type="1" style="margin-left:32px;">
              <li>You can compare different bike insurance plans that are offered by various insurance 
                companies and find out the best one for yourself and all this can be done in a few clicks.
              </li>
              <li>You surpass the hassles of dealing with the middlemen as you interact directly with the company’s 
                official website.
              </li>
              <li>You save time and energy when you renew your bike insurance online.</li>
              <li>Premium payment is done over secured channels and you get instant notification of the
                transaction.
              </li>
              <li>Less paperwork and documentation are needed when you go for the online renewal of your insurance policy.
              </li>
            </ol>
          </div>
          <!-- Sub-Section End-->
          <h2 class="SEO-content-heading">Why should you buy comprehensive two-wheeler insurance? </h2>
          <div class="SEO-content-text">Comprehensive two-wheeler insurance is an all-in-one policy that offers
            full coverage against any damages caused to you, your bike, or a third party. A comprehensive plan covers
            third-party liabilities in case you hurt them or damage their property. Apart from this, you get covered 
            against fire, theft, natural disasters, or any such incidents. With a comprehensive plan, you also get 
            covered in case of a medical emergency caused due to accidents.<br><br>
            Though a comprehensive two-wheeler insurance plan includes a lot of benefits, you can add extra features 
            to your plan by choosing relevant add-on covers. Zero depreciation cover, emergency roadside assistance,
            no claim bonus protection, and engine protection are some of the popular add-on covers available under 
            a bike insurance policy. One should consider buying comprehensive two-wheeler insurance over a basic 
            third-party liability plan as it gives you the extended protection required for your bike. Although 
            the cost of a comprehensive plan is a bit higher than that of a third-party liability plan, it proves
            to be worth it when anything goes wrong.
          </div>
          <h2 class="SEO-content-heading">How to compare bike insurance quotes online at turtlemint? </h2>
          <div class="SEO-content-text">The best part about buying bike insurance online is that you can compare
            different types of plans from all the companies to find a perfect one for yourself. Turtlemint is a
            website that is linked with the best insurance-providing companies available in the market and thus 
            brings you plans that suit you the best.<br><br>
            Comparing bike insurance plans at Turtlemint is the easiest thing you can do online.  You can start by 
            visiting the website of Turtlemint and entering all the details you are asked for. Once you do so,
            Turtlemint will automatically show all the best bike insurance plans as per your preferences, if any. 
            The website compares plans on a number of factors that help you understand the plan in a better way. 
            There are tables, charts, and reviews about which company is good at claim settlement or which is the 
            best with discounts.<br><br>
            This way you can analyse plans as per your requirements and budget and choose what suits you. Once you 
            make up your mind, you can apply for your bike insurance quickly and avail of it in no time. 
          </div>
          <br><br>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ======= Faqs ======= -->
<div class="row-2 faq-section">
	<div class="container">
		<div class="section-heading">
			<h2>All you need to know about two-wheeler insurance in India</h2>
		</div>
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="faq-box">
					<div class="faq-top-title">
						<h4>Basics of two-wheeler insurance in India</h4>
						<!-- <span>New user? Let"s get started with these basics.</span> -->
					</div>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading1">
								<h4 class="panel-title"> <a data-toggle="collapse" data-target="#collapse1" href="#collapse1" aria-expanded="true" aria-controls="collapse1"> What is two wheeler insurance? </a> </h4>
							</div>
							<div id="collapse1" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="heading1" data-parent="#accordion">
								<div class="panel-body">
									<p class="paragraph-text">Bike Insurance not only provides financial protection to the bike but also provides cover for injuries to driver, passengers or pedestrians, and their property. It pays for damages to your bike due to accidents, vandalism, theft, fire, man-made/natural disasters, and third party liability. Considering the exorbitant repair costs these days even a minor damage can cost a fortune. The Motor Vehicles Act also requires every vehicle on the road to at least have a valid third party liability cover, i.e. cover that pays for bodily injury, loss of life and damage to property of a third person that was caused by an accident with your bike.. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" href="#collapseTwo"
										aria-expanded="false" aria-controls="collapseTwo">
									What is covered under two wheeler insurance? 
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
								aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<ul class="list-style mtop0">
										<li class="li paragraph-text">Financial liability faced in case of injury or death of a third party</li>
										<li class="li paragraph-text">Financial liability faced when a third party property is damaged</li>
										<li class="li paragraph-text">Personal accident coverage for the owner or driver of the two-wheeler against accidental deaths and permanent disablements</li>
										<li class="li paragraph-text">Loss or damage of the two-wheeler due to man-made calamities like fire, theft, burglary, collision, malicious acts, etc.</li>
										<li class="li paragraph-text">Loss or damage of the two-wheeler due to natural calamities like earthquakes, floods, storms, etc.</li>
										<li class="li paragraph-text">Loss suffered when the two-wheeler is in transit by road, rail, air or water</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target="#collapseThree"
										href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									What"s not covered under two Wheeler insurance?
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
								aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<ul class="list-style mtop0">
										<li class="li paragraph-text">Normal wear and tear and general ageing of the insured vehicle</li>
										<li class="li paragraph-text">Vehicle used otherwise than limitations as to use</li>
										<li class="li paragraph-text">Mechanical or electrical breakdown</li>
										<li class="li paragraph-text">Damage to vehicle by war, mutiny or nuclear attacks.</li>
										<li class="li paragraph-text">Damage by a person driving the vehicle under the influence of drugs or liquor or with in invalid license</li>
										<li class="li paragraph-text">Loss of the vehicle or damage that can be sufficiently proven to be deliberate or consequential</li>
										<li class="li paragraph-text">Loss suffered in the course of criminal activities</li>
										<li class="li paragraph-text">Loss suffered outside the geographical boundaries of the country</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target="#collapseFour"
										href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									What are the add-ons available?
									</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
								aria-labelledby="headingFour" data-parent="#accordion">
								<div class="panel-body">
									<p class="paragraph-text">A basic comprehensive bike insurance includes damage to your bike, loss and theft of vehicle as well as third party cover. However, at additional cost in the insurance premium, the bike owners can avail some extraordinary coverage options. The popular add-ons are: </p>
									<ul class="list-style">
										<li class="li paragraph-text">
											<b>Roadside assistance</b> 
											<p class="paragraph-text paragraph-style">Under this add-on, round-the-clock assistance is promised by the insurance company if the bike breaks down in the middle of the road and needs towing assistance. </p>
										</li>
										<li class="li paragraph-text">
											<b>Zero depreciation</b> 
											<p class="paragraph-text paragraph-style">Under this cover the cost of depreciation on the parts of the bike is not deducted from the claim amount. In case of claim, the full cost of the parts is paid without deducting depreciation. </p>
											<p class="paragraph-text paragraph-style">The depreciation rates which are applicable on the different parts of the bike include the following –</p>
											<table class="table table-insurer">
												<tr>
													<td> Nylon parts, plastic parts, rubber parts and battery of the bike </td>
													<td class="text-center">50%</td>
												</tr>
												<tr>
													<td> For all the components made of fiberglass </td>
													<td class="text-center">30%</td>
												</tr>
												<tr>
													<td> Parts made of glass like windshield, etc. </td>
													<td class="text-center">NIL</td>
												</tr>
											</table>
											<p class="paragraph-text paragraph-style">For the rest of the bike’s parts depreciation is based on age of the bike. It is as follows</p>
											<table class="table table-insurer">
												<thead>
													<tr class="table-header-bg-color">
														<th>Age of Vehicle</th>
														<th style="text-align: center;">% of Depreciation</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Age below 6 months</td>
														<td class="text-center">NIL</td>
													</tr>
													<tr>
														<td>Age more than 6 months but less than a year</td>
														<td class="text-center">5%</td>
													</tr>
													<tr>
														<td>Age more than a year but less than 2 years </td>
														<td class="text-center">10%</td>
													</tr>
													<tr>
														<td>Age more than 2 years but less than 3 years </td>
														<td class="text-center">15%</td>
													</tr>
													<tr>
														<td>Age more than 3 years but less than 4 years </td>
														<td class="text-center">25%</td>
													</tr>
													<tr>
														<td>Age more than 4 years but less than 5 years</td>
														<td class="text-center">35%</td>
													</tr>
													<tr>
														<td>Age more than 5 years but less than 10 years</td>
														<td class="text-center">40%</td>
													</tr>
													<tr>
														<td>Age more than 10 years</td>
														<td class="text-center">50%</td>
													</tr>
												</tbody>
											</table>
											<p class="paragraph-text paragraph-style">Also, for the depreciation in the Insured Declared Value of the vehicle, the following rates are applicable</p>
											<table class="table table-insurer">
												<thead>
													<tr class="table-header-bg-color">
														<th>Age of The Vehicle</th>
														<th>% Of Depreciation For Fixing IDV of The Vehicle</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Age below 6 months</td>
														<td class="text-center">5%</td>
													</tr>
													<tr>
														<td>Age more than 6 months but less than a year</td>
														<td class="text-center">15%</td>
													</tr>
													<tr>
														<td>Age more than a year but less than 2 years</td>
														<td class="text-center">20%</td>
													</tr>
													<tr>
														<td>Age more than 2 years but less than 3 years</td>
														<td class="text-center">30%</td>
													</tr>
													<tr>
														<td>Age more than 3 years but less than 4 years</td>
														<td class="text-center">40%</td>
													</tr>
													<tr>
														<td>Age more than 4 years but less than 5 years </td>
														<td class="text-center">50%</td>
													</tr>
												</tbody>
											</table>
										</li>
										<li>
											<b>NCB protect</b> 
											<p>If this add-on is selected, the accumulated no claim bonus of the plan is not exhausted even when a claim is made. This add-on, therefore, protects the no claim bonus of the two wheeler insurance plan. </p>
										</li>
										<li>
											<b>Consumables cover</b> 
											<p>The add-on covers the cost of consumables which are used in repairs of the bike. Consumables include engine oil, lubricants, etc. </p>
										</li>
										<li>
											<b>Personal accident cover for pillion rider</b> 
											<p>The add-on provides personal accident cover for the pillion rider. A lump sum benefit is paid if the rider dies or becomes permanently disabled due to an accident. </p>
										</li>
										<li>
											<b>Return to invoice</b> 
											<p>This add-on pays the invoice value of the two-wheeler rather than the Insured Declared Value if the two-wheeler is lost, stolen or is damaged beyond repairs. </p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFive">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target="#collapseFive" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									What"s a no claims bonus (NCB)? 
									</a>
								</h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
								aria-labelledby="headingFive" data-parent="#accordion">
								<div class="panel-body">
									<p class="paragraph-text">No claim bonus is the discount in the premium charged to the policy holder when no claim has been made during the policy term. It keeps increasing from 20% up to 50%, for every claim free year. Your NCB is applicable even if you change your insurer, or buy a new bike. It’s a great incentive to reward safe rider. If you make a claim, you will lose your entire NCB in next policy term. Your NCB will be mentioned on your policy. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingSix">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target="#collapseSix" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									What is Multi-Year Two-Wheeler Insurance? What are the benefits? 
									</a>
								</h4>
							</div>
							<div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
								aria-labelledby="headingSix" data-parent="#accordion">
								<div class="panel-body">
									<p class="paragraph-text">If you miss out on your renewals every year and find it difficult to keep a track, multi- year policy can solve this problem. Now you can buy insurance policy not just for one year, but for a period of two to three years. Not only you will get saved from missing the renewals unknowingly, but also you can save on premium. The premium amount of a multi- year policy is lower as compared to an individual policy because you get saved from the hike of third- party premium which happens every year as well service tax. </p>
									<p class="paragraph-text paragraph-style"> In-case your policy gets lapsed, the process is quite troublesome. A new IDV is declared, a new premium is fixed, and then two wheeler inspection is done which is time consuming. So, multi- year policy also removes the risk of lapsed policy. </p>
									<p class="paragraph-text paragraph-style"> The NCB rewarded to the policyholder is in the form of discount on the premium for a claim free year. Even a minor claim in a year can snatch away your benefits of NCB. The NCB discount given in a multi-year insurance policy is higher than the regular 1 year policy which allows you to have more discounts on your premium amount, thereby saving you money. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingSeven">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target="#collapseSeven" href="#collapseSeven"
										aria-expanded="false" aria-controls="collapseSeven">
									Why buy two-wheeler insurance plans? 
									</a>
								</h4>
							</div>
							<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion"
								aria-labelledby="headingSeven">
								<div class="panel-body">
									<p class="paragraph-text">As stated earlier, a two-wheeler insurance policy is mandatory by law. This mandate necessitates a two-wheeler plan. Other reasons why two-wheeler insurance plans are needed are as follows – </p>
									<ul class="list-style">
										<li class="li paragraph-text"> In case of any accident, if you injure any individual or cause someone’s death, you are liable to pay for the financial damages caused. This is called your financial liability. The liability is unlimited in case of death of the third party. Such huge financial liabilities prove to be a strain on average individuals. A motor insurance policy takes off this burden and pays for the liability. </li>
										<li class="li paragraph-text"> Even in case of damage of own vehicle, a comprehensive policy pays for the repair costs. This coverage is also financially rewarding as repair costs might be unaffordable in some cases.</li>
										<li class="li paragraph-text">If caught without a valid insurance plan, you face legal consequences which might also include imprisonment. </li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingEight">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target="#collapseEight" href="#collapseEight"
										aria-expanded="false" aria-controls="collapseEight">
									How do I choose the right policy? 
									</a>
								</h4>
							</div>
							<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion"
								aria-labelledby="headingEight">
								<div class="panel-body">
									<p class="paragraph-text">First and foremost, never look at just one or two bike insurance companies; always get and compare at least three quotes. Look for companies that offer discounts and good-driver rewards programs. </p>
									<p class="paragraph-text paragraph-style">Choose a company that has a good and fast claim settlement ratio and record. Talk with family members and friends about their bike insurance providers and experience. Check their social media accounts.</p>
									<p class="paragraph-text paragraph-style">Pick the right Insured Declared Value (IDV) of your bike. Seek additional covers based on your risk profile. Multi-year policies, if available, are good way to ensure long term cover. </p>
									<p class="paragraph-text paragraph-style">Ideally pick company that has a cashless tie-up with the widest network of service stations that you may visit in case of an accident.</p>
									<p class="paragraph-text paragraph-style">Turtlemint helps you with all of the above decisions. In addition, we offer free claims support all our customers. So, give us a try right now! </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingNine">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target="#collapseNine" href="#collapseNine"
										aria-expanded="false" aria-controls="collapseNine">
									How do I know if Turtlemint has the best rates? 
									</a>
								</h4>
							</div>
							<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion"
								aria-labelledby="headingNine">
								<div class="panel-body">
									<p class="paragraph-text">Our insurance partners have provided us the best possible insurance rates. We pass on the highest possible discounts to you always! It unlikely you will find a better rate elsewhere. If you find let us know. We are ready for the challenge! </p>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="faq-top-title">
						<h4>How to save money on two-wheeler insurance</h4>
						<!-- <span>New user? Let"s get started with these basics.</span> -->
					</div>
					<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="false">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTen">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseTen" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen"> How can I keep my premiums low? </a> </h4>
							</div>
							<div id="collapseTen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion1" aria-labelledby="headingTen">
								<div class="panel-body">
									<p class="paragraph-text">Avoid making claims for small expenses because this will cause you to lose your no claim bonus benefit </p>
									<p class="paragraph-text paragraph-style">Employ safety features like anti- theft devices. You may get a discount of minimum 5% on your premium, if you inform the insurance company that you have installed an anti-theft device. </p>
									<p class="paragraph-text paragraph-style">Choose higher deductibles. (Note: this increases your expense on each claim)</p>
									<p class="paragraph-text paragraph-style">The policyholder can avail discounts based on various categories which are declared by the insurance company like the policyholder’s age, profession, driving history, AAI membership, etc. See if you qualify for these. </p>
									<p class="paragraph-text paragraph-style">Most important compare premiums before buy. With Turtlemint you can compare premiums across all the top insurers and get the best rates. Our customers have saved up to 60% doing this.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingEleven">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-target="#collapseEleven" href="#collapseEleven"
										aria-expanded="false" aria-controls="collapseEleven">
									How is the premium for two-wheeler insurance plans calculated? 
									</a>
								</h4>
							</div>
							<div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion1"
								aria-labelledby="headingEleven">
								<div class="panel-body">
									<p class="paragraph-text">Calculation of premiums of two-wheeler insurance plans depends on a lot of factors. These factors and their impact on the premium are discussed below – </p>
									<ul class="list-style">
										<li class="li paragraph-text">The type of policy being bought. The premium depends on the type of policy selected. Third party premiums have the lowest rate while comprehensive plan premiums tend to be on the higher side because of the coverage the plan provides. </li>
										<li class="li paragraph-text">The make, model and variant of the bike which determines its cost. The higher the cost of the bike the higher would be the premium charged. </li>
										<li class="li paragraph-text">The age of the bike that affects the Insured Declared Value. The older the bike the lower would be the IDV and , consequently, the premium charged </li>
										<li class="li paragraph-text"> Term of the policy. Long term plans allow premium discounts which lower the premium calculated</li>
										<li class="li paragraph-text">Accumulated no claim bonus in an existing policy. The no claim bonus also reduces the premium</li>
										<li class="li paragraph-text">Other discounts available. There are different discounts available in two-wheeler insurance plans. These discounts lower the premium rate. </li>
										<li class="li paragraph-text">Registration location. Location of the bike also affects premium calculation. Premiums are higher in metro cities than non-metro cities. </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="faq-top-title">
						<h4>How to make claim under two wheeler insurance plans  </h4>
						<!-- <span>New user? Let"s get started with these basics.</span> -->
					</div>
					<div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="false">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThirteen">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseThirteen" href="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen"> 
									How do I make a claim if my bike is vandalized or damaged due to an accident </br> or natural calamity? 
									</a> 
								</h4>
							</div>
							<div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion4" aria-labelledby="headingThirteen">
								<div class="panel-body">
									<p class="paragraph-text">In the event of an own damage claim, that is, where your own vehicle is damaged due to an accident, vandalism or natural calamity, you must immediately inform insurance company and police, wherever required. </p>
									<p class="paragraph-text paragraph-style">Insurance company will depute a surveyor to assess the loss, and bike will be towed, if required, to a workshop.</p>
									<p class="paragraph-text paragraph-style">If your policy provides for cashless service, which means you do not have to pay out of your pocket for covered damages, the insurance company will pay the workshop directly. You will need to pay your share of the claim – deductibles, etc – as informed by the insurer. As a Turtlemint customer, you can simply call us to report a claim or any issue with payment, and we will take care of the rest! </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFourteen">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseFourteen" href="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen"> 
									How much will I get paid for a bike damage claim? 
									</a> 
								</h4>
							</div>
							<div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion4" aria-labelledby="headingFourteen">
								<div class="panel-body">
									<p class="paragraph-text">Once your claim is accepted, you will be paid the approved claim amount minus certain deductions which you will have to pay out from your pocket: </p>
									<p class="paragraph-text paragraph-style">Standard or Voluntary Deductible: this is a fixed amount that you have to bear before the policy comes into force. </p>
									<p class="paragraph-text paragraph-style">Depreciation: Standard insurance pays for the actual cash value of your damaged or destroyed vehicle part. However, since the part was already in use, its value will be less than or depreciated in comparison to a new replacement part. This will be 30% for fibre components and 50% for plastics and rubber. If you do not want to bear the depreciation cost, you can buy zero depreciation add-on which is available typically for bikes not older than 3 years. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFifteen">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen" href="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen"> 
									How do I make a claim if my bike is stolen and how much compensation will I get?
									</a> 
								</h4>
							</div>
							<div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion4" aria-labelledby="headingFifteen">
								<div class="panel-body">
									<p class="paragraph-text">If your vehicle is stolen, police and the insurance company must be informed immediately. In addition you must keep the transport department also informed. To make a claim, the vehicle needs to be covered under the comprehensive insurance policy. </p>
									<p class="paragraph-text paragraph-style">You will need to submit the police First Information Report (FIR), letter intimating RTO along with requisite claim form duly filled in, to the insurance company. Your claim will be paid after police give the final “non-traceable” report.</p>
									<p class="paragraph-text paragraph-style">The amount you will receive for a theft claim is the Insured Declared Value (IDV) mentioned in the policy. You will need to sign the RC in favour of the insurance company and complete other handover formalities. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingSixteen">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen" href="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen"> 
									What is a third party claim and how is it processed? 
									</a> 
								</h4>
							</div>
							<div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion4" aria-labelledby="headingSixteen">
								<div class="panel-body">
									<p class="paragraph-text">A third party claim, is where your vehicle was involved, in causing bodily injury, death or damage to property. It is important to ensure that the accident is reported immediately to the police as well as to the insurance company. On the other hand, if you are a victim, that is, if somebody else’s vehicle was involved, you must obtain the insurance details of that vehicle and make an intimation to the insurer of that vehicle. </p>
									<p class="paragraph-text paragraph-style">The limit for property damage liability is capped at Rs. 7.5 lakhs. Any amount above this will have to be borne by the policyholder. There is no limit for bodily injury or death claim. The amount of liability is decided by a special court, the Motor Accident Claims Tribunal, based on factors such expenses for medical treatment of the injured, and loss of income in case of death. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingSeventeen">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen" href="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen"> 
									How does Turtlemint help with a claim? 
									</a> 
								</h4>
							</div>
							<div id="collapseSeventeen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion4" aria-labelledby="headingSeventeen">
								<div class="panel-body">
									<p class="paragraph-text">It’s simple, just call us on our toll-free number about a claim you want to report, dispute or discuss. Our expert claims team will help you through the entire process. Our team will also work with the insurance companies directly to advance your case, and proactively inform you about the progress. </p>
									<p class="paragraph-text paragraph-style">With our experience of having processed thousands of cases successfully, you can rest assured that you will get the best service and outcome. </p>
									<p class="paragraph-text paragraph-style">You can also visit the link <a href="/raise-claim" target="_blank">https://www.turtlemint.com/raise-claim</a> and raise a claim with Turtlemint easily. </p>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="faq-top-title">
						<h4>Other FAQs</h4>
						<!-- <span>New user? Let"s get started with these basics.</span> -->
					</div>
					<div class="panel-group" id="accordion5" role="tablist" aria-multiselectable="false">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingEighteen">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="true" aria-controls="collapseEighteen" href="#collapseEighteen" aria-expanded="true" aria-controls="collapseEighteen">
									What are Long term two wheeler insurance plans? 
									</a> 
								</h4>
							</div>
							<div id="collapseEighteen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingEighteen">
								<div class="panel-body">
									<p class="paragraph-text">There is no limit to the number of Two wheeler insurance plans are also offered for longer durations. These policies are called long term policies. In fact, IRDAI, i.e. the Insurance Regulatory and Development Authority India has made long term two-wheeler insurance plans compulsory for new bikes which have been bought on or after 1st September, 2018. </p>
									<p class="paragraph-text paragraph-style">As per the latest Supreme Court ruling, 
									<ul class="list-style">
										<li class="li paragraph-text">All new two-wheelers should have a 5-year Third Party Motor Insurance cover </li>
										<li class="li paragraph-text">All new cars should have a 3-year Third Party Motor Insurance cover</li>
									</ul>
									</p> 
									<p class="paragraph-text paragraph-style">So, for bike owners who buy a new motor insurance policy on or after 1st September 2018, there are two options - 
									<ul class="list-style">
										<li class="li paragraph-text">They can buy a 5-year long term comprehensive policy for their bikes, or </li>
										<li class="li paragraph-text">They can buy a 5-year long third party coverage and 1-year own damage coverage </li>
									</ul>
									</p> 
									<p class="paragraph-text paragraph-style">The benefit of long term policies is that there is no hassle of annual renewals and the premium rates are also cheaper </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingNineteen">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="true" aria-controls="collapseNineteen" href="#collapseNineteen" aria-expanded="true" aria-controls="collapseNineteen">
									When should I renew two wheeler insurance plans?
									</a> 
								</h4>
							</div>
							<div id="collapseNineteen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingNineteen">
								<div class="panel-body">
									<p class="paragraph-text">Two-wheeler insurance plans come with tenure of one, two or three years. After the term of the policy is over the policy should be renewed for continued coverage. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwenty">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="true" aria-controls="collapseTwenty" href="#collapseTwenty" aria-expanded="true" aria-controls="collapseTwenty"> 
									How to renew the policy? 
									</a> 
								</h4>
							</div>
							<div id="collapseTwenty" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingTwenty">
								<div class="panel-body">
									<p class="paragraph-text">A two wheeler insurance policy can be renewed online or offline. If you want to renew the policy offline you have to get in touch with an insurance agent selling two wheeler insurance plans or buy the plan by visiting the company’s office. Online mode is simpler as you can buy the policy from the comfort of your home. Online renewals can be done either from the insurance company’s website or from the website of insurance aggregators and online brokers. The latter is a better choice as you can compare the available plans before buying one. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwenty-One">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty-One" aria-expanded="true" aria-controls="collapseTwenty-One" href="#collapseTwenty-One" aria-expanded="true" aria-controls="collapseTwenty-One">
									What points should be checked when renewing online? 
									</a> 
								</h4>
							</div>
							<div id="collapseTwenty-One" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingTwenty-One">
								<div class="panel-body">
									<p class="paragraph-text">When renewing online, comparison is a must. When comparing, you should check the following points – </p>
									<ul class="list-style mtop0">
										<li class="li paragraph-text">The IDV</li>
										<li class="li paragraph-text">The premium charged</li>
										<li class="li paragraph-text">The coverage benefits</li>
										<li class="li paragraph-text">The discounts available</li>
										<li class="li paragraph-text">List of cashless garages</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwenty-Two">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty-Two" aria-expanded="true" aria-controls="collapseTwenty-Two" href="#collapseTwenty-Two" aria-expanded="true" aria-controls="collapseTwenty-Two"> 
									What would happen if the policy is not renewed on time? 
									</a> 
								</h4>
							</div>
							<div id="collapseTwenty-Two" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingTwenty-Two">
								<div class="panel-body">
									<p class="paragraph-text">If the policy is not renewed before the current plan expires, coverage would lapse. In a lapsed policy, no claim is admissible. On renewing the plan after a lapse, inspection of the bike would be required which would be time-consuming. Premiums might also increase for renewals of a lapsed policy. Moreover, if the policy is not renewed within 90 days of lapse, the accumulated no claim bonus is lost. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwenty-Three">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty-Three" aria-expanded="true" aria-controls="collapseTwenty-Three" href="#collapseTwenty-Three" aria-expanded="true" aria-controls="collapseTwenty-Three"> 
									What are the types of claims in a bike insurance policy? 
									</a> 
								</h4>
							</div>
							<div id="collapseTwenty-Three" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingTwenty-Three">
								<div class="panel-body">
									<p class="paragraph-text">Claims in a bike insurance policy can be made in three circumstances –</p>
									<ol class="list-style mtop0">
										<li class="li paragraph-text">When the bike is stolen or lost</li>
										<li class="li paragraph-text">When a third party is hurt or a third party property is damaged</li>
										<li class="li paragraph-text">When the bike suffers a damage</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwenty-Four">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty-Four" aria-expanded="true" aria-controls="collapseTwenty-Four" href="#collapseTwenty-Four" aria-expanded="true" aria-controls="collapseTwenty-Four"> 
									What are the documents which would be required for making a successful claim? 
									</a> 
								</h4>
							</div>
							<div id="collapseTwenty-Four" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingTwenty-Four">
								<div class="panel-body">
									<p class="paragraph-text"> To make a successful claim you should submit your driving license, RC book of the bike, insurance document and claim form. In case of third party claim or if the bike is stolen, police FIR is also required. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwenty-Five">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty-Five" aria-expanded="true" aria-controls="collapseTwenty-Five" href="#collapseTwenty-Five" aria-expanded="true" aria-controls="collapseTwenty-Five"> 
									Can a claim be rejected? 
									</a> 
								</h4>
							</div>
							<div id="collapseTwenty-Five" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingTwenty-Five">
								<div class="panel-body">
									<p class="paragraph-text">Yes, bike insurance claims can be rejected in the following instances – </p>
									<ul class="list-style mtop0">
										<li class="li paragraph-text">When the policy has lapsed </li>
										<li class="li paragraph-text"> If the claim is for an excluded coverage </li>
										<li class="li paragraph-text">If the claim process is not followed </li>
										<li class="li paragraph-text">If all required documents are not submitted </li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwenty-Six">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty-Six" aria-expanded="true" aria-controls="collapseTwenty-Six" href="#collapseTwenty-Six" aria-expanded="true" aria-controls="collapseTwenty-Six"> 
									What are the benefits of buying two wheeler insurance plans online? 
									</a> 
								</h4>
							</div>
							<div id="collapseTwenty-Six" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingTwenty-Six">
								<div class="panel-body">
									<p class="paragraph-text">When the policy is bought online, you get the following benefits – </p>
									<ul class="list-style mtop0">
										<li class="li paragraph-text">You can compare the available policies and choose a policy which is ideal for your bike </li>
										<li class="li paragraph-text">You can get low premium rates </li>
										<li class="li paragraph-text">The policy is bought instantly without hassles of visiting the insurance company offices </li>
										<li class="li paragraph-text">Premiums can also be paid online through secure gateways </li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwenty-Seven">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty-Seven" aria-expanded="true" aria-controls="collapseTwenty-Seven" href="#collapseTwenty-Seven" aria-expanded="true" aria-controls="collapseTwenty-Seven"> 
									Who fixes the premium for bike insurance plans? 
									</a> 
								</h4>
							</div>
							<div id="collapseTwenty-Seven" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingTwenty-Seven">
								<div class="panel-body">
									<p class="paragraph-text">The premium for third party liability plans are fixed by Insurance Regulatory and Development Authority of India (IRDAI) which is the insurance regulator. In case of comprehensive two wheeler insurance plans, the premium is fixed by the insurance company after taking into consideration the coverage provided and the bike details. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwenty-Eight">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty-Eight" aria-expanded="true" aria-controls="collapseTwenty-Eight" href="#collapseTwenty-Eight" aria-expanded="true" aria-controls="collapseTwenty-Eight"> 
									Which insurance policy would be suitable if I have a two wheeler loan? 
									</a> 
								</h4>
							</div>
							<div id="collapseTwenty-Eight" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingTwenty-Eight">
								<div class="panel-body">
									<p class="paragraph-text">A comprehensive policy would be suitable as the lender would insist on complete coverage of the bike. Even if the bike is stolen or completely damaged the comprehensive policy would pay a lump sum benefit which can be used to settle the loan taken for buying the bike. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwenty-Nine">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseTwenty-Nine" aria-expanded="true" aria-controls="collapseTwenty-Nine" href="#collapseTwenty-Nine" aria-expanded="true" aria-controls="collapseTwenty-Nine"> 
									When should I transfer my two wheeler insurance policy? 
									</a> 
								</h4>
							</div>
							<div id="collapseTwenty-Nine" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingTwenty-Nine">
								<div class="panel-body">
									<p class="paragraph-text">The policy should be transferred when you are selling your bike to someone else. In such cases the policy should be transferred in the name of the buyer of the bike. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThirty">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseThirty" aria-expanded="true" aria-controls="collapseThirty" href="#collapseThirty" aria-expanded="true" aria-controls="collapseThirty">
									What is the process of transferring the two wheeler insurance policy? 
									</a> 
								</h4>
							</div>
							<div id="collapseThirty" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingThirty">
								<div class="panel-body">
									<p class="paragraph-text">To transfer the policy, you should, first get the vehicle registered under the name of the new buyer. This registration is done by the RTO and the RC book of the bike is transferred in the buyer’s name. Once the RC book is transferred, the insurance company should be sent a copy of the same with a written request to transfer the two wheeler insurance policy. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThirty-One">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseThirty-One" aria-expanded="true" aria-controls="collapseThirty-One" href="#collapseThirty-One" aria-expanded="true" aria-controls="collapseThirty-One">
									Can the no claim bonus be transferred when the policy is being transferred to another? 
									</a> 
								</h4>
							</div>
							<div id="collapseThirty-One" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingThirty-One">
								<div class="panel-body">
									<p class="paragraph-text">No, the no claim bonus belongs to the original owner of the bike. Even if the bike is sold to another individual, the no claim bonus would remain with the previous owner.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThirty-Two">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseThirty-Two" aria-expanded="true" aria-controls="collapseThirty-Two" href="#collapseThirty-Two" aria-expanded="true" aria-controls="collapseThirty-Two"> 
									How can I transfer my no claim bonus to another policy? 
									</a> 
								</h4>
							</div>
							<div id="collapseThirty-Two" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingThirty-Two">
								<div class="panel-body">
									<p class="paragraph-text">If you have sold your old vehicle and want to transfer your no claim bonus to another policy, you should make a written request to the insurance company. The company would require the proof of sale and then allow you a no claim bonus certificate. This certificate can then be submitted with the new insurance company to transfer the no claim bonus to the new insurance policy. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThirty-Three">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseThirty-Three" aria-expanded="true" aria-controls="collapseThirty-Three" href="#collapseThirty-Three" aria-expanded="true" aria-controls="collapseThirty-Three"> 
									What would happen if I use the bike without a valid two wheeler insurance cover?
									</a> 
								</h4>
							</div>
							<div id="collapseThirty-Three" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingThirty-Three">
								<div class="panel-body">
									<p class="paragraph-text">If you are caught by traffic authorities and you fail to produce the proof of a valid insurance cover you face legal consequences. You would be penalised heavily and lack of insurance might also result in imprisonment in case of third party deaths. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThirty-Four">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseThirty-Four" aria-expanded="true" aria-controls="collapseThirty-Four" href="#collapseThirty-Four" aria-expanded="true" aria-controls="collapseThirty-Four"> 
									What are the types of claims in a two wheeler insurance policy? 
									</a> 
								</h4>
							</div>
							<div id="collapseThirty-Four" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingThirty-Four">
								<div class="panel-body">
									<p class="paragraph-text">Two wheeler insurance claims are settled in two ways – either through cashless or through reimbursement. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThirty-Five">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseThirty-Five" aria-expanded="true" aria-controls="collapseThirty-Five" href="#collapseThirty-Five" aria-expanded="true" aria-controls="collapseThirty-Five"> 
									What is cashless claim? 
									</a> 
								</h4>
							</div>
							<div id="collapseThirty-Five" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingThirty-Five">
								<div class="panel-body">
									<p class="paragraph-text">A cashless claim is one where the insurance company pays the repair costs directly to the garage without you being involved in paying for the expenses yourself. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThirty-Six">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseThirty-Six" aria-expanded="true" aria-controls="collapseThirty-Six" href="#collapseThirty-Six" aria-expanded="true" aria-controls="collapseThirty-Six"> 
									What is reimbursement claim? 
									</a> 
								</h4>
							</div>
							<div id="collapseThirty-Six" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingThirty-Six">
								<div class="panel-body">
									<p class="paragraph-text">In case of reimbursement claims, you get your bike repaired and settle the costs yourself. Thereafter, the repair bills would be submitted to the insurance company with the claim form. The company would assess the bills and reimburse you for the costs you have incurred. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThirty-Seven">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseThirty-Seven" aria-expanded="true" aria-controls="collapseThirty-Seven" href="#collapseThirty-Seven" aria-expanded="true" aria-controls="collapseThirty-Seven"> 
									Who decides the type of claim settlement done by the insurance company? 
									</a> 
								</h4>
							</div>
							<div id="collapseThirty-Seven" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingThirty-Seven">
								<div class="panel-body">
									<div class="panel-body">
										<p class="paragraph-text">Your choice of garage decides the type of claim the company would settle. If you get your bike repaired at a networked garage, you cab avail cashless claim settlement facility. However, if your bike is repaired at any other garage, the claim would be settled on a reimbursement basis. </p>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThirty-Eight">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseThirty-Eight" aria-expanded="true" aria-controls="collapseThirty-Eight" href="#collapseThirty-Eight" aria-expanded="true" aria-controls="collapseThirty-Eight"> 
									How does GST affect two wheeler insurance plans?
									</a> 
								</h4>
							</div>
							<div id="collapseThirty-Eight" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingThirty-Eight">
								<div class="panel-body">
									<p class="paragraph-text">With the application of GST, the premiums for two wheeler insurance plans are increased by 18%. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThirty-Nine">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseThirty-Nine" aria-expanded="true" aria-controls="collapseThirty-Nine" href="#collapseThirty-Nine" aria-expanded="true" aria-controls="collapseThirty-Nine"> 
									What is a total constructive loss (TCL) of the bike? 
									</a> 
								</h4>
							</div>
							<div id="collapseThirty-Nine" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingThirty-Nine">
								<div class="panel-body">
									<p class="paragraph-text">Total Constructive Loss of the bike is considered when the bike is damaged so badly that the repair costs would exceed the IDV of the policy. In case of TCL, the insurance company pays the IDV as claim.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingForty">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseForty" aria-expanded="true" aria-controls="collapseForty" href="#collapseForty" aria-expanded="true" aria-controls="collapseForty"> 
									What is IDV? 
									</a> 
								</h4>
							</div>
							<div id="collapseForty" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingForty">
								<div class="panel-body">
									<p class="paragraph-text">IDV is short for Insured Declared Value. It represents the market value of the bike less depreciation based on the bike’s age. IDV is maximum sum insured offered by the policy which represents the maximum liability undertaken by the insurance company to compensate you in case of TCL or theft of the bike. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingForty-One">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseForty-One" aria-expanded="true" aria-controls="collapseForty-One" href="#collapseForty-One" aria-expanded="true" aria-controls="collapseForty-One"> 
									What would happen if the two wheeler insurance policy is lost? 
									</a> 
								</h4>
							</div>
							<div id="collapseForty-One" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingForty-One">
								<div class="panel-body">
									<p class="paragraph-text">If the policy is lost, a duplicate policy can be arranged by requesting the insurance company. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingForty-Two">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseForty-Two" aria-expanded="true" aria-controls="collapseForty-Two" href="#collapseForty-Two" aria-expanded="true" aria-controls="collapseForty-Two"> 
									If I buy a new bike, can I continue with the old policy? 
									</a> 
								</h4>
							</div>
							<div id="collapseForty-Two" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingForty-Two">
								<div class="panel-body">
									<p class="paragraph-text">No, if a new bike is bought a new insurance policy must also be affected on the new bike because the details of the new bike would be different from the details of the old bike. As such, new coverage with a new premium would have to be made. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingForty-Three">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseForty-Three" aria-expanded="true" aria-controls="collapseForty-Three" href="#collapseForty-Three" aria-expanded="true" aria-controls="collapseForty-Three"> 
									What is voluntary deductible? 
									</a> 
								</h4>
							</div>
							<div id="collapseForty-Three" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingForty-Three">
								<div class="panel-body">
									<p class="paragraph-text">Voluntary deductible represents the amount of claim which the policyholder chooses to pay from his own pockets before the insurance company pays the rest. Voluntary deductible, when chosen, allows a premium discount. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingForty-Four">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseForty-Four" aria-expanded="true" aria-controls="collapseForty-Four" href="#collapseForty-Four" aria-expanded="true" aria-controls="collapseForty-Four"> 
									What is compulsory deductible? 
									</a> 
								</h4>
							</div>
							<div id="collapseForty-Four" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingForty-Four">
								<div class="panel-body">
									<p class="paragraph-text">A compulsory deductible is the portion of claim which the policyholder is supposed to pay himself. Unlike in case of voluntary deductible, in case of compulsory deductible the policyholder has no choice. He/she has to pay the portion of compulsory deductible for bike insurance claims. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingForty-Five">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseForty-Five" aria-expanded="true" aria-controls="collapseForty-Five" href="#collapseForty-Five" aria-expanded="true" aria-controls="collapseForty-Five"> 
									What are the benefits of comparing policies? 
									</a> 
								</h4>
							</div>
							<div id="collapseForty-Five" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingForty-Five">
								<div class="panel-body">
									<p class="paragraph-text">When you compare two wheeler insurance plans you can – </p>
									<ul class="list-style mtop0">
										<li class="li paragraph-text">Choose an ideal IDV </li>
										<li class="li paragraph-text">Choose a plan with the most inclusive coverage features </li>
										<li class="li paragraph-text">Pick a plan with the lowest premiums </li>
										<li class="li paragraph-text">Look for plans with highest discounts </li>
										<li class="li paragraph-text">Look for plans with an extensive network of cashless garages. </li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingForty-Six">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseForty-Six" aria-expanded="true" aria-controls="collapseForty-Six" href="#collapseForty-Six" aria-expanded="true" aria-controls="collapseForty-Six"> 
									What is the limit of coverage for third party liabilities? 
									</a> 
								</h4>
							</div>
							<div id="collapseForty-Six" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingForty-Six">
								<div class="panel-body">
									<p class="paragraph-text">For third party physical injury or death, the coverage allowed is unlimited. The company would pay the financial compensation directed by the claims tribunal. In case of third party property damage, the claim amount is limited to INR 7.5 lakhs </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingForty-Seven">
								<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-target="#collapseForty-Seven" aria-expanded="true" aria-controls="collapseForty-Seven" href="#collapseForty-Seven" aria-expanded="true" aria-controls="collapseForty-Seven"> 
									How can I check the cashless garage network of the policy? 
									</a> 
								</h4>
							</div>
							<div id="collapseForty-Seven" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion5" aria-labelledby="headingForty-Seven">
								<div class="panel-body">
									<p class="paragraph-text">The network of cashless garages can be checked online on the insurance company’s website. Moreover, in case of claim when you call the insurance company, the company would itself inform you of the nearest cashless garages in your vicinity. </p>
								</div>
							</div>
						</div>
					</div>
					<p class="disclaimer">*Prices will vary on the basis of your individual profile</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ======= Faqs ======= -->	
<?php
get_footer('tmproductreskin');