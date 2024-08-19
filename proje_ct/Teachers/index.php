<?php
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
                <h6 style="text-align: center;font-size:larger;font-style:italic;">Time Table
                </h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>         
                            <th>id</th>
                            <th>Batch</th>
                            <th>Days</th>
                            <th>Timing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT b.id,b.days,b.time,c.cname
                        FROM batch b  INNER JOIN courses c ON b.courses = c.id";
                        $sel = mysqli_query($connect,$query);
                        while ($row = mysqli_fetch_assoc($sel)) {
                            ?>
                        <tr>
                        <td><?php echo $row["id"];?></td>
                            <td><?php echo $row["cname"];?></td>
                            <td><?php echo $row["days"];?></td>
                            <td><?php echo $row["time"];?></td>
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