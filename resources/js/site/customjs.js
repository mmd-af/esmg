// let animation = () => {
//     anime({
//         targets: h1El,
//         opacity: 1,
//         rotate: {
//             value: 360,
//             duration: 2000,
//             easing: 'easeInExpo'
//         },
//         scale: anime.stagger([0.7, 1], {from: 'center'}),
//         delay: anime.stagger(100, {start: 1500}),
//         translateX: () => {
//             return anime.random(-20, 20);
//         },
//         translateY: () => {
//             return anime.random(-10, 10);
//         },
//         complete: animation,
//     });
// };
// animation();
// let titleSlideShowAnime = () => {
//     anime({
//         targets: '.titleAnime',
//         translateX: 100,
//         direction: 'alternate',
//         loop: true,
//         easing: 'spring(5, 30, 7, 3)'
//     })
// }
// titleSlideShowAnime();
// let DescriptSlideShowAnime = () => {
//     anime({
//         targets: '.descriptAnime',
//         translateX: 80,
//         direction: 'alternate',
//         loop: true,
//         easing: 'spring(6, 15, 4, 4)'
//     })
// }
// DescriptSlideShowAnime();
// let BtnSlideShowAnime = () => {
//     anime({
//         targets: '.btnAnime',
//         translateX: 200,
//         direction: 'alternate',
//         loop: true,
//         easing: 'spring(25, 10, 10, 0)'
//     })
// }
// BtnSlideShowAnime();
// var h1El = document.querySelectorAll('.animEffect');
// let animateBlocks = () => {
//     anime({
//         targets: h1El,
//         translateX: () => {
//             return anime.random(-10, 10);
//         },
//         translateY: () => {
//             return anime.random(-10, 10);
//         },
//         easing: "linear",
//         duration: 3000,
//         delay: anime.stagger(1),
//         complete: animateBlocks,
//     });
// };
// animateBlocks();
// var relativeEl = document.querySelector('.animateForLanding');
// relativeEl.style.transform = 'translateX(100px)';
//
// anime({
//     targets: '.animateForLanding',
//     translateX: {
//         value: '*=2.5', // 100px * 2.5 = '250px'
//         duration: 1000
//     },
//     width: {
//         value: '-=20px', // 28 - 20 = '8px'
//         duration: 1800,
//         easing: 'easeInOutSine'
//     },
//     rotate: {
//         value: '+=2turn', // 0 + 2 = '2turn'
//         duration: 1800,
//         easing: 'easeInOutSine'
//     },
//     loop: true,
//     direction: 'alternate'
// });
// let animateForLanding = () => {
//     anime({
//         targets: '.animateForLanding',
//         translateX: 250,
//         direction: 'alternate',
//         easing: 'linear'
//     });
// };
// animateForLanding();

