<?php

include "koneksi.php";

if(isset($_POST['submit'])){
$id_st = $_POST['id_st'];
$tgl_set = $_POST['tgl_set'];
$id_br = $_POST['id_br'];
$nama_br = $_POST['nama_br'];
$jumlah_set = $_POST['jumlah_set'];
$date 	  = date('Ymd');



	$query = "INSERT INTO tb_setor (id_st, tgl_set, id_br, nama_br, jumlah_set) VALUES ('".$id_st."', '".$date."', '".$id_br."', '".$nama_br."', 
	'".$jumlah_set."')";
	$sql = mysqli_query($konek, $query);
	if ($sql){
		header("location: dataSetor.php");
}else{
	echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data e database.";
	echo "<br><a href='inputSetor.php'>Kembali Ke Form</a>";
}
}else{
	echo "Maaf, Gambar Gagal untuk diupload.";
	echo "<br><a href='inputSetor.php'>Kembali Ke Form</a>";
}
?>