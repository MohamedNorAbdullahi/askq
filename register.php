<?php


$fullname = $_POST["fullname"];
$email = $_POST["email"];
$uname = $_POST["username"];
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
$errors=0;
	SESSION_Start();
unset($_SESSION['ff']);
$connection = mysql_connect("localhost", "root", "");
if (!$connection) {
    die('Could not connect: ' . mysql_error());
} 
else {
  
    $dbcheck = mysql_select_db("askq_db");
    if (!$dbcheck) {
        echo mysql_error();} 
else {
		// hubin
		
		$sql = "select fullname from tblusers where username='$uname'";
        $result = mysql_query($sql);
		$n=mysql_num_rows($result);
		
        if ($n > 0)
		{
		$errors=1;
		$_SESSION['ff']="Username $uname already exists please choose another one.";
		header('location:signup.php');
		}
		
	
		
		
		
		
		if ($fullname=="" || $email=="" || $uname=="" || $pass1=="")
		{
		$errors=1;
		$_SESSION['ff']="Fullname,Email and user Naame  cant be blank";
		header('location:signup.php');
		}
		if($pass1!=$pass2)
		{
		$errors=1;
		$_SESSION['ff']="Password Mismatch ; please correctly repeat the password !";
		header('location:signup.php');
		}
		
		// diiwaan galiin
		
		
		
	  $sql = "insert into tblusers (fullname,email,username,password) values('$fullname','$email','$uname','$pass1')";
	  
	  
	  
        $result = mysql_query($sql);
       // if (mysql_num_rows($result) > 0)        
		
		if ($errors==0)
		{
		$_SESSION['failed']=" $fullname your account has been created successfully ; please login it now to proceed !";
	header('location:login.php');
		}
		
		
		//
	
		/* else 
		{  
		$_SESSION['failed'] ="Sorry : Error in Database Cant create your account now !";
	
		header('location:signup.php');
		} */
      
	
    }
}
?>