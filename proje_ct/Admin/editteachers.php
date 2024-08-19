<?php
ob_start();
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');
$id = $_GET["id"];
$query = "SELECT * FROM teachers where id = '" . $id . "'";
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
            <h1 style="text-align: center;">Edit Teachers</h1>
            <br>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" value="<?php echo $row["name"]; ?>" id="Name" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="email" class="form-control" value="<?php echo $row["email"]; ?>" id="Name" name="email" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Contact Number</label>
                            <input type="number" class="form-control" value="<?php echo $row["phone"]; ?>" id="Name" name="phone" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" value="<?php echo $row["address"]; ?>" id="Name" name="address" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Qualification</label>
                            <select class="form-control"  name="qualification">
                            <option value="<?php echo $row['qualification'];?>" selected><?php echo $row["qualification"];?></option>
                            <option value="Bachelors">Bachelors</option>
                                <option value="Masters">Masters</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Experience</label>
                            <select class="form-control" name="experience">
                               
                                <option value="<?php echo $row['experience']; ?>"><?php echo $row["experience"];?></option>
                                <option value="1 years">1 years</option>
                                <option value="2 years">2 years</option>
                                <option value="3 years">3 year</option>
                                <option value="4 years">4 years</option>
                                <option value="5 years">5 year</option>
                                <option value="6 years">6 years</option>
                                <option value="7 years">7 year</option>
                                <option value="8 years">8 years</option>
                                <option value="9 years">9 years</option>
                                <option value="10 years">10 years</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Date Of birth:</label>
                            <input type="date" class="form-control" value="<?php echo $row["dob"]; ?>" id="Name" name="dob">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Date Of joining:</label>
                            <input type="date" class="form-control" value="<?php echo $row["doj"]; ?>" id="Name" name="doj">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select class="form-control"  name="gender">
                            <option value="<?php echo $row["gender"];?>" selected><?php echo $row["gender"];?></option>
                                
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>cnic:</label>
                            <input type="tel" class="form-control" id="Name" name="cnic" value="<?php echo $row["cnic"]; ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Upload image:</label><br>
                            <img src="uploads/<?php echo $row["image"]?>" width="100" height="100"/>
                            <input type="file" class="form-control" id="Name" name="file">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" value="update" name="update" class="btn btn-primary">Save changes</button>
                        </div>
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
    $ins = "UPDATE teachers SET name = '" . $name . "', email = '" . $email . "',phone = '" . $number . "',address = '" . $address . "',
    qualification = '" . $qualification . "', experience = '" . $experience . "', dob = '" . $dob . "',doj = '" . $doj . "',gender = '" . $gender . "',cnic = '" . $cnic . "',image = '" . $img . "' where id = '" . $id . "'";
    $query = mysqli_query($connect, $ins);
    header('Location:teachers.php');
    ob_end_flush();
}
?>