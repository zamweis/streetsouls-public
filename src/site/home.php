<?php include 'templates/setcookies.php' ?>
<!DOCTYPE HTML>
<html lang="<?php echo $_SESSION["lang"] ?>">

<head>
    <title>Street Souls - <?php echo json_decode(file_get_contents('text/home.json'))->companion->subtitle->$lang;?></title>

    <!-- meta information -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="<?php echo json_decode(file_get_contents('text/headlines.json'))->description->home->$lang; ?>"/>
    <link rel="canonical" href="https://www.streetsouls.lu/"/>
    <link rel="alternate" hreflang="fr" href="https://www.streetsouls.lu/fr/"/>
    <link rel="alternate" hreflang="de" href="https://www.streetsouls.lu/de/"/>
    <link rel="alternate" hreflang="en" href="https://www.streetsouls.lu/en/"/>
    <link rel="alternate" hreflang="lb" href="https://www.streetsouls.lu/lb/"/>

    <!-- default links -->
    <link rel="stylesheet" href="/assets/css/main.css"/>
    <link rel="stylesheet" href="/assets/css/home.css"/>
    <link rel="stylesheet" href="/assets/css/cookieconsent.min.css"/>


    <!-- page icon -->
    <link rel="shortcut icon" href="/images/icons/favicon.ico" type="image/x-icon">

    <!-- SocialMedia Share -->
    <!--    <meta property="og:url" content="https://streetsouls.lu/"/>-->
    <!--    <meta property="og:type" content="website"/>-->
    <!--    <meta property="og:title" content="-->
    <?php //echo file_get_contents('text/' . $_SESSION["lang"] . '/fbTitle.txt') ?><!--"/>-->
    <!--    <meta property="og:description"-->
    <!--          content="-->
    <?php //echo file_get_contents('text/' . $_SESSION["lang"] . '/fbDescription.txt') ?><!--"/>-->
    <!--    <meta property="og:image" content="https://streetsouls.lu/images/design/slide5.jpg"/>-->
    <!--    <meta property="og:image:alt" content="https://streetsouls.lu/images/dogs/Rufus3.jpg"/>-->
    <!--    <meta name="twitter:card" content="summary_large_image">-->
    <!--    <meta name="twitter:description"-->
    <!--          content="Een Akt vun Generositéit ka vill Liewe retten. Mir siche fir Stroossendéiere léif a virsuerglech Familljen. #DontShopAdopt">-->
    <!--    <meta name="twitter:image" content="https://streetsouls.lu/images/dogs/Rufus3.jpg">-->
    <!--    <meta name="twitter:image:alt" content="https://streetsouls.lu/images/design/slide5.jpg">-->
    <!--    <meta name="twitter:title" content="Don't Shop. Adopt!">-->
</head>

<body>

<!-- Header -->
<?php include 'templates/header-transparent.php'; ?>
<h1 style="display:none;">Street Souls - <?php echo json_decode(file_get_contents('text/home.json'))->companion->subtitle->$lang;?></h1>

<!-- Banner -->
<section class="banner full">
    <article><img src="/images/design/slide1.jpg" alt="a happy dog looking for a new home"/>
        <div class="inner">
            <header>
                <p><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s2->$lang; ?></p>
                <h2><?php echo json_decode(file_get_contents('text/headlines.json'))->slideshow->title->t1->$lang; ?></h2>
            </header>
        </div>
    </article>
    <article><img src="/images/design/slide2.jpg" alt="a dog looking for help"/>
        <div class="inner">
            <header>
                <p><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s2->$lang; ?></p>
                <h2><?php echo json_decode(file_get_contents('text/headlines.json'))->slideshow->title->t2->$lang; ?></h2>
            </header>
        </div>
    </article>
    <article><img src="/images/design/slide3.jpg" alt="a dog cuddeling"/>
        <div class="inner">
            <header>
                <p><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s2->$lang; ?></p>
                <h2><?php echo json_decode(file_get_contents('text/headlines.json'))->slideshow->title->t3->$lang; ?></h2>
            </header>
        </div>
    </article>
    <article><img src="/images/design/slide4.jpg" alt="a dog begging"/>
        <div class="inner">
            <header>
                <p><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s2->$lang; ?></p>
                <h2><?php echo json_decode(file_get_contents('text/headlines.json'))->slideshow->title->t4->$lang; ?></h2>
            </header>
        </div>
    </article>
    <article><img src="/images/design/slide5.jpg" alt="a puppy hold in hands"/>
        <div class="inner">
            <header>
                <p><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s2->$lang; ?></p>
                <h2><?php echo json_decode(file_get_contents('text/headlines.json'))->slideshow->title->t5->$lang; ?></h2>
            </header>
        </div>
    </article>
</section>

