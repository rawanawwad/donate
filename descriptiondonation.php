<?php
// include('donatedesc.php');

// if (isset($_POST['submit'])){
// 	$description = $_POST['description'];
	
// 	        $image = $_FILES['desc_img']['name'];
//         $tmp_name = $_FILES['desc_img']['tmp_name'];
//         $path = "admin/upload/";
    
//         move_uploaded_file($tmp_name, $path.$image);


//  if(!empty($desccription) && !empty($image)){
 	// $query = "select * from descriptiondonate ";
    // echo "$query";
    // die;

    // $result = mysqli_query($conn, $query);
    // $row = mysqli_fetch_assoc($result);
    // if($row['id']){
    //     $_SESSION ['id']= $row ['id'];
// echo "<img src='{admin/upload/$row['desc_img']}'>";
//  echo "<h2> {$row['description']} </h2>";
//  echo "<script>window.top.location='index.php'</script>"; 
        //header ("location:checkout.php");
        

//}
include('includepublic/connection.php');
// $description = $_POST['description'];
    
//          $image = $_FILES['desc_img']['name'];
//         $tmp_name = $_FILES['desc_img']['tmp_name'];
//         $path = "admin/upload/";
    
//         move_uploaded_file($tmp_name, $path.$image);

        $query = "select * from descriptiondonate ";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    //echo "<img src='{admin/upload/$row['desc_img']}'>";
 echo "<h2> {$row['description']} </h2>";
 //echo "<script>window.top.location='index.php'</script>"; 
  
?>
<form action="#" method="post">
  </form>
