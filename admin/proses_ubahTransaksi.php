<?php 

include "koneksi.php";
if(isset($_POST['simpan'])){
$id_tk         = $_GET['id_tk'];
$nama_pembeli       = $_POST['nama_pembeli'];
$no_rek       = $_POST['no_rek'];
$nama_rek       = $_POST['nama_rek'];
$bank       = $_POST['bank'];



		$query = "UPDATE transaksi SET nama_pembeli ='$nama_pembeli', no_rek ='$no_rek', nama_rek ='$nama_rek', bank ='$bank' WHERE id_tk ='$id_tk'";
		$sql = mysqli_query($konek, $query); 
		if ($sql) {
			header("location: dataTransaksi.php");
		}else{
			die("Gagal");
		}
	}else{
		die("Gagal");
	}
?>