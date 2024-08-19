<?php
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');
if (isset($_POST["submit"])) {
    $days = $_POST["days"];
    $time = $_POST["time"];
    $teacher = $_POST["selteacher"];
    $course = $_POST["cname"];
    $days = $_POST["days"];
    $time = $_POST["time"];
    $query = "INSERT INTO batch VALUES ('','" . $days . "','" . $time . "','" . $teacher . "','" . $course . "')";
    $result = mysqli_query($connect, $query);
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
    <div class="modal fade" id="assigncoursesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Course Name:</label>
                            <select class="form-control" name="coursename">
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
                        <div class="form-group">
                            <label>Teacher:</label>
                            <select class="form-control" name="selteacher">
                                <option value="0" selected>Select Teachers</option>
                                <?php
                                $query = "select*from teachers";
                                $result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>;

                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Days:</label>
                            <select class="form-control" name="days">
                                <option value="0" selected>Select Days</option>
                                <option>MWF</option>
                                <option>TTS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>time:</label>
                            <select class="form-control" name="time">
                                <option value="0" selected>Select time</option>
                                <option>1pm to 3pm</option>
                                <option>3pm to 5pm</option>
                                <option>5pm to 7pm</option>
                                <option>7pm to 9pm</option>
                                <option>9pm to 11pm</option>
                            </select>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="submit" name="submit" class="btn btn-primary">Assigned</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card-shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m0 font-weight-bold text-primary">Assign Batches
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#assigncoursesModal">
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
                                    <th>Teacher Name</th>
                                    <th>Course Name</th>
                                    <th>Days</th>
                                    <th>Timing</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT b.id,b.days,b.time,t.name,c.cname
FROM batch b INNER JOIN teachers t ON b.teachers = t.id INNER JOIN courses c ON b.courses = c.id";
                                $result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row["id"]; ?></td>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><?php echo $row["cname"]; ?></td>
                                        <td><?php echo $row["days"]; ?></td>
                                        <td><?php echo $row["time"]; ?></td>
                                        <td><a href="editassigncourses.php?id=<?php echo $row["id"]; ?>" class="btn btn-success ">Edit</a></td>
                                <td><a href="delassigncourses.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger ">Delete</a></td>
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
    </div>
</body>

</html>