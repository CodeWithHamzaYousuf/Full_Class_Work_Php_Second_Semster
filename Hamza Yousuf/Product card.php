<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .card-main{
        height: 300px;
        padding: 10px;
        width: 150px;
        background-color: aqua;
    }
    .card-head{
        padding: 5px;
        width: 100%;
        height: 70px;
    }
    .card-head img{
        width: 100%;

    }
    .card-body{
        color: black;
        height: 20px;

    }
</style>
<body>
    <?php

    require("connection.php");

    $sql = "select * from img_up";

    $result = $conn->query($sql);

    if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){
            ?>
    <div class="card-main">
        <div class="card-head">
            <img src="" <?php echo $row['images'] ?>>
        </div>
        <div class="card-body">
            <h3><?php $row['name']?></h3>
            <p><?php $row['id'] ?></p>
            <button>Buy Now</button>
        </div>
    </div>
    <?php }

    }
    else{
        echo "No Data Available";
    }
    ?>
    
</body>
</html>