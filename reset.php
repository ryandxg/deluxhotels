<?php
    require_once 'dml.php';
        $validation = new booking();
        $validation->change_password();
        
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <script src="https://kit.fontawesome.com/b32f1a67cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signup.css">
    </head>

    <body>
        
        <div class="logo"> <a href="landing.php" title="GO BACK TO HOME PAGE"> DELUX HOTEL </a></div>
         <form method="POST" action=""><br><br>
                    <i class="fas fa-user icon"></i>
                    
                    <?php 
                    if(isset($_SESSION['message']))
                    {
                        echo $_SESSION["message"];
                         $_SESSION["message"] = ""; 
                    }
                        ?>

                <div class="form-input">
                    <input type="password" placeholder="New Password" name="password1">
                    <input type="password" placeholder="Re-Type Password" name="password2">
                </div>

                <div class="message">
                    <a href="login.php">Back</a><br>
                    <span>Dont have an account yet? <a href="signup.php">Sign-Up</a> </span>
                </div>
                    
                    <input type="submit" class="submit" value="RESET" name="submit">
            </form>

    </body>
</html>