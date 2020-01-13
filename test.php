<?php
include('includepublic/public_header.php');
?>
			<section class="donate-area relative section-gap" id="donate">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-end">
						<div class="col-lg-6 col-sm-12 pb-80 header-text">
							<h1>Donate Now</h1>
							<p>
								It's not how much we give but how much love we put into giving.
							</p>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6 contact-left">
							<div class="single-info">
								<h4>Please Help The Poor in Anything You Don't Want </h4>
								<p>
									With Your Charity <br> Their Heart Rejoicies.
								</p>
							</div>
							<div class="single-info">
								<h4>Waiting for Help
</h4>
								<p>
									Where there is charity and wisdom, there is neither fear nor ignorance.


								</p>
							</div>
							<div class="single-info">
								<h4>HELP EACH OTHERS</h4>
								<p>
									We come to you and receive your donations <br>and give them to the poor and needy.
								</p>
							</div>
						</div>
						<div class="col-lg-6 contact-right">
							<form method="post" action="#" enctype="multipart/form-data">
								 	<div class="row">
								 		 <div class="col-lg-12 d-flex flex-column">
							 				<select name="cat_id" class="app-select form-control" required>
												<option data-display="Project you want to donate">Project you want to donate</option>
												<?php 
												$query1 = "select * from category";
													
                								$result1 =mysqli_query($conn,$query1);
                								while($row = mysqli_fetch_assoc($result1)){
										echo "<option value={$row['cat_id']}>{$row['cat_name']} </option>";
											}

												?>
												
											</select>
								 		</div>

										<div class="col-lg-12 d-flex flex-column">
											<input  name="imagedesc" type="file" width="200px" height="200px">
										<textarea rows="4" cols="50" name="description" class="form-control" placeholder = "Write Your Description To Your Donation Please"></textarea>  
											<!-- href="thankyou.php"  -->
										<button class="head-btn head-btn2 btn text-uppercase" name="submit">DONATE NOW</button>
</div>
										
										
									</div>
					  		</form>

						</div>
					</div>
				</div>
			</section>



					<!-- <section class="donate-area relative section-gap" id="donate">
				<div class="overlay overlay-bg"></div>
				<div class="row d-flex justify-content-end">
						<div class="col-lg-6 col-sm-12 pb-80 header-text">
							<h1>Donate Now

							</h1>
							<p>
								   It's not how much we give but how much love we put into giving.
							</p>
						</div>

					</div>
				<div class="container">
					<div class="row d-flex justify-content-end"> -->
						<!-- <div class="col-md-8 pb-80 header-text">
							<p>Waiting for Help</p>
							<p>
								HELP MAKE DIFFERERENCE
							</p>
						</div> -->
					<!-- </div>
					
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6 contact-left">
							
						</div>
						<div class="col-lg-6 contact-right">
					<form method="post" action="#" enctype="multipart/form-data">
					<div class="row">
						 <div class="col-lg-12 d-flex flex-column">
							 				<select name="cat_id" class="app-select form-control" required>
												<option data-display="Project you want to donate">Project you want to donate</option> -->
												<?php 
										// 		$query1 = "select * from category";
													
          //       								$result1 =mysqli_query($conn,$query1);
          //       								while($row = mysqli_fetch_assoc($result1)){
										// echo "<option value={$row['cat_id']}>{$row['cat_name']} </option>";
										// 	}

												?>
												
											<!-- </select>
								 		</div>

										<div class="col-lg-12 d-flex flex-column">
											<input  name="imagedesc" type="file" width="200px" height="200px">
										<textarea rows="4" cols="50" name="description" class="form-control" placeholder = "Write Your Description To Your Donation Please"></textarea>   -->
											<!-- href="thankyou.php"  -->
										<!-- <button class="head-btn head-btn2 btn text-uppercase" name="submit">DONATE NOW</button>
</div>
										
										
									</div>
					  		</form>

						</div>
					</div>
				</div>
			</section>

 -->

										<!-- 	
										</div>
										</div>
				</form>
				</div>
			</section> -->
						<?php 
						if(isset($_POST['submit'])){
    	$cat_id= $_POST['cat_id'];
    	$description = $_POST['description'];
        $image = $_FILES['imagedesc']['name'];
        $tmp_name = $_FILES['imagedesc']['tmp_name'];
        $path = "admin/upload/";
    
        move_uploaded_file($tmp_name, $path.$image);
        $query="insert into descriptiondonate(cat_id,description , desc_img) values('$cat_id','$description','$image')";
        mysqli_query($conn,$query); 
        echo '<script>window.top.location="thankyou.php"</script>';
        	//header("location:thankyou.php");
}

// 						$query = "select * from category";
//                 $result =mysqli_query($conn,$query);
//                 while($row = mysqli_fetch_assoc($result)){
// 						echo "<div class='col-lg-4 col-md-4 project-wrap'>
// 							   <div class='single-project'>
// 								 <div class='content'>
// 								    <a href='#' target='_blank'>
// 								      <div class='content-overlay'></div>";
								      
// 								      echo "<img  width= '300px' height = '300px' src='admin/upload/{$row['cat_img']}'


// 								      alt=''>";
// 								      echo "<div class='content-details fadeIn-bottom'>
// 								      		<a href='test2.php?cat_id={$row['cat_id']}'  class='head-btn btn text-uppercase'>DESCRIPTION</a>
// 								      	</div>";
// 								      	echo " </a>
								      	
// 								 </div>
// 							</div> ";
// 							echo "<h2> {$row['cat_name']} </h2>";
// 							echo "<div class='details'>
// 								<a href='#'> </a>";
// 						  		//echo "<i class='fas fa-utensils'></i>";
// echo "<p> {$row['cat_desc']} </p>";
// 							echo "</div> </div>";
							
// 							;
// 						}

						?>
						
					

					<!-- </div>
				</form>
				</div>
			</section> -->
<?php
include('includepublic/public_footer.php');
?>

