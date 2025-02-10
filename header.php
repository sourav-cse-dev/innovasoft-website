<?php
    /**
     * The Header for our theme.
     *
     * Displays all of the <head> section and everything up till <div id="content">
     *
     * @package VW Corporate Lite
     */
?>
<!DOCTYPE html>
<html                                                                                      <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body                                                                                      <?php body_class(); ?>>
    <?php if (function_exists('wp_body_open')) {
            wp_body_open();
        } else {
            do_action('wp_body_open');
        }
    ?>

    <header role="banner">
        <a class="screen-reader-text skip-link"
            href="#maincontent"><?php esc_html_e('Skip to content', 'vw-corporate-lite'); ?></a>
        <div class="header">
            <?php if (get_theme_mod('vw_corporate_lite_topbar_hide_show', false) == 1 || get_theme_mod('vw_corporate_lite_resp_topbar_hide_show', false) == 1) {?>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="top-contact col-lg-3 col-md-3">
                            <?php if (get_theme_mod('vw_corporate_lite_contact_corporate', '') != '') {?>
                            <span><i
                                    class="<?php echo esc_attr(get_theme_mod('vw_corporate_lite_phone_no_icon', 'fa fa-phone')); ?>"></i><a
                                    href="tel:<?php echo esc_attr(get_theme_mod('vw_corporate_lite_contact_corporate', '')); ?>"><?php echo esc_html(get_theme_mod('vw_corporate_lite_contact_corporate', '')); ?></a></span>
                            <?php }?>
                        </div>
                        <div class="top-contact col-lg-3 col-md-4">
                            <?php if (get_theme_mod('vw_corporate_lite_email_corporate', '') != '') {?>
                            <span><i
                                    class="<?php echo esc_attr(get_theme_mod('vw_corporate_lite_cont_email_icon', 'fa fa-envelope')); ?>"></i><a
                                    href="mailto:<?php echo esc_attr(get_theme_mod('vw_corporate_lite_email_corporate', '')); ?>"><?php echo esc_html(get_theme_mod('vw_corporate_lite_email_corporate', '')); ?></a></span>
                            <?php }?>
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <?php dynamic_sidebar('social-icon'); ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <?php }?>
            <div class="menu-sec bg-innova-color-10 header py-8<?php if (get_theme_mod('vw_corporate_lite_sticky_header', false) == 1 || get_theme_mod('vw_corporate_lite_stickyheader_hide_show', false) == 1) {?> header-sticky"
                <?php } else {?>close-sticky<?php }?>">
                <div class="container">
                    <div class="row">
                        <div class=" col-lg-3 col-md-6 col-8 align-self-center">
                            <div class="logo img-fluid">
                                <div class="site-logo">
                                    <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/innovasoft-logo.png"
                                            alt="innovasoft">
                                    </a>
                                </div>

                                <?php $blog_info = get_bloginfo('name'); ?>
<?php if (! empty($blog_info)): ?>
<?php if (is_front_page() && is_home()): ?>
<?php if (get_theme_mod('vw_corporate_lite_logo_title_hide_show', true) == 1) {?>
                                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                        rel="home"><?php bloginfo('name'); ?></a></p>
                                <?php }?>
<?php else: ?>
<?php if (get_theme_mod('vw_corporate_lite_logo_title_hide_show', true) == 1) {?>
                                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                        rel="home"><?php bloginfo('name'); ?></a></p>
                                <?php }?>
<?php endif; ?>
<?php endif; ?>
<?php
    $description = get_bloginfo('description', 'display');
    if ($description || is_customize_preview()):
?>
<?php if (get_theme_mod('vw_corporate_lite_tagline_hide_show', false) == 1) {?>
                                <p class="site-description">
                                    <?php echo esc_html($description); ?>
                                </p>
                                <?php }?>
<?php endif; ?>
                            </div>
                        </div>
                        <div class="menubox col-lg-6 col-md-6 col-4 align-self-center">
                            <div class="toggle-nav mobile-menu">
                                <button onclick="vw_corporate_lite_menu_open_nav()" class="responsivetoggle"><i
                                        class="<?php echo esc_attr(get_theme_mod('vw_corporate_lite_res_open_menu_icon', 'fas fa-bars')); ?>"></i><span
                                        class="screen-reader-text"><?php esc_html_e('Open Button', 'vw-corporate-lite'); ?></span></button>
                            </div>
                            <div id="mySidenav" class="nav sidenav d-flex justify-content-center">
                                <nav id="site-navigation" class="main-navigation" role="navigation"
                                    aria-label="<?php esc_attr_e('Top Menu', 'vw-corporate-lite'); ?>">
                                    <?php
                                        wp_nav_menu([
                                            'theme_location'  => 'primary',
                                            'container_class' => 'main-menu clearfix',
                                            'menu_class'      => 'clearfix',
                                            'items_wrap'      => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                                            'fallback_cb'     => 'wp_page_menu',
                                        ]);
                                    ?>
                                    <a href="javascript:void(0)" class="closebtn mobile-menu"
                                        onclick="vw_corporate_lite_menu_close_nav()">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            style="width: 30px; height: 30px;">
                                            <path fill-rule="evenodd"
                                                d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <div class="contact-btn-mobile d-lg-none d-md-block">

                                        <a href="<?php echo esc_url(home_url('index.php/contact-us')); ?>"
                                            class="btn cnt-btn bg-innova-color-230 innova-color-10">Contact
                                            Us</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div
                            class="contact-btn col-lg-3 col-md-6 col-8 d-none d-lg-flex align-self-center justify-content-center ">
                            <a href="<?php echo esc_url(home_url('index.php/contact-us')); ?>"
                                class="btn cnt-btn bg-innova-color-230 innova-color-10">Contact
                                us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </header>

    <?php if (get_theme_mod('vw_corporate_lite_loader_enable', false) == 1) {?>
    <div id="preloader">
        <div class="loader-inner">
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
        </div>
    </div>
    <?php }?>

    <?php if (is_singular() && has_post_thumbnail()): ?>
<?php
    $thumb      = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'vw-corporate-lite-post-image-cover');
    $post_image = $thumb['0'];
?>
    <div class="header-image bg-image" style="background-image: url(<?php echo esc_url($post_image); ?>)">
        <?php the_post_thumbnail('vw-corporate-lite-post-image'); ?>
    </div>

    <?php elseif (get_header_image()): ?>
    <div class="header-image bg-image" style="background-image: url(<?php header_image(); ?>)">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>"
                height="<?php echo esc_attr(get_custom_header()->height); ?>">
        </a>
    </div>
    <?php endif; // End header image check. ?>