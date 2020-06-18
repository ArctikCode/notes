// Ajax call to updateusername.php
$("#updateUserNameForm").submit(function (event) {
  //prevent default php processing
  event.preventDefault();
  //collect user inputs
  var datatopost = $(this).serializeArray();
  console.log(datatopost);
  //send them to updateusername.php using AJAX
  $.ajax({
    url: "updateusername.php",
    type: "POST",
    data: datatopost,
    success: function (data) {
      if (data) {
        $("#updateNameMessage").html(data);
      } else {
        location.reload();
      }
    },
    error: function () {
      $("#updateNameMessage").html(
        "<div class='alert alert-danger'>There was an error. Please try again later.</div>"
      );
    },
  });
});

// Ajax call to updatepassword.php
$("#updatePasswordForm").submit(function (event) {
  //prevent default php processing
  event.preventDefault();
  //collect user inputs
  var datatopost = $(this).serializeArray();
  //    console.log(datatopost);
  //send them to updateusername.php using AJAX
  $.ajax({
    url: "updatepassword.php",
    type: "POST",
    data: datatopost,
    success: function (data) {
      if (data) {
        $("#updatePasswordMessage").html(data);
      }
    },
    error: function () {
      $("#updatePasswordMessage").html(
        "<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>"
      );
    },
  });
});

// Ajax call to updateemail.php
$("#updateEmailForm").submit(function (event) {
  //prevent default php processing
  event.preventDefault();
  //collect user inputs
  var datatopost = $(this).serializeArray();
  //    console.log(datatopost);
  //send them to updateusername.php using AJAX
  $.ajax({
    url: "updateemail.php",
    type: "POST",
    data: datatopost,
    success: function (data) {
      if (data) {
        $("#updateEmailMessage").html(data);
      }
    },
    error: function () {
      $("#updateEmailMessage").html(
        "<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>"
      );
    },
  });
});
