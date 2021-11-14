<?php
//function start lagi
session_start();

//cek apakah session terdaftar
if($_SESSION["login"]){

//session terdaftar, saatnya logout
session_unset();
session_destroy();
header( "Location: login.html" );
}
else{
echo "error";
//variabel session salah, user tidak seharusnya ada dihalaman ini. Kembalikan ke login
//header( "Location: login.html" );
}
?>