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
<form action="updatestudent.php" method="post">
<table align="center" border="1" >
	<tr>
		<th>Enter the Roll Number</th>
		<td><input type="text" name="rollno" placeholder="Enter your Roll No"></td>
	</tr>
	<tr>
		<th>Enter your name</th>
		<td><input type="text" name="name" placeholder="Enter your name"></td>
	</tr>
	<tr>
			<td align="center" colspan="2"><input type="submit" name="submit" value="search" >
	</td></tr>
</table>
</form>
<table align="center" width="80%" border="1" style="margin-top: 10px;">
<tr>
<th>No</th>
<th>Name</th>
<th>Image</th>
<th>Room No</th>
<th>Contact No</th>
<th>City</th>
<th>Edit</th>

</tr>
<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$roll=$_POST['rollno'];
	$name=$_POST['name'];
     
	$sql="SELECT * FROM `student` WHERE `roll no`='$roll' AND `name`='$name'";
    $run=mysqli_query($con,$sql);
    $row=mysqli_num_rows($run);
     if($row<1)
    {
    	echo "<tr><td colspan='7'>no records found</td></tr>";
    }
    else
    {
    	$count=0;
    	while($data=mysqli_fetch_assoc($run))
    	{
    		$count++;
    		?>
                  <tr>
                  <td><?php echo $count; ?></td>
                  <td><?php echo $data['name'];?></td>
                  <td><img src="../dating/<?php echo $data['image']; ?>" style="max-width: 100px;"/></td>
                  <td><?php echo $data['room'];?></td> 
                  <td><?php echo $data['contact'];?></td>
                  <td><?php echo $data['city']; ?></td>
                  <td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
                  </tr>
            
    		<?php
    	}
    	?>
    	</table>
    	<?php
    }

}
?>