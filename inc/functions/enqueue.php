<?php 


function mamurjor_script(){

    


    wp_enqueue_style("hexa-favicon-Icon",get_theme_file_uri("/assets/img/favicon.png"),null,"2.0");
    wp_enqueue_style("hexa-assetmain",get_theme_file_uri("/assets/stylesheets/main.css"),null,"2.0");
    wp_enqueue_style("hexa-fontawesome","https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style("hexa-font1","https://fonts.googleapis.com/css?family=Droid+Serif:400,400i");
    wp_enqueue_style("hexa-font2","https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i");


    
    wp_enqueue_style("hexa-animate",get_theme_file_uri("/assets/stylesheets/vendor/resources/animate.min.css"),null,"2.0");
    wp_enqueue_style("hexa-bootstrap",get_theme_file_uri("/assets/stylesheets/vendor/resources/bootstrap.min.css"),null,"2.0");
    wp_enqueue_style("hexa-component",get_theme_file_uri("/assets/stylesheets/vendor/resources/component.css"),null,"2.0");
    wp_enqueue_style("hexa-countrySelect",get_theme_file_uri("/assets/stylesheets/vendor/resources/countrySelect.min.css"),null,"2.0");
    wp_enqueue_style("hexa-fancybox",get_theme_file_uri("/assets/stylesheets/vendor/resources/jquery.fancybox.min.css"),null,"2.0");
    wp_enqueue_style("hexa-normalize",get_theme_file_uri("/assets/stylesheets/vendor/resources/normalize.css"),null,"2.0");
    wp_enqueue_style("hexa-owl-carousel",get_theme_file_uri("/assets/stylesheets/vendor/resources/owl.carousel.min.css"),null,"2.0");
    wp_enqueue_style("hexa-wp-style",get_stylesheet_uri(),null,"2.00");

   
    

    wp_enqueue_script("hexa-modernizr",get_theme_file_uri("/assets/js/vendor/modernizr-3.5.0.min.js"),array("jquery"),"2.0",true);
    wp_enqueue_script("hexa-jquerystart",get_theme_file_uri("/assets/js/vendor/jquery-3.2.1.min.js"),array("jquery"),"2.0",true);
    wp_enqueue_script("hexa-pluginsstart",get_theme_file_uri("assets/js/plugins.js"),array("jquery"),"2.0",true);
    wp_enqueue_script("hexa-mainjs",get_theme_file_uri("/assets/js/main.js"),array("jquery"),"2.0",true);


}

add_action("wp_enqueue_scripts","mamurjor_script");





?>