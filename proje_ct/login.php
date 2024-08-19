<?php
session_start();
ob_start();
?>
<?php
include 'connection.php';
include 'Admin/includes/links.php';
include 'nav.php';
?>


<?php


if (isset($_POST['submit'])) {
  $email = $_POST['email'];

  $pass = $_POST['password'];

  $hashpass = md5($pass);



  $query = "SELECT * FROM register WHERE email = '$email' AND password='$hashpass'";
  $select = mysqli_query($connect, $query);




  if ($select->num_rows > 0) {
                                        
    $row = mysqli_fetch_assoc($select);
    $dbpass = $row["password"];

    $role = $row["role"];

   

    if ($role == "admin") {
      $_SESSION['username'] = $email;
      $_SESSION['role'] = 'admin';
      header('Location:Admin/index.php');
      die();
    } else if ($role == "Student") {
      // echo "asad";
      header('Location:Students/index.php');
    } else if ($role == "Teacher") {
      $_SESSION['username'] = $email;
      $_SESSION['role'] = 'Teacher';
      header('Location:Teachers/index.php');
    } else {
      $_SESSION['status'] = "Invalid role";
    }
  } else {
    $_SESSION['status'] = "Email not found";
  }
}
?>
<?php

?>








<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <div class="container">
    <div class="card transparent" style=" max-width: 400px;
    margin: 0 auto;
    margin-top: 50px;
    padding: 20px;">
      <form method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="email" class="form-control" id="emailAddress" name="email" placeholder="Email Address">

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password">

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group text-center">
              <button type="submit" name="submit" class="btn btn-primary facebook-button">Login</button>
            </div>
            <p class="text-center">Don't have an account? <a href="Registeration.php">SignUp</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
  <br>
</body>

</html>
<?php
include 'footer.php';
ob_end_flush();
?>