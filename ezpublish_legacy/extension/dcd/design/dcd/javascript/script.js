function vatNumberIsValid( vatNumber ) {
    /* Define our tax rules -- I hate regex sometimes */
    var rules = {
        "AT": /^AT[\- ]?[U]{0,1}[0-9]{8}$/,
        "BE": /^BE[0-1]{1}[0-9]{9}$|^((BE)|(BE ))[0-1]{1}(\d{3})([.]{1})(\d{3})([.]{1})(\d{3})$/,
        "BG": /^BG[\- ]?([0-9]{9}|[0-9]{10})$/,
        "CY": /^CY[\- ]?[0-9]{8}[A-Z]$/,
        "CZ": /^CZ[\- ]?[0-9]{8,10}$/,
        "DE": /^DE[\- ]?[0-9]{9}$/,
        "DK": /^DK[\- ]?([0-9]{2}\ ?){3}[0-9]{2}$/,
        "EE": /^EE[\- ]?[0-9]{9}$/,
        "EL": /^EL[\- ]?[0-9]{9}$/,
        "ES": /^ES[\- ]?([0-9A-Z][0-9]{7}[A-Z])|([A-Z][0-9]{7}[0-9A-Z])$/,
        "FI": /^FI[\- ]?[0-9]{8}$/,
        "FR": /^FR[\- ]?[0-9A-Z]{2}\ ?[0-9]{9}$/,
        "GB": /^GB[\- ]?([1-9][0-9]{2}\ ?[0-9]{4}\ ?[0-9]{2})|([1-9][0-9]{2}\ ?[0-9]{4}\ ?[0-9]{2}\ ?[0-9]{3})|((GD|HA)[0-9]{3})$/,
        "HU": /^FI[\- ]?[0-9]{8}$/,
        "IE": /^IE[\- ]?[0-9][0-9A-Z\+\*][0-9]{5}[A-Z]$/,
        "IT": /^IT[\- ]?[0-9]{11}$/,
        "LT": /^LT[\- ]?([0-9]{9}|[0-9]{12})$/,
        "LU": /^LU[\- ]?[0-9]{8}$/,
        "LV": /^LV[\- ]?[0-9]{11}$/,
        "MT": /^MT[\- ]?[0-9]{8}$/,
        "NL": /^NL[\- ]?[0-9]{9}B[0-9]{2}$/,
        "PL": /^PL[\- ]?[0-9]{10}$/,
        "PT": /^PT[\- ]?[0-9]{9}$/,
        "RO": /^RO[\- ]?[0-9]{8}$/,
        "SE": /^SE[\- ]?[0-9]{12}$/,
        "SI": /^SI[\- ]?[0-9]{8}$/,
        "SK": /^SK[\- ]?[0-9]{10}$/
    };

    /* Loop through our rules until we find a match */
    for( var rule in rules )
    {
        if( vatNumber.match( rules[rule] ) )
        {
            /*
                Match found, If it's a British Tax code,
                    do some further validation on it:
                    http://en.wikipedia.org/wiki/VAT_identification_number
            */
            if( rule === 'GB' )
            {
                var vatNumber   = vatNumber.replace(/^GB[\- ]?/, ''), /* Remove the non-numeric characters */
                    vatCorrect  = parseInt(vatNumber.substr(-2)),     /* Retrieve the answer from the number */
                    vatNumber   = parseInt(vatNumber.substr( 0, vatNumber.length-2 )), /* Retrieve the rest of the string  */
                    vatAnswer   = 0,
                    increment   = 8;

                /*
                    Loop through our vat number
                    and multiply each by the current increment
                */
                for ( var i = 0; i < vatNumber.length; i++ )
                {
                    vatAnswer += vatNumber[i] * increment;
                    increment--;
                }

                /* While the number isn't negative,
                    subtract 97 until it is*/
                while( vatAnswer > 0 )
                {
                    vatAnswer -= 97;
                }

                /*
                    Since Modulus 97 expired in 2010, we run both Modulus 97,
                        and Modulus 9755 to validate the tax number
                    (check if answer is 42 less
                        than the negated value of varCorrect)

                    IF the negated (-) last two digits of the VAT Number
                        are equal to the sum of the other numbers
                        (each multiplied by an decrementing value from 8)
                    THEN our VAT Number is valid
                */
                if(  vatAnswer != ( vatCorrect - ( vatCorrect*2 ) )
                && ( vatCorrect - (vatCorrect*2)  + 42 ) != vatAnswer  )
                {
                    return {
                        "result":   false
                    };
                }

            }
            /*
                Our VAT Number has been calculated as valid,
                Return the result, and the country code
            */
            return {
                "result":   true,
                "code"  :   rule
            };
        }
    }

    /* None of our rules matched, The code is invalid */
    return {
        "result":   false
    };
}

