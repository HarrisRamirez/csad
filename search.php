<?php 
include('connection.php');
session_start();
$_SESSION['currentPage']='forum.php'; 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Forum</title>
        <?php include('websiteHeader.php'); ?>
        
        <!-- Content -->
        <main role="main">
        <div class="jumbotron" style="padding-top:15px;padding-bottom:30px;margin-bottom:0px;background-color: black;color:white">
            <div class="mx-auto">
                <form method="post" action="search.php">
                    <input type="text" name="searchQuery"><button name="search"><img src="images/searchicon.png" height="20" width="20" style="padding:0px;margin-bottom:4px"></button>
                </form>
<?php
if (isset($_POST['search'])) {
    $query = "SELECT * FROM article WHERE articleTitle LIKE '%".$_POST['searchQuery']."%' ORDER BY id DESC";
    $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result)) {
            echo '<div class="row" style="color:black;background-color:white;border-radius:5px;padding:10px;margin-top:10px;margin-bottom:10px">';
            echo '<div class="column" style="width:100%;border:5px">';
            echo '<b>Article Tile: </b>'.$row['articleTitle'].'<br>';
            echo '<b>Submitted by: </b>'.$row['user'].'<br><b>'.$row['time'].'</b><br>';
            echo '<b>Article: </b><br>'.$row['article'].'<br>';
            echo '<img width="60%" src="data:image;base64,'.$row['image'].'"alt="Image" style="padding-top:10px">';
            echo '</div></div>';
        }
    }
else {
    header('location:forum.php');
}


?>
</div>
</div>
<?php include('websiteFooter.php'); ?>