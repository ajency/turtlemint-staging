<?php

/**
  Template Name: Advisor Intro
 */

$pincode = isset($_GET["pincode"]) && preg_match('/^[0-9]{6}$/', $_GET["pincode"]) ? htmlspecialchars($_GET["pincode"]) : NULL;
$vertical_array = array('FW', 'TW', 'Life', 'Health');
$vertical = isset($_GET["vertical"]) && in_array($_GET["vertical"], $vertical_array) ? htmlspecialchars($_GET["vertical"]) : NULL;
$offset = isset($_GET["offset"]) ? htmlspecialchars($_GET["offset"]) : "0";

get_header('tmhome');
?>

<script>
    /* banner image skeleton */
  function imageSkeletons(element){
    $(element).parents('.tm-loading').removeClass('tm-loading');
  }
</script>

<div class="tm-gradient-bg">
    <!-- Breadcrumb -->
    <div class="container"><!-- add loading class here -->
        <div class="row">
            <div class="col-md-12">
                <!-- breadcrumb content -->
                <ul class="tm-breadcrumb style2 breadcrumb">
                    <li><a href="<?php echo home_url() ?>">Home</a></li>
                    <?php if (!empty($html_list_of_breadcrumbs)) : ?>
                        <?php echo $html_list_of_breadcrumbs; ?>
                    <?php else : ?>
                        <?php echo get_hansel_and_gretel_breadcrumbs(); ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- find advisor section -->
    <div class="container">
        <div class="find-advisor-section">
            <div class="left-side">
                <h1 class="h1-heading hide-md-down">Find an <span class="tm-highlight-text">Insurance Advisor</span></h1>
                <p class="h1-heading hide-md-up">Find an<br><span class="tm-highlight-text">Insurance Advisor</span></p>
                <p class="tm-desc">Turtlemint Insurance Advisors provide expert assistance for all your insurance needs <b>Anywhere, Anytime</b>.</p>
                <ul class="tm-checklist">
                    <li>Expert Advice You Can Count On</li>
                    <li>Trained & Certified Insurance Advisor</li>
                    <li>Active Claim Support For Any Policy, Any Insurer</li>
                </ul>
            </div>
            <div class="right-side">
                <div class="tm-find-advisor-form">
                    <div class="tm-find-advisor-form__wraper">
                        <form class="tm-form" method="GET" action="<?php echo site_url() ?>/insurance-advisor-near-me" id="tmFindAdvisorForm" novalidate>
                            <div class="form-wrap">
                                <div class="tm-form-group filter-form-group">
                                    <label>Select Insurance Type</label>
                                    <ul class="filter-select-group">
                                        <li>
                                            <input type="radio" name="vertical" id="tm-health-insurance" value="Health" data-value="Health" required>
                                            <label for="tm-health-insurance">
                                                <span class="icon" id="health-icon" icon-colored="health2-icon" icon-default="health-icon"></span>Health
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" name="vertical" id="tm-life-insurance" value="Life" data-value="Life">
                                            <label for="tm-life-insurance">
                                                <span class="icon" id="life-icon" icon-colored="life2-icon" icon-default="life-icon"></span>Life
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" name="vertical" id="tm-2-wheeler-insurance" value="TW" data-value="Bike">
                                            <label for="tm-2-wheeler-insurance">
                                                <span class="icon" id="two-wheeler-icon" icon-colored="two-wheeler2-icon" icon-default="two-wheeler-icon"></span>Bike
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" name="vertical" id="tm-4-wheeler-insurance" value="FW" data-value="Car">
                                            <label for="tm-4-wheeler-insurance">
                                                <span class="icon" id="four-wheeler-icon" icon-colored="four-wheeler2-icon" icon-default="four-wheeler-icon"></span>Car
                                            </label>
                                        </li>
                                    </ul>
                                    <p class="error-message"></p>
                                </div>
                            </div>

                            <button class="tm-button">Find Advisor</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- gradient circle -->
