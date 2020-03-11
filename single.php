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
    <div class="main-wrapper">
        <h6 id="post-header">
            <a  href="<?php echo get_home_url() ?>"> 
            <img id="appsome-logo" width="40px" src="<?php echoImage('AppsomeLogo.svg') ?>" alt="Red Shape Top" />
            <span>Appsome Solutions Blog</span>
            </a>
        </h6>
    </div>

<?php

if ( have_posts() ) {
    while ( have_posts() ) {
 
        the_post(); ?>
 
        <div id="post-thumbnail-wrapper">
            <?php echo get_the_post_thumbnail() ?> 
        </div>
        
        <div class="main-wrapper">
            <h2 id="post-title"><?php the_title(); ?></h2>
    
            <?php

                $tags = get_the_tags();
                $html = '<div class="post_tags">';
                foreach ( $tags as $tag ) {
                            
                    $html .= "<span class='tag'>" . "{$tag->name}</span>";
                }
                $html .= '</div>';
                echo $html;

            ?>

            <?php the_content(); ?>
 
    <?php }
}

?>

<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://appsome-solutions.us19.list-manage.com/subscribe/post?u=8ad4819cfce6f420b3130c0ef&amp;id=6515159370" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
    <div id="subscribe-wrapper">
        <div>
            <h6> Subscribe to the newsletter </h6>
            <div>Subscribe to get ours latest content by email.</div>
        </div>
        <div id="subscribe-email-wrapper">
            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email" required>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8ad4819cfce6f420b3130c0ef_6515159370" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        </div>
    </div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->


<a id="logo-wrapper" href="<?php echo get_home_url() ?>">
    <img id="appsome-logo" src="<?php echoImage('AppsomeLogo.svg') ?>" alt="Red Shape Top" />
    <div id="centered-logo-text">
        <h6>Appsome Solutions Blog</h6>
        <div class="subtitle1" >We describe product delivery process directly from the kitchen</div>
    </div>
</a>

<div id="previous-next-links">
<?php 
    echo previous_post_link('%link', '<- %title');
    echo next_post_link('%link', '%title ->');
?>
</div>


</div>

</main><!-- #site-content -->


<?php
get_footer(); 
?>