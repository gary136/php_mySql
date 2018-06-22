<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        Create
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
            <h1>Create database</h1>
            <h3>Connect to server</h3>
            <p>
<?php
//mysqli_connect(host, username, password, dbname)
$link = @mysqli_connect("localhost", "root", "jack0705") or 
die("ERROR: Could not connect. " . mysqli_connect_error());
// Check connection
var_dump($link);

echo "<p>Neeeeeeeeeeeeeeeeeeeeeeeew</p>";


?>
            </p>
            <h3>Create a database</h3>
<?php
$sql = "CREATE DATABASE testdatabase";
if(mysqli_query($link, $sql)) {
    echo "<p>Database store was created successfully</p>";
} else {
    echo "ERROR: Unable to execute $sql " . mysqli_error($link);
}




?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script>
        <script src="js/bootstrap.min.js">
        </script>
        
        </body>
</html>