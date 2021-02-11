<?php
include "connection.php";
  
  if(ISSET($_POST['delete']))
  {
    $MonthlyReportID = $_POST['MonthlyReportID'];
   	$MonthlyReportName = $_POST['MonthlyReportName'];
	$Month = $_POST['Month'];
	$StartDate = $_POST['StartDate'];
	$EndDate = $_POST['EndDate'];
    
   $result= mysqli_query($connection, "DELETE FROM monthlyreport WHERE MonthlyReportID = '$MonthlyReportID'") or die(mysqli_error($connection));

      echo "<meta http-equiv='refresh' content='0; url= monthlyreport.php'/>";

 }
?>