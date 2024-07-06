<?php

$conn = mysqli_connect("localhost" , "root" , "" , "College");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO StudentDetails(id, firstName, lastName, faculty, sem)
VALUES
(4, 'hari', 'dahal', 'ba', 6),
(5, 'gita', 'khadka', 'bsc', 2),
(6, 'suman', 'ghimire', 'csit', 1)";

if(mysqli_query($conn , $sql)){
    echo "Data inserted successfully";
}else{
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
