<?php
$host="localhost";
$user="root";
$passwd="";
$db="tokofresh";
$konek=mysqli_connect($host,$user,$passwd,$db);
if (!$konek)die("gagal");
?>