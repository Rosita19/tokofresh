<?php 

include "koneksi.php";
if(isset($_POST['simpan'])){
$id_admin         = $_GET['id_admin'];
$nama_admin       = $_POST['nama_admin'];



		$query = "UPDATE tb_admin SET nama_admin ='$nama_admin' WHERE id_admin ='$id_admin'";
		$sql = mysqli_query($konek, $query); 
		if ($sql) {
			header("location: dataAdmin.php");
		}else{
			die("Gagal");
		}
	}else{
		die("Gagal");
	}
?>