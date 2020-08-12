<?php
include('connection.php');

if (isset($_POST['feedback'])) {
    if (empty($_POST['name'])||empty($_POST['email'])||empty($_POST['feedbackbox'])) {
        header('location:contactUs.php?error=fillintheblanks');
    } else {
        $query = "INSERT INTO feedbackform(name,email,feedback) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['feedbackbox']."');";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        if ($result) {
            header('location:contactUs.php?success=submitted');
        } else {
            header('location:contactUs.php?error=couldnotsubmit');
        }
    }
}

?>