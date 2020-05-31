$('document').ready(function(){

    var userid_state = false;
    //var email_state = false;

    $('#userid').on('blur', function(){
     var userid = $('#userid').val();
     if (userid == '') {
         userid_state = false;
         return;
     }
     $.ajax({
       url: 'signup.php',
       type: 'post',
       data: {
           'userid_check' : 1,
           'userid' : userid,
       },
       success: function(response){
         if (response == 'taken' ) {
             username_state = false;
             $('#userid').parent().removeClass();
             $('#userid').parent().addClass("form_error");
             $('#userid').siblings("span").text('Sorry... Username already taken');
         }else if (response == 'not_taken') {
             username_state = true;
             $('#userid').parent().removeClass();
             $('#userid').parent().addClass("form_success");
             $('#userid').siblings("span").text('Username accepted');
         }
       }
     });
    });

    //  $('#email').on('blur', function(){
    //     var email = $('#email').val();
    //     if (email == '') {
    //         email_state = false;
    //         return;
    //     }
    //     $.ajax({
    //      url: 'signup.php',
    //      type: 'post',
    //      data: {
    //          'email_check' : 1,
    //          'email' : email,
    //      },
    //      success: function(response){
    //          if (response == 'taken' ) {
    //          email_state = false;
    //          $('#email').parent().removeClass();
    //          $('#email').parent().addClass("form_error");
    //          $('#email').siblings("span").text('Sorry... Email already taken');
    //          }else if (response == 'not_taken') {
    //            email_state = true;
    //            $('#email').parent().removeClass();
    //            $('#email').parent().addClass("form_success");
    //            $('#email').siblings("span").text('Email available');
    //          }
    //      }
    //     });
    // });
   
    $('#signup_btn').on('click', function(){

        var username = $('#userid').val();
        //var email = $('#email').val();
        var password = $('#password').val();

        if (userid_state == false) {
         $('#error_msg').text('Fix the errors in the form first');
       }else{
         // proceed with form submission
         $.ajax({
             url: 'signup.php',
             type: 'post',
             data: {
                 'save' : 1,
                 //'email' : email,
                 'userid' : userid,
                 'password' : password,
             }
            //  success: function(response){
            //      alert('user saved');
            //      $('#userid').val('');
            //      $('#email').val('');
            //      $('#password').val('');
            //  }
         });
        }
    });
   });