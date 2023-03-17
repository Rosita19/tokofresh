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
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
							<!--start: Container -->
  <div class="container">

			<!-- start: Table -->
                 <div class="table-responsive">
                 	<br>
                 <div class="title"><h3>Form Input Pembeli</h3></div>
                 <div class="hero-unit"></div>
                 			<?php
                                include "koneksi.php";

                                $sql = "select max(id_pembeli) FROM tb_pembeli";
                                $query = mysqli_query($konek, $sql);
                                $kode_pem = mysqli_fetch_array($query);

                                if($kode_pem){
                                    $nilai = substr($kode_pem[0], 1);
                                    $kode = (int)$nilai;

                                    $kode = $kode+1;
                                    $kode_auto = "U".str_pad($kode, 3, "0", STR_PAD_LEFT);
                                }else{
                                    $kode_auto = "U001";
                                }
                            ?>
                <form method= "post" action="prosesInputPembeli.php" enctype="multipart/form-data">
                <div class="form-group" style="padding: 20px">
                    <label class="col-md-3 control-label" for="demo-text-input">Id Pembeli</label>
                    <div class="col-md-9">
                        <input type="text" name="id_pembeli" value="<?php echo $kode_auto;?> " readonly="readonly" id="demo-text-input" class="form-control" placeholder="Id Pembeli">
      
                    </div>
                </div>
                <div class="form-group" style="padding: 20px">
                    <label class="col-md-3 control-label" for="demo-text-input">Nama Pembeli</label>
                    <div class="col-md-9">
                        <input type="text" name="nama_pembeli" id="demo-text-input" class="form-control" placeholder="Nama Pembeli">
      
                    </div>
                </div>
                <div class="form-group" style="padding: 20px">
                    <label class="col-md-3 control-label" for="demo-text-input">Email</label>
                    <div class="col-md-9">
                        <input type="text" name="email" id="demo-text-input" class="form-control" placeholder="Email">
      
                    </div>
                </div>
                <div class="form-group" style="padding: 20px">
                    <label class="col-md-3 control-label" for="demo-text-input">Alamat</label>
                    <div class="col-md-9">
                        <textarea name="alamat" id="demo-textarea-input" rows="2" class="form-control" placeholder="Alamat"></textarea>
      
                    </div>
                </div>
                <div class="form-group" style="padding: 20px">
                    <label class="col-md-3 control-label" for="demo-text-input">Kode Pos</label>
                    <div class="col-md-9">
                        <input type="number" name="kd_pos" id="demo-number-input" class="form-control" placeholder="Kode Pos">
      
                    </div>
                </div>
                <div class="form-group" style="padding: 20px">
                    <label class="col-md-3 control-label" for="demo-text-input">No Hp</label>
                    <div class="col-md-9">
                        <input type="number" name="hp" id="demo-number-input" class="form-control" placeholder="Hp">
      
                    </div>
                </div>
                 <div class="form-group" style="padding: 20px">
                <input type="submit" name="submit" value="Simpan">
                <a href="index.php"><input type="button" value="Batal"></a>
            </div>
    		</form>

                   </div>
				
			<!-- end: Table -->

		</div>
		<!-- end: Container -->


						
					</ul>
				</div>

			</section>
		
		</div>
		<div class="clearfix">
			


		</div>
	</div>
<!-- banner -->
	<div class="banner_bottom">
			
			
		
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
</body>
</html>
