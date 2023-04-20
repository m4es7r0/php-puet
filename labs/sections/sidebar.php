<h1>Sidebar</h1>

<ul>
    <?php
      $fileList = glob('sections/tasks/*');

      foreach($fileList as $filename){
      if ($filename === 'sections/tasks/task-no-found.php') continue;
      if(is_file($filename)){
        $number_of_tasks = preg_replace("/[^0-9]/", "",$filename);

        if($number_of_tasks) {
          echo "<li><a href='/practice/labs/?task=$number_of_tasks'>Task $number_of_tasks</a></li>";
        }
      }
      }
?>
</ul>