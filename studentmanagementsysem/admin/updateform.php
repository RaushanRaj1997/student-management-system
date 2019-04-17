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
include('../dbcon.php');
$sid=$_GET['sid'];
$sql="SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
	<table align="center" border="1" style="width: 40%; margin-top: 40px; font-size: 25px;">
	<tr>
		<th>Roll Number</th>
		<td><input type="text" name="rollno" value=<?php echo $data['roll no']; ?> required></td>
	</tr>
	<tr>
		<th>Name</th> 
		<td><input type="text" name="name" value=<?php echo $data['name']; ?> required ></td>
	</tr>
	 <tr>
		<th>Year></th>
		<td>
		<input type="text" name="year" value=<?php echo $data['batch']; ?> required>
	</td></tr>
	<tr>
		<th>Branch</th><td>
		<input type="text" name="branch" value=<?php echo $data['branch']; ?> required >
	</td></tr>
	<tr>
		<th>City</th><td>
		<input type="text" name="city" value=<?php echo $data['city']; ?> required>
	</td></tr>
	<tr>
		<th>Contact Number</th>
		<td><input type="number" name="phone" value=<?php echo $data['contact']; ?> required>
	</td></tr>
    	<th>Room Number</th>
		<td><input type="text" name="room" value=<?php echo $data['room']; ?> required>
	</td></tr>
	<tr>
		<th>Photograph</th>
		<td><input type="file" name="pic" required>
	</td></tr>

	<tr>
			<td align="center" colspan="2">
			<input type="hidden" name="sid" value=<?php echo $data['id']; ?> />
			<input type="submit" name="submit" value="submit" />
	</td></tr>
	
	</table>
</form>
</body>
</html>