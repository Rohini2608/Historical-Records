<?php

$category=$_POST['category'];

$con=mysql_connect('localhost','root',"");
if (!$con) {
	die("could not connect".mysql_error());
}
$db=mysql_select_db("historicalrecords",$con);
$god=mysql_query("select * from class where DYNASTY LIKE '".$category."%'",$con);

echo "<center><font><b><h1>HISTORICAL RECORDS</h1></b></font></center>";
echo "<table border='1' cellpadding='50'>";
echo "<tr><th>SNO</th><th>DYNASTY</th><th>STONE</th><th>COPPER PLATE</th><th>OTHER MATERIALS</th><th>ARCHAEOLOGY</th><th>NUMISMATICS</th><th>PURANA ITHIGASA</th><th>OTHER TEXTS</th><th>FOREIGN AUTHORS</th></tr>";
while ($row=mysql_fetch_array($god)) {
	echo "<tr><td>".$row['SNO']."</td>";
	echo "<td>".$row['DYNASTY']."</td>";
	echo "<td>".$row['STONE']."</td>";
	echo "<td>".$row['COPPERPLATE']."</td>";
	echo "<td>".$row['OTHERMATERIAL']."</td>";
	echo "<td>".$row['ARCHAEOLOGY']."</td>";
	echo "<td>".$row['NUMISMATICS']."</td>";
	echo "<td>".$row['PURANAITHIGASA']."</td>";
	echo "<td>".$row['OTHERTEXTS']."</td>";
	echo "<td>".$row['FOREIGNAUTHORS']."</td></tr>";

	
}
echo "</table>";

mysql_close($con);


?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form method="post" action="home.html"><p>
				<input type="submit" id="bttn" value="HOME">
		

			</p></form>

			


</body>
</html>