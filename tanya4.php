<?php
session_start();
$poin2 = $_SESSION['skor'];

$hasil=$poin2;

if(isset($_POST['1']))
	{
		//select image from db to delete
		$hasil =$poin2+0;
	}

else if(isset($_POST['2']))
	{
		//select image from db to delete
		$hasil =$poin2+0;
	}
else if(isset($_POST['3']))
	{
		//select image from db to delete
		$hasil =$poin2+0;
	}

else if(isset($_POST['4']))
	{
		//select image from db to delete
		$hasil =$poin2+1;
	}
	$_SESSION['skor']=$hasil;
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stuff Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
	.skor{
			margin-top: 140px;
			width: 11%;
			height: 90px;
			color: #fff;
			font-size: 27pt;
			border-radius: 20px;
			background-color: #465C47;
		}
	.butonn{
			background-color: #86C55A;
			color: #FFF;
			width: 11%;
			height: 40px;
			font-size: 14pt;
			border-radius: 50px;
			box-shadow: 0px 9px #999;
		}
		.butonn:hover{
			background-color: #A4C88B;
}
	
		.button{
			margin-top: 140px;
			width: 55%;
			height: 80px;
			color: #fff;
			font-size: 20pt;
			border-right: 0;
			border-top: 0;
			border-bottom: 0;
		}
		.satuu{
			background-color: #09BCC1;
			box-shadow: 9px 9px #00FFFF;
		}
		.duaa{
			background-color: #86C55A;
			box-shadow: 9px 9px #009933;
		}
		.tigaa{
			background-color: #F8A130;
			box-shadow: 9px 9px #FFFF99;
		}
		.empatt{
			background-color: #ED297B;
			box-shadow: 9px 9px #FF9999;
		}
		.tanyaa{
			background-color: yellow;
			box-shadow: 9px 9px orange;
			height: 80px;
			color: black;
			padding: 5px;
		}
		.butonn:hover{
			background-color: #86C55A;
}
	</style>
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(bahan/bg2.png);">
			   		<div class="overlay">
			   			
			   		<center>
			<img src="bahan/headrev.png" style="margin-top: 100px;  width: 300px; height: 300px;">
		</center>
			   		</div>
			   		<div class="container">
			   			<div class="row">
			   				<div class="col-md-4"></div>
				   			<div class="col-md-5 slider-text" >
				   				<div class="slider-text-inner">
				   					<div class="desc" style="background-color: #F7F7F7">
				   						<h1 align="center">
				   						<font style="font-family:Ailerons-Typeface;">
				   						FOTOSINTESIS</h1></font>
				   						<hr style="display: block;
				   						width: 100%;
				   						border-color: #A4C88B;
										margin-top: 0.5em;
										margin-bottom: 0.5em;
										margin-left: auto;
										margin-right: auto;
										border-style: inset;
										border-width: 1px;">
				   						<h4 align="center">
				   						<font style="color: #86C55A; size: 19pt; font-family:Ailerons-Typeface;"><b>Kelas 5 SD/MI</b></font>
											</h4>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	</ul>
			   </div>
		</aside>

		<div id="colorlib-container" style="background: #F7F7F7;" id="menu">
			<div style="background:#f7f7f7 ; width: 100%;">
			
							
				<div class="container">
				<div class="row row-pb-md">
						<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="blog-entry">
							<div>
								<center>
								<form action="?.html #colorlib-container">
									<input type="submit" name="1" value="Tahap reaksi ada dua, yaitu : "  class="buton tanyaa">
								</form></center>
							</div>
						</div>
					</div>	</center>
							</div>
				<form method="post" enctype="multipart/form-data" action=" #colorlib-footer" >
				<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-6">
						<div class="blog-entry">
							<div>
								<center >
									<input type="submit" name="1" value="Tinggi dan pendek"  class="button satuu">
								</center>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="blog-entry">
							<div>
								<center>
									<input type="submit" name="2" value="Jauh dan dekat"  class="button duaa">
								</center>
							</div>
						</div>
					</div>
					<div class="row row-pb-md">
					<div class="col-md-6">
						<div class="blog-entry">
							<div>
								<center>
									<input type="submit" name="3" value="Panjang dan pendek"  class="button tigaa">
							</center>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="blog-entry">
							<div>
								<center>
									<input type="submit" name="4" value="Gelap dan terang"  class="button empatt">
								</center>
							</div>
						</div>
					</div></form>
					<div class="row row-pb-md">
					<div class="col-md-12">
						<div class="blog-entry">
							<div>
								<center><br><br><br>
									<form id="sk">
						<input type="submit" name="" class="skor" value="<?php echo $hasil ?>">
					</form>
									<table border="0" style="margin-left: 55px;">
			<td align="center">
				<form action="index.html #colorlib-container">
						<b><input type="submit" name="back" value="HELP" class="butonn" style="width: 120px; height: 40px;"></b>
				</form>
			</td>
			<td align="center"><form action="tanya5.php #colorlib-container" style="margin-left: 630px;">
					<b><input type="submit" name="nxt" value="LANJUT" class="butonn" style="width: 120px; height: 40px;"></b>
				</form></td>
		</table>
		
							</center>
							</div>
						</div>
					</div>
			</div></div></div>
			</div>
		</div>

		
			</div>
		</div>
		<footer id="colorlib-footer" role="contentinfo" style="background: #86C55A">
			<div class="container" style="height: 5px;">
				<center>
					<font color="#fff" style="font-size: 14pt;">
						<p>@E-LEARNING . SMKN 1 CIMAHI<br>
						2019
						</p>
					</font>
				</center>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

