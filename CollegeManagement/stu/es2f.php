
<?php
 
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `es2f` WHERE CONCAT(`roll`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `es2f`";
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
	<div style="background:#D56116;margin-left:150px;margin-top:25px">
		<div class="fix main">
		<div class="fix header">
		<center>
		     <a href=""><img src="eng.jpg" style="width:150px; height:100px;float:left;"/></a>
		     <h2><a href="" style="text-decoration:none;color:#fff;">Department of Computer Science and Engineering</a></h2>
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
					<li><a href="history.php">History</a></li>
					<li><a href="student.php">student</a></li>
					<li><a href="res.php">Results</a></li>
					 
					 
				</ul>
			</div>
             	 
                  <h1 style="color:black; ">Routine for exams </h1>
<br>
 <form action="es2f.php" method="post">
          
            
            <table>
                <tr style="color:white;background:black;margin-left:150px;margin-top:25px">
                    <th>Subject</th>
                    <th>Date</th>
                     
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr style="color:black;background:skyblue;text-align:center;margin-left:250px;margin-top:25px">
                    <td><?php echo $row['sub'];?></td>
                    <td><?php echo $row['date'];?></td>
                     
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        		<br><br>	
		</div>
		
	
 <table style="margin-left:75px">
 <tr>
     <td style="margin-left:150px;width:150px;background:#0D5C63"> <a href=""><img src="email.jpg" href="gmail.com"/></a></td>
	 <td style="width:200px;background:#0D5C63;color:#fff"><p style="margin-top:50px;">Contact:<br>

Swapan Kumar Biswas<br>
Assistant Librarian<br>
Cell: +88 01914121245<br>

Md. Jahangir Kabir<br>
Assistant Librarian<br>
Cell: +88 01983125848<br>
Email: jahangirkabir127[at]yahoo.com</p></td>
<td style="width:150px;background:#0D5C63"><a href=""><p style="color:#fff;text-decoration:none">follow us:</p><br><img src="fb.jpg" height="80px" width="80px"/></a></td>
<td style="width:208px;background:#0D5C63;color:#fff"><p>Quick links:</p><br><a href="" style="color:#fff"><img src="hand2.jpg" href="gmail.com"/>Notice</a><br><a href="" style="color:#fff"><img src="hand2.jpg" href="gmail.com"/>Read more</a><br><a href="" style="color:#fff"><img src="hand2.jpg" href="gmail.com"/>Social work</a><br><a href="" style="color:#fff"><img src="hand2.jpg" href="gmail.com"/>Annual ceremony</a><br><a href="" style="color:#fff"><img src="hand2.jpg" href="gmail.com"/>Sports</a></td>
	 <td style="width:215px;background:#0D5C63;color:#fff"><p style="margin-top:50px;">Contact:<br>

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
<table>
<tr >
<td style="background:#2E99C3; border-radius:10px; text-align:center;color:#fff"><a href="" style="color:#fff;text-decoration:none">Admission</a></td>
<td style="background:#2E99C3; border-radius:10px; text-align:center;color:#fff"><a href="" style="color:#fff;text-decoration:none">Sports</a></td>
<td style="background:#2E99C3; border-radius:10px; text-align:center;color:#fff"><a href="" style="color:#fff;text-decoration:none">Cricket</a></td>
<td style="background:#2E99C3; border-radius:10px; text-align:center;color:#fff"><a href="" style="color:#fff;text-decoration:none">Students</a></td>
<td style="background:#2E99C3; border-radius:10px; text-align:center;color:#fff"><a href="" style="color:#fff;text-decoration:none">Teachers</a></td>
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
	<p style="align:center; font-size:10px;">@Without permission copy any part of code is illegal-Md. Mahabub Bakhtiar</p>
	</div>
	</center>
	</div>
		</body>
		</html>