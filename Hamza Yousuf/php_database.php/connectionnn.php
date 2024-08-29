<?php
// con conn db_link db_con connection
$con = mysqli_connect('localhost','root','','aptech');

if($con){
    echo "Connected";
}
else{
    echo "Error";
}
?>