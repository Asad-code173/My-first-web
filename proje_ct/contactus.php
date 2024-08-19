<?php
include 'connection.php';
include 'nav.php';
include 'Admin/includes/links.php';
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $sub = $_POST["sub"];
    $email = $_POST["email"];
    $contact = $_POST["phone"];
    $message = $_POST["message"];
    $query = "INSERT INTO contactus VALUES('','" . $name . "','".$sub."','" . $email . "','".$contact."','" . $message . "')";
    $result = mysqli_query($connect, $query);
    $to = "info@mlh.com.pk";
    $mail = mail($to,$sub,$message);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Admin/css/style.css">
</head>

<body>
    <div class="main">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.825370989091!2d67.14997451447917!3d24.938018248287396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3393aa6553ab3%3A0x1da31395fdfc4061!2sMalaysian%20Learning%20Hub!5e0!3m2!1sen!2s!4v1647368890619!5m2!1sen!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <h1 style="display:flex;justify-content:center;margin:15px;">Contact with us</h1>
    </div>
    <br><br>
    <div class="container" style="margin-top:10px;margin-bottom:10px">
        <div class="row">
            <div class="col-md-3 text-center" style="border-right-color:black;border-right:1px solid;">
                <i class="fa fa-whatsapp cus_icon_g" style="color:#e30613"></i>
                <p style="font-weight:bold"> WhatssApp </p>
                <p><a class="text-decoration-none text-dark" href="https://wa.me/+923231219136">03162754504</a><br> <a class="text-decoration-none text-dark" href="https://wa.me/02135122936">02135122936</a></p>
            </div>
            <div class="col-md-3 text-center">
                <i class="fa fa-phone cus_icon_g" style="color:#e30613"></i>
                <p style="font-weight:bold"> Phone </p>
                <p><a class="text-decoration-none text-dark" href="tel:021-111-248-338">(021) 111-248-338 </a><br> <a class="text-decoration-none text-dark" href="tel:021-351229315">(021) 35122931-5</a></p>
            </div>
            <div class="col-md-3 text-center" style="border-left-color:black; border-right-color:black;border-left:1px solid; border-right:1px solid">
                <i class="fa fa-map-marker cus_icon_g" style="color:#e30613"></i>
                <p style="font-weight:bold">Address</p>
                <p> Nadeem Residency, Main University Rd, Block 7 Gulistan-e-Johar, Karachi, Karachi City, Sindh</p>
            </div>

            <div class="col-md-3 text-center">
                <i class="fa fa-envelope cus_icon_g" style="color:#e30613"></i>
                <p style="font-weight:bold"> Email </p>
                <p><a class="text-decoration-none text-dark" href="mailto:info@admin.Mlh.pk">info@MLh.edu.pk</a> <br><a class="text-decoration-none text-dark" href="mailto:admissions@shu.edu.pk"> admissions@shu.edu.pk</a></p>
            </div>
        </div>
        <!-- contactform -->

        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Subject</label>
                <input type="text" name="sub" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Subject">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="tel" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="03232424424">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Message</label>
                <textarea class="form-control" placeholder="Enter your Message here" name="message"></textarea>

            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <br><br>


    <?php
    include 'footer.php';
    ?>

</body>

</html>