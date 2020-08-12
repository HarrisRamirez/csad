<?php 
session_start();
$_SESSION['currentPage']='contactUs.php'; 
include('connection.php');
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Us</title>
        <?php include('websiteHeader.php'); ?>
        
        <!-- Content -->
        <main role="main">
        <div class="jumbotron" style="padding-top:15px;padding-bottom:30px;margin-bottom:0px;background-color: black;color:white">
            <div class="mx-auto">
                <h1>Contact Form</h1>
                <form action="feedback.php" method="post">
                    <input style="padding-right:122px"type="text" name="name" placeholder="Name"><br>
                    <input style="padding-right:122px"type="email" name="email" placeholder="name@email.com"><br>
                    <textarea name="feedbackbox" rows="5" cols="40" placeholder="Write feedback"></textarea><br>
                    <button name="feedback">Submit</button>
                </form>
                <?php 
                if (isset($_SESSION['User'])) {
                    if ($_SESSION['User'] == "admin") {
                        $query = "SELECT * FROM feedbackform ORDER BY feedbackid DESC";
                        $result = mysqli_query($link, $query) or die(mysqli_error($link));
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<div class="row" style="color:black;background-color:white;border-radius:5px;padding:10px;margin-top:10px;margin-bottom:10px">';
                            echo '<div class="column" style="width:100%;border:5px">';
                            echo 'Name: '.$row['name'].'<br>';
                            echo 'Email: '.$row['email'].'<br>';
                            echo 'Feedback: '.$row['feedback'].'<br>';
                            echo '</div></div>';
                        }

                    }
                }
                
                ?>
                
            </div>
        </div>
        
        <?php include('websiteFooter.php'); ?>