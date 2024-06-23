<?php
$conn = mysqli_connect('localhost', 'root', '', 'test') or die("CONNCECTION FAILED");


// MYSQLI_FETCH_ASSOC FUNCTION

$_sql = "SELECT * FROM precticework";

$res = mysqli_query($conn, $_sql);

// $row = mysqli_fetch_assoc($res);
// echo "<pre>";
// print_r($row); //this can only give 1st line of your database if you can show all record you can use the loops
// echo "</pre>";
// while ($row = mysqli_fetch_assoc($res)) {
//     echo "<table border = '1px solid' cellspacing = '0px'>";
//     echo "<tr>";
//     echo "<td>" . $row["Name"] . "</td>";
//     echo "<td>" . $row["LastName"] . "</td>";
//     echo "<td>Father Name: " . $row["FatherName"] . "</td>";
//     echo "</tr>";
//     echo "</table>";
// }



//                                     MYSQLI_FETCH_ROW FUNCTION

// $row = mysqli_fetch_row($res);
// echo "<pre>";
// print_r($row);
// echo "</pre>";
// while ($row = mysqli_fetch_row($res)) {
//     echo "<table border = '1px solid' cellspacing = '0px' cellpadding = '10px'> ";
//     echo "<tr>";
//     echo "<td>" . $row[1] . $row[2] .  "</td>";
//     echo "<td>Father Name: " . $row[3] . "</td>";
//     echo "</tr>";
//     echo "</table>";
// }


//                                     //MYSQLI_FETCH_ARRAY
 
// /*
//  * This function can return an associative array or an index array like the following:
//  * Array (
//  *     [0] => 1
//  *     [id] => 1
//  *     [1] => Muneeb
//  *     [Name] => Muneeb
//  *     [2] => Hassan
//  *     [LastName] => Hassan
//  *     [3] => Raess-Ul-Hassan
//  *     [FatherName] => Raess-Ul-Hassan
//  * )
//  */
// INDEX ARRAY DATA
// $row = mysqli_fetch_array($res, MYSQLI_NUM);
// echo "<pre>";
// print_r($row);
// echo "</pre>";
// // ASSOCIATIVE ARRAY DATA
// $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
// echo "<pre>";
// print_r($row);
// echo "</pre>";
//  while ($row = mysqli_fetch_array($res)) {
//     echo "<table border = '1px solid' cellspacing = '0px' cellpadding = '10px'> ";
//     echo "<tr>";
//     echo "<td>" . $row[1] . $row['LastName'] .  "</td>";
//     echo "<td>Father Name: " . $row[3] . "</td>";
//     echo "</tr>";
//     echo "</table>";
// }

//                                       MYSQLI_FETCH_ALL

// $row = mysqli_fetch_all($res,MYSQLI_ASSOC);
// echo "<pre>";
// print_r($row);
// echo "</pre>";
// $row = mysqli_fetch_all($res,MYSQLI_NUM);
// echo "<pre>";
// print_r($row);
// echo "</pre>";
// $row = mysqli_fetch_all($res, MYSQLI_BOTH);
// echo "<pre>";
// print_r($row);
// echo "</pre>";
// foreach ($row as $Data) {
//     echo "<table border = '1px solid' cellspacing = '0px'>";
//     echo "<tr><th>Name</th><th>Father Name</th></tr>";
//     echo "<tr>";
//     echo "<td>" . $Data["Name"] .  $Data["LastName"] . "</td>";
//     echo "<td>Father Name: " . $Data["FatherName"] . "</td>";
//     echo "</tr>";
//     echo "</table>";
// }

//                                        // MYSQLI_FETCH_FIELD

// $row = mysqli_fetch_field($res);
// echo "<pre>";
// print_r($row);
// echo "</pre>";

// while ($field = mysqli_fetch_field($res)) {
//     echo $field->name . "<br>" . $field->length . "<br>";
// }
