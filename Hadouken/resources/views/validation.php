<?php

session_start();

$con = mysqli_connect('localhost','root',"");
mysqli_select_db($con,'dbportfolio');
if (isset($_GET['login1'])) {

		$email = $_GET['email'];
		$password = $_GET['password'];
		
$s ="SELECT*FROM tblportfolio WHERE email= '$email' && password = '$password'";

$result =mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if ($num == 1) {
	if ($email=='email') {
		header('Location: register.php');
       			exit;
			}else {
				header('Location: Home.php');
       			exit;
			}
		}
	}

?>
