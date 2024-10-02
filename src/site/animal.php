<?php include 'templates/setcookies.php' ?>
<!DOCTYPE HTML>
<html lang="<?php echo $_SESSION["lang"] ?>">

<head>
    <title>
        <?php
        if (isset($_SESSION['dog_id']) && !empty($_SESSION['dog_id'])) {
            $dog_id = $_SESSION['dog_id'];
        } else {
            $dog_id = 'ERROR_ID';
        }
        if (isset($_SESSION['dog_name']) && !empty($_SESSION['dog_name'])) {
            $dog_name = $_SESSION['dog_name'];
        } else {
            $dog_name = 'ERROR_NAME';
        }
        echo $dog_name;
        ?> | Street Souls
    </title>

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
    <link rel="stylesheet" href="assets/css/image.css"/>
    <link rel="stylesheet" href="assets/css/home.css"/>
    <link rel="stylesheet" href="assets/css/cookieconsent.min.css"/>


    <!-- page icon -->
    <link rel="shortcut icon" href="images/icons/favicon.ico">

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

    <!-- Get Animal Information -->
    <?php
    include 'templates/connectdb.php';
    // prepare and execute query
    if ($connection != false) {
        $stmt = $connection->prepare('SELECT description.content, race.content FROM dogs, description, race WHERE dogs.id="' . $dog_id . '" AND description.id="' . $dog_id . '" AND description.language="' . $lang . '" AND race.id=dogs.race_id AND race.language="' . $lang . '";');
        $stmt->execute();

        // get the mysqli result
        $result = $stmt->get_result();
        $row = mysqli_fetch_array($result);
        $description = utf8_encode($row[0]);
        $race = utf8_encode($row[1]);
        mysqli_close($connection);
    } else {
        die("Connection not open: " . $connection->connect_error);
    } ?>
    <div class="separator">
        <header class="align-center common-header">
            <p class="special"><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s1->$lang; ?></p>
            <h2 style="margin-bottom: 0">
                <?php
                echo $dog_name;
                ?>
            </h2>
        </header>
    </div>

    <div class="padding2rem white">
        <!-- Profile -->
        <div class="padding2rem flex-grid">
            <div class="flex">
                <header>
                    <h2><?php echo json_decode(file_get_contents('text/gallery.json'))->likeIt->$lang; ?></h2>
                    <p><?php echo json_decode(file_get_contents('text/home.json'))->companion->subtitle->$lang; ?></p>
                </header>
                <div class="flex">
                    <div class="image fit">
                        <img src="<?php echo 'images/dogs/' . $dog_id . '/' . $dog_id . '_1.jpg'; ?>" alt=""/>
                    </div>
                    <div>
                        <header>
                            <h3><?php echo json_decode(file_get_contents('text/gallery.json'))->age->$lang; ?></h3>
                            <p><?php echo $race ?></p>
                        </header>
                        <header>
                            <h3><?php echo json_decode(file_get_contents('text/gallery.json'))->race->$lang; ?></h3>
                            <p><?php echo $race ?></p>
                        </header>
                        <header>
                            <h3><?php echo json_decode(file_get_contents('text/gallery.json'))->description->$lang; ?></h3>
                            <p><?php echo $description ?></p>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="separator background2">
        <header class="align-center common-header">
            <p class="special light"><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s1->$lang; ?></p>
            <h2 class="light"><?php echo json_decode(file_get_contents('text/gallery.json'))->allPhotos->$lang; ?></h2>
        </header>
    </div>
    <div class="padding2rem white">
        <!-- Gallery -->
        <div class="separator">
            <header class="align-center common-header">
                <p class="special"><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s1->$lang; ?></p>
                <h2 style="margin-bottom: 0">Gallery</h2>
            </header>
        </div>
        <div class="justified-gallery my-gallery" id="mygallery">
            <?php
//            echo "<script>console.log('dog_id: ". $_SESSION['dog_id'] . "' );</script>";
//            echo "<script>console.log('dog_name: ". $_SESSION['dog_name'] . "' );</script>";
            $files = glob('images/dogs/' . $dog_id . '/*.{jpg}', GLOB_BRACE);
            foreach ($files as $file) {
                $info = getimagesize($file);
                echo
                    '<figure class="">
						<a href="' . $file . '" itemprop="contentUrl" data-size="' . $info[0] . 'x' . $info[1] . '">
							<img src="' . $file . '" itemprop="thumbnail" alt="' . $dog_name . '" />
						</a>
					</figure>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'templates/footer.php'; ?>

<!-- Photoswipe -->
<?php include 'templates/photoswipe.php'; ?>

<!-- scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<!-- justified Gallery -->
<script src="assets/js/jquery.justifiedGallery.min.js"></script>
<script src="assets/js/photoswipe.min.js"></script>
<script src="assets/js/photoswipe-ui-default.min.js"></script>
<script src="assets/js/justifiedGallery.js"></script>
<script src="assets/js/helper.js"></script>
</body>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
</html>