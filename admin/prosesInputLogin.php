<?php

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];


	$query = "INSERT INTO tb_login VALUES ('', '".$username."', '".$password."', '".$password."')";
	$sql = mysqli_query($konek, $query);
	if ($sql){
		header("location: dataAdminRegister.php");
}else{
	echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data e database.";
	echo "<br><a href='inputAdmin.php'>Kembali Ke Form</a>";
}
?>