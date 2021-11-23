<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<link rel="stylesheet" type="text/css" href="updatestyle.css">
</head>
<body>
	<center><h1>HISTORICAL RECORDS</h1></center>
	<div id="frm">
		
<form method="POST" action="update.php">
	<p>
	<label>SNO</label> <br>
	<input type="text" id="t1" name="t1">
	</p>

<p>
	<label>DYNASTY</label> <br>
	<input type="text" id="t2" name="t2">
	</p>

<p>
	<label>STONE</label> <br> 
	<textarea name="t3"></textarea>
	</p>
	<p>
	<label>COPPERPLATE</label>
	 <br> 
	<textarea name="t4"></textarea>
	</p>
	<p>
	<label>OTHERMATERIAL</label>
	 <br> 
	<textarea name="t5"></textarea>
	</p>

	<p>
	<label>ARCHAEOLOGY</label>
	 <br> 
	<textarea name="t6"></textarea>
	</p>
	<p>
	<label>NUMISMATIC</label>
	 <br> 
	<textarea name="t7"></textarea>
	</p>
	<p>
	<label>PURANAIDHIGASA</label>
	 <br> 
	<textarea name="t8"></textarea>
	</p>
	<p>
	<label>OTHERTEXT</label>
	 <br> 
	<textarea name="t9"></textarea>
	<p>
	<label>FOREIGNAUTHOR</label>
	 <br> 
	<textarea name="t10"></textarea>
	</p>


<p>
	<input type="submit" value="UPDATE" ></p>	
</form>

<form method="post" action="adminupdate.html"><p>
				<input type="submit" id="btn" value="BACK"></p></form>
			</div>

</body>
</html>