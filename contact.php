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
                            <h4><a href="#">Out of Hours IT Support </a></h4>
                            <div class="content-container">
                                <div class="content">
                                    <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical
                                        tasks.
                                    </p>
                                    <p><strong>Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00<br>Sunday 10:00 -
                                            18:00</strong></p>
                                    <p>To log a critical task, you will need to call our main line number and select
                                        Option
                                        2 to
                                        leave an Out of Hours voicemail. A technician will contact you on the number
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