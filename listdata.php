<?php
include "db.php";
$sql="select * from list";
$result=$db->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($data)
?>