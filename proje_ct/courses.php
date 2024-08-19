<?php
include 'nav.php';
include 'connection.php';

include 'Admin/includes/links.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title>Cards</title>
    <link rel="stylesheet" href="Admin/style.css">
</head>




<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 style="color:#d1212b;text-align:center;">Tech courses</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">

        <div class="row mt-5">
            <?php
            $query = "SELECT * FROM courses";
            $result = mysqli_query($connect, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-md-4 col-sm-6 col-lg-4 mb-10">
                    <div class="cards">
                        <img src="Admin/uploads/<?php echo $row["img"] ?>"  height="100">
                        <h5 class="card-title mt-3 px-4" style="font-size:19px;">
                            <?php echo $row["cname"]; ?>
                        </h5>
                        <h5 class="cards-title" style="font-size:19px;">
                            Duration: <?php echo $row["duration"]; ?>
                            <hr style="line-height: 2px solid black;">
                        </h5>
                        <div class="text-center mt-5">
                            <a href="coursedetails.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger mb-5">Know Details</a>
                        </div>
                    </div>
                    <br>
                </div>

            <?php

            }
            ?>


        </div>


    </div>






</body>

</html>
<?php
include 'footer.php';
?>