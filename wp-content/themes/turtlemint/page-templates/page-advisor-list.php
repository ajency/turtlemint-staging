<?php

/**
  Template Name: Advisor List
 */

$pincode = isset($_GET["pincode"]) ? htmlspecialchars($_GET["pincode"]) : NULL;
$vertical = isset($_GET["vertical"]) ? htmlspecialchars($_GET["vertical"]) : "4-wheeler";
$offset = isset($_GET["offset"]) ? htmlspecialchars($_GET["offset"]) : "1";

get_header('tmhome');
?>

<!-- pincode popup -->
<div class="tm-popup <?php echo !(isset($pincode) && isset($vertical)) ? "show" : ""; ?>" id="pincodePopup">
    <div class="tm-popup-dialog" role="document">
        <div class="content-wrap">
            <div class="tm-popup-content">
                <div class="tm-popup-header">
                    <button type="button" class="close" onclick="closePopup('pincodePopup')">
                        <span class="icon"></span>
                    </button>
                </div>
                <div class="tm-popup-body">
                    <div class="popup-icon">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/location-icon.svg" alt="location">
                    </div>
                    <p class="popup-heading">Find an advisor near you!</p>
                    <p class="popup-subheading">Enter your Pincode or give access to your location so we can show you advisors in your area</p>
                    <form class="tm-form" id="pincodeForm">
                        <div class="form-wrap">
                            <div class="tm-form-group">
                                <label for="pincode">Pin code</label>
                                <div class="single-input-group pincode-input-group">
                                    <input class="required" autofocus type="number" min="0" max="9" maxlength="1">
                                    <input class="required" type="number" min="0" max="9" maxlength="1">
                                    <input class="required" type="number" min="0" max="9" maxlength="1">
                                    <input class="required" type="number" min="0" max="9" maxlength="1">
                                    <input class="required" type="number" min="0" max="9" maxlength="1">
                                    <input class="required" type="number" min="0" max="9" maxlength="1">
                                </div>
                                <p class="error-message"></p>
                            </div>
                            <p class="location-name d-none">Navada, Patna, Bihar</p>
                        </div>

                        <button class="tm-button" disabled>Submit</button>
                        <p class="or-text">or</p>
                        <a class="locate-me-link"><img class="icon" src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/locate-icon.svg" alt="locate me"><span>Locate Me</span></a>
                    </form>
                </div>
                <div class="tm-popup-footer">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======= Navbar End ======= -->
