<?php
include('database_connect_windaninjaz.php');
if ($_GET["job_form_submit"]) {
    echo "button was pressed<br>";
    $var_customer_name = $_GET["customer_name_form"];
    $var_customer_contact = $_GET["customer_contact_details"];
    $var_job_house = $_GET["job_house_number_name"];
    $var_job_street = $_GET["job_street_name"];
    $var_job_price = $_GET["job_price"];
    $var_job_frequency = $_GET["job_frequency"];
    $var_zone_id = $_GET["zone"];
    $var_extra_info = $_GET["job_extra_info"];


    $sql = "INSERT INTO customer (custName, custContact) VALUES ('$var_customer_name', '$var_customer_contact')";
   
    if ($conn->query($sql) ===TRUE) {
       $last_id = $conn->insert_id;
       
   }
    else {
        echo "Error " . $conn->error;
    }

    $sql2 = "INSERT INTO job (cust_id, houseNumName, streetName, price, frequency, zone_id, info) VALUES ('$last_id', '$var_job_house', '$var_job_street', '$var_job_price', '$var_job_frequency', '$var_zone_id', '$var_extra_info')";
    
    if ($conn->query($sql2) ===TRUE) {
        
    }
    else {
        echo "Error " . $conn->error;
    }
}
?>


<html>
    <head>
        <title>
            Add a new job
        </title>
    </head>
    <body>
        <h1>Add a new job</h1>
        <a href="getjob.php">Get Job</a>
        <form action="addJob.php" method="get">
        
            House number or name: <input type="text" name="job_house_number_name"><br>
            Street Name: <input type="text" name="job_street_name"><br>
            Price: <input type="number" name="job_price"><br>
            Frequency: <input type="number" name="job_frequency"><br>
            Zone: <select name = "zone">
                <option value = "1" selected>Bayston Hill</option>
                <option value = "2" selected>Bell Vue</option>
                <option value = "3" selected>Copthorne</option>
                <option value = "4" selected>Meole</option>
                <option value = "5" selected>Monkmoor</option>
                <option value = "6" selected>Mount Pleasant</option>
                <option value = "7" selected>Radbrook</option>
                <option value = "8" selected>Sundorne</option>
                </select><br>
            Extra info: <input type="text" name="job_extra_info"><br>
            <input type="submit" name="job_form_submit" value="Submit">
            
        </form>
    </body>
</html>

