

<!-- Background video -->

<video src="assets/img/branding.mp4" muted loop autoplay></video>

<!-- Home container -->

<section class="home">
    <div class="container">
        <div class="branding">
            <div>
                <h1>Our Ring Story</h1>
                <p>When your dream wedding becomes a reality</p>
                <a href="?page=service" class="btn">Start to dream</a>
            </div>
        </div>

        <!--  Button Carousel -->
        <div class="testimonial">
            <button onclick="showCarousel()" class="btn-show">
                <i id="arrowRotation" class="fas fa-angle-up"></i>
                <span>Our Testimonials</span>
            </button>

            <!-- Carousel testimonial  -->
            <div class="carousels glider-content" id="showCarousel">
               <div class="carousels-content">
                   <button>
                       <i class="fas fa-angle-left fa-2x" id="prev"></i>
                   </button>
                   <div class="slide glider">
                       <div class="card card-01" onclick="openDetail('detailCard01')">
                           <p>John & Jane</p>
                       </div>

                       <div class="card card-02" onclick="openDetail('detailCard02')">
                           <p>Marc & Jess</p>
                       </div>

                       <div class="card card-03" onclick="openDetail('detailCard03')">
                           <p>Paul & Sylvie</p>
                       </div>

                       <div class="card card-04" onclick="openDetail('detailCard04')">
                           <p>Kevin & Martha</p>
                       </div>

                       <div class="card card-05" onclick="openDetail('detailCard05')">
                           <p>Jeffray & Sabrina</p>
                       </div>

                   </div>
                   <button>
                       <i class="fas fa-angle-right fa-2x" id="next"></i>
                   </button>
               </div>
                <div id="dots"></div>
            </div>
        </div>
    </div>
</section>




<!-- Ici je pleure de ne pas pouvoir faire du dynamique !  -->

<!-- Full detail card 01 -->
<section class="close-details" id="detailCard01">
    <div class="head-details"></div>
    <div class="details-body">
        <div class="head">
            <img src="assets/img/logo.svg" alt="logo">
            <button onclick="closeDetail('detailCard01')"><img src="assets/img/close.svg" alt="cross"></button>
        </div>
        <div class="details-body-content">
            <div class="img-container">
                <img src="assets/img/cards/card01.jpg" alt="big-photo">
            </div>
            <div class="details-container">
                <h2>John & Jane</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ultrices massa enim. Blandit pretium vulputate nec et fermentum. Elementum, sed sem nec non elementum tellus est in. Rhoncus, nunc, egestas suspendisse id nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ultrices massa enim. Blandit pretium vulputate nec et fermentum. Elementum, sed sem nec non elementum tellus est in. Rhoncus,</p>
                <i class="fas fa-map-marker-alt"><span>Liège</span></i>
                <i class="fas fa-calendar-alt"><span>08-05-2021</span></i>
            </div>
        </div>
    </div>
    <div class="dark-footer">
        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</section>

<!-- Full detail card 02 -->
<section class="close-details" id="detailCard02">
    <div class="head-details"></div>
    <div class="details-body">
        <div class="head">
            <img src="assets/img/logo.svg" alt="logo">
            <button onclick="closeDetail('detailCard02')"><img src="assets/img/close.svg" alt="cross"></button>
        </div>
        <div class="details-body-content">
            <div class="img-container">
                <img src="assets/img/cards/card02.jpg" alt="">
            </div>
            <div class="details-container">
                <h2>Marc & Jess</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ultrices massa enim. Blandit pretium vulputate nec et fermentum. Elementum, sed sem nec non elementum tellus est in. Rhoncus, nunc, egestas suspendisse id nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ultrices massa enim. Blandit pretium vulputate nec et fermentum. Elementum, sed sem nec non elementum tellus est in. Rhoncus,</p>
                <i class="fas fa-map-marker-alt"><span>Namur</span></i>
                <i class="fas fa-calendar-alt"><span>16-03-2021</span></i>
            </div>
        </div>
    </div>
    <div class="dark-footer">
        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</section>

<!-- Full detail card 03 -->
<section class="close-details" id="detailCard03">
    <div class="head-details"></div>
    <div class="details-body">
        <div class="head">
            <img src="assets/img/logo.svg" alt="logo">
            <button onclick="closeDetail('detailCard03')"><img src="assets/img/close.svg" alt="cross"></button>
        </div>
        <div class="details-body-content">
            <div class="img-container">
                <img src="assets/img/cards/card03.jpg" alt="">
            </div>
            <div class="details-container">
                <h2>Paul & Sylvie</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ultrices massa enim. Blandit pretium vulputate nec et fermentum. Elementum, sed sem nec non elementum tellus est in. Rhoncus, nunc, egestas suspendisse id nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ultrices massa enim. Blandit pretium vulputate nec et fermentum. Elementum, sed sem nec non elementum tellus est in. Rhoncus,</p>
                <i class="fas fa-map-marker-alt"><span>Bruxelles</span></i>
                <i class="fas fa-calendar-alt"><span>20-02-2021</span></i>
            </div>
        </div>
    </div>
    <div class="dark-footer">
        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</section>

<!-- Full detail card 04 -->
<section class="close-details" id="detailCard04">
    <div class="head-details"></div>
    <div class="details-body">
        <div class="head">
            <img src="assets/img/logo.svg" alt="logo">
            <button onclick="closeDetail('detailCard04')"><img src="assets/img/close.svg" alt="cross"></button>
        </div>
        <div class="details-body-content">
            <div class="img-container">
                <img src="assets/img/cards/card04.jpg" alt="">
            </div>
            <div class="details-container">
                <h2>Kevin & Martha</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ultrices massa enim. Blandit pretium vulputate nec et fermentum. Elementum, sed sem nec non elementum tellus est in. Rhoncus, nunc, egestas suspendisse id nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ultrices massa enim. Blandit pretium vulputate nec et fermentum. Elementum, sed sem nec non elementum tellus est in. Rhoncus,</p>
                <i class="fas fa-map-marker-alt"><span>Oostende</span></i>
                <i class="fas fa-calendar-alt"><span>19-12-2020</span></i>
            </div>
        </div>
    </div>
    <div class="dark-footer">
        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</section>

<!-- Full detail card 05 -->
<section class="close-details" id="detailCard05">
    <div class="head-details"></div>
    <div class="details-body">
        <div class="head">
            <img src="assets/img/logo.svg" alt="logo">
            <button onclick="closeDetail('detailCard05')"><img src="assets/img/close.svg" alt="cross"></button>
        </div>
        <div class="details-body-content">
            <div class="img-container">
                <img src="assets/img/cards/card05.jpg" alt="">
            </div>
            <div class="details-container">
                <h2>Jeffray & Sabrina</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ultrices massa enim. Blandit pretium vulputate nec et fermentum. Elementum, sed sem nec non elementum tellus est in. Rhoncus, nunc, egestas suspendisse id nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ultrices massa enim. Blandit pretium vulputate nec et fermentum. Elementum, sed sem nec non elementum tellus est in. Rhoncus,</p>
                <i class="fas fa-map-marker-alt"><span>Gembloux</span></i>
                <i class="fas fa-calendar-alt"><span>23-11-2020</span></i>
            </div>
        </div>
    </div>
    <div class="dark-footer">
        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</section>