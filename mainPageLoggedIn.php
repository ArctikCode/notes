<?php
@session_start();
if(!isset($_SESSION['user_id'])){
    header("location: index.php");
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
    <title>my Notes</title>

    <style>
    #container {
        margin-top: 120px;
    }

    #notePad,
    #allNotes,
    #back,
    .delete {
        display: none;
    }

    .buttons {
        margin-bottom: 20px;
    }

    .noteheader {
        border: 1px solid grey;
        border-radius: 10px;
        margin-bottom: 10px;
        cursor: pointer;
        padding: 0 10px;
        background: linear-gradient(#FFFFFF, #ECEAE7);
    }

    .text {
        font-size: 20px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .timetext {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .notes {
        margin-bottom: 100px;
    }
    </style>
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
                    <a class="nav-link" href="profile.php">My Profile <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">My Notes</a>
                </li>
            </ul>

            <p id="userInfo">Logged in as <b><?php echo $_SESSION['username']?></b></p>
            <a class="btn btn-outline-light my-2 my-sm-0" href="index.php?logout=1" type=" button" name="logout">Log
                out</a>

        </div>
    </nav>


    <!-- Note container -->
    <div class=" container" id="noteContainer">
        <!--Alert Message-->
        <div id="alert" class="alert alert-danger collapse">
            <a class="close" data-dismiss="alert">
                &times;
            </a>
            <p id="alertContent"></p>

        </div>
        <div class="row">
            <div class="offset-md-3 col-md-6 ">
                <!-- Button div -->
                <div class="buttonDiv">
                    <button id="addNote" class="btn btn-secondary btn-lg" href="#" type=" button">Add a
                        Note</button>
                    <button id="editNote" class="btn btn-danger btn-lg float-right" href="#"
                        type=" button">Delete</button>
                    <button id="back" class="btn btn-dark btn-lg float-left" href="#" type=" button">Back</button>
                    <button id="allNotes" class="btn btn-secondary btn-lg" href="#" type=" button">All
                        Notes</button>
                </div>
                <!-- Text Input Div-->
                <div id="notePad">
                    <textarea cols="50" rows="10"></textarea>
                </div>
                <!-- Notes Div  -->
                <div id="notes" class="notes">
                    <!-- Ajax call to retrieve the database -->
                </div>
            </div>
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

    <!-- //icon library -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <!-- Note features script -->
    <script src="mynotes.js"></script>
</body>


</html>