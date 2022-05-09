<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="sql_invoicing";

$con = new mysqli($host, $user, "", $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

$con->close();
?>
    <?php 
    $color ="blue";
    echo "My car is $color" 
    ?>
</body>
</html>