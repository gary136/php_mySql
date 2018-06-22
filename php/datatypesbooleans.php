<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>data types: booleans</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;   
            }
        </style>

    </head>
        <body>
            <div class="container-fluid">
                <h1>Booleans:</h1>
                <div>
<?php
$booleanVariable1 = (1<2);
var_dump($booleanVariable1);
$booleanVariable2 = (1>2);
var_dump($booleanVariable2);
$booleanVariable3 = $booleanVariable1 || $booleanVariable2;
var_dump($booleanVariable3);
var_dump(!$booleanVariable1);
?>
                </div>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>