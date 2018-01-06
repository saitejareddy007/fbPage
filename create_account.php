<?php
        $con=mysqli_connect("localhost","id2166836_sai","chintu.d","id2166836_db");
	$fname=$_POST['fname'];
	$surname=$_POST['Surname'];
	$MorE=$_POST['MorE'];
	$newpassword=$_POST['new_password'];
	$reenter=$_POST['Re-enter_new_password'];
        $date_birth=$_POST['date']."-".$_POST['month']."-".$_POST['year'];
        //$genders=$_POST['gender'];
	if($newpassword!=$reenter){
?>
		<script>
			alert("password mismatched");
			window.location="index.html";
		</script>
<?php

	}

	if(!mysqli_query($con,"INSERT INTO account (firstname,surname,mobile_or_email,new_password,reenter_password,date_birth) VALUES ('$fname','$surname','$MorE','$newpassword','$reenter','$date_birth')")){
		echo("Error description: " . mysqli_error($con));
	}
	echo "your account has been created successfully";
	//($_POST['fname'],$_POST['surname'],$_POST['MorE'],$_POST['new_password'],$_POST['Re-enter_new_password'])
	//'fne','sume','MorE','newword','Re-erd')
?>
<a href="/fb">Click here Login<a/>