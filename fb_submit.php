<?php
	
	$con=mysqli_connect("localhost","root","sai","chintu");
// Check connection
	if (mysqli_connect_errno())
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}

  	$result =mysqli_query($con,"SELECT * FROM account");

	while($row = $result->fetch_assoc()) {
    	if ($_POST['username']==$row["mobile_or_email"] && $_POST['password']==$row["new_password"]) {
			echo "Welcome to Facebook";

		}
 	}
 	#echo $row['firstname'];
	/*if ($_POST['username']==$row['firstname'] && $_POST['password']=='chintu') {
			echo "you are correct".$_POST['username'];
		}*/
	
?>
