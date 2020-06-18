<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: index.php");
}
include('connection.php');

$user_id = $_SESSION['user_id'];

//get username and email
$sql = "SELECT * FROM users WHERE user_id='$user_id'";
$result = mysqli_query($link, $sql);

$count = mysqli_num_rows($result);

if($count == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
    $username = $row['username'];
    $email = $row['email']; 
}else{
    echo "There was an error retrieving the username and email from the database";   
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS file -->
    <link rel="stylesheet" href="styling.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/gif" href="image/logo.png" />
    <title>my Profile</title>

</head>

<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: rgba(52,58,64,0.8);">

        <a class="navbar-brand font-weight-bold " href="#"><img class="logo" src="image/logo.png" alt="Notes"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link active" href="#">Profile <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="mainPageLoggedIn.php">My Notes</a>
                </li>
            </ul>
            <p id="userInfo">Logged in as <b><?php echo $username; ?></b></p>
            <a class="btn btn-outline-light my-2 my-sm-0" href="index.php?logout=1" type=" button" name="logout">Log
                out</a>
        </div>
    </nav>


    <!-- Profile container -->
    <div class="container" id="profileContainer">
        <div class="row">
            <div class="offset-md-3 col-md-6 ">
                <h2>Your Profile Settings :</h2></br>
                <div>
                    <table class="table table-hover profileTable">
                        <tr data-target="#updateUserName" data-toggle="modal" style="cursor:pointer">
                            <td>
                                <ion-icon name="person-circle-outline" size="large"> </ion-icon>
                            </td>
                            <td><?php echo $username; ?></td>
                        </tr>
                        <tr data-target="#updateEmail" data-toggle="modal" style="cursor:pointer">
                            <td>@</td>
                            <td><?php echo $email ?></td>
                        </tr>
                        <tr data-target="#updatePassword" data-toggle="modal" style="cursor:pointer">
                            <td>&#128274</td>
                            <td>password</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>

    </div>

    <!-- Update FORMS -->
    <!-- UPDATE NAME -->
    <form method="post" id="updateUserNameForm">
        <div class=" modal" id="updateUserName" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Which new name would you like to use ? </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- Update Name FORM -->
                    <div class="modal-body updateNameModal">
                        <!-- empty div for the reception of the error or information message -->
                        <div id="updateNameMessage"></div>
                        <!-- Update Name-->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="signUpSpan input-group-text" id="name">
                                    <ion-icon class="iconName" name="person-circle-outline"> </ion-icon>
                                </span>
                            </div>
                            <label for="username" class="sr-only">Name :</label>
                            <input type="text" name="username" class="form-control"
                                placeholder="<?php echo $username; ?>" aria-label="Name" aria-describedby="name"
                                id="username" maxlength="30">
                        </div>
                    </div>

                    <!-- login and cancel button -->
                    <div class="modal-footer loginFooter">
                        <button type="submit" name="updateusername" class="btn btn-secondary">Save</button>
                        <button type="button" class="btn btn-outlined-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- UPDATE EMAIL -->
    <form method="post" id="updateEmailForm">
        <div class=" modal" id="updateEmail" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Which new Email would you like to use ? </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- update email FORM -->
                    <div class="modal-body updateEmailModal">
                        <!-- empty div for the reception of the error or information message -->
                        <div id="updateEmailMessage"></div>
                        <!-- Update Name-->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="signUpSpan input-group-text" id="email">@</span>
                            </div>
                            <label for="updateEmail" class="sr-only">Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="<?php echo $email ?>"
                                aria-label="Email" aria-describedby="email" id="updateEmail" maxlength="50">
                        </div>
                    </div>

                    <!-- update email and cancel button -->
                    <div class="modal-footer loginFooter">
                        <button type="submit" name="updateUserEmail" class="btn btn-secondary">Save</button>
                        <button type="button" class="btn btn-outlined-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- UPDATE Password -->
    <form method="post" id="updatePasswordForm">
        <div class=" modal" id="updatePassword" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Set up your new Password : </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- Password Update FORM -->
                    <div class="modal-body updatePasswordModal">
                        <!-- empty div for the reception of the error or information message -->
                        <div id="updatePasswordMessage"></div>
                        <!-- Update Password-->
                        <div class="input-group mb-3">
                            <div class="signUpSpan input-group-prepend">
                                <span class="signUpSpan input-group-text" id="password">&#128274</span>
                            </div>
                            <label for="currentPassword" class="sr-only"> Current Password:</label>
                            <input type="password" class="form-control" name="currentpassword"
                                placeholder="Enter your current password" aria-label="currentPassword"
                                aria-describedby="currentPassword" id="currentPassword" maxlength="30">
                        </div>
                        <div class="input-group mb-3">
                            <div class="signUpSpan input-group-prepend">
                                <span class="signUpSpan input-group-text" id="password">&#128274</span>
                            </div>
                            <label for="newPassword" class="sr-only">New Password:</label>
                            <input type="password" class="form-control" name="password"
                                placeholder="Enter a new password" aria-label="newPassword"
                                aria-describedby="newPassword" id="newPassword" maxlength="30">
                        </div>
                        <div class="input-group mb-3">
                            <div class="signUpSpan input-group-prepend">
                                <span class="signUpSpan input-group-text" id="password">&#128274</span>
                            </div>
                            <label for="ConfirmNewPassword" class="sr-only">Confirm New Password:</label>
                            <input type="password" class="form-control" name="password2"
                                placeholder="Confirm your new password" aria-label="ConfirmNewPassword"
                                aria-describedby="ConfirmNewPassword" id="ConfirmNewPassword" maxlength="30">
                        </div>
                    </div>

                    <!-- login and cancel button -->
                    <div class="modal-footer loginFooter">
                        <button type="submit" name="updatePassword" class="btn btn-secondary">Save</button>
                        <button type="button" class="btn btn-outlined-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- FOOTER -->
    <div class="footer text-secondary">
        <div class="container">
            <p>ArctikCode &copy <?php $thisYear = date("Y"); echo $thisYear; ?></p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <!-- //icon library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="profile.js"></script>
</body>


</html>