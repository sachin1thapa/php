<?php

//* it is a way to store information (in variables) to be used across multiple pages. By default, PHP session variables last until the user closes the browser. So; Session variables hold information about one single user, and are available to all pages in one application.



//* Session variables are stored in the associative array $_SESSION[].

//! session_start() , session_unset() , session_destroy() , session_name()  






session_start();


$_SESSION["name"] = "sachin";
$_SESSION["age"] = "22";
$_SESSION["faculty"] = "csit";
echo "Session variables are set."."<br>";



echo "Your name  is " . $_SESSION["name"] . ".<br>";
echo "and age  is " . $_SESSION["age"] . ".<br>";


$_SESSION["faculty"] = "bca";


unset($_SESSION["faculty"]);  //* remove the specific one

session_unset();  //* remove all session variables



session_destroy();  //* destroy the session


if(!isset($_SESSION)){
    echo "Your name  is " . $_SESSION["name"] . ".<br>";
    echo "and age  is " . $_SESSION["age"] . ".";
}else{
    echo "Session variables are not set.";
}


?>