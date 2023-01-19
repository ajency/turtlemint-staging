<?php
/**
  Template Name: Content A 2
 */

get_header();
?>

<!-- banner section for bike starts here --> 
    <div class="banner-bg bike-banner-bg">
      <div class="container">
        <div class="row">
          <div class="banner-bg-content">
            <div class="banner-head">
              <h1 class="heading">Renew bike insurance without<br> inspection or paperwork.</h1>
            </div>
            <div class="tab-cta tab-flex">
              <!-- <a class="quote-cta" href="/two-wheeler-insurance/two-wheeler-profile" onclick="dataLayer.push({'event':'mega-menu','eventName':'Quote-cta-click_Bike-landing', gaCategory: 'bike-landing', gaAction: 'Quote-cta-click_Bike-landing'});"><button class="btn-green">Find Plans</button></a> --> 
              <div class="search-plans"> <input oninput='this.value = this.value.toUpperCase();' type="text" value="" name="regno" maxlength="14" placeholder="Bike number (MH01AB1234)"> </div>
              <div class="btn-wrapper"> <button class="quote-search-btn" id="with-regno">Find Plans</button> </div>
            </div>
            <div class="errtext" id="errMsg"></div>
            <div class="continue-link"> <a href="#" id="without-reg-link">Continue without Bike number</a> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner ends here --> 
    <!-- NEW Section 01 20200615 starts -->
    <div class="container SEO-content">
        <div class="row">
            <h2 class="SEO-content-heading pt80">A Complete Guide to Two-wheeler Insurance Plans</h2>
            <div class="SEO-content-text">In India, the Motor Vehicles Act, 1988 governs the traffic rules which every vehicle has to follow if it is to run on Indian roads. One such rule specified in the Motor Vehicles Act is the requirement of a valid third party insurance cover on every vehicle, whether private or commercial, which runs on Indian roads. As such, if you are a vehicle owner, you need to buy a vehicle insurance policy on your vehicle to comply with the insurance rules contained in the Motor Vehicles Act, 1988.</div>
        </div>
    </div>
    <div class="container SEO-content">
        <div class="row">
            <h2 class="SEO-content-heading pt80">What is two-wheeler insurance?</h2>
            <div class="SEO-content-text">A two-wheeler insurance policy is a policy which provides insurance coverage to the bike, as per the provisions of the Motor Vehicles Act, 1988. The policy provides coverage against the accidents caused by the bike or suffered by the bike as per the type of policy selected.</div>
        </div>
    </div>
    <!-- NEW Section 01 20200615 ends -->
    <!-- section2 starts --> 
    <div class="container">
      <div class="row">
        <h2 class="adds-heading">Types of two wheeler insurance plans we offer</h2>
        <div class="col-xs-12 col-sm-6 offer-left-side">
          <div class="offer-images"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/network.svg" alt=""></div>
          <h3 class="offer-title">Third-party liability insurance policy</h3>
          <div class="offer-text">This policy is the mandatory cover which is specified under the Motor Vehicles Act, 1988. This is compulsory to be taken for every bike which is used in India. The policy provides coverage for any damages or injuries caused to other individuals due to the bike.</div>
        </div>
        <div class="col-xs-12 col-sm-6 offer-right-side">
          <div class="offer-images"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/money.svg" alt=""></div>
          <h3 class="offer-title">Comprehensive package policy</h3>
          <div class="offer-text">This policy provides a wider scope of coverage to the bike. It covers the mandatory third-party liability coverage as well as the damages suffered by the bike itself. Comprehensive plans, therefore, have more inclusive coverage benefits and are priced higher than third party plans.</div>
        </div>
      </div>
    </div>
    <!-- section2 ends --> 
    <!-- section3 starts WHY CHOOSE TURTLEMINT--> 
    <div class="bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="adds-heading">Why choose Turtlemint for two-wheeler insurance?</h2>
            <div class="adds-recomment">Turtlemint is a reputed online insurance aggregator which helps you in buying two-wheeler insurance online. You can visit Turtlemint’s website and find all popular two wheeler insurance plans. Turtlemint’s website allows you to compare the plans, find the best premium rates, choose and buy the best policy that meets your requirement. You can get expert advice and guidance through Turtlemint’s support team.</div>
            <div class="adds-container">
              <div>
                <div class="adds-wrapper">
                  <div class="adds-title">Recommendations</div>
                  <div class="add-subtitle"> Tell us about your needs and we’ll recommend you the best match plans.</div>
                </div>
                <div class="adds-wrapper">
                  <div class="adds-title">100% claims support</div>
                  <div class="add-subtitle">You can count on us for any service needs.</div>
                </div>
                <div class="adds-wrapper">
                  <div class="adds-title">Fooled, no more!</div>
                  <div class="add-subtitle"> Making you insurance smart with simple explanations and unbiased advice.</div>
                </div>
              </div>
              <div class="adds-img-section">
                <div class="widget-video-style" id="video-img" role="button" data-toggle="modal" data-target="#video-modal"> <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/tm-video-thumbnail.png" alt="how Turtlemint can ease your insurance buying experience"> </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="col-sm-10 col-sm-push-1">
        <div class="row data-section">
          <div class="col-xs-12 col-sm-4 text-center">
            <div class="data-progress">50+ Lakhs</div>
            <div class="data-desc">Quotes Compared</div>
          </div>
          <div class="col-xs-12 col-sm-4 text-center">
            <div class="data-progress">3,00,000+</div>
            <div class="data-desc">Policies Bought</div>
          </div>
          <div class="col-xs-12 col-sm-4 text-center">
            <div class="data-progress">INR 20+ Crores</div>
            <div class="data-desc">Claims Processed</div>
          </div>
        </div>
      </div>
    </div>
    <!-- section3 ends --> <!-- section4 starts TESTIMONIAL--> 
    <div class="container">
      <div class="row">
        <h2 class="adds-heading">Testimonials</h2>
        <div class="col-xs-12">
          <div class="carousel-testimonial">
            <!-- <div> <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/testimonial-icon-gray.svg" class="img-responsive quote-image" /> </div> --> 
            <div id="carousel-example-generic" class="carousel slide testimonial-style" data-ride="carousel">
              <!-- Indicators --> 
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>
              <!-- Wrapper for slides --> 
              <div class="carousel-inner" role="listbox">
                <div class="item active item-style">
                  <div class="carousel-caption testimonial-caption-style">
                    <p>Turtlemint’s website is quite informative. I found the two-wheeler blogs highly educative when buying a bike insurance policy.</p>
                    <p class="testimonial-authors">Rahul Nanda</p>
                  </div>
                </div>
                <div class="item item-style">
                  <div class="carousel-caption testimonial-caption-style">
                    <p>Besides offering genuine advice on my two-wheeler insurance purchase, Turtlemint’s executives also helped me zero in on the best available plan.</p>
                    <p class="testimonial-authors">Mihita C</p>
                  </div>
                </div>
                <div class="item item-style">
                  <div class="carousel-caption testimonial-caption-style">
                    <p>Finding and buying a two wheeler insurance plan was easy given the interface of Turtlemint’s website.</p>
                    <p class="testimonial-authors">Rishi M</p>
                  </div>
                </div>
                <div class="item item-style">
                  <div class="carousel-caption testimonial-caption-style">
                    <p>Turtlemint provided me with the best pre and post-sale service. Thank you Turtlemint.</p>
                    <p class="testimonial-authors">Radha B</p>
                  </div>
                </div>
                <!-- Controls --> <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- section4 ends --> <!-- section5 starts PARTNERS--> 
    <div class="bg-gray">
      <div class="container">
        <div class="row">
          <h2 class="blog-heading">Two wheeler insurance partners</h2>
          <div class="partner-logo-container col-xs-12">
            <img id="my_image" style="display: none; opacity: .8;" width="1680" height="240" border="0" src="/wp-content/uploads/2020/12/car-partners-logos.png" usemap="#map"> 
            <map name="map" id="map">
              <area target="_blank" alt="IFFCO-TOKIO" title="IFFCO-TOKIO" href="https://www.turtlemint.com/general-insurance-companies-in-india" coords="0,0,178,89" shape="rect">
              <area target="_blank" alt="Reliance" title="Reliance" href="https://www.turtlemint.com/general-insurance-companies-in-india" coords="211,0,411,80" shape="rect">
              <area target="_blank" alt="Liberty Videocon" title="Liberty Videocon" href="https://www.turtlemint.com/general-insurance-companies-in-india" coords="457,0,739,77" shape="rect">
              <area target="_blank" alt="BAJAJ | Allianz" title="BAJAJ | Allianz" href="https://www.turtlemint.com/general-insurance-companies-in-india" coords="778,16,1119,64" shape="rect">
              <area target="_blank" alt="digit" title="digit" href="https://www.turtlemint.com/general-insurance-companies-in-india" coords="1158,0,1316,73" shape="rect">
              <area target="_blank" alt="Universal sompo" title="Universal sompo" href="https://www.turtlemint.com/general-insurance-companies-in-india" coords="1343,0,1679,70" shape="rect">
              <area target="_blank" alt="TATA AIG" title="TATA AIG" href="https://www.turtlemint.com/general-insurance-companies-in-india" coords="3,123,119,234" shape="rect">
              <area target="_blank" alt="SBIGeneral" title="SBIGeneral" href="https://www.turtlemint.com/general-insurance-companies-in-india" coords="159,150,380,210" shape="rect">
              <area target="_blank" alt="The Oriental Insurance" title="The Oriental Insurance" href="https://www.turtlemint.com/general-insurance-companies-in-india" coords="502,182,51" shape="circle">
              <area target="_blank" alt="HDFC ERGO" title="HDFC ERGO" href="https://www.turtlemint.com/general-insurance-companies-in-india" coords="620,130,745,226" shape="rect">
              <area target="_blank" alt="THE NEW INDIA INSURANCE" title="THE NEW INDIA INSURANCE" href="https://www.turtlemint.com/general-insurance-companies-in-india" coords="890,178,55" shape="circle">
              <area target="_blank" alt="Royal Sundaram" title="Royal Sundaram" href="https://www.turtlemint.com/general-insurance-companies-in-india" coords="1020,134,1306,225" shape="rect">
              <area target="_blank" alt="ICICI Lombard" title="ICICI Lombard" href="https://www.turtlemint.com/general-insurance-companies-in-india" coords="1351,132,1679,224" shape="rect">
            </map>
          </div>
        </div>
      </div>
    </div>
    <!-- section5 ends -->
    <!-- NEW Section SEO 20200617 starts --> 
    <div class="container SEO-content">
      <div class="row">
        <h2 class="SEO-content-heading">Comparison between the third party and comprehensive bike insurance plans</h2>
        <div class="SEO-content-text">Here is how the third party and comprehensive bike insurance policies differ from one another –</div>
        </br>
        <table class="SEO-content-table width591">
          <tbody>
            <tr>
              <td class="width193">
                <p><strong>Basis of difference</strong></p>
              </td>
              <td class="width197">
                <p><strong>Third-party liability policy</strong></p>
              </td>
              <td class="width201">
                <p><strong>Comprehensive policy</strong></p>
              </td>
            </tr>
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
                <p>The coverage is limited to the Insured Declared Value (IDV) of the bike insurance policy. IDV is the value of the bike after considering depreciation based on the bike&rsquo;s age</p>
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
    </div>
    <div class="container SEO-content">
      <div class="row">
        <h2 class="SEO-content-heading">Coverage under bike insurance plans</h2>
        <div class="SEO-content-text">The coverage offered by bike insurance plans depends on the type of policy that you buy. Here are the two types of bike insurance plans and their respective coverage benefits –</div>
        <ol>
          <li>
            <b>Third-party liability plans</b></br>Under third party liability plans, coverage is offered only for third party liabilities which you face when another individual is harmed due to the bike. The policy covers the following types of financial liabilities –
            <ol type="a">
              <li>Liability faced when an individual is physically hurt due to the bike</li>
              <li>Liability faced when an individual is killed due to the bike</li>
              <li>Liability faced when an individual’s property is damaged due to the bike</li>
            </ol>
          <li>
            <b>Comprehensive plans</b></br>As stated earlier, comprehensive plans allow a wider scope of coverage. They cover third party liabilities and damages suffered by the bike. Here is the scope of cover of comprehensive bike insurance plans –
            <ol type="a">
              <li>Liability faced when an individual is physically hurt due to the bike</li>
              <li>Liability faced when an individual is killed due to the bike</li>
              <li>Liability faced when an individual's property is damaged due to the bike</li>
              <li>Financial loss suffered when the bike is damaged due to natural causes like floods, earthquakes, lightning, landslides, cyclones, etc.</li>
              <li>Financial loss suffered when the bike is damaged due to man-made causes like fire, explosion, malicious acts, riots, strikes, etc.</li>
              <li>Financial loss suffered when the bike is stolen</li>
              <li>Financial loss suffered when the bike is damaged when being moved from one place to another through road, rail or air</li>
            </ol>
        </ol>
        <div class="SEO-content-text">Besides this coverage available under the respective types of policies, there is also a mandatory personal accident cover which should be taken in either of the bike insurance plans. This personal accident cover has coverage of INR 15 lakhs and it covers accidental deaths and disablements. In the case of disablements, both total and partial permanent disablements are covered. If the owner/driver of the bike suffers accidental death or permanent total disablement, 100% of the coverage value, i.e. INR 15 lakhs is paid as claim. In the `case of permanent partial disablement, however, 25% to 75% of the coverage value is paid depending on the severity of the disability suffered. </div>
      </div>
    </div>
    <div class="container SEO-content">
      <div class="row">
        <h2 class="SEO-content-heading">Add-ons under bike insurance plans</h2>
        <div class="SEO-content-text">
          Under comprehensive bike insurance plans, there are different types of add-ons which are available. These add-ons are additional coverage benefits which can be selected voluntarily by the policyholder by paying an additional premium. Some of the most popular and common add-ons found in bike insurance plans are as follows –
          <ol>
            <li><b>Zero depreciation add-on</b></br>Bikes undergo depreciation as they are used and they age. This depreciation is not covered under bike insurance plans. When a claim occurs, the insurance company deducts the relevant depreciation on different parts of the bike before paying the claim. However, in repairs, you incur the actual cost of the parts being repaired. When the depreciation is deducted, you get a lower claim amount and face out-of-pocket expenses. A zero depreciation add-on, therefore, proves useful. Under this add-on, the depreciation on the parts of the bike is not considered at the time of claim. The insurance company pays the actual costs of repairs irrespective of the depreciation suffered. Thus, your out-of-pocket expenses are reduced.</li>
            <li><b>Roadside assistance add-on</b></br>If your bike faces a breakdown in the middle of the road and it cannot be taken to the nearest garage, a roadside assistance add-on proves useful. This add-on provides you 24*7 support in case of breakdowns. You just have to inform the insurance company and the company sends assistance wherever you are. Assistance is provided for flat tyres, loss of fuel, electrical breakdowns, jump-starting the bike, etc.</li>
            <li><b>NCB protect add-on</b></br>In a bike insurance policy, if you do not make any claim in a policy year, you earn a no claim bonus. This bonus allows you a discount on the renewal premium. Moreover, the bonus increases after every subsequent claim-free year. However, when a claim occurs, the entire no claim bonus is lost. This add-on protects this loss of no claim bonus. It keeps the NCB intact even after you make a claim on your bike insurance policy.</li>
            <li><b>Lost key replacement</b></br>If you lose the keys of your bike, this add-on would cover the cost of replacing the lost key with a new one.</li>
            <li><b>Medical expenses add-on</b></br>Under this add-on, the medical expenses which you face if you are hospitalised following a bike accident are covered.</li>
            <li><b>Personal accident cover for the pillion rider</b></br>A bike insurance policy mandates a personal accident cover only for the owner/driver of the bike. The cover is not available for the pillion rider. However, with this add-on, a personal accident cover can also be taken for the pillion rider.</li>
            <li><b>Consumables cover</b></br>In case of repairs of the bike, the costs incurred on consumables are not covered under the bike insurance policy. These consumables include engine oil, nuts, bolts, screws, lubricants, etc. which are used by the garage in repairing the bike. However, the consumables cover add-ons ensures that the cost of consumables is also covered by the bike insurance policy.</li>
            <li><b>Return to invoice</b></br>When the bike is damaged beyond repairs or if it is stolen, the bike insurance policy pays the Insured Declared Value of the bike which is the market value of the bike after depreciation. However, if this add-on is selected, the claim paid would be equal to the invoice value of the bike.</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="container SEO-content">
      <div class="row">
        <h2 class="SEO-content-heading">Exclusions under bike insurance plans</h2>
        <div class="SEO-content-text">Now that you know the exact coverage options under bike insurance policies, both inbuilt and optional, it is time to know what is not covered by the plan. There are instances which are not covered under bike insurance policies and they are called policy exclusions. These exclusions include the following –</div>
        <ol>
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
      </div>
    </div>
    <div class="container SEO-content">
      <div class="row">
        <h2 class="SEO-content-heading">Discounts available under bike insurance plans</h2>
        <div class="SEO-content-text">Under comprehensive bike insurance policies, different types of premium discounts are allowed. These discounts include the following –</div>
        <ol>
          <li><b>No claim bonus discount</b></br>As mentioned earlier, if no claims are made in a policy year, a discount is allowed in the renewal premium and the discount also increases after every subsequent claim-free years. The rate of no claim discount is as follows –</li>
        </ol>
        <table class="SEO-content-table width535">
          <tbody>
            <tr>
              <td class="width257" >
                <p><strong>Claim &ndash;free years</strong></p>
              </td>
              <td class="width278" >
                <p><strong>No claim bonus rate</strong></p>
              </td>
            </tr>
            <tr>
              <td class="width257" >
                <p>One claim-free year</p>
              </td>
              <td class="width278" >
                <p>20%</p>
              </td>
            </tr>
            <tr>
              <td class="width257" >
                <p>Two successive claim-free years</p>
              </td>
              <td class="width278" >
                <p>25%</p>
              </td>
            </tr>
            <tr>
              <td class="width257" >
                <p>Three successive claim-free years</p>
              </td>
              <td class="width278" >
                <p>35%</p>
              </td>
            </tr>
            <tr>
              <td class="width257" >
                <p>Four successive claim-free years</p>
              </td>
              <td class="width278" >
                <p>45%</p>
              </td>
            </tr>
            <tr>
              <td class="width257" >
                <p>Five successive claim-free years</p>
              </td>
              <td class="width278" >
                <p>50%</p>
              </td>
            </tr>
          </tbody>
        </table>
        <ol>
          <li>There is a discount of 5% or 10% if you buy long term comprehensive policies</li>
          <li>A discount is allowed if you are a member of a reputed automobiles association</li>
          <li>You also get a discount for buying the policy online</li>
          <li>A discount is allowed if the bike is modified for the use of a disabled rider</li>
          <li>If you opt for a voluntary deductible, you can earn a premium discount</li>
        </ol>
      </div>
    </div>
    <div class="container SEO-content">
      <div class="row">
        <h2 class="SEO-content-heading">Important terms related to bike insurance</h2>
        <div class="SEO-content-text">A bike insurance policy is a technical cover which includes various jargons which you might not understand. So, here are some important terms related to bike insurance plans which you should know –</div>
        <ol>
          <li><b>Own damage cover and/or premium</b></br>Own damage refers to the damages suffered by the bike. This cover is included under comprehensive policies. Moreover, a separate premium is charged for own damage cover which is called own damage premium.</li>
          <li><b>Compulsory deductible</b></br>Under all bike insurance policies, there is a component of the compulsory deductible. This is the amount of claim which is not paid by the insurance company. You have to pay the compulsory deductible from your pockets and the insurance company would settle any excess claims.</li>
          <li><b>Voluntary deductible</b></br>The concept of voluntary deductible is similar to a compulsory deductible. In case of a claim, the amount of the deductible is to be paid by the policyholder and the insurance company pays the remaining. The only difference is that voluntary deductible is voluntary in nature. You might choose to opt for it and if you do, you get a premium discount. A voluntary deductible would be over and above the compulsory deductible that you have selected.</li>
          <li><b>IDV</b></br>IDV stands for Insured Declared Value. It represents the maximum coverage offered by a comprehensive policy. The value is arrived at by deducting the market value of the bike with depreciation based on the age of the bike. The depreciation rates which are used to calculate IDV are as follows –</li>
        </ol>
        <table class="SEO-content-table width515">
          <tbody>
            <tr>
              <td class="width338">
                <p><strong>Age of the bike</strong></p>
              </td>
              <td class="width177">
                <p><strong>Depreciation rate</strong></p>
              </td>
            </tr>
            <tr>
              <td class="width338">
                <p>Up to 6 months</p>
              </td>
              <td class="width177">
                <p>5%</p>
              </td>
            </tr>
            <tr>
              <td class="width338">
                <p>More than 6 months but less than 1 year</p>
              </td>
              <td class="width177">
                <p>15%</p>
              </td>
            </tr>
            <tr>
              <td class="width338">
                <p>More than a year but less than 2 years</p>
              </td>
              <td class="width177">
                <p>20%</p>
              </td>
            </tr>
            <tr>
              <td class="width338">
                <p>More than 2 years but less than 3 years</p>
              </td>
              <td class="width177">
                <p>30%</p>
              </td>
            </tr>
            <tr>
              <td class="width338">
                <p>More than 3 years but less than 4 years</p>
              </td>
              <td class="width177">
                <p>40%</p>
              </td>
            </tr>
            <tr>
              <td class="width338">
                <p>More than 4 years but less than 5 years</p>
              </td>
              <td class="width177">
                <p>50%</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="container SEO-content">
      <div class="row">
        <h2 class="SEO-content-heading">Key benefits of bike insurance plans</h2>
        <div class="SEO-content-text">A bike insurance policy offers the following benefits –</div>
        <ol>
          <li>It covers the legal necessity which is prescribed under the Motor Vehicles Act, 1988. Thus, the policy helps you avoid legal complications and fines</li>
          <li>Since the policy covers third party liabilities, you are freed from the financial burden that you face if you cause any type of harm to any individual</li>
          <li>Comprehensive policies also cover the damages suffered by the bike freeing you from the financial expenses of repairs</li>
          <li>If your bike is stolen, a comprehensive policy compensates you for the loss that you suffer so that you can buy another bike</li>
          <li>The add-ons available under comprehensive bike insurance plans help you avail an inclusive scope of coverage and come to your rescue in emergencies</li>
        </ol>
      </div>
    </div>
    <div class="container SEO-content">
      <div class="row">
        <h2 class="SEO-content-heading">Top bike insurance policies in India</h2>
        <div class="SEO-content-text">Here is a table showing some of the best bike insurance policies in India –</div>
        <table class="SEO-content-table width591">
          <tbody>
            <tr>
              <td class="width137">
                <p><strong>Name of the plan</strong></p>
              </td>
              <td class="width218">
                <p><strong>Salient features</strong></p>
              </td>
              <td class="width124">
                <p><strong>Cashless garage network</strong></p>
              </td>
              <td class="width112">
                <p><strong>Incurred Claims Ratio for FY 2017-18</strong></p>
              </td>
            </tr>
            <tr>
              <td class="width137">
                <p>Magma HDI Two-wheeler Insurance Package Policy</p>
              </td>
              <td class="width218">
                <p>&middot; There is a personal accident add-on which allows personal accident cover for pillion rider</p>
                <p>&middot; Attractive premium discounts make the premiums affordable</p>
              </td>
              <td class="width124">
                <p>Major garages across India</p>
              </td>
              <td class="width112">
                <p>34.93%</p>
              </td>
            </tr>
            <tr>
              <td class="width137">
                <p>ICICI Lombard Two-wheeler Insurance Policy</p>
              </td>
              <td class="width218">
                <p>&middot; A range of add-ons make the plan customisable</p>
                <p>&middot; You can take the plan for various tenures</p>
              </td>
              <td class="width124">
                <p>3400+</p>
              </td>
              <td class="width112">
                <p>68.26%</p>
              </td>
            </tr>
            <tr>
              <td class="width137">
                <p>New India Two Wheeler Insurance</p>
              </td>
              <td class="width218">
                <p>&middot; There are different types of plans which suit the coverage requirements of all</p>
                <p>&middot; The policies are competitively priced</p>
              </td>
              <td class="width124">
                <p>Major garages across India</p>
              </td>
              <td class="width112">
                <p>103.19%</p>
              </td>
            </tr>
            <tr>
              <td class="width137">
                <p>Bajaj Allianz Two Wheeler Insurance</p>
              </td>
              <td class="width218">
                <p>&middot; The company promises to settle its claims at the earliest</p>
                <p>&middot; There are different types of policies available with the company</p>
              </td>
              <td class="width124">
                <p>4000+</p>
              </td>
              <td class="width112">
                <p>77.61%</p>
              </td>
            </tr>
            <tr>
              <td class="width137">
                <p>Go Digit Two Wheeler Insurance</p>
              </td>
              <td class="width218">
                <p>&middot; You can get up to 50R% discount by not making claims under the plan</p>
                <p>&middot; There are five optional covers for a wider scope of coverage</p>
              </td>
              <td class="width124">
                <p>1000+</p>
              </td>
              <td class="width112">
                <p>60%</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="container SEO-content">
      <div class="row">
        <h2 class="SEO-content-heading">How are bike insurance premiums calculated?</h2>
        <div class="SEO-content-text">Calculation of bike insurance premiums is done based on a lot of factors which are as follows –</div>
        <ul>
          <li><strong>Age of the bike</strong> &ndash; the older the bike is, the lower would be the premium</li>
          <li><strong>Make, model and variant</strong> &ndash; this determines the value of the bike and the higher the value the higher would be the premium</li>
          <li><strong>Registration location</strong> &ndash; premiums are higher for bikes registered in metro cities than non-metro ones</li>
          <li><strong>Add-ons selected</strong> &ndash; if add-ons are selected, the premium would increase as each add-on comes with an additional premium</li>
          <li><strong>Type of policy</strong> &ndash; third party plans would have lower premiums compared to comprehensive policies</li>
          <li><strong>Discounts available</strong> &ndash; if there are discounts applied to the bike, such discounts would be considered to reduce the premium</li>
          <li><strong>Term of the policy</strong> &ndash; long term bike insurance plans have higher premiums than annual policies</li>
          <li><strong>IDV selected </strong>&ndash; the higher the IDV, the higher would be the premium</li>
        </ul>
      </div>
    </div>
    <div class="container SEO-content">
      <div class="row">
        <h2 class="SEO-content-heading">How to make a claim in bike insurance plans?</h2>
        <div class="SEO-content-text">A claim in a bike insurance policy occurs in case of third party liabilities, if your bike is damaged or if the bike is stolen. In case of any of these claims, the following steps should be followed –</div>
        <ol>
          <li>Inform the insurance company immediately of your claim</li>
          <li>The insurance company would then advise you to take your bike to the nearest preferred garage for cashless repairs. If you get your bike repaired at a non-networked garage, claims would be settled on a reimbursement basis</li>
          <li>At the garage, the insurance company&rsquo;s surveyor would come and check the extent of damages suffered by the bike</li>
          <li>The surveyor would prepare a claim report and submit it to the insurance company</li>
          <li>The company would assess the report and approve cashless repairs</li>
          <li>Once the approval is received, the garage starts repairing the bike</li>
          <li>When the repairs are completed, the insurance company settles the claims directly with the garage and you can take delivery of your bike</li>
          <li>In the case of third party claims, a police FIR should be filed. The claim would then be taken to the motor accidents tribunal where the liability would be judged. Based on the judgement of the tribunal, the insurance company would pay the claim to the third party</li>
          <li>If the bike is stolen, a police FIR should be filed. If the police are unable to locate your bike, they would issue a certificate stating the same. The certificate should be submitted to the insurance company based on which the company would pay the claim</li>
        </ol>
        <div class="SEO-content-text">If you have bought your bike insurance policy from Turtlemint, you can simply inform Turtlemint for the settlement of your claim. Turtlemint would take the above-mentioned steps to ensure that your bike insurance claims are settled at the earliest. You can inform Turtlemint by calling at 1800 266 0101 or by sending an email at claims@turtlemint.com.</div>
      </div>
    </div>
    <div class="container SEO-content">
      <div class="row">
        <h2 class="SEO-content-heading">Documents required for bike insurance claims</h2>
        <div class="SEO-content-text">Here are the documents which should be submitted to get the settlement of your bike insurance claim –</div>
        <ul>
          <li>Claim form</li>
          <li>Policy bond</li>
          <li>Driving license</li>
          <li>RC Book of the bike</li>
          <li>Identity proof of the claimant</li>
          <li>PUC certificate of the bike</li>
          <li>Police FIR for theft and third party claims</li>
        </ul>
      </div>
    </div>
    <div class="container SEO-content">
      <div class="row">
        <h2 class="SEO-content-heading">How to buy bike insurance plans?</h2>
        <div class="SEO-content-text">You can buy the best bike insurance plan from Turtlemint. Turtlemint is an online platform which is tied up with some of the leading bike insurance providers in India. When you choose Turtlemint you can compare the different bike insurance policies available in the market in terms of their coverage and premiums. You can, then, select the best bike insurance policy, pay the premium and the policy would be issued instantly. Turtlemint also offers you personalised assistance in buying the best bike insurance policy for your bike.</div>
      </div>
    </div>
    <div class="container SEO-content">
        <div class="row">
            <h2 class="SEO-content-heading">How to renew bike insurance plans?</h2>
                <div class="SEO-content-text">Since a bike insurance policy is mandatory by law, you have to renew the policy regularly to ensure uninterrupted coverage. Renewals of bike insurance policies can also be done online. You just have to visit the website of the insurance company from which you bought the policy, provide the policy number of your existing policy, pay the renewal premium and the policy would be renewed instantly. 
                </br>
                  If, on the other hand, you have bought the policy from Turtlemint, you can log into your online Turtlemint account and renew the policy directly by paying the renewal premium. Moreover, if you have a bike insurance policy of another company and you want to switch, you can compare the available policies on Turtlemint’s website, compare and then buy a new policy at the time of renewals
                </div>
        </div>
    </div>
    <!-- NEW Section SEO 20200617 ends -->
    <!-- section6 starts --> 
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="adds-heading">All you need to know about two-wheeler insurance in India</h2>
          <div class="que-ans-section">
            <div class="accord-header-bg">
              <div class="accord-header">Basics of two-wheeler insurance in India</div>
            </div>
            <div class="panel-group panel-group-faq accord-panel" id="panels1">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a data-toggle="collapse" data-parent="#panels1" href="#collapse1" class="collapsed-link">
                      <div class="minus-faq-icon faq-icon"> <i class="far fa-check">minus</i> <i class="far fa-check">plus</i> </div>
                      What is two wheeler insurance? 
                    </a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p class="paragraph-text">Bike Insurance not only provides financial protection to the bike but also provides cover for injuries to driver, passengers or pedestrians, and their property. It pays for damages to your bike due to accidents, vandalism, theft, fire, man-made/natural disasters, and third party liability. Considering the exorbitant repair costs these days even a minor damage can cost a fortune. The Motor Vehicles Act also requires every vehicle on the road to at least have a valid third party liability cover, i.e. cover that pays for bodily injury, loss of life and damage to property of a third person that was caused by an accident with your bike.. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels1" href="#collapse2">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What is covered under two wheeler insurance? 
                    </a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
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
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels1" href="#collapse3">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What's not covered under two Wheeler insurance? 
                    </a>
                  </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
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
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels1" href="#collapse4">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What are the add-ons available? 
                    </a>
                  </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
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
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels1" href="#collapse5">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What's a no claims bonus (NCB)? 
                    </a>
                  </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">No claim bonus is the discount in the premium charged to the policy holder when no claim has been made during the policy term. It keeps increasing from 20% up to 50%, for every claim free year. Your NCB is applicable even if you change your insurer, or buy a new bike. It’s a great incentive to reward safe rider. If you make a claim, you will lose your entire NCB in next policy term. Your NCB will be mentioned on your policy. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels1" href="#collapse6">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What is Multi-Year Two-Wheeler Insurance? What are the benefits? 
                    </a>
                  </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">If you miss out on your renewals every year and find it difficult to keep a track, multi- year policy can solve this problem. Now you can buy insurance policy not just for one year, but for a period of two to three years. Not only you will get saved from missing the renewals unknowingly, but also you can save on premium. The premium amount of a multi- year policy is lower as compared to an individual policy because you get saved from the hike of third- party premium which happens every year as well service tax. </p>
                    <p class="paragraph-text paragraph-style"> In-case your policy gets lapsed, the process is quite troublesome. A new IDV is declared, a new premium is fixed, and then two wheeler inspection is done which is time consuming. So, multi- year policy also removes the risk of lapsed policy. </p>
                    <p class="paragraph-text paragraph-style"> The NCB rewarded to the policyholder is in the form of discount on the premium for a claim free year. Even a minor claim in a year can snatch away your benefits of NCB. The NCB discount given in a multi-year insurance policy is higher than the regular 1 year policy which allows you to have more discounts on your premium amount, thereby saving you money. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels1" href="#collapse7">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      Why buy two-wheeler insurance plans? 
                    </a>
                  </h4>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
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
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels1" href="#collapse8">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      How do I choose the right policy? 
                    </a>
                  </h4>
                </div>
                <div id="collapse8" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">First and foremost, never look at just one or two bike insurance companies; always get and compare at least three quotes. Look for companies that offer discounts and good-driver rewards programs. </p>
                    <p class="paragraph-text paragraph-style">Choose a company that has a good and fast claim settlement ratio and record. Talk with family members and friends about their bike insurance providers and experience. Check their social media accounts.</p>
                    <p class="paragraph-text paragraph-style">Pick the right Insured Declared Value (IDV) of your bike. Seek additional covers based on your risk profile. Multi-year policies, if available, are good way to ensure long term cover. </p>
                    <p class="paragraph-text paragraph-style">Ideally pick company that has a cashless tie-up with the widest network of service stations that you may visit in case of an accident.</p>
                    <p class="paragraph-text paragraph-style">Turtlemint helps you with all of the above decisions. In addition, we offer free claims support all our customers. So, give us a try right now! </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels1" href="#collapse9">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      How do I know if Turtlemint has the best rates? 
                    </a>
                  </h4>
                </div>
                <div id="collapse9" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">Our insurance partners have provided us the best possible insurance rates. We pass on the highest possible discounts to you always! It unlikely you will find a better rate elsewhere. If you find let us know. We are ready for the challenge! </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End of Basics of Car Insurance --> 
          <div class="que-ans-section">
            <div class="accord-header-bg">
              <div class="accord-header">How to save money on two-wheeler insurance</div>
            </div>
            <div class="panel-group panel-group-faq accord-panel" id="panels2">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels2" href="#collapse10">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      How can I keep my premiums low? 
                    </a>
                  </h4>
                </div>
                <div id="collapse10" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">Avoid making claims for small expenses because this will cause you to lose your no claim bonus benefit </p>
                    <p class="paragraph-text paragraph-style">Employ safety features like anti- theft devices. You may get a discount of minimum 5% on your premium, if you inform the insurance company that you have installed an anti-theft device. </p>
                    <p class="paragraph-text paragraph-style">Choose higher deductibles. (Note: this increases your expense on each claim)</p>
                    <p class="paragraph-text paragraph-style">The policyholder can avail discounts based on various categories which are declared by the insurance company like the policyholder’s age, profession, driving history, AAI membership, etc. See if you qualify for these. </p>
                    <p class="paragraph-text paragraph-style">Most important compare premiums before buy. With Turtlemint you can compare premiums across all the top insurers and get the best rates. Our customers have saved up to 60% doing this.</p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels2" href="#collapse11">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      How is the premium for two-wheeler insurance plans calculated? 
                    </a>
                  </h4>
                </div>
                <div id="collapse11" class="panel-collapse collapse">
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
          </div>
          <!--End of How to save money on two-wheeler insurance? --> 
          <div class="que-ans-section">
            <div class="accord-header-bg">
              <div class="accord-header">How to make claim under two wheeler insurance plans </div>
            </div>
            <div class="panel-group panel-group-faq accord-panel" id="panels3">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels3" href="#collapse12">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      How do I make a claim if my bike is vandalized or damaged due to an accident or natural calamity? 
                    </a>
                  </h4>
                </div>
                <div id="collapse12" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">In the event of an own damage claim, that is, where your own vehicle is damaged due to an accident, vandalism or natural calamity, you must immediately inform insurance company and police, wherever required. </p>
                    <p class="paragraph-text paragraph-style">Insurance company will depute a surveyor to assess the loss, and bike will be towed, if required, to a workshop.</p>
                    <p class="paragraph-text paragraph-style">If your policy provides for cashless service, which means you do not have to pay out of your pocket for covered damages, the insurance company will pay the workshop directly. You will need to pay your share of the claim – deductibles, etc – as informed by the insurer. As a Turtlemint customer, you can simply call us to report a claim or any issue with payment, and we will take care of the rest! </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels3" href="#collapse13">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      How much will I get paid for a bike damage claim? 
                    </a>
                  </h4>
                </div>
                <div id="collapse13" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">Once your claim is accepted, you will be paid the approved claim amount minus certain deductions which you will have to pay out from your pocket: </p>
                    <p class="paragraph-text paragraph-style">Standard or Voluntary Deductible: this is a fixed amount that you have to bear before the policy comes into force. </p>
                    <p class="paragraph-text paragraph-style">Depreciation: Standard insurance pays for the actual cash value of your damaged or destroyed vehicle part. However, since the part was already in use, its value will be less than or depreciated in comparison to a new replacement part. This will be 30% for fibre components and 50% for plastics and rubber. If you do not want to bear the depreciation cost, you can buy zero depreciation add-on which is available typically for bikes not older than 3 years. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels3" href="#collapse14">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      How do I make a claim if my bike is stolen and how much compensation will I get? 
                    </a>
                  </h4>
                </div>
                <div id="collapse14" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">If your vehicle is stolen, police and the insurance company must be informed immediately. In addition you must keep the transport department also informed. To make a claim, the vehicle needs to be covered under the comprehensive insurance policy. </p>
                    <p class="paragraph-text paragraph-style">You will need to submit the police First Information Report (FIR), letter intimating RTO along with requisite claim form duly filled in, to the insurance company. Your claim will be paid after police give the final “non-traceable” report.</p>
                    <p class="paragraph-text paragraph-style">The amount you will receive for a theft claim is the Insured Declared Value (IDV) mentioned in the policy. You will need to sign the RC in favour of the insurance company and complete other handover formalities. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels3" href="#collapse15">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What is a third party claim and how is it processed? 
                    </a>
                  </h4>
                </div>
                <div id="collapse15" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">A third party claim, is where your vehicle was involved, in causing bodily injury, death or damage to property. It is important to ensure that the accident is reported immediately to the police as well as to the insurance company. On the other hand, if you are a victim, that is, if somebody else’s vehicle was involved, you must obtain the insurance details of that vehicle and make an intimation to the insurer of that vehicle. </p>
                    <p class="paragraph-text paragraph-style">The limit for property damage liability is capped at Rs. 7.5 lakhs. Any amount above this will have to be borne by the policyholder. There is no limit for bodily injury or death claim. The amount of liability is decided by a special court, the Motor Accident Claims Tribunal, based on factors such expenses for medical treatment of the injured, and loss of income in case of death. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels3" href="#collapse16">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      How does Turtlemint help with a claim? 
                    </a>
                  </h4>
                </div>
                <div id="collapse16" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">It’s simple, just call us on our toll-free number about a claim you want to report, dispute or discuss. Our expert claims team will help you through the entire process. Our team will also work with the insurance companies directly to advance your case, and proactively inform you about the progress. </p>
                    <p class="paragraph-text paragraph-style">With our experience of having processed thousands of cases successfully, you can rest assured that you will get the best service and outcome. </p>
                    <p class="paragraph-text paragraph-style">You can also visit the link <a href="https://www.turtlemint.com/raise-claim" target="_blank">https://www.turtlemint.com/raise-claim</a> and raise a claim with Turtlemint easily. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End of How to save money on your car insurance--> 
          <div class="que-ans-section">
            <div class="accord-header-bg">
              <div class="accord-header">Other FAQs</div>
            </div>
            <div class="panel-group panel-group-faq accord-panel" id="panels4">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq1">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What are Long term two wheeler insurance plans? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq1" class="panel-collapse collapse">
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
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq2">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      When should I renew two wheeler insurance plans? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">Two-wheeler insurance plans come with tenure of one, two or three years. After the term of the policy is over the policy should be renewed for continued coverage. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq3">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      How to renew the policy? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq3" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">A two wheeler insurance policy can be renewed online or offline. If you want to renew the policy offline you have to get in touch with an insurance agent selling two wheeler insurance plans or buy the plan by visiting the company’s office. Online mode is simpler as you can buy the policy from the comfort of your home. Online renewals can be done either from the insurance company’s website or from the website of insurance aggregators and online brokers. The latter is a better choice as you can compare the available plans before buying one. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq4">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What points should be checked when renewing online? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq4" class="panel-collapse collapse">
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
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq5">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What would happen if the policy is not renewed on time? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq5" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">If the policy is not renewed before the current plan expires, coverage would lapse. In a lapsed policy, no claim is admissible. On renewing the plan after a lapse, inspection of the bike would be required which would be time-consuming. Premiums might also increase for renewals of a lapsed policy. Moreover, if the policy is not renewed within 90 days of lapse, the accumulated no claim bonus is lost. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq6">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What are the types of claims in a bike insurance policy? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq6" class="panel-collapse collapse">
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
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq7">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What are the documents which would be required for making a successful claim? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq7" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text"> To make a successful claim you should submit your driving license, RC book of the bike, insurance document and claim form. In case of third party claim or if the bike is stolen, police FIR is also required. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq8">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      Can a claim be rejected? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq8" class="panel-collapse collapse">
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
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq9">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What are the benefits of buying two wheeler insurance plans online? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq9" class="panel-collapse collapse">
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
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq10">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      Who fixes the premium for bike insurance plans? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq10" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">The premium for third party liability plans are fixed by Insurance Regulatory and Development Authority of India (IRDAI) which is the insurance regulator. In case of comprehensive two wheeler insurance plans, the premium is fixed by the insurance company after taking into consideration the coverage provided and the bike details. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq11">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      Which insurance policy would be suitable if I have a two wheeler loan? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq11" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">A comprehensive policy would be suitable as the lender would insist on complete coverage of the bike. Even if the bike is stolen or completely damaged the comprehensive policy would pay a lump sum benefit which can be used to settle the loan taken for buying the bike. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq12">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      When should I transfer my two wheeler insurance policy? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq12" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">The policy should be transferred when you are selling your bike to someone else. In such cases the policy should be transferred in the name of the buyer of the bike. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq13">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What is the process of transferring the two wheeler insurance policy? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq13" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">To transfer the policy, you should, first get the vehicle registered under the name of the new buyer. This registration is done by the RTO and the RC book of the bike is transferred in the buyer’s name. Once the RC book is transferred, the insurance company should be sent a copy of the same with a written request to transfer the two wheeler insurance policy. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq14">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      Can the no claim bonus be transferred when the policy is being transferred to another? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq14" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">No, the no claim bonus belongs to the original owner of the bike. Even if the bike is sold to another individual, the no claim bonus would remain with the previous owner.</p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq15">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      How can I transfer my no claim bonus to another policy? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq15" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">If you have sold your old vehicle and want to transfer your no claim bonus to another policy, you should make a written request to the insurance company. The company would require the proof of sale and then allow you a no claim bonus certificate. This certificate can then be submitted with the new insurance company to transfer the no claim bonus to the new insurance policy. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq16">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What would happen if I use the bike without a valid two wheeler insurance cover? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq16" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">If you are caught by traffic authorities and you fail to produce the proof of a valid insurance cover you face legal consequences. You would be penalised heavily and lack of insurance might also result in imprisonment in case of third party deaths. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq17">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What are the types of claims in a two wheeler insurance policy? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq17" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">Two wheeler insurance claims are settled in two ways – either through cashless or through reimbursement. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq18">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What is cashless claim? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq18" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">A cashless claim is one where the insurance company pays the repair costs directly to the garage without you being involved in paying for the expenses yourself. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq19">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What is reimbursement claim? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq19" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">In case of reimbursement claims, you get your bike repaired and settle the costs yourself. Thereafter, the repair bills would be submitted to the insurance company with the claim form. The company would assess the bills and reimburse you for the costs you have incurred. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq20">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      Who decides the type of claim settlement done by the insurance company? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq20" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">Your choice of garage decides the type of claim the company would settle. If you get your bike repaired at a networked garage, you cab avail cashless claim settlement facility. However, if your bike is repaired at any other garage, the claim would be settled on a reimbursement basis. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq21">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      How does GST affect two wheeler insurance plans? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq21" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">With the application of GST, the premiums for two wheeler insurance plans are increased by 18%. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq22">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What is a total constructive loss (TCL) of the bike? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq22" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">Total Constructive Loss of the bike is considered when the bike is damaged so badly that the repair costs would exceed the IDV of the policy. In case of TCL, the insurance company pays the IDV as claim.</p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq23">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What is IDV? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq23" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">IDV is short for Insured Declared Value. It represents the market value of the bike less depreciation based on the bike’s age. IDV is maximum sum insured offered by the policy which represents the maximum liability undertaken by the insurance company to compensate you in case of TCL or theft of the bike. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq24">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What would happen if the two wheeler insurance policy is lost? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq24" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">If the policy is lost, a duplicate policy can be arranged by requesting the insurance company. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq25">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      If I buy a new bike, can I continue with the old policy? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq25" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">No, if a new bike is bought a new insurance policy must also be affected on the new bike because the details of the new bike would be different from the details of the old bike. As such, new coverage with a new premium would have to be made. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq26">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What is voluntary deductible? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq26" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">Voluntary deductible represents the amount of claim which the policyholder chooses to pay from his own pockets before the insurance company pays the rest. Voluntary deductible, when chosen, allows a premium discount. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq27">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What is compulsory deductible? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq27" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">A compulsory deductible is the portion of claim which the policyholder is supposed to pay himself. Unlike in case of voluntary deductible, in case of compulsory deductible the policyholder has no choice. He/she has to pay the portion of compulsory deductible for bike insurance claims. </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq28">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What are the benefits of comparing policies? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq28" class="panel-collapse collapse">
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
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq29">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      What is the limit of coverage for third party liabilities? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq29" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">For third party physical injury or death, the coverage allowed is unlimited. The company would pay the financial compensation directed by the claims tribunal. In case of third party property damage, the claim amount is limited to INR 7.5 lakhs </p>
                  </div>
                </div>
              </div>
              <hr class="divider-faq">
              <div class="panel panel-default panel-group-faq">
                <div class="panel-heading">
                  <h4 class="panel-title panel-title-faq h4-text">
                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4" href="#collapsefaq30">
                      <div class="plus-faq-icon"> <i class="far fa-check">plus</i> <i class="far fa-check">minus</i> </div>
                      How can I check the cashless garage network of the policy? 
                    </a>
                  </h4>
                </div>
                <div id="collapsefaq30" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="paragraph-text">The network of cashless garages can be checked online on the insurance company’s website. Moreover, in case of claim when you call the insurance company, the company would itself inform you of the nearest cashless garages in your vicinity. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End of Other FAQs--> 
        </div>
      </div>
    </div>
    <!-- section6 ends --> 
    <div class="bg-gray hidden">
      <div class="container">
        <div class="row">
          <h2 class="blog-heading">Two Wheeler Insurance Blogs</h2>
          <div class="blog-container clearfix">
            <!-- <div class="col-md-4 col-sm-4 col-xs-12"> <div class="blog-cards"> <a href="#"> <img class="blog-image" src="https://www.turtlemint.com/blog/wp-content/uploads/2017/06/6-tips-to-reduce-your-health-insurance-premium.jpg" alt=""> </a> <div class="blog-txt"> <h4>How cashless insurance can save you the day money ends!</h4> <p id="blogtxt1" class="paragraph-style"></p> <a class="link" href="#">Read more <span class="arrow">&#8594</span></a> </div> </div> </div> --> <!-- <div class="col-md-4 col-sm-4 col-xs-12"> <div class="blog-cards"> <a href="#"> <img class="blog-image" src="https://www.turtlemint.com/blog/wp-content/uploads/2018/06/teen_car_insurance.jpg" alt=""> </a> <div class="blog-txt"> <h4>Benefits of a Critical Illness Policy</h4> <p id="blogtxt2" class="paragraph-style"></p> <a class="link" href="#">Read more <span class="arrow">&#8594</span></a> </div> </div> </div> --> <!-- <div class="col-md-4 col-sm-4 col-xs-12"> <div class="blog-cards"> <a href="#"> <img class="blog-image" src="https://www.turtlemint.com/blog/wp-content/uploads/2018/06/teen_car_insurance.jpg" alt=""> </a> <div class="blog-txt"> <h4>Does it make sense to buy a Maternity Insurance Benefit Plan?</h4> <p id="blogtxt3" class="paragraph-style"></p> <a class="link" href="#">Read more <span class="arrow">&#8594</span></a> </div> </div> </div> --> 
          </div>
          <div class="read-all-blog text-center clearfix">
            <div class="col-xs-12"> <a href="https://www.turtlemint.com/blog/2-wheeler-insurance/" class="link" target="_blank">Read all Two Wheeler Insurance Blogs</a> </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div id="rating"></div> -->
    <?php include(get_theme_root() . '/' . get_template() . "/assets/landing_widgets/common-rating.html"); ?>
    <!-- </div> --><!-- #content -->
    <style>
    
    .SEO-content{
        font-size: 16px;
        line-height: 1.63;
        /*padding: 0px 95px 50px;*/
        /* padding: 0px 95px 20px; */
        padding: 0px 140px 20px;
        text-align: center;
    }
    .SEO-content-title{
        font-size: 20px;
        color: #354052;
        padding-bottom: 7px;
        font-weight: 500;
        text-align: center;

    }
    .SEO-content-text,.SEO-content ol, .SEO-content ul, .SEO-content li{
        text-align: left;
        margin-top: 10px;
    }
    .SEO-content ol, .SEO-content ul{
        margin-left: 15px;
        margin-right: 15px;
        padding-left: 20px;
    }
    .pt80{
        padding-top: 80px;
    }
    table{margin: auto;
    text-align: center;}

    .SEO-content-table-container{
        margin-top: 10px;
    }
    .SEO-content-table{
        /* width: 624px;  */
        margin: auto;
        text-align: center;
        border: 1px solid darkgrey;
    }
    .SEO-content-table th, .SEO-content-table td{
        border: 1px solid;
    }
    .SEO-content-table th>p, .SEO-content-table td>p{
        margin: 10px 5px;
    }
    .SEO-content-table>tr>td{width: 312px;}
    /* .width112{ width: 112px;}
    .width124{ width: 124px;}
    .width218{ width: 218px;}
    .width137{ width: 137px;}
    .width177{ width: 177px;}
    .width338{ width: 338px;}
    .width515{ width: 515px;}
    .width201{ width: 201px;}
    .width197{ width: 197px;}
    .width193{ width: 193px;}
    .width591{ width: 591px;} */
    .width535{ width: 535px;}

    @media (max-width: 767px)
    {
        .SEO-content{
            padding: 0px 35px 50px;
        }
        .width112{ width: unset;}
        .width124{ width: unset;}
        .width218{ width: unset;}
        .width137{ width: unset;}
        .width177{ width: unset;}
        .width338{ width: unset;}
        .width515{ width: unset;}
        .width201{ width: unset;}
        .width197{ width: unset;}
        .width193{ width: unset;}
        .width591{ width: unset;}
        .width535{ width: unset;}

    }
</style>
<?php
get_footer();
