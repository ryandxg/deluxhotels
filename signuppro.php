<?php session_start();

    require_once 'dml.php';
    $validation = new Database_query();
    $validation->signup();

    header("Location:signup.php");

?>