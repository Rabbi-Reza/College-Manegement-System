 
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
    $query = "SELECT * FROM `s2f` WHERE CONCAT(`roll`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `s2f`";
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
<title>Engineering College </title>
<link rel="stylesheet"type="text/css"href="css/bar/bar.css"/>

<link href="style.css"rel="stylesheet"type="text/css"/>
<link href="mystyle.css"rel="stylesheet"type="text/css"/>
<link href="site.css"rel="stylesheet"type="text/css"/>
</head>

<style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>

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
 
 


 <h1 style="color:black; ">Result info .. </h1>
<br>
 <form action="ups2f.php" method="post">
            <input type="text" name="valueToSearch" placeholder=" Search by name"><br><br>
            <input type="submit" name="search" value="Search"><br><br>
            
            <table>
                <tr style="color:white;background:black;margin-left:150px;margin-top:25px">
                   <th>Roll</th>
                    <th>Grade</th>
						 <th>Edit</th>
                    <th>Delete</th> 
                </tr>

      <!-- populate table from mysql database -->
                 
				
               <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr style="color:black;background:skyblue;text-align:center;margin-left:250px;margin-top:25px">
                    <td><?php echo $row['roll'];?></td>
                    <td><?php echo $row['grade'];?></td>
					 
				
			         <td><?php 	echo "   <a href='edits2f.php?edit=$row[ID]'>Edit</a> "; ?> </td>
                   <td><?php 	echo "   <a href='deletes2f.php?del=$row[ID]'>Delete</a> "; ?> </td>
			 
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
</li><br>
 <ul class="pagination">
  <li> 
<a href='datas2f.php'>Insert New Data </a>
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




</ul>

	
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
 

 
 
	<div class="footer_div">
	 
	</div>
		</body>
		</html>