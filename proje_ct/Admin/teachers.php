<?php
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phone'];
    $address = $_POST['address'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $dob = $_POST['dob'];
    $doj = $_POST['doj'];
    $gender = $_POST['gender'];
    $cnic = $_POST['cnic'];
    $img = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $image = move_uploaded_file($tmp_name, "uploads/" . $img);
    $ins = "INSERT INTO teachers VALUES('','" . $name . "','" . $email . "','" . $number . "','" . $address . "','" . $qualification . "',
    '" . $experience . "','" . $dob . "','" . $doj . "','" . $gender . "','" . $cnic . "','" . $img . "')";
    $query = mysqli_query($connect, $ins);
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
    <div class="modal fade" id="teacherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Teachers Name:</label>
                            <input type="text" class="form-control" id="Name" placeholder="john" name="name">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="Name" placeholder="xyz@gmail.com" name="email">
                        </div>
                        <div class="form-group">
                            <label>Contact Number:</label>
                            <input type="tel" class="form-control" id="Name" placeholder="03121324523" name="phone">
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input type="text" class="form-control" id="Name" placeholder="Address" name="address">
                        </div>
                        <div class="form-group">
                            <label>Date Of Birth:</label>
                            <input type="date" class="form-control" id="Name" name="dob">
                        </div>
                        <div class="form-group">
                            <label>Qualification:</label>
                            <select class="form-control" name="qualification" id="qualification">
                                <option value="0" selected>select qualification</option>
                                <option>bachelors</option>
                                <option>Masters</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Experience:</label>
                            <select class="form-control" name="experience" id="">
                                <option value="0" selected>Select Experience</option>
                                <option>1 year</option>
                                <option>2 years</option>
                                <option>3 year</option>
                                <option>4 years</option>
                                <option>5 year</option>
                                <option>6 years</option>
                                <option>7 year</option>
                                <option>8 years</option>
                                <option>9 years</option>
                                <option>10 years</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Date Of Joining:</label>
                            <input type="date" class="form-control" id="Name" name="doj" />
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="gender">
                                <option value="0" selected>Select Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>cnic:</label>
                            <input type="tel" class="form-control" id="Name" name="cnic">
                        </div>
                        <div class="form-group">
                            <label>Upload image:</label>
                            <input type="file" class="form-control" id="Name"  name="file">
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
    <div class="container mt-5">
        <div class="card-shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m0 font-weight-bold text-primary">Teachers
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#teacherModal">
                        ADD
                    </button>
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
                            <th>Experience</th>
                            <th>D.O.B</th>
                            <th>D.O.J</th>
                            <th>Gender</th>
                            <th>CNIC</th>
                            <th>Picture</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM teachers";
                        $result = mysqli_query($connect, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["phone"]; ?></td>
                                <td><?php echo $row["address"]; ?></td>
                                <td><?php echo $row["qualification"]; ?></td>
                                <td><?php echo $row["experience"]; ?></td>
                                <td><?php echo $row["dob"]; ?></td>
                                <td><?php echo $row["doj"]; ?></td>
                                <td><?php echo $row["gender"]; ?></td>
                                <td><?php echo $row["cnic"]; ?></td>
                                <td><img src="uploads/<?php echo $row["image"]?>" width="100" height="100"></td>
                                <td><a href="editteachers.php?id=<?php echo $row["id"]; ?>" class="btn btn-success ">Edit</a></td>
                                <td><a href="delteachers.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger ">Delete</a></td>
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
<?php

include('includes/footer.php');
?>