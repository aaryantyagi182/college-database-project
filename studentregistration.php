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
$linkid = $_POST["linkid"];
$stdid = $_POST["stdid"];
$rollno = $_POST["rollno"];
$dob = $_POST["dob"];
$userid = $_POST["userid"];

$conn=mysqli_connect("localhost","root","","collegemanagement");
if($con->connect_error)
{
	die("not connected:".$con->connect_error);
}
else
  echo "successfully connected."."</br>";
$stmt=mysqli_query($con,"insert into student (name,branch,year,emailid,linkinid,studentid,rollno,dob,address,mobno,username,password) values( $name,$branch,$year,$emailid,$linkid,$stdid,$rollno,$dob,$address,$mobileno,$userid,$pass) ");
$stmt->close();
?>
<script>
alert("Registration Successfull........");
</script>
<?php
include("studentportal.php")
?>

<hr><hr>
</font>
</body>
</html>