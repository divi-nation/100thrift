<?php

require_once "../general.php";

$submit = $_POST['add_product'];

if (isset($submit)){
    $name         = $_POST['name'];
    $category     = $_POST['category'];
    $price        = $_POST['price'];
    $qty          = $_POST['qty'];
    $description  = $_POST['description'];
    $brand        = $_POST['brand'];
    $iconic       = $_POST['iconic'];
   



    $file_name = time().basename($_FILES['post_image_1']['name']);
    $target = "../../../products/".$file_name;

    $post_image_1 = $file_name;
  
    if(move_uploaded_file($_FILES['post_image_1']['tmp_name'], $target)){
      $msg = "image uploaded successfully";
    }
    else{
      $msg = "There was a problem uploading image";
    }


// uploading image 2
    $file_name = time().basename($_FILES['post_image_2']['name']);
    $target = "../../../products/".$file_name;

    $post_image_2 = $file_name;
    

    if(move_uploaded_file($_FILES['post_image_2']['tmp_name'], $target)){
      $msg = "image uploaded successfully";
    }
    else{
      $msg = "There was a problem uploading image";
    }

    $query = $conn->prepare("insert into products (
        `name`, 
        `category`,
        `price`,
        `description`,
        `brand`,
        `iconic`,
        `post_image_1`,
        `post_image_2`, 
        `qty`)

    values (?,?,?,?,?,?,?,?,?)");

    $query->bind_param("sssssssss", 
        $name, 
        $category, 
        $price, 
        $description, 
        $brand,
        $iconic,
        $post_image_1,
        $post_image_2, 
        $qty);

    $query->execute();

    if($query){
        echo 'submitted';
    }

}



