function toggleTopNav() {
    jQuery("#top-nav").toggleClass("expanded");
}

function hideTopNav() {
    jQuery("#top-nav").removeClass("expanded");
}

jQuery(document).ready(function () {
    jQuery("#top-nav").click(function () {
        toggleTopNav();
    });

    jQuery(".content").click(function () {
        hideTopNav();
    });


});
