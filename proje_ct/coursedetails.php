<?php
include('connection.php');
include('Admin/includes/links.php');
include('Admin/includes/header.php');
include('nav.php');
$id = $_GET["id"];
$query = "SELECT* FROM courses where id = '".$id."'";
$result= mysqli_query($connect,$query);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["description"];
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
</body>
</html>
<?php
include ('footer.php');
?>
