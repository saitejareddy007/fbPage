<?php
        $con=mysqli_connect("localhost","id2166836_sai","chintu.d","id2166836_db");
  	$username=$_POST['username'];
  	$result =mysqli_query($con,"SELECT * FROM account WHERE mobile_or_email ='$username' ");

  	$row = $result->fetch_assoc();

  	if($_POST['password']==$row["new_password"])
  		echo "Welcome to Facebook";
  	else{
 ?>
 	<script type="text/javascript">
 		alert("Entered email or password is incorrect");
 		window.location="/fb";
 	</script>
<?php
    }
  	

	/*while($row = $result->fetch_assoc()) {
    	if ($_POST['username']==$row["mobile_or_email"] && $_POST['password']==$row["new_password"]) {
			echo "Welcome to Facebook";

		}
 	}*/
 	#echo $row['firstname'];
	/*if ($_POST['username']==$row['firstname'] && $_POST['password']=='chintu') {
			echo "you are correct".$_POST['username'];
		}*/
	
?>