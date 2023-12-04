<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $host = "localhost";
    $dbname = "test";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host, $username, $password, $dbname);
    if (mysqli_connect_errno()){
        die("Connection Error: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO contact (firstName, lastName, email, message) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        die("Statement Preparation Error: " . mysqli_stmt_error($stmt));
    }

    mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $email, $message);
    mysqli_stmt_execute($stmt);

    echo "Record has been saved";

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>