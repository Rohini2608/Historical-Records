<?php 

$con=mysql_connect('localhost','root',"");
$db=mysql_select_db("historicalrecords",$con);



$username1=$_POST['user1'];
$password1=$_POST['pass1'];


$username1=stripcslashes($username1);
$password1=stripcslashes($password1);
$username1=mysql_real_escape_string($username1);
$password1=mysql_real_escape_string($password1);




$result=mysql_query("select * from details where usernamehome='$username1' and passwordhome='$password1'") or die("Failed to query database ".mysql_error());
$row=mysql_fetch_array($result);
if ($row['username1']==$username1 && $row['password1']==$password1) {

	echo "LOGIN SUCCESS!! WELCOME" .$row['username1'];
	header("Location:page1.html");

}
else{
	echo "FAILED TO LOGIN";
}



?>
