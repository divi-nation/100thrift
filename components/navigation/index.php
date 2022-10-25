<?php require_once 'conn/session.php';
      require_once 'conn/fetch.php';
?>
    <div class="mobile_menu d_none">
        <div class="m_logo"></div>
        <div class="menu_icon cen" onclick="toggle_items('nav'); toggle_items('.mobile_menu')">
        <i class="bi bi-list"></i>

        </div>
    </div>

<nav>
 
    <div class="left">
    <div class="nav_item d_none" onclick='location.href="index.php"'>
            <h5>Home</h5>
        </div>
        <div class="nav_item" onclick="location.href='shop.php';">
            <h5>Shop</h5>
            <div class="hover shop">
                <div class="hover_shop_item">
                    <div class="head">
                        <h3>Casual</h3>
                    </div>
                    <div class="sub">
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>


                    </div>
                    
                </div>
                <div class="hover_shop_item">
                    <div class="head">
                        <h3>Official</h3>
                    </div>
                    <div class="sub">
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>


                    </div>
                    
                </div>
                <div class="hover_shop_item">
                    <div class="head">
                        <h3>Fashion</h3>
                    </div>
                    <div class="sub">
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>
                        <h6>T-Shirts</h6>


                    </div>
                    
                </div>


            </div>
        </div>
        <div class="nav_item" onclick="toggle_items('.iconics'); toggle_items('.close')">
            <h5>Iconics</h5>
            <div class="hover iconics">
                <div class="overflow">

                <?php
        
        

                    $query = "select * from products where iconic = 'yes' order by product_id desc limit 3";
                    $result = $conn->query($query);


        

                    if ($result->num_rows > 0){
                        while ($row = $result-> fetch_assoc()){
                            $name  = $row['name'];
                            $price = $row['price'];
                            $post_image_1 = $row['post_image_1'];

                            echo '

                            <div class="card">
                                <div class="title">Iconic</div>
                                <div class="image">
                                    <div class="shape bg">
                                        <img class="i_image" src="products/apple watch.jpg">
        
                                    </div>
                                    <div class="shape bg2"></div>
                                    <div class="shape three"></div>
                                    <div class="shape four"></div>
            
                                </div>
                                <div class="des">
                                    <div class="p_name">
                                        Apple Watch
                                    </div>
                                
                                    <div class="price">
                                        GHC 200
                                    </div>
                                    <div class="stars"></div>
                                </div>
                            </div>

                            
                            ';

                            
  
                
                            

                        }
                    }
                ?>
                  
                  
                
                  

                </div>
              

            </div>
        </div>
        <div class="nav_item" onclick="toggle_items('.brands'); toggle_items('.close')">

            <h5>Brands</h5>
            <div class="hover brands">
                <div class="brand_image">
                    <img src="assets/ck.png">

                </div>
                <div class="brand_image">
                    <img src="assets/lv.jpg">

                </div>
                <div class="brand_image">
                    <img src="assets/logo.jpg">

                </div>

            </div>
        </div>
       
        
    </div>
    <div class="logo cen" onclick="location.href='index.php'">
        <img src="assets/logo.jpg">
    </div>
    <div class="right">
        <div class="nav_item none" onclick="toggle_items('.search')">
            <h5>Search</h5>
        </div>
        <div class="nav_item" onclick="location.href='accounts.php'">
            <h5><?php echo $signature?></h5>
        </div>
     <div class="nav_item nav_cart cen">
            <i class="bi bi-bag-check"></i>
            <i class="bi bi-arrow-right"></i>

            <h5><?php echo $basket_count; ?></h5>



        </div>
       
    </div>
    <div class="overlay"></div>
    
    <div class="search cen">
        <form action="shop.php" method="post">
            <input name='search_product_name' class="search_field" type="text" placeholder='Search' onclick="add_items('.search_icon'); add_items('.search_field')"; >
            <input name='search' class="search_submit" type="submit">
            <div class="search_icon cen"><i class="bi bi-search"></i></div>
        </form> 

    </div>
    



</nav>
<div class="close" onclick="remove_items('.iconics'); remove_items('.brands'); toggle_items('.close')"></div>

<div id="checkout" class="checkout cen" onclick='location.href="checkout.php"'>
                View Cart
    </div>
<script src="../../javascript/front_end_script.js"></script>
 