Array.prototype.clean = function(deleteValue) {
    for (var i = 0; i < this.length; i++) {
        if (this[i] == deleteValue ) {
          this.splice(i, 1);
          i--;
        }
    }
    return this;
};

$(function(){
    function insertAddress( data )
    {
        var address      = [];

        address.push( data.user.firstname + ' ' + data.user.lastname );

        delete data.user.firstname;
        delete data.user.lastname;

        var toUse = [
            'Pos',
            'Co',
            'Address1',
            'Address2',
            'Address3',
            'city',
            'Zip',
            'state',
            'province',
            'country'
        ];

        for( var i = 0; i < toUse.length; i++ )
        {
            if( data.user[ toUse[i] ] !== undefined && data.user[ toUse[i] ].length !== 0 ){
                address.push( data.user[ toUse[i] ] );
            }
        }

        $('fieldset#loggedin address').html( address.join('<br />') );
    }

   $("#content_brief").slides({play: 5000});

	// $('.columns').columnize({
	// 		columns: 2,
	// 		lastNeverTallest: true,
	// 		doneFunc: function(){
	// 				$('.columns .last>img').detach().prependTo('.columns .last');
	// 		}
	// });


	$("body#index #content nav a").click(function(){

		$("body#index #content nav ul li").removeClass("selected");
		$(this).parent().addClass("selected");

		show = $(this).data('show');

		$("body#index #content article").hide();
		$("body#index #content article#"+show+"").show();

		if(!$("body#index #content article#"+show+" div").hasClass('columns')){

			// $("body#index #content article#"+show+" div").addClass('columns').columnize({
			// 					columns: 2,
			// 					lastNeverTallest: true,
			// 					doneFunc: function(){
			// 							$('.columns .last>img').detach().prependTo('.columns .last');
			// 					}
			// 			});
		}


		return false;
	})

	$("#demoForm").formwizard({
	 	formPluginEnabled: true,
	 	validationEnabled: false,
	 	focusFirstInput : true,
        disableUIStyles: true,
        historyEnabled: true,
	 	formOptions: {
			success: function(data){$("#status").fadeTo(500,1,function(){ $(this).html("You are now registered!").fadeTo(5000, 0); })},
			beforeSubmit: function(data){$("#data").html("data sent to the server: " + $.param(data));},
			dataType: 'json',
			resetForm: true
		}
	});

	$.ajax({
		type: 'POST',
		cache: true,
		url: '/course/login/',
		dataType: 'json',
		success: function(data){
			if( typeof data == 'object' && data.result == true )
			{
				if(data.user)
				{
					$('#loggedin').show();
					$('#first').hide();
				}
				
                 insertAddress( data );
                $("#demoForm").formwizard("back");
			}
		}
	});

	$('#bookingForm a.registerLink').click(function(e){
		e.preventDefault();
		$("#demoForm").formwizard("show", "register");
	});

    $('#bookingForm a.forgotPasswordLink').click(function(e){
        e.preventDefault();
        $("#demoForm").formwizard("show", "forgot");
    });

    $('#bookingForm a#forgotPasswordLink').click(function(e){
        e.preventDefault();

        $.ajax({
            url: '/course/register/',
            type: 'get',
            data: 'forgot=' + escape( $('#registrationemail').val() ),
            dataType: 'json',
            success: function( data ){
                if( data.result == false ) {
                    if( data.error == 'emailExists' ) {
                        var link = window.location.href;
                        //Rewrite url to direct user to registration
                        $('#forgotEmailErrors').hide().html(data.message).css("color","red").fadeIn();
                    }
                    else if( data.error == 'sendEmailError' ) {
                        //Error with Confirmation Email
                    }
                    else if( data.error == 'userError') {
                        //Error with createUser function
                    }

                }
                else {
                    $('#forgotEmailErrors').hide().html(data.message).fadeIn();
                    
                    setTimeout(function(){
                    		$("#demoForm").formwizard("back").fadeIn();
                    }, 2000 );
                	
                }
            }
        });
    });

    /** BEGIN Registration **/
        var passwordField       = $('input[name=regpassword]'),
            passwordConfField   = $('input[name=regconfpassword]'),
            emailField          = $('input[name=regemail]'),
            emailConfField      = $('input[name=regconfemail]'),
            emailMatch          = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        function fieldMatch( fieldname, match )
        {
            $('input[name=' + fieldname + ']').closest('div').find('i').removeClass('iconeg, icopos');
            $('input[name=' + fieldname + ']').closest('div').find('i').addClass( 'ico' + (
                match == true ? 'pos' : 'neg'
            ));

            $('input[name=' + fieldname + ']').css({ border: '1px solid #' + (match == true ? '0f0' : 'f00') });
        }

        // Add check for password's both matching
        $('input[name=regpassword], input[name=regconfpassword]').keyup(function(){
           if( passwordConfField.val() == '' || passwordField.val() != passwordConfField.val() )
           {
                fieldMatch( 'regpassword', false);
           }
           else
           {
                fieldMatch( 'regpassword', true);
           }
        });

        $('input[name=regemail], input[name=regconfemail]').keyup(function(){
           if( emailField.val() == ''
                || emailField.val() != emailConfField.val()
                || emailMatch.test( emailField.val() ) == false
           )
           {
                fieldMatch( 'regemail', false);
           }
           else
           {
                fieldMatch( 'regemail', true);
           }
        });

        $('input[name=regemail]').blur( function(){
            if( $('input[name=regemail]').val() == '' )
                    return false;

            $.ajax({
                url: '/course/register/',
                type: 'get',
                data: 'email=' + escape( $('input[name=regemail]').val() ),
                dataType: 'json',
                success: function( data ){
                    if( data.result == true )
                    {
                        $('#regEmailNotif').hide().html('Email Taken, Please use another').fadeIn();
                    }
                    else
                    {
                        $('#regEmailNotif').fadeOut();
                    }
                }
            });
        });

        // Add check for both email address' matching
    	$('#registerButton').click( function(e){
    		e.preventDefault();
            var emptyFields    = false,
                requiredFields = [
                'regusername',
                'regpassword',
                'regconfpassword',
                'regemail',
                'regconfemail',
                'regfirstname',
                'reglastname',
                'regjobtitle',
                'regcompanyname',
                'regaddress1',
                'regcity',
                'regprovince',
                'regZip',
                'regCellCountry',
                'regCell'
            ];

            for (var i = requiredFields.length - 1; i >= 0; i--) {

                var field = $('input[name=' + requiredFields[i] + ']');

                if( field.val() == '' )
                {
                    field.css({
                        borderColor: '#f00'
                    });

                    emptyFields = true;
                }
            };

            if( emptyFields === true )
            {
                alert(getString('reg'));
            }
            else
            {
                $.ajax({
                    type: 'POST',
                    cache: false,
                    url: '/course/register/',
                    data: $('#demoForm').serialize(),
                    dataType: 'json',
                    success: function(data) {
                        var address = [],
                            message = '';

                        if( typeof data == 'object' )
                        {
                            if( data.result == true )
                            {
                                generateRegistrationPopup();
                                insertAddress( data );
								window.loggedin = true // added by jinit patel  - set loggedin true after login
                                $("#demoForm").formwizard("show", "loggedin");
                            }
                            else
                            {
                            }
                        }

                        if( data.error == 'Existing Username' )
                        {
                            alert(data.message);
                        }
                    }
                });
            }

    	}); // End Register Click Event
    /** END Registration **/

    /** Begin Discounts **/
    //When a user enters their discount
    var discountField = $('#discountCode');
    var discountProcessing = false,
        discountIsDisabled = false;

     $('#discountCode').keyup(function(){
        var discountValue = discountField.val().replace(/\s+/gi,'');
        clearTimeout($(this).data('timeout'));
        $(this).data('timeout', setTimeout(function(){
            redeemDiscounts( discountValue, discountProcessing, discountIsDisabled, discountField );
        }, 200 ));
    });

    $('#discounButton').click(function(e){
        e.preventDefault();
        var discountValue = discountField.val().replace(/\s+/gi,'');
        redeemDiscounts( discountValue, discountProcessing, discountIsDisabled, discountField );
    });
    /** End Discounts **/

    /** Begin Vouchers **/
    // When a user enters their voucher
    var voucherField = $('#voucherCode');
    var voucherProcessing = false,
        voucherIsDisabled = false;

    $('#voucherCode').keyup(function(){
        var voucherValue = voucherField.val().replace(/\s+/gi,'');
        clearTimeout($(this).data('timeout'));
        $(this).data('timeout', setTimeout(function(){
            redeemVoucher( voucherValue, voucherProcessing, voucherIsDisabled, voucherField );
        }, 200 ));
    });

    $('#voucherButton').live( 'click', function(e){
        e.preventDefault();
        var voucherValue = voucherField.val().replace(/\s+/gi,'');
        redeemVoucher( voucherValue, voucherProcessing, voucherIsDisabled, voucherField );
    });
    /** End Vouchers **/

    /** Begin Pro-Forma **/
    $('a#proforma').live('click', function(e){
        e.preventDefault();
        if( $(this).data('sent') === true )
            return false;

        if( $('#proforma').data('country') != 'gb' && $('#proforma').data('continent') != 'eu' )
        {
            // Check the voucher in the database
            $.ajax({
                type: 'GET',
                cache: false,
                url: '/course/booking/',
                data:      'cid='
                         + $('#findcid').data('id')
                         + '&eid='
                         + $('#findcid').data('eventid')
                         + '&vatcode='
                         + $('#proformaTaxNumber input').val()
                         + '&discountcode='
                         + $('#discountCode').val(),
                dataType: 'json',
                success: function(data){
                    if( data.result == true )
                    {
                        // display "Voucher Approved" message in status box
                        $('#loggedin .errorBox .errorTitle')
                            .text(data.errorTitle)
                            .css({ 'color': '#159749' });

                        $('#loggedin .errorBox .errorMessage')
                            .css({ 'color': '#159749' });

                        $('#loggedin .errorBox')
                            .fadeIn('fast');

                        $('#paymentOptions').slideUp('fast', function(){
                            $('#paymentOptions').html('');
                        });
                    }
                    else
                    {
                        $('#loggedin .errorBox .errorTitle').text(data.errorTitle);
                        $('#loggedin .errorBox').fadeIn('fast');

                        // Re-Enable other payment options
                        $('#voucherCode').removeAttr('disabled');
                    }

                    $('#loggedin .errorBox .errorMessage').html(data.errorMessage);
                },
                beforeSend: function(){
                    // Disable other payment options while voucher is loading
                    $('#voucherCode').attr( 'disabled', 'disabled' );

                    $('#loggedin .errorBox .errorTitle').text('');
                    $('#loggedin .errorBox .errorMessage')
                        .html('<div id="loading"><span>Loading</span>'
                            + '<span class="l-1"></span>'
                            + '<span class="l-2"></span>'
                            + '<span class="l-3"></span>'
                            + '<span class="l-4"></span>'
                            + '<span class="l-5"></span>'
                            + '<span class="l-6"></span></div>');

                        $('#loggedin .errorBox')
                            .fadeIn('fast');

                    $('a#proforma').attr('href', 'javascript:void(0);').data('sent', true);
                }
            });
        }
        else
        {
            $('#proforma').fadeOut('slow', function(){
                /*var tax_message =   'If you are an EC Customer, Please provide your VAT Number below.' +
                                    'On successful validation of your VAT Number, you will not be charged the local tax.' +
                                    'Failure to provide a valid EC Tax Number will result in you being charged the full local tax rate relevent to the course.';

                $('#loggedin .errorBox .errorTitle').text('Error');
                $('#loggedin .errorBox .errorMessage').html(tax_message);
                $('#loggedin .errorBox').addClass('alert-info').fadeIn('fast');*/

                $('#proformaTaxNumber').fadeIn('slow');
            });
        }

    });

    $('#proformaTaxNumber a').click( function (e) {
        e.preventDefault();
        e.stopPropagation();

        var vatNumberValidity = vatNumberIsValid( $('#proformaTaxNumber input').val() );
        if( $('#proformaTaxNumber input').val() != '' && vatNumberValidity.result !== true )
        {
            var error_message = 'The VAT Tax Number you supplied doesn\'t ' +
                                'to be valid. Please enter a valid Tax '    +
                                '<br /><br />number and try press continue.'+
                                'Alternatively, please press continue, '    +
                                'please note, without a valid Tax Number '  +
                                'you will be charged the full local tax rate';

            $('#loggedin .errorBox .errorTitle').text('Notice');
            $('#loggedin .errorBox .errorMessage').html(error_message);
            $('#loggedin .errorBox').removeClass('alert-info').fadeIn('fast');
            return false;
        }

        // Check the voucher in the database
        $.ajax({
            type: 'GET',
            cache: false,
            url: '/course/booking/',
            data:      'cid='
                     + $('#findcid').data('id')
                     + '&eid='
                     + $('#findcid').data('eventid')
                     + '&vatcode='
                     + $('#proformaTaxNumber input').val()
                     + '&discountcode='
                     + $('#discountCode').val(),
            dataType: 'json',
            success: function(data){
                if( data.result == true )
                {
                    // display "Voucher Approved" message in status box
                    $('#loggedin .errorBox .errorTitle')
                        .text(data.errorTitle)
                        .css({ 'color': '#159749' });

                    $('#loggedin .errorBox .errorMessage')
                        .css({ 'color': '#159749' });

                    $('#loggedin .errorBox')
                        .fadeIn('fast');

                    $('#paymentOptions').slideUp('fast', function(){
                        $('#paymentOptions').html('');
                    });
                }
                else
                {
                    $('#loggedin .errorBox .errorTitle').text(data.errorTitle);
                    $('#loggedin .errorBox').fadeIn('fast');

                    // Re-Enable other payment options
                    $('#voucherCode').removeAttr('disabled');
                }

                $('#loggedin .errorBox .errorMessage').html(data.errorMessage);
            },
            beforeSend: function(){
                // Disable other payment options while voucher is loading
                $('#voucherCode').attr( 'disabled', 'disabled' );

                $('#loggedin .errorBox .errorTitle').text('');
                $('#loggedin .errorBox .errorMessage')
                    .html('<div id="loading"><span>Loading</span>'
                        + '<span class="l-1"></span>'
                        + '<span class="l-2"></span>'
                        + '<span class="l-3"></span>'
                        + '<span class="l-4"></span>'
                        + '<span class="l-5"></span>'
                        + '<span class="l-6"></span></div>');


                    $('#loggedin .errorBox')
                        .fadeIn('fast');

                $('a#proforma').attr('href', 'javascript:void(0);').data('sent', true);
            }
        });
    });

    //Disable Dropdown Menu for Course Search Facility
    //If online is selected, disable location choice
    $('.filter_type').live( 'change', function(event) {

       var course_type = $(this).val();

        if( course_type == 'online' ) {
            $('.disable_location').attr('disabled', true );
        } else {
            $('.disable_location').removeAttr('disabled');
        }
    });

    // Only run below if we're on the booking page
    if( $('#bookingForm').length )
    {
            $('#bookingLogin').click( function(e){
            e.preventDefault();
            $.ajax({
                type: 'GET',
                cache: false,
                url: '/course/login/',
                data: $('#demoForm').serialize(),
                dataType: 'json',
                success: function(data) {
                    var address = [],
                        message = '';

                    if( typeof data == 'object' )
                    {
                        if( data.result == true )
                        {
                            if( data.user.length <= 0 )
                            {
                                generateModalWindow();
                                return false;
                            }

                            message = data.message;

                            address.push( data.user.firstname + ' ' + data.user.lastname );
                            address.push( data.user.Pos );
                            address.push( data.user.Co );
                            address.push( data.user.address ); // 1, 2 & 3
                            address.push( data.user.city ); // Town / City
                            address.push( data.user.Zip ); // Zip / Postal
                            address.push( data.user.country );
                            /**

                            Preferred tel,
                            state/county,
                            confirm email,**/

                            address = address.clean("");

                            $('fieldset#loggedin address').html( address.join('<br />') );
                        }
                        else
                        {
                            message = data.message;
                        }

                        $('#loginMessage').html(message).fadeIn('slow');

                        setTimeout( function(){

                            $('#loginMessage').fadeOut('slow', function(){
                                $('#loginMessage').html('');
                            });

                            if( data.result === true )
                            {
								window.loggedin = true // added by jinit patel  - set loggedin true after login
                                $("#demoForm").formwizard("next");
                            }
                        }, 2000); // End timeout
                    }
                }
            });
        }); // End Booking Login Click Event


        $('select[name=regCountry]').change(function(){
            if( $(this).val() == 'US' )
            {
                $('select[name=regState]').removeAttr('disabled');
            }
            else
            {
                $('select[name=regState]').attr('disabled', 'disabled');
            }
        });

        $('.countryCode').mask('+9?999');
    }

    /*if( $('#demoForm').length )
    {
        // binds form submission and fields to the validation engine
        $('#demoForm').validationEngine();
    }*/
 });

