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
    <div class="container mt-5">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Email Address</th>
                            <th>Contact Number</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $enquiry = "SELECT* FROM contactus";
                        $result = mysqli_query($connect, $enquiry);
                        while ($contact = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo $contact["id"]; ?></td>
                                <td><?php echo $contact["name"]; ?></td>
                                <td><?php echo $contact["subject"]; ?></td>
                                <td><?php echo $contact["email"]; ?></td>
                                <td><?php echo $contact["phone"]; ?></td>
                                <td><?php echo $contact["Message"]; ?></td>
                                <td><a href="edelete.php?id=<?php echo $contact["id"]; ?>" class="btn btn-danger">Delete</a></td>
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