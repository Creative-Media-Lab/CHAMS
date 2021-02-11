<?php
include "connection.php";
session_start();
if (isset($_POST['upload'])) {

	$ProfileID = $_SESSION['ProfileID'];
	$MonthlyReportName = $_POST['MonthlyReportName'];
	$Month = $_POST['Month'];
	$StartDate = $_POST['StartDate'];
	$EndDate = $_POST['EndDate'];
  $Comment = $_POST['Comment'];


	$UploadFile = addslashes(file_get_contents($_FILES['UploadFile']['tmp_name']));
    $UploadFile_name = addslashes($_FILES['UploadFile']['name']);
    $UploadFile_size = getimagesize($_FILES['UploadFile']['tmp_name']);
 
    move_uploaded_file($_FILES["UploadFile"]["tmp_name"], "assets/monthlyreport/" . $_FILES["UploadFile"]["name"]);
    $location = "assets/monthlyreport/" . $_FILES["UploadFile"]["name"];
    $connection->query("insert into monthlyreport (MonthlyReportName,ProfileID,Month,StartDate,EndDate,UploadFile,UploadTime,Comment) values('$MonthlyReportName','$ProfileID','$Month','$StartDate','$EndDate','$location',now(),'$Comment')");
  ?>
  <script>
    window.location = 'monthlyreport.php';
  </script>
  <?php
  }
?>


