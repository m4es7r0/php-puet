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

    // http://localhost/ppvz-2023/practice-03/?task=1

    if (isset($_GET['task'])) {
        $task = filter_var($_GET['task'], FILTER_SANITIZE_NUMBER_INT);        

        // echo $task . '<br>';
        // echo $_GET['task'];


        $filePath = "tasks/task-{$task}.php";
        // // TODO необхідно перевірити файл на наявність : DONE

        // // не працюе file_exist  ??? 
        // if(file_exists($filePath)) {
        //     include($filePath);
        // }

        switch ($task) {
            case 1:
                include($filePath);
                break;
            case 2:
                include($filePath);
                break;
            case 3:
                include($filePath);
                break;
            default:
                include('tasks/task-no-found.php');     
        }
    } else {
        echo 'Key task is not defined!';
    }

    // switch () {
    //     case '1':
    //         break;

    //     default:
    // }
    