<?php
require_once "../../conn/session.php";
$id = mysqli_real_escape_string($conn, $_GET['id']);


$query = "delete from basket where product_id = '$id'";
$execute = mysqli_query($conn, $query) or die ("Unsuccssfull Query");