<?php 

$con=mysql_connect('localhost','root',"");
$db=mysql_select_db("historicalrecords",$con);



$username=$_POST['user'];
$password=$_POST['pass'];


$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);




$result=mysql_query("select * from details where username='$username' and password='$password'") or die("Failed to query database ".mysql_error());
$row=mysql_fetch_array($result);
if ($row['username']==$username && $row['password']==$password) {

	echo "LOGIN SUCCESS!! WELCOME" .$row['username'];
	header("Location:adminupdate.html");

}
else{
	echo "FAILED TO LOGIN";
}



?>
