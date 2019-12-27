const bubbleMap = {
    "doulas-impact": ".doula-bubble.doulas-impact",
    "doulas-dont": ".doula-bubble.doulas-dont",
    "doulas-do": ".doula-bubble.doulas-do",
};

const serviceMap = {
    "prepare-for-postpartum-care": ".prepare-for-postpartum-care",
    "breastfeeding-support": ".breastfeeding-support",
    "back-up-doula": ".back-up-doula",
    "holding-space": ".holding-space",
    "advocacy": ".advocacy",
    "informed-choices": ".informed-choices",
    "affirmation": ".affirmation",
    "doula-tools": ".doula-tools",
    "family-and-partner-support": ".family-and-partner-support",
    "labor-positions": ".labor-positions",
    "comfort-measures": ".comfort-measures",
    "continuous-support": ".continuous-support",
    "empowerment": ".empowerment",
    "planning-for-self-care": ".planning-for-self-care",
    "back-to-work-planning": ".back-to-work-planning",
    "partner-support": ".partner-support",
    "yoga-postures": ".yoga-postures",
    "nutritional-support": ".nutritional-support",
    "goal-setting": ".goal-setting",
    "community-referrals": ".community-referrals",
    "provider-support": ".provider-support",
    "financial-planning-support": ".financial-planning-support",
};

function toggleNav(selector) {
    jQuery(selector).toggleClass("collapsed");
}

function hideNav(selector) {
    jQuery(selector).addClass("collapsed");
}

function toggleContent(selector) {
    jQuery(selector).toggleClass("show");
}

jQuery(document).ready(function () {
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

        const bubbles = Object.keys(bubbleMap);
        bubbles.forEach(function(bubble) {
            const bubbleSelector = $(bubbleMap[bubble]);

            bubbleSelector.click(function () {
                toggleContent(`${bubbleMap[bubble]}`);
            })
        });

        const services = Object.keys(serviceMap);
        services.forEach(function(service) {
            const serviceSelector = $(serviceMap[service]);

            serviceSelector.click(function () {
                toggleContent(`${serviceMap[service]}`);
            })
        });

    })(jQuery);
});
