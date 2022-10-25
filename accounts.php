<?php require_once "conn/session.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
    <link rel='stylesheet' href='css/general.css'>
    <link rel='stylesheet' href='components/navigation/style.css'>
    <link rel="stylesheet" href="components/footer/style.css">
    <link rel="stylesheet" href="css/accounts.css">
    <script src = 'javascript/front_end_script.js' defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>
<body>
    <?php require_once "components/navigation/index.php"?>
    <div class="content cen">
        <div class="box one">
            <div class="header">
                <h5>Welcome</h5>
                <h6 onclick="toggle_items('.one'); toggle_items('.two');">Don't have an account?</h6>
            </div>
            <form action='php_handlers/accounts_handlers/log_in_handler.php' method='post'>
                <input class="input" name='email' type="text" placeholder="Email">
                <input class="input"type="text" name='password' placeholder="Password">
                <input class="submit"type="submit" name='log_in' value="Log-in">

            
            </form>
        </div>
        <div class="box two">
            <div class="header">
                <h5>Welcome</h5>
                <h6 onclick="toggle_items('.one'); toggle_items('.two');">Already have an account?</h6>
            </div>
            <form action='php_handlers/accounts_handlers/sign_up_handler.php' method='post'>
                <input class="input" type="text" name='full_name' placeholder="Full Name">
                <input class="input"type="email" name='email' placeholder="Email">
                <input class="input"type="text" name='location' placeholder="Location">
                <input class="input"type="text" name='phone' placeholder="Phone">
                <input class="input"type="text" name='password' placeholder="Password">
                <input class="input"type="text" name='confirm_password' placeholder="Confirm Password">
                <input class="submit"type="submit" name='sign_up' value="Sign-Up">

            
            </form>
        </div>

    </div>
    <script></script>
    
</body>
</html>