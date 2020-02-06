<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<?php
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'style', get_template_directory_uri() . '/reset.css' );
?>

<html class="no-js">

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

	</head>

	<body>

    <img id="shape-top" src="<?php echoImage('ShapeTop.svg') ?>" alt="Red Shape Top" />
    <img id="shape-bottom" src="<?php echoImage('ShapeBottom.svg') ?>" alt="Red Shape Bottom" />

    

