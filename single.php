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

<main id="post-content" role="main">

    <h6 id="post-header">Appsome Solutions Blog</h6>

<?php

if ( have_posts() ) {
    while ( have_posts() ) {
 
        the_post(); ?>
 
        <h2><?php the_title(); ?></h2>
 
        <?php the_content(); ?>
 
    <?php }
}

?>

</main><!-- #site-content -->


<?php
get_footer(); 
?>