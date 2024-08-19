<?php
ob_start();
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');
$id = $_GET["id"];
$query = "SELECT * FROM courses where id = '" . $id . "'";
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Enter Course Name</label>
                            <input type="text" class="form-control" value="<?php echo $row["cname"]; ?>" name="cname" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Course Duration</label>
                            <input type="text" class="form-control" value="<?php echo $row["duration"]; ?>"  name="duration" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Monthly fess</label>
                            <input type="text" class="form-control" value="<?php echo $row["fess"]; ?>" name="fess" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <!-- <label>Upload image:</label> -->
                            <img src="uploads/<?php echo $row["img"]; ?>" width="100" height="100" />
                            <input type="file" class="form-control" id="Name" name="file">

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Course Description:</label>
                            <textarea name="description" class="form-control" cols="30" rows="5"><?php echo $row["description"]; ?></textarea>
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
    $cname = $_POST['cname'];
    $cduration = $_POST['duration'];
    $cfees = $_POST['fess'];
    $img = $_FILES['file']['name'];
    $cdescription = $_POST['description'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $image = move_uploaded_file($tmp_name, "uploads/" . $img);
    $ins = "update courses set cname = '" . $cname . "', duration = '" . $cduration . "', fess = '" . $cfees . "', img = '" . $img . "', description = '" . $cdescription . "' where id = '" . $id . "'";
    $query = mysqli_query($connect, $ins);
    header('Location:courses.php');
    ob_end_flush();
}
?>