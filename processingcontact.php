


<?php
    $connection = mysqli_connect("localhost", "root", "", "CONTACTUS");

    if(!$connection){
        die("connection failed. " . mysqli_connect_error());
    }else{
        // echo "Successfully connected to the database on connection" . "<br>";
        echo "";
    }

    // $message = "sucsss";
    $messageContact;
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $stmt = "SELECT * FROM CONTACT WHERE email = '$email' AND name = '$name' AND  subject = '$subject' AND message = '$message'";
    $stmtquery = mysqli_query($connection, $stmt);
    
    $result= mysqli_num_rows($stmtquery);
    if($result > 0){
        // $message = "You have already submitted your form";
        $messageContact = "";
        return false;
    }else{
        $sql = "INSERT INTO CONTACT (email, name, subject, message) VALUES ('$email', '$name', '$subject', '$message')";

        if(mysqli_query($connection, $sql)){
               echo 
            "<script> confirm('Details has been uploaded successfully') </script>";
            // return false;
        }else{
            echo "query not set". mysqli_error($connection);
            $messageContact = '';
        }
        
    }
    // $to = '$email';
    //     $subject = 'congrats';
    //     $body = 'hi, hello';

    //     // $mail_sent = mail($to, $subject, $body);
    //         // if(!$mail_sent){
    //         //     echo ('mail delivery failed');
    //         // }else{
    //         //     $message = "a mail has been sent to you";
    //         // }

    //         if(mail($to, $subject, $body)){
    //             echo('Mail sent!');
    //         }else{
    //             echo ('Mail delivery failed');
    //         }

return true;
mysqli_close('$connection');

// else{
// $message = '';
// }
header("Location: contact.php");
?>
