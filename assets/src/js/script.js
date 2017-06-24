(function($, window) {
    "use strict";

    const ndd = {
        scrollToSection: {
            test() {
                return true;
            },
            run() {
                const triggers = $(".main-nav__link");

                triggers.on("click", function(e) {
                    e.preventDefault();
                    let target = $(this).attr("href"),
                        targetOffset = $(target).offset().top;

                    $("html, body").animate({scrollTop: targetOffset});
                });
            }
        },
        spaceFooter: {
            test() {
                return true;
            },
            run() {
                ndd.spaceFooter.makeSpace();
                $(window).on("resize", function() {
                    ndd.spaceFooter.makeSpace();
                });
            },
            makeSpace() {
                let footerHt = $("footer").height();

                $("#contact").height(footerHt);
            }
        },
        fadeInGrid: {
            test() {
                return true;
            },
            run() {
                const $window = $(window),
                      $document = $(document),
                      workOffset = $("#work").offset().top,
                      aboutOffset = $("#about").offset().top;
                $window.on("scroll", function() {
                    let scrollPos = $document.scrollTop();

                    if (scrollPos >= workOffset && !$(".portfolio__grid").hasClass("shown")) {
                        $(".portfolio__grid").addClass("shown");
                    }
                    if (scrollPos >= aboutOffset && !$(".background__image").hasClass("shown")) {
                        $(".background__image").addClass("shown");
                    }
                });
            }
        }
    };

    for (let key in ndd) {
        if (ndd[key].test()) {
            ndd[key].run();
        }
    }
}(jQuery, window));
