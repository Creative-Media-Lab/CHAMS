<?php
include "connection.php";
session_start();
	$ProfileID = $_SESSION['ProfileID'];
	$PrimaryName = $_POST['PrimaryName'];
	$PrimaryRelationship = $_POST['PrimaryRelationship'];
	$PrimaryPhone1 = $_POST['PrimaryPhone1'];
	$PrimaryPhone2 = $_POST['PrimaryPhone2'];
	$SecondaryName = $_POST['SecondaryName'];
	$SecondaryRelationship = $_POST['SecondaryRelationship'];
	$SecondaryPhone1 = $_POST['SecondaryPhone1'];
	$SecondaryPhone2 = $_POST['SecondaryPhone2'];

		$query1="UPDATE emergency_contact SET PrimaryName='$PrimaryName', PrimaryRelationship='$PrimaryRelationship', PrimaryPhone1='$PrimaryPhone1', PrimaryPhone2='$PrimaryPhone2',SecondaryName='$SecondaryName', SecondaryRelationship='$SecondaryRelationship', SecondaryPhone1='$SecondaryPhone1',SecondaryPhone2='$SecondaryPhone2'
  		WHERE ProfileID = '$ProfileID'";
		$result = mysqli_query($connection,$query1) or die(mysqli_error());

					//	 echo "<meta http-equiv='refresh' content='0; url=profile.php'/>";
?>
