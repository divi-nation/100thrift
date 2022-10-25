<?php require_once "../../conn/session.php";?>
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
$log = $_POST['log_in'];

if(isset($log)){
    $email           = $_POST['email'];
    $password        = $_POST['password'];

    $admin_email     = "admin@100thrift";
    $admin_password  = "heratic123!";

    if($email == $admin_email){
        if($password == $admin_password){
            header("refresh: 1, url=../../admin/admin.php");
        }
    }
    else{
        $query = "select user_id, password from users where email = '$email'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
    
        $id = $row['user_id'];
        $db_password = $row['password'];
    
        if ($db_password != null){
    
            if ($password != $db_password){
                echo '<script>swal("Incorrect Password!", {
                    button: {
                        text: "Try Again",
                      },
                      icon: "error",
                  });;</script>';
                header("refresh:2; url=../../accounts.php");

                
            }
            else{
                $_SESSION['id'] = $id;
                echo '<script>swal("Login Successful", {
                      button: false,
                      icon: "success",
                  });;</script>';
        
                header("refresh:2; url=../../index.php");
            }
     
    
        }
        
       
        else{
            echo '<script>swal("Incorrect Credentials!", {
                button: {
                    text: "Try Again",
                  },
                  icon: "error",
              });;</script>';
              header("refresh:2; url=../../accounts.php");

    
        }

    }

  

    
}