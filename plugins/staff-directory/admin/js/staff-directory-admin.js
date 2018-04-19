(function( $ ) {
	'use strict';
	//need drag and drop sort
	//https://wordpress.stackexchange.com/questions/16342/how-to-save-the-state-of-a-drag-and-drop-jquery-ui-sortables-front-end-layout-ed
	//https://stackoverflow.com/questions/19508860/including-jquery-ui-sortable-in-wordpress-admin-page
	//https://developer.wordpress.org/reference/functions/wp_enqueue_script/
	//https://jqueryui.com/sortable/
	//https://wordpress.stackexchange.com/questions/7221/how-to-correctly-include-jquery-ui-effects-on-wordpress
	//
	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	 //alert('admin jQuery');
	 //jQuery("#sortable").sortable();
	 /*
	 jQuery( "#sortable" ).disableSelection();
	 
	jQuery( "li" ).click(function() {
	  alert( "Handler for .click() sortable called." );
	});
	
	jQuery( "*" ).click(function() {
		  //alert( "Handler for .click() * called." );
		  alert(event.target.nodeName);
		  alert(this.nodeName);
		});
		*/
	//https://wordpress.stackexchange.com/questions/139891/save-jquery-ui-sortable-on-wordpress?rq=1&utm_medium=organic&utm_source=google_rich_qa&utm_campaign=google_rich_qa	
	jQuery("#sortable").sortable({
		
		stop: function (event, ui) {
			//alert('save sortable');
			
			var new_order = jQuery(this).sortable('serialize');
			
			//jQuery.post(ajaxurl, { action: staff_directory_ajax_sort, order: new_order }, function( data ) {
			jQuery.post(staff_directory_ajax_sort.ajaxurl, {  }, function( ) {
				console.log('ajax sent and response received');     

			});
			
			
			/*
			//https://codex.wordpress.org/AJAX_in_Plugins
			var data = {
				'action': 'wp_ajax_staff_directory_sort_ajax_save',
				'whatever': '1234'
			};
			alert(ajaxurl);
			jQuery.post(ajaxurl, data, function(response) {
				alert('Got this from the server: ' + response);
			});			
			*/
			/*
			//https://pippinsplugins.com/process-ajax-requests-correctly-in-wordpress-plugins/
			var data = {
				action: 'test_response',
				post_var: 'this will be echoed back'
			};
			// the_ajax_script.ajaxurl is a variable that will contain the url to the ajax processing file
			jQuery.post(ajaxurl, data, function(response) {
				alert(response);
			});	
			*/
			/*
			//https://stackoverflow.com/questions/24274859/wordpress-ajax-function-in-child-class?utm_medium=organic&utm_source=google_rich_qa&utm_campaign=google_rich_qa	
			jQuery.ajax({
				url: ajaxurl, // Use this pre-defined variable,
							  // instead of explicitly passing 'admin-ajax.php',
				data: { action : 'wp_ajax_staff_directory_sort_ajax_save' },
				success: function(data){
					console.log(data);
				}
			});	
			*/
			
		}
		
		/*
		jQuery.ajax({
			url: ajaxurl, // Use this pre-defined variable,
						  // instead of explicitly passing 'admin-ajax.php',
			data: { action : 'do_something' },
			success: function(data){
				console.log(data);
			}
		});		
		*/
		
	});	
	
})( jQuery );
