<?php
session_start();

if(isset( $_SESSION['mail'])){
    session_destroy();
    header("Location:landing.php");


}else{
    header("Location:Signup.php");
}


?>


