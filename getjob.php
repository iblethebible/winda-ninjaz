<?php
include('database_connect_windaninjaz.php');

?>
<html>
    <head><title>Current Job</title></head>
    <body>
        <h1>
            Get Jobs
        </h1>
        <h2>
        <?php
        echo date('jS F Y');
        ?>
        </h2>
        <a href="addjob.php">Add a job</a>
        <a href="queryjob.php">All Jobs</a>
        <form action = "getjob.php" method = "get">
        What zone are you in? <select name = "zone">
                <option value = "1" selected>Bayston Hill</option>
                <option value = "2" selected>Bell Vue</option>
                <option value = "3" selected>Copthorne</option>
                <option value = "4" selected>Meole</option>
                <option value = "5" selected>Monkmoor</option>
                <option value = "6" selected>Mount Pleasant</option>
                <option value = "7" selected>Radbrook</option>
                <option value = "8" selected>Sundorne</option>
                </select><br>
                <input type="submit" name="getjob_form_submit" value="Submit">
        </form>
<?php
    if ($_GET["getjob_form_submit"]) {
        $var_zone_id = $_GET["zone"];            
        $sql = "SELECT * 
        FROM job 
        WHERE job.zone_id = $var_zone_id"; 
        echo "<p>The SQL is: " . $sql . "</p>";
        $result = $conn->query($sql);
        }
        if ($result->num_rows > 0) {
            echo '<table border="1">';
            echo '<tr>';
            echo '<th>Name</th>';
            echo '<th>Address</th>';
            echo '<th></th>';
            echo '<th>Price</th>';
           // echo '<th>Last Done</th>';
            echo '<th>COMPLETED</th>';
            
            echo '</tr>';
        
            while ($row = $result->fetch_assoc()) {
        
                echo '<tr>';
                echo '<td>' . $row["custName"] . '</td>';
                echo '<td>' . $row["houseNumName"] . '</td>';
                echo '<td>' . $row["streetName"] . '</td>';
                echo '<td>' . $row["dateLastDone"] . '</td>';
                echo '<td><a href="jobcomplete.php?job=' . $row["id"] . '">COMPLETE</a></td>';
            }
                echo '</tr>' ;
                echo '</table>';                     
        
            }
        ?>
    </body>
</html> 

        
