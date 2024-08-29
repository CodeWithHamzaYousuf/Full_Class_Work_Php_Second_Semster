<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    if(isset($_POST['search'])){
        $valueToSearch = $_POST['valueToSearch'];
        $query = "SELECT * FROM details WHERE CONCAT(id, name, email, contact, city, gender) LIKE '%".$valueToSearch."%'";
        $search_result = filterTable($query);
    }
    else{
        $query = "SELECT * FROM details";
        $search_result = filterTable($query);
    }
    function filterTable($query){
        include("connection.php");
        $filter_Result = mysqli_query($conn,$query);
        return $filter_Result;
    }
    ?>

    <form action="searchdata.php" method="post">
        <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
        <input type="submit" name="search" value="Filter"><br><br>

        <table border="1px">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>City</th>
                <th>Gender</th>
                <th>Courses</th>
            </tr>

            <?php while($row = mysqli_fetch_array($search_result)){?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
                    <td><?php echo $row[5];?></td>
                    <td><?php echo $row[6];?></td>
                </tr>
                <?php }?>
        </table>
    </form>
    
</body>
</html>