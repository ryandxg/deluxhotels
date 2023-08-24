<?php 
    require 'dml.php';
    $validation = new Database_query();
    $validation->login();
?>
<!DOCTYPE html>
<html>
    <head>
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/> -->
    <script src="https://kit.fontawesome.com/b32f1a67cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signup.css">
    </head>
<style>
.stay
{
    display:flex;
    flex-direction:column;
    align-items:flex-start;
}
.information
{
    color: crimson;
    text-align: center;
    text-transform: capitalize;
    background-color:lightgray;
    font-size: 20px;
    font-weight: bolder;
}
</style>
    <body>
        
        <div class="logo"> <a href="landing.php" title="GO BACK TO HOME PAGE"> DELUX HOTEL </a></div>
         <form method="POST" action=""><br><br>
                    <i class="fas fa-user icon"></i>

                    <div name="message" class="information">
                        <?php 
                        if(isset($_SESSION["message"]))
                        {
                            echo $_SESSION['message'];
                            $_SESSION["message"] = "";
                        }
                        ?>
                    </div>
<br>
                <div class="form-input">
                    <input type="text" placeholder="Username" name="uname">
                    <input type="password" placeholder="Password" name="password">
                </div>
                
                <!-- <input type="checkbox" name="stay" id="stay">Remember me -->
<br>
                <div class="message">
                   <a href="forgotpassword.php">Forgot Password?</a><br>
                   <span>Dont have an account yet? <a href="signup.php">Sign-Up</a> </span>
                 </div>
                    
                 <div class="">
                 </div>

                    <input type="submit" class="submit" value="LOGIN" name="login">
            </form>

    </body>
</html>
