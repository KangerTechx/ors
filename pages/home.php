<video src="assets/img/branding.mp4" muted loop autoplay></video>

<section class="home">
    <div class="container">
        <div class="branding">
            <div>
                <h1>Our Ring Story</h1>
                <p>When your dream wedding becomes a reality</p>
                <a href="?page=service"><button class="btn">Start to dream</button></a>
            </div>
        </div>
        <div class="testimonial">
            <button onclick="showCarousel()" class="btn-show">
                <i id="arrowRotation" class="fas fa-angle-up"></i>
                <span>Our Testimonials</span>
            </button>

            <div class="carousels glider-content" id="showCarousel">
               <div class="carousels-content">
                   <button>
                       <i class="fas fa-angle-left fa-2x" id="prev"></i>
                   </button>
                   <div class="slide glider">
                       <div class="card card-01" onclick="openDetail()">
                           <p>John & Jane</p>
                       </div>

                       <div class="card card-02">
                           <p>Marc & Jess</p>
                       </div>

                       <div class="card card-03">
                           <p>Paul & Sylvie</p>
                       </div>

                       <div class="card card-04">
                           <p>Kevin & Martha</p>
                       </div>

                       <div class="card card-05">
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

<section class="detail-cards" id="detail">
    <div class="head-details">
        <div>
            <img src="assets/img/logo.svg" alt="logo">
            <button onclick="closeDetail()"><img src="assets/img/close.svg" alt="cross"></button>
        </div>
    </div>
    <div class="details-body">
        <div class="img-container"></div>
        <div class="details-container">
            <h2>John & Jane</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ultrices massa enim. Blandit pretium vulputate nec et fermentum. Elementum, sed sem nec non elementum tellus est in. Rhoncus, nunc, egestas suspendisse id nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ultrices massa enim. Blandit pretium vulputate nec et fermentum. Elementum, sed sem nec non elementum tellus est in. Rhoncus,</p>
            <i class="fas fa-map-marker-alt"><span>Liège</span></i><br>
            <i class="fas fa-calendar-alt"><span>20-01-2021</span></i>
        </div>
    </div>
</section>
