<?php         
               echo 'hel lorem2sdfeklsendvlsdnvsdjv lo';
               $query = "select post_image_1 from products order by product_id desc limit 5";
                    $result = $conn->query($query);

                    if ($result->num_rows > 0){
                        while ($row = $result-> fetch_assoc()){
                            $post_image_1 = $row['post_image_1'];

                            echo '
                                <div class="h_image">
                                     <img src="products/'.$post_image_1.'">
                                </div>


                            
                            
                            ';
            
                        
            
                
                            

                        }
                    }
      


                 ?>

                  
                </div>