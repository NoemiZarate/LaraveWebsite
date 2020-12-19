<!DOCTYPE html>
<html>
<head>
</head>
	<title>Register!</title>
	<style type="text/css">
		*{

	margin: 0;
	padding: 0;
	font-family: sans-serif;
}
.hero{
	 height: 100%;
	 width: 100%;
	background: linear-gradient(to bottom left,#ffffff,#0e1111);
	 background-position: center;
	 background-size:cover; 
	 position: absolute;
}
.form-box{
	width: 380px;
	height: 480px;
	position: relative;
	margin: 6% auto;
	background: #fff;
	padding: 5px;
	overflow: hidden;
}
.button-box {
	width: 220px;
	margin: 35px auto;
	position: relative;
	box-shadow: 0 0 20px 9px #e6e2d3;
	border-radius: 30px;

}
.toggle-btn{
	padding: 10px 30px;
	cursor: pointer; 
	background: transparent;
	border: 0;
	outline: none;
	position: relative;


}
#btn{
	top: 0;
	left: 0;
	position: absolute;
	width: 110px;
	height: 100%;
	background: gray;
	border-radius: 30px;
	transition: .5s;

}

.input-group{

	top: 150px;
	position: absolute;
	width: 280px;
	transition: .5s;

}
.input-field{
	width: 100%;
	padding: 10px 0;
	margin: 5px 0;
	border-left: 0;
	border-top: 0;
	border-right: 0;
	border-bottom: 1px solid #999;
	outline: none;
	background: transparent;
}
.submit-btn{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: gray;
	border: 0;
	outline: none;
	border-radius: 30px;

}
.check-box {
	margin: 30px 10px 30px 0;

}
span{
	color:  #777;
	font-size: 12px;
	bottom: 68px;
	position: absolute;

}
#login3{
	left: 50px;

}
#register1{
	left: 450px;
}

.validation {
	top: 470px;
	position: absolute;
	width: 280px;
	left: 600px;


}
	</style>
<body>

<div class="hero">
	<div class="form-box">
		<div class="button-box">
		<div id="btn"></div>
			<button type="button" class="toggle-btn" name="login" onclick="login3()">Log In</button>
			<button type="button" class="toggle-btn" name="register" onclick="register1()">Register</button>
		</div>
		<!--<div class="social-icons">
			<img src="../xampp/htdocs/WEBPAGE/f.png">
			<img src="../xampp/htdocs/WEBPAGE/i.png">
			<img src="../xampp/htdocs/WEBPAGE/t.png">
			</div>-->

			<form id="login3"  class="input-group" method="GET" action="validation.php">
		<input type="text" name="email" placeholder="Enter Email" class="input-field">
		<input type="password" name="password" placeholder="Enter Password" class="input-field">
		<input type="checkbox" name="check" class="check-box"><span>Remember password</span>
		<button type="submit" class="submit-btn" name="login1">Log in</button>
	</form>
	<form id="register1" class="input-group" method="GET" action="register.php">
		<input type="text" name="fname" placeholder="First Name" class="input-field"> <input type="text" name="lname" placeholder="Last Name" class="input-field">
		<input type="text" name="email" placeholder="Email" class="input-field">
		<input type="password" name="password" class="input-field" placeholder="Enter Password">
		<button type="submit" class="submit-btn" name="register">Register!</button></form>
		
		</div>

		<div class="validation">
	<?php 

	$con = mysqli_connect('localhost','root',"");
	mysqli_select_db($con,'dbportfolio');
	if (isset($_GET['register'])) {

		$firstname = $_GET['fname'];
		$lastname = $_GET['lname'];
		$email = $_GET['email'];
		$password = $_GET['password'];

		$s = "SELECT * FROM tblportfolio WHERE email = '$email'";

		$result =mysqli_query($con,$s);
		$num = mysqli_num_rows ($result);

		if ($num ==1) {
			
			echo "Email Already Taken";
		}else{
			$insert = "INSERT INTO tblportfolio(fname,lname,email,password) VALUES ('$firstname','$lastname','$email','$password')";
			mysqli_query($con,$insert);
			echo "Succesfully registered";
		}
	
	}
	 ?> 
</div>
<script>
	var x = document.getElementById("login3");
	var y = document.getElementById("register1");
	var z = document.getElementById("btn");

	function register1(){
		x.style.left ="-400px";
		y.style.left ="50px";
		z.style.left ="110px";
	}
	function login3(){
		x.style.left ="50px";
		y.style.left ="450px";
		z.style.left ="0";
	}

</script>


</body>
</html> 