$().ready(function() {
	
	var entity_id = getCookie( 'entity_id' );
	if( entity_id != null){
		/*
		 * Display information on Add to Cart buttons
		 * For courses and Calendar
		*/
		
		// For classroom course pages
		$('.localised_course_booking_button .button').css('background', 'grey');
	 	$('.localised_course_booking_button  .entity_' + entity_id).css('background', 'green');
		
	 	
	 	$('#current_locations_table .entity_line').hide();
	 	$('#current_locations_table .entity_line_' + entity_id).show();
	 	$('#other_locations_table .entity_line_' + entity_id).remove();

	 	if( $('#current_locations_table .entity_line_' + entity_id).size() == 0) {
	 		$('#current_locations_table').hide();
	 	}
	 	
	 	if( $('#other_locations_table .entity_line' ).size() >= 0) {
	 		$('#other_locations_table').show();
	 	}
	 	
	 	// Calendar Pages
	 	$('.calendar_line .AddButton').hide();
	 	$('.calendar_line .AddAndClearButton').show();
	 	$('.calendar_line_' + entity_id + ' .AddButton').css('background', 'green').show();
	 	$('.calendar_line_' + entity_id + ' .AddButton').show();
	 	$('.calendar_line_' + entity_id + ' .AddAndClearButton').hide();
	 	
	}
	
	if( $('.localised_course_booking_button .button').size() == 0 ){
		$('#no_locations').show();
		$('#current_locations_table, #other_locations_table').hide();
	}
	
	$('#id_accept_terms').bind('change', checkTermsAndConditionsCheckbox);
	
	checkTermsAndConditionsCheckbox();
	
	// load tooltips
	
	 $(".AddAndClearButton[title]").tooltip(  );
	 
	// Online Courses
	// If no country selected then display choose country dialog
	if( $.cookie( 'entity_id' ) == null){
		
				$('#course_meta .online_course .content-action input.button').click(function(){
					
					$.colorbox({html:$('#language_html_block').html() });
					
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
					
					return false;
				})
				
				$('#course_meta .online_course .content-action input.button').tooltip( );
		
	}
	 
	// enrolment buttons
	$('.enrol_information_block .register_button').click(function(){
		
		$.colorbox({
					html:		$('#registration_html').html(),
					onComplete:	function(){ 
									registration_form()
								}

					});
		
		$( '.' + $(this).attr('id') ).show();
				
	});
	
	enrolstudent_button();
	
	$('#id_create_account').bind('change', function(){
		
		if( $(this).is(':checked')) {
			$(".login_password_row").show();
		}
		else{
			$(".login_password_row").hide();
		};
	});
	
	
	
	$('#billing_address_form #userregister input[name=EMail]').blur( function(){
		
		 	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
		    if( $(this).val() == '' || !regex.test( $(this).val() ) )
		            return false;
	
		    $(this).css({ border: '1px solid #0f0' });
		    
		    $.ajax({
		        url: '/dcdshop/checkaccount/' + $(this).val(),
		        type: 'post',
		        dataType: 'json',
		        success: function( data ){
		        	
		        	if( data.result == 'true' )
		            {
		        		 $('.email_message').hide();
		            	 $('#existing_user_message').show();
		            	 $(this).css({ border: '1px solid #0f0' });
		            }
		        	else{
		        		$('.email_message').hide();
		        		$('#new_user_message').hide();
		        		$('#id_create_account').attr('checked', 'checked');
		        		$('.login_password_row').show();
		                $(this).css({ border: '1px solid #0f0' });
		        	}
		        }
		    });
	});
	
	$("#loginform").validate();
	$('#forgotpassword').validate();
	$("#userregister").validate();

});


function enrolstudent_button(){
	
	$('.enrol_student_form').submit( function(){

		var form_id = $(this).attr('id');
		
			$.ajax({
	            type: 'POST',
	            cache: false,
	            url: '/dcdshop/enrolstudent/',
	            data: $(this).serialize(),
	            dataType: 'json',
	            success: function(data) {
	        
	                if( data.message != undefined && data.message != null)
	                {
	                    if(data.result == 'true'){
	                    	// if succes
		                	// update full block
		                 	$( '#' + form_id ).html( data.message );	 
		                }
	                    else
                    	{
	                    	$( '#' + form_id ).find('.warning_message').html( data.message );
                    	}
                    
	                }
	                
	                return false;
	            }
	        });
			
			return false;
	
	});
	
	$('#cboxLoadedContent input[name=enrolmail]').blur( function(){
		
	    if( $(this).val() == '' )
	            return false;
	
	    $.ajax({
	        url: '/dcdshop/enrolstudent/',
	        type: 'post',
	        data: 'checkemail=' + escape( $(this).val() ),
	        dataType: 'json',
	        success: function( data ){
	        	
	        	// email exists
	        	if( data.result == 'true' )
	            {
	            	 $('#regEmailNotif').fadeOut();
	            	 $(this).closest('div').find('i').removeClass('iconeg, icopos').addClass( 'icopos' );
	                 $(this).css({ border: '1px solid #0f0' });
	            }
	        	else{
	        		
	        		if(data.error != null){
	        			$('#regEmailNotif').hide().html( data.error ).fadeIn();
	        		}
	             	
	                $(this).closest('div').find('i').removeClass('iconeg, icopos').addClass( 'iconeg' );
	                $(this).css({ border: '1px solid #f00' });
	        	}
	        }
	    });
	});
	
}

