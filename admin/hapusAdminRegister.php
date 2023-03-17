<?php
include "koneksi.php";

$id_admin = $_GET['id_admin'];

$query = "SELECT * FROM tb_admin WHERE id_admin ='".$id_admin."'";
$sql = mysqli_query($konek, $query);
$data = mysqli_fetch_array($sql);


$query2 = "DELETE FROM tb_admin WHERE id_admin ='".$id_admin."'";
$sql2 = mysqli_query($konek, $query2);
if($sql2){
	header("location:dataAdminRegister.php");
}else{
	echo "Data gagaldihapus. <a href='dataAdminRegister.php'>Kembali</a>";
}
?>
