<?php
include "connection.php";
session_start();
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Username = $_POST['Username'];
	$PhoneNo = $_POST['PhoneNo'];
	$Email = $_POST['Email'];
	$Birthdate = $_POST['Birthdate'];
	$Gender = $_POST['Gender'];
	$WorkStartDate = $_POST['WorkStartDate'];
	$Position = $_POST['Position'];
	$DepartmentID = $_POST['DepartmentID'];
	$Nationality = $_POST['Nationality'];
	$Religion = $_POST['Religion'];
	$MaritalStatus = $_POST['MaritalStatus'];
	$Address = $_POST['Address'];
	$City = $_POST['City'];
	$Postcode = $_POST['Postcode'];
	$State = $_POST['State'];
	$Country = $_POST['Country'];

	$sql= "INSERT INTO profile (FirstName,LastName,Username,PhoneNo,Email,Birthdate,Gender,WorkStartDate,Position,
		DepartmentID,Nationality,Religion,MaritalStatus,Address,City,Postcode,State,Country)
		values ('$FirstName','$LastName','$Username','$PhoneNo','$Email','$Birthdate','$Gender','$WorkStartDate','$Position','$DepartmentID'
		,'$Nationality','$Religion','$MaritalStatus','$Address','$City','$Postcode','$State','$Country')";
		$result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

		if($result)
		{
						 echo "<meta http-equiv='refresh' content='0; url=addemployees2.php'/>";
		}
	    else
		{
		   die(mysqli_error());
		}
?>
