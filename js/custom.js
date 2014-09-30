/*=========================================
=            CUSTOM JAVASCRIPT            =
=========================================*/

jQuery(document).ready(function(jQuery) {

	// Setting the active class to "All" button
	jQuery('#portfolio-sorting li:first-child a').addClass('active');

	jQuery('#portfolio-sorting li a').on('click', function (event) {
		event.preventDefault();
		//Remove the current active className
		// alert('clicked');
		jQuery('#portfolio-sorting li a.active').removeClass('active');

		//Add active class to the clicked button 
		jQuery(this).addClass('active');

		// Get the button text (filter value)
		var filterValue = 'cat-' + jQuery(this).text().toLowerCase().replace(' ', '-');
		// console.log(filterValue);
		
		if( filterValue === "cat-all") {
			jQuery('.portfolio-entry').removeClass('hidden');
		} else {
			// Else, we find the portfolio entries that match the clicked button
			// And then add the class of .hidden
			jQuery('.portfolio-entry').each(function () {
				if (! jQuery(this).hasClass(filterValue)) {
					jQuery(this).addClass('hidden');	
				} else {
					jQuery(this).removeClass('hidden');
				}
			});
		}
	});
});

