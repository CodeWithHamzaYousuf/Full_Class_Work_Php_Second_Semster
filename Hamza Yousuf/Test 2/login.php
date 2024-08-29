<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wid  th=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $con = mysqli_connect("localhost","root","","emp");
    if(isset($_POST["login"])){
        $name = $_POST["name"];
        $pass = $_POST["pass"];
        $query = "select * from login where username= '$name' and password= '$pass'";
        $res = mysqli_query($con,$query);
        $number = mysqli_num_rows($res);
        if($number==1){
            while($data = mysqli_fetch_array($res)){
                $NAME = $data[1];
                $PASS = $data[2];

                if($NAME==$name && $PASS==$pass){
                    $_SESSION["rec"]=$NAME;
                    header("location:index.php");
                }
            }
        }
        else{
            echo "Incorrect Username Or Password";
        }
    }
    if(isset($_SESSION["rec"])){
        header("location:index3.php");
    }
    ?>
    <h1>Login Form</h1>
    <form method="post">
        <input type="text" name="name" placeholder="Enter a username"/><br><br>
        <input type="password" name="pass" placeholder="Enter a Password"/><br><br>
        <input type="submit" value="Login" name="login"/>
    </form>
    
</body>
</html>