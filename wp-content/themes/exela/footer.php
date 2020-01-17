<div class="main-container-exela-footer">
    <div class="inner-container-exela-footer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/footer/awards.png" alt="" class="awards-container-exela-footer">
        <div class="footer-statement-exela-footer">
            <p><strong>Over 2000</strong> of our customers have grown faster</br>with our technology and training!</p>
        </div>
    </div>
    <div class="footer-menu-exela-footer">
        <div class="footer-menu-spacer-2-exela-footer">
            <a class="link-button-exela-header" style="margin-top: 0" href="<?php echo site_url('#') ?>">Personal Information Request</a>
            <a class="link-button-exela-header" style="margin-top: 0" href="<?php echo site_url('#') ?>">Log In | Log Out</a>
            <a class="link-button-exela-header" style="margin-top: 0" href="<?php echo site_url('#') ?>">Billing-Policy</a>
            <a class="link-button-exela-header" style="margin-top: 0" href="<?php echo site_url('#') ?>">Cookie-Policy</a>
            <a class="link-button-exela-header" style="margin-top: 0" href="<?php echo site_url('#') ?>">Terms of Use</a>
            <a class="link-button-exela-header" style="margin-top: 0" href="<?php echo site_url('#') ?>">Privacy-Policy</a>
        </div>
    </div>
    <div class="footer-copyright-container-exela-footer">
        <div class="footer-copyright-exela-footer">Copyright EXELA &copy 2019</div>
    </div>
    


    <div class="quick-links-outer-container-exela-footer">
        <div class="quick-links-container-exela-footer white-text">
            <h2 style="margin-bottom: 10px">Quick Links</h2>
            <ul style="list-style: none; cursor: pointer">
                <li>Home</li>
                <li <?php if(is_page('about-us')) echo 'class=""'?> href="<?php echo site_url('/about-us') ?>">About Us</li>
                <li>How We Help</li>
                <li>Who We Help</li>
                <li <?php if(is_page('blog')) echo 'class=""'?> href="<?php echo site_url('/blog') ?>">Blog</li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    
    <div class="socials-outer-container-exela-footer">
        <div class="socials-container-exela-footer">
            <img style="width:100%" src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-logo.png" alt="">
            <p class="white-text">Follow Us:</p>
            <div class="fb-container-exela-footer icon-exela-footer"><i class="fab fa-facebook-f"></i></div>
            <div class="wa-container-exela-footer icon-exela-footer"><i class="fab fa-whatsapp"></i></div>
            <div class="yt-container-exela-footer icon-exela-footer"><i class="fab fa-youtube"></i></div>
            <div class="gplus-container-exela-footer icon-exela-footer"><i class="fab fa-google-plus-g"></i></div>
            <div class="insta-container-exela-footer icon-exela-footer"><i class="fab fa-instagram"></i></div>
            <div class="li-container-exela-footer icon-exela-footer"><i class="fab fa-linkedin-in"></i></div>
            <div class="wa2-container-exela-footer icon-exela-footer"><i class="fab fa-whatsapp"></i></div>
            <div class="skype-container-exela-footer icon-exela-footer"><i class="fab fa-skype"></i></div>
        </div>
    </div>
</div>
<?php wp_footer();?>
</body>
</html>