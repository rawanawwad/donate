
<?php
include ('includes/connection.php');

// if(isset($_POST['submit'])){
//     $cat_name        =$_POST['cat_name'];
    
    
//     $cat_img = $_FILES['cat_img']['name'];
//     $tmp_name = $_FILES['cat_img']['tmp_name'];
//     $path = "upload/";    

//     move_uploaded_file($tmp_name, $path.$cat_img);


    
// $query="insert into cast (product_name,product_price,product_desc,product_images) values ('$productname','$productprice','$productdescription','$productImage')";



//     mysqli_query($conn,$query);
    

//     /*print_r($query);
//     die;*/
//     header("location:managecategory.php");
    
// }
include ('includes/admin_header.php');
?>
    <!-- MAIN CONTENT-->
     <div class="content-wrapper">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            
<div class="container-fluid">
                    <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                
                                                <th>category name</th>
                                                
                                                
                                                <th>images</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $query = "SELECT * FROM category WHERE cat_id={$_GET['cat_id']}";
                                            $result = mysqli_query($conn,$query);
                                            while ($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<tr>";
                                                
                                                
                                               echo "<td>{$row['cat_name']}</td>";
                                                
                                                 
                                                 echo "<td><img src='upload/{$row['cat_img']}'/></td>";
                                                
                                                
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
            </div>
        </div>
</div>
</div>
    </div>


 <?php
include ('includes/admin_footer.php');
?>