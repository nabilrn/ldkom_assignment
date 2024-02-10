<?php
session_start();
require_once('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == 'admin' && $password == 'admin'){
      $_SESSION['admin_logged_in'] = true;
      header("Location: admin/index.php");
      exit();
    }

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $email;
            header("Location: Home.php"); 
            exit();
        } else {
            // Run your script or display a warning here
            echo "<script>alert('Password salah.')</script>";
        }
    } else {
        // Run your script or display a warning here
        echo "<script>alert('User tidak ditemukan.')</script>";
    }
}

if (isset($_SESSION['registration_message'])) {
    echo "<script>alert('" . $_SESSION['registration_message'] . "')</script>";
    unset($_SESSION['registration_message']);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/Login.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Nunito"
    />
    <style>
      #email{
        text-align: center;
        font-family: "Nunito";
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="imageContainer">
        <a href="http://labdas.si.fti.unand.ac.id/">
          <img src="assets/image/Logo Ldkom.png" alt="" />
        </a>
      </div>
      <div class="login-container">
        <h1>WELCOME</h1>
        <h3>LDKOM Inventory</h3>
        <form action="#" method="post">
          <div class="input-group">
            <input
              type="text"
              id="email"
              name="email"
              placeholder="Email"
              required
            />
          </div>

          <div class="input-group">
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Password"
              required
            />
          </div>

          <div class="input-group">
            <button id="btn" type="submit">Login</button>
          </div>
        </form>

        <div class="keregister">
          <a href="Register.php">Doesn't have account? Register here</a>
        </div>
      </div>
    </div>
  </body>
</html>
