<?php
/**
 * The header for our theme
 *
 * @package Insure_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php insure_theme_html_schema(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Insure description meta tag." />
    <link rel="icon" href="<?php echo INSURE_THEME_URI; ?>/assets/images/logo-ico.png" type="image/x-icon">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'insure-theme' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="header-container">
                <div class="site-logo">
                    <?php
                    if ( has_custom_logo() ) :
                        the_custom_logo();
                    else :
                    ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="<?php echo INSURE_THEME_URI; ?>/assets/images/logo.webp" alt="<?php bloginfo( 'name' ); ?>">
                        </a>
                    <?php endif; ?>
                </div>

                <div class="header-cta">
                    <a href="#" class="btn btn-outline">Get Your Free Quote</a>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">