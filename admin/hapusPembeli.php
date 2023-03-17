<?php
include "koneksi.php";

$id_pembeli = $_GET['id_pembeli'];

$query = "SELECT * FROM tb_pembeli WHERE id_pembeli ='".$id_pembeli."'";
$sql = mysqli_query($konek, $query);
$data = mysqli_fetch_array($sql);

$query2 = "DELETE FROM tb_pembeli WHERE id_pembeli ='".$id_pembeli."'";
$sql2 = mysqli_query($konek, $query2);
if($sql2){
	header("location:dataPembeli.php");
}else{
	echo "Data gagaldihapus. <a href='dataPembeli.php'>Kembali</a>";
}