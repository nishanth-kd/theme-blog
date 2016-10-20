$(document).ready(function (){

	$('body').on('click', '.dynamic-form-submit', function () {
		var form = $( "#" + $(this).attr('data-form'));
		validate(form, submit);
	});

});

function submit(form) {

	$.ajax({
		type: 'POST',
        url: ajaxurl,
        data: getFormData(form),
        success: function(response) {
        	console.log(response);
        },
    });

}

function getFormData(form) {

	return form.serialize();

}

function validate(form, callback){

	/* TODO : Validate Form Data */

	callback(form);

}