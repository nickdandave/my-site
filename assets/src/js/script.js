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
        }
    };

    for (let key in ndd) {
        if (ndd[key].test()) {
            ndd[key].run();
        }
    }
}(jQuery, window));
