<?php
include 'dbconnection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--Defining CSS Sheet-->
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <!--Connecting to font awesome Lib-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
  <title>SIGN UP</title>
</head>

<body>
  <main>
    <!--Defining Bootstrap Conainer -->
    <div class="container-fluid">
      <!--Defining Bootstrap Row -->
      <div class="row">
        <!--Spliting row into column with 9 units -->
        <div class="col-md-6 col-xs-12 col-lg-6 signupp" id="cent">
          <!--Inserting image to fill up col-9 units section -->
              <img src="css/unlock4.png" >
          <!--Defining carousel to write text on Image inserted -->
         
        </div>

        <!--Defining col with 3 units -->
        <div class="col-md-6 col-xs-12 col-lg-6" id="cent2">
          <h2 id="signin-welcome">Hi There, Welcome!</h2>
          <h6 id="signin-welcome2">Please Provide Credentials to Signup</h6>
          <!--Defining a form control to handle form requests -->
          <form id="frm" method="post">
            <!--Defining form group for emails -->
            <div class="form-group">
              <!--Label for Input type email -->
              <label for="InputEmail1">Email address</label>
              <!--Defining Input type for form field -->
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>


            <!--Defining form group for passwords-->
            <div class="form-group" id="frmgrp">
              <!--Label for Input type password -->
              <label for="InputPassword1">Password</label>
              <!--Defining Input type for form field -->
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
              <small id="emailHelp" class="form-text text-muted">Your details are safe with us</small>
            </div>

            <input type="submit" name='sub' class="btn btn-primary" id="submit" value='submit'>
            <small id="emailHelp" class="form-text text-muted">Already Have an Account? <a href="Signin.php"><strong>Signin Here</strong></a></small>
          </form>
       

        </div>


      </div>
    </div>
  </main>


  <?php
  error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
 
if (isset($_POST['sub'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
 
    $query = $connect->prepare("SELECT * FROM users WHERE email=:email");
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }
 
    if ($query->rowCount() == 0) {
    $query2 =$connect->prepare("INSERT INTO users (password,email) VALUES ('$password_hash','$email' )");
        $query2->bindParam(":password_hash", $password_hash, PDO::PARAM_STR);
        $query2->bindParam(":email", $email, PDO::PARAM_STR);
        $result = $query2->execute();
 
        if ($result) {
          header("Location:search.php");
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
 
?>
</body>