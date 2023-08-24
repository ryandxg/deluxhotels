<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROOM RESERVATION</title>
    <link rel="stylesheet" href="display.css">
    <script src="https://kit.fontawesome.com/b32f1a67cb.js" crossorigin="anonymous"></script>
</head>
<body>
<style>
.cancel
    {
        float: right;
        font-weight: bold;
    }
.cancel > a:hover
    {
        font-size: 20px;
        transition: all 0.7s ease-in-out;
        margin-right: 0.2em;
    }
.cancel > a:focus
    {
        color: #dc143c;
    }
.account
    {
        float: right;
        padding: 15px 5px;
        margin: 5px auto;
        font-weight: bold;
        display:block;
        cursor: pointer;
        width: 150px;
        max-width: 150px;
    }
.account:hover .content
    {
        display: inline-block;
    }
li a:hover
    {
        box-shadow: 2px 2px 5px #888888;
        color: red;
        font-weight:bolder;
        background: transparent;
        font-size:16px;
    }
.content
    {
        /* display:none; */
        text-transform:capitalize;
        text-align:center;
    }
ul li 
    {
        list-style-type: none;
    }
i 
    {
        font-size:35px;
        color: green;
        transform: translateX(60px);
        margin-bottom: 10px;
    }
li a
    {
        text-decoration:none;
        color: black;
    }
</style>
    <div class="logo">
       <a href="landing.php"> D<span class="deco">ELU</span>X H<span class="deco">OTE</span>L</a>
       <div class="account">
        <i class="fas fa-user icon"></i>
            <ul class="content">
                <li><a href="display.php">Availability</a></li>
                <li><a href="myreservation.php">My Reservations</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
    </div>
    </div>


    <h1> LIST OF ALL AVAILABLE ROOMS YOU CAN PICK FROM</h1>

        <!-- <div class="cancel">
            If you already have a reservation 
            , and wish to to cancel your reservation <a href="cancel.php">Click this Link!</a>
        </div> -->

</body>
</html>