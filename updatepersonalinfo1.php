<?php
include "connection.php";
  if(ISSET($_POST['submit2']))
{
$ProfileID = $_POST['ProfileID'];
$NRIC = $_POST['NRIC'];
$Birthdate = $_POST['Birthdate'];
$Race = $_POST['Race'];
$MaritalStatus = $_POST['MaritalStatus'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$Postcode = $_POST['Postcode'];
$State = $_POST['State'];

   $result= mysqli_query($connection, "UPDATE profile
            SET NRIC='$NRIC',Race='$Race', MaritalStatus='$MaritalStatus', Birthdate='$Birthdate', Address='$Address',City='$City', Postcode='$Postcode',State='$State' WHERE ProfileID='$ProfileID'") or die(mysqli_error($connection));

  if($result)
    { 
      $execute1=mysqli_query($connection,"SELECT DepartmentID
                          FROM profile
                          WHERE ProfileID='$ProfileID'");
      $execute = mysqli_fetch_array($execute1);

    if($execute)
    { 

      if($execute['DepartmentID']=="1")
      {
        echo "<meta http-equiv='refresh' content='0; url= employeescml.php'/>";
      }
      else if ($execute['DepartmentID']=="2")
      {
        echo "<meta http-equiv='refresh' content='0; url= employeeshr.php'/>";
      }
      else if ($execute['DepartmentID']=="3")
      {
        echo "<meta http-equiv='refresh' content='0; url= employeesfinance.php'/>";
      }
      else if ($execute['DepartmentID']=="4")
      {
        echo "<meta http-equiv='refresh' content='0; url= employeesquality.php'/>";
      }
      else if ($execute['DepartmentID']=="5")
      {
        echo "<meta http-equiv='refresh' content='0; url= employeestraining.php'/>";
      }
      else if ($execute['DepartmentID']=="6")
      {
        echo "<meta http-equiv='refresh' content='0; url= employeesconsultancy.php'/>";
      }
      else if ($execute['DepartmentID']=="7")
      {
        echo "<meta http-equiv='refresh' content='0; url= employeesmarketing.php'/>";
      }
      else if ($execute['DepartmentID']=="8")
      {
        echo "<meta http-equiv='refresh' content='0; url= employeessts.php'/>";
      }
      else if ($execute['DepartmentID']=="9")
      {
        echo "<meta http-equiv='refresh' content='0; url= employeestpr.php'/>";
      }
      else
      {
      
      // echo "<meta http-equiv='refresh' content='0; url= profile.php'/>";
      }

    }

      else
    {
       die(mysqli_error($connection));
    }
  }
  }
?>

