<?php require_once '../../conn/session.php';
$product_id = mysqli_real_escape_string($conn, $_GET['id']);
 
if(isset($id)){
        $query = "insert into basket (`user_id`,`product_id`) values ('$id', '$product_id')";
    
    
        $execute = mysqli_query($conn, $query) or die ("Unsuccessful Query");
    
        if($query){
            echo 'done';
        }

}

else{
    header("refresh:1; url=../../accounts.php");

}


