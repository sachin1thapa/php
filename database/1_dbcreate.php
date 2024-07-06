<?php

$conn = mysqli_connect("localhost" , "root" , "");

if(!$conn){
    die("Connection error :  ".mysqli_connect_error());
}

$sql = "CREATE DATABASE College";

if(mysqli_query($conn , $sql)){
    echo "Database created sucessfully ";
}else{
    echo "Error while creating the database ".mysqli_error($conn);
}
mysqli_close($conn);


?>