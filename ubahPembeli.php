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
						<li>
						<?php
		                    $sql = mysqli_query($konek, "SELECT * FROM tb_pembeli ORDER BY id_pembeli");
		                    $data = mysqli_fetch_array($sql);
		                    ?>	
                    	<a href="profil.php?kp=<?php echo $data['id_pembeli'];?>"> Profil</a>
                    	<?php 
              				?>
                    	
              			</li>
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

			<!-- start: Table -->
                 <div class="table-responsive"><br>
                 <div class="title"><h3>Profil Pembeli</h3></div><br>

                 			    <?php

                                include "koneksi.php";
                                 $id_pembeli = $_GET['ub'];

                                    $query = "SELECT *FROM tb_pembeli WHERE id_pembeli='$_GET[ub]'";
                                    $sql = mysqli_query($konek, $query);
                                    $data = mysqli_fetch_array($sql);
                                ?>
              <form method="post" action="proses_ubahPembeli.php?id_pembeli=<?php echo $id_pembeli; ?>" enctype="multipart/form-data">
                <div class="form-group" style="padding: 20px">   
                    <div class="col-md-9">
                    	<label style="margin: 5px;">Nama Pembeli</label>
                        <input type="text" name="nama_pembeli" value="<?php echo $data['nama_pembeli'];?> " id="demo-text-input" class="form-control" placeholder="Nama Pembeli">
                        <label style="margin: 5px;">Email</label>
                        <input type="text" name="email" value="<?php echo $data['email'];?> " id="demo-text-input" class="form-control" placeholder="Email">
                        <label style="margin: 5px;">Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $data['alamat'];?> " id="demo-text-input" class="form-control" placeholder="Alamat">
                        <label style="margin: 5px;">Kode Pos</label>
                        <input type="text" name="kd_pos" value="<?php echo $data['kd_pos'];?> " id="demo-text-input" class="form-control" placeholder="Kode Pos">
                        <label style="margin: 5px;">No Hp</label>
                        <input type="text" name="hp" value="<?php echo $data['hp'];?> " id="demo-text-input" class="form-control" placeholder="No Hp"><br>
                        <input type="submit" name="submit" value="simpan">
                		<a href="profil.php"><input type="button" value="Batal"></a>
                    </div> 
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
