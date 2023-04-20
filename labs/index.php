<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dmytro Musiichenko">
    <meta name="description" content="PHP course PUET">
    <meta name="keywords" content="HTML, CSS, PHP, JavaScript">

    <title>Practice</title>
    
    <link rel="shortcut icon" href="./assets/Official PHP Logo.svg" type="image/x-icon"/>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="assets/style.css?ver=<?= time(); ?>">
</head>
<body>
    <header>
        <?php include('sections/header.php'); ?>
    </header>
    <main>
        <aside>
            <?php include('sections/sidebar.php'); ?>
        </aside>
        <article>
            <?php include('sections/content.php'); ?>
        </article>
    </main>
    <footer>
        <?php include('sections/footer.php'); ?>
    </footer>
</body>
</html>


<?php

// echo 'Hello from PHP!<hr>';

// include_once('sections/header.php');
// include_once('sections/header.php');