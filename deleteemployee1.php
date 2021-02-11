<?php
include "connection.php";
  
  if(ISSET($_POST['delete']))
  {
    $ProfileID = $_POST['ProfileID'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Username = $_POST['Username'];
    
   $result= mysqli_query($connection, "UPDATE profile SET FirstName = '$FirstName', LastName = '$LastName',  Username = '$Username' WHERE ProfileID = '$ProfileID'") or die(mysqli_error($connection));

      echo "<meta http-equiv='refresh' content='0; url= employeeshr.php'/>";

 }
?>