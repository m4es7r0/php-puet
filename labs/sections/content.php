<h2>This is the content section</h2>

<?php

    // $arr = [
    //     0 => 'v1',
    //     '1' => 'v2',
    //     'key123' => 'v3',
    //     10 => 'v4',
    //     3 => 'v5',       
    // ];  
    
    // var_dump($arr);
    // print_r($_GET);

    if (isset($_GET['task'])) {
        $task = filter_var($_GET['task'], FILTER_SANITIZE_NUMBER_INT);        
        
        $filePath = dirname(__FILE__) . "/tasks/task-{$task}.php";

        if ($task && file_exists($filePath)) {
            include($filePath);
        } else {
            include('tasks/task-no-found.php');  
        }

    } else {
        echo 'Key task is not defined!';
    }
    