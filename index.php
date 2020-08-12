<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
session_start();
include('connection.php');
$_SESSION['currentPage']='index.php'; 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Homepage</title>
        <?php include('websiteHeader.php'); ?>
        
        <!-- Content -->
        <main role="main">
        <div class="jumbotron" style="padding-top:15px;padding-bottom:30px;margin-bottom:0px;background-color: black;color:white">
            <div class="mx-auto">
                <?php 
                if (isset($_SESSION['User'])) {
                    if ($_SESSION['User']=="admin"){
                        echo'
                <h1 style="text-decoration:underline">Post an announcement</h1>
                <form method="post" action="announcement.php" enctype="multipart/form-data">
                    <input type="text" name="announcementTitle" placeholder="Type in article title"><br>
                    <textarea name="announcementBox" rows="5" cols="40" placeholder="Type in article"></textarea><br>
                    <input type="file" name="image" accept="image/jpeg">
                    <button name="announcement">Submit</button>
                </form>';
                    }
                }
                echo '<h1>Announcement from website</h1>';
                $query = "SELECT * FROM announcement ORDER BY id DESC";
                $result = mysqli_query($link,$query);
                while ($row = mysqli_fetch_array($result)) {
                    echo '<div class="row" style="color:black;background-color:white;border-radius:5px;padding:10px;margin-top:10px;margin-bottom:10px">';
                    echo '<div class="column" style="width:100%;border:5px">';
                    if (isset($_SESSION['User'])) {
                        if($_SESSION['User']==="admin") {
                        echo '<form method="post" action="announcement.php">';
                        echo "Hello admin click X to delete:";
                        echo '<input type="hidden" name="postID" value="'.$row['id'].'">';
                        echo '<button name="delete" style="float:right">X</button>';
                        echo '</form>';
                    }
                    }
                    echo $row['announcementTitle'].'<br>';
                    echo $row['announcement'].'<br>';
                    echo '<img width="60%" src="data:image;base64,'.$row['image'].'"alt="Image" style="padding-top:10px">';
                    echo '</div></div>';
                }
                
                ?>
            </div>
        </div>
        
        <?php include('websiteFooter.php'); ?>