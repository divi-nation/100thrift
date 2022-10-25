<?php require_once "conn/session.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>100thift</title>
    <link rel='stylesheet' href='css/general.css'>
    <link rel='stylesheet' href='components/navigation/style.css'>
    <link rel="stylesheet" href="components/footer/style.css">
    <link rel='stylesheet' href='css/index.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


    <script src="javascript/front_end_script.js"></script>
    <script>
       $(document).ready(function(){

            $(".overflow").load("php_handlers/home_handler/showcase.php");

        });

</script>




</head>


<body>
    <?php
    require_once "components/navigation/index.php"?>
     <div class="content">
       
        <div class="main_image">
            <div class="showcase">
                    
                <div class="oveflow">
              
            
                </div>
            <div class="main_text">
                <h3>Always<br>Be Your<br>Self</h3>
                <h6>Any-wear, Any-time</h6>
                <div class="btn cen">
                <i class="bi bi-cart-check cen"></i>

                    <h5>Shop Now</h5>
                </div>
             </div>
             <div class="layer">             
                <div class="filter f1"></div>
                <div class="filter f2"></div>
                <div class="filter f3"></div>
             </div>

         </div>
         <div class="below cen">
            <div class="b_content">
                <div class="b_left">
                    <div class="l_top cen">
                        <img src='products/apple watch.jpg'>

                    </div>
                    <div class="l_bottom">
                        <div class="s_image cen">                        
                            <img src='products/apple watch.jpg'>
                        </div>
                        <div class="s_image cen">                        
                            <img src='products/apple watch.jpg'>
                        </div>

                    </div>
                </div>
                <div class="b_right">
                    <div class="r_top">
                        <div class="r_title">
                            Our Scope
                        </div>
                        <div class="r_pg">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, voluptates ipsa! Corrupti modi repellendus quod omnis esse adipisci ullam dicta.
                        </div>
                        <div class="r_button cen">
                            SHOP NOW

                        </div>
                    </div>
                    <div class="r_image cen">
                    <img src='products/apple watch.jpg'>


                    </div>
                </div>
            </div>

         </div>
       
         
        
 
    <?php require_once "components/footer/index.html"?>

   

    
</body>
</html>