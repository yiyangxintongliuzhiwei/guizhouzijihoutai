<?php
include "db.php";
$name = $_POST['name'];
$pass = $_POST['pass'];
$sql="select * from user";
$result=$db->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);
for($i = 0; $i < count($data); $i++){
    if($data[$i]['name'] == $name){
        if($data[$i]['pass'] == $pass){
            echo '1';
            exit();
        }else{
            echo '2';
            exit();
        }
    }else{
        echo '3';
        exit();
    }
}
