<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: Login.php"); 
    exit();
}

$email = $_SESSION['email']; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <script src="assets/js/Datetime.js"></script>
    <script src="assets/js/typing.js"></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Nunito"
    />
    <link rel="stylesheet" href="assets/css/Home.css" />
    <style>
      .listmenu li p{
        margin-right: 280px;
        font-size: 1.5rem;
      }
    </style>


  </head>
  <body>
    <header>
      <nav>
        <div class="navbar">
          <div class="judul"><a href="http://labdas.si.fti.unand.ac.id/"><span id="text"></span></a></div>
          <div class="listmenu">
            <ul>
            <li><p>Welcome <?php echo $email; ?></p></li>
              <li><a href="Borrow.html">Borrowing</a></li>
              <li><a href="History.html">History</a></li>
              <li><a href="logout.php">Logout</a></li>
              
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      
      <div class="container">
        <h1 id="current-time"></h1>
  
      </div>
 
   
      
    </main>

  </body>
</html>
