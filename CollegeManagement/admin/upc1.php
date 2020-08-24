 
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
 
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `routc1` WHERE CONCAT(`date`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `routc1`";
    $search_result = filterTable($query);
}
 
// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "collegedb");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>


 

<html>
	<head> 
		<title> college web </title>
		
			<link rel="stylesheet" href="style-admin.css">
		
		<link 

rel="stylesheet"type="text/css"href="css/bar/bar.css"/>
		<link 

rel="stylesheet"type="text/css"href="css/dark/dark.css"/>
		<link 

rel="stylesheet"type="text/css"href="css/default/default.css"/>
		<link 

rel="stylesheet"type="text/css"href="css/light/light.css"/>
		<link rel="stylesheet"type="text/css"href="css/nivo-

slider.css"/>
		 
		<link 

href="style.css"rel="stylesheet"type="text/css"/>
		<link 

href="mystyle.css"rel="stylesheet"type="text/css"/>
		<link href="site.css"rel="stylesheet"type="text/css"/>
	</head>
	<body>
	<div style="background:#D56116;margin-left: 150px;margin-

top:25px">
	
		<div class="fix main">
		
		
		<div class="fix header ">
		
		 
		<center>
		     <a href=""> <img src="images/eng.jpg" 

style="width:150px; height:100px;float:left;"/></a>
		     <h2><a href="" style="text-

decoration:none;color:#fff;">Department of Computer Science and 

Engineering</a></h2>
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
				<img src="images/toystory.jpg" alt ="" 

title="#htmlcaption"/>
				<img src="images/walle.jpg" alt ="" 

title="#htmlcaption"/>
				<img src="images/up.jpg" alt 

=""title="#htmlcaption"/>
				<img src="images/nemo.jpg" alt 

=""title="#htmlcaption"/>
				</div>
				 <div id="htmlcaption" class="nivo-

html-caption">
                <strong>This site</strong> is developed by <em>Md. 

Mahabub Bakhtiar</em> <a href="#"> details</a>. 
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
          <li><a href="../lab.php">Laboratory</a></li>
          <li><a href="../canteen.php">Canteen</a></li>
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
 
 


 <h1 style="color:black; ">Routine info .. </h1>
<br>
 <form action="ups1.php" method="post">
            <input type="text" name="valueToSearch" placeholder=" Search by name"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr style="color:white;background:black;margin-left:150px;margin-top:25px">
                    <th>Day\Time </th>
                    <th>9.00-10.30</th>
             
                    <th>10.30-12.00</th>
					<th>12.00-1.00</th>
					 <th>1.00-2.30</th>
                    
						 <th>2.30-4.00</th>
                    <th>4.00-5.00</th>
					<th> Edit </th>
					 
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
				
                <tr style="color:black;background:skyblue;text-align:center;margin-left:250px;margin-top:25px">
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['1st'];?></td>
                    <td><?php echo $row['2nd'];?></td>
                    <td><?php echo $row['bk'];?></td>
					<td><?php echo $row['3rd'];?></td>
					 <td><?php echo $row['4th'];?></td>
					 <td><?php echo $row['5th'];?></td>
					 
				
			         <td><?php 	echo "   <a href='editc1.php?edit=$row[ID]'>Edit</a> "; ?> </td>
                   
			 
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        		<br><br>	

 

<br /><br />
 
 
 
<br><br>   
 <ul class="pagination">
  <li> 
<a href='alladmin.php'>Admin page  </a>
</li>
 
<br><br>
<div style="margin-top:3px; margin-left:340px; width:90px;color:#fff; display:block-inline">
<table style="margin-top:20px">
<tr >
<td style="background:#D55E0F; border-radius:150px; text-align:right;color:#fff">
     
<a href='logout.php' style="color:#fff;text-decoration:none">Log Out </a>
 </tr>
</table>
</div>




</ul>

	<div class="header_left_two">
		    <img src="flag.gif" height="100px" width="250px"/> 

<input id="input_one" type="text" name="" value="search"/>
			 <input id="input_two" type="button" 

value="OK"/>
			
		 </div>
	
	<table>
	<tr style="background:#F9EE9E">
	<td style="background:#F9EE9E;border-top:2px solid #ddd; 

border-bottom:2px solid #ddd; text-align:center;width:965px;font-

size:20px"><a><img src="new.gif" >News and Events</a><br><a 

