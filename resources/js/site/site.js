window.$ = window.jQuery = require("jquery");
require("./bootstrap");
require('./bootstrap.bundle.min');
window.anime = require('animejs/lib/anime.min');
require('./chat');
window.Swal = require('sweetalert2');
$(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
        $('.sticky-top').css('top', '0px');
    } else {
        $('.sticky-top').css('top', '-100px');
    }
});

window.WOW = require('wow.js');
new WOW().init();
