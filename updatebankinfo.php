<?php
include "connection.php";
session_start();

$ProfileID = $_SESSION['ProfileID'];
$BankName = $_POST['BankName'];
$BankAccNo = $_POST['BankAccNo'];
$EPFNo = $_POST['EPFNo'];

  $query1= "UPDATE bankinformation
            SET BankName='$BankName',BankAccNo='$BankAccNo',EPFNo='$EPFNo' WHERE ProfileID='$ProfileID'";
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