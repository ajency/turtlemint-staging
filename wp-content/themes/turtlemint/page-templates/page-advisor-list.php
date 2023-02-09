<?php

/**
  Template Name: Advisor List
 */

$pincode = isset($_GET["pincode"]) && preg_match('/^[0-9]{6}$/', $_GET["pincode"]) ? htmlspecialchars($_GET["pincode"]) : NULL;
$vertical_array = array('FW','TW','Life','Health');
$vertical = isset($_GET["vertical"]) && in_array($_GET["vertical"], $vertical_array) ? htmlspecialchars($_GET["vertical"]) : NULL ;
$offset = isset($_GET["offset"]) ? htmlspecialchars($_GET["offset"]) : "0";

get_header('tmhome');
?>

<!-- pincode popup -->
<div class="tm-popup <?php echo !(isset($pincode) && isset($vertical)) ? "show restrict-event" : ""; ?>" id="pincodePopup">
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
                            <div class="tm-form-group filter-form-group <?php echo (isset($vertical)) ? "d-none" : "" ?>">
                                <label for="pincode">Select Insurance Type</label>
                                <ul class="filter-select-group">
                                    <li>
                                        <input type="radio" name="tm-insurance-type" id="tm-health-insurance" <?php echo $vertical=="Health" ? "checked" : ""; ?> value="Health">
                                        <label for="tm-health-insurance">
                                            <span class="icon" id="<?php echo $vertical=="Health" ? "health2-icon" : "health-icon"; ?>" icon-colored="health2-icon" icon-default="health-icon"></span>Health
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" name="tm-insurance-type" id="tm-life-insurance" <?php echo $vertical=="Life" ? "checked" : ""; ?> value="Life">
                                        <label for="tm-life-insurance">
                                            <span class="icon" id="<?php echo $vertical=="life" ? "life2-icon" : "life-icon"; ?>" icon-colored="life2-icon" icon-default="life-icon"></span>Life
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" name="tm-insurance-type" id="tm-2-wheeler-insurance" <?php echo $vertical=="TW" ? "checked" : ""; ?> value="TW">
                                        <label for="tm-2-wheeler-insurance">
                                            <span class="icon" id="<?php echo $vertical=="TW" ? "two-wheeler2-icon" : "two-wheeler-icon"; ?>" icon-colored="two-wheeler2-icon" icon-default="two-wheeler-icon"></span>Bike
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" name="tm-insurance-type" id="tm-4-wheeler-insurance" <?php echo $vertical=="FW" ? "checked" : ""; ?> <?php echo $vertical== null ? "checked" : ""; ?> value="FW">
                                        <label for="tm-4-wheeler-insurance">
                                            <span class="icon" id="<?php if($vertical=="FW"){echo "four-wheeler2-icon";} elseif($vertical== null){echo "four-wheeler2-icon";} else{echo "four-wheeler-icon";} ?>" icon-colored="four-wheeler2-icon" icon-default="four-wheeler-icon"></span>Car
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- <div class="tm-form-group filter-form-group d-none">
                                <div class="tm-select-dropdown">
                                    <div class="tm-select-value" data-value="FW"><img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/4-wheeler-colored-icon.svg" alt="4 Wheeler Insurance" class="icon"> <span class="title">4 Wheeler</span></div>
                                    <div class="tm-select-options">
                                        <div title="4 Wheeler Insurance" class="tm-select-option <?php echo $vertical=="FW" ? "selected" : ""; ?>" data-value="FW" onclick="tmSelectDropdown(this)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/4-wheeler-colored-icon.svg">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/4-wheeler-icon.svg" alt="4 Wheeler Insurance" class="icon">
                                            <span class="title">4 Wheeler</span>
                                        </div>
                                        <div title="2 Wheeler Insurance" class="tm-select-option <?php echo $vertical=="TW" ? "selected" : ""; ?>" data-value="TW" onclick="tmSelectDropdown(this)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/2-wheeler-colored-icon.svg">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/2-wheeler-icon.svg" alt="2 Wheeler Insurance" class="icon">
                                            <span class="title">2 Wheeler</span>
                                        </div>
                                        <div title="Life Insurance" class="tm-select-option <?php echo $vertical=="Life" ? "selected" : ""; ?>" data-value="Life" onclick="tmSelectDropdown(this)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/life-colored-icon.svg">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/life-icon.svg" alt="Life Insurance" class="icon">
                                            <span class="title">Life</span>
                                        </div>
                                        <div title="Health Insurance" class="tm-select-option <?php echo $vertical=="Health" ? "selected" : ""; ?>" data-value="Health" onclick="tmSelectDropdown(this)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/health-colored-icon.svg">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/health-icon.svg" alt="Health Insurance" class="icon">
                                            <span class="title">Health </span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="tm-form-group">
                                <label for="pincode">Enter Pin code</label>
                                <div class="single-input-group pincode-input-group">
                                    <input class="required" autofocus type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $pincode[0]?>">
                                    <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $pincode[1]?>">
                                    <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $pincode[2]?>">
                                    <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $pincode[3]?>">
                                    <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $pincode[4]?>">
                                    <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $pincode[5]?>">
                                </div>
                                <p class="error-message"></p>
                            </div>
                            <div class="location-wraper"> <!-- add loading class here -->
                                <p class="location-name location-name-skeleton"></p>
                                <p class="location-name d-none">Navada, Patna, Bihar</p>
                            </div>
                        </div>

                        <button class="tm-button" <?php echo !(isset($pincode)) ? 'disabled':''; ?> >Submit</button>
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
<div class="container locator-section-main tm-loading" style="margin-bottom: 29px; margin-top: -44px;"><!-- add loading class here -->
    <div class="row ">
        <div class="col-md-12 tm-loading">
            <div class="row locator-section tm-filters-skeleton">
                <div class="left-side">
                    <div class="tm-select-dropdown skeleton-dropdown">
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
                        <div class="tm-select-value" data-value="FW" onclick="tmSelectDropdown(this)"><img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/4-wheeler-colored-icon.svg" alt="4 Wheeler Insurance" class="icon"> <span class="title">Car</span></div>
                        <div class="tm-select-options">
                            <div title="4 Wheeler Insurance" class="tm-select-option <?php echo $vertical=="FW" ? "selected" : ""; ?>" data-value="FW" onclick="tmSelectDropdown(this, true)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/4-wheeler-colored-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/4-wheeler-icon.svg" alt="4 Wheeler Insurance" class="icon">
                                <span class="title">Car</span>
                            </div>
                            <div title="2 Wheeler Insurance" class="tm-select-option <?php echo $vertical=="TW" ? "selected" : ""; ?>" data-value="TW" onclick="tmSelectDropdown(this, true)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/2-wheeler-colored-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/2-wheeler-icon.svg" alt="2 Wheeler Insurance" class="icon">
                                <span class="title">Bike</span>
                            </div>
                            <div title="Life Insurance" class="tm-select-option <?php echo $vertical=="Life" ? "selected" : ""; ?>" data-value="Life" onclick="tmSelectDropdown(this, true)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/life-colored-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/life-icon.svg" alt="Life Insurance" class="icon">
                                <span class="title">Life</span>
                            </div>
                            <div title="Health Insurance" class="tm-select-option <?php echo $vertical=="Health" ? "selected" : ""; ?>" data-value="Health" onclick="tmSelectDropdown(this, true)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/health-colored-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/health-icon.svg" alt="Health Insurance" class="icon">
                                <span class="title">Health </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="tm-pincode-section">
                        <p class="pincode-title">Pincode</p>
                        <a class="pincode tm-arrow-right" id="pincode-filter-input" onclick="openPopup('pincodePopup')"><?php echo $pincode ?></a>
                    </div>
                    <a class="locate-me-link"><img class="icon" src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/locate-icon.svg" alt="locate me"><span>Locate Me</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="advisor-list-wraper">

    <!-- Breadcrumb -->
    <div class="container tm-preloader tm-loading"><!-- add loading class here -->
        <div class="row">
            <div class="col-md-12">
                <!-- breadcrumb-skeleton -->
                <div class="tm-breadcrumb breadcrumb-skeleton">
                    <div class="home-icon"></div>
                    <p></p>
                </div>
                <!-- breadcrumb content -->
                <ul class="tm-breadcrumb style2 breadcrumb">
                    <li><a href="<?php echo home_url() ?>">Home</a></li>
                        <?php if(!empty($html_list_of_breadcrumbs)) : ?>
                        <?php echo $html_list_of_breadcrumbs; ?>  
                        <?php else : ?>
                        <?php echo get_hansel_and_gretel_breadcrumbs(); ?>
                        <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Advisors headings -->
    <div class="container tm-heading-container tm-preloader tm-loading"> <!-- add loading class here -->
        <!-- skeleton -->
        <p class="tm-h1-regular tm-section-heading heading-skeleton"></p>
        <p class="tm-body tm-grey-text mb-0 tm-section-subheading subheading-skeleton"></p>
        <!-- headings -->
        <span class="hide-md-down ">
            <h1 class="tm-h1-regular tm-section-heading"><span class="tm-h1-bold tm-highlight-text agent-count-js">45 Insurance Advisors</span> Available Near you</h1>
        </span>
        <span class="hide-md-up">
            <h1 class=" tm-h1-regular tm-section-heading"><span class="tm-h1-bold tm-highlight-text agent-count-js">45 Insurance Advisors</span><br>Available Near you</h1>
        </span>
        <p class="tm-body tm-grey-text mb-0 tm-section-subheading">Book a free consultation with our certified and experienced Turtlemint advisors</p>
    </div>

    <!-- advisor cards main container -->
    <div class="container advisors-list-section tm-preloader tm-loading"><!-- add loading class here -->

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

    <div class="advisor-steps-outer tm-preloader tm-loading"><!-- add loading class here -->
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
                        <a href="<?php echo site_url() ?>/advisor-intro" class="tm-link arrow-right-filled">More about Turtlemint Advisors</a>
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
                    <a href="<?php echo site_url() ?>/advisor-intro" class="tm-link arrow-right-filled">More about Turtlemint Advisors</a>
                </div>
            </div>
        </div>
    </div>

    <!-- advisor cards main container -->
    <div class="container advisors-list-section tm-preloader tm-loading"><!-- add loading class here -->

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

