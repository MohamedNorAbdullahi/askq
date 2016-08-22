<?php
error_reporting(0);
SESSION_Start();
if (! isset($_SESSION['user']))

{
header('location:login.php');
}
?>

<html>

<title> Ask Q home </title>
<head>
<style type="text/css">
#top { background:url(images/TopBar.png) repeat-x;
Height:90;
}
#top > #menu { 

Height:90px;
width:1000px;
margin:0px auto;

}

#top > #menu > #logo{
Height:90px;
float:left:
width:108px;
}

#top > #menu > #logo > div{
Height:90px;
float:left:
width:892px;
background:#fc8;
}



body{ margin:0px; 
background-color:#94B051;

 background: #fff url('images/1.jpg') repeat-x;
 background-size:cover;
}
#all{width:100%;


}
#mid{

overflow-y: scroll;
height:550px;
margin:0px auto;
border: 1px red auto;
width:45%;

}
#button{
background:#002200;
padding: 2px;
height:20;
text-align:center;
color:white;

background:url(images/BBar.png) repeat-x;
}

.login-block {
    width: 320px;
    padding: 15px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #7FA115;
    margin: 0 auto;
}

.x-block {
    width: 300px;
    padding: 0px;
    background: #fff;
    border-radius: 5px;
    border-top: 10px solid #FF8D07;
    margin: 80 top;
	
}

.y-block {
    width: 300px;
    padding: 0px;
    background: #fff;
    border-radius: 5px;
    border-top: 10px solid #2DD6E1;
    margin: 20 auto;
	
}

.q-block {
    width: 500px;
    padding: 15px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #7FA110;
    margin: 10 auto;
	
}

.a-block {
    width: 500px;
    padding: 15px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #7FA1;
    margin: 10 auto;
	
}


.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('images/b.gif') 30px center no-repeat;
    background-size: 16px 16px;
	height:100px;
}
input#ans {
    background: #fff url('images/b.gif') 30px center no-repeat;
    background-size: 16px 16px;
	height:60px;
	 border-radius: 5px;
}

input#ans:focus {
 background: #fff url('images/,.gif') 30px center no-repeat;
  
     background-size: 16px 16px;
	height:60px;
	 border-radius: 10px;
}

.login-block input#username:focus {
    background: #fff url('images/c.png') 30px center no-repeat;
    background-size: 16px 16px;
}

.login-block input#password {
    background: #fff url('images/pass.png') 20px top no-repeat;
    background-size: 16px 80px;
}


input#sea:focus {
 box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    background: #fff url('images/cc.png') 1px bottom no-repeat;
    background-size: 16px 16px;
}

input#sea {
 box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    background: #fff url('images/search.png') 1px top no-repeat;
    background-size: 16px 16px;
}

.bu#x{

 background: #7FA115;
 box-sizing: border-box;
 border-radius: 5px;
 border: 4px solid #7FA115;
 color: #fff;
 font-weight: bold;
	
}

.login-block input#password:focus {
    background: #fff url('images/pass.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #7FA115;
}

input[type=submit]#q {
    width: 100%;
    height: 40px;
    background: #7FA115;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #7FA115;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}
input[type=submit]#q:hover {
    background: #99C11E;
}



input[type=submit]#a {
    width: 20%;
    height: 20px;
    background: #7FA115;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #7FA115;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 12px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

#f {
    width: 30%;
    height: 20px;
    background: #7FA115;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #7FA115;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 12px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}
#fb {
   
    background: #7A1565;

    outline: none;
    cursor: pointer;
}

input[type=submit]#a:hover {
    background: #99C11E;
}




red{
color:red;
}
blue{
color:blue;
}
green{
color:green;
}

</style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<script src="jquery.js"></script>
    <script>
	
 $(document).ready(function(){

 
 
 
 $("#anss1").slideToggle("slow");
 $("#anss2").slideToggle("slow");
 $("#anss3").slideToggle("slow");
 $("#anss4").slideToggle("slow");
 $("#anss5").slideToggle("slow");
 $("#anss6").slideToggle("slow");
 $("#anss7").slideToggle("slow");
 $("#anss8").slideToggle("slow");
 $("#anss9").slideToggle("slow");
 $("#anss10").slideToggle("slow");

 

	
	   $(".f").click(function(){
	
$("#anss").slideToggle("slow");
    });
	
	
 
    $(".f1").click(function(){
	
$("#anss1").slideToggle("slow");
    });
	
	
	
	
	   $(".f2").click(function(){
	
$("#anss2").slideToggle("slow");
    });
	
	
	
	
	
	   $(".f3").click(function(){
	
$("#anss3").slideToggle("slow");
    });
	
	
	
	
	   $(".f4").click(function(){
	
$("#anss4").slideToggle("slow");
    });
	
	
	
	   $(".f5").click(function(){
	
$("#anss5").slideToggle("slow");
    });
	
	   $(".f6").click(function(){
	
$("#anss6").slideToggle("slow");
    });
	
	
	
	   $(".f7").click(function(){
	
$("#anss7").slideToggle("slow");
    });
	
	
   $(".f8").click(function(){
	
$("#anss8").slideToggle("slow");
    });


   $(".f9").click(function(){
	
$("#anss9").slideToggle("slow");
    });


   $(".f10").click(function(){
	
$("#anss10").slideToggle("slow");
    });	
	
	 $("#fb").click(function(){
	
        $("#q-block").slideToggle("slow");
    });

}



);



  window.onload = function() {
 
    $("#q-block").slideup("slow");
 $("#q-block").slidedown("slow");
};
 
 </script>
	
	

