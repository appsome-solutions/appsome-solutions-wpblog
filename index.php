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
            <div class="subtitle1" >We describe product delivery process directly from the kitchen</div>
        </div>
    </div>
    <div id="posts-list">
        <?php 
            $posts = get_posts(array(
                "posts_per_page" => 10,
            )); 

            foreach ($posts as $post) {
                echo "<h6>" . $post->post_title . "</h6>";
                echo "<div class='caption'>" . $post->post_date . " ☕ " . do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]') ."</div>";
                echo "<p>" . $post->post_excerpt . "</p>";
            }

        ?>
    </div>
    <footer>
        <a href="https://www.appsome-solutions.com/">VISIT WEBSITE</a>
        <a href="https://github.com/appsome-solutions">GITHUB</a>
    </footer>
</main>

<?php
get_footer(); 
?>