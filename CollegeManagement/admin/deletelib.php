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

	include_once('sql_connect.php');
 
	if( isset($_GET['del']) )
	{
		$id = $_GET['del'];
		$sql= "DELETE FROM books WHERE ID='$id'";


		$res= mysql_query($sql) or die("Failed".mysql_error());


echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Deleted ')
        window.location.href='uplib.php'
        </SCRIPT>");

		echo "<meta http-equiv='refresh' content='0; url=uplib.php'>";
	}
?>
 