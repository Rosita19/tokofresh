<?php

include "koneksi.php";

if(isset($_POST['submit'])){
$id_pes = $_GET['id_pes'];
$nama_br = $_POST['nama_br'];
$jumlah = $_POST['jumlah'];
$harga_br = $_POST['harga_br'];
$total = $jumlah * $harga_br;

    $query = "UPDATE pesan SET nama_br ='$nama_br', harga_br ='$harga_br', jumlah ='$jumlah', total ='$total' WHERE id_pes ='$id_pes'";
    $sql = mysqli_query($konek, $query);
    if ($sql){
        header("location: dataPesan.php");
}else{
    echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data e database.";
    echo "<br><a href='ubahPesan.php'>Kembali Ke Form</a>";
}
}else{
    echo "Maaf, Gambar Gagal untuk diupload.";
    echo "<br><a href='ubahPesan.php'>Kembali Ke Form</a>";
}
?>
