$(document).ready(function(){

	$("#hamburgerMenuHolder").on('click', function(){
		$(this).toggleClass("change");
		$("#nav").toggleClass("navToggle");
	});



/*==================================================
           VALIDATION FORM FROM HERE
===================================================*/


$('#name,#messageContactUs,#email').on('input',function(){
    var nameFromForm = $('#name').val();
    var messageForm = $('#messageContactUs').val();
    var userInput = $('#email').val();
    var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    if(nameFromForm != "")
        {
           $(':input[type="submit"]').prop('disabled', false);
        }
    if(messageForm != "")
        {
           $(':input[type="submit"]').prop('disabled', false);
        }
     if(pattern.test(userInput))
        {
             $(':input[type="submit"]').prop('disabled', false);
        }
});


/*============ SUBMIT BUTTON ============ */

$('#submitFormButton').on('click', function(){
    var name = $('#name').val();
    var enquiry = $('#messageContactUs').val();
    var userInput = $('#email').val();
    var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    if(name == "")
        {
             $('#labelErrorNameTextRed').css('color', '#ef5656');
             $('#contactFormJMCtext').css('margin-top', '66px');
             $(':input[type="submit"]').prop('disabled', true);
             $('#name').css('display', 'block');
             $('#errorMessage, #successFormMessagePHP').css('display', 'none');
        }

    if(enquiry == "")
        {
            $('#labelErrorEnquiryTextRed').css('color', '#ef5656');
            $('#contactFormJMCtext').css('margin-top', '66px');
            $(':input[type="submit"]').prop('disabled', true);
            $('#requiredFieldsMessage').css('display', 'block');
             $('#errorMessage, #successFormMessagePHP').css('display', 'none');
        }

    if(!pattern.test(userInput))
    {
            $('#labelErrorEmailTextRed').css('color', '#ef5656');
             $('#contactFormJMCtext').css('margin-top', '66px');
             $(':input[type="submit"]').prop('disabled', true);
             $('#requiredFieldsMessage').css('display', 'block');
             $('#errorMessage, #successFormMessagePHP').css('display', 'none');
    }

    if(name != "" && enquiry != "")
    {
        if(result == resultFromForm && pattern.test(userInput))
            {
                $(':input[type="submit"]').prop('disabled', false);
                $('#contactFormJMCtext').css('margin-top', '66px');
                $('#requiredFieldsMessage').css('display', 'none');
                $('#successFormMessage').css('display', 'block');
                $('#errorMessage').css('display', 'none');
            }
    }

});


}());