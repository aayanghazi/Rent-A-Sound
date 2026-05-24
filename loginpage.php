<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="style.css">
  <link rel="icon" href="pngs/png1.png" type="image/png">
</head>
  <style>
    *{
    font-family: Montserrat;
    color: #fff;
  }
  
  body{
    background: #331f13;
    background: color(#52301c);
    background-image: url("./background/bg1.png");
  }
  
  @media screen and (max-width: 480px) {
    *{
      overflow-x: hidden;
    }
  }
  
  body {
    overflow-x: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
  }
  
  .main-section {
    margin: 0 auto !important;
    max-width: 900px;
    width: 100%;
    display: flex;
    align-items: stretch;
    justify-content: center;
  }
  
  .detail-section {
    background: #52301c;
    background: #764626;
    border-radius: 45px;
  }
  
  .form-section {
    background: rgb(0, 0, 0);
    background: linear-gradient(90deg, rgb(0, 0, 0) 0%, rgb(0, 0, 0) 50%, rgb(0, 0, 0) 100%);
    border-radius: 45px;
  }
  
  .information {
    margin: 50px 45px;
  }
  
  .form-conatiner {
    margin: 40px 45px;
  }

  .form-conatiner h2 {
    white-space: nowrap !important;
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    gap: 0px;
    margin-left: 0 !important;
    padding-left: -30 !important;
  }

  .form-conatiner h2 img {
    margin: 0 !important;
    padding: 0 !important;
  }
  
  .heading__h2 {
    font-weight: 700;
  }
  
  .heading__h3 {
    text-align: center;
    font-size: 1.2em;
    font-weight: 700;
  }
  
  .little-info {
    margin: 20px 50px 8px 50px;
  }
  
  .heading_h2_1 {
    font-weight: 700;
    font-size: 1.4em;
  }
  
  .little-info li {
    margin: 10px 0;
    font-weight: 700;
  }
  
  .links__p {
    font-size: 1.2em;
  }
  
  .links__p a {
    text-decoration: none;
    color: #fff;
    font-weight: 500;
  }
  
  label {
    font-weight: 700;
    color: #fff;
    letter-spacing: 0.07em;
  }
  
  input[type=text], input[type=password] {
    border: none;
    margin: auto auto 15px auto;
    min-width: 100%;
    background: transparent;
    color: #fff;
    border-bottom: 2px solid #fff;
  }
  
  .button {
    border-radius: 16px;
    padding: 4px 12px;
    background: #fff;
    background-color: #764626;
    font-size: 1.4em;
    font-weight: 600;
    box-shadow: 0;
    border: 0;
    color: #000000;
  }
  </style>
  <body>
    <div class="fluid-container">
      <div class="container">
        <div class="col-lg-12 row main-section animated jackInTheBox">
          <div class="col-lg-5 detail-section">
            <div class="information">
                <h2>LOGIN TO YOUR EXISTING ACCOUNT</h2>
                <br>
                
              <h3 class="heading__h3"></h3>
              <div class="little-info">
                
                <li style="color: rgb(255, 255, 255);">Access your account</li>
                <li style="color: rgb(255, 255, 255);">View your purchases</li>
                <li style="color: rgb(255, 255, 255);">Verify your identity</li>
                <li style="color: rgb(255, 255, 255);">Member bonuses</li>
                <span style="font-size:0.85em;"></span>
                <br>
                <span style="font-size:0.85em;"></span>
              </div>
              <p style="font-size:0.6em; margin:0 auto; padding:0;"></p>
            </div>
          </div>
          <div class="col-lg-7 form-section">
            <div class="form-conatiner">
                <h2><img src="./pngs/png1.png" alt="Logo" style="width: 170px; height: 170px;" style="height: 1.5em;"> RENT A SOUND</h2>
                <br><br>
                
                <form action="" method="POST">
                  <label for="email">EMAIL</label>
                  <br>
                  <input type="text" id="email" name="email" placeholder="Enter your email address">
                  <br>
                  <label for="password">PASSWORD</label>
                  <br>
                  <input type="password" id="password" name="password" placeholder="Enter your password">
                  <br>
                  <br>
                  
                  <center><button class="button" type="submit" name="submit">Login</button></center>
                  <br>
                    <label for="text">Don't have an account? <a href="http://localhost/website/signin.php">Sign up</a></label>
                </form>
              </div>
          </div>
        </div>
    <?php
    if (isset($_POST['submit'])) {
      $email1 = $_POST['email'];
      $password = $_POST['password'];
      $conn = new mysqli("localhost", "root", "", "rentasound",4306);
      if (!$conn) {
          die("Failed to connect: " . mysqli_connect_error());
      } 
      else {
          $select = $conn->prepare("SELECT * from logsign where Email = ?");
          $select->bind_param("s", $email1);
          $select->execute();
          $select_result = $select->get_result();
          $data = $select_result->fetch_all(MYSQLI_ASSOC);
          if (!empty($data)) {
              if (password_verify($password, $data[0]['Password'])) {
                  $_SESSION['user-website'] = $data[0]['Name'];
                  echo "<script>";
                  echo "alert('Successfully Logged In');";
                  echo "window.location.href = 'index.php';";
                  echo "</script>";
              } 
              else {
                  echo "<script>";
                  echo "alert('Wrong Password');";
                  echo "window.location.href = 'loginpage.php';";
                  echo "</script>";
              }
          } 
          else {
              echo "<script>";
              echo "alert('This E-mail is not registered');";
              echo "window.location.href = 'loginpage.php';";
              echo "</script>";
          }
      }
  }
  ?>
  </body>
  </html>