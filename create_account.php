<?php
	$con=mysqli_connect("localhost","root","sai","chintu");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		$fname=$_POST['fname'];
		$surname=$_POST['Surname'];
		$MorE=$_POST['MorE'];
		$newpassword=$_POST['new_password'];
		$reenter=$_POST['Re-enter_new_password'];
		if($fname==""||$surname==""||$MorE==""||$newpassword==""||$reenter==""){
			?>
				<script type="text/javascript">
					alert("please fill all the fields.");
					window.location="facebook.htm";
				</script>
			<?php
		}
		if($newpassword!=$reenter){
			?>
				<script>
					alert("password mismatched");
					window.location="facebook.htm";
				</script>
			<?php

		}

		if(!mysqli_query($con,"INSERT INTO account (firstname,surname,mobile_or_email,new_password,reenter_password) VALUES ('$fname','$surname','$MorE','$newpassword','$reenter')")){
			echo("Error description: " . mysqli_error($con));
		}
		else{
			echo "you account has been created successfully";
			//($_POST['fname'],$_POST['surname'],$_POST['MorE'],$_POST['new_password'],$_POST['Re-enter_new_password'])
			//'fne','sume','MorE','newword','Re-erd')
		}
	}	
?>
<a href="facebook.htm">Click here Login<a/>
