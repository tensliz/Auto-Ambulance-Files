<?php
require_once('fetchdb.php');

$query1 = "SELECT * FROM contact";
$result1 = mysqli_query($db1, $query1);

$query2 = "SELECT * FROM quote";
$result2 = mysqli_query($db2, $query2);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Data from Contact us Form and Quote</title> <!--Title of the page-->
    <link rel="stylesheet" type="text/css" href="css/home.css" /> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equix="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> 
	
</head>
<body class="bg-secondary">
    <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="display-6 text-center"> Contact Us Data</h2>
                        </div>
                        <div class ="card-body">
                            <table class="'table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>ID</td>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td>Email</td>
                                    <td>Message</td>
                                    <td>Delete</td>
                                </tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result1))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $row ['id']; ?></td>
                                        <td><?php echo $row ['firstName']; ?></td>
                                        <td><?php echo $row ['lastName']; ?></td>
                                        <td><?php echo $row ['email']; ?></td>
                                        <td><?php echo $row ['message']; ?></td>
                                        <td><a href ="#" class="btn btn-primary">Delete</a></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                            </table>
                        </div>
                     </div>
                     <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="display-6 text-center">Quote Data</h2>
                        </div>
                        <div class ="card-body">
                            <table class="'table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>ID</td>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td>Email</td>
                                    <td>Telephone Number</td>
                                    <td>Car Model</td>
                                    <td>License Number</td>
                                    <td>Year</td>
                                    <td>Comments</td>
                                    <td>Delete</td>
                                </tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result2))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $row ['id']; ?></td>
                                        <td><?php echo $row ['firstName']; ?></td>
                                        <td><?php echo $row ['lastName']; ?></td>
                                        <td><?php echo $row ['email']; ?></td>
                                        <td><?php echo $row ['tel']; ?></td>
                                        <td><?php echo $row ['carModel']; ?></td>
                                        <td><?php echo $row ['licenseNum']; ?></td>
                                        <td><?php echo $row ['year']; ?></td>
                                        <td><?php echo $row ['comments']; ?></td>
                                        <td><a href ="#" class="btn btn-primary">Delete</a></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                            </table>
                        </div>
                     </div>
                </div>
            </div>
    </div>
</body>
</html>