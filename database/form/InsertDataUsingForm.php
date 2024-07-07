<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "form";

$conn = mysqli_connect("localhost" ,$username , $password , $db );

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $faculty = $_POST['faculty'];
        $sem = $_POST['sem'];


$sql = "INSERT INTO studentdetails (firstname, lastname, faculty, semester) VALUES ('$fname', '$lname', '$faculty', '$sem')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form method="post">
        <label for="fname">FName</label>
        <input type="text" id="fname" name="fname" placeholder="Enter the first name" /> <br>
        <label for="lname">LName</label>
        <input type="text" id="lname" name="lname" placeholder="Enter the last name" /> <br>
        <label for="faculty">Faculty</label>
        <input type="text" id="faculty" name="faculty" placeholder="Enter the faculty" /><br>
        <label for="sem">Semester</label>
        <input type="number" id="sem" name="sem" placeholder="Enter the semester" /> <br>

        <input type="submit" value="Submit">
    </form>


    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Faculty</th>
            <th>Semester</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "form");
        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM studentdetails";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            while($ans = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$ans['firstname']."</td>";
                echo "<td>".$ans['lastname']."</td>";
                echo "<td>".$ans['faculty']."</td>";
                echo "<td>".$ans['semester']."</td>";
                echo "</tr>";
            }
        }
        mysqli_close($conn);
        ?>

</body>

</html>

