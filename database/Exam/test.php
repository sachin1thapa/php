<?php 
$product = [
    ['pcode' => 02 , 'pname' =>"bread" , 'price' =>20],
    ['pcode' => 03 , 'pname' =>"brea" , 'price' =>60],
    ['pcode' => 012 , 'pname' =>"read" , 'price' =>206],
    ['pcode' => 027 , 'pname' =>"brad" , 'price' =>260]
];

foreach($product as $value){
    echo "Product Code: " . $value['pcode'] . "<br>";
    echo "Product Name: " . $value['pname'] . "<br>";
    echo "Price: " . $value['price'] . "<br><br>";
}
?>
