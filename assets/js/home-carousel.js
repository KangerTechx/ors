/* Function carousel testimonial */

new Glider(document.querySelector('.glider'), {

    slidesToShow: 1.5,
    slidesToScroll: 1.5,

    itemWidth: undefined,
    exactWidth: false,

    dots: '#dots',

    arrows: {
        prev: '#prev',
        next: '#next'
    },

    draggable: true,
    dragVelocity: 1.5,


    // event control

    eventPropagate: true,
    scrollLock: false,
    scrollLockDelay: 150,
    resizeLock: true,

    // Glider.js breakpoints are mobile-first
    responsive: [
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            },
        }
    ]
});