
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--Defining CSS Sheet-->
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <!--Connecting to font awesome Lib-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <title>SIGN IN</title>

</head>

<body>
  <main>
  <!--Defining Bootstrap Conainer -->
  <div class="container-fluid">
    <!--Defining Bootstrap Row -->
    <div class="row">
      <!--Spliting row into column with 9 units -->
      <!--Spliting row into column with 9 units -->
        <div class="col-md-6 col-xs-12 col-lg-6 signupp" id="cent">
          <!--Inserting image to fill up col-9 units section -->
              <img src="css/unlock4.png" >
          <!--Defining carousel to write text on Image inserted -->
         
        </div>

      <!--Defining col with 3 units -->
      <div class="col-md-6 col-sm-12 col-lg-6" id="cent2">
        <h2 id="signin-welcome">Hi There, Welcome!</h2>
        <h6 id="signin-welcome2">Please Provide Credentials to Log In</h6>
        <!--Defining a form control to handle form requests -->
        <form id="frm" method="post">
          <!--Defining form group for emails -->
          <div class="form-group">

       
        <?php
 
 include('dbconnection.php');
 session_start();
 
  
 if (isset($_POST['sub'])) {
  
     $mail = $_POST['mail'];
     $password = $_POST['password'];

  //Query to check if email does not already exist
     $query = $connect->prepare("SELECT * FROM users WHERE email=:mail");
     $query->bindParam("mail", $mail, PDO::PARAM_STR);
     $query->execute();

  // fetch result in an array
     $result = $query->fetch(PDO::FETCH_ASSOC);

     // check if result is valid and establish a count
     if($result){
       $result['login_count']= $result['login_count']+ 1;
       $con=$result['login_count'];

       //update column where email is same as supplied during login 
      $query = $connect->prepare("UPDATE users SET login_count= :con WHERE email= :mail");
      $query->bindParam("mail", $mail, PDO::PARAM_STR);
      $query->bindParam("con", $con, PDO::PARAM_INT);
      $query->execute();
     }
  
   
     if (!$result) {
         echo '<p class="error">Email and password combination is wrong!</p>';
     } else {

        //dverify hashed password and supplied password
         if (password_verify($password, $result['password'])) {
             $_SESSION['user_id'] = $result['ID'];
             $_SESSION['mail']= $result['email'];
             $_SESSION['login']=$result['login_count'];

             //destroy session after 30 minutes
             $_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 25 minutes from the starting time.
            $_SESSION['expire'] = $_SESSION['start'] + (25 * 60);
         
             header("Location:search.php");
         } else {
             echo '<p class="error"> password combination is wrong!</p>';
         }
     }
 }
  
       ?>
 

               <!--Label for Input type email -->
            <label for="InputEmail1">Email address</label>
            <!--Defining Input type for form field -->
            <input type="email" name='mail' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">Your details are safe with us</small>
          </div>
          <!--Defining form group for passwords-->
          <div class="form-group" id="frmgrp">
            <!--Label for Input type password -->
            <label for="InputPassword1">Password</label>
            <!--Defining Input type for form field -->
            <input type="password" name='password' class="form-control" id="exampleInputPassword1" required>
            <small id="emailHelp" class="form-text text-muted">Forgot password? <a style="color: #2A166F; font-weight: bold" href="#">Click here</a></small>
            <small id="emailHelp" class="form-text text-muted">Dont have an account? <a style="color: #2A166F; font-weight: bold" href="signup.php">Click here</a></small>
          </div>
          <script>
              function enableBtn(){
   document.getElementById("submit").disabled = false;
 }
        </script>
          <button type="submit" name='sub' class="btn btn-block" id="submit">Submit</button>
          <div class="g-recaptcha" data-sitekey="6LefFP8UAAAAAMsLqmdP7l5YA2caP2YOSeMx36nc"  data-callback="correctCaptcha"></div>
      
        </form>


      </div>


    </div>
  </div>
  </main>


</body>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<!--- Script for bootstrap-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>