//Placeholder Compatibility for search
$('input').placeholder();

//Redeem discounts
function redeemDiscounts( discountValue, discountProcessing, discountIsDisabled, discountField )
{
    // Idenfity that it's of valid length
    if( discountValue.length != 5)
    {
        //Error
    }
    else
    {
        if( !discountProcessing && !discountIsDisabled )
        {
            discountProcessing = true;

            // Check the discount code in the database
            $.ajax({
                type: 'GET',
                cache: false,
                url: '/course/discount/',
                data: 'did=' + discountValue + '&cid='
                             + $('#findcid').data('id')
                             + '&eid='
                             + $('#findcid').data('eventid'),
                dataType:'json',
                success: function(data) {
                    if( data.transaction == true )
                    {
                        discountIsDisabled = true;

                        //display "Discount Approved" message in status box
                        $('#loggedin .errorBox .errorTitle')
                            .text('Discount Accepted!')
                            .css({ 'color': '#159749' });

                        $('#loggedin .errorBox .errorMessage')
                            .css({ 'color': '#159749' });

                        $('#loggedin .errorBox')
                            .fadeIn('fast');

                        discountField
                            .css({ border: '1px solid #0f0' })
                            .attr("disabled", "disabled");

                        discountField
                            .css({
                            'background-image': 'url(/extension/dcpro/design/dcpro/images/design/pos.png)',
                            'background-repeat': 'no-repeat',
                            'background-position': '96% 10px'
                        });

                        //Change Course Fee
                        var courseFee = data.data;
                        $('#discountFee')
                            .html(courseFee)
                            .css({ 'color': 'blue' });
                    }
                    else
                    {
                        $('#loggedin .errorBox .errorTitle').text(data.errorTitle);
                        $('#loggedin .errorBox').fadeIn('fast');

                        //display "Discount Error" message in status box
                        discountField.css({ border: '1px solid #f00' });
                        discountField.css({
                            'background-image': 'url(/extension/dcpro/design/dcpro/images/design/neg.png)',
                            'background-repeat': 'no-repeat',
                            'background-position': '96% 10px'
                        });
                    }

                    $('#loggedin .errorBox .errorMessage').html(data.errorMessage);
                    discountProcessing = false;
                },
                beforeSend: function(){

                    $('#loggedin .errorBox .errorMessage')
                        .html('<div id="loading"><span>Loading</span>'
                            + '<span class="l-1"></span>'
                            + '<span class="l-2"></span>'
                            + '<span class="l-3"></span>'
                            + '<span class="l-4"></span>'
                            + '<span class="l-5"></span>'
                            + '<span class="l-6"></span></div>');

                    $('#loggedin .errorBox')
                        .fadeIn('fast');

                    discountField.css({
                        'background-image': 'url(/extension/dcpro/design/dcpro/images/design/throbber.gif)',
                        'background-position': '100% -17px'
                    });
                }
            });
        }
    }
}

