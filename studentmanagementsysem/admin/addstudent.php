<?php
session_start();
if(isset($_SESSION['uid']))
{
	
}
else
{
	header('location:../login.php');
}
?>
<?php
include('header.php');

include('title.php');
?>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
	<table align="center" border="1" style="width: 40%; margin-top: 40px; font-size: 25px;">
	<tr>
		<th>Roll Number</th>
		<td><input type="text" name="rollno" placeholder="Enter your Roll No"></td>
	</tr>
	<tr>
		<th>Name</th>
		<td><input type="text" name="name" placeholder="Enter your full Name"></td>
	</tr>
	 <tr>
		<th>Year</th>
		<td>
		<input type="text" name="year" placeholder="Enter your admission year">
	</td></tr>
	<tr>
		<th>Branch</th><td>
		<input type="text" name="branch" placeholder="Enter your Branch">
	</td></tr>
	<tr>
		<th>City</th><td>
		<input type="text" name="city" placeholder="Enter your city">
	</td></tr>
	<tr>
		<th>Contact Number</th>
		<td><input type="number" name="phone" placeholder="Enter your contact number">
	</td></tr>
    	<th>Room Number</th>
		<td><input type="text" name="room" placeholder="Enter your room number">
	</td></tr>
	<tr>
		<th>Photograph</th>
		<td><input type="file" name="pic">
	</td></tr>
	<tr>
			<td align="center" colspan="2"><input type="submit" name="submit" value="submit" >
	</td></tr>
	
	</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$year=$_POST['year'];
	$branch=$_POST['branch'];
	$city=$_POST['city'];
	$room=$_POST['room'];
	$phone=$_POST['phone'];
	$pic1=$_FILES['pic']['name'];
    $tempname=$_FILES['pic']['tmp_name'];
     
     move_uploaded_file($tempname,"../dating/$pic1");

	$qry="INSERT INTO `student`( `roll no`, `name`, `city`, `room`, `contact`, `branch`, `batch`,`image`) VALUES ('$rollno','$name','$city',
	'$room','$phone','$branch','$year','$pic1')";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert('data inserted sucessfully');
		</script>
		<?php

	}
	if($run==false)
	{
			?>
		<script>
		alert('data did not inserted sucessfully');
		</script>
		<?php
	}
}
?>
