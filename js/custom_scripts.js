function toggleTopNav() {
    jQuery("#top-nav").toggleClass("collapsed");
}

function hideTopNav() {
    jQuery("#top-nav").addClass("collapsed");
}

jQuery(document).ready(function () {
    (function ($) {
        const topNav = $("#top-nav");
        const pageContent = $(".content");

        topNav.click(function () {
            toggleTopNav();
        });

        pageContent.click(function () {
            hideTopNav();
        });
        

    })(jQuery);
});
