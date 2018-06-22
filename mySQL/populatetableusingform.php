<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        Insert using form
        </title>
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
            <h1>Insert using form</h1>
            <h3>Connect to database</h3>
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
            <h3>Send data to database</h3>


<?php

function _post($str){

    $val = !empty($_POST[$str]) ? $_POST[$str] : null;

    return $val;

}
// get user input
$id = _post("ID");
$firstname = _post("firstname");
$lastname = _post("lastname");
$email = _post("email");
$password = _post("password");

//error messages
$missingFirstname = "<p><strong>Please enter your firstname!</strong></p>";
$missingLastname = "<p><strong>Please enter your lastname!</strong></p>";
$missingemail = "<p><strong>Please enter your email!</strong></p>";
$invalidemail = "<p><strong>Please enter a valid email address!</strong></p>";
$missingPassword = "<p><strong>Please enter a password!</strong></p>";

$errors = "";
if(_post("submit")) {
    //check for errors
    if(!$firstname){
        $errors .= $missingFirstname;   
    }else{
         $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);  
    }
    if(!$lastname){
        $errors .= $missingLastname;   
    }else{
         $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);  
    }
    if(!$email){
        $errors .= $missingemail;   
    }else{
         $email = filter_var($email, FILTER_SANITIZE_EMAIL); 
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors .= $invalidemail;   
        }
    }
    if(!$password){
        $errors .= $missingPassword;   
    }
    
    if($errors){
        $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
        echo $resultMessage;
    }else {
        //no errors, prepare variables for the query
        $tblname = "users";
        $firstname = mysql_real_escape_string($link, $firstname);
        $lastname = mysql_real_escape_string($link, $lastname);
        $email = mysql_real_escape_string($link, $email);
        $password = mysql_real_escape_string($link, $Password);
        $password = md5($password);

        //execute insert query
        if(!$id){
            $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";   
        }else{
            $sql = "INSERT INTO users (ID, firstname, lastname, email, password) VALUES ('$id', '$firstname', '$lastname', '$email', '$password')";   
        }
        if(mysqli_query($link, $sql)){
            $resultMessage = '<div class="alert alert-success">Data added successfully to the database table</div>';
            echo $resultMessage;
        }else{
            $resultMessage = '<div class="alert alert-warning">ERROR: Unable to excecute: ' .$sql. '. ' . mysqli_error($link). '</div>';
            echo $resultMessage;
        }
    }
    
}
?>
        <form method='post'>
            <div class="form-group">
                <label for="ID">ID:</label>
                <input type="number" id="ID" placeholder="ID" class="form-control" name="ID" maxlength="4">
            </div>
            <div class="form-group">
                <label for="firstname">Firstname:
                <input type="text" id="firstname" placeholder="firstname" class="form-control" name="firstname" maxlength="30">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname:</label>
                <input type="text" id="lastname" placeholder="lastname" class="form-control" name="lastname" maxlength="30">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="email" class="form-control" name="email" maxlength="30">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" placeholder="password" class="form-control" name="password" maxlength="40">
            </div>
            <input type="submit" name="submit" class="btn btn-success btn-lg" value="Send data">
        </form>
        </div>
        </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script>
        
        </body>
</html>