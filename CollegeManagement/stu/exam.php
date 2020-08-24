
<?php
 
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `books` WHERE CONCAT(`name`, `writter`, `subject` ) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `books`";
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
		<div class="fix header">
		<center>
		     <a href=""><img src="eng.jpg" style="width:150px; height:100px;float:left;"/></a>
		 
			 <h1><a href="" style="text-decoration:none;color:#fff;"> Engineering College</a></h1>
			 <div  class="header_marquee">
			 <marquee scrollamount="4" scrolldelay="15" onmouseover="this.stop()" onmouseout="this.start()" direction="right"><a href="" style="text-decoration:none;color:#fff;"> monday summer vacation will start</a></marquee>
			</div>
			</center>
			
		</div>
		</div>
		
		
	 <div class="mainmenu">
<ul>
       
   <li id="blue_menu"><a href="">1st Year</a>
      <ul>
          <li><a href="e1sci.php">Science </a>
		     
		  </li>
          <li><a href="e1com.php">Commerce </a>
		          
		  </li>
     </ul>
   </li>
	  
   <li id="blue_menu"><a href="">2nd Year</a>
      <ul>
            <li><a href="e2sci.php">Science </a>
			   
			</li>
          <li><a href="e2com.php">Commerce </a>
		     
		  </li>
		 
     </ul>
  </li>
  
  
  
</ul>
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
 
 <ul class="pagination">
 
  <li><a href="../home.php">Home</a></li>
   
</ul>

<center>
	<div class="footer_div">
 
	</div>
	</center>
	</div>
		</body>
		</html>