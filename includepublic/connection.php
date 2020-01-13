<?php
include ('config.php');
	$conn = mysqli_connect("localhost","root","","donate");
	if (!$conn ){
		die ("cannot connect");
	}
    ?>