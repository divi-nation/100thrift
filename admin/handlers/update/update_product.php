<?php
require_once "../general.php";
$id = mysqli_real_escape_string($conn, $_GET['id']);
 

if (isset($_POST['update'])){

    $name        = $_POST['name'];
    $price       = $_POST['price'];
    $description = $_POST['description'];
    $category    = $_POST['category'];
    $brand       = $_POST['brand'];
    $qty         = $_POST['qty'];
    $iconic      = $_POST['iconic'];


    if($name!=null){
        $query = "update products set name = '$name' where product_id = '$id'";
        $execute = mysqli_query($conn, $query) or die ("Unsuccessful Query");
        if($query){
            echo "great";
        }
        else{
            echo "sloww";
        }
    }


    if($price!=null){
        $query = "update products set price = '$price' where product_id = '$id'";
        $execute = mysqli_query($conn, $query) or die ("Unsuccessful Query");
        if($query){
            echo "great 1";
        }
        else{
            echo "sloww";
        }
    }

    if($description!=null){
        $query = "update products set description = '$description' where product_id = '$id'";
        $execute = mysqli_query($conn, $query) or die ("Unsuccessful Query");
        if($query){
            echo "great 2";
        }
        else{
            echo "sloww";
        }
    }

    if($category!=null){
        $query = "update products set category = '$category' where product_id = '$id'";
        $execute = mysqli_query($conn, $query) or die ("Unsuccessful Query");
        if($query){
            echo "great 3";
        }
        else{
            echo "sloww";
        }
    }

    if($brand!=null){
        $query = "update products set brand = '$brand' where product_id = '$id'";
        $execute = mysqli_query($conn, $query) or die ("Unsuccessful Query");
        if($query){
            echo "great4";
        }
        else{
            echo "sloww";
        }
    }

    if($iconic!=null){
        $query = "update products set iconic = '$iconic' where product_id = '$id'";
        $execute = mysqli_query($conn, $query) or die ("Unsuccessful Query");
        if($query){
            echo "great4";
        }
        else{
            echo "sloww";
        }
    }

    if($qty!=null){
        $query = "update products set qty = '$qty' where product_id = '$id'";
        $execute = mysqli_query($conn, $query) or die ("Unsuccessful Query");
        if($query){
            echo "great5";
        }
        else{
            echo "sloww";
        }
    }



}