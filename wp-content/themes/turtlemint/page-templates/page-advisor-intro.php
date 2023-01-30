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

    <div class="container find-advisor-section">
        <div class="left-side">
            <p class="h1-heading hide-md-down">Find an <span class="tm-highlight-text">Insurance advisor</span></p>
            <p class="h1-heading hide-md-up">Find an<br><span class="tm-highlight-text">Insurance advisor</span></p>
            <p class="tm-desc">Turtlemint insurance advisors are intermediaries who bridge the gap between insurance companies and policyholders.</p>
            <ul class="tm-checklist">
                <li>Our advisors are best in the industry & Present all across India</li>
                <li>Certified & IRDAI approved</li>
                <li>Gives best advice & service to customer</li>
            </ul>
        </div>
        <div class="right-side d-none">
            <div id="pincodePopup">
                <div class="tm-popup-dialog">
                    <div class="content-wrap">
                        <div class="tm-popup-content">
                            <div class="tm-popup-body">
                                <form class="tm-form" id="pincodeForm">
                                    <div class="form-wrap">
                                        <div class="tm-form-group filter-form-group">
                                            <label for="pincode">Select Insurance Type</label>
                                            <ul class="filter-select-group">
                                                <li>
                                                    <input type="radio" name="tm-insurance-type" id="tm-health-insurance" value="Health">
                                                    <label for="tm-health-insurance">
                                                        <span class="icon" id="health-icon" icon-colored="health2-icon" icon-default="health-icon"></span>Health
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="tm-insurance-type" id="tm-life-insurance" value="Life">
                                                    <label for="tm-life-insurance">
                                                        <span class="icon" id="life-icon" icon-colored="life2-icon" icon-default="life-icon"></span>Life
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="tm-insurance-type" id="tm-2-wheeler-insurance" value="TW">
                                                    <label for="tm-2-wheeler-insurance">
                                                        <span class="icon" id="two-wheeler-icon" icon-colored="two-wheeler2-icon" icon-default="two-wheeler-icon"></span>2 Wheeler
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="tm-insurance-type" id="tm-4-wheeler-insurance" value="FW">
                                                    <label for="tm-4-wheeler-insurance">
                                                        <span class="icon" id="four-wheeler-icon" icon-colored="four-wheeler2-icon" icon-default="four-wheeler-icon"></span>4 Wheeler
                                                    </label>
                                                </li>
                                            </ul>
                                            <p class="error-message">Please select type of insurance to proceed to the next step</p>
                                        </div>
                                        <div class="tm-form-group">
                                            <label for="pincode">Enter Pin code</label>
                                            <div class="single-input-group pincode-input-group">
                                                <input class="required" autofocus type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="">
                                                <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="">
                                                <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="">
                                                <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="">
                                                <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="">
                                                <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="">
                                            </div>
                                            <p class="error-message">Please select type of insurance to proceed to the next step</p>
                                        </div>
                                        <div class="location-wraper"> <!-- add loading class here -->
                                            <p class="location-name location-name-skeleton"></p>
                                            <p class="location-name d-none">Navada, Patna, Bihar</p>
                                        </div>
                                    </div>

                                    <button class="tm-button" disabled>Find Advisor</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container tm-advisor-stats-section">
    <div class="left-side">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/advisor-intro-banner.png" alt="Advisors Across Country" class="banner-image hide-md-down">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/advisor-intro-banner-mob.png" alt="Advisors Across Country" class="banner-image hide-md-up">
        <p class="h1-heading hide-md-up">Connecting <span class="tm-highlight-text">customers</span> and <span class="tm-highlight-text">advisors</span> across the country.</p>
    </div>
    <div class="right-side">
        <p class="h1-heading hide-md-down">Connecting <span class="tm-highlight-text">customers</span> and <span class="tm-highlight-text">advisors</span> across the country.</p>
        <div class="hide-md-down">
            <div class="stats-section">
                <div class="stat">
                    <p class="number">3.5M+</p>
                    <p class="title">Happy Customers</p>
                </div>
                <div class="stat">
                    <p class="number">240K+</p>
                    <p class="title">Advisors</p>
                </div>
                <div class="stat">
                    <p class="number">45+</p>
                    <p class="title">Insurance Partners</p>
                </div>
            </div>
        </div>
        <div class="hide-md-up">
            <div class="stats-section ">
                <div class="stat">
                    <p class="number">3.5M+</p>
                    <p class="title">Customers</p>
                </div>
                <div class="stat">
                    <p class="number">240K+</p>
                    <p class="title">Advisors</p>
                </div>
                <div class="stat">
                    <p class="number">45+</p>
                    <p class="title">Insurers</p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="advisor-help-section">
    <div class="container">
        <p class="h1-heading">How <span class="tm-highlight-text">insurance advisors</span> help customers</p>
        <div class="help-section">
            <div class="image-container">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/unbiased-advise.png" alt="Unbiased Advice" class="banner-image hide-md-down">
            </div>
            <div class="content">
                <p class="heading"><img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/unbiased-advise-icon.svg" alt="Unbiased Advice" class="icon hide-md-up">Unbiased Advice</p>
                <p class="desc">Whether you have a team of 2 or 200, our shared team inboxes keep everyone on the same page and in the</p>
                <ul class="tm-checklist">
                    <li>Leverage automation to move fast</li>
                    <li>Always give customers a human to chat to</li>
                    <li>Automate customer support and close leads faster</li>
                </ul>
            </div>
        </div>
        <div class="help-section">
            <div class="content">
                <p class="heading"><img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/certified-icon.svg" alt="Certified Industry Expert" class="icon hide-md-up">Certified Industry Expert</p>
                <p class="desc">An all-in-one customer service platform that helps you balance everything your customers need to be happy.</p>
                <ul class="tm-checklist">
                    <li>Keep your customers in the loop with live chat</li>
                    <li>Embed help articles right on your website</li>
                    <li>Customers never have to leave the page to find an answer</li>
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
                <p class="heading"><img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/renewal-support-icon.svg" alt="Renewal & Claim Support" class="icon hide-md-up">Renewal & Claim Support</p>
                <p class="desc">Whether you have a team of 2 or 200, our shared team inboxes keep everyone on the same page and in the</p>
                <ul class="tm-checklist">
                    <li>Leverage automation to move fast</li>
                    <li>Always give customers a human to chat to</li>
                    <li>Automate customer support and close leads faster</li>
                </ul>
            </div>
        </div>
        <div class="help-section">
            <div class="content">
                <p class="heading"><img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/quick-digital-support-icon.svg" alt="Quick Digital SupportUnbiased Advice" class="icon hide-md-up">Quick Digital Support</p>
                <p class="desc">An all-in-one customer service platform that helps you balance everything your customers need to be happy.</p>
                <ul class="tm-checklist">
                    <li>Keep your customers in the loop with live chat</li>
                    <li>Embed help articles right on your website</li>
                    <li>Customers never have to leave the page to find an answer</li>
                </ul>
            </div>
            <div class="image-container">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/quick-digital-support.png" alt="Quick Digital Support" class="banner-image hide-md-down">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="tm-testimonial-section">
        <p class="h1-heading">Best place for any <span class="tm-highlight-text">Insurance related issue</span></p>
        <div class="tm-testimonial-slider">
            <div class="tm-testimonial">
                <div class="tm-testimonial__wraper">
                    <p class="content">reat results. Enjoyable to work with, and most importantly, enabled us to have the presence on the web we needed to conduct business in today's market.</p>
                    <div class="author">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/testimonial-profile1.png" alt="Renewal & Claim Support" class="profile-image">
                        <div class="right-side">
                            <div class="review">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                            </div>
                            <p class="author-name">Ronald A. Webb</p>
                            <p class="author-position">Co-founder</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-testimonial">
                <div class="tm-testimonial__wraper">
                    <p class="content">reat results. Enjoyable to work with, and most importantly, enabled us to have the presence on the web we needed to conduct business in today's market.</p>
                    <div class="author">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/testimonial-profile1.png" alt="Renewal & Claim Support" class="profile-image">
                        <div class="right-side">
                            <div class="review">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                            </div>
                            <p class="author-name">Ronald A. Webb</p>
                            <p class="author-position">Co-founder</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-testimonial">
                <div class="tm-testimonial__wraper">
                    <p class="content">reat results. Enjoyable to work with, and most importantly, enabled us to have the presence on the web we needed to conduct business in today's market.</p>
                    <div class="author">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/testimonial-profile1.png" alt="Renewal & Claim Support" class="profile-image">
                        <div class="right-side">
                            <div class="review">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                            </div>
                            <p class="author-name">Ronald A. Webb</p>
                            <p class="author-position">Co-founder</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-testimonial">
                <div class="tm-testimonial__wraper">
                    <p class="content">reat results. Enjoyable to work with, and most importantly, enabled us to have the presence on the web we needed to conduct business in today's market.</p>
                    <div class="author">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/testimonial-profile1.png" alt="Renewal & Claim Support" class="profile-image">
                        <div class="right-side">
                            <div class="review">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/star-icon.svg">
                            </div>
                            <p class="author-name">Ronald A. Webb</p>
                            <p class="author-position">Co-founder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
