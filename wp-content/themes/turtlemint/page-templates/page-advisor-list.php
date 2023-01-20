<?php

/**
  Template Name: Advisor List
 */

(isset($lat) && isset($long)) ? "hide popup" : "show popup";

get_header('tmhome');
?>

<!-- ======= Navbar End ======= -->
<!-- Locate Advisor -->
<div style="height: 80px; background-color:#F3F3F3;" class="locator-bg">
</div>
<div class="container locator-section-main tm-loading" style="margin-bottom: 57px; margin-top: -44px;"><!-- add loading class here -->
    <div class="row ">
        <div class="col-md-12">
            <!-- skeleton -->
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
                            <div class="tm-select-option" onclick="tmSelectDropdown(this)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/4-wheeler-colored-icon.svg">
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
                        <a class="pincode tm-arrow-right" onclick="openPopup('pincodePopup')">803213</a>
                    </div>
                    <a class="locate-me-link" onclick="openPopup('pincodePopup')"><img class="icon" src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/locate-icon.svg" alt="locate me"><span>Locate Me</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

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
    <div class="tm-advisor-list">
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
                    <a class="tm-button">Get In Touch
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
                    <a class="tm-button">Get In Touch</a>
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
                    <a class="tm-button">Get In Touch</a>
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
    <div class="tm-advisor-list">
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
                    <a class="tm-button">Get In Touch</a>
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
                    <a class="tm-button">Get In Touch</a>
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
                    <a class="tm-button">Get In Touch</a>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- pincode popup -->
<div class="tm-popup" id="pincodePopup">
    <div class="tm-popup-dialog" role="document">
        <div class="tm-popup-content">
            <div class="tm-popup-header">
                <button type="button" class="close" onclick="closePopup('pincodePopup')">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="tm-popup-body">

            </div>
            <div class="tm-popup-footer">

            </div>
        </div>
    </div>
</div>
</div>

<?php
get_footer('tmhome');
