(function ($) {
  'use strict';

    const navbar = document.getElementById('navbar');

    const onScroll = () => {
        const scroll = document.documentElement.scrollTop;
        navbar.classList.remove('scroll');
        if (scroll > 0) {
            navbar.classList.add('scroll');
        } else {
            navbar.classList.remove('scroll');
        }
    }

    window.addEventListener('scroll', onScroll);

    $('.navbar-toggler').click(function () {
        $('.collapse').addClass('show');
    });

    $('.close-menu').click(function () {
        $('.collapse').removeClass('show');
    });

    //  Count Up
  function counter() {
    var oTop;
    if ($('.counter').length !== 0) {
      oTop = $('.counter').offset().top - window.innerHeight;
    }
    if ($(window).scrollTop() > oTop) {
      $('.counter').each(function () {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        }, {
          duration: 1000,
          easing: 'swing',
          step: function () {
            $this.text(Math.floor(this.countNum));
          },
          complete: function () {
            $this.text(this.countNum);
          }
        });
      });
    }
  }
  $(window).on('scroll', function () {
    counter();
  });

  // bottom to top
  $('#top').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 'slow');
    return false;
  });
  // bottom to top

  $(document).on('ready', function () {

    // Nice Select
    $('select').niceSelect();
    // -----------------------------
    //  Client Slider
    // -----------------------------
    $('.category-slider').slick({
      slidesToShow: 8,
      infinite: true,
      arrows: false,
      autoplay: false,
      autoplaySpeed: 2000
    });
    // -----------------------------
    //  Select Box
    // -----------------------------
    // $('.select-box').selectbox();
    // -----------------------------
    //  Video Replace
    // -----------------------------
    $('.video-box img').click(function () {
      var video = '<iframe allowfullscreen src="' + $(this).attr('data-video') + '"></iframe>';
      $(this).replaceWith(video);
    });
    // -----------------------------
    //  Coupon type Active switch
    // -----------------------------
    $('.coupon-types li').click(function () {
      $('.coupon-types li').not(this).removeClass('active');
      $(this).addClass('active');
    });
    // -----------------------------
    // Datepicker Init
    // -----------------------------
    $('.input-group.date').datepicker({
      format: 'dd/mm/yy'
    });
    // -----------------------------
    // Datepicker Init
    // -----------------------------

    // -----------------------------
    // Button Active Toggle
    // -----------------------------
    $('.btn-group > .btn').click(function () {
      $(this).find('i').toggleClass('btn-active');
    });
    // -----------------------------
    // Coupon Type Select
    // -----------------------------
    $('#online-code').click(function () {
      $('.code-input').fadeIn(500);
    });
    $('#store-coupon, #online-sale').click(function () {
      $('.code-input').fadeOut(500);
    });
    /***ON-LOAD***/
    jQuery(window).on('load', function () {

    });

  });

  // niceSelect

  $('select:not(.ignore)').niceSelect();

    var swiper = new Swiper(".homeSwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiper = new Swiper(".itemCategorySwiper", {
        slidesPerView: 3,
        spaceBetween: 40,
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            769: {
                slidesPerView: 3,
                spaceBetween: 20
            }
        }
    });

  // tooltip
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });

     // bootstrap slider range
  $('.range-track').slider({});
  $('.range-track').on('slide', function (slideEvt) {
    $('.value').text('$' + slideEvt.value[0] + ' - ' + '$' + slideEvt.value[1]);
  });


})(jQuery);
