<?php
include "connection.php";
session_start();
	$ProfileID = $_SESSION['ProfileID'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Gender = $_POST['Gender'];
	$Email = $_POST['Email'];
	$PhoneNo = $_POST['PhoneNo'];
	$Birthdate = $_POST['Birthdate'];
	$DepartmentID = $_POST['DepartmentID'];
	$Position = $_POST['Position'];

		$query1="UPDATE profile SET FirstName='$FirstName', LastName='$LastName', Gender='$Gender', Email='$Email',PhoneNo='$PhoneNo', Birthdate='$Birthdate', DepartmentID='$DepartmentID', Position='$Position'
  		WHERE ProfileID = '$ProfileID'";
		$result = mysqli_query($connection,$query1) or die(mysqli_error());

					//	 echo "<meta http-equiv='refresh' content='0; url=profile.php'/>";
?>
