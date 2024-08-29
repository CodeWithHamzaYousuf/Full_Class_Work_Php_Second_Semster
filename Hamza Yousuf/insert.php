<?php
//Create Read Update Delete
include("connection.php");

if(isset($_POST['sub'])){

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $contact = trim($_POST['contact']);
    $city = ($_POST['city']);
    $gender = ($_POST['gender']);
    $course = implode(',',$_POST['course']);

    $query = "INSERT INTO `data base`( `Name`, `Email`, `Contact`, `City`, `Gender`, `Courses`)
    VALUES ('$name','$email','$contact ','$city','$gender','$course')";

    $result = mysqli_query($con,$query);

    if($result){
        echo "Data Inserted";
    }
    else{
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

        <label>Name</label>
        <input type="text" name="name">
        <br><br>

        <label>Email</label>
        <input type="email" name="email">
        <br><br>

        <label>Contact</label>
        <input type="text" name="contact">
        <br><br>

        <label>City</label>
        <select name="city">
            <option value="karachi">Karachi</option>
            <option value="lahore">Lahore</option>
            <option value="islamabad">Islamabad</option>
        </select>
        <br><br>

        <label>Gender</label><br>
        <label>Male</label>
        <input type="radio" name="gender" value="male">
        <label>Female</label>
        <input type="radio" name="gender" value="female">
        <br><br>

        <label>Courses</label>
        <br>
        <label>DM</label>
        <input type="checkbox" name="course[]" value="dm">
        <label>Web Development</label>
        <input type="checkbox" name="course[]" value="web development">
        <label>Graphic Designing</label>
        <input type="checkbox" name="course[]" value="graphic designing">
        <br><br>
        <input type="submit" name="sub">
    </form>
    
</body>
</html>