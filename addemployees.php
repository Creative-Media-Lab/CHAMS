<?php
include "connection.php";
session_start();
	$ProfileID = $_SESSION['ProfileID'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Username = $_POST['Username'];
	$PassportNo = $_POST['PassportNo'];
	$PhoneNo = $_POST['PhoneNo'];
	$Email = $_POST['Email'];
	$Birthdate = $_POST['Birthdate'];
	$nationality = $_POST['Nationality'];
	$Religion = $_POST['Religion'];
	$MaritalStatus = $_POST['MaritalStatus'];
	$Address = $_POST['Address'];
	$City = $_POST['City'];
	$Postcode = $_POST['Postcode'];
	$State = $_POST['State'];
	$Country = $_POST['Country'];
	$Password = $_POST['Password'];

	$sql= "INSERT INTO profile (FirstName,LastName,Username,PassportNo,PhoneNo,Email,Birthdate,Nationality,Religion,MaritalStatus,Address,City,Postcode,State,Country,Password)
		values ('$FirstName','$LastName','$Username','$PassportNo','$PhoneNo','$Email','$Birthdate','$Nationality','$Religion,'$MaritalStatus','$Address','$City','$Postcode''$State','$Country','$Password')";
		$result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

		if($result)
		{
						echo "<script>alert('Staff information is added into the system')</script>";
						 echo "<meta http-equiv='refresh' content='0; url=employees.php'/>";
		}
	    else
		{
		   die(mysqli_error());
		}
?>
