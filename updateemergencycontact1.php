 <?php
include "connection.php";
  
  if(ISSET($_POST['submit']))
{
$ProfileID = $_POST['ProfileID'];
$PrimaryName = $_POST['PrimaryName'];
$PrimaryRelationship = $_POST['PrimaryRelationship'];
$PrimaryPhone1 = $_POST['PrimaryPhone1'];
$PrimaryPhone2 = $_POST['PrimaryPhone2'];
$SecondaryName = $_POST['SecondaryName'];
$SecondaryRelationship = $_POST['SecondaryRelationship'];
$SecondaryPhone1 = $_POST['SecondaryPhone1'];
$SecondaryPhone2 = $_POST['SecondaryPhone2'];
    
   $result= mysqli_query($connection, "UPDATE emergencycontact
            SET PrimaryName='$PrimaryName', PrimaryRelationship='$PrimaryRelationship', PrimaryPhone1='$PrimaryPhone1', PrimaryPhone2='$PrimaryPhone2', SecondaryName='$SecondaryName', SecondaryRelationship='$SecondaryRelationship', SecondaryPhone1='$SecondaryPhone1', SecondaryPhone2='$SecondaryPhone2' WHERE ProfileID='$ProfileID'") or die(mysqli_error($connection));

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
