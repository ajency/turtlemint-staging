<?php

/**
  Template Name: Advisor List
 */

get_header('tmhome');
?>

<!-- ======= Navbar End ======= -->

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
                            <div class="tm-select-option" onclick="tmSelectDropdown(this)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/2-wheeler-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/2-wheeler-icon.svg" alt="2-wheeler" class="icon">
                                <span class="title">2 Wheeler</span>
                            </div>
                            <div class="tm-select-option" onclick="tmSelectDropdown(this)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/life-icon.svg">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/life-icon.svg" alt="life" class="icon">
                                <span class="title">Life</span>
                            </div>
                            <div class="tm-select-option" onclick="tmSelectDropdown(this)" data-icon="<?php echo get_stylesheet_directory_uri() ?>/tm-assets/img/icons/health-icon.svg">
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

<?php
get_footer('tmhome');
