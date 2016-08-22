<?php
$uname = $_POST["username"];
$pass = $_POST["pass"];

	SESSION_Start();
unset($_SESSION['failed']);
unset($_SESSION['qinsert']);

$connection = mysql_connect("localhost", "root", "");
if (!$connection) {
    die('Could not connect: ' . mysql_error());
} else {
  
    $dbcheck = mysql_select_db("askq_db");
    if (!$dbcheck) {
        echo mysql_error();} 
		else {
	  $sql = "select fullname from tblusers where username='$uname' and password='$pass'";
        $result = mysql_query($sql);
        if (mysql_num_rows($result) > 0)
		{
		while($data=mysql_fetch_array($result)){
         $_SESSION['user']=$data[0];
		  $_SESSION['usern']=$uname;
		}
		
		header('location:index.php');
		}
		else{  
	
		$_SESSION['failed'] ="Oh Sorry Login faild please check username and password !";
		echo "<p>Sorry UserName or Password is incorect. </p>\n"; 
		header('location:login.php');
		}
      
	
    }
}
?>