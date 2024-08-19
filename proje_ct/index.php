<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="Admin/css/style.css">
  <!-- <link rel="stylesheet" href="Admin/css/sb-admin-2.min.css"> -->
  <?php
  include 'connection.php';
  include 'nav.php';
  include 'Admin/includes/links.php';

  ?>
</head>

<body>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images/Courses/Techcourses/DIT_c.jpg" class="d-block w-100" alt="..." style="width:100%;height:300px;">
      </div>
      <div class="carousel-item">
        <img src="Images/Courses/Techcourses/Graphics.jpg" class="d-block w-100" alt="..." style="width:100%;height:300px;">
      </div>
      <div class="carousel-item">
        <img src="Images/Courses/Techcourses/Website designing.jpg" class="d-block w-100" alt="..." style="width:100%;height:300px;">
      </div>
      <div class="carousel-item">
        <img src="Images/Courses/LanguageCourses/contentwriting.jpg" class="d-block w-100" alt="..." style="width:100%;height:300px;">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <h1 style="color:#d1212b;text-align:center;">OUR PARTNERS</h1>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-3">
        <img src="Images/BBSHRRDB.png" style="width:100%;height:100%;" />
      </div>
      <!-- <div class="border" style="border-left:1px solid black;"></div> -->
      <div class="col-md-3">
        <img src="Images/sindhgovernment.png" style="width:100%;height:100%;" />
      </div>
      <!-- <div class="border" style="border-left:1px solid black;"></div> -->
      <div class="col-md-3">
        <img src="Images/sdc.png" style="width:100%;height:100%;" />
      </div>
      <!-- <div class="border" style="border-left:1px solid black;"></div> -->
      <div class="col-md-3">
        <img src="Images/sbte.png" style="width:100%;height:100%;" />
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <h1 style="color:#d1212b;text-align:center;">OUR VISION</h1>
      </div>
      <div class="col-md-12">
        <div class="texts" style="text-align: center;">
          Malaysian Learning Hub is an institute of learning new technologies and languages. Embark upon the way to become a<br>
          successful institution of providing the best demanded technological certifications and being recognized worldwide.<br><br>
          Malaysian Learning Hub, as an institute, strives to become the provider of the most demanded technological
          and language<br> skills in the industries for a better career.<br><br>
          As an organization, we are responsible of taking care of the management of
          faculty in utilizing them to the best for providing<br> the demanded learning as per international standards.
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-12">
        <h4 style="color:#d1212b;text-align:center;">Growth & Achievement</h4>
        <h1 style="color:black;font-weight:600;text-align:center;">Strength in Numbers</h1>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4">
        <div class="growth">
          <h1 style="width:100%;height:100%;">90%</h1>
          <p>More Productivity</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="growth">
          <h1 style="width:100%;height:100%;">40+</h1>
          <p>Professional courses</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="growth">
          <h1 style="width:100%;height:100%;">68%</h1>
          <p>Successfull Students</p>
        </div>
      </div>
    </div>
  </div>
  <br><br>


</body>

</html>
<?php
include 'footer.php';
?>