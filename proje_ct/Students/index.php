<?php
ob_start();
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="card-shadow mb-4">
            <div class="card-header py-3">
                <h6 style="font-size: 24px;text-align:center;font-style:italic;">Assignements
                </h6>
            </div>
        </div>
        <div class="row mt-5">
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
</body>

</html>