<?php
include('includes/connection.php');
// if(isset($_POST['update'])){
//   $email    =$_POST['admin_email'];
//     $password =$_POST['admin_password'];
//   $fullname =$_POST['admin_fullname'];
  
// $query="UPDATE admin SET admin_email='$email',admin_password='$password',admin_fullname='$fullname' WHERE admin_id={$_GET['admin_id']}";

    
//     mysqli_query($conn,$query);
//     //header("location:manageadmin.php");
// }
// $query = "select * from user where user_id = {$_GET['user_id']}";
// $result = mysqli_query($conn,$query);
// $row = mysqli_fetch_assoc($result);



include ('includes/admin_header.php');
?>
<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">View Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      
                      <th>Address</th>
                      <th>Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                                          $query = "SELECT * FROM user";
                                          $result = mysqli_query($conn,$query);
                                          while ($row = mysqli_fetch_assoc($result))
                                          {
                                            echo "<tr>";
                                            echo "<td>{$row['user_name']}</td>";
                                            echo "<td>{$row['user_email']}</td>";
                                            
                                            echo "<td>{$row['address']}</td>";
                                            echo "<td>{$row['phone']}</td>";
                                           
                                            echo "<tr>";
                                          }
                                          
                                          ?>
                    
                      
                    
                    
                      
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
