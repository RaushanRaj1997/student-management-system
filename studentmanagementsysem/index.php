<!DOCTYPE HTML>
<html lang-"en_US">
<head>
<meta charset="UTF-8">
<title>Student Management System</title>
</head>
<body>
<h2 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h2>

<h1 align="center" class="heading">WELCOME TO STUDENT MANAGEMENT SYSTEM</h1>
<form method="post" action="index.php">
<table align="center" style="width:30%" style="height:30%" border="1"> 
<tr><td colspan="2" align="center">Student Information</td></tr>
<tr><td align="right">Choose Branch</td>
<td>
 <select name="branch">
  <option value="Computer Science">Computer Science</option>
  <option value="Electronics and Commiunications">Electronics and Commiunications</option>
  <option value="Electronics and Electircals">Electronics and Electircals</option>
  <option value="Civil">Civil</option>
<option value="Metallurgy">Metallurgy</option>
<option value="Mechanical">Mechanical</option>
<option value="Production">Production</option>
</select> 
</td></tr>
<tr><td align="right">Enter Roll.No</td><td><input type="text" name="rollno" required /></td></tr>
<tr><td colspan="3" align="center"><input type="submit" name="submit" value="show info" /></td></tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	include('dbcon.php');
	$rollno=$_POST['rollno'];

	$sql="SELECT * FROM `student` WHERE `roll no`='$rollno'";
    $run=mysqli_query($con,$sql);
    $row=mysqli_num_rows($run);
     if($row<1)
    {
    	echo "<no records found";
    }
    else
    {
    	$data=mysqli_fetch_assoc($run);

    	?>
    	<div align="center">
    	<img src="dating/<?php echo $data['image']; ?>" style="max-width: 100px;"/>
    	</div>
    	<table align="center" width="80%" border="1" style="margin-top: 10px;">
         <tr>
           <th>Roll Number</th>
             <th>Name</th>
             <th>Room No</th>
       <th>Contact No</th>
         <th>City</th>
         <th>branch</th>
         <th>batch</th>
         
                         <tr>
                    <td><?php echo $data['roll no']; ?></td>
                  <td><?php echo $data['name'];?></td>
                  
                  <td><?php echo $data['room'];?></td> 
                  <td><?php echo $data['contact'];?></td>
                  <td><?php echo $data['city']; ?></td>
                    <td><?php echo $data['branch']; ?></td>
                      <td><?php echo $data['batch']; ?></td>

                  </tr>
            </table>
    		<?php
    	
    	
    }
}
?>