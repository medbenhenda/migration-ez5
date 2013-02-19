$(document).ready(function() {
	$('#voucherGen').validate();
});

function getKey(){
	var options = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
        code = "";
	for( i = 0; i < 15; i++ )
	{
		code += options.charAt(Math.floor(Math.random() * options.length));
	}

	return code;
}

function generateKeys(){
	// Declare the vars we need
	var quantity = $('#qty').val(),
		vouchers = $('#vouchers').html(),
	    invoice  = $('#invoiceNo').val(),
	    type  = $('#type').val(),
	    onlineType = "E",
	    classroomType = "C";
	
	// If quantity is a number
	if( Math.floor(quantity) == quantity && $.isNumeric(quantity) )
	{
		$('#qty').css('background', 'none');
		// Loop through the quantity, and generate keys for each
		for( var i=0; i < quantity; i++ )
	    {

			// If the voucher isn't the first in the box ;D
	        if( type == "online" )
	        {
	        	$('#type').removeClass('error');
	        	$('#vouchers').html( $('#vouchers').html() +  onlineType + getKey() + "\n" );
	        }
	        else if( type == "classroom" )
	        {
	        	$('#type').removeClass('error');
	        	$('#vouchers').html( $('#vouchers').html() +  classroomType + getKey() + "\n" );
	        }
	        else
	        {
	        	$('#type').addClass('error');
	        }

		}
		$('#vouchers_zone').show();
	}
	else
	{
		$('#qty').addClass('error');
	}
}
	