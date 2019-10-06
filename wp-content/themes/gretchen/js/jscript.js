/*!
 * jscript

 */
var $ = jQuery;

//  $('.owl-one').owlCarousel({
//     loop:true,
//     margin:10,
//     nav:true,
//     responsive:{
//         0:{
//             items:1
//         },
    
//     }
// });
$(".partners-wrapper .owl-one").owlCarousel({
    loop: true,
    dots: false,
    autoPlay: 3000,
    margin: 20,
    // autowidth: true,
    nav:true,
    singleItem: true,
    navText: [
        '<span class="fas fa-chevron-left fa-2x"></span>',
        '<span class="fas fa-chevron-right fa-2x"></span>'
    ],
    // navContainer: '.partners-wrapper .custom-nav',
    responsive : {
        0:{
            items: 1,
        },
        600:{
            items: 2
        },
        720:{
            items: 3
        },
        1000:{
            items: 5
        }
    },
});
