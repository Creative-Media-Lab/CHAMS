<?php
include "connection.php";
session_start();
	$ProjectName = $_POST['ProjectName'];
	$StartDate = $_POST['StartDate'];
	$Deadline = $_POST['Deadline'];
	$ProjectMember = $_POST['ProjectMember'];
	$Description = $_POST['Description'];

	$sql= "INSERT INTO project (ProjectName,ProjectMember,StartDate,Deadline,Description, DepartmentID)
		values ('$ProjectName','$ProjectMember','$StartDate','$Deadline','$Description','4')";
		$result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

		if($result)
		{
						 echo "<meta http-equiv='refresh' content='0; url=projectsquality.php'/>";
		}
	    else
		{
		   die(mysqli_error());
		}
?>
