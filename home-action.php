<?php
    //mulai session
    session_start();

    //cek lagi apakah session telah terdaftar untuk username tersebut
    if($_SESSION["login"]) {
        header( "Location: index.php" );
    }
    else{
        //jika tidak terdaftar, kembalikan user ke login.html
        header( "Location: login.html" );
    }
?>
          