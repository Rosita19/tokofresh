<?php

include "koneksi.php";

$nama_br = $_POST['nama_br'];
$query = mysqli_query($konek, "select *from tb_barang where nama_br = '$nama_br'");
$data = mysqli_fetch_array($query);
$nama_pembeli = $_POST['nama_pembeli'];
$query2 = mysqli_query($konek, "select *from tb_pembeli where nama_pembeli = '$nama_pembeli'");
$data2 = mysqli_fetch_array($query2);
$id_pes = $_POST['id_pes'];
$id_pembeli = $data2['id_pembeli'];
$nama_pembeli = $_POST['nama_pembeli'];
$id_br = $_POST['id_br'];
$nama_br = $_POST['nama_br'];
$harga_br = $data['harga_br'];
$jumlah = $_POST['jumlah'];
$total = $jumlah * $harga_br;
$status   = "Belum Dibayar";
$tgl_pesan = date('Ymd');


        $query = "INSERT into pesan  values ('".$id_pes."', '".$id_pembeli."', '".$nama_pembeli."', '".$id_br."', '".$nama_br."', '".$harga_br."', '".$jumlah."', '".$total."', '".$status."', '".$tgl_pesan."')";
        $sql = mysqli_query($konek, $query);
        if ($sql){
        header("location: dataPesan.php");
    
}else{
    echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data e database.";
    echo "<br><a href='detailproduk.php'>Kembali Ke Form</a>";
}
?>