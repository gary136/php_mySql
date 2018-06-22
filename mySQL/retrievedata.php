<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Retrieve data</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            h1{
                color:purple;   
            }
            h3{
                color:#42d5ce;   
            }
            .containingDiv{
                border:1px solid #7c73f6;
                margin-top: 100px;
                border-radius: 15px;
            }
        </style> 

    </head>
        <body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10 containingDiv">
            <h1>Retrieve data from a table:</h1>
            <h3>Connect to database:</h3>
<?php
//mysqli_connect(host, username, password, dbname)
$link = @mysqli_connect("localhost", "root", "jack0705", "testdatabase") or die("ERROR: Unable to connect: " . mysqli_connect_error());

echo "<p>Connected successfully to the database.</p>";
?>
            <h3>Retrieve data from database:</h3>
<?php
$sql = "select * from users";
$result = mysqli_query($link, $sql);
if($result) {
    print_r($result);
    echo "<br />";
    if (mysqli_num_rows($result)>0) {
        echo "<table class='table table-stripped table-hover table-condensed table-bordered'>
                    <tr>
                    <th>ID</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>email</th>
                    <th>password</th>
                    </tr>
            ";
        $count = 0;
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["firstname"] . "</td>";
            echo "<td>" . $row["lastname"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "</tr>";
            /*$count++;
            echo "<p>Row number: $count</p>";
            print_r($row);*/
        }
        echo "</table>";
//close the result set
        mysqli_free_result($result);
        /*echo "<p>Call 1</p>";
        print_r(mysqli_fetch_array($result, MYSQLI_ASSOC));
        echo "<p>Call 2</p>";
        print_r(mysqli_fetch_array($result, MYSQLI_ASSOC));
        echo "<p>Call 3</p>";
        print_r(mysqli_fetch_array($result, MYSQLI_ASSOC));*/
    } else {
        echo "<p>mySql returned an empty result set</p>";
    }
} else {
    echo "<p>Unable to execute $sql. " . mysqli_error($link) ."</p>";
}
?>
                      
        </div>
    </div>
</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>