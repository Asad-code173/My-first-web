<?php
ob_start();
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');
$id = $_GET["id"];
$query = "SELECT * FROM students where id = '" . $id . "'";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {
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
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="">Enter Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>">
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="">Enter Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>" />
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="">Contact Number</label>
                            <input type="tel" name="phone" class="form-control" value="<?php echo $row["phone"]; ?>" />
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="">Enter Address</label>
                            <input type="text" name="address" class="form-control" value="<?php echo $row["address"]; ?>" />
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="">Select Qualification</label>
                            <select class="form-control" name="qualification">
                                <option value="<?php echo $row["qualification"];?>" selected><?php echo $row["qualification"];?></option>
                                <option value="4th class">4th class</option>
                                <option value="5th class">5th class</option>
                                <option value="6th class">6th class</option>
                                <option value="7th class">7th class</option>
                                <option value="8th class">8th class</option>
                                <option value="9th class">9th class</option>
                                <option value="Matric">Matric</option>
                                <option value="1st year">1st year</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Graduation">Graduation</option>

                            </select>

                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="">Date of Birth</label>
                            <input type="dob" name="dob" class="form-control" value="<?php echo $row["dob"]; ?>" />
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="">Date of Joining</label>
                            <input type="doj" name="doj" class="form-control" value="<?php echo $row["doj"]; ?>" />
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="">Select Qualification</label>
                            <select class="form-control" name="gender">
                                <option value="0" <?php if ($row["gender"] == 0) echo "selected"; ?>>Select Gender</option>
                                <option value="Male" <?php if ($row["gender"] == "Male") echo "selected"; ?>>Male</option>
                                <option value="Female" <?php if ($row["gender"] == "Female") echo "selected"; ?>>Female</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">CNIC</label>
                            <input type="tel" class="form-control" name="cnic" value="<?php echo $row["cnic"]; ?>">
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Upload Image</label><br>
                            <img src="uploads/<?php echo $row["picture"]; ?>" width="100" height="100" />
                            <input type="file" class="form-control" id="Name" name="file">
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Courses</label><br>
                            <select class="form-control" name="cname">
                                <option value="0" selected>Select Courses</option>
                                <?php
                                $query = "select * from courses";
                                $result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $selected = ($row["id"] == $courses) ? "selected" : "";
                                ?>
                                    <option value="<?php echo $row["id"]; ?>"<?php echo "selected";?>><?php echo $row["cname"]; ?></option>;

                                <?php
                                }


                                ?>

                            </select>
                        </div>


                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <button type="submit" value="update" name="update" class="btn btn-primary" style="border-radius: 8px;">Save changes</button>
                        </div>
                    </div>
            </form>
        </div>
    </body>

    </html>
<?php
}
?>
<?php
if (isset($_POST['update'])) {
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
    $courses = $_POST["cname"];
    $query = "UPDATE students SET name = '" . $name . "', email = '" . $email . "', phone = '" . $phone . "',address = '" . $address . "',
    qualification = '" . $qualification . "',dob = '" . $dob . "',doj = '" . $dob . "',gender = '" . $gender . "',cnic = '" . $cnic . "',picture = '" . $picture . "',courses = '" . $courses . "' where id = '" . $id . "'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        echo "Data updated ";
    } else {
        echo "data not updated";
    }
}
ob_end_flush();
?>