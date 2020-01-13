<?php
include ('includepublic/public_header.php');
//  if(!isset($_SESSION['user_id'])){
//     echo "<script> window.top.location='loginorregister.php';</script>";
//     exit;

// }
// $query3="SELECT * FROM user WHERE user_id={$_SESSION['user_id']}";
// $result= mysqli_query($conn,$query3);
// $row= mysqli_fetch_assoc($result);
session_start();

                                            if(isset($_POST['regist'])){
                                            
                                            $user_name = $_POST['user_name'];
                                            $user_email = $_POST['user_email'];
                                            $user_password = $_POST['user_password'];
                                            $phone = $_POST['phone'];
                                            $address = $_POST['address'];

                                            $reg_query = "INSERT INTO user (user_name, user_email, user_password, phone ,address) VALUES('$user_name', '$user_email', '$user_password', '$phone','$address')";
    //                                         echo "$reg_query";
    // die;
                                            mysqli_query($conn,$reg_query); 
                                            $_SESSION['user_id'] = $reg['user_id'];
                                            echo "<script>window.top.location='test.php'</script>"; 
                                        }



                                            
                                if (isset($_POST['login'])){
                                    $user_email    =$_POST['user_email'];
                                    $user_password =$_POST['user_password'];
                                    
                                     if(!empty($user_email) && !empty($user_password)){
    $query = "select * from user where user_email = '$user_email' AND user_password='$user_password'";
    // echo "$query";
    // die;

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if($row['user_id']){
        $_SESSION ['user_id']= $row ['user_id'];
        echo '<script>window.top.location="test.php"</script>'; 
        //header ("location:checkout.php");
        }
        else{
           $error=  "please register to continue";

        }
    }
  
                                }
                                //include('admin/includes/public_header.php');
                                    ?>




    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2 style="margin-top: 30px;">LOGIN OR REGISTER</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <form method="post">
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>REGISTER</h5>
                        </div>

                        <form action="#" method="post">
                            
                            <div class="row">
                                
                                
                                
                                
                            
                            <div class="col-12 mb-4">
                                    <label for="phone_number">Name <span>*</span></label>
                                    <input name="user_name" type="text" class="form-control" id="phone_number"  value="">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address">User_Email <span>*</span></label>
                                    <input name="user_email" type="email" class="form-control" id="email_address" value="">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address">User_Password <span>*</span></label>
                                    <input name="user_password" type="password" class="form-control" id="email_address" value="">
                                </div>
                                    <div class="col-12 mb-3">
                                    <label for="phone_number">User_Phone <span>*</span></label>
                                    <input name="phone" type="number" class="form-control" id="phone_number" min="0" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Adreess <span>*</span></label>
                                    <input name="address" type="text" class="form-control" id="phone_number"  value="">
                                </div>
                                
                                
                                
                                

                                <button style="margin-left: 20px;" type="submit" name="regist" class="au-btn au-btn--block btn-lg btn-primary">Regist
                                   
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <div class="cart-page-heading mb-30">
                            <h5 style="margin-top: 30px;">LOG IN</h5>
                         
                        
                        <form action="#" method="post">
                            <div class="row">
                             <?php
                             if(isset($error)) {
                                echo "<div class ='alert alert-danger'>$error</div>";
                            }
                            ?>
                               <div class="col-12 mb-4">
                                    <label for="email_address">Email Address <span>*</span></label>
                                    <input type="email" name="user_email" class="form-control" id="email_address" value="">
                                </div>



                               <div class="col-12 mb-4">
                                    <label for="password">Password <span>*</span></label>
                                    <input type="password" name="user_password" class="form-control" id="password" value="">
                                   

                                </div>

                                <button style="margin-left: 20px;" type="submit" name="login" class="au-btn au-btn--block btn-lg btn-primary">Log In</button>
                            </div>
                        </form>
                  </div>
                   
                   </div>  
                </div>
</div>
            </div>

        </div>

    </div>
</form>

   
    <?php
    include ('includepublic/public_footer.php');
    ?>