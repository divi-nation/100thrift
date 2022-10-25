<?php require_once "../general.php";

$id = mysqli_real_escape_string($conn, $_GET['id']);

$query = "delete from products where product_id = '$id'";
$execute = mysqli_query($conn, $query);
 

$query = "delete from basket where product_id = '$id'";
$execute = mysqli_query($conn, $query);
 

