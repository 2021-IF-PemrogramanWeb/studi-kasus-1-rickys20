<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'coba_pweb';

$db_connection = mysqli_connect($server, $user, $password, $database);
$jumlah = mysqli_query($db_connection, "SELECT jumlah FROM covid order by id asc");

if(!$db_connection){
	die('Gagal Terhubung(Lost Connect): '.mysqli_connect_error() );
}else{
	//print('Berhasil terkoneksi dengan database. Silahkan memilih menu yang disediakan.');
}

?>

