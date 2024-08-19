<?php
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');
// include('includes/topbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card-shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m0 font-weight-bold text-primary">Students
                    <a href="addstudents.php" class="btn btn-primary">ADD</a>
                </h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Qualification</th>
                            <th>D.O.B</th>
                            <th>D.O.J</th>
                            <th>Gender</th>
                            <th>Cnic</th>
                            <th>Picture</th>
                            <th>Courses</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT s.id,s.name,s.email,s.phone,s.address,s.qualification,s.dob,s.doj,s.gender,s.cnic,s.picture,c.cname
                        FROM students s  INNER JOIN courses c ON s.courses = c.id";
                        $result = mysqli_query($connect, $query);
                        while ($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row["id"];?></td>
                            <td><?php echo $row["name"];?></td>
                            <td><?php echo $row["email"];?></td>
                            <td><?php echo $row["phone"];?></td>
                            <td><?php echo $row["address"];?></td>
                            <td><?php echo $row["qualification"];?></td>
                            <td><?php echo $row["dob"];?></td>
                            <td><?php echo $row["doj"];?></td>
                            <td><?php echo $row["gender"];?></td>
                          <td><?php echo $row["cnic"];?></td>
                            <td><img src="uploads/<?php echo $row["picture"];?>" width="100" height="100"/></td>
                            <td><?php echo $row["cname"];?></td>
                            <td><a href="editstudents.php?id=<?php echo $row["id"]; ?>" class="btn btn-success">Edit</a></td>
                            <td><a href="removestudents.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>