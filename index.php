<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";
$database = "travelmembers_data";


$con = mysqli_connect($server, $username, $password, $database);


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Only run this block if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $id = $_POST['id'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $location = $_POST['location'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $other = $_POST['other'] ?? '';

    $sql = "INSERT INTO `tripdetails` (`name`, `id`, `gender`, `location`, `email`, `phone`, `other`, `dd`) 
            VALUES ('$name', '$id', '$gender', '$location', '$email', '$phone', '$other', current_timestamp())";

    if (mysqli_query($con, $sql)) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mozilla+Headline:wght@200..700&display=swap" rel="stylesheet">
</head>
<body>
    <img class="bg" src="office.jpg" alt="XYZ Company">
    <div class="container">
        <h2>Welcome to XYZ on-site trip form</h2>
        <p>Enter your details to participate in the trip</p>
        
<form action="index.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter your name">
    <input type="text" name="id" id="id" placeholder="Enter your official id">
    <input type="text" name="gender" id="gender" placeholder="Enter your gender">
    <input type="text" name="location" id="location" placeholder="Enter your current location">
    <input type="email" name="email" id="email" placeholder="Enter your email here">
    <input type="text" name="phone" id="phone" placeholder="Enter your phone number here">
    <textarea name="other" id="other" cols="30" rows="5" placeholder="Enter any other concerns if you have any"></textarea>
    <button class="btn" type="submit">Submit</button>
</form>

    </div>
   <script src="Index.js"></script>
   

</body>
</html>