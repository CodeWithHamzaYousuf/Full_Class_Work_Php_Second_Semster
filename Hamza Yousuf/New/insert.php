<?php
require("includes/nav.php");


include("connection.php");

if(isset($_POST["sub"])){

   $name = trim($_POST['name']);
   $email = trim($_POST['email']);
   $contact = trim($_POST['contact']);
   $city = $_POST['city'];
   $gender = $_POST['gender'];
   $course = implode(',', $_POST['course']);


   $query = "insert into details(name,email,contact,city,gender,course) values(
   '$name','$email','$contact','$city','$gender','$course')";

   $result = mysqli_query($conn, $query);


   if($result){
    echo "Data inserted";
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
        <br><br>
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
        <label>Digital Marketing</label>
        <input type="checkbox" name="course[]" value="Digital Marketing">
        <label>Web Designing</label>
        <input type="checkbox" name="course[]" value="Web Designing">
        <label>Web Development</label>
        <input type="checkbox" name="course[]" value="Web Development">


        <br><br>
        <input type="submit" name="sub">
    </form>
</body>
</html>