<div id="top">.<form method="post" action="search.php">
<div id="menu"><center> <font color="White" size="3">Ask Q home : Hi <font color="yellow">
<?php echo  $_SESSION['user']; ?>
</font>
 Welcome again Ask or Answer Questions</font> &nbsp;  &nbsp; <font color="Yellow" >Search Question :</font> <right> <input type="text" width="10" id="sea" name="search"> &nbsp; <input type="submit" value="Search" class="bu" id="x" > &nbsp;  &nbsp; <a href="logout.php" color="pink" class="bu" id="x" style=';'><b>Log out</b></a></form></center>
<input type='Button' id='fb' style="float:right;background-color:#ccff99;" value='View/Hide add Questions Block'>
<div id="logo"><img src="images/logo.png">

</div>



</div>
</div>
<div style="float:left;   padding: 15px;">
<br>
<br><br>
<div style="float:left" class="x-block">
<br>
<center>
<b>--- Statistics ---</b>
<hr>

<?php

$connection = mysql_connect("localhost", "root", "");

    $dbcheck = mysql_select_db("b32_16212103_askq_db");

if (!$connection) 
{
    die('Could not connect: ' . mysql_error());
} 
else {

 $sql1 = "select count(qid) from tblquestions";
  $sql2 = "select count(username) from tblusers";
   $sql3 = "select count(aid) from tblanswers";
$rs1=mysql_query($sql1);
$row1=mysql_fetch_array($rs1);

$rs2=mysql_query($sql2);
$row2=mysql_fetch_array($rs2);

$rs3=mysql_query($sql3);
$row3=mysql_fetch_array($rs3);


echo "Total Question : <b> $row1[0] </b><br>
Total Users : <b>$row2[0]</b><br>
Total Answers : <b>$row3[0]</b><br>
";
}
?>
<hr>
</center>
</div>
<br>
<br>
<br><br>
<div style="float:left" class="y-block">
<br>
<center>
<b>Notifications</b>



<hr>
<br>
<b> Website Rules </b>
<br>
<br>
Please Read the site's Rules before posting Questions:<br>

- Make question Clear<br>
-make them Understandable by all <br>
-Post questions that has meaning and value <br>

<hr>
</center>
</div>

</div>






<div style="Float:right;">



<div class="login-block" style="Float:right" id="q-block">
<form method="POST" action="addquestion.php">

   
    <input type="textfield" height="20" value="" placeholder=" Got Question Post it Now ! !" id="username" name="q"/>
   
  <center><input type="submit" value="POST Question" id="q"></form></center>

	
</div>

</div>



<div id="mid" style="Float:center">

<div style="float:center">


<div style="float:center; margin: 20 auto;">

<?php

$connection = mysql_connect("localhost", "root", "");
  $dbcheck = mysql_select_db("askq_db");
if (!$connection) 
{
    die('Could not connect: ' . mysql_error());
} 
else {

 $sql = "select * from tblquestions";
$rsx=mysql_query($sql);
//echo "<table border=1>";

$ii;
while($rowx=mysql_fetch_array($rsx))
{
$ii=$ii+1;
echo"<div class='q-block'>";


	
	echo "Question ID :<red><b>".  $rowx[0];
	echo " &nbsp; &nbsp; &nbsp; </b>Asked by:</red><blue><b>".  $rowx[1];
	echo "</b></blue> &nbsp; &nbsp; &nbsp; at <blue><b>".  $rowx[3];
  echo "<hr></blue></b><br><b>".$rowx[2]."</b><br>";
  $qid=$rowx[0];
   $sql = "select count(aid) from tblanswers where qid=$qid";
$rsd=mysql_query($sql);

while($rowd=mysql_fetch_array($rsd))
{
$count=$rowd[0];
if ($count==0)
{
echo "<blue><b> No answer Yet </b></blue> <red> Be the first one to answer this question</red> &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; <hr>"; 
}
else
{
echo "<blue><b> $count </b></blue> <red> Answer(s) </red> &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; <input type='submit' id='f' class='f".$ii."' value='View/Hide Answers'> <hr></div> <div class='a-block' id='anss".$ii."'>"; 
}

}

  $sqls = "select username,answer_date,answer from tblanswers where qid=$qid";
$rss=mysql_query($sqls);
$i=0;
while($rows=mysql_fetch_array($rss))
{

$user=$rows[0];
$ans=$rows[2];
$d=$rows[1];
echo "<blue><b> $user </b></blue> at <green> $d</green> &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; <br> $ans  <hr>"; 

}


  echo "
  
  
  
  <form method='POST' action='addans.php'>";
  echo "
  <input type='hidden' name='id' value='$qid'/>";
  echo"<br><br>
  <input type='text'  placeholder='              add answer here' id='ans' name='ans'><br>";
  echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
  <input type='submit' id='a' value='Answer'>
  
  </form>
  
  
  
  ";
 
 echo  $_SESSION['ainsert'];
  
echo"</div>";

}

}

?>








</div>


&nbsp;
</div>




</div>


<div id="button">
&copy Ask Q 2015  
</div>

    <script>
	
 $(document).ready(function(){
    $("#f").click(function(){
	
        $("#anss").slideToggle("slow");
    });
	</script>
</body>