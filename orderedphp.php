<?php
session_start();
$host ="localhost:3308";
$username = "root";
$password = "";
$dbname = "pds";
$conn = mysqli_connect($host,$username,$password,$dbname);
if(isset($_POST['submit_button']))
{
$name=$_SESSION['user'];
$token=$_SESSION['slip'];
@$a= $_POST['a'];
@$b= $_POST['b'];
@$c= $_POST['c'];
@$d= $_POST['d'];
@$e= $_POST['e'];
@$f= $_POST['f'];
@$g= $_POST['g'];
@$h= $_POST['h'];
@$i= $_POST['i'];
@$j= $_POST['j'];

$sql = "Insert Into ordered(name,token,a,b,c,d,e,f,g,h,i,j) values('$name','$token','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
$query=mysqli_query($conn,$sql);
if($query)
{
	header("location:log.php");
}
}
?>