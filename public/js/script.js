

jQuery(document).ready(function ($) {
    'use strict';



    $(document).ready(function () {
        $("#subscribe").modal('show');
    });

    var $lateral_menu_trigger = $("#cd-menu-trigger"),
        $content_wrapper = $(".cd-main-content"),
        $navigation = $("header");

    //open-close lateral menu clicking on the menu icon
    $lateral_menu_trigger.on("click", function (event) {
        event.preventDefault();

        $lateral_menu_trigger.toggleClass("is-clicked");
        $navigation.toggleClass("lateral-menu-is-open");
        $content_wrapper
            .toggleClass("lateral-menu-is-open")
            .one(
                "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
                function () {
                    // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
                    $("body").toggleClass("overflow-hidden");
                }
            );
        $("#cd-lateral-nav").toggleClass("lateral-menu-is-open");

        //check if transitions are not supported - i.e. in IE9
        if ($("html").hasClass("no-csstransitions")) {
            $("body").toggleClass("overflow-hidden");
        }
    });


    //close lateral menu clicking outside the menu itself
    $content_wrapper.on("click", function (event) {
        if (!$(event.target).is("#cd-menu-trigger, #cd-menu-trigger span")) {
            $lateral_menu_trigger.removeClass("is-clicked");
            $navigation.removeClass("lateral-menu-is-open");
            $content_wrapper
                .removeClass("lateral-menu-is-open")
                .one(
                    "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
                    function () {
                        $("body").removeClass("overflow-hidden");
                    }
                );
            $("#cd-lateral-nav").removeClass("lateral-menu-is-open");
            //check if transitions are not supported
            if ($("html").hasClass("no-csstransitions")) {
                $("body").removeClass("overflow-hidden");
            }
        }
    });

    //open (or close) submenu items in the lateral menu. Close all the other open submenu items.
    $(".item-has-children")
        .children("a")
        .on("click", function (event) {
            event.preventDefault();
            $(this)
                .toggleClass("submenu-open")
                .next(".sub-menu")
                .slideToggle(200)
                .end()
                .parent(".item-has-children")
                .siblings(".item-has-children")
                .children("a")
                .removeClass("submenu-open")
                .next(".sub-menu")
                .slideUp(200);
        });
});
// tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

const toTop = document.querySelector(".toTop");
toTop.addEventListener("click", () => {
    window.scrollTo(0, 0);
});
window.addEventListener("scroll", () => {
    if (pageYOffset > 100) {
        toTop.classList.add("top_active");
    } else {
        toTop.classList.remove("top_active");
    }
});

// window.addEventListener("load", (event) => {
//   location.href = "#home";
// });

//Change navigation style on scroll
window.addEventListener("scroll", (event) => {
    let nav = document.querySelector(".header");

    window.scrollY >= 50
        ? nav.classList.add("nav-scroll")
        : nav.classList.remove("nav-scroll");
});

const home_profile_container = document.querySelectorAll(
    ".home-profile-container"
);

observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            setBlur();
        } else {
            unSetBlur();
        }
    });
});

home_profile_container.forEach((home_profile_container) => {
    observer.observe(home_profile_container);
});

function setBlur() {
    var blur_bg = document.querySelectorAll(".blur-bg");
    blur_bg.forEach((blur_bg) => {
        blur_bg.classList.add("blur");
    });
}

function unSetBlur() {
    var blur_bg = document.querySelectorAll(".blur-bg");
    blur_bg.forEach((blur_bg) => {
        blur_bg.classList.remove("blur");
    });
}

$(document).ready(
    $(function () {
        $(".accordion > .accordion-item.is-active")
            .children(".accordion-panel")
            .slideDown();

        $(".accordion > .accordion-item").click(function () {
            // Cancel the siblings
            $(this)
                .siblings(".accordion-item")
                .removeClass("is-active")
                .children(".accordion-panel")
                .slideUp();
            // Toggle the item
            $(this)
                .toggleClass("is-active")
                .children(".accordion-panel")
                .slideToggle("ease-out");
        });
    })
);

// loader
window.addEventListener("load", function () {
    document.querySelector("body").classList.add("loaded");
});

// Hero section

// Get a reference to the video element
const video = document.getElementById('background-video');

// Options for the Intersection Observer
const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5, // Adjust as needed
};

// Create an Intersection Observer instance
const observer = new IntersectionObserver(handleIntersection, options);

// Callback function to handle intersection changes
function handleIntersection(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Video is in the viewport, so play it
            video.play();
        } else {
            // Video is not in the viewport, so pause it
            video.pause();
        }
    });
}

// Start observing the hero section
const heroSection = document.querySelector('.hero-container');
if (heroSection) {
    observer.observe(heroSection);
}