href=""><img src="hand2.jpg">Special thanks to Prime minister<img 

src="new.gif"></a><br><a href=""><img src="hand2.jpg">Special thanks 

to BTCL and Teletalk<img src="new.gif"></a><br><a href=""><img 

src="hand2.jpg">Yearly debeting will held on next sonday<img 

src="new.gif"></a><br><a href=""><img src="hand2.jpg">We achieved 

national award<img src="new.gif"></a><br></td>
	<td>
	 <script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString

();
}
</script>
			 <div style="font-size:20px;margin-

bottom:0px;margin-

left:150px;background:#E20404;width:200px;height:30px;text-

align:center;display:block;color:#fff">
       <p id="demo"></p>
    </div>

	</td>
	</tr>
	</table>
	
<table style="margin-left:75px;margin-top:20px">
 <tr>
     <td style="margin-left:150px;width:250px;background:#0D5C63"> <a 

href=""><img src="email.jpg" href="gmail.com"/></a></td>
	 <td style="width:200px;background:#0D5C63;color:#fff"><p 

style="margin-top:50px;">Contact:<br>

Swapan Kumar Biswas<br>
Assistant Librarian<br>
Cell: +88 01914121245<br>

Md. Jahangir Kabir<br>
Assistant Librarian<br>
Cell: +88 01983125848<br>
Email: jahangirkabir127[at]yahoo.com</p></td>
<td style="width:150px;background:#0D5C63"><a href=""><p 

style="color:#fff;text-decoration:none">follow us:</p><br><img 

src="fb.jpg" height="80px" width="80px"/></a></td>
<td style="width:308px;background:#0D5C63;color:#fff"><p>Quick 

links:</p><br><a href="" style="color:#fff"><img src="hand2.jpg" 

href="gmail.com"/>Notice</a><br><a href="" style="color:#fff"><img 

src="hand2.jpg" href="gmail.com"/>Read more</a><br><a href="" 

style="color:#fff"><img src="hand2.jpg" href="gmail.com"/>Social 

work</a><br><a href="" style="color:#fff"><img src="hand2.jpg" 

href="gmail.com"/>Annual ceremony</a><br><a href="" 

style="color:#fff"><img src="hand2.jpg" 

href="gmail.com"/>Sports</a></td>
	 <td style="width:215px;background:#0D5C63;color:#fff"><p 

style="margin-top:50px;">Contact:<br>

Swapan Kumar Biswas<br>
Assistant Librarian<br>
Cell: +88 01914121245<br>

Md. Jahangir Kabir<br>
Assistant Librarian<br>
Cell: +88 01983125848<br>
Email: jahangirkabir127[at]yahoo.com</p></td>
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

<div style="margin-top:3px; margin-left:340px; width:90px;color:#fff; 

display:block-inline">
<table style="margin-top:20px">
<tr >
<td style="background:#D55E0F; border-radius:10px; text-

align:center;color:#fff"><a href="" style="color:#fff;text-

decoration:none">Admission</a></td>
<td style="background:#D55E0F; border-radius:10px; text-

align:center;color:#fff"><a href="" style="color:#fff;text-

decoration:none">Sports</a></td>
<td style="background:#D55E0F; border-radius:10px; text-

align:center;color:#fff"><a href="" style="color:#fff;text-

decoration:none">Cricket</a></td>
<td style="background:#D55E0F; border-radius:10px; text-

align:center;color:#fff"><a href="" style="color:#fff;text-

decoration:none">Students</a></td>
<td style="background:#D55E0F; border-radius:10px; text-

align:center;color:#fff"><a href="" style="color:#fff;text-

decoration:none">Teachers</a></td>
</tr>
</table>
</div>

<ul class="pagination">
   <li><a> Go to page</a></li>
  <li><a href="#">«</a></li>
  <li><a href="#">1</a></li>
  <li><a class="active" href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">6</a></li>
  <li><a href="#">7</a></li>
  <li><a href="#">»</a></li>
</ul>

<center>
	<div class="footer_div">
	<p style="align:center; font-size:10px;">@Without permission 

copy any part of code is illegal-Md. Mahabub Bakhtiar</p>
	</div>
		<script type="text/javascript" src="js/jquery-

1.9.0.min.js"></script>
		<script type="text/javascript" 

src="js/jquery.nivo.slider.pack.js"></script>
		 <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	</div>
		</body>
		</html>



 