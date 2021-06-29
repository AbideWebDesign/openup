jQuery( function ( $ ) {
	
	$( '#ginput_base_price_5_3' ).change( function() {
		
		$( '#calculator_message' ).removeClass('d-none');
		
		$( '#calculator_message' ).empty();
	
		if ( $( '#ginput_base_price_5_3' ).val().indexOf( '-' ) != -1 ) {
					
			$( '#calculator_message' ).append('*You would have to pay an extra ' + $(this).val().replace('-', '') + '/mo to afford fair market rent. You should definitely check out home sharing!');
			
		} else {
			
			$( '#calculator_message' ).append('*You can afford fair market rent. You still may want to explore home sharing as an option to really get ahead in your finances.');			
			
		}
		
	} );
	
} );