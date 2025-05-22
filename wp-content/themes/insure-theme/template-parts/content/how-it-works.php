<section class="how-it-works">
   <?php 
        $slides = [
        [
            'title' => 'How it works Instant <br><strong>Lifestyle Upgrade</strong>',
            'subtitle' => 'Live More',
            'text' => 'Skydiving over the coastline. A surprise weekend getaway. A five-star dinner that turns into a night to remember.
            Life is meant to be lived! Every experience, big or small, adds color to your story. With Insure, you get to collect points on
            the things you already love, then trade those in for exciting rewards. Why settle for insurance that only matters when
            something bad happens?',
            'image' => get_template_directory_uri() . '/assets/images/carousel-1.webp',
            'alt' => 'Lifestyle experiences'
        ],
        [
            'title' => 'How it works Instant <br><strong>Lifestyle Upgrade</strong>',
            'subtitle' => 'Live More',
            'text' => 'Skydiving over the coastline...',
            'image' => get_template_directory_uri() . '/assets/images/carousel-1.webp',
            'alt' => 'Lifestyle experiences'
        ],
        [
            'title' => 'How it works Instant <br><strong>Lifestyle Upgrade</strong>',
            'subtitle' => 'Live More',
            'text' => 'Skydiving over the coastline...',
            'image' => get_template_directory_uri() . '/assets/images/carousel-1.webp',
            'alt' => 'Lifestyle experiences'
        ],
        // Adicione mais slides conforme necessário
    ];
    include get_template_directory() . '/inc/components/swiper-carousel.php';
   ?>  
</section>
