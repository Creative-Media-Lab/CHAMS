<?php
include "connection.php";
session_start();

$sql=	"INSERT INTO emergencycontact
						(ProfileID,PrimaryName,PrimaryRelationship,PrimaryPhone1,PrimaryPhone2,SecondaryName,SecondaryRelationship,SecondaryPhone1,SecondaryPhone2)
					VALUES
						((SELECT MAX(ProfileID) FROM profile),'-','-','-','','-','-','-','')";

$result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
		if($result)
		{

			echo "<meta http-equiv='refresh' content='0; url=addemployees3.php'/>";
		}
	    else
		{
		   die(mysqli_error());
		}
?>