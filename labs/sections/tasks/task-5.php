<?php

$host = 'localhost';
$user = 'root';
$password = 'root';
$db = 'practice';
$port = 3306;

$conn = new mysqli($host, $user, $password, $db, $port);

if ($conn->connect_error) {
    die('DB connection error: ' . $conn->connect_error);
}

$name = "John";
$email = "John@gmail.com";
$message = "hi there";


$where = '';
$filter = '';
  if (isset($_GET['filter'])) {
      $filter = trim(filter_var($_GET['filter'], FILTER_SANITIZE_STRING));

      if ($filter !== '') {
          $where = ' WHERE name LIKE "%'.$filter.'%"';
      }
  }
?>

<div class="form-wrapper">
  <form action="">
    <input type="text" name="filter" id="search" placeholder="Search" value="<?= $filter ?>">
    <input type="hidden" name="task" value="5">
    <button>Search</button>  
  </form>
</div>


<?php

$res = $conn->query('SELECT * FROM users' . $where );
if ($res->num_rows > 0) {

    if ($filter !== '') {
        echo "<p>Active filter: $filter</p>";
    }

    ?>    
    <table style="margin-top:20px; font-size:16px" border=1>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>message</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($r = $res->fetch_assoc()) {
            echo '<tr><td>'.$r['id'].'</td><td>'.$r['name'].'</td><td>'.$r['email'].'</td><td>'.$r['message'].'</td></tr>';
        }
        ?>
        </tbody>
    </table>

    <?php
} else {
    echo '<p>Not found!</p>';
}