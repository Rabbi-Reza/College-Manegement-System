
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
<link href="style.css"rel="stylesheet"type="text/css"/>
<link href="mystyle.css"rel="stylesheet"type="text/css"/>
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
		
		
	  
		<div class="fix maincontent">
			<div class="fix sidebar">
			
				<ul>
					<li><a href="../home.php">Home</a></li>
					<li><a href="../history.php">History</a></li>
				 
					<li><a href="availBook.php">Available Books</a></li>
					 
					 
				</ul>
			</div>
             	<p style="left:500px;width:955px;font-weight:normal; line-height:25px;background:#93E7EF"><b style="text-decoration:underline">Available Books in Library</b><br><img src="library.jpg" height="200px" width="450px"> </p>   
<br>
                  <h1 style="color:black; ">All Books list .. </h1>
<br>
 <form action="availBook.php" method="post">
            <input type="text" name="valueToSearch" placeholder=" Search"><br><br>
            <input type="submit" name="search" value="Search"><br><br>
            
            <table>
                <tr style="color:white;background:black;margin-left:150px;margin-top:25px">
                    <th>Id</th>
                    <th>Reffered Book</th>
                    <th>Writter Name</th>
                    <th>Subject</th>
					<th>Quantity</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr style="color:black;background:skyblue;text-align:center;margin-left:250px;margin-top:25px">
                    <td><?php echo $row['ID'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['writter'];?></td>
                    <td><?php echo $row['subject'];?></td>
					<td><?php echo $row['quantity'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        		<br><br>	
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
 <div class="footer_div">
	 
	</div>
		</body>
		</html>