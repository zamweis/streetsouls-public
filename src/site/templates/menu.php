<nav id="menu">
    <ul class="links">
        <li><a class="home"
               href="home"><?php echo json_decode(file_get_contents('text/navigation.json'))->home->$lang; ?></a>
        </li>
        <li><a class="about"
               href="about"><?php echo json_decode(file_get_contents('text/navigation.json'))->about->$lang; ?></a>
        </li>
<!--
            <li>
            <a class="gallery"
               href="gallery"><?php /* echo json_decode(file_get_contents('text/navigation.json'))->gallery->$lang; */ ?></a>
        </li>
-->
        <li>
            <a class="contact"
               href="contact"><?php echo json_decode(file_get_contents('text/navigation.json'))->contact->$lang; ?></a>
        </li>
        <li class="languages"><a><?php echo json_decode(file_get_contents('text/navigation.json'))->languages->$lang; ?></a></li>
        <li class="languages">
            <div>
                <a href="javascript:changeLanguage('lb')"><img src="/images/icons/lu.png" alt="letzeboieg"/></a>
                <a href="javascript:changeLanguage('en')"><img src="/images/icons/en.png" alt="english"/></a>
                <a href="javascript:changeLanguage('fr')"><img src="/images/icons/fr.png" alt="francais"/></a>
                <a href="javascript:changeLanguage('de')"><img src="/images/icons/de.png" alt="deutsch"/></a>
            </div>
        </li>
    </ul>
    <a href="#menu" class="close">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="20px">
            <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
        </svg>
    </a>
</nav>