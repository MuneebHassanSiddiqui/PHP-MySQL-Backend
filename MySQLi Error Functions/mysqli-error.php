<?php
$conn = mysqli_connect("localhost", "root", "", "test") or die("connection fail : " . mysqli_connect_errno());

$_sql = "SELECT * FROM precticework";

$res  = mysqli_query($conn, $_sql) or die('sqlQuery problem : ' . mysqli_error($conn));


// print_r(mysqli_error_list($conn));
// die();


if (mysqli_num_rows($res)  > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        echo "Name : " . $row['Name'] . " " . $row['LastName'] . "<br>";
    }
}
