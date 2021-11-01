<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/land.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Recordcopy Tracking</title>
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-md">

            <!-- Inserting nav brand Image beofre brand title-->
            <a id="fff2" class="navbar-brand" href="#">Global Geomatics</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a id="fff" class="nav-link" href="contact.php">Contact Us<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a id="fff" class="nav-link" href="products.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a id="fff" class="nav-link" href="services-Eko-Smart-City.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a id="fff" class="nav-link" href="search.php">Track Recordcopy</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();

    if (isset($_POST['red'])) {
        header("Location:upload.php");
        /*
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
          header("Location:products.php");
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
*/
    }

    ?>
    <main>
        <section>
            <div class="container-fluid">
                <div class="row top-section">
                    <div class="col-lg-12 col-md-12 col-sm-12  text-center">
                        <h2 class="ml2" id="greeting">Helping you make that Geospatial Decision</h2>
                        <h3 id="sub-text1" data-aos="zoom-in" data-aos-duration="3000">Surveyors and Survey Engineers</h3>
                        <button type="button" class="btn btn-primary">Let's Get Started</button>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 card-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-12 text-center">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top mx-auto" src="css/mission.png" alt="Card image cap" id="img_card">
                                        <div class="card-body">
                                            <h5 class="card-title">MISSION</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-lg-4 col-sm-12">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top mx-auto" src="css/goal.png" alt="Card image cap" id="img_card">
                                        <div class="card-body">
                                            <h5 class="card-title">GOALS</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-lg-4 col-sm-12">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top mx-auto" src="css/loyalty.png" alt="Card image cap" id="img_card">
                                        <div class="card-body">
                                            <h5 class="card-title">CORE VALUES</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>




</body>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<!--- Script for bootstrap-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script type="text/javascript" src="aos.js"></script>
<script type="text/javascript" src="text2.js"></script>
</body>

</html>