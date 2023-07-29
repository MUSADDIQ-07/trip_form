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



