$(document).ready(function() {
	
	$(".choose_language_link").colorbox({inline:true, width:"50%"});
	
	var entity_id = $.cookie( 'entity_id' );
	var user_country = $.cookie( 'user_country' );
	var user_country_id = $.cookie( 'user_country_id' );
	var $ids = '';

	$("#choose_language .companies_list li a").click( function() {
		
		
			$ids = $(this).attr('id').split('_');
			$.cookie("entity_id", $ids[1], { path : '/' });
			$.cookie("user_country_id", $ids[2], { path : '/' });
			$.cookie( 'user_country', $(this).html(), { path : '/' } )
			
			$("#choose_language .companies_list li a").removeClass('select');
			$("#choose_language .companies_list li ." + $ids[2] ).addClass('select');
			
			$("#links #language_header_link").html( $(this).html() );
		
			if(entity_id != $ids[1]){
				$.get('http://' + location.hostname + '/dcdshop/clear_basket');
				location.reload();
			}
			
			return false;
		}	
	);
	
	if( user_country != null && user_country_id != null){
		// Change language and country
		$("#choose_language .companies_list li ." + user_country_id).addClass('select');
		$("#links #language_header_link").html( user_country );
	}
	
	
	
});


function change_entity(){
	alert( 'change entity' );	
}