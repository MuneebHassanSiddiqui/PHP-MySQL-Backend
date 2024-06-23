<?php
$st_id = $_GET['id'];
include "config.php";

$deleteData = "DELETE FROM student WHERE sid = '$st_id'";

$result = mysqli_query($conn, $deleteData) or die("QUERY FAILD");

header('location: index.php');
