const bubbleMap = {
    "doulas-impact": ".doula-bubble.doulas-impact",
    "doulas-dont": ".doula-bubble.doulas-dont",
    "doulas-do": ".doula-bubble.doulas-do",
};

function toggleNav(selector) {
    jQuery(selector).toggleClass("collapsed");
}

function hideNav(selector) {
    jQuery(selector).addClass("collapsed");
}

function toggleContent(selector) {
    console.log('showing!');
    console.log(selector);
    jQuery(selector).toggleClass("show");
}

jQuery(document).ready(function () {
    (function ($) {
        const topNav = $(".top-nav");
        const pageContent = $(".content");

        const doulaNav = $(".menu-doula-services-container");
        const doulaContent = $(".services-content");
        const doulaImpact = $(bubbleMap["doulas-impact"]);
        const doulaDont = $(bubbleMap["doulas-dont"]);
        const doulaDo = $(bubbleMap["doulas-do"]);

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

        doulaImpact.click(function () {
            toggleContent(`${bubbleMap["doulas-impact"]}`);
        });

        doulaDont.click(function () {
            toggleContent(`${bubbleMap["doulas-dont"]}`);
        });

        doulaDo.click(function () {
            toggleContent(`${bubbleMap["doulas-do"]}`);
        });

    })(jQuery);
});
