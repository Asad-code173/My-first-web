<?php
include 'connection.php';
include 'Admin/includes/links.php';
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <style>
  
   
  </style>
  <link rel="stylesheet" href="Admin/css/style.css">
</head>
<?php
if (isset($_POST['submit'])) {
  $username = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $pass = $_POST['password'];
  $hashpass = md5($pass);
  $role = $_POST["role"];
  $insquery = "insert into register values('','" . $username . "','" . $email . "','" . $phone . "','" . $hashpass . "','" . $role . "')";
  $insertquery = mysqli_query($connect, $insquery);
}
?>

<body>
  <div class="container">
    <div class="card transparent" style=" max-width: 400px;
    margin: 0 auto;
    margin-top: 50px;
    padding: 20px;">
      <div class="text-center mb-3">
        <h3>Register your self Here</h3>
      </div>
      <div class="divider">

      </div>
      <form method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" class="form-control" id="Name" placeholder="Enter Your Name" name="name" required>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="emailAddress" placeholder="Email Address" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" required>
            </div>
          </div>
        </div>
       
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="conpass">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <select class="form-control" name="role">
                <option value="selected">Select user Role</option>
                <option>Teacher</option>
                <option>Student</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group text-center">
              <button type="submit" name="submit" class="btn btn-primary">Signup</button>
            </div>
            <p class="text-center">Already have an account? <a href="login.php">Log In</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
  <br><br>
</body>
<?php
include 'footer.php';
?>

</html>