
<?php
 session_start();
?>
<html>
<head>
</head><body>
<?php
$conn=mysqli_connect("localhost","root","","collegemanagement");
$name = $_POST['userid'];
$pass = $_POST['pass'];
$result=mysqli_query($conn,"SELECT * FROM login where username= '$name' and password= '$pass'");
	if ($result->num_rows > 0) {
	             $_SESSION["user"] = $name; 
				 $_SESSION["pass"] = $pass; 
				header("Location: studentportal.php"); 	 
include("studentportal.php");
		 	}		
else
{
?> <script> alert("Invalid Login");</script>
<?php include("studentlogin.html"); }?>

</pre>

</body>
</html>
  