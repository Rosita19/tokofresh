<?php

include "koneksi.php";

if(isset($_POST['submit'])){
$id_tk = $_POST['id_tk'];
$nama_pembeli = $_POST['nama_pembeli'];
$no_rek = $_POST['no_rek'];
$nama_rek = $_POST['nama_rek'];
$bank = $_POST['bank'];
$totalseluruh = $_POST['totalseluruh'];
             

	$query = "INSERT into transaksi values ('".$id_tk."', '".$nama_pembeli."', '".$no_rek."', '".$nama_rek."', '".$bank."', '".$totalseluruh."')";
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