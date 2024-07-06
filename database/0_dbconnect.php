<?php
// ! mysqli_connect(servername , username , password ,database_name )
// fourth paramater if we want to directly connect to exisiting database

// ! mysqli_connect() , mysqli_connect_error() , mysqli_query() , mysqli_close()

//* mysqli_connect() ==> databse connect
//* mysqli_connect_error() ==> if there is the error while connecting the database
//* mysqli_query($conn , $query) ==> to query to into databse (single)
//* mysqli_multi_query($conn , $query) ==> to query to into databse (multiple)
//* mysqli_close($conn) ==> close the connection
//* mysqli_error($conn) ==> show the last error description
//* mysqli_num_rows($conn)
// *mysqli_fetch_assoc()

$servername = "localhost";
$username="root";
$password = "";


$conn = mysqli_connect($servername , $username , $password);
if(!$conn){
    die("Connection failed : " .mysqli_connect_error());
}

echo "Connected Sucessfully";
mysqli_close($conn);



?>

