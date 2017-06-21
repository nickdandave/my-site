"use strict";

(function ($, window) {
    "use strict";

    var ndd = {
        scrollToSection: {
            test: function test() {
                return true;
            },
            run: function run() {
                var triggers = $(".main-nav__link");

                triggers.on("click", function (e) {
                    e.preventDefault();
                    var target = $(this).attr("href"),
                        targetOffset = $(target).offset().top;

                    $("html, body").animate({ scrollTop: targetOffset });
                });
            }
        }
    };

    for (var key in ndd) {
        if (ndd[key].test()) {
            ndd[key].run();
        }
    }
})(jQuery, window);