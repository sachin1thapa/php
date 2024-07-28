<?php


//* iset() is used to check if a variable is set or not
//* empty() is used to check if a variable is empty or not
//*  preg_match(pattern , $str) is used to perform a pattern match on a string
//*  filter_var($string , values ) is used to filter a variable with a specified    filter , values==> FILTER_VALIDATE_EMAIL, FILTER_VALIDATE_INT
//*  htmlspecialchars() is used to convert special characters to HTML entities
//*  stripslashes() is used to un-quotes a quoted string
//*  trim() is used to remove whitespace from both sides of a string
//*  $_SERVER["REQUEST_METHOD"] is a super global variable that returns the request method used to access the page (GET, POST, PUT, DELETE)
//*  $_POST is a super global variable used to collect form data after submitting an HTML form with method="post"


$nameError = $emailError = $passwordError = $ageError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $age = trim($_POST["age"]);

    // Validate name
    if (empty($name)) {
        $nameError = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameError = "Only letters and white space allowed in name.";
    }

    // Validate email
    if (empty($email)) {
        $emailError = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format.";
    }

    // Validate password
    if (empty($password)) {
        $passwordError = "Password is required.";
    } elseif (strlen($password) < 6) {
        $passwordError = "Password must be at least 6 characters long.";
    }

    // Validate age
    if (empty($age)) {
        $ageError = "Age is required.";
    } elseif (!filter_var($age, FILTER_VALIDATE_INT)) {
        $ageError = "Invalid age format.";
    } elseif ($age < 18) {
        $ageError = "You must be at least 18 years old.";
    }

    
    if (empty($nameError) && empty($emailError) && empty($passwordError) && empty($ageError)) {
        echo "Signup successful!";
       
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Form</title>
</head>

<body>
  <form  method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>" required>
    <?php if (!empty($nameError)) echo "<p style='color: red;'>$nameError</p>"; ?>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
    <?php if (!empty($emailError)) echo "<p style='color: red;'>$emailError</p>"; ?>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value="<?php echo isset($password) ? htmlspecialchars($password) : ''; ?>" required>
    <?php if (!empty($passwordError)) echo "<p style='color: red;'>$passwordError</p>"; ?>
    <br><br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" value="<?php echo isset($age) ? htmlspecialchars($age) : ''; ?>" required>
    <?php if (!empty($ageError)) echo "<p style='color: red;'>$ageError</p>"; ?>
    <br><br>
    <input type="submit" value="Signup">
  </form>
</body>

</html>
