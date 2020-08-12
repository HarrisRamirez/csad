<?php
session_start();
include('connection.php');

if (isset($_POST['announcement'])) {
    $image = $_FILES['image']['tmp_name'];
    $name = $_FILES['image']['name'];
    $image = base64_encode(file_get_contents(addslashes($image)));
    date_default_timezone_set("Singapore");
    $title = $_POST['announcementTitle']." (<b>".date("d/m/Y")." ".date("h:i:sa")."</b>)";
    $paragraph = $_POST['announcementBox'];
if (empty($paragraph)||empty($title) || empty($image)) {
    header('location:index.php?error=fillintheblanks');
} else {
    $query = "INSERT into announcement(announcementTitle,announcement,image) VALUES('$title','$paragraph','$image')";
    $result = mysqli_query($link, $query);
    if ($result) {
    header("location:index.php?success=submitted");
    } else {
        header("location:index.php?error=couldnotsubmit");
    }
}
} else if (isset($_POST['delete'])){
    $query = "DELETE FROM announcement where id='".$_POST['postID']."';";
    $result = mysqli_query($link,$query);
    if ($result) {
        header('location:index.php?success=deleted');
    } else {
        header('location:index.php?error=couldnotdelete');
    }
}
    else {
    header('location:index.php');
}