//Attempts to redeem voucher based on passed conditions
function redeemVoucher( voucherValue, voucherProcessing, voucherIsDisabled, voucherField )
{
    // Identify that it's of valid length
    if( voucherValue.length != 16 ){
        // Error
    }
    else
    {
        if( !voucherProcessing && !voucherIsDisabled )
        {
            voucherProcessing = true;

            // Check the voucher in the database
            $.ajax({
                type: 'GET',
                cache: false,
                url: '/course/voucher/',
                data: 'vid=' + voucherValue + '&cid='
                             + $('#findcid').data('id')
                             + '&eid='
                             + $('#findcid').data('eventid'),
                dataType: 'json',
                success: function(data){
                    if( data.transaction == true )
                    {
                        voucherIsDisabled = true;

                        // display "Voucher Approved" message in status box
                        $('#loggedin .errorBox .errorTitle')
                            .text('Voucher Accepted!')
                            .css({ 'color': '#159749' });

                        $('#loggedin .errorBox .errorMessage')
                            .css({ 'color': '#159749' });

                        $('#loggedin .errorBox')
                            .fadeIn('fast');

                        voucherField
                            .css({ border: '1px solid #0f0' })
                            .attr("disabled", "disabled");

                        voucherField
                            .css({
                            'background-image': 'url(/extension/dcpro/design/dcpro/images/design/pos.png)',
                            'background-repeat': 'no-repeat',
                            'background-position': '96% 10px'
                        });

                        $('#paymentOptions').slideUp('fast', function(){
                            $('#paymentOptions').html('');
                        });
                    }
                    else
                    {
                        $('#loggedin .errorBox .errorTitle').text(data.errorTitle);
                        $('#loggedin .errorBox').fadeIn('fast');

                        // display "Voucher Error" message in status box
                        voucherField.css({ border: '1px solid #f00' });
                        voucherField.css({
                            'background-image': 'url(/extension/dcpro/design/dcpro/images/design/neg.png)',
                            'background-repeat': 'no-repeat',
                            'background-position': '96% 10px'
                        });

                        // Re-Enable other payment options
                        $('a#proforma').data('sent', false);
                    }

                    $('#loggedin .errorBox .errorMessage').html(data.errorMessage);
                    voucherProcessing = false;
                },
                beforeSend: function(){
                    // Disable other payment options while voucher is loading
                    $('a#proforma').data('sent', true);

                    $('#loggedin .errorBox .errorMessage')
                        .html('<div id="loading"><span>Loading</span>'
                            + '<span class="l-1"></span>'
                            + '<span class="l-2"></span>'
                            + '<span class="l-3"></span>'
                            + '<span class="l-4"></span>'
                            + '<span class="l-5"></span>'
                            + '<span class="l-6"></span></div>');

                    $('#loggedin .errorBox')
                        .fadeIn('fast');

                    voucherField.css({
                        'background-image': 'url(/extension/dcpro/design/dcpro/images/design/throbber.gif)',
                        'background-position': '100% -17px'
                    });
                }
            });
        }
    }
}

