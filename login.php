<?php
require_once('config.php');
require_once('log_process.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/log_style.css" />
  <title>SSAMJANG Korean Grill Reservation App</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="registration.php" class="sign-in-form" method="post">
          <img src="img/ssamjang.png" width="300px" height="300px">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required/>
          </div>

          <input type="submit" value="Login" class="btn solid" name="submit" />

          <p class="social-text">Follow SSAMJANG in Social Media</p>
          <div class="social-media">
            <a href="https://www.facebook.com/ssamjangkoreanrestaurant?mibextid=ZbWKwL" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://instagram.com/ssamjang_korean_restaurant?igshid=Yzg5MTU1MDY=" class="social-icon">
              <i class="fab fa-instagram"></i>
            </a>
        
          </div>
        </form>
        <form action="login.php" method="post" class="sign-up-form">
          <img src="img/ssamjang.png" width="300px" height="300px">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="user" id="user" placeholder="Username" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required />
          </div>
          <input type="submit" name="create" id="create" class="btn" value="Sign up" />
          <p class="social-text">Follow SSAMJANG in Social Media</p>
          <div class="social-media">
            <a href="https://www.facebook.com/ssamjangkoreanrestaurant?mibextid=ZbWKwL" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://instagram.com/ssamjang_korean_restaurant?igshid=Yzg5MTU1MDY=" class="social-icon">
              <i class="fab fa-instagram"></i>
            </a>
            
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Sign Up easily through Email and other Social Media Platforms!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/signup.svg" width="500px" height="500px" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Already Created an Account just click Log In
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/signin.svg" width="500px" height="500px" class="image" alt="" />
      </div>
    </div>
  </div>
  <script src="js/app.js"></script>
</body>

</html>
