<?php 
    require_once 'dml.php';
    $validation = new Database_query();
    $validation->signup();
?>
<!DOCTYPE html>
<html>
    <head>
    <script src="https://kit.fontawesome.com/b32f1a67cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    </head>
        <style>
            #message
            {
                background-color:lightblue;
                padding: 10px;
                text-align:center;
                font-size: 15px;
            }
        </style>
    <body>
    
        <div class="logo"> 
            <a href="landing.php" title="GO BACK TO HOME PAGE"  style="color:#800080;"> DELUX HOTEL </a>
         </div>

         <form method="POST" action=""><br><br>
                    <i class="fas fa-user icon"></i>

                <div style="background:lightblue;color:red;font-weight:bolder;font-size:20px;margin-bottom:15px">
                        <?php
                            if(isset($_SESSION['message']))
                              {
                                  echo $_SESSION['message'];
                                  $_SESSION['message'] = "";
                              }
                        ?>
                </div>

                <div class="form-input">
                    <input type="text" placeholder="Username" name="signup_uname">
                    <input type="text" placeholder="Your@gmail.com" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <input type="password" placeholder="Re-enter Password" name="verification">
                </div>

                <div class="message">
                   <span>Already have an account? <a href="login.php">Login</a> </span>
                 </div>
                    
                    <input type="submit" class="submit" value="SIGN-UP" name="signup">
            </form>

    </body>
</html>