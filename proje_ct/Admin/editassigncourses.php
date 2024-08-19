<?php
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');
$id = $_GET["id"];
$query = "SELECT * FROM batch inner join teachers on batch.teachers=teachers.id inner join courses on batch.courses=courses.id and batch.id = '" . $id . "'";

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
            <div class="card-shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="text-align:center;font-style:italic;font-size:19px;">Edit Batches
                    </h6>
                </div>
            </div>
            <form action="" method="post">
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Teacher Name</label>

                           

                            <select class="form-control" name="selteacher">
                                <option value="<?php echo $row["id"]; ?>" selected>
                                    <?php echo $row["name"]; ?>
                                </option>
                                <?php
                                $query_teacher = "SELECT * FROM teachers";
                                $result_teacher = mysqli_query($connect, $query_teacher);
                                if ($result_teacher) {
                                    while ($row_teacher = mysqli_fetch_assoc($result_teacher)) {
                                        echo '<option value="' . $row_teacher["id"] . '">' . $row_teacher['name'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Course Name</label>
                            <?php echo $row["cname"]; ?>
                            <select class="form-control" name="cname">
                                <option value="<?php echo $row["id"]; ?>" selected>
                                    <?php echo $row["cname"]; ?>
                                </option>
                                <?php
                                $query_courses = "SELECT * FROM courses";
                                $result_courses = mysqli_query($connect, $query_courses);
                                if ($result_courses) {
                                    while ($row_courses = mysqli_fetch_assoc($result_courses)) {
                                        echo '<option value="' . $row_courses["id"] . '">' . $row_courses['cname'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Days</label>
                            <select class="form-control" name="days">
                                <!-- <option value="0" selected>Select Days</option> -->
                                <option value="<?php echo $row["days"]; ?>"selected>MWF</option>
                                <option value="<?php echo $row["days"]; ?>"selected>TTS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Timing</label>
                            <select class="form-control" name="time">
                                <option value="<?php echo $row['time'];?>" selected><?php echo $row["time"];?></option>
                                <option value="11am to 1pm">11am to 1pm</option>
                                <option value="1pm to 3pm">1pm to 3pm</option>
                                <option value="3pm to 5pm">3pm to 5pm</option>
                                <option value="5pm to 7pm">5pm to 7pm</option>
                                <option value="7pm to 9pm">7pm to 9pm</option>
                                <option value="9pm to 11pm">9pm to 11pm</option>
                            </select>
                    
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="update" class="btn btn-primary" value="update">Save changes</button>
                    </div>
                </div>
        </div>
        </form>
        </div>
    </body>

    </html>
<?php
}

if (isset($_POST["update"])) {
    $name = $_POST["selteacher"];
    $cname = $_POST["cname"];
    $days = $_POST["days"];
    $timing = $_POST["time"];
    $update = "UPDATE batch SET teachers = '$name', courses = '$cname', days = '$days', time = '$timing' WHERE id = '$id'";
    $query = mysqli_query($connect, $update);
    if ($query) {
        echo "editted successfully";
    } else {
        echo "Error editing: " . mysqli_error($connect);
    }
}

?>