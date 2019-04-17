<?php
include('../dbcon.php');
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$year=$_POST['year'];
	$branch=$_POST['branch'];
	$city=$_POST['city'];
	$room=$_POST['room'];
	$id=$_POST['sid'];
	$phone=$_POST['phone'];
	$pic1=$_FILES['pic']['name'];
    $tempname=$_FILES['pic']['tmp_name'];

     move_uploaded_file($tempname,"../dating/$pic1");
     
	$qry="UPDATE `student` SET `roll no` = '$rollno', `name` = '$name', `city` = '$city', `room` = '$room', `contact` = '$phone',   `branch` = '$branch', `batch` = '$year', `image` = '$pic1' WHERE `id` = $id ;";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert('data updated sucessfully');
		window.open('updateform.php?sid=<?php echo $id; ?>','_self');
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
?>