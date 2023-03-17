<?php
include "koneksi.php";

$id_tk = $_GET['id_tk'];

$query = "SELECT * FROM transaksi WHERE id_tk ='".$id_tk."'";
$sql = mysqli_query($konek, $query);
$data = mysqli_fetch_array($sql);

$query2 = "DELETE FROM transaksi WHERE id_tk ='".$id_tk."'";
$sql2 = mysqli_query($konek, $query2);
if($sql2){
	header("location:dataTransaksi.php");
}else{
	echo "Data gagaldihapus. <a href='dataTransaksi.php'>Kembali</a>";
}