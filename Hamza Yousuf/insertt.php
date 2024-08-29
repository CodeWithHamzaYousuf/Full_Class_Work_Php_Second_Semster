<?php

include("connnection.php");

if($_SERVER['REQUEST_METHOD'] ==  'POST'){
    $name = trim($_POST['name']);
    $image = $_FILES['image'];

    $allowed_types = ['image/jpeg','image/jpg','image/png'];

    if(!in_array($image['type'],$allowed_types) || $image['size']>1048576){
        die('invalid File Type Or Size');
    }

    $targed_dir = "uploads/";
    $targed_file = $targed_dir.basename($image['name']);
    if(!move_uploaded_file($image['tmp_name'],$targed_file)){
        die("Error Uploading Image");
    }

    $stmt = $conn->prepare("insert into tables(name,images) values (?,?)");

    $stmt->bind_param("ss",$name,$targed_file);

    $stmt->execute();

    header("location: index.html" );
}

?>