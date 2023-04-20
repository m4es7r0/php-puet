<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = isset($_POST['cf-name']) ? htmlspecialchars($_POST['cf-name']) : '';
        $email = isset($_POST['cf-email']) ? filter_var($_POST['cf-email'], FILTER_SANITIZE_EMAIL) : '';
        $message = isset($_POST['cf-message']) ? htmlspecialchars($_POST['cf-message']) : '';

        // 1

        if ($name && $email) {
          echo "<p>Name: {$name}</p>";
          echo "<p>Email: {$email}</p>";
          echo "<p>Message: {$message}</p>";
        }

        // 2

        $answer1 = isset($_POST['qf-first-q']) ? htmlspecialchars($_POST['qf-first-q']) : '';
        $answer2 = isset($_POST['qf-second-q']) ? htmlspecialchars($_POST['qf-second-q']) : '';
        $answer3 = isset($_POST['qf-third-q']) ? htmlspecialchars($_POST['qf-third-q']) : '';

        if ($answer1 || $answer2 || $answer3) {
          $score = 0;

          $answer1 === "b" ? $score++ : null;
          $answer2 === "c" ? $score++ : null;
          $answer3 === "a" ? $score++ : null;

          echo "<p>Result: $score/3</p>";
        }

        // TODO: 3

        if(isset($_POST['submit'])){
          $file = $_FILES['file'];
      
          $fileName = $file['name'];
          $fileTmpName = $file['tmp_name'];
          $fileSize = $file['size'];
          $fileError = $file['error'];
          $fileType = $file['type'];
      
          $fileExt = explode('.', $fileName);
          $fileActualExt = strtolower(end($fileExt));
      
          $allowed = array('jpg', 'jpeg', 'png');
      
          if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
              if($fileSize < 500000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'images/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo "<img src='$fileDestination' style='height: 320px' />";
              } else {
                echo "Your file is too big.";
              }
            } else {
              echo "There was an error uploading your file.";
            }
          } else {
            echo "You cannot upload files of this type.";
          }
        }
        

    } else {
        echo 'Error in data!';
    }