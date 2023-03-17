<?php
include "koneksi.php";

$id_pes = $_GET['id_pes'];

$query = "SELECT * FROM pesan WHERE id_pes ='".$id_pes."'";
$sql = mysqli_query($konek, $query);
$data = mysqli_fetch_array($sql);


$query2 = "DELETE FROM pesan WHERE id_pes ='".$id_pes."'";
$sql2 = mysqli_query($konek, $query2);
if($sql2){
	header("location:dataPesan.php");
}else{
	echo "Data gagaldihapus. <a href='dataPesan.php'>Kembali</a>";
}
?>