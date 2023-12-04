<?php
    include("loginconnection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Auto Ambulance</title> <!--Title of the page-->
    <link rel="stylesheet" type="text/css" href="css/home.css" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<a href="https://www.flaticon.com/free-icons/engine" title="engine icons">Engine icons created by Freepik - Flaticon</a>-->

	<style>
	body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
	.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
	.fa-anchor,.fa-coffee {font-size:200px}
	</style>
</head>

<body>
<div class="login-form">
    <form action="loginform.php" onsubmit="return isValid()" method="post" name="login-form">
        <label>Username:</label><br>
        <input type="text" id="fname" name="username" placeholder="Username">
        
        <label>Password:</label><br>
        <input type="password" id="password" name="password" placeholder="Password"><br><br>
        
        <input type="submit" id="btn" value="Login" name="submit"/>
    </form>
</div>

<script>
    function isValid() {
        var username = document.forms["login-form"]["username"].value;
        var password = document.forms["login-form"]["password"].value;

        if (username === "" && password === "") {
            alert("Username and password fields are empty!");
            return false;
        } else {
            if (username === "") {
                alert("Username is empty");
                return false;
            }
            if (password === "") {
                alert("Password is empty");
                return false;
            }
        }
    }
</script>
</body>
</html>