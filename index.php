<?php 
error_reporting(0);

$firstName =  $_POST['firstName'];
$lastName =   $_POST['lastName'];
$email =      $_POST['email'];

if (isset($_POST['submit'])){
echo $firstName . ' / ' . $lastName . ' / ' . $email;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <br><br>

    <a href="index.html">home</a>
</body>
<script>
localStorage.setItem('store_name', 'data_name'); 
//e.g
localStorage.setItem('name', 'Ahmed');</script>
</html>