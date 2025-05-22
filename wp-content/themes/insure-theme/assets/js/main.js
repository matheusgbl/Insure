(function($) {
    'use strict';
    $(document).ready(function() {
        initAnimations();
        initChatWidget();
    });
    
    function initAnimations() {
        const images = document.querySelectorAll('.hero-images .polaroid');

        images.forEach((img, index) => {
            setTimeout(() => {
            img.style.opacity = '1';
            img.style.transform = 'translateY(0)';
            }, index * 300);
        });
    }

    function initChatWidget() {
        $('.chat-widget').on('click', function() {
            alert('Chat support would open here in a real implementation');
        });
    }

})(jQuery);