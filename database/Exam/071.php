<?php 
// Develop a website that checks validity of a user during the log-in process. Assume that the login data (username and password) are already stored in a database. Use client-side script to validate the user input during login process.

$conn = sqli_connect("localhost" , "root", "" , "userdetails");

if(!$conn){
    die("Connection failed : " . sqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"]=="POST" and isset($_POST["submit"])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $sql = "Select username , password from studentdetails where username = $username and password = $password ";

    if(sqli_query($conn , $sql)){
        $result = mysqli_query($conn, $sql);

    }else{
        echo "Error : ". sqli_error($conn);
    }

    if(sqli_num_rows($result)>0){
        echo "login sucessfull ";
    }
    else{
        echo "login failed ";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

<form  method="post">
<label for="username">Username</label>
    <input type="text" name="username" placeholder="Enter the username" required>
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Enter the password" required>
    <button type="submit" name="submit">Login</button>
</form>
    
</body>
</html>