<!-- Locate Advisor -->
<div style="height: 80px; background-color:#F3F3F3;" class="locator-bg">
</div>
<div class="container locator-section-main tm-loading" style="margin-bottom: 57px; margin-top: -44px;"><!-- add loading class here -->
    <div class="row ">
        <div class="col-md-12 tm-loading">
            <div class="row locator-section tm-filters-skeleton">
                <div class="left-side">
                    <div class="tm-select-dropdown">
                        <div class="tm-select-value">
                            <div class="icon-container"><img src="" alt="" class="icon"></div> <span class="title"></span>
                        </div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="tm-pincode-section">
                        <p class="pincode-title"></p>
                        <a class="pincode"></a>
                    </div>
                    <a class="locate-me-link"><img class="icon" src=""><span></span></a>
                </div>
            </div>
            <!-- filters content -->
            <div class="row locator-section">
                <div class="left-side">
                    <div class="tm-select-dropdown">
                        <div class="tm-select-value" onclick="tmSelectDropdown(this)"><img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/4-wheeler-colored-icon.svg" alt="4-wheeler" class="icon"> <span class="title">4 Wheeler</span></div>
                        <div class="tm-select-options">
                            <div class="tm-select-option selected" onclick="tmSelectDropdown(this)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/4-wheeler-colored-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/4-wheeler-icon.svg" alt="4-wheeler" class="icon">
                                <span class="title">4 Wheeler</span>
                            </div>
                            <div class="tm-select-option" onclick="tmSelectDropdown(this)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/2-wheeler-colored-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/2-wheeler-icon.svg" alt="2-wheeler" class="icon">
                                <span class="title">2 Wheeler</span>
                            </div>
                            <div class="tm-select-option" onclick="tmSelectDropdown(this)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/life-colored-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/life-icon.svg" alt="life" class="icon">
                                <span class="title">Life</span>
                            </div>
                            <div class="tm-select-option" onclick="tmSelectDropdown(this)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/health-colored-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/health-icon.svg" alt="health" class="icon">
                                <span class="title">Health </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="tm-pincode-section">
                        <p class="pincode-title">Pincode</p>
                        <a class="pincode tm-arrow-right" onclick="openPopup('pincodePopup')"><?php echo $pincode ?></a>
                    </div>
                    <a class="locate-me-link" onclick="openPopup('pincodePopup')"><img class="icon" src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/locate-icon.svg" alt="locate me"><span>Locate Me</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="advisor-list-wraper">

    <!-- Advisors headings -->
    <div class="container tm-heading-container tm-loading"> <!-- add loading class here -->
        <!-- skeleton -->
        <p class="tm-h1-regular tm-section-heading heading-skeleton"></p>
        <p class="tm-body tm-grey-text mb-0 tm-section-subheading subheading-skeleton"></p>
        <!-- headings -->
        <span class="hide-md-down ">
            <p class="tm-h1-regular tm-section-heading"><span class="tm-h1-bold tm-highlight-text">45 Advisors</span> Available Near you</p>
        </span>
        <span class="hide-md-up">
            <p class=" tm-h1-regular tm-section-heading"><span class="tm-h1-bold tm-highlight-text">45 Advisors</span><br>Available Near you</p>
        </span>
        <p class="tm-body tm-grey-text mb-0 tm-section-subheading">Book a free consultation with our certified and experienced Turtlemint advisors</p>
    </div>

    <!-- advisor cards main container -->
    <div class="container advisors-list-section tm-loading"><!-- add loading class here -->

        <!-- cards skeleton -->
        <div class="tm-advisor-list tm-skeleton">
            <!-- skeleton card -->
            <div class="tm-advisor-wrap">
                <div class="advisor-card tm-card-skeleton">
                    <div class="advisor-card__wraper">
                        <div class="advisor-image">
                            <img src="" alt="">
                        </div>
                        <p class="tm-h2-bold advisor-name"></p>
                        <p class="tm-body tm-grey-text advisor-location"></p>
                        <div class="row tm-stats">
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title"></p>
                                <p class="tm-body tm-grey-text stat-subtitle"></p>
                            </div>
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title"></p>
                                <p class="tm-body tm-grey-text stat-subtitle"></p>
                            </div>
                        </div>
                        <a class="tm-button"></a>
                    </div>
                </div>
            </div>
            <!-- skeleton card -->
            <div class="tm-advisor-wrap">
                <div class="advisor-card tm-card-skeleton">
                    <div class="advisor-card__wraper">
                        <div class="advisor-image">
                            <img src="" alt="">
                        </div>
                        <p class="tm-h2-bold advisor-name"></p>
                        <p class="tm-body tm-grey-text advisor-location"></p>
                        <div class="row tm-stats">
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title"></p>
                                <p class="tm-body tm-grey-text stat-subtitle"></p>
                            </div>
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title"></p>
                                <p class="tm-body tm-grey-text stat-subtitle"></p>
                            </div>
                        </div>
                        <a class="tm-button"></a>
                    </div>
                </div>
            </div>
            <!-- skeleton card -->
            <div class="tm-advisor-wrap">
                <div class="advisor-card tm-card-skeleton">
                    <div class="advisor-card__wraper">
                        <div class="advisor-image">
                            <img src="" alt="">
                        </div>
                        <p class="tm-h2-bold advisor-name"></p>
                        <p class="tm-body tm-grey-text advisor-location"></p>
                        <div class="row tm-stats">
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title"></p>
                                <p class="tm-body tm-grey-text stat-subtitle"></p>
                            </div>
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title"></p>
                                <p class="tm-body tm-grey-text stat-subtitle"></p>
                            </div>
                        </div>
                        <a class="tm-button"></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- advisor cards -->
        <div class="tm-advisor-list" id="firstFoldList">
            <!-- advisor card -->
            <div class="tm-advisor-wrap">
                <div class="advisor-card">
                    <div class="advisor-card__wraper">
                        <div class="advisor-image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/kaleen.png" alt="kaleen">
                        </div>
                        <p class="tm-h2-bold advisor-name">Kaleen Bhaiya</p>
                        <p class="tm-body tm-grey-text advisor-location">Andheri West, Mumbai</p>
                        <div class="row tm-stats">
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title">5 Years</p>
                                <p class="tm-body tm-grey-text stat-subtitle">Experience</p>
                            </div>
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title">700+</p>
                                <p class="tm-body tm-grey-text stat-subtitle">Policies Sold</p>
                            </div>
                        </div>
                        <a class="tm-button" onclick="openPopup('getInTouchPopup')">Get In Touch
                        </a>
                    </div>
                </div>
            </div>
            <!-- advisor card -->
            <div class="tm-advisor-wrap">
                <div class="advisor-card">
                    <div class="advisor-card__wraper">
                        <div class="advisor-image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/munna.png" alt="Munna Bhaiya">
                        </div>
                        <p class="tm-h2-bold advisor-name">Munna Bhaiya</p>
                        <p class="tm-body tm-grey-text advisor-location">Andheri West, Mumbai</p>
                        <div class="row tm-stats">
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title">5 Years</p>
                                <p class="tm-body tm-grey-text stat-subtitle">Experience</p>
                            </div>
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title">700+</p>
                                <p class="tm-body tm-grey-text stat-subtitle">Policies Sold</p>
                            </div>
                        </div>
                        <a class="tm-button" onclick="openPopup('getInTouchPopup')">Get In Touch</a>
                    </div>
                </div>
            </div>
            <!-- advisor card -->
            <div class="tm-advisor-wrap">
                <div class="advisor-card">
                    <div class="advisor-card__wraper">
                        <div class="advisor-image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/advisor-placeholder.png" alt="Guddu Bhaiya">
                        </div>
                        <p class="tm-h2-bold advisor-name">Guddu Bhaiya</p>
                        <p class="tm-body tm-grey-text advisor-location">Andheri West, Mumbai</p>
                        <div class="row tm-stats">
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title">5 Years</p>
                                <p class="tm-body tm-grey-text stat-subtitle">Experience</p>
                            </div>
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title">700+</p>
                                <p class="tm-body tm-grey-text stat-subtitle">Policies Sold</p>
                            </div>
                        </div>
                        <a class="tm-button" onclick="openPopup('getInTouchPopup')">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="advisor-steps-outer tm-loading"><!-- add loading class here -->
        <!-- advice steps skeleton-->
        <div class="container tm-advice-steps-container tm-steps-skeleton">
            <div class="tm-advice-steps-container__wraper">
                <div class="tm-headings">
                    <div class="left-side">
                        <p class="tm-h1-medium tm-section-heading heading-skeleton"></p>
                        <p class="tm-body-regular tm-grey-text mb-0 tm-section-subheading subheading-skeleton"></p>
                    </div>
                    <div class="right-side hide-md-down">
                        <a class="tm-link"></a>
                    </div>
                </div>
                <div class="tm-scrollbar-mob-horizontal tm-advise-steps">
                    <div class="tm-advise-step">
                        <div class="image-container">
                            <img src="">
                        </div>
                        <div class="step-num"></div>
                        <div class="step-connector"></div>
                        <p class="content"></p>
                        <p class="content2"></p>
                    </div>
                    <div class="tm-advise-step">
                        <div class="image-container">
                            <img src="">
                        </div>
                        <div class="step-num"></div>
                        <div class="step-connector"></div>
                        <p class="content"></p>
                        <p class="content2"></p>
                    </div>
                    <div class="tm-advise-step">
                        <div class="image-container">
                            <img src="">
                        </div>
                        <div class="step-num"></div>
                        <div class="step-connector"></div>
                        <p class="content"></p>
                        <p class="content2"></p>
                    </div>
                    <div class="tm-advise-step">
                        <div class="image-container">
                            <img src="">
                        </div>
                        <div class="step-num"></div>
                        <div class="step-connector"></div>
                        <p class="content"></p>
                        <p class="content2"></p>
                    </div>
                </div>
                <div class="hide-md-up link-container">
                    <a class="tm-link"></a>
                </div>
            </div>
        </div>
        <!-- advice steps -->
        <div class="container tm-advice-steps-container">
            <div class="tm-advice-steps-container__wraper">
                <div class="tm-headings">
                    <div class="left-side">
                        <p class="tm-h1-medium tm-section-heading">What to expect</p>
                        <p class="tm-body-regular tm-grey-text mb-0 tm-section-subheading">4 quick steps to getting the right free advise</p>
                    </div>
                    <div class="right-side hide-md-down">
                        <a href="#" class="tm-link arrow-right-filled">More about Turtlemint Advisors</a>
                    </div>
                </div>
                <div class="tm-scrollbar-mob-horizontal tm-advise-steps">
                    <div class="tm-advise-step">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/step-1.png" alt="Step 1">
                        </div>
                        <div class="step-num">Step 1</div>
                        <div class="step-connector"></div>
                        <p class="content">
                            <b>Search</b> an advisor near you
                        </p>
                    </div>
                    <div class="tm-advise-step">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/step-2.png" alt="Step 2">
                        </div>
                        <div class="step-num">Step 2</div>
                        <div class="step-connector"></div>
                        <p class="content">
                            Choose the <b>perfect match</b> for your requirements
                        </p>
                    </div>
                    <div class="tm-advise-step">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/step-3.png" alt="Step 3">
                        </div>
                        <div class="step-num">Step 3</div>
                        <div class="step-connector"></div>
                        <p class="content">
                            Direct <b>face-To Face Connect</b>
                        </p>
                    </div>
                    <div class="tm-advise-step">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/step-4.png" alt="Step 4">
                        </div>
                        <div class="step-num">Step 4</div>
                        <div class="step-connector"></div>
                        <p class="content">
                            Get The <b>right Insurance</b> Policy
                        </p>
                    </div>
                </div>
                <div class="hide-md-up link-container">
                    <a href="#" class="tm-link arrow-right-filled">More about Turtlemint Advisors</a>
                </div>
            </div>
        </div>
    </div>

    <!-- advisor cards main container -->
    <div class="container advisors-list-section tm-loading"><!-- add loading class here -->

        <!-- cards skeleton -->
        <div class="tm-advisor-list tm-skeleton">
            <!-- skeleton card -->
            <div class="tm-advisor-wrap">
                <div class="advisor-card tm-card-skeleton">
                    <div class="advisor-card__wraper">
                        <div class="advisor-image">
                            <img src="" alt="">
                        </div>
                        <p class="tm-h2-bold advisor-name"></p>
                        <p class="tm-body tm-grey-text advisor-location"></p>
                        <div class="row tm-stats">
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title"></p>
                                <p class="tm-body tm-grey-text stat-subtitle"></p>
                            </div>
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title"></p>
                                <p class="tm-body tm-grey-text stat-subtitle"></p>
                            </div>
                        </div>
                        <a class="tm-button"></a>
                    </div>
                </div>
            </div>
            <!-- skeleton card -->
            <div class="tm-advisor-wrap">
                <div class="advisor-card tm-card-skeleton">
                    <div class="advisor-card__wraper">
                        <div class="advisor-image">
                            <img src="" alt="">
                        </div>
                        <p class="tm-h2-bold advisor-name"></p>
                        <p class="tm-body tm-grey-text advisor-location"></p>
                        <div class="row tm-stats">
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title"></p>
                                <p class="tm-body tm-grey-text stat-subtitle"></p>
                            </div>
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title"></p>
                                <p class="tm-body tm-grey-text stat-subtitle"></p>
                            </div>
                        </div>
                        <a class="tm-button"></a>
                    </div>
                </div>
            </div>
            <!-- skeleton card -->
            <div class="tm-advisor-wrap">
                <div class="advisor-card tm-card-skeleton">
                    <div class="advisor-card__wraper">
                        <div class="advisor-image">
                            <img src="" alt="">
                        </div>
                        <p class="tm-h2-bold advisor-name"></p>
                        <p class="tm-body tm-grey-text advisor-location"></p>
                        <div class="row tm-stats">
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title"></p>
                                <p class="tm-body tm-grey-text stat-subtitle"></p>
                            </div>
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title"></p>
                                <p class="tm-body tm-grey-text stat-subtitle"></p>
                            </div>
                        </div>
                        <a class="tm-button"></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- advisor cards -->
        <div class="tm-advisor-list" id="lastFoldList">
            <!-- advisor card -->
            <div class="tm-advisor-wrap">
                <div class="advisor-card">
                    <div class="advisor-card__wraper">
                        <div class="advisor-image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/kaleen.png" alt="kaleen">
                        </div>
                        <p class="tm-h2-bold advisor-name">Kaleen Bhaiya</p>
                        <p class="tm-body tm-grey-text advisor-location">Andheri West, Mumbai</p>
                        <div class="row tm-stats">
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title">5 Years</p>
                                <p class="tm-body tm-grey-text stat-subtitle">Experience</p>
                            </div>
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title">700+</p>
                                <p class="tm-body tm-grey-text stat-subtitle">Policies Sold</p>
                            </div>
                        </div>
                        <a class="tm-button" onclick="openPopup('getInTouchPopup')">Get In Touch</a>
                    </div>
                </div>
            </div>
            <!-- advisor card -->
            <div class="tm-advisor-wrap">
                <div class="advisor-card">
                    <div class="advisor-card__wraper">
                        <div class="advisor-image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/munna.png" alt="Munna Bhaiya">
                        </div>
                        <p class="tm-h2-bold advisor-name">Munna Bhaiya</p>
                        <p class="tm-body tm-grey-text advisor-location">Andheri West, Mumbai</p>
                        <div class="row tm-stats">
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title">5 Years</p>
                                <p class="tm-body tm-grey-text stat-subtitle">Experience</p>
                            </div>
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title">700+</p>
                                <p class="tm-body tm-grey-text stat-subtitle">Policies Sold</p>
                            </div>
                        </div>
                        <a class="tm-button" onclick="openPopup('getInTouchPopup')">Get In Touch</a>
                    </div>
                </div>
            </div>
            <!-- advisor card -->
            <div class="tm-advisor-wrap">
                <div class="advisor-card">
                    <div class="advisor-card__wraper">
                        <div class="advisor-image">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/guddu.png" alt="Guddu Bhaiya">
                        </div>
                        <p class="tm-h2-bold advisor-name">Guddu Bhaiya</p>
                        <p class="tm-body tm-grey-text advisor-location">Andheri West, Mumbai</p>
                        <div class="row tm-stats">
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title">5 Years</p>
                                <p class="tm-body tm-grey-text stat-subtitle">Experience</p>
                            </div>
                            <div class="col-6 stat">
                                <p class="tm-h2-regular stat-title">700+</p>
                                <p class="tm-body tm-grey-text stat-subtitle">Policies Sold</p>
                            </div>
                        </div>
                        <a class="tm-button" onclick="openPopup('getInTouchPopup')">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Advisor List - Empty State  -->
