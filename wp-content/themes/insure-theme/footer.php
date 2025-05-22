<?php
/**
 * The template for displaying the footer
 *
 * @package Insure_Theme
 */

?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-logo">
                    <?php
                    if ( has_custom_logo() ) :
                        the_custom_logo();
                    else :
                    ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="<?php echo INSURE_THEME_URI; ?>/assets/images/logo-color.webp" alt="<?php bloginfo( 'name' ); ?>">
                        </a>
                    <?php endif; ?>
                </div>

                <div class="footer-social">
                    <a href="#" class="social-icon" aria-label="Facebook">
                       <img src="<?php echo INSURE_THEME_URI; ?>/assets/images/fb-icon.webp" alt="Facebook icon">
                    </a>
                    <a href="#" class="social-icon" aria-label="Instagram">
                       <img src="<?php echo INSURE_THEME_URI; ?>/assets/images/insta-icon.webp" alt="Instagram icon">
                    </a>
                    <a href="#" class="social-icon" aria-label="LinkedIn">
                       <img src="<?php echo INSURE_THEME_URI; ?>/assets/images/linkedin-icon.webp" alt="Linkedin icon">

                    </a>
                    <a href="#" class="social-icon" aria-label="YouTube">
                        <img src="<?php echo INSURE_THEME_URI; ?>/assets/images/youtube-icon.webp" alt="Youtube icon">
                    </a>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-copyright">
                    &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> | <a href="#">Privacy Policy</a> | <a href="#">Terms and Conditions</a>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>