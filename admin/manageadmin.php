
<?php
include('includes/admin_header.php');
if(isset($_POST['signin'])){
  $email    =$_POST['adminemail'];
    $password =$_POST['adminpassword'];
  $fullname =$_POST['adminfullname'];
  
$query="insert into admin (admin_email,admin_password,admin_fullname) values ('$email','$password','$fullname')";
    
    mysqli_query($conn,$query);
}
?>

            <!-- /.card -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="row-fluid">
      <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Manage Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input name="adminemail" type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input name="adminpassword" type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                      <input name="adminfullname" type="text" class="form-control" id="inputPassword3" placeholder="FullName">
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label  class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div> -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button name="signin" type="submit" class="btn btn-info">Sign in</button>
                  
                </div>
                <!-- /.card-footer -->
              </form>
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Create Admin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Email</th>
                      <th>Name</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                                          $query = "SELECT * FROM admin";
                                          $result = mysqli_query($conn,$query);
                                          while ($row = mysqli_fetch_assoc($result))
                                          {
                                            echo "<tr>";
                                            echo "<td>{$row['admin_id']}</td>";
                                            echo "<td>{$row['admin_email']}</td>";
                                            echo "<td>{$row['admin_fullname']}</td>";
                                            echo "<td><a href ='edit_admin.php?admin_id={$row['admin_id']}' class ='btn btn-warning'>EDIT</a></td>";

                                            echo "<td><a href ='delete_admin.php?admin_id={$row['admin_id']}' class ='btn btn-danger'>DELETE</a></td>";
                                            echo "<tr>";
                                          }
                                          
                                          ?>
                    
                      
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
          </div>
        </div>

    <!-- Content Header (Page header) -->
    
  <?php
  include('includes/admin_footer.php');
  ?>
  