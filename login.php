<html>
<head>
	<link rel="stylesheet" type="text/css" href="buttonstyle.css">
	<title>PDS
	</title>
	<style>
		body{
			background-image:url("g3.jpg");
			background-size:cover;
		}
		fieldset{
            width: 200px; /* or a percentage, or whatever */
            margin-bottom: auto;
            margin-left: auto;
            margin-right: auto;
            border-style: groove;
            border-width: 15px;
            font-size: 2em;
        	font-weight: bold;
        	color:orange;
        }
        td{

        	font-size: 1.5em;
        	font-weight: bold;
        	color:red;
        }
        input,select,option{
        	font-size: 0.8em;
        	font-weight: bold;
        }

	</style>	
	</head>
<body bgcolor="lightyellow">
<br>
<br>
<br><br><br><br>
<br>
	<form method="post" action="validate.php">
		<fieldset>
			<legend> Sign In</legend>
			<table align ="center" border=0>
				<tr> <td style="color:blue;background-color:yellow;">UserType*<td><select name="usertype">
					<option selected disabled="">&lt-----Choose Anyone-----&gt</option>
					<option value="User" >Consumer</option>
					<option value="Whole">Fair Shop Owner</option>
				</select></td>
				<tr>
				<td style="color:blue;background-color:yellow;">Username*<td><input type="text" name="user" placeholder="Enter Username">
				</tr>
				<tr>
				<td style="color:blue;background-color:yellow;">Password*<td><input type="password" name="pass"placeholder="Enter Password">
				</tr>
				<tr>
					<td>
						<td><input type="submit" name="login" value="LOGIN" class="btn">
				</tr>
		</fieldset>
	</form>

</body>
</html>