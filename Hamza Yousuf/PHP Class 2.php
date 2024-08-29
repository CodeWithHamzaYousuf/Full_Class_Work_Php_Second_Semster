<?php

// $username = "hamza";
// $password = "hamza123";
// $cat = "2";

// if($username != "" && $password != ""){
//     if($username == "Sabih" && $password == "Sabih123" && $cat == 1)
//     {
//         echo "Welcome Admin";
//     }
//     elseif($username == "hamza" && $password == "hamza123" && $cat == 2)
//     {
//         echo "Welcome Faculty";
//     }
//     elseif($username == "Irfan" && $password == "Irfan123" && $cat == 3)

// {
//     echo "Welcome SRO";
// }
// else{
//     echo "Login Unsuccesfull";
// }
// }
// else{
//     echo "Both textboxes must need to be filled";
// }

$day = "Monday";
$time = "Morning";
switch($day)
{
    case "Monday":{
        echo "Welcome Monday";

        switch($time){
            case "Morning":{
                echo "Good Morning";
                break;
            }
            case "Afternoon":{
                echo "Good Aternoon";
                break;
            }
        }
        break;
    }
    case "Tuesday":{
        echo "Welcome Tuesday";
        break;
    }
    case "Wednesday":{
        echo "Welcome Wednesday";
        break;
    }
}
?>