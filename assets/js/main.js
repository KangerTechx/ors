
 /* Close toggler menu */

function closeMenu() {
    let checkbox =  document.getElementById("checkbox");
    checkbox.click();
}

// -------------------------------------------------------------------------

/* Show carousel on page home */
let status = false;

function  showCarousel() {
    let div = document.getElementById('showCarousel')
    let rotate = document.getElementById('arrowRotation')
    if (status == false) {
        div.setAttribute("class", "show-carousel")
        rotate.style.transform = "rotate(180deg)";
        rotate.style.transition= '0.5s ease-out';
    } else {
        div.setAttribute("class", "carousels")
        rotate.style.transform = "rotate(0deg)";
    }
    status = !status;
}


// ------------------------------------------------------------------

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

// ------------------------------------------------------------

/* function open details testimonials */

function openDetail(id) {
    let cards = document.getElementById(id)
    cards.setAttribute('class', 'detail-cards')
}

/* function close details testimonials */

function closeDetail(id) {
    let card = document.getElementById(id)
    card.setAttribute('class', 'close-details')
}