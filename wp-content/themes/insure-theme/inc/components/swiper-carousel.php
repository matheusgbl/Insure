<div class="swiper lifestyle-carousel">
    <div class="swiper-wrapper container">
        <?php foreach ($slides as $slide): ?>
            <div class="swiper-slide">
                <div class="how-it-works-container">
                    <div class="swiper-content">
                        <div class="how-it-works-content">
                            <h2 class="how-it-works-title"><?php echo $slide['title']; ?></h2>
                            <div class="how-it-works-subtitle">
                                <div class="dot">
                                    <div class="inner-dot"></div>
                                </div>
                                <h3><?php echo $slide['subtitle']; ?></h3>
                            </div>
                            <p class="how-it-works-text"><?php echo $slide['text']; ?></p>
                        </div>
                        <div class="how-it-works-images">
                            <div class="carousel-container">
                                <div class="carousel-slide">
                                    <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['alt']; ?>" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Controles do Swiper -->
    <div class="custom-swiper-buttons">
        <button class="arrow left arrow-left">
            <i class="fa-solid fa-arrow-left"></i>
        </button>
        <button class="arrow right arrow-right">
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
    <div class="swiper-pagination"></div>
</div>