<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    error_reporting(0);
    require('connection.php');

    if(isset($_POST["delete"])){
        $id = $_POST["myid"];

        $query = "delete from details where id=$id";

        $result = mysqli_query($conn,$query);

        if($result){
            header("location:show.php");
            exit;
        }
        else{
            echo "Not Deleted";
        }
    }
    ?>

    <form method="post">
        <input type="hidden" name="myid" value="<?php echo $_GET["xyz"]; ?>"/>
        <input type="submit" value="YES" name="delete"/>
        <a href="show.php">NO</a>
    </form>
    
</body>
</html>