<?php
//$sno=$_POST['t1'];
$dynasty=$_POST['t2'];
$stone=$_POST['t3'];
$copperplate=$_POST['t4'];
$othermaterial=$_POST['t5'];
$archaeology=$_POST['t6'];
$numismatic=$_POST['t7'];
$puranaidhigasa=$_POST['t8'];
$othertext=$_POST['t9'];
$foreignauthor=$_POST['t10'];

$con=mysql_connect('localhost','root',"");
if (!$con) {
	die("could not connect".mysql_error());
}
$db=mysql_select_db("historicalrecords",$con);
mysql_query("insert into class(DYNASTY,STONE,COPPERPLATE,OTHERMATERIAL,ARCHAEOLOGY,NUMISMATICS,PURANAITHIGASA,OTHERTEXTS,FOREIGNAUTHORS) values('$dynasty','$stone','$copperplate','$othermaterial','$archaeology','$numismatic','$puranaidhigasa','$othertext','$foreignauthor')",$con);
echo "one row inserted";



mysql_close($con);

?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form method="post" action="home.html"><p>
				<input type="submit" id="bttn" value="HOME">

</body>
</html>