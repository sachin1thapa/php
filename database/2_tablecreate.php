<?php

$conn = mysqli_connect("localhost" , "root" , "" , "College");
if(!$conn){
    die("Connection failed").mysqli_connect_error();
}

$sql = "CREATE TABLE StudentDetails(
    id INT PRIMARY KEY,
    firstName  VARCHAR(20) NOT NULL,
    lastName VARCHAR(20) NOT NULL,
    faculty VARCHAR(10) NOT NULL,
    sem INT NOT NULL
)";

if(mysqli_query($conn , $sql)){
    echo "Table created ";
}else{
    echo "Eror". mysqli_error($conn);
}
mysqli_close($conn);
?>
