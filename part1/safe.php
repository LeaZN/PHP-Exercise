<html>
<head>
	<title>Log In Successful</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

<?php



if(isset($_POST['submit'])){

	
	$fullname=$_POST['fullname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$dob=$_POST['dob'];
	$socialsecurity=$_POST['socialsecurity'];

	 echo "Registration Successful!"."<br>";
	//echo("First name: " . $_POST['firstname'] . "<br />\\n");
	// echo "You entered:"."<br>";

	echo "Your full name:".$fullname."<br />\\n";
	echo "Your user name:".$username."<br />\\n";
	echo "Your password is safe."."<br />\\n";
	echo "Your email:".$email."<br />\\n";
	echo "Your phone number:".$phone."<br />\\n";
	echo "Your date of birth:".$dob."<br />\\n";
	echo "And your social security number:".$socialsecurity."<br />\\n";

}

else if(isset($_POST['login'])){
	
	echo "Welcome Back! You are now logged in.";
	

}
?>

</body> 
</html>