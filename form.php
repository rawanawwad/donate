
<?php
include('includepublic/public_header.php');
// $query2 = "select * from descriptiondonate where cat_id = {$_GET['cat_id']}";
//           $result =mysqli_query($conn,$query2);
//                 while($row = mysqli_fetch_assoc($result)){
//  echo "<h2> {$row['description']} </h2>";}
    if(isset($_POST['button'])){

    $name =$_POST['name'];
  $phone =$_POST['phone'];
  $address=$_POST['address'];

 $query="INSERT INTO persontakedonation (name,phone,address) VALUES ('$name','$phone','$address')";
  mysqli_query($conn,$query);
  echo '<script>window.top.location="index.php"</script>';
  }

?>
    <section class="donate-area relative section-gap" id="donate">
        <div class="overlay overlay-bg"></div>
        <div class="container">
          <div class="row d-flex justify-content-end">
            <div class="col-lg-6 col-sm-12 pb-80 header-text">
              <h1>Enter Your<br>Information Please</h1>
              <!-- <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore  et dolore magna aliqua.
              </p> -->
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 contact-left">
              <div class="single-info">
                <?php 
                
          //       $query2 = "select description from descriptiondonate  ";
          // $result =mysqli_query($conn,$query2);
          //       $row = mysqli_fetch_assoc($result);
          //         echo "<h2> {$row['description']} </h2>";
                  
 

                ?>
                
              </div>
             
            </div>
            <div class="col-lg-6 contact-right">
              <form method="post"  action="">
                  <div class="row">
                    <div class="col-lg-12 d-flex flex-column">
                      <div class="form-group">
                        
                    <label  for="exampleInputEmail1">Full Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Full Name Please">
                  </div>
                     <div class="form-group">
                    <label for="exampleInputPassword1">Mobile</label>
                    <input name="phone" type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Mobile Phone Please">
                  </div>
                  <div class="form-group">
                    <label  for="exampleInputEmail1">Address</label>
                    <input name="address" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Address Please">
                  </div> 
                    </div>
                    
                    
                    
                    <div class="col-lg-12 d-flex justify-content-end send-btn">
                      <button name="button" type="submit" class="btn btn-warning">Choose</button>
                    </div>

                   
                  </div>
                </form>
                
            </div>
          </div>
        </div>
      </section>
<!-- <body style="background-image: url(img/header-bg.jpg);"> -->

            <?php
include('includepublic/public_footer.php');
?>

 