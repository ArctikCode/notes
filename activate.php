<?php
//The user is re-directed to this file after clicking the activation link
//Signup link contains two GET parameters: email and activation key
session_start();
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account Activation</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>

</head>

<body>

    <?php
//If email or activation key is missing show an error

//else
    //Store them in two variables

    //Prepare variables for the query

    //Run query: set activation field to "activated" for the provided email

    //If query is successful, show success message and invite user to login

    //Show error message
 
?>

    </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>