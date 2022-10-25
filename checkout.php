<?php require_once "conn/session.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel='stylesheet' href='css/general.css'>
    <link rel='stylesheet' href='components/navigation/style.css'>
    <link rel="stylesheet" href="components/footer/style.css">
    <link rel="stylesheet" href="css/checkout.css">
    <script src = 'javascript/front_end_script.js' defer></script>

<body>
    <?php require_once "components/navigation/index.php"?>
    <div class="content">

    <?php

    $query = "select * from basket where user_id = '$id'";
    $result = $conn->query($query);


    if ($result->num_rows > 0){
        while ($row = $result-> fetch_assoc()){
            //current product id
            $product_id = $row['product_id'];


            $pro_query  = "select * from products where product_id = '$product_id'";
            $pro_result = mysqli_query ($conn, $pro_query);
            $pro_row    = mysqli_fetch_array($pro_result);

            //product details
            $name         = $pro_row['name'];
            $price        = $pro_row['price'];
            $description  = $pro_row['description'];
            $category     = $pro_row['category'];
            $brand        = $pro_row['brand'];
            $post_image_1 = $pro_row['post_image_1'];
           
            echo '


            <div class="checkout_item">
                <div class="item_image cen">
                    <img src="products/'.$post_image_1.'">

                </div>
                <div class="item_description">
                    <div class="path">
                        <h6>Home/Shop/'.$category.'/'.$name.'</h6>
                    </div>
                    <div class="product_name">
                        <h3>'.$name.'</h3>
                    </div>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    </div>
                    <div class="product_description">
                        <h6>'.$description.'</h6>
                    </div>
                    <div class="price">
                        <h5>GHC '.$price.'</h5>
                    </div>
                    <div class="line cen">
                        <div class="qty cen">
                            1
                        </div>
                        <div class="remove cen" onclick="location.href=\'php_handlers/checkout_handler/remove_from_basket.php?id='.$product_id.'\'">
                            <h6>Remove From Cart</h6>
                        </div>
                    
                    </div>
                    <div class="category">
                            <h5>Category: '.$category.'</h5>
                    </div>
                </div>

            </div>


            
         
            
            ';

            

        }
    }



    ?>

<div id="checkout" class="checkout cen" style="z-index: 3;" onclick='location.href=""'>
                Checkout
    </div>


        
        

    </div>

    <script>
        document.getElementById("checkoout").innerHTML="Checkout";
    </script>

    
</body>
</html>