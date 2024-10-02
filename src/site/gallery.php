<?php include 'templates/setcookies.php';
include 'templates/connectdb.php'; ?>
<!DOCTYPE HTML>
<html lang="<?php echo $_SESSION["lang"] ?>">

<head>
    <title><?php echo json_decode(file_get_contents('text/navigation.json'))->gallery->$lang; ?> | Street Souls</title>
    <!-- meta information -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- links used for gallery(photoswipe and justifiedGallery) -->
    <link rel="stylesheet" href="assets/css/photoswipe.css">
    <link rel="stylesheet" href="assets/css/default-skin/default-skin.css">
    <link rel="stylesheet" href="assets/css/justifiedGallery.min.css"/>

    <!-- default links -->
    <link rel="stylesheet" href="assets/css/defaults.css"/>
    <link rel="stylesheet" href="assets/css/header.css"/>
    <link rel="stylesheet" href="assets/css/nav.css"/>
    <link rel="stylesheet" href="assets/css/wrapper.css"/>
    <link rel="stylesheet" href="assets/css/align.css"/>
    <link rel="stylesheet" href="assets/css/footer.css"/>
    <link rel="stylesheet" href="assets/css/icon.css"/>
    <link rel="stylesheet" href="assets/css/button.css"/>
    <link rel="stylesheet" href="assets/css/image.css"/>
    <link rel="stylesheet" href="assets/css/gallery.css"/>
    <link rel="stylesheet" href="assets/css/cookieconsent.min.css"/>

    <!-- page icon -->
    <link rel="shortcut icon" href="images/icons/favicon.ico" type="image/x-icon">

    <!-- Cookie Consent -->
    <?php include 'templates/cookieConsent.php'; ?>
</head>

<body>

<!-- Header -->
<?php include 'templates/header-white.php'; ?>

<!-- Content -->
<section class="wrapper grey-style">
    <!-- Language Selection -->
    <?php include 'templates/languageDiv.php'; ?>
    <div class="separator">
        <header class="align-center common-header">
            <p class="special "><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s1->$lang; ?></p>
            <h2 class="">Street Souls</h2>
        </header>
    </div>
    <div class="padding2rem ">
        <div class="gallery">
            <?php include 'templates/createGallery.php' ?>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'templates/footer.php' ?>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/helper.js"></script>
</body>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
</html>