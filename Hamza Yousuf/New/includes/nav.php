<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
    }

    a{
        text-decoration: none;
    }
    .nav-main{
        background-color: black;
        width: 100%;
        height: 70px;
        display: flex;
        justify-content: space-around;
    }

    .nav-sub2{
        display: flex;
        padding: 10px;
    }

    .items{
        padding: 10px;
        font-size: 20px;
        color: white;
    }
    .items:hover{
        background-color: azure;
        transition: 0.5s;
        color: black;
    }
</style>
<body>
    <div class="nav-main">
        <div class="nav-sub">

        </div>
    
    <div class="nav-sub2">      
        <a href="#"><div class="items">Home</div></a>
        <a href="insert.php"><div class="items">Add Data</div></a>
        <a href="show.php"><div class="items">Show Data</div></a>
    </div></div>
</body>
</html>