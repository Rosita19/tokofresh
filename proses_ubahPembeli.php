<?php

include "koneksi.php";

if(isset($_POST['submit'])){
$id_pembeli = $_GET['id_pembeli'];
$nama_pembeli = $_POST['nama_pembeli'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kd_pos = $_POST['kd_pos'];
$hp = $_POST['hp'];

    $query = "UPDATE tb_pembeli SET nama_pembeli ='$nama_pembeli', email ='$email', alamat ='$alamat', kd_pos ='$kd_pos', hp ='$hp' WHERE id_pembeli ='$id_pembeli'";
    $sql = mysqli_query($konek, $query);

    if ($sql){
        ?>
        <script type="text/javascript">
            window.alert('sukses diedit');
        </script>
        <?php
}else{
    echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data e database.";
    echo "<br><a href='ubahPembeli.php'>Kembali Ke Form</a>";
}
}else{
    echo "Maaf, Gambar Gagal untuk diupload.";
    echo "<br><a href='ubahPembeli.php'>Kembali Ke Form</a>";
}
?>