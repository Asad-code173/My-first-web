<?php
ob_start();
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');
$id = $_GET["id"];
$query = "DELETE FROM students where id = '".$id."'";
$result= mysqli_query($connect,$query);
header('Location:students.php');
ob_end_flush();
?>