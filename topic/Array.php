<?php 

// there are 3 types of array in php
// 1. indexed array ==> array with numeric index and stored in a linear form
// 2. associative array ==> array with string index and stored in a key value pair
// 3. multidimensional array ==> array with multiple array inside an array


// 1. indexed array
$indexArray = array("apple", "banana", "mango", "orange");
echo $indexArray[0];
print_r($indexArray);

// 2. associative array
$associativeArray = array("name" => "ram", "age" => 25, "address" => "ktm");
echo $associativeArray['name'];
print_r($associativeArray);

// 3. multidimensional array
$multiArray = array(
    array("name" => "ram", "age" => 25, "address" => "ktm"),
    array("name" => "shyam", "age" => 26, "address" => "lalitpur"),
    array("name" => "hari", "age" => 27, "address" => "bhaktapur")
);
echo $multiArray[0]['name'];
print_r($multiArray);


// looping through the array

// foreach($indexArray as $value){
//     echo $value;
// }

// foreach($associativeArray as $key => $value){
//     echo $key . " " . $value;
// }

foreach($multiArray as $value){
    foreach($value as $key => $val){
        echo $key . " " . $val;
    }
}


// array functions
// 1. count() ==> count the number of elements in an array
echo count($indexArray);

// 2. array_push() ==> add one or more elements to the end of an array
// 3. array_pop() ==> remove the last element of an array



// implode() ==> join array elements with a string
echo implode(",", $indexArray);

// explode() ==> split a string by a string
$str = "hello,world";
print_r(explode(",", $str));

// sort() ==> sort an array in ascending order




$error =[];
$error['name'] = "";
$error['scl'] = "enter name";

print_r($error);

// echo isset($error['name']);
// echo empty($error['name']);
array_push($error , "scl");
print_r($error);