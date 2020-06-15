//Ajax Call for the sign up form
//Once the form is submitted
$("#signUpForm").submit(function (event) {
  //prevent default php processing(action attribute file or the file where the form is located)
  event.preventDefault();
  //collect user inputs
  var datatopost = $(this).serializeArray();
  console.log(datatopost);
  //send them to signup.php using AJAX
  //alternative way $.post({}).done().fail();
  $.ajax({
    url: "signup.php",
    type: "POST",
    data: datatopost,
    success: function (data) {
      if (data) {
        $("#signUpMessage").html(data);
      }
    },
    error: function () {
      $("#signUpMessage").html(
        "<div class='alert alert-danger'>connection Error.</div>"
      );
    },
  });
});

//Ajax Call for the login form
//Once the form is submitted

//prevent default php processing

//collect user inputs

//    console.log(datatopost);
//send them to login.php using AJAX

//Ajax Call for the forgot password form
//Once the form is submitted

//prevent default php processing

//collect user inputs

//    console.log(datatopost);
//send them to signup.php using AJAX
