<?php
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');

if (isset($_POST['submit'])) {
  $cname = $_POST['cname'];
  $cduration = $_POST['duration'];
  $cfees = $_POST['fess'];
  $img = $_FILES['file']['name'];
  $cdescription = $_POST['description'];
  $tmp_name = $_FILES['file']['tmp_name'];
  $image = move_uploaded_file($tmp_name, "uploads/" . $img);
  $ins = "INSERT INTO courses VALUES('','" . $cname . "','" . $cduration . "','" . $cfees . "','" . $img . "','" . $cdescription . "')";
  $query = mysqli_query($connect, $ins);
  if ($query) {
  } else {
    echo "error";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <div class="modal fade" id="coursesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label>Course Name:</label>
              <input type="text" class="form-control" id="Name" placeholder="Duration" name="cname">
            </div>
            <div class="form-group">
              <label>Course Duration:</label>
              <input type="text" class="form-control" id="Name" placeholder="Duration" name="duration">
            </div>
            <div class="form-group">
              <label>Course fees:</label>
              <input type="number" class="form-control" id="Name" placeholder="Duration" name="fess">
            </div>
            <div class="form-group">
              <label>Upload image:</label>
              <input type="file" class="form-control" id="Name" placeholder="Duration" name="file">
            </div>
            <div class="form-group">
              <label for="fees">Course Description:</label>
              <textarea name="description" class="form-control"  placeholder="Enter description"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-5">
    <div class="card-shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m0 font-weight-bold text-primary">Courses
          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#coursesModal">
            ADD
          </button>
        </h6>
      </div>
      <div class="card-body">
        <div class="table table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Duration</th>
                <th>Monthly fees</th>
                <th>image</th>
                <th>description</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $query = "SELECT * FROM courses";
              $result = mysqli_query($connect, $query);
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <tr>
                  <td><?php echo $row["id"]; ?></td>
                  <td><?php echo $row["cname"]; ?></td>
                  <td><?php echo $row["duration"]; ?></td>
                  <td><?php echo $row["fess"]; ?></td>
                  <td><img src="uploads/<?php echo $row["img"]?>" width="100" height="100"></td>

                  
                  <td><?php echo $row["description"]; ?></td>
                  <td><a href="cedit.php?id=<?php echo $row["id"]; ?>" class="btn btn-success">Edit</a></td>
                  <td><a href="cdelete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


</body>

</html>