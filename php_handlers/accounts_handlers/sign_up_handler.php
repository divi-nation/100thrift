<?php
 
require_once "../../conn/session.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    
</head>
<body>
    
</body>
</html>
<?php
$submit = $_POST['sign_up'];

if (isset($submit)){
    $full_name        = $_POST['full_name'];
    $email            = $_POST['email'];
    $location         = $_POST['location'];
    $phone            = $_POST['phone'];
    $password         = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    $query = $conn->prepare("insert into users (
        `full_name`, 
        `email`,
        `location`,
        `phone`,
        `password`)

    values (?,?,?,?,?)");

    $query->bind_param("sssss", 
        $full_name, 
        $email, 
        $location, 
        $phone,
        $password);

    $query->execute();

    if($query){
        echo '<script>swal("Accounts Created Succesfully", {
            title: "Success",
            button: {
                text: "Log-in",
              },
              icon: "success",
          });;</script>';
          header("refresh:5; url=../../accounts.php");

    }

    else{
        echo '<script>swal("Something Went Wrong", {
            title: "Accounts was not created",
            button: {
                text: "Try Again",
              },
              icon: "error",
          });;</script>';
          header("refresh:5; url=../../accounts.php");


    }
 



}