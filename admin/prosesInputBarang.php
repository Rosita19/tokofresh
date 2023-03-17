<?php

include "koneksi.php";

if(isset($_POST['simpan'])){
$id_br = $_POST['id_br'];
$nama_br = $_POST['nama_br'];
$harga_br = $_POST['harga_br'];
$stok_br = $_POST['stok_br'];
$satuan_br = $_POST['satuan_br'];
$ket = $_POST['ket'];
$status_br = $_POST['status_br'];


$sumber = $_FILES['gbr']['tmp_name'];
$target = 'img/';
$nama_gambar = $_FILES['gbr']['name'];
$simpan_data = $_POST['simpan']; 

	if ($simpan_data) {

        if ($nama_br== "" || $harga_br== "" || $stok_br== "" || $satuan_br== "" || $ket=="" || $status_br=="" || $nama_gambar == ""){
            
            echo "Inputan harus diisi, silahkan Lengkapi lagi !!";
            echo "<br><a href='inputBarang.php'>Kembali Ke Form</a>";
            ?>

            <?php
                                   
        } else{

	$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

	if ($pindah) {
        $query = "insert into tb_barang values ('".$id_br."','".$nama_br."', '".$harga_br."','".$stok_br."','".$satuan_br."', '".$ket."','".$status_br."' ,'".$nama_gambar."')";
        $sql = mysqli_query($konek, $query);
        if ($sql){
            header("location: dataBarang.php");
        }else{
            echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data e database.";
            echo "<br><a href='inputBarang.php'>Kembali Ke Form</a>";
        }
         ?>
		<script type="text/javascript">
            alert(" Sukses !  Data berhasil disimpan! ");     
        </script>
         <?php

    } else{

		?>
        <script type="text/javascript">
                                          
            alert("Oops...", "gambar gagal disimpan  !!:(", "error");
        </script>         

        <?php
        }

      }

      }
                              
}

?>