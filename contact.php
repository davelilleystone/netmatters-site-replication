<?php

include './includes/contact_form_handler.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="./js/sticky-nav.js" defer></script>
    <script src="./js/mobile-nav.js" defer></script>
    <script src="./js/cookie-consent.js" defer></script>
    <script src="./js/contact-dropdown.js" defer></script>
    <title>Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters</title>
</head>

<body>

    <div class="main-container">

        <!-- Cookie Consent -->

        <?php include './includes/cookie_consent.php'; ?>

        <!-- Sidebar -->
        <?php include './includes/sidebar.php';
        ?>

        <!-- Sticky Nav -->
        <?php include './includes/sticky_nav.php'; ?>

        <div class="mobile-nav-overlay"></div>
        <div class="main-content contact-page-content">

            <!-- Standard Nav -->
            <?php include './includes/standard_nav.php'; ?>

            <div class="breadcrumb-outer">
                <div class="breadcrumb-inner inner-container">
                    <span><a href="index.php">Home</a> / Our Offices
                </div>
            </div>

            <!-- Our Offices -->

            <div class="offices-wrapper">
                <div class="offices-heading-wrapper">
                    <div class="inner-container">
                        <h1 class="offices-heading">Our Offices</h1>
                    </div>

                </div>
                <div class="offices-cards-wrapper inner-container">
                    <div class="offices-card">
                        <div class="card-main-content">
                            <div class="card-image-wrapper">
                                <img src="./img/contact/london.webp" alt="london office">
                            </div>
                            <div class="offices-card-content-wrapper">
                                <h2><a href="#">London Office</a></h2>
                                <address>
                                    Unit G6,<br>
                                    Pixel Business Centre,<br>
                                    110 Brooker Road, Waltham Abbey,<br>
                                    London,<br>
                                    EN9 1JH
                                </address>
                                <a href="tel:+442045397354" class="office-telephone">02045 397354</a>
                                <a href="#" class="view-more">View More</a>
                            </div>
                        </div>
                        <div class="map-wrapper">
                            <img src="./img/contact/london-map.webp" alt="london office location">
                        </div>
                    </div>
                    <div class="offices-card">
                        <div class="card-main-content">
                            <div class="card-image-wrapper">
                                <img src="./img/contact/cambridge.webp" alt="cambridge office">
                            </div>
                            <div class="offices-card-content-wrapper">
                                <h2><a href="#">Cambridge Office</a></h2>
                                <address>
                                    Unit 1.31,<br>
                                    St John's Innovation Centre,<br>
                                    Cowley Road, Milton,<br>
                                    Cambridge,<br>
                                    CB4 0WS
                                </address>
                                <a href="tel:+4401223375772" class="office-telephone">01223 37 57 72</a>
                                <a href="#" class="view-more">View More</a>
                            </div>
                        </div>
                        <div class="map-wrapper">
                            <img src="./img/contact/cambridge-map.webp" alt="cambridge office location">
                        </div>
                    </div>
                    <div class="offices-card">
                        <div class="card-main-content">
                            <div class="card-image-wrapper">
                                <img src="./img/contact/wymondham.webp" alt="Wymondham Office">
                            </div>
                            <div class="offices-card-content-wrapper">
                                <h2><a href="#">Wymondham Office</a></h2>
                                <address>
                                    Unit 15,<br>
                                    Penfold Drive,<br>
                                    Gateway 11 Business Park,<br>
                                    Wymondham, Norfolk,<br>
                                    NR18 0WZ
                                </address>
                                <a href="tel:+4401603704020" class="office-telephone">01603 70 40 2072</a>
                                <a href="#" class="view-more">View More</a>
                            </div>
                        </div>
                        <div class="map-wrapper">
                            <img src="./img/contact/wyn-map.webp" alt="Wymondham Office location">
                        </div>
                    </div>
                    <div class="offices-card">
                        <div class="card-main-content">
                            <div class="card-image-wrapper">
                                <img src="./img/contact/yarmouth.webp" alt="Great Yarmouth Office">
                            </div>
                            <div class="offices-card-content-wrapper">
                                <h2><a href="#">Great Yarmouth Office</a></h2>
                                <address>
                                    Suite F23,<br>
                                    Beacon Innovation Centre,<br>
                                    Beacon Park, Gorleston,<br>
                                    Great Yarmouth, Norfolk,<br>
                                    NR31 7RA
                                </address>
                                <a href="tel:+4401493603204" class="office-telephone">01493 60 32 04</a>
                                <a href="#" class="view-more">View More</a>
                            </div>
                        </div>
                        <div class="map-wrapper">
                            <img src="./img/contact/yar-map.webp" alt="Great Yarmouth Office location">
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-wrapper-outer">
                <div class="contact-wrapper-inner inner-container">

                    <!-- Contact Details -->
                    <div class="contact-details-wrapper">
                        <div class="contact-details">
                            <p>Email us on:</p>
                            <p><a href="#">sales@netmatters.com</a></p>
                            <p>Business hours:</p>
                            <p>Monday - Friday 07:00 - 18:00</p>
                        </div>
                        <div class="out-of-hours">
                            <h4>
                                Out of Hours IT Support <i class="fa-solid fa-chevron-down"></i>
                            </h4>
                            <div class="content-container">
                                <div class="content">
                                    <p class="light-text">Netmatters IT are offering an Out of Hours service for
                                        Emergency and
                                        Critical
                                        tasks.
                                    </p>
                                    <p>
                                        Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00<br>Sunday
                                        10:00 -
                                        18:00
                                    </p>
                                    <p class="light-text">To log a critical task, you will need to call our main line
                                        number and
                                        select
                                        Option
                                        2 to
                                        leave an Out of Hours voicemail. A technician will contact you on the
                                        number
                                        provided
                                        within 45 minutes of your call. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Form -->
                    <?php
                    include './includes/contact_form.php';
                    ?>
                </div>
                <!--end contact-wrapper-inner -->
            </div> <!-- end contact-wrapper-outer -->

            <!-- Newsletter -->

            <?php include './includes/newsletter.php' ?>

            <!-- Footer -->
            <?php include './includes/footer.php' ?>
        </div> <!-- end main-content-->
    </div> <!-- end main-container-->
</body>

</html>