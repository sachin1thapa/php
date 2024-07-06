<?php

$conn = mysqli_connect("localhost" , "root" , "" , "College");
if(!$conn){
    die("Connection failed").mysqli_connect_error();
}

$sql = "insert into StudentDetails(id,firstName,lastName,faculty , sem )
values
(1 , 'sachin' , 'thapa' 'csit', 5)
";



if(mysqli_query($conn , $sql)){
    echo "Data Inserted sucessfully ";
}else{
    echo "Error : ". mysqli_error($conn);
}
mysqli_close($conn);
?>