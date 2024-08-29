<?php
$con = mysqli_connect("localhost", "root", "", "aptech");

if(isset($_POST["query"])){
    $search = $_POST["query"];
    $query = "SELECT * FROM details WHERE CONCAT(id, name, email, contact, city, gender, course) LIKE '%".$search."%'";
}
else{
    $query = "SELECT * FROM details ORDER BY id";
}

$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) > 0){
    echo '
    <table border="1">
     <tr>
     <th>Id</th>
     <th>Customer Name</th>
     <th>Address</th>
     <th>City</th>
    </tr>';
    while($row = mysqli_fetch_array($result)){
        echo '
        <tr>
         <td>'.$row["id"].'</td>
         <td>'.$row["name"].'</td>
         <td>'.$row["email"].'</td>
         <td>'.$row["contact"].'</td>
         </tr>';
    }
}
?>