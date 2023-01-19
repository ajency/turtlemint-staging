<?php
/**
  Template Name: Content A
 */

get_header();
?>

<!-- banner section for bike starts Here -->
    <div class="banner-bg car-banner-bg">
        <div class="container">
            <div class="row">
                <div class="banner-bg-content">
                    <div class="banner-head">
                       <h1 class="heading">Compare and save upto<br> 60% on Car Insurance</h1>
                    </div>
                    <div class="tab-cta tab-flex">
                        <!-- <a class="quote-cta" href="/two-wheeler-insurance/two-wheeler-profile" onclick="dataLayer.push({'event':'mega-menu','eventName':'Quote-cta-click_Bike-landing', gaCategory: 'bike-landing', gaAction: 'Quote-cta-click_Bike-landing'});"><button class="btn-green">Find Plans</button></a> -->
                        <div class="search-plans">
                            <input oninput='this.value = this.value.toUpperCase();' type="text" value="" name="regno" maxlength="14" placeholder="Car number (MH01AB1234)">
                        </div>
                        <div class="btn-wrapper">
                            <button class="quote-search-btn" id="with-regno">Find Plans</button>
                        </div>
                    </div>
                    <div class="errtext" id="errMsg"></div>
                    <div class="continue-link">
                        <a href="#" id="without-reg-link">Continue without Car number</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner ends here -->
    <!-- NEW Section 01 20200615 starts -->
    <div class="container SEO-content">
        <div class="row">
            <h2 class="SEO-content-heading pt80">Overview of Car Insurance Plans in India</h2>
            <div class="SEO-content-text">Car insurance safeguards your car against any financial loss that may occur in case of an accident or any event unfortunate. It is a contract between the car owner and the insurance company for protecting the interest of the policyholder against monetary loss due to car damage.</div>
            <div class="SEO-content-text">The roads are uncertain and keeping this in mind, car insurance has been made mandatory in India. Owning a car is exciting but it is also important to keep it secured with insurance given the rise of vehicles on the roads and accidents as well. A car insurance policy comes to rescue when and lowers the cost of damage or repair significantly.</div>
        </div>
    </div>
    <!-- NEW Section 01 20200615 ends -->
    <!-- section2 starts -->
    <div class="container">
        <div class="row">
            <h2 class="adds-heading">Types of car insurance we offer</h2>
            <div class="col-xs-12 col-sm-6 offer-left-side">
                <div class="offer-images"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/network.svg" alt=""></div>
                <h3 class="offer-title">Third-Party liability</h3>
                <div class="offer-text">This plan protects against the claims made by the third party like the driver of the other vehicle, passengers or owner of the other vehicle, pedestrians, etc. This plan is specifically designed to provide the policyholder cover against the claims made for any bodily damage or injuries to the third party and the damage caused to the vehicle. This is a mandatory policy for all vehicles in India.</div>
            </div>
            <div class="col-xs-12 col-sm-6 offer-right-side">
                <div class="offer-images"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/money.svg" alt=""></div>
                <h3 class="offer-title">Comprehensive Car Cover</h3>
                <div class="offer-text">This insurance policy comes with higher protection for the vehicle insured. The advantage of buying this insurance policy is that this policy protects the policyholder and covers own vehicle damage due to accident, fire, theft, vandalism, etc. This policy also includes third party liability. Added benefits and features are also provided under this plan which makes it one of the best plans for car insurance.</div>
            </div>
        </div>
    </div>
    <!-- section2 ends -->
    <!-- section3 starts WHY CHOOSE TURTLEMINT-->
    <div class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="adds-heading">Why Choose Turtlemint for Car Insurance</h2>
                    <div class="adds-recomment">Turtlemint is a one-stop solution for all your car insurance needs. We
                        give you the best insurance quotes, guide you with purchase and renewal online, and also assist
                        at the time of insurance claims.</div>
                    <div class="adds-container">
                        <div>
                            <div class="adds-wrapper">
                                <div class="adds-title">Recommendations</div>
                                <div class="add-subtitle">Tell us about your needs and we’ll recommend you the best
                                    match plans.</div>
                            </div>
                            <div class="adds-wrapper">
                                <div class="adds-title">100% claims support</div>
                                <div class="add-subtitle">You can count on us for any service needs.</div>
                            </div>
                            <div class="adds-wrapper">
                                <div class="adds-title">Fooled, no more!</div>
                                <div class="add-subtitle">Making you insurance smart with simple explanations and
                                    unbiased advice.</div>
                            </div>
                        </div>
                        <div class="adds-img-section">
                            <div class="widget-video-style" id="video-img" role="button" data-toggle="modal"
                                data-target="#video-modal">
                                <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/tm-video-thumbnail.png"
                                    alt="how Turtlemint can ease your insurance buying experience">
                            </div>
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
    <!-- section3 ends -->
    <!-- section4 starts TESTIMONIALS-->
    <div class="container">
        <div class="row">
            <h2 class="adds-heading">Testimonials</h2>
            <div class="col-xs-12">
                <div class="carousel-testimonial">
                    <!-- <div>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/testimonial-icon-gray.svg" class="img-responsive quote-image" />
                    </div> -->
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
                                    <p>My car insurance purchase experience at Turtlemint was amazing. I didn’t know
                                        buying insurance was so easy</p>
                                    <p class="testimonial-authors">Himesh Gehlot</p>
                                </div>
                            </div>
                            <div class="item item-style">
                                <div class="carousel-caption testimonial-caption-style">
                                    <p>Turtlemint’s website showed me all the car insurance rates helping me compare
                                        and find the best plan.</p>
                                    <p class="testimonial-authors">Kanchan A</p>
                                </div>
                            </div>
                            <div class="item item-style">
                                <div class="carousel-caption testimonial-caption-style">
                                    <p>The car insurance calculator of Turtlemint was easy to use and accurate.</p>
                                    <p class="testimonial-authors">Rishika Nanda</p>
                                </div>
                            </div>
                            <div class="item item-style">
                                <div class="carousel-caption testimonial-caption-style">
                                    <p>I must thank Turtlemint’s team for providing me the best service in buying car
                                        insurance</p>
                                    <p class="testimonial-authors">Roshan J</p>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section4 ends -->
    <!-- section5 starts PARTNERS-->
    <div class="bg-gray">
        <div class="container">
            <div class="row">
                <h2 class="blog-heading">Car Insurance Partners</h2>
                <div class="partner-logo-container col-xs-12">
                    <!-- <ul class="text-center">
                        <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/bajaj-allianz-min.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/bharti-min.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/digit-min.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/future generali-min.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/HDFC-ergo-min.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/icici-lombard-min.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/iffco-tokio-min.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/liberty-min.png" alt=""></a></li>                        
                        <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/new_india-min.png" alt=""></a></li>                        
                        <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/reliance-min.png" alt=""></a></li>                        
                        <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/universal-min.png" alt=""></a></li>                        
                    </ul> -->
                    <img id="my_image" style="display: none; opacity: .8;" width="1680" height="240" border="0" src="/wp-content/uploads/2020/12/car-partners-logos.png"
                        usemap="#map">
                    <map name="map" id="map">
                        <area target="_blank" alt="IFFCO-TOKIO" title="IFFCO-TOKIO" href="https://www.turtlemint.com/general-insurance-companies-in-india"
                            coords="0,0,178,89" shape="rect">
                        <area target="_blank" alt="Reliance" title="Reliance" href="https://www.turtlemint.com/general-insurance-companies-in-india"
                            coords="211,0,411,80" shape="rect">
                        <area target="_blank" alt="Liberty Videocon" title="Liberty Videocon" href="https://www.turtlemint.com/general-insurance-companies-in-india"
                            coords="457,0,739,77" shape="rect">
                        <area target="_blank" alt="BAJAJ | Allianz" title="BAJAJ | Allianz" href="https://www.turtlemint.com/general-insurance-companies-in-india"
                            coords="778,16,1119,64" shape="rect">
                        <area target="_blank" alt="digit" title="digit" href="https://www.turtlemint.com/general-insurance-companies-in-india"
                            coords="1158,0,1316,73" shape="rect">
                        <area target="_blank" alt="Universal sompo" title="Universal sompo" href="https://www.turtlemint.com/general-insurance-companies-in-india"
                            coords="1343,0,1679,70" shape="rect">
                        <area target="_blank" alt="TATA AIG" title="TATA AIG" href="https://www.turtlemint.com/general-insurance-companies-in-india"
                            coords="3,123,119,234" shape="rect">
                        <area target="_blank" alt="SBIGeneral" title="SBIGeneral" href="https://www.turtlemint.com/general-insurance-companies-in-india"
                            coords="159,150,380,210" shape="rect">
                        <area target="_blank" alt="The Oriental Insurance" title="The Oriental Insurance" href="https://www.turtlemint.com/general-insurance-companies-in-india"
                            coords="502,182,51" shape="circle">
                        <area target="_blank" alt="HDFC ERGO" title="HDFC ERGO" href="https://www.turtlemint.com/general-insurance-companies-in-india"
                            coords="620,130,745,226" shape="rect">
                        <area target="_blank" alt="THE NEW INDIA INSURANCE" title="THE NEW INDIA INSURANCE" href="https://www.turtlemint.com/general-insurance-companies-in-india"
                            coords="890,178,55" shape="circle">
                        <area target="_blank" alt="Royal Sundaram" title="Royal Sundaram" href="https://www.turtlemint.com/general-insurance-companies-in-india"
                            coords="1020,134,1306,225" shape="rect">
                        <area target="_blank" alt="ICICI Lombard" title="ICICI Lombard" href="https://www.turtlemint.com/general-insurance-companies-in-india"
                            coords="1351,132,1679,224" shape="rect">                        
                    </map>
                </div>
            </div>
        </div>
    </div>
    <!-- section5 ends -->
    <!-- NEW Section SEO 20200615 starts -->
    <div class="container SEO-content">
        <div class="row">
            <h2 class="SEO-content-heading">List of car insurance companies with best claim settlement ratio</h2>
            <div class="SEO-content-text">
                An insurance company is judged on the basis of the claim settlement ratio. Here is a list of few leading car insurance companies with high claim settlement ratios for the year 2018</br>
                <h3 class="SEO-content-title">Insurance Company Claim Settlement Ratio or Incurred Claim Ratio</h3>
                <div class="table table-insurer table-fixed SEO-content-table-container">
                    <table class="SEO-content-table">
                        <tbody>
                            <tr>
                                <td>
                                    <p><strong>Car Insurance Companies</strong></p>
                                </td>
                                <td>
                                    <p><strong>Incurred Claim Ratio</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Bajaj Allianz car insurance</p>
                                </td>
                                <td>
                                    <p>95%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>New India Assurance car insurance</p>
                                </td>
                                <td>
                                    <p>93%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>ICICI Lombard car insurance</p>
                                </td>
                                <td>
                                    <p>90%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Bharti Axa Car insurance</p>
                                </td>
                                <td>
                                    <p>89%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Tata AIG car insurance</p>
                                </td>
                                <td>
                                    <p>87%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>HDFC ERGO car insurance</p>
                                </td>
                                <td>
                                    <p>85%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Reliance car insurance</p>
                                </td>
                                <td>
                                    <p>80%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>United India car insurance</p>
                                </td>
                                <td>
                                    <p>80%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Oriental car Insurance</p>
                                </td>
                                <td>
                                    <p>70%</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container SEO-content">
        <div class="row">
            <h2 class="SEO-content-heading">Benefits of Car insurance Plans in India</h2>
            <div class="SEO-content-text">The following are the benefits of having an insurance policy for your car</div>
            <ol>
                <li>An insurance policy provides monetary benefits to the survivors in case of accident and support in treatment expenses. It also provides death benefits to the nominee or the family members of the deceased/insured</li>
                <li>It covers the policyholder and pays for lawsuits, legal fees arising out of the accident</li>
                <li>An insurance policy covers the repair bills of the damage caused to the vehicle due to accident</li>
                <li>An insurance policy covers the damage caused to the vehicle due to fire or natural calamities, theft and other man-made incidents</li>
                <li>A car insurance policy provides discounts on premiums for having more than one insurance policy with the same insurance company, in case of theft of the car.</li>
                <li>An insurance policy provides extended coverage for other people driving the car of the policyholder with permission.</li>
                <li>An insurance policy provides rewards in the form of No Claim Bonus and others.</li>
            </ol>
        </div>
    </div>
    <div class="container SEO-content">
        <div class="row">
            <h2 class="SEO-content-heading">Features of Car Insurance Plans in India:</h2>
            <div class="SEO-content-text">The following are few salient features of a car insurance policy</div>
            <ol>
                <li><b>Covers for risk</b></br>Car insurance covers the policyholder against risk of damages by man-made disasters like fire, riots, theft, etc, natural disasters like flood, earthquake, landslide, etc and damage during transit, etc</li>
                <li><b>The insured value</b></br>The car is insured for a value known as Insured Declared Value which is based on the price of the manufacturer less the depreciation.</li>
                <li>
                    <b>Premiums</b></br>For car insurance, the policyholder is needed to pay premiums which are decided on the basis of
                    <ul>
                        <li>The type of vehicle, model number fuel type, capacity, etc</li>
                        <li>The city</li>
                        <li>Age and profession</li>
                        <li>Accessories added or any modifications made in the policy</li>
                    </ul>
                </li>
                <p>These factors help in determining car insurance quotes which you are required to pay to buy the policy. You can use online <a href="https://www.turtlemint.com/car-insurance/car-insurance-calculator/" taregt="_blank">car insurance calculators</a> to find the premium payable for a policy.</p>
                <li><b>Add-ons</b></br>This feature allows the policyholder to add extra cover to get protection against the risks that are not covered under the standard policy. Some of such covers are no claim bonus protection, zero depreciation, accident hospitalization, cover for co-passengers and driver, etc.</li>
                <li><b>Tenure and claims</b></br>An insurance policy is valid for a year after which they can easily be renewed.<a href="https://www.turtlemint.com/car-insurance/compare-and-buy-or-renew-car-insurance/" taregt="_blank">Car insurance renewal</a> can be done online in some simple steps.  The claim settlement process has also been simplified by reimbursement or cashless services in the network garages</li>
            </ol>
        </div>
    </div>
    <div class="container SEO-content">
        <div class="row">
            <h2 class="SEO-content-heading">Why is car insurance necessary?</h2>
            <div class="SEO-content-text">Here are a few reasons why having car insurance is necessary</div>
            <ol>
                <li><b>Mandatory:</b>Having motor insurance is no longer a choice. The Motor Vehicle Act has made it mandatory for all the vehicles whether private or commercial, to have valid <a href="https://www.turtlemint.com/car-insurance/third-party-car-insurance/" target="_blank">third party car insurance</a> wherein third-party liability is also mandatory. The buyer can choose between third party liability cover or comprehensive cover. The third-party liability has been made mandatory to cover the losses caused to the third party.</li>
                <li><b>Reduce the cost of damage:</b> Car insurance reduces the cost of damage caused to the vehicle, the policyholder/owner, cost or repair, legal liabilities, loss of life, hospitalization cost, etc. Car insurance policy will come to rescue at times like these.</li>
                <li><b>24*7 assistance:</b> These days most insurance companies provide 24*7 roadside assistance in case of a sudden breakdown</li>
                <li><b>Cashless services:</b> Car insurance also comes with the option of availing cashless services in the certified network garages across the nation.</li>
                <li><b>Relieves mental stress:</b> Having an insurance policy for your car gives you peace of mind by supporting financially for unfortunate events.</li>
            </ol>
        </div>
    </div>
    <div class="container SEO-content">
        <div class="row">
            <h2 class="SEO-content-heading">Add-ons in a car insurance policy</h2>
            <div class="SEO-content-text">Insurance companies provide add-on covers which are additional covers to protect your car and provide extra coverage with the basic insurance cover. Add-on covers can be taken upon payment of extra premium  which is added to car insurance quotes to get the final premium payable for the policy. Add-on covers are available under <a href="https://www.turtlemint.com/car-insurance/comprehensive-car-insurance/" target="_blank">comprehensive car insurance</a> policies. Some common add-ons include the following - 
