<?php

$conn = mysqli_connect("localhost" , "root" , "" , "College");
if(!$conn){
    die("Connection failed").mysqli_connect_error();
}

$sql = "CREATE TABLE StudentDetails(
    id INT PRIMARY KEY ,
    firstName varchar(20) not null,
    lastName varchar(20) not null,
    faculty varchar(10) not null,
    sem int not null,
)";

if(mysqli_query($conn , $sql)){
    echo "Table created ";
}else{
    echo "Eror". mysqli_error($conn);
}
mysqli_close($conn);
?>
