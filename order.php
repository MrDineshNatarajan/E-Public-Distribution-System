<html>
<head>
	<link rel="stylesheet" type="text/css" href="buttonstyle.css">
	<style>
		fieldset{
            width: 500px;
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
            border-style: groove;
            border-width: 10px;
            font-size: 2em;
        	font-weight: bold;
        	color:red;
        	background-color:rgba(255,255,255,.3);
        }
         td{
        	font-size: 1.5em;
        	font-weight: bold;
        	color:black;
        }
        input{
        	font-size: 0.8em;
        	font-weight: bold;
        }
	</style>
	</head>
	<body bgcolor="violet">
		<?php
session_start();
$abc=$_SESSION['user_email'];
$_SESSION['user'] = $abc;
$rand=$_SESSION['token'];
$_SESSION['slip'] = $rand;
?>
<center>
	<br>
	<br>
	<br>
	<form method="POST" action="orderedphp.php">
		<fieldset>
				<legend>Place a Order In Fair Price shops</legend>
		<table>
			<tr><td style="background-color:skyblue;">Rice:<td><input type = "radio" value = "Yes" name = "a">Yes
                                   <input type = "radio" value = "No" name ="a">No</tr>
            <tr><td style="background-color:skyblue;">Wheat:<td><input type = "radio" value = "Yes" name = "b">Yes
                                   <input type = "radio" value = "No" name ="b">No</tr>
             <tr><td style="background-color:skyblue;">Sugar:<td><input type = "radio" value = "Yes" name = "c">Yes
                                   <input type = "radio" value = "No" name ="c">No</tr>
                 <tr><td style="background-color:skyblue;">Kerosene:<td><input type = "radio" value = "Yes" name = "d">Yes
                                   <input type = "radio" value = "No" name ="d">No</tr>
              <tr><td style="background-color:skyblue;">Balm Oil:<td><input type = "radio" value = "Yes" name = "e">Yes
                                   <input type = "radio" value = "No" name ="e">No</tr>
               <tr><td style="background-color:skyblue;">Red Gram<td><input type = "radio" value = "Yes" name = "f">Yes
                                   <input type = "radio" value = "No" name ="f">No</tr>
                 <tr><td style="background-color:skyblue;">Black Gram:<td><input type = "radio" value = "Yes" name = "g">Yes
                                   <input type = "radio" value = "No" name ="g">No</tr>
                  <tr><td style="background-color:skyblue;">Maida flour:<td><input type = "radio" value = "Yes" name = "h">Yes
                                   <input type = "radio" value = "No" name ="h">No</tr>
                   <tr><td style="background-color:skyblue;">Salt:<td><input type = "radio" value = "Yes" name = "i">Yes
                                   <input type = "radio" value = "No" name ="i">No</tr>
                     <tr><td style="background-color:skyblue;">Coffee and Tea Powder<td><input type = "radio" value = "Yes" name = "j">Yes
                                   <input type = "radio" value = "No" name ="j">No</tr>
                      <tr><td>
					<td ><input type="submit" value="SUBMIT"  id="submit"name="submit_button" class="btn">
					</tr>
	</form>
	</form>
	</center>
	</body>
</html>