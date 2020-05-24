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
$ration=$_POST['user'];
$password = $_POST['Passwords'];
$cpassword = $_POST['Cpasswords'];
@$gender = $_POST['g'];
$dob = $_POST['DOB'];
$mobile = $_POST['Mobile'];
$village = $_POST['add'];
$taluk = $_POST['cit'];
$pincode = $_POST['pin'];
$sql = "Insert Into signup(name,rationid, password, cPassword,gender,dob,phone,village,taluk,pincode) values('$name','$ration','$password','$cpassword','$gender','$dob','$mobile','$village','$taluk','$pincode')";
$query=mysqli_query($conn,$sql);
if($query)
{
	echo "<script> alert('Successfully Registered'); window.location.href='index.php'; </script>";
}
}
?>