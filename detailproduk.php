<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>

<!DOCTYPE html>
<html>
<head>
<title> Home | Tugas Akhir Sistem Informasi Penjualan</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="asset/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="asset/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="asset/js/move-top.js"></script>
<script type="text/javascript" src="asset/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="#"><span>TOKO ONLINE</span> FRESH BOUTIQUE</a></h1>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li> SISTEM INFORMASI PENJUALAN BERBASIS WEB FRESH BOUTIQUE</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li></i> <a href="home.php"> Home</a></li>
						<li><a href="pakaian.php"> Pakaian</a></li>
						<li><a href="logout.php"> Logout</a></li>
					
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
							<!--start: Container -->
    	<div class="container">  
    			<br>            
				<div class="title"><h3> Detail Produk </h3></div>
				<div class="form-group" style="padding: 20px">
                      
                                    <div class="col-md-9">
                                        <a href="pakaian.php" class="btn btn-info">&laquo; CONTINUE SHOPPING</a>
                                        <a href="dataPesan.php" class="btn btn-info">&laquo; Pesanan</a>
                      
                                    </div>
                                </div>
				<br> <br>
				<div class="col-sm-6">
								<?php

                                include "koneksi.php";
                                 $id_br = $_GET['kd'];

                                    $query = "SELECT *FROM tb_barang WHERE id_br='$_GET[kd]'";
                                    $sql = mysqli_query($konek, $query);
                                    $data = mysqli_fetch_array($sql);
                                ?>
                                <div class="form-group" style="padding: 20px">
                        				<img src="admin/img/<?php echo $data['gbr']; ?>"/>
                				</div>
                            	
                                <div class="form-group" style="padding: 20px">
                                    <label class="col-md-3 control-label" for="demo-text-input">Nama Barang</label>
                                    <div class="col-md-9">
                                        <h3><?php echo $data['nama_br']; ?></h3>
                      
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 20px">
                                    <label class="col-md-3 control-label" for="demo-text-input">Harga Barang</label>
                                    <div class="col-md-9">
                                        <h3><?php echo $data['harga_br']; ?></h3>
                      
                                    </div>
                                </div>
                                <div class="form-group" style="padding: 20px">
                                    <label class="col-md-3 control-label" for="demo-text-input">Stok Barang</label>
                                    <div class="col-md-9">
                                        <h3><?php echo $data['stok_br']; ?></h3>
                      
                                    </div>
                                </div>
                                 <div class="form-group" style="padding: 20px">
                                    <label class="col-md-3 control-label" for="demo-text-input">Satuan Barang</label>
                                    <div class="col-md-9">
                                        <h3><?php echo $data['satuan_br']; ?></h3>
                      
                                    </div>
                                </div>
                                 <div class="form-group" style="padding: 20px">
                                    <label class="col-md-3 control-label" for="demo-text-input">Keterangan</label>
                                    <div class="col-md-9">
                                        <h3><?php echo $data['ket']; ?></h3>
                      
                                    </div>
                                </div>
                                <br>
				
                    </div>
                </div>
                <br>
                <br>
               <div class="title"><h3> Go Pesan! </h3></div>
                    <!--</div> -->
                    <?php
                                include "koneksi.php";

                                $sql = "select max(id_pes) FROM pesan";
                                $query = mysqli_query($konek, $sql);
                                $kode_pes = mysqli_fetch_array($query);

                                if($kode_pes){
                                    $nilai = substr($kode_pes[0], 1);
                                    $kode = (int)$nilai;

                                    $kode = $kode+1;
                                    $kode_auto = "E".str_pad($kode, 3, "0", STR_PAD_LEFT);
                                }else{
                                    $kode_auto = "E001";
                                }
                            ?>
                <form method= "post" action="prosesInputPesan.php" enctype="multipart/form-data">
                <div class="form-group" style="padding: 20px">
                    <label class="col-md-3 control-label" for="demo-text-input">Id Pesan</label>
                    <div class="col-md-9">
                        <input type="text" name="id_pes" value="<?php echo $kode_auto;?> " readonly="readonly" id="demo-text-input" class="form-control" placeholder="Id Pesan">
      
                    </div>
                </div>
                <div class="form-group" style="padding: 20px">
                     <label class="col-md-3 control-label" for="demo-text-input"> Nama Pembeli</label>
                      <div class="col-md-9">
                        <select class="form-control" name="nama_pembeli" required="" id="nama_pembeli" onchange='changeValue(this.value)' required>
                           <option>Pembeli</option>
                              <?php 
                                 include 'koneksi.php';
                                 $sql = mysqli_query($konek,"select *from tb_pembeli order by nama_pembeli asc");
                                 $result = mysqli_query($konek, "select *from tb_pembeli");
                                 $jsArray = "var prdName = new Array();\n";
                                 while ($row = mysqli_fetch_array($result)) {
                                 echo '<option name="nama_pembeli" value="' .$row['nama_pembeli']. '">' .$row['nama_pembeli'].'</option>';
                                 $jsArray .= "prdName['" . $row['nama_pembeli']."'] = {id_pembeli:'".addslashes($row['id_pembeli'])."'};\n";
                               }
                                ?>
                        </select>
                      
                     </div>
                </div>
                <div class="form-group" style="padding: 20px">
                     <label class="col-md-3 control-label" for="demo-text-input">Id Barang</label>
                        <div class="col-md-9">
                        <input type="text" name="id_br"  required="" id="id_br" class="form-control" placeholder="Id Barang" readonly>
                        </div>
                 </div>
                <div class="form-group" style="padding: 20px">
                     <label class="col-md-3 control-label" for="demo-text-input"> Nama Barang</label>
                      <div class="col-md-9">
                        <select class="form-control" name="nama_br" required="" id="nama_br" onchange='changeValue(this.value)' required>
                           <option>Barang</option>
                              <?php 
                                 include 'koneksi.php';
                                 $sql = mysqli_query($konek,"select *from tb_barang order by nama_br asc");
                                 $result = mysqli_query($konek, "select *from tb_barang");
                                 $jsArray = "var prdName = new Array();\n";
                                 while ($row = mysqli_fetch_array($result)) {
                                 echo '<option name="nama_br" value="' .$row['nama_br']. '">' .$row['nama_br'].'</option>';
                                 $jsArray .= "prdName['" . $row['nama_br']."'] = {id_br:'".addslashes($row['id_br'])."'};\n";
                               }
                                ?>
                        </select>
                      
                     </div>
                </div>
                <div class="form-group" style="padding: 20px">
                    <label class="col-md-3 control-label" for="demo-text-input">Jumlah</label>
                    <div class="col-md-9">
                        <input type="text" name="jumlah" id="demo-text-input" class="form-control" placeholder="Jumlah">
      
                    </div>
                </div>
                 <div class="form-group" style="padding: 20px">
                <input type="submit" name="submit" value="Simpan">
                <a href="inputPesan.php"><input type="button" value="Batal"></a>
            </div>
             <script type="text/javascript">
               <?php echo $jsArray; ?>
               function changeValue(id){
               	document.getElementById('id_br').value = prdName[id].id_br;
                  };
             </script>

    		</form>





						
					</ul>
				</div>

			</section>
		
		</div>
<!-- banner -->
	<div class="banner_bottom">
			
			
		
	</div>

					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
<!-- top-brands -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
					<div class="w3_footer_grid_bottom">
						<h4><p>© Basisi Data | Universitas Trunojoyo Madura </p></h4>
						
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="asset/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="asset/js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>
