<?php


// cookies is the user identity . a cookies is the small files that is stored in the user computer . Each time the same computer requests a page with a browser, it will send the cookie too.

// $_COOKIE


// create a cookies
// setcookie(name, value, expires, path, domain, secure, httponly);

// name is only required parameter

// create a cookies
setcookie("name", "sachin", time() + (86400*30), "/");   // 86400 = 1 day
setcookie("age", "22", time() + (86400*30), "/");  
setcookie("faculty", "csit", time() + (86400*30), "/");   

// dispaly the cookies
if(isset($_COOKIE["name"]) and isset($_COOKIE["age"]) and isset($_COOKIE["faculty"])){
    echo "Cookie is set"."<br>";
    echo "Your name is ".$_COOKIE["name"]."<br>";
    echo "Your age is ".$_COOKIE["age"]."<br>";
    echo "Your faculty is ".$_COOKIE["faculty"]."<br>";
}else{
    echo "Cookie is not set";
}

// modify the cookies
setcookie("faculty", "bca", time() + (86400*30), "/");   

// delete the cookies

// setcookie("name", "", time() - 3600, "/");   