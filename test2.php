<?php
include('includepublic/connection.php');
$query2 = "select * from descriptiondonate where cat_id = {$_GET['cat_id']}";
/*print_r($query2);
die;*/
$result = mysqli_query($conn, $query2);
    while($row = mysqli_fetch_assoc($result)){
    	
    	 echo "<img src=admin/upload/{$row['desc_img']} height='130' width='150'>"; 
    	 echo "<h2> {$row['description']} </h2>";
    	}
?>