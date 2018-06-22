<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        Insert value into table
        </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;
            }
        </style>
    
  </head>
        <body>
            <div class="container-fluid">
            <h1>Insert value into table</h1>
            <h3>Connect to database</h3>
            <p>
<?php
$servername = "localhost";
$username = "root";
$password = "jack0705";
$database = "testdatabase";

// Create connection

$link = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "<p>Success</p>";
}
?>
            <h3>Insert value into table</h3>
<?php
$sql = "INSERT INTO users(firstname, lastname, email, password) VALUES (
'Mark', 'Zuckerberg', 'M.zuckerberg@gmail.com', 'password')";
if(mysqli_query($link, $sql)) {
    echo "<p>New row added successfully!</p>";
} else {
    echo "ERROR: Unable to execute $sql" . mysqli_error($link);
}


?>
            </p>
        
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script>
        <script src="js/bootstrap.min.js">
        </script>
        
        </body>
</html>