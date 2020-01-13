<?php
include('includes/connection.php');
if(isset($_POST['update'])){
	$email    =$_POST['admin_email'];
    $password =$_POST['admin_password'];
	$fullname =$_POST['admin_fullname'];
	
$query="UPDATE admin SET admin_email='$email',admin_password='$password',admin_fullname='$fullname' WHERE admin_id={$_GET['admin_id']}";

    
    mysqli_query($conn,$query);
    header("location:manageadmin.php");
}
$query = "select * from admin where admin_id = {$_GET['admin_id']}";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

include ('includes/admin_header.php');
?>
    <!-- MAIN CONTENT-->
    <div class="content-wrapper">
            <div class="main-content">
                <div class="row-fluid">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Update Admin</div>
                                    <div class="card-body">
                                        <!-- <div class="card-title">
                                            <h3 class="text-center title-2">Update Admin</h3>
                                        </div> -->
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Admin Email</label>
                                                <input id="cc-pament" name="admin_email" type="text" class="form-control" aria-required="true" aria-invalid="false" value ="<?php echo $row['admin_email'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Admin Password</label>
                                                <input id="cc-pament" name="admin_password" type="Password" class="form-control" aria-required="true" aria-invalid="false" value ="<?php echo $row['admin_password'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Admin Full Name</label>
                                                <input id="cc-pament" name="admin_fullname" type="text" class="form-control" aria-required="true" aria-invalid="false" value ="<?php echo $row['admin_fullname'] ?>">
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" name="update" class="btn btn-lg btn-info btn-block">UPDATE
                                               </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
<!-- <div class="container-fluid">
                    <div class="row m-t-30">
                            <div class="col-md-12">
                           </div>
                        </div>
                   </div> -->
                </div>
            </div>
        </div>
</div>
</div>
</div>
    


 <?php
include ('includes/admin_footer.php');
?>