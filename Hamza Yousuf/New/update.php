<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
    require("includes/nav.php");
    require("connection.php");

    
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $course = $_POST['course'];
        $c = implode(',',$course);

        $query = "update details set name='$name', email='$email', contact='$contact', city='$city' , gender= '$gender' , course='$c' where id = '$id'";

        $result = mysqli_query($conn,$query);

        if($result){
            header("location:show.php");
        }

        
        else{
            echo "Not Updated";
        }
    }
    else{

    if(isset($_GET['xyz'])){
        $id = trim($_GET['xyz']);

        $query ="Select * from details where id = $id";
        $result = mysqli_query($conn,$query);

        while($data = mysqli_fetch_array($result)){

            $id = $data[0];
            $name = $data[1];
            $email = $data[2];
            $contact = $data[3];
            $city = $data[4];
            $gender = $data[5];
            $course = $data[6];
            $ch = explode(",",$course);


         } }
         else{
            echo " no data to show";        
         }
             
    }
   
         ?>
    
    <form method="post">
        <input type="hidden" name="id"  value="<?php echo $id; ?>">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <br><br>

        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>" >
        <br><br>

        <label>Contact</label>
        <input type="text" name="contact"  value="<?php echo $contact; ?>">
        <br><br>

        <label>City</label>
        <select name="city">
            <option value="karachi" <?php echo $city=="Karachi"?"Selected":"" ?>>Karachi</option>
            <option value="lahore" <?php echo $city=="Lahore"?"Selected":"" ?>>Lahore</option>
            <option value="islamabad" <?php echo $city=="islamabad"?"Selected":"" ?>>Islamabad</option>
        </select>
        <br><br>

        <Label>Gender</Label><br>
        <input type="radio" name="gender" value="male" <?php echo $gender=="male"?"checked":""; ?>/>Male
        <input type="radio" name="gender" value="female" <?php echo $gender=="female"?"checked":""; ?>/>Female
        <br><br>
   

        <label>Courses</label>
        <br>
        <label>Digital Marketing</label>
        <input type="checkbox" name="course[]" value="Digital Marketing" <?php if(in_array("Digital Marketing",$ch)){ echo "checked";}?>/>
        <label>Web Designing</label>
        <input type="checkbox" name="course[]" value="web designin" <?php if(in_array("web designin",$ch)){ echo "checked";}?> >
        <label>Web Developement</label>
        <input type="checkbox" name="course[]" value="web developemen" <?php if(in_array("web developemen",$ch)){ echo "checked";}?> >

        <br><br>
        <input type="submit" name="sub">
        
        
        <!-- <Label>Gender</Label><br>
        <label>Male</label>
        <input type="radio" name="gender" value="male" checked>
        <label>Female</label>
        <input type="radio" name="gender" value="female">
        <br><br> -->
       
    </form>

   



    
</body>
</html>