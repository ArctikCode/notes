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
    <title>Notes</title>

</head>

<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: rgba(52,58,64,0.8);">

        <a class="navbar-brand font-weight-bold" href="#">Notes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
            <button class="btn btn-outline-light my-2 my-sm-0" href="#" data-toggle="modal" data-target="#logInModal"
                type=" button">Login</button>
        </div>
    </nav>


    <!-- Main container -->
    <div class="container" id="mainContainer">
        <!-- JUMBOTRON with Sign Up Button -->
        <div class="jumbotron" id="myContainer">
            <h1 id="title" class="display-4">Online Notes App</h1>
            <p class="h2 mt-4">Your notes with you, wherever you go.</p>
            <hr class="my-4">
            <p class="h5">Easy to use, protects all your notes.</p>
            <button class="btn btn-secondary btn-lg signup" href="#" data-toggle="modal" data-target="#signUpModal"
                type="button">
                Sign me up for free </button>


            <!-- SIGN UP MODAL -->
            <form method="post" id="signUpForm">
                <div class=" modal" id="signUpModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Sign up today and start using our Notes Application.</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!-- SIGN UP FORM -->
                            <div class="modal-body">
                                <!-- empty div for the reception of the error or information message -->
                                <div id="signUpMessage"></div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="signUpSpan input-group-text" id="name">
                                            <ion-icon class="iconName" name="person-circle-outline"> </ion-icon>
                                        </span>
                                    </div>
                                    <label for="username" class="sr-only">Name:</label>
                                    <input type="text" class="form-control" placeholder="Name" aria-label="Name"
                                        aria-describedby="name" id="username" maxlength="30">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="signUpSpan input-group-text" id="email">@</span>
                                    </div>
                                    <label for="loginemail" class="sr-only">Email:</label>
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                                        aria-describedby="email" id="loginemail" maxlength="50">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="signUpSpan input-group-prepend">
                                        <span class="signUpSpan input-group-text" id="password">&#128274</span>
                                    </div>
                                    <label for="password" class="sr-only">Password:</label>
                                    <input type="password" class="form-control" placeholder="Enter a password"
                                        aria-label="Password" aria-describedby="password" id="password" maxlength="30">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="signUpSpan input-group-text" id="confirmPassword">&#128274</span>
                                    </div>
                                    <label for="confirmPassword" class="sr-only">Confirm Password:</label>
                                    <input type="password" class="form-control" placeholder="Confirm password"
                                        aria-label="Username" aria-describedby="confirmPassword" id="confirmPassword"
                                        maxlength="30">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="signUp" class="btn btn-secondary">Sign Up</button>
                                <button type="button" class="btn btn-outlined-secondary"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            <!-- LOGIN FORM -->
            <form method="post" id="logInForm">
                <div class=" modal" id="logInModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Log in to your Notes personnal account. </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!-- LOGIN FORM -->
                            <div class="modal-body logInModal">
                                <!-- empty div for the reception of the error or information message -->
                                <div id="logInMessage"></div>
                                <!-- Login email -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="signUpSpan input-group-text" id="email">@</span>
                                    </div>
                                    <label for="loginemail" class="sr-only">Email:</label>
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                                        aria-describedby="email" id="loginemail" maxlength="50">
                                </div>
                                <!-- Password login -->
                                <div class="input-group mb-3">
                                    <div class="signUpSpan input-group-prepend">
                                        <span class="signUpSpan input-group-text" id="password">&#128274</span>
                                    </div>
                                    <label for="password" class="sr-only">Password:</label>
                                    <input type="password" class="form-control" placeholder="Password"
                                        aria-label="Password" aria-describedby="password" id="password" maxlength="30">
                                </div>
                            </div>
                            <div class="loginCheckBoxContainer">
                                <!-- remember me checkbox -->
                                <div class="form-check loginCheck">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                                </div>
                                <!-- Forgot password link -->
                                <a style="cursor:pointer; color:blue;" id="forgotPassword" data-dismiss="modal"
                                    data-target="#forgotPasswordModal" data-toggle="modal">Forgot Password ?</a>
                            </div>

                            <!-- login and cancel button -->
                            <div class="modal-footer loginFooter">
                                <button type="button" data-target="#signUpModal" data-dismiss="modal"
                                    data-toggle="modal" id="registrationButton" class="btn btn-outlined-secondary">Not
                                    registered ?</br>
                                    Create your account here</button>
                                <button type="submit" name="login" class="btn btn-secondary">Login</button>
                                <button type="button" class="btn btn-outlined-secondary"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- FORGOT PASSWORD <FORM> -->
            <form method="post" id="forgotPasswordForm">
                <div class=" modal" id="forgotPasswordModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="width:100%;">Forgot your password? </br>Please enter your
                                    email adress :
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!-- LOGIN FORM -->
                            <div class="modal-body forgotPasswordModal">
                                <!-- empty div for the reception of the error or information message -->
                                <div id="forgotPasswordMessage"></div>
                                <!-- Login email -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="forgotPasswordSpan input-group-text" id="email">@</span>
                                    </div>
                                    <label for="forgotPasswordemail" class="sr-only">Email:</label>
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                                        aria-describedby="email" id="loginemail" maxlength="50">
                                </div>

                            </div>

                            <!-- submit and cancel button -->
                            <div class="modal-footer loginFooter">
                                <button type="submit" name="login" class="btn btn-secondary">Send me my
                                    password</button>
                                <button type="button" class="btn btn-outlined-secondary"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>



        </div>
    </div>


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
    //icon library
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>


</html>