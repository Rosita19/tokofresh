<?php 

include "koneksi.php";
if(isset($_POST['simpan'])){
$id_st           = $_GET['id_st'];
$tgl_set          = $_POST['tgl_set'];
$id_br          = $_POST['id_br'];
$nama_br       = $_POST['nama_br'];
$jumlah_set      = $_POST['jumlah_set'];



		$query = "UPDATE tb_setor SET tgl_set='$tgl_set', id_br='$id_br', nama_br='$nama_br', jumlah_set='$jumlah_set' WHERE id_st='$id_st'";
		$sql = mysqli_query($konek, $query); 
		if ($sql) {
			header("location: dataSetor.php");
		}else{
			die("Gagal");
		}
	}else{
		die("Gagal");
	}
?>