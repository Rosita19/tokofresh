<?php

include "koneksi.php";

if(isset($_POST['submit'])){
$id_tr = $_POST['id_tr'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kd_pos = $_POST['kd_pos'];
$kota = $_POST['kota'];
$hp = $_POST['hp'];
$no_rek = $_POST['no_rek'];
$nama_rek = $_POST['nama_rek'];
$bank = $_POST['bank'];

	$query = "insert into transaksi values ('".$id_tr."', '".$nama."', '".$username."', '".$password."', '".$email."', '".$alamat."', '".$kd_pos."', '".$kota."', '".$hp."', '".$no_rek."', '".$nama_rek."', '".$bank."')";
	$sql = mysqli_query($konek, $query);
	if ($sql){
		header("location: cekout.php");
}else{
	echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data e database.";
	echo "<br><a href='cekout.php'>Kembali Ke Form</a>";
}
}else{
	echo "Maaf, Gambar Gagal untuk diupload.";
	echo "<br><a href='cekout.php'>Kembali Ke Form</a>";
}
?>