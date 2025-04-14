<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tree</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
<style>
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
</style>

<body>
 
    

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About Us</h2>
                <p>"Dedicated to providing high-quality, hand-selected fruits that are delivered directly from the farmer to your table, making sure everything you eat is fresh and flavorful."</p>
            </div>

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-right">
                    <img src="assets/img/go-green.png" class="img-fluid h-100" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-left">
                    <h3>Welcome To Treego !</h3>
                    <p class="fst-italic">
            
                        Treego is a company started by a young MBA entrepreneur and fruit enthusiast in Mumbai. We have a unique quality of packaged experience in the industry. Our delivery brings healthy fruits to residents and local businesses in and around Mumbai. "Fruits make everyone healthy and happy in their environment."


                    </p>

                    <p>
                    At TreeGo, we believe in the power of nature. Every apple, pear, and berry etc .we supply is nurtured with care, harvested with precision, and delivered with pride. Our mission is to provide the highest quality fruit to people who care about freshness, sustainability, and flavor.
                    </p>

                    
                </div>
            </div>

        </div>
    </section>
    <!-- End About Us Section -->
    <!-- WhatsApp Chat Button -->
    <div class="whatsapp-button">
        <a href="https://api.whatsapp.com/send?phone=918369613417&text=Greetings! How may I assist you today?"
            target="_blank">
            <img src="assets/img/web.png" alt="WhatsApp Chat" width="100" height="100">
        </a>
    </div>

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