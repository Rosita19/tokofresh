<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<center>
  <h2>FRESH BOUTIQUE</h2>
  <h>Jalan Mawar Indah 19 </h>
  <h>Kota Mojokerto Jawa Timur </h>
  <h>Jl. Raya Pulorejo, Prajuritkulon Mojokerto </h>
  <hr><width="100" height="75"></hr>
</center>
<?php 
include "koneksi.php";
$sql1 = mysqli_query($konek, "select max(nama_admin) as nama_admin from tb_admin");
$data3 = mysqli_fetch_array($sql1); 
?>

<p>Tanggal : <?php  echo date("j F Y, G:i");?></p>
<p>Nama Admin : <?php echo $data3['nama_admin'];?></p>


           <?php
           $nama_pembeli = $_GET['nama_pembeli'];
           error_reporting(0);
           $query = "select max(id_tk) as id_tk, id_pembeli, nama_pembeli, totalseluruh, no_rek, nama_rek, bank  from transaksi where nama_pembeli = '$nama_pembeli'";
           $sql2 = mysqli_query($konek, $query);
           while($data2 = mysqli_fetch_array($sql2)){
            $a = $data2['totalseluruh'];
            ?>

<p>Nama Pembeli : <?php echo $data2['nama_pembeli']; ?></p>
<p>Kode Transaksi : <?php echo $data2['id_tk']; ?></p>
<?php } ?>
  <hr><width="100" height="75"></hr>
  <?php
  include "koneksi.php";
  ?>
            <table cellpadding="5" cellspacing="0" border="0"  width="100%">
              <tr>
              <td><b>Obat</b></td>
              <td><b>Jumlah</b></td>
              <td><b>Total</b></td>
              </tr>

           
           <?php 
           $nama_pembeli = $_GET['nama_pembeli'];
           $sql = mysqli_query($konek, "select *from pesan where nama_pembeli='$nama_pembeli'");
           while($data = mysqli_fetch_array($sql)){
            ?>
            <tr>
            <td><?php echo $data['nama_br']; ?></td>
            <td><?php echo $data['jumlah']; ?></td>
            <td><?php echo $data['total']; ?></td>
            </tr>

              <?php
           }
           ?>
           </table>
           <hr><width="100" height="75" ></hr>

          
       <p>Total : Rp. <?php echo $a; ?></p>


        <center><h2>TERIMA KASIH</h2></center>
        <script>
        window.print();
       </script>
</body>
</html>