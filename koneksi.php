<?php
$user="root";
$server="localhost";
$password="";
$database="semester3";

$rumah=mysqli_connect($server,$user,$password);
if($rumah){
	echo 'Rumah Berhasil Terhubung'.",&nbsp";
}else{
	echo 'Cek Lagi !!';
}
$db=mysqli_select_db($rumah,$database);
if($db){
	echo 'DB Berhasil Terhubung'.",&nbsp";
}else{
	echo 'Cek Lagi !!';
	
}


?>