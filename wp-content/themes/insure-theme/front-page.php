<?php
/**
 * Template for the front page
 *
 * @package Insure_Theme
 */

get_header();
?>

<main>
    <?php get_template_part( 'template-parts/content/hero' ); ?>
    <?php get_template_part( 'template-parts/content/stats' ); ?>
    <?php get_template_part( 'template-parts/content/how-it-works' ); ?>
    <?php get_template_part( 'template-parts/content/benefits' ); ?>
    <?php get_template_part( 'template-parts/content/cta' ); ?>

    <!-- Chat Widget -->
    <div class="chat-widget">
        <i class="fas fa-comment"></i>
    </div>
</main>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.lifestyle-carousel', {
      loop: true,
      spaceBetween: 30,
      navigation: {
        nextEl: '.arrow-right',
        prevEl: '.arrow-left',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 1,
        },
        1024: {
          slidesPerView: 1,
        }
      }
    });
  });
</script>

<?php
get_footer();
?>