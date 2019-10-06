var $ = jQuery;


/********************HEADER************************* */
    $('.synergies-click').click(function(){
        $('.synergy-list').slideToggle(800);
    });

    /**********RESPONSIVE MENU********* */
    
    $('.toggle-slide').click(function(){
      $('.header-dropdown').toggle();
  });

  $('.header-dropdown-li').on('click tap', function(){
    $('.header-dropdown').hide();
    $('.drop-down-frst').css({'display':'inline-block'});
    $('.drop-down-scnd').css({'display':'none'});
  });

  $('body').click(function(event){
    if($('.header-dropdown-wrap') !== event.target && !$('.header-dropdown-wrap').has(event.target).length){
      $('.header-dropdown').css({'display':'none'});
      $('.drop-down-frst').css({'display':'inline-block'});
      $('.drop-down-scnd').css({'display':'none'});
    }
  });

    $('.toggle-slide').on('click tap', function() {
      if ($('.header-dropdown').css('display') == 'none'){
        $('.drop-down-frst').css({'display':'inline-block'});
        $('.drop-down-scnd').css({'display':'none'});
      } else {
        $('.drop-down-frst').css({'display':'none'});
        $('.drop-down-scnd').css({'display':'inline-block'});
      }
    });

    // $('html').on('tap click', function(){
    //   if($('.header-dropdown').css('display') == 'none') {
    //     $('.drop-down-frst').css({'display':'none'});
    //     $('.drop-down-scnd').css({'display':'inline-block'});
    //   } else {
    //     $('.drop-down-frst').css({'display':'none'});
    //     $('.drop-down-scnd').css({'display':'inline-block'});
    //   }
    // });

      /**********RESPONSIVE MENU HEADER********* */

    //   $(window).resize(function() {
    //     var wi = $(window).width();
    //     if (wi >= 769) {
    //       $('.nav-responsive').css({'display':'none'});
    //     } else {
    //      $('.nav-responsive').css({'display':'inline-block'});
    //     }
    // });

    $('.synergies-click').click(function(){
      if ($('.arrow-down').css('display') == 'none'){
        $('.arrow-down').css({'display':'inline-block'});
        $('.arrow-up').css({'display':'none'});
      } else {
        $('.arrow-down').css({'display':'none'});
        $('.arrow-up').css({'display':'inline-block'});
      }
    });
/********************PARTNERS************************* */

    $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
      });


    $(document).ready(function() {
        $('.about-opt').click(function(event) {
          $('body, html').animate({
            scroll: $("#about-content").offset().top
          }, 2000);
        });
      });

/********************PARTNERS************************* */

    $(document).ready(function() {
      $('.header-opt').click(function(event) {
        $('body, html').animate({
          scroll: $("#header-content").offset().top
        }, 2000);
      });
    });

      $(document).ready(function() {
        $('.partners-opt').click(function(event) {
          $('body, html').animate({
            scroll: $("#partners-content").offset().top
          }, 2000);
        });
      });

      $(document).ready(function() {
        $('.blog-opt').click(function(event) {
          $('body, html').animate({
            scroll: $("#blog-content").offset().top
          }, 2000);
        });
      });

      $(document).ready(function() {
        $('.form-opt').click(function(event) {
          $('body, html').animate({
            scroll: $("#form-content").offset().top
          }, 2000);
        });
      });


$('form').submit(function(e) {
  e.preventDefault();
//   // var value = $(this).val();
//   if ($(".name").val().length === 0) {
//     $emptyInput = $(".name");
//   }
//   if ($(".email").val().length === 0) {
//     $emptyInput = $(".email");
//   }
//   if ($(".phone").val().length === 0) {
//     $emptyInput = $(".phone");
//   }
//   if ($(".msg").val().length === 0) {
//     $emptyInput = $(".msg");
//   }

//   if ($emptyInput) {
//     $emptyInput.prev().prev().css({'display':'block'});

    //   if ($(".email").val().length === 0) {
    //   $('.alert-red-email').css({'display':'block'});
    // } if ($(".phone").val().length === 0) {
    //   $('.alert-red-phone').css({'display':'block'});
    // } if ($(".msg").val().length > 0) {
    //   $('.alert-red-msg').css({'display':'block'});
    // } 
//   }
//   else {
//     $('.alert-green').css({'display':'block'});
//   }


});


$('form').submit(function(e){
  e.preventDefault();
}).validate({
   
    rules: {
      name: "required",
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true,
        minlength: 9,
      },
      message: {
        required: true,
        minlength: 5,
      }
    },
    messages: {
      name: "Įveskite vardą",
      email: {
        required:"Nurodykite el. pašto adresą",
        email: "Neteisingas el. pašto formatas",
      },
      phone: {
        required:"Nurodykite Tel. Nr.",
        minlength: "Tel. Nr. turi sudaryti mažiausiai 9 skaitmenys",
      },
      message: {
        required:"Įveskite žinutę",
        minlength: "Žinutė turi sudaryti mažiausiai 5 žodžiai",
      },

    },
    submitHandler: function(){
      $('.alert-success').css({'display':'block'});
    }

    // <div class="alert alert-danger" role="alert">
  });

