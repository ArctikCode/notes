<?php
session_start();
include('connection.php');

//get the user_id
$user_id = $_SESSION['user_id'];
//run a query to delete empty notes
$sql = "DELETE FROM notes WHERE note=''";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-warning">An error occured!</div>'; exit;
}
//run a query to look for notes corresponding to user_id
$sql = "SELECT * FROM notes WHERE user_id ='$user_id' ORDER BY time DESC";

//shows notes or alert message
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $note_id = $row['id'];
            $note = $row['note'];
            $time = $row['time'];
            $time = date("F d, Y ", $time);
            //the note_id is incrusted in the div itself in order to be able to implement the DELETE functions or others.
            echo "
        <div class='note'>
            <div class='col-xs-1 col-sm-2 delete'>
                <button class='btn-lg btn-danger' style='width:100%'>
                <ion-icon name='trash-outline'></ion-icon></button>
            </div>
            <div class='noteheader' id='$note_id'>
                <div class='text'><b>$note</b></div>
                <div class='timetext'>$time</div>    
            </div>
        </div>";
        }
    }else{
        echo '<div class="alert alert-warning">You have not created any notes yet!</div>'; exit;
    }
    
}else{
    echo '<div class="alert alert-warning">An error occured!</div>'; exit;
//    echo "ERROR: Unable to excecute: $sql." . mysqli_error($link);
}


// echo "<div style='margin-top:100px'>Rock on baby</div>";


?>