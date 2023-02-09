<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package safari-blog
 */
?>



<?php
$copyright = get_theme_mod('footer_copyright_text', safari_blog_get_default_footer_copyright());
?>

<footer id="colophon" class="site-footer">

    <div class="container">

        <?php
        get_template_part('template-parts/social', 'links');
        ?>

        <div class="site-info">
            <span class="sep"> | </span>
            <span>
                <?php
                    printf(
                        esc_html__('Creator by %1$s', 'safari-blog'),
                        '<b>' . esc_html__("Eric Nguyen", 'safari-blog') . '</b>'
                    );
                ?>
            </span>
            <span class="sep"> | </span>
            <div class="copyright">
                <?php echo wp_kses_post($copyright); ?>
            </div>
        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->


<a class="scroll-to-top" href="javascript:void(0)">
    <svg id="Layer_1" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink">
	<g>
        <g id="Icon-Chevron-Left" transform="translate(237.000000, 335.000000)">
            <polyline class="st0" id="Fill-35"
                      points="-191.3,-296.9 -193.3,-294.9 -205,-306.6 -216.7,-294.9 -218.7,-296.9 -205,-310.6      -191.3,-296.9    "/>
        </g>
    </g></svg>
</a>

<?php
wp_footer();
?>

</body>
</html>
