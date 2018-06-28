<?php
include "db.php";
$id = $_POST['id'];
$data = $_POST['data'];
$sql = "UPDATE list SET name = '{$data}' WHERE id = $id";
$db->query($sql);
if($db->affected_rows){
    echo 'ok';
}else{
    echo 'error';
}
?>