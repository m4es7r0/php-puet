<h2 class="content_page_title">This is the content section</h2>

<?php
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
    