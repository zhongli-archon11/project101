<?php
if(isset($_POST['submit']))
{
	$name = $_POST['ename'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
    $pswd = md5($_POST['password']);

	$sql = "INSERT INTO `Userinfo` VALUES('$name', '$email','$gender', '$pswd')";

	$conn= mysqli_connect("localhost", "root","","bca24");

	if( $conn->query($sql)== TRUE)
	{
		header("location:loginform.php");
	}
	
	else
	{
		echo "ERROR: ". $conn->error;
	}
}

?>