<div class="container d-none">
    <div class="tm-empty-list">
        <div class="image-container">
            <img height="160" width="160" src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/empty-advisor-list.png" alt="No Advisors Found">
        </div>
        <p class="tm-h2-bold tm-heading">We are recruiting advisors in your area</p>
        <p class="tm-subheading">Submit your contact details to get free advise from Turtlemint insurance experts.</p>
        <a onclick="openPopup('getInTouchPopup')" class="tm-button large">Get in touch</a>
        <div class="call-details">
            <p class="title">Call us to get advise</p>
            <a href="tel:+918962995991" class="tm-link"><img height="32" width="32" src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/call-icon.svg" alt="call">+91 8962995991</a>
        </div>

    </div>
</div>

<!-- success popup -->
<div class="tm-popup" id="tmSuccessPopup">
    <div class="tm-popup-dialog" role="document">
        <div class="content-wrap">
            <div class="tm-popup-content">
                <div class="tm-popup-header">
                    <button type="button" class="close" onclick="closePopup('tmSuccessPopup')">
                        <span class="icon"></span>
                    </button>

                </div>
                <div class="tm-popup-body">
                    <div class="popup-icon">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/success-icon.svg" alt="success">
                    </div>
                    <p class="popup-heading">Sucess!</p>
                    <p class="popup-subheading">Our Insurance advisor Kaleen bhaiya will contact you shortly</p>
                </div>
                <div class="tm-popup-footer">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- get in touch popup -->
