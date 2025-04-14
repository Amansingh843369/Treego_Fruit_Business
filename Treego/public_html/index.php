<?php 
error_reporting(E_ALL); 
error_reporting( E_WARNING |E_ERROR | E_PARSE | E_NOTICE);  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home - Treego</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon_io/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon_io/site.webmanifest">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>
<Style>
.carousel-container {
    position: absolute;
}

.content-center {
    position: relative;
    width: 400px;
    top: 5%;
    left: 35%;
    padding: 20px;

    background-color: green !important;
    border: 1px solid green;

}

@media (max-height: 992px) {
    #hero {
        height: 73vh;
    }

    .carousel-item {
        background-size: cover !important;
    }




}

@media (max-width: 768px) {
    #hero {
        height: 73vh;
    }

    .carousel-item {
        background-size: cover !important;
    }

    .content-center {
        position: relative;
        width: 500px !important;
        top: 20%;
        left: 0%;
        padding: 20px;

        background-color: green !important;
        border: 1px solid green;

    }



}

.c1 {
    background-size: 100%;
}


/* whatsapp chat button css */
.whatsapp-button {
    position: fixed;
    bottom: 80px;
    right: 20px;
    z-index: 1000;
}

.whatsapp-button img {
    width: 60px;
    height: 60px;
    border-radius: 30%;
    /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); */
    transition: transform 0.3s;
}

.whatsapp-button img:hover {
    transform: scale(1.1);
}

/* end here */
</Style>

