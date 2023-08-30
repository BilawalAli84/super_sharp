jQuery( document ).ready(function() {

    // new WOW().init();
    var wow = new WOW(
      {
        boxClass:     'wow',
        animateClass: 'animated',
        mobile:       true,
      }
    );
    wow.init();

    jQuery('.validation_error').hide();
    jQuery('.email_success').hide();
    jQuery( "#appoinment_book" ).on( "click", function(e) {
      e.preventDefault();
      var appointment_name = jQuery("#appointment_name").val();
      var appointment_email = jQuery("#appointment_email").val();
      var appointment_monumber = jQuery("#appointment_monumber").val();
      var appointment_query = jQuery("#appointment_query").val();

      if(appointment_name == '' || appointment_email == '' || appointment_monumber == '' || appointment_query == ''){
          jQuery('.validation_error').html("All field are required.").show();
          jQuery('.email_success').html("").hide();
      }else{
        jQuery('.validation_error').html('').hide();
        jQuery('.email_success').html('Email sent.').show();
          jQuery.ajax({
          type: 'post',
          url: goldy_mex_appoinment.ajaxurl,
          data: {action: "contant_appoinment" , 
                appointment_name: appointment_name, 
                appointment_email: appointment_email, 
                appointment_monumber: appointment_monumber, 
                appointment_query: appointment_query
              },
          success: function (data) {

          }
        });
        jQuery('.appoinment_reset')[0].reset();
      }
    });
    
});