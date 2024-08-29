<?php

$connect = mysqli_connect("localhost", "root", "", "aptech");
if(isset($_POST["export"]))
{

    $query = "select * from details";
    $result = mysqli_query($connect,$query);

    echo
'
    <table border="1px">
    <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>City</th>
                <th>Gender</th>
                <th>Courses</th>
    </tr>'
    ;

    while($row = mysqli_fetch_array($result))
    {
        echo'
        <tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["name"].'</td>
        <td>'.$row["email"].'</td>
        <td>'.$row["contact"].'</td>
        <td>'.$row["city"].'</td>
        <td>'.$row["gender"].'</td>
        <td>'.$row["course"].'</td>

        </tr>
        ';
    }
    echo'</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment; filename=download.xls');
}

?>