function registration_form(){
	
	   /**
	    *  BEGIN Registration 
	    **/
     var passwordField       = $('#cboxLoadedContent input[name=regpassword]'),
         passwordConfField   = $('#cboxLoadedContent input[name=regconfpassword]'),
         emailField          = $('#cboxLoadedContent input[name=regemail]'),
         emailConfField      = $('#cboxLoadedContent input[name=regconfemail]'),
         emailMatch          = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

     function fieldMatch( fieldname, match )
     {
         $('#cboxLoadedContent input[name=' + fieldname + ']').closest('div').find('i').removeClass('iconeg, icopos');
         $('#cboxLoadedContent input[name=' + fieldname + ']').closest('div').find('i').addClass( 'ico' + (
             match == true ? 'pos' : 'neg'
         ));

         $('#cboxLoadedContent input[name=' + fieldname + ']').css({ border: '1px solid #' + (match == true ? '0f0' : 'f00') });
     }

     /**
      *  Add check for password's both matching
      */
     $('#cboxLoadedContent input[name=regpassword], input[name=regconfpassword]').keyup(function(){
        if( passwordConfField.val() == '' || passwordField.val() != passwordConfField.val() )
        {
             fieldMatch( 'regpassword', false);
        }
        else
        {
             fieldMatch( 'regpassword', true);
        }
     });

     $('#cboxLoadedContent input[name=regemail], input[name=regconfemail]').keyup(function(){
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

     $('#cboxLoadedContent input[name=regemail]').blur( function(){
         if( $('#cboxLoadedContent input[name=regemail]').val() == '' )
                 return false;

         $.ajax({
             url: '/course/register/',
             type: 'get',
             data: 'email=' + escape( $('#cboxLoadedContent input[name=regemail]').val() ),
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
	
	
	$('.registration_lightbox').submit( function(e){
		
		var form_id = $(this).attr('id');
		
        /**
         *  Add check for both email address' matching
         */
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

                var field = $('#cboxLoadedContent input[name=' + requiredFields[i] + ']');

                if( field.attr('value') == '' )
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
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(data) {
                    	
                        var address = [],
                            message = '';

                        if( typeof data == 'object' )
                        {
                        
                        	if( data.message != undefined && data.message != null)
          	                {
                        		$( '#cboxLoadedContent #lightbox_warning_message').html( data.message );
                        		
          	                    if(data.result == true){
          		                
          	                    	$('input[type=email]').attr('value', $('#cboxLoadedContent  #regemail').attr('value') ).css('box-shadow', '0 0 5px green');
	          		                $(this).data('timeout', setTimeout(function(){
	          		                	 $.colorbox.close();
	          		                }, 2000 ));
          		                 	
          		                }
                              
          	                }
                        	
                        }
                        
                        if( data.error == 'Existing Username' )
                        {
                            alert(data.message);
                        }
                        
                    }
                });
            }
            // 	End Register submit Event
    /** END Registration **/
		 
			return false;
	});
	
	
	
	
}



function checkTermsAndConditionsCheckbox(){ 
	
	if( $('#id_accept_terms').is(':checked')) {
		// 'terms accepted'
		$(".shop-confirmorder .buttonblock .button")
				.attr('onclick', '')
				.attr('style', 'background:green');
	}
	else{
		// 'terms not accepted'
		$(".shop-confirmorder .buttonblock .button")
					.attr( 'onclick', 'alert(\'' + $.trim( $('#message-validate_tc').html() ) + '\'); return false;')
					.attr('style', 'background:grey');
		
	};
	
}

function getCookie(c_name)
{
var i,x,y,ARRcookies=document.cookie.split(";");
for (i=0;i<ARRcookies.length;i++)
{
  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  x=x.replace(/^\s+|\s+$/g,"");
  if (x==c_name)
    {
    return unescape(y);
    }
  }
}

// create custom animation algorithm for jQuery called "bouncy"
$.easing.bouncy = function (x, t, b, c, d) {
	    var s = 1.70158;
	    if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
	    return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
}

// create custom tooltip effect for jQuery Tooltip
$.tools.tooltip.addEffect(
    "bouncy",

// opening animation
function(done) {
    this.getTip().animate({top: '+=15'}, 500, 'bouncy', done).show();
},

// closing animation
function(done) {
    this.getTip().animate({top: '-=35'}, 500, 'bouncy', function()  {
	$(this).hide();
	done.call();
    });
}
);
