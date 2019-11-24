<html>
<head></head><body>
<hr><hr>
<font size="6">
<?php
$sugg = $_POST["sugg"];
$date = $_POST["date"];


$conn=new mysqli("localhost","root","","collegemanagement");
$stmt=mysqli_query($conn,"insert into suggestion (rs,date) values('$sugg','$date') ");
mysqli_close($conn);
?>
<script>
alert("Request/Suggestion Submitted Successfull........");
</script>
<?php
include("studentportal.php")
?>

<hr><hr>
</font>
</body>
</html>