    <?php
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($konek, "select *from tb_login where username = '$username' and password = '$password'");
    while ($data = mysqli_fetch_array($query)) {
        $user = $data['username'];
        $pass = $data['password'];
        $status = $data['hak_akses'];
        if ($status == "Admin") {
           header("location:indexAdmin.php"); 
        }
        else{
                ?>
            <script language="JavaScript">
                alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
            </script>
            <?php
        }
    }
    ?>