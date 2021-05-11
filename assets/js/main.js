
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