<div class="tm-popup" id="getInTouchPopup">
    <div class="tm-popup-dialog" role="document">
        <div class="content-wrap">
            <div class="tm-popup-content">
                <div class="tm-popup-header">
                    <button type="button" class="close" onclick="closePopup('getInTouchPopup')">
                        <span class="icon"></span>
                    </button>

                </div>
                <div class="tm-popup-body">
                    <div class="popup-icon">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/profile-icon.svg" alt="profile">
                    </div>
                    <p class="popup-heading">Just a bit more about you!</p>
                    <p class="popup-subheading">Please share your details so that our advisor can connect with you</p>
                    <form class="tm-form style2" id="getInTouchForm">
                        <div class="form-wrap">
                            <div class="tm-form-group">
                                <label for="name">Name</label>
                                <input class="required" name="name" id="name" type="text">
                            </div>
                            <div class="tm-form-group">
                                <label for="mobileNo">Mobile No.</label>
                                <div class="prefix">
                                    <span class="input-group-prefix">+91</span>
                                    <input class="required" type="number" name="mobileNo" id="mobileNo">
                                </div>
                                <p class="error-message"></p>
                            </div>

                            <button class="tm-button" disabled>Submit</button>
                            <p class="form-note">You agree to be contacted on whatsapp by submitting details</p>
                        </div>
                    </form>
                </div>
                <div class="tm-popup-footer">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- OTP popup -->
