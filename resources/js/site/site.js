window.$ = window.jQuery = require("jquery");
require("./bootstrap");
require('./bootstrap.bundle.min');
require("lightbox2/dist/js/lightbox.js");

$(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
        $('.sticky-top').css('top', '0px');
    } else {
        $('.sticky-top').css('top', '-100px');
    }
});