function generateModalWindow()
{

    //if close button is clicked
    $('#updateProfile .window .close').click(function (e) {
        //Cancel the link behavior
        e.preventDefault();

        $('#mask').hide();
        $('.window').hide();
    });

    //if mask is clicked
    $('#updateProfile #mask, #dialog .closeButton').click(function () {
        $('#mask').hide();
        $('.window').hide();
    });

    $(window).resize(function () {

        var box = $('#updateProfile #boxes .window');

        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();

        //Set height and width to mask to fill up the whole screen
        $('#updateProfile #mask').css({'width':maskWidth,'height':maskHeight});

        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();

        //Set the popup window to center
        box.css('top',  winH/2 - box.height()/2);
        box.css('left', winW/2 - box.width()/2);

    });

    //Get the A tag
    var id = '#updateProfile #dialog';

    //Get the screen height and width
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();

    //Set heigth and width to mask to fill up the whole screen
    $('#updateProfile #mask').css({'width':maskWidth,'height':maskHeight});

    //transition effect
    $('#updateProfile #mask').fadeIn(1000);
    $('#updateProfile #mask').fadeTo("slow",0.8);

    //Get the window height and width
    var winH = $(window).height();
    var winW = $(window).width();

    //Set the popup window to center
    $(id).css('top',  winH/2-$(id).height()/2);
    $(id).css('left', winW/2-$(id).width()/2);

    //transition effect
    $(id).fadeIn(2000);
}

