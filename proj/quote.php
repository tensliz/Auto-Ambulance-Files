<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $carModel = $_POST['carModel'];
    $licenseNum = $_POST['licenseNum'];
    $year = $_POST['year'];
    $comments = $_POST['comments'];

    $host = "localhost";
    $dbname = "quote_db";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host, $username, $password, $dbname);
    if (mysqli_connect_errno()){
        die("Connection Error: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO quote (firstName, lastName, email, tel, carModel, licenseNum, year, comments) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "sssissis", $firstName, $lastName, $email, $tel, $carModel, $licenseNum, $year, $comments);
    mysqli_stmt_execute($stmt);

    echo "Record has been saved";
    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>