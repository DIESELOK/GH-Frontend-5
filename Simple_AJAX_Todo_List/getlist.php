<?php

    $str = file_get_contents('tasks.json');
    $json = json_decode($str, true);

    foreach ($json as $item) {
        echo '<li class="task '. $item['status'] .'" id="'. $item['id'] .'">'. $item['task'] .' <button class="done-btn">Done</button> <button class="cancel-btn">Cancel Task</button></li>';
    }