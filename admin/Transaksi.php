<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    
<center><br>
<center><b>LAPORAN FRESH BOUTIQUE</center>
<center><b>FASHION BAJU REMAJA JAWA TIMURAN</center>
<center><b>Jl. Raya Pulorejo, Prajuritkulon Mojokerto 61325 Jawa Timur, Indonesia<b></center>
<hr><width="100" height="75"></hr>
<center>
	<h2>Data Transaksi</h2>
</center>
<?php
include 'koneksi.php';
?>

          <table cellpadding="5" cellspacing="0" border="1" width="100%">
            <tr>
    <th>Id Transaksi</th>
    <th>Id Pembeli</th>
    <th>Nama Pembeli</th>
    <th>Alamat</th>
    <th>Total</th>
    <th>No Rek</th>
    <th>Nama Rek</th>
    <th>Bank</th>
    <th>Tanggal Transaksi</th>
            </tr>

            <?php
           $sql = mysqli_query($konek, "select *from transaksi ");
           while($data = mysqli_fetch_array($sql)){
            ?>
            <tr>
            <td><?php echo $data['id_tk']; ?></td>
            <td><?php echo $data['id_pembeli']; ?></td>
            <td><?php echo $data['nama_pembeli']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['totalseluruh']; ?></td>
            <td><?php echo $data['no_rek']; ?></td>
            <td><?php echo $data['nama_rek']; ?></td>
            <td><?php echo $data['bank']; ?></td>
            <td><?php echo $data['tgl_tr']; ?></td>
            </tr>
              <?php
           }
           ?>
       </table>
        <script>
       	window.print();
       </script>
</body>
</html>