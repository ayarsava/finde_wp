( function( $ ) {
  $(".carousel-indicators li:first").addClass("active");
  $(".carousel-inner .carousel-item:first").addClass("active");


  $('#ruleta .carousel-inner div.carousel-item').first().addClass('active'); 
  $('#ruleta .list-group .list-group-item').first().addClass('active');


  $('#ruleta').carousel('pause');
  var hoverTimer;
  var hoverDelay = 200;
  var clickEvent = false;
  $('#ruleta').carousel().on('click', '.list-group li', function() {
      clickEvent = true;
      $('.list-group li').removeClass('active');
      $(this).addClass('active');   
  }).on('slid.bs.carousel', function() {
    if(!clickEvent) {
      var count = $('.list-group').children().length -1;
      var current = $('.list-group li.active');
      current.removeClass('active').next().addClass('active');
      var id = parseInt(current.data('slide-to'));
      if(count === id) {
        $('.list-group li').first().addClass('active'); 
      }
    }
    clickEvent = false;
  });

  
  $('.list-group li').hover(function() {
      var $target = $(this);
      // on mouse in, start a timeout
      hoverTimer = setTimeout(function() {        
          // do your stuff here
          $target.trigger('click');         
      }, hoverDelay);
  }, function() {
      // on mouse out, cancel the timer
      clearTimeout(hoverTimer);

  });

  $(".list-group li .href-goto").click(function() {
    window.open($(this).attr("data-href"),'_self');
    return false;
  });

  /*
  var boxheight = $('#ruleta .carousel-inner').innerHeight();
  var itemlength = $('#ruleta .carousel-item').length;
  var triggerheight = Math.round(boxheight/itemlength);
  $('#ruleta .list-group-item').outerHeight(triggerheight);*/
  $('#ruleta .list-group').removeClass('preloading');
  $('#ruleta .carousel-inner').removeClass('preloading');

  
  $('[rel="tooltip"]').tooltip();

// Filtro de catalogo
// set up variables
// Filtro de catalogo
// set up variables
var categoryFilters = [];
var discountFilters = [];
//var categoryFilter;
var qsRegex;

// init Isotope
var $container = $('#container').isotope({
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
  function autoPlayYouTubeModal(){
    var trigger = $("body").find('[data-toggle="modal"]');
    trigger.click(function() {
      var theModal = $(this).data( "target" ),
      videoSRC = $(this).attr( "data-theVideo" ), 
      videoSRCauto = videoSRC+"?autoplay=1" ;
      $(theModal+' iframe').attr('src', videoSRCauto);

      $('#videoModal').on('hidden.bs.modal', function () {
          $('#videoModal iframe').removeAttr('src');
      })

      
    });
  }
  //AUTOPLAY
  $(document).ready(function(){
    autoPlayYouTubeModal();
  });


  //ORDER BY DATE
    /*var container = $(".sort-list");
    var items = $(".sort-item");
    
    items.each(function() {
       // Convert the string in 'data-event-date' attribute to a more
       // standardized date format
       var BCDate = $(this).attr("data-event-date").split("-");
       var standardDate = BCDate[1]+" "+BCDate[0]+" "+BCDate[2];
       standardDate = new Date(standardDate).getTime();
       $(this).attr("data-event-date", standardDate);
 
    });
    

    items.sort(function(a,b){
        a = parseFloat($(a).attr("data-event-date"));
        b = parseFloat($(b).attr("data-event-date"));
        return a>b ? -1 : a<b ? 1 : 0;
    }).each(function(){
        container.prepend(this);
    });
*/
/* This script sorts your list in descending order... 
to change it to ascending order change the "less than" operator (<) to "greater than" (>) */
  

    

})( jQuery );
