<?php
session_start();
$error = '';
if(isset($_POST['login']))
{
@$usertype=$_POST['usertype'];
if($usertype=="User")
{
$username=$_POST['user'];
$password = $_POST['pass'];
$connection = mysqli_connect("localhost:3308","root","","pds");
$query = mysqli_query($connection, "select * from signup where rationid = '$username' AND password = '$password'");
$rows = mysqli_num_rows($query);
if($rows == 1)
{
$_SESSION['userregisteeration']=$username;
$_SESSION['U'] = $username;
echo "<script> alert('Successfully Login'); window.location.href='consumerhome.php'; </script>";
}
else
{
echo "<script> alert('Invalid Username and Password'); window.location.href='login.php'; </script>";
}
mysqli_close($connection);
}
elseif($usertype=="Whole")
{
$username=$_POST['user'];
$password = $_POST['pass'];
$connection = mysqli_connect("localhost:3308","root","","pds");
$query = mysqli_query($connection, "select * from shop where id = '$username' AND password = '$password'");
$rows = mysqli_num_rows($query);
if($rows == 1)
{
echo "<script> alert('Successfully Login'); window.location.href='fairprice1.php'; </script>";
}
else
{
echo "<script> alert('Successfully Login'); window.location.href='login.php'; </script>";
}
mysqli_close($connection);
}
}
?>