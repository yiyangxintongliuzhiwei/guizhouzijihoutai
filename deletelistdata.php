<?php
include "db.php";
$id = $_POST['id'];
$sql = "DELETE FROM list WHERE id = $id";
$db->query($sql);
if($db->affected_rows){
    echo 'ok';
}else{
    echo 'error';
}
?>