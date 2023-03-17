<?php

include "koneksi.php";

if(isset($_POST['submit'])){
$id_tk = $_POST['id_tk'];
$nama_pembeli = $_POST['nama_pembeli'];
$alamat = $_POST['alamat'];
$no_rek = $_POST['no_rek'];
$nama_rek = $_POST['nama_rek'];
$bank = $_POST['bank'];
$totalseluruh = $_POST['totalseluruh'];
$tgl_tr = date('Ymd');

             

	$query = mysqli_query($konek, "select *from pesan where nama_pembeli = '$nama_pembeli'");
	while ($data = mysqli_fetch_array($query)) {
		$id_pembeli = $data['id_pembeli'];
		$status = 'Sudah Dibayar';

	$sql =mysqli_query($konek,  "INSERT INTO transaksi VALUES ('$id_tk', '$id_pembeli', '$nama_pembeli', '$alamat', '$totalseluruh', '$no_rek', '$nama_rek', '$bank', '$tgl_tr')");

	$sql2 = mysqli_query($konek, "UPDATE pesan SET status = '$status' where nama_pembeli = '$nama_pembeli'");
	if ($sql and $sql2){
		header("location: print.php?nama_pembeli=$nama_pembeli");
}}
}else{
	echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data e database.";
	echo "<br><a href='dataPesan.php'>Kembali Ke Form</a>";
}
?>