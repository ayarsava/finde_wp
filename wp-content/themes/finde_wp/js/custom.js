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

$('.slick.fullmedia').slick({
  infinite: true,
  speed: 300,
  slidesToScroll: 1,
  slidesToShow: 1,
  lazyLoad: 'ondemand',
});

$('.slick.agenda').slick({
  infinite: false,
  speed: 300,
  slidesToScroll: 1,
  slidesToShow: 4,
  lazyLoad: 'ondemand',
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
});

var slide;
$('.pasadia').slick({
  asNavFor: '#agenda-por-dia',
  dots: false,
  infinite: false,
  speed: 300,
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
  initialSlide: slide,
  asNavFor: '.pasadia',
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
  $('iframe[src*="youtube"]').wrap(
    "<div class='embed-responsive embed-responsive-16by9'></div>"
    ).addClass("embed-responsive-item");

  $('iframe[src*="twitch.tv"]').wrap(
  "<div class='embed-responsive embed-responsive-16by9'></div>"
  ).addClass("embed-responsive-item");

//SLICK

    

})( jQuery );
