<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
      </svg> -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
      <link rel="stylesheet" href="contacthome1.css">
      <?php require 'contactfunc.php' ?>
</head>
<body>

  <div id="toTop"></div>
  <h1 class="contact">contact us</h1>

             <div class="try">

    <div class="div_columns">
<td class="table-form">
        <h1 class="columns">Get in touch</h1>
    
        <form action="processingcontact.php" method ="POST" style="max-width:500px; margin:auto">
            <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input type="email" id="email" name="email" class="input-field" placeholder="Enter your email address" class="form-control"><br><br>
            <div style = "background: red";><?php //echo $emailErr; echo $email; ?> </div><br>
        </div>
    
        <div class="input-container">
            <i class="fa fa-user icon" ></i>
            <input type="text" id="name" name="name" class="input-field" placeholder="Enter your name"><br><br>
            <!-- <div style = "background: red";><?php //echo $nameErr; echo $name; ?> </div><br> -->
        </div>
    
        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input type="text" id="subject" name="subject" class="input-field" placeholder="Enter your subject"><br><br>
            <!-- <div style = "background: red";><?php //echo $subjectErr; echo $subject; ?> </div><br> -->
        </div>
    
        <textarea name="message" id="message" name="message" class="form-control" cols="65" rows="10" placeholder="Type your message here......."></textarea>
        <!-- <div style = "background: red";><?php //echo $messageErr; echo $message; ?> </div><br> -->
        <br>

        <p>* All fields are mandatory</p>
        <!-- <small class="text-muted">
            * All fields are mandatory.
            </small><br><br> -->
        <!-- <input type="submit" id="sendMess" name="sendMess" value="Send Message"> -->

        <button type="submit" id="sendMess" name="sendMess" class="btn btn-default">
            Send Message
         </button>
    </form>
</td>
    </div>

    <!-- Column Two -->
    <div class="div_columns">
<td>
        <h2 class="columns" id="information">Information</h2><br><br>

        <!-- I used google material icons for the icons -->
        <div class="location_on">
     <tr>
        <td><li class="material-icons" style="color: greenyellow; font-weight:700">location_on</li>
        <td><li style="width:20px;">&nbsp;</li></td>
        <li class="info_nav">Address</li></td>
    </tr>
    </div>

    <div class="location_on">
        <tr>
            <td><li style="width:20px;">&nbsp;</li></td>
            <td><li style="width:20px;">&nbsp;</li></td>
            <td><li>Plot 32 Williams Franklin street, Coconut Island, Cavarian</li></td>
        </tr> 
    </div>
<br>
    
    <div class="phone_fax">
    <tr>
        <td><li class="material-symbols-outline" style="color: greenyellow; font-weight:700">call</li>
        <td><li style="width:20px;">&nbsp;</li></td>
        <li class="info_nav">PHONE/FAX</li></td>
    </tr>
    </div>

    <div class="phone_fax">
        <tr>
            <td><li style="width:20px;">&nbsp;</li></td>
            <td><li style="width:20px;">&nbsp;</li></td>
            <td><li>+17156787977677, +1456578789800</li></td>
        </tr> 
    </div>

    <div class="phone_fax">
        <tr>
            <td><li style="width:20px;">&nbsp;</li></td>
            <td><li style="width:20px;">&nbsp;</li></td>
            <td><li>+17156787977677, +1456578789800</li></td>
        </tr> 
    </div>
<br>



    <div class="email">
        <tr>
        <td><li class="material-symbols-outline" style="color: greenyellow; font-weight:700">mes</li>
            <td><li style="width:20px;">&nbsp;</li></td>
            <li class="info_nav">E-MAIL</li></td>
        </tr>
    </div>

    <div class="email">
        <tr>
            <td><li style="width:20px;">&nbsp;</li></td>
            <td><li style="width:20px;">&nbsp;</li></td>
            <!-- <td><li style="width:20px;">&nbsp;</li></td> -->
            <td><li><a href="mailto:sales@deluxhotels.com subject =Subject Text" style="text-decoration: none;" class="first_email">sales@deluxhotels.com</a></li></td>
        </tr> 
    </div>

    <div class="email">
        <tr>
            <td><li style="width:20px;">&nbsp;</li></td>
            <td><li style="width:20px;">&nbsp;</li></td>
            <!-- <td><li style="width:20px;">&nbsp;</li></td> -->
            <td><li><a href="mailto:reservation@deluxhotels.com subject =Subject Text" style="text-decoration: none;" class="first_email">reservation@deluxhotels.com</a></li></td>
        </tr> 
    </div>

    <div class="email">
        <tr>
            <td><li style="width:20px;">&nbsp;</li></td>
            <td><li style="width:20px;">&nbsp;</li></td>
            <!-- <td><li style="width:20px;">&nbsp;</li></td> -->
            <td><li><a href="mailto:banquet@deluxhotels.com" style="text-decoration: none;" class="first_email">banquet@deluxhotels.com</a></li></td>
        </tr> 
    </div>
    <!-- <i class="fa fa-phone icon"></i> -->
    <!-- <div class="email"> -->
    <!-- <i class="fa fa-envelope icon"></i> -->
</td>
    </div>
                </div>

    <!-- Begin Hotel map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7466410170987!2d3.4279245140937906!3d6.426588126066973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf53aec4dd92d%3A0x5e34fe6a84cddd53!2sEko%20Hotels%20%26%20Suites!5e0!3m2!1sen!2sng!4v1655087507972!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- Begin Footer -->
