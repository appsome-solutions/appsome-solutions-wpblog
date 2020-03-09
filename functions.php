<?php

function echoImage($imageName) {
    echo get_template_directory_uri() . "/assets/images/$imageName";
}

function appsome_theme_support() {
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'appsome_theme_support' );

?>