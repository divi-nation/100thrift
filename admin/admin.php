<?php require_once "handlers/general.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="../javascript/front_end_script.js"></script>
</head>
<body>
    <div class="container">
        <div class="add_new_product">
            <div class="a_title">
                <h4>ADD A NEW PRODUCT</h4>
                <div class="icon" onclick="toggle_items('.add_new_product')"></div>
            </div>
            <form action="handlers/create/add_product.php" method="post" enctype = "multipart/form-data">
                <input type="text" class="" name="name" placeholder="Product Name">
                <input type="text" class="" name="category" placeholder="Product Catergory">
                <input type="text" class="" name="brand" placeholder="Product Brand">
                <input type="text" class="" name="price" placeholder="Product Price">
                <input type="text" class="" name="qty" placeholder="Product Quantity">
                <input type="text" class="" name="description" placeholder="Product Description">
               
 
                <div class="images">
                <label>Add to Iconics?</label>

                <select name="iconic">
                    <option>yes</option>
                    <option selected>no</option>

                </select>

                    <label>Product Image 1</label>
                    <input type="file" class="" name="post_image_1">

                    <label>Product Image 2</label>
                    <input type="file" class="" name="post_image_2">
                </div>

                <div class="submit cen">
                    <input name='add_product' type="submit" value="Add">
                </div>
              
            </form>

        </div>

        <div class="left">
         
            <div class="logo">
                <h4>100Thrift</h4>
                <div class="menu_icon" onclick="toggle_items('.left')">

                </div>

            </div>

            <div class="menu_n_subs">
                <div class="overflow">
                    <div class="menu_n_sub">
                        <div class="menu">
                            <h3>Overview</h3>
    
                        </div>
                        <div class="sub">
                            <div class="sub_item">
                                <h6>Analytics</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Trends</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Finances</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Marketing</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Updates</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Payments</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Security</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Leverage</h6>
                            </div>
                        </div>
                    </div>
                    <div class="menu_n_sub">
                        <div class="menu">
                            <h3>Main Navigation</h3>
    
                        </div>
                        <div class="sub">
                            <div class="sub_item" onclick="toggle_items('.add_new_product')">
                                <h6>Add Product</h6>
                            </div>
                            <div class="sub_item" onclick="location.href='delete_product.php'">
                                <h6>Remove Product</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Add to Brands</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Remove from Brands</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Add Product Catergory</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Remove Product Category</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Edit Homepage Products</h6>
                            </div>
                             
                           
                        </div>
                    </div>
                    <div class="menu_n_sub">
                        <div class="menu">
                            <h3>Updates</h3>
    
                        </div>
                        <div class="sub">
                            <div class="sub_item" onclick="location.href='edit_products.php'">
                                <h6>Update Product</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Update Iconics</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Update Brand</h6>
                            </div>
                             
                        </div>
                    </div>

                    <div class="menu_n_sub">
                        <div class="menu">
                            <h3>Users</h3>
    
                        </div>
                        <div class="sub">
                            <div class="sub_item">
                                <h6>Add User</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Edit User Information</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Email User</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Remove User</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Ban User User</h6>
                            </div>
                             
                        </div>
                    </div>
                    <div class="menu_n_sub">
                        <div class="menu">
                            <h3>Promotions</h3>
    
                        </div>
                        <div class="sub">
                            <div class="sub_item">
                                <h6>Run Promo</h6>
                            </div>
                            <div class="sub_item">
                                <h6>End Promo</h6>
                            </div>
                            <div class="sub_item">
                                <h6>Halt Promo</h6>
                            </div>
                           
                             
                        </div>
                    </div>

                </div>
             

            </div>
           

        </div>

        <div class="right">
            <div class="tabs">
                <div class="mobile_menu_btn" onclick="toggle_items('.left')">

                </div>

                <div class="t_left cen">
                    <div class="icon">

                    </div>
    
                    <div class="tab_item cen">
                        <div class="icon"></div>
                        <h6>Tasks</h6>
                    </div>
    
                    <div class="tab_item cen">
                        <div class="icon"></div>
                        <h6>Email</h6>
                    </div>
    
                    <div class="tab_item cen">
                        <div class="icon"></div>
                        <h6>Settings</h6>
                    </div>

                </div>
                <div class="t_right">
                    <div class="icon oim"></div>
                    <div class="icon oim"></div>

                    <div class="current_admin">
                        <div class="a_left">
                            <div class="profile_image"></div>
                        </div>
                        <div class="a_right">
                            <div class="a_name">
                                <h6>Mr. Bawa</h6>
                            </div>
                            <div class="a_role">
                                <p>project lead</p>

                            </div>
                        </div>
                    </div>
                    <div class="icon"></div>
                    <div class="icon"></div>
                </div>
               

            </div>
            <div class="banner">
                <div class="b_text">
                    <h5>100thrift<span> - Admin Panel</span></h5>
                </div>
                <div class="b_comment">
                    <h6>All administative task on 'https:100thrift.store' can be performed here</h6>
                </div>

            </div>

            <div class="card_row">
                <div class="overflow">
                    <div class="card">
                        <div class="icon">
    
                        </div>
                        <div class="value">
                            <h5>GHC 0</h5>
    
                        </div>
                        <div class="des1">Total Revenue</div>
                        <div class="des2"><span>Total amount </span>paid into 100Thrift's bank account</div>
    
                    </div>
                    <div class="card">
                        <div class="icon">
    
                        </div>
                        <div class="value">
                            <h5>0</h5>
    
                        </div>
                        <div class="des1">Total Orders</div>
                        <div class="des2">Number of <span>Successful Orders</span> Made</div>
    
                    </div>
                    <div class="card">
                        <div class="icon">
    
                        </div>
                        <div class="value">
                            <h5>GHC 0</h5>
    
                        </div>
                        <div class="des1">Net Profit</div>
                        <div class="des2"><span>Amount</span> when expenses are subtracted</div>
    
                    </div>
    

                </div>
            
            </div>

            <div class="some_title">
                <div class="btn cen">
                    <div class="icon"></div>
                    <h5>View Complete report</h5>
                </div>

            </div>

            <div class="recent_activities">
                <div class="recent_orders">
                    <div class="sub_header">
                        <h6>RECENT ORDERS</h6>
                    </div>

                    <div class="order_lables">
                        <span>User</span>
                        <span>Product</span>
                        <span>Amount</span>
                    </div>

                    <div class="orders">
                        <div class="order_item">
                            <div class="item">
                                <h6>Jollof Rice</h6>
                            </div>
                            <div class="destination">
                                <h6>Honesty Hostel</h6>

                            </div>
                            <div class="state">
                                <h6>Delivery Ongoing</h6>

                            </div>
                        </div>
                     
                    </div>

                </div>

                <div class="recent_orders">
                    <div class="sub_header">
                        <h6>RECENT USERS</h6>
                    </div>
                    <div class="order_lables">
                        <span>Username</span>
                        <span>Email</span>
                        <span>Phone</span>
                        <span>Location</span>

                    </div>

                
                    <div class="orders">
                    <?php
                        $query = "select * from users";
                        $result = mysqli_query($conn, $query) or die ("unsuccessful query");
                        $row = mysqli_fetch_array($result);

                                                
                        if ($result->num_rows > 0){
                                while ($row = $result-> fetch_assoc()){
                                    $full_name  = $row['full_name'];
                                    $email      = $row['email'];
                                    $phone      = $row['phone'];
                                    $location   = $row['location'];

                                    echo '

                                        <div class="order_item">
                                            <div class="item">
                                                <h6>'.$full_name.'</h6>
                                            </div>
                                            <div class="item">
                                                <h6>'.$email.'</h6>
                
                                            </div>
                                            <div class="item">
                                                <h6>'.$phone.'</h6>
                
                                            </div>
                                            <div class="item">
                                                <h6>'.$location.'</h6>
                
                                            </div>
                                    </div>
                                        
                                    ';

                                }
                            }
                                

                    ?>
                       

                    </div>

                </div>

            </div>

            <div class="reviews">
                <div class="complains">
                    <div class="sub_header">
                        <div class="icon"></div>
                        <h6>COMPLAINS</h6>
                    </div>

                    <div class="complain_item">
                        <div class="icon"></div>
                        <div class="complaint">
                            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id provident porro accusantium veniam, modi nobis minima magnam commodi totam explicabo recusandae a, sed doloremque, praesentium vitae tempore quam aperiam velit.</h6>
                        </div>
                        <div class="user">
                            <h6>11:45PM</h6>
                            <h6>Mr. Pinehas</h6>
                        </div>
                    </div>
                    <div class="complain_item">
                        <div class="icon"></div>
                        <div class="complaint">
                            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id provident porro accusantium veniam, modi nobis minima magnam commodi totam explicabo recusandae a, sed doloremque, praesentium vitae tempore quam aperiam velit.</h6>
                        </div>
                        <div class="user">
                            <h6>11:45PM</h6>
                            <h6>Mr. Pinehas</h6>
                        </div>
                    </div>
                    <div class="complain_item">
                        <div class="icon"></div>
                        <div class="complaint">
                            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id provident porro accusantium veniam, modi nobis minima magnam commodi totam explicabo recusandae a, sed doloremque, praesentium vitae tempore quam aperiam velit.</h6>
                        </div>
                        <div class="user">
                            <h6>11:45PM</h6>
                            <h6>Mr. Pinehas</h6>
                        </div>
                    </div>
                    <div class="complain_item">
                        <div class="icon"></div>
                        <div class="complaint">
                            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id provident porro accusantium veniam, modi nobis minima magnam commodi totam explicabo recusandae a, sed doloremque, praesentium vitae tempore quam aperiam velit.</h6>
                        </div>
                        <div class="user">
                            <h6 class="bar">11:45PM</h6>
                            <h6>Mr. Pinehas</h6>
                        </div>
                    </div>

                </div>
                <div class="notes">
                    <div class="sub_header">
                        <div class="icon"></div>
                        <h6>NOTES</h6>
                    </div>

                    <div class="notes_list">
                        <div class="note">
                            <div class="n_left">
                                <div class="icon"></div>
                            </div>
                            <div class="n_right">
                                <h5>We're to meet at 1:00PM</h5>
                                <h6>Mr. Bawa</h6>
                            </div>
                          
                        </div>
                         
                    </div>
                    <div class="note">
                        <div class="n_left">
                            <div class="icon"></div>
                        </div>
                        <div class="n_right">
                            <h5>We're to meet at 1:00PM</h5>
                            <h6>Mr. Bawa</h6>
                        </div>
                      
                    </div>
                    <div class="note">
                        <div class="n_left">
                            <div class="icon"></div>
                        </div>
                        <div class="n_right">
                            <h5>We're to meet at 1:00PM</h5>
                            <h6>Mr. Bawa</h6>
                        </div>
                      
                    </div>
                    
                     
                </div>
             
                 
            </div>
        
             
        </div>
                </div>
    
            </div>

            
        </div>

    </div>
    <script src="../javascript/script.js"></script>
    
</body>
</html>