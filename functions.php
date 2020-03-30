<?php

function echoImage($imageName) {
    echo get_template_directory_uri() . "/assets/images/$imageName";
}

function getImage($imageName) {
    return get_template_directory_uri() . "/assets/images/$imageName";
}

function appsome_theme_support() {
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'appsome_theme_support' );

function getCommonHeader($inHead) {


define( 'EDD_VERSION', '2.0.5' );

wp_enqueue_style( 'style-reset', get_template_directory_uri() . '/reset.css', array(), EDD_VERSION );
wp_enqueue_style( 'style', get_stylesheet_uri(), array(), EDD_VERSION);

wp_head();

return '
<!DOCTYPE html>
<html class="no-js">

	<head>

		<meta charset="'.get_bloginfo( "charset" ) .'">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="icon" href="'. getImage("AppsomeIcon.png") .'" />
		<link rel="apple-touch-icon" href="'. getImage("AppsomeIcon.png") .'" />

        '.$inHead.'

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160230975-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag("js", new Date());

		  gtag("config", "UA-160230975-1");
		</script>

		<link rel="icon" href="AppsomeLogo.png">

	</head>

	<body>

    <img id="shape-top" src="'. getImage("ShapeTop.svg") .'" alt="Red Shape Top" />';

}
