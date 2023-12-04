<?php
session_start();
include("loginconnection.php");

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // hash the password before checking
    $username = strip_tags(mysqli_real_escape_string($conn, trim($username)));
    $password = strip_tags(mysqli_real_escape_string($conn, trim($password)));

    // query
    $sql = "SELECT * FROM login WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $password_hash = $row['password'];
        if (password_verify($password, $password_hash)) {
            // start a session and store user data
            session_start();
            $_SESSION['username'] = $username;

            header("Location: fetch.php");
            exit();
        } else {
            echo '<script>
                alert("Login Failed. Invalid username or password");
                window.location.href = "login.php";
              </script>';
        }
    }
    $stmt->close();
}
?>