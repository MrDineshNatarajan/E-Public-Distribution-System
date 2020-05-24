<html>
<head>
	<link rel="stylesheet" type="text/css" href="buttonstyle.css">
	</head>
<body bgcolor="lightgrey">
<?php
session_start();
$abc = $_SESSION['userregisteeration'];
$_SESSION['user_email'] = $abc;
?>
		<h1 align="center">Welcome To E-Public Distribution System</h1>
		<br>
		<br>
		<br>
		<br>
		<br>

		<center> <?php 
$rand=rand(); 

echo "<p style='color:blue;font-size:50px;font-weight:bold'>".$rand; ?>
<?php
$_SESSION['token'] = $rand;
?><form method="post"action="nav.php">
	<input type="submit" name="login" value="Place a Grocery Items" class="btn">
	</form>
</center>
	</body>
</html>

