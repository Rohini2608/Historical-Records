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

$con=mysql_connect('localhost','avinashresearch_avinashiih',"rsmlr270459");
if (!$con) {
	die("could not connect".mysql_error());
}
$db=mysql_select_db("avinashresearch_historicalrecords",$con);
mysql_query("update class set DYNASTY='$dynasty',DATE='$date',STONE='$stone',CPOM='$cpom',ARCHAEOLOGY='$archaeology',NUMISMATICS='$numismatic',PURANAITHIGASA='$puranaidhigasa',OTHERTEXTS='$othertext',FOREIGNAUTHORS='$foreignauthor' where SNO='$sno'",$con);
echo "one row updated";

mysql_close($con);


 ?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<form method="post" action="adminupdate.html"><p>
				<input type="submit" id="bttn" value="BACK"></p></form>
				<br>
				

</body>
</html>