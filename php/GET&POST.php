<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        Get and Post
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
            <h1>Get and Post</h1>
            <div>
<?php
echo "<h3>GET:</h3>";
if ($_GET["submit"] == TRUE) {
    var_dump($_GET);
    echo"<br /><br />";
    print_r($_GET);
    echo "<p>The <strong>get</strong> form has been submitted.</p>";
    if ($_GET["username"] == TRUE) {
        echo "<p>Hi " . $_GET["username"] . ". Welcome to my page!</p>";
    }
}

?>
            <form method="get" action="GET&POST.php">
                <label for="username">
                    Username:
                </label>
                <input type="text" name="test" id="test">
                <input type="text" name="username" id="username">
                <input type="submit" name="submit" id="Submit">
            </form>
<?php
echo"<br /><br /><br /><br /><br /><br />";
echo "<h3>POST:</h3>";
var_dump($_POST);
echo"<br /><br />";
print_r($_POST);
if ($_POST["submit"]) {
    echo "<p>The post form has been submitted.</p>";
    if ($_POST["country"]) {
        echo "<p>Your country is " . $_POST["country"] . ".</p>";
    }
}
?>            
            <form method="post" action="GET&POST.php">
                <label for="country">
                    Country:
                </label>
                <input type="text" name="country" id="country">
                <input type="submit" name="submit" id="Submit">
            </form>

            </div>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script>
        <script src="js/bootstrap.min.js">
        </script>
        
        </body>
</html>