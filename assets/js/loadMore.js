jQuery(function($){
	$('.unicorn_loadmore').click(function(){
 
		var button = $(this),
		    data = {
			'action': 'loadmore',
			'query': unicorn_loadmore_params.posts, // grabs params from wp_localize_script() function
			'page' : unicorn_loadmore_params.current_page
		};
		
		//AJAX call
		$.ajax({ 
			url : unicorn_loadmore_params.ajaxurl,
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...'); // replaces the button text with loading signal.
			},
			success : function( data ){
				if( data ) { 
					button.text( 'More posts' ).prev().after(data);
					unicorn_loadmore_params.current_page++;
 
					if ( unicorn_loadmore_params.current_page == unicorn_loadmore_params.max_page ) 
						button.remove(); // removes the button when it loads all the post
 
				} else {
					button.remove(); // if there is no data remove the button
				}
			}
		});
	});
});