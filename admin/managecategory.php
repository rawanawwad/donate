<?php
include ('includes/connection.php');

if(isset($_POST['addcategory'])){
	$categoryName   =$_POST['cat_name'];
    $categoryDesc = $_POST['cat_desc'];
    $CategoryImage = $_FILES['cat_img']['name'];
    $tmp_name = $_FILES['cat_img']['tmp_name'];
    $path = "upload/";    

    move_uploaded_file($tmp_name, $path.$CategoryImage);


    
$query="insert into category (cat_name,cat_desc,cat_img) values ('$categoryName','$categoryDesc','$CategoryImage')";
    
    mysqli_query($conn,$query);
    header("location:managecategory.php");
    exit;

}
include ('includes/admin_header.php');
?>
    <!-- MAIN CONTENT-->
    <div class="content-wrapper">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Create Category</div>
                                    <div class="card-body">
                                        <!-- <div class="card-title">
                                            <h3 class="text-center title-2"></h3>
                                        </div> -->
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category Name</label>
                                                <input id="cc-pament" name="cat_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category Description</label>
                                                <input id="cc-pament" name="cat_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                             <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category Image</label>
                                                <input id="cc-pament" name="cat_img" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                           </div>
                                            <div>
                                                <button id="payment-button" type="submit" name="addcategory" class="btn btn-lg btn-info btn-block">ADD CATEGORY
                                                   
                                                    
                                                    
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

<div class="container-fluid">
                    <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>categoryName</th>
                                                <th>categorydesc</th>
                                                <th>CategoryImage</th>

                                                <th>edit</th>
                                                <th>delete</th>
                                                 <th>view category</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	$query = "SELECT * FROM category";
                                        	$result = mysqli_query($conn,$query);
                                        	while ($row = mysqli_fetch_assoc($result))
                                        	{
                                        		echo "<tr>";
                                        		echo "<td>{$row['cat_id']}</td>";
                                        		echo "<td>{$row['cat_name']}</td>";
                                                echo "<td>{$row['cat_desc']}</td>";
                                                echo "<td><img src='upload/{$row['cat_img']}' width='150px' height='150px'/></td>";
                                        		
                                        		echo "<td><a href ='edit_category.php?cat_id={$row['cat_id']}' class ='btn btn-warning'>EDIT</a></td>";

                                        		echo "<td><a href ='delete_category.php?cat_id={$row['cat_id']}' class ='btn btn-danger'>DELETE</a></td>";
                                                echo "<td><a href ='viewcategory.php?cat_id={$row['cat_id']}' class ='btn btn-primary'>VIEW</a></td>";
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