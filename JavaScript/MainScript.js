$(document).ready(function(){

  $("#hamburgerMenuHolder").on('click', function(){
    $(this).toggleClass("change");
    $("#nav").toggleClass("navToggle");
  });

  $("#arrowDownHolder").on('click', function(){
        $('html,body').animate({
            scrollTop: $('#serviceHolder').offset().top
        },1000);
     });

     $(".blackBorderNoBackgroundButton, #contactButtonGreen").on('click', function(){
           $('html,body').animate({
               scrollTop: $('#contactFormHolder').offset().top
           },1000);
      });

      $("#headerPortfolioButton").on('click', function(){
            $('html,body').animate({
                scrollTop: $('#portfolioHolder').offset().top
            },1000);
       });




       /*================================================
           VALIDATION FORM FROM HERE
===================================================*/


$('#name,#messageContactUs,#email').on('input',function(){
    var nameFromForm = $('#name').val();
    var messageForm = $('#messageContactUs').val();
    var resultFromForm = $('#eqbox').val();
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
             $('#name').addClass('placeholderText');
             $(':input[type="submit"]').prop('disabled', true);
             $('#name').css('display', 'block');
             //$('#contactForm').css('padding-bottom', '16px');
             $('#errorMessage, #successFormMessagePHP').css('display', 'none');
        }

    if(enquiry == "")
        {
            $('#messageContactUs').addClass('placeholderText');
            $(':input[type="submit"]').prop('disabled', true);
            $('#requiredFieldsMessage').css('display', 'block');
             //$('#contactForm').css('padding-bottom', '16px');
             $('#errorMessage, #successFormMessagePHP').css('display', 'none');
        }

    if(!pattern.test(userInput))
    {
            $('#email').addClass('placeholderText');
             $(':input[type="submit"]').prop('disabled', true);
             $('#requiredFieldsMessage').css('display', 'block');
             //$('#contactForm').css('padding-bottom', '16px');
             $('#errorMessage, #successFormMessagePHP').css('display', 'none');
    }

    if(name != "" && enquiry != "")
    {
        if(result == resultFromForm && pattern.test(userInput))
            {
                $(':input[type="submit"]').prop('disabled', false);
                $('#requiredFieldsMessage').css('display', 'none');
                //$('#contactForm').css('padding-bottom', '16px');
                $('#successFormMessage').css('display', 'block');
                $('#errorMessage').css('display', 'none');
            }
    }

});




}());
