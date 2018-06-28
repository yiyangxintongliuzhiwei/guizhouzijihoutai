<?php
include 'db.php';
$data = $_POST['data'];
$sql = "insert into list (name) values ('{$data}')";
$db->query($sql);
if($db->affected_rows){
    echo 'ok';
}else{
    echo 'error';
}
?>