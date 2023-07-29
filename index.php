<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$insert = false;
if (isset($_POST['name'])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "us_trip"; // Add the database name here

    $connection = new mysqli($servername, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection to the database failed due to: " . $connection->connect_error);
    }
    // echo "Successfully connected to the database.";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dd`) 
            VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    // echo $sql;

    if ($connection->query($sql) === true) {
        // echo "Successfully inserted";
        $insert = true;
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom to Travel Form</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <div class="container">
        <h1>Welcome to GMIT US Trip Form</h1>
        <p>Enter Your details and submit your form to confirm your participation in trip</p>
        
        <?php
        if($insert==true){
            echo"<p class='submitMsg'>Thanks For Submitting Your Form.We are happy to see you joining us for the us trip</p>";
        }
        ?>
        

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
            <input type="email" name="email" placeholder="enter your email">
            <input type="phone" name="phone" placeholder="enter your phone no">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>
    <script src="index.js"></script>

</body>
</html>