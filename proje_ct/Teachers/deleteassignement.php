<?php
ob_start();
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');
$id = $_GET["id"];
$query = "DELETE FROM create_assign where id = '".$id."'";
$result= mysqli_query($connect,$query);
header('Location:createassignment.php');
ob_end_flush();

?>