<body>

    <?php include('header.php') ?>


    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="2000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->

                <div class="carousel-item active c1"
                    style="background-image: url(assets/img/portfolio/p8.webp); background-position:center;">
                    <div class="carousel-container  db">
                        <div class="container  w-25  content-center mob-c">
                            <h2 class="animate__animated animate__fadeInDown">Corporate Plant Rental<span></span></h2>
                            <a href="corporate-plant.php"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>


                <div class="carousel-item"
                    style="background-image: url(assets/img/portfolio/a1.jpg); background-position:bottom;">
                    <div class="carousel-container">
                        <div class="container w-25 content-center mob-c">
                            <h2 class="animate__animated animate__fadeInDown">Vertical Garden</h2>
                            <p class="animate__animated animate__fadeInUp"></p>
                            <a href="vertical-garden.php"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item "
                    style="background-image: url(assets/img/portfolio/gd.webp);  background-position:bottom;">
                    <div class="carousel-container ">
                        <div class="container w-25 content-center">
                            <h2 class="animate__animated animate__fadeInDown">Garden Center</h2>
                            <a href="garden-center.php"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item"
                    style="background-image: url(assets/img/banner.jpg); background-position:bottom; ">
                    <div class="carousel-container ">
                        <div class="container  w-25  content-center">
                            <h2 class="animate__animated animate__fadeInDown">Interior Design & Maintenance<span></span>
                            </h2>
                            <a href="garden-development.php"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->


    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
        <div class="container">

            <div class="section-title mt-5">
                <h2>Why Choose Us?</h2>

            </div>
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-check-circle"></i></div>
                        <h4 class="title"><a href="javascript:void(0);">Hand-Selected Quality</a></h4>
                        <p class="description">Each plant is carefully chosen for its health, appearance, and unique
                            attributes, ensuring that every piece stands out and adds value to your space.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-brush"></i></div>
                        <h4 class="title"><a href="javascript:void(0);">Customized Designs</a></h4>
                        <p class="description">Our team of experts designs each arrangement to complement your
                            office decor, creating a cohesive and impressive look tailored to your specific needs
                            and preferences.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="title"><a href="javascript:void(0);">Enhanced Environment</a></h4>
                        <p class="description">Beyond aesthetics, our plants improve air quality, boost employee
                            morale, and create a more pleasant and productive work atmosphere.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-tools"></i></div>
                        <h4 class="title"><a href="javascript:void(0);">Hassle-Free Maintenance</a></h4>
                        <p class="description">We take care of everything from installation to regular maintenance,
                            ensuring your plants stay healthy and beautiful without any extra effort on your part.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-arrows-move"></i></div>
                        <h4 class="title"><a href="javascript:void(0);">Flexible Options</a></h4>
                        <p class="description">Whether you need plants for a short-term event or a long-term
                            enhancement, we offer flexible rental plans to suit your requirements.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-star"></i></div>
                        <h4 class="title"><a href="#">Customer Satisfaction</a></h4>
                        <p class="description">Our goal is to ensure that you are completely satisfied with our
                            service. We strive to exceed your expectations and create a positive experience for you
                            from start to finish.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Featured Services Section -->




    <div class="container mt-5">
        <div class="row align-items-start">
            <div class="col-lg-6 col-sm-6" data-aos="fade-right">
                <img src="assets/img/portfolio/hero.jpg" class="img-fluid" alt="garden plants are awesome">
            </div>
            <p class="invisible d-lg-none">.</p>
            <div class="col-lg-6 col-md-6 " data-aos="fade-left">
                <h3>Our Innovative Interior Plant Rental Service</h3>
                <p>Welcome to our innovative interior plant rental service, transforming Mumbai's workspaces into
                    vibrant, inspiring environments.
                    Gone are the days of dull, lifeless plants. With our service, each plant and flower arrangement
                    is a statement piece, full of character and individuality, carefully curated to enhance your
                    office's aesthetic.
                <h3>Transform Our Workspace in Mumbai</h3>
                <p>Experience the difference our comprehensive interior plant rental service can make in your Mumbai
                    workspace. Let us create a healthier, more vibrant environment for you and your employees, while
                    also ensuring long-term plant health.</p>
                <p>Get your favourite plants on rent to enjoy presence of nature without hassle, we have short and
                    long term
                    plans as per requirements which start from a minimum monthly rental of Rs 5000 .
                </p>
                <a href="contact-us.php">
                    <button class="btn btn-success" type="button">Let us call you</button>
                </a>
            </div>

        </div>
    </div>






    <!-- ======= Services Section ======= -->
    <section id="services" class="services d-md-block d-none">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>
                    We provide variety of services including indoor plant rental and office plant rental to beautify
                    your spaces.

                </p>

            </div>


            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col" data-aos="fade-right">
                    <div class="card h-100">
                        <a href="corporate-plant.php">
                            <img src="assets/img/plant100.jpg" class="card-img-top" style="height:310px;"
                                alt="Corporate Plants" />
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase">Corporate Plants</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="flip-up">
                    <div class="card h-100">
                        <a href="vertical-garden.php">
                            <img src="assets/img/plant4.jpg" class="card-img-top" style="height:310px;"
                                alt="VERTICAL GARDENS" />
                            <div class="card-body">
                                <h5 class="card-title text-center">VERTICAL GARDENS</h5>

                            </div>
                        </a>
                    </div>
                </div>



                <div class="col" data-aos="fade-left">
                    <div class="card h-100">
                        <a href="garden-center.php">
                            <img src="assets/img/g4.jpg" class="card-img-top " style="height:310px;"
                                alt="GARDEN CENTER" />
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase">garden center</h5>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="fade-right">
                    <div class="card h-100">
                        <a href="garden-development.php">
                            <img src="assets/img/g5.jpg" class="card-img-top" style="height:310px;" alt="Garden Developement & Maintenance" />
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase">Garden Developement & Maintenance
                                </h5>

                            </div>
                        </a>
                    </div>
                </div>



                <div class="col" data-aos="flip-down">
                    <div class="card h-100">
                        <a href="javascript:void(0);">
                            <img src="assets/img/art.jpg" class="card-img-top" style="height:310px;"
                                alt="Artificial Plants" />
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase">Artificial Plants</h5>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="fade-left">
                    <div class="card h-100">
                        <a href="javascript:void(0);">

                            <img src="assets/img/con.jpg" class="card-img-top" style="height:310px;"
                                alt="Consultancy" />
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase">Consultancy</h5>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Services Section -->






    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start" data-aos="fade-right">
                    <h3>Stunning Indoor Plant Displays For Your Business</h3>
                    <p>Our carefully curated selection of plants and expert design services ensure that each display
                        is a masterpiece, enhancing your brand and creating a welcoming atmosphere for employees and
                        visitors alike.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center" data-aos="flip-down">
                    <a class="cta-btn align-middle" href="contact-us.php">Get in Touch</a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <?php include('contact-form.php') ?>

    <!-- WhatsApp Chat Button -->
    <div class="whatsapp-button">
        <a href="https://api.whatsapp.com/send?phone=918369613417&text=Greetings! How may I assist you today?"
            target="_blank">
            <img src="assets/img/web.png" alt="WhatsApp Chat" width="100" height="100">
        </a>
    </div>



    <!-- End #main -->

    <?php include('footer.php'); ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 500, // values from 0 to 3000, with step 50ms
        duration: 3000, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
    </script>

</body>

</html>