<?php
include 'templates/setcookies.php';

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
$copy = filter_input(INPUT_POST, 'copy', FILTER_SANITIZE_STRING);
$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
$mailStatus = array();
//Check form
if (isset($_POST['messagesend'])) {
    #if (isset($_POST['name'], $_POST['email'], $_POST['category'], $_POST['message']) && !empty($_POST['name']) && !empty($_POST['message'])) {
    //Filter input
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($mailStatus, 'invalidEmail');
    }
    if ($_POST['category'] == 'NULL') {
        array_push($mailStatus, 'invalidSubject');
    }
    $to = 'info@streetsouls.lu';
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $response = filter_input(INPUT_POST, 'g-recaptcha-response', FILTER_SANITIZE_STRING);
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => [
                'response' => $response,
                'remoteip' => $_SERVER['REMOTE_ADDR']
            ],
            CURLOPT_RETURNTRANSFER => true
        ]);
        $output = curl_exec($ch);
        curl_close($ch);
        $json = json_decode($output);
        if ($json->success) {
            //Compile Email
            $subject = '[' . $category . '] vun ' . $name;
            $message_complete = 'Received Contact Mail from ' . $name . ' &lt;' . $email . '&gt; ' . 'on ' . date("d-m-Y H:i:s", time()) . '<br/><br/>' . $message;
            $headers = 'MIME-Version: 1.0' . "\r\n" .
                'Content-type: text/html; charset=utf-8' . "\r\n" .
                'From: ' . $email . "\r\n" .
                'Reply-To: ' . $email . "\r\n" .
                'X-Mailer: PHP/' . phpversion() . "\r\n";

            //Send Email and check for errors
            if (!mail($to, $subject, $message_complete, $headers)) {
                array_push($mailStatus, 'sendFailed');
            } else if (strcmp('copy', $copy) == 0) {
                array_push($mailStatus, 'success');
                //Sending successful sending email to Client if requested

                //Compile Copy Email
                $copy_subject = 'Copie vun ärer Email un d\' Street Souls asbl';

                $copy_message_complete = 'Villmools merci vier är Email. <br/> Mir wärten eis schnellst meiglech em är Ufroo kemmeren. <br/><br/> ' .
                    'Eng Copie vun ärer Ufroo vum ' . date("d-m-Y H:i:s", time()) . ':<br/>' . $message;

                $copy_headers = 'MIME-Version: 1.0' . "\r\n" .
                    'Content-type: text/html; charset=utf-8' . "\r\n" .
                    'From: info@streetsouls.lu' . "\r\n" .
                    'Reply-To: info@streetsouls.lu' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion() . "\r\n";

                //Send copy Email to the client
                if (!mail($email, $copy_subject, $copy_message_complete, $copy_headers)) {
                    array_push($mailStatus, 'sendCopyFailed');
                }
            }
        } else {
            // if recaptcha reported an error
            array_push($mailStatus, 'recaptchaInternal');
        }
    } else {
        // if recaptcha is not checked
        array_push($mailStatus, 'recaptchaUnchecked');
    }
}
?>
<!DOCTYPE HTML>
<html lang="<?php echo $_SESSION["lang"] ?>">

