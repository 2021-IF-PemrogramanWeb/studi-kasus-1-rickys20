<?php

include 'config.php';
// Variables taken from form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Accessing account from database
$sql = "INSERT INTO `bio`(`nama`, `email`, `password`) VALUES ('$name','$email','$password')";
// Getting result from database
$result = mysqli_query($db_connection, $sql);
    if($result){
        header('Location: login.html');
    }else{
        //header('Location: index.php?status=gagal');
        echo mysqli_error($db_connection);
    }
?>