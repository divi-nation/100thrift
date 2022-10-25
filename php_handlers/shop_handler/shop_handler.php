<?php
    require_once "../../conn/session.php";


    
    $search = $_POST['search'];
    
    if(isset($search)){
        $search_product_name = $_POST['search_product_name'];

        $query = "select * from products where name ='$search_product_name'";
        $result = $conn->query($query);
    }
    else{
        $new_shop_count = $_POST['new_shop_count'];

        $query = "select * from products limit $new_shop_count";
        $result = $conn->query($query);


    }


    if ($result->num_rows > 0){
        while ($row = $result-> fetch_assoc()){
            $id    = $row['product_id'];
            $name  = $row['name'];
            $price = $row['price'];
            $post_image_1 = $row['post_image_1'];
            $post_image_2 = $row['post_image_2'];

            // $image_one = $row['image_one'];
            // $image_two = $row['image_one'];

            require "../../components/shop/shop_card.php";

 
            

        }
    }
    unset($_POST['search']);

    $search = "all";




?>