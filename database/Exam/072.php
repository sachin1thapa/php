<?php
//! Develop a simple website that stores its contents in a database and displays those contents from the database. Assume at least five different contents

$conn = mysqli_connect("localhost", "root", "", "form");

if(!$conn){
    die("Error: " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
    $product = $_POST["productname"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $description = $_POST["description"];

    $sql = "INSERT INTO products (product, quantity, price, description) VALUES ('$product', '$quantity', '$price', '$description')";

    if(!mysqli_query($conn, $sql)){
        echo "Error: " . mysqli_error($conn);
    } else {
        echo "Data is inserted successfully.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting Data</title>
</head>
<body>
    <form method="post">
        Product Name: 
        <input type="text" name="productname" placeholder="Enter the product name" id="productname">
        <br>
        Quantity: 
        <input type="text" name="quantity" placeholder="Enter the quantity">
        <br>
        Price:
        <input type="number" name="price" placeholder="Enter the price">
        <br>
        Description: 
        <input type="text" name="description" placeholder="Enter the description">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <h2>Displaying the data</h2>

    <table border="1">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Description</th>
        </tr>

        <?php 
        $sql = "SELECT * FROM products";
        $results = mysqli_query($conn, $sql);
        if(mysqli_num_rows($results) > 0){
            while($row = mysqli_fetch_assoc($results)){
                echo "<tr>";
                echo "<td>" . $row["product"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "</tr>";
            }
        }
        mysqli_close($conn); 
        ?>
    </table>
</body>
</html>
