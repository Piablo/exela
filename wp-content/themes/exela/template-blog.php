<?php
/* Template Name: Blog */
get_header();
?>

<!--exela-header-main-->

<div class="main-container-exela-header-main">
    <img src="<?php echo get_template_directory_uri(); ?>/images/page-6/header-image.jpg" alt="" class="main-image-exela-header-main">
    <div class="opacity-div-exela-header-main">
        <div class="text-containers-wrapper-exela-header-main">
            <div class="text-container-exela-header-main">
                <h1 class="custom-font align-center white-text" style="font-weight: bold">About</h1>
            </div>
            <div class="text-container-exela-header-main">
                <h1 class="custom-font align-center white-text"style="font-weight: normal">Our Company</h1>
            </div>
        </div>
    </div>
</div>

<!--exela-banner-1-->

<div class="main-container-exela-banner-1">
    <div class="logos-container-exela-banner-1">
        <div class="logo-container-exela-banner-1 logo-1-exela-banner-1"></div>
        <div class="logo-container-exela-banner-1 logo-2-exela-banner-1"></div>
        <div class="logo-container-exela-banner-1 logo-3-exela-banner-1"></div>
    </div>
</div>

<!--exela-form-1-->

<div class="main-container-exela-form-1">
    <div class="grid-2-container-exela-form-1">
        <div class="container-1-exela-form-1">
            <h1 class="custom-font align-center">We've tailor-made our services to ensure you get exactly what you need</h1>
            <p class="custom-p-font align-center">We would love to help grow your business, find out how we can help you!</p>
            <div class="button-container-exela-form-1">
                <div class="button-2-controls-exela" style="font-size: 1.2vw">View our services</div>
            </div>
        </div>
        <div class="container-1-exela-form-1">
        <h1 class="custom-font align-center">Stay up to date with our latest news!</h1>
        <div class="input-1-container-exela-form-1">
            <input class="exela-input-controls" id="name" name="name" type="text" placeholder="Email Address">
        </div>
        <div class="input-2-container-exela-form-1">
        <input class="exela-input-controls" id="name" name="name" type="text" placeholder="Name & Surname">
        </div>
        <div class="button-container-exela-form-1">
            <div class="button-2-controls-exela" style="font-size: 1.2vw">Submit</div>
        </div>
        </div>
    </div>
</div>

<?php get_footer();?>