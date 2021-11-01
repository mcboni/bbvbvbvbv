<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/upload.css">
    <title>Search Result</title>
</head>
<header><a href="logout.php">Logout</a></header>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12  form-section text-center">
        <h5 class="text1">Please Enter Your Plan Number Below</h5>
        <form action="search.php" method="post" enctype="multipart/form-data" >
           <span class="text2"> Search for records:</span>
        <input type="text" name="fileToUpload" id="fileToUpload" class="form" placeholder="enter plan number">
        <button type="submit" class="btn btn-primary" name="submit">search</button>
        

         </div>
</form>



    <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
 
if(!isset($_SESSION['mail'])){
    header('Location:login.php');
    exit;
}/* else {
     $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['expire']) {
        session_destroy();
        header('Location: Signin.php');
        exit;
}
 
}*/


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
$files=$_POST["fileToUpload"];
$res = str_replace('/','',$files);
$dir= "upload/".$res;
$file_display = array(
    'jpg',
    'jpeg',
    'png',
    'gif'
);

if (file_exists($dir) == false) {
    echo 'Directory \'', $dir, '\' not found!';
} else {
    $dir_contents = scandir($dir);

    foreach ($dir_contents as $file) {
        $file_type = explode('.', $file);
        $file_extension = end($file_type);

        if ($file !== '.' && $file !== '..' &&   in_array($file_extension, $file_display) == true) {

              echo '<div class="col-md-12 col-lg-12 col-sm-12  text-center">';
            echo '<h2 class="heading"> Your Record Copy</h2>';
            echo    '</div>';

            echo '<div class="col-md-9 col-lg-9 col-sm-12 img1">';
            echo '<img src="'. $dir.'/'. $file. '" alt="'. $file. '" id="img2"/>';
            echo    '</div>';

             echo '<div class="col-md-3 col-lg-3 col-sm-12 text3 text-center">';
            echo '<p id="text4"> Your Record copy is still under processing and your evidence will be uploaded soonest';
            echo    '</div>';
        }
    }
}
}
?>

   
     </div>
</div> 
</body>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<!--- Script for bootstrap-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="aos.js"></script>
</html>