<?php
session_start();
$host ="localhost:3308";
$username = "root";
$password = "";
$dbname = "pds";
$conn = mysqli_connect($host,$username,$password,$dbname);
if(isset($_POST['submit_button']))
{
$name = $_POST['Names'];
$id=$_POST['user'];
$password = $_POST['Passwords'];
$cpassword = $_POST['Cpasswords'];
@$gender = $_POST['g'];
$sql = "Insert Into shop(name,id,password,cpassword,gender) values('$name','$id','$password','$cpassword','$gender')";
$query=mysqli_query($conn,$sql);
if($query)
{
	echo "<script> alert('Successfully Registered'); window.location.href='index.php'; </script>";
}
}
?>