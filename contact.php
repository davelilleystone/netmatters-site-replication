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
    <title>Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters</title>
</head>

<body>

    <div class="main-container">

        <!-- Cookie Consent -->

        <?php include './includes/cookie_consent.php'; ?>

        <!-- Sidebar -->
        <?php include './includes/sidebar.php'; ?>

        <!-- Sticky Nav -->
        <?php include './includes/sticky_nav.php'; ?>

        <div class="mobile-nav-overlay"></div>
        <div class="main-content">

            <!-- Standard Nav -->
            <?php include './includes/standard_nav.php'; ?>


            <!-- Footer -->
            <?php include './includes/footer.php' ?>
        </div> <!-- end main-content-->
    </div> <!-- end main-container-->
</body>

</html>