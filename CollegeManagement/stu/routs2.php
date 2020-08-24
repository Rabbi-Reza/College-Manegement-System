 
 

 <?php
 
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `routs2` WHERE CONCAT(`date`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `routs2`";
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
		

 
	<ul>
	 
	 
 <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
			
	</style>
 


 <h1 style="color:black; ">Class Routine for Science , 2nd year .. </h1>
<br>
 <form action="rout.php" method="post">
        <input type="text" name="valueToSearch" placeholder=" Search by day"><br><br>
            <input type="submit" name="search" value="Search"><br><br>
            
            <table>
                <tr style="color:white;background:black;margin-left:150px;margin-top:25px">
                    <th>Day\Time </th>
                    <th>9-10.30</th>
             
                    <th>10.30-12.00</th>
					<th>12.00-1.00</th>
					 <th>1.00-2.30</th>
                    
						 <th>2.30-4.00</th>
                    <th>4.00-5.00</th>
					 
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
		 
			 
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        		<br><br>	

 

<br /><br />
 
 

<br><br>        
 
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


 