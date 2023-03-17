<?php
include "koneksi.php";

$id_st = $_GET['id_st'];

$query = "SELECT * FROM tb_setor WHERE id_st='".$id_st."'";
$sql = mysqli_query($konek, $query);
$data = mysqli_fetch_array($sql);


$query2 = "DELETE FROM tb_setor WHERE id_st='".$id_st."'";
$sql2 = mysqli_query($konek, $query2);
if($sql2){
	header("location:dataSetor.php");
}else{
	echo "Data gagaldihapus. <a href='dataSetor.php'>Kembali</a>";
}
?>