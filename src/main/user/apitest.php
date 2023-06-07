<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <button id="testapi">Get Api Details</button>

    <?php
// API endpoint URL
$apiUrl = "http://localhost/Book_A_Slot/Book_A_Slot/src/main/user/api.php?api_key=11223";

// Make API request
$response = file_get_contents($apiUrl);

if ($response !== false) {
    // Process API response
    $data = json_decode($response, true);
    
    foreach($data as $value) {
        echo $value['event_name'] . '=' . $value['event_description'];
        echo("<br>");
       }
    // Access the data
} else {
    // Handle API request failure
    echo "Error: API request failed.";
}
?>


</body>
<script>
$('#testapi').on('click',function(){
    console.log("yes");
    $.ajax({ 
             type: "GET",
             dataType: "json",
             url: "http://localhost/Book_A_Slot/Book_A_Slot/src/main/user/api.php?api_key=11223",
             success: function(data){        
                console.log(data);
                
             }
         });
})
    </script>
</html>