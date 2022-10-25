<?php require_once "conn/session.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel='stylesheet' href='css/general.css'>
    <link rel='stylesheet' href='components/navigation/style.css'>
    <link rel="stylesheet" href="components/footer/style.css">
    <link rel='stylesheet' href="css/shop.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="javascript/front_end_script.js"></script>
    <script
			  src="https://code.jquery.com/jquery-3.6.1.js"
			  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
			  crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            var shop_count = 12;
            $("button").click(function(){
                shop_count = shop_count + 6;
                $(".content").load("php_handlers/shop_handler/shop_handler.php", {
                    new_shop_count: shop_count

                });


            });
        });


    </script>
  

</head>
<body>
    <?php require_once "components/navigation/index.php"?>
    <div class="content">

            
        <?php
        
            $search = $_POST['search'];
            
            if(isset($search)){
                $search_product_name = $_POST['search_product_name'];
                $search_product_name = substr($search_product_name, 0, 3);


                $query = "select * from products where name like '%$search_product_name%'";
                $result = $conn->query($query);
            }
            else{

                $query = "select * from products limit 12";
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

                    require "components/shop/shop_card.php";

        
                    

                }
            }
            unset($_POST['search']);

            $search = "all";




        ?>

<button>Load more</button>


   

         
   
 
       
       
 
    </div>

 

    
</body>
</html>