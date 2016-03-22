<?php

    $myFile = 'tasks.json';
    $tasks = json_decode(file_get_contents($myFile), TRUE);
    $ids_array =array();

    if(!empty($tasks)){
        foreach($tasks as $item){
            array_unshift($ids_array, $item['id']);
        }
        $id = max($ids_array) + 1;
    } else {
        $id = 1;
    }

    $task = $_POST["task"];
    $status = 'new';
    $taskitem = array(
        'id' => $id,
        'task' => $task,
        'status' => $status,
    );
    array_unshift($tasks, $taskitem);

    file_put_contents($myFile, json_encode($tasks), LOCK_EX);

    echo '<li class="task new" id="'. $taskitem['id'] .'">'. $task .' <button class="done-btn">Done</button> <button class="cancel-btn">Cancel Task</button></li>';




