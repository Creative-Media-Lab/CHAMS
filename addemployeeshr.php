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
	$Race= $_POST['Race'];
	$MaritalStatus = $_POST['MaritalStatus'];
	$Address = $_POST['Address'];
	$City = $_POST['City'];
	$Postcode = $_POST['Postcode'];
	$State = $_POST['State'];

	$sql=	"INSERT INTO profile 
				(FirstName,LastName,Username,PhoneNo,Email,Birthdate,Gender,WorkStartDate,Position,
				DepartmentID,Race,MaritalStatus,Address,City,Postcode,State,Resume,UploadResume)
			VALUES
				('$FirstName','$LastName','$Username','$PhoneNo','$Email','$Birthdate','$Gender','$WorkStartDate','$Position','$DepartmentID','$Race','$MaritalStatus','$Address','$City','$Postcode','$State','-','-')";

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
