<?php
include ('includes/connection.php');
if(isset($_POST['update'])){
    
	$categoryname  =$_POST['cat_name'];
    $categorydesc = $_POST['cat_desc'];
    $categoryimage = $_FILES['cat_img']['name'];
    $tmp_name = $_FILES['cat_img']['tmp_name'];
    $path = "upload/";    

    move_uploaded_file($tmp_name, $path.$categoryimage);
	
	
$query="UPDATE category SET cat_name='$categoryname',cat_desc = '$categorydesc',cat_img='$categoryimage' WHERE cat_id={$_GET['cat_id']}";

    
    mysqli_query($conn,$query);
    header("location:managecategory.php");
}
$query = "select * from category where cat_id = {$_GET['cat_id']}";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

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
                                    <div class="card-header">Update category</div>
                                    <div class="card-body">
                                        <!-- <div class="card-title">
                                            <h3 class="text-center title-2"></h3>
                                        </div> -->
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data" >
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category Name</label>
                                                <input id="cc-pament" name="cat_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value ="<?php echo $row['cat_name'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category Description</label>
                                                <input id="cc-pament" name="cat_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" value ="<?php echo $row['cat_desc'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category Image</label>
                                                <input id="cc-pament" name="cat_img" type="file" class="form-control" aria-required="true" aria-invalid="false" value ="<?php echo $row['cat_img'] ?>">
                                            </div>
                                            
                                          <div>
                                                <button id="payment-button" type="submit" name="update" class="btn btn-lg btn-info btn-block">UPDATE
                                                   
                                                    
                                                    
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
<div class="container-fluid">
                    <div class="row m-t-30">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
    </div>


 <?php
include ('includes/admin_footer.php');
?>