<?php
include "connection.php";
session_start();

  if(ISSET($_POST['update']))
{
  $MonthlyReportID = $_POST['MonthlyReportID'];
  $Month = $_POST['Month'];
  $StartDate = $_POST['StartDate'];
  $EndDate = $_POST['EndDate'];
  $Comment = $_POST['Comment'];


    $UploadFile = addslashes(file_get_contents($_FILES['UploadFile']['tmp_name']));
    $UploadFile_name = addslashes($_FILES['UploadFile']['name']);
    $UploadFile_size = getimagesize($_FILES['UploadFile']['tmp_name']);
 
    move_uploaded_file($_FILES["UploadFile"]["tmp_name"], "assets/monthlyreport/" . $_FILES["UploadFile"]["name"]);
    $location = "assets/monthlyreport/" . $_FILES["UploadFile"]["name"];
    $connection->query("update monthlyreport set Month ='$Month', StartDate ='$StartDate', EndDate = '$EndDate', UploadFile = '$location' , UploadTime = now(), Comment = '$Comment' where MonthlyReportID = '$MonthlyReportID'");
  ?>
  <script>
    window.location = 'monthlyreport.php';
  </script>
  <?php
}
?>