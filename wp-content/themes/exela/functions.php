<?php
    function load_stylesheets(){
        
        wp_register_style('overrides', get_template_directory_uri() . "/style.css", array(), 1, 'all');
        wp_enqueue_style('overrides');
        
        wp_enqueue_script('javascript', get_template_directory_uri() . "/app.js", array('jquery'), 1, true);

        wp_register_style('exela-header', get_template_directory_uri() . "/css/exela-header.css", array(), 1, 'all');
        wp_enqueue_style('exela-header');

        wp_register_style('exela-footer', get_template_directory_uri() . "/css/exela-footer.css", array(), 1, 'all');
        wp_enqueue_style('exela-footer');

        wp_register_style('controls', get_template_directory_uri() . "/css/controls-exela.css", array(), 1, 'all');
        wp_enqueue_style('controls');

        wp_register_style('exela-card-1', get_template_directory_uri() . "/css/exela-card-1.css", array(), 1, 'all');
        wp_enqueue_style('exela-card-1');

        wp_register_style('exela-card-2', get_template_directory_uri() . "/css/exela-card-2.css", array(), 1, 'all');
        wp_enqueue_style('exela-card-2');

        wp_register_style('exela-3-grid', get_template_directory_uri() . "/css/exela-3-grid.css", array(), 1, 'all');
        wp_enqueue_style('exela-3-grid');

        wp_register_style('exela-card-3', get_template_directory_uri() . "/css/exela-card-3.css", array(), 1, 'all');
        wp_enqueue_style('exela-card-3');

        wp_register_style('exela-banner-1', get_template_directory_uri() . "/css/exela-banner-1.css", array(), 1, 'all');
        wp_enqueue_style('exela-banner-1');

        wp_register_style('exela-form-1', get_template_directory_uri() . "/css/exela-form-1.css", array(), 1, 'all');
        wp_enqueue_style('exela-form-1');
  

        wp_enqueue_style( 
            'font-awesome-5', 
            'https://use.fontawesome.com/releases/v5.3.0/css/all.css', 
            array(), 
            '5.3.0' 
        );
    }

    
    // function custom_add_google_fonts() {
    //     wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,400i', false );
    //     }
    // add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );


    // add_action('wp_enqueue_scripts', 'custom_add_google_fonts' );
    add_action('wp_enqueue_scripts', "load_stylesheets");
?>