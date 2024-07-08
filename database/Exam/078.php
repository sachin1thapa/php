




// write a PHP script to create a multidimensional 
// array name Product that will contain pcode, pname. and price. Initialize the array with at 
// least three instances. Also, Write an HTML script to display the initialized values of the 
// array in an HTML Table. (lq,078)



// print_r($product);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Displaying the Data </h1>

    <table border="1">

    <tr>
        <th>pcode</th>
        <th>pname</th>
        <th>price</th>
    </tr>
    <?php 
$product = [
    ['pcode' => 02 , 'pname' =>"bread" , 'price' =>20],
    ['pcode' => 02 , 'pname' =>"bread" , 'price' =>20],
    ['pcode' => 02 , 'pname' =>"bread" , 'price' =>20],
    ['pcode' => 02 , 'pname' =>"bread" , 'price' =>20]

];


foreach ($product as $key => $value) {
    echo "<tr>";
    echo "<td>" . $value['pcode'] . "</td>";
    echo "<td>" . $value['pname'] . "</td>";
    echo "<td>" . $value['price'] . "</td>";
    echo "</tr>";
}
?>

    
</table>
    
</body>
</html>