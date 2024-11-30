<?php
include_once 'connection.php';
session_start();
if(!isset($_SESSION['username'])){
    header("location: login.php");
    exit;
}
$hour = date('G');
if ($hour < 12) {
    $greeting = "Good morning";
} elseif ($hour >= 12 && $hour < 17) {
    $greeting = "Good afternoon";
} else if($hour >=17 && $hour <=24){
    $greeting = "Good evening";
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url('images/bk7.jpg') center / cover no-repeat;
}

.container {
    width: 80%;
    max-width: 600px;
    margin: 100px auto;
    background:transparent;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    color:#189AB4;
    font-size: 36px;
    margin-bottom: 20px;
}

p {
    color: #666;
    font-size: 18px;
    margin-bottom: 30px;
}

a {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

a:hover {
    background-color: #0056b3;

}
</style>
<body>
    <div class="container">
        <h1><?php echo $greeting . ", " . $username; ?>!</h1>
        <p style="color: white;">Click the Below link to view the Paper</p>
        <a href="paper.php">click here</a>
    </div>
</body>
</html>
