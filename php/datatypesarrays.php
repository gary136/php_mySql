<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        array
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
            <h1>Arrays</h1>
            <div>
<?php
// Index Arrays
$carmakes = array("Audi", "BMW", "Mercedes");
echo "<h3>Car makes:</h3>";
print_r($carmakes);
echo "<br />";
echo "<p>First element --- $carmakes[0]</p>";

//Associated Arrays
echo "<h3>Shopping bastket:</h3>";
echo "print through print_r():<br />";
$shoppingBasket1 = array("a"=>"bread", "b"=>"milk", "c"=>"eggs");

print_r($shoppingBasket1);
echo "<br />";
echo "<br />";
echo "print through var_dump():<br />";
var_dump($shoppingBasket1);
$shoppingBasket2 = array("b"=>"milk", "a"=>"bread", "c"=>"eggs");
echo "<p>shoppingBasket1 == shoppingBasket2?</p>";
var_dump($shoppingBasket1 == $shoppingBasket2);
$shoppingBasket3 = array("d"=>"yogurt", "e"=>"orange", "f"=>"apple");
echo "<br />";
echo "<br />";
print_r($shoppingBasket3);
echo "<p>shoppingBasket1 != shoppingBasket3?</p>";
var_dump($shoppingBasket1 <> $shoppingBasket3);
echo "<br />";
print_r($shoppingBasket1 + $shoppingBasket3);
?>
            

        </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script>
        <script src="js/bootstrap.min.js">
        </script>
        
        </body>
</html>