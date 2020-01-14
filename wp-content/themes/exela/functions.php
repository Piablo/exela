<?php
    function load_stylesheets(){
        
       
        // wp_enqueue_script('javascript', get_template_directory_uri() . "/app.js", array('jquery'), 1, true);


        wp_register_style('exela-header', get_template_directory_uri() . "/css/exela-header.css", array(), 1, 'all');
        wp_enqueue_style('exela-header');

        wp_register_style('controls', get_template_directory_uri() . "/css/controls-exela.css", array(), 1, 'all');
        wp_enqueue_style('controls');

        wp_register_style('overrides', get_template_directory_uri() . "/style.css", array(), 1, 'all');
        wp_enqueue_style('overrides');
  

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