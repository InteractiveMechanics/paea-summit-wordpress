$( window ).load(function() {

	/* GRID / ISOTOPE */


	$('.grid').isotope({
	  // options
	  itemSelector: '.grid-item',
	  layoutMode: 'masonry'
	});


	$('.grid').isotope(
  masonry: {
    columnWidth: 220
  }
})

});