</div>
            <ol>
                <li><b>No Claim Bonus Protection</b></br>For every claim-free year, the insurance company provides a discount on the premium to be paid upon renewal of the insurance policy. This bonus is cumulative and every year, increases. No Claim Bonus protection cover protects the NCB. No Claim Bonus becomes void on making a claim and this add on the cover helps you in retaining the No Claim Bonus even after making a claim.</li>
                <li><b>Engine Protection Cover </b></br>This cover protects the policyholder and compensates for any damage caused to the engine by leakages or water ingression. This add on cover protects the engine, gearbox and differential parts of the insured vehicle.</li>
                <li><b>Zero depreciation cover</b></br>This add-on cover compensates for the depreciating value of the car. With this cover, the policyholder does not have to pay for the depreciated value of the car. This add-on is subjected to some claims. The feature of voluntary deductible remains applicable even with zero depreciation add-on cover.</li>
                <li><b>Consumable Cover</b></br>This add-on cover compensates for the consumable items like nuts-bolts, grease, lubricants, engine oil, brake oil, etc.</li>
                <li><b>Key protection cover </b></br>This add on covers the policyholder for expenses incurred on key replacement or repair. This is a fixed number claim add-on cover and requires FIR in case of theft. The cover pays for replacing the key and lock in case of both thefts and lost.</li>
                <li><b>Daily allowance </b></br>This cover gives the benefit of daily allowance when the car is at the workshop for repair for more than 3 days. This allowance is given for travelling through any other mode other than the insured vehicle.</li>
                <li><b>Personal Accident Rider </b></br>This rider provides coverage for personal injury, death, disability or damage due to an accident</li>
            </ol>
        </div>
    </div>
    <div class="container SEO-content">
        <div class="row">
            <h2 class="SEO-content-heading">The Application Process for car insurance plans in India</h2>
            <div class="SEO-content-text">The application process for buying car insurance cannot get easier than this. The online buying option allows the user to get their car insured in just a few clicks without any hustle.</div>
            <ul>
                <li>To buy login to the official website of the policy, you want to buy</li>
                <li>Fill in the details like vehicle registration number, vehicle model, fuel type, age of the vehicle, etc</li>
                <li>Check the premium quote and once satisfied, make the payment online through debit/credit card, net banking, etc.</li>
            </ul>
        </div>
    </div>
    <div class="container SEO-content">
        <div class="row">
            <h2 class="SEO-content-heading">Eligibility and documents required for buying car insurance plans in India</h2>
            <div class="SEO-content-text">The eligibility and requirement of documents for buying car insurance are</div>
            <ul>
                <li><a href="https://www.turtlemint.com/rc-book/" target="_blank">RC book</a></li>
                <li>Driving license</li>
                <li>Vehicle registration</li>
                <li>Identity proof</li>
                <li>Residence proof</li>
                <li>PAN number</li>
                <li>Invoice of the new car</li>
                <li>Insurance policy document (if any)</li>
                <li>No Claim certificate in case of already existing policy</li>
            </ul>
        </div>
    </div>
    <div class="container SEO-content">
        <div class="row">
            <h2 class="SEO-content-heading">Claim process of car insurance in India</h2>
            <div class="SEO-content-text">The car insurance claim process has also become as easy as buying car insurance. You can also claim your insurance offline by connecting with the insurance company representative and inform them about the claim to be made.</br>You will have to follow the following steps</div>
            <ul>
                <li>Inform your insurer about the incident</li>
                <li>File an FIR in case of theft or loss due to man-made incidents</li>
                <li>Do not move your vehicle from the spot before the surveyor visits</li>
                <li>Once the surveyor completes the survey and submits the report, your cashless service option will be available for you to repair your vehicle.</li>
                <li>Submit the original bills and estimate invoice for reimbursement</li>
                <li>Submit documents required like policy document or number, RC, driving license, etc.</li>
                <li>Once the process is completed, the insurance claim will be settled</li>
            </ul>
        </div>
    </div>
    <div class="container SEO-content">
        <div class="row">
            <h2 class="SEO-content-heading">Exclusions in car insurance plans in India</h2>
            <div class="SEO-content-text">Whenever you buy car insurance, keep the following exclusions. Not every damage needs to be entertained by the insurance.</div>
            <ol>
                <li>Driving under the influence of alcohol, drugs or any other intoxication</li>
                <li>Accidental damage caused due to illegal activity</li>
                <li>Driving without driving license</li>
                <li>Damage caused due to nuclear attack or war</li>
                <li>Using vehicle other than the mentioned use</li>
                <li>Regular wear and tear</li>
            </ol>
        </div>
    </div>
    <div class="container SEO-content">
        <div class="row">
            <h2 class="SEO-content-heading">Applying for car insurance through Turtlemint</h2>
            <div class="SEO-content-text">If you are willing to buy car insurance for your new car or want to renew your insurance but in a dilemma about the company, then Turtlemint is just the right place for you. Turtlemint allows you to choose from the best plans after comparing them on various parameters. All you have to do is:</div>
            <ul>
                <li>Log in to <a href="https://www.turtlemint.com/">https://www.turtlemint.com/</a></li>
                <li>Select car from the option and enter your car registration number</li>
                <li>You will be directed to another page asking for details like vehicle type, model number, registration number, previous insurance number (if any), type of policy, etc.</li>
                <li>Once you have provided all the information, you will be directed to a page where various plans and their premium quotes are displayed for you to compare and choose the best policy.</li>
                <li>Once satisfied, you can directly buy your car insurance from the Turtlemint website&rsquo;s same page by clicking on &lsquo;buy now&rsquo;.</li>
                <li>Make the payment online through suitable mode and you’re done.</li>
            </ul>
        </div>
    </div>
    <!-- NEW Section SEO 20200615 ends -->
    
    <!-- section6 starts FAQ-->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="adds-heading">All you need to know about car insurance in India</h2>
                <div class="que-ans-section">
                    <div class="accord-header-bg">
                        <div class="accord-header">Basics of car insurance in India</div>
                    </div>
                    <div class="panel-group panel-group-faq accord-panel" id="panels1">
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a data-toggle="collapse" data-parent="#panels1" href="#collapse1" class="collapsed-link">
                                        <div class="minus-faq-icon faq-icon">
                                            <i class="far fa-check">minus</i>
                                            <i class="far fa-check">plus</i>
                                        </div> What is car insurance
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p class="paragraph-text">Car Insurance not only provides financial
                                        protection to the car but also provides cover for injuries to driver,
                                        passengers or
                                        pedestrians, and their property. It pays for damages to your car due to
                                        accidents,
                                        vandalism, theft, fire, man-made/ natural disasters, and third-party liability.
                                        Considering the exorbitant repair costs these days even a minor damage can cost
                                        a
                                        fortune. The Motor Vehicles Act also requires every vehicle on the road to at
                                        least
                                        have a valid third-party liability cover, i.e. cover that pays for bodily
                                        injury,
                                        loss of life and damage to property of a third person that was caused by an
                                        accident with your car.</p>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels1"
                                        href="#collapse2">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is covered under car insurance?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">The IRDAI revises premium every year,
                                        considering the ratio of claims made and loss for
                                        providers. Because of this, third party insurance rates for cars and bikes have
                                        become
                                        costly from April 1st, with the insurance rate rising up to 40%.</p>
                                    
                                    <ul class="list-style">
                                        <li class="li paragraph-text">Death of any third party due to the car</li>
                                        <li class="li paragraph-text">Any type of bodily injury suffered by any third
                                            party
                                            due to the car</li>
                                        <li class="li paragraph-text">Damage to third party properties</li>
                                        <li class="li paragraph-text">Damages suffered by the car due to natural
                                            calamities
                                            like hurricanes, earthquakes,
                                            storms, tempest, flood, etc.</li>
                                        <li class="li paragraph-text">Damages suffered by the car due to man-made
                                            disasters
                                            like fire, theft, burglary, etc.</li>
                                        <li class="li paragraph-text">Damages incurred due to ignition or
                                            self-explosion</li>
                                        <li class="li paragraph-text">Damages suffered when the car is being
                                            transported
                                            via rail, road, water or air</li>
                                        <li class="li paragraph-text">A personal accident cover for the owner/driver of
                                            the
                                            car against accidental deaths and
                                            accidental permanent disabilities</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels1"
                                        href="#collapse3">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is not covered under car insurance?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="list-style mtop0">
                                        <li class="li paragraph-text">Normal wear and tear and general ageing of the
                                            insured vehicle</li>
                                        <li class="li paragraph-text">Vehicle used otherwise than limitations as to use</li>
                                        <li class="li paragraph-text">Mechanical or electrical breakdown</li>
                                        <li class="li paragraph-text">Damage to vehicle by war, mutiny or nuclear
                                            attacks.</li>
                                        <li class="li paragraph-text">Damage by a person driving the vehicle under the
                                            influence of drugs or liquor or with in
                                            invalid license</li>
                                        <li class="li paragraph-text">Loss of the vehicle or damage that can be
                                            sufficiently proven to be deliberate or
                                            consequential</li>
                                        <li class="li paragraph-text">Damages sustained due to deliberate actions or
                                            criminal acts</li>
                                        <li class="li paragraph-text">Claims faced when driving outside the
                                            geographical
                                            territory of India</li>
                                        <li class="li paragraph-text">Vehicles being used as a commercial one when
                                            registered for personal use</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels1"
                                        href="#collapse4">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What are add-ons available ?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">A basic comprehensive car insurance
                                        includes
                                        damage to your car, loss and
                                        theft of vehicle as well as third party cover. However, at additional cost in
                                        the
                                        insurance premium, the car owners
                                        can avail some extraordinary coverage options. The popular add-ons are:
                                    </p>
                                    <ul class="list-style">
                                        <li class="li paragraph-text">
                                            <b>Zero depreciation cover</b>
                                            <p>The add-on covers the depreciation on the parts of the car. If you have
                                                this
                                                add-on the full amount of the parts of
                                                the car replaced is paid without deducting for depreciation. Without
                                                the
                                                add-on following depreciation will be
                                                applied to pay claim:
                                            </p>
                                            <table class="table table-insurer table-stripped">
                                                <tr class="table-border-remove">
                                                    <td>
                                                        For all the Nylon, Plastic and Rubber parts like tubes and
                                                        tyres as
                                                        well as batteries
                                                    </td>
                                                    <td class="text-center">50%</td>
                                                </tr>
                                                <tr class="table-bg-color">
                                                    <td>
                                                        For all the components made of fiberglass
                                                    </td>
                                                    <td class="text-center">30%</td>
                                                </tr>
                                                <tr class="table-border-remove">
                                                    <td>
                                                        Parts made of glass like windshield, etc.
                                                    </td>
                                                    <td class="text-center">NIL</td>
                                                </tr>
                                            </table>
                                            <p class="paragraph-text paragraph-style">The rest of the vehicle,
                                                including all the wooden parts as well are:</p>
                                            <table class="table table-insurer table-stripped">
                                                <thead>
                                                    <tr class="table-header-bg-color">
                                                        <th>Age of Vehicle</th>
                                                        <th style="text-align: center;">% of Depreciation</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-border-remove">
                                                        <td>Vehicle less than 6 months</td>
                                                        <td class="text-center">NIL</td>
                                                    </tr>
                                                    <tr class="table-bg-color">
                                                        <td>Vehicle more than 6 months but less than 1 year</td>
                                                        <td class="text-center">5%</td>
                                                    </tr>
                                                    <tr class="table-border-remove">
                                                        <td>Vehicle more than 1 year but less than 2 years</td>
                                                        <td class="text-center">10%</td>
                                                    </tr>
                                                    <tr class="table-bg-color">
                                                        <td>Vehicle more than 2 year but less than 3 years</td>
                                                        <td class="text-center">15%</td>
                                                    </tr>
                                                    <tr class="table-border-remove">
                                                        <td>Vehicle more than 3 year but less than 4 years</td>
                                                        <td class="text-center">25%</td>
                                                    </tr>
                                                    <tr class="table-bg-color">
                                                        <td>Vehicle more than 4 year but less than 5 years</td>
                                                        <td class="text-center">35%</td>
                                                    </tr>
                                                    <tr class="table-border-remove">
                                                        <td>Vehicle more than 5 year but less than 10 years</td>
                                                        <td class="text-center">40%</td>
                                                    </tr>
                                                    <tr class="table-bg-color">
                                                        <td>Vehicle more than 10 years</td>
                                                        <td class="text-center">50%</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <p class="paragraph-text paragraph-style">IDV Depreciation:</p>
                                            <table class="table table-insurer table-stripped">
                                                <thead>
                                                    <tr class="table-header-bg-color">
                                                        <th>Age of The Vehicle</th>
                                                        <th style="text-align: center;">% Of Depreciation For Fixing
                                                            IDV of
                                                            The Vehicle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-border-remove">
                                                        <td>Vehicle less than 6 months</td>
                                                        <td class="text-center">5%</td>
                                                    </tr>
                                                    <tr class="table-bg-color">
                                                        <td>Vehicle more than 6 months but less than 1 year</td>
                                                        <td class="text-center">15%</td>
                                                    </tr>
                                                    <tr class="table-border-remove">
                                                        <td>Vehicle more than 1 year but less than 2 years</td>
                                                        <td class="text-center">20%</td>
                                                    </tr>
                                                    <tr class="table-bg-color">
                                                        <td>Vehicle more than 2 year but less than 3 years</td>
                                                        <td class="text-center">30%</td>
                                                    </tr>
                                                    <tr class="table-border-remove">
                                                        <td>Vehicle more than 3 year but less than 4 years</td>
                                                        <td class="text-center">40%</td>
                                                    </tr>
                                                    <tr class="table-bg-color">
                                                        <td>Vehicle more than 4 year but less than 5 years</td>
                                                        <td class="text-center">50%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li class="li paragraph-text">
                                            <b>Roadside assistance cover</b>
                                            <p>Under this additional cover, the policyholder is assured of a
                                                round-the-clock assistance provided by the insurance
                                                company if the car breaks down in the middle of the road and needs
                                                assistance in being transported to the nearest
                                                garage.
                                            </p>
                                        </li>
                                        <li>
                                            <b>Engine protect cover</b>
                                            <p>The engine protect cover covers the damages suffered by the engine of
                                                the
                                                car due to waterlogging. If the car is
                                                submerged in water and the policyholder tries to start the car, water
                                                might
                                                seep into the engine and damage it.
                                                Such damages are covered under the add-on.
                                            </p>
                                        </li>
                                        <li>
                                            <b>NCB protect cover</b>
                                            <p>If there is no claim in the car insurance policy, the policyholder earns
                                                a
                                                no claim bonus (NCB). This bonus provides
                                                a discount in the renewal premium. However, a single instance of claim
                                                wipes out the entire NCB and no discount is
                                                allowed in the renewal premium. This add-on protects the NCB even in
                                                case
                                                of a claim.
                                            </p>
                                        </li>
                                        <li>
                                            <b>Consumables cover</b>
                                            <p>When the car is repaired after an accident, various consumables are used
                                                in
                                                the repair like engine oil, lubricants,
                                                nuts, bolts, etc. The add-on, when opted, ensures coverage for
                                                consumables
                                                too which are not covered in a normal
                                                policy claim.
                                            </p>
                                        </li>
                                        <li>
                                            <b>Lost key replacement cover</b>
                                            <p>Under this cover, a replacement key is arranged free of cost if the
                                                policyholder loses the original key.
                                            </p>
                                        </li>
                                        <li>
                                            <b> Loss of belongings</b>
                                            <p>Under this add-on, if personal belongings are lost from the cover, the
                                                cost
                                                of the loss suffered is covered
                                            </p>
                                        </li>
                                        <li>
                                            <b>Return to Invoice</b>
                                            <p>Under this cover, the invoice or full value of the car is paid as claim
                                                if
                                                the car is stolen or is damaged beyond
                                                repairs. A normal policy without the add-on will pay a maximum claim of
                                                the
                                                insured declared value (IDV) which is
                                                calculated after depreciation.
                                            </p>
                                        </li>
                                        <li>
                                            <b>Personal accident cover for passengers</b>
                                            <p>Under this add-on, personal accident cover is available for unnamed
                                                passengers travelling in the car with the
                                                owner/driver. A lump sum benefit is paid in case of accidental death
                                                and
                                                disablements faced by such passengers.
                                            </p>
                                        </li>
                                        <li>
                                            <b>Medical Expenses Cover</b>
                                            <p>Under this add-on, the medical expenses caused due to an accident
                                                towards
                                                the owner driver would be covered.
                                            </p>
                                        </li>
                                        <li>
                                            <b>What is No Claim Bonus?</b>
                                            <p>No claim bonus (NCB) is the discount in the premium charged to the
                                                policy
                                                holder when no claim has been made during
                                                the policy term. It keeps increasing from 20% up to 50%, for every
                                                claim
                                                free year.
                                            </p>

                                            <p>The no claim bonus is 20% for the first claim-free year. Thereafter, it
                                                increases every consecutive claim-free year.
                                                The available bonus rates are as follows –
                                            </p>
                                            <table class="table table-insurer table-stripped">
                                                <tbody>
                                                    <tr class="table-border-remove">
                                                        <td>
                                                            No claims in the first policy year
                                                        </td>
                                                        <td>20%</td>
                                                    </tr>
                                                    <tr class="table-bg-color">
                                                        <td>
                                                            No claims in two successive policy years
                                                        </td>
                                                        <td>25%</td>
                                                    </tr>
                                                    <tr class="table-border-remove">
                                                        <td>
                                                            No claims in three successive policy years
                                                        </td>
                                                        <td>35%</td>
                                                    </tr>
                                                    <tr class="table-bg-color">
                                                        <td>
                                                            No claims in four successive policy years
                                                        </td>
                                                        <td>45%</td>
                                                    </tr>
                                                    <tr class="table-border-remove">
                                                        <td>No claims in five successive policy years</td>
                                                        <td>50%</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <p>Your NCB is applicable even if you change your insurer, or buy a new
                                                car. It’s a great incentive to reward safe
                                                drivers. If you make a claim, you will lose your entire NCB in next
                                                policy term. Your NCB will be mentioned on your
                                                policy.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <hr class="divider-faq">
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels1"
                                        href="#collapse5">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What are the benefits of buying car insurance plans?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">A car insurance policy is not only
                                        legally mandatory, it is beneficial too.
                                        Here’s how –</p>
                                    <ul class="list-style">
                                        <li class="li paragraph-text">The third party coverage protects your finances
                                            in the event of a third party claim. If a
                                            third party dies, the compensation involved is quite considerable. It might
                                            not be possible for every car owner to
                                            pay such high compensations from his/her own pockets
                                        </li>
                                        <li class="li paragraph-text">Even in case of damages to the car, the repair
                                            costs involved are quite high. A car
                                            insurance policy reduces the financial burden you face when paying for such
                                            repairs.
                                        </li>
                                        <li class="li paragraph-text">If your car is stolen or damaged beyond repairs,
                                            the car insurance plan would pay a lump
                                            sum money (the IDV of the policy) which would help you buy a new car or
                                            deal with the financial loss you face.</li>
                                        <li class="li paragraph-text">As the car insurance policy is mandatory, you are
                                            protected from legal hassles which
                                            would incur in the absence of one.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Basics of Car Insurance -->


                <div class="que-ans-section">
                    <div class="accord-header-bg">
                        <div class="accord-header">How to choose the best car insurance policy?</div>
                    </div>
                    <div class="panel-group panel-group-faq accord-panel" id="panels2">
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels2"
                                        href="#collapse6">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> How to compare a car insurance policy?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">The best car insurance policy can be
                                        chosen by comparing different plans
                                        available in the market. Comparing is a must because of the benefits it
                                        provides. By comparing individuals can buy
                                        a policy which has the highest possible IDV, encompasses the most coverage
                                        features and charges the lowest premium.
                                        Thus, comparing allows individuals to buy the best car insurance plan.
                                    </p>
                                    <p class="paragraph-text paragraph-style">
                                        Turtlemint has a tie-up with leading car insurance companies. Individuals can
                                        find and compare different car insurance
                                        plans on Turtlemint’s website and then buy a plan which is the best.
                                    </p>
                                    <p class="paragraph-text">To compare, the following parameters should be judged –</p>
                                    <ul class="list-style">
                                        <li class="li paragraph-text">What are the coverage features offered by the
                                            plan. The higher the better</li>
                                        <li class="li paragraph-text"> Insured Declared Value of the policy. It should
                                            match with the market value of the car</li>
                                        <li class="li paragraph-text">The premium charged against the coverage offered.
                                            The best plan is the one which offers the highest coverage at the
                                            lowest premiums</li>
                                        <li class="li paragraph-text">The premium discounts available. Higher the
                                            better</li>
                                        <li class="li paragraph-text">The network of cashless garages tied-up with the
                                            insurance company. The wider the better
                                        </li>
                                        <li class="li paragraph-text">The claim settlement ratio of the company which
                                            represents the number of claims settled
                                            against the claims made. The higher the ratio, the better</li>
                                        <li class="li paragraph-text">The add-ons available under the policy, their
                                            rates and their suitability to your
                                            coverage requirements.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels2"
                                        href="#collapse7">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> How do I know if Turtlemint has the best rates?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">Our insurance partners have provided us
                                        the best possible insurance rates. We
                                        pass on the highest possible discounts to you always. It unlikely you will find
                                        a better rate elsewhere. If you
                                        find let us know. We are ready for the challenge!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels2"
                                        href="#collapse8">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> How do I choose the right policy?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="list-style mtop0">
                                        <li class="li paragraph-text">First and foremost, never look at just one or two
                                            car insurance companies; always get and
                                            compare at least three quotes. Look for companies that offer discounts and
                                            good-driver rewards programs.</li>
                                        <li class="li paragraph-text">Choose a company that has a good and fast claim
                                            settlement ratio and record. Talk with
                                            family members and friends about their car insurance providers and
                                            experience. Check their social media accounts.
                                        </li>
                                        <li class="li paragraph-text">Pick the right Insured Declared Value (IDV) of
                                            your car. Seek additional covers based on
                                            your risk profile. Multi-year policies, if available, are good way to
                                            ensure long term cover.</li>
                                        <li class="li paragraph-text">Ideally pick company that has a cashless tie-up
                                            with the widest network of service
                                            stations that you may visit in case of an accident.</li>
                                    </ul>
                                    <p class="paragraph-text">Turtlemint helps you with all of the above decisions. In
                                        addition, we offer free claims
                                        support all our customers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of How to choose the best car insurance policy? -->

                <div class="que-ans-section">
                    <div class="accord-header-bg">
                        <div class="accord-header">How to save money on your car insurance </div>
                    </div>
                    <div class="panel-group panel-group-faq accord-panel" id="panels3">
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels3"
                                        href="#collapse9">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> How can I keep my premiums low?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse9" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="list-style mtop0">
                                        <li class="li paragraph-text">Avoid making claims for small expenses because
                                            this will cause you to lose your no claim bonus benefit</li>
                                        <li class="li paragraph-text">Ensure that the Insured Declared Value of the
                                            policy is not very high. The
                                            premium is affected by the IDV
                                        </li>
                                        <li class="li paragraph-text">Choose the correct type of policy for the car. If
                                            the car is not used very much, third party
                                            liability plans are sufficient.
                                        </li>
                                        <li class="li paragraph-text">Employ safety features like anti- theft devices.
                                            You may get a discount of minimum 5% on your premium, if you inform
                                            the insurance company that you have installed an anti-theft device.</li>
                                        <li class="li paragraph-text">Choose higher deductibles. (Note: this increases
                                            your expense on each claim)</li>
                                        <li class="li paragraph-text">The policyholder can avail discounts based on
                                            various categories which are declared by the insurance company like
                                            the policyholder’s age, profession, driving history, AAI membership, etc.
                                            See if you qualify for these.</li>
                                        <li class="li paragraph-text">Cut down on unnecessary add-ons which are not
                                            required. For instance if the policyholder is not living in a
                                            flood-prone area, engine damage add-on is not required.</li>
                                        <li class="li paragraph-text">Renew the policy on time. Lapsed policies incur a
                                            higher premium.</li>
                                        <li class="li paragraph-text">Most important compare premiums before buy. With
                                            Turtlemint you can compare premiums across all the top insurers
                                            and get the best rates. Our customers have saved up to 60% doing this.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of How to save money on your car insurance-->

                <div class="que-ans-section">
                    <div class="accord-header-bg">
                        <div class="accord-header">How to make claims for your car insurance policy </div>
                    </div>
                    <div class="panel-group panel-group-faq accord-panel" id="panels4">
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4"
                                        href="#collapse10">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> How do I make a claim if my car is vandalised or damaged due to an
                                        accident or natural calamity?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse10" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">In the event of an own damage claim, that
                                        is, where your own vehicle is damaged due to an accident, vandalism or
                                        natural calamity, you must immediately inform insurance company and police,
                                        wherever required.</p>
                                    <p class="paragraph-text paragraph-style">Insurance company will depute a surveyor
                                        to assess the loss, and car will be towed, if required, to a workshop.</p>
                                    <p class="paragraph-text paragraph-style">A claim report is prepared by the
                                        surveyor based on the assessment done. The
                                        report is submitted to the insurance company along with the claim form and
                                        related documents like –
                                    </p>

                                    <ul class="list-style">
                                        <li class="li paragraph-text">Driving license of the driver/owner of the car</li>
                                        <li class="li paragraph-text">RC book of the car</li>
                                        <li class="li paragraph-text">PUC certificate, etc.</li>
                                    </ul>
                                    <p class="paragraph-text paragraph-style">Once the claim is approved, repairs
                                        start. The repairs are completed and delivered to the policyholder. The claim
                                        is
                                        settled by the company with the garage and the car is delivered to the
                                        policyholder. </p>
                                    <p class="paragraph-text paragraph-style">If your policy provides for cashless
                                        service, which means you do not have to pay out of your pocket for covered
                                        damages,
                                        the insurance company will pay the workshop directly. You will need pay your
                                        share of the claim – deductibles, etc – as informed by the insurer. </p>
                                    <p class="paragraph-text paragraph-style"> As a Turtlemint customer, you can simply call
                                        us to report a claim or any issue
                                        with payment, and we will take care of the rest!
                                    </p>
                                    <p class="paragraph-text paragraph-style">If your policy is not offering you
                                        cashless claims, you can choose
                                        reimbursement claims. Under reimbursement claims the policyholder bears the
                                        repair costs himself and then gets them
                                        reimbursed from the insurance company. If the car is repaired at any
                                        non-preferred garage, reimbursement claims
                                        occur
                                    </p>
                                </div>
                            </div>
                        </div>       
                        <hr class="divider-faq">                               
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4"
                                        href="#collapse11">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> How much will I get paid for a car damage claim?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse11" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">Once your claim is accepted, you will be
                                        paid the approved claim amount minus
                                        certain deductions which you will have to pay out from your pocket:
                                    </p>
                                    <p class="paragraph-text paragraph-style">Standard or Voluntary Deductible: this is
                                        a fixed amount that you have to
                                        bear before the policy comes into force. For private cars, this amount
                                        currently is Rs. 1,000.</p>
                                    <p class="paragraph-text paragraph-style">Depreciation: Standard insurance pays for
                                        the actual cash value of your
                                        damaged or destroyed vehicle part. However, since the part was already in use,
                                        its value will be less than or
                                        depreciated in comparison to a new replacement part. This will be 30% for fibre
                                        components and 50% for plastics and
                                        rubber. If you do not want to bear the depreciation cost, you can buy zero
                                        depreciation add-on which is available
                                        typically for cars not older than 3 years.
                                    </p>
                                </div>
                            </div>
                        </div>                  
                        <hr class="divider-faq">                      
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4"
                                        href="#collapse12">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> How do I make a claim if my car is stolen and how much compensation will
                                        I get?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse12" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">If your vehicle is stolen, police and the
                                        insurance company must be informed
                                        immediately. In addition you must keep the transport department also informed.
                                        To make a claim, the vehicle needs
                                        to be covered under the comprehensive insurance policy.
                                    </p>
                                    <p class="paragraph-text paragraph-style">You will need to submit the police First
                                        Information Report (FIR), letter
                                        intimating RTO along with requisite claim form duly filled in, to the insurance
                                        company. Your claim will be paid
                                        after police give the final “non-traceable” report.
                                    </p>
                                    <p class="paragraph-text paragraph-style">The amount you will receive for a theft
                                        claim is the Insured Declared Value
                                        (IDV) mentioned in the policy. You will need to sign the RC in favour of the
                                        insurance company and complete other
                                        handover formalities.</p>
                                </div>
                            </div>
                        </div> 
                        <hr class="divider-faq">                                       
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4"
                                        href="#collapse122">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is a third party claim and how is it processed?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse122" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">A third party claim, is where your
                                        vehicle was involved, in causing bodily
                                        injury, death or damage to property. It is important to ensure that the
                                        accident is reported immediately to the
                                        police as well as to the insurance company. On the other hand, if you are a
                                        victim, that is, if somebody else’s
                                        vehicle was involved, you must obtain the insurance details of that vehicle and
                                        make an intimation to the insurer
                                        of that vehicle.
                                    </p>
                                    <p class="paragraph-text paragraph-style">The limit for property damage liability
                                        is capped at Rs. 7.5 lakhs. Any
                                        amount above this will have to be borne by the policyholder. There is no limit
                                        for bodily injury or death claim.
                                        The amount of liability is decided by a special court, the Motor Accident
                                        Claims Tribunal, based on factors such
                                        expenses for medical treatment of the injured, and loss of income in case of
                                        death.
                                    </p>
                                </div>
                            </div>
                        </div>                  
                        <hr class="divider-faq">                      
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels4"
                                        href="#collapse13">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> How does Turtlemint help with a claim?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse13" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">It’s simple, just call us on our
                                        toll-free number about a claim you want to
                                        report, dispute or discuss. Our expert claims team will help you through the
                                        entire process. Our team will also
                                        work with the insurance companies directly to advance your case, and
                                        proactively inform you about the progress.
                                    </p>
                                    <p class="paragraph-text paragraph-style">With our experience of having processed
                                        thousands of cases successfully, you
                                        can rest assured that you will get the best service and outcome.
                                    </p>
                                    <p class="paragraph-text paragraph-style">You can also visit the link <a href="https://www.turtlemint.com/raise-claim"
                                            target="_blank">https://www.turtlemint.com/raise-claim</a>
                                        and raisea claim with Turtlemint easily</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of How to make claims for your car insurance policy-->


                <div class="que-ans-section">
                    <div class="accord-header-bg">
                        <div class="accord-header">Other FAQs</div>
                    </div>
                    <div class="panel-group panel-group-faq accord-panel" id="panels5">
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse14">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> How many add-ons can be bought under a car insurance comprehensive plan?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse14" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">There is no limit to the number of
                                        add-ons one can buy under a car insurance
                                        plan. Each add-on would attract an additional premium and the policyholder can
                                        choose as many add-ons he requires.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse15">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is the term of car insurance plans?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse15" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">Car insurance plans are offered for a
                                        term of one year. After each year the
                                        policy should be renewed.
                                    </p>
                                </div>
                            </div>
                        </div>                        
                        <hr class="divider-faq">
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse16">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> Is there a grace period to renew car insurance policy?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse16" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">Yes, insurance companies allow a grace
                                        period for renewing the car insurance
                                        plan. The period offered depends on the policy. Coverage would not be allowed
                                        during the grace period. However, the
                                        accumulated no claim bonus would be applicable and the policy can be renewed
                                        without inspections if the renewal is
                                        done in the grace period.
                                    </p>
                                </div>
                            </div>
                        </div>                        
                        <hr class="divider-faq">
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse17">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> Which type of policy should be bought?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse17" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">A comprehensive car insurance policy is
                                        the best choice because it covers
                                        damages suffered by the car too. Since such damages also incur huge costs, a
                                        comprehensive cover is best. Moreover,
                                        add-ons should be selected for making the cover as comprehensive as possible.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                    
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse18">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What types of discounts are available in car insurance plans?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse18" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">There are various discounts which are
                                        available in car insurance plans. These
                                        include discounts for installing safety devices, the accumulated no claim
                                        bonus, discount for choosing a voluntary
                                        deductible and discount for becoming a member of an approved automobile
                                        association.
                                    </p>
                                    <p class="paragraph-text paragraph-style">There is also a de-tariff discount that
                                        is provided by companies but varies
                                        from company to company, location to location and from vehicle to vehicle. It
                                        depends on the vehicle’s incurred
                                        claim as per the company’s experience and the same can change due to a change
                                        in their claim experience!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                    
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse19">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> How does the car insurance premium calculator work?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse19" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="list-style mtop0">
                                        <li class="li paragraph-text">The details of your car like its make, model and
                                            variant</li>
                                        <li class="li paragraph-text">The fuel type of the car</li>
                                        <li class="li paragraph-text">The registration date</li>
                                        <li class="li paragraph-text">Registration number of the car</li>
                                        <li class="li paragraph-text">The type of policy you want to buy</li>
                                        <li class="li paragraph-text">Whether there is an existing policy. If there is,
                                            whether the plan has expired or expiring soon</li>
                                        <li class="li paragraph-text">If any existing claims have been made in the
                                            previous plan or not</li>
                                        <li class="li paragraph-text">Any discounts or which you are eligible</li>
                                        <li class="li paragraph-text">The IDV you want</li>
                                        <li class="li paragraph-text">The add-ons which you want to add to the coverage
                                            features</li>
                                    </ul>
                                    <p class="paragraph-text paragraph-style">After you provide these details, the
                                        calculator would calculate the premiums
                                        payable for the policy.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse20">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> When does the car insurance policy expire?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse20" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">
                                        Car insurance plans are offered as one year contracts. Once the stipulated
                                        tenure is over, you have to renew the
                                        policy. If the policy is not renewed within the due date, i.e. the date on
                                        which the existing policy is expiring, the
                                        policy is said to expire. An expired car insurance policy is bad because of the
                                        following reasons -
                                    </p>
                                    <ul class="list-style">
                                        <li class="li paragraph-text">The coverage under the car insurance policy stops
                                            as soon as the policy expires. In the
                                            event of any subsequent claim you would have to pay the expenses incurred</li>
                                        <li class="li paragraph-text">An expired car insurance policy violates traffic
                                            rules. If you are caught with an expired
                                            policy you face legal consequences which involve penalties and also
                                            imprisonment
                                        </li>
                                        <li class="li paragraph-text">If the policy is not renewed within a specified
                                            time, you lose the accumulated no claim
                                            bonus of the plan
                                        </li>
                                        <li class="li paragraph-text">The premium of the renewed policy, after lapse,
                                            is higher than normal renewal premiums
                                        </li>
                                        <li class="li paragraph-text">In case of renewing an expired policy, the IDV
                                            might be low and there would be an
                                            inspection of the car before the policy is renewed.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse21">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> How can I renew a lapsed car insurance plan?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse21" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">To renew your car insurance policy you
                                        should follow the below-mentioned
                                        steps -
                                    </p>
                                    <ul class="list-style">
                                        <li class="li paragraph-text">Compare the available car insurance policies and
                                            choose a plan for renewal
                                        </li>
                                        <li class="li paragraph-text">Request the insurance company to arrange for an
                                            inspection of your car
                                        </li>
                                        <li class="li paragraph-text">The insurance company’s surveyor would inspect
                                            the car and submit his report after which
                                            the insurance company would give you a premium quote
                                        </li>
                                        <li class="li paragraph-text">Pay the premium online and your policy would be
                                            renewed
                                        </li>
                                    </ul>
                                    <p class="paragraph-text paragraph-style">Moreover, if you are renewing within the
                                        specified duration, you can use the
                                        accumulated no claim bonus of your previous policy to claim a premium discount
                                        in the renewed plan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse22">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is IDV?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse22" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">IDV stands for Insured Declared Value. it
                                        represents the actual sum insured
                                        of the car insurance policy. IDV is calculated by deducting the age based
                                        depreciation from the market value of the
                                        car. The market value of the car would exclude registration and insurance costs
                                        for IDV calculations. The rate of
                                        depreciation would depend on the age of the car and would be as follows -
                                    </p>
                                    <table class="table table-insurer table-stripped">
                                        <thead>
                                            <tr class="table-header-bg-color">
                                                <th>
                                                    Age of the car
                                                </th>
                                                <th>
                                                    Applicable depreciation
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-border-remove">
                                                <td>Less than 6 months</td>
                                                <td>5%</td>
                                            </tr>
                                            <tr class="table-bg-color">
                                                <td>More than 6 months but less than a year</td>
                                                <td>15%</td>
                                            </tr>
                                            <tr class="table-border-remove">
                                                <td>More than a year but less than 2 years</td>
                                                <td>20%</td>
                                            </tr>
                                            <tr class="table-bg-color">
                                                <td>More than 2 years but less than 3 years</td>
                                                <td>30%</td>
                                            </tr>
                                            <tr class="table-border-remove">
                                                <td>More than 3 years but less than 4 years</td>
                                                <td>40%</td>
                                            </tr>
                                            <tr class="table-bg-color">
                                                <td>More than 4 years but less than 5 years</td>
                                                <td>50%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="paragraph-text paragraph-style">If the car is more than 5 years old, the IDV is mutually decided between the
                                        insurance company and the policyholder.
                                    </p>
                                    <p class="paragraph-text paragraph-style">The IDV is paid as claim if the car is damaged beyond repairs or if the car
                                        is stolen.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                    
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse23">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is premium?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse23" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">Premium is the amount paid to buy a car insurance policy and to keep it
                                        active.
                                    </p>                                    
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse24">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is own damage premium?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse24" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">Own damage premium is the amount of premium paid for covering damages to the
                                        car caused by events outside the control of the policyholder like earthquakes, accidents, etc.
                                    </p>                                    
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse25">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is at fault?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse25" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">At fault represents the degree of the policyholder’s contribution to the car
                                        collision.
                                    </p>                                    
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse26">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> Who is a claims adjuster?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse26" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">A claims adjuster is an individual who investigates and settles the car
                                        insurance claim.
                                    </p>                                    
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse27">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> Which documents are required to buy a car insurance plan?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse27" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">To buy the policy individuals would have to submit the RC book of the car,
                                        invoice of the new car or existing policy document for an old car, No claim bonus certificate of the existing
                                        policy if required.
                                    </p>                                    
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse28">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> In case of an expired policy, how would the renewal premium be determined?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse28" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">If the policy has expired, the Insured Declared Value would be calculated
                                        after the inspection of the car has been done by the insurance company. Based on the IDV, the premium would be
                                        calculated. Moreover, if the policy is renewed within 90 days of expiry of the old policy, the no claim bonus of
                                        the old policy would be applied on the premium and the premium would be discounted.
                                    </p>                                    
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse29">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> Can online plans be bought only for new cars?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse29" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">No, you can buy online car insurance plans for used cars as well as for old
                                        cars when you renew the policy.
                                    </p>                                    
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse30">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> How to renew car insurance online?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse30" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">For online renewals you can visit the insurance company’s website or compare
                                        other plans on insurance aggregator websites before renewing. Once the plan is shortlisted, the details of the car
                                        should be provided and the premium should be paid online. The policy would then be renewed instantly.
                                    </p>                                    
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse31">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> Do car insurance premiums change when comparison is done at two different times?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse31" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">No, car insurance premiums do not depend on the time when the comparison took
                                        place. It depends on the details of the car. So, the premium would be same whenever the policies are compared.
                                    </p>                                    
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse32">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> Can car insurance quotes be saved?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse32" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">Yes, Turtlemint offers you the facility to save your car insurance quotes for
                                        future reference. You can generate the quotes online and then save them for later use.
                                    </p>                                    
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse33">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> Will the premium be the lowest if the insurance company is not changed on renewals?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse33" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">There is no guarantee of cheaper premium rates for continuing with your old
                                        insurance company. Insurance companies do not give any loyalty discounts on car insurance premiums if you continue
                                        your coverage with them. So, you should compare the available plans to get the lowest premium rate.
                                    </p>                                    
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse34">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> Can changes be made in existing car insurance policies?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse34" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">Yes, certain changes can be made in your car insurance policy. Allowed
                                        changes include the following -
                                    </p>                                    
                                    <ul class="list-style mtop0">
                                        <li class="li paragraph-text">Rectification of your name</li>
                                        <li class="li paragraph-text">Rectification in the registration number, engine number or chassis number of the car</li>
                                        <li class="li paragraph-text">Change or rectification of address</li>
                                        <li class="li paragraph-text">Change in the model or the vehicle or the vehicle itself</li>
                                        <li class="li paragraph-text">Transfer of ownership</li>
                                        <li class="li paragraph-text">Change in fuel variant or addition of accessories</li>
                                        <li class="li paragraph-text">Change in RTO</li>
                                        <li class="li paragraph-text">Recovery or change in the NCB</li>
                                        <li class="li paragraph-text">Addition, rectification or cancellation of hypothecation </li>
                                    </ul>
                                    <p class="paragraph-text paragraph-style">For all the changes the insurance company should be contacted with a proof of
                                        change. Additional premiums might be required in some cases which should be paid before the change is endorsed in
                                        the insurance policy.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse35">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> For how many times can I claim for roadside assistance cover?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse35" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">You can claim the roadside assistance cover for a maximum of four times
                                        during the entire policy period.
                                    </p>                                                                        
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse36">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> If I want to cancel my policy, which documents should I submit?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse36" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">To cancel the policy you would have to submit a letter requesting
                                        cancellation, proof of an alternate policy to substitute the policy being cancelled, original policy document,
                                        proof of sale of the vehicle if it has been sold, acknowledgement letter from the RTO about cancellation of the
                                        policy, a NOC certificate from the institution which has financed the car.
                                    </p>                                                                        
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse366">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is ARAI?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse366" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">ARAI stands for Automotive Research Association of India. Anti-theft devices
                                        which have been approved by the ARAI and installed in the car would earn a premium discount.
                                    </p>                                                                        
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse37">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is endorsement?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse37" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">Any changes made in the car insurance policy is done through an endorsement
                                        in the original policy document. Endorsement is, therefore, a written proof of changes done to the policy.
                                    </p>                                                                        
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse38">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is a premium bearing endorsement?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse38" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">Premium bearing endorsement depicts that the change which is being made in
                                        the policy has attracted an additional premium.
                                    </p>                                                                        
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse39">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is CTL?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse39" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">CTL stands for Constructive Total Loss of the car. A loss if declared to be a
                                        CTL if the estimated repair costs exceed the IDV of the policy. In such cases, the IDV is paid as claim.
                                    </p>                                                                        
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse40">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> Can the car insurance policy be transferred to another individual?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse40" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">Yes, if you are selling your car to another individual you can also transfer
                                        the insurance policy of the car to the buyer. While the policy ownership would change, the no claim bonus would
                                        remain with you and you can use the bonus to claim a premium discount in another car insurance policy which you
                                        buy.
                                    </p>                                                                        
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse41">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is period of policy in car insurance?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse41" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">Period of policy depicts the total duration for which the car insurance
                                        policy remains effective on a particular car.
                                    </p>                                                                        
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse42">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is cover note?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse42" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">Before the final policy document is issued by the insurance company, a cover
                                        note is issued containing the details of the policy. The cover note is valid for 60 days after it is issued and
                                        serves as a proof of insurance till the final policy is issued.
                                    </p>                                                                        
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                    
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse43">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What is salvage?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse43" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text">In case of CTL, the value for which the damaged vehicle can be sold for
                                        salvage is called salvage value of the vehicle. This value is deducted from the IDV before the claim is settled.
                                    </p>                                                                        
                                </div>
                            </div>
                        </div>
                        <hr class="divider-faq">                        
                        <div class="panel panel-default panel-group-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title panel-title-faq h4-text">
                                    <a class="collapsed collapsed-link" data-toggle="collapse" data-parent="#panels5"
                                        href="#collapse44">
                                        <div class="plus-faq-icon">
                                            <i class="far fa-check">plus</i>
                                            <i class="far fa-check">minus</i>
                                        </div> What documents should be carried in the car at all times?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse44" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p class="paragraph-text ">A copy of the valid driving license, RC certificate of the car, insurance
                                        certificate and PUC certificate should be carried in the car at all times.
                                    </p>                                                                        
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
                <h2 class="blog-heading">Car Insurance Blogs</h2>
                <div class="blog-container clearfix">
                    <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="blog-cards">
                            <a href="#">
                                <img class="blog-image" src="https://www.turtlemint.com/blog/wp-content/uploads/2017/06/6-tips-to-reduce-your-health-insurance-premium.jpg"
                                    alt="">
                            </a>
                            <div class="blog-txt">
                                <h4>How cashless insurance can save you the day money ends!</h4>
                                <p id="blogtxt1" class="paragraph-style"></p>
                                <a class="link" href="#">Read more  <span class="arrow">&#8594</span></a>
                            </div>
                        </div>
                    </div> -->
    
                    <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="blog-cards">
                            <a href="#">
                                <img class="blog-image" src="https://www.turtlemint.com/blog/wp-content/uploads/2018/06/teen_car_insurance.jpg"
                                    alt="">
                            </a>
                            <div class="blog-txt">
                                <h4>Benefits of a Critical Illness Policy</h4>
                                <p id="blogtxt2" class="paragraph-style"></p>
                                <a class="link" href="#">Read more  <span class="arrow">&#8594</span></a>
                            </div>
                        </div>
                    </div> -->
    
                    <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="blog-cards">
                            <a href="#">
                                <img class="blog-image" src="https://www.turtlemint.com/blog/wp-content/uploads/2018/06/teen_car_insurance.jpg"
                                    alt="">
                            </a>
                            <div class="blog-txt">
                                <h4>Does it make sense to buy a Maternity Insurance Benefit Plan?</h4>
                                <p id="blogtxt3" class="paragraph-style"></p>
                                <a class="link" href="#">Read more  <span class="arrow">&#8594</span></a>
                            </div>
                        </div>
                    </div> -->
                </div>
    
                <div class="read-all-blog text-center clearfix">
                    <div class="col-xs-12">
                        <a href="https://www.turtlemint.com/blog/car-insurance/" class="link" target="_blank">Read all Car Insurance Blog</a>
                    </div>
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
    .SEO-content-table-container{
        margin-top: 10px;
    }
    .SEO-content-table{
        width: 624px; 
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


    @media (max-width: 767px)
    {
        .SEO-content{
            padding: 0px 35px 50px;
        }
        .SEO-content-table{width: unset;}
        .SEO-content-table>tr>td{width: unset;}

    }
</style>
<?php
get_footer();
