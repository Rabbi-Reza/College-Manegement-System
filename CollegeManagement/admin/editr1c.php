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
		  

	if( isset($_GET['edit']) )
	{
		$id = $_GET['edit'];

		$res= mysql_query("SELECT * FROM routc1 WHERE ID='$id'");

		$row= mysql_fetch_array($res);
	}

          
        if( isset($_POST['date']) )
	{
		$newdate = $_POST['date'];
		$id  	 = $_POST['ID'];
		$sql     = "UPDATE routc1 SET date='$newdate' WHERE ID ='$id'";

		$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());


echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Updated ')
        window.location.href='upr1c.php'
        </SCRIPT>");

		echo "<meta http-equiv='refresh' content='0;url= editr1c.php'>";



	}
       
     if( isset($_POST['1st']) )
	{
		$new1st = $_POST['1st'];
		$id  	 = $_POST['ID'];
		$sql     = "UPDATE routc1 SET 1st='$new1st' WHERE ID ='$id'";

		$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());


echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Updated ')
        window.location.href='upr1c.php'
        </SCRIPT>");

		echo "<meta http-equiv='refresh' content='0;url= editr1c.php'>";



	}
	
	     if( isset($_POST['2nd']) )
	{
		$new2nd = $_POST['2nd'];
		$id  	 = $_POST['ID'];
		$sql     = "UPDATE routc1 SET 2nd='$new2nd' WHERE ID ='$id'";

		$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());


echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Updated ')
        window.location.href='upr1c.php'
        </SCRIPT>");

		echo "<meta http-equiv='refresh' content='0;url= editr1c.php'>";



	}
	
	     if( isset($_POST['3rd']) )
	{
		$new3rd = $_POST['3rd'];
		$id  	 = $_POST['ID'];
		$sql     = "UPDATE routc1 SET 3rd='$new3rd' WHERE ID ='$id'";

		$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());


echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Updated ')
        window.location.href='upr1c.php'
        </SCRIPT>");

		echo "<meta http-equiv='refresh' content='0;url= editr1c.php'>";



	}
	
	     if( isset($_POST['4th']) )
	{
		$newe4th = $_POST['4th'];
		$id  	 = $_POST['ID'];
		$sql     = "UPDATE routc1 SET 4th='$new4th' WHERE ID ='$id'";

		$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());


echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Updated ')
        window.location.href='upr1c.php'
        </SCRIPT>");

		echo "<meta http-equiv='refresh' content='0;url= editr1c.php'>";



	}
	
	   

	     if( isset($_POST['5th']) )
	{
		$newe5th = $_POST['5th'];
		$id  	 = $_POST['ID'];
		$sql     = "UPDATE routc1 SET 5th='$new5th' WHERE ID ='$id'";

		$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());


echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Updated ')
        window.location.href='upr1c.php'
        </SCRIPT>");

		echo "<meta http-equiv='refresh' content='0;url= editr1c.php'>";



	}	


       	
       
	     if( isset($_POST['bk']) )
	{
		$newbk = $_POST['bk'];
		$id  	 = $_POST['ID'];
		$sql     = "UPDATE routc1 SET 5th='$newbk' WHERE ID ='$id'";

		$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());


echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Data Updated ')
        window.location.href='upr1c.php'
        </SCRIPT>");

		echo "<meta http-equiv='refresh' content='0;url= editr1c.php'>";



	}	


 
?>



<html>
		<head> 
		<title>Engineering College </title>
		
			<link rel="stylesheet" href="style-admin.css">
		
		<link rel="stylesheet"type="text/css"href="css/bar/bar.css"/>
		<link rel="stylesheet"type="text/css"href="css/dark/dark.css"/>
		<link rel="stylesheet"type="text/css"href="css/default/default.css"/>
		<link rel="stylesheet"type="text/css"href="css/light/light.css"/>
		<link rel="stylesheet"type="text/css"href="css/nivo-slider.css"/>
		 
		<link href="style.css"rel="stylesheet"type="text/css"/>
		<link href="mystyle.css"rel="stylesheet"type="text/css"/>
		<link href="site.css"rel="stylesheet"type="text/css"/>
	</head>
	<body>
	<div style="background:#1E90FF ">
	
		<div class="fix main">
		
		
		<div class="fix header ">
		
		 
		<center>
		     <a href=""> <img src="images/eng.jpg" 

style="width:150px; height:100px;float:left;"/></a>
		     
			 <h1><a href="" style="text-

