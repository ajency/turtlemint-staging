<?php

/**
  Template Name: Advisor List
 */

get_header('tmhome');
?>

<!-- ======= Navbar End ======= -->

<!-- Locate Advisor -->
<div style="height: 80px; background-color:#F3F3F3;" class="locator-bg">
</div>
<div class="container locator-section-main" style="margin-bottom: 57px; margin-top: -44px;">
    <div class="row ">
        <div class="col-md-12">
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
                        <a class="pincode tm-arrow-right">803213</a>
                    </div>
                    <a class="locate-me-link"><img class="icon" src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/locate-icon.svg" alt="locate me"><span>Locate Me</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Advisors -->
<div class="container">
    <p class="hide-md-down tm-h1-regular tm-section-heading"><span class="tm-h1-bold tm-highlight-text">45 Advisors</span> Available Near you</p>
    <p class="hide-md-up tm-h1-regular tm-section-heading"><span class="tm-h1-bold tm-highlight-text">45 Advisors</span><br>Available Near you</p>
    <p class="tm-body tm-grey-text mb-0 tm-section-subheading">Book a free consultation with our certified and experienced Turtlemint advisors</p>
</div>

<div class="container advisors-list-section">
    <div class="tm-advisor-list">
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
                <a href="" class="tm-button-green">Get In Touch</a>
            </div>
        </div>
        <div class="advisor-card">
            <div class="advisor-card__wraper">
                <div class="advisor-image">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/munna.png" alt="Munna">
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
                <a href="" class="tm-button-green">Get In Touch</a>
            </div>
        </div>
        <div class="advisor-card">
            <div class="advisor-card__wraper">
                <div class="advisor-image">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/advisor-placeholder.png" alt="Guddu">
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
                <a href="" class="tm-button-green">Get In Touch</a>
            </div>
        </div>
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
                <a href="" class="tm-button-green">Get In Touch</a>
            </div>
        </div>
        <div class="advisor-card">
            <div class="advisor-card__wraper">
                <div class="advisor-image">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/munna.png" alt="Munna">
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
                <a href="" class="tm-button-green">Get In Touch</a>
            </div>
        </div>
        <div class="advisor-card">
            <div class="advisor-card__wraper">
                <div class="advisor-image">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/guddu.png" alt="Guddu">
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
                <a href="" class="tm-button-green">Get In Touch</a>
            </div>
        </div>
    </div>
</div>

<?php
get_footer('tmhome');
