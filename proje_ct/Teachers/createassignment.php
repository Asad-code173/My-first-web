<?php
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');
if (isset($_POST["submit"])) {
    $batch = $_POST["batch"];
    $topic = $_POST["topic"];
    $marks = $_POST["marks"];
    $duedate = $_POST["duedate"];
    $file = $_FILES["file"]["name"];
    $tmp_name = $_FILES['file']['tmp_name'];
    $doc = move_uploaded_file($tmp_name, "assignements/" . $file);
    $query = "insert into create_assign values('','" . $batch . "','" . $topic . "','".$marks."','" . $duedate . "',
    '" . $file . "')";
    $ins = mysqli_query($connect, $query);
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
    <div class="modal fade" id="assignementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label>Batch:</label>
                            <input type="text" class="form-control" id="Name" placeholder="Duration" name="batch">
                        </div>
                        <div class="form-group">
                            <label>Topic</label>
                            <input type="text" class="form-control" id="Name" name="topic">
                        </div>
                        <div class="form-group">
                            <label>Marks</label>
                            <input type="text" class="form-control" id="Name" name="marks">
                        </div>
                        <div class="form-group">
                            <label>Due Date</label>
                            <input type="date" class="form-control" id="Name" name="duedate">
                        </div>
                        <div class="form-group">
                            <label>Attach file</label>
                            <input type="file" class="form-control" id="Name" name="file">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="submit" name="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="card-shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m0 font-weight-bold text-primary">Create
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#assignementModal">
                        Assignement
                </h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Batch</th>
                            <th>Topic</th>
                            <th>Marks</th>
                            <th>Due Date</th>
                            <th>File</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM create_assign";
                        $result = mysqli_query($connect, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>

                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["batch"]; ?></td>
                                <td><?php echo $row["topic"]; ?></td>
                                <td style="text-align: center;"><?php echo $row["marks"]; ?></td>
                                <td><?php echo $row["duedate"]; ?></td>
                                <td><?php echo $row["file"]; ?></td>
                                <td><a href="editassignement.php?id=<?php echo $row["id"]; ?>" class="btn btn-success ">Edit</a></td>
                            <td><a href="deleteassignement.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger ">Delete</a></td>
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