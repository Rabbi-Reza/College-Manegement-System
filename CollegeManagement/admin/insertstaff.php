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

             $num =$_POST['num'];
            
             $dept =$_POST['dept'];
			 
			 $phn =$_POST['phn'];
             
            


$sql= "INSERT INTO staffs ( name ,dept ,phone )VALUES ('$num','$dept','$phn');";
              
mysql_query("$sql");

             echo "Data Inserted ";
 ?>

<br> <br>

<a href="upstaff.php"> View Datas </a>
 <br><br>        
<a href='logout.php'>Log Out </a>
 