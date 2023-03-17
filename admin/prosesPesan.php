<?php

include "koneksi.php";

if(isset($_POST['submit'])){
$id_pesan = $_POST['id_pesan'];
$nama_br = $_POST['nama_br'];
$jumlah= $_POST['jumlah'];
$harga_br = $_POST['harga_br'];
$total = $jumlah * $harga_br;


    $query = "INSERT into pesan values ('".$id_pesan."', '".$nama_br."', '".$jumlah."', '".$harga_br."', '".$total."')";
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