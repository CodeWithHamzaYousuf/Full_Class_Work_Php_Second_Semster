<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;

        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
        }
</style>
</head>
<body>
    <?php
    require("includes/nav.php");
    ?>
    <h1><b>User Details</b></h1>
    <br>
    <table border ="1px">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>City</th>
                <th>Gender</th>
                <th>Courses</th>
                <th>Update data</th>
                <th>Delete data</th>
            </tr>
        </thead>
        <tbody>
            <?php

            require("connection.php");
            $query = "select * from details";
            $result = mysqli_query($conn,$query);

            while($data = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $data[0]?></td>
                    <td><?php echo $data[1]?></td>
                    <td><?php echo $data[2]?></td>
                    <td><?php echo $data[3]?></td>
                    <td><?php echo $data[4]?></td>
                    <td><?php echo $data[5]?></td>
                    <td><?php echo $data[6]?></td>
                    <td><a href="<?php echo 'update.php?
                    xyz='.$data[0].''?>">Update</a></td>
                    <td><a href="<?php echo 'delete.php?
                    xyz='.$data[0].''?>">Delete</a></td>

                </tr>
           <?php } ?>
        </tbody>
    </table>
    <br><br>
    <form  method="post" action="export.php">
        <input class="button1" type="submit" name="export" value="Export">
    </form>
    <form  method="post" action="searchdata.php">
        <input class="button2" type="submit" name="filter" value="Filter">
    </form>

    
</body>
</html>