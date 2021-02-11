<?php
    require 'connection.php';
    if(ISSET($_REQUEST['ProfileID'])){
        $ProfileID = $_REQUEST['ProfileID'];
        
        $query = mysqli_query($connection, "SELECT * FROM profile WHERE ProfileID = '$ProfileID'") or die(mysqli_error());
        $row  = mysqli_fetch_array($query);
        $Resume = $row['Resume'];
        header("Content-Disposition: attachment; filename=".basename($Resume));
        header("Content-Type: application/octet-stream;");
        readfile($Resume);
    }
?>