<!-- Loader -->
<div class="container advisors-list-section d-none" id="paginationLoader"><!-- add loading class here -->
    <!-- cards skeleton -->
    <div class="tm-advisor-list tm-skeleton" style="display: grid;">
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
</div>

<!-- Advisor List - Empty State  -->
<div class="container" id="empty-screen-wrap">
    <div class="tm-empty-list">
        <div class="image-container">
            <img height="160" width="160" src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/tm-img/empty-advisor-list.png" alt="No Advisors Found">
        </div>
        <p class="tm-h2-bold tm-heading">We are recruiting advisors in your area</p>
        <p class="tm-subheading">Submit your contact details to get free advise from Turtlemint insurance experts.</p>
        <a class="tm-button large" onclick="openPopup('getInTouchPopupEmptyScreen')">Get in touch</a>
        <div class="call-details">
            <p class="title">Call us to get advise</p>
            <a href="tel:+918962995991" class="tm-link"><img height="32" width="32" src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/call-icon.png" alt="call">+91 8962995991</a>
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
                    <p class="popup-heading">Success!</p>
                    <p class="popup-subheading">Our Insurance advisor <span id="tm_advisor_name">Kaleen bhaiya</span> will contact you shortly</p>
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
                    <form class="tm-form style2" id="getInTouchForm" novalidate>
                        <div class="form-wrap">
                            <div class="tm-form-group">
                                <label for="tm-name">Name</label>
                                <input class="required" name="tm-name" id="tm-name" type="text">
                                <p class="error-message"></p>
                            </div>
                            <div class="tm-form-group">
                                <label for="tm-mobileNo">Mobile No.</label>
                                <div class="prefix">
                                    <span class="input-group-prefix">+91</span>
                                    <input class="required" type="number" name="tm-mobileNo" id="tm-mobileNo">
                                </div>
                                <p class="error-message"></p>
                            </div>

                            <button class="tm-button" type="submit" disabled>Submit</button>
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
                    <p class="popup-subheading">We’ve sent a verification code to your mobile<br><b id='otpPhone'>+91 8962995991</b></p>
                    <form class="tm-form" id="tmOtpForm">
                        <div class="form-wrap">
                            <div class="tm-form-group">
                                <label for="otp">OTP</label>
                                <div class="single-input-group otp-input-group">
                                    <input class="required" autofocus type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                    <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                    <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                    <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                    <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                    <input class="required" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
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

