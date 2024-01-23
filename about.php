<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> OnlineBloodBank 
	</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
</head>

<body>
	<!--w3l-header-->
	<section class="w3l-top-header-content">
		<div class="hny-top-menu">
			<div class="container">
				<div class="row">
					<div class="top-left col-lg-6">
						<ul class="accounts">
							<li class="top_li"><span class="fa fa-map-o"></span> <a href="#">kanyakumari</a>
							</li>
							<li class="top_li mr-lg-0"><span class="fa fa-envelope-o"></span> <a
									href="mailto:mail@company.com" class="mail">onlinebloodbankkk@gmail.com</a>

							</li>
						</ul>
					</div>
					<div class="social-top col-lg-6 mt-lg-0 mt-sm-3">
						<div class="top-bar-text"><a class="bk-button" href="#">Blood Bank Online</a> You can
							request appointment in 24 hours</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--//top-header-content-->
	<!--w3l-header-->
	<header class="w3l-header-nav">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light px-lg-0 py-0 px-3 stroke">
			<div class="container">
				<a class="navbar-brand" href="index.php"><span>Blood</span>Bank</a>
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-lg-auto">
						
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">Blood Donars <br>Details</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="serives.php">Blood Needed<br> Person apply here</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Details of blood<br> needed person </a>
						</li>
					</ul>
					<!--/search-right-->
					<div class="search-right">
						<a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">

								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Saerch your Keyword" name="search"
										required="required" autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search"
											aria-hidden="true"></span></button>
								</form>

							</div>
							<a class="close" href="#close">×</a>
						</div>
						<!-- /search popup -->
					</div>
					<!--//search-right-->
					<div class="call-support">
						<p>Call us for any question</p>
						<h5>121-345-64369</h5>
					</div>
				</div>
			</div>
		</nav>
		<!--//nav-->
	</header>
	<!-- //w3l-header -->
	<!-- /breadcrumbs -->
	<nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">About</span>
		</div>
	</nav>
	
<!-- feature1 -->

<!-- //feature1 -->

	<!-- //content-6-section -->
	<!--/team-sec-->
	
	<!--//team-sec-->
		<!-- grids -->
		<section class="grids-1 py-5"><center>
		<h3 class="hny-title mt-4">Welcome to Our Blood Bank</h3></center>
				
			<div class="grids py-lg-5">
				<div class="container">
					
					<h6 class="sub-title">We care your life</h6>
					<h5 class="hny-title">Here you can see the Blood donars details
					</h5>
					
					<div class="row text-center mt-lg-5 mt-4">
					<?php
										 require("connection.php");
										 $res=$con->query("select * from `insert` ");

										 $count=$res->num_rows;
										 ?>
										 <?php
											if($count>0)
											{
												$i=1;
												while($row=$res->fetch_assoc())
												{
								
													?> 
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="column">
								
								
								
													<h3><?php echo $row["Donar_Name"];?></h3>
							                    
												
												
												<p><?php echo $row["Bloodgroupname"];?></p>
												
								                
					                            <a href="admin/readmore.php?dess=<?php echo $row["id"];?>" class="btn btn-primary">Contact</a>
												
					
					
					</div>
					
				</div>
				<?php
												}
											}
											?>
				
				
							</div>
						</div>
								
						
						
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="w3l-feature-1">
	<div class="feature-1sec py-5">
		<div class="container py-lg-5">
			<div class="feature-1-content">
				<img src="assets/images/blood2.jpg" class="img-fluid" alt="" />
			
				<p class="mt-2">Here we declare blood donars details.</p>

				
			</div>
		</div>
	</div>
</section>
		<!-- //grids -->
	<!-- footer-66 -->
	<footer class="w3l-footer-66">
		<!-- footer -->
		<div class="footer-66-info">
			
		<div class="cpy-right py-3">
			
	 <p>© 2023 onlinebloodbank. All Rights Reserved | Design by  <a href="http://onlinebloodbank/ target="_blank">bloodbank team</a> </p>
</div>	
	
		<!-- move top -->
		<button onclick="topFunction()" id="movetop" title="Go to top">
			<span class="fa fa-level-up"></span>
		</button>
		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function () {
				scrollFunction()
			};

			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					document.getElementById("movetop").style.display = "block";
				} else {
					document.getElementById("movetop").style.display = "none";
				}
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
		</script>
		<!-- /move top -->
	</footer>
	<!--//footer-66 -->
</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

<!--//-->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!--/scroll-down-JS-->
<!-- stats -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<!-- //script -->

<script src="assets/js/bootstrap.min.js"></script>