<html>

<title> sign up - Ask Q </title>
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
 background: #fff url('images/1.jpg') repeat-x;
 background-size:cover;
 }
#all{width:100%;

}
#mid{

height:600px;
margin:0px auto;

width:70%;


}
#button{
background:#002200;
padding: 24px;
text-align:center;
background:url(images/TopBar.png) repeat-x;
}
.logo {
    width: 213px;
    height: 36px;
    background: url('images/loginaskq.png') no-repeat;
    margin: 3px auto;
}

.login-block {
    width: 320px;
    padding: 10px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #7FA115;
    margin: 0 auto;
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

.login-block input#fullname {
    background: #fff url('images/user.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#email {
    background: #fff url('images/user.png') 20px top no-repeat;
    background-size: 16px 80px;
}


.login-block input#username {
    background: #fff url('images/user.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('images/user.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('images/pass.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('images/pass.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #7FA115;
}

input[type=submit] {
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
input[type=submit]:hover {
    background: #99C11E;
}

</style>

</head>


<div id="top">.
<div id="menu"><center> <font color="White" size="3">Ask Q home : Welcome Guest !</font> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font color="Yellow" >Please sign up using below form or login if you have an account  :</font> <a href="login.php"><button value="Search">login now! &nbsp; </button></a></center>

<div id="logo"><img src="images/logo.png"></div>



</div>
</div>


<div id="mid">
&nbsp;
<div class="logo"></div>
<div class="login-block">
<form method="POST" action="register.php">

    <h1>Create New Account</h1>
	<?php
	SESSION_Start();
	
	  if (! isset($_SESSION['ff'])) 
	  {
	  }
	  else
	{
	echo "  <font color='red'>Error cant create account ; Please reveiew these issues:  ".$_SESSION['ff'];
	echo"</font>";

	}
	?>
	<input type="text" value="" placeholder="Your Full Name" id="fullname" name="fullname"/>
	<input type="text" value="" placeholder="Your Email" id="email" name="email"/>
    <input type="text" value="" placeholder="Username" id="username" name="username"/>
	
    <input type="password" value="" placeholder="Password" id="password" name="pass1" />
	<input type="password" value="" placeholder="repeat Password" id="password" name="pass2" />
	
  <center><input type="submit" value="create Account"></center>
	<hr>
	<center><b>Design</b> and <b>development</b> of<br> Mohamed Nor Abdullah <center>
</div>


</div>

<div id="button">
&copy Ask Q 2015  
</div>


</body>