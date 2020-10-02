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



var day_0_vj = $('[data-target="08-10"]');
var day_1_vj = $('[data-target="09-10"]');
var day_2_vj = $('[data-target="10-10"]');
var day_3_vj = $('[data-target="11-10"]');

const d = new Date();
var day = d.getDay();
console.log(d);
var slide;
if (day == 1) {
  slide = 0;
}else if (day == 2) {
  slide = 1;
}else if (day == 3) {
  slide = 2;
}else if (day == 4) {
  slide = 3;
}else if (day == 5) {
  slide = 4;
}else if (day == 6) {
  slide = 5;
}else{
  slide = 0;
}
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

$('#external-buttons a').on('click', function(e){
  e.preventDefault();
  $('#external-buttons a.active').removeClass('active');
  $(this).addClass('active');
  var targetSlide = $(this).data('target');
  $('.slick.agenda').slick('slickGoTo', targetSlide );
});//click()

$('#agenda-destacada').slick({
  infinite: false,
  speed: 300,
  slidesToScroll: 1,
  slidesToShow: 2,
  lazyLoad: 'ondemand',
  //initialSlide: slide,
});

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
