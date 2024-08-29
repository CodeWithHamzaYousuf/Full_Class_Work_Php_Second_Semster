<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome Res</h1>
    <?php
    session_start();

    if(isset($_SESSION["rec"])){
        $name = $_SESSION["rec"];
        echo "Welcome Mr/Mrs : ".$name."<br>";
    }
    else{
        header("location:login.php");
    }
    if(isset($_POST["logout"])){
        session_destroy();
        header("location:login.php");
    }
    ?>
    <form method="post">
        <input type="submit" name="logout" value="Logout"/>
    </form>
</body>
</html>