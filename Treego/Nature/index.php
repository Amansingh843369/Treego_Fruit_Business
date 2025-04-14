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

        height: 86vh;
    }

    .carousel-item {
        background-size: cover !important;
    }




}

@media (max-width: 768px ) {
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
    bottom: 70px;
    right: 10px;
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

.btn-whatsapp-pulse {
	color: white;
	position: fixed;
 
	font-size: 40px;
	display: flex;
	justify-content: center;
	align-items: center;
	width: 0;
	height: 0;
	padding: 35px;
	text-decoration: none;
	border-radius: 50%;
	animation-name: pulse;
	animation-duration: 1.5s;
	animation-timing-function: ease-out;
	animation-iteration-count: infinite;
}

@keyframes pulse {
	0% {
		box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5);
	}
	80% {
		box-shadow: 0 0 0 14px rgba(37, 211, 102, 0);
	}
}

.btn-whatsapp-pulse-border {
	bottom: 120px;
	right: 20px;
	animation-play-state: paused;
}


.btn-whatsapp-pulse-border::before {
	content: "";
	position: absolute;
	border-radius: 50%;
	padding: 25px;
	border: 5px solid #25d366;
	opacity: 0.75;
	animation-name: pulse-border;
	animation-duration: 1.5s;
	animation-timing-function: ease-out;
	animation-iteration-count: infinite;
}

@keyframes pulse-border {
	0% {
		padding: 25px;
		opacity: 0.75;
	}
	75% {
		padding: 50px;
		opacity: 0;
	}
	100% {
		opacity: 0;
	}
}
</Style>

<body>
<?php include('vertical-garden.php') ?>



       <!-- Mission & Vision -->
<section class="bg-light py-5">
  <div class="container">
    <div class="row text-center text-md-start">
      <div class="col-md-6 mb-4 mb-md-0">
        <h4 class="text-success fw-bold">Our Mission:</h4>
        <p>To cultivate and deliver the highest quality fruits with unmatched freshness. Integrity, and care—nurturing healthier lifestyles and a sustainable planet.</p>
      </div>
      <div class="col-md-6">
        <h4 class="text-success fw-bold">Our Vision:</h4>
        <p>To be the world’s most trusted fruit supplier. Inspiring wellness through nature’s finest harvests, and leading the future of sustainable agriculture, with transparency, innovation, and heart.</p>
      </div>
    </div>
  </div>
</section>
    <!-- <section id="hero">
        <div id="heroCarousel" data-bs-interval="2000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 

                <div class="carousel-item active c1"
                    style="background-image: url(assets/img/portfolio/fruit-1.jpg); background-position:center;">
                    
                </div>


                <div class="carousel-item"
                    style="background-image: url(assets/img/portfolio/fruit-2.jpg); background-position:center">  
                </div>

                <!-- Slide 2 
                <div class="carousel-item "
                    style="background-image: url(assets/img/portfolio/fruit-3.jpg);  background-position:center;">
                     
                </div>

                <!-- Slide 3 
                <div class="carousel-item"
                    style="background-image: url(assets/img/portfolio/fruit-4.jpg); background-position:center; ">
                     
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section> -->

 
<br>

    <div class="container-fluid  py-5">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<img class="img-fluid" src="./assets/img/favicon_io/fruits222.png" alt="">
					</div>
					<div class="col-md-6 col-sm-12 hm-page">
						<span style="color:rgb(21, 253, 0); text-transform: uppercase; font-size: 2rem; font-weight: bold; margin-top: 20px;">Welcome to our Treego</span><br>

            <span class="hm-details">
            Welcome to Treego Fruits: your home for brightly colored, exotic fruits in Mumbai! We pride ourselves on providing lots of varieties of high quality fruit, from local farms or flown in from the source. Whether you want some juicy mangoes, premium apples or tropical delights — there is something for everyone. Our commitment to quality, freshness and customer satisfaction is to ensure you receive the best fruits, each and every time. Come visit us to enjoy the flavors of nature in the local market in Mumbai!
          </span><br><br>
		
						<button type="button" class="btn btn-light button read-more" data-toggle="modal" data-target="#exampleModalLong">
						  Read More...</span>
						</button>


			        </div>
				</div>
			</div>
		</section>	
		<!-- Home Section End -->