decoration:none;color:#fff;"> Engineering college</a></h1>
			 <div  class="header_marquee">
			 <marquee scrollamount="4" scrolldelay="15" 

onmouseover="this.stop()" onmouseout="this.start()" 

direction="right"><a href="" style="text-decoration:none;color:#fff;"> 

monday summer vacation will start</a></marquee>
			</div>
			</center>
			
		</div>
		<div class="fix slider">
			<div class="slider-wrapper theme-bar"/>
				<div class="nivoSlider" id="slider">
				 
				</div>
				 <div id="htmlcaption" class="nivo-

html-caption">
                
            </div>
			</div>
		</div>
	     <center>
		<div class="mainmenu">
<ul>
      <li><a href="../home.php">Home</a></li>
   <li id="blue_menu"><a href="">About</a>
      <ul>
          <li><a href="../history.php">History </a></li>
          <li><a href="../ach.php">Achievement </a></li>
     </ul>
	  </li>
	  
   <li id="blue_menu"><a href="">Facility</a>
      <ul>
          
		   <li><a href="../play.php">Play Ground</a></li>
          <li><a href="../com.php">Computer Lab</a></li>
		   <li><a href="../comRoom.php">Common Room</a></li>
     </ul>
  </li>
  <li id="blue_menu"><a href="../lib/library.php">Library</a></li>
  <li id="blue_menu"><a href="../tech/teacher.php ">Teacher</a></li>
  
  
  <li id="blue_menu"><a href=" ">Student</a>
     <ul>
	      <li><a href="../stu/res.php">Result</a></li>
		  <li><a href="../stu/exam.php">Exam</a></li>
		  <li><a href="../rout.php">Routine</a></li>
    </ul>
  
  </li>
  
  <li id="blue_menu"><a href="../stf/staff.php">Staff</a></li>
 
  <li id="red_menu"><a href="../notice.php"> NOTICE</a></li>
  
</ul>
</div>
	</center>	
	
	 
 
<form action="editr1c.php" method="POST">

<table>

<tr> 
 

<tr> 
<td>  Date : </td> 
<td> 
<select name="date">
     <option value ="Saturday"> Saturday </option> 
	 <option value ="Sunday">Sunday </option> 
	 <option value ="Monday">Monday </option> 
	 <option value ="Tuesday">Tuesday </option> 
	 <option value ="Wednesday">Wednesday </option> 
	 <option value ="Thursday"> Thursday</option> 
</select>
<br/><br/> </td>
 
</tr>



<tr> 
<td>  9.00 - 10.30 :  </td>

<td>
<input type="text" name="1st" value="<?php echo $row[2]; ?>"> <br/><br/> <td>

</tr>

<tr> 
<td>
10.30 - 12.00 :  </td>

 <td> <input type="text" name="2nd" value="<?php echo $row[3]; ?>">  <br/><br/>  </td>
 
 </tr>

 
<tr> 
<td>
12.00 - 1.00: 
</td> 


 
<td>
<input type="text" name="bk" value="<?php echo $row[4]; ?>"> <br/><br/> </td>
</tr>


 

 
<tr> 
<td>
1.00 - 2.30 : 
</td>

<td>
<input type="text" name="3rd" value="<?php echo $row[5]; ?>"> <br/><br/> </td>

</tr>

<tr>
<td>

2.30 - 4.00 : 
</td>
<td>
<input type="text" name="4th" value="<?php echo $row[6]; ?>"> <br/><br/>
</td>

</tr>
 
 <tr>
<td>

4.00 - 5.00 : 
</td>
<td>
<input type="text" name="5th" value="<?php echo $row[7]; ?>"> <br/><br/>
</td>

</tr>
 
</table>
<br/><br/>
<input type="submit" value=" Update "/>



</form>

<?php


?>


<br><br>
<ul class="pagination">
  <li> 
<a href='alladmin.php'>Admin page  </a>
</li>

</ul>


<br><br> 
<style>
ul.pagination {
    display: inline-block;
    padding: 0;
	margin-top:10;
    margin-left: ;
}

ul.pagination li {display: inline;}

ul.pagination li a {
    color: black;
    float: left;
    padding: 8px 38px;
    text-decoration: none;
	background-color:#0BE1F4;
	
}

ul.pagination li a.active {
    background-color: #4CAF50;
    color: white;
}

ul.pagination li a:hover:not(.active) {background-color: #ddd;}
</style>

  

 

 
	<div class="footer_div">
	 
	</div>
		<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
		 <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	</div>
		</body>
		</html>