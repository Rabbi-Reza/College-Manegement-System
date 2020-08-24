 <?php
require ('sql_connect.php');

 


if (isset($_POST['submit'])){

$logname =$_POST['uname'];
  

if (!$_POST['uname'] | !$_POST['pass'] )
 {
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='admin.php'
        </SCRIPT>");
exit();
     }

 

$username=mysql_escape_string($_POST['uname']);
$password=mysql_escape_string($_POST['pass']);



$sql= mysql_query("SELECT * FROM `logadmin` WHERE `username` = '$username' AND `password` = '$password'");

 	 

if(mysql_num_rows($sql) > 0)
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login Succesful !!')
                     
	 
        window.location.href='alladmin.php'
        </SCRIPT>");

            session_start();
		$_SESSION['name']='Nirzhor';
                exit();
}
else{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong username password combination.Please re-enter.')
        window.location.href='admin.php'
        </SCRIPT>");
exit();
}
}
else{
}
?>
 