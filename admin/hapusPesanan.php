<?php
include "koneksi.php";

$id_pes = $_GET['id_pes'];

$query = "SELECT * FROM daftar_pesan WHERE id_pes ='".$id_pes."'";
$sql = mysqli_query($konek, $query);
$data = mysqli_fetch_array($sql);

$query2 = "DELETE FROM daftar_pesan WHERE id_pes ='".$id_pes."'";
$sql2 = mysqli_query($konek, $query2);
if($sql2){
	header("location:dataPesanan.php");
}else{
	echo "Data gagaldihapus. <a href='dataPesanan.php'>Kembali</a>";
}