<!-- Content -->
<section class="wrapper grey-style" id="scroll-to">

    <!-- Language Selection -->
    <?php include 'templates/languageDiv.php'; ?>

    <div class="separator2">
        <header class="align-center common-header">
            <img src="/images/design/logo.png" alt="streetsouls logo">
            <p class="special bigger"><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s5->$lang; ?></p>
        </header>
    </div>
    <div class="white padding2rem">
        <div class="padding2rem flex-grid">
            <div class="flex">
                <header>
                    <h2><?php echo json_decode(file_get_contents('text/home.json'))->companion->title->$lang; ?></h2>
                    <p><?php echo json_decode(file_get_contents('text/home.json'))->companion->subtitle->$lang; ?></p>
                </header>
                <p class="justify"><span class="image left"><img src="/images/design/companion.jpg" alt="companion dog with small girl"></span>
                    <?php echo json_decode(file_get_contents('text/home.json'))->companion->content->$lang; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="separator background2">
        <header class="align-center common-header">
            <p class="special bigger light"><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s1->$lang; ?></p>
            <h2 class="light" style="margin-bottom: 0">Street Souls</h2>
        </header>
    </div>
    <div class="padding2rem white">
        <div class="padding2rem flex-grid">
            <div class="flex">
                <header>
                    <h2><?php echo json_decode(file_get_contents('text/home.json'))->euthanasia->title->$lang; ?></h2>
                    <p><?php echo json_decode(file_get_contents('text/home.json'))->euthanasia->subtitle->$lang; ?></p>
                </header>
                <p class="justify"><span class="image left"><img src="/images/design/euthanasia.jpg" alt="a dog a the vet"></span>
                    <?php echo json_decode(file_get_contents('text/home.json'))->euthanasia->content->$lang->p1; ?>
                    <br><br>
                    <?php echo json_decode(file_get_contents('text/home.json'))->euthanasia->content->$lang->p2; ?>
                    <br><br>
                    <?php echo json_decode(file_get_contents('text/home.json'))->euthanasia->content->$lang->p3; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="separator background2">
        <header class="align-center common-header">
            <p class="special bigger light"><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s1->$lang; ?></p>
            <h2 class="light" style="margin-bottom: 0">Street Souls</h2>
        </header>
    </div>
    <div class="padding2rem white">
        <div class="padding2rem  flex-grid">
            <div class="flex">
                <header>
                    <h2><?php echo json_decode(file_get_contents('text/home.json'))->puppyMills->title->$lang; ?></h2>
                    <p><?php echo json_decode(file_get_contents('text/home.json'))->puppyMills->subtitle->$lang; ?></p>
                </header>
                <p class="justify"><span class="image left"><img src="/images/design/puppy.jpg" alt="a sweet puppy"></span>
                    <?php echo json_decode(file_get_contents('text/home.json'))->puppyMills->content->$lang->p1; ?>
                    <br><br>
                    <?php echo json_decode(file_get_contents('text/home.json'))->puppyMills->content->$lang->p2; ?>
                    <br><br>
                    <?php echo json_decode(file_get_contents('text/home.json'))->puppyMills->content->$lang->p3; ?>
                    <br><br>
                    <?php echo json_decode(file_get_contents('text/home.json'))->puppyMills->content->$lang->p4; ?>
                    <br><br>
                    <?php echo json_decode(file_get_contents('text/home.json'))->puppyMills->content->$lang->p5; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="separator background2">
        <header class="align-center common-header">
            <p class="special bigger light"><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s1->$lang; ?></p>
            <h2 class="light" style="margin-bottom: 0">Street Souls</h2>
        </header>
    </div>
    <div class="padding2rem white">
        <div class="padding2rem  flex-grid">
            <div class="flex">
                <header>
                    <h2><?php echo json_decode(file_get_contents('text/home.json'))->overBreeding->title->$lang; ?></h2>
                    <p><?php echo json_decode(file_get_contents('text/home.json'))->overBreeding->subtitle->$lang; ?></p>
                </header>
                <p class="justify"><span class="image left"><img src="/images/design/mops.jpg" alt="a mops"></span>
                    <?php echo json_decode(file_get_contents('text/home.json'))->overBreeding->content->$lang->p1; ?>
                    <br><br>
                    <?php echo json_decode(file_get_contents('text/home.json'))->puppyMills->content->$lang->p2; ?>
                    <br><br>
                </p>
            </div>
        </div>
    </div>

</section>

<!-- Footer -->
<?php include 'templates/footer.php'; ?>

<!-- Scripts -->
<script src="/assets/js/jquery.min-home.js"></script>
<script src="/assets/js/skel.min.js"></script>
<script src="/assets/js/merged.min.js"></script>
<script>
    $(document).ready(function () {
        var navHeight;
        var element_position;
        $(document).scroll(function () {
            navHeight = $('.navigation-header').height();
            // console.log("scroll");
            var y_scroll_pos = window.pageYOffset;
            element_position = $('#scroll-to').offset().top - navHeight;
            var scroll_pos_test = element_position;

            if (y_scroll_pos > scroll_pos_test) {
                $(".navigation-header").removeClass('transparent-navigation-header');
            } else {
                $(".navigation-header").addClass('transparent-navigation-header');
            }
        });
        $(window).resize(function () {
            // console.log('resize')
            navHeight = $('.navigation-header').height();
            var y_scroll_pos = window.pageYOffset;
            element_position = $('#scroll-to').offset().top - navHeight;
            var scroll_pos_test = element_position;

            if (y_scroll_pos > scroll_pos_test) {
                $(".navigation-header").removeClass('transparent-navigation-header');
            } else {
                $(".navigation-header").addClass('transparent-navigation-header');
            }
        });
    });
</script>
</body>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
</html>