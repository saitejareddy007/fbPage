<?php
	
	$con=mysqli_connect("localhost","id2166836_sai","chintu.d","account");
// Check connection
	if (mysqli_connect_errno())
  	{       
	?>
	<script>
	window.location="Error.html";
	</script>
	<?php
  	}
?>
<html>
<head>
	<link rel="stylesheet" href="fbstyle.css">
	<link rel="icon" href="favicon.ico" type='image/x-icon'>
        <script src="script.js"></script>
        <title>Facebook</title>
</head>
<body>
	<div id="main">
		<div id="header">
			<div id="fb_logo">
			facebook
			</div>
			<div class="login_form">
				<form action="fb_submit.php" method="post" name="login"  onsubmit="return validateForm()">
					<table>
						<tbody>
							<tr>
								<td style="color:white; font-size:12px;">Email or Phone</td><td style="color:white; font-size:12px;">Password</td>
							</tr>
							<tr>
								<td><input name="username" style ="border-color:black; border:1px solid;"  type="text" tabindex="1" size="16">&nbsp;&nbsp;</td>
								<td><input name ="password" style ="border-color:black; border:1px solid;"  type="password" size="16">&nbsp;&nbsp;</td>
								<td ><button class="button">Log In</td>
							</tr>
							<tr>
							<td></td>
							<style>
								a:link {
								    background-color: transparent;
								    text-decoration: none;
								}
							</style>
							<td >
								<a style="color:#9cb4d8; font-size:12px;" href="#">Forgotten account?</a>
							</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
		<div id="body">
			<div id="left_body">
				<p style="font-size:20px;">Facebook helps you to connect and share with the<br />peoples in your life.</p>
				<div id="img">
					<img src="fb.png">
				</div>
			</div>
			<div id="right_body">
				<p style="font-size:36px; font-weight:bold;">Create an account</p>
				<p style="font-size:19px; font-weight:normal;">It's free and always will be.</p>
			<div id="form" name="account">
				<form action="create_account.php" method="post" name="account" onsubmit="return createAccountForm();">
					<table>
					<tbody>
						<tr>
							<td><input style="width:200px; font-size:18px" type="text" name="fname" placeholder="First name"/><input style="width:195px; font-size:18px" type="text" name="Surname" placeholder="Surname"></td>
						</tr>
						<tr>
							<td><input style="width:400px; font-size:18px" type="text" name ="MorE" placeholder="Mobile number or email address"></td>
						</tr>						
						<tr>
							<td><input style="width:400px; font-size:18px" type="password" name ="new_password" placeholder="New password"/></td>
						</tr>
						<tr>
							<td><input style="width:400px; font-size:18px" type="password" name ="Re-enter_new_password" placeholder="Re-enter new password"/></td>
						</tr>
						<tr>
							<td>Birthday</td>
						</tr>
						<tr>
							<td><select id="date" name="date"> <option>Day</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
											<option>13</option>
											<option>14</option>
											<option>15</option>
								</select>
								<select id="month" name="month"> <option>Month</option>
											<option>Jan</option>
											<option>Feb</option>
											<option>Mar</option>
											<option>Apr</option>
											<option>May</option>
											<option>Jun</option>
											<option>Jul</option>
											<option>Aug</option>
											<option>Sep</option>
											<option>Oct</option>
											<option>Nov</option>
											<option>Dec/<option>
								</select>
								<select id="Year" name="year"> <option>Year</option>
											<option>2010</option>
											<option>2011</option>
											<option>2012</option>
											<option>2013</option>
											<option>2014</option>
											<option>2015</option>
											<option>2016</option>
											<option>2017</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
							  <input type="radio" name="gender" value="female"> Female
							  <input type="radio" name="gender" value="male"> Male
							</td>
						</tr>
						<tr>
							<td style="font-size:11px; color:#777;"><a><br />By clicking Create an account, you agree to our Terms and <br />confirm that you have read our Data Policy, including our Cookie<br />Use Policy. You may receive SMS message notifications from<br /> Facebook and can opt out at any time.</a></td>
						</tr>
						<tr>
							<td><button class="button1">Create an accounnt</td>
						</tr>
					</tbody>
					</table>
				</form>
			</div>
			</div>
		</div>
	</div>
</body>
</html>