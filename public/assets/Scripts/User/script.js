$('.testimonials').owlCarousel({
    nav: false,
    margin: 10,
    autoplay: true,
    loop: true,
    autoplayTimeout: 50000000,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        320: {
            items: 1
        },
        540: {
            items: 2
        },
        1024: {
            items: 2,
            margin: 15
        },
        1600: {
            items: 2
        },

    }
});

$('.award').owlCarousel({
    nav: false,
    margin: 15,
    autoplay: true,
    loop: true,
    autoplayTimeout: 5000,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    dots: true,
    responsive: {
        0: {
            items: 2
        },
        640: {
            items: 3
        },
        992: {
            items: 4
        },
        1244: {
            items: 5
        },

    }
});


$('.live1').owlCarousel({
    nav: false,
    margin: 10,
    autoplay: true,
    loop: true,
    autoplayTimeout: 5000,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    dots: false,
    responsive: {
        0: {
            items: 2
        },
        640: {
            items: 3
        },
        992: {
            items: 5
        },
        1244: {
            items: 7
        },

    }
});


// light gallery code
$(document).ready(function() {
    $('#lightgallery').lightGallery();
});




// HOVER TABS CODE
jQuery(document).ready(function($) {
    $('#pills-tab[data-mouse="hover"] a').hover(function() {
        $(this).tab('show');
    });
    $('a[data-toggle="pill"]').on('shown.bs.tab', function(e) {
        var target = $(e.relatedTarget).attr('href');
        $(target).removeClass('active');
    })
});



// reg-step-one
$(document).ready(function() {
    $('.rad').click(function() {
        $('.rad').removeClass("active");
        $(this).addClass("active");
    });
});
// reg-step-threee
$(document).ready(function() {
    $('.course-q').click(function() {
        $('.course-q').removeClass("active");
        $(this).addClass("active");
    });
});


// sidepabr active
$(document).ready(function() {
    $('.sidebar-head').click(function() {
        $('.sidebar-head').removeClass("active");
        $(this).addClass("active");
    });
});

// vertical star
$(document).ready(function() {
    $('.vertical-sec .fa-star').click(function() {
        $('.vertical-sec .fa-star').removeClass("active");
        $(this).addClass("active");
    });
});

// Live chat in footer sec

$(document).ready(function() {
    $('#chat-live').fadeOut(0);
    $('#main-queries-body').fadeOut();
    $('#footer-chat-sec').click(function() {
        $('#chat-live').fadeIn('slow');
    });
    $('#footer-chat-colse').click(function() {
        $('#chat-live').fadeOut('slow');
    });
    $('#main-queries').click(function() {
        $('#main-queries-body').fadeIn('slow');
        $('.main-query-hide').fadeOut();
    });
});

// Sticky Navbar
$(window).scroll(function() {
    if ($(this).scrollTop() > 45) {
        $('.main-header').addClass('extraclass');
    } else {
        $('.main-header').removeClass('extraclass');
    }
});



// range bar 

const rangeInput = document.querySelectorAll(".range-input input"),
    priceInput = document.querySelectorAll(".price-input input"),
    range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
    input.addEventListener("input", (e) => {
        let minPrice = parseInt(priceInput[0].value),
            maxPrice = parseInt(priceInput[1].value);

        if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
            if (e.target.className === "input-min") {
                rangeInput[0].value = minPrice;
                range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
            } else {
                rangeInput[1].value = maxPrice;
                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
            }
        }
    });
});

rangeInput.forEach((input) => {
    input.addEventListener("input", (e) => {
        let minVal = parseInt(rangeInput[0].value),
            maxVal = parseInt(rangeInput[1].value);

        if (maxVal - minVal < priceGap) {
            if (e.target.className === "range-min") {
                rangeInput[0].value = maxVal - priceGap;
            } else {
                rangeInput[1].value = minVal + priceGap;
            }
        } else {
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
        }
    });
});




// LAKSHMI CODE



// COUNT DOWN CODE

//https://stackoverflow.com/questions/23006516/jquery-animated-number-counter-from-zero-to-value
$(function() {
    ////////////////////////////////variables//constant variables

    var winHeight = $(window).height(),
        eleOffsetTop = $(".counter").offset().top,
        eleTop = eleOffsetTop - winHeight,
        current = 0;

    $(window).on("scroll", function() {
        var scrollTop = $(window).scrollTop();

        if (current == 0 && scrollTop >= eleTop) {


            $('.counter div').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');

                $({
                    countNum: $this.text()
                }).animate({
                        countNum: countTo
                    },

                    {

                        duration: 2000,
                        easing: 'linear',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');

                            //this inside the step callback isn't the element but the object passed to animate
                        }

                    });



            });


        }

    });
});



// DESKTOP MENU DROPDOWN CODE

$(document).ready(function() {
    $(".drop2").click(function() {
        $(".rsp-drop").toggle();
    });
});


// RESPONSIVE MENU DROPDOWN CODE

(function() {
    $(function() {
        $('.dropend').on('click', function(e) {
            var submenu;
            submenu = $(this);
            $('.dropend .dropdown-menu').removeClass('show');
            submenu.next('.dropdown-menu').toggle();
            e.stopPropagation();
        });
        return $('.dropdown').on('hidden.bs.dropdown', function() {
            // hide any open menus when parent closes
            $('.dropdown-menu.show').removeClass('show');
        });
    });

}).call(this);

//////////
$(document).ready(function() {
    // Toggle main responsive dropdown
    $(".rsp-toggle").on("click", function(e) {
        e.stopPropagation();
        var $menu = $(this).siblings(".dropdown-menu");

        // Close other open dropdowns
        $(".dropdown-menu").not($menu).removeClass("open");

        // Toggle current dropdown
        $menu.toggleClass("open");
    });

    // Toggle submenus inside responsive menu
    $(".subdrp").on("click", function(e) {
        e.stopPropagation();
        var $submenu = $(this).next(".dropend-menu");

        // Close other open submenus at same level
        $(this).parent().find(".dropend-menu").not($submenu).removeClass("open");

        // Toggle current submenu
        $submenu.toggleClass("open");
    });

    // Prevent bubbling inside menus
    $(".dropdown-menu, .dropend-menu").on("click", function(e) {
        e.stopPropagation();
    });

    // Close all menus when clicking outside
    $(document).on("click", function() {
        $(".dropdown-menu, .dropend-menu").removeClass("open");
    });
});