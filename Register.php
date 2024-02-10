<?php
session_start();
require_once('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    // Memeriksa apakah email atau username sudah terdaftar sebelumnya
    $check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "Email atau Username sudah terdaftar.";
    } elseif ($password !== $repeat_password) {
        echo "Password tidak cocok.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['registration_message'] = "Registration Success!!!";
            header("Location: Login.php");
            exit(); 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/Register.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Nunito"
    />
    <style>
      input[type="email"]{
        width: 100%;
        height: 50px;
        border: 1px solid #ddd;
        border-radius: 30px;
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
        <h3>Create an Account!</h3>
        <form action="#" method="post">
          <div class="input-group">
            <input
              type="text"
              id="username"
              name="username"
              placeholder="Username"
              required
            />
          </div>
          <div class="input-group">
            <input
              type="email"
              name="email"
              id="email"
              placeholder="email"
              required
            />
          </div>
          <div class="passwordGroup">
            <div class="pw-input-group">
              <input
                type="password"
                id="password"
                name="password"
                placeholder="Password"
                required
              />
            </div>
            <div class="pw-input-group">
              <input
                type="password"
                id="Repeat"
                name="repeat_password"
                placeholder="Repeat Password"
                required
              />
            </div>
          </div>
          <div class="input-group">
            <button id="btn" type="submit">
              Register 
            </button>
          </div>
        </form>

        <div class="kelogin">
          <a href="Login.php">Already have an account? Login!</a>
        </div>
      </div>
    </div>
  </body>
</html>
