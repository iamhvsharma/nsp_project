<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- Font Awesome CDN link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- Custom CSS file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $email = $_POST['email'];
   $password = $_POST['pass'];

   // Dummy credentials for demonstration
   $correctEmail = 'user@gmail.com';
   $correctPassword = 'password123';

   if ($email === $correctEmail && $password === $correctPassword) {
      $_SESSION['user'] = 'Kriti';
      echo "<script>alert('Login successful!'); window.location.href='home.html';</script>";
   } else {
      echo "<script>alert('Invalid email or password!');</script>";
   }
}
?>

<header class="header">
   <section class="flex">
      <a href="home.html" class="logo">Educa.</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">Kriti</h3>
         <p class="role">student</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.html" class="option-btn">login</a>
            <a href="register.html" class="option-btn">register</a>
         </div>
      </div>

   </section>
</header>   

<div class="side-bar">
   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">Kriti</h3>
      <p class="role">student</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.html"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>
</div>

<section class="form-container">
   <form action="" method="post" enctype="multipart/form-data">
      <h3>Login Now</h3>
      <p>Your email <span>*</span></p>
      <input type="email" name="email" placeholder="Enter your email" required maxlength="50" class="box">
      <p>Your password <span>*</span></p>
      <input type="password" name="pass" placeholder="Enter your password" required maxlength="20" class="box">
      <input type="submit" value="Login Now" name="submit" class="btn">
   </form>
</section>

<footer class="footer">
   &copy; copyright @ 2024 by <span>Mr. MK016</span> | all rights reserved!
</footer>

<!-- Custom JS file link  -->
<script src="js/script.js"></script>
   
</body>
</html>

