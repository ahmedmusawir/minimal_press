/*=========================================
=            CUSTOM JAVASCRIPT            =
=========================================*/

jQuery(document).ready(function($) {

	$('#portfolio-sorting li a').on('click', function (event) {
		//Remove the current active className
		// alert('clicked');
		$('#portfolio-sorting li a.active').removeClass('active');

		//Add active class to the clicked button 
		$(this).addClass('active');

		// Get the button text (filter value)
		var filterValue = 'cat-' + $(this).text().toLowerCase().replace(' ', '-');
		// console.log(filterValue);
		
		if( filterValue === "cat-all") {
			$('.portfolio-entry').removeClass('hidden');
		} else {
			// Else, we find the portfolio entries that match the clicked button
			// And then add the class of .hidden
			$('.portfolio-entry').each(function () {
				if (! $(this).hasClass(filterValue)) {
					$(this).addClass('hidden');	
				} else {
					$(this).removeClass('hidden');
				}
			});
		}
	});
});

