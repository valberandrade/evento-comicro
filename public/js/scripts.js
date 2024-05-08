$(function (){

    <!-- Initialize Swiper -->
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
        },
    });

    <!-- Initialize Swiper -->
    var swiperCarExp = new Swiper(".SwiperCarExp", {
        spaceBetween: 30,
        loop: true,
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        slidesPerView: "auto",
        centeredSlides: true,
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
    });

    //BIO PALESTRANTES
    $('.palestrantes .card .img-card').hover(function (){
        let id = $(this).attr('id');
        $(this).find('.bio').slideDown().css('display', 'flex');
    }).mouseleave(function (){
        let id = $(this).attr('id');
        $(this).find('.bio').slideUp();
    });

    //EFEITO FADE NO CONTEÚDO
    AOS.init();

    //CONTADOR REGRESSIVO
    loopcounter('myCountdown');

    //TRILHA DO CONHECIMENTO
    $('.js-conveyor-3').jConveyorTicker({
        reverse_elm: true,
        force_loop: true,
        anim_duration: 200
    });

    //WHATSAPP FLUTUANTE
    $('.icone-wa a').click(function (e){
        e.preventDefault();
        $('.overlay-wa-flutuante').fadeIn('fast', function (){
            $('.content-wa').fadeToggle('slow');
        })
    })

    $('.btn-close-wa, .overlay-wa-flutuante').click(function (e){
        e.preventDefault();
        $('.content-wa').fadeOut('slow', function (){
            $('.overlay-wa-flutuante').fadeOut('slow');
        });
    })

    $("#validationPhone").mask("(99) 9999-99999?");

})
