<!--This file receives the user_id and key generated to create the new password-->
<!--This file displays a form to input new password-->

<?php
session_start();
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Reset</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>

</head>

<body>

    <?php
//If user_id or key is missing

//else
    //Store them in two variables

    //Prepare variables for the query

    //Run Query: Check combination of user_id & key exists and less than 24h old

//If combination does not exist
//show an error message

//print reset password form with hidden user_id and key fields

?>


    <!--Script for Ajax Call to storeresetpassword.php which processes form data-->

</body>

</html>