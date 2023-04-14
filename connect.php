<?php
$server = "localhost:3306";
$user="hoangduongfront1";
$pass="123";
$database="hoangduongfront1";
$conn=mysqli_connect($server,$user,$pass,$database);
mysqli_query($conn,'set names "utf8"');
?>