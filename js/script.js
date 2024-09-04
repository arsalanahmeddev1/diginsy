
$(document).ready(function() {
  $("#contact-form").on("submit", function(event){
       event.preventDefault();
       
       window.location.href = 'https://diginsy.com/thankyou';
   });

   $("#contact-us-form").on("submit", function(event){
       event.preventDefault();
       
       window.location.href = 'https://diginsy.com/thankyou';
   });
   
   // Not in working 
   $("#form_one").on('submit', function(e){
       e.preventDefault();
       var firstname = $("#form-one-firstname").val();
       var lastname = $("#form-one-lastname").val();
       var email = $("#form-one-email").val();
       var phone = $("#form-one-phone").val();
       var companyname = $("#form-one-companyname").val();

       // Disable the submit button to prevent multiple submissions
       $("#form-one-btn").prop("disabled", true);
       $("#form-one-btn").html('Please wait...');

       // AJAX form submission
       $.ajax({
           type: "POST",
           url: "form_one.php",
           data: {
               firstname: firstname,
               lastname: lastname,
               email: email,
               phone: phone,
               companyname: companyname
           },
           dataType: "json",
           success: function(response) {
               $("#form-one-btn").prop("disabled", false);
               $("#form-one-btn").html('Submit');
               if (response.status) {
                   $("#form_one")[0].reset();
                   $.toast({
                       heading: 'Submitted',
                       text: 'Your form has been submitted!',
                       showHideTransition: 'fade',
                       icon: 'success',
                       position: 'top-right'
                   });
                   
               } else {
                   var error = "";
                   // Display alert for the specific error that occurred
                   if (response.firstname_err) {
                       error = response.firstname_err;
                   } else if (response.lastname_err) {
                       error = response.lastname_err;
                   } else if (response.email_err) {
                       error = response.email_err;
                   } else if (response.phone_err) {
                       error = response.phone_err;
                   } else if (response.companyname_err) {
                       error = response.companyname_err;
                   }

                   $.toast({
                       heading: 'Validation Error',
                       text: error,
                       showHideTransition: 'fade',
                       icon: 'info',
                       position: 'top-right'
                   });
               }
           },
           complete: function() {
               // Re-enable the submit button after AJAX request is complete
               $("#form-one-btn").prop("disabled", false);
               $("#form-one-btn").html('Submit');
           }
       });
   });

   $("#form_two").on('submit', function(e){
       e.preventDefault();
       var firstname = $("#form-two-firstname").val();
       var email = $("#form-two-email").val();
       var phone = $("#form-two-phone").val();

       // Disable the submit button to prevent multiple submissions
       $("#form-two-btn").prop("disabled", true);
       $("#form-two-btn").html('Please wait...');
       // AJAX form submission
       $.ajax({
           type: "POST",
           url: "form_two.php",
           data: {
               firstname: firstname,
               email: email,
               phone: phone,
           },
           dataType: "json",
           success: function(response) {
               $("#form-two-btn").prop("disabled", false);
               $("#form-two-btn").html('Submit');
               if (response.status) {
                   $("#form_two")[0].reset();
                   $.toast({
                       heading: 'Submitted',
                       text: 'Your form has been submitted!',
                       showHideTransition: 'fade',
                       icon: 'success',
                       position: 'top-right'
                   });
                   
               } else {
                   var error = "";
                   // Display alert for the specific error that occurred
                   if (response.firstname_err) {
                       error = response.firstname_err;
                   } else if (response.email_err) {
                       error = response.email_err;
                   } else if (response.phone_err) {
                       error = response.phone_err;
                   }

                   $.toast({
                       heading: 'Validation Error',
                       text: error,
                       showHideTransition: 'fade',
                       icon: 'info',
                       position: 'top-right'
                   });
               }
           },
           complete: function() {
               // Re-enable the submit button after AJAX request is complete
               $("#form-two-btn").prop("disabled", false);
               $("#form-two-btn").html('Submit');
           }
       });
   });

   $("#form_three").on('submit', function(e){
       e.preventDefault();
       var firstname = $("#form-three-firstname").val();
       var detail = $("#form-three-detail").val();
       var email = $("#form-three-email").val();
       var phone = $("#form-three-phone").val();
     
       // Disable the submit button to prevent multiple submissions
       $("#form-three-btn").prop("disabled", true);
       $("#form-three-btn").html('Please wait...');

       // AJAX form submission
       $.ajax({
           type: "POST",
           url: "form_three.php",
           data: {
               firstname: firstname,
               detail: detail,
               email: email,
               phone: phone
           },
           dataType: "json",
           success: function(response) {
               $("#form-three-btn").prop("disabled", false);
               $("#form-three-btn").html('Submit');
               if (response.status) {
                   $("#form_three")[0].reset();
                   $.toast({
                       heading: 'Submitted',
                       text: 'Your form has been submitted!',
                       showHideTransition: 'fade',
                       icon: 'success',
                       position: 'top-right'
                   });
                   
               } else {
                   var error = "";
                   // Display alert for the specific error that occurred
                   if (response.firstname_err) {
                       error = response.firstname_err;
                   } else if (response.lastname_err) {
                       error = response.lastname_err;
                   } else if (response.email_err) {
                       error = response.email_err;
                   } else if (response.phone_err) {
                       error = response.phone_err;
                   } 

                   $.toast({
                       heading: 'Validation Error',
                       text: error,
                       showHideTransition: 'fade',
                       icon: 'info',
                       position: 'top-right'
                   });
               }
           },
           complete: function() {
               // Re-enable the submit button after AJAX request is complete
               $("#form-three-btn").prop("disabled", false);
               $("#form-three-btn").html('Submit');
           }
       });
   });
});


/* <<<<<<<<<<<<<<<<<<--------------------- script  js end --------->>>>>>>>>>>>>>> */