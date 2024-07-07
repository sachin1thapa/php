<?php

$conn = mysqli_connect("localhost", "root", "", "College");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM StudentDetails";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    while($ans = mysqli_fetch_assoc($result)){
        print_r($ans );
        echo "<br>";
    }
}

mysqli_close($conn);
?>
