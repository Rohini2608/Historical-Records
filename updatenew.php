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
   <input type="text" name="id" placeholder="ENTER SNO FOR SEARCH"/><br/>
   <input type="submit" name="search" value="Search Data"/>
   
</form>

<?php 

   $con=mysql_connect('localhost','root',"");
   $db=mysql_select_db('historicalrecords',$con);

   if (isset($_POST['search'])) {
      
      $id=$_POST['id'];
      $query="select * from class where SNO='$id'";
      $query_run=mysql_query($con,$query);

      while ($row=mysql_fetch_array($query_run)) {
         ?>
         <form action="" method="POST">
            <input type="text" name="t1" value="<?php echo $row['$SNO']?>"/><br>
            <input type="text" name="t2" value="<?php echo $row['$DYNASTY']?>"/><br>
            <input type="text" name="t3" value="<?php echo $row['$DATE']?>"/><br>
            <input type="text" name="t4" value="<?php echo $row['$STONE']?>"/><br>
            <input type="text" name="t5" value="<?php echo $row['$CPOM']?>"/><br>
            <input type="text" name="t6" value="<?php echo $row['$ARCHAEOLOGY']?>"/><br>
            <input type="text" name="t7" value="<?php echo $row['$NUMISMATICS']?>"/><br>
            <input type="text" name="t8" value="<?php echo $row['$PURANAITHIGASA']?>"/><br>
            <input type="text" name="t9" value="<?php echo $row['$OTHERTEXTS']?>"/><br>
            <input type="text" name="t10" value="<?php echo $row['$FOREIGNAUTHORS']?>"/><br>

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

$con=mysql_connect('localhost','root',"");
   $db=mysql_select_db('historicalrecords',$con);

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

      $query="update class set DYNASTY='$_POST['t2']',DATE='$_POST['t3']',STONE='$_POST['t4']',CPOM='$_POST['t5']',ARCHAEOLOGY='$_POST['t6']',NUMISMATICS='$_POST['t7']',PURANAITHIGASA='$_POST['t8']',OTHERTEXTS='$_POST['t9']',FOREIGNAUTHORS='$_POST['t10']' where SNO='$_POST['t1']'";
      $query_run=mysql_query($con,$query);
      if ($query_run) {
         
         echo '<script>alert("DATA UPDATED")</script>';
      }
      else{
         echo '<script>alert("DATA NOT UPDATED")</script>';
      }

   }
 
?>