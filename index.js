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
        "<div class='alert alert-danger'>Connection Error.</div>"
      );
    },
  });
});

//Ajax Call for the login form
//Once the form is submitted
$("#logInForm").submit(function (event) {
  //prevent default php processing
  event.preventDefault();
  //collect user inputs
  var datatopost = $(this).serializeArray();
  //    console.log(datatopost);
  //send them to login.php using AJAX
  $.ajax({
    url: "login.php",
    type: "POST",
    data: datatopost,
    success: function (data) {
      if (data == "success") {
        window.location = "mainPageLoggedIn.php";
      } else {
        $("#logInMessage").html(data);
      }
    },
    error: function () {
      $("#loginmessage").html(
        "<div class='alert alert-danger'>Connection Error.</div>"
      );
    },
  });
});

//Ajax Call for the forgot password form
//Once the form is submitted

//prevent default php processing

//collect user inputs

//    console.log(datatopost);
//send them to signup.php using AJAX
