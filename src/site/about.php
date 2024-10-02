<?php
include 'templates/setcookies.php';
?>
<!DOCTYPE HTML>

<html lang="<?php echo $_SESSION["lang"] ?>">

<head>
    <title>Street Souls - <?php echo json_decode(file_get_contents('text/navigation.json'))->about->$lang; ?></title>
    <!-- meta information -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="<?php echo json_decode(file_get_contents('text/headlines.json'))->description->about->$lang; ?>"/>
    <link rel="alternate" hreflang="fr" href="https://www.streetsouls.lu/fr/about"/>
    <link rel="alternate" hreflang="de" href="https://www.streetsouls.lu/de/about"/>
    <link rel="alternate" hreflang="en" href="https://www.streetsouls.lu/en/about"/>
    <link rel="alternate" hreflang="lb" href="https://www.streetsouls.lu/lb/about"/>

    <!-- default links -->
    <link rel="stylesheet" href="/assets/css/main.css"/>
    <link rel="stylesheet" href="/assets/css/about.css"/>
    <link rel="stylesheet" href="/assets/css/cookieconsent.min.css"/>


    <!-- page icon -->
    <link rel="shortcut icon" href="/images/icons/favicon.ico" type="image/x-icon">

</head>

<body>

<!-- Header -->
<?php include 'templates/header-white.php'; ?>
<h1 style="display:none;">Street Souls - <?php echo json_decode(file_get_contents('text/home.json'))->companion->subtitle->$lang;?></h1>

<!-- Content -->
<section class="wrapper grey-style">

    <!-- Language Selection -->
    <?php include 'templates/languageDiv.php'; ?>

    <div class="separator2">
        <header class="align-center common-header">
            <img src="/images/design/logo.png" alt="streetsouls logo">
            <p class="special bigger"><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s5->$lang; ?></p>
        </header>
    </div>
    <div class="padding2rem white">
        <div  class="padding2rem centersixty">
            <header>
                <h2><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s4->$lang; ?></h2>
                <p><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s3->$lang; ?></p>
            </header>
            <div>
                <p class="justify"><?php echo json_decode(file_get_contents('text/about.json'))->about->summary->$lang->p1; ?>
                </p>
                <p class="justify"><?php echo json_decode(file_get_contents('text/about.json'))->about->summary->$lang->p2; ?>
                </p>
            </div>
        </div>
    </div>

    <div class="separator background2">
        <header class="align-center common-header">
            <p class="special light"><?php echo json_decode(file_get_contents('text/headlines.json'))->slogan->s1->$lang; ?></p>
            <h2 class="light">Street Souls</h2>
        </header>
    </div>
    <div class="padding2rem white">
        <header class="padding2rem">
            <h2><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->title->$lang; ?></h2>
            <p><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->subtitle->$lang; ?></p>
        </header>
        <div class="feature-grid padding2rem">
            <div class="feature">
                <div class="image rounded"><img src="/images/team/nath.jpg" alt="team member"/></div>
                <div class="content">
                    <header>
                        <h4><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->Nath->title->$lang; ?></h4>
                        <p><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->Nath->subtitle->$lang; ?></p>
                    </header>
                    <p class="justify"><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->Nath->content->$lang; ?></p>
                </div>
            </div>
            <div class="feature">
                <div class="image rounded"><img src="/images/team/isa.jpg" alt="team member"/></div>
                <div class="content">
                    <header>
                        <h4><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->Isa->title->$lang; ?></h4>
                        <p><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->Isa->subtitle->$lang; ?></p>
                    </header>
                    <p class="justify"><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->Isa->content->$lang; ?></p>
                </div>
            </div>
            <div class="feature">
                <div class="image rounded"><img src="/images/team/gwendy.jpg" alt="team member"/></div>
                <div class="content">
                    <header>
                        <h4><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->Gwendy->title->$lang; ?></h4>
                        <p><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->Gwendy->subtitle->$lang; ?></p>
                    </header>
                    <p class="justify"><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->Gwendy->content->$lang; ?></p>
                </div>
            </div>
            <div class="feature">
                <div class="image rounded"><img src="/images/team/dirk.jpg" alt="team member"/></div>
                <div class="content">
                    <header>
                        <h4><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->Dirk->title->$lang; ?></h4>
                        <p><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->Dirk->subtitle->$lang; ?></p>
                    </header>
                    <p class="justify"><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->Dirk->content->$lang; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- ANIMA PRO TERRA -->
    <div class="separator background2">
        <header class="align-center common-header">
            <p class="special light"><?php echo json_decode(file_get_contents('text/about.json'))->animaProTerra->subtitle->$lang; ?></p>
            <h2 class="light">ANIMA PRO TERRA</h2>
        </header>
    </div>
    <div class="padding2rem white flex-grid">
        <div class="flex padding2rem">
            <header>
                <h2>Anima Pro Terra</h2>
                <p><?php echo json_decode(file_get_contents('text/about.json'))->ourTeam->subtitle->$lang; ?></p>
            </header>
            <div class="flex">
                <div class="image fit">
                    <img src="/images/team/teamRumaenien.jpg" alt="team in romania"/>
                </div>
                <div class="flex">
                    <p  class="justify"><?php echo json_decode(file_get_contents('text/about.json'))->animaProTerra->description->$lang; ?></p>
                    <div id="hidden-when-small">
                        <header>
                            <h2><?php echo json_decode(file_get_contents('text/about.json'))->animaProTerra->summary->title->$lang; ?></h2>
                        </header>
                        <ul style="margin-right: 1rem;" class="padding2rem">
                            <li class="list-marker"><?php echo json_decode(file_get_contents('text/about.json'))->animaProTerra->summary->list->$lang->p1; ?></li>
                            <li class="list-marker"><?php echo json_decode(file_get_contents('text/about.json'))->animaProTerra->summary->list->$lang->p2; ?></li>
                            <li class="list-marker"><?php echo json_decode(file_get_contents('text/about.json'))->animaProTerra->summary->list->$lang->p3; ?></li>
                        </ul>
                    </div>
                </div>
                <div id="hidden-when-big">
                    <header>
                        <h2><?php echo json_decode(file_get_contents('text/about.json'))->animaProTerra->summary->title->$lang; ?></h2>
                    </header>
                    <ul class="padding2rem">
                        <li class="list-marker"><?php echo json_decode(file_get_contents('text/about.json'))->animaProTerra->summary->list->$lang->p1; ?></li>
                        <li class="list-marker"><?php echo json_decode(file_get_contents('text/about.json'))->animaProTerra->summary->list->$lang->p2; ?></li>
                        <li class="list-marker"><?php echo json_decode(file_get_contents('text/about.json'))->animaProTerra->summary->list->$lang->p3; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="goto">
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'templates/footer.php'; ?>

<!-- Scripts -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/skel.min.js"></script>
<script src="/assets/js/merged.min.js"></script>
</body>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
</html>