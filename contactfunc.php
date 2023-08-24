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