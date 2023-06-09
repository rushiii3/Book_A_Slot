<?php
// ...
require "../connection/connect.php";
// Define API key authentication function
function authenticateApiKey($apiKey)
{
   
    if ($_GET['api_key']==11223) {
        return true;
    }

    return false;
}

// Check if API key is provided
if (isset($_GET['api_key'])) {
    $apiKey = $_GET['api_key'];

    // Authenticate the API key
    if (authenticateApiKey($apiKey)) {
        // Authenticated, continue processing the request
        // Define GET endpoint to retrieve all records
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // Query the database
            $sql = "SELECT * FROM `EVENT` WHERE status_value = 'Approved'";
            $result = mysqli_query($con,$sql);
            // Check if any records were found
            if (mysqli_num_rows($result) > 0) {
                // Fetch all rows and encode as JSON
                $rows = array();
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                echo json_encode($rows);
            } else {
                echo "No records found.";
            }
        }

        // ... Handle other endpoints for POST, PUT, DELETE, etc.

    } else {
        // API key authentication failed
        header("HTTP/1.1 401 Unauthorized");
        echo "Invalid API key.";
    }
} else {
    // API key is missing
    header("HTTP/1.1 401 Unauthorized");
    echo "API key is required.";
}

// ...

$con->close();
?>
