
$(document).ready(function () {
    $(".mobile-nav-icon").click(function () {
        $(".main-nav-bg").addClass("left-zero");
    });
    $(".nav-close-icon").click(function () {
        $(".main-nav-bg").removeClass("left-zero");
    });
    $(".mob-search-icon").click(function () {
        $(".mobile-nav").toggleClass("w-100");
    });

    // $(".product-card").hover(
    //     function () {
    //         $(".price-card").addClass("d-none");
    //         $(".icons").removeClass("d-none");
    //     },
    //     function () {
    //         $(".price-card").removeClass("d-none");
    //         $(".icons").addClass("d-none");
    //     }
    // );

    $(".product-card-group").on("mouseenter", ".product-card", function () {
        $(this).find(".price-card").addClass("d-none");
        $(this).find(".icons").removeClass("d-none");
    }).on("mouseleave", ".product-card", function () {
        $(this).find(".price-card").removeClass("d-none");
        $(this).find(".icons").addClass("d-none");
    });


});

$('.banner-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});


$('.brand-carousel').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
});



$('.category-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 4
        },
        1000: {
            items: 8
        }
    }
});

$('.deals-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 3
        }
    }
});


$('.product-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        996: {
            items: 3
        },
        1300: {
            items: 3
        },
        1440: {
            items: 4
        },
        1500: {
            items: 4
        }
    }
});


$(document).ready(function () {
    const minus = $('.quantity__minus');
    const plus = $('.quantity__plus');
    const input = $('.quantity__input');
    minus.click(function (e) {
        e.preventDefault();
        var value = input.val();
        if (value > 1) {
            value--;
        }
        input.val(value);
    });

    plus.click(function (e) {
        e.preventDefault();
        var value = input.val();
        value++;
        input.val(value);
    })
});