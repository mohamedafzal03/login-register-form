<?php
include('db.php');
if(isset($_POST["submit"]))
{
	$Fname=$_POST["fname"];
	$Lname=$_POST["lname"];
	$Email=$_POST["email"];
	$Pass=$_POST["pass"];
	$query=mysqli_query($con,"insert into signup(fname,lname,email,pass) values ('$Fname','$Lname','$Email','$Pass')");

	echo"<script>
		alert('signed up succesfully');
window.location='loginsignup.php'; 
</script>";
}
?>