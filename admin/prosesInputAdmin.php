<?php

include "koneksi.php";

if(isset($_POST['submit'])){
$id_admin = $_POST['id_admin'];
$nama_admin = $_POST['nama_admin'];


	$query = "INSERT INTO tb_admin (id_admin, nama_admin) VALUES ('".$id_admin."', '".$nama_admin."')";
	$sql = mysqli_query($konek, $query);
	if ($sql){
		header("location: dataAdminRegister.php");
}else{
	echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data e database.";
	echo "<br><a href='inputAdmin.php'>Kembali Ke Form</a>";
}
}else{
	echo "Maaf, Gambar Gagal untuk diupload.";
	echo "<br><a href='inputAdmin.php'>Kembali Ke Form</a>";
}
?>