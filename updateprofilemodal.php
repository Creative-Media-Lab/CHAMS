<?php
include "connection.php";
session_start();

$ProfileID = $_SESSION['ProfileID'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$PhoneNo = $_POST['PhoneNo'];
$Gender = $_POST['Gender'];
$DepartmentID = $_POST['DepartmentID'];
$Position = $_POST['Position'];

    $sql ="UPDATE profile
            SET FirstName='$FirstName', LastName='$LastName', Email='$Email', PhoneNo='$PhoneNo', Gender='$Gender', DepartmentID='$DepartmentID', Position='$Position' WHERE ProfileID='$ProfileID'";
    $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

  if($result)
  {
           echo "<meta http-equiv='refresh' content='0; url=profile.php'/>";
  }
    else
  {
     die(mysqli_error());
  }


?>
