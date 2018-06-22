<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        If else and switch
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
            <h1>If else and switch</h1>
            <div>
<?php
$believeinyourdream = false;
if ($believeinyourdream) {
    echo "<p>You will be successful.</p>";
} else {
    echo "<p>Believe in your dream.</p>";
}

$x = ($believeinyourdream)?"A":"B";
echo $x;

$temperature = 25;
if($temperature<15) {
    echo "<p>It is cold.</p>";
} elseif($temperature>30) {
    echo "<p>It is hot.</p>";
} else {
    echo "<p>The temperature is medium.</p>";
}
$strength = "belief";
switch($strength) {
    case "belief":
        echo "A";
        break;
    case "communication":
        echo "B";
        break;
    case "competition":
        echo "C";
        break;
    case "determination":
        echo "D";
        break;
    default:
        echo "E";
        break;
}
?>
            

        </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script>
        <script src="js/bootstrap.min.js">
        </script>
        
        </body>
</html>