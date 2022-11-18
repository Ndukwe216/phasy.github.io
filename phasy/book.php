<?php 
include "config/connect.php";
$subject = "Interview Booking";
$msg = "you booking have been received and you will be contacted when its your turn. <br> For now,
 check out previously asked questions on different languages. <br>
 <a href='localhost/phasy/question.php'> check questions </a>";
session_start();
if (!isset($_SESSION['email'])) {
 header("location:login.php") ;  
}else{
    $email = $_SESSION['email'];
    if (isset($_POST['book'])) {
        $language = $_POST['choice'];
        $area = $_POST['interest'];
        $new = "";
        foreach ($language as $lang) {
            $new = $lang;
        }
        if (empty($language) || empty($area)) {
            echo "please fill the form";
        }else{
            $book_sql = "insert into `booking`(language,area)values('$new','$area')";
            $booking_result = mysqli_query($con,$book_sql);
            if ($booking_result) {
                mail("$email","$subject","$msg");
                echo "Booking successful";
                header('location:msg.php');
            }
        }
       
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- bootstrap styleseet -->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <title>phasy interview </title>
</head>
<body>
    <!-- top header -->
    <div class="container-fluid py-2 top-header" id="top">
        <div class="d-flex justify-content-between">
            <div class="social-icons px-5">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
            </div>
            <div class="contact-icons px-2">
                <span class="px-2">
                    <i class="fa fa-phone"></i>
                    +234 809 498 1216
                </span>
                <span>
                    <i class="fa fa-envelope"></i>
                    info@Interviewplus.com
                </span>
            </div>
        </div>
    </div>
    <!-- navigation menu -->
    <nav class="navbar navbar-expand-lg navbar-light py-3 menu">
        <div class="container-fluid">
          <a class="navbar-brand px-4" href="#">
            <!-- <img src="assets/img/LOGO.png" alt=""> -->
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto px-5">
              <li class="nav-item px-4">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
              </li>
              <li class="nav-item px-4">
                <a class="nav-link" href="question.php">BROWSE QUESTIONS</a>
              </li>
              <li class="nav-item px-4">
                <a class="nav-link" href="#services">SERVICES</a>
              </li>
              <li class="nav-item px-4">
                <a class="nav-link" href="#prices">PRICES</a>
              </li>
              <li class="nav-item px-4">
                <a class="nav-link" href="#contact">CONTACT</a>
              </li>
              <li class="nav-item px-4">
                <a class="nav-link" href="logout.php" id="login">logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- interview request -->
      <div class="container request">
        <h1>START FREE TRIAL</h1>
        <div class="row">
            <div class="col-md-6 flex-1">
                <h2>HOW TO USE</h2>
                <ul>
                    <li>
                        Create A phasy account
                    </li>
                    <li>
                        Login to your Account
                    </li>
                    <li>
                        click on Book Interview
                    </li>
                    <li>
                        Select your area of interest
                    </li>
                    <li>
                        You will get a mail for the your interview turn
                    </li>
                </ul>
            </div>
            <div class="col-md-6 flex-1">
                <h2>BOOK SESSION</h2>
                <form action="" method="post">
                    <h3>Language</h3>
                    <label>Javascript</label>
                    <input type="checkbox" name="choice[]" class="choice" value="javascript">
                    <label>PHP</label>
                    <input type="checkbox" name="choice[]" class="choice" value="php">
                    <label>GO</label>
                    <input type="checkbox" name="choice[]" class="choice" value="go"> <br>
                    <label>Laravel</label>
                    <input type="checkbox" name="choice[]" class="choice" value="laravel">
                    <label>Ruby</label>
                    <input type="checkbox" name="choice[]" class="choice" value="ruby">
                    <label>Typescript</label>
                    <input type="checkbox" name="choice[]" class="choice" value="typescript"> <br>
                    <label>Python</label>
                    <input type="checkbox" name="choice[]" class="choice" value="python">
                    <label>Vue Js</label>
                    <input type="checkbox" name="choice[]" class="choice" value="vuejs">
                    <label>Java</label>
                    <input type="checkbox" name="choice[]" class="choice" value="java">
                    <h3>Area of Interest</h3>
                    <select name="interest">
                        <option>Frontend Engineering</option>
                        <option>Backend Engineering</option>
                        <option>Fullstack web development</option>
                        <option>Machine Learning</option>
                        <option>Data science</option>
                        <option>Data Analysis</option>
                        <option>MobileApp Development</option>
                        <option>Desktop Development</option>
                        <option>Artificial Intelligence</option>
                    </select> 
                    <button type="submit" name="book">Book</button>
                </form>
            </div>
        </div>
      </div>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- custom script -->
    <script src="assets/js/main.js"></script>
</body>
</html>