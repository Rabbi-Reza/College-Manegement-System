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
             $wri =$_POST['wri'];
             $sub =$_POST['sub'];
			 
			 $quan =$_POST['quan'];
            
            


$sql= "INSERT INTO books ( name,writter,subject ,quantity )VALUES ('$num','$wri','$sub','$quan');";
              
mysql_query("$sql");

             echo "Data Inserted ";
 ?>

<br> <br>

<a href="uplib.php"> View Datas </a>
 <br><br>        
<a href='logout.php'>Log Out </a>
 