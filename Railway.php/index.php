<HTML>
<HEAD>
<TITLE>Indian Railways</TITLE>
<style type="text/css">

@import url(style.css);
#logo	{ 
	border-radius: 25px;
    border: 1px solid blue; 
    width: 70px;
    height: 70px;
}
*	{
	color: white;
	
}
html { 
  background: url(img/bg2.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#main	{
		width:700px;
		height: 400px;
		margin: 0 auto;
		margin-top: 30px;
		color:white;
		border-radius: 25px;
  		padding-top: 10px;
    	padding-right: 10px;
    	padding-bottom: 10px;
    	padding-left: 10px;
    	background-color: rgba(0,0,0,0.3);
	}

	h1{
	color:white;
	text-decoration: underline;	
	font-size: 40px;
	font-weight: 900
	}
</style>
</HEAD>
<BODY>
<?php 
session_start();
include("header.php"); ?>
<div id="main"><div id="logo">
<A HREF="index.php">
<IMG SRC="img/logo.png" alt="Home" id="logo" width="150" height="150"></IMG>
</A></div>
<h1 align="center">Welcome to Indian Railways</h1><br/><br/><br/>
<h2 align="center">Have a safe journey with us</h2>
<br/><br/><br/>
<marquee><h2 style="color:red" >National railways is going to operate 200 trains from 21-sep-2020</h2></marquee>
<?php
if(isset($_SESSION['user_info']))
  echo '<h3 align="center"><a href="booktkt.php">Book here</a></h3>';
else
  echo '<h3 align="center"><a href="register.php" style="color:#3300FF";>Please register/login before booking</a></h3>';
?>
</div>
</BODY>
</HTML>