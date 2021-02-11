<?php
include "connection.php";
session_start();

$ProfileID = $_SESSION['ProfileID'];
$NRIC = $_POST['NRIC'];
$Birthdate = $_POST['Birthdate'];
$Race = $_POST['Race'];
$MaritalStatus = $_POST['MaritalStatus'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$Postcode = $_POST['Postcode'];
$State = $_POST['State'];

  $query1= "UPDATE profile
            SET NRIC='$NRIC',Race='$Race', MaritalStatus='$MaritalStatus', Birthdate='$Birthdate', Address='$Address',
                City='$City', Postcode='$Postcode',
                State='$State' WHERE ProfileID='$ProfileID'";
  $result = mysqli_query($connection,$query1) or die(mysqli_error($connection));

  if($result)
  {
           echo "<meta http-equiv='refresh' content='0; url=profile.php'/>";
  }
    else
  {
     die(mysqli_error());
  }
?>
