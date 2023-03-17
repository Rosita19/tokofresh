<?php

include "koneksi.php";

if(isset($_POST['submit'])){
$nama_br = $_POST['nama_br'];
$harga_br = $_POST['harga_br'];
$stok_br = $_POST['stok_br'];
$satuan_br = $_POST['satuan_br'];
$ket = $_POST['ket'];
$jumlah = $_POST['jumlah'];


    $query = "INSERT INTO pesan (nama_br, harga_br, stok_br, satuan_br, ket, jumlah) VALUES (".$nama_br."', '".$harga_br."', '".$stok_br."', '".$satuan_br."', '".$ket."', '".$jumlah."')";
    $sql = mysqli_query($konek, $query);
    if ($sql){
        header("location: dataPesan.php");
}else{
    echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data e database.";
    echo "<br><a href='detailproduk.php'>Kembali Ke Form</a>";
}
}else{
    echo "Maaf, Gambar Gagal untuk diupload.";
    echo "<br><a href='detailproduk.php'>Kembali Ke Form</a>";
}
?>
