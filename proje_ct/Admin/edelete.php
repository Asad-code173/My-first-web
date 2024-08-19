<?php
ob_start();
include('../connection.php');
include('includes/links.php');
include('includes/header.php');
include('includes/sidebar.php');
$id = $_GET["id"];
$query = "DELETE FROM contactus where id = '" . $id . "'";
$result = mysqli_query($connect, $query);
if ($result) {
    header('Location:enquiries.php');
}
ob_end_flush();
?>