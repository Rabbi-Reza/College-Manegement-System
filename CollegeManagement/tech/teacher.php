<?php
 
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `teacher` WHERE CONCAT(`name`,`dept`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `teacher`";
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
<link href="style.css"rel="stylesheet"type="text/css"/>
<link href="mystyle.css"rel="stylesheet"type="text/css"/>
</head>

<style>
            table,tr,th,td
            {
                border: 3px solid black;
            }
        </style>
		
	<body>
	<div style="background:#1E90FF ">
		<div class="fix main">
		<div class="fix header">
		<center>
		     <a href=""><img src="eng.jpg" style="width:150px; height:100px;float:left;"/></a>
		     
			 <h1><a href="" style="text-decoration:none;color:#fff;"> Engineering College</a></h1>
			 <div  class="header_marquee">
			 <marquee scrollamount="4" scrolldelay="15" onmouseover="this.stop()" onmouseout="this.start()" direction="right"><a href="" style="text-decoration:none;color:#fff;"> monday summer vacation will start</a></marquee>
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
		
		
	  
		<div class="fix maincontent">
			<div class="fix sidebar">
			
				<ul>
					<li><a href="../home.php">Home</a></li>
					<li><a href="../history.php">History</a></li>
			 
					<li><a href="teacher.php">All Teachers</a></li>
					 <br><br>
					 <form action="teacher.php" method="post">
            <input type="text" name="valueToSearch" placeholder=" Search"><br><br>
            <input type="submit" name="search" value="Search"><br><br>
            
             
        
        </form>
				</ul>
			</div>
       
		   
		  <table>
      <!-- populate table from mysql database -->
            <?php while($row = mysqli_fetch_array($search_result)):?>
              <tr style="color:black;background:skyblue;  margin-left:250px;margin-top:25px"><td>
                   Name:  <?php echo $row['name'].'<br>';?> 
                    Designation : <?php echo $row['designation'].'<br>';?> 
                     Department :<?php echo $row['dept'].'<br>';?> 
                     Contact :<?php echo $row['phone'].'<br>';?> 
					 Email : <?php echo $row['email'].'<br>';?> <br> 
               </td></tr>
				<br><br>
                <?php endwhile;?>
            </table>
		 
		</div>
		
 
	
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

<div style="margin-top:3px; margin-left:340px; width:90px;color:#fff; display:block-inline">
 
</div>

 <div class="footer_div">
	 
	</div>
 

 
	 
		</body>
		</html>