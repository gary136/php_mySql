<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        Add a table
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
            <h1>Add a table</h1>
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
            <h3>Create Table</h3>
<?php
$sql = "CREATE TABLE users(
ID INT(4) not null primary key auto_increment, 
firstname char(30) not null, 
lastname char(30) not null, 
email varchar(30), 
password varchar(40))";
if(mysqli_query($link, $sql)) {
    echo "<p>Table users created successfully!</p>";
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