function generateRegistrationPopup()
{
    //if close button is clicked
    $('#regPopup .window .close').click(function (e) {
        //Cancel the link behavior

        $('#mask').hide();
        $('.window').hide();
    });

    //if mask is clicked
    $('#regPopup #mask, #dialog .closeButton').click(function () {
        $('#mask').hide();
        $('.window').hide();
    });

    $(window).resize(function () {

        var box = $('#regPopup #boxes .window');

        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();

        //Set height and width to mask to fill up the whole screen
        $('#regPopup #mask').css({'width':maskWidth,'height':maskHeight});

        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();

        //Set the popup window to center
        box.css('top',  winH/2 - box.height()/2);
        box.css('left', winW/2 - box.width()/2);

    });

    //Get the A tag
    var id = '#regPopup #dialog';

    //Get the screen height and width
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();

    //Set heigth and width to mask to fill up the whole screen
    $('#regPopup #mask').css({'width':maskWidth,'height':maskHeight});

    //transition effect
    $('#regPopup #mask').fadeIn(1000);
    $('#regPopup #mask').fadeTo("slow",0.8);

    //Get the window height and width
    var winH = $(window).height();
    var winW = $(window).width();

    //Set the popup window to center
    $(id).css('top',  winH/2-$(id).height()/2);
    $(id).css('left', winW/2-$(id).width()/2);

    //transition effect
    $(id).fadeIn(2000);
}