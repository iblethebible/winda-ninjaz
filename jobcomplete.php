<?php
include('database_connect_windaninjaz.php');
$sql = "INSERT INTO job (dateLastDone) VALUE (NOW())";
echo $sql . "<br>";
if ($conn->query($sql) ===TRUE) {
    
    echo "Job complete timestamp saved";
}
else {
    echo "Error " . $conn->error;
}

?>
