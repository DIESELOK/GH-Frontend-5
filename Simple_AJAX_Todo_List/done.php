<?php
$myFile = 'tasks.json';
$tasks = json_decode(file_get_contents($myFile), TRUE);

$id = $_POST["id"];

foreach($tasks as &$item){
    if ($id == $item['id']){
        $item['status'] = 'done';
    }
}

file_put_contents($myFile, json_encode($tasks), LOCK_EX);

