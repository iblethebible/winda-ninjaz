<?php
include('database_connect_windaninjaz.php');
$id = $_GET['job'];
echo $id;

$sql = "UPDATE job 
SET dateLastDone = (NOW())
WHERE id = $id";



echo $sql . "<br>";
if ($conn->query($sql) ===TRUE) {
    
    echo "Job Complete";
    header("location: getjob.php");
}
else {
    echo "Error " . $conn->error;
}



?>
