<?php
include "connection.php";
 try { EduID =isset($_GET['EduID']) ? $_GET['EduID'] :die('ERROR: Record not found.');

$query = "DELETE FROM education WHERE EduID =?";
$stmt =$connection ->prepare($query);
$stmt->bindParam(1, $EduID);
if($stmt->execute()){
    header('Location: profile.php?action=deleted');
}
else{
die('Unable to delete record.');
} 
}
 
 catch(PDOExpection $expection){die('ERROR: '. $exception->getMessage());}
 ?>