<footer class="footer_section">
    <div class="footer_section2">

        <div class="three_columns">

            <div class="first_column">
                <td>
                    <ul class="footer_links">
                        <li><a href="#"class="footer_a" style="text-decoration: none;">About</a></li>
                        <li><a href="#"class="footer_a" style="text-decoration: none;">Gallery</a></li>
                        <li><a href="#"class="footer_a" style="text-decoration: none;">Our Events</a></li>
                        <li><a href="#"class="footer_a" style="text-decoration: none;">Our Hotels</a></li>
                        <li><a href="#"class="footer_a" style="text-decoration: none;">Dinning</a></li>
                        <li><a href="#"class="footer_a" style="text-decoration: none;">Our Vision & Mission</a></li>
                        <li><a href="#"class="footer_a" style="text-decoration: none;">Contact Us </a></li>
                        <li><a href="#"class="footer_a" style="text-decoration: none;">Terms & Conditions</a></li>
                    </ul>
                </td>
            </div>

        <div class="second_column">
            <td>
                <!-- <div class="footer_logo"><img src="assets/img/logo-footer.png" width="100" alt="Eko Hotel center"></div>
                <div class="second_column_location">
                    <tr>
                    <td><li class="material-icons" style="color: #cda274;">location_on</li></td>
                </tr>
                </div> -->
                <div class="second_column_location">
                    <tr>
                        <br>
                        <i class="fa fa-map-o icon"></i>
                        <!-- <td><li  class="fa fa-maps-o"></li></td> -->
                        <td><li style="width:20px;">&nbsp;</li></td>
                        <td><li>Plot 32 Williams Franklin street, Coconut Island, Cavarian</li></td>
                    </tr> 
            </div><br>
                
            <div class="second_column_phone">
                    <tr>
                        <i class="fa fa-phone icon"></i>
                        <td><li>+17156787977677, +1456578789800</li></td>
                </tr>
            </div>
            
            <div class="second_column_phone">
                    <tr>
                        <i class="fa fa-phone icon"></i>
                        <td><li>Fax: +234 1 270407</li></td>
                    </tr> 
            </div><br>
            
                <!-- <div class="second_column_email">
                    <tr>
                    <td><li class="material-symbols-outline" style="color: #cda274;">mes</li>
                    </tr>
                </div> -->
                <div class="second_column_email">
                    <tr>
                        <i class="fa fa-envelope icon"></i>
                        <td><li><a href="mailto:sales@deluxhotels.com subject =Subject Text" class="email_add" style="text-decoration: none;">sales@deluxhotels.com,</a></li></td>
                    </tr> 
                </div>

                <div class="second_column_email">
                    <tr>
                        <!-- <td><li style="width:20px;">&nbsp;</li></td> -->
                        <td><li><a href="mailto:reservation@deluxhotels.com subject =Subject Text" class="email_add" style="text-decoration: none;">reservation@deluxhotels.com,</a></li></td>
                    </tr> 
                </div>

                <div class="second_column_email">
                    <tr>
                        <!-- <td><li style="width:20px;">&nbsp;</li></td> -->
                        <td><li><a href="mailto:banquet@deluxhotels.com subject =Subject Text" class="email_add" style="text-decoration: none;">banquet@deluxhotels.com.</a></li></td>
                    </tr> 
                </div>
            
            </td>
                </div>
        

        <div class="third_column">

            <!-- <div class="col-xs-12 col-sm-4 col-md-3"> -->
                <h3 class="subscribe_news">Newsletter</h3>
                <p>Subscribe to our email newsletter to receive updates and news.</p>
                <form action="#" >
                    <div class="input-container">
                        <input type="newemail" id="email" name="newemail" class="newemail" placeholder="Email address" class="form-control" required><br><br>
                    <i class="fa fa-location-arrow icon" name="newemailSubmit"></i>
                </div>
                </form>


                <div class="social_media">
                    <ul class="social_media_icons">
                        <li class="social_media_items"><a href="https://www.facebook.com/Ekohotels/" class="fa fa-facebook items" style="width: 40px; text-decoration: none;"></a></li>
                        <li class="social_media_items"><a href="https://www.twitter.com/Ekohotels/" class="fa fa-twitter items" style="width: 40px; text-decoration: none;"></a></li>
                        <li class="social_media_items"><a href="https://www.fa-instagram.com/Ekohotels/" class="fa fa-instagram items" style="width: 40px; text-decoration: none;">&nbsp; &nbsp;</a></li>
                        <li class="social_media_items"><a href="https://www.pinterest.com/Ekohotels/" class="fa fa-pinterest items" style="text-decoration: none;"></a></li>
                    </ul>
                </div>
        </div>
    </div>
</div>
<br><br>
<hr>
<div class="copyright_container text-center" >
    <button type="submit" class="btn btn-default copy "><a href="#" style="text-decoration: none;">
        The Company
    </a></button><br>
    <p>Copyright &copy; 2019 - <?php echo date("Y")?></p>

</div>
<div id="toBottom"></div>
<div style="margin-left: 90%;">
<a href="#toTop" class="text-right">To Top</a>
</div>
</footer>

    


    <!-- Second Option  -->
    <!-- <form action="#" style="max-width:500px; margin:auto">
        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" class="form-control"><br><br>
        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name"><br><br>
        <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter your subject"><br><br>
        <textarea name="message" id="message" name="message" class="form-control" cols="30" rows="10"></textarea>
        <p>* All fields are mandatory</p>
        <small class="text-muted">
            * All fields are mandatory.
          </small><br><br>
        <input type="submit" id="sendMess" name="sendMess" value="Send Message">
        <button type="submit" class="btn btn-default">
            Send Message
          </button>
        </form> -->
</body>
</html>