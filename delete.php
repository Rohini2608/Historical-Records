<?php 
$sno=$_POST['t1'];
$dynasty=$_POST['t2'];
$con=mysql_connect('localhost','root',"");

if (!$con) {
	die("Could not connect".mysql_error());
}
$db=mysql_select_db("historicalrecords",$con);
mysql_query("delete from class where dynasty='$dynasty' or sno='$sno'",$con);
echo "one row deleted";
mysql_close($con);

?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<form method="post" action="adminupdate.html"><p>
				<input type="submit" id="bttn" value="BACK"></p></form>


</body>
</html>