( function( $ ) {
  $(".carousel-indicators li:first").addClass("active");
  $(".carousel-inner .carousel-item:first").addClass("active");
  $("#juego-destacado.carousel .carousel-inner .carousel-item:first").addClass("active");

  //$("ul.agenda-list li:first").addClass("destacado");

  $('[rel="tooltip"]').tooltip();


$(document).ready(function() {
    $("#load").hide();
    $("#container").show();
});

$('.galeria-slick').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  dots: true,
  lazyLoad: 'ondemand',
});

$('.slick-fade').slick({
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 2000,
});
$('.profile-slick').slick({
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 2000,
  dots: true
});
$('.banner-slick').slick({
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 8000
});

$('.slick.ntflx').slick({
  infinite: true,
  speed: 300,
  slidesToScroll: 1,
  centerMode: true,
  slidesToShow: 6,
  lazyLoad: 'ondemand',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.slick.tienda').slick({
  infinite: true,
  speed: 300,
  slidesToScroll: 1,
  slidesToShow: 4,
  lazyLoad: 'ondemand',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.slick.fullmedia').slick({
  infinite: true,
  speed: 300,
  slidesToScroll: 1,
  slidesToShow: 1,
  lazyLoad: 'ondemand',
});

$('.slick.por3').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  centerMode: true,
  variableWidth: true
});

$('.slick.agenda').slick({
  infinite: false,
  speed: 300,
  slidesToScroll: 1,
  slidesToShow: 4,
  lazyLoad: 'ondemand',
  swipeToSlide: true,
  //initialSlide: slide,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('#agenda-destacada').slick({
  infinite: false,
  speed: 300,
  slidesToScroll: 1,
  slidesToShow: 2,
  //initialSlide: slide,
  responsive: [
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
  ]
});

$( document ).ready(function() {
  var today = new Date();
  $dd = today.getDate();
  $mm = today.getMonth()+1; //January is 0!
  $dm = $dd + '-' + $mm;
  console.log($dm);
  if ($dm == '23-10') {
    var slide = 0;
  } else if ($dm == '24-10') {
    var slide = 1;
  } else if ($dm == '25-10') {
    var slide = 2;
  } else {
    var slide = 0;
  }
  $('.pasadia').slick({
    asNavFor: '#agenda-por-dia',
    dots: false,
    infinite: false,
    speed: 300,
    initialSlide: slide,
  });
  $('#agenda-por-dia').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    dots:false,
    arrows: false,
    fade: true,
    focusOnSelect: true,
    asNavFor: '.pasadia',
    initialSlide: slide,
    centerMode: true
  });
  // function event,slick and index
  // version 1.5+ uses slick-current stead of slick-active
  $('#agenda-por-dia').on('afterChange', function(event,slick,i){
    $('.pasadia .slick-slide').removeClass('slick-current');
    $('.pasadia .slick-slide').eq(i).addClass('slick-current');    				 
  });

  // remember document ready on this
  $('.pasadia .slick-slide').eq(0).addClass('slick-current');	
});

$( document ).ready(function() {
  $('.slick-custom').slick({
    swipeToSlide:true,
    infinite:false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  $('.slick.x2').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    swipeToSlide:true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.slick.x3').slick({
    speed: 300,
    slidesToScroll: 1,
    slidesToShow: 3,
    swipeToSlide:true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.slick.x4').slick({
    speed: 300,
    slidesToScroll: 1,
    slidesToShow: 1,
    swipeToSlide:true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.sl-galeria').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
    lazyLoad: 'ondemand',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: false,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
        }
      }
    ]
  });

  $('.autoplay').slick({
    slidesToShow: 3,
    centerMode: true,
    variableWidth: true,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 2000,
  });
});

