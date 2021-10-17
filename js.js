/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', 'assets/particles.json', function () {
});

$(document).ready(function () {
    const menuIcon = document.querySelector(".hamburger-menu");
    const navbar = document.querySelector(".nav");
    const menuItems = document.querySelector("header .top-menu-container");
    let subMenu = document.querySelectorAll(".sub-menu");

    //fix default link on language-banner.
    $(".wpml-ls-current-language > a").removeAttr("href");

    /*
    jQuery(window).resize(function () {
        if (jQuery(window).width() >= 665) {
            if (jQuery('header .top-menu-container').css("display") == 'none') {
                jQuery('header .top-menu-container').fadeIn();
                navbar.classList.add("change");
            }
        }
    });
*/
    $('.hamburger-menu').on('click', function (e) {
        if ($('header .top-menu-container').css("display") == 'none') {
            $('header .top-menu-container').fadeIn();
            navbar.classList.add("change");
            $('.nav').addClass('navactive');
            $('.line').addClass('lineactive');
        } else if ($('header .top-menu-container').css("display") == 'block') {
            $('header .top-menu-container').fadeOut();
            navbar.classList.remove("change");
            if ($(window).scrollTop() == 0) {
                $('.nav').removeClass('navactive');
            }
            $('.line').removeClass('lineactive');
        }
    })
    ;

// open submenu on mobile device menu.
    $('.menu-item-has-children:not(.wpml-ls-current-language)').on('click', function (e) {

        if ($(window).width() < 1000) {
            //   if (!jQuery(event.target).is('#menu-item-948')) {
            if ($(e.currentTarget).children('ul').css("display") == 'none') {
                $(e.currentTarget).children('ul').slideDown();
            } else if (jQuery(e.currentTarget).children('ul').css("display") == 'block') {
                $(e.currentTarget).children('ul').slideUp();
            }
        }

    });

    $('.menu-item-has-children').on('click', function (e) {
        if ($(window).width() >= 1000) {
            if ($(e.currentTarget).children('ul').css("display") == 'none') {
                $(e.currentTarget).children('ul').slideDown();
            } else if ($(e.currentTarget).children('ul').css("display") == 'block') {
                $(e.currentTarget).children('ul').slideUp();
            }
        }
    });
    $('.menu-item-has-children').on('mouseover', function (e) {
        if ($(window).width() >= 1000) {
            setTimeout(function () {
                console.log("mouse over.")
                if ($(e.currentTarget).children('ul').css("display") == 'none') {
                    $(e.currentTarget).children('ul').slideDown();
                }
            }, 5)

        }
    });

    $('.menu-item-has-children').on('mouseleave', function (e) {
        console.log("mouse left.")
        if ($(window).width() >= 1000) {
            if ($(e.currentTarget).children('ul').css("display") == 'block') {
                $(e.currentTarget).children('ul').slideUp();
            }
        }
    });

    $('.sub-menu > li > a').on('click', function (e) {
        e.stopPropagation();
    });

})
;

$(window).on('load', function () { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({'overflow': 'visible'});
})

if(window.innerWidth >= 800) {
    $(window).scroll(function (event) {
        if ($(this).scrollTop() == 0) {
            $('.nav').removeClass('navactive');
            $('.logo').removeClass('logo-active');
            $('.line').removeClass('lineactive');
        } else if ($(this).scrollTop() > 10) {
            if (!$('.logo').hasClass("logo-active")) {
                $('.nav').addClass('navactive');
                $('.logo').addClass('logo-active');
                $('.line').addClass('lineactive');
            }
        }
    });
} else {
    $(window).scroll(function (event){
        if ($(this).scrollTop() == 0 && $('.top-menu-container').css('display') == 'none'){
            $('.nav').removeClass('navactive');
            $('.logo').removeClass('logo-active');
            $('.line').removeClass('lineactive');
        } else if ($(this).scrollTop() > 10) {
            if (!$('.logo').hasClass("logo-active")) {
                $('.nav').addClass('navactive');
                $('.logo').addClass('logo-active');
                $('.line').addClass('lineactive');
            }
        }
    });
}

function workTab(evt, workName) {
    // Declare all variables
    let i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("project");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    let elems = document.getElementsByClassName(workName);
    for (let i = 0; i < elems.length; i += 1) {
        elems[i].style.display = 'block';
    }
    evt.currentTarget.className += " active";
    AOS.refresh();
}

document.getElementById("defaultOpen").click();


if ($(window).width() <= 800) {
    const navbar = document.querySelector(".nav");
    const menuElement = document.querySelectorAll("#menu-main-menu > a")
    for (let i = 0; i < menuElement.length; i++) {
        menuElement[i].addEventListener('click', () => {
            navbar.classList.toggle("change");
            $('header .top-menu-container').fadeOut();
        });
    }
}
