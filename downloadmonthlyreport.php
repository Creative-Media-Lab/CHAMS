<?php
    require 'connection.php';
    if(ISSET($_REQUEST['MonthlyReportID'])){
        $MonthlyReportID = $_REQUEST['MonthlyReportID'];
        
        $query = mysqli_query($connection, "SELECT * FROM monthlyreport WHERE MonthlyReportID = '$MonthlyReportID'") or die(mysqli_error());
        $row  = mysqli_fetch_array($query);
        $UploadFile = $row['UploadFile'];
        header("Content-Disposition: attachment; filename=".basename($UploadFile));
        header("Content-Type: application/octet-stream;");
        readfile($UploadFile);
    }
?>