<!-- Empty screen get in touch popup -->
<div class="tm-popup" id="getInTouchPopupEmptyScreen">
    <div class="tm-popup-dialog" role="document">
        <div class="content-wrap">
            <div class="tm-popup-content">
                <div class="tm-popup-header">
                    <button type="button" class="close" onclick="closePopup('getInTouchPopupEmptyScreen')">
                        <span class="icon"></span>
                    </button>

                </div>
                <div class="tm-popup-body">
                    <div class="popup-icon">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/profile-icon.svg" alt="profile">
                    </div>
                    <p class="popup-heading">Just a bit more about you!</p>
                    <p class="popup-subheading">Please share your details so that our advisor can connect with you</p>
                    <div class="tm-form style2 tm-google-form">
                        <?php echo do_shortcode( '[contact-form-7 id="23306" title="customer details"]'); ?>
                    </div>
                    <p class="form-note">You agree to be contacted on whatsapp by submitting details</p>
                </div>
                <div class="tm-popup-footer">

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    sessionStorage.setItem('tm_vertical_data',<?php echo !(isset($vertical)) ? "'FW'" : "'".$vertical."'"; ?>)
    window.tm_offset = <?php echo $offset; ?>;
    window.addEventListener("load", async (event) => {
    <?php if (isset($pincode) && isset($vertical)) { ?>
            let pincodeData = await getPincodeLocation(<?php echo $pincode ?>)
            getAdvisorList(pincodeData.pinCode, <?php echo  "'" . $vertical . "', '" . $offset . "'" ?>)
    <?php } if(isset($vertical)) {  ?>
            populateVertical()
    <?php } if(isset($pincode)) { ?>
        sessionStorage.setItem("tm_pincode_data",JSON.stringify({"pinCode": <?php echo $pincode; ?>}))
        pincodeValidaion()
    <?php } ?>
    });
    sessionStorage.getItem('tm_user_name') ? document.getElementById('tm-name').value = sessionStorage.getItem('tm_user_name') : '';
    sessionStorage.getItem('tm_user_phone') ? document.getElementById('tm-mobileNo').value = sessionStorage.getItem('tm_user_phone') : '';
    sessionStorage.getItem('tm_user_name') && sessionStorage.getItem('tm_user_phone') ? $('#getInTouchForm [type=submit]').removeAttr('disabled') : '';
</script>

<?php
get_footer('tmhome');
