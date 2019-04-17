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
?>
<div class="admintitle" align="center">
<h1>WELCOME TO DASHBOARD</h1>
<h4 ><a href="logout.php" style="float: right; margin-right: 30px; font-size: 20px;">LogOut</a></h4>
</div>
<div  align="center">
<table style="width:20%" class="dashboard" >
<tr>
<td>1.</td>
<td><a href="addstudent.php">Insert Student Data</a></td>
</tr>
<tr>
<td>1.</td>
<td><a href="updatestudent.php">Update Student Data</a></td>
</tr>
<tr>
<td>1.</td>
<td><a href="deletestudent.php">Delete Student Data</a></td>
</tr>


</table>
</div>
</body>
</html>