<div class="tm-popup" id="tmOtpPopup">
    <div class="tm-popup-dialog" role="document">
        <div class="content-wrap">
            <div class="tm-popup-content">
                <div class="tm-popup-header">
                    <button type="button" class="close" onclick="closePopup('tmOtpPopup')">
                        <span class="icon"></span>
                    </button>

                </div>
                <div class="tm-popup-body">
                    <div class="popup-icon">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/otp-icon.svg" alt="success">
                    </div>
                    <p class="popup-heading">OTP Verification</p>
                    <p class="popup-subheading">We’ve sent a verification code to your mobile<br><b>+91 8962995991</b></p>
                    <form class="tm-form" id="tmOtpForm">
                        <div class="form-wrap">
                            <div class="tm-form-group">
                                <label for="otp">OTP</label>
                                <div class="single-input-group otp-input-group">
                                    <input class="required" autofocus type="number" min="0" max="9" maxlength="1">
                                    <input class="required" type="number" min="0" max="9" maxlength="1">
                                    <input class="required" type="number" min="0" max="9" maxlength="1">
                                    <input class="required" type="number" min="0" max="9" maxlength="1">
                                    <input class="required" type="number" min="0" max="9" maxlength="1">
                                    <input class="required" type="number" min="0" max="9" maxlength="1">
                                </div>
                                <p class="error-message"></p>
                            </div>
                            <p class="resend-timer"><span class="resend-text">Resend code in</span> <span class="timer" id="countdowntimer"></span></p>
                        </div>

                        <button class="tm-button" disabled>Submit</button>
                    </form>
                </div>
                <div class="tm-popup-footer">

                </div>
            </div>
        </div>
    </div>
</div>

<?php if (isset($pincode) && isset($vertical)) { ?>
    <script type="text/javascript">
        window.addEventListener("load", async (event) => {
            let pincodeData = await getPincodeLocation(<?php echo $pincode ?>)
            getAdvisorList(pincodeData.latitude, pincodeData.longitude, <?php echo  "'" . $vertical . "', '" . $offset . "'" ?>)
        });
    </script>
<?php } ?>

<?php
get_footer('tmhome');
