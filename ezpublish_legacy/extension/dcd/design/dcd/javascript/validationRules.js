jQuery(function(){

	//Download Prospectus form
	jQuery("#firstname").validate({ //Name
        expression: "if ( VAL.length > 0 ) return true; else return false;",
        message: getString('missing-mess')+' '+getString('f-name'),
        error_class: 'validationErrors'
    });
		jQuery("#last_name").validate({ //Name
        expression: "if ( VAL.length > 0 ) return true; else return false;",
        message: getString('missing-mess')+' '+getString('surname'),
        error_class: 'validationErrors'
    });

	jQuery("#company").validate({ //Name
        expression: "if ( VAL.length > 0 ) return true; else return false;",
        message: getString('missing-mess')+' '+getString('c-name'),
        error_class: 'validationErrors'
    });

	jQuery("#position").validate({ //Name
        expression: "if ( VAL.length > 0 ) return true; else return false;",
        message: getString('missing-mess')+' '+getString('position'),
        error_class: 'validationErrors'
    });
	jQuery("#email").validate({ //Name
        expression: "if ( VAL.length > 0 ) return true; else return false;",
        message: getString('missing-mess')+' '+getString('email'),
        error_class: 'validationErrors'
    });
	jQuery("#email").validate({ //Name
        expression: "if ( VAL.match(/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/) ) return true; else return false;",
        message: getString('email-mess'),
        error_class: 'validationErrors'
    });
	jQuery("#telephone").validate({ //Name
        expression: "if ( VAL.length > 0 ) return true; else return false;",
        message: getString('missing-mess')+' '+getString('telephone'),
        error_class: 'validationErrors'
    });
	jQuery("#mobile").validate({ //Name
        expression: "if ( VAL.length > 0 ) return true; else return false;",
        message: getString('missing-mess')+' '+getString('mobile'),
        error_class: 'validationErrors'
    });
	    jQuery("#country").validate({
        expression: "if ( VAL.length > 0 ) return true; else return false;",
        message: getString('missing-mess')+' '+getString('type'),
        error_class: 'validationErrors'
    });

});