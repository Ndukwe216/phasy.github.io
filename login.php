<?php 
include "config/connect.php";
$msg ="";

if (isset($_POST['submit'])) {
  $email = htmlspecialchars($_POST['email']);
  $pwd = htmlspecialchars($_POST['pwd']);

  $email_sql = "select * from `users` where email = '$email'";
  $result = mysqli_query($con,$email_sql);
  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];
    $login = password_verify($pwd, $row['password']);
    if ($login) {
      echo "login success";
      header("location:book.php");
      session_start();
      $_SESSION['email']=$email;
    }else{
      echo "invalid credentials";
    }

  }else{
    die(mysqli_error($con));
  }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login to account</title>
    <!-- bootstrap styleseet -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/question.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    
</head>
<body>
    <!-- top header -->
    <div class=" py-2 top-header" id="top">
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
          <a class="navbar-brand px-1" href="index.php">
            <img src="assets/img/phasy.png" alt="" id="logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item px-1">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
              </li>
              <li class="nav-item px-1">
                <a class="nav-link" href="question.php">QUESTIONS</a>
              </li>
              <li class="nav-item px-1">
                <a class="nav-link" href="index.php#services">SERVICES</a>
              </li>
              <li class="nav-item px-1">
                <a class="nav-link" href="index.php#prices">PRICES</a>
              </li>
              <li class="nav-item px-1">
                <a class="nav-link" href="index.php#contact">CONTACT</a>
              </li>
              <li class="nav-item ps-2">
                <a class="nav-link" href="login.php" id="login">LOGIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php" id="login">Signup</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
<!-- form section -->
<form action="login.php" name="signup" method="post" onsubmit="return form_val()">
<div class="regform">
    <h2>LOGIN</h2>
    
    <label>EMAIL</label>
    <input type="email" name="email" placeholder="mail@example.com">
    <label>PASSWORD</label>
    <input type="password" name="pwd" placeholder="enter password">
    <button type="submit" name="submit">Login</button>
    <p>N0 account yet ?   <span><a href="signup.php">Signup</a></span></p>
    </div>
</form>
</div>
<!-- footer section -->
<div class="footer">
        <div class="row">
            <div class="col-md-3">
                <img src="assets/img/phasy.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-3">
                <h5>Legal</h5>
                <a href="#">PRIVACY AND COOKIES</a>
                <a href="#">TERMS OF USE</a>
                <a href="#">TRADEMARK</a>
            </div>
            <div class="col-md-3">
                <h5>Information</h5>
                <a href="#">SUPPORT</a>
                <a href="#">BLOG</a>
                <a href="#">NEWSLETTER</a>
            </div>
            <div class="col-md-3">
                <h5>Newsletter</h5>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <button class="input-group-text">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div class="copy-right">
        <div class="row">
      <div class="col-6">
      <p>&copy phasy 2022</p>
</div>
<div class="col-6">
       <a href="#top"> <i class="fa fa-arrow-circle-up"></i> </a>
       </div>
       </div>
      </div>
   <!-- bootstrap script -->
   <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- custom script -->
    <script src="assets/js/main.js"></script>
</body>
</html>