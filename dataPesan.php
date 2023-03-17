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

	</div>
		<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
							<!--start: Container -->
							<div class="title"><h3> Data Pesanan </h3></div>
    	<div class="container">  
    			<br>            
				<div class="col-md-9">
                                        <a href="pakaian.php" class="btn btn-info">&laquo; CONTINUE SHOPPING</a>
                      
                                    </div>
                                </div>

                            <!--Data Table-->
                            <!--===================================================-->
                            <div class="panel-body">
                            
                            </div>
				  
                            <div class="table-responsive">
                                <table class="table table-striped">
                                            <tr>
                                            <th>Id Pesan</th>
                                            <th>Id Pembeli</th>
                                            <th>Nama Pembeli</th>
                                            <th>Id Barang</th>	
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Harga Barang</th>
                                            <th>Total</th>
                                            <th colspan="3"><center>Aksi</center></th>
                                            </tr>
                                            <?php
                                include "koneksi.php";

                                $query = "SELECT * FROM pesan WHERE status = 'Belum Dibayar'";
                                $sql = mysqli_query($konek, $query);

                                while($data = mysqli_fetch_array($sql)){
                                  echo "<tr>";
                                  echo "<td>".$data['id_pes']."</td>";
                                  echo "<td>".$data['id_pembeli']."</td>";
                                  echo "<td>".$data['nama_pembeli']."</td>";
                                  echo "<td>".$data['id_br']."</td>";
                                  echo "<td>".$data['nama_br']."</td>";
                                  echo "<td>".$data['jumlah']."</td>";
                                  echo "<td>".$data['harga_br']."</td>";
                                  echo "<td>".$data['total']."</td>";
                                  echo "<td><a href='hapusPesan.php?id_pes=".$data['id_pes']."'>Hapus</a></td>";
                                  echo "<td><a href='hapusPesan.php?id_pes=".$data['id_pes']."'>Hapus</a></td>";
                                  echo "</tr>"; 
                                  

                                }
                                ?>
                                </table>
                            </div>
                    <!--</div> -->
                    		<?php
                                include "koneksi.php";

                                $sql = "select max(id_tk) from transaksi";
                                $query = mysqli_query($konek, $sql);
                                $kode_tr = mysqli_fetch_array($query);

                                if($kode_tr){
                                    $nilai = substr($kode_tr[0], 2);
                                    $kode = (int)$nilai;

                                    $kode = $kode+1;
                                    $auto_kode = "T".str_pad($kode, 3, "0", STR_PAD_LEFT);
                                }else{
                                    $auto_kode = "T0001";
                                }
                                ?>

                    <form method= "post" action="prosesSimpan.php" enctype="multipart/form-data">
                    <div class="form-group" style="padding: 20px">

	                    <label class="col-md-3 control-label" for="demo-text-input">Id Transaksi</label>
	                    <div class="col-md-9">
	                        <input type="text" name="id_tk" value=" <?php echo $auto_kode;?>" readonly="readonly" id="demo-text-input" class="form-control" placeholder="Id Transaksi">
	      
	                    </div>
                	</div>
                	
			        <div id="kasirnya">
			            <table class="table table-stripped">
			                <?php
				                 $query = mysqli_query($konek, "select sum(total) as totalseluruh, id_pembeli, nama_pembeli from pesan group by status = 'Sudah Dibayar'");
				                 $data = mysqli_fetch_array($query);
                 				?>
                 		<div class="form-group" style="padding: 20px">
		                    <label class="col-md-3 control-label" for="demo-text-input">Id Pembeli</label>
		                    <div class="col-md-9">
		                        <input type="text" name="id_pembeli"  class="form-control" value="<?php echo $data['id_pembeli'];?>" readonly>
		      
		                    </div>
                		</div>
                 		<div class="form-group" style="padding: 20px">
		                    <label class="col-md-3 control-label" for="demo-text-input">Nama Pembeli</label>
		                    <div class="col-md-9">
		                        <input type="text" name="nama_pembeli"  class="form-control" value="<?php echo $data['nama_pembeli'];?>" readonly>
		      
		                    </div>
                		</div>
                		<div class="form-group" style="padding: 20px">
		                    <label class="col-md-3 control-label" for="demo-text-input">Alamat</label>
		                    <div class="col-md-9">
		                        <input type="text" name="alamat"  class="form-control" placeholder="Alamat Pengiriman">
		      
		                    </div>
                		</div>
                		<div class="form-group" style="padding: 20px">
		                    <label class="col-md-3 control-label" for="demo-text-input">No Rek</label>
		                    <div class="col-md-9">
		                        <input type="text" name="no_rek"  class="form-control" placeholder="No Rek">
		      
		                    </div>
                		</div>
                			<div class="form-group" style="padding: 20px">
		                    <label class="col-md-3 control-label" for="demo-text-input">Nama Rek</label>
		                    <div class="col-md-9">
		                        <input type="text" name="nama_rek"  class="form-control" placeholder="Nama Rek">
		      
		                    </div>
                		</div>
                		<div class="form-group" style="padding: 20px">
                			<label class="col-md-3 control-label" for="demo-text-input">Pilih Bank</label>
		                    <div class="col-md-9">
		                        <select class="form-control" name="bank"> 
		                            <option name="bank" value="BRI">BRI</option>
		                            <option name="bank" value="BNI">BNI</option>
		                            <option name="bank" value="Mandiri">Mandiri</option>
		                            <option name="bank" value="BCA">BCA</option>
		                            <option name="bank" value="BTN">BTN</option>
		                        </select>
		                    </div>
		                </div>
			           	<div class="form-group" style="padding: 20px">
		                    <label class="col-md-3 control-label" for="demo-text-input">Total Seluruh</label>
		                    <div class="col-md-9">
		                        <input type="text" name="totalseluruh"  class="form-control" value="<?php echo $data['totalseluruh'];?>" readonly>
		      
		                    </div>
                		</div>

			             <div class="form-group" style="padding: 20px">
			                <input type="submit" name="submit" value="Cekout" class="btn btn-lg btn-danger">
<!-- 			        		<a href="cekout.php"><input type="button" value="cekout" class="btn btn-lg btn-danger"></a> -->
			                <a href="pakaian.php"><input type="button" value="Batal" class="btn btn-lg btn-danger"></a>
			            </div>

			            </form>
				     </table>
				 </div>
				</form>
			 </div>



						
					</ul>
					</div></form>

        
<br/>
<br/>
                        </div>  
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
<!-- //footer -->
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
