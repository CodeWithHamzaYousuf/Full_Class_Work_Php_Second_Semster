<?php

$con = mysqli_connect('localhost','root','','hamza');
if($con){
    echo "Connected";
}
else{
    echo "Error";
}
?>