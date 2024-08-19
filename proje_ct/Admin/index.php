<?php
session_start();
ob_start();
include('includes/links.php');
include('includes/header.php'); 
include('includes/sidebar.php'); 



if(isset($_SESSION["username"]))
{

?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
   
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-md-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <div class="h6 font-weight-bold text-primary text-uppercase mb-1">Teachers</div>
              <div class="h3 mb-0 font-weight-bold">3</div>
            </div>
            <i class='fas fa-chalkboard-teacher' style="font-size:22px";></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-md-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h6 font-weight-bold text-success text-uppercase mb-1">Students</div>
              <div class="h3 mb-0 font-weight-bold">4</div>
            </div>
            <i class='fas fa-user' style="font-size:22px"></i>
            
          </div>
        </div>
      </div>
    </div>

   

    <!-- Pending Requests Card Example -->
    <div class="col-md-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h6 font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
              <div class="h3 mb-0 font-weight-bold">5</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-dark"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
  <?php
}
else {
  header("Location:../login.php");
  die();
  echo "hhh";
  ob_end_flush();
}
include('includes/footer.php');
?>