<?php
ob_start();
session_start();


if($_SESSION['name']!='Nirzhor')
{
	header('location: admin.php');


}
include('sql_connect.php');

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
		 
 <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
			
	</style>

    

Please Input Staff Data!!<br><br>

       <form style=" color:black; margin-left:340px; "; name="form" method="post" action="insertstaff.php">

    Full Name : <input name="num" type="text"><br><br>
	   
       Department :  <input name="dept" type="text"><br><br>
       Phone : <input name="phn" type="text"><br><br>
    
       <input type="submit" name="submit" value="Insert"><br>
      </form>
     


	 
 
		<br /><br />
 <ul class="pagination">
  <li> 
<a href='upstaff.php'>All Inserted Datas  </a>
</li>

</ul>

<br><br>
<ul class="pagination">
  <li> 
<a href='alladmin.php'>Admin page  </a>
</li>

</ul>

<br><br>   

<div style="margin-top:3px; margin-left:340px; width:90px;color:#fff; display:block-inline">
<table style="margin-top:20px">
<tr >
<td style="background:#D55E0F; border-radius:150px; text-align:right;color:#fff">
     
<a href='logout.php' style="color:#fff;text-decoration:none">Log Out </a>
 </tr>
</table>
</div>


 
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