<!-- About Section Start -->
<section id="about">
			<div class="container-fluid mt-5">

				<div class="row mt-5">
				 	<div class="col-md-12 col-sm-12 text-dark text-center">
						<h1 style="color: #83b63a; font-weight: 300; margin-top: 65px;">Why Choose Us</h1>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-12 text-dark text-center">
						<p style="color: #898989;">The fact of the matter is that you really know something's organic when you find bugs! they obviously wouldn't have made it that far in a non-organic growing environment, so better than any certification or seal on a package, the presence of creatures let you know the plant was healthy and.</p>
					</div>
				</div>
 

				<div class="row">
					<div class="col-md-3 col-sm-12 text-left py-2 left-side">
						
						<h4 style="color: #83b63a;"><img class="img-fluid" src="./assets/img/favicon_io/icon-choose-1_small.png"> 100% Organic Fruits</h4>
						<p style="color: #898989;">Our fruits are cultivated without any synthetic pesticides, herbicides, or GMOs. Just sunshine, clean soil and sustainable farming practices.</p>

						<h4 style="color: #83b63a;"><img class="img-fluid" src="./assets/img/favicon_io/icon-choose-2_small.png"> Premium, hand-selected fruits</h4>
						<p style="color: #898989;">Savor our premium selection of hand-picked fruits for a never-before-tasted experience of flavor.</p>

						<h4 style="color: #83b63a;"><img class="img-fluid" src="./assets/img/favicon_io/icon-choose-3_small.png"> Fresh Product</h4>
						<p style="color: #898989;">Experience nature's bounty with our fresh, handpicked fruits and vegetables—delivered straight from farm to table perfection.</p>

					</div>

					<div class="col-md-6 col-sm-12 text-center py-3">
						<img style="margin-top: 20px;" class="img-fluid" src="https://sujon-ahmed.github.io/Fresh-Fruits/resources/img/fruits/pic.png">
					</div>

					<div class="col-md-3 col-sm-12 text-left py-2">
						
						<h4 style="color:rgb(114, 182, 58);"><img class="img-fluid" src="./assets/img/favicon_io/icon-choose-4_small.png"> 
Eco-friendly and ethical farming practices
</h4>
						<p style="color: #898989;">We're dedicated to environmentally sound and ethical agricultural practices to build a sustainable future.</p>

						<h4 style="color: #83b63a;"><img class="img-fluid" src="./assets/img/favicon_io/icon-choose-5_small.png"> 
Trusted by chefs, grocers, and households globally
</h4>
						<p style="color: #898989;">Chef, grocer, and household trusted internationally for the finest assortment of fruits.</p>

						<h4 style="color: #83b63a;"><img class="img-fluid" src="./assets/img/favicon_io/icon-choose-6_small.png">Cold Chain Delivery</h4>
						<p style="color: #898989;">Cold chain delivery for the freshest of the fresh fruits!</p>
					</div>
				</div>

				 
			</div>
		</section>
		<!-- About Section End -->



















 

 




    <!-- ======= Services Section ======= -->
    <section id="services" class="services d-md-block d-none">
        <div class="container">

            <div class="section-title">
                <h2>Products</h2>
                <p>
                "Get ready to enjoy the best collection of fresh fruits, delivered with the best service."

                </p>

            </div>


            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col" data-aos="fade-right">
                    <div class="card h-100">
                        <a href="fresh_fruits.php">
                            <img src="assets/img/clients/f1.jpg" class="card-img-top" style="height:310px;"
                                alt="Fresh Fruits" />
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase">Fresh fruits</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="flip-up">
                    <div class="card h-100">
                        <a href="aggregate-fruits.php">
                            <img src="assets/img/clients/f2.jpg" class="card-img-top" style="height:310px;"
                                alt="" />
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase">Aggregate Fruits</h5>

                            </div>
                        </a>
                    </div>
                </div>



                <div class="col" data-aos="fade-left">
                    <div class="card h-100">
                        <a href="garden-center.php">
                            <img src="https://media.istockphoto.com/id/1352884155/photo/assortment-of-fresh-fruits-on-the-table.jpg?s=612x612&w=0&k=20&c=12_scxAmlmO_sGKjq1bPM0BTZ_3hrLtwe1gMJhqHQH0=" class="card-img-top " style="height:310px;"
                                alt="GARDEN CENTER" />
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase">Multiple fruits</h5>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="fade-right">
                    <div class="card h-100">
                        <a href="garden-development.php">
                            <img src="https://media.istockphoto.com/id/1568749780/photo/beautiful-red-ripe-tomatoes-grown-in-a-greenhouse-agriculture.jpg?s=612x612&w=0&k=20&c=EoB2MvHNVCFgyl52RPd5m1ideA5URedoDKbd210tMv0=" class="card-img-top" style="height:310px;" alt="Garden Developement & Maintenance" />
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase"> Hydroponic fruits
                                </h5>

                            </div>
                        </a>
                    </div>
                </div>



                <div class="col" data-aos="flip-down">
                    <div class="card h-100">
                        <a href="javascript:void(0);">
                            <img src="https://images.unsplash.com/photo-1730991709958-8debfc077091?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGltcG9ydGVkJTIwZnJ1aXRzfGVufDB8fDB8fHww" class="card-img-top" style="height:310px;"
                                alt="Artificial Plants" />
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase">Imported fruits</h5>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="fade-left">
                    <div class="card h-100">
                        <a href="javascript:void(0);">

                            <img src="https://media.istockphoto.com/id/1218693828/photo/wooden-bowl-with-mixed-nuts-on-rustic-table-top-view-healthy-food-and-snack.jpg?s=612x612&w=0&k=20&c=89-ko7nwlcqM6HPvwaQ3tZus4apArtwHkFAB0IxPQpo=" class="card-img-top" style="height:310px;"
                                alt="Consultancy" />
                            <div class="card-body">
                                <h5 class="card-title text-center text-uppercase">Dry fruits</h5>

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
                    <h3> Ready to indulge ?</h3>
                    <p> Indulge in a variety of flavors and feed your body with pure, fresh, and organic fruits.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center" data-aos="flip-down">
                    <a class="cta-btn align-middle" href="#contact">Get in Touch</a>
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