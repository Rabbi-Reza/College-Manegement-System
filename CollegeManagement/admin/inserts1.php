<?php
ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
	header('location: admin.php');
}
include('sql_connect.php');
?>

 <?php

       require ('sql_connect.php');

             $date =$_POST['date'];
             $st1=$_POST['1st'];
             $st2 =$_POST['2nd'];
			 
			 $st3 =$_POST['3rd'];
			  $st4=$_POST['4th'];
             $st5 =$_POST['5th'];
			 
			 $bk =$_POST['bk'];
            
            


$sql= "INSERT INTO routs1 ( date ,1st,2nd ,bk ,3rd,4th ,5th )VALUES ('$date','$st1','$st2','$bk','$st3','$st4','$st5');";
              
mysql_query("$sql");

             echo "Data Inserted ";
 ?>

<br> <br>

<a href="ups1.php"> View Datas </a>
 <br><br>        
<a href='logout.php'>Log Out </a>
 