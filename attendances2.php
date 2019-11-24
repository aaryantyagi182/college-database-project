<html>
<head>
<title>Attendance portal</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head><body>

	  <div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
      
<h3 align="center"><em><strong><span style="font-size: 36px"><span style="font-family: Georgia">Attendance portal <div class="form-group" style="margin:30px;" align="center" >
	<a href="studentportal.php" target=""><input type="submit" class="btn btn-primary" value="Home"></a><a href="logouts.php" target=""> <input type="submit" class="btn btn-primary" value="Logout"></a>  
	</div></span></span></strong></em></h3>
<div class="progress">
        <div class="progress-bar progress-bar-info" style="width: 100%; height:100%;"></div>
      </div>
	  

<font size="6">
<?php

$sub = $_POST["studentid"];

$conn=new mysqli("localhost","root","","collegemanagement");
$result = $conn->query("SELECT * FROM subject where studentid= '$sub'");
$row=mysqli_fetch_array($result);
	if ($result->num_rows > 0) {
	   
	    ?>
<table align="center" width="50%" border="1">
<form action="attendances1.html" method="post">
        <tr><td align="center"><b>SUBJECT NAME</b></td><td><b>PERCENTAGE</b></td>  </tr>  
	<tr><td align="center">TFCS</td><td><?php echo "".$row['TFCS'];?></td></tr>
       <tr><td align="center">DBMS </td><td><?php echo "".$row['DBMS'];?></td></tr>
       <tr><td align="center">DS</td><td><?php echo "".$row['DS'];?></td></tr>
       <tr><td align="center">ECONOMICS</td><td><?php echo "".$row['Economics'];?></td></tr>
       <tr><td align="center">DS LAB</td><td><?php echo "".$row['DS_Lab'];?></td></tr>
       <tr><td align="center">DBMS LAB</td><td><?php echo "".$row['DBMS_Lab'];?></td></tr>
	
	
<?php  }?>

</table>
</form>
</body>
</html>
