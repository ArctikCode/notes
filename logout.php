<?php

//echo "<div style = 'margin-top:200px;'>" . $_GET['logout']  . "</div>";

if(isset($_SESSION['user_id']) && @$_GET['logout'] == 1){
    session_destroy();
    setcookie("rememberme", "", time()-3600);//set the cookie to expire in the past.
    
}

?>