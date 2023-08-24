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
    <style>
        *{
            box-sizing: border-box;
        }
        
        /* Begin the Columns */
        .contact{
            font-size: 4em;
            padding: 25px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: #cda274;
            margin: 40px;
        }
        
        .columns{
            color: #cda274;
            font-family: 'Poppins', sans-serif;
            /* font-size: 6px; */
            line-height: 1.7;
            letter-spacing: 6px;
            text-transform: uppercase;
            text-align: center;
            font-size: 20px;
        }

        table{
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        /* td{
            text-align: left;
            padding: 16px; 
            line-height: 2px;
        } */

        input{
            line-height: 10px;
        }
    
        .try{
            display: flex;
            margin-left: -5px;
            margin-right: -5px;
            padding: 20px;
            margin: 40px;
        }

        .info{
            flex: 50%;
            padding: 35px;
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
            margin: 20px;
            line-height: 30px;
        }
        /* td{
            margin: 20px;
            background-color: red;

        } */
        /* input{
            padding: 10px;
        } */

        .btn {
        /* padding: 24px 24px; */
        font-size: 14px;
        letter-spacing: 2.8px;
        border-color: #cda274;
        background-color: #cda274;
        transition: all 0.3s ease-out;
        border-radius: 2px;
        text-transform: uppercase;
        color: #FFF;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 0;
        font-weight: 500px;
        text-align: center;
        vertical-align: middle;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        white-space: nowrap;
        padding:12px 18px ;
        font-size: 14px;
        line-height: 1.42857143;
        }

        .ion-android-pin:before {
            content: "\f3a3";
        }
        /* End Columns */

        /* Begin the Input Icons */
        .icon {
        padding: 10px;
        /* background: #cda274; */
        color: white;
        min-width: 50px;
        text-align: center;
        }

        .input-container {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        width: 100%;
        margin-bottom: 15px;
        color: red;
        line-height: 1.2px;     /* This is important or sizing the height of the input field, when height isn't working  */
       
        }

        input{
            color: red;
        }

        .icon {
        /* padding: 10px; */
        background: #cda274;
        color: white;
        /* color: #cda274; */
        /* min-width: 50px; */
        text-align: center;
        font-size: 30px;
        height: auto;
        }

        .input-field, .newemail {
        width: 100%;
        padding: 10px;
        outline: none;
        line-height: 2px;
        line-height: 1.42857143;
        /* height: 20px; */
        }
        /* End the Input Icons */

        li > a{
            text-decoration: none;
            color: black;
        }

        /* .location_on{
        display: -ms-flexbox; 
        display: flex;
        width: 100%;
        margin-bottom: 15px;
        } */

        .location_on, .phone_fax, .email{
            /* background-color: red; */
            display: flex;
            font-size: 18px;
        }

        li{
            list-style: none;
        }
        
        .email_add{
            color: white;
            text-decoration: none;
        }

        .info_nav{
            font-size: 2em;
            font-weight: 600;
            margin-bottom: 0;
            font-size: 18px;
            text-transform: uppercase;
            line-height: 1.6em;
        }
    
        /* ection Footer */
    .footer_section {
        color: #ffffff;
        background-color: #1e2529;
        /* display: block; */
        /* margin: 20px; */
        padding-bottom: 30px;
        padding-top: 30px;
    }

    .container{
        content: " ";
        display: table;
        display: flex;
    }

    .footer_section2{
        display: flex;
        padding: 15px;
        margin-left: -5px;
        margin-right: -5px;
            /* padding: 20px;
            margin: 50px; */
    }

    .three_columns{
        display: flex;
        padding-top: 40px;
    }

    .first_column, .second_column, .third_column{
        flex: 50%;
        padding: 35px;
        /* border-collapse: collapse; */
        border-spacing: 0;
        /* width: 50%; */
        margin: 20px;
        /* line-height: 30px; */
        font-size: 18px;
        color: white;
        border: 1px red solid;
    }

    .third_column{
        margin: 20px;
        border: 1px red solid;
        font-size: 18px;
        padding: 35px;
    }

    .first_column, .third_column{
        line-height: 2em;
        color: white;
    }
    
    .subscribe_news{
        font-family: 'Montserrat', sans-serif;
        color: #cda274;
        letter-spacing: 8px;
        text-transform: uppercase;
        font-size: 14px;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .footer_a{
        color: white;
        line-height: 40px;
    }

    .footer_links > a{
        text-decoration: none;
    }
    
    .footer_a:hover, .email_add:hover, .items:hover, .first_email:hover{
        color: #cda274;
    }
    /* start Newsletter input field */
    /* .news_container {
        display: -ms-flexbox; 
        display: flex;
        width: 100%;
        margin-bottom: 15px;
        } */

    /* Social media icons */
    .social_media_items{
        display: inline-block;
        text-align: center;
        align-items: center;
        color: white;
    }
    .items{
        color: white;
    }

    /* Begin Copyright section */
    hr{
        background-color: white;
        margin-left: 40px;
        margin-right: 40px;
        margin-bottom: 20px;
    }

    .copyright_container{
        color: white;
        line-height: 20px;
    }

    .copy{
        letter-spacing: 3.8px;
        word-spacing: 5px;
        font-weight: 600;
        line-height: 20px;
        color: white;
        /* display: none !important; */
    }

    .copyright_container >p{
        padding: 10px;
        letter-spacing: 2.8px;
        word-spacing: 3px;
        font-weight: 600;
    }

    button > a{
        color: white;
        text-decoration: none;
    }

    /* Begin Contact us image */
    .contact_head{
    position: relative;
    max-width: 100%;
}
.contact_head .contact_bg{
    /* background-color: rgb(71, 48, 48); */
    color: red;
    padding: 20px;
    position: absolute;
    left: 0;
    bottom: 0%;
}
.contact_contact{
    font-size: 60px;
    font-weight: 700;
    color: #fff;
    margin-top: 20px;
    margin-bottom: 10px;
}
.contact_list{
    display: flex;
    font-size: 20px;
    text-decoration: none;
}
.contact_first_list{
    color: #cda274;
    transition: color 0.3s;
    text-decoration: none;
    
}
.contact_font:hover{
    color: white;
}
.active{
    color: white;
    opacity: 1;
}
    
    </style>

<?php 

$name = $email = $message = $subject = "";
$nameErr = $emailErr = $messageErr= $subjectErr = "";
$namecheck = $emailcheck = $messagecheck = $subjectcheck = "";

if(isset($_POST['submit'])){
    if(empty($_POST['email'])){
        $emailErr = "Email is required";
    }else{
        $email = test($_POST['email']);
        $emailcheck = "OK";
    }
}

    if(empty($_POST['name'])){
        $nameErr = "Name is required";
    }else{
        $name = test($_POST['name']);
        $namecheck = "OK";
    }

    if(empty($_POST['subject'])){
        $subjectErr = "Subject is required";
    }else{
        $subject = test($_POST['subject']);
        $subjectcheck = "OK";
    }

    if(empty($_POST['message'])){
        $messageErr = "Message is required";
    }else{
        $message = test($_POST['message']);
        $messagecheck = "OK";
    }

//    if($email = "" && $name = "" && $subject = "" && $message = ""){
    if($emailcheck=="OK" && $namecheck=="OK" && $messagecheck=="OK" && $subjectcheck=="OK"){
        // echo "<script> alert('Form has b/een successfully submitted. Thank you, we look forward to hearing from you again.'); </script>";
        require_once "processingcontact.php";
        // echo "<script> alert('Form not complete/empty'); </script>";
    }else{
        echo "";
        // echo "<script> alert('Form not complete/empty'); </script>";
        // require_once "processingcontact.php";
    }



function test($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

?>
</head>
<body>

    <div id="toTop"></div>

    <!-- <p style="background-image: url('./Images/surface-pmYzYkB2JcI-unsplash.jpg');">
        You can specify background images<br>
        for any visible HTML element.<br>
        In this example, the background image<br>
        is specified for a p element.<br>
        By default, the background-image<br>
        will repeat itself in the direction(s)<br>
        where it is smaller than the element<br>
        where it is specified. (Try resizing the<br>
        browser window to see how the<br>
        background image behaves.
        </p> -->
        <!-- <i class="fas fa-envelope-square"></i>
        <i class="fas fa-envelope-square"></i>
        <i class="fab fa-facebook-f"></i>
     -->
        <section class="contact_head">
            <img src="Images/contact.jpg" height="200px" width="100%" alt="Contact us image">
            <div class="contact_bg">
                <h2 class="contact_contact">Contact Us</h2><br>
                 <ol class="contact_list">
                    <li><a href="landing.php" class="contact_first_list contact_font" style="width: 10px; text-decoration: none;">Home &nbsp;</a></li>
                    <li class="active">/ &nbsp; Contact</li>
                 </ol> 
            </div>
        </section>
    
    <h1 class="contact">If you have any questions, please don't hesitate to contact us.</h1>

    <div class="try">
    <div class="info col-sm-7">
    <td>
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
    <div class="info col-sm-5">
    <td>
        <h2 class="columns">Information</h2><br><br>


        <!-- I used google material icons for the icons -->
        <div class="location_on">
        <tr>
        <td><li class="material-icons" style="color: #cda274;">location_on</li>
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
    </div><br>
    
    <div class="phone_fax">
        <tr>
        <td><li class="material-symbols-outline" style="color: #cda274;">call</li>
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
    </div><br>



    <div class="email">
        <tr>
        <td><li class="material-symbols-outline" style="color: #cda274;">mes</li>
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
            
                </div>
            </td>
        

        <div class="third_column">

            <!-- <div class="col-xs-12 col-sm-4 col-md-3"> -->
                <h3 class="subscribe_news">Newsletter</h3>
                <p>Subscribe to our email newsletter to receive updates and news.</p>
                <form action="#" >
                    <div class="input-container">
                        <input type="newemail" id="email" name="newemail" class="newemail" placeholder="Email address" class="form-control" required><br><br>
                    <i class="fa fa-location-arrow icon"></i>
                </div>
                </form>


                <div class="social_media">
                    <ul class="social_media_icons">
                        <li class="social_media_items"><a href="https://www.facebook.com/Ekohotels/" class="fa fa-facebook items" style="width: 40px; text-decoration: none;"></a></li>
                        <li class="social_media_items"><a href="https://www.twitter.com/Ekohotels/" class="fa fa-twitter items" style="width: 40px; text-decoration: none;""></a></li>
                        <li class="social_media_items"><a href="https://www.fa-instagram.com/Ekohotels/" class="fa fa-instagram items" style="width: 40px; text-decoration: none;"">&nbsp; &nbsp;</a></li>
                        <li class="social_media_items"><a href="https://www.pinterest.com/Ekohotels/" class="fa fa-pinterest items" style="text-decoration: none;"></a></li>
                    </ul>
                </div>
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
    <p>Copyright &copy; 2019 Delux Hotels</p>

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