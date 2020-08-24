 
 
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
		     <a href=""> <img src="images/eng.jpg" style="width:150px; height:100px;float:left;"/></a>
		 
			 <h1><a href="" style="text-decoration:none;color:#fff;"> Engineering college</a></h1>
			 <div  class="header_marquee">
			 <marquee scrollamount="4" scrolldelay="15" onmouseover="this.stop()" onmouseout="this.start()" direction="right"><a href="" style="text-decoration:none;color:#fff;"> monday summer vacation will start</a></marquee>
			</div>
			</center>
			
		</div>
		<div class="fix slider">
			<div class="slider-wrapper theme-bar"/>
				 
				 <div id="htmlcaption" class="nivo-html-caption">
                
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
		  <li><a href="../stu/rout.php">Routine</a></li>
    </ul>
  
  </li>
  
  <li id="blue_menu"><a href="../stf/staff.php">Staff</a></li>
 
  <li id="red_menu"><a href="../notice.php"> NOTICE</a></li>
  
</ul>

</div>

	<style>
ul.pagin {
    display: inline-block;
    padding: 0;
	margin-top:10;
    margin-left: 75;
}

ul.pagin li {display: inline;}

ul.pagin li a {
    color: black;
    float: left;
    padding: 8px 39px;
    text-decoration: none;
	background-color:lightblue;
	
}

ul.pagina li a.active {
    background-color: #4CAF50;
    color: white;
}

ul.pagin li a:hover:not(.active) {background-color: #ddd;}
</style>

<ul class="pagin">
    
  <li><a href="logout.php">logout</a></li>
  
  </ul>
	</center>	
	
	<style>
ul.pagination {
    display: inline-block;
    padding: 0;
	margin-top:10;
    margin-left: 75;
}

ul.pagination li {display: inline;}

ul.pagination li a {
    color: black;
    float: left;
    padding: 8px 39px;
    text-decoration: none;
	background-color:#0BE1F4;
	
}

ul.pagination li a.active {
    background-color: #4CAF50;
    color: white;
}

ul.pagination li a:hover:not(.active) {background-color: #ddd;}
</style>

 

<ul class="pagination">
    
  <li><a href="uptech.php">Update teacher info</a></li>
   <li><a href="upstaff.php">Update staff info</a></li>
   
 
 
 
    <li><a href="selrout.php">Update routine info</a></li>
	 <li><a href="uplib.php">Update library info</a></li>
   
</ul>
	  
	<br>
	<br>
	
	<table>
	<tr style="background:#F9EE9E">
	 
	<td>
	 <script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
			 <div style="font-size:20px;margin-bottom:0px;margin-left:150px;background:#E20404;width:200px;height:30px;text-align:center;display:block;color:#fff">
       <p id="demo"></p>
    </div>

	</td>
	</tr>
	</table>

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