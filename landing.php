<?php
    include 'header.php';
?>


<div id="demo" class="carousel slide" data-ride="carousel">

    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1" ></li>
        <li data-target="#demo" data-slide-to="2" ></li>
        <li data-target="#demo" data-slide-to="3" ></li>
        <!-- <li data-target="#demo" data-slide-to="4" ></li> -->
    </ul>

    <div class="carousel-inner" style="z-index:-1;">


      <div class="carousel-item active">
            <img src="./Images/fernando-alvarez-rodriguez-M7GddPqJowg-unsplash.jpg" alt="" width="100%" height="auto">
        </div>

    <div class="carousel-item ">
    <img src="./Images/alexander-kaunas-xEaAoizNFV8-unsplash.jpg" alt="" width="100%" height="auto">
    </div>

    
    <!-- <div class="carousel-item ">
    </div> -->

    
    <div class="carousel-item ">
        <img src="./Images/ralph-ravi-kayden-FqqiAvJejto-unsplash.jpg" alt="" width="100%" height="auto">
    </div>

    
    <div class="carousel-item ">
        <img src="./Images/vojtech-bruzek-Yrxr3bsPdS0-unsplash.jpg" alt="" width="100%" height="auto">
    </div>

    <!-- <a href="#demo" class="carousel-control-prev" data-slide="prev" style="cursor: pointer;margin-top:45%;">
        <span class="carousel-control-prev-icon" ></span>
    </a>

    <a href="#demo" class="carousel-control-next" data-slide="next" style="cursor: pointer;margin-top:45%;">
        <span class="carousel-control-next-icon"></span>
    </a> -->

    </div>
</div>

<section class="bookings">
  <h1 class="booking_head"> Hotel Booking System</h1>
    <div class="background">
            <form action="booking.php" method="POST">
          <span> <b class="checkings"> Check-In</b><input type="date" name="cin" id="cin"></span>
          <span> <b class="checkings"> Check-Out</b><input type="date" name="cout" id="cout" placeholder="Check-Out"></span>
                  <input type="submit" value="CHECK AVAILABILITY">
            </form>
    </div>
</section>

<script type="text/javascript">
        const nav = document.querySelector("#header");
            window.addEventListener("scroll", () => {
                if(window.scrollY >= 100){
                    nav.classList.add("active_nav");
                }
                else{
                    nav.classList.remove("active_nav");
                }
            })
            function login(){
                window.open("http://localhost/delux2/delux.com-main/login1.php","_blank","left=500")
            }
</script>

    <!-- <script>
window.console.error("You made a mistake");
</script> -->
<?php
    require_once("contacthome.php");

    require_once("footer.php");
?>

