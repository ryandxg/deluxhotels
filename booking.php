<?php
require 'dml.php';
$booking = new booking();
$booking->reserve_room();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delux Hotels</title>
    <link rel="stylesheet" href="booking.css">
    <script src="https://kit.fontawesome.com/af621931a1.js" crossorigin="anonymous"></script>
    
</head>

<body>
    <div class="container">
             <div class="booking">
                
              </div>

        <div class="form">
          <form method="POST">    
            <h1> Book a Room Today</h1>
           <div class="big-con">
            <div class="container">
              <div class="container-2">
                  <div class="input-left">
                    <label for="check-in DATE" class="input-label">Check-In DATE</label>
                      <input type="date" class="input" id="check-in" name="check_in">
                  </div>

                   <div class="input-right"> 
                     <label for="check-out" class="input-label">Check-Out DATE</label>
                     <input type="date" class="input" id="check-out" name="check_out"><br>
                   </div> 

              </div>
            </div>
           </div>
                  <!-- BOOKING -->
              <div class="input-group">
                <label for="check-out" class="output-label">Booking Name</label>
                <input type="text" class="output" id="check-out" name="bookName" placeholder="Name to book the Hotel Under"><br>
              </div> 

              <h2>OR</h2>
                 <div class="check-b">
             <input type="checkbox" name="uname">BOOK A RESERVATION WITH YOUR USERNAME
                 </div>
               <br>
               <button class="btn" name="submit" a href="#">RESERVE</button>
               <button class="btn" name="btn" a href="landing.php">BACK HOME</button>
          </form>
       </div> 
    </div>    
    
</body>

</html>