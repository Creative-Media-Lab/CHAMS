<?php
include "connection.php";
session_start();
	$ProfileID = $_SESSION['ProfileID'];
	$PassportNo = $_POST['PassportNo'];
	$Nationality = $_POST['Nationality'];
	$Religion = $_POST['Religion'];
	$MaritalStatus = $_POST['MaritalStatus'];
	$Address = $_POST['Address'];
	$City = $_POST['City'];
	$Postcode = $_POST['Postcode'];
	$State = $_POST['State'];
	$Country = $_POST['Country'];

		$query1="UPDATE profile SET PassportNo='$PassportNo', Nationality='$Nationality', Religion='$Religion', MaritalStatus='$MaritalStatus', Address='$Address', City='$City', Postcode='$Postcode', State='$State', Country='$Country'
  		WHERE ProfileID = '$ProfileID'";
		$result = mysqli_query($connection,$query1) or die(mysqli_error());

					//	 echo "<meta http-equiv='refresh' content='0; url=profile.php'/>";
?>
