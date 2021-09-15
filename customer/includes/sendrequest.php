<?php
include "top3.php"; // Using database connection file here

if(isset($_GET['driver']))
{		
    $rider  = $_SESSION['rideru_id'];
    $driver = $_SESSION['$driveru_id'];
    $origin = "Abuja";
    $destination = "Port Harcourt";
    // $message = "You Have New Ride Request from " .$rider. ". The request is to take him from " .$origin. " to " .$destination.". Do you accept?";
    
    $query = "INSERT INTO reqoests(driver_id, rider_id, user_date) ";
    $query .= "VALUES({$driver},'{$rider}',now()) ";
    $create_request_query = mysqli_query($connection, $query);
    confirmQuery($create_request_query);

    if(!$create_request_query)
    {
        echo "Sorry an error occured, please try again.";
    }
    else
    {
        echo "Request sent successfully. Please wait for drivers response.";
        echo '<script type="text/javascript">
        alert("Execute Javascript Code");
        window.close();
        </script>';
    }
}

?>