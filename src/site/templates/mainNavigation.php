<nav id="nav">
    <ul>
        <li><a class="home"
               href="home"><?php echo json_decode(file_get_contents('text/navigation.json'))->home->$lang; ?></a></li>
        <li><a class="about"
               href="about"><?php echo json_decode(file_get_contents('text/navigation.json'))->about->$lang; ?></a></li>
<!--
       <li><a class="gallery"
               href="gallery"><?php /*echo json_decode(file_get_contents('text/navigation.json'))->gallery->$lang; */?></a>
       </li>
-->

        <li><a class="contact"
               href="contact"><?php echo json_decode(file_get_contents('text/navigation.json'))->contact->$lang; ?></a>
        </li>
    </ul>
</nav>