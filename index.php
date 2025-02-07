<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package VW Corporate Lite
 */

get_header();?>

<main id="maincontent" role="main">
    <!-- <div class="dots-block"> -->
    <?php get_template_part('templates/home');?>
    <!-- </div> -->
</main>
<div class="clearfix"></div>

<?php get_footer();?>