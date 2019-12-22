function toggleNav(selector) {
    jQuery(selector).toggleClass("collapsed");
}

function hideNav(selector) {
    jQuery(selector).addClass("collapsed");
}

jQuery(document).ready(function () {
    console.log('here');
    (function ($) {
        const topNav = $(".top-nav");
        const pageContent = $(".content");
        const doulaNav = $(".menu-doula-services-container");
        const doulaContent = $(".services-content");

        topNav.click(function () {
            toggleNav(".top-nav");
        });

        pageContent.click(function () {
            hideNav(".top-nav");
        });

        doulaContent.click(function () {
            hideNav(".menu-doula-services-container");
        });

        doulaNav.click(function () {
            toggleNav(".menu-doula-services-container");
        });

    })(jQuery);
});
