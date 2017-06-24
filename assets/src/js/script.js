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
        }
    };

    for (let key in ndd) {
        if (ndd[key].test()) {
            ndd[key].run();
        }
    }
}(jQuery, window));
