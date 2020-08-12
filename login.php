<?php
session_start();
include('connection.php');

if (isset($_POST['register'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        header('location:loginPage.php?error=registerfillintheblanks');
    } else {
        $query = "SELECT username FROM users WHERE username='".$_POST['username']."';";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        if (mysqli_num_rows($result) != 0) {
            header('location:loginPage.php?error=usernameexisted');
        } else {
            $query = "INSERT INTO users(username,password,rating) VALUES ('".$_POST['username']."','".$_POST['password']."','6');";
            $result = mysqli_query($link,$query) or die (mysqli_error($link));
            if ($result) {
                $_SESSION['User']=$_POST['username'];
                if (isset($_SESSION['currentPage'])) {
                header('location:'.$_SESSION['currentPage'].'?success=registered');
                } else {
                    header('location:index.php?success=registered');
                }
            } else {
                header('location:loginPage.php?error=ihavenoidea');
            }
        }
    }
} else if (isset($_POST['login'])) {
    if (empty($_POST['username'] || empty($_POST['password']))) {
        header('location:loginPage.php?error=loginfillintheblanks');
    } else {
        $query = "SELECT password FROM users WHERE username='".$_POST['username']."';";
        $result = mysqli_query($link,$query);
        if (mysqli_num_rows($result) == 0) {
            header('location:loginPage.php?error=usernamedoesnotexist');
        } else {
            $query = "SELECT * FROM users WHERE username='".$_POST['username']."' and password='".$_POST['password']."';";
            $result = mysqli_query($link,$query);
            if (mysqli_fetch_assoc($result)){
            $_SESSION['User']=$_POST['username'];
            if (isset($_SESSION['currentPage'])) {
                header('location:'.$_SESSION['currentPage'].'?success=login');
                } else {
                    header('location:index.php?success=login');
                }
        } else {
            header('location:loginPage.php?error=passwordincorrect');
        }
        }
    }
} else {
    header('location:loginPage.php?error=ihavenoidea');
}

?>
