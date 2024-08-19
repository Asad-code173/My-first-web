<?php
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');


if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $qualification = $_POST["qualification"];
    $dob = $_POST["dob"];
    $doj = $_POST["doj"];
    $gender = $_POST["gender"];
    $cnic = $_POST["cnic"];
    $picture = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $image = move_uploaded_file($tmp_name, "uploads/" . $picture);
    $course = $_POST["cname"];
    $query = "INSERT INTO students VALUES ('','" . $name . "','" . $email . "','" . $phone . "','" . $address. "','".$qualification."','".$dob."','".$doj."','".$gender."','".$cnic."','".$picture."','".$course."')";
    $result = mysqli_query($connect, $query);
    // if ($result) {
    //     echo "data inserted successfully";
    // }else{
    //     echo "oops";
    // }
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
    <div class="container-fluid">

        <!-- Register form -->
        <div class="container mt-5">
        <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Students Bio data</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Enter your Name:</label>
                            <input type="text" class="form-control" id="Name" placeholder="Enter Your Name" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Enter your Email:</label>
                            <input type="email" class="form-control" id="Name" placeholder="Enter Your Email" name="email" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Enter your contact number:</label>
                            <input type="tel" class="form-control" id="Name" placeholder="Enter phone number" name="phone" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Enter your Address:</label>
                            <input type="text" class="form-control" id="Name" placeholder="Enter your address" name="address" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Select Qualification:</label>
                            <select class="form-control" name="qualification" id="qualification">
                                <option value="0" selected>Select Qualification</option>
                                <option>5th class</option>
                                <option>6th class</option>
                                <option>7th class</option>
                                <option>8th class</option>
                                <option>9th class</option>
                                <option>Matric</option>
                                <option>1st year</option>
                                <option>Intermediate</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date of birth</label>
                            <input type="date" class="form-control" id="Name" name="dob"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date of joining</label>
                            <input type="date" class="form-control" id="Name" name="doj"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="gender">
                                <option value="0" selected>Select Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">CNIC</label>
                            <input type="text" placeholder="12344566777" class="form-control" name="cnic">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Upload photo</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Course Name:</label>
                            <select class="form-control" name="cname">
                                <option value="0" selected>Select Courses</option>
                                <?php
                                $query = "select * from courses";
                                $result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["cname"]; ?></option>;
                                <?php
                                }

                                ?>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>