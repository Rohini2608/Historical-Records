<?php
$sno=$_POST['t1'];
$dynasty=$_POST['t2'];
$date=$_POST['t3'];
$stone=$_POST['t4'];
$cpom=$_POST['t5'];
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
mysql_query("insert into class(SNO,DYNASTY,STONE,COPPERPLATE,OTHERMATERIAL,ARCHAEOLOGY,NUMISMATIC,PURANAIDHIGASA,OTHERTEXTS,FOREIGNAUTHOR) values('$sno',$dynasty','$stone','$copperplate','$othermaterial','$archaeology','$numismatic','$puranaidhigasa','$othertext','$foreignauthor')",$con);
echo "one row inserted";

mysql_close($con);

?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form method="post" action="adminupdate.html"><p>
				<input type="submit" id="bttn" value="BACK">

</body>
</html>