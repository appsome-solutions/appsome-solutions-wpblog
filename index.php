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
    <a id="logo-wrapper" href="<?php echo get_home_url() ?>">
        <img id="appsome-logo" src="<?php echoImage('AppsomeLogo.svg') ?>" alt="Red Shape Top" />
        <div id="centered-logo-text">
            <h6>Appsome-Solutions Blog</h6>
            <div class="subtitle1" >We describe product delivery process directly from the kitchen</div>
        </div>
    </a>
    <div id="posts-list">
        <?php 
            $posts = get_posts(array(
                "posts_per_page" => 10,
            )); 

            foreach ($posts as $post) {
                echo  "<a href='" . get_permalink($post) . "'> <h6>" . $post->post_title . " </h6> </a>";
                // Reading Time WP plugin to support below time:
                echo "<div class='caption'>" . $post->post_date . " ☕ " . do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]') ."</div>";
                // We need to add excerpt to a post to see preview of it
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