if ($('#gamejam_videos').length) {
  $('#gamejam_videos').slick({
    infinite: false,
    speed: 300,
    slidesToScroll: 1,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
}


// Filtro de catalogo
// set up variables
var categoryFilters = [];
var discountFilters = [];
//var categoryFilter;
var qsRegex;


// init Isotope
var $container = $('#container').imagesLoaded( function() {
  $container.isotope({
    itemSelector: '.grid-item',
    filter: function() {
      var $this = $(this);
      // search
      var searchResult = qsRegex ? $this.text().match(qsRegex) : true;

      // category
      if ((categoryFilters.length === 0) && (discountFilters.length === 0)) return true;

      // Si no hay categorías, chequeamos sólo por discounts
      if (categoryFilters.length === 0){
        for (var i = 0; i < discountFilters.length; i++) {
          if ($this.is('[data-descuento*=' + discountFilters[i] + ']')) {
            return searchResult;
          }
        }
      // Si no hay discounts, chequeamos sólo por categorías
      } else if (discountFilters.length == 0) {
        for (var i = 0; i < categoryFilters.length; i++) {
          if ($this.is('[data-category*=' + categoryFilters[i] + ']')) {
            return searchResult;
          }
        }
      // Sino, chequeamos por ambos a la vez
      } else {
        for (var i = 0; i < categoryFilters.length; i++) {
          if ($this.is('[data-category*=' + categoryFilters[i] + ']')) {
            for (var j = 0; j < discountFilters.length; j++) {
              if ($this.is('[data-descuento*=' + discountFilters[j] + ']')) {
                return searchResult;
              }
            }
          }
        }
      }
      return false;
    },
    percentPosition: true,
    masonry: {
      columnWidth: '.grid-sizer'
    }

  });
});

// filter with checkboxes
var $discount_checkboxes = $('#form-ui input.discount');
var $category_checkboxes = $('#form-ui input.category');

$discount_checkboxes.change(function() {
  discountFilters = [];
  $discount_checkboxes.each(function(i, elem) {
    if (elem.checked) {
      discountFilters.push(elem.value);
    }
    console.log(discountFilters.join(','))
  });
  $container.isotope();
});

$category_checkboxes.change(function() {
  categoryFilters = [];
  $category_checkboxes.each(function(i, elem) {
    if (elem.checked) {
      categoryFilters.push(elem.value);
    }
    console.log(categoryFilters.join(','))
  });
  $container.isotope();
});


// debounce text search so filtering doesn't happen every millisecond
function debounce(fn, threshold) {
  var timeout;
  return function debounced() {
    if (timeout) {
      clearTimeout(timeout);
    }

    function delayed() {
      fn();
      timeout = null;
    }
    timeout = setTimeout(delayed, threshold || 100);
  }
};


// use value of search field to filter
var $quicksearch = $('#search').keyup(debounce(function() {
  qsRegex = new RegExp($quicksearch.val(), 'gi');
  $container.isotope();
}, 200));





  //CAPTURO FUENTE Y ASIGNO AUTOPLAY
if($(".fullmedia, .trailer")[0]){
  $('iframe[src*="youtube"]').wrap(
  "<div class='embed-responsive embed-responsive-16by9'></div>"
  ).addClass("embed-responsive-item");

  $('iframe[src*="twitch.tv"]').wrap(
  "<div class='embed-responsive embed-responsive-16by9'></div>"
  ).addClass("embed-responsive-item");
}

//SLICK
$(document).ready(function() {
  var elementTop, elementBottom, viewportTop, viewportBottom;
  function isScrolledIntoView(elem) {
    elementTop = $(elem).offset().top;
    elementBottom = elementTop + $(elem).outerHeight();
    viewportTop = $(window).scrollTop();
    viewportBottom = viewportTop + $(window).height();
    return (elementBottom > viewportTop && elementTop < viewportBottom);
  }
  
  if($('video').length){
    var loadVideo;
    $('video').each(function(){
      $(this).attr('webkit-playsinline', '');
      $(this).attr('playsinline', '');
      $(this).attr('muted', 'muted');

      $(this).attr('id','loadvideo');
      loadVideo = document.getElementById('loadvideo');
      loadVideo.load();
    });

    $(window).scroll(function () { // video to play when is on viewport  
      $('video').each(function(){
        if (isScrolledIntoView(this) == true) {
            $(this)[0].play();
        } else {
            $(this)[0].pause();
        }
      });
    });  // video to play when is on viewport
  } // end .field--name-field-video
 });

 $('.tool-tip').tooltip()

    

})( jQuery );
