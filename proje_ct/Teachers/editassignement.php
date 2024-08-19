<?php
ob_start();
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');
$id = $_GET["id"];
$query = "SELECT * FROM create_assign where id = '" . $id . "'";
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
                    <h6 style="text-align:center;font-style:italic;font-size:24px;">Edit Assignement
                    </h6>
                </div>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Batch</label>
                            <input type="text" class="form-control" value="<?php echo $row["batch"]; ?>" id="Name" name="batch" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">topic</label>
                            <input type="text" class="form-control" value="<?php echo $row["topic"]; ?>" id="Name" name="topic" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Marks</label>
                            <input type="marks" class="form-control" value="<?php echo $row["marks"]; ?>" id="Name" name="marks" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Due Date</label>
                            <input type="text" class="form-control" value="<?php echo $row["duedate"]; ?>" id="Name" name="duedate" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Upload image:</label>
                            <label for=""><?php echo $row["file"];?></label>
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
if (isset($_POST["update"])) {
    $batch = $_POST["batch"];
    $topic = $_POST["topic"];
    $marks = $_POST["marks"];
    $duedate = $_POST["duedate"];
    $query = "UPDATE create_assign set batch = '" . $batch . "', topic = '" . $topic . "', marks = '" . $marks . "', duedate = '" . $duedate . "' where id = '" . $id . "'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        echo "edited assignement successfully";
    } else {
        echo "data not editd";
    }
}


?>