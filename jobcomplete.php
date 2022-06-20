<?php
include('database_connect_windaninjaz.php');
$sql = "UPDATE job 
SET dateLastDone = (NOW())";

echo $sql . "<br>";
if ($conn->query($sql) ===TRUE) {
    
    echo "Job complete timestamp saved";
}
else {
    echo "Error " . $conn->error;
}

?>
