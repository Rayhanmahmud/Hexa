<?php 

function mamurjor_setup(){

     load_theme_textdomain("mamurjor");
     add_theme_support("title-tag");
     add_theme_support("post-thumbnails");
     add_theme_support("post-formats",array('audio','video','image','gallery'));

     
     register_nav_menu("topmenu",__("Top menu","mamurjor"));


}
add_action("after_setup_theme","mamurjor_setup");






?>