<?php
require_once "../db.php";

$blogid = $_POST['blogid'];
$name = $_POST['name'];
$comment = $_POST['comment'];
if (isset($_POST['submit'])) {
	
	$sql = "INSERT INTO `comments`(`name`, `comment`, `blogid`)
    VALUES ('$name','$comment','$blogid')";

    $result=mysqli_query($conn,$sql);


   if($result){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Your comment has been Submitted!</strong>Under Process.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';

  header('location:../blog.php');
    
    
   }

   else{
    die('something went wrong...!');
   }
}




// new

// if (isset($_POST['submit']))  {

//     $subject = $_POST['subject'];
//     $content =   $_POST['content'];

//     $sub = mysqli_query($conn,"insert into pending_list(subject,content,status)value('$subject','$content','pending')");

// if($sub>0){

// echo "your request is  under process! ";
// header("location:../blog.php");

// }
// else
// {

// echo "something went wrong ! ";
// }

   
// }






?>