<?php

$dynasty=$_POST['dynasty'];

$con=mysql_connect('localhost','root',"");
if (!$con) {
	die("could not connect".mysql_error());
}
$db=mysql_select_db("historicalrecords",$con);
$god=mysql_query("select * from class where DYNASTY='$dynasty'",$con);

echo "<font><center><b><h1>HISTORICAL RECORDS</h1></center></b></font>";
echo "<table border='1'>";
echo "<tr><th>SNO</th><th>DYNASTY</th><th>DATE</th><th>STONE</th><th>COPPER PLATE/OTHER MATERIAL</th><th>ARCHAEOLOGY</th><th>NUMISMATIC</th><th>PURANAIDHIGASA</th><th>OTHER TEXTS</th><th>FOREIGN AUTHOR</th></tr>";
while ($row=mysql_fetch_array($god)) {
	echo "<tr><td>".$row['SNO']."</td>";
	echo "<td>".$row['DYNASTY']."</td>";
	echo "<td>".$row['DATE']."</td>";
	echo "<td>".$row['STONE']."</td>";
	echo "<td>".$row['CPOM']."</td>";
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