<?php


$q = $_POST["q"];

if ($q=="")
{
echo" Empty Question cant be processed !";
	}
	else
	{
	

	SESSION_Start();
	$_SESSION['qinsert']="";
	unset($_SESSION['qinsert']);

	
if (!$connection) {
    die('Could not connect: ' . mysql_error());
} 
else {
  
    $dbcheck = mysql_select_db("askq_db");
    if (!$dbcheck) {
        echo mysql_error();} 
else {
		// hubin
	$qid=0;	
	$date=date('d/m/y-H:ia');
	$user= $_SESSION['usern'];
	
		 $sql = "select max(qid) from tblquestions";
$rs=mysql_query($sql);
while($row=mysql_fetch_array($rs))

$qid=$row[0]+1;
}
		
		$sql = "insert into tblquestions (qid,username,question,question_date) values($qid,'$user','$q','$date')";
        $result = mysql_query($sql);
		$n=mysql_num_rows($result);
		
        if ($n == 0)
		{
		$_SESSION['qinsert']="<hr><font color='blue'>Your Question Was Posted .</font>";
		header('location:index.php');
		
		}
		else
		{
	$_SESSION['qinsert']="<hr><font color='red'></font>";
		header('location:index.php');
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