( function( $ ) {
  $(".carousel-indicators li:first").addClass("active");
  $(".carousel-inner .carousel-item:first").addClass("active");
  $("#juego-destacado.carousel .carousel-inner .carousel-item:first").addClass("active");

  $("ul.agenda-list li:first").addClass("destacado");

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
