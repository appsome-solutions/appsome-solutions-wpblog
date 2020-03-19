<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://appsome-solutions.com
 *
 * @package Appsome-Solutions
 * @subpackage Blog
 * @since 1.0.2
 */

?><!DOCTYPE html>

<?php

define( 'EDD_VERSION', '2.0.4' );

wp_enqueue_style( 'style-reset', get_template_directory_uri() . '/reset.css', array(), EDD_VERSION );
wp_enqueue_style( 'style', get_stylesheet_uri(), array(), EDD_VERSION);
?>

<html class="no-js">

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160230975-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-160230975-1');
		</script>

		<link rel="icon" href="AppsomeLogo.png">

	</head>

	<body>

    <img id="shape-top" src="<?php echoImage('ShapeTop.svg') ?>" alt="Red Shape Top" />
    