<head>
    <title>Street Souls - <?php echo json_decode(file_get_contents('text/navigation.json'))->contact->$lang; ?></title>

    <!-- meta information -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="<?php echo json_decode(file_get_contents('text/headlines.json'))->description->contact->$lang; ?>"/>
    <link rel="alternate" hreflang="fr" href="https://www.streetsouls.lu/fr/contact"/>
    <link rel="alternate" hreflang="de" href="https://www.streetsouls.lu/de/contact"/>
    <link rel="alternate" hreflang="en" href="https://www.streetsouls.lu/en/contact"/>
    <link rel="alternate" hreflang="lb" href="https://www.streetsouls.lu/lb/contact"/>

    <!-- default links -->
    <link rel="stylesheet" href="/assets/css/main.css"/>
    <link rel="stylesheet" href="/assets/css/contact.css"/>
    <link rel="stylesheet" href="/assets/css/cookieconsent.min.css"/>

    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
        }

        /* Optional: Makes the sample page fill the window. */
        html, body {
            margin: 0;
            padding: 0;
        }
    </style>
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
    <!-- Contacts -->

    <div class="contacts white padding2rem">

        <div class="contacts-flex left-contact" style="margin-bottom: 2rem; margin-top: 2rem">

            <div class="contact-text">
                <header>
                    <h4>Info Adoption</h4>
                    <p>Isabelle<br>+352 691 42 64 99</p>
                </header>
            </div>

            <div class="image fit rounded">
                <img src="/images/team/isa.jpg" alt="team member"/>
            </div>

        </div>
        <div class="contacts-flex right-contact" style="margin-bottom: 2rem; margin-top: 2rem">

            <div class="image fit rounded">
                <img src="/images/team/nath.jpg" alt="team member"/>
            </div>

            <div class="contact-text">
                <header>
                    <h4>Info Adoption</h4>
                    <p>Nathalie<br>+352 621 27 79 10</p>
                </header>
            </div>

        </div>
    </div>

    <!-- Error Codes -->
    <div class="separator background2">
        <header class="align-center common-header">
            <p class="special light"><?php echo json_decode(file_get_contents('text/contact.json'))->writeUs->$lang; ?></p>
            <h2 class="light">Mail & Tel.</h2>
        </header>
    </div>
    <!-- Form -->
    <div class="padding2rem white">
        <?php
        if (isset($_POST['messagesend'])) {
            if (empty($mailStatus)) {
                echo 'no status response<br>';
            } else {
                foreach ($mailStatus as $value) {
                    if ($value == 'success') {
                        echo '<p style="color:darkgreen">' . json_decode(file_get_contents('text/contact.json'))->mailStatus->$value->$lang . '</p>';
                    } else {
                        echo '<p style="color:#c70000">' . json_decode(file_get_contents('text/contact.json'))->mailStatus->$value->$lang . '</p>';
                    }
                }
            }
        }
        ?>
        <form id="form" class="flex-form padding2rem" method="post">
            <div class="flex">
                <!-- Name -->
                <input type="text" name="name" required="required" id="name"
                       oninvalid="this.setCustomValidity('<?php echo json_decode(file_get_contents('text/contact.json'))->error->fill->$lang ?>')"
                       onchange="this.setCustomValidity('')"
                       value="<?php echo $name ?>"
                       placeholder="<?php echo json_decode(file_get_contents('text/contact.json'))->table->name->$lang; ?>"/>
                <!-- Email -->
                <input type="email" name="email" id="email"
                       oninvalid="this.setCustomValidity('<?php echo json_decode(file_get_contents('text/contact.json'))->error->email->$lang ?>')"
                       onchange="this.setCustomValidity('')"
                       required="required"
                       value="<?php echo $email ?>"
                       placeholder="Email"/>
            </div>
            <div class="flex">
                <!-- Subject Selector -->
                <select name="category" id="category" required="required"
                        oninvalid="this.setCustomValidity('<?php echo json_decode(file_get_contents('text/contact.json'))->error->list->$lang ?>')"
                        onchange="this.setCustomValidity('')">
                    <option value=""><?php echo json_decode(file_get_contents('text/contact.json'))->form->subject->title->$lang; ?></option>
                    <option value="Info Animal" <?php if ($category == 'Info Animal') echo 'selected'; ?>><?php echo json_decode(file_get_contents('text/contact.json'))->form->subject->options->animal->$lang; ?></option>
                    <option value="Transport" <?php if ($category == 'Transport') echo 'selected'; ?>>
                        Transport
                    </option>
                    <option value="Adoption" <?php if ($category == 'Adoption') echo ' selected="selected"'; ?>>
                        Adoption
                    </option>
                    <option value="Bezuelen" <?php if ($category == 'Bezuelen') echo 'selected'; ?>><?php echo json_decode(file_get_contents('text/contact.json'))->form->subject->options->payment->$lang; ?></option>
                    <option value="Pätter" <?php if ($category == 'Pätter') echo 'selected'; ?>><?php echo json_decode(file_get_contents('text/contact.json'))->form->subject->options->foster->$lang; ?></option>
                    <option value="Aner" <?php if ($category == 'Aner') echo 'selected'; ?>><?php echo json_decode(file_get_contents('text/contact.json'))->form->subject->options->other->$lang; ?></option>
                </select>
            </div>
            <div class="flex">
                <!-- Messagearea -->
                <textarea name="message" id="message" required="required"
                          oninvalid="this.setCustomValidity('<?php echo json_decode(file_get_contents('text/contact.json'))->error->fill->$lang ?>')"
                          onchange="this.setCustomValidity('')"
                          placeholder="<?php echo json_decode(file_get_contents('text/contact.json'))->form->message->$lang; ?>"
                          rows="6"><?php echo $message ?></textarea>

                <!-- Send Copy -->
                <div>
                    <input type="checkbox" id="copy" name="copy"
                           value="copy" <?php if (strcmp('copy', $copy) == 0) {
                        echo 'checked';
                    } ?>>
                    <label for="copy"><?php echo json_decode(file_get_contents('text/contact.json'))->form->copy->$lang; ?></label>
                </div>
                <!-- Recaptcha -->
                <div class="g-recaptcha" data-sitekey=""></div>
            </div>
            <!-- Send & Reset -->
            <div class="flex">
                <input type="submit"
                       value="<?php echo json_decode(file_get_contents('text/contact.json'))->form->send->$lang; ?>"/>
                <input type="reset"
                       value="<?php echo json_decode(file_get_contents('text/contact.json'))->form->reset->$lang; ?>"
                       class="alt"/>
                <input type="hidden" value="messagesend" name="messagesend" class="alt"/>
            </div>
        </form>
    </div>
    <div class="separator background2">
        <!-- Address -->
        <header class="align-center common-header">
            <p class="special light"><?php echo json_decode(file_get_contents('text/contact.json'))->findus->$lang; ?></p>
            <h2 class="light">Google Maps</h2>
        </header>

    </div>

    <div class="padding2rem white">
        <header class="align-center common-header padding2rem">
            <p class="special ">L-3317 Bergem</p>
            <h2>9a Rue de la Forêt</h2>
        </header>
        <div id="map" class="shadow" style="height:40rem;"></div>
    </div>
