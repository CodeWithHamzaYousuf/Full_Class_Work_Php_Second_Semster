<?php
session_start();
if(!isset($_SESSION['id'])){
        header("location:login.php");
}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Dashboard,
        <?php echo htmlspecialchars($_SESSION['username']); ?>


        <a href="logout.php">Logout</a>
</body>
</html>