<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tree</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
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

    <?php include('header.php') ?>



    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="padding:50px 0 ; min-height:70px; background-image:url(assets/img/breadcrumb.png); background-repeat:no-repeat;
background-size: cover; filter: contrast(100%); text-align:center;">
        <div class="container">
            <h2 class="text-center fs-2  text-white fw-bold">Garden Center</h2>

            <div class="d-flex justify-content-center align-items-center">



                <ol>
                    <li><a href="index.php" class="text-white fs-6">Home</a></li>
                    <li class="text-white fs-6">Services</li>
                    <li class="text-white fs-6"> Garden Center</li>

                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6" data-aos="fade-right">
                    <img src="assets/img/gc3.jpg" alt="" class="img-fluid">
                </div>
                <p class="invisible d-lg-none">.</p>
                <div class="col-lg-6 col-md-6" data-aos="fade-left">

                    <p>
                        We offer plants for every need of your customers, whether it is indoor plants to make their
                        apartments.
                    </p>
                    <p>
                        The Garden Centre, with its high-quality plants and knowledge, is a great asset to all
                        plant-loving residents and gardeners in Mumbai.
                    </p>
                    <p>
                        We provide a wide range of plants for landscaping at our garden center in Mumbai. Our collection
                        is sure to attract the attention of professional landscapers and garden developers. Apart from
                        them, plant lovers who want to keep a selection of plants for their homes, gardens, and offices
                        can also get their desired plants from here.
                    </p>

                    <p>
                        Our friendly staff and growers are available to help you with questions about plants and to
                        provide you with important cultural information to help keep plants healthy. Our nursery stock
                        offers a full line of gardening needs such as potting mixes, containers, gardening tools, plant
                        foods, flower bulbs, and seeds to keep your green thumb in business.
                    </p>
                </div>

            </div>
        </div>
    </section>

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