<div class="tm-bg-wraper">

    <!-- statistics section -->
    <div class="container tm-advisor-stats-section">
        <div class="left-side tm-loading">
            <div class="banner-image tm-image-skeleton"></div>
            <div class="banner-image hide-md-down">
                <img onload="imageSkeletons(this)" src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/advisor-intro-banner.png" alt="Advisors Across Country">
            </div>
            <div class="banner-image hide-md-up">
                <img onload="imageSkeletons(this)" src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/advisor-intro-banner-mob.png" alt="Advisors Across Country">
            </div>
            <p class="h1-heading hide-md-up">Connecting <span class="tm-highlight-text">Customers</span> and <span class="tm-highlight-text">Advisors</span> Across The Country.</p>
        </div>
        <div class="right-side">
            <p class="h1-heading hide-md-down">Connecting <span class="tm-highlight-text">Customers</span> and <span class="tm-highlight-text">Advisors</span> Across The Country.</p>
            <div class="hide-md-down">
                <div class="stats-section">
                    <div class="stat">
                        <p class="number">270K+</p>
                        <p class="title">Insurance Advisors</p>
                    </div>
                    <div class="stat">
                        <p class="number">17K+</p>
                        <p class="title">Pin Codes</p>
                    </div>
                    <div class="stat">
                        <p class="number">74L<span class="d-md-none d-lg-inline-block">acs</span>+</p>
                        <p class="title">Policies Sold</p>
                    </div>
                </div>
            </div>
            <div class="hide-md-up">
                <div class="stats-section ">
                    <div class="stat">
                        <p class="number">270K+</p>
                        <p class="title">Insurance Advisors</p>
                    </div>
                    <div class="stat">
                        <p class="number">17K+</p>
                        <p class="title">Pin Codes</p>
                    </div>
                    <div class="stat">
                        <p class="number">74Lacs+</p>
                        <p class="title">Policies Sold</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="tm-gradient-bg2"></div>

    <!-- Advisors help section -->
    <div class="advisor-help-section">
        <div class="container">
            <h2 class="h1-heading">How does a Turtlemint <span class="tm-highlight-text">Insurance Advisor</span> help you</h2>
            <div class="help-section">
                <div class="image-container">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/unbiased-advise.png" alt="Unbiased Advice" class="banner-image hide-md-down">
                </div>
                <div class="content">
                    <p class="heading"><img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/unbiased-advise-icon.svg" alt="Unbiased Advice" class="icon hide-md-up">Digitally Empowered Advisors</p>
                    <p class="desc">Access to a wide network of insurance advisors near you to protect what’s important to you</p>
                    <ul class="tm-checklist">
                        <li>Continuous training and upskilling</li>
                        <li>Well-experienced & equipped with latest products</li>
                        <li>Digitally enabled expert insurance advisors</li>
                    </ul>
                </div>
            </div>
            <div class="help-section">
                <div class="content">
                    <p class="heading"><img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/certified-icon.svg" alt="Certified Industry Expert" class="icon hide-md-up">Advice That Puts You First</p>
                    <p class="desc">Unbiased & quality advice from our trusted advisor can get you the right insurance</p>
                    <ul class="tm-checklist">
                        <li>Leverage technology for right advice</li>
                        <li>Customer-first approach</li>
                        <li>Instant quotes tailored to your needs</li>
                    </ul>
                </div>
                <div class="image-container">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/certified-industry-expert.png" alt="Certified Industry Expert" class="banner-image hide-md-down">
                </div>
            </div>
            <div class="help-section">
                <div class="image-container">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/renewal-n-claim-support.png" alt="Renewal & Claim Support" class="banner-image hide-md-down">
                </div>
                <div class="content">
                    <p class="heading"><img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/renewal-support-icon.svg" alt="Renewal & Claim Support" class="icon hide-md-up">Hassle-Free Claim Assistance</p>
                    <p class="desc">Complete paperwork and 24x7 claim assistance from our advisors</p>
                    <ul class="tm-checklist">
                        <li>Get your claim in short time</li>
                        <li>Avoid claim rejections</li>
                        <li>Get maximum assured claim amount</li>
                    </ul>
                    <!-- <small class="d-block mt-4">Please note: Final Claim settlement is at the discretion of the insurers. </small> -->
                </div>
            </div>
            <div class="help-section">
                <div class="content">
                    <p class="heading"><img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/quick-digital-support-icon.svg" alt="Quick Digital SupportUnbiased Advice" class="icon hide-md-up">Insurance Buying Made Easy</p>
                    <p class="desc">Making insurance buying process simple with instant quotes from our certified experts</p>
                    <ul class="tm-checklist">
                        <li>Option to choose from 45+ top insurers</li>
                        <li>Expert Advisor at your doorstep</li>
                        <li>100% digital and paperless process</li>
                    </ul>
                </div>
                <div class="image-container">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/quick-digital-support.png" alt="Quick Digital Support" class="banner-image hide-md-down">
                </div>
            </div>
        </div>
    </div>

</div>

