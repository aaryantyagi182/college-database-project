<?php
session_start();
?>
<?php 
    
     $check=$_SESSION["user"];
    if($check=='') 
    { 
        
header("Location: studentlogin.html"); 
         
        die("Redirecting to studentlogin.html"); 
    } 
?>
<html >
<head>
<title>Student Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body >
<font  size="4"  align="right">
<div  >Welcome <?php echo"".$check; ?> <a href="logouts.php"><font  size="4" color="violet" align="right">&nbsp;LogOut</font></a></div></font>
<div class="main">
 <div class="logo">
        <h1><a href="studentportel.php">Student&nbsp;<span>Portal</span></a></h1>
      </div>
  <div class="header">
   <div class="header_resize">
	       <div class="menu_nav">
        <ul>
          <li><a href="index.html"><span>Home</span></a></li>
		  <li><a href="studentprofile.html"><span>View/Edit Profile</span></a></li>	
<li><a href="requestandsuggestion.html"><span>Request/Suggestation</span></a></li>
		  		<li><a href="changepassword.html"><span>Change Password</span></a></li>
		</ul>
      </div> </div>
        <div class="header">
      <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="attendances1.html"><span>View Attendance</span></a></li>

		  </div>
   </div>
        <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="index.html"><img src="images/123456.jpg" width="960" height="360" alt="" /><span> Harvard School of Science</span></a> <a href="index.html"><img src="images/360.jpg" width="960" height="360" alt="" /><span> Harvard School of Science</span></a> <a href="index.html"><img src="images/960.jpg" width="960" height="360" alt="" /><span> Harvard School of Science</span></a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
 </body>
</html>
  











































  
  




