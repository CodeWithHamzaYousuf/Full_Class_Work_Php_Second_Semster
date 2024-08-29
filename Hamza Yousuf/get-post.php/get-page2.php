<?php
// echo $_GET['name'];
// echo "<br>";
// echo $_GET['email'];

if(isset($_GET['id'])){
    $id = $_GET['id'];

    if($id == 123){
        echo "Product 1 Credntial";
    }
    elseif($id == 321){
        echo "Product 2 Credntial";
    }
}

?>