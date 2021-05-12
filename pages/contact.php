<section class="contact" id="contact">
    <div class="title">
        <h2>Contact Us</h2>
        <img src="assets/img/decoration.svg" alt="decoration">
    </div>

    <form action="#" method="post">
        <div>
            <input type="text" name="lastName" id="lastName" required>
            <label for="lastName">
                <span>Name</span>
            </label>
        </div>
        <div>
            <input type="text" name="firstName" id="firstName" required>
            <label for="firstName">
                <span>First name</span>
            </label>
        </div>
        <div>
            <input type="email" name="email" id="email" required>
            <label for="email">
                <span>E-mail</span>
            </label>
        </div>
        <div>
            <input type="text" name="subject" id="subject" required>
            <label for="subject">
                <span>Subject</span>
            </label>
        </div>
        <div>
            <textarea name="content" id="content" placeholder="Message..."></textarea>
        </div>
        <button type="submit" class="dark-btn">Send your dream</button>
    </form>

    <h3>Come Join Us</h3>

    <div class="contact-info">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34067.047636389456!2d5.491966898785011!3d50.6076369701854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x497f368532e08e0d!2sKENNEDY%20Cr%C3%A9ation%20Boutique!5e0!3m2!1sfr!2sbe!4v1620784239326!5m2!1sfr!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="info">
            <i class="fas fa-phone-alt phone"><span>xx/ xxx.xxx</span></i>

            <a href="#contact" class="mail"><i class="fas fa-envelope"><span>adressinfo@ors.com</span></i></a>

            <a href="https://www.google.com/maps/dir//50.617224,5.507111/@50.6169743,5.471614,13z/data=!3m1!4b1?hl=fr" target="_blank" class="adress"><i class="fas fa-map-marker-alt"><span>Rue Grand-Vinâve 107-109, 4101 - Seraing</span></i></a>

            <div class="link">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>

        </div>
    </div>
</section>







<script>
    document.getElementById('header').setAttribute('class', 'dark-header')
    document.getElementById('line').setAttribute('class', 'dark-line')
    document.getElementById('menu').setAttribute('class', 'dark-menu-wrap content')
    document.getElementById('ul').setAttribute('class', 'dark-ul')
    document.getElementById('footer').setAttribute('class', 'dark-footer')
</script>