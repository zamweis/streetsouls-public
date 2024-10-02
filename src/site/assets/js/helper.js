function changeLanguage($language) {
    var pathname = window.location.pathname;
    var newpath = null;
    //console.log("checking string: '"+pathname.substring(0, 4)+"'");
    /* Check if language is already specified in url */
    if("/lb/".localeCompare(pathname.substring(0, 4)) == 0 || "/en/".localeCompare(pathname.substring(0, 4)) == 0 || "/de/".localeCompare(pathname.substring(0, 4)) == 0 || "/fr/".localeCompare(pathname.substring(0, 4)) == 0){
        //console.log("language in url found");
        newpath = "https://www.streetsouls.lu/" + $language + pathname.substring(3);
    } else{
        //console.log("no language in url found");
        newpath = "https://www.streetsouls.lu/" + $language + pathname;
    }
    //console.log("new path is: " + newpath);
    window.location.assign(newpath);
}

function showAnimal($dog_id, $dog_name) {
    $.ajax({
        type: 'POST',
        url: "animal",
        data: {dog_id: $dog_id, dog_name: $dog_name},
        success: function (response) {
            window.location = 'animal';
        },
        async: false
    });
}

// mark current page as active in the navigation bar/menu
$(document).ready(function () {
    var pageName = location.pathname.split('/').slice(-1)[0];
    if (pageName === '') {
        pageName = 'home';
    }
    // console.log(pageName);
    $('.' + pageName).addClass('active');
});

// prevent background stuttering in IE
if (navigator.userAgent.match(/Trident\/7\./)) { // if IE
    $('body').on("mousewheel", function () {
        // remove default behavior
        event.preventDefault();

        //scroll without smoothing
        var wheelDelta = event.wheelDelta;
        var currentScrollPosition = window.pageYOffset;
        window.scrollTo(0, currentScrollPosition - wheelDelta);
    });
}