</section>

<!-- Footer -->
<?php include 'templates/footer.php'; ?>

<!-- Scripts -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/skel.min.js"></script>
<script src="/assets/js/merged.min.js"></script>
<!-- Google Maps -->
<script>
    var marker;
    var map;
    var coordinates = {lat: 49.525388, lng: 6.041993}

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: coordinates
        });

        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: coordinates
        });
        marker.addListener('click', toggleBounce);
    }
    function toggleBounce() {
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key==initMap"
        async defer></script>
<!-- Recaptcha -->
<script src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang;?>" async defer></script>
<script>
    // scale recaptcha on resize and load
    // $(window).resize(function (evt) {
    //     if ($(window).width() < 335) {
    //         //console.log("width is: " + $(window).width())
    //         var width = $('.g-recaptcha').width();
    //         //console.log("recpatcha-width: " + width)
    //         const scale = width / 301;
    //         document.getElementsByClassName('g-recaptcha')[0].style.transform = 'scale(' + scale + ')';
    //         document.getElementsByClassName('g-recaptcha')[0].style.transformOrigin = '0 0';
    //     }
    // });
    // $(document).ready(function (evt) {
    //     if ($(window).width() < 335) {
    //         //console.log("width is: " + $(window).width())
    //         var width = $('.g-recaptcha').width();
    //         //console.log("recpatcha-width: " + width)
    //         const scale = width / 301;
    //         document.getElementsByClassName('g-recaptcha')[0].style.transform = 'scale(' + scale + ')';
    //         document.getElementsByClassName('g-recaptcha')[0].style.transformOrigin = '0 0';
    //     }
    // });

    // prevent confirmation on page refresh
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
</body>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
</html>