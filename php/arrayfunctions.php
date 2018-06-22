<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Array functions</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;   
            }
        </style> 

    </head>
        <body>
            <div class="container-fluid">
                <h1>Array Functions:</h1>
                <div>
<?php
$shoppingBasket1 = array("bread", "milk", "eggs", "bread");
$shoppingBasket2 = array("apple", "banana", "orange");
$shoppingBasket = array_merge($shoppingBasket1, $shoppingBasket2);
echo "<h3>Shopping Basket merges:</h3>";
print_r($shoppingBasket);
echo "<h3>Number of items in Shopping basket: </h3>" . count($shoppingBasket);


$count = array_count_values($shoppingBasket);
echo "<h3>Count numbers of items in basket</h3>";
print_r($count);
echo "<h3>Number of bread iteams in Basket: </h3>" . $count["bread"];


if(in_array("bread", $shoppingBasket)){
    echo "<p>There is bread in the basket.</p>";
}else{
    echo "<p>There is no bread in the basket.</p>";   
}

array_push($shoppingBasket,"yogurt");
echo "<h3>Shopping Basket after push: </h3>";
print_r($shoppingBasket);
?>
                    <br /><br /><br />
                    <form method="get">
                        <label for="item">Add item to shopping Basket:</label>
                        <input type="text" name="item" id="item">
                        <input type="submit" name="submit" value="Submit">
                    </form>
                    <br />
<?php
if($_GET["submit"]){
    if($_GET["item"]){
        array_push($shoppingBasket,$_GET["item"]); 
    }
}
echo "<h3>Shopping Basket after get method works:</h3>";
print_r($shoppingBasket);

                    
echo "<br />";
array_splice($shoppingBasket, 0, 4,array("mango", "kiwi")); 
# delete from 0 to 4 and insert from 0
echo "<h3>Shopping Basket after delete and add:</h3>";
print_r($shoppingBasket);

sort($shoppingBasket);
echo "<h3>Shopping Basket sorted in ascending order (reference the alphabet):</h3>";
print_r($shoppingBasket);
                    
echo "<br />";                    
echo "<br />";                    
echo "<br />";                    
echo "<br />";                    
echo "<br />";                    
echo "<br />";
$carMakes = array("BMW"=>"X5", "Audi"=>"A6", "Mercedes"=>"CLS");
echo "<h3>Car makes:</h3>";
print_r($carMakes);
asort($carMakes);
echo "<h3>Car makes sorted in ascending order by value:</h3>";
print_r($carMakes);
ksort($carMakes);
echo "<h3>Car makes sorted in ascending order by keys:</h3>";
print_r($carMakes);
?>
                    
                </div>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>