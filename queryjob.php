<?php
include('database_connect_windaninjaz.php');


?>
<html>
    <head><title>View all jobs</title></head>
    <body>
        <h1>All jobs</h1>
        <a href="addjob.php">Add a job</a>
<?php
$sql = "SELECT customer.custName, job.cust_id, job.houseNumName, job.streetName,job.price, job.dateLastDone
FROM customer, job";



echo "<p>The SQL is: " . $sql . "</p>";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo '<table border="1">';
	echo '<tr>';
	echo '<th>Name</th>';
	echo '<th>Address</th>';
	
	
	echo '</tr>';

    while ($row = $result->fetch_assoc()) {

        echo '<tr>';
        echo '<td>' . $row["custName"] . '</td>';
        echo '<td>' . $row["houseNumName"] . '</td>';
        echo '<td>' . $row["streetName"] . '</td>';
    }
        echo '</tr>' ;
        echo '</table>';
    
        
        

    
}
?>
</table>
</html>


    
    
