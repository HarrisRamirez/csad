<?php
session_start();
include('connection.php');

if (isset($_POST['article'])) {
    $image = $_FILES['image']['tmp_name'];
    $name = $_FILES['image']['name'];
    $image = base64_encode(file_get_contents(addslashes($image)));
    $username = $_SESSION['User'];
    $title = $_POST['articleTitle'];
    $paragraph = $_POST['articleBox'];
    date_default_timezone_set("Singapore");
    $whatTime = 'Upload Date: '. date("d/m/Y") . ' Time: ' . date("h:i:sa");
if (empty($paragraph)||empty($title) || empty($image)) {
    header('location:forum.php?error=fillintheblanks');
} else {
    $query = "INSERT into article(articleTitle,article,user,image,time) VALUES('$title','$paragraph','$username','$image','$whatTime')";
    $result = mysqli_query($link, $query);
    if ($result) {
    header("location:forum.php?success=submitted");
    } else {
        header("location:forum.php?error=couldnotsubmit");
    }
}
} else if (isset($_POST['delete'])){
    $query = "DELETE FROM article where id='".$_POST['postID']."';";
    $result = mysqli_query($link,$query);
    if ($result) {
        header('location:forum.php?success=deleted');
    } else {
        header('location:forum.php?error=couldnotdelete');
    }
}
    else {
    header('location:forum.php');
}
