document.addEventListener('DOMContentLoaded', function() {
    var images = [
        "{{ asset('images/Chaussure_1.png') }}",
        "{{ asset('images/Chaussure_2.png') }}",
        "{{ asset('images/Chaussure_3.png') }}",
        "{{ asset('images/Chaussure_4.png') }}",
        "{{ asset('images/Chaussure_5.png') }}"
    ];
    
    var mySwiper = new Swiper('.swiper-container', {
        autoplay: {
            delay: 3000,
        },
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 1,
        spaceBetween: 0,
        effect: 'fade',
        fadeEffect: {
            crossFade: true,
        },
    });
});
