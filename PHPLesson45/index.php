<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson45</title>

    <style>
        table{
            width: 50%;
            border-collapse: collapse;
        }
        th,td{
            padding: 30px;
            text-align: left;
            border: 1px solid;
        }

        th{
            background-color: lightblue;
            font-weight: bold;
        }
    </style>

    <table border = "1">
    <tr>
        <th>Brand</th>
        <th>Origin</th>
        <th>Year</th>
    </tr>
</html>

<?php
// echo "lesson45";

$cars = array(
    array("BMW", "Germany", 2020),
    array("Fiat", "France", 2017),
    array("Audi", "Germany", 2024),
);

// echo $cars[0][0]. " -  " .$cars[0][1]. ", Year " .$cars[0][2]. "<br>";
// echo $cars[1][0]. " -  " .$cars[1][1]. ", Year " .$cars[1][2]. "<br>";
// echo $cars[2][0]. " -  " .$cars[2][1]. ", Year " .$cars[2][2]. "<br>";


for($row=0; $row<3; $row++){
    echo "<tr>";
for($col = 0; $col<3; $col++){
    echo "<td>". $cars[$row][$col]. "</td>";
}
echo "</tr>";
}

echo "</table>";
?>