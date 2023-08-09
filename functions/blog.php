<?php

require_once "../db.php";

$title = $_POST['title'];
$author = $_POST['author'];
$content = $_POST['content'];
$date = $_POST['date'];

if (isset($_POST['submit'])) {
	
	$sql = "INSERT INTO posts(title, author, content,date)
    VALUES (?,?,?,?)";

    $stmt = $db->prepare($sql);


    try {
      $stmt->execute([$title, $author, $content,$date]);
      header('Location:../blog.php?sent');
      // echo "DONE!!";

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }	

}






?>