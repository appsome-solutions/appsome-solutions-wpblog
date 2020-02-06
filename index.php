<?php
/**
 * The main template file
 *
 * @link https://appsome-solutions.com
 *
 * @package Appsome-Solutions
 * @subpackage Blog
 * @since 1.0.0
 */

get_header();

?>

<main>
    <div id="logo-wrapper">
        <img id="appsome-logo" src="<?php echoImage('AppsomeLogo.svg') ?>" alt="Red Shape Top" />
        <div id="centered-logo-text">
            <h6>Appsome-Solutions Blog</h6>
            <div class="subtitle1" >We describe product delivery process directly from the kitchen<div>
        </div>
    </div>
</main>

<?php
get_footer(); 
?>