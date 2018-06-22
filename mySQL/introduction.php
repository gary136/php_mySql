<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        Introduction
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
            <h1>Connect to database</h1>
            <p>
<?php
/*mysqli_connect(host, username, password, dbname)
$link = @mysqli_connect("185.116.214.59", "webjackt_user", "jack07054357") or 
die("ERROR: Could not connect. " . mysqli_connect_error());;
// Check connection

var_dump($link);

echo "Success: A proper connection to MySQL was made! 
The my_db database is great." . PHP_EOL;*/
//check connection
/*if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
if (mysqli_connect_error()) {
    die("ERROR: Unable to connect");
} else {
    echo "<p>Connected okay to the database</p>";
}*/
// connection
$link = new mysqli("localhost", "root", "jack0705", 'db03');
// Check connection
if($link->connect_errno > 0) {
    die("Unable to connect: " . $link->connect_error);
}
echo "Success: A proper connection to MySQL was made! 
The my_db database is great." . PHP_EOL;

?>
            </p>
        
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script>
        <script src="js/bootstrap.min.js">
        </script>
        
        </body>
</html>