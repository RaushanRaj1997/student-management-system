<?php

include('../dbcon.php');
  $id=$_REQUEST['sid'];
	$qry="DELETE FROM `student` WHERE `id`='$id'";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert('data deleted sucessfully');
		window.open('deletestudent.php','_self');
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
