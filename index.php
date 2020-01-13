
<!-- //include('includepublic/public_header.php'); -->
<?php 
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Charity</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">=
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="index.php"><img src="img/logo.png" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="#home">Home</a>
									<a href="#project">Donations</a>
									<a href="#about">About</a>
									<!-- <a href="#donate">Donate</a> -->
									<a href="logout.php">Logout</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
							<!-- <div>
                             <a href="logout.php">Logout</a>
                             </div> -->
						</div>
					</div>
				</div>
			</header>
			<!-- End Header Area -->

<?php
include('includepublic/connection.php'); 
session_start();

if (isset($_POST['donatenow'])){
    
    if (isset($_SESSION['user_id'])){
    	echo '<script>window.top.location="test.php"</script>';
        
    }
    else{
    	echo '<script>window.top.location="loginorregister.php"</script>';
        
    }

}



?>
			<!-- start banner Area -->
			<form action="" method="post">
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
						<div class="row fullscreen align-items-center justify-content-start" style="height: 915px;">
							<div class="banner-content col-lg-9 col-md-12">
								<h1>
									Your Donation <br>
									is Others Inspiration
								</h1>
						<!-- 		<a href="loginorregister.php" class="head-btn btn text-uppercase" name="donatenow">
                    donate now</a> -->
								<!-- <button class="head-btn btn text-uppercase" name="donatenow">donate now </button> -->
								<!-- <a name="donatenow" href="loginorregister" class="head-btn btn text-uppercase">Donate Now</a> -->
							</div>
						</div>
				</div>
			</section>
			</form>
			<!-- End banner Area -->

			<!-- Start callto Area -->
			<form method="post">
				<section class="callto-area relative">
					<div class="container">
						<div class="row d-flex callto-wrap justify-content-between pt-40 pb-40">
						<h3 class="text-white">Please Help them and Donate now</h3>
						<button name="donatenow" class="head-btn head-btn2 btn text-uppercase">Donate Now</button>
							<!-- <button class="head-btn head-btn2 btn text-uppercase" name="donatenow"> donate now </button> -->
						</div>
					</div>
				</section>
				</form>
			<!-- End callto Area -->


			<!-- Start project Area -->
			<section class="project-area section-gap" id="project">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Waiting for Help</h1>
							<h1>
								HELP EACH OTHERS
							</h1>
						</div>

					</div>
					<div class="row" style="text-align: center;">
						<?php 
						$query = "select * from category";
                $result =mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($result)){
						echo "<div class='col-lg-4 col-md-4 project-wrap'>
							   <div class='single-project'>
								 <div class='content'>
								    <a href='#' target='_blank'>
								      <div class=''></div>";
								      
								      echo "<img text-align='center'  width= '200px' height = '200px' src='admin/upload/{$row['cat_img']}'


								      alt=''>";
								      echo "<div class='content-details fadeIn-bottom'>
								      		<a href='donatedesc.php?cat_id={$row['cat_id']}' class='head-btn btn text-uppercase'>SEE DONATIONS</a>
								      	</div>";
								      	echo " </a>
								      	
								 </div>
							</div> ";
							echo "<h2> {$row['cat_name']} </h2>";
							echo "<div class='details'>
								<a href='#'> </a>";
						  		
echo "<p> {$row['cat_desc']} </p>";
							echo "</div> </div>";
							
							;
						}

						?>
						
					

					</div>
				</div>
			</section>
			<!-- End project Area -->

			<!-- Start about Area -->
			<form method="post" action="#">
			<section class="about-area" id="about">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 col-md-12 about-left no-padding">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 col-md-12 about-right">
							<h1>A very Lovely Welcome <br>
							to donation</h1>
							<p>
								Where there is charity and wisdom, there is neither fear nor ignorance.  
								
							</p>
							<a href="learnmore.php" name="learnmore" class="primary-btn mt-20 text-uppercase ">learn more 
								<?php 
							// if(isset($_POST['learnmore'])){
							// 	<a href="learnmore.php"> </a>
							// }
							?>
							<!-- <span class="lnr lnr-arrow-right"></span> --></a>
						</div>
					</div>
				</div>
			</section>
			</form>
			<!-- End about Area -->

			<!--  -->
			<!-- End volunteer Area -->


			<!-- Start donate Area -->
			<!-- <section class="donate-area relative section-gap" id="donate">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-end">
						<div class="col-lg-6 col-sm-12 pb-80 header-text">
							<h1>Donate Now

							</h1>
							<p>
								   It's not how much we give but how much love we put into giving.
							</p>
						</div>
					</div>
					<!-- <div class="wpb_wrapper" >
					<h1 style = "text-align: left; visibility: visible; color: white; animation-name: fadeInUp;" class = "vc_custom_heading edo edo-header wow fadeInUp" >Make your contribution, make a change </h1>
					</div> -->
					<!-- <div class="row d-flex justify-content-center">
						<div class="col-lg-6 contact-left">
							<div class="single-info">
								<h4>Divided Evenly</h4>

								<p>
									Make your contribution, make a change
								</p>
							</div>
							<div class="single-info">
								<h4>Transperancy All the Way</h4>
								<p>
									Make your contribution, make a change
								</p>
							</div>
							<div class="single-info">
								<h4>Trustworthy</h4>
								<p>
									Make your contribution, make a change
								</p>
							</div>
						</div>
						<div class="col-lg-6 contact-right">
							<form class="booking-form" id="myForm" action="donate.php">
								 	<div class="row">
								 		<div class="col-lg-12 d-flex flex-column">
							 				<select name="type" class="app-select form-control" required>
												<option data-display="Project you want to donate">Project you want to donate</option> --> -->
												<?php 
										// 		$query = "select * from category";
          //       								$result =mysqli_query($conn,$query);
          //       								while($row = mysqli_fetch_assoc($result)){
										// echo "<option> {$row['cat_name']} </option>";
										// 	}
												?>
												
										<!-- 	</select>
								 		</div>
							 			<div class="col-lg-6 d-flex flex-column">
											<input name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="form-control mt-20" required="" type="text" required>
										</div>
										<div class="col-lg-6 d-flex flex-column">
											<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="form-control mt-20" required="" type="email">
										</div>
										<div class="col-lg-12 d-flex flex-column">
											<input name="amound" placeholder="Donation amount (USD)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Donation amount'" class="form-control mt-20" required="" type="text">

											<input name="number" placeholder="Number Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Number Phone'" class="form-control mt-20" required="" type="text">
										


											<textarea class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
										</div>
										<form method="post" action=""> 
										<div class="col-lg-12 d-flex justify-content-end send-btn">
											<button name="donate" class="submit-btn primary-btn mt-20 text-uppercase ">donate  -->
												<?php
												// if (isset($_POST['donate'])){

												// }
												 ?>
												
			<!-- 								 <span class="lnr lnr-arrow-right"></span></button>
										</div>
										</form>
										<div class="alert-msg"></div>
									</div>
					  		</form>
<!-- 					  		<p class="payment-method">
					  			We Accept :   <img src="img/payment.png" alt="">
					  		</p> -->
						<!-- </div>
					</div>
				</div>
			</section> --> -->
			<!-- End donate Area -->
			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row d-flex flex-column justify-content-center">
						<ul class="footer-menu">
							<li><a href="#home">Home</a></li>
							<li><a href="#project">Donations</a></li>
							<li><a href="#about">About</a></li>
							<!-- <li><a href="#donate">Donate</a></li> -->
						</ul>
						<!-- <div class="footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div> -->
						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>

			<?php
//include('includepublic/public_footer.php');
?>


			