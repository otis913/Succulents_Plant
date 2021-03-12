<?php

require_once('./conn.php');

// $result = $conn->query("SELECT * FROM `MEMBER` ");
// if (!$result) {
//   die($conn->error);
// }

// while ($row = $result->fetch_assoc()) {
//   echo "id:" . $row['memberNO'];
// }

$memberNO = $_GET['memberNO'];
$sql = 'SELECT * FROM `MEMBER` WHERE memberNO = 7';
$result = $conn->query($sql );

?>