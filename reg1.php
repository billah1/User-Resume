


<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<script type="text/javascript" src="jahid.js"> </script>
	<!--<style>
		input{
			width: 200px;
		}
		select{
			width: 200px;
		}
		.redio{
			width: 30px;

		}
		.id{
			position: fixed
			float: left;
			position: relative;
			
		}
		#right{
			float: left;
			overflow: hidden;
			position: relative;
			
		}
	</style>-->
</head>
<body >
	<div  class="container">
		<div class="Registration">
			
				
			<h1 align="center"> Registration</h1>
		    <form name="registrationForm" action="reg1.php" method="post" >
		   <input type="text" name="FullName" placeholder="Enter Full Name" onchange="return checkNameLength();" required><br><br>
		    <input type="text" name="email" placeholder="Enter email" required><br><br>
		    <input type="password" name="password" placeholder="password" required><br><br>
		    <input type="password" name="confirm" placeholder="Re-password" onchange="return checkPassword();" required><br><br>
		    <input type="number" name="age" min="18" max="60" placeholder="Age" onchange="return checkAge();" required><br><br>

		    <select  class="DropdownList" name="religion" required>
		     <option >Islam</option>
		     <option >Hindus</option>
		     <option >Christians</option>
		     <option >Buddhists</option>
		     <option>Other</option>
		    </select><br><br>

		     <input class="Redio" type="radio" name="gender" value="male" checked>Male
		      <input class="Redio" type="radio" name="gender" value="female">Female
		     <input class="Redio" type="radio" name="gender" value="Other">Other <br><br>
		     <input class="Checkbox" id="ckBox" type="checkbox" name="vehicle1" required="">I agree <a>Terms & Condition</a><br><br>
		     <input type="test" name="code" placeholder="Write something about code" required><br><br>&emsp;&emsp;

		     <input class="RegistrationButton" type="submit" name="registration"  onclick="return check();" value="Registration">

		     </form>
		</div>
		<div class="Login">

			<form action="regLogIn.php" method="post"><br><br>
				<h1>LogIn Form</h1>
			<input type="text" name="email" placeholder="Enter username" required><br><br>
		    <input type="password" name="password" placeholder="password" required><br><br> &emsp; &emsp;
		    <input class="LoginButton" type="submit" name="login" value="Login">
			</form>
			
		</div>
</div>
</body>
</html>

<?php
session_start();
$con =mysqli_connect('localhost','root',"");
mysqli_select_db($con,'ass');
$fullname=$_POST['FullName'];
$email=$_POST['email'];
$password=$_POST['password'];
$age=$_POST['age'];
$religion=$_POST['religion'];
$gender=$_POST['gender'];
$code=$_POST['code'];
$query="select * from registration where username='$fullname'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num==1){
	echo "Email already exists";
}
else{
	$insert="insert into registration(username,password,age,religion,gender)values('$fullname','$password','$age','$religion','$gender')";
	$rslt=mysqli_query($con,$insert);
	if($rslt){
	echo"Registration is successfull";
}else{
	echo "error";
}
}




