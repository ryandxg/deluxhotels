<?php
    require_once 'dml.php';
    $booking = new booking();
    // $booking->customer();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="customer.php" method="POST">
        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="email" name="email">
        <input type="tel" placeholder="phone" name="phone">
        <textarea name="address" id="" cols="30" rows="10" placeholder="address"></textarea>
        <!-- <input type="hidden" placeholder="booking_date" name="date"> -->
        <input type="submit" value="submit" name="submit">
    </form>

</body>
</html>