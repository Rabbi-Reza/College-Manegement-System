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
             $des =$_POST['des'];
             $dept =$_POST['dept'];
			 
			 $phn =$_POST['phn'];
             $email =$_POST['email'];
            


$sql= "INSERT INTO teacher ( name,designation,dept ,phone,email)VALUES ('$num','$des','$dept','$phn','$email');";
              
mysql_query("$sql");

             echo "Data Inserted ";
 ?>

<br> <br>

<a href="uptech.php"> View Datas </a>
 <br><br>        
<a href='logout.php'>Log Out </a>
 