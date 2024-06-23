<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed");

// $s_ql = "SELECT * FROM precticework WHERE LastName = 'Hassan'"; 
// $s_ql = "UPDATE precticework  SET LastName = 'Siddique' WHERE LastName = 'Hassan'";
// $s_ql = "DELETE FROM precticework WHERE id > 2";


$res = mysqli_query($conn, $s_ql);

echo "TOTAL AFFECTED ROWS : " . mysqli_affected_rows($conn);
