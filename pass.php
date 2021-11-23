<?php


$con=mysql_connect('localhost','avinashresearch_avinashiih',"rsmlr270459");
   $db=mysql_select_db('avinashresearch_historicalrecords',$con);

$username = $_POST['user'];
        $password = $_POST['pass'];
        $newpassword = $_POST['newpass'];
        $confirmnewpassword = $_POST['confirmpass'];
        $result = mysql_query("SELECT password1 FROM details WHERE 
username1='$user'");
        if($user==$username1 && $newpassword==$confirmnewpassword)
        {
        
        
        $sql=mysql_query("UPDATE details SET password1='$newpassword' where 

 username1='$user'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }



?>