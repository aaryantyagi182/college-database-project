<html>
<head></head><body>
<hr><hr>

<font size="6">
<?php
$name = $_POST["name"];
$emailid = $_POST["emailid"];
$pass = $_POST["pass"];
$address = $_POST["address"];
$branch1 = array('Computer Science','Civil Engineering','Electrical Engineering');
$branch = $_POST['branch'];
$year1 = array('First Year','Second Year','Third Year','Final Year');
$year = $_POST['year'];
$mobileno= $_POST["mobileno"];
$stdid = $_POST["stdid"];
$rollno = $_POST["rollno"];
$dob = $_POST["dob"];
$userid = $_POST["userid"];

$con=mysqli_connect("localhost","root","","collegemanagement");
if($con->connect_error)
{
	die("not connected:".$con->connect_error);
}
else
  echo "You are successfully registered for student of Harvard School of Science";
mysqli_query($con,"insert into student(studentid,name,branch,year,emailid,rollno,dob,address,mobno) values( '$stdid','$name','$branch','$year','$emailid','$rollno','$dob','$address','$mobileno') ");
mysqli_query($con,"insert into login(studentid,username,password) values('$stdid','$userid','$pass')");
mysqli_close($con);
?>
<script>
alert("Registration Successfull........");
</script>

<hr><hr>
</font>
</body>
</html>