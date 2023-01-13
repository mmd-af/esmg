window.$ = window.jQuery = require("jquery");
require("./bootstrap");
require('./bootstrap.bundle.min');

$(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
        $('.sticky-top').css('top', '0px');
    } else {
        $('.sticky-top').css('top', '-100px');
    }
});
