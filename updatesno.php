<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-color: whitesmoke;
		}

		input{
			width: 40%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
		}


	</style>

</head>
<body>
<center>
	
<h1>SEARCH DATA AND UPDATE</h1>
<form action="" method="POST" style="background-color: lightblue"> 
	<input type="text" name="sno" placeholder="ENTER SNO FOR SEARCH"/><br/>
	<input type="submit" name="search" value="Search Data"/>
</form>
<form method="post" action="adminupdate.html">
	    <input type="submit" value="BACK"/>
	</form>

<?php 

   $con=mysql_connect('localhost','avinashresearch_avinashiih',"rsmlr270459");
   $db=mysql_select_db('avinashresearch_historicalrecords',$con);

   if (isset($_POST['search'])) {
   	
   	$sno=$_POST['sno'];
   	$query="select * from class where SNO='$sno'";
   	$query_run=mysql_query($query,$con);

   	while ($row=mysql_fetch_array($query_run)) {
   		?>
   		<form method="POST">
   		    
   		    SNO
 		<br/>
		<input  name="t1"  type="text" value=<?php echo $row['SNO'];?>>	 
		<br/>  
   		    DYNASTY
 		<br/>
		<textarea name="t2"><?php echo $row["DYNASTY"] ?></textarea>	 
		<br/> 
		DATE
 		<br/>
		<textarea name="t3"><?php echo $row["DATE"] ?></textarea>	 
		<br/>  
		<b><h4>EPIGRAPHY</h4></b> 
		STONE
		<br/>
		<textarea name="t4"><?php echo $row["STONE"] ?></textarea>
		<br/>  
		CPOM
		<br/>
		<textarea name="t5"><?php echo $row["CPOM"] ?></textarea>	
		<br/>    
	    <h4>ARCHAEOLOGY</h4>
		<textarea name="t6"><?php echo $row["ARCHAEOLOGY"] ?></textarea>
		<br/>   
	    <h4>NUMISMATICS</h4>
		<textarea name="t7"><?php echo $row["NUMISMATICS"] ?></textarea>
		<br/>   
		<b><h4>TEXT</h4> </b> 
		
	    PURANA ITHIGASA
	    <br/>
		<textarea name="t8"><?php echo $row["PURANAITHIGASA"] ?></textarea>
		<br/>  
		 OTHER TEXTS
		 <br/>
		<textarea name="t9"><?php echo $row["OTHERTEXTS"] ?></textarea>
		<br/>   
		FOREIGN AUTHORS
		<br>
		<textarea name="t10"><?php echo $row["FOREIGNAUTHORS"] ?></textarea>
		<br/><br/>   



   			<input type="submit" name="update" value="UPDATE DATA">
   			


   		</form>
   		<?php
   	}
   }
?>
</center>
</body>
</html>

<?php

$con=mysql_connect('localhost','avinashresearch_avinashiih',"rsmlr270459");
   $db=mysql_select_db('avinashresearch_historicalrecords',$con);

   if (isset($_POST['update'])) {
       
   	$sno=$_POST['t1'];
   	$dynasty=$_POST['t2'];
   	$date=$_POST['t3'];
   	$stone=$_POST['t4'];
   	$cpom=$_POST['t5'];
   	$archaeology=$_POST['t6'];
   	$numismatics=$_POST['t7'];
   	$puranaithigasa=$_POST['t8'];
   	$othertexts=$_POST['t9'];
   	$foreignauthors=$_POST['t10'];

   	$query="UPDATE class SET SNO='$sno',DATE='$date',STONE='$stone',CPOM='$cpom',ARCHAEOLOGY='$archaeology',NUMISMATICS='$numismatics',PURANAITHIGASA='$puranaithigasa',OTHERTEXTS='$othertexts',FOREIGNAUTHORS='$foreignauthors' where DYNASTY='$dynasty'";
   	$query_run=mysql_query($query,$con);
   	if ($query_run) {
   		
   		echo '<script>alert("DATA UPDATED")</script>';
   	}
   	else{
   		echo '<script>alert("DATA NOT UPDATED")</script>';
   	}

   }
   mysql_close($con);
 
?>