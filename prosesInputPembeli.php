<?php

include "koneksi.php";

if(isset($_POST['submit'])){
$id_pembeli = $_POST['id_pembeli'];
$nama_pembeli = $_POST['nama_pembeli'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kd_pos = $_POST['kd_pos'];
$hp = $_POST['hp'];


	$query = "INSERT INTO tb_pembeli (id_pembeli, nama_pembeli, email, alamat, kd_pos, hp) VALUES ('".$id_pembeli."', '".$nama_pembeli."', '".$email."', '".$alamat."', '".$kd_pos."', '".$hp."')";
	$sql = mysqli_query($konek, $query);
	if ($sql){
		header("location: dataPembeliRegister.php");
}else{
	echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data e database.";
	echo "<br><a href='inputPembeli.php'>Kembali Ke Form</a>";
}
}else{
	echo "Maaf, Gambar Gagal untuk diupload.";
	echo "<br><a href='inputPembeli.php'>Kembali Ke Form</a>";
}
?>