<!-- testimonial section -->
<div class="container">
    <div class="tm-testimonial-section">
        <p class="h1-heading">Our Customers Love Us!</p>
        <div class="tm-testimonial-slider">
            <div class="tm-testimonial">
                <div class="tm-testimonial__wraper">
                    <p class="content">Turtlemint’s personalised assistance helped me solve my doubts and find the most suitable policy. Thank you Turtlemint for simplifying insurance</p>
                    <div class="author">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/mihir.png" alt="Renewal & Claim Support" class="profile-image">
                        <div class="right-side">
                            <div class="review">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                            </div>
                            <p class="author-name">Mihir</p>
                            <!-- <p class="author-position">Co-founder</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-testimonial">
                <div class="tm-testimonial__wraper">
                    <p class="content">One platform, multiple insurers. Thank you Turtlemint for allowing me to compare the best plans to buy the most suitable policy with ease</p>
                    <div class="author">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/anupama.png" alt="Renewal & Claim Support" class="profile-image">
                        <div class="right-side">
                            <div class="review">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                            </div>
                            <p class="author-name">Anupama</p>
                            <!-- <p class="author-position">Co-founder</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-testimonial">
                <div class="tm-testimonial__wraper">
                    <p class="content">Thanks to Turtlemint’s online platform buying insurance has become simple. I bought and renewed my policies hassle-free through Turtlemint within minutes</p>
                    <div class="author">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/ajay.png" alt="Renewal & Claim Support" class="profile-image">
                        <div class="right-side">
                            <div class="review">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                            </div>
                            <p class="author-name">Ajay</p>
                            <!-- <p class="author-position">Co-founder</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-testimonial">
                <div class="tm-testimonial__wraper">
                    <p class="content">I never knew making insurance claims would be so simple. I thank the Turtlemint team for their excellent assistance in claim settlement</p>
                    <div class="author">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/abdul.png" alt="Renewal & Claim Support" class="profile-image">
                        <div class="right-side">
                            <div class="review">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                            </div>
                            <p class="author-name">Abdul</p>
                            <!-- <p class="author-position">Co-founder</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- text sections -->
<div class="container">
    <div class="tm-content">
        <p class="heading">What kind of insurance policies does Turtlemint offer?</p>
        <p class="body">Turtlemint offers Car, Bike, Health as well as Life Insurance plans from various top insurers all under one roof through our digitally enabled & certified advisors.</p>
    </div>
    <div class="tm-content">
        <p class="heading">Who are Turtlemint Advisors?</p>
        <p class="body">Turtlemint Insurance Advisors <b>(POSP)</b> offer expert advice to provide the right insurance plan from 45+ insurers based on your needs for health, life, car and bike insurance.</p>
    </div>
    <div class="tm-content">
        <p class="heading">Are Turtlemint Advisors certified and licensed?</p>
        <p class="body">Yes, Turtlemint Insurance Advisors are certified experts and recognized by IRDAI.</p>
    </div>
    <div class="tm-content">
        <p class="heading">How many locations are these Advisors present in?</p>
        <p class="body">Turtlemint Advisors are currently present in 17,000+ Pin Codes in India… and growing.</p>
    </div>
    <div class="tm-content">
        <p class="heading">Will the advisors help at all steps of the insurance buying process?</p>
        <p class="body">Our experts will advise and guide you right from the policy selection process, complete documentation to quick claim settlement assistance.</p>
    </div>
    <div class="tm-content">
        <p class="heading">Is there any support for claims?</p>
        <p class="body">There is full claim support from Turtlemint PoSP Advisor for any policy, any insurer whether bought from Turtlemint. You can raise a claim by calling <a class="tm-highlight-text" href="tel:18002660101"><b>1800 266 0101</b></a> or emailing at <a class="tm-highlight-text" href="mailto:claims@turtlemint.com"><b>claims@turtlemint.com</b></a> and submit documents as advised by our claims expert.</p>
    </div>
    <div class="tm-content">
        <p class="heading">Is home visit service available?</p>
        <p class="body">Yes, you can request a face-to-face consultation with our expert advisors.</p>
    </div>
    <div class="tm-content">
        <p class="body">*Please note: Final Claim settlement is at the discretion of the insurers.</p>
    </div>
</div>

<script type="text/javascript">
    window.tm_vertical_data = <?php echo !(isset($vertical)) ? "'FW'" : "'" . $vertical . "'"; ?>;
    window.tm_offset = <?php echo $offset ?>;
    window.addEventListener("load", async (event) => {
        <?php if (isset($pincode) && isset($vertical)) { ?>
            let pincodeData = await getPincodeLocation(<?php echo $pincode ?>)
            getAdvisorList(pincodeData.pinCode, <?php echo  "'" . $vertical . "', '" . $offset . "'" ?>)
        <?php }
        if (isset($vertical)) {  ?>
            populateVertical()
        <?php }
        if (isset($pincode)) { ?>
            pincodeValidaion()
            window.tm_pincode_data = <?php echo $pincode;
                                    } ?>
    });
</script>

<?php
get_footer('tmhome');
