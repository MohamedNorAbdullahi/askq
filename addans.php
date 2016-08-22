<?php

//echo" KKKKKKKKKKKKKKKKKKKKKKKKK";

 $id = $_POST["id"];
$ans = $_POST["ans"];

if ($ans=="")
{
echo" Answer cant be Empty!";
}
else
{

	SESSION_Start();
	$_SESSION['ainsert']="";
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
	$qid=0;	
	$date=date('d/m/y-H:ia');
	$user= $_SESSION['usern'];
	
		 $sql = "select max(aid) from tblanswers";
$rs=mysql_query($sql);
while($row=mysql_fetch_array($rs))

$qid=$row[0]+1;
}
		
		$sql = "insert into tblanswers (aid,username,answer,answer_date,qid) values($qid,'$user','$ans','$date',$id)";
        $result = mysql_query($sql);
		$n=mysql_num_rows($result);
		
        if ($n == 1)
		{
		$_SESSION['ainsert']="<hr><font color='blue'>Your Answer Was Posted Succesfully. .</font>";
		header('location:index.php');
		
		}
		else
		{
	$_SESSION['ainsert']="<hr><font color='red'>.</font>";
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