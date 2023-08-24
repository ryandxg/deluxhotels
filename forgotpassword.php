<?php
    require_once 'dml.php';
        $validation = new booking();
        $validation->password_reset();
        
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <script src="https://kit.fontawesome.com/b32f1a67cb.js" crossorigin="anonymous"></script>
    </head>
<style>
*
    {
    padding: 0;
    margin: 0;
    }
html
    {
    scroll-behavior: smooth;
    }
body
    {
    background-color:rgba(0, 0, 0, 0.05);
    box-sizing: border-box;
    }
.logo
    {
        margin: auto 2em; 
        font-weight: bold; 
        color:purple; 
        text-shadow: 3px 3px 5px orange; 
        font-family: 'serif'; 
        font-size:35px; 
        cursor: pointer;
    }
.logo a
    {
      text-decoration: none;
    }
.logo a:hover
    {
      font-size: 40px;
      transition:all 0.3s ease-in
    }
form
    {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: center;
        width: 100%;
        height: auto
    }
    input
    {
        width:70%;
        padding: 18px 20px;
        margin: 12px 0;
    }
form > a
    {
        text-decoration: none;
    }
.form-input
    {
        display: flex;
        flex-direction:column;
        align-items:center;
        width:100%;
        /* gap: 25px; */
    }
input[type="text"]
    {
        font-size:25px;
        font-weight:700;
        font-family:'Times New Roman', Times, serif;
        color: orangered;
    }
input[type="text"]:focus
    {
        outline: none;
        box-shadow: 2px 2px 5px red ;
    }
.message > a, span a
    {
        font-size:20px;
        font-family:'fantasy';
        color: green; 
        font-style:italic;
    }
.message > a:hover, span a:hover
    {
        color: crimson;
        text-decoration:none;
        font-weight:bold;
        font-size: 25px;
        font-style: normal;
        background-image: linear-gradient(greenyellow,crimson,purple,white);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
.message
    {
        display:flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
.submit
    {
        /* width: 20%; */
        border-radius: 2rem;
        padding: 1.5em;
        /* float: right; */
        margin-right: 50%;
        background-image: linear-gradient(greenyellow,crimson,purple,white);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        border: none;
        outline: none;
        font-weight: 900;
        font-family:'The Nautigal', cursive;
        font-size:30px;
        letter-spacing:5px;
        line-height:15px;
        cursor:pointer;
        margin-bottom: 15px;
    }
.submit:hover
    {
        transition: all 0.7s ease-in-out;
        font-size:35px;
    }
.icon
    {
        color: green;
        font-size:90px;
        margin: 20px 0;
    }
</style>
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
            <input type="text" placeholder="Enter Username or Email" name="uname">
        </div>

        <div class="message">
           <a href="login1.php">Back</a><br>
           <span>Dont have an account yet? <a href="signup.php">Sign-Up</a> </span>
         </div>
                    
                    <input type="submit" class="submit" value="RESET PASSWORD" name="submit">
        </form>
    </body>
</html>