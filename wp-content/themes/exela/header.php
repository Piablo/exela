<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>exela</title>
</head>
<body>
    
<!-- exela header-->
<div class="main-container-exela-header">
    <div class="top-menu-exela-header">
        
        <div class="top-menu-spacer-2-exela-header">
            <a class="link-button-exela-header" href="<?php echo site_url('#') ?>">Personal Information Request</a>
            <a class="link-button-exela-header" href="<?php echo site_url('#') ?>">Log In | Log Out</a>
            <a class="link-button-exela-header" href="<?php echo site_url('#') ?>">Billing-Policy</a>
            <a class="link-button-exela-header" href="<?php echo site_url('#') ?>">Cookie-Policy</a>
            <a class="link-button-exela-header" href="<?php echo site_url('#') ?>">Terms of Use</a>
            <a class="link-button-exela-header" href="<?php echo site_url('#') ?>">Privacy-Policy</a>
            <a <?php if(is_page('about-us')) echo 'class="current-link-item"'?> class="link-button-exela-header" href="<?php echo site_url('/about-us') ?>">About Us</a>
        </div>
        <div class="top-menu-spacer-1-exela-header"></div>
    </div>
    <div class="main-menu-exela-header">
        <div class="logo-container-exela-header">
            <a href="<?php echo site_url('') ?>"><img class="logo-exela-header" src="<?php echo get_template_directory_uri(); ?>/images/header/logo.png" alt=""></a>
            
        </div>
        <div class="menu-container-exela-header">
            <div class="main-button-container-exela-header">
    
                <a <?php if(is_page('how-to-generate-leads')) echo 'class="current-menu-item"'?> class="main-button-exela-header" href="<?php echo site_url('/how-to-generate-leads') ?>">How to Generate Leads</a>
                <a <?php if(is_page('making-money-online')) echo 'class="current-menu-item"'?> class="main-button-exela-header" href="<?php echo site_url('/making-money-online') ?>">Making Money Online</a>
                <a <?php if(is_page('where-to-start')) echo 'class="current-menu-item"'?> class="main-button-exela-header" href="<?php echo site_url('/where-to-start') ?>">Business: Where to Start</a>
             
            
            </div>
        </div>
        <div class="contact-number-exela-header"><a href="tel: 01242375000" style="font-size:22px">01242 375000</a></div>
        <div class="search-bar-container-exela-header">
            <div class="search-box-controls-exela">
                <input class="search-txt-controls-exela" type="text" name="" placeholder="Search"></input>
                <a href="#" class="search-btn-controls-exela">
                    <i style="font-size:22px" class="fas fa-search"></i> 
                </a>
            </div>
        </div>
        <div class="hamburger-container-exela-header">
            <i style="font-size:22px" class="fas fa-bars" onclick="toggleMobileMenu()"></i>
        </div>
    </div>

    <div class="mobile-menu-exela-header" id="exela-mobile-hide">
        <a class="main-button-exela-header mobile-menu-button-exela" href="<?php echo site_url('#') ?>">Home</a>
        <a class="main-button-exela-header mobile-menu-button-exela" href="<?php echo site_url('#') ?>">Business: Where to Start</a>
        <a class="main-button-exela-header mobile-menu-button-exela" href="<?php echo site_url('#') ?>">Making Money Online</a>
        <a class="main-button-exela-header mobile-menu-button-exela" href="<?php echo site_url('#') ?>">How to Generate Leads</a>
    </div>
</div>

<div class="spacer"></div>

