<?php 
include "koneksi.php";

if(isset($_POST['simpan'])){
$id_br = $_GET['id_br'];
$nama_br = $_POST['nama_br'];
$harga_br = $_POST['harga_br'];
$stok_br = $_POST['stok_br'];
$satuan_br = $_POST['satuan_br'];
$ket = $_POST['ket'];

		$query = "UPDATE tb_barang SET nama_br ='$nama_br', harga_br ='$harga_br', stok_br ='$stok_br', satuan_br ='$satuan_br', ket ='$ket' WHERE id_br ='$id_br'";
		$sql = mysqli_query($konek, $query); 
        if ($sql){
            header("location: dataBarang.php");
    }else{
        echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data e database.";
        echo "<br><a href='ubahBarang.php'>Kembali Ke Form</a>";
    }
    }else{
        echo "Maaf, Gambar Gagal untuk diupload.";
        echo "<br><a href='ubahBarang.php'>Kembali Ke Form</a>";
    }
    ?>
    