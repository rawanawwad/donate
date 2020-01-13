<?php
include ('includes/connection.php');

// if(isset($_POST['addcategory'])){
// 	$name   =$_POST['name'];
//     $phone = $_POST['phone'];
//       $address = $_POST['address'];

   


    
// $query="insert into persontakedonation (name,phone,address) values ('$name','$phone','$address')";
    
//     mysqli_query($conn,$query);
//     header("location:managetakedonation.php");
//     exit;

// }
include ('includes/admin_header.php');
?>
    <!-- MAIN CONTENT-->
    <!-- <div class="content-wrapper">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">View Take Donation</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"></h3>
                                        </div> -->
                                      <!--   <hr> -->
                                        <!-- <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1"> Name</label>
                                                <input id="cc-pament" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Phone</label>
                                                <input id="cc-pament" name="phone" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Address</label>
                                                <input id="cc-pament" name="address" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                             
                                           </div>
                                            <div>
                                                <button id="payment-button" type="submit" name="addcategory" class="btn btn-lg btn-info btn-block">ADD Person
                                                   
                                                    
                                                    
                                                </button>
                                            </div>
                                        </form> -->
                                    </div>
                                </div>
                            </div>

<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">View Peson</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Adreess</th>

                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	$query = "SELECT * FROM persontakedonation";
                                        	$result = mysqli_query($conn,$query);
                                        	while ($row = mysqli_fetch_assoc($result))
                                        	{
                                        		echo "<tr>";
                                        		echo "<td>{$row['id']}</td>";
                                        		echo "<td>{$row['name']}</td>";
                                                echo "<td>{$row['phone']}</td>";
                                                  echo "<td>{$row['address']}</td>";
                                                
                                        		
                                        		
                                                
                                        		echo "<tr>";
                                        	}
                                        	
                                        	?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        
                    </div>
                </div>


 <?php
include ('includes/admin_footer.php');
?>