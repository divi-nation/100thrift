<?php
//counting the number of items the user has added to cart
$basket_count = 0;
$query = "select * from basket where user_id = '$id'";
$result = $conn->query($query);
if ($result->num_rows > 0){
    while ($row = $result-> fetch_assoc()){
        $basket_count = $basket_count + 1;
    }

}

         
