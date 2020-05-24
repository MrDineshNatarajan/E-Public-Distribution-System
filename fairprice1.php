<html>
<head>
	<link rel="stylesheet" type="text/css" href="buttonstyle.css">
	<link rel="stylesheet" type="text/css" href="tablestyle.css"> 
	<script type = "text/javascript">
         <!--
            function Warn() {
               alert ("Successfully assigned work to Volunteers!!!");
            }
         //-->
      </script>   
	</head>
<body bgcolor = "skyblue">
<h1 align = "Center"><i><b> Consumers Orders </b></i></h1>
<a href="index.php"align="right"><font color="red">Logout</font></a>
<Center>
<?php
$host = "localhost:3308";
$username = "root";
$password = "";
$dbname = "pds";
$conn = mysqli_connect($host,$username,$password,$dbname);
$sql = "Select * from ordered";
$records = mysqli_query($conn,$sql);
while($result = mysqli_fetch_assoc($records))
{
echo "<table width = '600' border = '2' cellspacing = '2' cellpadding = '2' bgcolor = 'yellow' class='content-table'>";
echo "<tr>";
echo "<td>";
echo "<B>";
echo "Ration Card Number";
echo "</B>";
echo "</td>";
echo "<td>".$result['name']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<B>";
echo "Token Number:";
echo "</B>";
echo "</td>";
echo "<td>".$result['token']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<B>";
echo "Rice:";
echo "</B>";
echo "</td>";
echo "<td>".$result['a']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<B>";
echo "Wheat:";
echo "</B>";
echo "</td>";
echo "<td>".$result['b']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<B>";
echo "Sugar:";
echo "</B>";
echo "</td>";
echo "<td>".$result['c']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<B>";
echo "Kerosene:";
echo "</B>";
echo "</td>";
echo "<td>".$result['d']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<B>";
echo "Balm Oil";
echo "</B>";
echo "</td>";
echo "<td>".$result['e']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<B>";
echo "Red Gram:";
echo "</B>";
echo "</td>";
echo "<td>".$result['f']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<B>";
echo "Black Gram:";
echo "</B>";
echo "</td>";
echo "<td>".$result['g']."</td>";
echo "</tr>";
echo "<br>";
echo "<tr>";
echo "<td>";
echo "<B>";
echo "Maida Flour:";
echo "</B>";
echo "</td>";
echo "<td>".$result['h']."</td>";
echo "</tr>";
echo "<br>";
echo "<tr>";
echo "<td>";
echo "<B>";
echo "Salt:";
echo "</B>";
echo "</td>";
echo "<td>".$result['i']."</td>";
echo "</tr>";
echo "<br>";
echo "<tr>";
echo "<td>";
echo "<B>";
echo "Coffee and Tea Powder:";
echo "</B>";
echo "</td>";
echo "<td>".$result['j']."</td>";
echo "</tr>";
echo "<br>";
echo "<tr>";
echo "<td>";
echo "<B>";
echo "Assign work";
echo "</B>";
echo "</td>";
echo "<td>"."<input type ='radio'>Volunteers"."</td>";
echo "</tr>";
echo "<br>";
echo "<tr>";
echo "<td colspan='2'>"." <input type = 'button' value = 'Work Assigned' onclick = 'Warn();'/>"."</td>";
echo "<B>";
echo "</B>";
echo "</tr>";
echo "<br>";
}
?>
</Center>
</body>
</html>
