<?php session_start();




ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




//database connection

$conn = new mysqli('localhost', 'root', '', '100thrift');

if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
  

 
if (isset($_SESSION['id'])){
    $id = $_SESSION['id'];

    $query = "select email from users where user_id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    
    $signature = $row['email'];
 }

else{
     $signature = "Accounts";
 }

 

?>