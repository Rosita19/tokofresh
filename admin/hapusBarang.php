<?php
include "koneksi.php";

$id_br = $_GET['id_br'];

$query = "SELECT * FROM tb_barang WHERE id_br ='".$id_br."'";
$sql = mysqli_query($konek, $query);
$data = mysqli_fetch_array($sql);


$query2 = "DELETE FROM tb_barang WHERE id_br ='".$id_br."'";
$sql2 = mysqli_query($konek, $query2);
if($sql2){
	header("location:dataBarang.php");
}else{
	echo "Data gagaldihapus. <a href='dataBarang.php'>Kembali</a>";
}
?>
