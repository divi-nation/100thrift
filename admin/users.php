<?php require_once "handlers/general.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <div class="container">
        <div class="top_bar cen">
            <h4>Users</h4>
            <div class="icon">.
            </div>
        </div>
        <form class="cen">
            <input class="main" type="text" placeholder="search for a product">
            <input type="submit" value="Search">
        </form>

        <div class="products">
            <div class="banner">
                <div class="b_item">
                    <h4>Name</h4>
                </div>
                <div class="b_item">
                    <h4>Price</h4>
                </div>
            </div>

            <div class="product_loop">
                
                <?php

                $query = "select * from users";
                $result = $conn->query($query);


                if ($result->num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
                        $id    = $row['id'];
                        $name  = $row['full_name'];
                        $phone = $row['phone'];

                        
                        

                        echo "

 
                        

                        <div class='loop_item'>
                        <a class='link'href='edit.php?id={$id}'>Edit</a>

                            <div class='name'>
                                <h4>$name</h4>
                            </div>
                            <div class='Price'>
                                <h4>$phone</h4>
                            </div>
                        </div>

                        
                        ";

                        

                    }
                }

            

                ?>

            </div>
 
           
        </div>

        <p id='hours'>5</p>

        select

        
      
    </div>
    <script>
        function test(id){
            document.getElementById("hours").innerHTML = id;
        }
    </script>
    
</body>
</html>