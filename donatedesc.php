
<?php
include('includepublic/public_header.php');

session_start();

// $query2 = "select * from descriptiondonate where cat_id = {$_GET['cat_id']}";
// /*print_r($query2);
// die;*/
// $result = mysqli_query($conn, $query2);
//     while($row = mysqli_fetch_assoc($result)){
//     	echo "<form method='post'>";
//     	echo "<img src=admin/upload/{$row['desc_img']} height='130' width='150'>"; 
//     	 echo "<h2> {$row['description']} </h2>";
//     	echo "<input type='hidden' name='id' value='{$row['id']}'>";
//     	 echo "<button class='head-btn btn text-uppercase' name='btn' >CHOOSEE</button>";
// 		if(isset($_POST['btn'])){

// 		$qu="INSERT INTO charity (user_id,id) VALUES ('{$_SESSION['user_id']}','{$_POST['id']}')";
// 		mysqli_query($conn,$qu);
// 		$query = "DELETE FROM descriptiondonate WHERE id={$row['id']}";
// 		mysqli_query($conn,$query);
		
// 		}
//     	     	 echo "</form>";
//     	  	 echo "<br> ";
//     	}

    	
    	?>

				<!-- <div class="container">
					<div class="row d-flex justify-content-end">
						
					</div>
					
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6 contact-left">
							
						</div>
						<div class="col-lg-6 contact-right">
							<form method="post" action="#" enctype="multipart/form-data">
								 	<div class="row">
</div>
										
										
									</div>
					  		</form>

						</div>
					</div>
				</div> -->
			<!-- </section> -->
<?php
   

//     if(isset($_POST['submit'])){
//     	$cat_id= $_POST['cat_id'];
//     	$description = $_POST['description'];
//         $image = $_FILES['imagedesc']['name'];
//         $tmp_name = $_FILES['imagedesc']['tmp_name'];
//         $path = "admin/upload/";
    
//         move_uploaded_file($tmp_name, $path.$image);
//         $query="insert into descriptiondonate(cat_id,description , desc_img) values('$cat_id','$description','$image')";
//         mysqli_query($conn,$query); 

        	
// }
    
   
    ?>
    
<!-- <section class="project-area section-gap" id="project">
				<div class="container">
				
					<div class="row"> -->
						<?php
// echo "<div class='col-lg-4 col-md-4 project-wrap'>";
// echo "<div class='single-project'>";
// echo "<div class='content'>
								    
// 								      <div class='content-overlay'></div>
// 								  		 <img class='content-image img-fluid d-block mx-auto' src='admin/upload/{$row['desc_img']}' >
								      	 
								      	 
								   
// 								 </div>
// 							</div>
// 							<div class='details'>
// 								<h2>{$row['description']} </h2>
// 						  		<button class='head-btn btn text-uppercase' name='btn' >CHOOSEE</button>
// 							</div>

// 						</div> ";
// 						echo "<input type='hidden' name='id' value='{$row['id']}'>";
// 						if(isset($_POST['btn'])){
// $qu="INSERT INTO charity (user_id,id) VALUES ('{$_SESSION['user_id']}','{$_POST['id']}')";
// 		mysqli_query($conn,$qu);
// 		$query = "DELETE FROM descriptiondonate WHERE id={$row['id']}";
// 		mysqli_query($conn,$query);}
		
						?>
												
						
<!-- 
					</div>
				</div>
			</section>
 -->						<section class="project-area section-gap" id="project">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Waiting for Help</h1>
							<h1>
								HELP OTHERS
							</h1>
						</div>
					</div>
					<div class="row" style="text-align: center;">
						<?php
	// 					if(isset($_POST['btn'])){
 // $qu="INSERT INTO charity (user_id,id) VALUES ('{$_SESSION['user_id']}','{$_POST['id']}')";
	// 	mysqli_query($conn,$qu);
	// 	$query = "DELETE FROM descriptiondonate WHERE id={$row['id']}";
	// 	mysqli_query($conn,$query);
	// }
						 
				$query2 = "select * from descriptiondonate where cat_id = {$_GET['cat_id']}";
			    $result =mysqli_query($conn,$query2);
                while($row = mysqli_fetch_assoc($result)){
                	if(isset($_POST['btn'])){
 $qu="INSERT INTO charity (user_id,id) VALUES ('{$_SESSION['user_id']}','{$_POST['id']}')";
		mysqli_query($conn,$qu);
	
		 $query = "DELETE  FROM descriptiondonate WHERE id={$_POST['id']}";
		
		mysqli_query($conn,$query);
		// echo '<script>window.top.location="desc.php"</script>';
		 echo '<script>window.top.location="form.php"</script>';

	} 
						echo "<div class='col-lg-4 col-md-4 project-wrap'>
							   <div class='single-project'>
								 <div class='content'>
								    <a href='#' target='_blank'>
								      <div class=''></div>";
								      	echo "<form method='post'>";
								      echo "<img text-align='center'  width= '200px' height = '200px' src='admin/upload/{$row['desc_img']}'


								      alt=''>";
								      echo "<div class='details'>
								<a href='#'> </a>";
								      echo "
								      		<h2> {$row['description']} </h2>

								      		<input type='hidden' name='id' value='{$row['id']}'>
								      		<button  type='submit' class='head-btn btn text-uppercase' name='btn'>CHOOSE
								      		
								      	</button>
								      

								      	";


// if(isset($_POST['btn'])){
//  $qu='INSERT INTO charity (user_id,id) VALUES ('{$_SESSION['user_id']}','{$_POST['id']}')';
// 		mysqli_query($conn,$qu);
	
// 		$query = 'DELETE FROM descriptiondonate WHERE id={$row['id']}';
// 		mysqli_query($conn,$query);
// 	}
		echo "</form>";
 

		//echo "<br> ";
		
								      	echo " </a>
								      	
								 </div>
							</div> ";

							echo "</div> </div>";
							
							;
						};

// 						if(isset($_POST['btn'])){
// $qu="INSERT INTO charity (user_id,id) VALUES ('{$_SESSION['user_id']}','{$_POST['id']}')";
// 		mysqli_query($conn,$qu);
// 		$query = "DELETE FROM descriptiondonate WHERE id={$row['id']}";
// 		mysqli_query($conn,$query);}
//  include('includepublic/public_footer.php');
						?>

					</div>
				</div>
			</section>
			<?php

	// 	if(isset($_POST['btn'])){
 // $qu="INSERT INTO charity (user_id,id) VALUES ('{$_SESSION['user_id']}','{$_POST['id']}')";
	// 	mysqli_query($conn,$qu);
	// 	$query = "DELETE FROM descriptiondonate WHERE id={$row['id']}";
	// 	mysqli_query($conn,$query);
	// }
	// echo "</form>";

		?>
		<?php
		
		include('includepublic/public_footer.php');
		?>

		
	