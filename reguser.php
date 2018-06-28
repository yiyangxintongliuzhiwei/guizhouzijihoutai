<?php
include 'db.php';
$name = $_POST['name'];
$pass = $_POST['pass'];
$sql = "insert into (name, pass) user values ('{$name}', '{$pass}')"
$db->query($sql);
if($db->affected_rows){
    echo 'ok';
}else{
    echo 'error';
}
?>