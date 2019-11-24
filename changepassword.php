<html>
<head>
</head><body>
<?php
$conn=mysqli_connect("localhost","root","","collegemanagement");
$name = $_POST['userid'];
$pass = $_POST['pass'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$result=mysqli_query($conn,"SELECT * FROM login where username= '$name' and password= '$pass'");
	if ($result->num_rows > 0) {
                     if($pass1==$pass2){
	             mysqli_query($conn,"call passwordupdate('$name','$pass1')");
                     echo "password successfully changed";}
                        else{
                         echo "confirm password and new password not matched";      
		 	}}		
else
{
?> <script> alert("incorrect password");</script>
<?php include("changepassword.html"); }?>

</pre>

</body>
</html>
  
