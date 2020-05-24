<html>
<head>
	<link rel="stylesheet" type="text/css" href="buttonstyle.css">
	<meta charset="utf-8">
	<title>
	</title>
	<style>
		body{
			background-image:url(g6.jpg);
			background-size:100% 100%;
		}
		#box{
			position:absolute;
                 width:35%;
                 float:left;
                 height:85%;    
                 margin-left:400;
                 top:40;
		}
	fieldset{
            width: 200px;
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
	<body bgcolor="skyblue">
		<div id="box">
		<form method="post" action="ownerphp.php">
			<fieldset>
				<legend>Fair Shop Owner Sign Up</legend>
				<table width=>
					<tr>
					<td style="background-color:skyblue;">Name:<td><input type="text" name="Names" id="nameid"required >
				</tr>
				<tr>
					<td style="background-color:skyblue;">ID:<td><input type="text" name="user" id="usernameid"required>
				</tr>
				<tr>
					<td style="background-color:skyblue;">Password:<td><input type="password"name="Passwords" id="passwordid"required>
				</tr>
				<tr>
					<td style="background-color:skyblue;">ConfirmPassword:<td><input type="password" name="Cpasswords" id="cpasswordid" required >
				</tr>
				<tr>
					<td style="background-color:skyblue;">Gender:<td><input type = "radio" value = "M" name = "g">Male
                                   <input type = "radio" value = "F" name ="g">Female</tr>
<tr>
					<td ><td><input type="submit" value="SIGN UP"  id="submit"name="submit_button" class="btn">
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
	</body>
	</html>